<?php
$nama = "Adela Suci Wulandari Hasibuan";
$deskripsi = "Pengembang Backend & Spesialis Basis Data";
$tentang = "Saya adalah seorang backend developer yang memiliki keahlian dalam database management dan pengembangan aplikasi berbasis PHP Native.";
$kontak = [
    "Email" => "wulanhasibuan32@gmail.com",
];
$foto_profil = "formal.jpg"; // Ganti dengan path foto yang sesuai
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hero {
            background: linear-gradient(to right, rgba(255, 248, 235, 0.9), rgba(245, 230, 210, 0.9)), url('background.jpg');
            background-size: cover;
            background-position: center;
        }
        .profile-img {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            border: 4px solid #D4A373;
        }
    </style>
</head>
<body class="bg-amber-100 text-gray-900">
    <nav class="bg-amber-200 p-4 shadow-md">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <a href="index.php" class="font-bold text-xl text-brown-800">Portfolio</a>
            <ul class="flex space-x-6 text-lg">
                <li><a href="index.php" class="hover:text-brown-600">Beranda</a></li>
                <li><a href="about.php" class="hover:text-brown-600">Tentang</a></li>
                <li><a href="projects.php" class="hover:text-brown-600">Projek</a></li>
                <li><a href="contact.php" class="hover:text-brown-600">Kontak</a></li>
            </ul>
        </div>
    </nav>
    
    <header class="hero h-screen flex flex-col justify-center items-center text-center px-6">
        <img src="<?php echo $foto_profil; ?>" alt="Foto Profil" class="profile-img">
        <h1 class="text-5xl font-extrabold mt-6 text-brown-800"><?php echo $nama; ?></h1>
        <p class="mt-3 text-xl text-brown-600 max-w-2xl"><?php echo $deskripsi; ?></p>
        <a href="projects.php" class="mt-6 px-6 py-3 bg-amber-400 hover:bg-amber-500 rounded-lg text-white text-lg font-semibold shadow-md">Lihat Projek</a>
    </header>
</body>
</html>
