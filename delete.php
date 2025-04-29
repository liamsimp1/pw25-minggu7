<?php
include 'config.php';
$email = $_GET['email'];

$sql = "DELETE FROM crud_107 WHERE email='$email'";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus!";
} else {
    echo "Error: " . $conn->error;
}
?>

<script>
$(document).ready(function() {
    $('.delete-btn').click(function(e) {
        e.preventDefault();
        var link = $(this).attr('href');

        Swal.fire({
            title: "Apakah kamu yakin?",
            text: "Data akan dihapus secara permanen!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Ya, hapus!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
            }
        });
    });
});
</script>