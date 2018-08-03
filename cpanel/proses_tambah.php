<?php
if(isset($_POST['tambah'])){
	include('bckp2.php');
	$idAgm = $_POST['idagm'];// 
		$idKab = $_POST['idkab'];// 
		$tempat = $_POST['tempat'];//
		$jalan = $_POST['jln'];//
		$lat = $_POST['lat'];//
		$lng = $_POST['lng'];//
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
		
		if(empty($idAgm)){
			$errMSG = "Please Enter Agama.";
		}
		else if(empty($idKab)){
			$errMSG = "Please Enter Kabupaten.";
		}
		else if(empty($imgFile)){
			$errMSG = "Please Select Image File.";
		}
		else
		{
			$upload_dir = 'user_images/'; 
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); 
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
			$userpic = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
	$input = mysql_query("INSERT INTO lokasi VALUES(NULL,'$idAgm', '$idKab', '$tempat', '$jalan', '$lat', '$lng', '$userpic')") or die(mysql_error());
	if($input){
		header("refresh:1;index.php");
	}else{
		echo 'Gagal menambahkan data! ';		
		echo '<a href="tambah.php">Kembali</a>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>