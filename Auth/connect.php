<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "lingkar_pendidikan";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    } else {
        // echo "Koneksi berhasil!";
    }
?>