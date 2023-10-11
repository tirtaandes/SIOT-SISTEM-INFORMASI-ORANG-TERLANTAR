-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 06:36 PM
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
-- Database: `siot`
--

-- --------------------------------------------------------

--
-- Table structure for table `bantuan`
--

CREATE TABLE `bantuan` (
  `ID_Bantuan` int(11) NOT NULL,
  `Jenis_Bantuan` varchar(255) NOT NULL,
  `Deskripsi_Bantuan` text DEFAULT NULL,
  `Jumlah_Bantuan` decimal(10,2) DEFAULT NULL,
  `Kriteria_Kelayakan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bantuan`
--

INSERT INTO `bantuan` (`ID_Bantuan`, `Jenis_Bantuan`, `Deskripsi_Bantuan`, `Jumlah_Bantuan`, `Kriteria_Kelayakan`) VALUES
(1, 'a', 'as', 50000.00, 'layak');

-- --------------------------------------------------------

--
-- Table structure for table `orangterlantar`
--

CREATE TABLE `orangterlantar` (
  `ID_OrangTerlantar` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Jenis_Kelamin` varchar(10) DEFAULT NULL,
  `Informasi_Medis` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orangterlantar`
--

INSERT INTO `orangterlantar` (`ID_OrangTerlantar`, `Nama`, `Alamat`, `Tanggal_Lahir`, `Jenis_Kelamin`, `Informasi_Medis`) VALUES
(1, 'eka', 'unit 6', '2023-07-11', 'Perempuan', 'rodo sakit'),
(2, 'yusuf', '16', '2023-09-17', 'Laki-laki', 'sehat');

-- --------------------------------------------------------

--
-- Table structure for table `suratjalan`
--

CREATE TABLE `suratjalan` (
  `ID_SuratJalan` int(11) NOT NULL,
  `Nomor_Surat` varchar(50) NOT NULL,
  `Tujuan` varchar(255) DEFAULT NULL,
  `Tanggal_Penerbitan` date DEFAULT NULL,
  `ID_OrangTerlantar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suratjalan`
--

INSERT INTO `suratjalan` (`ID_SuratJalan`, `Nomor_Surat`, `Tujuan`, `Tanggal_Penerbitan`, `ID_OrangTerlantar`) VALUES
(1, '23456yhjkop', 'sungai bahar', '2023-09-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `suratketerangan`
--

CREATE TABLE `suratketerangan` (
  `ID_SuratKeterangan` int(11) NOT NULL,
  `Nomor_Surat` varchar(50) NOT NULL,
  `Tanggal_Penerbitan` date DEFAULT NULL,
  `Deskripsi_Keperluan` text DEFAULT NULL,
  `ID_OrangTerlantar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suratketerangan`
--

INSERT INTO `suratketerangan` (`ID_SuratKeterangan`, `Nomor_Surat`, `Tanggal_Penerbitan`, `Deskripsi_Keperluan`, `ID_OrangTerlantar`) VALUES
(1, '23456yhjkop', '2023-09-12', 'dfgvhbjnk', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`ID_Bantuan`);

--
-- Indexes for table `orangterlantar`
--
ALTER TABLE `orangterlantar`
  ADD PRIMARY KEY (`ID_OrangTerlantar`);

--
-- Indexes for table `suratjalan`
--
ALTER TABLE `suratjalan`
  ADD PRIMARY KEY (`ID_SuratJalan`),
  ADD KEY `ID_OrangTerlantar` (`ID_OrangTerlantar`);

--
-- Indexes for table `suratketerangan`
--
ALTER TABLE `suratketerangan`
  ADD PRIMARY KEY (`ID_SuratKeterangan`),
  ADD KEY `ID_OrangTerlantar` (`ID_OrangTerlantar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `ID_Bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orangterlantar`
--
ALTER TABLE `orangterlantar`
  MODIFY `ID_OrangTerlantar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suratjalan`
--
ALTER TABLE `suratjalan`
  MODIFY `ID_SuratJalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suratketerangan`
--
ALTER TABLE `suratketerangan`
  MODIFY `ID_SuratKeterangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `suratjalan`
--
ALTER TABLE `suratjalan`
  ADD CONSTRAINT `suratjalan_ibfk_1` FOREIGN KEY (`ID_OrangTerlantar`) REFERENCES `orangterlantar` (`ID_OrangTerlantar`);

--
-- Constraints for table `suratketerangan`
--
ALTER TABLE `suratketerangan`
  ADD CONSTRAINT `suratketerangan_ibfk_1` FOREIGN KEY (`ID_OrangTerlantar`) REFERENCES `orangterlantar` (`ID_OrangTerlantar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
