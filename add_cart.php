<?php
session_start();

$nama = $_POST['nama'];
$harga = $_POST['harga'];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$found = false;

foreach ($_SESSION['cart'] as &$item) {

    if ($item['nama'] == $nama) {

        $item['qty']++;
        $found = true;
    }
}

if (!$found) {

    $_SESSION['cart'][] = [
        "nama" => $nama,
        "harga" => $harga,
        "qty" => 1
    ];
}

header("location:cart.php");
