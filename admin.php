<?php
    // Menghubungakan file index.php ke select.php
     require 'select.php';
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari input 'nama'
        $nama = $_POST['nama'];
        $password = $_POST['password'];
        if ($nama == 'Admin' && $password == 'Rahasia') {
            echo"<script>
                    alert('Login Berhasil');
                    document.location.href = 'admin.php';
                </script>";
            
        }else {
            echo"<script>
                    alert('Login Gagal');
                    document.location.href = 'index.php';
                </script>";
        }
        
    }
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
    <a href="pemesanan.php">Log Out</a>
</nav>

<h1>Selamat Datang Admin Tercintahhh</h1>
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
    </tr>
            <?php endforeach; ?>
            
        </table>
        <!-- membuat agar berpidah ke file ubah.php -->
        <a href="tambah.php">Menambahkan data</a>
        <a href="hapus.php">Hapus</a>
        <a href="ubah.php">Ubah</a> 
    
</body>
</html>
