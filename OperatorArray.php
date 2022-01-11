<?php 

$first = [
    "first_nama" => "Helmi",
];

$last = [
  "first_nama" => "Helmi",
  "Last_name" => "Tazkia"
];
//Yang Awal Akan sekalu di tampilkan walaupun ada duplicate data 
//data yang di duplicate akan di hiraukan
$full  = $first + $last;
var_dump($full);


$a = [
    "first_nama" => "Helmi",
    "Last_name" => "Tazkia"
];

$b= [
    "Last_name" => "Tazkia",
    "first_nama" => "Helmi"
 
];
//perbandingan Equality
//harus memiliki key dan value yang sama dan walaupun beda posisi nya
var_dump($a == $b);
//perbandingan identity
//harus memiliki key dan value yang sama dan posisi nya
var_dump($a === $b);
