-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 17, 2026 at 06:58 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwd_2622500007`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak_2622500007`
--

CREATE TABLE `tbl_kontak_2622500007` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `semester` tinyint NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_pesan` varchar(20) NOT NULL,
  `minat` varchar(50) NOT NULL,
  `prodi` varchar(2) NOT NULL,
  `pesan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_kontak_2622500007`
--

INSERT INTO `tbl_kontak_2622500007` (`id`, `nama`, `email`, `semester`, `tanggal`, `jenis_pesan`, `minat`, `prodi`, `pesan`) VALUES
(1, 'Nadiyah Salma', '2622500007@mahasiswa.atmaluhur.ac.id', 1, '2026-11-17', 'saran', 'HTML, CSS', 'SI', 'Lebih baik lagi.'),
(2, 'Puteri Diana', '26225000023@mahasiswa.atmaluhur.ac.id', 1, '2026-11-17', 'saran', 'HTML, CSS', 'SI', 'Lebih baik lagi, terimakasih.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kontak_2622500007`
--
ALTER TABLE `tbl_kontak_2622500007`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kontak_2622500007`
--
ALTER TABLE `tbl_kontak_2622500007`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
