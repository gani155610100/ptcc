<?php
if(isset($_POST['simpan'])){
	include('bckp2.php');
		$id	= $_POST['id'];
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
			$errMSG = "Silahkan Diisi.";
		}
		else if(empty($idKab)){
			$errMSG = "Silahkan Diisi.";
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
	$update = mysql_query("UPDATE lokasi SET id_agm='$idAgm',id_kab='$idKab',nama_lokasi='$tempat',jalan='$jalan',lat='$lat',lng='$lng',image='$userpic' WHERE id_lokasi='$id'") or die(mysql_error());

	if($update){
		
		header("refresh:1;index.php");
		
	}else{
		
		echo 'Gagal menyimpan data! ';
	}

}else{	
	echo '<script>window.history.back()</script>';

}
?>