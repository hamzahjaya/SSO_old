-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Mar 2020 pada 12.01
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Struktur dari tabel `t_konfigurasi`
--

CREATE TABLE `t_konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `nama_website` varchar(225) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `favicon` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_konfigurasi`
--

INSERT INTO `t_konfigurasi` (`id_konfigurasi`, `nama_website`, `logo`, `favicon`) VALUES
(1, 'SSO KPU RI', 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_log`
--

CREATE TABLE `t_log` (
  `id_log` int(20) NOT NULL,
  `id_token_aplikasi` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL,
  `ip` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_log_request_password`
--

CREATE TABLE `t_log_request_password` (
  `id_request` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `token_request` varchar(255) NOT NULL,
  `request_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_master_aplikasi`
--

CREATE TABLE `t_master_aplikasi` (
  `id_aplikasi` int(20) NOT NULL,
  `nama_aplikasi` varchar(255) NOT NULL,
  `token_aplikasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_master_aplikasi`
--

INSERT INTO `t_master_aplikasi` (`id_aplikasi`, `nama_aplikasi`, `token_aplikasi`) VALUES
(3, 'pemilu', 'JwabO5f6AXkhToMZFvNWNqsQOYez7eL4Kp1on9yQltEa08rMAsHZH0vyPSKtixUxcmY3V3dwuGu6JW2qTzjBSCFcgC'),
(4, 'Aplikasi Pemilu', 'Brlcg4uOMiVYE5kw8RqOop2KFWLITa5PW7QHkQe2y3J47hGKGHRIwDuNvXmoNzU8f9ZndiXA3bvLjeYCfd0x1n1jS0'),
(6, 'pa ega', 'Rf0yeUFgJjXvMdASEQc8PtwAEI9VlRQ6P29onrqhNxeLFy1DGkppj7biZDrSBsTKmxtWKMW6HCHv02waogBTfkudUN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(50) NOT NULL,
  `id_role` tinyint(4) NOT NULL DEFAULT 0,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `token` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp(),
  `last_logout` datetime NOT NULL DEFAULT current_timestamp(),
  `ip` varchar(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `no_sk` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nip` int(50) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id_user`, `id_role`, `username`, `email`, `password`, `token`, `last_login`, `last_logout`, `ip`, `nama`, `no_hp`, `no_sk`, `nik`, `nip`, `active`) VALUES
(1, 1, 'hamzah', 'hamzahjayaputra@gmail.com', 'c6f057b86584942e415435ffb1fa93d4', 'zPUAjDVmHrWKbT8XI4d5whigaGc9FN', '2020-03-17 17:42:44', '2020-03-04 08:45:35', '::1', 'Hamzah', '', '321', '3216062307970022', 123, 1),
(93, 2, 'user', 'user@user.com', '$2y$10$wwGKpvJRfNXB9GVlhu9QUu4UAafLXimJmwO4tZc7liT', 'cz7kQf4DmRUPlJeapLKboGCwF5W8uB', '2020-03-17 11:59:27', '2020-03-17 11:59:27', '::1', 'user', '081584134179', '0', '0', 0, 1),
(94, 2, 'yund', 'yunda@gmail.com', 'c6f057b86584942e415435ffb1fa93d4', 'ZiITPaESsACKGvyzc1hfVF47RptnrL', '2020-03-17 17:21:21', '2020-03-17 16:17:08', '::1', 'yunda', '081584134179', '021-021-22', '2222', 2222, 1),
(95, 2, 'baru', 'baru@Gmail.com', '$2y$10$B1GTyTMG/nHVsl3BojPkRuWqPEdu6F9bhW9jBrkFt0R', '2gnEei5drjUyZsIH6oB3X0WJqfcOkV', '2020-03-17 17:02:59', '2020-03-17 17:02:59', '::1', 'hamzah', '321', '321', '321', 321, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_log`
--
ALTER TABLE `t_log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indeks untuk tabel `t_master_aplikasi`
--
ALTER TABLE `t_master_aplikasi`
  ADD PRIMARY KEY (`id_aplikasi`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_log`
--
ALTER TABLE `t_log`
  MODIFY `id_log` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_master_aplikasi`
--
ALTER TABLE `t_master_aplikasi`
  MODIFY `id_aplikasi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
