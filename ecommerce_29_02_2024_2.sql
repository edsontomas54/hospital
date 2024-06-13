-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 02, 2024 at 04:17 PM
-- Server version: 8.2.0
-- PHP Version: 8.1.2-1ubuntu2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_29_02_2024_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `subtotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taxRate` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_popular` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`, `deleted_at`, `image`, `is_popular`) VALUES
(1, 'Xiaomi Redmi', 'xiaomi-redmi', '2024-02-14 17:00:44', '2024-02-14 20:27:48', NULL, '1707942468.png', 1),
(2, 'HUAWEI', 'huawei', '2024-02-14 20:16:30', '2024-02-14 20:18:50', NULL, '1707941790.jpg', 1),
(3, 'itel', 'itel', '2024-02-14 20:35:14', '2024-02-14 20:35:14', NULL, '1707942914.jpg', 1),
(4, 'samsung', 'samsung', '2024-02-14 20:37:30', '2024-02-14 20:37:30', NULL, '1707943050.png', 1),
(5, 'Apple', 'apple', '2024-02-14 20:45:04', '2024-02-14 20:45:04', NULL, '1707943504.png', 1),
(6, 'INFINIX', 'infinix', '2024-02-15 17:58:19', '2024-02-15 17:58:19', NULL, '1708019899.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `confirm_payments`
--

CREATE TABLE `confirm_payments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_main_banners`
--

CREATE TABLE `home_main_banners` (
  `id` bigint UNSIGNED NOT NULL,
  `top_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `top_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `top_title`, `title`, `sub_title`, `offer`, `link`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'welcome', 'All your desires are here', 'shop here and be our favorite customer', 'In offer', '/shop', '1707949554.jpg', 1, '2024-02-13 13:38:08', '2024-02-14 22:27:21', NULL),
(2, 'Online ', 'Wherever You Are, We\'re Right There with You', 'Shop Now', 'Our Products Are On Offer.', '/shop', '1707985924.jpg', 1, '2024-02-15 08:32:04', '2024-02-18 10:09:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(43, '2014_10_12_000000_create_users_table', 1),
(44, '2014_10_12_100000_create_password_resets_table', 1),
(45, '2019_08_19_000000_create_failed_jobs_table', 1),
(46, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(47, '2023_01_15_194517_create_categories_table', 1),
(48, '2023_01_15_194722_create_products_table', 1),
(49, '2023_10_03_203026_add_delete_et_in_category', 1),
(50, '2023_10_03_203546_add_delete_et_in_products', 1),
(51, '2023_10_03_203831_add_delete_et_in_users', 1),
(52, '2023_10_09_175153_create_home_sliders_table', 1),
(53, '2023_10_10_115302_add_image_and_is_popular_column_to_categories_table', 1),
(54, '2023_10_11_113346_add_is_popular_to_product', 1),
(55, '2023_10_17_163448_create_orders_table', 1),
(74, '2023_10_17_165607_create_order_items_table', 2),
(75, '2023_10_17_170137_create_shippings_table', 2),
(76, '2023_10_17_171959_create_transactions_table', 2),
(77, '2023_11_06_152955_create_carts_table', 2),
(78, '2024_02_05_155607_create_confirm_payments_table', 2),
(79, '2024_02_07_181912_create_banners_table', 2),
(80, '2024_02_08_063715_create_home_main_banners_table', 2),
(81, '2024_03_17_105805_add_active_attribute_to_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `subtotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additionalOrderInformation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('pending','processing','delivered','canceled','on hold','on the way','refunded','packing') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_status` enum('pending','checking','not valid','not payed','payed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not payed',
  `paymentMode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_shipping_different` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `subtotal`, `discount`, `tax`, `total`, `firstName`, `lastName`, `mobile`, `email`, `country`, `province`, `city`, `address1`, `address2`, `district`, `zipcode`, `additionalOrderInformation`, `status`, `payment_status`, `paymentMode`, `is_shipping_different`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '116,550.00', '0', '24,475.50', '141,025.50', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Namaacha', '1104', NULL, 'pending', 'not payed', 'transaction', 0, '2024-04-05 13:56:25', '2024-04-05 13:56:25', NULL),
(2, 1, '25,500.00', '0', '5,355.00', '30,855.00', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Marracuene', '1104', NULL, 'delivered', 'payed', 'transaction', 0, '2024-04-09 14:36:11', '2024-04-09 14:57:45', NULL),
(3, 1, '125,900.00', '0', '26,439.00', '152,339.00', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'MCidade', 'Mozambique', 'Hulene-B', NULL, 'Distrito Urbano de KaMpfumo', '1104', NULL, 'packing', 'payed', 'transaction', 0, '2024-04-09 17:03:41', '2024-04-09 17:34:55', NULL),
(4, 13, '16,150.00', '0', '3,391.50', '19,541.50', 'Zenildo', 'Nhabomba', '844642763', 'zenildo.nhabomba@isutc.ac.mz', 'Mocambique', 'Maputo', 'Matola', 'Rua Guegueted', NULL, 'Boane', '1204', NULL, 'packing', 'payed', 'transaction', 0, '2024-04-09 19:31:24', '2024-04-09 19:35:27', NULL),
(5, 13, '11,600.00', '0', '2,436.00', '14,036.00', 'Zenildo', 'Nhabomba', '844642763', 'zenildo.nhabomba@isutc.ac.mz', 'Mocambique', 'Maputo', 'Matola', 'Rua Guegueted', NULL, 'Namaacha', '1104', NULL, 'pending', 'not payed', 'cod', 0, '2024-04-10 08:02:58', '2024-04-12 15:06:12', NULL),
(6, 1, '7,250.00', '0', '1,522.50', '8,772.50', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Manhiça', '1104', NULL, 'pending', 'not payed', 'transaction', 0, '2024-04-12 16:35:20', '2024-04-12 16:35:20', NULL),
(7, 1, '25,500.00', '0', '5,355.00', '30,855.00', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Manhiça', '1104', NULL, 'pending', 'not payed', 'mpesa', 0, '2024-04-12 16:35:54', '2024-04-12 16:35:54', NULL),
(8, 1, '8,600.00', '0', '1,806.00', '10,406.00', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Matutuíne', '1104', NULL, 'pending', 'not payed', 'mpesa', 0, '2024-04-12 16:56:57', '2024-04-12 16:56:57', NULL),
(9, 2, '24,900.00', '0', '5,229.00', '30,129.00', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Namaacha', '1104', NULL, 'pending', 'not payed', 'mpesa', 0, '2024-04-12 17:21:15', '2024-04-12 17:21:15', NULL),
(10, 2, '6,950.00', '0', '1,459.50', '8,409.50', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Namaacha', '1104', NULL, 'pending', 'not payed', 'mpesa', 0, '2024-04-12 17:37:50', '2024-04-12 17:37:50', NULL),
(11, 2, '14,500.00', '0', '3,045.00', '17,545.00', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Matutuíne', '1104', NULL, 'pending', 'not payed', 'mpesa', 0, '2024-04-12 18:00:35', '2024-04-12 18:00:35', NULL),
(12, 2, '25,500.00', '0', '5,355.00', '30,855.00', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Manhiça', '1104', NULL, 'pending', 'not payed', 'mpesa', 0, '2024-04-12 18:01:15', '2024-04-12 18:01:15', NULL),
(13, 1, '6,950.00', '0', '1,459.50', '8,409.50', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Marracuene', '1104', NULL, 'pending', 'not payed', 'mpesa', 0, '2024-04-12 18:14:44', '2024-04-12 18:14:44', NULL),
(14, 1, '25,500.00', '0', '5,355.00', '30,855.00', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Matutuíne', '1104', NULL, 'pending', 'not payed', 'mpesa', 0, '2024-04-12 18:15:16', '2024-04-12 18:15:16', NULL),
(15, 2, '168,000.00', '0', '35,280.00', '203,280.00', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'MCidade', 'Mozambique', 'Hulene-B', NULL, 'Distrito Municipal de KaNyaka', '1104', NULL, 'pending', 'not payed', 'mpesa', 0, '2024-04-12 18:25:34', '2024-04-12 18:25:34', NULL),
(16, 2, '17,500.00', '0', '3,675.00', '21,175.00', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Namaacha', '1104', NULL, 'pending', 'not payed', 'mpesa', 0, '2024-04-12 18:49:02', '2024-04-12 18:49:02', NULL),
(17, 2, '13,000.00', '0', '2,730.00', '15,730.00', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Namaacha', '1104', NULL, 'pending', 'not payed', 'mpesa', 0, '2024-04-12 18:50:12', '2024-04-12 18:50:12', NULL),
(18, 5, '6,950.00', '0', '1,459.50', '8,409.50', 'Teste', 'Tester', '7785556', 'teste@teste.com', 'Mocambique', 'MCidade', 'Mozambique', 'La moz', NULL, 'Distrito Urbano de KaMaxaquene', '1104', NULL, 'packing', 'payed', 'transaction', 0, '2024-04-13 12:16:54', '2024-04-27 18:31:23', NULL),
(19, 5, '7,250.00', '0', '1,522.50', '8,772.50', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Moamba', '1104', NULL, 'pending', 'not payed', 'cod', 0, '2024-04-14 20:44:02', '2024-04-14 20:44:02', NULL),
(20, 5, '18,900.00', '0', '3,969.00', '22,869.00', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Marracuene', '1104', NULL, 'packing', 'payed', 'cod', 0, '2024-04-17 07:08:26', '2024-04-18 14:00:26', NULL),
(21, 1, '14,500.00', '0', '3,045.00', '17,545.00', 'Edson', 'Tomas', '842236192', 'other@email.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Moamba', '1104', NULL, 'pending', 'not payed', 'mpesa', 0, '2024-04-21 12:55:00', '2024-04-21 12:55:00', NULL),
(22, 10, '6,950.00', '0', '1,459.50', '8,409.50', 'jorge', 'teste teste', '645454545', 'jorge@test', 'Mocambique', 'MCidade', 'Maputo', 'hulene 2', 'hhhhha', 'Distrito Municipal de KaNyaka', '1109', NULL, 'on the way', 'payed', 'mpesa', 0, '2024-04-21 13:00:48', '2024-05-28 14:36:48', NULL),
(23, 10, '8,600.00', '0', '1,806.00', '10,406.00', 'jorge', 'werw', '645454545', 'jorge@test', 'Mocambique', 'MCidade', 'Maputo', 'Ahhhhw', 'fdfdfd', 'Distrito Municipal de KaTembe', '1109', NULL, 'pending', 'not payed', 'mpesa', 0, '2024-04-21 13:05:27', '2024-04-21 13:05:27', NULL),
(24, 10, '128,000.00', '0', '26,880.00', '154,880.00', 'jorge', 'werw', '645454545', 'jorge@test', 'Mocambique', 'MCidade', 'Maputo', 'Ahhhhw', 'fdfdfd', 'Distrito Municipal de KaTembe', '1109', NULL, 'pending', 'not payed', 'mpesa', 0, '2024-04-21 21:24:23', '2024-04-21 21:24:23', NULL),
(25, 1, '11,600.00', '0', '2,436.00', '14,036.00', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Moamba', '1104', NULL, 'pending', 'not payed', 'mpesa', 0, '2024-04-21 21:58:39', '2024-04-21 21:58:39', NULL),
(26, 1, '13,900.00', '0', '2,919.00', '16,819.00', 'Edson', 'Tomas', '842236192', 'other@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Namaacha', '1104', NULL, 'pending', 'not payed', 'transaction', 0, '2024-04-22 08:24:40', '2024-04-22 08:24:40', NULL),
(27, 1, '14,500.00', '0', '3,045.00', '17,545.00', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Moamba', '1104', NULL, 'pending', 'not payed', 'mpesa', 0, '2024-04-22 08:25:24', '2024-04-27 16:56:02', NULL),
(28, 1, '11,600.00', '0', '2,436.00', '14,036.00', 'Edson', 'Tomas', '842236192', 'nee@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Namaacha', '1104', NULL, 'pending', 'not payed', 'transaction', 0, '2024-04-27 18:37:28', '2024-04-27 18:37:28', NULL),
(29, 1, '11,600.00', '0', '2,436.00', '14,036.00', 'Edson', 'Tomas', '842236192', 'wswwwwww@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Matutuíne', '1104', NULL, 'packing', 'payed', 'transaction', 0, '2024-04-27 18:43:24', '2024-04-27 18:45:20', NULL),
(30, 10, '11,600.00', '0', '2,436.00', '14,036.00', 'jorge', 'werw', '645454545', 'jorge@test', 'Mocambique', 'MCidade', 'Maputo', 'Ahhhhw', 'fdfdfd', 'Distrito Urbano de KaMubukwana', '1109', NULL, 'pending', 'not payed', 'mpesa', 0, '2024-04-27 18:48:39', '2024-04-27 18:48:39', NULL),
(31, 10, '8,900.00', '0', '1,869.00', '10,769.00', 'jorge', 'werw', '645454545', 'jorge@test', 'Mocambique', 'MCidade', 'Maputo', 'Ahhhhw', 'fdfdfd', 'Distrito Municipal de KaTembe', '1109', NULL, 'pending', 'not payed', 'transaction', 0, '2024-04-27 18:50:50', '2024-04-27 18:50:50', NULL),
(32, 1, '17,500.00', '0', '3,675.00', '21,175.00', 'jorge', 'werw', '645454545', 'jorge@test', 'Mocambique', 'MCidade', 'Maputo', 'Ahhhhw', 'fdfdfd', 'Distrito Urbano de KaMaxaquene', '1109', NULL, 'pending', 'not payed', 'transaction', 0, '2024-04-27 18:51:52', '2024-04-27 18:51:52', NULL),
(33, 14, '18,200.00', '0', '3,822.00', '22,022.00', 'prince Tomas', 'Thomas', '865055549', 'prince@gmail.com', 'Mocambique', 'MCidade', 'Maputo', 'Lulene', NULL, 'Distrito Urbano de KaMavota', '1104', NULL, 'processing', 'checking', 'transaction', 0, '2024-04-27 18:53:55', '2024-04-27 18:54:31', NULL),
(34, 14, '17,500.00', '0', '3,675.00', '21,175.00', 'prince Tomas', 'Thomas', '865055549', 'prince@gmail.com', 'Mocambique', 'MCidade', 'Maputo', 'Lulene', NULL, 'Distrito Municipal de KaTembe', '1104', NULL, 'processing', 'checking', 'mpesa', 0, '2024-04-27 18:55:12', '2024-04-27 20:09:28', NULL),
(35, 14, '14,500.00', '0', '3,045.00', '17,545.00', 'prince Tomas', 'Thomas', '865055549', 'prince@gmail.com', 'Mocambique', 'MCidade', 'Maputo', 'Lulene', NULL, 'Distrito Municipal de KaNyaka', '1104', NULL, 'processing', 'checking', 'mpesa', 0, '2024-04-27 19:56:42', '2024-04-27 20:12:47', NULL),
(36, 14, '25,500.00', '0', '5,355.00', '30,855.00', 'prince Tomas', 'Thomas', '865055549', 'prince@gmail.com', 'Mocambique', 'MCidade', 'Maputo', 'Lulene', NULL, 'Distrito Municipal de KaNyaka', '1104', NULL, 'packing', 'payed', 'mpesa', 0, '2024-04-27 20:04:08', '2024-05-24 10:10:27', NULL),
(37, 1, '13,800.00', '0', '2,898.00', '16,698.00', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Namaacha', '1104', NULL, 'processing', 'checking', 'transaction', 0, '2024-05-28 14:28:29', '2024-06-02 12:49:38', NULL),
(38, 11, '64,000.00', '0', '13,440.00', '77,440.00', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Namaacha', '1104', NULL, 'on hold', 'not valid', 'cod', 0, '2024-06-02 12:14:04', '2024-06-02 12:56:56', NULL),
(39, 15, '13,000.00', '0', '2,730.00', '15,730.00', 'Edson', 'Tomas', '842236192', 'donthimas54@gmail.com', 'Mocambique', 'Maputo', 'Mozambique', 'Hulene-B', NULL, 'Namaacha', '1104', NULL, 'on hold', 'not valid', 'cod', 0, '2024-06-02 13:00:26', '2024-06-02 16:15:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `payment_status` enum('pending','checking','not valid','not payed','payed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not payed',
  `status` enum('pending','processing','delivered','canceled','on hold','on the way','refunded','packing') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_payment_status_histories`
--

CREATE TABLE `order_payment_status_histories` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `payment_status` enum('pending','checking','not valid','not payed','payed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_status_histories`
--

CREATE TABLE `order_status_histories` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `status` enum('pending','processing','delivered','canceled','on hold','on the way','refunded','packing') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_status_histories`
--

INSERT INTO `order_status_histories` (`id`, `order_id`, `user_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 39, 1, 'processing', '2024-06-02 16:12:48', '2024-06-02 16:12:48', NULL),
(2, 39, 1, 'on hold', '2024-06-02 16:15:58', '2024-06-02 16:15:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `regular_price` decimal(8,2) DEFAULT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `SKU` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `stock_status` enum('instock','outofstock') COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `quantity` int UNSIGNED NOT NULL DEFAULT '10',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `related_voltage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_discount` tinyint(1) NOT NULL DEFAULT '0',
  `discount` decimal(8,2) DEFAULT NULL,
  `is_popular` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `SKU`, `status`, `stock_status`, `featured`, `quantity`, `image`, `images`, `category_id`, `capacity`, `total_weight`, `current`, `related_voltage`, `is_discount`, `discount`, `is_popular`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Xiaomi Redmi', 'xiaomi-redmi', 'Available. Released 2023, March 24', 'Dual SIM (Nano-SIM, dual stand-by),Android 12 or 13 (Go edition), MIUI\n', '6950.00', '6950.00', 'Xiaomi', 'active', 'instock', 1, 15, '[\"65cd0cccb826e.png\"]', NULL, 1, '32GB 2GB RAM', '192 g (6.77 oz)', 'Li-Po 5000 mAh, non-removable', NULL, 0, '0.00', 1, '2024-02-14 17:10:21', '2024-03-31 16:25:33', NULL),
(2, 'Redmi A2 ', 'redmi-a2', 'DUAL SIM', 'Android 12, Go Edition', '7250.00', '7250.00', 'Redmi A2 3ram', 'active', 'outofstock', 1, 15, '[\"65cd150313b57.png\",\"65cd150313f0c.png\",\"65cd150313fea.png\"]', NULL, 1, '64GB 3GB ram', NULL, '5.000 A', NULL, 0, '0.00', 1, '2024-02-14 19:31:15', '2024-03-31 16:31:25', NULL),
(3, 'Samsung A50', 'samsung-a50', '32MP Front Camera', '64MP+12MP+5MP+5MP Rear Camera', '25500.00', '25500.00', 'A50', 'active', 'instock', 0, 10, '[\"65cd2ed7856e8.png\"]', NULL, 4, '8GB RAM + 256GB ROM', NULL, '5000A', NULL, 0, '0.00', 1, '2024-02-14 21:21:27', '2024-03-31 16:32:15', NULL),
(4, 'Redmi Note12', 'redmi-note12', 'DUAL SIM', 'Android 13, up to Android 14', '13000.00', '13000.00', 'Redmi note12', 'active', 'instock', 0, 15, '[\"65cd32e1b9870.jpg\",\"65cd32e1b9b08.jpg\",\"65cd32e1b9bd3.jpg\"]', NULL, 1, '128GB 4ram', NULL, '5000A', '33w', 0, '0.00', 1, '2024-02-14 21:38:41', '2024-03-31 16:33:43', NULL),
(5, 'Redmi 13Ultra', 'redmi-13ultra', 'DUAL SIM', 'Camera 50MP\n', '64000.00', '64000.00', 'Redmi 13Ultra ', 'active', 'instock', 0, 20, '[\"65cd35fb5dc6b.jpg\",\"65cd35fb5ddf7.jpg\",\"65cd35fb5de9f.jpg\"]', NULL, 1, '256GB 12ram', NULL, '5000A', '90w ', 0, '0.00', 1, '2024-02-14 21:51:55', '2024-03-31 16:33:54', NULL),
(6, 'Redmi 10C ', 'redmi-10c', 'DUAL SI M', 'android 11, MIUI 13\nCamera 50MP ', '9200.00', '9200.00', 'Redmi 10C', 'active', 'instock', 0, 15, '[\"65ce49af5bf5e.jpg\",\"65ce49af5c474.jpg\",\"65ce49af5c5d6.jpg\"]', NULL, 1, '128GB 4ram', NULL, '5000A', NULL, 0, '0.00', 1, '2024-02-15 17:28:15', '2024-03-20 09:46:40', NULL),
(7, 'Redmi note11 pro', 'redmi-note11-pro', 'DUAL SIM', 'Camera 108MP', '17500.00', '17500.00', 'Redmi Note11 pro', 'active', 'instock', 0, 10, '[\"65ce4c6e1398d.jpg\",\"65ce4c6e13c01.jpg\",\"65ce4c6e13db9.jpg\"]', NULL, 1, '64GB 6ram', NULL, '5000A', '120w', 0, '0.00', 1, '2024-02-15 17:39:58', '2024-03-16 20:32:52', NULL),
(8, 'Infinix HOT30', 'infinix-hot30', 'DUAL SIM', 'Android 13\ncamera 50MP \n8MP frontal', '8600.00', '8600.00', 'Infinix HOT30', 'active', 'outofstock', 0, 10, '[\"65ce5034acd85.jpg\",\"65ce5034acf0f.jpg\"]', NULL, 6, '128GB 8ram', '196g ', ' 5000A', NULL, 0, '0.00', 1, '2024-02-15 17:56:04', '2024-03-16 20:17:17', NULL),
(9, 'Infinix NOTE30 pro', 'infinix-note30-pro', 'DUAL SIM ', 'Android 13\ncamera 64MP', '16300.00', '16300.00', 'Infinix HOT30 pro', 'active', 'instock', 0, 15, '[\"65ce5469997ad.jpg\",\"65ce54699994d.jpg\"]', NULL, 6, '256GB+8GBram', NULL, '5000A', NULL, 0, '0.00', 1, '2024-02-15 18:14:01', '2024-03-16 20:28:51', NULL),
(10, 'Infinix smart 7HD', 'infinix-smart-7hd', 'DUAL SIM', 'Android 12\ncamera 8MP', '7300.00', '7300.00', 'Infinix smart 7HD', 'active', 'instock', 0, 20, '[\"65ce59845d22d.jpg\",\"65ce59845d407.jpg\"]', NULL, 6, '64GB 2ram', '196.5g', '5000A', '10w', 0, '0.00', 1, '2024-02-15 18:35:48', '2024-03-16 20:24:13', NULL),
(11, 'Huawei P40', 'huawei-p40', 'DUAL SIM', 'Android 10\ncamera 50MP', '11600.00', '11600.00', 'Huawei P40', 'active', 'instock', 0, 15, '[\"65ce5c874f0f7.jpg\",\"65ce5c874f26d.jpg\"]', NULL, 2, '128GB+8ram', NULL, '3800A', '23w', 0, '0.00', 1, '2024-02-15 18:48:39', '2024-03-16 20:32:47', NULL),
(12, 'Huawei P30 pro', 'huawei-p30-pro', 'DUAL SIM', 'android 9.0, up to Android 10, EMUI 10\nCamera 40MP', '17200.00', '17200.00', 'Huawei P30 pro', 'active', 'outofstock', 0, 10, '[\"65ce753ba4040.jpg\",\"65ce753ba43d1.png\"]', NULL, 2, '128GB+6ram', NULL, '4200A', NULL, 0, '0.00', 1, '2024-02-15 20:34:03', '2024-03-16 21:11:39', NULL),
(13, 'Huawei Nova Y61', 'huawei-nova-y61', 'DUAL SIM', 'Camera 50MP', '12800.00', '12800.00', 'Huawei Nova Y61', 'active', 'instock', 0, 5, '[\"65ce77ff9f972.jpg\",\"65ce77ff9fb09.jpg\"]', NULL, 2, '64GB+3ram', '188g ', '5000A', '22.5w', 0, '0.00', 1, '2024-02-15 20:45:51', '2024-03-17 08:58:31', NULL),
(14, 'Huawei P60 pro', 'huawei-p60-pro', 'DUAL SIM', ' EMUI 13.1\nCamera 50MP', '72000.00', '72000.00', 'Huawei P60 pro', 'active', 'instock', 1, 5, '[\"65ce7bf1eba6c.jpg\",\"65ce7bf1ebbb7.jpg\"]', NULL, 2, '256GB+12 ram', '209g', '4700A', NULL, 0, '0.00', 1, '2024-02-15 21:02:41', '2024-03-16 20:29:46', NULL),
(15, 'HUAWEI Nova Y70 ', 'huawei-nova-y70', 'DUAL SIM,128GB+4GB ram', 'EMUI 12,48 MP High-Res Camera, f/1.8 aperture\n\n5 MP 120° Ultra-Wide Angle Camera, f/2.2 aperture\n\n2 MP Depth Camera, f/2.4 aperture', '13800.00', '13800.00', 'Huawei Nova Y70', 'active', 'instock', 1, 15, '[\"65d67af677738.jpg\"]', NULL, 2, '128GB+4GB ram', 'Approx.199g', '6000A', 'Max 22.5 W', 0, '0.00', 1, '2024-02-21 22:36:38', '2024-03-16 20:29:51', NULL),
(16, 'Huawei Y90', 'huawei-y90', 'DUAL SIM or SINGLE SIM,128GB+6ram', 'EMUI12,CAMERA Triple 50 MP,CAMERA front 8MP\n', '16500.00', '16500.00', 'Huawei Y90', 'active', 'instock', 1, 5, '[\"65d67e9676068.jpg\"]', NULL, 2, '128GB+6GB ram', '195g', '5000A', '40w', 0, '0.00', 1, '2024-02-21 22:52:06', '2024-03-16 20:12:28', NULL),
(17, 'Huawei honor x 8A', 'huawei-honor-x8a', 'DUAL SIM,128+8ram', '\nOperating System\nMagic UI 6.1 (based on Android 12）', '17500.00', '17500.00', 'Huawei honor x 8A', 'active', 'instock', 1, 10, '[\"65d6818d22f4b.jpg\"]', NULL, 2, '128GB+8GB ram', '179g', '4500a', '22.5W ', 0, '0.00', 1, '2024-02-21 23:04:45', '2024-03-17 08:58:21', NULL),
(18, 'Huawei Nova 9SE', 'huawei-nova-9se', 'DUAL SIM,128GB+6GB ram', '	Android 11, EMUI 12, no Google Play Services', '18200.00', '18200.00', 'Huawei Nova 9SE', 'active', 'instock', 1, 15, '[\"65d683dfdfb9c.jpg\"]', NULL, 2, '128GB+6GB ram', '', '4000A', '66w', 0, '0.00', 1, '2024-02-21 23:14:39', '2024-03-17 08:58:49', NULL),
(19, 'Teste teste', 'teste-teste', 'bhsadkbja', 'sndkjsan', '4545.00', '54545.00', 'model', 'active', 'instock', 0, 10, '[\"65dc27061e6ee.png\"]', NULL, 4, '55', '55', '55', '65', 0, '0.00', 0, '2024-02-26 05:52:06', '2024-02-26 05:53:33', NULL),
(21, 'Galaxy A04', 'galaxy-a04', 'DUAL SIM\n64GB+4GB ram', 'Android 12, up to Android 13, One UI Core 5.0', '8900.00', '8900.00', 'Galaxy A04', 'active', 'instock', 1, 10, '[\"65df9cd5c201d.jpg\"]', NULL, 4, '64GB+4GBram', '192 g', '5000a', NULL, 0, '0.00', 1, '2024-02-28 20:51:33', '2024-03-16 19:51:27', NULL),
(22, ' Galaxy A03 core', 'galaxy-a03-core', 'DUAL SIM\n32GB+2GB ram ', 'Released 2021,android 11', '7450.00', '7450.00', ' Galaxy A03 core', 'active', 'instock', 1, 5, '[\"65dfa875eb0ec.jpg\"]', NULL, 4, '32GB+2GB ram', '211g', '5000A', NULL, 0, '0.00', 1, '2024-02-28 21:41:09', '2024-04-18 14:00:54', '2024-04-18 14:00:54'),
(23, 'Galaxy A05s ', 'galaxya05s', 'DUAL SIM\n128GB+4GB ram', 'Android 13', '10800.00', '10800.00', 'Galaxy A05s ', 'active', 'outofstock', 1, 20, '[\"65dfaa53c6b3d.jpg\"]', NULL, 4, '128GB+4GB ram', '194 g', '5000A', NULL, 0, '0.00', 1, '2024-02-28 21:49:07', '2024-03-16 21:10:51', NULL),
(24, 'Galaxy A14', 'galaxy-a14', 'DUAL SIM\n128GB+4GB ram', 'Android 13, One UI Core 5', '11600.00', '11600.00', 'Galaxy A14', 'active', 'instock', 1, 15, '[\"65dfad15aedb0.png\"]', NULL, 4, '128GB+4GB ram', NULL, NULL, NULL, 0, '0.00', 1, '2024-02-28 22:00:53', '2024-03-17 08:55:08', NULL),
(25, 'Galaxy A23', 'galaxy-a23', 'DUAL SIM\n64GB+4GBram', 'Android 12, up to Android 14, One UI 6', '13900.00', '13900.00', 'Galaxy A23', 'active', 'instock', 1, 10, '[\"65dfaecee1481.jpg\"]', NULL, 4, '64GB+4GBram', '195g ', '5000mAh', '25v', 0, '0.00', 1, '2024-02-28 22:08:14', '2024-03-16 18:55:07', NULL),
(26, 'Galaxy A24', 'galaxy-a24', 'DUAL SIM\n128GB+8GB ram', 'Android 13.0', '16000.00', '16000.00', 'Galaxy A24', 'active', 'instock', 1, 5, '[\"65e10afcbc02b.jpg\"]', NULL, 4, '128GB+8GB ram', '195g', '5000mAh', NULL, 0, '0.00', 1, '2024-02-29 22:53:48', '2024-04-18 14:01:00', '2024-04-18 14:01:00'),
(27, 'Galaxy A34', 'galaxy-a34', 'DUAL SIM\n128GB+8GB ram', 'Android 13, up to Android 14, One UI 6', '19500.00', '19500.00', 'Galaxy A34', 'active', 'instock', 1, 10, '[\"65e10f106b724.jpg\",\"65e10f106b908.jpg\"]', NULL, 4, '128GB+8GB ram', '199g', '5000mAh', '25v', 0, '0.00', 1, '2024-02-29 23:11:12', '2024-03-17 08:55:25', NULL),
(28, 'Galaxy A53', 'galaxy-a53', 'DUAL SIM\n256B+8GB ram', 'Android 12, up to Android 14, One UI 6\nFingerprint', '26500.00', '26500.00', 'Galaxy A53', 'active', 'instock', 1, 5, '[\"65e111eed50f0.jpg\"]', NULL, 4, '256B+8GB ram', '189g', '5000mAh', '25v', 0, '0.00', 1, '2024-02-29 23:23:26', '2024-03-17 08:54:54', NULL),
(29, 'Galaxy A54', 'galaxy-a54', 'DUAL SIM\n256GB+8GB ram ', 'Android 13, up to Android 14, One UI 6', '26200.00', '26200.00', 'Galaxy A54', 'active', 'instock', 1, 5, '[\"65e113db9ef1a.jpg\"]', NULL, 4, '256GB+8GB ram', '202g', '5000mAh', '25v', 0, '0.00', 1, '2024-02-29 23:31:39', '2024-03-17 08:54:36', NULL),
(30, 'TestetRecWith user', 'testetrecwith-user', 'sdsdsd', 'dsdsds', '84545.00', '84545.00', 'MOdel', 'active', 'instock', 1, 25, '[\"65f5d45b7a8ef.png\"]', NULL, 5, '10', '1', '121', '22', 0, '0.00', 0, '2024-03-16 17:18:19', '2024-04-18 14:01:09', '2024-04-18 14:01:09');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additionalOrderInformation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `mode` enum('cod','card','paypal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','approved','declined','refunded') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR' COMMENT 'ADM for admin and USR for Normal User',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `utype`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@admin', NULL, '$2y$10$aL6A8YsMB8lMg6P2pYly5OSMXd1bjzH/YZkQz8uJrmD1yLlaCR6Xu', 'ADM', NULL, '2023-01-16 14:38:28', '2023-01-16 14:38:28', NULL),
(2, 'Edson Tomas', 'edson@mail.com', NULL, '$2y$10$BVgo.0yXMwEFfags.UmTY.3cjSQdcHGH.YtsazIRluBIs/Wy3msdG', 'USR', NULL, '2023-11-27 15:08:24', '2023-11-27 15:08:24', NULL),
(3, 'Arnaldo Tomas', 'radjathomas14@gmail.com', NULL, '$2y$10$USxMO9O/6Qy/nY8Jr5W/0ORvu9DzOTuroHMmLJFHmecI4jvYKvGf6', 'USR', NULL, '2023-11-28 16:28:42', '2023-11-28 16:28:42', NULL),
(4, 'Lotyme', 'lotyme@gmail.com', NULL, '$2y$10$VZlrS84Popp2uPCq1T5n0.nvfWEjfMyLB/RoS.1pqfPzAuHxQEn5a', 'ADM', NULL, '2023-12-03 17:13:07', '2023-12-03 17:13:07', NULL),
(5, 'Teste', 'teste@teste.com', NULL, '$2y$10$c06.HqYQT.zXru3jiWY/XezGlDhEIJGWjKTVgwmzCf7H/AC5RDs6W', 'USR', NULL, '2023-12-03 17:30:54', '2023-12-03 17:30:54', NULL),
(6, 'Ernesto Langa', 'langa@gmail.com', NULL, '$2y$10$fSK8sYPO8v9YCE3AYUszeOS2KvDHTOz1pM8PR7GOdj0NDXR91.rlq', 'USR', NULL, '2023-12-11 14:51:12', '2023-12-11 14:51:12', NULL),
(7, 'Edson Tomas', 'tomas@gmail.com', NULL, '$2y$10$dRYAvAhV7G2f7Sm852TDx.uUOlU7GfeoAoZn8YpaR.FWLuFNFZrN6', 'USR', NULL, '2024-02-14 17:26:49', '2024-02-14 17:26:49', NULL),
(8, 'Victor Manuel', 'Macucule222@gmail.com', NULL, '$2y$10$UNRJJnfBQ5ugP9gdTVdK3.LXbREpWs4E272ic59B7lnPTzcpI56.K', 'USR', NULL, '2024-02-18 13:53:35', '2024-02-18 13:53:35', NULL),
(9, 'Cizia Edson', 'cizia.marques@icloud.com', NULL, '$2y$10$CSVp1fqaomaG91MO35lVq.O6Ymud/m44lXzrfT6NoNtUsbHdVWeqe', 'USR', NULL, '2024-02-28 21:07:13', '2024-02-28 21:07:13', NULL),
(10, 'jorge test', 'jorge@test', NULL, '$2y$10$plNqNDeM/QZDmZbvC8UBbeUR0c8FqanE9.wMcvGEggYrrxxucTkZy', 'USR', NULL, '2024-03-03 18:46:10', '2024-03-03 18:46:10', NULL),
(11, 'Edson Tomas', 'donthimas54@gmail.com', NULL, '$2y$10$P1dR2Yk9/.SHX5HkxuwapeROWQ1T83v5b87ykLyw2/dFYhZVwTaSu', 'USR', NULL, '2024-03-16 14:05:34', '2024-03-16 14:05:34', NULL),
(12, 'Gino Gilberto', 'gino@gmail.com', NULL, '$2y$10$KZaUd1pbdPZKzSd4Co4PI.kOX7k/XrpYiqdzLCCno1bpflVbcb5pi', 'USR', NULL, '2024-03-17 19:18:33', '2024-03-17 19:18:33', NULL),
(13, 'Zenildo Nhabomba', 'zenildo.nhabomba@isutc.ac.mz', NULL, '$2y$10$05o0FUvmgItwu1/VHRns5.GezIq8uS60ckpo5QEfAHA4p7f24cJje', 'USR', NULL, '2024-04-09 19:28:32', '2024-04-09 19:28:32', NULL),
(14, 'prince Thomas', 'prince@gmail.com', NULL, '$2y$10$QuVJD6TbT9FYgrZVgFVN9ed2mTGbwEJefUy3hgf0A6PRA6ADFg4fO', 'USR', NULL, '2024-04-27 18:52:49', '2024-04-27 18:52:49', NULL),
(15, 'Nair Thomas', 'edsondeceliotomasreginaldo@gmail.com', NULL, '$2y$10$iHKeR3wtfEt5wT8MZdEWK./7/DR2mP3wlxw9N.7MGQiR1NGxKxXje', 'USR', NULL, '2024-06-02 12:59:13', '2024-06-02 12:59:13', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `confirm_payments`
--
ALTER TABLE `confirm_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `confirm_payments_order_id_foreign` (`order_id`),
  ADD KEY `confirm_payments_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_main_banners`
--
ALTER TABLE `home_main_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `order_payment_status_histories`
--
ALTER TABLE `order_payment_status_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_payment_status_histories_order_id_foreign` (`order_id`),
  ADD KEY `order_payment_status_histories_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_status_histories`
--
ALTER TABLE `order_status_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_status_histories_order_id_foreign` (`order_id`),
  ADD KEY `order_status_histories_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shippings_order_id_foreign` (`order_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `confirm_payments`
--
ALTER TABLE `confirm_payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_main_banners`
--
ALTER TABLE `home_main_banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_payment_status_histories`
--
ALTER TABLE `order_payment_status_histories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_status_histories`
--
ALTER TABLE `order_status_histories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `confirm_payments`
--
ALTER TABLE `confirm_payments`
  ADD CONSTRAINT `confirm_payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `confirm_payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_payment_status_histories`
--
ALTER TABLE `order_payment_status_histories`
  ADD CONSTRAINT `order_payment_status_histories_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_payment_status_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_status_histories`
--
ALTER TABLE `order_status_histories`
  ADD CONSTRAINT `order_status_histories_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_status_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shippings`
--
ALTER TABLE `shippings`
  ADD CONSTRAINT `shippings_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
