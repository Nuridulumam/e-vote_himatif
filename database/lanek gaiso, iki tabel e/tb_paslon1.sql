-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 08:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_evote`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_paslon1`
--

CREATE TABLE `tb_paslon1` (
  `id_pemilih` varchar(24) NOT NULL,
  `email` varchar(256) NOT NULL,
  `nama_lengkap` varchar(256) NOT NULL,
  `pilihan` varchar(256) NOT NULL,
  `tanggal` varchar(256) NOT NULL,
  `waktu` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_paslon1`
--

INSERT INTO `tb_paslon1` (`id_pemilih`, `email`, `nama_lengkap`, `pilihan`, `tanggal`, `waktu`) VALUES
('VTI052', 'm.nuridulumam.nu@gmail.com', 'Muhammad umam', 'AMI - YOGI', 'Thursday, 2021-02-18', '12:27:43'),
('VTI806', 'fahmi@student.ub.ac.id', 'Fahmi Hasan', 'AMI - YOGI', 'Thursday, 2021-02-18', '12:27:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_paslon1`
--
ALTER TABLE `tb_paslon1`
  ADD PRIMARY KEY (`id_pemilih`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
