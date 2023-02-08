<?php
    $rows = array();
if (isset($_POST['n1'])) {
    $a = (int)$_POST['n1'];
    array_push($rows, $a);
}
if (isset($_POST['n2'])) {
    $a = (int)$_POST['n2'];
    array_push($rows, $a);
}
if (isset($_POST['n3'])) {
    $a = (int)$_POST['n3'];
    array_push($rows, $a);
}
if (isset($_POST['n4'])) {
    $a = (int)$_POST['n4'];
    array_push($rows, $a);
}
if (isset($_POST['n5'])) {
    $a = (int)$_POST['n5'];
    array_push($rows, $a);
}
$width = 200;
$height = 200;
$rowWidth = 30;
$rowInterval = 5;
$img = imagecreatetruecolor($width, $height);
$white = imagecolorallocate($img, 255, 255, 255); 
imagefill($img, 0, 0, $white);
$textcolor = imagecolorallocate($img, 0, 0, 0);
$font_file = 'arial.ttf';
for($i = 0, $y1 = $height, $x1 = 0; $i < count($rows); $i++) {
  $color = imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255)); 
  $y2 = $y1 - $rows[$i]*$height/100;
  $x2 = $x1 + $rowWidth;
  imagefilledrectangle($img, $x1, $y1, $x2, $y2, $color);
 /*imagefttext($img, 14, 0, $x1, $y2, $textcolor, $font_file, $rows[$i]); */
    imagestring($img, 1, $x1, $y2, $rows[$i], $textcolor);
  $x1 = $x2 + $rowInterval;
}
header ("Content-type: image/gif"); 
imagegif($img);
?>