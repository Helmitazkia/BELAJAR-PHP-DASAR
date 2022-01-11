<?php

//Mengakses function menggunakan variabel
function foo()
{
    echo "FOOO" . PHP_EOL;
}

//memnaggil nama function dengan variabel
$panggilfunction = "foo";
//maka otomatis variabel ini akan memanggil function yang namanya foo
$panggilfunction();

function bar()
{
    echo "Bar" . PHP_EOL;
}
$panggilbar = "bar";
$panggilbar();


function Keywordspp(string $name, $filter)
{
    $hasilname  = $filter($name);
    echo "Hallo... $hasilname" . PHP_EOL;
}

function sample(string $name)
{
    return " Terima kasih $name" . PHP_EOL;
}
Keywordspp("Helmi Tazkia", "sample");
// strtoupper konversi untuk huruf besar
Keywordspp("Helmi Tazkia", "strtoupper");
// strtolower konversi untuk huruf besar
Keywordspp("Helmi Tazkia", "strtolower");
