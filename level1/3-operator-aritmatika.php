<?php 
$a=10;
$b=5;

$hasil_tambah =$a+$b;
$hasil_logika = ($a>$b) && ($a<$b);

echo "Hasil tambah:  $hasil_tambah ";
echo "Hasil Logika: ". ($hasil_logika? "Aktif":"Tidak");