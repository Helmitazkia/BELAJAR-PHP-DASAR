<?php 

//di dalam while loop tidak ada 
//ini statemtemnt ($counter = 1;)
//tidak ada post statement (   $counter++;)
//dia langsung menggunakan kondisi yang akan di ulang

$counter = 1;
while ($counter <= 10) {
    echo "Ini adalah Perulangan = " .$counter .PHP_EOL;
    $counter++;
}
//alternatif syntak
//menggunakan titik 2 tapi harus di tutup dengan end di akhir syntak
$counter = 1;
while ($counter <= 10) :
    echo "Ini adalah Perulangan = " .$counter .PHP_EOL;
    $counter++;
endwhile;




?>