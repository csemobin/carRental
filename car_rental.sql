-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 01:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `daily_rent_price` decimal(8,2) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `brand`, `model`, `year`, `car_type`, `daily_rent_price`, `availability`, `image`, `created_at`, `updated_at`) VALUES
(1, 'aut', 'Lang, Christiansen and Trantow', 'pariatur', 1971, 'Coupe', 312.11, 0, 'https://via.placeholder.com/640x480.png/007788?text=cars+esse', '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(2, 'eum', 'Breitenberg Group', 'est', 2017, 'Sedan', 451.84, 0, 'https://via.placeholder.com/640x480.png/00cc00?text=cars+ducimus', '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(3, 'et', 'Wisoky Inc', 'ut', 1990, 'Sedan', 297.19, 0, 'https://via.placeholder.com/640x480.png/0022aa?text=cars+eum', '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(4, 'libero', 'Sporer-Oberbrunner', 'enim', 2011, 'Sedan', 359.16, 0, 'https://via.placeholder.com/640x480.png/0066aa?text=cars+voluptatem', '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(5, 'laudantium', 'Stiedemann LLC', 'ducimus', 1992, 'Convertible', 227.81, 0, 'https://via.placeholder.com/640x480.png/002277?text=cars+sequi', '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(6, 'vel', 'Emmerich-Wilderman', 'ea', 2001, 'Convertible', 55.23, 0, 'https://via.placeholder.com/640x480.png/0055bb?text=cars+ipsum', '2024-10-14 09:29:50', '2024-10-16 22:59:27'),
(7, 'est', 'Runolfsdottir, Murray and Frami', 'nobis', 2004, 'SUV', 316.57, 0, 'https://via.placeholder.com/640x480.png/00bb11?text=cars+natus', '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(8, 'adipisci', 'Gibson PLC', 'eos', 2000, 'SUV', 259.52, 0, 'https://via.placeholder.com/640x480.png/002299?text=cars+eos', '2024-10-14 09:29:50', '2024-10-16 22:59:58'),
(9, 'aut', 'Lindgren Inc', 'impedit', 1994, 'Convertible', 60.36, 0, 'https://via.placeholder.com/640x480.png/005566?text=cars+facilis', '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(10, 'assumenda', 'Rogahn, Collier and Runolfsson', 'sit', 1981, 'Sedan', 418.74, 0, 'https://via.placeholder.com/640x480.png/000099?text=cars+et', '2024-10-14 09:29:50', '2024-10-16 23:11:01'),
(11, 'facere', 'Boehm-Zemlak', 'consectetur', 1995, 'Convertible', 343.51, 0, 'https://via.placeholder.com/640x480.png/00aa00?text=cars+atque', '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(12, 'eaque', 'McKenzie-Weimann', 'non', 2020, 'Truck', 280.71, 0, 'https://via.placeholder.com/640x480.png/009922?text=cars+dolor', '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(13, 'quia', 'Ebert and Sons', 'dolorem', 1999, 'SUV', 161.12, 0, 'https://via.placeholder.com/640x480.png/0044bb?text=cars+beatae', '2024-10-14 09:29:50', '2024-10-16 23:05:25'),
(14, 'at', 'Kreiger-Leffler', 'ducimus', 1986, 'SUV', 481.44, 0, 'https://via.placeholder.com/640x480.png/00ee66?text=cars+dignissimos', '2024-10-14 09:29:50', '2024-10-17 09:23:17'),
(15, 'illo', 'Breitenberg-Homenick', 'quaerat', 2013, 'Coupe', 490.11, 0, 'https://via.placeholder.com/640x480.png/00ffcc?text=cars+occaecati', '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(16, 'hic', 'Lynch-Oberbrunner', 'quis', 2020, 'Truck', 174.22, 0, 'https://via.placeholder.com/640x480.png/001122?text=cars+tempora', '2024-10-14 09:29:50', '2024-10-17 09:25:13'),
(17, 'maiores', 'Armstrong Group', 'dolorem', 2003, 'Truck', 308.51, 0, 'https://via.placeholder.com/640x480.png/000033?text=cars+est', '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(18, 'necessitatibus', 'Hintz, Williamson and Beier', 'pariatur', 2021, 'Coupe', 231.48, 0, 'https://via.placeholder.com/640x480.png/00bbee?text=cars+recusandae', '2024-10-14 09:29:50', '2024-10-17 09:31:07'),
(19, 'quia', 'Padberg-Smith', 'vel', 1985, 'Truck', 196.85, 1, 'https://via.placeholder.com/640x480.png/00ccbb?text=cars+in', '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(20, 'itaque', 'Becker, Fahey and Wunsch', 'totam', 1985, 'Convertible', 63.77, 0, 'https://via.placeholder.com/640x480.png/0088ff?text=cars+consequatur', '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(21, 'nisi', 'Harris Ltd', 'culpa', 2002, 'SUV', 56.00, 0, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-17 11:01:51'),
(22, 'mollitia', 'Von, Goodwin and Brown', 'rerum', 2014, 'SUV', 145.06, 0, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-20 15:03:57'),
(23, 'repellendus', 'Dibbert, Bernier and DuBuque', 'nihil', 1986, 'SUV', 211.60, 0, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(24, 'libero', 'Sporer-Dach', 'sapiente', 1999, 'Coupe', 454.78, 0, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(25, 'tempore', 'Cassin, DuBuque and Koepp', 'commodi', 1980, 'Truck', 487.40, 1, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(26, 'nulla', 'Rempel Inc', 'quia', 2001, 'SUV', 480.74, 0, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(27, 'atque', 'Welch PLC', 'maiores', 2021, 'Truck', 401.13, 1, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(28, 'nam', 'Hermiston-Rowe', 'temporibus', 2008, 'SUV', 156.44, 1, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(29, 'quis', 'Metz Group', 'sapiente', 2021, 'Sedan', 496.97, 1, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(30, 'sed', 'Schimmel Inc', 'occaecati', 2009, 'SUV', 326.52, 0, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(31, 'voluptatem', 'D\'Amore LLC', 'alias', 1992, 'Sedan', 297.62, 0, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(32, 'sit', 'Moen, Olson and Emard', 'distinctio', 2010, 'Sedan', 499.73, 1, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(33, 'voluptatem', 'Breitenberg PLC', 'magni', 2001, 'Sedan', 452.46, 0, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(34, 'possimus', 'Rau-Oberbrunner', 'nemo', 1971, 'Sedan', 78.80, 1, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(35, 'recusandae', 'Botsford-Kerluke', 'commodi', 2015, 'Truck', 148.34, 0, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(36, 'qui', 'Bergstrom and Sons', 'non', 1994, 'Sedan', 89.02, 0, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(37, 'illo', 'Corwin, Fay and Prohaska', 'ut', 2011, 'Truck', 103.62, 0, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(38, 'est', 'Skiles-Mertz', 'repellendus', 1980, 'Coupe', 488.33, 0, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(39, 'laborum', 'Metz, Breitenberg and McCullough', 'autem', 1988, 'Convertible', 239.51, 1, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(40, 'ullam', 'Rutherford, Skiles and Rogahn', 'labore', 2003, 'Sedan', 423.62, 0, 'http://localhost/', '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(41, 'Maruf Car', 'Maruf', 'Maruf', 2000, 'Mini Bus', 100.00, 0, 'images/HNA6UmjCCmpjqlLBfIUX2ZYBOf2hOPl5NNAouUGD.jpg', '2024-10-17 09:34:08', '2024-10-17 09:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_29_143913_create_cars_table', 1),
(5, '2024_09_29_143913_create_rentals_table', 1),
(6, '2024_09_29_161807_add_role_to_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_cost` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `user_id`, `car_id`, `start_date`, `end_date`, `total_cost`, `created_at`, `updated_at`) VALUES
(1, 11, 11, '2024-09-17', '2024-10-02', 873.50, '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(2, 12, 12, '2024-10-17', '2024-10-20', 665.35, '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(3, 13, 13, '2024-09-30', '2024-10-03', 294.52, '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(4, 14, 14, '2024-10-01', '2024-10-07', 641.23, '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(5, 15, 15, '2024-09-30', '2024-10-15', 593.63, '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(6, 16, 16, '2024-09-15', '2024-10-20', 572.36, '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(7, 17, 17, '2024-09-20', '2024-10-14', 457.60, '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(8, 18, 18, '2024-10-06', '2024-10-15', 918.03, '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(9, 19, 19, '2024-09-22', '2024-10-03', 743.35, '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(10, 20, 20, '2024-10-01', '2024-10-21', 564.40, '2024-10-14 09:29:50', '2024-10-14 09:29:50'),
(11, 33, 31, '2024-10-21', '2024-10-22', 504.71, '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(12, 34, 32, '2024-10-06', '2024-10-10', 872.51, '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(13, 35, 33, '2024-10-12', '2024-10-16', 99.33, '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(14, 36, 34, '2024-09-25', '2024-10-03', 537.98, '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(15, 37, 35, '2024-10-12', '2024-10-13', 141.59, '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(16, 38, 36, '2024-10-21', '2024-10-21', 223.80, '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(17, 39, 37, '2024-09-25', '2024-10-17', 600.81, '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(18, 40, 38, '2024-09-16', '2024-09-16', 900.45, '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(19, 41, 39, '2024-09-18', '2024-09-27', 327.80, '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(20, 42, 40, '2024-09-17', '2024-10-07', 288.37, '2024-10-15 11:47:28', '2024-10-15 11:47:28'),
(21, 22, 6, '2024-10-17', '2024-10-24', 55.23, '2024-10-16 22:54:45', '2024-10-16 22:54:45'),
(22, 22, 14, '2024-10-17', '2024-10-22', 481.44, '2024-10-16 22:56:01', '2024-10-16 22:56:01'),
(23, 22, 6, '2024-10-23', '2024-10-31', 55.23, '2024-10-16 22:59:27', '2024-10-16 22:59:27'),
(24, 22, 8, '2024-10-24', '2024-11-02', 259.52, '2024-10-16 22:59:58', '2024-10-16 22:59:58'),
(25, 22, 13, '2024-10-17', '2024-10-21', 644.48, '2024-10-16 23:05:25', '2024-10-16 23:05:25'),
(26, 22, 10, '2024-10-17', '2024-10-31', 5862.36, '2024-10-16 23:11:01', '2024-10-16 23:11:01'),
(27, 43, 14, '2024-10-17', '2024-10-20', 0.00, '2024-10-17 09:23:17', '2024-10-17 09:23:17'),
(28, 43, 16, '2024-10-17', '2024-10-31', 0.00, '2024-10-17 09:25:13', '2024-10-17 09:25:13'),
(29, 43, 18, '2024-10-17', '2024-11-01', 0.00, '2024-10-17 09:31:07', '2024-10-17 09:31:07'),
(30, 43, 41, '2024-10-17', '2024-10-21', 0.00, '2024-10-17 09:42:31', '2024-10-17 09:42:31'),
(31, 43, 21, '2024-10-17', '2024-10-22', 280.00, '2024-10-17 11:01:50', '2024-10-17 11:01:50'),
(32, 43, 22, '2024-10-21', '2024-10-24', 435.18, '2024-10-20 15:03:57', '2024-10-20 15:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Macy Emmerich I', 'blabadie@example.com', '2024-10-14 09:29:49', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', 'ioJsAfB4KuFb1bjaB2xh8VUvmFftWxi5EdGT4SzmSJI5nk165YPtfAQvB4YD', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(2, 'Abdul Lebsack', 'sven63@example.net', '2024-10-14 09:29:49', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', 'BoJnLlO772', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(3, 'Lacey Muller I', 'braeden76@example.net', '2024-10-14 09:29:49', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', 'XWm7W3H2Qy', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(4, 'Dr. Mollie Green', 'hershel.hackett@example.com', '2024-10-14 09:29:49', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', '6H81VwJ9zA', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(5, 'Ervin Abshire', 'erdman.tyler@example.org', '2024-10-14 09:29:49', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', 'pNmiwZEg08', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(6, 'Brady Hane', 'creola84@example.org', '2024-10-14 09:29:49', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', 't8qGx4vU4Y', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(7, 'Marlon Pagac', 'nernser@example.com', '2024-10-14 09:29:49', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', 'Q0upu329uq', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(8, 'Dr. Esperanza Auer Jr.', 'hudson.doug@example.com', '2024-10-14 09:29:49', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', 'B0ex80ow8j', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(9, 'Austen Mayert', 'mikayla75@example.org', '2024-10-14 09:29:49', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', 'SiYzRUPIbO', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(10, 'Ms. Abigayle Kling', 'lrussel@example.com', '2024-10-14 09:29:49', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', 'r7DhZ1Fb5W', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(11, 'Mr. Coby Vandervort Jr.', 'cesar.davis@example.com', '2024-10-14 09:29:50', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', 'MrF2U6E21H', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(12, 'Darrick Price IV', 'jschumm@example.org', '2024-10-14 09:29:50', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', 'E6gersaREy', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(13, 'Dale Crooks', 'dietrich.ezekiel@example.org', '2024-10-14 09:29:50', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', 'JfuWied1n0', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(14, 'Stephen Beier', 'uleannon@example.net', '2024-10-14 09:29:50', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', 'F8VIbYMU2m', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(15, 'Kole Corkery Sr.', 'concepcion.stehr@example.net', '2024-10-14 09:29:50', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', 'FaNG4ww55M', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(16, 'Kayley O\'Conner', 'mueller.missouri@example.org', '2024-10-14 09:29:50', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', 'H7UDWVV35U', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(17, 'Cora Reichel', 'alexandrea96@example.com', '2024-10-14 09:29:50', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', 'gB7udn1Eru', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(18, 'Israel Douglas', 'idell04@example.org', '2024-10-14 09:29:50', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', '11uO4UjzA6', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(19, 'Oceane Lehner', 'cummings.hallie@example.com', '2024-10-14 09:29:50', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', 'H52fpnu2lm', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(20, 'Mrs. Yessenia Schaden MD', 'lizeth20@example.net', '2024-10-14 09:29:50', '$2y$12$2W7gNQTWmxL0nFdaQSaErutw.ftH8EV55JHu4Ut9Um62QUDjBhU0i', 'zrX1Cj5e6U', '2024-10-14 09:29:50', '2024-10-14 09:29:50', 'user'),
(21, 'MD Maruf', 'mirpurmobin@gmail.com', NULL, '$2y$12$HqPKgLmomPamECUD/6TxtOsK4NaHizhXx3Txv5D3SiV5RbQSWMqii', NULL, '2024-10-14 09:31:34', '2024-10-14 09:31:34', 'admin'),
(22, 'kala bhai', 'kallu@gmail.com', NULL, '$2y$12$N7jiLR3nydw5fDylvPVLxuQBO0i/jQk0g/hp4H23r30OA6rbbKvqy', NULL, '2024-10-14 14:18:25', '2024-10-14 14:18:25', 'user'),
(23, 'Prof. Cary Breitenberg DVM', 'psteuber@example.net', '2024-10-15 11:47:26', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'IdfngXBLyN', '2024-10-15 11:47:27', '2024-10-15 11:47:27', 'user'),
(24, 'Dr. Julia Wehner I', 'vjenkins@example.net', '2024-10-15 11:47:27', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'JCtneDfflF', '2024-10-15 11:47:27', '2024-10-15 11:47:27', 'user'),
(25, 'Jannie Marquardt DDS', 'lela95@example.net', '2024-10-15 11:47:27', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'umwIxA01HM', '2024-10-15 11:47:27', '2024-10-15 11:47:27', 'user'),
(26, 'Gertrude Kutch', 'leuschke.ernestina@example.org', '2024-10-15 11:47:27', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'JbpTKKPzKI', '2024-10-15 11:47:27', '2024-10-15 11:47:27', 'user'),
(27, 'Noemie Schiller', 'kub.joany@example.net', '2024-10-15 11:47:27', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'Re1SMaHCpg', '2024-10-15 11:47:27', '2024-10-15 11:47:27', 'user'),
(28, 'Ezekiel Feeney', 'terence.kessler@example.net', '2024-10-15 11:47:27', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'cCL2xu3sCa', '2024-10-15 11:47:27', '2024-10-15 11:47:27', 'user'),
(29, 'Marjolaine Sanford', 'wilkinson.nicole@example.net', '2024-10-15 11:47:27', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'EJSVPcMep3', '2024-10-15 11:47:27', '2024-10-15 11:47:27', 'user'),
(30, 'Prof. Nikko Goodwin', 'cschultz@example.com', '2024-10-15 11:47:27', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'BE3K0VbVrY', '2024-10-15 11:47:27', '2024-10-15 11:47:27', 'user'),
(31, 'Dr. Bryon Wilderman PhD', 'tgoodwin@example.com', '2024-10-15 11:47:27', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'ZktfIfwe4u', '2024-10-15 11:47:27', '2024-10-15 11:47:27', 'user'),
(32, 'Merlin Romaguera III', 'amanda.connelly@example.net', '2024-10-15 11:47:27', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'KPGDSMx16w', '2024-10-15 11:47:27', '2024-10-15 11:47:27', 'user'),
(33, 'Ms. Allene Bartoletti III', 'josiah79@example.net', '2024-10-15 11:47:28', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'n6Rcg7AZjj', '2024-10-15 11:47:28', '2024-10-15 11:47:28', 'user'),
(34, 'Mallie Kiehn', 'constantin.kunze@example.com', '2024-10-15 11:47:28', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'CGDwvqQbh0', '2024-10-15 11:47:28', '2024-10-15 11:47:28', 'user'),
(35, 'Kelton Dare', 'mann.lambert@example.org', '2024-10-15 11:47:28', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'ulrk1nMSeP', '2024-10-15 11:47:28', '2024-10-15 11:47:28', 'user'),
(36, 'Prof. Brando Mertz II', 'oglover@example.org', '2024-10-15 11:47:28', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'ABLLonQJ1d', '2024-10-15 11:47:28', '2024-10-15 11:47:28', 'user'),
(37, 'Frankie Stark', 'dayton77@example.net', '2024-10-15 11:47:28', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'RVRX1qEHKg', '2024-10-15 11:47:28', '2024-10-15 11:47:28', 'user'),
(38, 'Kiel Reynolds', 'lia61@example.org', '2024-10-15 11:47:28', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'Itleu0Wb1m', '2024-10-15 11:47:28', '2024-10-15 11:47:28', 'user'),
(39, 'Mr. Wilford Ryan', 'coby.mitchell@example.com', '2024-10-15 11:47:28', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'Dwmyb0drXD', '2024-10-15 11:47:28', '2024-10-15 11:47:28', 'user'),
(40, 'Ms. Cathryn Barton PhD', 'mayert.mitchel@example.com', '2024-10-15 11:47:28', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'MGZ4RM4bPj', '2024-10-15 11:47:28', '2024-10-15 11:47:28', 'user'),
(41, 'Dr. Afton Robel DDS', 'marcella39@example.net', '2024-10-15 11:47:28', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', 'z1RfcweTb9', '2024-10-15 11:47:28', '2024-10-15 11:47:28', 'user'),
(42, 'Mr. Lonnie Hartmann Sr.', 'hagenes.hillard@example.org', '2024-10-15 11:47:28', '$2y$12$Pm7ZgLPBM5Ryn5eXWY0QO.fHSaGbbEiqRtInjhvgj/Nu8SbI9wL82', '26wZsYUoqn', '2024-10-15 11:47:28', '2024-10-15 11:47:28', 'user'),
(43, 'Testing ONe', 'fanaxor658@digopm.com', NULL, '$2y$12$G79ZigIKYir53KpqTdmEC.1FimTiE2gezG7nSoawbj0uJkhyroP8u', NULL, '2024-10-17 09:11:55', '2024-10-17 09:11:55', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rentals_user_id_foreign` (`user_id`),
  ADD KEY `rentals_car_id_foreign` (`car_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rentals`
--
ALTER TABLE `rentals`
  ADD CONSTRAINT `rentals_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rentals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
