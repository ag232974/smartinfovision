<?php 

$date = $_POST['date'];
$product = $_POST['product'];
$price = $_POST['price'];
$clint = $_POST['clint'];
$person = $_POST['sales_person'];

// // Interacive Flat Panel
// // Online Mobile App
// // Smart Class
// // Smart Class product
// $date = '2021-11-02';
// $product = 'Interacive Flat Panel';
// $price = '100000';
$clocing = 'Closing :- ';

header('Content-type: image/jpeg');
$font=realpath('arial.ttf');
$image=imagecreatefromjpeg("$person");
$color=imagecolorallocate($image, 242, 246, 250);
$date=$date;
imagettftext($image, 45, 0, 549, 288, $color,$font, $date);
$product= $product;
imagettftext($image, 40, 0, 580, 1010, $color,$font, $product);
$colorpr=imagecolorallocate($image, 0, 0, 0);

imagettftext($image, 50, 0, 315, 1265, $colorpr,$font, $product);
//imagejpeg($image,"certificate/$name.jpg");
$price=$price;
$colorp=imagecolorallocate($image, 255, 193, 6);
imagettftext($image, 90, 0, 510, 1150, $colorp,$font, $price);
$clocing=$clocing;
$colorp=imagecolorallocate($image, 255, 193, 6);
imagettftext($image, 60, 0, 5, 1355, $colorp,$font, $clocing);

$clint=$clint;
$colorp=imagecolorallocate($image, 255, 193, 6);
imagettftext($image, 60, 0, 370, 1355, $colorp,$font, $clint);
imagejpeg($image);
imagedestroy($image);
?> 
