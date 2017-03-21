<!DOCTYPE html>
<html>
<head>
	<title>cartao.png</title>
</head>
<body>
<?php
header('Content-type: image/png');

require_once 'environment.php';

$img = imagecreatefrompng(URL.'/assets/imagens/cartaoverso.png');

imagefill($img, 0, 0, imagecolorallocate($img, 220, 220, 220));

$font1 = "assets/fonts/arial.ttf";

$font_s = 22;

$color = imagecolorallocate($img, 0,0,0);

imagettftext($img, $font_s, 0, 50, 40, $color, $font1, "teste");
imagettftext($img, $font_s, 0, 20, 50, $color, $font1, "teste");
imagettftext($img, $font_s, 0, 70, 60, $color, $font1, "teste");


imagepng($img,"assets/imagens/cartaotemporario.png");
imagedestroy($img);
header('Location: '.URL.'/assets/imagens/cartaotemporario.png');
/** ASSIM FUNCIONA
header('Content-type: image/jpeg');

$img = imagecreatetruecolor(500, 500);

imagefill($img, 0, 0, imagecolorallocate($img, 220, 220, 220));

$font1 = "assets/fonts/verdana.ttf";

$font_s = 22;

$color = imagecolorallocate($img, rand(0,255), rand(0,255), rand(0,255));

imagettftext($img, $font_s, 0, 50, 40, $color, $font1, "teste");

imagejpeg($img);*/

?>

</body>
</html>
