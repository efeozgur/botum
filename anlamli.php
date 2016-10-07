<?php require('fonksiyon.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<title>Anlamlı Sözler</title>
</head>
<body>
	<?php 
		$baglan = baglan('http://www.neguzelsozler.com/guzel-sozler/anlamli-sozler.html');
		$re = "/<p><strong>(.*?)<\\/strong><\\/p>/si"; 

		preg_match_all($re, $baglan, $sonuc);
		$soz = $sonuc[0];
	?>
	<div class="col-md-6">
		<ul class="list-group"><?php
			for ($i=0; $i < 10; $i++) { 
		?>
			<li class="list-group-item"><?php echo $soz[$i];?></li>
			<?php };?>
		</ul>
	</div>
</body>
</html>