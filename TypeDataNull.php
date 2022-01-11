<?php

//Mengosongkan Data yang tadi nya ada aliyas di setng data nya
//jadi null fungsi nya mengubah data menjadi null tapi datanya masih ada 
$nama = "Helmi Tazkia";
$nama = null;
$age = null;

echo "Nama :";
echo $nama;
echo "\n";

echo "Age :";
echo $age;

//Untuk Mengecek data variabel itu ada atau tidak
//kode untuk mengecek null
//mengsetting null
echo "is Name Nulll";
var_dump(is_null($nama));
echo "\n";


//unset null
//menghapus si varibelnya
//jadi unset fungsi nya menghapus data beserta variabelnya

// $contoh = "oke";
// unset($contoh);
// echo $contoh;


//untuk lebih enak itu menggunakan function namanya isset 
//mengecek data nya ada atau tidak

$oke = "Helmi";
//$oke = null;
var_dump(isset($oke));
echo $oke;
