<?php
  include "bckp2.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>SIG</title>
		<link href='http://www.landsystems.co.nz/portals/0/icon-large-map-marker.png' rel='shortcut icon'>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link href="css/simple-sidebar.css" rel="stylesheet">
	<style>
		#map-canvas {
			width: 1350px;
			height: 479px;
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
				icon: 'ico/masjid.png'
				
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
          }
          <?php
            $query = mysql_query("SELECT * FROM agama,kabupaten,lokasi
			WHERE kabupaten.id_kab=lokasi.id_kab AND agama.id_agm=lokasi.id_agm AND lokasi.id_agm='1' AND lokasi.id_kab='3'");
          while ($data = mysql_fetch_array($query)) {
            $lat = $data['lat'];
            $lon = $data['lng'];
            $nagm = $data['nama_agm'];
			$nkab = $data['nama_kab'];
			$nlok = $data['nama_lokasi'];
			$jln = $data['jalan'];
			$photo = $data['image'];
			$code = $data['id_lokasi'];
            echo ("addMarker($lat, $lon, '<img width=200px src=cpanel/user_images/$photo><br/><b>$nlok</b><br/>$jln<br/><b><a href=info.php?id_lokasi=$code>Info Tempat</a></b>');\n");                        
          }
          ?>
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	</head>
<body>
<div class="clearfix">
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" id="collapse navbar-collapse" id="navbarExample">
            <ul class="sidebar-nav" class="sidebar-nav navbar-nav">
                <li class="sidebar-brand">
                    <a href="">
                        Tempat Ibadah
                    </a>
                </li>
				<li>
                    <a href="terangkanlah.pe.hu">Dashboard</a>
                </li>
                <li  data-toggle="collapse" data-target="#bantul" class="collapsed active">
                  <a href="#">Bantul<span class="caret"></span></a>
                </li>
                <ul class="sub-menu collapse"  id="bantul" >
                    <li class="list-unstyled"><a href="mbantul.php">Masjid</a></li>
                    <li class="list-unstyled"><a href="gbantul.php">Gereja</a></li>
                    <li class="list-unstyled"><a href="pbantul.php">Pura</a></li>
                    
                </ul>
                 <li  data-toggle="collapse" data-target="#sleman" class="collapsed active">
                  <a href="#">Sleman<span class="caret"></span></a>
                </li>
                <ul class="sub-menu collapse"  id="sleman" >
                    <li class="list-unstyled"><a href="msleman.php">Masjid</a></li>
                    <li class="list-unstyled"><a href="gsleman.php">Gereja</a></li>
                </ul>
                 <li  data-toggle="collapse" data-target="#kota" class="collapsed active">
                  <a href="#">Kota<span class="caret"></span></a>
                </li>
                <ul class="sub-menu collapse"  id="kota" >
                    <li class="list-unstyled"><a href="mkota.php">Masjid</a></li>
                    <li class="list-unstyled"><a href="gkota.php">Gereja</a></li>
                </ul>
                <li>
                    <a href="login/">Login</a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Peta Tempat Ibadah Wilayah Kota</h1>
                        <div id="map-canvas"></div><br/>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
</html>
