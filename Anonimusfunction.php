<?php
//ANONIMUS function yaitu function di buat menjadi variabel
//function tanpa nama
$sayhello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

//kirim parameter
//memanggil variabel
$sayhello('Helmi Tazkia');
$sayhello('Asep Maulana');

//anonimus function sebagai argument

function saygod(string $name, $filter)
{
    $final = $filter($name);
    echo "Good bayy $final" . PHP_EOL;
};

//saygod("Fauzan", function (string $name) {
//return $name;
//});

$filterano = function (string $name) {
    return $name;
};

saygod('EKO', $filterano);
