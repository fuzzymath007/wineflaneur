<?PHP 
$pageTitle = "Current Projects";
include('inc/header.php'); ?>
<body>
<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
  <div class="carousel-inner">
    <div class="item active"><!-- class of active since it's the first item -->
      <img src="http://placehold.it/1500x550" alt="" />
      <div class="carousel-caption">
        <p>Caption text here</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1500x550" alt="" />
      <div class="carousel-caption">
        <p>Caasdfe</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1500x550" alt="" />
      <div class="carousel-caption">
        <p>Casdfgsdfgere</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1500x550" alt="" />
      <div class="carousel-caption">
        <p>Captsdfe</p>
      </div>
    </div>
  </div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel -->
    <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
</div>
</body>

<script>
  $(document).ready(function(){
    $('.carousel').carousel();
  });
</script>


<script src="/bootstrap.min.js"></script>
<?php include('inc/footer.php'); ?>
