<?php 

//Manipulasi String
$nama ="Helmi Tazkia";
echo "Nama Saya adalah : " .$nama . PHP_EOL;
echo "Nilai Saya Adlah : " . 100 ."\n";

//Manipulasi String Ke Number
//sesuai dengan data nya yang akan di rubah

$valuestring = (String)100;
var_dump($valuestring);
$valueinteger = (int)"400";
var_dump($valueinteger);
$valuefloating = (float)"100.4";
var_dump($valuefloating);

//Memanipulasi Melalui karakter

$nama = "Helmi";
echo $nama[0].PHP_EOL;
echo $nama[1].PHP_EOL;
echo $nama[2].PHP_EOL;
echo $nama[3].PHP_EOL;
echo $nama[4].PHP_EOL;

//menggunakan variabel parsing
//gak usah lagi menggunakan titik untuk mengggabungkan data
echo "Hello $nama ,Selamat Bejalar Ya..." . PHP_EOL;


?>