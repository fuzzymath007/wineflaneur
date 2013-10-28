<?php
$pageTitle = "development";
 include('header.php');
 
$hour = date('G');
if ($hour < 12 ) {
	
	echo "Good Morning!";
	
}else{
	echo "Good Afternoon!";
}
?>
