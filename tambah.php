<?php
//menambahkan isi file insert.php
require 'insert.php';

// cek apakah sudah di submit apa blom
if (isset($_POST["submit"])) {
    //beri alert apabila sudah di submit
    if (tambah($_POST) > 0) {
           echo"<script>
                alert('data berhasil ditambahkan!!');
                document.location.href = 'admin.php';
            </script>";
    }else {
            "<script>
                alert('data gagal ditambahkan!!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert data</title>
</head>
<body>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama Pemesan :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="hari">Hari :</label>
                <select name="hari" id="hari" required>
                    <option value="senin">Senin</option>
                    <option value="selasa">Selasa</option>
                    <option value="rabu">Rabu</option>
                    <option value="kamis">Kamis</option>
                    <option value="jumat">Jumat</option>
                    <option value="sabtu">Sabtu</option>
                    <option value="minggu">Minggu</option>
                </select>
            </li>
            <li>
                <label for="jam">Jam :</label>
                <select name="jam" id="jam" required>
                    <option value="01-02">Jam 01.00 Sampai Jam 02.00</option>
                    <option value="02-03">Jam 02.00 Sampai Jam 03.00</option>
                    <option value="03-04">Jam 03.00 Sampai Jam 04.00</option>
                    <option value="04-05">Jam 04.00 Sampai Jam 05.00</option>
                    <option value="05-06">Jam 05.00 Sampai Jam 06.00</option>
                    <option value="06-07">Jam 06.00 Sampai Jam 07.00</option>
                    <option value="07-08">Jam 07.00 Sampai Jam 08.00</option>
                    <option value="08-09">Jam 08.00 Sampai Jam 09.00</option>
                    <option value="09-10">Jam 09.00 Sampai Jam 10.00</option>
                    <option value="10-11">Jam 10.00 Sampai Jam 11.00</option>
                    <option value="11-12">Jam 11.00 Sampai Jam 12.00</option>
                    <option value="12-13">Jam 12.00 Sampai Jam 13.00</option>
                    <option value="13-14">Jam 13.00 Sampai Jam 14.00</option>
                    <option value="14-15">Jam 14.00 Sampai Jam 15.00</option>
                    <option value="15-16">Jam 15.00 Sampai Jam 16.00</option>
                    <option value="16-17">Jam 16.00 Sampai Jam 17.00</option>
                    <option value="17-18">Jam 17.00 Sampai Jam 18.00</option>
                    <option value="18-19">Jam 18.00 Sampai Jam 19.00</option>
                    <option value="19-20">Jam 19.00 Sampai Jam 20.00</option>
                    <option value="20-21">Jam 20.00 Sampai Jam 21.00</option>
                    <option value="21-22">Jam 21.00 Sampai Jam 22.00</option>
                    <option value="22-23">Jam 22.00 Sampai Jam 23.00</option>
                    <option value="23-00">Jam 23.00 Sampai Jam 00.00</option>
                </select>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>