<?php
$host = "ap-cdbr-azure-southeast-b.cloudapp.net";
$user = "b4171cd7fac4ba";
$pass = "fff425cd";
$name = "abidatabasedb";
 
$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>
