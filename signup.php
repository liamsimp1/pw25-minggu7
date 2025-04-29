<?php
session_start(); 
$title = "Sign Up - Kaziya Dental"; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'config.php';
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)) {
        echo "<script>alert('Semua field wajib diisi'); window.history.back();</script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Format email tidak valid'); window.history.back();</script>";
        exit;
    }

    if ($password !== $confirmPassword) {
        echo "<script>alert('Konfirmasi password tidak cocok'); window.history.back();</script>";
        exit;
    }

    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>alert('Email sudah digunakan'); window.history.back();</script>";
        exit;
    }
    $stmt->close();

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

    if ($stmt->execute()) {
        echo "<script>alert('Pendaftaran berhasil!'); window.location.href='logIn.html';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaziya Dental</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

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
        <section class="signup">
            <img class="imageMenu" src="assets/img/Dental Health.jpg" alt="Dental Health">
            <div class="kolomform" style="margin-top: 0px;">
                <h1>Hello, Welcome!!</h1>
                <p style="font-size: 20px;">Silahkan lakukan login</p>
                <form action="signUp.php" method="POST" id="kolomSignUp">
                    <label for="">First Name</label>
                    <input type="text" name="firstName" id="firstName" placeholder="">
                    <span class="errorText" id="errorFirstName"></span>

                    <label for="">Last Name</label>
                    <input type="text" name="lastName" id="lastName" placeholder="">
                    <span class="errorText" id="errorLastName"></span>

                    <label for="">Email</label>
                    <input type="text" name="email" id="email" placeholder="">
                    <span class="errorText" id="errorEmail"></span>

                    <label for="">Password</label>
                    <input type="password" name="password" id="password" placeholder="">
                    <span class="errorText" id="errorPassword"></span>

                    <label for="">Confirm Password</label>
                    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="">
                    <span class="errorText" id="errorConfirmPassword"></span>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </section>
    </div>
    <div class="iconSuksesWrapper" id="iconSignUpSukses">
        <i class="fa-solid fa-circle-check checkIcon"></i>
    </div>
    <script src="assets/js/signUp.js"></script>
</body>
</html>