<?php
session_start();

echo "<h2>Keranjang berhasil disimpan</h2>";

session_destroy();

echo "<a href='index.php'>Belanja Lagi</a>";
