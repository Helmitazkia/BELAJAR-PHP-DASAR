<?php

//kita bisa mengembalikan value menggunakan kata kunci return
function sum(int $fist, int $last)
{
    $total = $fist + $last;
    return $total;
}


$total = sum(10, 10);
var_dump($total);

$total = sum(100, 100);
var_dump($total);


function getfinalvalue($value)
{
    if ($value >= 90) {
        return "A";
    } elseif ($value >= 80) {
        return "B";
    } elseif ($value >= 70) {
        return "C";
    } elseif ($value >= 60) {
        return "D";
    } else {
        echo "Ups" . PHP_EOL;
    }
}

$hasil = getfinalvalue(90);
//var_dump($hasil);
echo "Hasil Ujian Kamu adalah = $hasil" . "\n";
