-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 01:45 PM
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
-- Database: `db_websiteprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto_beranda`
--

CREATE TABLE `foto_beranda` (
  `id` int(20) NOT NULL,
  `path_to_img` varchar(100) NOT NULL,
  `goto_url` varchar(50) NOT NULL,
  `judul_img` varchar(50) NOT NULL,
  `deskripsi_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabel letak foto yang ditampilkan di halaman branda';

--
-- Dumping data for table `foto_beranda`
--

INSERT INTO `foto_beranda` (`id`, `path_to_img`, `goto_url`, `judul_img`, `deskripsi_img`) VALUES
(1, 'img/lab/akl.jpeg', 'Ruang Lab.php', 'Ruang Lab AKL', 'Some representative placeholder content for the fi'),
(2, 'img/lab/otkp.jpeg', 'Ruang Lab.php', 'Ruang Lab OTKP', 'Some representative placeholder content for the se'),
(3, 'img/lab/rpl.jpeg', 'Ruang Lab.php', 'Ruang Lab RPL', 'Some representative placeholder content for the se');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto_beranda`
--
ALTER TABLE `foto_beranda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto_beranda`
--
ALTER TABLE `foto_beranda`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
