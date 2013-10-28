<?php
$pageTitle = "MC Dev";
 include('header.php'); ?>


<body>
<p>The current server time is <?php echo date("H,i:s a"); ?>.</p>
<p2>&copy;<?php echo date("Y"); ?></p2>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php $hour = date('G');
if ($hour <= 12 ) {
	
	echo "Good Morning!";
	
}else{
	echo "Good Afternoon!";
}
?>

<h1>As I am under development use this form to email me</h1>

<div>
                <form method="post" action="contact.php">

                    <table>
                        <tr>
                            <th>
                                <label for="name">Name</label>
                            </th>
                            <td>
                                <input type="text" name="name" id="name">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">Email</label>
                            </th>
                            <td>
                                <input type="text" name="email" id="email">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="message">Message</label>
                            </th>
                            <td>
                                <textarea name="message" id="message"></textarea>
                            </td>
                        </tr>                    
                    </table>
                    <input type="submit" value="Send">
                </form>
</div>

                








</body>


<? include('footer.php'); ?>