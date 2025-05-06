<?php
include '../Auth/connect.php';

$id_webinar = $_GET['id'] ?? 0;

// Ambil data webinar
$query = $conn->prepare("SELECT * FROM webinar WHERE id_webinar = ?");
$query->bind_param("i", $id_webinar);
$query->execute();
$result = $query->get_result();
$webinar = $result->fetch_assoc();

if (!$webinar) {
    echo "<script>alert('Webinar tidak ditemukan'); window.location.href='webinar.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Webinar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="tryout.css">
</head>
<body class="bg-light">
    <div class="container my-5">
        <h2 class="text-center mb-4" style="color: #050c9c;">Pendaftaran Webinar</h2>
        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="mb-3"><?= htmlspecialchars($webinar['judul']) ?></h4>
                <p><strong>Tanggal:</strong> <?= date('d M Y', strtotime($webinar['tanggal'])) ?><br>
                   <strong>Waktu:</strong> <?= date('H:i', strtotime($webinar['waktu'])) ?></p>
                <form action="proses_pendaftaran_webinar.php" method="post">
                    <input type="hidden" name="id_webinar" value="<?= $webinar['id_webinar'] ?>">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor WhatsApp</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color: #050c9c;">Daftar Sekarang</button>
                    <a href="webinar.php" class="btn btn-secondary ml-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
