<?php
// Data menu (ambil dari kode sebelumnya)
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai",
                    ],
                    [
                        "nama" => "Gunung",
                    ]
                ]
            ],
            [
                "nama" => "Kuliner",
            ],
            [
                "nama" => "Hiburan",
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

// Fungsi rekursif untuk menampilkan menu bertingkat
function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}</li>";

        // Jika ada subMenu, panggil lagi fungsi ini
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
    }
    echo "</ul>";
}

// Panggil fungsi
tampilkanMenuBertingkat($menu);
?>

