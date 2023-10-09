<?php 

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// mengambil data
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// mengambil data mahasiswa (fetch)
// mysqli_fetch_row() - mengembalikan array numerik
// mysqli_fetch_assoc() - megembalikan array asossiative
// mysqli_fetch_array() - mengembalikan keduanya
// mysqli_fetch_object() - mengembalikan object

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NO</th>
            <th>Aksi</th>
            <th>Foto</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        
        <?php $i = 1; ?>
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">edit</a> | 
                <a href="">delete</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="50"></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php 
            $i++;
            endwhile; 
            ?>

    </table>
</body>
</html>