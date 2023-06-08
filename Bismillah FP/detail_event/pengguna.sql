-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 04:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jalankuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `hometown` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nama`, `email`, `birth_date`, `hobby`, `hometown`, `created_at`, `updated_at`) VALUES
(1, 'Bella', 'firgantoro.estiono@yahoo.co.id', '2019-12-15', 'minima', 'Pematangsiantar', NULL, NULL),
(2, 'Vinsen', 'elvin73@gmail.com', '2023-04-02', 'incidunt', 'Bogor', NULL, NULL),
(3, 'Bagus', 'zlaksita@gmail.co.id', '1995-08-13', 'expedita', 'Pekanbaru', NULL, NULL),
(4, 'Joko', 'dalima48@yahoo.com', '2000-11-16', 'quis', 'Bima', NULL, NULL),
(5, 'Harsana', 'diah.thamrin@gmail.com', '2006-06-22', 'officiis', 'Banjarbaru', NULL, NULL),
(6, 'Galang', 'sihotang.kambali@gmail.com', '1981-10-19', 'omnis', 'Administrasi Jakarta Timur', NULL, NULL),
(7, 'Tantri', 'ipurnawati@yahoo.com', '1980-03-08', 'sed', 'Pekalongan', NULL, NULL),
(8, 'Dirja', 'dongoran.vivi@gmail.com', '1981-07-27', 'sint', 'Mojokerto', NULL, NULL),
(9, 'Raditya', 'jefri20@gmail.com', '1996-10-21', 'recusandae', 'Medan', NULL, NULL),
(10, 'Naradi', 'hutasoit.garda@yahoo.co.id', '1974-11-09', 'id', 'Sabang', NULL, NULL),
(11, 'Zizi', 'ade.saputra@yahoo.co.id', '2022-05-15', 'eum', 'Administrasi Jakarta Timur', NULL, NULL),
(12, 'Tami', 'malik.nugroho@gmail.co.id', '2011-02-10', 'rerum', 'Lubuklinggau', NULL, NULL),
(13, 'Jayeng', 'nova33@yahoo.com', '1990-07-21', 'ipsa', 'Banjarmasin', NULL, NULL),
(14, 'Laila', 'hartana17@gmail.com', '2005-11-30', 'ea', 'Sorong', NULL, NULL),
(15, 'Mahdi', 'janet.nurdiyanti@yahoo.co.id', '1980-04-22', 'corporis', 'Makassar', NULL, NULL),
(16, 'Shania', 'najmudin.fitria@yahoo.co.id', '2022-01-04', 'exercitationem', 'Palu', NULL, NULL),
(17, 'Cakrawala', 'eva.megantara@yahoo.com', '2009-06-09', 'autem', 'Palembang', NULL, NULL),
(18, 'Cornelia', 'hidayat.jelita@yahoo.com', '2020-03-11', 'et', 'Singkawang', NULL, NULL),
(19, 'Oliva', 'kprasetya@gmail.co.id', '1988-10-20', 'omnis', 'Palangka Raya', NULL, NULL),
(20, 'Himawan', 'kayun47@yahoo.co.id', '2003-10-04', 'aut', 'Kendari', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
