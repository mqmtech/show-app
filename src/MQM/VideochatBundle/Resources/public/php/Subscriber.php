<?php
header("Content-Type: image/png; ");
$file = __DIR__ . "/capture.png";
//$img = file_get_contents(__DIR__ . "/capture.png");

$img = imagecreatefrompng($file);
imagepng($img);
imagedestroy($img);

echo $img;