<html>
<head> <meta charset="utf-8"> </head>
<body>
<?php
	include 'baglan.php';

mysqli_set_charset($baglanti, "utf8");
 

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
 
	
$sqlekle="INSERT INTO tblhaber(resimyol,baslik,icerik) VALUES ('$ad','$baslik ','$icerik') " ;
	
$sonuc=mysqli_query($baglanti,$sqlekle); 
	
 
if ($sonuc==0)
echo "<center>Bir hata oluştu</center>";
else{
echo "<center>Başarıyla kaydedildi</center>";
header( "refresh:1;url=admin.php" );
}
?>
</body>
</html>