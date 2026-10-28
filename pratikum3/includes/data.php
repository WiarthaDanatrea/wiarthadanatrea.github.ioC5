<?php
// ============================================
// DATA TOKO: Executor Computer
// ============================================

$namaToko = "Executor Computer";

// Array multidimensi: kode produk => data produk (array asosiatif) (Total 12 Produk)
$produk = [
    "C001" => [
        "nama"     => "PC Gaming Ryzen 5 RTX 4060",
        "kategori" => "PC Rakitan",
        "harga"    => 12500000,
        "diskon"   => 10,
        "stok"     => 7,
        "ikon"     => "🖥️",
    ],
    "C002" => [
        "nama"     => "Laptop ASUS ROG Strix G15",
        "kategori" => "Laptop",
        "harga"    => 17800000,
        "diskon"   => 5,
        "stok"     => 3,
        "ikon"     => "💻",
    ],
    "C003" => [
        "nama"     => "Monitor Gaming 24 Inch 165Hz",
        "kategori" => "Monitor",
        "harga"    => 2100000,
        "diskon"   => 15,
        "stok"     => 12,
        "ikon"     => "📺",
    ],
    "C004" => [
        "nama"     => "Keyboard Mechanical RGB",
        "kategori" => "Aksesoris",
        "harga"    => 650000,
        "diskon"   => 0,
        "stok"     => 0,
        "ikon"     => "⌨️",
    ],
    "C005" => [
        "nama"     => "Mouse Wireless Gaming",
        "kategori" => "Aksesoris",
        "harga"    => 350000,
        "diskon"   => 20,
        "stok"     => 4,
        "ikon"     => "🖱️",
    ],
    "C006" => [
        "nama"     => "SSD NVMe 1TB Gen4",
        "kategori" => "Komponen",
        "harga"    => 1200000,
        "diskon"   => 0,
        "stok"     => 15,
        "ikon"     => "💾",
    ],
    "C007" => [
        "nama"     => "Processor Intel Core i7-14700K",
        "kategori" => "Komponen",
        "harga"    => 6400000,
        "diskon"   => 10,
        "stok"     => 5,
        "ikon"     => "⚙️",
    ],
    "C008" => [
        "nama"     => "VGA Card NVIDIA RTX 4070 Ti",
        "kategori" => "Komponen",
        "harga"    => 14500000,
        "diskon"   => 5,
        "stok"     => 2,
        "ikon"     => "🔥",
    ],
    "C009" => [
        "nama"     => "RAM DDR5 32GB (2x16GB) 6000MHz",
        "kategori" => "Komponen",
        "harga"    => 1850000,
        "diskon"   => 15,
        "stok"     => 8,
        "ikon"     => "⚡",
    ],
    "C010" => [
        "nama"     => "Headset Gaming 7.1 Surround",
        "kategori" => "Aksesoris",
        "harga"    => 750000,
        "diskon"   => 0,
        "stok"     => 6,
        "ikon"     => "🎧",
    ],
    "C011" => [
        "nama"     => "Power Supply 750W 80+ Gold",
        "kategori" => "Komponen",
        "harga"    => 1400000,
        "diskon"   => 20,
        "stok"     => 10,
        "ikon"     => "🔌",
    ],
    "C012" => [
        "nama"     => "PC Office Core i3 Gen 12",
        "kategori" => "PC Rakitan",
        "harga"    => 4500000,
        "diskon"   => 0,
        "stok"     => 4,
        "ikon"     => "🏢",
    ],
];

// Contoh pesanan pelanggan: kode produk => jumlah yang dibeli
$pesanan = [
    "C001" => 1,
    "C003" => 2,
    "C005" => 1,
    "C010" => 1,
];