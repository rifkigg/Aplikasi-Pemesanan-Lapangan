<?php
// 
// koneksi ke database
$database = mysqli_connect("localhost", "root", "", "db_pemesanan_lapangan");

function query($query) {
    global $database;
    $result = mysqli_query($database, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}