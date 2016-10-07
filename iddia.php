<?php require('fonksiyon.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	
	<title>Document</title>
</head>
<body>
	<?php 
		$baglan = baglan('http://www.hizliadam.com/en-iyi-blog-siteleri.html');
		$re = "/<ul class=\"(.*?)\">(.*?)<li class=\"(.*?)\"><a href=\"(.*?)\">(.*)<\\/li>(.*?)<\\/ul>(.*?)(.*?)<\\/div>/si"; 
		preg_match($re, $baglan, $gelenveri);
		preg_match_all("/<p>(.*?)<strong><a href=\"(.*?)\" target=\"(.*?)\" rel=\"(.*?)\">(.*?)<\\/a><br \\/>(.*?)<\\/strong>(.*?)<\\/p>(.*?)<p>(.*?)<\\/p>/si", $gelenveri[0], $sonveri);
		//print_r($sonveri[2]);
		$icerik = $sonveri[7];
		$link = $sonveri[2];
		$baslik = $sonveri[5];
	?>
	<div class="col-md-4 kutu">
		<h2 style="text-align:center">En iyi 10 Blog</h2>
		<ul class="list-group">
		<?php 
			for ($i=0; $i < count($gelenveri); $i++) { 
				
		?>
			<li class="list-group-item"><?php echo "<a target='_blank' href='$link[$i]'>$baslik[$i]</a><br>$icerik[$i]";?></li>
		<?php }?>
		</ul>
	</div>
</body>
</html>