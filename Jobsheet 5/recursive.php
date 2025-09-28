<?php
// Bagian 1: Halo Dunia (sekali saja agar tidak crash)
echo "<h2>Halo Dunia</h2>";
function tampilkanHaloDunia(){
    echo "Halo dunia! <br>";
}
// memanggil fungsi tampilkanHaloDunia
tampilkanHaloDunia();

echo "<hr>"; // pembatas antar bagian

// Bagian 2: Loop For 1–25
echo "<h2>Perulangan dengan For</h2>";
for ($i = 1; $i <= 25; $i++) {
    echo "Perulangan ke-{$i} <br>";
}

echo "<hr>"; // pembatas antar bagian

// Bagian 3: Fungsi Rekursif tampilkanAngka()
echo "<h2>Perulangan dengan Rekursi</h2>";
function tampilkanAngka (int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";

    // panggil diri sendiri selama $indeks < $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks +1);
    }
}
// memanggil fungsi tampilkanAngka untuk 20 kali
tampilkanAngka(20);
?>
