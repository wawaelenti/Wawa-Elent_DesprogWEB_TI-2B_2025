<?php
// File: koneksi.php
// Digunakan untuk menghubungkan ke database MySQL

$host = "localhost";   // nama host (default: localhost)
$user = "root";        // user MySQL (default: root)
$pass = "";            // password MySQL (kosong di XAMPP)
$db   = "prakwebdb";   // nama database sesuai jobsheet

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Mengecek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

