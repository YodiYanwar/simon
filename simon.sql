-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Des 2017 pada 03.16
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrator`
--

CREATE TABLE `administrator` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `j_kelamin` varchar(15) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(35) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `administrator`
--

INSERT INTO `administrator` (`id_admin`, `nama`, `j_kelamin`, `tgl_lahir`, `email`, `telp`, `avatar`, `id_user`) VALUES
(1, 'Yodi Yanwar', 'Laki-laki', '1994-12-13', 'yodi.yanwar@tazkia.ac.id', '0816616350', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminmatrik`
--

CREATE TABLE `adminmatrik` (
  `id_adminmatrik` int(3) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `telp` varchar(13) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `j_kelamin` varchar(15) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `adminmatrik`
--

INSERT INTO `adminmatrik` (`id_adminmatrik`, `nama`, `telp`, `email`, `j_kelamin`, `tgl_lahir`, `id_user`, `avatar`) VALUES
(2, 'Derry', '085637242', 'derry@tazkia.ac.id', 'Laki-laki', '1987-01-02', 2, 'color-combinatioin-black.jpg'),
(3, 'Hasan Ishaq', '081265484', 'hasan@tazkia.ac.id', 'Laki-laki', '2017-11-11', 23, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembina`
--

CREATE TABLE `pembina` (
  `id_pembina` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `j_kelamin` varchar(15) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `gelar` varchar(10) DEFAULT NULL,
  `asalkota` varchar(20) DEFAULT NULL,
  `email` varchar(35) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembina`
--

INSERT INTO `pembina` (`id_pembina`, `nama`, `j_kelamin`, `tgl_lahir`, `gelar`, `asalkota`, `email`, `telp`, `avatar`, `id_user`) VALUES
(18, 'Bintang Pamuncak', 'Laki-laki', '2017-11-10', 'S.Ei', 'Semarang', 'bintang@tazkia.ac.id', '0859473235', 'hp.png', 21),
(19, 'Hayatul Mujadidah', 'Perempuan', '2017-11-14', 'S.Ei', 'Sukabumi', 'aya@tazkia.ac.id', '081654812', NULL, 22),
(20, 'Rizky Akbar Cholilullah', 'Laki-laki', '2017-12-13', 'S.Ei', 'Pekalongan', 'rizky_akbar@tazkia.ac.id', '0816384924', NULL, 24),
(21, 'Rian Alfiansyah', 'Laki-laki', '2017-12-20', 'S.Ei', 'Tasikmalaya', 'rian@tazkia.ac.id', '0856483922', NULL, 25),
(22, 'Adita Dyah Asokawati', 'Perempuan', '2017-12-28', 'S.E', 'Bogor', 'adita@tazkia.ac.id', '08127384924', NULL, 26),
(23, 'Riyan Ariyandi', 'Laki-laki', '2017-12-08', 'S.Pd', 'Riau', 'riyan.ariyandi@tazkia.ac.id', '0812474829', NULL, 27),
(24, 'Rizqan Abadi', 'Laki-laki', '2017-12-22', 'S.Pd', 'Lombok', 'rizqan@tazkia.ac.id', '0857382844', NULL, 28),
(25, 'Sofi', 'Perempuan', '2017-12-11', 'S.Pd', 'Palembang', 'sofi@tazkia.ac.id', '0896473824', NULL, 29),
(26, 'Diva Azka Karimah', 'Perempuan', '2017-12-13', 'S.E', 'Jakarta', 'diva@tazkia.ac.id', '0812758382', NULL, 30),
(27, 'Nashrudin Al-Huda', 'Laki-laki', '2017-12-20', 'S.E', 'Semarang', 'huda@tazkia.ac.id', '0856738232', NULL, 31),
(28, 'Alfin', 'Laki-laki', '2017-12-16', 'S.E', 'Banten', 'alfin@tazkia.ac.id', '0856738283', NULL, 32),
(29, 'Sri Wahyuni', 'Perempuan', '2017-12-27', 'M.Ei', 'Bandung', 'sri@tazkia.ac.id', '0816384293', NULL, 33);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `level`, `last_login`) VALUES
(1, 'admin', 'admin', 0, '2017-12-04 09:16:31'),
(2, 'derry', 'derry123', 2, '2017-12-04 09:15:53'),
(21, 'bintang', 'bintang123', 3, '2017-12-02 17:03:39'),
(22, 'aya', 'aya123', 3, '2017-12-02 16:23:35'),
(23, 'hasan', 'hasan123', 2, '2017-11-30 17:06:08'),
(24, 'rizky@tazkia.ac.id', 'rizy123', 3, '0000-00-00 00:00:00'),
(25, 'rian', 'rian123', 3, '0000-00-00 00:00:00'),
(26, 'adita', 'adita123', 3, '0000-00-00 00:00:00'),
(27, 'riyan', 'riyan123', 3, '0000-00-00 00:00:00'),
(28, 'rizqan', 'rizqan123', 3, '0000-00-00 00:00:00'),
(29, 'sofi', 'sofi123', 3, '2017-12-02 21:28:17'),
(30, 'diva', 'diva123', 3, '0000-00-00 00:00:00'),
(31, 'huda', 'huda123', 3, '2017-12-02 21:27:39'),
(32, 'alfin', 'alfin123', 3, '0000-00-00 00:00:00'),
(33, 'sri', 'sri123', 3, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `adminmatrik`
--
ALTER TABLE `adminmatrik`
  ADD PRIMARY KEY (`id_adminmatrik`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pembina`
--
ALTER TABLE `pembina`
  ADD PRIMARY KEY (`id_pembina`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `adminmatrik`
--
ALTER TABLE `adminmatrik`
  MODIFY `id_adminmatrik` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pembina`
--
ALTER TABLE `pembina`
  MODIFY `id_pembina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `administrator`
--
ALTER TABLE `administrator`
  ADD CONSTRAINT `administrator_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `adminmatrik`
--
ALTER TABLE `adminmatrik`
  ADD CONSTRAINT `adminmatrik_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `pembina`
--
ALTER TABLE `pembina`
  ADD CONSTRAINT `pembina_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
