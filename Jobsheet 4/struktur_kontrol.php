<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A <br><br>";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B <br><br>";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C <br><br>";
} else {
    echo "Nilai huruf: D <br><br>";
}

$jarakSaatini = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatini < $jarakTarget) {
    $jarakSaatini += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan <b>$hari hari</b> untuk mencapai jarak $jarakTarget kilometer.<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah <br><br>";

$skorUjian = [85, 92, 78, 92];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br><br>";
}

//soal no 4.6
// Daftar nilai
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Urutkan nilai dari kecil ke besar
sort($nilaiSiswa);

$nilaiFinal = array_slice($nilaiSiswa, 2, -2);

$totalNilai = array_sum($nilaiFinal);

echo "Nilai awal siswa: ".implode(",", $nilaiSiswa). "<br>";
echo "Nilai setelah diabaikan: " .implode(",", $nilaiFinal). "<br>";
echo "Total nilai yang akan digunakan: ". $totalNilai . "<br><br>";


//soal no 4.7
// Harga produk
$harga = 120000;

// Cek diskon
if ($harga > 100000) {
    $diskon = 0.20 * $harga; // 20%
} else {
    $diskon = 0;
}

// Harga setelah diskon
$hargaAkhir = $harga - $diskon;

echo "Harga produk sebelum diskon: Rp " . number_format($harga,0,',','.') . "<br>";
echo "Diskon: Rp " . number_format($diskon,0,',','.') . "<br>";
echo "Harga yang harus dibayar: <b>Rp " . number_format($hargaAkhir,0,',','.') . "</b> <br><br>";

//soal no 4.8
$poin = 650; 

echo "Total skor pemain adalah: <b>$poin</b><br>";
$hadiah = ($poin > 500) ? "YA" : "TIDAK";

echo "Apakah pemain mendapatkan hadiah tambahan? <b>$hadiah</b>";

?>


