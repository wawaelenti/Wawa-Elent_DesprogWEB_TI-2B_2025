<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// Operator perbandingan
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// Operator logika
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// Operator penugasan majemuk
$aTambah = 10; $aTambah += $b;
$aKurang = 10; $aKurang -= $b;
$aKali   = 10; $aKali   *= $b;
$aBagi   = 10; $aBagi   /= $b;
$aSisa   = 10; $aSisa   %= $b;

$hasilIdentik = $a == $b;
$hasilTidakIdentik = $a !== $b;

echo "Nilai a = 10 <br>";
echo "Nilai b = {$b} <br><br>";

echo "Hasil Tambah (a + b) = {$hasilTambah} <br>";
echo "Hasil Kurang (a - b) = {$hasilKurang} <br>";
echo "Hasil Kali (a * b) = {$hasilKali} <br>";
echo "Hasil Bagi (a / b) = {$hasilBagi} <br>";
echo "Sisa Bagi (a % b) = {$sisaBagi} <br>";
echo "Pangkat (a ** b) = {$pangkat} <br><br>";

echo "Apakah a == b ? " . ($hasilSama ? "true" : "false") . "<br>";
echo "Apakah a != b ? " . ($hasilTidakSama ? "true" : "false") . "<br>";
echo "Apakah a < b ? " . ($hasilLebihKecil ? "true" : "false") . "<br>";
echo "Apakah a > b ? " . ($hasilLebihBesar ? "true" : "false") . "<br>";
echo "Apakah a <= b ? " . ($hasilLebihKecilSama ? "true" : "false") . "<br>";
echo "Apakah a >= b ? " . ($hasilLebihBesarSama ? "true" : "false") . "<br><br>";

echo "Hasil (a && b) = " . ($hasilAnd ? "true" : "false") . "<br>";
echo "Hasil (a || b) = " . ($hasilOr ? "true" : "false") . "<br>";
echo "Hasil (!a) = " . ($hasilNotA ? "true" : "false") . "<br>";
echo "Hasil (!b) = " . ($hasilNotB ? "true" : "false") . "<br><br>";

echo "Hasil a += b = {$aTambah} <br>";
echo "Hasil a -= b = {$aKurang} <br>";
echo "Hasil a *= b = {$aKali} <br>";
echo "Hasil a /= b = {$aBagi} <br>";
echo "Hasil a %= b = {$aSisa} <br><br>";

echo "Apakah a === b ? " . ($hasilIdentik ? "true" : "false") . "<br>";
echo "Apakah a !== b ? " . ($hasilTidakIdentik ? "true" : "false") . "<br>";

?>
