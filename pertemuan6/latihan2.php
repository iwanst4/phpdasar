<?php 
// array asosiative
$pegawai = [
    [
    "nama" => "Iwan Setiawan", 
    "niy" => "045194677", 
    "email" => "iwan@gmail.com",  
    "jabatan" => "Staf TU",
    "sift" => ["h1" => "Senin", "h2" => "Selasa", "h3" => "Rabu"],
    "gambar" => "01.png"
    ],
    [
    "nama" => "Nasih Assidqi", 
    "niy" => "045198699", 
    "email" => "anas@gmail.com",  
    "jabatan" => "Kepala Sekolah",
    "sift" => ["h1" => "Senin", "h2" => "Rabu", "h3" => "Kamis"],
    "gambar" => "02.png"
    ],
    [
    "nama" => "Halwa Suara Assidqi", 
    "niy" => "045068898", 
    "email" => "suara@gmail.com",  
    "jabatan" => "Kepala Jurusan",
    "sift" => ["h1" => "Selasa", "h2" => "Kamis", "h3" => "Sabtu"],
    "gambar" => "03.png"
    ],
    [
    "nama" => "Dwi Arga", 
    "niy" => "04344678", 
    "email" => "arga@gmail.com",  
    "jabatan" => "Staf TU",
    "sift" => ["h1" => "Senin", "h2" => "Jum'at", "h3" => "Sabtu"],
    "gambar" => "04.png"
    ],
    [
    "nama" => "Nasrul Akbar", 
    "niy" => "045198666", 
    "email" => "acung@gmail.com",  
    "jabatan" => "Bendahara",
    "sift" => ["h1" => "Selasa", "h2" => "Rabu", "h3" => "Jum'at"],
    "gambar" => "05.png"
    ],
    [
    "nama" => "Ipan Hendrawan", 
    "niy" => "045123543", 
    "email" => "ipan@gmail.com",  
    "jabatan" => "Staf TU",
    "sift" => ["h1" => "Kamis", "h2" => "Jum'at", "h3" => "Sabtu"],
    "gambar" => "06.png"
    ],
    [
    "nama" => "Siti Aisyah", 
    "niy" => "045111777", 
    "email" => "siti@gmail.com",  
    "jabatan" => "Kesehatan",
    "sift" => ["h1" => "Senin", "h2" => "Selasa", "h3" => "Kamis"],
    "gambar" => "07.png"
    ],
    [
    "nama" => "Khadijah", 
    "niy" => "045155123", 
    "email" => "khadijah@gmail.com",  
    "jabatan" => "Staf TU",
    "sift" => ["h1" => "Rabu", "h2" => "Jum'at", "h3" => "Sabtu"],
    "gambar" => "08.png"
    ],
    [
    "nama" => "Budi Sudarsono", 
    "niy" => "040567798", 
    "email" => "budi@gmail.com",  
    "jabatan" => "Kebersihan",
    "sift" => ["h1" => "Kamis", "h2" => "Jum'at", "h3" => "Sabtu"],
    "gambar" => "09.png"
    ],
    [
    "nama" => "Bang Udin", 
    "niy" => "041238898", 
    "email" => "udin@gmail.com",  
    "jabatan" => "Kebersihan",
    "sift" => ["h1" => "Rabu", "h2" => "Jum'at", "h3" => "Sabtu"],
    "gambar" => "10.png"
    ]
    
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
</head>
<body>
    <h1>Daftar Pegawai :</h1>
    <?php foreach ($pegawai as $peg) : ?>
    <ul>
        <li><img src="img/<?= $peg["gambar"] ?>"></li>
        <li>Nama : <?= $peg["nama"]; ?></li>
        <li>NIY : <?= $peg["niy"]; ?></li>
        <li>Email : <?= $peg["email"]; ?></li>
        <li>Jabatan : <?= $peg["jabatan"]; ?></li>
        <li>Hari Masuk 1 : <?= $peg["sift"]["h1"]; ?></li>
        <li>Hari Masuk 2 : <?= $peg["sift"]["h2"]; ?></li>
        <li>Hari Masuk 3 : <?= $peg["sift"]["h3"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>