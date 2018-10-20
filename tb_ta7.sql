-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 09:04 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ta7`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_ta7`
--

CREATE TABLE `tb_ta7` (
  `nim` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `gen` varchar(30) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `fak` varchar(30) NOT NULL,
  `asal` varchar(30) NOT NULL,
  `moto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ta7`
--

INSERT INTO `tb_ta7` (`nim`, `nama`, `tgl`, `gen`, `prodi`, `fak`, `asal`, `moto`) VALUES
(2147483647, 'Putri Aulianti Maulida Rumi', '1999-06-17', 'Perempuan', 'si', 'fit', 'Banjarbaru', 'Hidup Mandiri'),
(17111066, 'Ahmad Tsauri Sajaya', '1999-06-27', 'Laki', 'tt', 'fte', 'Banjarbaru', 'Be Positive');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
