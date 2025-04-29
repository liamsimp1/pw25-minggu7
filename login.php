<?php
session_start();
include 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        $stmt = $conn->prepare("SELECT id, password, role FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];

                if ($user['role'] === 'admin') {
                    header("Location: adminDashboard.php");
                } else {
                    header("Location: index.php");
                }
                exit();
            } else {
                echo "<script>alert('Password salah'); window.location.href='logIn.html';</script>";
            }
        } else {
            echo "<script>alert('Email tidak ditemukan'); window.location.href='logIn.html';</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Email dan Password harus diisi'); window.location.href='logIn.html';</script>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaziya Dental</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav>
        <div class="header">
            <div class="logoDentease">
                <img src="assets/img/logo.png" alt="logo">
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="index.html">HOME</a>
                    </li>
                    <li>
                        <a href="logIn.html">LOGIN</a>
                    </li>
                    <li>
                        <a href="signUp.html">SIGN UP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <section class="login">
            <img class= "imageMenu" src="assets/img/Dental Health.jpg" alt="Dental Health">
            <div class="kolomform">
                <h1 style="font-size: 60px;">Selamat Datang!</h1>
                <p style="font-size: 20px;">Silahkan lakukan login</p>
                <form id="kolomLogin" action="login.php" method="POST">
                    <label for="">Email</label>
                    <input type="text" placeholder="" id="emailLogin">
                    <label for="">Password</label>
                    <input type="password" placeholder="" id="passwordLogin">
                    <input type="submit" value="Submit">
                </form>
                <p>Belum memiliki akun? <a href="signUp.html">Daftar di sini</a></p>
            </div>
        </section>
    </div>
    <div class="errorBoxWrapper">
        <div id="errorBox">
            Invalid Email or Password. Please try again!!
        </div>
    </div>
    <div class="iconSuksesWrapper" id="iconSignUpSukses">
        <i class="fa-solid fa-circle-check checkIcon"></i>
    </div>
    <script src="assets/js/login.js"></script>
</body>
</html>