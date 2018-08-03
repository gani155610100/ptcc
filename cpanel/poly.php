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
	
    <script>
    var map;
      var infoWindow;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map-canvas'), {
          zoom: 15,
          center: {lat: -7.792681, lng: 110.4056863},
          mapTypeId: 'terrain'
        });

        // Define the LatLng coordinates for the polygon.
        var masjid = [
            {lat: -7.7890914, lng: 110.4065619},
            {lat: -7.789119, lng: 110.406629},
            {lat: -7.789133, lng: 110.406493}
        ];

        // Construct the polygon.
        var msjd = new google.maps.Polygon({
          paths: masjid,
          strokeColor: '#FF11111',
          strokeOpacity: 0.8,
          strokeWeight: 3,
          fillColor: '#0000FF',
          fillOpacity: 0.35
        });
		 // Define the LatLng coordinates for the polygon.
        var pura = [
            {lat: -7.7945788, lng: 110.4016262},
            {lat: -7.7945971, lng: 110.401302},
            {lat: -7.794423, lng: 110.401372},
        ];

        // Construct the polygon.
        var pra = new google.maps.Polygon({
          paths: pura,
          strokeColor: '#FF11111',
          strokeOpacity: 0.8,
          strokeWeight: 3,
          fillColor: '#40FF00',
          fillOpacity: 0.35
        });
		var gereja = [
            {lat: -7.792888, lng: 110.3931529},
            {lat: -7.792881, lng: 110.393455},
            {lat: -7.792692, lng: 110.393436}
        ];

        // Construct the polygon.
        var grj = new google.maps.Polygon({
          paths: gereja,
          strokeColor: '#FF11111',
          strokeOpacity: 0.8,
          strokeWeight: 3,
          fillColor: '#FFFF00',
          fillOpacity: 0.35
        });
		msjd.setMap(map);
        grj.setMap(map);
		pra.setMap(map);
        // Add a listener for the click event.
		grj.addListener('click', showArrays);
        msjd.addListener('click', showArrays);
		pra.addListener('click', showArrays);

        infoWindow = new google.maps.InfoWindow;
      }

      /** @this {google.maps.Polygon} */
      function showArrays() {
        // Since this polygon has only one path, we can call getPath() to return the
        // MVCArray of LatLngs.
        var vertices = this.getPath(msjd,pra,grj);

        

        // Iterate over the vertices.
        for (var i =0; i < vertices.getLength(); i++) {
          var xy = vertices.getAt(i);
          contentString += '<br>' + 'Coordinate ' + i + ':<br>' + xy.lat() + ',' +
              xy.lng();
        }

        // Replace the info window's content and position.
        infoWindow.setContent(contentString);
     

        infoWindow.open(map);
      }
    </script>
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCXhzqqDDjq0pCAUsMlhqVHCmogysHMaQ&callback=initMap">
    </script
</head>

<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
           <h2> View Polygon  <h2/>
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