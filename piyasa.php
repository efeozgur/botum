<?php require('fonksiyon.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Burdur Haberleri</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
	<?php 
		$baglan = baglan('http://www.bomba15.com/haber/gundem.html');
		$re = "/<div class=\"ht-date\">(.*?)<\\/div>(.*?)<div class=\"hc-doviz\">(.*?)<div class=\"hc-doviz-slide\">(.*?)<ul>(.*?)<li class=\"dolar\">(.*?)<\\/li>(.*?)<li class=\"euro\">(.*?)<\\/li>(.*?)<li class=\"altin\">(.*?)<\\/li>(.*?)<li class=\"bist\">(.*?)<\\/li>(.*?)<\\/ul>(.*)<\\/div>/si"; 
		preg_match($re, $baglan, $sonuc);
		$tarih = $sonuc[1];
		$dolar = $sonuc[6];
		$euro = $sonuc[8];
		$altin = $sonuc[10];
		$bist = $sonuc[12];
	?>
	<div class="col-md-2">
		<?php echo $tarih;?>
		<ul class="list-group">
			<li class="list-group-item"><?php echo "<img width='20' height='20' src='img/dolar.ico'>  ".$dolar?></li>
			<li class="list-group-item"><?php echo "<img width='20' height='20' src='img/euro.png'>  ".$euro?></li>
			<li class="list-group-item"><?php echo "<img width='20' height='20' src='img/altin.png'>  ".$altin?></li>
			<li class="list-group-item"><?php echo "<img width='20' height='20' src='img/bist.png'>  ".$bist?></li>
		</ul>
	</div>
</body>
</html>