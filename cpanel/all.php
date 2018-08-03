<?php
	include "bckp2.php";
	session_start();
	if(!isset($_SESSION["username"])){
		header("Location: ../login/index.html");
		exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<title>Control Panel</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<style>
      #map-canvas {
        width: 1150px;
        height: 500px;
      }
    </style>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
	
    <script>
    var marker;
      function initialize() {
		  
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP

        }     
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var infoWindow = new google.maps.InfoWindow;      
        var bounds = new google.maps.LatLngBounds();
		
 
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
 
          function addMarker(lat, lng, info) {
            var pt = new google.maps.LatLng(lat, lng);
			
            bounds.extend(pt);
            var marker = new google.maps.Marker({
                map: map,
                position: pt,
				
				
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
          }
 
          <?php
            $query = mysql_query("SELECT * FROM agama,kabupaten,lokasi
			WHERE kabupaten.id_kab=lokasi.id_kab AND agama.id_agm=lokasi.id_agm");
          while ($data = mysql_fetch_array($query)) {
            $lat = $data['lat'];
            $lon = $data['lng'];
            $nagm = $data['nama_agm'];
			$nkab = $data['nama_kab'];
			$nlok = $data['nama_lokasi'];
			$jln = $data['jalan'];
			$photo = $data['image'];
            echo ("addMarker($lat, $lon, '<img width=200px src=../cpanel/user_images/$photo><br/><b>$nlok</b><br/>$jln');\n");                        
          }
          ?>
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>

<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
           <h2> View All Map  <h2/>
        </div>
 
    </div>
</div>

<div class="container">
<div class="row">
<div class="table-responsive">

                
             <div id="map-canvas"></div><br/>
	<h1 class="h2"><a class="btn btn-warning" href="index.php">Back</a></h1>
</div>	



<div class="alert alert-info">
   <strong></strong> <a href="../logout.php">Log Out</a>
</div>

</div>


<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>