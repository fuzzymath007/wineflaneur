<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=trim($_POST["name"]);
    $email=trim($_POST["email"]);
    $message=trim($_POST["message"]);
    if($name=="" OR $email=="" OR $message==""){
        $error_message="You must specify a value for your name, email and message.";
    }
    if(!isset($error_message)){
        foreach($_POST as $value){
            if(stripos($value,'Content-Type:')!==FALSE){
                $error_message="There was a problem with the information you entered.";
            }
        }
    }
    if(!isset($error_message) && $_POST["address"]!=""){
        $error_message="Your form submission has an error.";
    }
    require_once('/class.phpmailer.php');
    $mail=newPHPMailer();
    if(!isset($error_message) && !$mail->ValidateAddress($email)){
        $error_message="You must specify a valid email address.";
    }
    if(!isset($error_message)){
        $email_body="";
        $email_body=$email_body."Name: ".$name."<br>";
        $email_body=$email_body."Email: ".$email."<br>";
        $email_body=$email_body."Message: ".$message;
        $mail->SetFrom($email,$name);
        $address="mchess@umich.edu";
        $mail->AddAddress($address,"MC");
        $mail->Subject="Contact Matt | ".$name;
        $mail->MsgHTML($email_body);
        if($mail->Send()){
            header("Location: contact.php?status=thanks");
            exit ;
        }
        else{
            $error_message="There was a problem sending your email: ".$mail->ErrorInfo;
        }
    }
}
?><?php
$pageTitle="Contact Matt";
$section="contact";
require_once('../inc/config.php');
include(ROOT_PATH . 'inc/header.php');
?>
<!DOCTYPE html>

<html>
<head>
    <title></title>
</head>

<body>
    <div class="section page">
        <div class="wrapper">
            <h1>Contact</h1><?php
                        if($_GET["status"]=="thanks"){
                            ?>

            <p>Thanks for the email!</p><?php
                        }
                        else{
                            ?><?php
                            if(!isset($error_message)){
                                echo '<p>I&rsquo;d love to hear from you! Complete the form to send me an email.</p>';
                            }
                            else{
                                echo '<p class="alert">'.$error_message.'</p>';
                            }
                            ?>

            <form action="contact.php" method="post">
                <table>
                    <tr>
                        <th><label for="name">Name</label></th>

                        <td><input class="required" id="name" name="name" type=
                        "text" value=
                        "<?php if(isset($name)){ echo htmlspecialchars($name); } ?> ">
                        <span>Please enter your name</span></td>
                    </tr>

                    <tr>
                        <th><label for="email">Email</label></th>

                        <td><input class="required" id="email" name="email"
                        type="text" value=
                        "<?php if(isset($email)){ echo htmlspecialchars($email); } ?> ">
                        <span>Please enter your Email</span></td>
                    </tr>

                    <tr>
                        <th><label for="message">Message</label></th>

                        <td>
                        <textarea class="required" id="message" name="message">
<?php
                                    if(isset($message)){
                                        echo htmlspecialchars($message);
                                    }
                                    ?>
</textarea> <span>Please enter your message</span></td>
                    </tr>

                    <tr style="display: none;">
                        <th><label for="address">Address</label></th>

                        <td>
                            <input id="address" name="address" type="text">

                            <p>DO not fill out this field</p>
                        </td>
                    </tr>

                    <tr>
                        <th><input type="submit" value="Send"></th>
                    </tr>
                </table>
            </form><?php
                        }
                        ?>
        </div>
    </div><script src="<?php echo BASE_URL; ?>inc/js/jquery.js"> type="text/javascript"></script> <script type="text/javascript">
    var $submit=$("submit input");
        var $required=$(".required");
        function containsBlanks(){
            var blanks=newArray();
            $required.each(function (){
                blanks.push($(this).val=="");
            });
            returnblanks.indexOf(true)!=-1;
        }
        function isValidEmail(email){
            returnemail.indexOf("@")!=-1;
        }
        function requiredFilledIn(){
            if(containsBlanks() || !isValidEmail($("#email").val()))$submit.attr("disabled","disabled");
            else$submit.removeAttr("disabled");
        }
        $("form span").hide();
        $("input, textarea").focus(function (){
            $(this).next().fadeIn("slow");
        }).blur(function (){
            $(this).next().fadeOut("slow");
        }).keyup(function (){
            //Check all required fields.
            requiredFilledIn();
        });
        $("#email").keyup(function (){
            //check for a valid email.
            if(isValidEmail($(this).val()))$(this).next().removeClass("error").addClass("valid");
            else$(this).next().removeClass("valid").addClass("error");
        });
        requiredFilledIn();
    </script><?php
  include(ROOT_PATH . 'inc/footer.php')?>
</body>
</html>