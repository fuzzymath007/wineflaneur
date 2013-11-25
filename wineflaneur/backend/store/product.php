<?PHP 
$pageTitle = $product["name"];
require_once('../../inc/config.php');
include(ROOT_PATH . 'inc/header.php') 
include(BASE_URL . 'backend/store/list_of_products.php');


if (isset($_GET["id"])){
	$product_id = $_GET["id"];
	if (isset($products[$product_id])) {
		$product = $products[$product_id];

		}
	}
	if (!isset($product)){
		header("Location: sample_store.php");
		exit();
	}

?>

<ul class="breadcrumb">
  <li><a href="/development.php">Development</a> <span class="divider">/</span></li>
  <li><a href="/sample_store.php">Products</a> <span class="divider">/</span></li>
  <li class="active"> <? echo $product['name']; ?></li>
</ul>



 <? include('/footer.php'); ?>
 
 
 
 <!-- testing
 
 <pre><?php

echo $product_id . "\n";
var_dump($product);

?></pre>


other testing code for if else statmetns

if (isset($_GET["id"])){
	$product_id = $_GET["id"];
	if (isset($products[$product_id])) {
		$product = $products[$product_id];
		echo "I have that product.";
}else{
	echo "I have that product ID, but it is invalid.";
}

}else{
	echo "I do not have that product.";
}
exit();



-->