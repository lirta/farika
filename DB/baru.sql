-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 06:28 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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
  `pelamar` varchar(125) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `detail_ujian`
--

CREATE TABLE `detail_ujian` (
  `id` int(11) NOT NULL,
  `ujian_id` varchar(125) NOT NULL,
  `kategori` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kariawan`
--

CREATE TABLE `kariawan` (
  `kariawan_nama` varchar(125) NOT NULL,
  `kariawan_tmp_lhr` varchar(125) NOT NULL,
  `kariawan_tgl_lhr` varchar(50) NOT NULL,
  `kariawan_jns_kel` varchar(20) NOT NULL,
  `kariawan_agama` varchar(20) NOT NULL,
  `kariawan_alamat` varchar(225) NOT NULL,
  `kariawan_hp` varchar(30) NOT NULL,
  `kariawan_foto` varchar(225) NOT NULL,
  `kariawan_jabatan` varchar(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kariawan`
--

INSERT INTO `kariawan` (`kariawan_nama`, `kariawan_tmp_lhr`, `kariawan_tgl_lhr`, `kariawan_jns_kel`, `kariawan_agama`, `kariawan_alamat`, `kariawan_hp`, `kariawan_foto`, `kariawan_jabatan`, `username`, `password`) VALUES
('gentho', 'pekanbaru 11', '12/12/1212', 'Laki-laki', 'Islam', 'Jl. Parmata', '09', '7162045453464851a (3).jpg', 'ADMIN', 'admin', 'c81e728d9d4c2f636f067f89cc14862c'),
('inda lirta padisma', 'padang', '18/11/1990', 'Laki-laki', 'Islam', 'garuda sakti', '081277967050', '76630800default.jpg', 'HRD', 'hrd', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_soal`
--

CREATE TABLE `kategori_soal` (
  `kategori_soal_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lamaran`
--

CREATE TABLE `lamaran` (
  `id` int(11) NOT NULL,
  `lowongan` varchar(125) NOT NULL,
  `pelamar` varchar(125) NOT NULL,
  `tgl_lamaran` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tgl_ujian` varchar(50) NOT NULL,
  `tgl_interview` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `lowongan_id` varchar(50) NOT NULL,
  `lowongan_posisi` varchar(125) NOT NULL,
  `lowongan_tgl_terbit` varchar(50) NOT NULL,
  `lowongan_tgl_batas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `nama` varchar(100) NOT NULL,
  `tmp_lhr` varchar(125) NOT NULL,
  `tgl_lhr` varchar(30) NOT NULL,
  `jns_kel` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`nama`, `tmp_lhr`, `tgl_lhr`, `jns_kel`, `agama`, `no_hp`, `email`, `alamat`, `username`, `password`, `foto`) VALUES
('inda', '', '', '', '', '09', 'ijij@inda', '', 'a', 'c4ca4238a0b923820dcc509a6f75849b', 'default.jpg'),
('Fiter', '', '', '', '', '0320853275025', 'amp@gmail.com', '', 'fiter', 'd4c1c976e2885dbcf4798b708717ac1e', 'default.jpg'),
('fiter123', '', '', '', '', '8484884', 'apm@gmail.com', '', 'fiter123', '9942768163fc714dd3dba14fb754261d', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `pelamar` varchar(225) NOT NULL,
  `pendidikan` varchar(110) NOT NULL,
  `jurusan` varchar(125) NOT NULL,
  `ijazah` varchar(225) NOT NULL,
  `transkip_nilai` varchar(225) NOT NULL,
  `cv` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `pelamar`, `pendidikan`, `jurusan`, `ijazah`, `transkip_nilai`, `cv`) VALUES
(1, 'fiter123', 'S1', 'manajemen informatika', '220212483d-games-wallpapers-3d-picture-3d-wallpaper_oWEbyQ7.jpg', '220212483D-Action-Games-HD-Wallpaper.jpg', '22021248devil-may-cry-background.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `ujian_id` varchar(125) NOT NULL,
  `id_lowongan` varchar(125) NOT NULL,
  `pelamar_id` varchar(125) NOT NULL,
  `tgl_ujian` varchar(50) NOT NULL,
  `benar` int(11) NOT NULL,
  `salah` int(11) NOT NULL
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
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `kategori_soal`
--
ALTER TABLE `kategori_soal`
  ADD PRIMARY KEY (`kategori_soal_id`);

--
-- Indexes for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`lowongan_id`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`username`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_ujian`
--
ALTER TABLE `detail_ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_soal`
--
ALTER TABLE `kategori_soal`
  MODIFY `kategori_soal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lamaran`
--
ALTER TABLE `lamaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
