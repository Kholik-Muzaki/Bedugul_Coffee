-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2023 at 11:29 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21074956_bedugul`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`) VALUES
(3, 'kholik', '$2y$10$QsbAczdF9m60wdorFOMp4OkvOoL.9MSogvr4LIxDbPRpJVNZZ7gum'),
(4, 'muzaki', '$2y$10$z91u2jNvtfxZB5xDlgMtpuHg.tifdTS4DmvWbdmt5EcPo3CxRdjIC'),
(5, 'admin', '$2y$10$qt/Ha9BJjr9xyX37Is4P4u1jaNxwiiShfCezjcPiv5HOhZVdqb5li');

-- --------------------------------------------------------

--
-- Table structure for table `datakopi`
--

CREATE TABLE `datakopi` (
  `id` int(5) NOT NULL,
  `NamaKopi` varchar(50) NOT NULL,
  `AsalKopi` varchar(50) NOT NULL,
  `Harga` int(11) NOT NULL,
  `User` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datakopi`
--

INSERT INTO `datakopi` (`id`, `NamaKopi`, `AsalKopi`, `Harga`, `User`) VALUES
(1, 'kopi susu', 'Lampung', 15000, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` char(10) NOT NULL,
  `rasa` varchar(50) NOT NULL,
  `nm` varchar(50) NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `tgl_order` datetime NOT NULL,
  `mp` varchar(50) NOT NULL,
  `jml` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `rasa`, `nm`, `no_tlp`, `tgl_order`, `mp`, `jml`) VALUES
('P202300001', 'kopi hitam', 'wildan', '098765432', '2023-07-25 00:00:00', '1 Cup', '3 Cup'),
('P202300002', 'kopi hitam', 'hanif', '123456', '2023-07-25 00:00:00', '2 Cup', '2 Cup'),
('P202300003', 'kopi hitam', 'wildan', '098765432', '2023-07-25 00:00:00', 'Cash', '3 Cup');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`(50));

--
-- Indexes for table `datakopi`
--
ALTER TABLE `datakopi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `datakopi`
--
ALTER TABLE `datakopi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
