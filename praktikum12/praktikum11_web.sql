-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 02:45 AM
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
-- Database: `praktikum11_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `formpeserta`
--

CREATE TABLE `formpeserta` (
  `nama` varchar(30) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `nisn` int(20) NOT NULL,
  `nik` int(20) NOT NULL,
  `tempatlhr` varchar(20) NOT NULL,
  `tanggallhr` date NOT NULL,
  `akta` int(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `wna` varchar(20) NOT NULL,
  `berkebutuhan` varchar(5) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `dusun` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kodepos` int(10) NOT NULL,
  `lintang` varchar(20) NOT NULL,
  `bujur` varchar(20) NOT NULL,
  `tinggal` varchar(10) NOT NULL,
  `transportasi` varchar(10) NOT NULL,
  `kks` int(20) DEFAULT NULL,
  `anak` int(2) NOT NULL,
  `kps` int(20) NOT NULL,
  `nokps` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formpeserta`
--

INSERT INTO `formpeserta` (`nama`, `kelamin`, `nisn`, `nik`, `tempatlhr`, `tanggallhr`, `akta`, `agama`, `kewarganegaraan`, `wna`, `berkebutuhan`, `alamat`, `rt`, `rw`, `dusun`, `kelurahan`, `kecamatan`, `kodepos`, `lintang`, `bujur`, `tinggal`, `transportasi`, `kks`, `anak`, `kps`, `nokps`) VALUES
('cahyo', 'Laki-Laki', 1234567890, 987, 'surabaya', '2020-04-09', 1234567890, 'Islam', 'wni', '', 'tidak', 'jojoran', '33', '06', 'morokrembangan', 'morokrembangan', 'krembangan', 60178, '34', '54', 'Wali', 'kendaraan ', 0, 1, 0, 0),
('cahyo joyo prawiro', '', 1234567890, 987654321, 'surabaya', '2020-04-09', 1234567890, 'Islam', 'wni', '', 'tidak', 'jojoran', '33', '06', 'morokrembangan', 'morokrembangan', 'krembangan', 60178, '34', '54', 'Rumah Send', 'Jalan kaki', 0, 1, 0, 0),
('aniiiiiii', 'Perempuan', 1234567890, 2147483647, 'surabaya', '2020-04-09', 1234567890, 'Islam', 'wni', '', 'tidak', 'jojoran', '33', '06', 'morokrembangan', 'morokrembangan', 'krembangan', 60178, '34', '54', 'Rumah Send', 'Jalan kaki', 0, 12, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama`, `kelas`, `alamat`) VALUES
(1, 'Budi Susanto', '1MM3', 'Sedati Gede'),
(2, 'Dita Anggraini', '1MM2', 'Rungkut'),
(3, 'Riska Nur Aini', '3MM1', 'Wonocolo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formpeserta`
--
ALTER TABLE `formpeserta`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formpeserta`
--
ALTER TABLE `formpeserta`
  MODIFY `nik` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
