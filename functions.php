<?php

$serverName = "localhost";
$username = "root";
$password = "";
$databaseName = "arkademy_db";

// Koneksi ke database
$db = mysqli_connect($serverName, $username, $password, $databaseName);

// Membuat fungsi untuk melakukan query ke database dan menampung hasil query ke variabel array
function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);

    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };

    return $rows;
};

function tambahProduk($data)
{
    global $db;

    $namaProduk = $data["namaProduk"];
    $keterangan = $data["keterangan"];
    $harga = $data["harga"];
    $jumlah = $data["jumlah"];

    // Lakukan query insert
    $query = "INSERT INTO produk VALUES ('','$namaProduk', '$keterangan', '$harga', '$jumlah')";
    mysqli_query($db, $query);

    // Mengembalikan nilai int(1) jika ada data yang berhasil ditambahkan
    return mysqli_affected_rows($db);
}

function hapusProduk($id)
{
    global $db;

    $id = $id;

    // Lakukan query delete
    $query = "DELETE FROM produk WHERE id='$id'";
    mysqli_query($db, $query);

    // Mengembalikan nilai int(1) jika ada data yang berhasil dihapus
    return mysqli_affected_rows($db);
}

function updateProduk($data) {
    global $db;

    $id = $data["id"];
    $namaProduk = $data["namaProduk"];
    $keterangan = $data["keterangan"];
    $harga = $data["harga"];
    $jumlah = $data["jumlah"];

    // Lakukan query insert
    $query = "UPDATE produk SET
                nama_produk = '$namaProduk',
                keterangan = '$keterangan',
                harga = '$harga',
                jumlah = '$jumlah' 
              WHERE id='$id'";
    mysqli_query($db, $query);

    // Mengembalikan nilai int(1) jika ada data yang berhasil ditambahkan
    return mysqli_affected_rows($db);
}
