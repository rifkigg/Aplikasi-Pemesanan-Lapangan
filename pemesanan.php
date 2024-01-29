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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Asul:wght@700&family=Bebas+Neue&family=Montserrat&family=Poppins&display=swap');
        body {
            margin: 0;
            padding: 0;
        }
        table {
            width: auto;
            text-align: center;
        }
        nav {
            top:0;
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            background-color: #364F6B;
            color: #F5F5F5;
            position: fixed;
        }
        nav h1 {
            font-family: 'Asul', serif;
        }
        nav .link a{
            text-decoration: none;
            color: #F5F5F5;
            padding-right: 20px;
            font-size: 20px;
            font-family: 'Poppins', sans-serif;
        }
        section h1 {
          margin-top: 110px;
          margin-bottom:20px;
          font-family: 'Asul', serif;
        }
        h1 {
            text-align:center;
            
        }
        footer {
            background-color:#243547;
            color:white;
        }
        .sosmed {
            display: flex;
            justify-content: center;
            gap:20px;
            align-items: center;
        }
        svg {
            width:20px;
            margin-bottom:100px;
            margin-top:30px;
        }
        </style>
</head>
<body>
<nav>
    <h1>Saka Sport</h1>
    <div class="link">
    <a href="index.php">Home</a>
    <a href="pemesanan.php">Pemesanan</a>
    <a href="about.php">About</a>
    <a href="login.php">Login</a>
    </div>

</nav>

<section>
<h1>Table Pemesanan Lapangan</h1>
    <table class="table table-bordered table-striped table-hover" border="1" cellpadding="10" cellspacing="0">
   
    <tr>
        <th scope="col">Jam</th>
        <th scope="col">Senin</th>
        <th scope="col">Selasa</th>
        <th scope="col">Rabu</th>
        <th scope="col">Kamis</th>
        <th scope="col">Jumat</th>
        <th scope="col">Sabtu</th>
        <th scope="col">Minggu</th>
    </tr>
        
        <?php foreach( $pemesanan as $row ) : ?>
    <tr>
        <td scope="row"><?= $row["Jam"]; ?></td>
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

        </section>
<footer>
    <h1>Kontak Kami</h1>
    <div class="sosmed">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
  
    </div>
</footer>
</body>
</html>
