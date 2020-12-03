<?php

$username="root";
$password="";
$sunucu="localhost";
$database="epiz_26178866_dbdovizhaber";



$baglanti = mysqli_connect("localhost",$username,$password,$database);// Bağlantı kontrolü
if (mysqli_connect_errno())
 {
 echo "Hata: " . mysqli_connect_error();
 }



?>