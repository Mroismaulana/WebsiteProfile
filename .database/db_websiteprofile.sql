-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 11:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `ussername` varchar(5) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `ussername`, `password`, `nama`, `email`) VALUES
(1, 'admin', '12345', 'Admin', 'admin@adminweb.id');

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

-- --------------------------------------------------------

--
-- Table structure for table `branda_foto`
--

CREATE TABLE `branda_foto` (
  `id` int(20) NOT NULL,
  `path_to_img` varchar(100) NOT NULL,
  `goto_url` varchar(50) NOT NULL,
  `judul_img` varchar(50) NOT NULL,
  `deskripsi_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabel letak foto yang ditampilkan di halaman branda';

--
-- Dumping data for table `branda_foto`
--

INSERT INTO `branda_foto` (`id`, `path_to_img`, `goto_url`, `judul_img`, `deskripsi_img`) VALUES
(1, '/img/LDKS/img (1).jpg', '#', ' ', ' '),
(2, '/img/LDKS/img (2).jpg', '#', ' ', ' '),
(3, '/img/LDKS/img (3).jpg', '#', ' ', ' '),
(4, '/img/LDKS/img (4).jpg', '#', ' ', ' '),
(5, '/img/LDKS/img (5).jpg', '#', ' ', ' '),
(6, '/img/LDKS/img (6).jpg', '#', ' ', ' '),
(7, '/img/LDKS/img (7).jpg', '#', ' ', ' '),
(8, '/img/LDKS/img (8).jpg', '#', ' ', ' '),
(9, '/img/LDKS/img (9).jpg', '#', ' ', ' '),
(10, '/img/LDKS/img (10).jpg', '#', ' ', ' '),
(11, '/img/LDKS/img (11).jpg', '#', ' ', ' '),
(12, '/img/LDKS/img (12).jpg', '#', ' ', ' '),
(13, '/img/LDKS/img (13).jpg', '#', ' ', ' '),
(14, '/img/LDKS/img (14).jpg', '#', ' ', ' '),
(15, '/img/LDKS/img (15).jpg', '#', ' ', ' '),
(16, '/img/LDKS/img (16).jpg', '#', ' ', ' '),
(17, '/img/LDKS/img (17).jpg', '#', ' ', ' '),
(18, '/img/LDKS/img (18).jpg', '#', ' ', ' '),
(19, '/img/LDKS/img (19).jpg', '#', ' ', ' '),
(20, '/img/LDKS/img (20).jpg', '#', ' ', ' '),
(21, '/img/LDKS/img (21).jpg', '#', ' ', ' '),
(22, '/img/LDKS/img (22).jpg', '#', ' ', ' '),
(23, '/img/LDKS/img (23).jpg', '#', ' ', ' '),
(24, '/img/LDKS/img (24).jpg', '#', ' ', ' '),
(25, '/img/LDKS/img (25).jpg', '#', ' ', ' '),
(26, '/img/LDKS/img (26).jpg', '#', ' ', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branda_acara`
--
ALTER TABLE `branda_acara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branda_foto`
--
ALTER TABLE `branda_foto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branda_acara`
--
ALTER TABLE `branda_acara`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branda_foto`
--
ALTER TABLE `branda_foto`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
