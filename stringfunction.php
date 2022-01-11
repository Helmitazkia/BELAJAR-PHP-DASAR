<?php

//Memecahkan Array Menjadi string
var_dump(join(",", [1, 2, 3, 4, 5]));
//Memecahkan String Menjadi Array
var_dump(explode(" ", "Moh Helmi Tazkia"));
//function Menjadikan Huruf kecil
var_dump(strtolower("HELMI TAZKIA"));
//function Menjadikan Huruf Besar
var_dump(strtoupper("Helmi Tazkia"));
//untuk mengambil karakter sesuai dengan index array (0 - 4)
var_dump(substr("Helmi Tazkia", 0, 4));
