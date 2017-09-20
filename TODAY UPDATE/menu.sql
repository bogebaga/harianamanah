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
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(5) NOT NULL,
  `id_parent` int(5) NOT NULL DEFAULT '0',
  `nama_menu` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL,
  `aktif` enum('Ya','Tidak') NOT NULL DEFAULT 'Ya'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`) VALUES
(48, 39, 'Hukum', 'kategori-48-hukum.html', 'Tidak'),
(8, 0, 'News', 'news.html', 'Ya'),
(7, 0, 'Home', './', 'Tidak'),
(22, 8, 'Politik', 'kategori-22-politik.html', 'Ya'),
(21, 8, 'Ekobis', 'kategori-21-ekonomi.html', 'Ya'),
(13, 0, 'Lifestyle', 'lifestyle.html', 'Ya'),
(14, 0, 'Ummatizen', 'ummatizen.html', 'Ya'),
(18, 0, 'Kajian', 'kajian.html', 'Ya'),
(19, 0, 'Sosok', 'sosok.html', 'Tidak'),
(20, 0, 'Kalam', 'kalam.html', 'Ya'),
(211, 0, 'Dunia Islam', 'kategori-42-dunia-islam.html', 'Tidak'),
(40, 39, 'Kuliner', 'kategori-40-kuliner.html', 'Ya'),
(23, 0, 'Video', 'semua-playlist.html', 'Tidak'),
(31, 39, 'Kesehatan', 'kategori-31-kesehatan.html', 'Ya'),
(70, 13, 'Muslim Star', 'kategori-70-muslim-star.html', 'Ya'),
(55, 13, 'Bola+', 'kategori-55-bola.html', 'Ya'),
(56, 8, 'Jazirah', 'kategori-56-jazirah.html', 'Ya'),
(57, 14, 'Muslimah', 'kategori-57-muslimah.html', 'Ya'),
(58, 14, 'Gen M', 'kategori-58-gen-m.html', 'Ya'),
(59, 14, 'Ormas', 'kategori-59-ormas.html', 'Ya'),
(60, 18, 'Ensiklopedi Muslim', 'kategori-60-ensiklopedi-muslim.html', 'Ya'),
(61, 18, 'Mozaik', 'kategori-61-mozaik.html', 'Ya'),
(63, 18, 'Tafsir', 'kategori-63-tafsir.html', 'Ya'),
(62, 18, 'Hikmah', '	kategori-62-hikmah.html', 'Ya'),
(64, 49, 'Haji Umrah', '	kategori-64-haji-umrah.html', 'Ya'),
(66, 20, 'Legenda', 'kategori-66-legenda.html', 'Ya'),
(65, 20, 'Khazanah', '	kategori-65-khazanah.html', 'Ya'),
(67, 20, 'Islamic View', '	kategori-67-islamic-view.html', 'Ya'),
(68, 20, 'Opini', '	kategori-68-opini.html', 'Ya'),
(69, 20, 'Perspektif ', 'kategori-69-perspektif.html', 'Ya'),
(74, 14, 'Pendidikan', 'kategori-74-pendidikan.html', 'Ya'),
(39, 8, 'Internasional', 'kategori-39-internasional.html', 'Ya'),
(76, 13, 'Kuliner', 'kategori-76-kuliner.html', 'Ya'),
(73, 18, 'Siyasah', 'kategori-73-siyasah.html', 'Ya'),
(72, 18, 'Muamalah', 'kategori-72-muamalah.html', 'Ya'),
(71, 20, 'Taushiyah', 'kategori-71-taushiyah.html', 'Ya'),
(77, 0, 'Lensa Syiar', 'kategori-77-lensa-syiar.html', 'Ya'),
(78, 13, 'Olahraga', 'kategori-78-olahraga.html', 'Ya'),
(79, 13, 'Kesehatan', 'kategori-79-kesehatan.html', 'Ya'),
(80, 13, 'Halal Destinasi', 'kategori-80-halal-destinasi.html', 'Ya'),
(49, 0, 'Info Alharam', 'kategori-64-info-alharam.html', 'Ya'),
(81, 77, 'Video', 'video.html', 'Tidak'),
(82, 13, 'Samawa', 'kategori-82-samawa.html', 'Ya'),
(83, 13, 'Ta`aruf', 'kategori-83-taaruf.html', 'Ya'),
(84, 14, 'Dunia Kampus', 'kategori-84-dunia-kampus.html', 'Ya'),
(75, 77, 'Foto', 'foto.html', 'Tidak'),
(85, 13, 'Amanah Trend', 'kategori-85-amanah-trend.html', 'Ya'),
(86, 13, 'Tips N Trik', 'kategori-86-tips-n-trik.html', 'Ya'),
(87, 13, 'Tahu Ga Sih', 'kategori-87-tahu-ga-sih.html', 'Ya'),
(790, 0, '#Ramadhan', 'http://harianamanah.id/ramadhan/', 'Tidak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78889;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
