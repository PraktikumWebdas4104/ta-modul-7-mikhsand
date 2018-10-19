-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2018 at 03:54 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamhs`
--

CREATE TABLE `datamhs` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `asal` varchar(20) NOT NULL,
  `motto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datamhs`
--

INSERT INTO `datamhs` (`nim`, `nama`, `jenis_kelamin`, `prodi`, `fakultas`, `asal`, `motto`) VALUES
('1111111111', 'balanar', 'Pria', 'Desain Interior', 'Industri Kreatif', 'the woods', 'eternal darkness'),
('1234567890', 'pipi', 'Wanita', 'Desain Interior', 'Industri Kreatif', 'bandung', 'edankeun lur'),
('4444444444', 'Arsene Lupin', 'Wanita', 'Administrasi Bisnis', 'Komunikasi dan Bisni', 'Jerman', 'budayakan mata merah'),
('6701170143', 'ikhsan', 'Pria', 'Sistem Infomasi', 'Ilmu Terapan', 'Bandung', 'ga luka ga belajar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamhs`
--
ALTER TABLE `datamhs`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
