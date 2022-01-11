<?php 

$data = [1,2,3,4,5,6,7,8,9,10];

$name = [
    "Nama" => "Helmi Tazkia",
    "Mahasiswa" => "Stikom Binaniaga Bogor" 
];
//Descending Data
rsort($data);
//Asscending Data
sort($data);
var_dump($data);

//Mengambil indexnya saja
var_dump(array_keys($name));
//Mengambil Data nya saja tanpa key nya
var_dump(array_values($name));

var_dump($name["Nama"],
        $name["Mahasiswa"]
);