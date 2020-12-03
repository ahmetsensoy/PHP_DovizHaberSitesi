<!doctype html>
<?php 
include 'baglan.php';
session_start();?>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/ana.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/mediaquery.css">
    <link rel="shortcut icon" href="img/circle-1544536_960_720.png" type="image/x-icon">
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	 <?php

    $oturum = $_SESSION["oturum"];

    if($oturum){

    ?>
	 <ul >
  <button type="button" class="btn btn-info active m-3"><a href="/admin.php" class="text-white"><strong>Haberleri Listele</strong></a></button>
  <button type="button" class="btn btn-info active m-3"><a href="/haberkaydet.php" class="text-white"><strong>Haber Kaydet</strong></a></button>
  <button type="button" style="float:right" class="btn btn-info m-3" active"><a href="/cıkıs.php" class="text-white"><strong>Çıkış</strong></a></button>
  <button type="button" style="float:right" class="btn btn-info m-3" ><a href="/index.php" class="text-white"><strong>Anasayfa</strong></a></button>
  
   </ul>
	
	
	<table align="center">
  <tr>
    <th   class="table-info" scope="col">id</th>
    <th  class="table-info" scope="col">baslık</th>
    <th  class="table-info" scope="col">içerik</th>
	  <th  class="table-info" scope="col"></th>
	  <th  class="table-info" scope="col"></th>
  </tr>

 <?php 
  $sql="SELECT * FROM tblhaber";
  $sorgu=mysqli_query($baglanti,$sql);
  while( $sonuc=mysqli_fetch_assoc($sorgu) ){
?>
   <tr class="krem">
    <td><?php echo $sonuc["id"]; ?></td>
	 <td><?php echo $sonuc["baslik"];  ?></td>
    <td><?php echo $sonuc["icerik"];  ?></td>
	 <?php echo '<td> <a href="sil.php?id='.$sonuc['id'].'">Sil</a> </td>';?>
	 <td> <a href="guncelle.php?id=<?php echo $sonuc['id'] ?>">guncelle</a> </td>
	
   </tr>
<?php } ?>
</table>

	
	
	<?php
    }
    else { header('Location:/giris.php');}
    ?>
</body>
</html>