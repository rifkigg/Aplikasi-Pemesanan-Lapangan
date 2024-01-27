<?php
// koneksi ke database
$database = mysqli_connect("localhost", "root", "", "db_pemesanan_lapangan");
function tambah($data) {
    //mengambil variable dari luar function
    global $database;

    //variable untuk menyimpan isi dari input user
    $nama = htmlspecialchars($data["nama"]);
    $hari = htmlspecialchars($data["hari"]);
    $jam = htmlspecialchars($data["jam"]);

    //membuat varible yang beri code yang akan di jalankan pada mysql
    $query = "UPDATE pemesanan_lapangan 
                SET `$hari` = '$nama'
                WHERE `Jam` = '$jam';";

    //menjalankan varible database dan query
    mysqli_query($database, $query);
    
    //diulang lagi
    return mysqli_affected_rows($database);
}
