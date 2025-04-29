<?php
session_start(); 
$title = "Buat Janji Temu - Kaziya Dental";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'config.php';  

    $name = $_POST['name'];
    $email = $_POST['email'];
    $cabang = $_POST['cabang'];
    $spesialis = $_POST['Spesialis']; 
    $layanan = $_POST['Layanan'];
    $keluhan = $_POST['keluhan'];
    $tanggalJanji = $_POST['tanggalJanji'];  

    $query = "INSERT INTO crud_107 (email, name, cabang, layanan, spec, keluhan, tanggalJanji)
              VALUES (?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("sssssss", $email, $name, $cabang, $layanan, $spesialis, $keluhan, $tanggalJanji);

        if ($stmt->execute()) {
            echo "<script>alert('Janji temu berhasil dibuat!'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan, coba lagi!');</script>";
        }
        
        $stmt->close();
    } else {
        echo "<script>alert('Gagal mempersiapkan query!');</script>";
    }

    $conn->close();
}
?>


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/stylesJanji.css">
    <title>Buat Janji Temu</title>
</head>
<body>
<img src="assets/img/logo.png">
<h1>Buat Janji Temu</h1>
<hr>
<div class="containerIl">
    <img src="assets/img/ilustrasi2.jpg" alt="Kaziya Dental">
    <div class="text">
        <br><br><br>
        <h1>Form janji temu</h1>
        <p>
            Halo sobat gigi! Silakan isi formulir di bawah ini untuk membuat janji temu dengan dokter kami.
        </p>
    </div>
</div>

<div class="container">
    <form action="buatJanji.php" method="post" id="form">
        <div class="row">
            <div class="col-25"><label for="name">Nama Lengkap</label></div>
            <div class="col-75"><input type="text" id="name" name="name" placeholder="Nama lengkap Anda.." required></div>
        </div>

        <div class="row">
            <div class="col-25"><label for="email">Email</label></div>
            <div class="col-75"><input type="text" id="email" name="email" placeholder="Email Anda.." required></div>
        </div>

        <div class="row">
            <div class="col-25"><label for="cabang">Cabang</label></div>
            <div class="col-75">
                <select id="cabang" name="cabang">
                    <option value="" selected>Cabang terdekat</option>
                    <option value="Bekasi">Bekasi</option>
                    <option value="Bogor">Bogor</option>
                    <option value="Tangerang">Tangerang</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25"><label for="spec">Spesialis</label></div>
            <div class="col-75">
                <select id="spec" name="Spesialis">
                    <option value="" selected>Pilih Spesialis</option>
                    <option value="bedah_gigi">Spesialis Bedah Gigi</option>
                    <option value="bedah_mulut">Spesialis Bedah Mulut</option>
                    <option value="gigi_anak">Spesialis Gigi Anak</option>
                    <option value="gigi_estetika">Spesialis Gigi Estetika</option>
                    <option value="gigi_restoratif">Spesialis Gigi Restoratif</option>
                    <option value="ortodonti">Spesialis Ortodonti</option>
                    <option value="periodonti">Spesialis Periodonti</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25"><label for="layanan">Layanan</label></div>
            <div class="col-75">
                <select id="layanan" name="Layanan">
                    <option value="" selected>Pilih Layanan</option>
                    <option value="perawatan_gigi">Perawatan Gigi</option>
                    <option value="pemeriksaan_gigi_anak">Pemeriksaan Gigi Anak</option>
                    <option value="pembersihan_gigi">Pembersihan Gigi</option>
                    <option value="pasang_behel">Pasang Behel</option>
                    <option value="tambal_gigi">Tambal Gigi</option>
                    <option value="cabut_gigi">Cabut Gigi</option>
                    <option value="veneergigi">Veneer Gigi</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25"><label for="keluhan">Keluhan</label></div>
            <div class="col-75">
                <textarea id="keluhan" name="keluhan" placeholder="Tuliskan keluhan jika ada.." style="height:200px"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-25"><label for="tanggalJanji">Tanggal:</label></div>
            <div class="col-75"><input type="date" id="tanggalJanji" name="tanggalJanji" required></div>
        </div>

        <div class="row">
            <input type="reset" value="Kembali" onclick="location.href='index.php'">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
<br>

<script src="assets/js/form.js"></script>
<script src="assets/js/AllJava.js"></script>

<footer id="footer">
    <div class="footer-container">
        <div class="footer-section">
            <h3>About us</h3>
            <p>Kaziya Dental adalah tempat perawatan gigi terbaik di Jogja dengan pelayanan modern dan tenaga medis berpengalaman.</p>
        </div>
        <div class="footer-section">
            <h3>Our contact</h3>
            <p><strong>Alamat:</strong> Jl. Informatika Alamat No. 23, Kota Yogyakarta</p>
            <p><strong>Telepon:</strong> F1D02310107</p>
            <p><strong>Email:</strong> <a href="mailto:f1d02310107@student.unram.ac.id">f1d02310107@student.unram.ac.id</a></p>
        </div>
        <div class="footer-section">
            <h3>Location</h3>
            <iframe src="https://www.google.com/maps/embed?pb=..." 
                    style="width: 250.4px; height: 150.4px; border: none; margin-left: 0; border-radius: 20px"></iframe>
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
        <p style="margin-left: 0;">&copy; 2025 Kaziya Dental | All rights reserved.</p>
    </div>
</footer>
</body>
</html>