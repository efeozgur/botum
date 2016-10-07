<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>jsonum</title>
</head>
<body>
	<?php
		$gelen = file_get_contents("yazar.json"); /* isim.txt dosyasının çalıştığımız dizinde olduğunu varsaydım. */
		$json = json_decode($gelen); /* eğer buradaki true yazan yer false yapılırsa veya tamamen kaldırılırsa nesne olarak işlem yapılabilir. */
		echo "<pre>";
		print_r ($json); /*Bu sefer ekrana biraz daha farklı bir sonuç bastı. */
		echo "</pre>";

		echo $json->collection1->baslik[0]->href;

		
		?>
</body>
</html>