<?php
include 'connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT id_user, nama, password FROM user WHERE username = ? LIMIT 1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user   = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['nama']; // hanya gunakan satu variabel session
        echo "<script>alert('Login berhasil!'); window.location.href='../Home/index.php';</script>";
        exit;
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Lingkar Pendidikan</title>
    <link rel="stylesheet" href="auth.css">
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-image">
            <img src="../Images/logobesar.png" alt="Logo Lingkar Pendidikan">
        </div>
        <div class="auth-form">
            <h2>Login</h2>
            <form method="POST" action="">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Masuk</button>
            </form>
            <p class="bottom-text">Belum punya akun? <a href="registrasi.php">Daftar</a></p>
        </div>
    </div>

    <?php if (isset($_GET['logout']) && $_GET['logout'] === 'success'): ?>
    <script>
        alert("Berhasil logout!");
    </script>
    <?php endif; ?>
</body>
</html>
