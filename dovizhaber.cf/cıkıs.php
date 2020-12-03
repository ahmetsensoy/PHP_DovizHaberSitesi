<!doctype html>
<html>
<head>
	<?php session_start(); ?>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	session_destroy();
	header('Location:/index.php');
	?>
</body>
</html>