-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 10:52 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `regform`
--

CREATE TABLE `regform` (
  `idForm` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `eventLocation` varchar(50) NOT NULL,
  `category` varchar(15) NOT NULL,
  `ticketPrice` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `eventDetail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regform`
--

INSERT INTO `regform` (`idForm`, `title`, `eventLocation`, `category`, `ticketPrice`, `startDate`, `endDate`, `eventDetail`) VALUES
(1, 'Festival Musik Pestapora', 'Jakarta', 'Konser', 150, '2023-05-01', '2023-05-06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget tellus in diam tincidunt luctus. Etiam sit amet nisi ante. Ut quis diam sit amet lorem imperdiet suscipit. Quisque sollicitudin tempor nulla. Duis lobortis dolor at erat malesuada, eu sodales eros aliquet. In imperdiet felis sit amet arcu vestibulum, quis bibendum urna accumsan. Nunc porta turpis nec malesuada ultricies. Suspendisse potenti. Fusce porttitor tellus mauris, nec egestas nunc porta sit amet. Fusce volutpat nisi aliquam dictum aliquam. In nec ex vel elit facilisis ornare. Sed et mollis purus.\r\n\r\nEtiam congue maximus nibh, non viverra leo blandit ut. Nulla facilisis sapien leo, vel blandit eros tincidunt ut. Fusce convallis lacus at tincidunt porttitor. Quisque consectetur felis a risus porta, a luctus arcu auctor. In malesuada nisl sed bibendum porta. Phasellus velit massa, tempor eget tellus a, iaculis fringilla tellus. Nullam felis nibh, interdum ut pretium vitae, elementum sit amet purus. Sed ex diam, egestas vel purus sed, luctus consectetur lectus. In vitae augue et magna vestibulum lacinia. Vestibulum pellentesque rutrum facilisis. Donec at lorem vel lacus condimentum tincidunt. Maecenas mollis elementum finibus.'),
(2, 'Ciputra Waterpark', 'Tangerang', 'Tempat Wisata', 25, '2023-05-08', '2023-05-12', 'Nunc vel vestibulum quam. Aenean a augue mauris. Phasellus justo metus, vulputate nec nisi at, semper pretium nisl. Nunc eget neque sit amet turpis imperdiet mattis. Quisque in tempor tortor. Suspendisse sit amet nisl scelerisque, porttitor arcu eget, consequat eros. Vivamus quis felis ac dui hendrerit scelerisque at ac odio. Phasellus tellus ipsum, maximus vitae mi ac, feugiat vehicula orci. Etiam enim nisi, suscipit dictum orci non, pretium consectetur justo.\r\n\r\nCras in tortor id nulla auctor imperdiet. Quisque ut vehicula ipsum. Cras suscipit ac lorem a semper. Nullam sollicitudin finibus orci vitae placerat. In mollis aliquam urna, sed bibendum libero egestas in. Sed laoreet iaculis orci, in efficitur ipsum bibendum sed. Donec sit amet odio libero. Nunc accumsan iaculis augue a ultrices. Aliquam erat volutpat. Pellentesque consectetur rhoncus tellus eu gravida. Duis ut nunc porttitor, aliquet tellus eu, volutpat ante. Nullam ut magna id sem scelerisque cursus. Suspendisse potenti. Donec hendrerit blandit ligula, finibus placerat leo blandit id.');

-- --------------------------------------------------------

--
-- Table structure for table `regist_forms`
--

CREATE TABLE `regist_forms` (
  `idForm` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `organizer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identityCard` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eventLocation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticketPrice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `eventDetail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paymentProof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eventPoster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regist_forms`
--

INSERT INTO `regist_forms` (`idForm`, `created_at`, `updated_at`, `organizer`, `address`, `contact`, `email`, `identityCard`, `title`, `eventLocation`, `category`, `ticketPrice`, `startDate`, `endDate`, `eventDetail`, `accountNumber`, `paymentProof`, `eventPoster`) VALUES
(1, '2023-05-24 02:37:09', '2023-05-24 02:37:19', 'iMess', 'jekate', '08912312', 'fidelajovita00@gmail.com', 'C:\\xampp\\tmp\\php356E.tmp', 'colpday', 'Jakarta', 'Konser', '500', '2023-05-01', '2023-05-03', 'loremipsum', '12345678', 'C:\\xampp\\tmp\\php357F.tmp', 'C:\\xampp\\tmp\\php3580.tmp'),
(2, '2023-05-24 02:37:25', '2023-05-24 02:37:30', 'iMess1', 'jekate', '08912312', 'jokudo28@gmail.com', 'C:\\xampp\\tmp\\phpB28.tmp', 'pestapora', 'Jakarta', 'Konser', '900', '2023-05-03', '2023-05-04', 'blablabla', '234', 'C:\\xampp\\tmp\\phpB39.tmp', 'C:\\xampp\\tmp\\phpB3A.tmp');

--
-- Indexes for dumped tables
--

--

--
-- Indexes for table `regform`
--
ALTER TABLE `regform`
  ADD PRIMARY KEY (`idForm`);

--
-- Indexes for table `regist_forms`
--
ALTER TABLE `regist_forms`
  ADD PRIMARY KEY (`idForm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
--
-- AUTO_INCREMENT for table `regform`
--
ALTER TABLE `regform`
  MODIFY `idForm` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `regist_forms`
--
ALTER TABLE `regist_forms`
  MODIFY `idForm` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
