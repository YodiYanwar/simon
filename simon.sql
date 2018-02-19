-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2018 at 11:17 AM
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
-- Table structure for table `administrator`
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
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id_admin`, `nama`, `j_kelamin`, `tgl_lahir`, `email`, `telp`, `avatar`, `id_user`) VALUES
(1, 'Yodi Yanwar', 'Laki-laki', '1994-12-13', 'yodi.yanwar@tazkia.ac.id', '0816616350', NULL, 1);

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
(2, 'Derry', '085637242', 'derry@tazkia.ac.id', 'Laki-laki', '1987-01-02', 2, 'color-combinatioin-black.jpg'),
(3, 'Hasan Ishaq', '081265484', 'hasan@tazkia.ac.id', 'Laki-laki', '2017-11-11', 23, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `angkatan` int(11) DEFAULT NULL,
  `j_kelamin` varchar(15) DEFAULT NULL,
  `asalkota` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `telp` varchar(13) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama`, `angkatan`, `j_kelamin`, `asalkota`, `email`, `telp`, `avatar`, `tgl_lahir`, `id_user`) VALUES
(1352, 17101103, 'Farid Hidayatullah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2048),
(1354, 17101102, 'Ridwan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2110),
(1356, 17101101, 'Arland Pratama Wijaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2033),
(1358, 17101100, 'M Haekal Fajrul Falah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2070),
(1362, 17101106, 'Muhammad Syahri Ramadani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2096),
(1363, 17101104, 'Imaduddin Dwi Hananto', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2061),
(1364, 17101118, 'Fahmi Marjuki', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2046),
(1365, 17101117, 'Zubeir Abdul Wahid Chan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2118),
(1368, 17101116, 'Muhamad Lutfi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2079),
(1370, 17101115, 'Noviyandi Difa Pratama', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2102),
(1372, 17101113, 'Sesa Afrian Yahya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2114),
(1373, 17101111, 'Muhamad Solehudin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2080),
(1375, 17101114, 'Yody Nur Rachmat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2116),
(1376, 17101112, 'Zahid Ahmad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2117),
(1377, 17101109, 'Arta Saiful Hilmi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2035),
(1382, 17101108, 'Aziz Guntur Purnamaputra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2036),
(1383, 17101107, 'Wildan Maulid Hanafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2115),
(1384, 17101105, 'Arman Fadil Maulana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2034),
(1389, 17101127, 'Hanif Dwi Putra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2054),
(1390, 17101128, 'Zulfitra Hadianto Palwam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2120),
(1391, 17101124, 'Lalu Rizky Adriansyah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2069),
(1392, 17101126, 'Difan Nurhafidzar Juanda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2041),
(1395, 17101123, 'Farras Mubasysyirsyah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2049),
(1397, 17101122, 'Ahlam Nabila', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2030),
(1398, 17101119, 'Fikri Abdurrohman Maajid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2052),
(1400, 17101121, 'Khalel Mohammed Amar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2066),
(1402, 17101120, 'Alif Limka Firdaus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2032),
(1404, 17101135, 'Ibnu Rasyid Hamidi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2058),
(1407, 17101133, 'Naufal Ahmad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2100),
(1408, 17101134, 'Muhammad Zacky Makarim S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2097),
(1409, 17101132, 'Muhammad Fathan Farizan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2088),
(1410, 17101130, 'L. M. Cahya Kurnia Harma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2067),
(1412, 17101131, 'Labib Ulwan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2068),
(1415, 17101125, 'Edo Abdulrahim Fattah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2043),
(1416, 17101129, 'Moh Ala Furqoni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2076),
(1420, 17101157, 'Naufal Raditya Krisna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2101),
(1421, 17101154, 'Faatihan Aulia Azwin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2045),
(1424, 17101156, 'Hafisz Maulana Rasjid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2053),
(1425, 17101155, 'Muhammad Haniful Amin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2090),
(1426, 17101153, 'Hilmy Fikri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2057),
(1428, 17101152, 'Miftah Faruq Nugraha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2073),
(1431, 17101151, 'Irvan Riyansyah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2063),
(1434, 17101148, 'Abdullah Haidar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2027),
(1436, 17101150, 'Muhammad Puji Pangestu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2093),
(1437, 17101149, 'Muhammad Rizki Sinar Ila', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2095),
(1438, 17101147, 'Falah Ageng Pakerti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2047),
(1439, 17101146, 'Iza Fais Saputra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2064),
(1441, 17101145, 'Muhammad Angga Abdullah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2082),
(1443, 17101142, 'Reynaldi Wahab', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2109),
(1445, 17101144, 'Muhammad Ananda Fajar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2081),
(1446, 17101143, 'Moch. Lukmannul Hakim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2075),
(1447, 17101141, 'Ramadhana Devandani Enti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2105),
(1448, 17101140, 'Adam Nurdiansyah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2028),
(1451, 17101139, 'Juan Fadri Ramdhani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2065),
(1452, 17101138, 'Herdy Almadiptha Rahman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2056),
(1455, 17101137, 'Muhammad Denito Bastian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2083),
(1456, 17101136, 'Muhammad Faisal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2086),
(1457, 17101166, 'Nurrahman Wira Aji', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2103),
(1458, 17101165, 'Zuhdi Anjari Tigara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2119),
(1459, 17101164, 'Muhammad.daffa As-syauqi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2098),
(1460, 17101163, 'Billy Muhammad Fadilah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2040),
(1462, 17101162, 'Hariz Ilmam Husnan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2055),
(1465, 17101161, 'Baso Ratulangi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2039),
(1468, 17101159, 'Ridwan Hasyim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2111),
(1469, 17101160, 'Rizal Muhammad Fauzan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2113),
(1471, 17101158, 'Muhammad Nasyith Sholahu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2092),
(1472, 17101176, 'Muhammad Fadhil Mujahid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2085),
(1473, 17101175, 'Rayhan Pasa Aryandra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2107),
(1476, 17101174, 'Muhammad Fitriana Hasan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2089),
(1477, 17101171, 'Ferdi Wijaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2050),
(1478, 17101172, 'Risang Muhammad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2112),
(1479, 17101173, 'Muahmmad Hafidz Fathoni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2078),
(1480, 17101167, 'Moh.yanis Yosfiah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2077),
(1481, 17101170, 'Azmi Syahid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2038),
(1482, 17101169, 'Indra Wijaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2062),
(1483, 17101168, 'Ilham Akbar Ramadhan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2059),
(1484, 17101180, 'Dimas Adektama', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2042),
(1485, 17101179, 'Adi Pahlevi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2029),
(1487, 17101178, 'M. Ridwan Saufi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2071),
(1490, 17101177, 'Muhammad Diaz Advani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2084),
(1491, 17101182, 'Renaldi Septiawan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2108),
(1492, 17101183, 'Ilham Muhammad Ghifari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2060),
(1494, 17101181, 'M.farid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2072),
(1495, 17101184, 'Ramadan Arudi Satyagraha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2104),
(1496, 17101185, 'Muhammad Iqbal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2091),
(1497, 17101187, 'Ahmad Hilmi Jamaludin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2031),
(1498, 17101189, 'Muhammad Farhan Maulana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2087),
(1499, 17101188, 'Azka Muharam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2037),
(1502, 17101186, 'Nabil Nur Salsabil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2099),
(1505, 17101190, 'Muhammad Rasyid Ridha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2094),
(2048, 17101195, 'Mikal Mufid Asdika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2074),
(2051, 17101193, 'Feydhul Qodir Muwaffaq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2051),
(2052, 17101192, 'Rangga Adithiya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2106),
(2080, 17101194, 'Elisa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2044);

-- --------------------------------------------------------

--
-- Table structure for table `m_binaan`
--

CREATE TABLE `m_binaan` (
  `id_pembina` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_binaan`
--

INSERT INTO `m_binaan` (`id_pembina`, `id_mahasiswa`) VALUES
(21, 1352),
(18, 1354),
(24, 1356),
(21, 1358);

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
(18, 'Bintang Pamuncak', 'Laki-laki', '2017-11-10', 'S.Ei', 'Semarang', 'bintang@tazkia.ac.id', '0859473235', 'default.png', 21),
(19, 'Hayatul Mujadidah', 'Perempuan', '2017-11-14', 'S.Ei', 'Sukabumi', 'aya@tazkia.ac.id', '081654812', NULL, 22),
(20, 'Rizky Akbar Cholilullah', 'Laki-laki', '2017-12-13', 'S.Ei', 'Pekalongan', 'rizky_akbar@tazkia.ac.id', '0816384924', NULL, 24),
(21, 'Rian Alfiansyah', 'Laki-laki', '2017-12-20', 'S.Ei', 'Tasikmalaya', 'rian@tazkia.ac.id', '0856483922', NULL, 25),
(22, 'Adita Dyah Asokawati', 'Perempuan', '2017-12-28', 'S.E', 'Bogor', 'adita@tazkia.ac.id', '08127384924', NULL, 26),
(23, 'Riyan Ariyandi', 'Laki-laki', '2017-12-08', 'S.Pd', 'Riau', 'riyan.ariyandi@tazkia.ac.id', '0812474829', 'spidey_cute.jpg', 27),
(24, 'Rizqan Abadi', 'Laki-laki', '2017-12-22', 'S.Pd', 'Lombok', 'rizqan@tazkia.ac.id', '0857382844', NULL, 28),
(25, 'Sofi', 'Perempuan', '2017-12-11', 'S.Pd', 'Palembang', 'sofi@tazkia.ac.id', '0896473824', NULL, 29),
(26, 'Diva Azka Karimah', 'Perempuan', '2017-12-13', 'S.E', 'Jakarta', 'diva@tazkia.ac.id', '0812758382', NULL, 30),
(27, 'Nashrudin Al-Huda', 'Laki-laki', '2017-12-20', 'S.E', 'Semarang', 'huda@tazkia.ac.id', '0856738232', NULL, 31),
(28, 'Alfin', 'Laki-laki', '2017-12-16', 'S.E', 'Banten', 'alfin@tazkia.ac.id', '0856738283', NULL, 32),
(29, 'Sri Wahyuni', 'Perempuan', '2017-12-27', 'M.Ei', 'Bandung', 'sri@tazkia.ac.id', '0816384293', NULL, 33);

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
(1, 'admin', 'admin', 0, '2017-12-11 16:32:50'),
(2, 'derry', 'derry123', 2, '2018-02-18 16:59:46'),
(21, 'bintang', 'bintang123', 3, '2017-12-22 20:30:02'),
(22, 'aya', 'aya123', 3, '2017-12-02 16:23:35'),
(23, 'hasan', 'hasan123', 2, '2017-11-30 17:06:08'),
(24, 'rizky@tazkia.ac.id', 'rizy123', 3, '0000-00-00 00:00:00'),
(25, 'rian', 'rian123', 3, '0000-00-00 00:00:00'),
(26, 'adita', 'adita123', 3, '0000-00-00 00:00:00'),
(27, 'riyan', 'riyan123', 3, '2017-12-22 20:28:02'),
(28, 'rizqan', 'rizqan123', 3, '0000-00-00 00:00:00'),
(29, 'sofi', 'sofi123', 3, '2017-12-02 21:28:17'),
(30, 'diva', 'diva123', 3, '0000-00-00 00:00:00'),
(31, 'huda', 'huda123', 3, '2017-12-02 21:27:39'),
(32, 'alfin', 'alfin123', 3, '0000-00-00 00:00:00'),
(33, 'sri', 'sri123', 3, '0000-00-00 00:00:00'),
(2027, '17101148', 'nCs92', 4, '2017-12-15 14:05:43'),
(2028, '17101140', 'bismillah', 4, '2017-12-22 20:07:39'),
(2029, '17101179', 'adipahlevi123', 4, '0000-00-00 00:00:00'),
(2030, '17101122', 'ahlamnabila123', 4, '0000-00-00 00:00:00'),
(2031, '17101187', 'ahmadhilmijamaludin123', 4, '0000-00-00 00:00:00'),
(2032, '17101120', 'aliflimkafirdaus123', 4, '0000-00-00 00:00:00'),
(2033, '17101101', 'arlandpratamawijaya123', 4, '0000-00-00 00:00:00'),
(2034, '17101105', 'armanfadilmaulana123', 4, '0000-00-00 00:00:00'),
(2035, '17101109', 'artasaifulhilmi123', 4, '0000-00-00 00:00:00'),
(2036, '17101108', 'azizgunturpurnamaputra123', 4, '0000-00-00 00:00:00'),
(2037, '17101188', 'azkamuharam123', 4, '0000-00-00 00:00:00'),
(2038, '17101170', 'azmisyahid123', 4, '0000-00-00 00:00:00'),
(2039, '17101161', 'basoratulangi123', 4, '0000-00-00 00:00:00'),
(2040, '17101163', 'billymuhammadfadilah123', 4, '0000-00-00 00:00:00'),
(2041, '17101126', 'difannurhafidzarjuanda123', 4, '0000-00-00 00:00:00'),
(2042, '17101180', 'dimasadektama123', 4, '0000-00-00 00:00:00'),
(2043, '17101125', 'edoabdulrahimfattah123', 4, '0000-00-00 00:00:00'),
(2044, '17101194', 'elisa123', 4, '0000-00-00 00:00:00'),
(2045, '17101154', 'faatihanauliaazwin123', 4, '0000-00-00 00:00:00'),
(2046, '17101118', 'fahmimarjuki123', 4, '0000-00-00 00:00:00'),
(2047, '17101147', 'falahagengpakerti123', 4, '0000-00-00 00:00:00'),
(2048, '17101103', 'p88yE', 4, '0000-00-00 00:00:00'),
(2049, '17101123', 'farrasmubasysyirsyah123', 4, '0000-00-00 00:00:00'),
(2050, '17101171', 'ferdiwijaya123', 4, '0000-00-00 00:00:00'),
(2051, '17101193', 'feydhulqodirmuwaffaq123', 4, '0000-00-00 00:00:00'),
(2052, '17101119', 'fikriabdurrohmanmaajid123', 4, '0000-00-00 00:00:00'),
(2053, '17101156', 'hafiszmaulanarasjid123', 4, '0000-00-00 00:00:00'),
(2054, '17101127', 'hanifdwiputra123', 4, '0000-00-00 00:00:00'),
(2055, '17101162', 'harizilmamhusnan123', 4, '0000-00-00 00:00:00'),
(2056, '17101138', 'herdyalmadiptharahman123', 4, '0000-00-00 00:00:00'),
(2057, '17101153', 'hilmyfikri123', 4, '0000-00-00 00:00:00'),
(2058, '17101135', 'ibnurasyidhamidi123', 4, '0000-00-00 00:00:00'),
(2059, '17101168', 'ilhamakbarramadhan123', 4, '0000-00-00 00:00:00'),
(2060, '17101183', 'ilhammuhammadghifari123', 4, '0000-00-00 00:00:00'),
(2061, '17101104', 'imaduddindwihananto123', 4, '0000-00-00 00:00:00'),
(2062, '17101169', 'indrawijaya123', 4, '0000-00-00 00:00:00'),
(2063, '17101151', 'irvanriyansyah123', 4, '0000-00-00 00:00:00'),
(2064, '17101146', 'izafaissaputra123', 4, '0000-00-00 00:00:00'),
(2065, '17101139', 'juanfadriramdhani123', 4, '0000-00-00 00:00:00'),
(2066, '17101121', 'khalelmohammedamar123', 4, '0000-00-00 00:00:00'),
(2067, '17101130', 'l.m.cahyakurniaharma123', 4, '0000-00-00 00:00:00'),
(2068, '17101131', 'labibulwan123', 4, '0000-00-00 00:00:00'),
(2069, '17101124', 'lalurizkyadriansyah123', 4, '0000-00-00 00:00:00'),
(2070, '17101100', 'mhaekalfajrulfalah123', 4, '0000-00-00 00:00:00'),
(2071, '17101178', 'm.ridwansaufi123', 4, '0000-00-00 00:00:00'),
(2072, '17101181', 'm.farid123', 4, '0000-00-00 00:00:00'),
(2073, '17101152', 'miftahfaruqnugraha123', 4, '0000-00-00 00:00:00'),
(2074, '17101195', 'mikalmufidasdika123', 4, '0000-00-00 00:00:00'),
(2075, '17101143', 'moch.lukmannulhakim123', 4, '0000-00-00 00:00:00'),
(2076, '17101129', 'mohalafurqoni123', 4, '0000-00-00 00:00:00'),
(2077, '17101167', 'moh.yanisyosfiah123', 4, '0000-00-00 00:00:00'),
(2078, '17101173', 'muahmmadhafidzfathoni123', 4, '0000-00-00 00:00:00'),
(2079, '17101116', 'muhamadlutfi123', 4, '0000-00-00 00:00:00'),
(2080, '17101111', 'muhamadsolehudin123', 4, '0000-00-00 00:00:00'),
(2081, '17101144', 'muhammadanandafajar123', 4, '0000-00-00 00:00:00'),
(2082, '17101145', 'muhammadanggaabdullah123', 4, '0000-00-00 00:00:00'),
(2083, '17101137', 'muhammaddenitobastian123', 4, '0000-00-00 00:00:00'),
(2084, '17101177', 'muhammaddiazadvani123', 4, '0000-00-00 00:00:00'),
(2085, '17101176', 'muhammadfadhilmujahid123', 4, '0000-00-00 00:00:00'),
(2086, '17101136', 'muhammadfaisal123', 4, '0000-00-00 00:00:00'),
(2087, '17101189', 'muhammadfarhanmaulana123', 4, '0000-00-00 00:00:00'),
(2088, '17101132', 'muhammadfathanfarizan123', 4, '0000-00-00 00:00:00'),
(2089, '17101174', 'muhammadfitrianahasan123', 4, '0000-00-00 00:00:00'),
(2090, '17101155', 'muhammadhanifulamin123', 4, '0000-00-00 00:00:00'),
(2091, '17101185', 'muhammadiqbal123', 4, '0000-00-00 00:00:00'),
(2092, '17101158', 'muhammadnasyithsholahu123', 4, '0000-00-00 00:00:00'),
(2093, '17101150', 'muhammadpujipangestu123', 4, '0000-00-00 00:00:00'),
(2094, '17101190', 'muhammadrasyidridha123', 4, '0000-00-00 00:00:00'),
(2095, '17101149', 'muhammadrizkisinarila123', 4, '0000-00-00 00:00:00'),
(2096, '17101106', 'muhammadsyahriramadani123', 4, '0000-00-00 00:00:00'),
(2097, '17101134', 'muhammadzackymakarims123', 4, '0000-00-00 00:00:00'),
(2098, '17101164', 'muhammad.daffaas-syauqi123', 4, '0000-00-00 00:00:00'),
(2099, '17101186', 'nabilnursalsabil123', 4, '0000-00-00 00:00:00'),
(2100, '17101133', 'naufalahmad123', 4, '0000-00-00 00:00:00'),
(2101, '17101157', 'naufalradityakrisna123', 4, '0000-00-00 00:00:00'),
(2102, '17101115', 'noviyandidifapratama123', 4, '0000-00-00 00:00:00'),
(2103, '17101166', 'nurrahmanwiraaji123', 4, '0000-00-00 00:00:00'),
(2104, '17101184', 'ramadanarudisatyagraha123', 4, '0000-00-00 00:00:00'),
(2105, '17101141', 'ramadhanadevandanienti123', 4, '0000-00-00 00:00:00'),
(2106, '17101192', 'ranggaadithiya123', 4, '0000-00-00 00:00:00'),
(2107, '17101175', 'rayhanpasaaryandra123', 4, '0000-00-00 00:00:00'),
(2108, '17101182', 'renaldiseptiawan123', 4, '0000-00-00 00:00:00'),
(2109, '17101142', 'reynaldiwahab123', 4, '0000-00-00 00:00:00'),
(2110, '17101102', 'ridwan123', 4, '0000-00-00 00:00:00'),
(2111, '17101159', 'ridwanhasyim123', 4, '0000-00-00 00:00:00'),
(2112, '17101172', 'risangmuhammad123', 4, '0000-00-00 00:00:00'),
(2113, '17101160', 'rizalmuhammadfauzan123', 4, '0000-00-00 00:00:00'),
(2114, '17101113', 'sesaafrianyahya123', 4, '0000-00-00 00:00:00'),
(2115, '17101107', 'wildanmaulidhanafi123', 4, '0000-00-00 00:00:00'),
(2116, '17101114', 'yodynurrachmat123', 4, '0000-00-00 00:00:00'),
(2117, '17101112', 'zahidahmad123', 4, '0000-00-00 00:00:00'),
(2118, '17101117', 'zubeirabdulwahidchan123', 4, '0000-00-00 00:00:00'),
(2119, '17101165', 'zuhdianjaritigara123', 4, '2017-12-15 16:00:04'),
(2120, '17101128', 'zulfitra123', 4, '2017-12-15 16:08:07'),
(2121, '17101148', '38HPC', 4, '0000-00-00 00:00:00'),
(2122, '17101140', '74hbn', 4, '0000-00-00 00:00:00'),
(2123, '17101179', 'fJB2h', 4, '0000-00-00 00:00:00'),
(2124, '17101122', 'u5O18', 4, '0000-00-00 00:00:00'),
(2125, '17101187', 'K9j9A', 4, '0000-00-00 00:00:00'),
(2126, '17101120', 'eRbI8', 4, '0000-00-00 00:00:00'),
(2127, '17101101', '06Wj7', 4, '0000-00-00 00:00:00'),
(2128, '17101105', '3iiHb', 4, '0000-00-00 00:00:00'),
(2129, '17101109', 'Pgt4s', 4, '0000-00-00 00:00:00'),
(2130, '17101108', 'd0rwW', 4, '0000-00-00 00:00:00'),
(2131, '17101188', '3a7HR', 4, '0000-00-00 00:00:00'),
(2132, '17101170', '6qE4Q', 4, '0000-00-00 00:00:00'),
(2133, '17101161', 'i171t', 4, '0000-00-00 00:00:00'),
(2134, '17101163', 'Ph78P', 4, '0000-00-00 00:00:00'),
(2135, '17101126', 'I04l3', 4, '0000-00-00 00:00:00'),
(2136, '17101180', 'u7ll3', 4, '0000-00-00 00:00:00'),
(2137, '17101125', 'GT8Dy', 4, '0000-00-00 00:00:00'),
(2138, '17101194', 'og298', 4, '0000-00-00 00:00:00'),
(2139, '17101154', 'X0571', 4, '0000-00-00 00:00:00'),
(2140, '17101118', 'Bu280', 4, '0000-00-00 00:00:00'),
(2141, '17101147', '840C4', 4, '0000-00-00 00:00:00'),
(2142, '17101103', 'l3OHn', 4, '0000-00-00 00:00:00'),
(2143, '17101123', 'DBug6', 4, '0000-00-00 00:00:00'),
(2144, '17101171', 'aWwrZ', 4, '0000-00-00 00:00:00'),
(2145, '17101193', '0Q8tU', 4, '0000-00-00 00:00:00'),
(2146, '17101119', 'Yq0Qz', 4, '0000-00-00 00:00:00'),
(2147, '17101156', '30l9H', 4, '0000-00-00 00:00:00'),
(2148, '17101127', 'T4QJl', 4, '0000-00-00 00:00:00'),
(2149, '17101162', 'ffVdx', 4, '0000-00-00 00:00:00'),
(2150, '17101138', 'kD44g', 4, '0000-00-00 00:00:00'),
(2151, '17101153', '80sd8', 4, '0000-00-00 00:00:00'),
(2152, '17101135', 'wmh1r', 4, '0000-00-00 00:00:00'),
(2153, '17101168', 'NK8fM', 4, '0000-00-00 00:00:00'),
(2154, '17101183', 'BbovL', 4, '0000-00-00 00:00:00'),
(2155, '17101104', 'cDOkZ', 4, '0000-00-00 00:00:00'),
(2156, '17101169', 'ux35T', 4, '0000-00-00 00:00:00'),
(2157, '17101151', '7Dxxk', 4, '0000-00-00 00:00:00'),
(2158, '17101146', '329eC', 4, '0000-00-00 00:00:00'),
(2159, '17101139', 'sAR35', 4, '0000-00-00 00:00:00'),
(2160, '17101121', 'Y7r4L', 4, '0000-00-00 00:00:00'),
(2161, '17101130', 'AM0ey', 4, '0000-00-00 00:00:00'),
(2162, '17101131', '92096', 4, '0000-00-00 00:00:00'),
(2163, '17101124', 'm2MTn', 4, '0000-00-00 00:00:00'),
(2164, '17101100', 'Um85y', 4, '0000-00-00 00:00:00'),
(2165, '17101178', 'MW9FN', 4, '0000-00-00 00:00:00'),
(2166, '17101181', 'L9Sq4', 4, '0000-00-00 00:00:00'),
(2167, '17101152', 'UC6F1', 4, '0000-00-00 00:00:00'),
(2168, '17101195', 'DThf4', 4, '0000-00-00 00:00:00'),
(2169, '17101143', 'v9pG6', 4, '0000-00-00 00:00:00'),
(2170, '17101129', 'IE83Y', 4, '0000-00-00 00:00:00'),
(2171, '17101167', 'WZtI9', 4, '0000-00-00 00:00:00'),
(2172, '17101173', '3Pb7F', 4, '0000-00-00 00:00:00'),
(2173, '17101116', '0934T', 4, '0000-00-00 00:00:00'),
(2174, '17101111', 'J8sn7', 4, '0000-00-00 00:00:00'),
(2175, '17101144', 'SmXBj', 4, '0000-00-00 00:00:00'),
(2176, '17101145', 'S22jQ', 4, '0000-00-00 00:00:00'),
(2177, '17101137', '6YR7G', 4, '0000-00-00 00:00:00'),
(2178, '17101177', 'oLCuP', 4, '0000-00-00 00:00:00'),
(2179, '17101176', '6c7M2', 4, '0000-00-00 00:00:00'),
(2180, '17101136', '640ep', 4, '0000-00-00 00:00:00'),
(2181, '17101189', 'OiEl7', 4, '0000-00-00 00:00:00'),
(2182, '17101132', '0fl76', 4, '0000-00-00 00:00:00'),
(2183, '17101174', 'Qm59b', 4, '0000-00-00 00:00:00'),
(2184, '17101155', 'wr6xf', 4, '0000-00-00 00:00:00'),
(2185, '17101185', '28Y0n', 4, '0000-00-00 00:00:00'),
(2186, '17101158', '3ghCk', 4, '0000-00-00 00:00:00'),
(2187, '17101150', '3mQlF', 4, '0000-00-00 00:00:00'),
(2188, '17101110', '1y0td', 4, '0000-00-00 00:00:00'),
(2189, '17101190', 'ngoMp', 4, '0000-00-00 00:00:00'),
(2190, '17101149', 'Lc7Qk', 4, '0000-00-00 00:00:00'),
(2191, '17101106', 'CXFP7', 4, '0000-00-00 00:00:00'),
(2192, '17101134', '92jK2', 4, '0000-00-00 00:00:00'),
(2193, '17101164', 'Qm68u', 4, '0000-00-00 00:00:00'),
(2194, '17101186', 'T3Z48', 4, '0000-00-00 00:00:00'),
(2195, '17101133', '5VOgu', 4, '0000-00-00 00:00:00'),
(2196, '17101157', '5rkX8', 4, '0000-00-00 00:00:00'),
(2197, '17101115', '006GI', 4, '0000-00-00 00:00:00'),
(2198, '17101166', 'K3d42', 4, '0000-00-00 00:00:00'),
(2199, '17101184', 'tf14j', 4, '0000-00-00 00:00:00'),
(2200, '17101141', '2tE44', 4, '0000-00-00 00:00:00'),
(2201, '17101192', '6EWf6', 4, '0000-00-00 00:00:00'),
(2202, '17101175', 'kYeyH', 4, '0000-00-00 00:00:00'),
(2203, '17101182', '39FN3', 4, '0000-00-00 00:00:00'),
(2204, '17101142', 'oTTk8', 4, '0000-00-00 00:00:00'),
(2205, '17101102', '152eF', 4, '0000-00-00 00:00:00'),
(2206, '17101159', 's6mFX', 4, '0000-00-00 00:00:00'),
(2207, '17101172', '59Eo9', 4, '0000-00-00 00:00:00'),
(2208, '17101160', 'EZeyU', 4, '0000-00-00 00:00:00'),
(2209, '17101113', 'pL0L3', 4, '0000-00-00 00:00:00'),
(2210, '17101107', 'G40n3', 4, '0000-00-00 00:00:00'),
(2211, '17101114', 'hCJoD', 4, '0000-00-00 00:00:00'),
(2212, '17101112', 'a3327', 4, '0000-00-00 00:00:00'),
(2213, '17101117', '49v3v', 4, '0000-00-00 00:00:00'),
(2214, '17101165', '41aIs', 4, '0000-00-00 00:00:00'),
(2215, '17101128', '14z5b', 4, '0000-00-00 00:00:00');

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
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `m_binaan`
--
ALTER TABLE `m_binaan`
  ADD KEY `id_pembina` (`id_pembina`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2216;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrator`
--
ALTER TABLE `administrator`
  ADD CONSTRAINT `administrator_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `adminmatrik`
--
ALTER TABLE `adminmatrik`
  ADD CONSTRAINT `adminmatrik_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `m_binaan`
--
ALTER TABLE `m_binaan`
  ADD CONSTRAINT `m_binaan_ibfk_1` FOREIGN KEY (`id_pembina`) REFERENCES `pembina` (`id_pembina`),
  ADD CONSTRAINT `m_binaan_ibfk_2` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `pembina`
--
ALTER TABLE `pembina`
  ADD CONSTRAINT `pembina_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
