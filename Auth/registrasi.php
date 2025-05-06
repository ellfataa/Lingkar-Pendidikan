<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama     = htmlspecialchars(trim($_POST['nama']));
    $username = htmlspecialchars(trim($_POST['username']));
    $password = trim($_POST['password']);

    if (strlen($password) < 6) {
        echo "<script>alert('Password minimal 6 karakter!');</script>";
        exit;
    }

    $stmt = $conn->prepare("SELECT id_user FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>alert('Username sudah digunakan!'); window.location.href='registrasi.php';</script>";
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO user (nama, username, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nama, $username, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>alert('Registrasi berhasil!'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Registrasi gagal!');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi - Lingkar Pendidikan</title>
    <link rel="stylesheet" href="auth.css">
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-image">
            <img src="../Images/logobesar.png" alt="Logo Lingkar Pendidikan">
        </div>
        <div class="auth-form">
            <h2>Registrasi</h2>
            <form method="POST" action="">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" required>

                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Daftar</button>
            </form>
            <p class="bottom-text">Sudah punya akun? <a href="login.php">Masuk</a></p>
        </div>
    </div>
</body>
</html>
