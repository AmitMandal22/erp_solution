-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 10:15 PM
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
-- Database: `erp_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 = inactive, 1 = active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `logo`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Company 1', 'company1@example.com', NULL, 'http://example.com/company1', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(2, 'Company 2', 'company2@example.com', NULL, 'http://example.com/company2', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(3, 'Company 3', 'company3@example.com', NULL, 'http://example.com/company3', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(4, 'Company 4', 'company4@example.com', NULL, 'http://example.com/company4', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(5, 'Company 5', 'company5@example.com', NULL, 'http://example.com/company5', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(6, 'Company 6', 'company6@example.com', NULL, 'http://example.com/company6', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(7, 'Company 7', 'company7@example.com', NULL, 'http://example.com/company7', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(8, 'Company 8', 'company8@example.com', NULL, 'http://example.com/company8', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(9, 'Company 9', 'company9@example.com', NULL, 'http://example.com/company9', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(10, 'Company 10', 'company10@example.com', NULL, 'http://example.com/company10', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(11, 'Company 11', 'company11@example.com', NULL, 'http://example.com/company11', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(12, 'Company 12', 'company12@example.com', NULL, 'http://example.com/company12', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(13, 'Company 13', 'company13@example.com', NULL, 'http://example.com/company13', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(14, 'Company 14', 'company14@example.com', NULL, 'http://example.com/company14', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(15, 'Company 15', 'company15@example.com', NULL, 'http://example.com/company15', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(16, 'Company 16', 'company16@example.com', NULL, 'http://example.com/company16', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(17, 'Company 17', 'company17@example.com', NULL, 'http://example.com/company17', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(18, 'Company 18', 'company18@example.com', NULL, 'http://example.com/company18', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(19, 'Company 19', 'company19@example.com', NULL, 'http://example.com/company19', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(20, 'Company 20', 'company20@example.com', NULL, 'http://example.com/company20', 1, '2024-04-10 16:55:32', '2024-04-10 16:55:32'),
(21, 'ABC Company', 'abc@gmail.com', NULL, 'https://www.abcexplore.com', 1, '2024-04-13 04:01:28', '2024-04-13 04:01:28'),
(22, 'AAE Company', 'aae@gmail.com', 'logos/p5FVcEvsOFz3FT5mzNIBajCLK3kbgupIR3CYiyyS.jpg', 'https://www.aaeexplore.com', 1, '2024-04-13 04:11:39', '2024-04-15 06:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = no, 1 = yes',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 = inactive, 1 = active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`, `company_id`, `is_admin`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Admin', 'User Company 1', 'admin@company1.com', '1234567895667', '$2y$12$COhktWBfSdQD3/dvftFXaefVzoCzimI8pRRGqsdacZgJzVEpI4i0K', 1, 1, 1, '2024-04-10 17:16:17', '2024-04-10 17:16:17'),
(5, 'User', 'Company 1', 'employee@company1.com', '1234567891917', '$2y$12$dBTG9E3WKhQsRCsmRYF8ve4EV8hHBxtj3.BsOJteOuy9n6EnEXrja', 1, 0, 1, '2024-04-10 17:16:17', '2024-04-10 17:16:17'),
(6, 'Admin', 'User Company 2', 'admin@company2.com', '1234567893173', '$2y$12$lRUhFTtmrgmML8Yn6ZPsy.dLQnqOwe1d253QHtOPXaLhdbvJoIgWm', 2, 1, 1, '2024-04-10 17:16:18', '2024-04-10 17:16:18'),
(7, 'User', 'Company 2', 'employee@company2.com', '1234567892780', '$2y$12$ec5KxRYhzw25.AjD/KwHKulzCYEjhiZ1WSggcvrcAIFNvCxEnWNRm', 2, 0, 1, '2024-04-10 17:16:18', '2024-04-10 17:16:18'),
(8, 'Admin', 'User Company 3', 'admin@company3.com', '1234567894495', '$2y$12$yOS19jpqp2Gg8Jv90IdTB.Emh6DXHw1r/543USjfrw8Vp4gZ/JlOa', 3, 1, 1, '2024-04-10 17:16:18', '2024-04-10 17:16:18'),
(9, 'User', 'Company 3', 'employee@company3.com', '1234567899075', '$2y$12$ORsS6axnR75osVTSg9AHiO6uGPqN8Gw/YcE3klQC1x3IG56bLVwne', 3, 0, 1, '2024-04-10 17:16:18', '2024-04-10 17:16:18'),
(10, 'Admin', 'User Company 4', 'admin@company4.com', '1234567897710', '$2y$12$jhSld9xnlOG0gZSAoM6XC.Ly8ddR1h0KxtuK2SMH6xykshjsU1nsq', 4, 1, 1, '2024-04-10 17:16:19', '2024-04-10 17:16:19'),
(11, 'User', 'Company 4', 'employee@company4.com', '1234567894277', '$2y$12$0SFhHFwppFLK0yqvwqIU1ec0j0U7Lk1lg3vsFPqGUttS/W5TSv29.', 4, 0, 1, '2024-04-10 17:16:19', '2024-04-10 17:16:19'),
(12, 'Admin', 'User Company 5', 'admin@company5.com', '1234567891737', '$2y$12$PbHlWJdj5hMKm3ovq5TAFO18XhA.mAs/LqOd1sWRd.QvaFCT1bca.', 5, 1, 1, '2024-04-10 17:16:19', '2024-04-10 17:16:19'),
(13, 'User', 'Company 5', 'employee@company5.com', '1234567899864', '$2y$12$DrnfcPTnIGZ/6sdUr0zOf.K8v7upgzQNdXY5c/5aCBEPGmxo.clPm', 5, 0, 1, '2024-04-10 17:16:19', '2024-04-10 17:16:19'),
(14, 'Admin', 'User Company 6', 'admin@company6.com', '1234567899394', '$2y$12$AMZX4auvQ5uHhRToyrwkOuPfvnJaQ/mAMX8HF6UtwZyzZ5A9cVT1q', 6, 1, 1, '2024-04-10 17:16:20', '2024-04-10 17:16:20'),
(15, 'User', 'Company 6', 'employee@company6.com', '1234567897331', '$2y$12$J0hnAZ85x5/cLsR0M0G5c.pobgxU5SWIpup2v/Ture3NXSRxHT66S', 6, 0, 1, '2024-04-10 17:16:20', '2024-04-10 17:16:20'),
(16, 'Admin', 'User Company 7', 'admin@company7.com', '1234567898453', '$2y$12$H.q3bPtAl1LT6qsqyKAwHe1IFjfbGBAFYp5.CcdwufC8WiSCKt7eG', 7, 1, 1, '2024-04-10 17:16:20', '2024-04-10 17:16:20'),
(17, 'User', 'Company 7', 'employee@company7.com', '1234567898136', '$2y$12$8qmLVNC3DjzbAztRnIbNo.E2VyAhxNe0KmQQgT7tlWrT0YC/v/vIe', 7, 0, 1, '2024-04-10 17:16:20', '2024-04-10 17:16:20'),
(18, 'Admin', 'User Company 8', 'admin@company8.com', '1234567895055', '$2y$12$Ukm/P2Rk.nHWjhgFBswUrOnb0E6.rw90v0wO.pb/yIeflVeAodz3u', 8, 1, 1, '2024-04-10 17:16:21', '2024-04-10 17:16:21'),
(19, 'User', 'Company 8', 'employee@company8.com', '1234567895220', '$2y$12$2r5ueaDm7ir52l8UDZXxX.tEFg.CxeKBYI0kfS05R2oJWFHAXpd0y', 8, 0, 1, '2024-04-10 17:16:21', '2024-04-10 17:16:21'),
(20, 'Admin', 'User Company 9', 'admin@company9.com', '1234567892642', '$2y$12$QUbPDcllaVEn3PfUqx9/8eiu17eZehznTy/iFpGqKArl/bj9zjBiK', 9, 1, 1, '2024-04-10 17:16:21', '2024-04-10 17:16:21'),
(21, 'User', 'Company 9', 'employee@company9.com', '1234567894980', '$2y$12$/wivcNFUuORFb6HYteVoceapK0I1.evSoNX8QDe6dg8rOGOMM2JwG', 9, 0, 1, '2024-04-10 17:16:21', '2024-04-10 17:16:21'),
(22, 'Admin', 'User Company 10', 'admin@company10.com', '1234567897360', '$2y$12$fOjp3cFe5ZOf10wGB/bUT.yjVB01LVxSkMGNGATz8rlj4agO2CAtC', 10, 1, 1, '2024-04-10 17:16:22', '2024-04-10 17:16:22'),
(23, 'User', 'Company 10', 'employee@company10.com', '1234567894185', '$2y$12$hDpEEConr7zfnhthecAqQeuA0D9MFHJmCsjNP5ovQMcC.GdPAKI4e', 10, 0, 1, '2024-04-10 17:16:22', '2024-04-10 17:16:22'),
(24, 'Admin', 'User Company 11', 'admin@company11.com', '1234567895701', '$2y$12$3hcDeFKzEy9O2gVgOselbOPE3AwNDdenQ1TRAzoErX5PZY0AUVZsi', 11, 1, 1, '2024-04-10 17:16:22', '2024-04-10 17:16:22'),
(25, 'User', 'Company 11', 'employee@company11.com', '1234567892567', '$2y$12$wPkggqaZjWbXLRp4YCLFr.2DnbW6ouM6hLtO9r5G33iNtybqx1awm', 11, 0, 1, '2024-04-10 17:16:22', '2024-04-10 17:16:22'),
(26, 'Admin', 'User Company 12', 'admin@company12.com', '1234567898824', '$2y$12$D5kETF.uq7kZOefvM/8deeXFt764mTRVHUkdC/mLxu//IQNRsstxG', 12, 1, 1, '2024-04-10 17:16:22', '2024-04-10 17:16:22'),
(27, 'User', 'Company 12', 'employee@company12.com', '1234567891635', '$2y$12$eaiuvv0xF8/slZ0a7dSvduDdwBuulazKBRPVoEmSw3WhBfM6vU942', 12, 0, 1, '2024-04-10 17:16:23', '2024-04-10 17:16:23'),
(28, 'Admin', 'User Company 13', 'admin@company13.com', '1234567891499', '$2y$12$axd1aQDUscBFi/G8XhBuOuUwOzxWZZrY3eejD3Q033epK5jUl4lra', 13, 1, 1, '2024-04-10 17:16:23', '2024-04-10 17:16:23'),
(29, 'User', 'Company 13', 'employee@company13.com', '1234567892574', '$2y$12$QsA5Z3N1dUiMlk6irbN.S.B4l/CSd9sboXaXwEk3yKuDzIox.kyiC', 13, 0, 1, '2024-04-10 17:16:23', '2024-04-10 17:16:23'),
(30, 'Admin', 'User Company 14', 'admin@company14.com', '1234567893087', '$2y$12$RsP64rAwSMEw50GRteqrsu6hTz9rShczMFuXziiQlVrny3Ck26bly', 14, 1, 1, '2024-04-10 17:16:23', '2024-04-10 17:16:23'),
(31, 'User', 'Company 14', 'employee@company14.com', '1234567893353', '$2y$12$r7sv/vOWOUwgaV3z7kirrOAOzYVwWwCb0uK0XqApi0jPBC3PuUXM2', 14, 0, 1, '2024-04-10 17:16:24', '2024-04-10 17:16:24'),
(32, 'Admin', 'User Company 15', 'admin@company15.com', '1234567895113', '$2y$12$5VMqHybHi5ZbM7.K5YFzCOVzLFnKhi.lp5mrE.uwahRomSvcML5/m', 15, 1, 1, '2024-04-10 17:16:24', '2024-04-10 17:16:24'),
(33, 'User', 'Company 15', 'employee@company15.com', '1234567894675', '$2y$12$2c3aMCSvHRFvXXiOgJmvaOBCLEbhcA3hCD1LGym2HIYuQMJDRTGyK', 15, 0, 1, '2024-04-10 17:16:24', '2024-04-10 17:16:24'),
(34, 'Admin', 'User Company 16', 'admin@company16.com', '1234567892070', '$2y$12$EdGDHYbqJoHPlUxfzRgiC.Igv/oMRGEzV7gvOKZz8E07mLA92umbK', 16, 1, 1, '2024-04-10 17:16:24', '2024-04-10 17:16:24'),
(35, 'User', 'Company 16', 'employee@company16.com', '1234567899914', '$2y$12$NAM2cJcptc2r7JOl.k5nVuy5VqPFc3P0QEQom1Vy3cZgANSXYbULK', 16, 0, 1, '2024-04-10 17:16:25', '2024-04-10 17:16:25'),
(36, 'Admin', 'User Company 17', 'admin@company17.com', '1234567894317', '$2y$12$jQ9Hmq.YcvZnFt4hu7Ownua8nhbV1mp8xegRPLaeiMn/mIJtRNhUy', 17, 1, 1, '2024-04-10 17:16:25', '2024-04-10 17:16:25'),
(37, 'User', 'Company 17', 'employee@company17.com', '1234567893602', '$2y$12$3qPaB9j/ckuS0TrJjP/y4.9Oy3JI6QCfH9byX.P2RrWn5xTWSTYJK', 17, 0, 1, '2024-04-10 17:16:25', '2024-04-10 17:16:25'),
(38, 'Admin', 'User Company 18', 'admin@company18.com', '1234567895764', '$2y$12$br5s3Jh94T5tWN9LeRGbOeR5hzBf0ovU6rBZ0QTTq3ZrosWUspFzS', 18, 1, 1, '2024-04-10 17:16:25', '2024-04-10 17:16:25'),
(39, 'User', 'Company 18', 'employee@company18.com', '1234567898490', '$2y$12$uqSWI3x.31R1HGRd5FqNmOVlNk2J2oXhphOFeLO4iAVwlyYmvPYXG', 18, 0, 1, '2024-04-10 17:16:26', '2024-04-10 17:16:26'),
(40, 'Admin', 'User Company 19', 'admin@company19.com', '1234567896897', '$2y$12$ao22EeCD7S2oxbksMUS3we5tlfn884muPfbZpDrKse4r6z7wEv9nG', 19, 1, 1, '2024-04-10 17:16:26', '2024-04-10 17:16:26'),
(41, 'User', 'Company 19', 'employee@company19.com', '1234567897216', '$2y$12$Rg73edHVmjkUvNZFuX.eIuxnAbn57TWyIlgtChp73T73yJPDxzZH.', 19, 0, 1, '2024-04-10 17:16:26', '2024-04-10 17:16:26'),
(42, 'Admin', 'User Company 20', 'admin@company20.com', '1234567893903', '$2y$12$qNwIUCl2.vYtXTUuH/USA.EiejJJgzMOcO97vPEvfEmADhwY7Soy.', 20, 1, 1, '2024-04-10 17:16:26', '2024-04-10 17:16:26'),
(43, 'User', 'Company 20', 'employee@company20.com', '1234567894175', '$2y$12$pxPkIZYTNKkuuxhlK3j/xesozgKfBqN/Jr1Jqnn894RmHxfEPMILW', 22, 0, 0, '2024-04-10 17:16:27', '2024-04-15 07:08:49'),
(44, 'Amit', 'Mandal', 'test@gmail.com', '1234567890', '$2y$12$eMwlD8/YKegokxAgUz94SO.ftpTa1XWM6BNi8iry.ahnrZ.5OsLJC', 22, 1, 1, '2024-04-13 05:34:03', '2024-04-13 05:34:03'),
(45, 'Test', 'User', 'test1@gmail.com', '1122112211', '$2y$12$Y5a8VlT6NkR3kfhLsgyyc.gK0kDRnRHFzgqYQyJ7xYOJXrXlcdBtO', 22, 0, 1, '2024-04-13 07:47:17', '2024-04-13 07:47:17');

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
(5, '2024_04_10_214133_create_companies_table', 1),
(6, '2024_04_10_214149_create_employees_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = no, 1 = yes',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 = inactive, 1 = active',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `is_admin`, `status`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'User', 'admin@admin.com', '$2y$12$nkLVOMaXaAmnf/e1AYw8w.0n9dFF4nYBwXw/S0aD9Vjij0S.ty3zy', 1, 1, '2024-04-10 16:51:12', 'E2x1jcpZZ65Y9RcB9MbhcYiifQNTNcfi2CQ4hjNaRBH33N4IOfD4wwrop8qA', '2024-04-10 16:51:12', '2024-04-10 16:51:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD UNIQUE KEY `employees_phone_unique` (`phone`),
  ADD KEY `employees_company_id_foreign` (`company_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
