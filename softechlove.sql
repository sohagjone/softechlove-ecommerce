-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 07:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softechlove`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Baby Toy', 'Baby Tooy', 1, '2020-10-31 23:12:49', '2020-10-31 23:12:49'),
(2, 'Medicine', 'Medicine', 1, '2020-10-31 23:13:05', '2020-10-31 23:13:05'),
(3, 'ShowPiece', 'ShowPiece', 1, '2020-10-31 23:13:17', '2020-10-31 23:13:17'),
(4, 'Honey', 'Honey', 1, '2020-10-31 23:13:26', '2020-10-31 23:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email_address`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Md Al Mamun', 'Sohag', 'sohagjone@gmail.com', '$2y$10$aYbD.is4hrkD3KlutztzgOiValNUIThwK174a2jYHsbAQjEYkwgpK', '01911387550', 'Nikunjo', '2020-11-10 08:33:20', '2020-11-10 08:33:20'),
(2, 'Md Al Mamun', 'Sohag', 'demo@email.com', '$2y$10$hVYILNuLHqTnLv50tvaBwuN.nRfCNnnd7mvFvTz4XXzo3sXNgQKz.', 'bablujone1', '123456', '2020-11-10 08:42:31', '2020-11-10 08:42:31'),
(3, 'Demo', 'Update', 't@email.com', '$2y$10$yywpy11RoDdbS2WsHNRUouo8bq2mLRYLabRGKcDCfklPBs1EAqfR6', '01239125141254', 'Demo', '2020-11-14 03:59:52', '2020-11-14 03:59:52'),
(4, 'Ferdous', 'Ahamed', 'ferdousahmedshovon@gmail.com', '$2y$10$ZtXjV6aYN6GMPv16FAnFD.vW5L14Ul8Vsb5/y4dDRDEpWf7jHbv1O', '54968613564', 'Village-Magura Sadar, Magura', '2020-11-14 09:10:50', '2020-11-14 09:10:50'),
(5, 'Md Al', 'Sohag', 'shamimjone@gmail.com', '$2y$10$rhc6F25rOErZrO4INtZAxeuA/xDvcKlapNSyR5hPKaZRBVFP.1bGK', '49865649968', 'Uttara\r\nDhaka', '2020-11-17 04:48:19', '2020-11-17 04:48:19'),
(6, 'dsjfldjasl', 'asfj;lasdj', 'sjf@gmgmakil.com', '$2y$10$5NvL86xj4bFxDaFPuduSJOIEtwowKlgiWTX0JfBD.e0SmhiCqVd8y', '125456', 'asdfjasdlf', '2020-11-17 04:54:05', '2020-11-17 04:54:05'),
(7, 'Md Al', 'Sohag', 'dfasdagjone@gmail.com', '$2y$10$3U/OtP/vgxp3ihnHrRwvzezXbSKJJhuhD7CzoV8PhhdmC4UhNWr8O', 'afads0', 'Uttara\r\nDhaka', '2020-11-17 05:17:04', '2020-11-17 05:17:04'),
(8, 'adfad', 'adsfasd', 'sadsf@galdjfl.com', '$2y$10$/dVWSvqoaiJFHAXICyUQLeMrph3t0KFPRMBjhrxlStu8hB/fp3jhu', 'adfdas', 'adsfasd', '2020-11-17 05:19:31', '2020-11-17 05:19:31'),
(9, 'Md Al', 'Sohag', 'one@gmail.com', '$2y$10$Wu6uVhOWu0ePhFxNQsfIcONhm0tpVPGzQ9Z5gKGgX3EkuMQVjPIPS', '965646', 'Uttara\r\nDhaka', '2020-11-17 08:01:40', '2020-11-17 08:01:40'),
(10, 'shima', 'Rai', 'shimaray28@gmail.com', '$2y$10$Pn/3/tfn0RFqybI68Au0nea.dB4uYs3/vFsMhBs5yf8Wt3Bd8xZCO', '545646456', 'Savar', '2020-11-17 09:32:05', '2020-11-17 09:32:05'),
(11, 'Md Al', 'Sohag', 'sohaafjone@gmail.com', '$2y$10$nmCL76Iv.5ZprpqsgWadLOD4.jUkNDumQDcI3SHC1F.W26I9W85.O', '1564965656', 'Uttara\r\nDhaka', '2020-11-22 03:14:43', '2020-11-22 03:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(32, '2014_10_12_000000_create_users_table', 2),
(33, '2014_10_12_100000_create_password_resets_table', 2),
(34, '2020_08_30_162536_create_categories_table', 2),
(35, '2020_09_02_150743_create_products_table', 2),
(36, '2020_11_08_093936_create_customers_table', 3),
(37, '2020_11_08_113613_create_shippings_table', 4),
(38, '2020_11_10_103302_create_orders_table', 5),
(39, '2020_11_10_103432_create_order_details_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_quantity` int(120) NOT NULL,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending..',
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending..',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `customer_name`, `product_name`, `total_quantity`, `total_price`, `payment_type`, `order_status`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, 15, 'Md Al Mamun Sohag', 'Slice of Learning Pizza', 1, '15', 'Cash', 'Pending..', 'Pending..', '2020-11-10 08:33:34', '2020-11-10 08:33:34'),
(2, 3, 17, 'Demo Update', 'Flower Round Shape Heat Resistant Table Plate Mat', 2, '65', 'Cash', 'Pending..', 'Pending..', '2020-11-14 04:00:07', '2020-11-14 04:00:07'),
(3, 4, 18, 'Ferdous Ahamed', 'Slice of Learning Pizza', 1, '15', 'Cash', 'Pending..', 'Pending..', '2020-11-14 09:12:01', '2020-11-14 09:12:01'),
(4, 5, 19, 'Md Al Sohag', 'Slice of Learning Pizza', 1, '15', 'Cash', 'Pending..', 'Pending..', '2020-11-17 04:48:32', '2020-11-17 04:48:32'),
(5, 5, 19, 'Md Al Sohag', 'Slice of Learning Pizza', 0, '0', 'Cash', 'Pending..', 'Pending..', '2020-11-17 04:49:49', '2020-11-17 04:49:49'),
(6, 5, 19, 'Md Al Sohag', 'Slice of Learning Pizza', 0, '0', 'Cash', 'Pending..', 'Pending..', '2020-11-17 04:50:04', '2020-11-17 04:50:04'),
(7, 5, 19, 'Md Al Sohag', 'Slice of Learning Pizza', 0, '0', 'Cash', 'Pending..', 'Pending..', '2020-11-17 04:50:17', '2020-11-17 04:50:17'),
(8, 5, 19, 'Md Al Sohag', 'Slice of Learning Pizza', 0, '0', 'Cash', 'Pending..', 'Pending..', '2020-11-17 04:50:38', '2020-11-17 04:50:38'),
(9, 6, 20, 'dsjfldjasl asfj;lasdj', 'Slice of Learning Pizza', 2, '95', 'Cash', 'Pending..', 'Pending..', '2020-11-17 04:54:17', '2020-11-17 04:54:17'),
(10, 6, 20, 'dsjfldjasl asfj;lasdj', 'Slice of Learning Pizza', 0, '0', 'Cash', 'Pending..', 'Pending..', '2020-11-17 04:55:38', '2020-11-17 04:55:38'),
(11, 6, 20, 'dsjfldjasl asfj;lasdj', 'Slice of Learning Pizza', 0, '0', 'Cash', 'Pending..', 'Pending..', '2020-11-17 04:58:50', '2020-11-17 04:58:50'),
(12, 6, 20, 'dsjfldjasl asfj;lasdj', 'Slice of Learning Pizza', 0, '0', 'Cash', 'Pending..', 'Pending..', '2020-11-17 05:05:23', '2020-11-17 05:05:23'),
(13, 6, 20, 'dsjfldjasl asfj;lasdj', 'Slice of Learning Pizza', 0, '0', 'Cash', 'Pending..', 'Pending..', '2020-11-17 05:08:49', '2020-11-17 05:08:49'),
(14, 7, 21, 'Md Al Sohag', 'Flower Round Shape Heat Resistant Table Plate Mat', 2, '65', 'Cash', 'Pending..', 'Pending..', '2020-11-17 05:17:14', '2020-11-17 05:17:14'),
(15, 8, 22, 'adfad adsfasd', 'Slice of Learning Pizza', 1, '15', 'Cash', 'Pending..', 'Pending..', '2020-11-17 05:19:40', '2020-11-17 05:19:40'),
(16, 9, 23, 'Md Al Sohag', 'Slice of Learning Pizza', 5, '140', 'Cash', 'Pending..', 'Pending..', '2020-11-17 08:01:50', '2020-11-17 08:01:50'),
(17, 9, 23, 'Md Al Sohag', 'Slice of Learning Pizza', 0, '0', 'Cash', 'Pending..', 'Pending..', '2020-11-17 08:02:21', '2020-11-17 08:02:21'),
(18, 10, 24, 'shima Rai', 'Slice of Learning Pizza', 12, '250', 'Cash', 'Pending..', 'Pending..', '2020-11-17 09:32:23', '2020-11-17 09:32:23'),
(19, 1, 25, 'Md Al Mamun Sohag', 'Enchanted Friends Learning Table', 0, '0', 'Cash', 'Pending..', 'Pending..', '2020-11-22 03:46:42', '2020-11-22 03:46:42'),
(20, 1, 26, 'Md Al Mamun Sohag', 'Slice of Learning Pizza', 1, '15', 'Cash', 'Pending..', 'Pending..', '2020-11-22 04:06:55', '2020-11-22 04:06:55'),
(21, 1, 28, 'Md Al Mamun Sohag', 'Flower Round Shape Heat Resistant Table Plate Mat', 3, '150', 'Cash', 'Pending..', 'Pending..', '2020-12-03 05:05:24', '2020-12-03 05:05:24'),
(22, 1, 32, 'Md Al Mamun Sohag', 'Flower Round Shape Heat Resistant Table Plate Mat', 0, '0', 'Cash', 'Pending..', 'Pending..', '2020-12-03 05:24:18', '2020-12-03 05:24:18'),
(23, 1, 32, 'Md Al Mamun Sohag', 'Flower Round Shape Heat Resistant Table Plate Mat', 2, '65', 'Cash', 'Pending..', 'Pending..', '2020-12-03 05:25:33', '2020-12-03 05:25:33'),
(24, 1, 34, 'Md Al Mamun Sohag', 'Grow-the-Fun Garden to Kitchen', 1, '80', 'Cash', 'Pending..', 'Pending..', '2020-12-03 05:42:15', '2020-12-03 05:42:15'),
(25, 1, 38, 'Md Al Mamun Sohag', 'Slice of Learning Pizza', 1, '15', 'Cash', 'Pending..', 'Pending..', '2020-12-03 05:47:47', '2020-12-03 05:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `customer_id`, `customer_name`, `product_name`, `product_image`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 17, 1, 'Md Al Mamun Sohag', 'Slice of Learning Pizza', '17.png', 15, 1, '2020-11-10 08:33:34', '2020-11-10 08:33:34'),
(2, 2, 17, 3, 'Demo Update', 'Slice of Learning Pizza', '17.png', 15, 1, '2020-11-14 04:00:08', '2020-11-14 04:00:08'),
(3, 2, 18, 3, 'Demo Update', 'Flower Round Shape Heat Resistant Table Plate Mat', '18.jpg', 50, 1, '2020-11-14 04:00:08', '2020-11-14 04:00:08'),
(4, 3, 17, 4, 'Ferdous Ahamed', 'Slice of Learning Pizza', '17.png', 15, 1, '2020-11-14 09:12:02', '2020-11-14 09:12:02'),
(5, 4, 17, 5, 'Md Al Sohag', 'Slice of Learning Pizza', '17.png', 15, 1, '2020-11-17 04:48:32', '2020-11-17 04:48:32'),
(6, 9, 16, 6, 'dsjfldjasl asfj;lasdj', 'Grow-the-Fun Garden to Kitchen', '16.png', 80, 1, '2020-11-17 04:54:17', '2020-11-17 04:54:17'),
(7, 9, 17, 6, 'dsjfldjasl asfj;lasdj', 'Slice of Learning Pizza', '17.png', 15, 1, '2020-11-17 04:54:17', '2020-11-17 04:54:17'),
(8, 14, 17, 7, 'Md Al Sohag', 'Slice of Learning Pizza', '17.png', 15, 1, '2020-11-17 05:17:14', '2020-11-17 05:17:14'),
(9, 14, 18, 7, 'Md Al Sohag', 'Flower Round Shape Heat Resistant Table Plate Mat', '18.jpg', 50, 1, '2020-11-17 05:17:14', '2020-11-17 05:17:14'),
(10, 15, 17, 8, 'adfad adsfasd', 'Slice of Learning Pizza', '17.png', 15, 1, '2020-11-17 05:19:40', '2020-11-17 05:19:40'),
(11, 16, 12, 9, 'Md Al Sohag', 'Animal Puzzle Assortment', '12.png', 15, 1, '2020-11-17 08:01:50', '2020-11-17 08:01:50'),
(12, 16, 16, 9, 'Md Al Sohag', 'Grow-the-Fun Garden to Kitchen', '16.png', 80, 1, '2020-11-17 08:01:50', '2020-11-17 08:01:50'),
(13, 16, 17, 9, 'Md Al Sohag', 'Slice of Learning Pizza', '17.png', 15, 3, '2020-11-17 08:01:51', '2020-11-17 08:01:51'),
(14, 18, 18, 10, 'shima Rai', 'Flower Round Shape Heat Resistant Table Plate Mat', '18.jpg', 50, 2, '2020-11-17 09:32:23', '2020-11-17 09:32:23'),
(15, 18, 17, 10, 'shima Rai', 'Slice of Learning Pizza', '17.png', 15, 10, '2020-11-17 09:32:23', '2020-11-17 09:32:23'),
(16, 20, 17, 1, 'Md Al Mamun Sohag', 'Slice of Learning Pizza', '17.png', 15, 1, '2020-11-22 04:06:55', '2020-11-22 04:06:55'),
(17, 21, 14, 1, 'Md Al Mamun Sohag', 'Enchanted Friends Learning Table', '14.png', 50, 1, '2020-12-03 05:05:24', '2020-12-03 05:05:24'),
(18, 21, 18, 1, 'Md Al Mamun Sohag', 'Flower Round Shape Heat Resistant Table Plate Mat', '18.jpg', 50, 2, '2020-12-03 05:05:24', '2020-12-03 05:05:24'),
(19, 23, 17, 1, 'Md Al Mamun Sohag', 'Slice of Learning Pizza', '17.png', 15, 1, '2020-12-03 05:25:33', '2020-12-03 05:25:33'),
(20, 23, 18, 1, 'Md Al Mamun Sohag', 'Flower Round Shape Heat Resistant Table Plate Mat', '18.jpg', 50, 1, '2020-12-03 05:25:33', '2020-12-03 05:25:33'),
(21, 24, 16, 1, 'Md Al Mamun Sohag', 'Grow-the-Fun Garden to Kitchen', '16.png', 80, 1, '2020-12-03 05:42:15', '2020-12-03 05:42:15'),
(22, 25, 17, 1, 'Md Al Mamun Sohag', 'Slice of Learning Pizza', '17.png', 15, 1, '2020-12-03 05:47:47', '2020-12-03 05:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sohagjone@gmail.com', '$2y$10$QoMro7xhx9Mg6OOtS7Qv5uqbWf.2Vi4jnNIKEztRTRSjZVuVzKMr6', '2020-11-17 06:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.img.jpg',
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category_id`, `product_short_description`, `product_long_description`, `product_price`, `product_image`, `publication_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Pull & Play Learning Wagon', '1', 'Your baby can load up on learning and hands-on fun with the Laugh & Learn® Pull & Play Learning Wagon. This interactive red wagon features a variety of activities for sitting babies to bat, press, rattle, and flip, as well as light-up buttons, xylophone \'keys\' and more that activate songs, sounds, and phrases! As your baby grows, so does the exciting play, with Smart Stages™ technology and a motion sensor that rewards your toddler as they walk and pull the wagon along.', '<h2>Your baby can load up on learning and hands-on fun with the Laugh &amp; Learn&reg; Pull &amp; Play Learning Wagon. This interactive red wagon features a variety of activities for sitting babies to bat, press, rattle, and flip, as well as light-up buttons, xylophone &#39;keys&#39; and more that activate songs, sounds, and phrases! As your baby grows, so does the exciting play, with Smart Stages&trade; technology and a motion sensor that rewards your toddler as they walk and pull the wagon along.</h2>', '39', '2.png', 1, '2020-11-01 06:11:48', NULL, NULL),
(3, 'Grow-with-Me Tummy Time Llama', '1', 'The Fisher-Price® Grow-with-Me Tummy Time Llama is a snuggly play time pal for your growing baby.', '<p>The Fisher-Price&reg; Grow-with-Me Tummy Time Llama is a snuggly play time pal for your growing baby.</p>', '50', '3.png', 1, '2020-11-01 06:11:48', NULL, NULL),
(4, 'Kick & Play Piano', '1', 'Your mini-Mozart can kick up loads of musical learning fun with the Fisher-Price® Smart Stages® Kick & Play Piano.', '<p>Your mini-Mozart can kick up loads of musical learning fun with the Fisher-Price&reg; Smart Stages&reg; Kick &amp; Play Piano.</p>', '30', '4.png', 1, '2020-11-01 06:12:02', NULL, NULL),
(5, 'Giant Rock-a-Stack', '1', 'At 15 inches tall, the Fisher-Price® Giant Rock-a-Stack® takes classic stacking play to new heights.', '<p>{</p>\r\n\r\n<p>At 15 inches tall, the Fisher-Price&reg; Giant Rock-a-Stack&reg; takes classic stacking play to new heights.</p>\r\n\r\n<p>}</p>', '20', '5.jpg', 1, '2020-11-01 06:12:05', NULL, NULL),
(6, 'Play & Crawl Hedgehog Mirror', '1', 'Rock, rattle, and crawl along with the Fisher-Price® Play & Crawl Hedgehog Mirror.', '<p>Rock, rattle, and crawl along with the Fisher-Price&reg; Play &amp; Crawl Hedgehog Mirror.&nbsp;</p>', '15', '6.png', 1, '2020-11-01 06:12:09', NULL, NULL),
(7, 'Happy Shapes Hedgehog', '1', 'The Linkimals™ Happy Shapes Hedgehog™ is packed with exciting play that grows along with your baby! Younger babies can spin, turn, toggle, and bat the activities on their buddy\'s back, or press the light-up buttons to hear songs and phrases about colors, shapes, and numbers.', '<p>The Linkimals&trade; Happy Shapes Hedgehog&trade; is packed with exciting play that grows along with your baby! Younger babies can spin, turn, toggle, and bat the activities on their buddy&#39;s back, or press the light-up buttons to hear songs and phrases about colors, shapes, and numbers.</p>', '25', '7.png', 1, '2020-11-01 06:12:12', '2020-11-01 02:34:31', NULL),
(8, 'Classic Xylophone', '1', 'To stay in tune with modern tastes, the Fisher-Price® Classic Xylophone pull toy has a sleek new look.', '<p>To stay in tune with modern tastes, the Fisher-Price&reg; Classic Xylophone pull toy has a sleek new look.</p>', '16', '8.png', 1, '2020-11-01 06:12:14', NULL, NULL),
(9, 'Hide & Peek Pop-Up', '1', 'The Fisher-Price® Hide & Peek Pop-Up activity toy turns baby’s playroom into a mystical forest where surprising things happen.', '<p>The Fisher-Price&reg; Hide &amp; Peek Pop-Up activity toy turns baby&rsquo;s playroom into a mystical forest where surprising things happen.&nbsp;</p>', '15', '9.png', 1, '2020-11-01 06:12:17', NULL, NULL),
(10, 'Crawl Around', '1', 'Fisher-Price® Laugh & Learn™ Smart Stages™ Crawl Around™ Car puts baby in the driver’s seat of a stationary car that comes “fully loaded” with grow-with-me features for learning and play! Over 75 sung songs, tunes and phrases help fuel interactive learning fun and imaginative adventures—from sit & play, to crawl, to stand and “cruise”! Interactive lights and sounds dashboard keeps baby busy with a light-up baby “GPS”, a horn to honk, gears to shift (and more!), with fun activities to discover all around the car—like an interactive windshield wiper, built-in ramp for ball play, and a shapes & colors sorting door. And that’s not all!', '<p>Fisher-Price&reg; Laugh &amp; Learn&trade;&nbsp;<strong>Smart Stages&trade;</strong>&nbsp;Crawl Around&trade; Car puts baby in the driver&rsquo;s seat of a stationary car that comes &ldquo;fully loaded&rdquo; with grow-with-me features for learning and play! Over 75 sung songs, tunes and phrases help fuel interactive learning fun and imaginative adventures&mdash;from sit &amp; play, to crawl, to stand and &ldquo;cruise&rdquo;! Interactive lights and sounds dashboard keeps baby busy with a light-up baby &ldquo;GPS&rdquo;, a horn to honk, gears to shift (and more!), with fun activities to discover all around the car&mdash;like an interactive windshield wiper, built-in ramp for ball play, and a shapes &amp; colors sorting door. And that&rsquo;s not all!</p>', '60', '10.png', 1, '2020-11-01 06:12:20', NULL, NULL),
(11, 'Magic Color Mixing Bowl', '1', 'Product Features\r\nYour baby can mix up lots of yummy pretend play with the Laugh & Learn® Magic Color Mixing Bowl! This light-up musical mixing bowl \'magically\' knows when little bakers place the ingredients inside and rewards every put-and-take action with colorful lights, music, sounds, and learning phrases.', '<h2>Your baby can mix up lots of yummy pretend play with the Laugh &amp; Learn&reg; Magic Color Mixing Bowl! This light-up musical mixing bowl &#39;magically&#39; knows when little bakers place the ingredients inside and rewards every put-and-take action with colorful lights, music, sounds, and learning phrases.</h2>', '20', '11.png', 1, '2020-11-01 06:12:23', NULL, NULL),
(12, 'Animal Puzzle Assortment', '1', 'Laugh & Learn® Puppy and Monkey are ready to introduce little ones to their animal friends! When Baby fits each animal puzzle piece into place, they hear a song with that animal’s name and sound!', '<p>Laugh &amp; Learn&reg; Puppy and Monkey are ready to introduce little ones to their animal friends! When Baby fits each animal puzzle piece into place, they hear a song with that animal&rsquo;s name and sound!</p>', '15', '12.png', 1, '2020-11-01 06:12:26', NULL, NULL),
(13, 'Singin\' Soccer Ball', '1', 'Product Features\r\nAs your little team-player shakes, presses or rolls the Fisher-Price® Laugh & Learn® Singin\' Soccer Ball around, they\'ll hear fun phrases and songs that introduce numbers, counting 1-10, colors, and playing with others. This soft, musical toy ball is a cute playmate for baby as they both sing along to songs about rolling \'fast\' and \'slow\' and playing with a friend.', '<p>{</p>\r\n\r\n<h2>As your little team-player shakes, presses or rolls the Fisher-Price&reg; Laugh &amp; Learn&reg; Singin&#39; Soccer Ball around, they&#39;ll hear fun phrases and songs that introduce numbers, counting 1-10, colors, and playing with others. This soft, musical toy ball is a cute playmate for baby as they both sing along to songs about rolling &#39;fast&#39; and &#39;slow&#39; and playing with a friend.</h2>\r\n\r\n<p>}</p>', '15', '13.jpg', 1, '2020-11-01 06:12:28', NULL, NULL),
(14, 'Enchanted Friends Learning Table', '1', 'The Fisher-Price® Enchanted Friends Learning Table™ is loaded with exciting activities for your baby to stack, spin, flip, and press all play time long! Stack up the blocks or press the piano keys to get the colorful lights and learning songs going, then press the purple button to send the balls spinning \'round and \'round! Your little explorer can even move their unicorn and dragon friends around the table or place them in the blue cups to send them on an \'enchanted\' spinning ride. Plus, as your baby grows, you can easily attach the table legs so your toddler can stand up and cruise around from one activity to the next!', '<p>The Fisher-Price&reg;&nbsp;Enchanted&nbsp;Friends Learning&nbsp;Table&trade; is loaded with exciting activities for your baby to stack, spin, flip, and press all play time long! Stack up the blocks or press the piano keys to get the colorful lights and learning songs going, then press the purple button to send the balls spinning &#39;round and &#39;round! Your little explorer can even move their unicorn and dragon friends around the table or place them in the blue cups to send them on an &#39;enchanted&#39; spinning ride. Plus, as your baby grows, you can easily attach the table legs so your toddler can stand up and cruise around from one activity to the next!</p>', '50', '14.png', 1, '2020-11-01 06:12:31', NULL, NULL),
(16, 'Grow-the-Fun Garden to Kitchen', '1', 'With the Fisher-Price® Laugh & Learn® Grow-the-Fun Garden to Kitchen™ playset, toddlers can plant, pick, prepare and serve fresh pretend food, creating their own delicious farm-to-table meals. This two-sided interactive playset features a home garden on one side and a play kitchen on the other, each loaded with lights, music, and hands-on play for toddlers to explore. Smart Stages® learning content teaches letters, counting, colors, shapes, healthy eating and more as little gardeners play. Try an alphabet smoothie. It pairs well with avocado toast!', '<p>With the Fisher-Price&reg; Laugh &amp; Learn&reg; Grow-the-Fun Garden to Kitchen&trade; playset, toddlers can plant, pick, prepare and serve fresh pretend food, creating their own delicious farm-to-table meals. This two-sided interactive playset features a home garden on one side and a play kitchen on the other, each loaded with lights, music, and hands-on play for toddlers to explore. Smart Stages&reg; learning content teaches letters, counting, colors, shapes, healthy eating and more as little gardeners play. Try an alphabet smoothie. It pairs well with avocado toast!</p>', '80', '16.png', 1, '2020-11-03 00:22:04', '2020-11-03 06:22:04', NULL),
(17, 'Slice of Learning Pizza', '1', 'A personal pizza, just for baby, with all their favorite toppings: cheese, pepperoni and squares!', '<p>A personal pizza, just for baby, with all their favorite toppings: cheese, pepperoni and squares!</p>', '15', '17.png', 1, '2020-11-03 06:25:24', '2020-11-03 06:25:24', NULL),
(18, 'Flower Round Shape Heat Resistant Table Plate Mat', '3', 'Simple, but exquisite design, Eco-friendly PVC materials. Great colors, Prefect additions for your dinner table.\r\n\r\nWashable,non-fading,non-stain,Not mildew,Wipe Clean,wearproof,dries very quickly.\r\n\r\nStylish placemats would be a good decoration and life quatity of your home,dining hall, kitchen,hotel and business office.\r\n\r\nAll placemats are cut by hand and maybe one or two inches error.This will not affect daily use.', '<p>Simple, but exquisite design, Eco-friendly PVC materials. Great colors, Prefect additions for your dinner table.</p>\r\n\r\n<p>Washable,non-fading,non-stain,Not mildew,Wipe Clean,wearproof,dries very quickly.</p>\r\n\r\n<p>Stylish placemats would be a good decoration and life quatity of your home,dining hall, kitchen,hotel and business office.</p>\r\n\r\n<p>All placemats are cut by hand and maybe one or two inches error.This will not affect daily use.</p>', '50', '18.jpg', 1, '2020-11-05 04:48:05', '2020-11-05 04:48:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `full_name`, `email_address`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$2o4RnThQ5NgdcH61gXDn7.pgMK81jRZ/2ftmIe0QuD5UQKp6nTORe', '01911387550', 'Uttara', '2020-11-08 05:45:49', '2020-11-08 05:45:49'),
(2, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$4HtYMH/ZnuVxM4AduIVWR.8fB6LRVLuJMuq8c7nNaF5E216anHd96', '01911387550', 'Uttara', '2020-11-08 05:55:39', '2020-11-08 05:55:39'),
(3, 'Jannatul Al Oredhi', 'oredhi@email.com', '$2y$10$EAOBGNE9q96Q4hWO3gfvxeRfHTI/z/JXdduK7QsK5U9H97bgrvASe', '01911387550', 'Kutubkhali', '2020-11-08 06:01:24', '2020-11-08 06:01:24'),
(4, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$29NBgd/H1bG3uEEMy9H5sei2Fzup1LTWSqBZKQpgoMdzo82tmNKq6', '01911387550', 'Uttara Dhaka', '2020-11-08 12:29:18', '2020-11-08 12:29:18'),
(5, 'Demo Test', 'sohagjone@gmail.com', '$2y$10$QVPHDbVfZKfEmpzceXbRLuVU31r41waJxHivOd/DwbAResdKgOVk.', '01911387550', 'Uttara', '2020-11-09 06:57:31', '2020-11-09 06:57:31'),
(6, 'Md Al Mamun sohag', 'sohagjone@gmail.com', '$2y$10$6jstuYc8y36IAo3Dbggm4.WCdyjg.woYaFOGn2hTmbtLpO79luf.i', '01911387550', 'Uttara', '2020-11-10 04:02:58', '2020-11-10 04:02:58'),
(7, 'Jannatul Al Oredhi', 'sohagjone@gmail.com', '$2y$10$uCFZ.WmtPKF6rZKMp.L46eDu1PTnXezizzeBVz0MSiE/DemF39IDi', '01911387550', 'Dhaka', '2020-11-10 04:26:44', '2020-11-10 04:26:44'),
(8, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$4habBoEodLElq5JL7aTcdOz2h9efGCHAWKcmN3Cf4mRyda.zwkrBC', '01911387550', 'Uttara', '2020-11-10 05:46:10', '2020-11-10 05:46:10'),
(9, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$3QUEJ/Ptg2.PTqvpYBdqauqPu1kW5nnNsVgViBlFeyC8.watKPt4q', '01911387550', 'Uttara', '2020-11-10 05:52:11', '2020-11-10 05:52:11'),
(10, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$5OSP9DCl67dHTarVzg5DTOs2xDoYZNxt2J3gSjz9GorG/afjF3suq', '01911387550', 'Nikunjo', '2020-11-10 06:09:52', '2020-11-10 06:09:52'),
(11, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$CIo1sdoMrEAKBhG/R7rNnOuKE72vW.lrdXAwDVcqGB860HxSEVg5W', '01911387550', 'Uttara', '2020-11-10 07:09:09', '2020-11-10 07:09:09'),
(12, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$hHzwgUkmqZvn.6/6.40oNuMhOaFT/XlY2JUYAUI3Xp5zUCoX/laR2', '01911387550', 'Uttara', '2020-11-10 07:33:15', '2020-11-10 07:33:15'),
(13, 'Md Al Mamun sohag', 'sohanjone@gmail.com', '$2y$10$g9.q1.rJQm.2sR2WW88Fve09ltCOFghENqaTUSjrcExMJk1iKJnVq', '444545', '123456', '2020-11-10 08:02:32', '2020-11-10 08:02:32'),
(14, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$Gi181jQTRE3H0N.yO4szGOViT75kNL/zAPtjmh.v/zgqKB7ep/KDO', '01911387550', 'Uttara', '2020-11-10 08:14:31', '2020-11-10 08:14:31'),
(15, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$W3/eIMdH7IEuXZwtOPe02e0dCqkwg7Px1c04QbuuP0vkkb7H6penG', '01911387550', 'Nikunjo', '2020-11-10 08:33:31', '2020-11-10 08:33:31'),
(16, 'Md Al Mamun Sohag', 'demo@email.com', '$2y$10$Gv.4FGWz/yaQ386n3BqqS.9Wd033MvUQX/zG.I7a9xsUbSogMI8nC', 'bablujone1', '123456', '2020-11-10 08:42:40', '2020-11-10 08:42:40'),
(17, 'Demo Update', 't@email.com', '$2y$10$RkHEBS2JkgKA9CEansGJTutK8w.rs5/DTJ7XD0y75W/MXqM9CfO2e', '01239125141254', 'Demo', '2020-11-14 04:00:04', '2020-11-14 04:00:04'),
(18, 'Ferdous Ahamed', 'ferdousahmedshovon@gmail.com', '$2y$10$c6d63gA6ChUPlNNzCr9uK.KmhTueT.jc6CnwiPiXgkeyp1Y4nohlG', '54968613564', 'Village-Magura Sadar, Magura', '2020-11-14 09:11:48', '2020-11-14 09:11:48'),
(19, 'Md Al Sohag', 'shamimjone@gmail.com', '$2y$10$D0ITXkCSsFxV3w13IqUBleLUVD/Bwhj.Uvosejk5yd3zKjGq.qOYC', '49865649968', 'Uttara\r\nDhaka', '2020-11-17 04:48:29', '2020-11-17 04:48:29'),
(20, 'dsjfldjasl asfj;lasdj', 'sjf@gmgmakil.com', '$2y$10$MNZ3vPoqKHT4nXjgLDAG1OVDtBBnh/geaV13H7T/L2Gx5TzFD/wCy', '125456', 'asdfjasdlf', '2020-11-17 04:54:11', '2020-11-17 04:54:11'),
(21, 'Md Al Sohag', 'dfasdagjone@gmail.com', '$2y$10$e6jY7zN9rL0koXiRyyrdn./ExeB.fv0.ccqAVqqrOebgRoxn8aPWi', 'afads0', 'Uttara\r\nDhaka', '2020-11-17 05:17:12', '2020-11-17 05:17:12'),
(22, 'adfad adsfasd', 'sadsf@galdjfl.com', '$2y$10$iq02a0dbDtGN9lDf1Dr4n.gqbPw51GsneU/H7.ns5dfFBMQhuOBau', 'adfdas', 'adsfasd', '2020-11-17 05:19:37', '2020-11-17 05:19:37'),
(23, 'Md Al Sohag', 'one@gmail.com', '$2y$10$k1F4ZFuHSl.u17/nkOr8gO6.zIq4mU7u2VaUO76Jyd7bO6f5nprBm', '965646', 'Uttara\r\nDhaka', '2020-11-17 08:01:49', '2020-11-17 08:01:49'),
(24, 'shima Rai', 'shimaray28@gmail.com', '$2y$10$5ZxCnXm/LHCTv9e1rF9raupVkkOIoidKcaLjXBQBfUIp1UdAyrQpG', '545646456', 'Savar', '2020-11-17 09:32:18', '2020-11-17 09:32:18'),
(25, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$WxJ.nalWBrkf3wRnt2mDQuKxKDMIGY1aWpk99QnZtntKdIuq/I5.a', '01911387550', 'Nikunjo', '2020-11-22 03:46:38', '2020-11-22 03:46:38'),
(26, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$B6uGqajj0uyefItCRYTjCug52aLGk3hzLPrG68vcxaSZhnX2DmGTy', '01911387550', 'Nikunjo', '2020-11-22 04:06:43', '2020-11-22 04:06:43'),
(27, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$X9YxAyeozDqHFB4MmDrfxOUtSYUuZ2./RMr05pRrRba8.MZyHDAv6', '01911387550', 'Nikunjo', '2020-12-03 04:59:15', '2020-12-03 04:59:15'),
(28, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$.E.ms77Nkt1099Pv9EZlP.DWgGFhfIcgOIkGTp4BHy.ZrASNS0KB2', '01911387550', 'Nikunjo', '2020-12-03 05:05:23', '2020-12-03 05:05:23'),
(29, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$VLf13exiX1Gw8i5s.BuGh.jlKkqc5i4BEomzzpJ31f5NbS9zdhsKi', '01911387550', 'Nikunjo', '2020-12-03 05:08:33', '2020-12-03 05:08:33'),
(30, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$k4ekIQ6/qSQ8cuZZoW5SE..qoQySlTn7Cq3PImDjJd1wEYOwxqcUu', '01911387550', 'Nikunjo', '2020-12-03 05:09:15', '2020-12-03 05:09:15'),
(31, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$keg38u4Xail/JhpEe0oOKuz0fRqIxmq2KMhLLhN2unELkO.c5afXO', '01911387550', 'Nikunjo', '2020-12-03 05:23:44', '2020-12-03 05:23:44'),
(32, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$DG6hDfHVm687NcQhErADce9GTkFG7tLbUUrSNUrqSvBi0xysyTWyq', '01911387550', 'Nikunjo', '2020-12-03 05:24:16', '2020-12-03 05:24:16'),
(33, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$bAyaOf5lSgdNGraRWSicA.vG40FdYINsDo1PfmUXtIw3HD2z68DIW', '01911387550', 'Nikunjo', '2020-12-03 05:41:30', '2020-12-03 05:41:30'),
(34, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$3yWROhvLEwGL0tomj6Y0se7GiFcvgOwklyf3MqtrHFVj1q8HRESDq', '01911387550', 'Nikunjo', '2020-12-03 05:42:04', '2020-12-03 05:42:04'),
(35, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$nQMP.KQmyZnFssenpHq12eqPtz1cEAbAPc1CD.7LMAVdl0nSEVUbq', '01911387550', 'Nikunjo', '2020-12-03 05:43:05', '2020-12-03 05:43:05'),
(36, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$TVdKVCjUANBtVBc5BPYoau3LABxLeH1TjEPCMnuTcOsuM0j/N.ECq', '01911387550', 'Nikunjo', '2020-12-03 05:45:08', '2020-12-03 05:45:08'),
(37, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$OJU5JDnpetPO1eUnwebUkuGQQPRn2a9QJX.ZZQeQbOlYFnQNCq1.6', '01911387550', 'Nikunjo', '2020-12-03 05:47:03', '2020-12-03 05:47:03'),
(38, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$WWxs89jpYcuJoPPkGAOdBO37eCh3kSjcksJiAuyhIA0gTIQifJ1iy', '01911387550', 'Nikunjo', '2020-12-03 05:47:46', '2020-12-03 05:47:46'),
(39, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '$2y$10$cNBvaH2ECDcvrJhkxEr2XufMLThBXkUrN9n.TyHUrYORqTeuQh.ku', '01911387550', 'Nikunjo', '2020-12-03 05:58:58', '2020-12-03 05:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md Al Mamun Sohg', 'sohagjone@gmail.com', NULL, '$2y$10$sb//USSCV/GgFB/NYZGfre80MX3.s691/u.9yj7GR0aQxxmTyYtDy', 'fMHvIIOj42P9bMtPeBbQenJbmQGhJfSK6QOY0QCmbs0QqiT7mn3Y0WQ81idh', '2020-10-31 23:12:21', '2020-11-17 05:56:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
