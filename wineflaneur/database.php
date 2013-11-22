<?php

try{
	$db = new PDO("mysql:host=wineflaneur.com;dbname=test_cms","admin_cms","matt2904");
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'UTF8'");
	
} catch (Exception $e){
	echo("Could not connect to the database.");
	exit;
}

try{$results = $db->query("SELECT name, price, img, sku, paypal FROM products ORDER BY sku ASC");

}
catch(Exception $e){echo "No good";
	exit;
}

echo"<pre>";
var_dump($results->fetchAll(PDO::FETCH_ASSOC));

?>
