<?php
$nama = "Nama Anda";
$tentang = "Saya lulusan SMKN 71 Jakarta dari jurusan Rekayasa Perangkat Lunak dengan keahlian dalam pengembangan web menggunakan PHP Native, MYSQL, dan Bootstrap. Mampu bekerja secara tim maupun mandiri, cepat belajar, dan siap berkontribusi dalam tim pengembangan di perusahaan teknologi.";
$pendidikan = [
    "MI Al Wathoniyah 12 (2014 s.d. 2020)",
    "MTsS Al Wathoniyah 8 (2020 s.d. 2023)",
    "SMKN 71 Jakarta (2023 s.d. 2026)"
];
$skills = ["Backend Development", "MySQL", "Database", "Figma", "Manajemen waktu"];
$pengalaman = [
    "Membuat sistem daftar nilai berbasis web menggunakan PHP dan MySQL.",
    "Mempelajari dasar-dasar algoritma dan struktur data.",
    "Membuat data nilai di Neatbeans"
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .section {
            background: rgba(255, 248, 235, 0.9);
            padding: 4rem 0;
        }
        .skill-badge {
            background: #D4A373;
            padding: 10px 15px;
            border-radius: 20px;
            font-weight: bold;
            color: white;
        }
    </style>
</head>
<body class="bg-amber-100 text-gray-900">
    <nav class="bg-amber-200 p-4 shadow-md">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <a href="index.php" class="font-bold text-xl text-brown-800">Portfolio</a>
            <ul class="flex space-x-6 text-lg">
                <li><a href="portfolio web.php" class="hover:text-brown-600">Beranda</a></li>
                <li><a href="about.php" class="hover:text-brown-600">Tentang</a></li>
                <li><a href="projects.php" class="hover:text-brown-600">Projek</a></li>
                <li><a href="contact.php" class="hover:text-brown-600">Kontak</a></li>
            </ul>
        </div>
    </nav>
    
    <section class="section text-center">
        <h1 class="text-4xl font-extrabold text-brown-800">Tentang Saya</h1>
        <p class="mt-4 text-lg text-brown-600 max-w-3xl mx-auto"><?php echo $tentang; ?></p>
    </section>
    
    <section class="section max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold text-brown-800">Pendidikan</h2>
        <ul class="mt-4 text-lg text-brown-600 list-disc list-inside">
            <?php foreach ($pendidikan as $edu) { echo "<li>$edu</li>"; } ?>
        </ul>
    </section>
    
    <section class="section max-w-5xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-brown-800">Kemampuan</h2>
        <div class="mt-4 flex flex-wrap gap-4 justify-center">
            <?php foreach ($skills as $skill) { echo "<span class='skill-badge'>$skill</span>"; } ?>
        </div>
    </section>
    
    <section class="section max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold text-brown-800">Pengalaman</h2>
        <ul class="mt-4 text-lg text-brown-600 list-disc list-inside">
            <?php foreach ($pengalaman as $exp) { echo "<li>$exp</li>"; } ?>
        </ul>
    </section>
</body>
</html>
