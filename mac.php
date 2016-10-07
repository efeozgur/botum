<?php require('fonksiyon.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>İddaa</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<?php 
	$baglan = baglan('http://canliskor.gazetevatan.com/');
	$re = "/<div class=\"dmtop\">(.*?)<span>(.*?)(.*?)<span>(.*?)(.*?)<\\/span>(.*?)<a href=\"(.*?)\" target=\"(.*?)\">(.*?)<\\/a>(.*?)a href=\"(.*?)\" target=\"(.*?)\">(.*?)<\\/a>(.*?)<a href=\"(.*?)\" target=\"(.*?)\">(.*?)<\\/a>(.*?)<td class=\"(.*?)\" width=\"(.*?)\">(.*?)<(.*?)>(.*?)<a href=\"(.*?)\" target=\"(.*?)\">(.*?)<\\/a>(.*?)<a href=\"(.*?)\" target=\"(.*?)\">(.*?)<\\/a>(.*?)<a href=\"(.*?)\" target=\"(.*?)\">(.*?)<\\/a>(.*?)<\\/table>/si"; 
	preg_match_all($re, $baglan,$sonuc);
	//print_r($sonuc[26]);
	$ligadi = $sonuc[3];
	$tarih = $sonuc[5];
	$tak1 = $sonuc[9];
	$tak2 = $sonuc[17];
	$skor = $sonuc[13];
?>
	<div class="col-md-9">
		<table class="table table-bordered">
			<tr>
				<td>Lig</td>
			</tr>
			<?php 
				for ($i=0; $i < count($sonuc); $i++) { 
					
				
			?>
			<tr>
				<td>
					<?php echo $ligadi[$i]." ligindeki ".$tarih[$i]." tarihinde " . $tak1[$i]." ile ".$tak2[$i]. " arasındaki maç sonucu: ". $skor[$i] ;?>
				</td>				
			</tr>
			<?php };?>
		</table>
	</div>

</body>
</html>