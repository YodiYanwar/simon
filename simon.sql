-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2017 at 09:59 AM
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
(2, 'Derry Doang', '085637242', 'derry@tazkia.ac.id', 'Laki-laki', '1987-01-02', 2, 'color-combinatioin-black.jpg');

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
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembina`
--

INSERT INTO `pembina` (`id_pembina`, `nama`, `j_kelamin`, `tgl_lahir`, `gelar`, `asalkota`, `email`, `telp`, `id_user`) VALUES
(7, 'Sri Wahyuni', 'Perempuan', '1992-03-26', 'M.E', 'Wonogiri', 'sri.wahyuni@tazkia.ac.id', '2147483647', 10),
(9, 'Abdul Hamid', 'Laki-laki', '1985-08-01', 'S.Ei', 'Solo', 'abdulhamid@tazkia.ac.id', '2147483647', 12),
(10, 'Bintang Pamuncak', 'Laki-laki', '1990-07-18', 'S.Ei', 'Jakarta', 'bintang@tazkia.ac.id', '0859473235', 6),
(16, 'Adita Dyah Asokawati', 'Perempuan', '2017-11-25', 'S.E', 'Pekanbaru', 'adita@tazkia.ac.id', '0812478748', 19),
(17, 'Hayatul Mujadidah', 'Perempuan', '2017-11-11', 'S.E.i', 'Sukabumi', 'aya@tazkia.ac.id', '08563728423', 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 0),
(2, 'derry', 'derry123', 2),
(6, 'bintang', 'bintang123', 3),
(7, 'dfgvbdf@gmail.com', '0812456345', 3),
(10, 'sri', 'sri123', 3),
(12, 'hamid', 'hamid123', 3),
(13, 'bintang', 'bintang123', 3),
(17, 'c', 'c123', 3),
(19, 'adita', 'adita123', 3),
(20, 'aya', 'aya123', 3);

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
  MODIFY `id_adminmatrik` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pembina`
--
ALTER TABLE `pembina`
  MODIFY `id_pembina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
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
