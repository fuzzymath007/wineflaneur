<?PHP 
$pageTitle = "Current Projects";
require_once('../inc/config.php');
include(ROOT_PATH . 'inc/header.php'); ?>
<body>
<div class="container-fluid">
<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
  <div class="carousel-inner">
    <div class="item active"><!-- class of active since it's the first item -->
      <img src="<?php echo BASE_URL; ?>inc/img/handmadecms.png" alt="" />
      <div class="carousel-caption">
        <p>Working! (but under construction!)</p>
        <a class="btn btn-info" href="display.php">Click to View</a>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo BASE_URL; ?>inc/img/contact_form.png"/>
      <div class="carousel-caption">
        <!--<p>Contact Form</p>-->
        <a class="btn btn-info" href="contact.php">Click to View</a>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo BASE_URL; ?>inc/img/google_maps.png" alt="" />
      <div class="carousel-caption">
        <!--<p>Google Maps API</p>-->
        <a class="btn btn-info" href="location.php">Click to View</a>
      </div>
    </div>
  </div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel -->
    <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
</div>
<div class="row-fluid">
  <div class="span12">
    <h1>Home of my current projects</h1>
    <div class="row-fluid">
      <div class="span6">
        <p>This is a site I made to learn and play with different web design and development topics. As I grow as a developer this site will grow with me, and also will not look as dull.
      </div>
      <div class="span6">
      <p>This site's code is also hosted on github that you can accuses anytime by going to <a href="https://github.com/fuzzymath007/wineflaneur">Github</a> and checking out the project. My comments and commits are free to view and to comment on. I also invite anyone to submit a bug or request if you think the site needs something. (It needs a lot more work)</p>
      </div>
    </div>
  </div>
</div>
</div>
</body>

<script>
  $(document).ready(function(){
    $('.carousel').carousel();
  });
</script>


<script src="<?php echo BASE_URL; ?>inc/js/bootstrap.min.js"></script>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>
