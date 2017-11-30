-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 10:48 AM
-- Server version: 10.1.25-MariaDB
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
-- Table structure for table `adminmatrik`
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
-- Dumping data for table `adminmatrik`
--

INSERT INTO `adminmatrik` (`id_adminmatrik`, `nama`, `telp`, `email`, `j_kelamin`, `tgl_lahir`, `id_user`, `avatar`) VALUES
(2, 'Derry Doang', '085637242', 'derry@tazkia.ac.id', 'Laki-laki', '1987-01-02', 2, 'color-combinatioin-black.jpg'),
(3, 'Hasan Ishaq', '081265484', 'hasan@tazkia.ac.id', 'Laki-laki', '2017-11-11', 23, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembina`
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
-- Dumping data for table `pembina`
--

INSERT INTO `pembina` (`id_pembina`, `nama`, `j_kelamin`, `tgl_lahir`, `gelar`, `asalkota`, `email`, `telp`, `avatar`, `id_user`) VALUES
(18, 'Bintang Pamuncak', 'Laki-laki', '2017-11-10', 'S.Ei', 'Semarang', 'bintang@tazkia.ac.id', '0859473235', 'hp.png', 21),
(19, 'Hayatul Mujadidah', 'Perempuan', '2017-11-14', 'S.Ei', 'Sukabumi', 'aya@tazkia.ac.id', '081654812', 'Canon-Logo-Feature.jpg', 22);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `level`, `last_login`) VALUES
(1, 'admin', 'admin', 0, '0000-00-00 00:00:00'),
(2, 'derry', 'derry123', 2, '2017-11-30 14:34:53'),
(21, 'bintang', 'bintang123', 3, '2017-11-30 14:28:50'),
(22, 'aya', 'hayatul', 3, '2017-11-30 16:46:38'),
(23, 'hasan', 'hasan123', 2, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `adminmatrik`
--
ALTER TABLE `adminmatrik`
  MODIFY `id_adminmatrik` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pembina`
--
ALTER TABLE `pembina`
  MODIFY `id_pembina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminmatrik`
--
ALTER TABLE `adminmatrik`
  ADD CONSTRAINT `adminmatrik_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `pembina`
--
ALTER TABLE `pembina`
  ADD CONSTRAINT `pembina_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
