-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 01:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farika`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas_pendukung`
--

CREATE TABLE `berkas_pendukung` (
  `id` int(11) NOT NULL,
  `pelamar_id` int(11) NOT NULL,
  `nama_berkas` varchar(100) NOT NULL,
  `berkas` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_lowongan`
--

CREATE TABLE `detail_lowongan` (
  `id` int(11) NOT NULL,
  `lowongan_id` varchar(125) NOT NULL,
  `kualifikasi` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_lowongan`
--

INSERT INTO `detail_lowongan` (`id`, `lowongan_id`, `kualifikasi`) VALUES
(23, 'adim86084154', 'pengalaman minimal 1 thn'),
(24, 'adim86084154', 'penempatan pekanbaru'),
(25, 'adim86084154', 'a'),
(26, 'IT38266927', 'asdasd'),
(27, 'IT38266927', 'asd'),
(28, 'IT38266927', 'aad'),
(29, 'kasir79036129', 'qqqqqqqqqqqqqqqq'),
(30, 'kasir79036129', 'asfasfasd'),
(31, 'kasir79036129', 'asfdafafaf'),
(32, 'kasir79036129', 'asdad');

-- --------------------------------------------------------

--
-- Table structure for table `detail_ujian`
--

CREATE TABLE `detail_ujian` (
  `id` int(11) NOT NULL,
  `ujian_id` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kariawan`
--

CREATE TABLE `kariawan` (
  `kariawan_id` int(11) NOT NULL,
  `kariawan_nama` varchar(125) NOT NULL,
  `kariawan_tmp_lhr` varchar(125) NOT NULL,
  `kariawan_tgl_lhr` varchar(50) NOT NULL,
  `kariawan_jns_kel` varchar(20) NOT NULL,
  `kariawan_agama` varchar(20) NOT NULL,
  `kariawan_alamat` varchar(225) NOT NULL,
  `kariawan_foto` varchar(225) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kariawan`
--

INSERT INTO `kariawan` (`kariawan_id`, `kariawan_nama`, `kariawan_tmp_lhr`, `kariawan_tgl_lhr`, `kariawan_jns_kel`, `kariawan_agama`, `kariawan_alamat`, `kariawan_foto`, `username`, `password`) VALUES
(1, 'inda', '', '', '', '', '', '', 'inda', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_soal`
--

CREATE TABLE `kategori_soal` (
  `kategori_soal_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_soal`
--

INSERT INTO `kategori_soal` (`kategori_soal_id`, `nama`) VALUES
(1, 'matemarika1'),
(2, 'pisikotes'),
(4, 'sosial');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `lowongan_id` varchar(225) NOT NULL,
  `lowongan_posisi` varchar(125) NOT NULL,
  `lowongan_tgl_terbit` varchar(50) NOT NULL,
  `lowongan_tgl_batas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`lowongan_id`, `lowongan_posisi`, `lowongan_tgl_terbit`, `lowongan_tgl_batas`) VALUES
('adim86084154', 'adim', 'Sun.Mar.2020', '12/11/2020'),
('IT38266927', 'IT', 'SunSun.MarMar.20202020', '12/05/2020'),
('kasir79036129', 'kasir', '08.Mar.2020', '13/06/2020');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `jenis_kel` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `pelamar_id` int(11) NOT NULL,
  `pendidikan` varchar(110) NOT NULL,
  `ijazah` varchar(225) NOT NULL,
  `transkip_nilai` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `kategori_soal_id` int(11) NOT NULL,
  `soal` varchar(225) NOT NULL,
  `a` varchar(225) NOT NULL,
  `b` varchar(225) NOT NULL,
  `c` varchar(225) NOT NULL,
  `d` varchar(225) NOT NULL,
  `jawaban` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `kategori_soal_id`, `soal`, `a`, `b`, `c`, `d`, `jawaban`) VALUES
(2, 2, 'saya adalah', 'dia', 'kamu', 'merka', 'kamilah', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `ujian_id` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `pelamara_id` int(11) NOT NULL,
  `tgl_ujian` varchar(50) NOT NULL,
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas_pendukung`
--
ALTER TABLE `berkas_pendukung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_lowongan`
--
ALTER TABLE `detail_lowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_ujian`
--
ALTER TABLE `detail_ujian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kariawan`
--
ALTER TABLE `kariawan`
  ADD PRIMARY KEY (`kariawan_id`);

--
-- Indexes for table `kategori_soal`
--
ALTER TABLE `kategori_soal`
  ADD PRIMARY KEY (`kategori_soal_id`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`lowongan_id`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`ujian_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas_pendukung`
--
ALTER TABLE `berkas_pendukung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_lowongan`
--
ALTER TABLE `detail_lowongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `detail_ujian`
--
ALTER TABLE `detail_ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kariawan`
--
ALTER TABLE `kariawan`
  MODIFY `kariawan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori_soal`
--
ALTER TABLE `kategori_soal`
  MODIFY `kategori_soal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
  MODIFY `ujian_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
