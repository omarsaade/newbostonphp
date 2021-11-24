<?php
session_start();
header('Content-type: image/jpeg');


$text = $_SESSION['secure'];
// $text = $_SESSION['secure']; or $text = "hello";
// var_dump($text);
$font_size = 30 ;

$image_width = 200 ;
$image_height = 40 ;

$image = imagecreate($image_width , $image_height);
imagecolorallocate($image, 0 , 0, 0);
$text_color = imagecolorallocate($image , 255 , 255 ,255);

for ($x=1 ; $x<=30 ; $x++) {
 $x1 = rand(1,100);
 $y1 = rand(1,100);
 $x2 = rand(1,100);
 $y2 = rand(1,100);
 imageline($image , $x1 , $y1 , $x2 , $y2 , $text_color);


}

imagettftext($image , $font_size, 0 , 0 , $font_size , $text_color, 'calliehandfullversion.ttf' ,$text);
imagejpeg($image);
?>