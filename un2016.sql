-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2016 at 12:37 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `un2016`
--
CREATE DATABASE IF NOT EXISTS `un2016` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `un2016`;

-- --------------------------------------------------------

--
-- Table structure for table `un_siswa`
--

DROP TABLE IF EXISTS `un_siswa`;
CREATE TABLE `un_siswa` (
  `no_ujian` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `komli` varchar(50) NOT NULL,
  `n_bin` double NOT NULL,
  `n_mat` double NOT NULL,
  `n_big` double NOT NULL,
  `n_kejuruan` double NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `un_user`
--

DROP TABLE IF EXISTS `un_user`;
CREATE TABLE `un_user` (
  `UID` tinyint(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `un_user`
--

TRUNCATE TABLE `un_user`;
--
-- Dumping data for table `un_user`
--

INSERT INTO `un_user` (`UID`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `un_siswa`
--
ALTER TABLE `un_siswa`
  ADD PRIMARY KEY (`no_ujian`);

--
-- Indexes for table `un_user`
--
ALTER TABLE `un_user`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `un_user`
--
ALTER TABLE `un_user`
  MODIFY `UID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
