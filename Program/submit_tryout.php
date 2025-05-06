<?php
session_start();
include '../Auth/connect.php';

// Ambil jawaban dari form
$user_answers = $_POST['answers'] ?? [];
$id_tryout = $_POST['id_tryout'] ?? 0;

// Ambil soal dari database
$query = $conn->prepare("SELECT id_soal, jawaban_benar FROM soal WHERE id_tryout = ?");
$query->bind_param("i", $id_tryout);
$query->execute();
$result = $query->get_result();

$total_soal = $result->num_rows;
$benar = 0;

while ($row = $result->fetch_assoc()) {
    $id_soal = $row['id_soal'];
    $kunci = strtoupper(trim($row['jawaban_benar']));
    $jawaban_user = strtoupper(trim($user_answers[$id_soal] ?? ''));

    if ($jawaban_user === $kunci) {
        $benar++;
    }
}

$skor = $total_soal > 0 ? round(($benar / $total_soal) * 100) : 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Tryout</title>
    <link rel="stylesheet" href="tryout.css">
</head>
<body>
    <div class="result-container">
        <h1>Hasil Tryout</h1>
        <p>Jumlah soal: <?= $total_soal ?></p>
        <p>Jawaban benar: <?= $benar ?></p>
        <p>Skor Anda: <strong><?= $skor ?>%</strong></p>
        <a href="tryout.php" class="btn-kembali">Kembali ke Daftar Tryout</a>
    </div>
</body>
</html>
