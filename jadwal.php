<?php
include 'config.php'; 
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
    <link rel="stylesheet" href="assets/css/stylesJadwal.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>
    <img src="assets/img/logo.png" alt="Logo Kaziya">
    <div>
        <header class="header">
            <h2>Jadwal Praktik Dokter</h2>
        </header>
    </div>
    <div style="text-align: center; margin: 20px 0;">
        <input type="text" id="searchInput" placeholder="Cari dokter, spesialis, atau layanan..." 
                style="padding: 10px; width: 300px; color: #e9f1f6;">
    </div>

    <table>
        <thead>
        <tr>
            <th>Dokter</th>
            <th>Jam</th>
            <th>Hari</th>
            <th>Ruangan</th>
            <th>Spesialis</th>
            <th>Keterangan</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT dokter_name, jam, hari, ruangan, spec, layanan FROM jadwal ORDER BY FIELD(hari, 'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'), jam";
        $result = $conn->query($query);

        if ($result && $result->num_rows > 0):
            while ($row = $result->fetch_assoc()):
        ?>
            <tr>
                <td><?= htmlspecialchars($row['dokter_name']) ?></td>
                <td><?= date("H:i", strtotime($row['jam'])) ?></td>
                <td><?= $row['hari'] ?></td>
                <td><?= $row['ruangan'] ?></td>
                <td><?= $row['spec'] ?></td>
                <td><?= $row['layanan'] ?></td>
            </tr>
        <?php
            endwhile;
        else:
        ?>
            <tr>
                <td colspan="6">Tidak ada data jadwal ditemukan.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>

    <input type="button" value="Kembali" onclick="location.href='index.php'">
    <hr style="margin-top: 80px">
    <h1>Ayo buat janji temu dengan dokter-dokter terbaik kami.</h1>
    <img src="assets/img/ilustrasi3.jpg" alt="janji temu" style="width: 40%">
    <p>
        Kesehatan gigi dan mulut Anda sangat penting! Jangan menunggu hingga masalah gigi
        menjadi lebih serius. Kami mengundang Anda untuk membuat janji temu dengan dokter
        gigi kami agar bisa mendapatkan perawatan yang tepat dan terbaik untuk kebutuhan Anda.
    </p>
    <input type="button" value="Buat Janji Temu" onclick="location.href='buatJanji.php'">
    <br><br>

    <footer id="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>About us</h3>
                <p>Kaziya Dental adalah tempat perawatan gigi terbaik di Jogja dengan
                pelayanan modern dan tenaga medis berpengalaman.</p>
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
                        style="width: 250.4px; height: 150.4px; border: none; border-radius: 20px;">
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

</body>
</html>
