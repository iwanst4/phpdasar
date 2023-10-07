<?php 
// array
// variabel yang dapat memiliki banyak nilai

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis");
// cara baru
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

// menampilkan array
var_dump($hari);
echo "<br>";
print_r($bulan);

// menampilkan 1 elemen pada array
echo $bulan[3];

// menambahkan elemen pada array
var_dump($hari);
echo "<br>";
$hari[] = "Jum'at";
$hari[] = "Sabtu";
var_dump($hari);
?>