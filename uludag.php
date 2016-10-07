<?php require("fonksiyon.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/ulu.css" />
</head>
<body>
	<?php 
		$baglan = baglan("http://www.uludagsozluk.com");
		$re = "/<li id=\"(.*?)\"  data-ii=\"(.*?)\"><a href(.*)<\\/ul>/si"; 
		preg_match($re, $baglan, $sonuc);
		preg_match_all('#<li id="(.*?)"  data-ii="(.*?)"><a href="(.*?)"  class="(.*?)" i="(.*?)" dst="(.*?)"   title="(.*?)" >(.*?)</a><small>(.*?)</small></li>#', $sonuc[0], $gelen);
		//print_r($gelen);
		$baslik = $gelen[8];
		$link = $gelen[3];
		$sayi = $gelen[9];
		
	?>

	<div class="col-md-10 kutu">
		<h3 style="text-align:center">Uludağ Sözlük - Son 10 Entry</h2>
		<ul class="list-group">
		<?php 
			for ($i=0; $i < count($gelen); $i++) { 
				
		?>
			<li class="list-group-item"><?php echo "<a target='_blank' href='http://www.uludagsozluk.com$link[$i]'>".$baslik[$i]."</a>"."<span class='badge'>$sayi[$i]</span>";?></li>
			<?php };?>
		</ul>
	</div>
</body>
</html>