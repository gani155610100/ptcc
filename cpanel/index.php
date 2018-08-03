<?php
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
<link rel="stylesheet" href="bootstrap/css/1.css">
</head>

<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
           <h2> Control Panel <h2/>
        </div>
 
    </div>
</div>

<div class="container">
<div class="row">
<div class="table-responsive">
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
               
                   <th>No</th>
			
                    <th>Nama Lokasi</th>
                     <th>Jalan</th>
                     <th>Latitude</th>
                     <th>Longitude</th>
                      <th>Action</th>
                   </thead>
	<?php
		include('bckp2.php');
		  $dataPerPage = 10;
		  if(isset($_GET['page']))
		  {
			 $noPage = $_GET['page'];
		  }
		  else $noPage = 1;
		$offset = ($noPage - 1) * $dataPerPage;
		$query = mysql_query("SELECT * FROM lokasi ORDER BY id_lokasi LIMIT $offset, $dataPerPage ") or die(mysql_error());
		if(mysql_num_rows($query) == 0){
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
		}else{
			$no = 1;
			while($data = mysql_fetch_assoc($query)){
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['nama_lokasi'].'</td>';	
					echo '<td>'.$data['jalan'].'</td>';	
					echo '<td>'.$data['lat'].'</td>';	
					echo '<td>'.$data['lng'].'</td>';	
					echo '<td><a class="btn btn-primary btn-xs" href="edit.php?id='.$data['id_lokasi'].'">Edit</a>  <a class="btn btn-danger btn-xs" href="hapus.php?id='.$data['id_lokasi'].'" onclick="return confirm(\'Apakah Anda Yakin?\')">Delete</a></td>';
				echo '</tr>';
				$no++;	
			}
		}
		$query = "SELECT COUNT(*) AS jumData FROM lokasi";
		$hasil = mysql_query($query);
		$data = mysql_fetch_array($hasil);

		$jumData = $data['jumData'];
		$jumPage = ceil($jumData/$dataPerPage);

        echo "<ul class='pagination'>";
        if ($noPage > 1) echo  "<li><a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'><< Prev</a></li>";
        for($page = 1; $page <= $jumPage; $page++)
        {
            if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
            {
			  $showPage = $page;
              if (($showPage == 1) && ($page != 2))  echo "<li class='disabled'></li>";
              if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "<li class='disabled'></li>";
              if ($page == $noPage) echo "<li class='active'><a href='#'>".$page."</a></li>";
              else echo "<li><a href='".$_SERVER['PHP_SELF']."?page=".$page."'>".$page."</a></li>";
              
            }
        }

        if ($noPage < $jumPage) echo "<li><a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'>Next >></a></li>";

        echo "</ul>";
		
	?>
		
    </table>
	<a class="btn btn-success loading" href="addnew.php">Add New</a>
	<a class="btn btn-success loading" href="all.php">All Map</a>
	<a class="btn btn-success loading" href="poly.php">Polygon</a>
</div>	



<div class="alert alert-info">
   <strong></strong> <a href="../logout.php">Log Out</a>
</div>

</div>


<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>