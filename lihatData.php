<?php
include 'config.php';

$query = "SELECT * FROM crud_107";
$result = mysqli_query($conn, $query);

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_query = "DELETE FROM crud_107 WHERE id = '$delete_id'";
    if (mysqli_query($conn, $delete_query)) {
        echo "<script>alert('Data berhasil dihapus'); window.location.href='lihatData.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan, coba lagi!');</script>";
    }
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

    $update_query = "UPDATE crud_107 SET email = '$email', name = '$name', cabang = '$cabang', layanan = '$layanan', spec = '$spec', keluhan = '$keluhan', tanggalJanji = '$tanggal' WHERE id = '$id'";

    if (mysqli_query($conn, $update_query)) {
        echo "<script>alert('Data berhasil diperbarui'); window.location.href='lihatData.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan, coba lagi!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Janji Temu</title>
    <link rel="stylesheet" href="assets/css/stylesJanji.css">
    <link rel="stylesheet" href="assets/css/biaya.css">
</head>
<body>
    <h1 style="margin-left: 0;">Daftar Janji Temu Pasien</h1>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Nama</th>
                <th>Cabang</th>
                <th>Layanan</th>
                <th>Spesialis</th>
                <th>Keluhan</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $data['email']; ?></td>
                <td><?= $data['name']; ?></td>
                <td><?= $data['cabang']; ?></td>
                <td><?= $data['layanan']; ?></td>
                <td><?= $data['spec']; ?></td>
                <td><?= $data['keluhan']; ?></td>
                <td><?= $data['tanggalJanji']; ?></td>
                <td class="action-btns">
                    <a href="edit.php?edit_id=<?= $data['id']; ?>" style="color: gray; text-decoration: bold;">Edit</a>
                    <a href="hapus.php?delete_id=<?= $data['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');" style="color: pink; text-decoration: none;">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <?php
    if (isset($_GET['edit_id'])) {
        $edit_id = $_GET['edit_id'];
        $edit_query = "SELECT * FROM crud_107 WHERE id = '$edit_id'";
        $edit_result = mysqli_query($conn, $edit_query);
        $edit_data = mysqli_fetch_assoc($edit_result);
    ?>
    <form method="POST" action="edit.php">
    </form>
    <?php } ?>
    <br><br><br>
</body>
</html>

<?php
mysqli_close($conn);
?>