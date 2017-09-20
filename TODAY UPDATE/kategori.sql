-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 19, 2017 at 07:09 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harianamanah.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) CHARACTER SET latin1 NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kategori_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `photo` varchar(200) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `username`, `kategori_seo`, `aktif`, `photo`) VALUES
(21, 'Ekobis', 'admin', 'ekobis', 'Y', '777489HEADEREKOBIS2.png'),
(22, 'Politik', 'admin', 'politik', 'Y', '260663HEADERPOLITIK.png'),
(74, 'Pendidikan', 'admin', 'pendidikan', 'Y', ''),
(72, 'Muamalah', 'admin', 'muamalah', 'Y', ''),
(73, 'Siyasah', 'admin', 'siyasah', 'Y', ''),
(39, 'Internasional', 'admin', 'internasional', 'Y', ''),
(71, 'Taushiyah', 'admin', 'taushiyah', 'Y', ''),
(55, 'Bola+', 'admin', 'bola', 'Y', '971541HEADERbola.png'),
(56, 'Jazirah', 'admin', 'jazirah', 'Y', '817862slide_1.jpg'),
(57, 'Muslimah', 'admin', 'muslimah', 'Y', '225235HEADERmuslimah2.png'),
(58, 'Gen M', 'admin', 'gen-m', 'Y', '290032HEADERGENM.png'),
(59, 'Ormas', 'admin', 'ormas', 'Y', '265369HEADERORMAS.png'),
(60, 'Ensiklopedi Muslim', 'admin', 'ensiklopedi-muslim', 'Y', '170911HEADERensklopediamuslim.png'),
(61, 'Mozaik', 'admin', 'mozaik', 'Y', '846298HEADERMOZAIK.png'),
(62, 'Hikmah', 'admin', 'hikmah', 'Y', '899593HEADERHIKMAH.png'),
(63, 'Tafsir', 'admin', 'tafsir', 'Y', '588575HEADERTAFSIR.png'),
(64, 'Info Alharam', 'admin', 'info-alharam', 'Y', '106728HEADERHAJIUMROH.png'),
(65, 'Khazanah', 'admin', 'khazanah', 'Y', '801229HEADERkhazanah.png'),
(66, 'Legenda', 'admin', 'legenda', 'Y', '723133HEADERLEGENDA.png'),
(67, 'Islamic View', 'admin', 'islamic-view', 'Y', '248681HEADERISLAMICVIEW.png'),
(68, 'Opini', 'admin', 'opini', 'Y', '758179HEADEROPINI.png'),
(69, 'Perspektif', 'admin', 'perspektif', 'Y', '181708HEADERESAI.png'),
(70, 'Muslim Star', 'admin', 'muslim-star', 'Y', '13394HEADERstar.png'),
(76, 'Kuliner', 'subair ', 'kuliner', 'Y', ''),
(77, 'Lensa Syiar', 'admin', 'lensa-syiar', 'Y', ''),
(78, 'Olahraga', 'admin', 'olahraga', 'Y', ''),
(79, 'Kesehatan', 'admin', 'kesehatan', 'Y', ''),
(80, 'Halal Destinasi', 'admin', 'halal-destinasi', 'Y', ''),
(81, 'video', 'admin', 'video', 'Y', ''),
(82, 'Samawa', 'admin', 'samawa', 'Y', ''),
(83, 'Ta`aruf', 'admin', 'taaruf', 'Y', ''),
(84, 'dunia kampus', 'admin', 'dunia-kampus', 'Y', ''),
(85, 'Amanah Trend', 'admin', 'amanah-trend', 'Y', ''),
(86, 'Tips n Trik', 'admin', 'tips-n-trik', 'Y', ''),
(87, 'Tahu Ga Sih', 'admin', 'tahu-ga-sih', 'Y', ''),
(88, 'Ramadhan', 'admin', 'ramadhan', 'Y', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
