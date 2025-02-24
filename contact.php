<?php
$contact_info = [
    "email" => "wulanhasibuan32@gmail.com",
    "phone" => "+62 852-8273-1113",
    "address" => "Kp. Pulo Jahe RT 008 RW 014 No 8F, Kel. Jatinegara, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13930",
    "github" => "https://github.com/",
    "instagram" => "https://instagram.com/del.haaa"
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .section {
            background: rgba(255, 248, 235, 0.9);
            padding: 5rem 0;
            color: #5A3E2B;
        }
        .contact-card {
            background: rgba(255, 255, 255, 0.9);
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.2rem;
            font-weight: 500;
            color: #5A3E2B;
        }
        .contact-item a {
            color: #A67C52;
            font-weight: bold;
        }
        .contact-item a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="bg-amber-100 text-gray-900">
    <nav class="bg-amber-200 p-4 shadow-md">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <a href="index.php" class="font-bold text-xl text-brown-800">Portfolio</a>
            <ul class="flex space-x-6 text-lg text-brown-800">
                <li><a href="Portfolio web.php" class="hover:text-brown-600">Beranda</a></li>
                <li><a href="about.php" class="hover:text-brown-600">Tentang</a></li>
                <li><a href="projects.php" class="hover:text-brown-600">Projek</a></li>
                <li><a href="contact.php" class="hover:text-brown-600">Kontak</a></li>
            </ul>
        </div>
    </nav>
    
    <section class="section text-center">
        <h1 class="text-5xl font-extrabold">Kontak Saya</h1>
        <p class="mt-3 text-lg">Hubungi saya melalui informasi di bawah ini.</p>
        <div class="mt-8 max-w-3xl mx-auto contact-card">
            <div class="space-y-4">
                <div class="contact-item">📍 <a href="https://www.google.com/maps/search/?api=1&query=<?php echo urlencode($contact_info['address']); ?>" target="_blank"><?php echo $contact_info['address']; ?></a></div>
                <div class="contact-item">📧 <a href="mailto:<?php echo $contact_info['email']; ?>"><?php echo $contact_info['email']; ?></a></div>
                <div class="contact-item">📞 <a href="tel:<?php echo $contact_info['phone']; ?>"><?php echo $contact_info['phone']; ?></a></div>
                <div class="contact-item">🐙 <a href="<?php echo $contact_info['github']; ?>" target="_blank">GitHub</a></div>
                <div class="contact-item">📷 <a href="<?php echo $contact_info['instagram']; ?>" target="_blank">Instagram</a></div>
            </div>
        </div>
    </section>
</body>
</html>
