<?php

require "functions.php";

$id = $_GET["id"];

$produk = query("SELECT * FROM produk WHERE id = '$id'")[0];

$result = 0;
if (isset($_POST["submit"])) {
    $result = updateProduk($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Edit Produk</title>
</head>

<body>

    <form action="" method="POST" class="container mt-5 col-lg-4">
         <?php if ($result > 0) : ?>
            <div class="alert alert-success mt-2" role="alert">
                Data berhasil diperbarui!
            </div>
        <?php endif; ?>
        <input type="hidden" name="id" value="<?= $produk["id"]; ?>">
        <div class="form-group">
            <label for="nama-produk">Nama Produk</label>
            <input type="text" class="form-control" id="nama-produk" name="namaProduk" value="<?= $produk["nama_produk"]; ?>">
        </div>
        <div class="form-group">
            <label for="keterangan">Deskripsi</label>
            <textarea class="form-control" id="keterangan" rows="3" name="keterangan"><?= $produk["keterangan"]; ?></textarea>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="<?= $produk["harga"]; ?>">
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $produk["jumlah"]; ?>">
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="submit">Perbarui Data</button>
        <a class="btn btn-outline-secondary btn-block" href="index.php" role="button">Kembali</a>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>