<?php require('fonksiyon.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-9">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<title>Document</title>
</head>
<body>
	<?php 
		$baglan = baglan('sorucevap.memurlar.net');
		$re = "/<tr><td style=\"(.*?)\"><span class=\"(.*?)\">(.*?)<\\/span><\\/td><td><a href=\"(.*?)\" title=\"(.*?)\"><b>(.*?)<\\/b><\\/a><\\/td><\\/tr>/si"; 
		preg_match_all($re, $baglan, $sonuc);
//		print_r($sonuc[6]);
		$soru = $sonuc[6];
		$link = $sonuc[4];
	?>	

	<div class="col-md-6">
		<ul class="list-group"><?php
			for ($i=0; $i < count($sonuc); $i++) { 
		?>
			<li class="list-group-item"><?php echo "<a target='_blank' href=http://sorucevap.memurlar.net$link[$i]>$soru[$i]</a>"?></li>
		<?php };?>
		</ul>
	</div>
</body>
</html>