<?php 
// pertemuan 2 - PHP Dasar

// standar output

// echo, print
// print_r debuging
// var_dump debuging

echo "Iwan Setiawan";
// print_r ("Iwan Setiawan");
// var_dump("Iwan Setiawan");

// penulisan sintaks php
// 1. php didalam html
// 2. html didalam php
// variabel
// $nama = "Nasih Assidqi";
// echo "Nama saya $nama";

// operator
// aritmatika + - * / %
// $x = 10;
// $y = 20;
// echo $x + $y;

// penggaung string / concaatenation / concat / .
// $nama_depan = "Nasih";
// $nama_belakang = "Assidqi";
// echo $nama_depan . " " . $nama_belakang;

// operator assigment / penugasan
// =, +=, -=, /=, %=, .=

// operator perbandingan
// <, >, <=, >=, ==, !=

// operator identitas
// ===, !==

// operator logika
// &&, ||, !
 ?>
<?php
 $nama = "Nasih Assidqi";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Halo nama saya <?php echo $nama;?></h1>
</body>
</html>