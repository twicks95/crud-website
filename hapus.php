<?php
require "functions.php";

$id = $_GET["id"];

if (hapusProduk($id) > 0) {
    header("Location: index.php?affected-rows=1");
} else {
    header("Location: index.php?affected-rows=0");
}
