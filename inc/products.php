<?php

function get_list_view($product_id, $product){
   
   $output = "";
            
            $output = $output . '<div class="span4">';
              $output = $output .'<h2>';
              $output = $output . $product[name];
              $output = $output .'</h2>';
              $output = $output .'<p>';
              $output = $output . $product[price];
              $output = $output .'</p>';
              $output = $output .'<p>';
			  $output = $output .'<p><a class="btn" href="product.php?id=' . $product_id . '">View details &raquo;</a></p>';	
			$output = $output .'</div>';




return $output;
}





$products = array();
$products[101] = array(
	"name" => "Basic Website",
	"img" => "#",
	"price" => 1000,
	"page" =>"#",
);
$products[102] = array(
	"name" => "Average Website",
	"img" => "#",
	"price" => 5000,
	"page" =>"#",
);
$products[103] = array(
	"name" => "Advanced Website",
	"img" => "#",
	"price" => "TBD",
	"page" =>"#",	
);

?>