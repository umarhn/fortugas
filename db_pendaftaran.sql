-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2017 at 04:20 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar`
--

CREATE TABLE `tb_daftar` (
  `no_pendaftaran` varchar(5) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `telepon` text NOT NULL,
  `email` text NOT NULL,
  `tanggal_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_daftar`
--

INSERT INTO `tb_daftar` (`no_pendaftaran`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `telepon`, `email`, `tanggal_daftar`) VALUES
('USR01', 'Ardian Sandi Pradana', '', 'wonosbo', '1998-07-16', 'perumahan asli permai', '082221567952', 'ardiansandi@gmail.com', '2017-12-23 09:28:01'),
('USR02', 'susi', '', 'oiuytr', '2008-11-12', 'oiuytresdvnm,mnvx', '987654345', 'sdfghjjhgf', '2017-12-24 12:35:51'),
('USR03', 'didi', '', 'wertghjg', '2009-12-16', 'mnvbcvxcxsg', '7654345', 'ghfgxfs', '2017-12-24 12:36:53'),
('NUM04', 'dede', '', 'ergghjfg', '2005-12-25', 'jhgfghgsfftrergf', '34567654', 'gjghgs', '2017-12-24 12:43:41'),
('NUM04', 'sule', 'Pria', 'wesrgdhgfjg', '2017-12-19', 'ersgdhfhj', '34568765', 'sgdhgfjghf', '2017-12-24 12:52:42'),
('NUM04', 'sule', 'Pria', 'wesrgdhgfjg', '2017-12-19', 'ersgdhfhj', '34568765', 'sgdhgfjghf', '2017-12-24 12:53:04'),
('NUM04', 'suci', 'Wanita', 'afwevg', '2017-02-15', 'ujyhrtg', '7654', 'jhgfs', '2017-12-24 12:53:55'),
('USR04', 'kijuyhtg', 'Pria', 'jyhfrtgrfe', '2017-12-19', ',kjmyh', '3456765', 'fgdhfhjg', '2017-12-24 12:55:10'),
('USR05', 'ujytrhtgr', 'Wanita', 'rewrttjghgh', '2017-12-27', 'iutjyrhtgr', '3456544', 'hmgnfgsgh', '2017-12-24 12:56:22'),
('USR06', 'arif didu', 'Pria', 'rahasia', '1979-11-15', 'regdncmkdhdbd', '45677542', 'fdffghhj@gmail.com', '2017-12-24 15:40:43'),
('USR07', 'yoyoyo', 'Pria', 'shsetheh', '2017-07-11', 'ykutjytgrses', '34567654', 'safsgrgs', '2017-12-26 13:41:01'),
('USR08', 'sutan adie', 'Wanita', 'malinau, kalimantan nurata', '1998-12-16', 'semarang', '082212446877', 'sutanelek@gmail.com', '2017-12-26 14:09:50'),
('USR09', 'sule wijaya', 'Pria', 'jakarta', '1973-10-01', 'jakarta', '11111111', 'sule@gmail.com', '2017-12-28 17:24:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
