<?php

$totalKursi = 45;
$kursiTerisi = 28;

// Hitung kursi kosong
$kursiKosong = $totalKursi - $kursiTerisi;

// Hitung persentase kursi kosong
$persenKosong = ($kursiKosong / $totalKursi) * 100;

// Tampilkan hasil
echo "Total kursi di restoran = {$totalKursi} <br>";
echo "Jumlah kursi terisi = {$kursiTerisi} <br>";
echo "Jumlah kursi kosong = {$kursiKosong} <br>";
echo "Persentase kursi kosong = " . number_format($persenKosong, 2) . "%";
?>

