<?php
$server="localhost"; //Nama server default xampp tersebut biasanya localhost
$username="root"; //Nama root ini biasanya default dari xampp tersebut
$password="siber"; //Isikan password jika diminta password pada halam awal ke localshost/phpmyadmin kalau tidak ada biarkan saja
$db="londre"; //Sesuaikan dengan nama database yang anda sudah buat
 
$konek = mysqli_connect($server,$username,$password,$db) or die (mysql_error());
$database = mysql_select_db($db); date_default_timezone_set("Asia/Jakarta");
 ?>