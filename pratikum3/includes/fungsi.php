<?php
// ============================================
// KUMPULAN FUNGSI TOKO
// ============================================

// Mengubah angka menjadi format Rupiah, contoh: 65000 -> "Rp 65.000"
function formatRupiah(float $angka): string {
    return "Rp " . number_format($angka, 0, ',', '.');
}

// Menghitung harga setelah dipotong diskon (persen)
function hargaSetelahDiskon(int $harga, int $persenDiskon = 0): int {
    $potongan = $harga * $persenDiskon / 100;
    return (int) round($harga - $potongan);
}

// Menentukan label stok
function labelStok(int $stok): string {
    return match (true) {
        $stok === 0 => "Habis",
        $stok < 5   => "Sisa $stok",
        default     => "Tersedia",
    };
}

// Menentukan warna badge Tailwind sesuai stok
function warnaStok(int $stok): string {
    return match (true) {
        $stok === 0 => "bg-red-100 text-red-700",
        $stok < 5   => "bg-amber-100 text-amber-700",
        default     => "bg-green-100 text-green-700",
    };
}

// Menghitung total nilai seluruh stok (harga setelah diskon x stok)
function hitungNilaiStok(array $daftarProduk): int {
    $total = 0;
    foreach ($daftarProduk as $item) {
        $total += hargaSetelahDiskon($item["harga"], $item["diskon"]) * $item["stok"];
    }
    return $total;
}

// Menghitung jumlah produk yang sedang diskon
function hitungProdukDiskon(array $daftarProduk): int {
    $jumlah = 0;
    foreach ($daftarProduk as $item) {
        if ($item["diskon"] > 0) {
            $jumlah++;
        }
    }
    return $jumlah;
}

// Diskon tambahan berdasarkan total belanja
function diskonBelanja(int $totalBelanja): int {
    $persen = match (true) {
        $totalBelanja >= 5000000 => 15,
        $totalBelanja >= 2000000 => 10,
        default                  => 0,
    };
    return (int) round($totalBelanja * $persen / 100);
}

// --- FUNGSI TANTANGAN (PENGAYAAN) ---

// Tantangan 1: Mencari produk termurah (setelah diskon)
function cariProdukTermurah(array $daftarProduk): array {
    $termurah = null;
    $minHarga = PHP_INT_MAX;

    foreach ($daftarProduk as $item) {
        $hargaAkhir = hargaSetelahDiskon($item["harga"], $item["diskon"]);
        if ($hargaAkhir < $minHarga) {
            $minHarga = $hargaAkhir;
            $termurah = $item;
        }
    }
    return $termurah;
}

// Tantangan 2: Menghitung rata-rata harga asli produk
function hitungRataRataHarga(array $daftarProduk): int {
    $hargaList = array_column($daftarProduk, "harga");
    if (count($hargaList) === 0) return 0;
    return (int) round(array_sum($hargaList) / count($hargaList));
}