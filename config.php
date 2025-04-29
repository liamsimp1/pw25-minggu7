<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'dentease');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

define('BASE_URL', 'http://localhost/proyekmu/');
define('SITE_NAME', 'Kaziya Dental');
define('ADMIN_EMAIL', 'f1d02310107@student.unram.ac.id');

?>