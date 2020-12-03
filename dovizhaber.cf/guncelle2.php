<?php
include 'baglan.php';

mysqli_set_charset($baglanti, "utf8");

 $ID= $_POST['id'];

$baslik=$_POST['baslik'];
$icerik=$_POST['icerik'];
	
$kaynak = $_FILES["resim"]["tmp_name"];
$ad =  $_FILES["resim"]["name"]; 
$tip = $_FILES["resim"]["type"]; 
$boyut = $_FILES["resim"]["size"]; 
$hedef = "C:/http://dovizhaber.cf/img";
$kaydet = move_uploaded_file($kaynak,$hedef."/".$ad); 
if($kaydet) 
        {
            echo '<div style="background-colordd; border:1px solid #ccc">Kayit basarili</div>'; 
        }else { echo "Kayit yapilmadi"; }




$sql = "UPDATE tblhaber SET resimyol='$ad', baslik='$baslik', icerik='$icerik' WHERE id='$ID'";
 

$sonuc= mysqli_query($baglanti,$sql);
if($sonuc>0) 
{ 
echo "<br>";
echo 'Başarıyla güncellendi;';
echo "<br>";
header( "refresh:1;url=admin.php" );
}
else
echo "Bir problem oluştu, verileri kontrol ediniz";
 
?>
