<?php 
//$counter=1  adalah init statement (statement pertama )
//$i <=10 ; Yaitu kondisi yang akan di ulang
//$i++  adalah post statement  yang akan di eksekusi setiap kali perulangan


// for ($counter=1; $counter <=10;) { 
//    echo "Ini adalah perulangan ke -".$counter .PHP_EOL;
//    $counter++;
// }

for ($counter=1; $counter <=10; $counter++) { 
   echo "Ini adalah perulangan ke -".$counter .PHP_EOL;
   
}

for ($counter=10; $counter >=1; $counter--) { 
   echo "Ini adalah perulangan ke -".$counter .PHP_EOL;
   
}

//styntak alternatif
//menggunakan titik 2

// for ($counter=10; $counter >=1; $counter--):
//     echo "Ini adalah perulangan ke -".$counter .PHP_EOL;
    
// endfor;



?>