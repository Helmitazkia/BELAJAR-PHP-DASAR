<?php 

$nilai = "B";

if ($nilai == "A") {
    echo "Kamu Lulus dengan sangat baik sekali..." .PHP_EOL;
}elseif ($nilai == "B" || $nilai =="C") {
    echo "kamu DI nyatakan Lulus .....".PHP_EOL;
}elseif ($nilai == "D") {
    echo "Kamu tidak lulus dalam ujian ini".PHP_EOL;
}else {
    echo "Mungkin kamu salah jurusan gasy....".PHP_EOL;
}

//Switch di gunakan untuk mempermudah statement yang tidak banyak nilai nya
//hanya untuk perbandingan nilai 
switch ($nilai) :
    case 'A':
        echo "Kamu Lulus dengan sangat baik sekali..." .PHP_EOL;
    break;
    case 'B':
    case 'C':
        echo "kamu DI nyatakan Lulus .....".PHP_EOL;
    break;
    case 'D':
        echo "Kamu tidak lulus dalam ujian ini".PHP_EOL;
    break;
    default:
    //dafault maksudnya else 
    //statemtn terakhir
       echo "Mungkin kamu salah jurusan gasy....".PHP_EOL;
endswitch;

?>

