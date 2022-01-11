<?php


/*Mengggunakan function Rekursif
artinya function memanggil dirinya sendiri
*/

function faktor(int $value): int
{
    if ($value == 1) {
        //Jika value 1 maka perulangan akan berhenti
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
