<?php 

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    $nrp = htmlspecialchars($_POST["nrp"]);
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $jurusan = htmlspecialchars($_POST["jurusan"]);
    $gambar = htmlspecialchars($_POST["gambar"]);

    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");

    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;
    $id = htmlspecialchars($_POST["id"]);
    $nrp = htmlspecialchars($_POST["nrp"]);
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $jurusan = htmlspecialchars($_POST["jurusan"]);
    $gambar = htmlspecialchars($_POST["gambar"]);

    $query = "UPDATE mahasiswa SET
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
              WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM mahasiswa
                WHERE
                nama like '%$keyword%' OR
                nrp like '%$keyword%' OR
                email like '%$keyword%' OR
                jurusan like '%$keyword%'
                ";
    return query($query);
}