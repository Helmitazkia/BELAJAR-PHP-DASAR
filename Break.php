<?php
//artinya di hentikan menggunakan break

$counter = 1;
while (true) :
    echo "Ini adalah Perulangan = " . $counter . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }


endwhile;
