<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

    <title>Keranjang Belanja</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <h2>Keranjang Belanja</h2>

    <table>

        <tr>
            <th>Produk</th>
            <th>Harga</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>

        <?php

        $total = 0;

        if (isset($_SESSION['cart'])) {

            foreach ($_SESSION['cart'] as $key => $item) {

                $subtotal = $item['harga'] * $item['qty'];

                $total += $subtotal;

                echo "

<tr>

<td>{$item['nama']}</td>

<td>{$item['harga']}</td>

<td>

<a href='update_cart.php?id=$key&aksi=kurang'>-</a>

{$item['qty']}

<a href='update_cart.php?id=$key&aksi=tambah'>+</a>

</td>

<td>$subtotal</td>

<td>

<a href='remove_cart.php?id=$key'>Hapus</a>

</td>

</tr>

";
            }
        }

        ?>

        <tr>

            <td colspan="3"><b>Total</b></td>
            <td colspan="2"><b><?php echo $total ?></b></td>

        </tr>

    </table>

    <br>

    <a href="index.php">← Lanjut Belanja</a>

</body>

</html>