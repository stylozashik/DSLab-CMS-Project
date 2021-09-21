-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 10:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dslab_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_about_ones`
--

CREATE TABLE `home_about_ones` (
  `home_about_one_id` bigint(20) UNSIGNED NOT NULL,
  `home_about_one_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_about_one_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_about_ones`
--

INSERT INTO `home_about_ones` (`home_about_one_id`, `home_about_one_title`, `home_about_one_description`, `created_at`, `updated_at`) VALUES
(1, 'We Analyze & Visualize The Real Life Data For Incrasing The Companies Businesses', '<p><span style=\"color: rgb(58, 80, 95); font-family: Poppins, sans-serif; font-size: 15px; letter-spacing: 1px; background-color: rgb(238, 243, 250);\">Explore the latest data insights and strategied from top industry leaders. Gain a better understanding of your business and customers through data. Latest Search Trends. Year in Search Report. Google Search Insights.</span><br></p>', '2021-09-17 05:29:50', '2021-09-17 05:29:50'),
(2, 'We Analyze & Visualize The Real Life Data For Incrasing The Companies Businesses', '<p><span style=\"color: rgb(58, 80, 95); font-family: Poppins, sans-serif; font-size: 15px; letter-spacing: 1px; background-color: rgb(238, 243, 250);\">Explore the latest data insights and strategied from top industry leaders. Gain a better understanding of your business and customers through data. Latest Search Trends. Year in Search Report. Google Search Insights.</span><br></p>', '2021-09-17 05:30:26', '2021-09-17 05:30:26'),
(3, 'We Analyze & Visualize The Real Life Data For Incrasing The Companies Businesses', 'Explore the latest data insights and strategied from top industry leaders. Gain a better understanding of your business and customers through data. Latest Search Trends. Year in Search Report. Google Search Insights.', '2021-09-17 05:39:43', '2021-09-17 05:39:43'),
(4, 'We Analyze & Visualize The Real Life Data For Increasing The Companies Businesses', 'Explore the latest data insights and strategied from top industry leaders. Gain a better understanding of your business and customers through data. Latest Search Trends. Year in Search Report. Google Search Insights.', '2021-09-17 05:45:28', '2021-09-17 05:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `home_about_one_images`
--

CREATE TABLE `home_about_one_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `home_about_one_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_about_one_images`
--

INSERT INTO `home_about_one_images` (`id`, `created_at`, `updated_at`, `home_about_one_image`) VALUES
(1, '2021-09-17 06:03:11', '2021-09-17 06:03:11', 'media/About_one_Image1631880191.jpg'),
(2, '2021-09-17 06:07:29', '2021-09-17 06:07:29', 'media/About_one_Image1631880449.png');

-- --------------------------------------------------------

--
-- Table structure for table `home_about_twos`
--

CREATE TABLE `home_about_twos` (
  `home_about_two_id` bigint(20) UNSIGNED NOT NULL,
  `home_about_two_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_about_two_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_about_twos`
--

INSERT INTO `home_about_twos` (`home_about_two_id`, `home_about_two_title`, `home_about_two_description`, `created_at`, `updated_at`) VALUES
(1, 'To Data Driven Approch Data Visualization & Optimisation', '<p><span style=\"color: rgb(58, 80, 95); font-family: Poppins, sans-serif; font-size: 15px; letter-spacing: 1px; background-color: rgb(238, 243, 250);\">A data-driven approach is when decisions are based on analysis and interpretation of hard data rather than on observation. A data-driven approach ensures that solutions and plans are supported by sets of factual information, and not just hunches, feelings and anecdotal evidence.</span><br></p>', '2021-09-17 12:54:18', '2021-09-17 12:54:18'),
(2, 'To Data Driven Approch Data Visualization & Optimisation', '<p><span style=\"color: rgb(58, 80, 95); font-family: Poppins, sans-serif; font-size: 15px; letter-spacing: 1px; background-color: rgb(238, 243, 250);\">A data-driven approach is when decisions are based on analysis and interpretation of hard data rather than on observation. A data-driven approach ensures that solutions and plans are supported by sets of factual information, and not just hunches, feelings and anecdotal evidence.</span><br></p>', '2021-09-17 12:54:38', '2021-09-17 12:54:38'),
(3, 'To Data Driven Approch Data Visualization & Optimisation', '<p><span style=\"color: rgb(58, 80, 95); font-family: Poppins, sans-serif; font-size: 15px; letter-spacing: 1px; background-color: rgb(238, 243, 250);\">A data-driven approach is when decisions are based on analysis and interpretation of hard data rather than on observation. A data-driven approach ensures that solutions and plans are supported by sets of factual information, and not just hunches, feelings and anecdotal evidence.</span><br></p>', '2021-09-17 12:54:54', '2021-09-17 12:54:54'),
(4, 'To Data Driven Approch Data Visualization & Optimisation', 'A data-driven approach is when decisions are based on analysis and interpretation of hard data rather than on observation. A data-driven approach ensures that solutions and plans are supported by sets of factual information, and not just hunches, feelings and anecdotal evidence.', '2021-09-17 12:57:42', '2021-09-17 12:57:42'),
(5, 'To Data Driven Approach Data Mining, Visualization & Optimization', 'A data-driven approach is when decisions are based on analysis and interpretation of hard data rather than on observation. A data-driven approach ensures that solutions and plans are supported by sets of factual information, and not just hunches, feelings and anecdotal evidence.', '2021-09-17 13:01:24', '2021-09-17 13:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `home_about_two_images`
--

CREATE TABLE `home_about_two_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_about_two_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_about_two_images`
--

INSERT INTO `home_about_two_images` (`id`, `home_about_two_image`, `created_at`, `updated_at`) VALUES
(1, 'media/About_two_Image1631905813.png', '2021-09-17 13:10:13', '2021-09-17 13:10:13'),
(2, 'media/About_two_Image1631906093.jpg', '2021-09-17 13:14:53', '2021-09-17 13:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `home_banner_content_table`
--

CREATE TABLE `home_banner_content_table` (
  `home_banner_content_id` bigint(20) UNSIGNED NOT NULL,
  `home_banner_content_title_up` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_banner_content_title_middle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_banner_content_title_down` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_banner_content_subtitle` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_banner_content_table`
--

INSERT INTO `home_banner_content_table` (`home_banner_content_id`, `home_banner_content_title_up`, `home_banner_content_title_middle`, `home_banner_content_title_down`, `home_banner_content_subtitle`, `created_at`, `updated_at`) VALUES
(1, 'Upgrade', 'Your Business With', 'Data Scientific Solution', 'First time providing data service in Bangladesh, Powered By Data Science Lab of Daffodil International University, Dhaka, Bangladesh', '2021-09-16 15:02:48', '2021-09-16 15:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `home_banner_image_table`
--

CREATE TABLE `home_banner_image_table` (
  `home_banner_image_id` bigint(20) UNSIGNED NOT NULL,
  `home_banner_image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_banner_image_table`
--

INSERT INTO `home_banner_image_table` (`home_banner_image_id`, `home_banner_image_url`, `created_at`, `updated_at`) VALUES
(1, 'media/Banner_Image1631829484.jpg', '2021-09-16 15:58:04', '2021-09-16 15:58:04'),
(2, 'media/Banner_Image1631829775.jpg', '2021-09-16 16:02:55', '2021-09-16 16:02:55'),
(3, 'media/Banner_Image1631829895.png', '2021-09-16 16:04:55', '2021-09-16 16:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `Logo`, `created_at`, `updated_at`) VALUES
(1, 'media/Logo1631906873.png', '2021-09-17 13:27:53', '2021-09-17 13:27:53'),
(2, 'media/Logo1631906893.png', '2021-09-17 13:28:13', '2021-09-17 13:28:13'),
(3, 'media/Logo1631907084.png', '2021-09-17 13:31:24', '2021-09-17 13:31:24'),
(4, 'media/Logo1631907098.png', '2021-09-17 13:31:38', '2021-09-17 13:31:38'),
(5, 'media/Logo1631907174.png', '2021-09-17 13:32:54', '2021-09-17 13:32:54');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_09_16_194213_home_banner_content_table', 1),
(3, '2021_09_16_201247_home_banner_image_table', 1),
(5, '2021_09_17_110608_create_home_about_ones_table', 2),
(6, '2021_09_17_115010_create_home_about_one_images_table', 3),
(7, '2021_09_17_184509_create_home_about_twos_table', 4),
(8, '2021_09_17_190303_create_home_about_two_images_table', 5),
(9, '2021_09_17_191855_create_logos_table', 6),
(10, '2021_09_21_064909_create_teams_table', 7);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `Name`, `Designation`, `Facebook`, `Twitter`, `Linkedin`, `Image`, `created_at`, `updated_at`) VALUES
(2, 'Ashikur Rahaman', 'Web & Data Science Enthusiast', 'https://www.facebook.com/ashikur.rahaman99/', 'https://twitter.com/ashikur_swe', 'https://www.linkedin.com/in/ashikur-rahaman-bd/', 'media/Ashikur Rahaman1632210119.jpg', '2021-09-21 01:41:59', '2021-09-21 01:41:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_about_ones`
--
ALTER TABLE `home_about_ones`
  ADD PRIMARY KEY (`home_about_one_id`);

--
-- Indexes for table `home_about_one_images`
--
ALTER TABLE `home_about_one_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_about_twos`
--
ALTER TABLE `home_about_twos`
  ADD PRIMARY KEY (`home_about_two_id`);

--
-- Indexes for table `home_about_two_images`
--
ALTER TABLE `home_about_two_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banner_content_table`
--
ALTER TABLE `home_banner_content_table`
  ADD PRIMARY KEY (`home_banner_content_id`);

--
-- Indexes for table `home_banner_image_table`
--
ALTER TABLE `home_banner_image_table`
  ADD PRIMARY KEY (`home_banner_image_id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_about_ones`
--
ALTER TABLE `home_about_ones`
  MODIFY `home_about_one_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_about_one_images`
--
ALTER TABLE `home_about_one_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_about_twos`
--
ALTER TABLE `home_about_twos`
  MODIFY `home_about_two_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_about_two_images`
--
ALTER TABLE `home_about_two_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_banner_content_table`
--
ALTER TABLE `home_banner_content_table`
  MODIFY `home_banner_content_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_banner_image_table`
--
ALTER TABLE `home_banner_image_table`
  MODIFY `home_banner_image_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
