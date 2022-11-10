<?php
$h=250; // resmimizin boyu
$w=850; // genişlik değeri
$im=ImageCreate($w,$h); // tualimizi oluşturduk
// renk tanımlamalarımızı yapıyoruz.

$beyaz=ImageColorAllocate($im,255,255,255); // Yazı tahtası renginde bir boya yarattık


ImageFill($im,0,0,$beyaz); // Yukarıdaki oluşturulan boyayı zemine basalım.

$siyah=ImageColorAllocate($im,0,0,0);

ImageString($im,15,36,15,"Ders: Programlama",$siyah);
ImageString($im,15,36,40,"Konu: PHP Resim Yaratma",$siyah);
ImageString($im,15,136,80,"Ornek uygulama tasarlayalim Ornek uygulama tasarlayalim  Ornek uygulama ",$siyah);
imagejpeg($im, 'a.jpg');

header("Content-type: image/png");
ImagePNG($im);
ImageDestroy($im);

?>
