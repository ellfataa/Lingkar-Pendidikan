-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 06, 2025 at 01:25 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lingkar_pendidikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_webinar`
--

CREATE TABLE `pendaftaran_webinar` (
  `id_pendaftaran` int NOT NULL,
  `id_webinar` int NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `waktu_daftar` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pendaftaran_webinar`
--

INSERT INTO `pendaftaran_webinar` (`id_pendaftaran`, `id_webinar`, `nama_lengkap`, `email`, `no_hp`, `waktu_daftar`) VALUES
(1, 1, 'Fata', 'fata@gmail.com', '12345678', '2025-05-06 00:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int NOT NULL,
  `id_tryout` int DEFAULT NULL,
  `pertanyaan` text NOT NULL,
  `opsi_a` text,
  `opsi_b` text,
  `opsi_c` text,
  `opsi_d` text,
  `jawaban_benar` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `id_tryout`, `pertanyaan`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `jawaban_benar`) VALUES
(1, 1, 'Berapakah hasil dari 2 + 3?', '3', '4', '5', '6', 'C'),
(2, 1, 'Apa ibu kota Indonesia?', 'Jakarta', 'Bandung', 'Surabaya', 'Medan', 'A'),
(3, 1, 'Hukum Newton yang pertama dikenal dengan nama?', 'Hukum Aksi dan Reaksi', 'Hukum Inersia', 'Hukum Gravitasi', 'Hukum Kecepatan', 'B'),
(4, 1, 'Apa simbol kimia dari Air?', 'H2O', 'CO2', 'O2', 'H2', 'A'),
(5, 1, 'Siapa penemu hukum gravitasi?', 'Albert Einstein', 'Isaac Newton', 'Galileo Galilei', 'Nikola Tesla', 'B'),
(6, 1, 'Manakah yang merupakan unsur gas mulia?', 'Oksigen', 'Karbon', 'Neon', 'Sodium', 'C'),
(7, 1, 'Panjang sisi kubus jika volume adalah 125 cm³?', '5 cm', '4 cm', '6 cm', '3 cm', 'A'),
(8, 2, 'Siapa yang pertama kali mengemukakan teori kapitalisme?', 'Karl Marx', 'Adam Smith', 'Friedrich Engels', 'Max Weber', 'B'),
(9, 2, 'Apa tujuan dari Pancasila sebagai dasar negara?', 'Mengatur agama', 'Menjaga keberagaman', 'Menjaga persatuan dan kesatuan', 'Menjamin kebebasan individu', 'C'),
(10, 2, 'Berapa jumlah provinsi di Indonesia?', '32', '34', '36', '38', 'B'),
(11, 2, 'Apa nama ibu kota Amerika Serikat?', 'New York', 'Los Angeles', 'Washington D.C.', 'Chicago', 'C'),
(12, 2, 'Apa yang dimaksud dengan \"globalisasi\"?', 'Pertukaran budaya secara lokal', 'Integrasi ekonomi dunia', 'Pertumbuhan ekonomi dalam negeri', 'Peningkatan perdagangan antar negara', 'B'),
(13, 2, 'Siapa yang menulis buku \"The Wealth of Nations\"?', 'Friedrich Engels', 'Adam Smith', 'Karl Marx', 'John Locke', 'B'),
(14, 2, 'Pendidikan yang berbasis pada penelitian dikenal dengan nama?', 'Pendidikan Dasar', 'Pendidikan Menengah', 'Pendidikan Tinggi', 'Pendidikan Non-formal', 'C'),
(15, 3, 'Siapa yang pertama kali mengemukakan teori kapitalisme?', 'Karl Marx', 'Adam Smith', 'Friedrich Engels', 'Max Weber', 'B'),
(16, 3, 'Apa tujuan dari Pancasila sebagai dasar negara?', 'Mengatur agama', 'Menjaga keberagaman', 'Menjaga persatuan dan kesatuan', 'Menjamin kebebasan individu', 'C'),
(17, 3, 'Berapa jumlah provinsi di Indonesia?', '32', '34', '36', '38', 'B'),
(18, 3, 'Apa nama ibu kota Amerika Serikat?', 'New York', 'Los Angeles', 'Washington D.C.', 'Chicago', 'C'),
(19, 3, 'Apa yang dimaksud dengan \"globalisasi\"?', 'Pertukaran budaya secara lokal', 'Integrasi ekonomi dunia', 'Pertumbuhan ekonomi dalam negeri', 'Peningkatan perdagangan antar negara', 'B'),
(20, 3, 'Siapa yang menulis buku \"The Wealth of Nations\"?', 'Friedrich Engels', 'Adam Smith', 'Karl Marx', 'John Locke', 'B'),
(21, 3, 'Pendidikan yang berbasis pada penelitian dikenal dengan nama?', 'Pendidikan Dasar', 'Pendidikan Menengah', 'Pendidikan Tinggi', 'Pendidikan Non-formal', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `tryout`
--

CREATE TABLE `tryout` (
  `id_tryout` int NOT NULL,
  `nama_tryout` varchar(255) NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tryout`
--

INSERT INTO `tryout` (`id_tryout`, `nama_tryout`, `deskripsi`) VALUES
(1, 'Tryout Saintek', 'Simulasi tryout saintek dengan soal SBMPTN terkini'),
(2, 'Tryout Soshum', 'Simulasi tryout soshum dari mentor berpengalaman'),
(3, 'Tryout SKD', 'Simulasi tryout SKD dengan soal SKD CAT terkini');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'Luthfi Emillulfata', 'luthfi', '$2y$10$68qYu9T9n1yyAJtj.D9m0Ox2D.0E1WDMfPN7eNo7ZtJt4heTVgwNS'),
(2, 'Levi Ackerman', 'levi', '$2y$10$OhQA544y5/5xIBatiUFuluBzQWWiYMF6aXq6sPvYVzCE3ZUxmRzAm');

-- --------------------------------------------------------

--
-- Table structure for table `webinar`
--

CREATE TABLE `webinar` (
  `id_webinar` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `link_zoom` varchar(255) NOT NULL,
  `poster` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `webinar`
--

INSERT INTO `webinar` (`id_webinar`, `judul`, `deskripsi`, `tanggal`, `waktu`, `link_zoom`, `poster`) VALUES
(1, 'Strategi Lolos UTBK 2025', 'Webinar ini akan membahas strategi efektif untuk menghadapi UTBK dan tips memilih jurusan.', '2025-05-15', '19:00:00', 'https://zoom.us/j/1234567890', NULL),
(2, 'Mengenal Sekolah Kedinasan Lebih Dekat', 'Kupas tuntas peluang, persiapan, dan proses seleksi sekolah kedinasan bersama alumni.', '2025-05-20', '18:30:00', 'https://zoom.us/j/9876543210', NULL),
(3, 'Tips Belajar Efektif untuk SBMPTN', 'Cara mengatur waktu belajar, fokus materi, dan menjaga motivasi menjelang SBMPTN.', '2025-05-25', '20:00:00', 'https://zoom.us/j/1122334455', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran_webinar`
--
ALTER TABLE `pendaftaran_webinar`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_webinar` (`id_webinar`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_tryout` (`id_tryout`);

--
-- Indexes for table `tryout`
--
ALTER TABLE `tryout`
  ADD PRIMARY KEY (`id_tryout`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `webinar`
--
ALTER TABLE `webinar`
  ADD PRIMARY KEY (`id_webinar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran_webinar`
--
ALTER TABLE `pendaftaran_webinar`
  MODIFY `id_pendaftaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tryout`
--
ALTER TABLE `tryout`
  MODIFY `id_tryout` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `webinar`
--
ALTER TABLE `webinar`
  MODIFY `id_webinar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendaftaran_webinar`
--
ALTER TABLE `pendaftaran_webinar`
  ADD CONSTRAINT `pendaftaran_webinar_ibfk_1` FOREIGN KEY (`id_webinar`) REFERENCES `webinar` (`id_webinar`) ON DELETE CASCADE;

--
-- Constraints for table `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`id_tryout`) REFERENCES `tryout` (`id_tryout`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
