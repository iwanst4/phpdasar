<?php 
// cek apakah data belum dikirim
if (!isset ($_GET["nama"]) ||
    !isset ($_GET["niy"]) ||
    !isset ($_GET["email"]) ||
    !isset ($_GET["jabatan"]) ||
    !isset ($_GET["h1"]) ||
    !isset ($_GET["h2"]) ||
    !isset ($_GET["h3"]) ) {
    // redirect
    header ("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pegawai</title>
</head>
<body>
    <h2>Detail Pegawai</h2>
    <ul>
        <li><img src="img/<?= $_GET["gambar"] ?>" alt=""></li>
        <li><?= $_GET["nama"] ?></li>
        <li><?= $_GET["niy"] ?></li>
        <li><?= $_GET["email"] ?></li>
        <li><?= $_GET["jabatan"] ?></li>
        <li><?= $_GET["h1"] . " - " . $_GET["h2"] . " - " . $_GET["h3"]?></li>
    </ul>
    <a href="latihan1.php">Kembali</a>
</body>
</html>