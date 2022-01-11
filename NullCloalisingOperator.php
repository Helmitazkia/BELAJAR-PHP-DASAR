<?php 

$data = [
    'action' => 'Data',
        'oke' => [
            'Nama' => 'Helmi Tazkia',
             'Mahasiswa' => 'Stikom Binaniaga'
        ]
];

//Cara biasa
// isset itu cek data  ada atau tidak
// if (isset($data['action'])) {
//     $action = $data['action'];
// }else {
//     $action = "Nothing found".PHP_EOL;
// }

//Cara Operator Ternary
//$action = $data['action'] ? $data["action"] : "Nothing Found";

//Cara Operator Cloalising Operator
//$action = $data['oke']['Nama'].PHP_EOL .$data['oke']['Mahasiswa'] ?? "Nothing Found";
$action = $data['oke']['Nama'] ?? "Nothing Found";
echo $action;


?>