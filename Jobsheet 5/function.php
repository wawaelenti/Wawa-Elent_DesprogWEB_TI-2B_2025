<?php
// Fungsi pertama tanpa parameter
function perkenalanAwal() {
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Wawa Elent<br/>";
    echo "Senang berkenalan dengan Anda<br/><br/>";
}

// Memanggil fungsi awal 2 kali
perkenalanAwal();
perkenalanAwal();

echo "<hr>";

// Fungsi kedua dengan parameter salam & nama
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan Anda<br/><br/>";
}

// Memanggil fungsi dengan parameter lengkap
perkenalan("Hamdana", "Hallo");

echo "<hr>";

// Memanggil fungsi lagi dengan variabel
$saya = "Elok";
$ucapanSalam = "Selamat pagi";
perkenalan($saya, $ucapanSalam);

echo "<hr>";

// Memanggil fungsi tanpa parameter salam (akan pakai default Assalamualaikum)
perkenalan($saya);
?>
