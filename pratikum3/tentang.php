<?php
// ============================================
// HALAMAN TENTANG TOKO - EXECUTOR COMPUTER
// ============================================
require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/fungsi.php';

$judulHalaman  = "Tentang Kami";
$halamanAktif  = "tentang.php";

// Data profil dan layanan toko
$profilToko = [
    "alamat"    => "Jl. Teratai, Gg. Anggrek 1, Blok 6, No. 3, Kec. Sukawati, Kab. Gianyar",
    "telepon"   => "+62 821-5858-6898",
    "instagram" => "@executor_computer",
    "email"     => "wiarthadanatrea@gmail.com",
    "jamBuka"   => "Senin – Sabtu: 09:00 - 20:00 WITA",
];

$daftarLayanan = [
    [
        "ikon"      => "🛠️",
        "judul"     => "Perakitan PC Custom",
        "deskripsi" => "Merakit PC gaming, editing, dan workstation sesuai dengan kebutuhan dan anggaran Anda."
    ],
    [
        "ikon"      => "💻",
        "judul"     => "Service & Perbaikan Laptop/PC",
        "deskripsi" => "Pengecekan hardware, upgrade SSD/RAM, pembersihan thermal paste, dan perbaikan komputer."
    ],
    [
        "ikon"      => "📦",
        "judul"     => "Jual Beli Komponen & Aksesoris",
        "deskripsi" => "Menyediakan berbagai komponen original bergaransi resmi mulai dari prosesor, VGA, hingga peripheral."
    ],
];

require __DIR__ . '/includes/header.php';
?>

<h1 class="text-3xl font-bold mb-1">Tentang <?= $namaToko ?></h1>
<p class="text-slate-500 mb-6">Pusat solusi teknologi dan hardware komputer terpercaya di Gianyar, Bali.</p>

<div class="grid md:grid-cols-3 gap-6 mb-8">
    <!-- Informasi Profil Toko -->
    <div class="bg-white rounded-xl shadow p-6 md:col-span-1">
        <h2 class="font-bold text-lg mb-4 text-blue-700">📍 Informasi Kontak</h2>
        <ul class="space-y-3 text-sm text-slate-600">
            <li><strong>Alamat:</strong><br><?= $profilToko["alamat"] ?></li>
            <li><strong>Telepon / WhatsApp:</strong><br><?= $profilToko["telepon"] ?></li>
            <li><strong>Instagram:</strong><br><a href="https://instagram.com/executor_computer" target="_blank" class="text-blue-600 hover:underline"><?= $profilToko["instagram"] ?></a></li>
            <li><strong>Email:</strong><br><?= $profilToko["email"] ?></li>
            <li><strong>Jam Operasional:</strong><br><?= $profilToko["jamBuka"] ?></li>
        </ul>
    </div>

    <!-- Deskripsi & Sejarah Toko -->
    <div class="bg-white rounded-xl shadow p-6 md:col-span-2 flex flex-col justify-between">
        <div>
            <h2 class="font-bold text-lg mb-3 text-blue-700">⚡ Cerita Kami</h2>
            <p class="text-slate-600 text-sm leading-relaxed mb-4">
                <strong>Executor Computer</strong> berdiri pada tahun 2022 dari mimpi seorang anak SMK yang ingin sukses untuk masa depan dan bertekad memperbaiki ekonomi keluarga melalui kerja keras di dunia teknologi hardware.
            </p>
            <p class="text-slate-600 text-sm leading-relaxed">
                Berawal dari semangat mandiri, kini toko kami berkembang menjadi penyedia perangkat komputer, laptop, serta layanan servis terpercaya yang siap membantu para gamer, pelajar, dan masyarakat umum di Bali.
            </p>
        </div>
        <div class="mt-6 pt-4 border-t border-slate-100 text-xs text-slate-400">
            &copy; <?= date('Y') ?> <?= $namaToko ?>. Semua hak dilindungi.
        </div>
    </div>
</div>

<!-- Daftar Layanan Toko -->
<h2 class="text-2xl font-bold mb-4">Layanan Unggulan Kami</h2>
<div class="grid sm:grid-cols-3 gap-6">
    <?php foreach ($daftarLayanan as $layanan): ?>
        <div class="bg-white rounded-xl shadow p-6 flex flex-col">
            <div class="text-4xl mb-3"><?= $layanan["ikon"] ?></div>
            <h3 class="font-semibold text-lg mb-2"><?= $layanan["judul"] ?></h3>
            <p class="text-sm text-slate-600"><?= $layanan["deskripsi"] ?></p>
        </div>
    <?php endforeach; ?>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>