<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.<br>";

$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah: $salah<br>";

// mendefinisikan konstanta untuk nilai tetap
define("Nama_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

echo "Selamat datang di " . Nama_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".<br>";
?>
