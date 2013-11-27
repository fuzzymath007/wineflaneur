<?PHP 
$pageTitle = "Home";
require_once('inc/config.php');
include(ROOT_PATH . 'inc/header.php'); ?>

<style type = 'text/css'>
.navbar {display: none;}
.navbar:hover{display: inline; }
</style>


<body> 

<div class="feature">
	<h1>Welcome</h1>
	<h3>What would you like to view?</h3>
		<p>
			<a href="<?php echo BASE_URL; ?>inc/resume.pdf" class="btn btn-large btn-primary" type="button">View Resume</a>
			<a href="<?php echo BASE_URL; ?>current_projects/" class="btn btn-large" type="button">View Current Projects</a>
		</p>
		<p>
		<a href="http://blog.wineflaneur.com" class="btn btn-large" type="button">View Blog</a>
		</p>
	</div> 
	
	<div class="feature">
	<h3>Links to Social Networks</h3>
	<a href="http://www.twitter.com/fuzzymath007" ><img src="<?php echo BASE_URL;?>/inc/img/twitter.png" height="100px" width="100px">Visit Matthew Chess @Twitter</a>
	<a href="http://www.linkedin.com/in/matthewchess" ><img src="<?php echo BASE_URL;?>/inc/img/linkedin.png" height="100px" width="100px">Visit Matthew Chess on Linked In</a>
	<a href="http://github.com/fuzzymath007" ><img src="<?php echo BASE_URL;?>/inc/img/github.png" height="150px" width="150px">View coding projects on Github</a>
	</div>
</body>

 
 
 
 <? include(ROOT_PATH . 'inc/footer.php'); ?>
