<?php 
@session_start();
$dbserver="localhost";
$dbuser:"id10107164_nurfaizin318";
$dbpassword:"#123456789#";
$dbname:"id10107164_rentalmobil";
global $koneksi;
$koneksi= mysqli_connect($dbserver,$dbuser,$dbpassword,$dbname) or die ("koneksi ke server error");

?>