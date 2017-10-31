-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2017 at 09:43 AM
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
(4, 'Adhisty Zara', '', '0000-00-00', 'Perempuan', '07/19/1996', 'S.Pd', '0', 7),
(5, 'Dedi Sudrajat', '', '0000-00-00', 'Laki-laki', '1991-08-07', 'S.Kom.', '0', 8),
(6, 'Hayatul Mujadidh', '', '0000-00-00', 'Perempuan', '1991-07-16', 'S.Ei', '0', 9),
(7, 'Sri Wahyuni', 'Perempuan', '1992-03-26', 'S.Ei', 'Wonogiri', 'sri.wahyuni@tazkia.ac.id', '2147483647', 10),
(8, 'Sofi', 'Perempuan', '1992-11-11', 'S.Pd', 'Sukabumi', 'sofi@tazkia.ac.id', '2147483647', 11),
(9, 'Abdul Hamid', 'Laki-laki', '1985-08-14', 'S.Ag', 'Solo', 'abdulhamid@tazkia.ac.id', '2147483647', 12),
(10, 'Bintang Pamuncak', 'Laki-laki', '1990-07-18', 'S.Ei', 'Jakarta', 'bintang@tazkia.ac.id', '0859473235', 6);

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
(8, 'dedy@gmail.com', '0856173932', 3),
(9, 'aya@tazkia.ac.id', '0816789123', 3),
(10, 'sri', 'sri123', 3),
(11, 'sofi', 'sofi123', 3),
(12, 'hamid', 'hamid123', 3),
(13, 'bintang', 'bintang123', 3);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `pembina`
--
ALTER TABLE `pembina`
  MODIFY `id_pembina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembina`
--
ALTER TABLE `pembina`
  ADD CONSTRAINT `pembina_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
