<?php
 
$silinecekID= $_GET['id'];
 
include 'baglan.php';
mysqli_set_charset($baglanti, "utf8");
 
$sonuc=mysqli_query($baglanti,"DELETE from tblhaber 
where id=".$silinecekID);
 
if($sonuc>0){
echo "Başarıyla silindi,1 sn. sonra yönlendirileceksiniz.";
header( "refresh:1;url=admin.php" ); 
 }
else
echo "Bir sorun oluştu silinemedi";
?>