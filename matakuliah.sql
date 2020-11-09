-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 05:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matakuliah`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Nim` int(10) NOT NULL,
  `Nama_Mhs` varchar(50) NOT NULL,
  `Jenis_Kelamin` varchar(50) NOT NULL,
  `Program_Studi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nim`, `Nama_Mhs`, `Jenis_Kelamin`, `Program_Studi`) VALUES
(230191226, 'Komang Wulan Ayu Prabawati', 'Perempuan', 'Ilmu Komunikasi'),
(713401901, 'I Komang Pasek Arya Sanjaya', 'Laki-Laki', 'Keprawatan'),
(1202194146, 'Thea Anugrah Felicia', 'Perempuan', 'Sistem Informasi'),
(1905021001, 'I Putu Andi Suartika', 'Laki-Laki', 'Teknik Informatika'),
(1905021010, 'Kadek Rama Sanjaya', 'Laki-Laki', 'Teknik Informatika'),
(1905021016, 'Putu Krisna Putra', 'Laki-Laki', 'Manajemen Informatika'),
(1915011006, 'Ni Nengah Cindy Swandewi Putri', 'Perempuan', 'Akuntansi'),
(1917041187, 'Made Ira Darmayanti', 'Perempuan', 'Manajemen'),
(1917051103, 'Dharma Cahyadi', 'Laki-Laki', 'Manajemen'),
(2012051004, 'Putu Putri Maharani ', 'Laki-Laki', 'Sistem Informasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
