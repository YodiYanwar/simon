-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 10:41 AM
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
  `id_pembina` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama`, `angkatan`, `j_kelamin`, `asalkota`, `email`, `telp`, `avatar`, `id_pembina`, `id_user`) VALUES
(1352, 17101103, 'Farid Hidayatullah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1354, 17101102, 'Ridwan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1356, 17101101, 'Arland Pratama Wijaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1358, 17101100, 'M Haekal Fajrul Falah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1362, 17101106, 'Muhammad Syahri Ramadani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1363, 17101104, 'Imaduddin Dwi Hananto', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1364, 17101118, 'Fahmi Marjuki', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1365, 17101117, 'Zubeir Abdul Wahid Chan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1368, 17101116, 'Muhamad Lutfi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1370, 17101115, 'Noviyandi Difa Pratama', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1372, 17101113, 'Sesa Afrian Yahya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1373, 17101111, 'Muhamad Solehudin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1375, 17101114, 'Yody Nur Rachmat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1376, 17101112, 'Zahid Ahmad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1377, 17101109, 'Arta Saiful Hilmi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1382, 17101108, 'Aziz Guntur Purnamaputra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1383, 17101107, 'Wildan Maulid Hanafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1384, 17101105, 'Arman Fadil Maulana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1389, 17101127, 'Hanif Dwi Putra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1390, 17101128, 'Zulfitra Hadianto Palwam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1391, 17101124, 'Lalu Rizky Adriansyah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1392, 17101126, 'Difan Nurhafidzar Juanda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1395, 17101123, 'Farras Mubasysyirsyah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1397, 17101122, 'Ahlam Nabila', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1398, 17101119, 'Fikri Abdurrohman Maajid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1400, 17101121, 'Khalel Mohammed Amar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1402, 17101120, 'Alif Limka Firdaus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1404, 17101135, 'Ibnu Rasyid Hamidi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1407, 17101133, 'Naufal Ahmad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1408, 17101134, 'Muhammad Zacky Makarim S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1409, 17101132, 'Muhammad Fathan Farizan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1410, 17101130, 'L. M. Cahya Kurnia Harma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1412, 17101131, 'Labib Ulwan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1415, 17101125, 'Edo Abdulrahim Fattah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1416, 17101129, 'Moh Ala Furqoni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1420, 17101157, 'Naufal Raditya Krisna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1421, 17101154, 'Faatihan Aulia Azwin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1424, 17101156, 'Hafisz Maulana Rasjid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1425, 17101155, 'Muhammad Haniful Amin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1426, 17101153, 'Hilmy Fikri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1428, 17101152, 'Miftah Faruq Nugraha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1431, 17101151, 'Irvan Riyansyah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1434, 17101148, 'Abdullah Haidar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1436, 17101150, 'Muhammad Puji Pangestu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1437, 17101149, 'Muhammad Rizki Sinar Ila', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1438, 17101147, 'Falah Ageng Pakerti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1439, 17101146, 'Iza Fais Saputra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1441, 17101145, 'Muhammad Angga Abdullah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1443, 17101142, 'Reynaldi Wahab', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1445, 17101144, 'Muhammad Ananda Fajar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1446, 17101143, 'Moch. Lukmannul Hakim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1447, 17101141, 'Ramadhana Devandani Enti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1448, 17101140, 'Adam Nurdiansyah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1451, 17101139, 'Juan Fadri Ramdhani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1452, 17101138, 'Herdy Almadiptha Rahman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1455, 17101137, 'Muhammad Denito Bastian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1456, 17101136, 'Muhammad Faisal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1457, 17101166, 'Nurrahman Wira Aji', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1458, 17101165, 'Zuhdi Anjari Tigara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1459, 17101164, 'Muhammad.daffa As-syauqi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1460, 17101163, 'Billy Muhammad Fadilah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1462, 17101162, 'Hariz Ilmam Husnan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1465, 17101161, 'Baso Ratulangi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1468, 17101159, 'Ridwan Hasyim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1469, 17101160, 'Rizal Muhammad Fauzan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1471, 17101158, 'Muhammad Nasyith Sholahu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1472, 17101176, 'Muhammad Fadhil Mujahid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1473, 17101175, 'Rayhan Pasa Aryandra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1476, 17101174, 'Muhammad Fitriana Hasan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1477, 17101171, 'Ferdi Wijaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1478, 17101172, 'Risang Muhammad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1479, 17101173, 'Muahmmad Hafidz Fathoni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1480, 17101167, 'Moh.yanis Yosfiah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1481, 17101170, 'Azmi Syahid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1482, 17101169, 'Indra Wijaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1483, 17101168, 'Ilham Akbar Ramadhan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1484, 17101180, 'Dimas Adektama', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1485, 17101179, 'Adi Pahlevi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1487, 17101178, 'M. Ridwan Saufi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1490, 17101177, 'Muhammad Diaz Advani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1491, 17101182, 'Renaldi Septiawan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1492, 17101183, 'Ilham Muhammad Ghifari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1494, 17101181, 'M.farid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1495, 17101184, 'Ramadan Arudi Satyagraha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1496, 17101185, 'Muhammad Iqbal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1497, 17101187, 'Ahmad Hilmi Jamaludin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1498, 17101189, 'Muhammad Farhan Maulana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1499, 17101188, 'Azka Muharam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1502, 17101186, 'Nabil Nur Salsabil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1505, 17101190, 'Muhammad Rasyid Ridha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2048, 17101195, 'Mikal Mufid Asdika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2051, 17101193, 'Feydhul Qodir Muwaffaq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2052, 17101192, 'Rangga Adithiya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2080, 17101194, 'Elisa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(2, 'derry', 'derry123', 2, '2017-12-11 16:32:27'),
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
(33, 'sri', 'sri123', 3, '0000-00-00 00:00:00'),
(1933, 'abdullahhaidar', 'abdullahhaidar123', 4, '0000-00-00 00:00:00'),
(1934, 'adamnurdiansyah', 'adamnurdiansyah123', 4, '0000-00-00 00:00:00'),
(1935, 'adipahlevi', 'adipahlevi123', 4, '0000-00-00 00:00:00'),
(1936, 'ahlamnabila', 'ahlamnabila123', 4, '0000-00-00 00:00:00'),
(1937, 'ahmadhilmijamaludin', 'ahmadhilmijamaludin123', 4, '0000-00-00 00:00:00'),
(1938, 'aliflimkafirdaus', 'aliflimkafirdaus123', 4, '0000-00-00 00:00:00'),
(1939, 'arlandpratamawijaya', 'arlandpratamawijaya123', 4, '0000-00-00 00:00:00'),
(1940, 'armanfadilmaulana', 'armanfadilmaulana123', 4, '0000-00-00 00:00:00'),
(1941, 'artasaifulhilmi', 'artasaifulhilmi123', 4, '0000-00-00 00:00:00'),
(1942, 'azizgunturpurnamaputra', 'azizgunturpurnamaputra123', 4, '0000-00-00 00:00:00'),
(1943, 'azkamuharam', 'azkamuharam123', 4, '0000-00-00 00:00:00'),
(1944, 'azmisyahid', 'azmisyahid123', 4, '0000-00-00 00:00:00'),
(1945, 'basoratulangi', 'basoratulangi123', 4, '0000-00-00 00:00:00'),
(1946, 'billymuhammadfadilah', 'billymuhammadfadilah123', 4, '0000-00-00 00:00:00'),
(1947, 'difannurhafidzarjuanda', 'difannurhafidzarjuanda123', 4, '0000-00-00 00:00:00'),
(1948, 'dimasadektama', 'dimasadektama123', 4, '0000-00-00 00:00:00'),
(1949, 'edoabdulrahimfattah', 'edoabdulrahimfattah123', 4, '0000-00-00 00:00:00'),
(1950, 'elisa', 'elisa123', 4, '0000-00-00 00:00:00'),
(1951, 'faatihanauliaazwin', 'faatihanauliaazwin123', 4, '0000-00-00 00:00:00'),
(1952, 'fahmimarjuki', 'fahmimarjuki123', 4, '0000-00-00 00:00:00'),
(1953, 'falahagengpakerti', 'falahagengpakerti123', 4, '0000-00-00 00:00:00'),
(1954, 'faridhidayatullah', 'faridhidayatullah123', 4, '0000-00-00 00:00:00'),
(1955, 'farrasmubasysyirsyah', 'farrasmubasysyirsyah123', 4, '0000-00-00 00:00:00'),
(1956, 'ferdiwijaya', 'ferdiwijaya123', 4, '0000-00-00 00:00:00'),
(1957, 'feydhulqodirmuwaffaq', 'feydhulqodirmuwaffaq123', 4, '0000-00-00 00:00:00'),
(1958, 'fikriabdurrohmanmaajid', 'fikriabdurrohmanmaajid123', 4, '0000-00-00 00:00:00'),
(1959, 'hafiszmaulanarasjid', 'hafiszmaulanarasjid123', 4, '0000-00-00 00:00:00'),
(1960, 'hanifdwiputra', 'hanifdwiputra123', 4, '0000-00-00 00:00:00'),
(1961, 'harizilmamhusnan', 'harizilmamhusnan123', 4, '0000-00-00 00:00:00'),
(1962, 'herdyalmadiptharahman', 'herdyalmadiptharahman123', 4, '0000-00-00 00:00:00'),
(1963, 'hilmyfikri', 'hilmyfikri123', 4, '0000-00-00 00:00:00'),
(1964, 'ibnurasyidhamidi', 'ibnurasyidhamidi123', 4, '0000-00-00 00:00:00'),
(1965, 'ilhamakbarramadhan', 'ilhamakbarramadhan123', 4, '0000-00-00 00:00:00'),
(1966, 'ilhammuhammadghifari', 'ilhammuhammadghifari123', 4, '0000-00-00 00:00:00'),
(1967, 'imaduddindwihananto', 'imaduddindwihananto123', 4, '0000-00-00 00:00:00'),
(1968, 'indrawijaya', 'indrawijaya123', 4, '0000-00-00 00:00:00'),
(1969, 'irvanriyansyah', 'irvanriyansyah123', 4, '0000-00-00 00:00:00'),
(1970, 'izafaissaputra', 'izafaissaputra123', 4, '0000-00-00 00:00:00'),
(1971, 'juanfadriramdhani', 'juanfadriramdhani123', 4, '0000-00-00 00:00:00'),
(1972, 'khalelmohammedamar', 'khalelmohammedamar123', 4, '0000-00-00 00:00:00'),
(1973, 'l.m.cahyakurniaharma', 'l.m.cahyakurniaharma123', 4, '0000-00-00 00:00:00'),
(1974, 'labibulwan', 'labibulwan123', 4, '0000-00-00 00:00:00'),
(1975, 'lalurizkyadriansyah', 'lalurizkyadriansyah123', 4, '0000-00-00 00:00:00'),
(1976, 'mhaekalfajrulfalah', 'mhaekalfajrulfalah123', 4, '0000-00-00 00:00:00'),
(1977, 'm.ridwansaufi', 'm.ridwansaufi123', 4, '0000-00-00 00:00:00'),
(1978, 'm.farid', 'm.farid123', 4, '0000-00-00 00:00:00'),
(1979, 'miftahfaruqnugraha', 'miftahfaruqnugraha123', 4, '0000-00-00 00:00:00'),
(1980, 'mikalmufidasdika', 'mikalmufidasdika123', 4, '0000-00-00 00:00:00'),
(1981, 'moch.lukmannulhakim', 'moch.lukmannulhakim123', 4, '0000-00-00 00:00:00'),
(1982, 'mohalafurqoni', 'mohalafurqoni123', 4, '0000-00-00 00:00:00'),
(1983, 'moh.yanisyosfiah', 'moh.yanisyosfiah123', 4, '0000-00-00 00:00:00'),
(1984, 'muahmmadhafidzfathoni', 'muahmmadhafidzfathoni123', 4, '0000-00-00 00:00:00'),
(1985, 'muhamadlutfi', 'muhamadlutfi123', 4, '0000-00-00 00:00:00'),
(1986, 'muhamadsolehudin', 'muhamadsolehudin123', 4, '0000-00-00 00:00:00'),
(1987, 'muhammadanandafajar', 'muhammadanandafajar123', 4, '0000-00-00 00:00:00'),
(1988, 'muhammadanggaabdullah', 'muhammadanggaabdullah123', 4, '0000-00-00 00:00:00'),
(1989, 'muhammaddenitobastian', 'muhammaddenitobastian123', 4, '0000-00-00 00:00:00'),
(1990, 'muhammaddiazadvani', 'muhammaddiazadvani123', 4, '0000-00-00 00:00:00'),
(1991, 'muhammadfadhilmujahid', 'muhammadfadhilmujahid123', 4, '0000-00-00 00:00:00'),
(1992, 'muhammadfaisal', 'muhammadfaisal123', 4, '0000-00-00 00:00:00'),
(1993, 'muhammadfarhanmaulana', 'muhammadfarhanmaulana123', 4, '0000-00-00 00:00:00'),
(1994, 'muhammadfathanfarizan', 'muhammadfathanfarizan123', 4, '0000-00-00 00:00:00'),
(1995, 'muhammadfitrianahasan', 'muhammadfitrianahasan123', 4, '0000-00-00 00:00:00'),
(1996, 'muhammadhanifulamin', 'muhammadhanifulamin123', 4, '0000-00-00 00:00:00'),
(1997, 'muhammadiqbal', 'muhammadiqbal123', 4, '0000-00-00 00:00:00'),
(1998, 'muhammadnasyithsholahu', 'muhammadnasyithsholahu123', 4, '0000-00-00 00:00:00'),
(1999, 'muhammadpujipangestu', 'muhammadpujipangestu123', 4, '0000-00-00 00:00:00'),
(2000, 'muhammadrasyidridha', 'muhammadrasyidridha123', 4, '0000-00-00 00:00:00'),
(2001, 'muhammadrizkisinarila', 'muhammadrizkisinarila123', 4, '0000-00-00 00:00:00'),
(2002, 'muhammadsyahriramadani', 'muhammadsyahriramadani123', 4, '0000-00-00 00:00:00'),
(2003, 'muhammadzackymakarims', 'muhammadzackymakarims123', 4, '0000-00-00 00:00:00'),
(2004, 'muhammad.daffaas-syauqi', 'muhammad.daffaas-syauqi123', 4, '0000-00-00 00:00:00'),
(2005, 'nabilnursalsabil', 'nabilnursalsabil123', 4, '0000-00-00 00:00:00'),
(2006, 'naufalahmad', 'naufalahmad123', 4, '0000-00-00 00:00:00'),
(2007, 'naufalradityakrisna', 'naufalradityakrisna123', 4, '0000-00-00 00:00:00'),
(2008, 'noviyandidifapratama', 'noviyandidifapratama123', 4, '0000-00-00 00:00:00'),
(2009, 'nurrahmanwiraaji', 'nurrahmanwiraaji123', 4, '0000-00-00 00:00:00'),
(2010, 'ramadanarudisatyagraha', 'ramadanarudisatyagraha123', 4, '0000-00-00 00:00:00'),
(2011, 'ramadhanadevandanienti', 'ramadhanadevandanienti123', 4, '0000-00-00 00:00:00'),
(2012, 'ranggaadithiya', 'ranggaadithiya123', 4, '0000-00-00 00:00:00'),
(2013, 'rayhanpasaaryandra', 'rayhanpasaaryandra123', 4, '0000-00-00 00:00:00'),
(2014, 'renaldiseptiawan', 'renaldiseptiawan123', 4, '0000-00-00 00:00:00'),
(2015, 'reynaldiwahab', 'reynaldiwahab123', 4, '0000-00-00 00:00:00'),
(2016, 'ridwan', 'ridwan123', 4, '0000-00-00 00:00:00'),
(2017, 'ridwanhasyim', 'ridwanhasyim123', 4, '0000-00-00 00:00:00'),
(2018, 'risangmuhammad', 'risangmuhammad123', 4, '0000-00-00 00:00:00'),
(2019, 'rizalmuhammadfauzan', 'rizalmuhammadfauzan123', 4, '0000-00-00 00:00:00'),
(2020, 'sesaafrianyahya', 'sesaafrianyahya123', 4, '0000-00-00 00:00:00'),
(2021, 'wildanmaulidhanafi', 'wildanmaulidhanafi123', 4, '0000-00-00 00:00:00'),
(2022, 'yodynurrachmat', 'yodynurrachmat123', 4, '0000-00-00 00:00:00'),
(2023, 'zahidahmad', 'zahidahmad123', 4, '0000-00-00 00:00:00'),
(2024, 'zubeirabdulwahidchan', 'zubeirabdulwahidchan123', 4, '0000-00-00 00:00:00'),
(2025, 'zuhdianjaritigara', 'zuhdianjaritigara123', 4, '0000-00-00 00:00:00'),
(2026, 'zulfitrahadiantopalwam', 'zulfitrahadiantopalwam123', 4, '0000-00-00 00:00:00');

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
  ADD KEY `id_pembina` (`id_pembina`),
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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2027;
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
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_pembina`) REFERENCES `pembina` (`id_pembina`),
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `pembina`
--
ALTER TABLE `pembina`
  ADD CONSTRAINT `pembina_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
