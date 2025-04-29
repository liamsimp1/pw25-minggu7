<?php
include 'config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM dokter_layanan";
$result = $conn->query($query);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Dokter dan Layanan</title>
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/biaya.css">
</head>
<body>
    <header class="header">
        <h2>Data Dokter dan Layanan</h2>
    </header>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Dokter</th>
                <th>Layanan</th>
                <th>Biaya</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $no = 1;
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $no++ . "</td>
                            <td>" . $row['dokter_name'] . "</td>
                            <td>" . $row['layanan'] . "</td>
                            <td>Rp. " . number_format($row['biaya'], 0, ',', '.') . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Kosong</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <input type="reset" value="Kembali" onclick="location.href='index.php'">

<hr style="margin-top: 80px">
<div class="container">
    <img class="img" src="assets/img/disc1.jpg" alt="Kaziya Dental" >
    <div class="text-container">
        <h1 style="font-size: 24px; color: #274760">Untuk kamu pelanggan baru</h1>
        <h1> Penawaran terbaik kami! </h1>
        <h1 style="font-size: 35px; color: brown">Discount up to 50%</h1>
        <p style="color: lightskyblue; font-size: 15px">*s&k berlaku</p>
        <p>
        <table style="margin-left: 0">
            <thead>
            <tr>
                <th>Layanan</th>
                <th>Harga</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Perawatan Gigi</td>
                <td>500,000</td>
            </tr>
            <tr>
                <td>Pemeriksaan Gigi Anak</td>
                <td>300,000</td>
            </tr>
            <tr>
                <td>Pembersihan Gigi</td>
                <td>400,000</td>
            </tr>
            <tr>
                <td>Pasang Behel</td>
                <td>2,500,000</td>
            </tr>
            </tbody>
        </table>
        <br>
        Ayo buat janji temu dengan dokter-dokter terbaik kami!
        <br>
        <input type="submit"
                style="margin-left: 0"
                value="Buat Janji Temu"
                onclick="location.href='buatJanji.html'">

        </p>
    </div>
</div>
<br> <br>

<h1 align="center" style="margin-left: 0; font-size: 25px; color: #274760">Waktu Discount</h1>
<div id="countdown" style="font-size: 25px;
    background-color: #ffffff;
    padding: 20px;
    border: 2px solid #274760;
    border-radius: 10px;
    margin-right: 400px;
    margin-left: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #274760;
    ">
    <span id="days">00</span>  Hari  :
    <span id="hours">00</span>  Jam  :
    <span id="minutes">00</span>  Menit  :
    <span id="seconds">00</span>  Detik
</div>
<br><br>

<script src="assets/js/countdown.js"></script>
<script src="assets/js/AllJava.js"></script>
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
            <iframe src="https://www.google.com/maps/embed?pb=... "
                    style="width: 250.4px; height: 150.4px;
                    border: none; margin-left: 0; border-radius: 20px">
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
        <p style="margin-left: 0">&copy; 2025 Kaziya Dental | All rights reserved.</p>
    </div>
</footer>
</body>
</html>

<?php
$conn->close();
?>
