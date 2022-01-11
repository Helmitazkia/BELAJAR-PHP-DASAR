<?php

//callable yaitu fungsi untuk memanggil function
//dan untuk memanggil function callback itu menggunakan  call_user_func
function sayhello(string $name, callable $filter)
{
    $finalname  = call_user_func($filter, $name);
    echo    "Hello $finalname" . PHP_EOL;
};

sayhello("Helmi Tazkia", 'strtoupper');
sayhello("Fauzan", 'strtolower');
