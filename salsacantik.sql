-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2025 at 04:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salsacantik`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_bale`
--

CREATE TABLE `db_bale` (
  `id_hewan` int(11) NOT NULL,
  `nama_hewan` varchar(25) NOT NULL,
  `jenis_hewan` varchar(25) NOT NULL,
  `asal` text NOT NULL,
  `jumlah` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_bale`
--

INSERT INTO `db_bale` (`id_hewan`, `nama_hewan`, `jenis_hewan`, `asal`, `jumlah`) VALUES
(4, 'Harimau sumatra', 'Mamalia (karnivora)', 'sumatra,Indonesia', 600),
(5, 'Gajah Afrika', 'Mamalia (herbivora)', 'Afrika', 415),
(6, 'Komodo', 'Reptil (kadal besar)', 'pulau komodo,Rinca,flores (indonesia)', 3000),
(7, 'Elang Jawa', 'Aves (burung pemangsa)', 'jawa (indonesia)', 600),
(8, 'kupu-kupu raja(Monarch Bu', 'serangga', 'Amerika Utara', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_bale`
--
ALTER TABLE `db_bale`
  ADD PRIMARY KEY (`id_hewan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_bale`
--
ALTER TABLE `db_bale`
  MODIFY `id_hewan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
