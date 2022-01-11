<?php

//function rekursif ini jangan di gunakan untuk menghitung factor yang banyak
function factorial(int $nilai): int
{
    $total = 1;

    for ($i = 1; $i <= $nilai; $i++) {
        $total = $total * $i;
    }

    return $total;
}
var_dump(factorial(5));
var_dump(1 * 2 * 3 * 4 * 5);

/*Mengggunakan function Rekursif
artinya function memanggil dirinya sendiri
*/

function faktor(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * faktor($value - 1);
    }
}

var_dump(faktor(5));
/*
Hakikatnya seperti ini yang di jalankan php
//faktor(5) * faktor(4) * faktor(3) * faktor(2) * faktor(1);
jadi klo udah 1 maka akan berhenti
*/
