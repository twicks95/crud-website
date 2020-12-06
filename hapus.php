<?php
require "functions.php";

$produk = $_GET["namaProduk"];

if (hapusProduk($produk) > 0) {
    header("Location: index.php?affected-rows=1");
} else {
    header("Location: index.php?affected-rows=0");
}
