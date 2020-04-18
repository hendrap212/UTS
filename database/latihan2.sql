-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2020 at 11:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `Departemen`
--

CREATE TABLE `Departemen` (
  `ID_Dept` varchar(5) NOT NULL,
  `Nama_Dept` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Departemen`
--

INSERT INTO `Departemen` (`ID_Dept`, `Nama_Dept`) VALUES
('A001', 'IT'),
('A002', 'Keuangan'),
('A003', 'HRD'),
('A004', 'Pemasaran');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `ID_Peg` varchar(5) NOT NULL,
  `Nama_Peg` varchar(20) NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `ID_Dept` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`ID_Peg`, `Nama_Peg`, `Alamat`, `ID_Dept`) VALUES
('101', 'Putu Ayu', '  Buleleng', 'A002'),
('102', 'Made Sakti', 'Tabana', 'A001'),
('103', 'Gede Bagus', 'Gianyar', 'A002'),
('104', 'Wayan Asli', 'Denpasar', 'A003'),
('105', 'Komang Buyung', 'Denpasar', 'A002');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `nama`) VALUES
(901, 'admin@gmail.com', 'admin', 'admin'),
(902, 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Departemen`
--
ALTER TABLE `Departemen`
  ADD PRIMARY KEY (`ID_Dept`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`ID_Peg`),
  ADD KEY `ID_Dept` (`ID_Dept`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
