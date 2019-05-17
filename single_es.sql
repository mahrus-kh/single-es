-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2019 at 12:45 PM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `single_es`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `nama`, `password`) VALUES
(1, 'admin', 'Administrator', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'malang', 'Malang', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produksi`
--

CREATE TABLE IF NOT EXISTS `tb_produksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dari_tanggal` date NOT NULL,
  `sampai_tanggal` date NOT NULL,
  `jml_produksi` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `tb_produksi`
--

INSERT INTO `tb_produksi` (`id`, `dari_tanggal`, `sampai_tanggal`, `jml_produksi`) VALUES
(1, '2017-01-01', '2017-01-07', 80),
(2, '2017-01-08', '2017-01-14', 98),
(3, '2017-01-15', '2017-01-21', 85),
(4, '2017-01-22', '2017-01-28', 83),
(5, '2017-01-29', '2017-02-04', 75),
(6, '2017-02-05', '2017-02-11', 85),
(7, '2017-02-12', '2017-02-18', 80),
(8, '2017-02-19', '2017-02-25', 83),
(9, '2017-02-26', '2017-03-04', 87),
(10, '2017-03-05', '2017-03-11', 75),
(11, '2017-03-12', '2017-03-18', 80),
(12, '2017-03-19', '2017-03-25', 83),
(13, '2017-03-26', '2017-04-01', 70),
(14, '2017-04-02', '2017-04-08', 71),
(15, '2017-04-09', '2017-04-15', 75),
(16, '2017-04-16', '2017-04-22', 78),
(17, '2017-04-23', '2017-04-29', 80),
(18, '2017-04-30', '2017-05-06', 89),
(19, '2017-05-07', '2017-05-13', 78),
(20, '2017-05-14', '2017-05-20', 79),
(21, '2017-05-21', '2017-05-27', 75),
(22, '2017-05-28', '2017-06-03', 70),
(23, '2017-06-04', '2017-06-10', 86),
(24, '2017-06-11', '2017-06-24', 68),
(25, '2017-06-25', '2017-07-01', 69),
(26, '2017-07-02', '2017-07-08', 75),
(27, '2017-07-09', '2017-07-15', 75),
(28, '2017-07-16', '2017-07-22', 71),
(29, '2017-07-23', '2017-07-29', 75),
(30, '2017-07-30', '2017-08-05', 68),
(31, '2017-08-06', '2017-08-12', 75),
(32, '2017-08-13', '2017-08-19', 80),
(33, '2017-08-20', '2017-08-26', 75),
(34, '2017-08-27', '2017-09-02', 75),
(35, '2017-09-03', '2017-09-09', 80),
(36, '2017-09-10', '2017-09-16', 76),
(37, '2017-09-17', '2017-09-23', 80),
(38, '2017-09-24', '2017-09-30', 68),
(39, '2017-10-01', '2017-10-07', 75),
(40, '2017-10-08', '2017-10-14', 69),
(41, '2017-10-15', '2017-10-21', 70),
(42, '2017-10-22', '2017-10-28', 70),
(43, '2017-10-29', '2017-11-04', 80),
(44, '2017-11-05', '2017-11-11', 65),
(45, '2017-11-12', '2017-11-18', 70),
(46, '2017-11-19', '2017-11-25', 80),
(47, '2017-11-26', '2017-12-02', 69),
(48, '2017-12-03', '2017-12-09', 70),
(49, '2017-12-10', '2017-12-16', 75),
(50, '2017-12-17', '2017-12-23', 80),
(51, '2017-12-24', '2017-12-30', 74);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
