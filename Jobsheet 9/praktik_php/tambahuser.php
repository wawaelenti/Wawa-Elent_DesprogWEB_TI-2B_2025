<?php
// Membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

// Mengecek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk menambahkan data ke tabel user
// Password dienkripsi menggunakan md5()
$sql = "INSERT INTO user (username, password)
        VALUES ('admin', md5('1234'))";

// Menjalankan query
if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil ditambahkan ke tabel user";
} else {
    echo "Error saat menambahkan data: " . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?>
