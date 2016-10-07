<?php require('fonksiyon.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Nedir?</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/ulu.css" />
</head>
<body>
	<form action="nedir.php?">
		<input class="form-control" name="veri" type="text" />
		<input class="form-control"  type="submit" value="Ara Bul Getir" />
	</form>
<?php 
	error_reporting(0);  
	$degisken=$_GET['veri'];
	$degisken = strtolower($degisken);
	$degisken = iconv("UTF-8","ISO-8859-9", $degisken);
	$veri = str_replace(" ", "-", $degisken);

	if (!$veri) {
		$veri="Hata";
	}
	$baglan = baglan('http://www.nedir.com/'.$veri);
	$re = "/<\\/script>(.*?)<\\/div>(.*?)<h1>(.*)<\\/article>/si"; 
	$re2 = "/<ul>(.*?)(.*?)<li>(.*?)<a href=\"(.*?)\">(.*?)<\\/a>(.*?)<\\/ul>/si"; 
	$re3 = "/<li>(.*?)<a href=\"(.*?)\">(.*?)<\\/a>(.*?)<\\/li>/si"; 
	preg_match($re, $baglan, $sonuc);
	preg_match($re2, $baglan, $okusonuc);
	preg_match_all($re3, $okusonuc[6], $budur);
	$gelenveri = $sonuc[3];
	$arayanaradi = $okusonuc[6][0];
	$arayanbaslik = $budur[3];
	$arayanlink = $budur[2];
?>
<div class="col-md-1"></div>
<div class="col-md-8 kutu"><?php echo ($gelenveri);?></div>
<div class="col-md-2">Bu konuyla ilgili...
	<ul class="list-group">
	<?php
		for ($i=0; $i < count($budur); $i++) { 				
			?>
		<li class="list-group-item">
			<?php echo "<a href='nedir.php?veri=$arayanbaslik[$i]'>$arayanbaslik[$i]</a>";?>
		</li>
	<?php };?>
	</ul>
</div>
</body>
</html>