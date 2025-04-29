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
    <button class="btn" onclick="location.href='lihatData.php'">
        <i class = "fa fa-book"></i> Data Janji</button>
    <button class="btn" onclick="location.href='jadwal.php'">
        <i class = "fa fa-bars"></i> Jadwal</button>
</div>

<script src="assets/js/AllJava.js"></script>
</body>
</html>