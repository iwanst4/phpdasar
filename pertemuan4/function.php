<?php 
function salam($waktu = "Datang", $nama = "Administrator"){
    return("Selamat $waktu, $nama!");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1>
        <?php 
        echo salam("Pagi", "Nasih Assidqi");
        ?>
    </h1>
</body>
</html>