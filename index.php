<?php require("fonksiyon.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/stilim.css" />
	<title>ArmutAdam.com - İddaa-Tahmin</title>
</head>
<body>
		<div class="cerceve2">
			<h1 style="text-align:center" >Dikkat</h1>
			<p style="text-align:justify">Bu siteyi referans alarak oynadığınız kuponlardan <a target="_blank" href="http://www.armutadam.com">ArmutAdam</a>  mesul değildir. Bu tahminleri baz alarak oynayın,  %100 kazanırsınız gibi bir iddiamızda yoktur, bunun garantisini vermiyoruz. Sadece kendi oynadığımız ve kazandıran sistemimizi sizlerinde paylaşımına sunuyoruz. Tabloda sunduğumuz olasılıklar tahminidir. </p>
			<p style="text-align: center; font-size:30px; ">Unutmayın ki! %100 kazandıran bir sistem yoktur</p>
		</div>
	<?php 
		
		$baglan = baglan("http://www.tahminkrali.com/");
		preg_match('#<div class="header header-green-large line-s">(.*)</div></div></div>#', $baglan, $veriler);
		preg_match_all('#<div class="box1st box-item talign-center">(.*?)</div><div class="box2nd box-item talign-center" title="(.*?)"><a href="(.*?)">(.*?)</a></div><div class="box3rd box-item talign-center">(.*?)</div><div class="box4th box-item">(.*?)</div><div class="box5th box-item talign-center"><a href="(.*?)">(.*?)</a></div><div class="box6th box-item talign-center">(.*?)</div><div class="box7th box-item talign-center">(.*?)</div><div class="box11th box-item talign-center">(.*?)</div><div class="box8th box-item talign-center">(.*?)</div><div class="box9th box-item talign-center">(.*?)</div><div class="box10th box-item talign-center">(.*?)</div></div>#', $veriler[0], $veri);
		preg_match_all('#<div class="box1st box-item talign-center">(.*?)</div>#', $veriler[0], $tarih);
		preg_match_all('#<div class="box2nd box-item talign-center" title="(.*?)"><a href="(.*?)">(.*?)</a></div>#', $veriler[0], $Lig);
		preg_match_all('#<div class="box3rd box-item talign-center">(.*?)</div>#', $veriler[0], $kod);
		preg_match_all('#<div class="box4th box-item">(.*?)</div>#', $veriler[0], $mac);
		preg_match_all('#<div class="box6th box-item talign-center">(.*?)</div>#', $veriler[0], $kategori);
		preg_match_all('#<div class="box7th box-item talign-center">(.*?)</div>#', $veriler[0], $tahmintipi);
		preg_match_all('#<div class="box11th box-item talign-center">(.*?)</div>#', $veriler[0], $tahmin);
		preg_match_all('#<div class="box8th box-item talign-center">(.*?)</div>#', $veriler[0], $orantipi);
		preg_match_all('#<div class="box9th box-item talign-center">(.*?)</div>#', $veriler[0], $oran);
		preg_match_all('#<div class="box10th box-item talign-center">(.*?)</div></div>#', $veriler[0], $olasilik);
		$gelenler = $veri[0];
		$tarih = $tarih[0];
		$lig = $Lig[0];
		$kod = $kod[0];
		$mac = $mac[0];
		$kategori = $kategori[0];
		$tahmintipi = $tahmintipi[0];
		$tahmin = $tahmin[0];
		$orantipi = $orantipi[0];
		$oran = $oran[0];
		$olasilik = $olasilik[0];

	
	?>
	<div class="col-md-8">
		<table style="font-size:12px;" class="table table-bordered">
			<tr style="background-color:green; color:white; font-weight:bolder; font-size:14px">
				<td>Tarih</td>
				<td>Lig</td>
				<td>Kod</td>
				<td>Maç</td>
				<td>Kategori</td>
				<td>Tahmin Tipi</td>
				<td>Tahmin </td>
				<td>Oran Tipi</td>
				<td>Oran</td>
				<td>Olasılık</td>
			</tr>

			<tr>
			<?php 
				for ($i=0; $i < count($kod); $i++) { 
					
				
			?>
				<td><?php echo strip_tags($tarih[$i]);?></td>
				<td><?php echo strip_tags($lig[$i]);?></td>
				<td><?php echo $kod[$i];?></td>
				<td><?php echo $mac[$i];?></td>
				<td><?php echo $kategori[$i];?></td>
				<td><?php echo $tahmintipi[$i];?></td>
				<td><?php echo $tahmin[$i];?></td>
				<td><?php echo $orantipi[$i];?></td>
				<td><?php echo $oran[$i];?></td>
				<td><?php echo $olasilik[$i];?></td>
				

			</tr>	<?php } ?>		
		</table>
	</div>
	<div class="col-md-3 cerceve">
		<h3 style="text-align:center">Tahminlerimizi sizlerle paylaşıyoruz </h3>
		<center><img width="200" height="200" src="img/para.png" alt="" /></center>
		<p style="text-align:center; font-size: 16px"> Şimdi Tablomuzu İnceleyelim </p>
		<p>1. (Tarih) Maçın tarihini gösterir</p>
		<p>2. (Lig) Maçın hangi ligde oynandığını gösterir</p>
		<p>3. (Kod) Maçın kodunu gösterir</p>
		<p>4. (Maç) Maçın hangi takımlar arasında oynandığını gösterir</p>
		<p>5. (Kategori) Maç hakkında yapılacak tahminin kategorisini gösterir</p>
		<p>6. (Tahmin Tipi) Maç hakkında yapılacak tahminin tipini gösterir</p>
		<p>7. (Oran Tipi) Maç hakkında yapılacak tahminin oran tipini gösterir</p>
		<p>8. (Oran) Maç hakkında yapılacak tahminin oranını gösterir</p>
		<p>9. (Olasılık) Maç hakkında yapılacak tahminin tutma olasılığını gösterir</p>
	</div>
		
		<select class="form-control" name="decision">
			<?php 
				for ($i=0; $i < count($kod); $i++) { 
					echo "<option>$mac[$i]</option>";
				}
			?>
		</select>

</body>
</html>

<div>