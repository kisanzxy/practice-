<?php
  
 session_start();  
$img = imagecreatetruecolor(80, 35);  
$black = imagecolorallocate($img, 0x00, 0x00, 0x00);  
$green = imagecolorallocate($img, 0x00, 0xFF, 0x00);  
$white = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);  
imagefill($img,0,0,$white);  

$code = '';  
for($i = 0; $i < 4; $i++) {  
    $code .= rand(0, 9);  
}  
$_SESSION['code'] = $code;  //储存验证码
imagestring($img, 30, 28, 10, $code, $black);  

for($i=0;$i<200;$i++) {  
  imagesetpixel($img, rand(0, 100) , rand(0, 100) , $black);   
  imagesetpixel($img, rand(0, 100) , rand(0, 100) , $green);  
}  

header("content-type: image/png");  
imagepng($img);  
imagedestroy($img);  
 
?>