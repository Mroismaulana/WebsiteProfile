-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 07:03 PM
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
-- Table structure for table `branda_acara`
--

CREATE TABLE `branda_acara` (
  `id` int(20) NOT NULL,
  `path_to_img` varchar(100) NOT NULL,
  `goto_url` varchar(50) NOT NULL,
  `judul_img` varchar(50) NOT NULL,
  `deskripsi_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabel letak foto yang ditampilkan di halaman branda';

--
-- Dumping data for table `branda_acara`
--

INSERT INTO `branda_acara` (`id`, `path_to_img`, `goto_url`, `judul_img`, `deskripsi_img`) VALUES
(1, '/img/LDKS/img (3).jpg', '#', 'Judul Acara', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos inventore suscipit excepturi accusantium distinctio recusandae maiores, numquam modi similique quas quibusdam odit exercitationem consequatur accusamus delectus nesciunt sed earum fuga!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branda_acara`
--
ALTER TABLE `branda_acara`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branda_acara`
--
ALTER TABLE `branda_acara`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
