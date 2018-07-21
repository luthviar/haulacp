-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 05:23 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haula`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `judul` text NOT NULL,
  `instansi` text NOT NULL,
  `no_hp` text NOT NULL,
  `email` text NOT NULL,
  `pesan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `nama`, `judul`, `instansi`, `no_hp`, `email`, `pesan`) VALUES
(1, 'Rohmat Taufik', 'Permintaan Katalog', 'Universitas Indonesia', '', 'rohmat.taufik14@gmail.com', 'Assalamualaikum'),
(2, 'Rohmat Taufik', 'Pelayanan Bagus', 'Universitas Indonesia', '', 'rohmat.taufik14@gmail.com', 'Assalamualaikum'),
(3, 'Luthfi Abdurrahim', '', 'East Jakarta', '', 'luthviar.a@gmail.com', ''),
(4, 'aaa', 'a', 'a', '', 'aaa@gm.com', 'a'),
(5, 'Luthfi Abdurrahim', 'a', 'East Jakarta', 'a', 'luthviar.a@gmail.com', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
