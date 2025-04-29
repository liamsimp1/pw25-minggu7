<?php
include 'config.php';

if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];

    $edit_query = "SELECT * FROM crud_107 WHERE id = '$edit_id'";
    $edit_result = mysqli_query($conn, $edit_query);
    $edit_data = mysqli_fetch_assoc($edit_result);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $cabang = $_POST['cabang'];
    $layanan = $_POST['layanan'];
    $spec = $_POST['spec'];
    $keluhan = $_POST['keluhan'];
    $tanggal = $_POST['tanggal'];

    $update_query = "UPDATE crud_107 SET 
        email = '$email', 
        name = '$name', 
        cabang = '$cabang', 
        layanan = '$layanan', 
        spec = '$spec', 
        keluhan = '$keluhan', 
        tanggalJanji = '$tanggal' 
        WHERE id = '$id'";

    if (mysqli_query($conn, $update_query)) {
        echo "<script>alert('Data berhasil diperbarui'); window.location.href='lihatData.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan, coba lagi!');</script>";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/stylesJanji.css">
</head>
<body>
    <h1 style="text-align: center;">Edit Data Janji Temu</h1>
    <hr>
    <div class="container">
        <br>
        <form action="edit.php" method="post" id="form" onsubmit="return false">
            <div class="row">
                <div class="col-25">
                    <label for="name">Nama Lengkap</label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" name="name" value="<?php echo isset($edit_data['name']) ? $edit_data['name'] : ''; ?>" placeholder="Nama lengkap Anda.." required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">Email</label>
                </div>
                <div class="col-75">
                    <input type="text" id="email" name="email" value="<?php echo isset($edit_data['email']) ? $edit_data['email'] : ''; ?>" placeholder="Email Anda.." required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="cabang">Cabang</label>
                </div>
                <div class="col-75">
                    <select id="cabang" name="cabang">
                        <option value="" <?php echo (empty($edit_data['cabang'])) ? 'selected' : ''; ?>>Cabang terdekat</option>
                        <option value="Bekasi" <?php echo ($edit_data['cabang'] == 'Bekasi') ? 'selected' : ''; ?>>Bekasi</option>
                        <option value="Bogor" <?php echo ($edit_data['cabang'] == 'Bogor') ? 'selected' : ''; ?>>Bogor</option>
                        <option value="Tangerang" <?php echo ($edit_data['cabang'] == 'Tangerang') ? 'selected' : ''; ?>>Tangerang</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="spec">Spesialis</label>
                </div>
                <div class="col-75">
                    <select id="spec" name="spec">
                        <option value="" <?php echo (empty($edit_data['spec'])) ? 'selected' : ''; ?>>Pilih Spesialis</option>
                        <option value="bedah_gigi" <?php echo ($edit_data['spec'] == 'bedah_gigi') ? 'selected' : ''; ?>>Spesialis Bedah Gigi</option>
                        <option value="bedah_mulut" <?php echo ($edit_data['spec'] == 'bedah_mulut') ? 'selected' : ''; ?>>Spesialis Bedah Mulut</option>
                        <option value="gigi_anak" <?php echo ($edit_data['spec'] == 'gigi_anak') ? 'selected' : ''; ?>>Spesialis Gigi Anak</option>
                        <option value="gigi_estetika" <?php echo ($edit_data['spec'] == 'gigi_estetika') ? 'selected' : ''; ?>>Spesialis Gigi Estetika</option>
                        <option value="gigi_restoratif" <?php echo ($edit_data['spec'] == 'gigi_restoratif') ? 'selected' : ''; ?>>Spesialis Gigi Restoratif</option>
                        <option value="ortodonti" <?php echo ($edit_data['spec'] == 'ortodonti') ? 'selected' : ''; ?>>Spesialis Ortodonti</option>
                        <option value="periodonti" <?php echo ($edit_data['spec'] == 'periodonti') ? 'selected' : ''; ?>>Spesialis Periodonti</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="layanan">Layanan</label>
                </div>
                <div class="col-75">
                    <select id="layanan" name="layanan">
                        <option value="" <?php echo (empty($edit_data['layanan'])) ? 'selected' : ''; ?>>Pilih Layanan</option>
                        <option value="perawatan_gigi" <?php echo ($edit_data['layanan'] == 'perawatan_gigi') ? 'selected' : ''; ?>>Perawatan Gigi</option>
                        <option value="pemeriksaan_gigi_anak" <?php echo ($edit_data['layanan'] == 'pemeriksaan_gigi_anak') ? 'selected' : ''; ?>>Pemeriksaan Gigi Anak</option>
                        <option value="pembersihan_gigi" <?php echo ($edit_data['layanan'] == 'pembersihan_gigi') ? 'selected' : ''; ?>>Pembersihan Gigi</option>
                        <option value="pasang_behel" <?php echo ($edit_data['layanan'] == 'pasang_behel') ? 'selected' : ''; ?>>Pasang Behel</option>
                        <option value="tambal_gigi" <?php echo ($edit_data['layanan'] == 'tambal_gigi') ? 'selected' : ''; ?>>Tambal Gigi</option>
                        <option value="cabut_gigi" <?php echo ($edit_data['layanan'] == 'cabut_gigi') ? 'selected' : ''; ?>>Cabut Gigi</option>
                        <option value="veneergigi" <?php echo ($edit_data['layanan'] == 'veneergigi') ? 'selected' : ''; ?>>Veneer Gigi</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="keluhan">Keluhan</label>
                </div>
                <div class="col-75">
                    <textarea id="keluhan" name="keluhan" placeholder="Tuliskan keluhan jika ada.." style="height:200px"><?php echo isset($edit_data['keluhan']) ? $edit_data['keluhan'] : ''; ?></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="tanggalJanji">Tanggal:</label>
                </div>
                <div class="col-75">
                    <input type="date" id="tanggalJanji" name="tanggal" value="<?php echo isset($edit_data['tanggalJanji']) ? $edit_data['tanggalJanji'] : ''; ?>" required>
                </div>
            </div>
            <br><br><br>
            <div class="row">
                <input type="reset" value="Kembali" onclick="location.href='index.html'">
                <input type="submit" name="update" value="Update" onclick="showModal()">
            </div>
        </form>
        <br><br><br><br>
    </div>
    <br><br><br><br><br>

    <div id="overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; 
        height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 999;"></div>

    <div id="confirmationModal">
        <p>Apakah Anda yakin ingin melanjutkan?</p>
        <button onclick="submitForm()">Ya</button>
        <button onclick="closeModal()">Tidak</button>
    </div>

    <script src="assets/js/form.js"></script>
    <script src="assets/js/AllJava.js"></script>
</body>
</html>
