<?php 
$nilai = 69;
$absen =64;
$nama = "Helmi Tazkia";

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai $nama Adalah A , Kamu Lulus dalam Ujian Ini"."\n";
}else if ($nilai >=70 && $absen >=70) {
    echo "Nilai $nama Adalah B , Kamu Lulus dalam Ujian Ini"."\n";
}else if ($nilai >=60 && $absen >=60) {
    echo "Nilai $nama Adalah C , Kamu Lulus dalam Ujian Ini"."\n";
}else if ($nilai >=50 && $absen >=50) {
    echo "Nilai $nama Adalah D , Kamu Gagal dalam Ujian Ini"."\n";
}else {
    echo "Nilai $nama Adalah E , Kamu Gagal dalam Ujian Ini"."\n";
}


//klo menggunakan  titik 2 harus di akhiri dengan endif;

if ($nilai >= 80 && $absen >= 80):
    echo "Nilai $nama Adalah A , Kamu Lulus dalam Ujian Ini"."\n";
elseif ($nilai >=70 && $absen >=70) :
    echo "Nilai $nama Adalah B , Kamu Lulus dalam Ujian Ini"."\n";
elseif ($nilai >=60 && $absen >=60) :
    echo "Nilai $nama Adalah C , Kamu Lulus dalam Ujian Ini"."\n";
elseif ($nilai >=50 && $absen >=50) :
    echo "Nilai $nama Adalah D , Kamu Gagal dalam Ujian Ini"."\n";
else :
    echo "Nilai $nama Adalah E , Kamu Gagal dalam Ujian Ini"."\n";
endif;



?>