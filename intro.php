<?php
session_start();
echo "Selamat datang <b>".$_SESSION['username']."</b>";
?>

<ul>
<li><a href="tabel_barang.php">Tambah Barang</a>
<li><a href="tabel_kategori.php">Tambah Kategori</a>
<li><a href="logout.php">Logout</a>
</ul>