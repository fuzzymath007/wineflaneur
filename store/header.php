<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="header">
		<div class="wrapper">

	<h1 class="brand"><a href="./"><Matthew Chess</a></h1>


		<ul class="nav">
			<li class="design <?php if ($pageTitle == "design") {echo "on";} ?>"><a href="design.php">Design</a></li>
			<li class="development <?php if ($pageTitle == "development") {echo "on";} ?>"><a href="development.php">Development</a></li>
			<li class="programing <?php if ($pageTitle == "programing") {echo "on";} ?>"><a href="programing.php">Programing</a></li>
			<li class="cart <?php if ($pageTitle == "cart") {echo "on";} ?>"><a href="cart.php">Cart</a></li>

		</ul>

		</div>


</div>


</body>
