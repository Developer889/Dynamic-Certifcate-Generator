<?php
header('content-type:image/jpeg');
$font="D:\PHP\Dynamic Certificate\BRUSHSCI.TTF";
$image=imagecreatefromjpeg("certificate.jpg");
$color=imagecolorallocate($image,19,21,22);
$name="Ehtesham Ali";
imagettftext($image,50,0,365,420,$color,$font,$name);
$date="6th may 2020";
imagettftext($image,20,0,450,595,$color,"D:\PHP\Dynamic Certificate\AGENCYR.TTF",$date);
imagejpeg($image);
imagedestroy($image);
?>