<?php

$nama = ["Helmi", "Tazkia", "Stikom Binaniaga"];

//karna index di mulai dari 0
//looping sesuai dengan jumlah array  
for ($i = 0; $i < count($nama); $i++) {
    echo "Data Ke $i = " . $nama[$i] . "\n";
}

//loopinng menggunakan foreach lebih simpel
//yang membedakan tidak ada data index nya

foreach ($nama as $names => $value) {
    echo " Data Ke  $value  =  $names" . PHP_EOL;
}


$person = [
    "firs_name" => "Helmi Tazkia",
    "Last_Name" => "Saepudin"

];

foreach ($person as $key => $value) {
    echo "$key = $value" . PHP_EOL;
}
