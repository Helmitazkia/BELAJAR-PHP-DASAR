<?php

//fuction berfungsi untuk menambung beberapa program saja
//untuk pemanggilanya kita bisa menggunakan nama functionnya beserta ()
function Text()
{
    echo "Hello Helmi Tazkia" . PHP_EOL;
}

Text();
//Text();

//bisa juga sebuah function di simpan di dalan if statement
//tapi function nya harus pernah di buat dulu / harus bernilai true

$buat = true;

if ($buat) {
    function  Hello()
    {
        echo "Hallo Stikom Binaniaga";
    }
}

Hello();
