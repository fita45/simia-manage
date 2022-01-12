-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2014 at 09:07 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `golongan_darah` smallint(2) NOT NULL,
  `lastup_date` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `dokter_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `golongan_darah` smallint(2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '2',
  PRIMARY KEY (`dokter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`dokter_id`, `firstname`, `lastname`, `username`, `password`, `email`, `foto`, `tanggal_lahir`, `tempat_lahir`, `golongan_darah`, `status`) VALUES
(1, 'dqwd', 'qdwqwd', 'dwqdwq', 'wqdwdqw', 'dwqqdw', '', '2014-12-09', 'qwdqdw', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `jenis_kelamin` char(2) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `golongan_darah` char(2) NOT NULL,
  `desk` text NOT NULL,
  `telpon` varchar(25) NOT NULL,
  `level` varchar(10) NOT NULL DEFAULT 'Member',
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `username`, `password`, `nama`, `email`, `jenis_kelamin`, `alamat`, `foto`, `tanggal_lahir`, `golongan_darah`, `desk`, `telpon`, `level`) VALUES
(11, 'member', 'aa08769cdcb26674c6706093503ff0a3', 'saya member', 'saya@yahoo.com', 'P', 'jln raya sini aja', '', '2014-12-18', 'AB', 'saya masih sehat sekali', '081777776', 'Member'),
(25, 'dokter_agus', 'e10adc3949ba59abbe56e057f20f883e', 'Agus Pramukantoro', 'dokter_agus@yahoo.com', 'L', 'jln mangacan', '', '2014-12-19', 'B', 'saya dokter yang suka membantu', '089676524550', 'Dokter'),
(26, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 'admin@yahoo.com', 'P', 'jln kedaton 56', '', '1994-03-20', 'B', 'Saya admin yang sehat', '08146456', 'Admin'),
(28, 'coba', 'c3ec0f7b054e729c5a716c8125839829', 'dicoba', 'coba@gmail.com', 'P', 'jln sumbersari 254c', '', '1989-01-01', 'B', 'saya mencoba sehat', '081995431', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_darah`
--

CREATE TABLE IF NOT EXISTS `pemesanan_darah` (
  `pemesanan_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `darah_id` int(11) NOT NULL,
  `golongan_darah` varchar(2) NOT NULL,
  `tanggal` date NOT NULL,
  `kota` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`pemesanan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pemesanan_darah`
--

INSERT INTO `pemesanan_darah` (`pemesanan_id`, `user_id`, `darah_id`, `golongan_darah`, `tanggal`, `kota`, `instansi`, `status`) VALUES
(4, 46, 0, '0', '2014-12-10', 'Malang', 'RSU', '0'),
(5, 0, 0, '0', '0000-00-00', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE IF NOT EXISTS `posting` (
  `PID` int(5) NOT NULL AUTO_INCREMENT,
  `Judul` varchar(255) NOT NULL,
  `Isi` text NOT NULL,
  `Category` int(3) NOT NULL,
  `Penulis` varchar(20) NOT NULL,
  `PostRead` int(10) NOT NULL DEFAULT '10',
  `PostDate` datetime NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`PID`, `Judul`, `Isi`, `Category`, `Penulis`, `PostRead`, `PostDate`) VALUES
(42, 'Judul', 'saya melakukan posting', 1, 'Posting', 0, '2014-12-21 07:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `stock_darah`
--

CREATE TABLE IF NOT EXISTS `stock_darah` (
  `id_darah` int(11) NOT NULL AUTO_INCREMENT,
  `golongan_darah` char(2) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `kota` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_darah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `stock_darah`
--

INSERT INTO `stock_darah` (`id_darah`, `golongan_darah`, `tanggal`, `jam`, `kota`, `instansi`) VALUES
(8, '0', '0000-00-00', '00:00:00', 'pekanbaru', ''),
(9, '0', '1010-10-12', '17:00:31', 'kota malang', 'rumah sakit');

-- --------------------------------------------------------

--
-- Table structure for table `t_chat`
--

CREATE TABLE IF NOT EXISTS `t_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(5) DEFAULT NULL,
  `level` varchar(10) NOT NULL DEFAULT 'Member',
  `chat` text,
  `date` date DEFAULT NULL,
  `jam` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `t_chat`
--

INSERT INTO `t_chat` (`id`, `member_id`, `level`, `chat`, `date`, `jam`) VALUES
(1, '25', 'Member', 'saya dokter', '2014-12-19', '09:12:55'),
(4, '11', 'Member', 'hai', '2014-12-19', '09:12:15'),
(5, '11', 'Member', 'halo', '2014-12-19', '09:12:04'),
(6, '25', 'Dokter', 'saya dokter', '2014-12-19', '09:12:19'),
(7, '25', 'Dokter', 'hai', '2014-12-19', '09:12:46'),
(8, '25', 'Dokter', 'af', '2014-12-19', '09:12:32'),
(9, '25', 'Dokter', 'aafw', '2014-12-19', '09:12:50'),
(10, '25', 'Dokter', 'addwa', '2014-12-19', '09:12:57'),
(11, '25', 'Dokter', 'halo', '2014-12-19', '10:12:14'),
(12, '25', 'Dokter', 's', '2014-12-19', '10:12:42');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
