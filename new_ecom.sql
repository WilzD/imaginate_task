-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 06:27 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `prod_id`, `prod_qty`, `created_at`, `updated_at`) VALUES
(1, '3', '6', '1', '2023-06-26 04:13:48', '2023-06-26 04:13:48'),
(2, '3', '4', '1', '2023-06-26 04:16:47', '2023-06-26 04:16:47'),
(3, '1', '6', '1', '2023-07-11 02:12:06', '2023-07-11 02:12:06'),
(4, '3', '8', '1', '2023-07-11 02:28:20', '2023-07-11 02:28:20'),
(5, '3', '7', '1', '2023-07-11 02:43:18', '2023-07-11 02:43:18');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_descrip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_descrip`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(6, 'ELECTRONICS', 'ELECTRONICS', 'DJI Avata\r\nFirst person view drones have really taken off recently. Allowing you to put on a headset and fly a drone from a first person view, these unique devices are the closest you can feel to flying like a bird. DJI has released its latest version of this technology known as the DJI Avata. It is made t', 0, 1, '1687533301.jfif', 'ELECTRONICS', 'now with ELECTRONICS features', 'ELECTRONICS', '2023-06-20 10:37:34', '2023-06-23 11:51:12'),
(7, 'MOBILE PHONES', 'mobile phones', 'Treat yourself to a new Mobile Phone\r\nExperience the world at your fingertips! Work, socialise, book a ride, play games, listen to music, watch your favourite shows, take a photo, or simply make a call! Buy a Mobile Phone from Croma that does it all and then some.', 0, 1, '1687532395.jpg', 'mobile phones', 'mobile phones', 'mobile phones', '2023-06-23 09:29:55', '2023-06-23 11:51:48'),
(8, 'MENS STYLING', 'MENS STYLING', 'The Gentleman\'s Gazette have been a perennial top 5 over the years. Sven Raphael Schneider and team have really stepped up their game this year, earning the top spot in our rankings. The Gentleman\'s Gazetteprovides men\'s style enthusiasts the most detailed articles on classic mens…', 0, 1, '1687533144.jfif', 'MENS STYLING', 'MENS STYLING', 'MENS STYLING', '2023-06-23 09:42:24', '2023-06-23 11:52:02'),
(9, 'WOMENS STYLING', 'WOMENS STYLING', 'You probably know someone who dresses in a preppy style. You may know someone who seems to have a professional style. Perhaps you’ve got a friend who seems to wear a glamorous style. There are many different fashion styles for women out there because there are so many different ways to create a look.', 0, 1, '1687533622.jfif', 'WOMENS STYLING', 'WOMENS STYLING', 'WOMENS STYLING', '2023-06-23 09:50:22', '2023-06-23 11:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_15_161446_create_categories_table', 2),
(6, '2023_06_15_162654_create_categories_table', 3),
(7, '2023_06_21_044646_create_products_table', 4),
(8, '2023_06_24_155650_create_cart_table', 5),
(9, '2023_06_24_160905_create_carts_table', 6),
(10, '2023_07_14_124612_create_roles_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cate_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `tax`, `status`, `trending`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(4, 6, 'oppo f9 pro', 'mobile', '6.6 inch display', 'best camera', '19990', '19990', '1687458186.jpg', '5', '18', 0, 1, 'oppo', 'oppo', 'oppo', '2023-06-22 12:53:06', '2023-07-14 04:25:41'),
(6, 7, 'REDMI NOTE 9 PRO', 'REDMI NOTE 9 PRO', 'best value phone', '48MP rear camera with ultra-wide, super macro, portrait, night mode, 960fps slowmotion, AI scene recognition, pro color, HDR, pro mode | 13MP facing camera 16.9418 centimeters (6.67-inch) FHD+ full screen dot display LCD multi-touch capacitive touchscreen with 2400 x 1080 pixels resolution, 400 ppi pixel density and 20:9 aspect ratio | 2.5D curved glass Android v10 operating system with 2.3GHz Qualcomm Snapdragon 720G with 8nm octa core processor Memory, Storage & SIM: 4GB RAM | 64GB internal memory expandable up to 512GB with dedicated SD card slot | Dual SIM (nano+nano) dual-standby (4G+4G) 5020mAH lithium-polymer large battery providing talk-time of 29 hours and standby time of 492 hours | 18W fast charger in-box and Type-C connectivity', '14999', '12599', '1687532519.webp', '10', '18', 1, 1, 'xiomi redmi', 'xiomi redmi', 'xiomi redmi', '2023-06-23 09:31:59', '2023-06-23 09:31:59'),
(7, 7, 'REDMI NOTE 10 PRO', 'REDMI NOTE 10 PRO', 'best value phone', '48MP rear camera with ultra-wide, super macro, portrait, night mode, 960fps slowmotion, AI scene recognition, pro color, HDR, pro mode | 13MP facing camera 16.9418 centimeters (6.67-inch) FHD+ full screen dot display LCD multi-touch capacitive touchscreen with 2400 x 1080 pixels resolution, 400 ppi pixel density and 20:9 aspect ratio | 2.5D curved glass Android v10 operating system with 2.3GHz Qualcomm Snapdragon 720G with 8nm octa core processor Memory, Storage & SIM: 4GB RAM | 64GB internal memory expandable up to 512GB with dedicated SD card slot | Dual SIM (nano+nano) dual-standby (4G+4G) 5020mAH lithium-polymer large battery providing talk-time of 29 hours and standby time of 492 hours | 18W fast charger in-box and Type-C connectivity', '16999', '15599', '1687532677.jpg', '10', '18', 1, 1, 'redmi phone', 'redmi phone', 'redmi phone', '2023-06-23 09:34:37', '2023-06-23 09:34:37'),
(10, 6, 'iphone', 'iphone', '11pro', 'iphone', '60000', '58900', '1689398325.jpg', '10', '18', 1, 1, 'iphone', 'iphone', 'iphone', '2023-07-14 23:48:45', '2023-07-14 23:48:45'),
(11, 8, 'jeans', 'jeans', 'jeans', 'jeans', '2000', '1800', '1689399087.jfif', '10', '18', 1, 1, 'jeans', 'jeans', 'jeans', '2023-07-15 00:01:27', '2023-07-15 00:01:27'),
(12, 6, 'computer', 'computer', 'computer', 'computer', '50000', '47000', '1689409088.jfif', '10', '18', 1, 1, 'computer', 'computer', 'computer', '2023-07-15 02:48:08', '2023-07-15 02:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'prodManager@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'orderManager@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  `role_as` tinyint(4) DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'WILSON DEO', 'wilsondynamic3@gmail.com', NULL, '$2y$10$nhcaQsLdF9StcOGt66Qmqe8iUW5eIzpeXmP9obs.m86hnNyoEYqsm', 1, NULL, '2023-06-14 01:46:56', '2023-06-14 01:46:56'),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$eKNjQ3tgG3UmsKJWUg/64eoUBQ1gnYauJidiNIxvMdT94KvTZqCNe', 0, NULL, '2023-06-14 02:48:11', '2023-06-14 02:48:11'),
(5, 'arun', 'productManager@gmail.com', NULL, '$2y$10$6uaAqICq4dX1oswRGANwUe7n1PzLmYh7tXz73KZhMBfPYkQBk0hRy', 2, NULL, '2023-07-14 08:46:05', '2023-07-14 08:46:05'),
(6, 'user', 'users@gmail.com', NULL, '$2y$10$7/87BX27ppRHoTURPWSQKeCCd.pHlego5/wydI3gJ9uydpfdDqgGe', 0, NULL, '2023-07-15 03:09:38', '2023-07-15 03:09:38'),
(7, 'user', 'user4@gmail.com', NULL, '$2y$10$0FVUV2fQYR1cfXXEhP6W6eWvU8TUGJmuct6A6jf1pQ79fTJmJ8/rO', 0, NULL, '2023-07-15 03:10:54', '2023-07-15 03:10:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
