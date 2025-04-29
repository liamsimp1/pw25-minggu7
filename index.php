<?php
session_start(); // Memulai sesi jika diperlukan

$title = "Kaziya Dental"; // Judul halaman
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/stylesHomepage.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Kaziya Dental</title>
</head>
<body>
<img src="assets/img/logo.png">
<hr>
<div class = "container">
    <div class="text-container">
        <h1>Kaziya Dental</h1>
        <p>
            Kaziya Dental adalah klinik perawatan gigi yang menawarkan pelayanan terbaik di Yogyakarta. Kami
            mengutamakan kenyamanan dan kesehatan gigi Anda dengan berbagai layanan profesional.
        </p>
    </div>
    
    <div class="slider">
        <div class="slides">
            <img src="assets/img/doc9.jpg" alt="Last Slide" class="slide">
            <img src="assets/img/doc1.jpg" alt="Slide 1" class="slide">
            <img src="assets/img/doc10.jpg" alt="Slide 2" class="slide">
            <img src="assets/img/doc9.jpg" alt="Slide 3" class="slide">
            <img src="assets/img/doc10.jpg" alt="First Slide" class="slide">
        </div>
        <button id="prev"></button>
        <button id="next"></button>
    </div>
</div>

<div class="topnav">
    <button class="btn" onclick="location.href='index.php'">
        <i class = "fa fa-home"></i> Beranda</button>
    <button class="btn" onclick="location.href='#footer'">
        <i class = "fa fa-phone"></i> Kontak</button>
    <button class="btn" onclick="location.href='buatJanji.php'">
        <i class = "fa fa-book"></i> Buat Janji</button>
    <button class="btn" onclick="location.href='jadwal.php'">
        <i class = "fa fa-bars"></i> Jadwal</button>
    <button class="btn" onclick="location.href='biaya.php'">
        <i class = "fa fa-dollar"></i> Harga</button>
    <button class="btn" onclick="location.href='login.php'">
        <i class = "fa fa-right-to-bracket"></i> Login</button>
    <button class="btn" onclick="location.href='signup.php'">
</div>

<div class="row">
    <div class="column">
        <p id="rcorners"></p>
        <p>
            Selamat datang di Kaziya Dental, tempat perawatan gigi terbaik di Jogja.
            Kami menyediakan layanan perawatan gigi modern dengan tenaga medis yang
            berpengalaman. Kaziya Dental hadir untuk memberikan solusi kesehatan gigi
            yang nyaman dan profesional.
            <input type="submit" value="Baca Selengkapnya ...">
        </p>
    </div>

    <div class="column">
        <p id="rcorners"></p>
        <p>
            Selamat datang di Kaziya Dental, tempat perawatan gigi terbaik di Jogja.
            Kami menyediakan layanan perawatan gigi modern dengan tenaga medis yang
            berpengalaman. Kaziya Dental hadir untuk memberikan solusi kesehatan gigi
            yang nyaman dan profesional.
            <input type="submit" value="Baca Selengkapnya ...">
        </p>
    </div>

    <div class="column">
        <p id="rcorners"></p>
        <p>
            Selamat datang di Kaziya Dental, tempat perawatan gigi terbaik di Jogja.
            Kami menyediakan layanan perawatan gigi modern dengan tenaga medis yang
            berpengalaman. Kaziya Dental hadir untuk memberikan solusi kesehatan gigi
            yang nyaman dan profesional.
            <input type="submit" value="Baca Selengkapnya ...">
        </p>
    </div>
</div>

<hr>
<div class="container">
    <img src="assets/img/doc2.jpg" alt="Kaziya Dental">
    <div class="text">
        <h1> Kaziya Dental </h1>
        <p>
            Kesehatan gigi bukan hanya soal senyum yang indah, tetapi juga berhubungan
            langsung dengan kesehatan tubuh secara keseluruhan. Gigi yang sehat membantu
            Anda makan, berbicara, dan beraktivitas tanpa masalah. Selain itu, merawat gigi dapat
            mencegah penyakit gusi, gigi berlubang, dan masalah kesehatan lainnya yang bisa
            memengaruhi tubuh Anda.

            Jaga kesehatan gigi Anda untuk mencegah rasa sakit, bau mulut, dan masalah lain yang
            dapat mengganggu kualitas hidup. Perawatan gigi yang baik juga mendukung
            kesehatan tubuh secara keseluruhan. Jangan tunggu sampai ada masalah—rawat gigi
            Anda mulai sekarang!
            <br>
            <input type="submit" value="Buat Janji Temu" onclick="location.href='buatJanji.html'">
        </p>
    </div>
</div>

<div class = "topnav">
    <h2>Layanan kami</h2>
</div>

<div class="gallery">
    <img src="assets/img/gambar1.jpg" alt="Pemeriksaan Gigi">
    <div class="desc">
        Pembersihan gigi adalah prosedur rutin yang sangat penting untuk menjaga kesehatan
        gigi dan gusi Anda...
        <input type="submit" value="Baca Selengkapnya">
    </div>
</div>

<div class="gallery">
    <img src="assets/img/gambar1.jpg" alt="Pemeriksaan Gigi">
    <div class="desc">
        Pembersihan gigi adalah prosedur rutin yang sangat penting untuk menjaga kesehatan
        gigi dan gusi Anda...
        <input type="submit" value="Baca Selengkapnya">
    </div>
</div>

<div class="gallery">
    <img src="assets/img/gambar1.jpg" alt="Pemeriksaan Gigi">
    <div class="desc">
        Pembersihan gigi adalah prosedur rutin yang sangat penting untuk menjaga kesehatan
        gigi dan gusi Anda...
        <input type="submit" value="Baca Selengkapnya">
    </div>
</div>

<div class="gallery">
    <img src="assets/img/gambar1.jpg" alt="Pemeriksaan Gigi">
    <div class="desc">
        Pembersihan gigi adalah prosedur rutin yang sangat penting untuk menjaga kesehatan
        gigi dan gusi Anda...
        <input type="submit" value="Baca Selengkapnya">
    </div>
</div>
<script src="assets/js/AllJava.js"></script>
</body>

<footer id = "footer">
    <div class="footer-container">
        <div class="footer-section">
            <h3>About us</h3>
            <p> Kaziya Dental adalah tempat perawatan gigi terbaik di Jogja dengan
                pelayanan modern dan tenaga medis berpengalaman.</p>
        </div>

        <div class="footer-section">
            <h3>Our contact</h3>
            <p><strong>Alamat:</strong> Jl. Informatika Alamat No. 23, Kota Yogyakarta</p>
            <p><strong>Telepon:</strong> F1D02310107 </p>
            <p><strong>Email:</strong> <a href="mailto:f1d02310107@student.unram.ac.id">f1d02310107@student.unram.ac.id</a></p>
        </div>

        <div class="footer-section">
            <h3>Location</h3>
            <iframe src="https://www.google.com/maps/embed?pb=... ">
            </iframe>
        </div>

        <div class="footer-section">
            <h3>Follow us!</h3>
            <ul class="social-media">
                <li><a href="https://facebook.com" target="_blank">Facebook</a></li>
                <li><a href="https://twitter.com" target="_blank">Twitter</a></li>
                <li><a href="https://instagram.com" target="_blank">Instagram</a></li>
                <li><a href="https://linkedin.com" target="_blank">LinkedIn</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2025 Kaziya Dental | All rights reserved.</p>
    </div>
</footer>
</html>