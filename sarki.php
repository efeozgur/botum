<?php require('fonksiyon.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Şarkı Sözleri</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
	<?php 
		$baglan = baglan('http://www.yemektarifleri-sitesi.com/');
		$re = "/<div class=\"post-container\">(.*)<\\/div><div class=\"post-/si"; 
		$re2 = "/<a href=\"(.*?)\">(.*?)<img src=\"(.*?)\" alt=\"(.*?)\" width=\"(.*?)\" height=\"(.*?)\" \\/>(.*?)<\\/a>(.*?)<\\/div>(.*?)<div class=\"detail\">(.*?)<div class=\"(.*?)\">(.*?)<a href=\"(.*?)\">(.*?)<\\/a>(.*?)<\\/div>(.*?)<div class=\"(.*?)\">(.*?)<\\/div>/si"; 

		preg_match($re, $baglan, $veriler);
		preg_match_all($re2, $veriler[0], $veri);
		$tarifismi = $veri[4];
		$resim = $veri[3];
		$link = $veri[13];
		$tarif = $veri[18];
	?>
	<div class="col-md-2">
		<ul class="list-group">
			<?php 
				for ($i=0; $i < count($resim); $i++) { 
					echo "<li class='list-group-item'>";
					echo "<p><a target='_blank' href='$link[$i]'>$tarifismi[$i]</a></p>";	
					echo "<p><a target='_blank' href='$link[$i]'><img class='img-thumbnail' src='$resim[$i]'></a></p>";			
					echo "<p>$tarif[$i]</p>";
					echo "</li>";
				}
			?>
		</ul>
	</div>
</body>
</html>