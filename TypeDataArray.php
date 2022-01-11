<?php 
//Type Data Array ke 1
//Harus melalui index 
//di hitung dari angka 0

$value = Array(1,2,3,5,7.8);
var_dump($value);

$nama = ["Helmi","Tazkia","Saepuddin"];
var_dump($nama);

//mengubah array di index 0
$nama[0]="Muhammad";
var_dump ($nama);

//unset untuk menghapus data /dan index nya pun hilang
unset($nama[1]);
var_dump($nama);

//untuk menambahkan array ,tapi otomatis data nya ada di paling belakang
$nama[]= "joko";
var_dump($nama);
//Menghitung jumlah data array
var_dump(count($nama));


//array menggunakan map di php
//aray di dalam array
$oke = array(
    "id" => 3,
    "Nama" =>"Helmi Tazkia",
    "age" => 45,
    "adres" => array(
        "city" => "Jakarta",
        "country" => "Indonesia"
    )
);
var_dump($oke["adres"]["city"]);

//echo $oke["age"];

$body =[
    "id" => "oke",
    "nama" => "Budi Nugraha",
    "age" =>34,
    "adres" => [
        "city" => "Jakarta",
        "County" => "Indonesia"
    ]
];
var_dump($body);


?>