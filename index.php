<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

    <title>Toko Peralatan Dapur</title>

    <link rel="stylesheet" href="css/style.css">

    <script>
        function cariProduk() {

            let input = document.getElementById("search").value.toLowerCase()

            let produk = document.getElementsByClassName("produk")

            for (let i = 0; i < produk.length; i++) {

                let nama = produk[i].getElementsByTagName("h3")[0].innerText.toLowerCase()

                if (nama.includes(input)) {
                    produk[i].style.display = "block"
                } else {
                    produk[i].style.display = "none"
                }

            }

        }
    </script>

</head>

<body>

    <header>

        <h1>Toko Peralatan Dapur</h1>

        <a href="cart.php">Keranjang 🛒</a>

    </header>


    <div class="search-box">

        <input type="text" id="search" placeholder="Cari barang..." onkeyup="cariProduk()">

    </div>


    <div class="container">


        <div class="produk">

            <img src="images/penggorengan.jpg">

            <h3>Penggorengan</h3>

            <p>Rp 75.000</p>

            <form action="add_cart.php" method="post">

                <input type="hidden" name="nama" value="Penggorengan">
                <input type="hidden" name="harga" value="75000">

                <button>Tambah ke Keranjang</button>

            </form>

        </div>


        <div class="produk">

            <img src="images/gelas.jpg">

            <h3>Gelas</h3>

            <p>Rp 20.000</p>

            <form action="add_cart.php" method="post">

                <input type="hidden" name="nama" value="Gelas">
                <input type="hidden" name="harga" value="20000">

                <button>Tambah ke Keranjang</button>

            </form>

        </div>


        <div class="produk">

            <img src="images/piring.jpg">

            <h3>Piring</h3>

            <p>Rp 25.000</p>

            <form action="add_cart.php" method="post">

                <input type="hidden" name="nama" value="Piring">
                <input type="hidden" name="harga" value="25000">

                <button>Tambah ke Keranjang</button>

            </form>

        </div>


    </div>

</body>

</html>