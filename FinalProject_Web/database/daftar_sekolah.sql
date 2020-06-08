-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 02:37 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `password`) VALUES
(5, 'admin', 'admin'),
(6, 'Wilda F', 'wil123');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_transfer`
--

CREATE TABLE `bukti_transfer` (
  `id` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `bukti_transfer` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukti_transfer`
--

INSERT INTO `bukti_transfer` (`id`, `id_pendaftar`, `nama_pendaftar`, `nama_bank`, `bukti_transfer`, `status`) VALUES
(1, 1, 'baitun nadhiroh', 'BNI-Baitun', 'img/bukti_transfer/IMG-20200306-WA0007.jpg', 1),
(2, 2, 'Haqul Yakin', 'Mandiri - Yakin', 'img/bukti_transfer/20200407_124648_0000.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_orangtua`
--

CREATE TABLE `data_orangtua` (
  `id` int(11) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kodepos` varchar(100) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `email_ortu` varchar(100) NOT NULL,
  `pendidikan_ayah` varchar(100) NOT NULL,
  `pendidikan_ibu` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `penghasilan_ortu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_orangtua`
--

INSERT INTO `data_orangtua` (`id`, `nama_pendaftar`, `id_pendaftar`, `nama_ayah`, `nama_ibu`, `nama_wali`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kodepos`, `nohp`, `email_ortu`, `pendidikan_ayah`, `pendidikan_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_ortu`) VALUES
(1, 'baitun nadhiroh', 1, 'Umar Said', 'Anik Ruswaidah', 'Umar Said', 'Cerme gang Rajawali', 'Jawa Timur', 'gresik', 'cerme', '61171', '087678729018', '', 'd3', 's1', 'pns', 'tidak bekerja', '1-3jt');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ijazah` varchar(50) NOT NULL,
  `ktp_ayah` varchar(100) NOT NULL,
  `ktp_ibu` varchar(100) NOT NULL,
  `akte` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `id_pendaftar`, `nama_pendaftar`, `foto`, `ijazah`, `ktp_ayah`, `ktp_ibu`, `akte`, `kk`) VALUES
(1, 1, 'baitun nadhiroh', '', 'img/dokumen/ijazah/20160104_184054.jpg', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `formulir_mhs`
--

CREATE TABLE `formulir_mhs` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') DEFAULT NULL,
  `anak ke` char(10) NOT NULL,
  `dari` char(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tempat tinggal` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `no_srgm` varchar(5) NOT NULL,
  `password` varchar(8) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir_mhs`
--

INSERT INTO `formulir_mhs` (`id`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `anak ke`, `dari`, `agama`, `tempat tinggal`, `alamat`, `provinsi`, `no_srgm`, `password`, `tgl_daftar`) VALUES
(1, 'baitun nadhiroh', 'Gresik', '2020-05-09', 'laki-laki', '', '', 'islam', '', 'tambak beras', 'sumaterabarat', 'xl', 'Baitun12', '2020-05-09'),
(2, 'Haqul Yakin', 'Gresik', '2020-03-09', 'laki-laki', '3', '4', 'islam', 'kost', 'uykdh', 'sulawesiselatan', 'xxl', 'yakin12', '2020-05-09'),
(3, 'Gritte Agata', 'Jakarta', '2001-02-08', 'perempuan', '3', '3', 'kristen', 'bersama kerabat', 'Lebak bulus gang 10', 'jakarata', 'm', 'aga123', '2020-06-06'),
(4, 'aaakuu', 'dfgg', '2020-08-07', 'perempuan', '1', '1', 'hindu', 'kontrak', 'ddf', 'jambi', 'xl', 'sasa22', '2020-06-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukti_transfer`
--
ALTER TABLE `bukti_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_orangtua`
--
ALTER TABLE `data_orangtua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir_mhs`
--
ALTER TABLE `formulir_mhs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_lengkap` (`nama_lengkap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bukti_transfer`
--
ALTER TABLE `bukti_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_orangtua`
--
ALTER TABLE `data_orangtua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formulir_mhs`
--
ALTER TABLE `formulir_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
