<?php
    // Menghubungakan file index.php ke select.php
     require 'select.php';

    $pemesanan = query("SELECT * FROM pemesanan_lapangan");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
    <a href="index.php">Home</a>
    <a href="pemesanan.php">Pemesanan</a>
    <a href="about.php">About</a>
</nav>
<img src="galeri/foto 2.png" alt="">
<h3>Harga Rp 50.000/jam </h3>



<h1>Table Pemesanan Lapangan</h1>
    <table border="1" cellpadding="10" cellspacing="0">
   
    <tr>
        <th>Jam</th>
        <th>Senin</th>
        <th>Selasa</th>
        <th>Rabu</th>
        <th>Kamis</th>
        <th>Jumat</th>
        <th>Sabtu</th>
        <th>Minggu</th>
        <th>Aksi</th>
    </tr>
        
        <?php foreach( $pemesanan as $row ) : ?>
    <tr>
        <td><?= $row["Jam"]; ?></td>
        <td><?= $row["Senin"]; ?></td>
        <td><?= $row["Selasa"]; ?></td>
        <td><?= $row["Rabu"]; ?></td>
        <td><?= $row["Kamis"]; ?></td>
        <td><?= $row["Jumat"]; ?></td>
        <td><?= $row["Sabtu"]; ?></td>
        <td><?= $row["Minggu"]; ?></td>
        <td>
            <!-- membuat agar berpidah ke file ubah.php -->
            <a href="ubah.php?Jam=<?= $row["Jam"]; ?>">Ubah</a> 
            <a href="">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>

    </table>
    <a href="tambah.php">Menambahkan data</a>
    
</body>
</html>
