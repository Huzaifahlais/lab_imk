-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 03:06 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `perpus`
--

CREATE TABLE `perpus` (
  `id` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perpus`
--

INSERT INTO `perpus` (`id`, `nim`, `nama`, `email`, `nohp`, `alamat`, `fakultas`, `prodi`) VALUES
(10, '191402054', 'Haiqal Rizky', 'haiqalrizky@gmail.com', '0899123456789', 'Ringroad', 'Fakultas Ilmu Komputer dan Teknologi Informasi', 'S1-Teknologi Informasi'),
(12, '191402030', 'Annisa Putri Daulay', 'annisaputri@gmail.com', '085263748596', 'J City', 'Fakultas Ilmu Komputer dan Teknologi Informasi', 'S1-Teknologi Informasi'),
(14, '191402036', 'Nanda Ambiya ', 'nandaamb@gmail.com', '08612345678', 'Tebing Tinggi', 'Fakultas Ilmu Komputer dan Teknologi Informasi', 'S1-Teknologi Informasi'),
(19, '181402003', 'Ammar rafi', 'ammar_619@gmail.com', '0899123456789', 'Lubuk Pakam', 'Fakultas Ilmu Komputer dan Teknologi Informasi', 'S1-Teknologi Informasi'),
(22, '191402012', 'Denaya Pramudya. A', 'adenaden0202@gmail.com', '085263748596', 'Jalan Pembangunan', 'Fakultas Ilmu Komputer dan Teknologi Informasi', 'S1-Teknologi Informasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perpus`
--
ALTER TABLE `perpus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perpus`
--
ALTER TABLE `perpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
