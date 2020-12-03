<!doctype html>
<html>
<head>
	<?php session_start(); ?>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	$kadi= $_POST["kAdi"];
	$sifre= $_POST["sifre"];
	
	if($kadi=="admin" && $sifre=="123"){
	    $_SESSION["oturum"]=true;
		header('Location:/admin.php');
	}
	else { $_SESSION["oturum"]=false;
		header('Location:/giris.php');}
	
	?>
	
</body>
</html>