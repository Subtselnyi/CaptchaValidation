<?php
session_start();
$image = imagecreatetruecolor(215,100) or die("canvas cannot be created");
$red = imagecolorallocate($image,255,0,0);
$green = imagecolorallocate($image,0,255,0);
$blue = imagecolorallocate($image,0,0,255);
$white = imagecolorallocate($image,255,255,255);
$black = imagecolorallocate($image,0,0,0);

$background = imagefill($image,0,0,$white);



imagerectangle($image,0,0,214,99,$black);
$string = "QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm0123456789";
$color = array($red,$green,$blue);
$context = $string[rand(0,61)].$string[rand(0,61)].$string[rand(0,61)].$string[rand(0,61)];

imagettftext($image,50,rand(-15,15),15,75,$black,"111.ttf",$context[0]);
imagettftext($image,50,rand(-15,15),65,75,$black,"222.ttf",$context[1]);
imagettftext($image,50,rand(-15,15),115,75,$black,"333.ttf",$context[2]);
imagettftext($image,50,rand(-15,15),165,75,$black,"444.ttf",$context[3]);

$_SESSION['vcode']=$context;
for ($i=0;$i<1000;$i++)
{
    imagesetpixel($image,rand(2,213),rand(2,98),$color[rand(0,2)]);
}
imagejpeg($image,"./vcode.jpeg");
header("content-type:image/jpeg");
imagejpeg($image);
?>