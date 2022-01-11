<?php 
//jadi klo do while itu langsung mengeluarkan value walaupun itu false
//beda sama foorloop dan while loop
//dia jika nilainya false maka value tidak akan di keluarkan
// do while cocok untuk pembuatan aplikasi tanya jawab

$counter = 100;
do{
    echo "Ini adalah Perulangan = " .$counter .PHP_EOL;
    $counter++;
}while ($counter <= 10) 

?>