-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 02:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `id_bookmark` int(10) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_event` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id_event` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_location` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_price` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `event_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_rating` decimal(8,2) DEFAULT NULL,
  `id_form` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id_event`, `title`, `event_location`, `category`, `ticket_price`, `start_date`, `end_date`, `event_detail`, `event_website`, `event_logo`, `event_poster`, `event_rating`, `id_form`, `created_at`, `updated_at`) VALUES
(1, 'bb', 'as', 'fas', 32, '2023-06-03', '2023-06-10', 'Route::post(\'/upload/proses\', [adminController::class, \'uploadproses\']);Route::post(\'/upload/proses\', [adminController::class, \'uploadproses\']);', '12', 'C:\\xampp\\htdocs\\dbjalankuy\\public\\event_logo_db/C:\\xampp\\tmp\\php8E0F.tmp', 'C:\\xampp\\htdocs\\dbjalankuy\\public\\event_poster_db/C:\\xampp\\tmp\\php8E0E.tmp', NULL, 7, NULL, NULL),
(2, 'et', 'Sukabumi', 'sunt', 75124, '2012-01-03', '2001-11-09', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', NULL, NULL, NULL, NULL),
(3, 'exercitationem', 'Manado', 'vel', 56940, '1981-09-12', '2015-02-07', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', '2.60', NULL, NULL, NULL),
(4, 'quos', 'Probolinggo', 'repellat', 64998, '2003-07-08', '2011-11-03', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', NULL, NULL, NULL, NULL),
(5, 'ad', 'Magelang', 'voluptatem', 32683, '1978-01-07', '1986-11-19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', NULL, NULL, NULL, NULL),
(6, 'ut', 'Sabang', 'rem', 22519, '1996-03-02', '1998-06-09', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', '3.00', NULL, NULL, NULL),
(7, 'minus', 'Magelang', 'asperiores', 130875, '2017-04-30', '1980-01-04', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', '1.00', NULL, NULL, NULL),
(8, 'dolores', 'Bitung', 'recusandae', 108644, '1981-01-13', '1996-05-05', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', '5.00', NULL, NULL, NULL),
(9, 'quasi', 'Sawahlunto', 'vero', 33140, '1992-07-02', '2004-06-02', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', '1.00', NULL, NULL, NULL),
(10, 'sunt', 'Bandar Lampung', 'sunt', 40013, '1992-04-17', '1989-08-10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', '5.00', NULL, NULL, NULL),
(11, 'qui', 'Sungai Penuh', 'excepturi', 53208, '2007-08-20', '2020-09-01', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', '5.00', NULL, NULL, NULL),
(12, 'culpa', 'Bau-Bau', 'architecto', 32737, '1992-03-29', '2011-03-23', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', '5.00', NULL, NULL, NULL),
(13, 'minus', 'Bontang', 'ut', 66400, '1995-01-19', '1971-03-03', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', '4.00', NULL, NULL, NULL),
(14, 'et', 'Kupang', 'harum', 391, '1978-02-24', '2019-08-29', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', '3.00', NULL, NULL, NULL),
(15, 'esse', 'Makassar', 'at', 57960, '2010-04-19', '2019-10-25', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', NULL, NULL, NULL, NULL),
(16, 'atque', 'Salatiga', 'dicta', 100993, '1974-04-07', '1986-06-24', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', '3.67', NULL, NULL, NULL),
(17, 'maxime', 'Medan', 'nam', 132568, '2014-07-14', '1995-10-28', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', NULL, NULL, NULL, NULL),
(18, 'dignissimos', 'Mataram', 'aut', 12988, '2018-05-13', '1999-12-06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', '1.00', NULL, NULL, NULL),
(19, 'nisi', 'Tebing Tinggi', 'maiores', 78781, '1975-09-02', '2001-07-23', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', '3.00', NULL, NULL, NULL),
(20, 'assumenda', 'Kendari', 'neque', 43638, '2002-01-16', '2023-01-12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', NULL, NULL, NULL, NULL),
(21, 'quia', 'Binjai', 'ratione', 74163, '1982-10-07', '2016-03-27', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.google.com', '1684889507_breaking news.png', '1684889507_breaking news.png', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_14_045201_create_regist_forms_table', 2),
(6, '2023_06_14_051549_create_events_table', 3),
(7, '2023_06_14_112922_create_refund_forms_table', 4),
(8, '2023_06_16_131248_create_rating_reviews_table', 5),
(9, '2023_06_16_131302_create_bookmark_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('amsholihah4@gmail.com', '$2y$10$.EDn0uHSI52kMI9RkdqGsu4NthS1B7WIIjFjgDqFnX47xzgCrJG5O', '2023-06-08 18:54:41'),
('jonghun261@gmail.com', '$2y$10$s6XZFxMwxG46jo6U7CgjYuFbC1CfvJO/ePemzHcUW7WNzuYTPOizG', '2023-06-16 02:56:56'),
('schoolannisams@gmail.com', '$2y$10$t3MnNflmh2h/E8twiGDyluslcs9oPl24GKzHNqYemFtQ8mk4SR73u', '2023-06-10 19:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating_reviews`
--

CREATE TABLE `rating_reviews` (
  `id_rating` int(10) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_event` int(10) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `refund_forms`
--

CREATE TABLE `refund_forms` (
  `id_ref` int(10) UNSIGNED NOT NULL,
  `issue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `refund_proof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_form` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `refund_forms`
--

INSERT INTO `refund_forms` (`id_ref`, `issue`, `refund_proof`, `id_form`, `created_at`, `updated_at`) VALUES
(1, 'bebebeb', '1686918951_Screenshot 2023-03-02 134049.png', 7, NULL, NULL),
(2, 'gakjelas', '1686975835_qr contributor.png', 9, NULL, NULL);

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
(1, 'Jeki', 'JMP 1 Lantai 1 A No., Jl. Dupak Rukun No.53', '0897364738', 'jonghun261@gmail.com', 'C:\\xampp\\tmp\\php2587.tmp', 'Pestapora', 'Jakarta', 'Konser', '500', '2023-06-15', '2023-06-17', '<div class=\"form-group\">\r\n        <label class=\"control-label\" for=\"ticketprice\">Price</label>\r\n            <input type=\"text\" name=\"ticketprice\" class=\"form-control\" id=\"ticketprice\" placeholder=\"Masukkan ticket price\">\r\n    </div>', 'asa', 'C:\\xampp\\tmp\\php2589.tmp', 'C:\\xampp\\tmp\\php2588.tmp', '12345', 'C:\\xampp\\tmp\\php258A.tmp', 'rejected', NULL, NULL),
(2, 'Hua', 'Gang pantai 1 A No., Jl. Dupak Rukun No.53', '87543568', 'jonghan261@gmail.com', 'C:\\xampp\\tmp\\phpFC86.tmp', 'Treasure world tour', 'surabaya', 'Fansign', '345', '2023-06-16', '2023-06-17', 'time().\"_\".time().\"_\".time().\"_\".time().\"_\".time().\"_\".time().\"_\".time().\"_\".time().\"_\".time().\"_\".time().\"_\".', 'treasuremap', 'C:\\xampp\\tmp\\phpFC97.tmp', 'C:\\xampp\\tmp\\phpFC87.tmp', '654765', 'C:\\xampp\\tmp\\phpFC98.tmp', 'rejected', NULL, NULL),
(3, 'a', 'v', '54', 'as@d', 'C:\\xampp\\tmp\\phpB8AC.tmp', 'bb', 'as', 'fas', '32', '2023-06-03', '2023-06-10', 'Route::post(\'/upload/proses\', [adminController::class, \'uploadproses\']);Route::post(\'/upload/proses\', [adminController::class, \'uploadproses\']);', '12', 'C:\\xampp\\tmp\\phpB8BE.tmp', 'C:\\xampp\\tmp\\phpB8BD.tmp', '1237', 'C:\\xampp\\tmp\\phpB8BF.tmp', 'rejected', NULL, NULL),
(4, 'a', 'v', '54', 'as@d', 'C:\\xampp\\tmp\\php6CA9.tmp', 'bb', 'as', 'fas', '32', '2023-06-03', '2023-06-10', 'Route::post(\'/upload/proses\', [adminController::class, \'uploadproses\']);Route::post(\'/upload/proses\', [adminController::class, \'uploadproses\']);', '12', 'C:\\xampp\\tmp\\php6CAB.tmp', 'C:\\xampp\\tmp\\php6CAA.tmp', '1237', 'C:\\xampp\\tmp\\php6CAC.tmp', 'rejected', NULL, NULL),
(5, 'a', 'v', '54', 'as@d', 'C:\\xampp\\tmp\\php9E9B.tmp', 'bb', 'as', 'fas', '32', '2023-06-03', '2023-06-10', 'Route::post(\'/upload/proses\', [adminController::class, \'uploadproses\']);Route::post(\'/upload/proses\', [adminController::class, \'uploadproses\']);', '12', 'C:\\xampp\\tmp\\php9E9D.tmp', 'C:\\xampp\\tmp\\php9E9C.tmp', '1237', 'C:\\xampp\\tmp\\php9E9E.tmp', 'rejected', NULL, NULL),
(6, 'a', 'v', '54', 'as@d', 'C:\\xampp\\tmp\\phpEA4C.tmp', 'bb', 'as', 'fas', '32', '2023-06-03', '2023-06-10', 'Route::post(\'/upload/proses\', [adminController::class, \'uploadproses\']);Route::post(\'/upload/proses\', [adminController::class, \'uploadproses\']);', '12', 'C:\\xampp\\tmp\\phpEA4E.tmp', 'C:\\xampp\\tmp\\phpEA4D.tmp', '1237', 'C:\\xampp\\tmp\\phpEA4F.tmp', 'rejected', NULL, NULL),
(7, 'a', 'v', '54', 'as@d', 'C:\\xampp\\tmp\\php8E0D.tmp', 'bb', 'as', 'fas', '32', '2023-06-03', '2023-06-10', 'Route::post(\'/upload/proses\', [adminController::class, \'uploadproses\']);Route::post(\'/upload/proses\', [adminController::class, \'uploadproses\']);', '12', 'C:\\xampp\\tmp\\php8E0F.tmp', 'C:\\xampp\\tmp\\php8E0E.tmp', '1237', 'C:\\xampp\\tmp\\php8E10.tmp', 'rejected', NULL, NULL),
(8, 'capek bingit', 'Surabaya', '081331000', 'jihan@gmail.com', 'C:\\xampp\\tmp\\php3483.tmp', 'ICON Grand Talkshow', 'surabaya', 'Webinar', '12345', '2023-06-16', '2023-06-30', 'ini webinar', 'ise-its.com', 'C:\\xampp\\tmp\\php3485.tmp', 'C:\\xampp\\tmp\\php3484.tmp', '123456789', 'C:\\xampp\\tmp\\php3486.tmp', 'rejected', NULL, NULL),
(9, 'coba', 'ingyah', '2334', 'kepo', '1686975669_vbg jum 1.jpg', 'Dream Concert', 'Surabaya', 'Konser Amal', '0', '2023-07-01', '2023-06-18', 'public function index()\r\n{\r\n    $data = Post::inRandomOrder()\r\n                ->limit(5)\r\n                ->get();\r\n}', 'kepo', '1686975669_qr participant.png', '1686975669_qr participant.png', '6785', '1686975669_qr contributor.png', 'rejected', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'schoolannisams@gmail.com', NULL, '$2y$10$LA8QdFq.8ieaPWI.2fJ9oet0sGdA8/wiCK3PMzhRcL1.XB1QK/aY6', 'admin', 'active', NULL, NULL, NULL),
(2, 'User', 'amsholihah4@gmail.com', NULL, '$2y$10$oB2GuW7q7nU3EQq71izSxeSp8ai90oqSEeMerWrIRko4Cm.MOzo7W', 'user', 'active', NULL, NULL, NULL),
(3, 'Darrell Jast DDS', 'kathleen.dach@example.org', '2023-06-06 15:44:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'inactive', 'VgBGskHnhT', '2023-06-06 15:44:14', '2023-06-06 15:44:14'),
(4, 'Jessyca Donnelly', 'karley77@example.net', '2023-06-06 15:44:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'active', 'qjDsacQ1MZ', '2023-06-06 15:44:14', '2023-06-06 15:44:14'),
(5, 'Raoul Macejkovic MD', 'quentin.dach@example.com', '2023-06-06 15:44:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'active', 'jawrq4bshq', '2023-06-06 15:44:14', '2023-06-06 15:44:14'),
(6, 'Karli Lueilwitz', 'wolff.arlie@example.net', '2023-06-06 15:44:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'active', 'pxuiAn9D3d', '2023-06-06 15:44:14', '2023-06-06 15:44:14'),
(7, 'Tara Senger Sr.', 'rlowe@example.com', '2023-06-06 15:44:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'inactive', 'hrOLpXLiW1', '2023-06-06 15:44:14', '2023-06-06 15:44:14'),
(8, 'Pengguna baru', 'jonghun261@gmail.com', NULL, '$2y$10$kFFooZRpCrf4b425T.LZleY6M1XZ7Cs9XV5CnJaa/HwefHR8WL6FK', 'user', 'active', 'obuKXDkNRthSdbchDwxdHdd2FtUalZBLuBZsJj7vQyzSb4LpoHm6mIYDoVIr', '2023-06-08 00:20:01', '2023-06-15 08:37:20'),
(9, 'User baru 1234', '5026211089@mhs.its.ac.id', NULL, '$2y$10$IlAnsan9SG0xzhWsRcT/Z..SupcOSfn7cUYn.xyT22WSz2dnWw0Yy', 'user', 'active', NULL, '2023-06-11 21:13:07', '2023-06-11 21:13:07'),
(10, 'pengguna 1', 'user@gmail.com', NULL, '$2y$10$jWPK0PQDQNF.SCjtxk8U/eB9wbsMng2TPJDi6XuAlb20aPVjMfZ32', 'user', 'active', NULL, '2023-06-14 18:34:00', '2023-06-14 18:34:00');

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
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `events_id_form_foreign` (`id_form`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rating_reviews`
--
ALTER TABLE `rating_reviews`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `rating_reviews_id_event_foreign` (`id_event`),
  ADD KEY `rating_reviews_id_user_foreign` (`id_user`);

--
-- Indexes for table `refund_forms`
--
ALTER TABLE `refund_forms`
  ADD PRIMARY KEY (`id_ref`),
  ADD KEY `refund_forms_id_form_foreign` (`id_form`);

--
-- Indexes for table `regist_forms`
--
ALTER TABLE `regist_forms`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `id_bookmark` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating_reviews`
--
ALTER TABLE `rating_reviews`
  MODIFY `id_rating` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `refund_forms`
--
ALTER TABLE `refund_forms`
  MODIFY `id_ref` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regist_forms`
--
ALTER TABLE `regist_forms`
  MODIFY `id_form` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD CONSTRAINT `bookmark_id_event_foreign` FOREIGN KEY (`id_event`) REFERENCES `events` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookmark_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_id_form_foreign` FOREIGN KEY (`id_form`) REFERENCES `regist_forms` (`id_form`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating_reviews`
--
ALTER TABLE `rating_reviews`
  ADD CONSTRAINT `rating_reviews_id_event_foreign` FOREIGN KEY (`id_event`) REFERENCES `events` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_reviews_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `refund_forms`
--
ALTER TABLE `refund_forms`
  ADD CONSTRAINT `refund_forms_id_form_foreign` FOREIGN KEY (`id_form`) REFERENCES `regist_forms` (`id_form`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
