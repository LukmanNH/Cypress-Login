<?php

$host="localhost";
$user="root";
$password="";
$db="logindemo";


$connect = mysql_connect($host,$user,$password);
mysql_select_db($db);

  if (!($connect)) {
    echo "Koneksi ke database gagal" . mysqli_connect_error();
  }
 ?>
