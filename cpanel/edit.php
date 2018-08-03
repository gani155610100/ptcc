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
<title>Control Panel</title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

</head>
<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php" title='Programming Blog'>Home</a>
        </div>
 
    </div>
</div>

<div class="container">
	<div class="page-header">
    	<h1 class="h2"><a class="btn btn-default" href="index.php"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; view all </a></h1>
    </div>
<?php
	include('bckp2.php');
	$id = $_GET['id'];
	$show = mysql_query("SELECT * FROM lokasi WHERE id_lokasi='$id'");
	if(mysql_num_rows($show) == 0){
		echo '<script>window.history.back()</script>';
		
	}else{
		$data = mysql_fetch_assoc($show);
	}
	?>
<form action="edit_proses.php" method="post" enctype="multipart/form-data" class="form-horizontal">
	   <input type="hidden" name="id" value="<?php echo $data['id_lokasi']; ?>"/>
	<table class="table table-bordered table-responsive">
	
    <tr>
    	<td><label class="control-label">Nama Tempat Ibadah</label></td>
        <td><input class="form-control" type="text" name="tempat" value="<?php echo $data['nama_lokasi']; ?>"  /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">Jalan</label></td>
        <td><input class="form-control" type="text" name="jln"  value="<?php echo $data['jalan']; ?>" /></td>
    </tr>
	<tr>
    	<td><label class="control-label">Longitude</label></td>
        <td><input class="form-control" type="text" name="lng"  value="<?php echo $data['lng']; ?>" /></td>
    </tr>
	<tr>
    	<td><label class="control-label">Latitude</label></td>
        <td><input class="form-control" type="text" name="lat" value="<?php echo $data['lat']; ?>"  /></td>
    </tr>
    <tr>
				<td><label class="control-label" >Tempat Ibadah</label></td>
				
				<td>
					<select name="idagm" class="form-control"  required>
						<option value="">Pilih Kategori Tempat Ibadah</option>
						<option value="1" <?php if($data['id_agm'] == '1'){ echo 'selected'; } ?>>Masjid</option>
						<option value="2" <?php if($data['id_agm'] == '2'){ echo 'selected'; } ?>>Gereja</option>
						<option value="3" <?php if($data['id_agm'] == '3'){ echo 'selected'; } ?>>Pura</option>
					</select>
				</td>
	</tr>
	 <tr>
				<td><label class="control-label" >Kabupaten</label></td>
				
				<td>
					<select name="idkab" class="form-control" required>
						<option value="">Pilih Kabupaten</option>
						<option value="1" <?php if($data['id_kab'] == '1'){ echo 'selected'; } ?>>Sleman</option>
						<option value="2" <?php if($data['id_kab'] == '2'){ echo 'selected'; } ?>>Bantul</option>
					</select>
				</td>
	</tr>
    <tr>
    	<td><label class="control-label">Image</label></td>
        <td><input class="input-group" type="file" name="user_image"/>
		</td>
	</tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="simpan" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; Ubah
        </button>
        </td>
    </tr>
    </table>
</form>
<div class="alert alert-info">
    <strong></strong> <a href="../logout.php">Log Out</a>
</div>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>