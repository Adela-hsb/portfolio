<?php
$projects = [
    [
        "judul" => "Biodata Diri",
        "deskripsi" => "Website biodata sederhana yang menampilkan informasi pribadi, visi, dan misi sebagai backend developer.",
        "gambar" => "data diri.png",
        "github" => "https://github.com/Adela-hsb/data-pribadi.git",
    ],
    [
        "judul" => "Data Nilai Netbeans",
        "deskripsi" => "Tampilan aplikasi Java Swing untuk mengelola nilai siswa, dilengkapi input data, tombol aksi, dan tabel hasil.",
        "gambar" => "login netbin.png",
        "github" => "https://github.com/Adela-hsb/Neatbeans.git",
        "screenshots" => ["regis netbin.png", "input netbin.png"]
    ],
    [
        "judul" => "Website Profile Sekolah",
        "deskripsi" => "Website SMKN 71 Jakarta menyajikan informasi jurusan, profil guru, dan kontak resmi sekolah untuk memudahkan akses informasi bagi siswa dan masyarakat.",
        "gambar" => "welcome.png",
        "github" => "https://github.com/Adela-hsb/Profile-SMKN-71.git",
        "screenshots" => ["login sekolah.png", "regis sekolah.png", "lupa sandi.png", "welcome 2.png", "guru profil.png", "kontak.png", "kontak 2.png"]
    ],
    [
        "judul" => "Website E-Certificate",
        "deskripsi" => "Website E-Sertifikat adalah platform digital yang memudahkan pembuatan, penyimpanan, dan verifikasi sertifikat secara online. Dengan antarmuka yang sederhana, pengguna dapat mengunggah data sertifikat, mengelola daftar penerima, serta mencetak atau mengunduh sertifikat dalam format digital.",
        "gambar" => "selamat.png",
        "github" => "https://github.com/Adela-hsb/e-sertifikat.git",
        "screenshots" => ["cek.png", "login sertif.png", "regis sertif.png", "forgot.png", "dashboard.png", "list sertif.png", "buat sertif.png", "list pelatihan.png", "tambah pelatihan.png", "daftar template.png", "daftar pengguna.png", "tambah pengguna,png", "laporan.png"]
    ],
    [
        "judul" => "Data Nilai Flutter",
        "deskripsi" => "Website berbasis Flutter ini memiliki fitur untuk menambahkan, melihat, mengedit, dan menghapus data. Antarmukanya dirancang agar interaktif dengan navigasi yang mudah digunakan.",
        "gambar" => "flutter.png",
        "github" => "https://github.com/Adela-hsb/flutter.git",
    ],
    [
        "judul" => "Website Game",
        "deskripsi" => "Website ini berisi beberapa permainan, seperti Petualangan Luar Angkasa, Permainan Ular, Flappy Bird, dan XOX (Tic-Tac-Toe). Pengguna diminta memasukkan nama sebelum memilih dan memainkan permainan.",
        "gambar" => "name.png",
        "github" => "https://github.com/Adela-hsb/game.git",
        "screenshots" => ["space.png", "snake.png", "flappy.png", "xox.png"]
    ],

];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .section { background: rgba(255, 248, 235, 0.9); padding: 4rem 0; }
        .modal { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); align-items: center; justify-content: center; }
    </style>
</head>
<body class="bg-amber-100 text-gray-900">
    <nav class="bg-amber-200 p-4 shadow-md">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <a href="index.php" class="font-bold text-xl text-brown-800">Portfolio</a>
            <ul class="flex space-x-6 text-lg">
                <li><a href="portfolio web.php" class="hover:text-brown-600">Beranda</a></li>
                <li><a href="about.php" class="hover:text-brown-600">Tentang saya</a></li>
                <li><a href="projects.php" class="hover:text-brown-600">Projek</a></li>
                <li><a href="contact.php" class="hover:text-brown-600">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <section class="section text-center">
        <h1 class="text-4xl font-extrabold text-brown-800">Projek Saya</h1>
        <p class="mt-2 text-brown-600">Berikut beberapa projek yang pernah saya kerjakan.</p>
        
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <?php foreach ($projects as $index => $project) { ?>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden p-4 cursor-pointer" onclick="openModal(<?php echo $index; ?>)">
                    <img src="images/<?php echo htmlspecialchars($project['gambar']); ?>" 
                         alt="<?php echo htmlspecialchars($project['judul']); ?>" 
                         class="w-full h-52 object-cover rounded-lg">
                    <h3 class="mt-4 text-2xl font-semibold text-brown-800"><?php echo htmlspecialchars($project['judul']); ?></h3>
                    <p class="text-brown-600 mt-2"><?php echo htmlspecialchars($project['deskripsi']); ?></p>
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- Modal -->
    <div id="modal" class="modal flex">
        <div class="bg-white p-6 rounded-lg max-w-3xl w-full relative">
            <button class="absolute top-2 right-2 text-gray-600 text-2xl" onclick="closeModal()">&times;</button>
            <h2 id="modal-title" class="text-2xl font-bold text-brown-800 mb-4"></h2>
            <div id="modal-content" class="grid grid-cols-1 md:grid-cols-2 gap-4"></div>
        </div>
    </div>

    <script>
        const projects = <?php echo json_encode($projects); ?>;

        function openModal(index) {
            const project = projects[index];
            document.getElementById('modal-title').textContent = project.judul;
            const modalContent = document.getElementById('modal-content');
            modalContent.innerHTML = '';
            
            project.screenshots.forEach(img => {
                const imgElem = document.createElement('img');
                imgElem.src = `images/${img}`;
                imgElem.classList.add('w-full', 'rounded-lg', 'shadow-md');
                modalContent.appendChild(imgElem);
            });
            
            document.getElementById('modal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }
    </script>
</body>
</html>
