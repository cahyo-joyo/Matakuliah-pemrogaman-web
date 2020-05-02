-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 05:08 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum13`
--

-- --------------------------------------------------------

--
-- Table structure for table `covid`
--

CREATE TABLE `covid` (
  `id_negara` int(11) NOT NULL,
  `negara` varchar(20) NOT NULL,
  `total_kasus` int(11) NOT NULL,
  `kasus_baru` int(11) NOT NULL,
  `total_mati` int(11) NOT NULL,
  `mati_baru` int(11) NOT NULL,
  `total_sembuh` int(11) NOT NULL,
  `kasus_aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `covid`
--

INSERT INTO `covid` (`id_negara`, `negara`, `total_kasus`, `kasus_baru`, `total_mati`, `mati_baru`, `total_sembuh`, `kasus_aktif`) VALUES
(2, 'USA', 1029878, 19522, 58640, 1843, 140138, 831100),
(3, 'Spanyol', 232128, 2706, 23822, 301, 123903, 84403),
(4, 'Italia', 201505, 2091, 27359, 382, 68941, 105205),
(5, 'Prancis', 165911, 2638, 23660, 367, 46886, 95365),
(6, 'UK', 161145, 3996, 21678, 586, 0, 139123),
(7, 'Jerman', 159431, 673, 6215, 89, 117400, 35816),
(8, 'Turki', 114653, 2392, 2992, 92, 38809, 72852),
(9, 'Rusia', 93558, 6411, 867, 73, 8456, 84235),
(10, 'Iran', 92584, 1112, 5877, 71, 72439, 14268),
(11, 'China', 82836, 6, 4633, 0, 77555, 648);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `covid`
--
ALTER TABLE `covid`
  ADD PRIMARY KEY (`id_negara`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `covid`
--
ALTER TABLE `covid`
  MODIFY `id_negara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
