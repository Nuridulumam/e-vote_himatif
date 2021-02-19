-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 08:21 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(10) NOT NULL,
  `id_admin` varchar(20) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `id_admin`, `username`, `password`) VALUES
(1, 'VTIA7613asd', 'Nuridul Umam', '$2y$10$hXDkWDjddcVnsya9d20ueei9oKw5hOiFN1oPz/VLh6uNAWA6mySve');

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_paslon2`
--

CREATE TABLE `tb_paslon2` (
  `id_pemilih` varchar(24) NOT NULL,
  `email` varchar(256) NOT NULL,
  `nama_lengkap` varchar(256) NOT NULL,
  `pilihan` varchar(256) NOT NULL,
  `tanggal` varchar(256) NOT NULL,
  `waktu` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_paslon2`
--

INSERT INTO `tb_paslon2` (`id_pemilih`, `email`, `nama_lengkap`, `pilihan`, `tanggal`, `waktu`) VALUES
('VTI527', 'nuridulumam@student.ub.ac.id', 'Nuridul Umam', 'Tidak Memilih', 'Thursday, 2021-02-18', '03:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `id_pemilih` varchar(24) NOT NULL,
  `nim` char(100) NOT NULL,
  `email` varchar(256) NOT NULL,
  `nama_lengkap` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(500) NOT NULL,
  `kelas` varchar(11) NOT NULL,
  `absen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `id_pemilih`, `nim`, `email`, `nama_lengkap`, `username`, `password`, `kelas`, `absen`) VALUES
(16, 'VTI130', '193140710000054', 'rissa@student.ub.ac.id', 'Risa Rizquna', 'risa123', '$2y$10$74DDYiDY4wB51qjaHtJMu.BuK9/mDpf7PWmk2pn123z8itu72KWEC', 'TI-A', 21),
(17, 'VTI527', '193140710000000', 'nuridulumam@student.ub.ac.id', 'Nuridul Umam', 'nuridulumam71', '$2y$10$hXDkWDjddcVnsya9d20ueei9oKw5hOiFN1oPz/VLh6uNAWA6mySve', 'TI-A', 12),
(21, 'VTI806', '193140710000000', 'fahmi@student.ub.ac.id', 'Fahmi Hasan', 'fahmi123', '$2y$10$xOIEoA4237gy/H7zLofatOkJBAIa2ZKScPReRP6w0llQlmlIU/vD.', 'TI-A', 12),
(22, 'VTI938', '193140710000000', 'zidasnea@dsakdn', 'Zidane', 'zidanearfani', '$2y$10$7e8XNp.FI6fgLvJInpR3..lx/MHZifx/IISb9EZ7eFjQwB7KvD2ji', 'TI-A', 12),
(23, 'VTI245', '193140710000000', 'zidasnea@dsakdnsada', 'Zidanee', 'zidanearfani', '$2y$10$pi/hhKkxLSZA/cPAOe.IZ.fMWjM5SPJI5S0LqyJSrCxy44BjEZ8Na', 'TI-A', 12),
(24, 'VTI052', '193140710000000', 'm.nuridulumam.nu@gmail.com', 'Muhammad umam', 'umam71', '$2y$10$WchPWgjwYWCWtzmXf/JMD.pYDAvBtEdfnV7gMwkwpaXG47ou4qAGi', 'TI-A', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_paslon1`
--
ALTER TABLE `tb_paslon1`
  ADD PRIMARY KEY (`id_pemilih`);

--
-- Indexes for table `tb_paslon2`
--
ALTER TABLE `tb_paslon2`
  ADD PRIMARY KEY (`id_pemilih`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
