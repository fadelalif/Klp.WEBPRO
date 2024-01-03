-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2023 at 12:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_relawanin`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita_konten`
--

CREATE TABLE `berita_konten` (
  `id` int(255) NOT NULL,
  `nama_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(255) NOT NULL,
  `tanggal_berita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita_konten`
--

INSERT INTO `berita_konten` (`id`, `nama_berita`, `isi_berita`, `gambar_berita`, `tanggal_berita`) VALUES
(7, 'sadkjnasjkd', 'wakdkawdmkaw', 'Screenshot_2023-09-24_152206.png', '2023-12-06'),
(8, 'qqqqqqqqqqq', 'ncsdnckasdcsc', 'a.png', '2023-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) DEFAULT NULL,
  `aktivitas_kegiatan` varchar(255) DEFAULT NULL,
  `tanggal_kegiatan` date DEFAULT NULL,
  `lokasi_kegiatan` varchar(255) DEFAULT NULL,
  `penanggung_jawab` varchar(255) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `deskripsi_kegiatan` text DEFAULT NULL,
  `uploadFile` varchar(200) DEFAULT NULL,
  `batas_daftar` date NOT NULL,
  `ketentuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama_kegiatan`, `aktivitas_kegiatan`, `tanggal_kegiatan`, `lokasi_kegiatan`, `penanggung_jawab`, `kategori`, `provinsi`, `deskripsi_kegiatan`, `uploadFile`, `batas_daftar`, `ketentuan`) VALUES
(1, 'asasdawd', 'askjdnawjd', '2023-12-18', 'awjdhawdaw', 'awdhawdawd', 'awduhawdhawjdn', 'awdkuhawukdhuawd', 'awudhawudhkjawdhakjw', 'awkjdnawkjdnwajd', '2023-12-10', 'awdjnawjkdnawkjdn');

-- --------------------------------------------------------

--
-- Table structure for table `komunitas`
--

CREATE TABLE `komunitas` (
  `id` int(255) NOT NULL,
  `nama_komunitas` varchar(255) NOT NULL,
  `email_komunitas` varchar(255) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `nomorTlp_komunitas` varchar(255) DEFAULT NULL,
  `penanggung_jawab` varchar(250) DEFAULT NULL,
  `kategori_komunitas` varchar(250) DEFAULT NULL,
  `deskripsi_komunitas` text DEFAULT NULL,
  `provinsi_komunitas` varchar(250) DEFAULT NULL,
  `uploadFoto` varchar(255) DEFAULT NULL,
  `approved` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komunitas`
--

INSERT INTO `komunitas` (`id`, `nama_komunitas`, `email_komunitas`, `password`, `nomorTlp_komunitas`, `penanggung_jawab`, `kategori_komunitas`, `deskripsi_komunitas`, `provinsi_komunitas`, `uploadFoto`, `approved`) VALUES
(1302210045, 'BocilKematian', 'Windah5@gmail.com', '$2y$10$6J9hri4/J4MJoXdQ1Zw5rOc9apLR7aqlPGVrA1nAJinuPHAXgq2lK', '0813213124', 'Windah Basudara', 'Perairan', 'PasukanBocilKematian adalah suatu organisasi yang berfokus kepada masyarakat yang memilikimasalh terhadap kebersihan lingkungannya, maka dari itu kami membuat komunitas ini agar teman teman sekalian dapat ikut berpartisipasi dalam membersihkan lingkungan', 'Kepulauan Bangka Belitung', 'Screenshot_2023-09-24_160113.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `komunitas_status`
--

CREATE TABLE `komunitas_status` (
  `id` int(255) NOT NULL,
  `nama_komunitas` varchar(255) NOT NULL,
  `email_komunitas` varchar(255) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `nomorTlp_komunitas` varchar(255) DEFAULT NULL,
  `penanggung_jawab` varchar(250) DEFAULT NULL,
  `kategori_komunitas` varchar(250) DEFAULT NULL,
  `deskripsi_komunitas` text DEFAULT NULL,
  `provinsi_komunitas` varchar(250) DEFAULT NULL,
  `uploadFoto` text DEFAULT NULL,
  `approved` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register_relawan`
--

CREATE TABLE `register_relawan` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nmrTelphone` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `institusi` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `uploadFoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_relawan`
--

INSERT INTO `register_relawan` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `nmrTelphone`, `tgl_lahir`, `jenis_kelamin`, `pekerjaan`, `institusi`, `provinsi`, `uploadFoto`) VALUES
(5, 'putu', 'putu', 'vidyaananar@gmail.com', 'vidyaratmayanti', '$2y$10$CdBKxt17CTC.AJhIvV2ACeCLWFRMhkn4PDeobOjZxgka5TW8tl8AS', '098765876543', '2023-12-30', 'Perempuan', 'pesulap', '-', 'Kepulauan Bangka Belitung', 'Screenshot_2023-09-24_1522061.png'),
(6, 'farhan', 'farhan', 'askjdklasmda', 'kjasadk', 'kjasdkasdn', '0213012931', '2023-12-07', 'Laki-laki', 'elkfmesklfms', 'skefmsklefm', 'Jawa Barat', ''),
(7, 'farhan', 'farhan', 'rhei123@gmail.com', 'risk', '$2y$10$uwFlYyCXca0IwYI.a8C8pOVCXK5K/lzsoYQ6FoYZZEc2ZXUtDApkS', '082131312312', '2023-12-15', 'Laki-laki', 'asdasdad', 'asdasdasd', 'DKI Jakarta', 'a.png'),
(9, 'awdawd', 'dadawdaw', 'awdawd', 'dawdwa', '$2y$10$UmxUE1h3hjmlMn1yAmY.eOfCdHN4Y6EE2/t9Htb8tynRWeRVw8m2G', '12334433', '2023-12-13', 'Laki-laki', 'wadwda', 'awdawd', 'Kepulauan Riau', 'Screenshot_2023-09-24_152903.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita_konten`
--
ALTER TABLE `berita_konten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komunitas`
--
ALTER TABLE `komunitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komunitas_status`
--
ALTER TABLE `komunitas_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_relawan`
--
ALTER TABLE `register_relawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita_konten`
--
ALTER TABLE `berita_konten`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `komunitas`
--
ALTER TABLE `komunitas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1302223314;

--
-- AUTO_INCREMENT for table `komunitas_status`
--
ALTER TABLE `komunitas_status`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1302223314;

--
-- AUTO_INCREMENT for table `register_relawan`
--
ALTER TABLE `register_relawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
