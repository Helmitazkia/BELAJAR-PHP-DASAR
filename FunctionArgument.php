<?php
//fn=unction menggunakan argumentasi / variabel 
function Text($nama, $lastname)
{
    echo "Hello $nama $lastname" . PHP_EOL;
}

Text("Helmi", "Tazkia");
Text("Stikom Binaniaga", "indonesia");

//defaulf argument value
//bisa juga menggunakan argument defaulf
//jadi argumentasi nya di dekralasikan di parameter function

function Sayhello($name = "Farhan adima")
{
    echo "Hello $name " . PHP_EOL;
}
Sayhello();
Sayhello("Asep Maulana");


// type data di simpan di suatu variabel

function sum(int $firs, int $last)
{
    $total = $firs + $last;
    echo " Total  = $total" . PHP_EOL;
}
//di conversi ke int atau sebaliknya
sum("100", "100");
sum(100, 100);


// function menggunaa=kan type array

function sumall(array $value)
{
    $total = 0;
    foreach ($value as $values) {
        $total += $values;
    }
    echo "Total = $total " . PHP_EOL;
}

sumall([1, 2, 3, 4, 5]);


//menggunakan variabel argument list
// conversi ke array 
//menggunakan 3 titik di dalam parameter pertama

function ok(...$value)
{
    $total = 0;
    foreach ($value as $values) {
        $total += $values;
    }
    //implode konversi int ke string    
    echo "Total Dari =" . implode(",", $value) . "= $total" . PHP_EOL;
}
ok(1, 2, 3, 4, 5);


//klo ada array nya 
$value = [1, 2, 3, 4, 5];
//sama ,harus menggunakan 
ok(...$value);
