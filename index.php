<?php
require "functions.php";

$products = query("SELECT * FROM produk");

if(isset($_POST["cari"])) {
    $products = cariProduk($_POST["keyword"]);
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

    <title>CRUD Database</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Produk</h1>
        <a class="btn btn-primary mb-2" href="tambah-produk.php" role="button">Daftarkan produk baru</a>
        <form action="" method="POST">
            <div class="form-group d-flex d-inline">
                <input type="text" class="form-control w-50" name="keyword" placeholder="Cari data produk...">
                <button type="submit" class="btn btn-light" name="cari">Cari</button>
            </div>
        </form>
        <form>
        <?php if (@$_GET["affected-rows"] > 0) : ?>
            <div class="alert alert-danger mt-2" role="alert">
                Data berhasil dihapus!
            </div>
        <?php endif; ?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $product["nama_produk"] ?></td>
                        <td><?= $product["keterangan"] ?></td>
                        <td><?= $product["harga"] ?></td>
                        <td><?= $product["jumlah"] ?></td>
                        <td class="text-center">
                            <a class="btn btn-dark btn-sm" href="edit.php?id=<?= $product["id"] ?>" role="button">Edit</a>
                            <a class="btn btn-danger btn-sm" href="hapus.php?id=<?= $product["id"] ?>" role="button">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

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