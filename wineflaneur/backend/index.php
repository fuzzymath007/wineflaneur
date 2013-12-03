<?PHP
$pageTitle="Development";
include('inc/header.php');
require_once('../inc/config.php');
include(ROOT_PATH . 'inc/header.php');
?>

<div class="container-fluid">
	<div class="feature">
		<h2>
			PHP Stores
		</h2>
		<p>
			This PHP project is to understand how to write effective php to generate html and insert projects from an array.
		</p>
		<img src="<?php echo BASE_URL; ?>inc/img/sample_store.png" alt="sample_store" width="500 px" height=""/><a href="<?php echo BASE_URL; ?>backend/store/" class="btn btn-primary btn-large">
			Check It Out&raquo;
		</a>
		<h2>
			Basic CMS
		</h2>
		<p>
			Another PHP project I used to get a better understanding of objects, methods, and classes.
		</p>
		<img src="<?php echo BASE_URL; ?>inc/img/cms.png" alt="sample_store" width="500 px" height=""/><a href="<?php echo BASE_URL; ?>backend/CMS/" class="btn btn-primary btn-large">
			Check It Out&raquo;
		</a>
	</div>
</div>
<?php
include(ROOT_PATH . 'inc/footer.php');
?>