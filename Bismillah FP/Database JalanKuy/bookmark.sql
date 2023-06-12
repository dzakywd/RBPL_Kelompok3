-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 08:39 AM
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
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `id_bookmark` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_event` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`id_bookmark`, `id_user`, `id_event`, `created_at`, `updated_at`) VALUES
(1, 12, 12, NULL, NULL),
(2, 3, 13, NULL, NULL),
(3, 5, 2, NULL, NULL),
(4, 12, 16, NULL, NULL),
(5, 20, 9, NULL, NULL),
(6, 15, 7, NULL, NULL),
(7, 2, 12, NULL, NULL),
(8, 14, 2, NULL, NULL),
(9, 4, 3, NULL, NULL),
(10, 9, 15, NULL, NULL),
(11, 20, 12, NULL, NULL),
(12, 18, 15, NULL, NULL),
(13, 19, 9, NULL, NULL),
(14, 12, 6, NULL, NULL),
(15, 7, 20, NULL, NULL),
(16, 1, 8, NULL, NULL),
(17, 6, 2, NULL, NULL),
(18, 4, 6, NULL, NULL),
(19, 3, 5, NULL, NULL),
(20, 8, 19, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`id_bookmark`),
  ADD KEY `bookmark_id_user_foreign` (`id_user`),
  ADD KEY `bookmark_id_event_foreign` (`id_event`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `id_bookmark` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD CONSTRAINT `bookmark_id_event_foreign` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookmark_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
