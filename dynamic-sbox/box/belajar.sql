-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2014 at 05:07 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `belajar`
--
CREATE DATABASE IF NOT EXISTS `belajar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `belajar`;

-- --------------------------------------------------------

--
-- Table structure for table `peng_kota`
--

CREATE TABLE IF NOT EXISTS `peng_kota` (
  `kota_id` int(11) NOT NULL AUTO_INCREMENT,
  `kota_nama` varchar(255) NOT NULL,
  `prov_id_fk` int(11) NOT NULL,
  PRIMARY KEY (`kota_id`),
  KEY `prov_id_fk` (`prov_id_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `peng_kota`
--

INSERT INTO `peng_kota` (`kota_id`, `kota_nama`, `prov_id_fk`) VALUES
(1, 'Banda Aceh', 1),
(2, 'Medan', 2),
(3, 'Makasar', 4),
(4, 'Jakarta', 3),
(5, 'Banjarmasin', 5),
(6, 'Merauke', 6);

-- --------------------------------------------------------

--
-- Table structure for table `peng_kurir`
--

CREATE TABLE IF NOT EXISTS `peng_kurir` (
  `kurir_id` int(11) NOT NULL AUTO_INCREMENT,
  `kurir_nama` varchar(255) NOT NULL,
  PRIMARY KEY (`kurir_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `peng_kurir`
--

INSERT INTO `peng_kurir` (`kurir_id`, `kurir_nama`) VALUES
(1, 'JNE'),
(2, 'TIKI'),
(3, 'POS Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `peng_provinsi`
--

CREATE TABLE IF NOT EXISTS `peng_provinsi` (
  `prov_id` int(11) NOT NULL AUTO_INCREMENT,
  `prov_nama` varchar(255) NOT NULL,
  PRIMARY KEY (`prov_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `peng_provinsi`
--

INSERT INTO `peng_provinsi` (`prov_id`, `prov_nama`) VALUES
(1, 'Aceh'),
(2, 'Sumatera Utara'),
(3, 'DKI Jakarta'),
(4, 'Sulawesi Selatan'),
(5, 'Kalimantan Selatan'),
(6, 'Papua');

-- --------------------------------------------------------

--
-- Table structure for table `peng_tarif`
--

CREATE TABLE IF NOT EXISTS `peng_tarif` (
  `tarif_id` int(11) NOT NULL AUTO_INCREMENT,
  `tarif` int(10) NOT NULL,
  `kurir_id_fk` int(11) NOT NULL,
  `kota_id_fk` int(11) NOT NULL,
  PRIMARY KEY (`tarif_id`),
  KEY `kota_id_fk` (`kota_id_fk`),
  KEY `kurir_id_fk` (`kurir_id_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `peng_tarif`
--

INSERT INTO `peng_tarif` (`tarif_id`, `tarif`, `kurir_id_fk`, `kota_id_fk`) VALUES
(1, 20000, 2, 1),
(2, 30000, 2, 4),
(3, 35000, 3, 3),
(6, 28000, 1, 5),
(7, 33000, 2, 6),
(8, 25000, 2, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peng_kota`
--
ALTER TABLE `peng_kota`
  ADD CONSTRAINT `peng_kota_ibfk_1` FOREIGN KEY (`prov_id_fk`) REFERENCES `peng_provinsi` (`prov_id`);

--
-- Constraints for table `peng_tarif`
--
ALTER TABLE `peng_tarif`
  ADD CONSTRAINT `peng_tarif_ibfk_1` FOREIGN KEY (`kota_id_fk`) REFERENCES `peng_kota` (`kota_id`),
  ADD CONSTRAINT `peng_tarif_ibfk_2` FOREIGN KEY (`kurir_id_fk`) REFERENCES `peng_kurir` (`kurir_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
