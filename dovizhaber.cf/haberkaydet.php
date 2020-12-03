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
	<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	 <?php

    $oturum = $_SESSION["oturum"];

    if($oturum){

    ?>
	 <ul>
  <button type="button" class="btn btn-info active m-3"><a href="/admin.php" class="text-white"><strong>Haberleri Listele</strong></a></button>
  <button type="button" class="btn btn-info active m-3"><a href="/haberkaydet.php" class="text-white"><strong>Haber Kaydet</strong></a></button>
  <button type="button" style="float:right" class="btn btn-info active m-3"><a href="/cıkıs.php" class="text-white"><strong>Çıkış</strong></a></button>
   <button type="button" style="float:right" class="btn btn-info m-3" ><a href="/index.php" class="text-white"><strong>Anasayfa</strong></a></button>
</ul>
	
	
	<form action="kaydet.php" method="post"  enctype="multipart/form-data"/>
<table align="center" border="1">
<tr>
 
</tr>
<tr>
<td class="table-info" scope="col">Resim Seç</td>
<td class="table-info" scope="col"><input type="file" name="resim"></td>
</tr>
<tr>
<td class="table-info" scope="col">Başlık</td>
<td class="table-info" scope="col"><textarea name="baslik" ></textarea></td>
</tr>
<td class="table-info" scope="col">İçerik</td>
<td class="table-info" scope="col">
	<textarea name="icerik"></textarea> <script> CKEDITOR.replace( 'icerik' ); </script>
	</td>
</tr>
</td>
</tr>
<tr>
<td class="table-info" scope="col"></td>
<td class="table-info" scope="col"><input type="submit" value="Kaydet"></td>
</tr>
 
</table>
</form>

 

	
	
	<?php
    }
    else { echo "lutfen <a href='/giris.php'>buradan</a> buradan giris yapın" ;}
    ?>
</body>
</html>