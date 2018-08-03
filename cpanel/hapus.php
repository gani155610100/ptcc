<?php

if(isset($_GET['id'])){
	include('bckp2.php');
	$id = $_GET['id'];
	$cek = mysql_query("SELECT id_lokasi FROM lokasi WHERE id_lokasi='$id'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	
	}else{
		$del = mysql_query("DELETE FROM lokasi WHERE id_lokasi='$id'");
		if($del){
			
			header("refresh:1;index.php");
			
		}else{
			
			echo 'Gagal menghapus data! ';
			echo '<a href="index.php">Kembali</a>';
		
		}
		
	}
	
}else{
	echo '<script>window.history.back()</script>';
}
?>