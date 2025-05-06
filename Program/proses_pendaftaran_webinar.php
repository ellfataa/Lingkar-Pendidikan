<?php
include '../Auth/connect.php';

// Ambil data dari form
$id_webinar = $_POST['id_webinar'] ?? 0;
$nama = trim($_POST['nama_lengkap'] ?? '');
$email = trim($_POST['email'] ?? '');
$no_wa = trim($_POST['no_hp'] ?? '');

// Validasi sederhana
if ($id_webinar == 0 || $nama == '' || $email == '' || $no_wa == '') {
    echo "<script>alert('Semua field harus diisi.'); window.history.back();</script>";
    exit;
}

// Simpan ke database
$query = $conn->prepare("INSERT INTO pendaftaran_webinar (id_webinar, nama_lengkap, email, no_hp) VALUES (?, ?, ?, ?)");
$query->bind_param("isss", $id_webinar, $nama, $email, $no_wa);

if ($query->execute()) {
    echo "<script>alert('Pendaftaran berhasil! Link Zoom akan dikirimkan melalui email atau WhatsApp.'); window.location.href='webinar.php';</script>";
} else {
    echo "<script>alert('Pendaftaran gagal. Silakan coba lagi.'); window.history.back();</script>";
}
?>
