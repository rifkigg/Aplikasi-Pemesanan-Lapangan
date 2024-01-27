        <?php
        // Menghubungakan file index.php ke insert.php
        require 'insert.php';

        $pemesanan = query("SELECT * FROM pemesanan_lapangan");

        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAKA Sports</title>
</head>
<body>
    <h1>Table Pemesanan Lapangan</h1>
    <table border="1" cellpadding="10" cellspacing="0">
   
    <tr>
        <th>jam</th>
        <th>senin</th>
        <th>selasa</th>
        <th>rabu</th>
        <th>kamis</th>
        <th>jumat</th>
        <th>sabtu</th>
        <th>minggu</th>
    </tr>
        
        <?php foreach( $pemesanan as $row ) : ?>
    <tr>
        <td>
            <a href="">Ubah</a>
            <a href="">Hapus</a>
        </td>
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


</body>
</html>
<?php
$database = mysqli_connect("localhost", "root", "", "db_pemesanan_lapangan");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikasi Pemesanan Lapangan</title>
    <style>
        background-image: url(/image/background.jpeg);
    </style>
  </head>
  <body>
    <nav>
      <a href="home">Home</a>
      <a href="pemesanan">Pemesanan</a>
      <a href="about">About</a>
    </nav>
    <h1>WELCOME TO GOR SAKA SPORTS</h1>
    
  </body>
</html>
</html>