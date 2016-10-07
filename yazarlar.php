<?php 
	require('fonksiyon.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Cimri....</title>
	
	<link rel="stylesheet" href="css/ulu.css" />

</head>
<body>
	<?php
		$baglan = baglan('http://www.gazeteoku.com/tum-yazarlar.html');
		$re = "/<a href=\"\\/(.*?)\" title=\"(.*?)\" class=\"(.*?)\">(.*?)<img src=\"(.*?)\" alt=\"(.*?)\" width=\"(.*?)\" height=\"(.*?)\"\\/>(.*?)<\\/a>(.*?)<div class=\"(.*?)\">(.*?)<span class=\"(.*?)\">(.*?)<\\/span>(.*?)<a href=\"(.*?)\" title=\"(.*?)\" class=\"(.*?)\">(.*?)<\\/a>(.*?)<span class=\"(.*?)\">(.*?)<\\/span>(.*?)<\\/div>(.*?)<div class=\"(.*?)\"><\\/div>(.*?)<a href=\"(.*?)\" title=\"(.*?)\" class=\"(.*?)\">(.*?)<\\/a>/si"; 

		preg_match_all($re, $baglan, $donanimlar);
		$baslik = $donanimlar[17];
		$link = $donanimlar[27];
		$resim = $donanimlar[5];
		$yazar = $donanimlar[1];
		$yazaradi = $donanimlar[6];
	?>
	<div class="col-xs-3">
		<ul class="list-group">
		<?php 
			for ($i=1; $i < count($baslik); $i++) { 
		?>
			<li class="list-group-item">
				<?php 
					echo "<p><img  class='img-thumbnail' src='$resim[$i]'></p>";
					echo "<p><h5><a target='_blank' href='http://www.gazeteoku.com$link[$i]'>$baslik[$i]</a></h5></p>";
					echo "<p><code><a target='_blank' href='http://www.gazeteoku.com/$yazar[$i]'>$yazaradi[$i] Kimdir?</a></code></p>";
				?>
			</li>
		<?php };?>
		</ul>
	</div>
</body>
</html>