<?php
// koneksi ke database
$connect = mysqli_connect("localhost", "root", "", "prakwebdb");

// cek koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>