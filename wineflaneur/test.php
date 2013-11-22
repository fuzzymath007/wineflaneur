<?PHP 
$pageTitle = "Test";
include('inc/header.php'); 
include('inc/products.php');

?>


<?php 

$total_products = count($products);
//This var is to keep track of the number of products it has looped through
$position = 0;
$list_view = "";
foreach($products as $product_id => $product){
//This will add one to the position var to always know where we are in the array
	$position = $position + 1;
	if ($total_products - $position < 2){
	$list_view = $list_view . get_list_view($product_id,$product);
	}
}
echo $list_view;
?>

