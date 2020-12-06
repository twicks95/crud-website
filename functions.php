<?php

$serverName = "localhost";
$username = "root";
$password = "";
$databaseName = "arkademy_db";

// Koneksi ke database
$db = mysqli_connect($serverName, $username, $password, $databaseName);

// Membuat fungsi untuk melakukan query ke database dan mengembalikan nilai boolean
function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);

    if (!$result) {
        echo "Error number " . "[" . mysqli_errno($db) . "]" . " : " . mysqli_error($db);
    } else {
        return $result;
    }
};

function insertProduk($post)
{
    global $db;

    $namaProduk = $post["namaProduk"];
    $deskripsi = $post["deskripsi"];
    $harga = $post["harga"];
    $jumlah = $post["jumlah"];

    // Lakukan query insert
    query("INSERT INTO produk VALUES ('$namaProduk', '$deskripsi', '$harga', '$jumlah')");

    // Mengembalikan nilai int(1) jika ada data yang berhasil ditambahkan
    return mysqli_affected_rows($db);
}

function hapusProduk($namaProduk)
{
    global $db;

    $namaProduk = $namaProduk;

    // Lakukan query delete
    query("DELETE FROM produk WHERE nama_produk='$namaProduk'");

    // Mengembalikan nilai int(1) jika ada data yang berhasil dihapus
    return mysqli_affected_rows($db);
}
