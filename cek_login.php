<?php
session_start();
$server = 'localhost';
$username = 'root';
$password = ''; 
$db_name = 't_ibadah'; 
$db = mysqli_connect($server,$username,$password) or DIE("koneksi ke database gagal !!");
mysqli_select_db($db,$db_name) or DIE("nama database tersebut tidak ada !!");
$login = mysqli_query($db,"select * from user where (username = '" . $_POST['username'] . "') and (password = '" . md5($_POST['password']) . "')",$db);
$rowcount = mysqli_num_rows($login);
if ($rowcount == 1) {
$_SESSION['username'] = $_POST['username'];
header("Location: cpanel/index.php");
}
else
{
header("Location:login/index.html");
}
?>