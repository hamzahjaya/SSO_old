-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 06:42 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sso`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_konfigurasi`
--

CREATE TABLE `t_konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `nama_website` varchar(225) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `favicon` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_konfigurasi`
--

INSERT INTO `t_konfigurasi` (`id_konfigurasi`, `nama_website`, `logo`, `favicon`) VALUES
(1, 'SSO KPU RI', 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `t_log`
--

CREATE TABLE `t_log` (
  `id_log` int(20) NOT NULL,
  `id_token_aplikasi` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL,
  `ip` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_log`
--

INSERT INTO `t_log` (`id_log`, `id_token_aplikasi`, `username`, `waktu`, `ip`, `keterangan`) VALUES
(10, 0, 'noviayolanda222@gmail.com', '2020-06-10 10:55:00', '::1', 'successfully login'),
(11, 0, 'noviayolanda222@gmail.com', '2020-06-10 10:56:38', '::1', 'successfully login'),
(12, 0, 'noviayolanda222@gmail.com', '2020-06-10 11:15:52', '::1', 'successfully login');

-- --------------------------------------------------------

--
-- Table structure for table `t_log_request_password`
--

CREATE TABLE `t_log_request_password` (
  `id_request` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `token_request` varchar(255) NOT NULL,
  `request_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_master_aplikasi`
--

CREATE TABLE `t_master_aplikasi` (
  `id_aplikasi` int(20) NOT NULL,
  `nama_aplikasi` varchar(255) NOT NULL,
  `token_aplikasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_master_aplikasi`
--

INSERT INTO `t_master_aplikasi` (`id_aplikasi`, `nama_aplikasi`, `token_aplikasi`) VALUES
(9, 'APLIKASI A', 'JAjqvk9FpW0rOuWjFoHzsy7KyLgGJMlpSG4m3Mxv2fZBVeQP0cmaCskhzNwiXrYTBnD1d6Io126SLdT5uc5PHxXCEn');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(50) NOT NULL,
  `role` varchar(16) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `token` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_logout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `no_sk` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nip` int(50) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `role`, `username`, `email`, `password`, `token`, `last_login`, `last_logout`, `ip`, `nama`, `no_hp`, `no_sk`, `nik`, `nip`, `active`) VALUES
(1, 'admin', 'hamzah', 'hamzahjayaputra@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'zPUAjDVmHrWKbT8XI4d5whigaGc9FN', '2020-06-11 11:02:08', '2020-03-04 08:45:35', '::1', 'Hamzah', '', '321', '3216062307970022', 123, 1),
(2, 'user', 'Novia', 'noviayolanda222@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2gnEei5drjUyZsIH6oB3X0WJqfcOkV', '2020-06-11 09:36:04', '2020-03-17 17:02:59', '::1', 'yunda', '082283567869', '06123456', '1234567890101', 110101101, 1),
(3, 'user', 'yunda', 'yunda@gmail.com', '3d2172418ce305c7d16d4b05597c6a59', 'tHR5VMjei2XYdQEKg4FSa1Wm6rZqBn', '2020-06-11 10:58:15', '2020-06-11 10:58:15', '::1', 'yunda 1', '0815841', '06123456', '1234567890101', 111, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_log`
--
ALTER TABLE `t_log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `t_master_aplikasi`
--
ALTER TABLE `t_master_aplikasi`
  ADD PRIMARY KEY (`id_aplikasi`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_log`
--
ALTER TABLE `t_log`
  MODIFY `id_log` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `t_master_aplikasi`
--
ALTER TABLE `t_master_aplikasi`
  MODIFY `id_aplikasi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
