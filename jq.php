<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>jquery</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="css/ulu.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script>
	$(document).ready(function(){
		$("button").click(function(){
		    $("div").animate({
		        height: 'toggle',
		        width:  'toogle',
		    });
	    });
	});
	</script>
</head>
<body>
<button>Göster / Gizle</button>
<div style="background:#00AF8C;height:300px;width:300px;display:none;border-radius:2px 2px 15px 15px; margin-left:5px">
	<p>Selamlar</p>
	<p>Selamlar</p>
</div>

</body>
</html>