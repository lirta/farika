-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 11:34 PM
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

--
-- Dumping data for table `berkas_pendukung`
--

INSERT INTO `berkas_pendukung` (`id`, `pelamar`, `nama_berkas`, `berkas`) VALUES
(1, 'lirta', 'gentho', '956025893763638IMG_485352.jpg'),
(2, 'lirta', 'inda lirta padisma', '25750396739253283d-games-wallpapers-3d-picture-3d-wallpaper_oWEbyQ7.jpg');

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
(1, 'sales6329618', 'belum menikah'),
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
  `ujian_id` varchar(125) NOT NULL,
  `kategori` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_ujian`
--

INSERT INTO `detail_ujian` (`id`, `ujian_id`, `kategori`, `id_soal`, `jawaban`) VALUES
(8, 'lirta32204696', 2, 2, 'b'),
(9, 'lirta32204696', 1, 4, 'a'),
(10, 'lirta32204696', 2, 5, 'a'),
(11, 'lirta49455709', 2, 2, ''),
(12, 'lirta49455709', 1, 4, 'a'),
(13, 'lirta49455709', 2, 5, 'b'),
(14, 'lirta24536471', 2, 2, 'c'),
(15, 'lirta24536471', 1, 4, 'b'),
(16, 'lirta24536471', 2, 5, 'a');

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

--
-- Dumping data for table `kategori_soal`
--

INSERT INTO `kategori_soal` (`kategori_soal_id`, `nama`) VALUES
(1, 'matemarika1'),
(2, 'pisikotes'),
(4, 'sosial');

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
  `tgl_ujian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lamaran`
--

INSERT INTO `lamaran` (`id`, `lowongan`, `pelamar`, `tgl_lamaran`, `status`, `tgl_ujian`) VALUES
(6, 'sales6329618', 'lirta', '11/03/2020', 'LULUS', '13/03/2020'),
(7, 'kasir79036129', 'lirta', '11/03/2020', 'PERMOHONAN', '');

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

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`lowongan_id`, `lowongan_posisi`, `lowongan_tgl_terbit`, `lowongan_tgl_batas`) VALUES
('adim86084154', 'adim', 'Sun.Mar.2020', '12/11/2020'),
('IT38266927', 'IT', 'SunSun.MarMar.20202020', '12/05/2020'),
('kasir79036129', 'kasir', '08.Mar.2020', '13/06/2020'),
('sales6329618', 'sales', '10/03/2020', '12/04/2020');

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
('inda', '', '', '', '', '09', 'inda@jn', '', 'inda', 'b3d31242b5e5580ef784f213aff8bf4b', 'default.jpg'),
('inda lirta padisma', 'padang', '18/11/1990', 'Laki-laki', 'Islam', '081277967050', 'indalirta@gmail.com', 'lintau', 'lirta', 'c4ca4238a0b923820dcc509a6f75849b', 'default.jpg');

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
(4, 'lirta', 'D3', 'manajemen informatika', '93426193D-Action-Games-HD-Wallpaper.jpg', '53464851a (3).jpg', '7651670979171403D-Action-Games-HD-Wallpaper.jpg');

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
(2, 2, 'saya adalah', 'dia', 'kamu', 'merka', 'kamilah', 'd'),
(4, 1, 'nama dia', 'saya', 'saya2', 'saya3', 'saya4', 'b'),
(5, 2, 'nama saya', 'dia', 'kamu', 'mereka', 'kami', 'a');

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
-- Dumping data for table `ujian`
--

INSERT INTO `ujian` (`ujian_id`, `id_lowongan`, `pelamar_id`, `tgl_ujian`, `benar`, `salah`) VALUES
('lirta24536471', 'sales6329618', 'lirta', '13/03/2020', 2, 1),
('lirta32204696', 'sales6329618', 'lirta', '13/03/2020', 1, 2),
('lirta49455709', 'sales6329618', 'lirta', '13/03/2020', 0, 3);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_lowongan`
--
ALTER TABLE `detail_lowongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `detail_ujian`
--
ALTER TABLE `detail_ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `lamaran`
--
ALTER TABLE `lamaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
