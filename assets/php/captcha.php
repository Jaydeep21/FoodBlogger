<?php

session_start();

$str=md5(microtime());

$str=substr($str,0,6);

$_SESSION['captcha']=$str;

$img=imagecreate(70,30);

imagecolorallocate($img,26,26,26);

$textcol=imagecolorallocate($img,203,203,180);

imagestring($img,20,5,5,$str,$textcol);

header("Content:image/jpeg");

imagejpeg($img);

?>