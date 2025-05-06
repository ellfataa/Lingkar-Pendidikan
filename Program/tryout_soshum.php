<?php
session_start();
include '../Auth/connect.php';

$id_tryout = 2; // ID tryout untuk Soshum
$query = $conn->prepare("SELECT * FROM soal WHERE id_tryout = ?");
$query->bind_param("i", $id_tryout);
$query->execute();
$result = $query->get_result();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tryout Soshum</title>
    <link rel="stylesheet" href="tryout.css">
</head>
<body>
    <div class="tryout-container">
        <h1>Tryout Soshum</h1>
        <form action="submit_tryout.php" method="post">
            <input type="hidden" name="id_tryout" value="<?= $id_tryout ?>">
            <?php $no = 1; while ($row = $result->fetch_assoc()): ?>
                <div class="soal-box">
                    <p><strong><?= $no++ ?>.</strong> <?= $row['pertanyaan'] ?></p>
                    <div class="opsi">
                        <label><input type="radio" name="answers[<?= $row['id_soal'] ?>]" value="A"> A. <?= $row['opsi_a'] ?></label><br>
                        <label><input type="radio" name="answers[<?= $row['id_soal'] ?>]" value="B"> B. <?= $row['opsi_b'] ?></label><br>
                        <label><input type="radio" name="answers[<?= $row['id_soal'] ?>]" value="C"> C. <?= $row['opsi_c'] ?></label><br>
                        <label><input type="radio" name="answers[<?= $row['id_soal'] ?>]" value="D"> D. <?= $row['opsi_d'] ?></label>
                    </div>
                </div>
            <?php endwhile; ?>
            <button type="submit" class="btn-submit">Selesai & Lihat Skor</button>
        </form>
    </div>
</body>
</html>
