-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 06:08 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbjalankuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `regist_forms`
--

CREATE TABLE `regist_forms` (
  `id_form` int(10) UNSIGNED NOT NULL,
  `organizer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identity_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_location` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `event_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_proof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','approved','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regist_forms`
--

INSERT INTO `regist_forms` (`id_form`, `organizer`, `address`, `contact`, `email`, `identity_card`, `title`, `event_location`, `category`, `ticket_price`, `start_date`, `end_date`, `event_detail`, `event_website`, `event_logo`, `event_poster`, `account_number`, `payment_proof`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test1', 'rans', '6545', '5026211112@mhs.its.ac.id', 'C:\\xampp\\tmp\\php598E.tmp', 'tes1', 'Canada', 'Konser', '242', '2023-06-16', '2023-06-10', 'Route::post(\'/process\', [adminController::class,\'getEvent\']);Route::post(\'/process\', [adminController::class,\'getEvent\']);Route::post(\'/process\', [adminController::class,\'getEvent\']);', 'jhgfd', 'C:\\xampp\\tmp\\php59AF.tmp', 'C:\\xampp\\tmp\\php599E.tmp', 'asa', 'C:\\xampp\\tmp\\php59C0.tmp', 'approved', NULL, NULL),
(2, 'Popeye', 'Jakarta', '089373', 'jokudo28@gmail.com', 'C:\\xampp\\tmp\\phpCD8A.tmp', 'Pestapora', 'Depok', 'Konser', '900', '2023-06-24', '2023-06-25', 'In addition to retrieving a collection of models, you may paginate your search results using the paginate method. This method will return an', 'webiste.com', 'C:\\xampp\\tmp\\phpCD9C.tmp', 'C:\\xampp\\tmp\\phpCD8B.tmp', '234', 'C:\\xampp\\tmp\\phpCDAD.tmp', 'pending', NULL, NULL),
(3, 'PSJ', 'SBY', '1234', '5026211112@mhs.its.ac.id', 'C:\\xampp\\tmp\\phpBA02.tmp', 'Kenjeran Park', 'Surabaya', 'Tempat Wisata', '10', '2023-06-23', '2023-06-30', 'This will move all records from users table to inactive_users who has not sign in into last 3 yearsThis will move all records from users table to inactive_users who has not sign in into last 3 years', '12345654sd', 'C:\\xampp\\tmp\\phpBA14.tmp', 'C:\\xampp\\tmp\\phpBA03.tmp', '43423', 'C:\\xampp\\tmp\\phpBA25.tmp', 'rejected', NULL, NULL),
(4, 'dump', 'fa', '08912312', 'imwint@er.com', 'C:\\xampp\\tmp\\phpD743.tmp', 'aespa SYNK', 'sda', 'Fansign', '150', '2023-06-24', '2023-06-29', '/admin/refund-form/{id}/admin/refund-form/{id}/admin/refund-form/{id}/admin/refund-form/{id}', '567', 'C:\\xampp\\tmp\\phpD764.tmp', 'C:\\xampp\\tmp\\phpD753.tmp', '2343', 'C:\\xampp\\tmp\\phpD775.tmp', 'rejected', NULL, NULL),
(5, 'KMJ', 'rans', '09875374', '5026211112@mhs.its.ac.id', 'C:\\xampp\\tmp\\php2B92.tmp', 'kepo', 'SY', 'hhh', '2443', '2023-07-01', '2023-07-08', '->name(\'reject\')->name(\'reject\')->name(\'reject\')', '->name(\'reject\')', 'C:\\xampp\\tmp\\php2BA4.tmp', 'C:\\xampp\\tmp\\php2BA3.tmp', '->name(\'reject\')', 'C:\\xampp\\tmp\\php2BB5.tmp', 'pending', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regist_forms`
--
ALTER TABLE `regist_forms`
  ADD PRIMARY KEY (`id_form`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regist_forms`
--
ALTER TABLE `regist_forms`
  MODIFY `id_form` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
