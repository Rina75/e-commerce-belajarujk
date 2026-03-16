<?php
session_start();

$id = $_GET['id'];
$aksi = $_GET['aksi'];

if ($aksi == "tambah") {
    $_SESSION['cart'][$id]['qty']++;
}

if ($aksi == "kurang") {

    $_SESSION['cart'][$id]['qty']--;

    if ($_SESSION['cart'][$id]['qty'] <= 0) {
        unset($_SESSION['cart'][$id]);
    }
}

header("location:cart.php");
