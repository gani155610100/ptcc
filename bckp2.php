<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 't_iibadah2';
$koneksi    = mysql_connect($host,$user,$pass);
     
    if(!$koneksi){
        die("Cannot connect to database.");
    }
     
    mysql_select_db($db);
 
?>