<?php 
$pageTitle = "Location";
$section = "location";
include('inc/header.php'); ?>

<p class-="static_map">
	<img src="http://maps.googleapis.com/maps/api/staticmap?key=AIzaSyBn_ImXhuUta6PSuoXTuzVoM99mtWffefk&sensor=false&size=400x300&markers=Ann+Arbor" alt="Ann Arbor">
</p>

<div id="map">
</div>

	
	<script type="text/javascript" src="inc/js/jquery.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBn_ImXhuUta6PSuoXTuzVoM99mtWffefk&sensor=false"></script>
	<script type="text/javascript">
	$(".static_map").remove();
		var map;
		var center;
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(42.281, -83.748),
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map"),
            mapOptions);
      }
	  initialize();
	  
	  google.maps.event.addDomListener(map, "idle", function(){
	  	center = map.getCenter();
	  	});
	  	
	  $(window).resize(function(){
		  map.setCenter(center);
	  });
		  
    </script>
    
    
<!--At some point add prepend to get rid of the static map, for now I want to keep it-->
    
    
	
	
	


