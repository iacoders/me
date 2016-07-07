<?php


require 'class.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
	* { padding: 0; margin: 0;}
	body { background: url(fresh_snow.png) repeat; }
	img { position: absolute; top: 40%; left: 20%; border: 1px solid #dedede; box-shadow: 0 0 10px rgba(0,0,0,.3);}
	</style>
</head>
<body>

<img src="<?php echo Captcha::generate_image();?>" />
</body>
</html>
