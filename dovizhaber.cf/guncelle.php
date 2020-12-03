<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/ana.css">
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/mediaquery.css">
    <link rel="shortcut icon" href="img/circle-1544536_960_720.png" type="image/x-icon">

	
	<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</head>

<body>
	<?php
	
$gID=$_GET['id'];


include 'baglan.php';
mysqli_set_charset($baglanti, "utf8");
$sql="select * from tblhaber WHERE id=".$gID;


$sonuc1= mysqli_query($baglanti,$sql);


$satirsay=mysqli_num_rows($sonuc1);

if ($satirsay>0)
{
    $satir = mysqli_fetch_array($sonuc1);
    ?>
    
<form action="guncelle2.php" method="post" enctype="multipart/form-data"/ >
	
<input type="hidden" id="custId" name="id" value="<?php echo $satir['id']?>">
	
<table border="1" align="center">
<tr>
<td colspan="5"  class="table-info" scope="col" ><center> haber güncelleme</center></td>
 
</tr>
	
<tr>
<td class="table-info" scope="col">resim</td>
<td class="table-info"  > <img style="height: 100px "; width="150px"; src="img/<?php echo $satir["resimyol"]; ?>" > <input type="file" name="resim" </td>
</tr>
<tr>
<td class="table-info" scope="col">başlık</td>
<td class="table-info" scope="col"><textarea name="baslik" ><?php echo $satir['baslik']?></textarea></td>
</tr>
<tr>
<td class="table-info" scope="col">içerik</td>
<td class="table-info" scope="col"><textarea name="icerik"><?php echo $satir['icerik']?></textarea> <script> CKEDITOR.replace( 'icerik' ); </script></td>
</tr>
<tr>
	<td  class="table-info" scope="col"></td>
<td class="table-info" scope="col"><input type="submit" value="Kaydet"></td>
</tr>
</table>
</form>
	
	

 <?php
} 
	else {

echo "Aranılan kayıt bulunamadı";
}
	?>
</body>
</html>