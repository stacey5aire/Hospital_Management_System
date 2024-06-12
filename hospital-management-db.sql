-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 08:52 AM
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
-- Database: `hospital-management-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `doctor` varchar(255) DEFAULT NULL,
  `date` varchar(255) NOT NULL,
  `fee` varchar(255) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `doctor_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `doctor`, `date`, `fee`, `message`, `status`, `user_id`, `doctor_id`, `created_at`, `updated_at`) VALUES
(9, 'MD Abdullah Al', 'shakil3300bd@gmail.com', '01517868256', 'Abu Shaleh', '2023-08-24', '700', 'ghfuidjfnf', 'Completed', '1', '2', '2023-08-21 15:39:56', '2023-08-21 16:53:09'),
(13, 'MD SABBIR AHMED', 'shakil3300bd@gmail.com', '01517868256', 'Abu Shaleh', '2023-08-24', '700', 'Hello', 'Completed', '2', '2', '2023-08-21 19:23:45', '2023-08-21 19:24:16'),
(15, 'Test', 'shakil3300bd@gmail.com', '01716610045', 'Abu Shaleh', '2023-08-26', '700', 'Hello', 'Completed', '2', '2', '2023-08-24 13:39:22', '2023-08-24 13:40:40'),
(17, 'User', 'user@gmail.com', '0757291160', 'Ahaabwe Derrick tROALLLL', '2024-04-10', '5000000000', 'I am sick', 'In progress', '2', '10', '2024-04-24 03:32:06', '2024-04-24 03:32:06'),
(18, 'User', 'user@gmail.com', '0757291160', 'Joan', '2024-05-02', '1000000', 'I need my eyes fixed', 'In progress', '2', '15', '2024-04-24 03:38:25', '2024-04-24 03:38:25'),
(19, 'Tahia', 'tahia@gmail.com', '0757291160', 'Moses', '2024-05-10', '5000000000', 'I am sick', 'In progress', '102', '17', '2024-04-24 03:41:09', '2024-04-24 03:41:09');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_histories`
--

CREATE TABLE `appointment_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `fee` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_histories`
--

INSERT INTO `appointment_histories` (`id`, `username`, `email`, `phone`, `user_id`, `doctor`, `doctor_id`, `fee`, `message`, `status`, `appointment_id`, `created_at`, `updated_at`) VALUES
(1, 'MD. Abdulllah Al Shakil', 'shakil3300bd@gmail.com', '01517868256', 1, 'Md Abu Sama', 1, '500', 'hgsdhjhsdjdg', 'Completed', 12, '2023-08-21 16:43:34', '2023-08-21 16:43:34'),
(2, 'MD Abdullah Al', 'shakil3300bd@gmail.com', '01517868256', 1, 'Abu Shaleh', 2, '700', 'ghfuidjfnf', 'Cancelled By Doctor', 9, '2023-08-21 16:43:44', '2023-08-21 19:11:44'),
(3, 'MD. Abdulllah Al Shakil', 'shakil3300bd@gmail.com', '01517868256', 1, 'Md Abu Sama', 1, '500', 'hgsdhjhsdjdg', 'Completed', 12, '2023-08-21 16:45:02', '2023-08-21 16:45:02'),
(4, 'MD. Abdulllah Al Shakil', 'shakil3300bd@gmail.com', '01517868256', 1, 'Md Abu Sama', 1, '500', 'hgsdhjhsdjdg', 'Completed', 12, '2023-08-21 16:46:57', '2023-08-21 16:46:57'),
(5, 'MD Abdullah Al', 'shakil3300bd@gmail.com', '01517868256', 1, 'Abu Shaleh', 2, '700', 'ghfuidjfnf', 'Cancelled By Doctor', 9, '2023-08-21 16:53:09', '2023-08-21 19:14:45'),
(6, 'MD. Abdulllah Al Shakil', 'shakil3300bd@gmail.com', '01517868256', 1, 'Md Abu Sama', 1, '500', 'hgsdhjhsdjdg', 'Completed', 12, '2023-08-21 17:21:03', '2023-08-21 17:21:03'),
(7, 'MD. Abdulllah Al Shakil', 'shakil3300bd@gmail.com', '01517868256', 1, 'Md Abu Sama', 1, '500', 'hgsdhjhsdjdg', 'Completed', 12, '2023-08-21 19:20:28', '2023-08-21 19:20:28'),
(8, 'MD SABBIR AHMED', 'shakil3300bd@gmail.com', '01517868256', 2, 'Abu Shaleh', 2, '700', 'Hello', 'Cancelled By Doctor', 13, '2023-08-21 19:24:16', '2023-08-21 19:24:28'),
(9, 'MD. Abdulllah Al Shakil', 'shakil3300bd@gmail.com', '01517868256', 1, 'Md Abu Sama', 1, '500', 'hgsdhjhsdjdg', 'Completed', 12, '2023-08-21 19:26:18', '2023-08-21 19:26:18'),
(10, 'MD SABBIR AHMED', 'shakil3300bd@gmail.com', '01517868256', 2, 'Abu Shaleh', 2, '700', 'Hello', 'Cancelled By Doctor', 13, '2023-08-21 19:26:21', '2023-08-21 19:26:28'),
(11, 'Test', 'shakil3300bd@gmail.com', '01716610045', 2, 'Abu Shaleh', 2, '700', 'Hello', 'Completed', 15, '2023-08-24 13:40:40', '2023-08-24 13:40:40');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `blog_type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 1 COMMENT '1=Published, 0=Published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category`, `title`, `slug`, `image`, `description`, `blog_type`, `date`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'COVID-19 Risk Management', 'covid-19-risk', 'admin-assets/assets/image/blog/1635437994.jpg', 'Walking (also known as ambulation) is one of the main gaits of terrestrial locomotion among legged animals. Walking is typically slower than running and other gaits. Walking is defined by an \'inverted pendulum\' gait in which the body vaults over the stiff limb or limbs with each step. This applies regardless of the usable number of limbs—even arthropods, with six, eight, or more limbs, walk.', 'latest', '2023-08-18', 1, '2023-08-16 16:58:55', '2023-08-16 16:58:55'),
(3, 2, 'Walking daily new', 'Walking-daily-new', 'admin-assets/assets/image/blog/924720193.jpg', 'Walking (also known as ambulation) is one of the main gaits of terrestrial locomotion among legged animals. Walking is typically slower than running and other gaits. Walking is defined', 'latest', '2023-08-19', NULL, '2023-08-16 17:44:41', '2023-08-17 12:10:21'),
(4, 2, 'Hello world new', 'Hello-world-new', 'admin-assets/assets/image/blog/1531185272.jpg', 'cgdhcdhc  dchuidshcgduifduiacfyhsduia hghasuihcfasduhcuiasd hghsdhdcsgh', 'latest', '2023-08-18', NULL, '2023-08-17 11:28:55', '2023-08-17 12:06:33'),
(5, 2, 'Youga Dialy', 'Youga-Dialy', 'admin-assets/assets/image/blog/1234313417.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'latest', '2023-08-22', 1, '2023-08-21 10:27:12', '2023-08-21 10:27:12'),
(6, 2, 'Meditation', 'Meditation', 'admin-assets/assets/image/blog/79039071.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'popular', '2023-08-22', 1, '2023-08-21 10:28:18', '2023-08-21 10:28:18'),
(7, 2, 'Daily Gym', 'Daily-Gym', 'admin-assets/assets/image/blog/875648951.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'trending', '2023-08-21', 1, '2023-08-21 10:28:44', '2023-08-21 10:28:44'),
(8, 2, 'Fitness is Necessary', 'Fitness-is-Necessary', 'admin-assets/assets/image/blog/1823735945.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'trending', '2023-08-22', 1, '2023-08-21 10:29:37', '2023-08-21 10:29:37'),
(9, 2, 'Happy Lunch', 'Happy-Lunch', 'admin-assets/assets/image/blog/839915877.jpg', 'sdvfdhbg dfhdbfuyhfcuydh', 'latest', '2023-08-22', 1, '2023-08-21 11:28:11', '2023-08-21 11:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'COVID-19', 1, '2023-08-16 15:31:51', '2023-08-16 15:31:51'),
(2, 'Fitness', 1, '2023-08-16 15:50:27', '2023-08-16 15:50:27'),
(3, 'Jogging', 1, '2023-08-16 15:50:37', '2023-08-16 15:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'MD Abdullah Al', 'shakil3300bd@gmail.com', 'Test Complain', 'Test', 'Action Taken', '1', '2023-08-16 14:08:25', '2023-08-16 14:09:20'),
(5, 'MD. Abdulllah Al Shakil', 'shakil3300bd@gmail.com', 'ttyerertertr', 'jfhdjicfidio jchsdicjds', 'Pending', '1', '2023-08-21 11:05:14', '2023-08-21 11:24:36'),
(6, 'MD SABBIR AHMED', 'shakil3300bd@gmail.com', 'jljkl', 'rdfyu', 'Action Taken', '2', '2023-08-31 22:43:23', '2023-08-31 23:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `speciality` varchar(255) DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `fee` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `membership` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `dob`, `date_of_birth`, `phone`, `speciality`, `room`, `time`, `day`, `fee`, `description`, `image`, `created_at`, `updated_at`, `gender`, `membership`, `address`, `state`) VALUES
(10, 'Ahaabwe Derrick tROALLLL', 'ahaabwederrick67@gmail.com', '2024-04-01', NULL, '01716210045', 'Dentist', '212', '10:00 am - 05:00 pm', 'Friday, Sunday, Tuesday', '5000000000', 'jsjjsjs', 'doctor_2.jpg', '2023-08-21 10:15:00', '2024-04-23 10:36:09', 'Male', 'hdhdhd', 'Kampala', 'Bwera'),
(11, 'Ahaabwe', '', '', NULL, '01517808256', 'Optician', '212', '10:00 AM to 03:00PM', 'Friday, Sunday, Tuesday', '700', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'doctor_2.jpg', '2023-08-21 10:17:47', '2023-08-21 10:33:00', '', '', '', ''),
(13, 'Ahaabwe Derrick', 'ahaabwederrick67@gmail.com', '2024-04-26', NULL, '0704665418', 'Dentist', NULL, '10:00 am - 12:00 pm', 'Monday, Tuesday', '1000000', NULL, 'doctor_7.jpeg', '2024-04-23 09:51:37', '2024-04-23 09:51:37', 'Female', 'Full Time', 'Kampala', 'Belgrade'),
(14, 'Mariam', 'ahaabwederrick67@gmail.com', '2024-04-25', NULL, '0704665418', 'Dentist', NULL, '10:00 am - 12:00 pm', 'Monday, Tuesday', '1000000', 'Interesting', 'doctor_3.jpg', '2024-04-23 09:57:11', '2024-04-23 09:57:11', 'Female', 'Full Time', 'Kampala', 'Bwera'),
(15, 'Joan', 'ahaabwederrick67@gmail.com', '2024-04-27', NULL, '0704665418', 'Optician', '29999', '10:00 am - 12:00 pm', 'Monday, Tuesday', '1000000', 'Nice', 'doctor_3.jpg', '2024-04-23 10:00:46', '2024-04-23 10:00:46', 'Female', 'Full Time', 'Kampala', 'Bukots'),
(16, 'Ahaabwe Derrick', 'ahaabwederrick67@gmail.com', '2024-04-27', NULL, '0704665418', 'Optician', '29999', '10:00 am - 12:00 pm', 'Monday, Tuesday', '1000000', 'Nice', 'doctor_6.jpeg', '2024-04-23 10:00:47', '2024-04-23 10:00:47', 'Female', 'Full Time', 'Kampala', 'Bukots'),
(17, 'Moses', 'moses@gmail.com', '2024-04-25', NULL, '0704665418', 'Surgeon', '3', '10:00 am - 03:00 pm', 'Monday, Tuesday,Thursday', '5000000000', 'Committed', 'doctor_8.jpeg', '2024-04-24 03:00:25', '2024-04-24 03:00:25', 'Male', 'Full Time', 'Makerere', 'Belgrade'),
(18, 'Ahaabwe Derrick Trial', 'ahaabwederrick67@gmail.com', '2024-04-27', NULL, '0704665418', 'Surgeon', '3', '10:00 am - 12:00 pm', 'Monday, Tuesday,Thursday', '1000000', 'Committed', 'doctor4.png', '2024-04-24 03:08:56', '2024-04-24 03:08:56', 'Male', 'Part Time', 'Kampala', 'Bwera');

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
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `sku`, `price`, `quantity`, `description`, `image`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Package 01', 'E002FC', '250', 98, 'Yammy!!', 'admin-assets/assets/food/1930144678.jpg', NULL, NULL, '2023-08-17 05:04:27', '2023-08-17 05:04:27'),
(2, 'Package 02', 'E002FC', '300', 100, 'Yammy!!', 'admin-assets/assets/food/10278888.webp', NULL, NULL, '2023-08-17 05:05:06', '2023-08-17 05:05:06'),
(3, 'Mineral Water', '2001M', '30', 100, 'Fresh drink', 'admin-assets/assets/food/800055744.jpg', NULL, NULL, '2023-08-21 10:34:09', '2023-08-21 10:34:09'),
(4, 'Item 01', 'Q001M', '350', 100, 'Testy', 'admin-assets/assets/food/9510909.jpg', NULL, NULL, '2023-08-21 10:34:40', '2023-08-21 10:34:40'),
(5, 'Item 04', 'Q001MS', '300', 60, 'Spicy!!!', 'admin-assets/assets/food/859673162.jpg', NULL, NULL, '2023-08-21 10:35:13', '2023-08-21 10:35:13'),
(6, 'Item 05', 'V10SQ', '120', 100, 'Testy', 'admin-assets/assets/food/1089855988.jpg', NULL, NULL, '2023-08-21 10:35:40', '2023-08-21 10:35:40'),
(7, 'Item 011', 'Q001M', '100', 100, 'Yammy', 'admin-assets/assets/food/402623995.jpg', NULL, NULL, '2023-08-21 11:25:36', '2023-08-21 11:25:36');

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`id`, `name`, `code`, `price`, `room`, `description`, `created_at`, `updated_at`) VALUES
(3, 'MD. Abdulllah Al Shakil', 'IZYGBO', '77', '12', 'cdfvfgbv', '2023-08-24 19:32:57', '2023-08-24 19:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `lab_carts`
--

CREATE TABLE `lab_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `test_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab_orders`
--

CREATE TABLE `lab_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `test_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `delivery_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lab_orders`
--

INSERT INTO `lab_orders` (`id`, `name`, `email`, `phone`, `address`, `user_id`, `test_name`, `test_id`, `price`, `payment_status`, `delivery_status`, `created_at`, `updated_at`) VALUES
(1, 'MD. Abdulllah Al Shakil', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '2', 'X-ray 01', '2', '1000', NULL, 'Cash On Delivery', '2023-08-24 19:20:11', '2023-08-24 19:20:11'),
(2, 'MD. Abdulllah Al Shakil', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '2', 'X-ray 01', '2', '20000', NULL, 'Cash On Delivery', '2023-08-24 19:20:11', '2023-08-24 19:20:11'),
(3, 'MD. Abdulllah Al Shakil', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '2', 'X-ray 01', '2', '1000', 'Paid', 'Delivered', '2023-08-24 19:22:22', '2023-08-24 20:05:09'),
(6, 'MD. Abdulllah Al Shakil', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '2', 'MD. Abdulllah Al Shakil', '3', '77', 'Cash On Delivery', 'Cancelled', '2023-08-24 21:49:21', '2023-08-24 22:06:43'),
(7, 'MD. Abdulllah Al Shakil', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '2', 'MD. Abdulllah Al Shakil', '3', '77', 'Paid', 'Delivered', '2023-09-04 02:35:57', '2023-09-04 02:38:52'),
(8, 'MD. Abdulllah Al Shakil', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '2', 'MD. Abdulllah Al Shakil', '3', '77', 'Cash On Delivery', 'Processing', '2023-09-04 02:35:57', '2023-09-04 02:35:57'),
(9, 'MD. Abdulllah Al Shakil', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '2', 'MD. Abdulllah Al Shakil', '3', '77', 'Cash On Delivery', 'Processing', '2023-09-04 02:35:57', '2023-09-04 02:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `medi_carts`
--

CREATE TABLE `medi_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `m_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `delivery_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medi_orders`
--

CREATE TABLE `medi_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `m_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `delivery_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medi_orders`
--

INSERT INTO `medi_orders` (`id`, `u_name`, `m_name`, `email`, `phone`, `user_id`, `m_id`, `price`, `quantity`, `vendor`, `date`, `payment_status`, `delivery_status`, `created_at`, `updated_at`) VALUES
(1, 'MD. Abdulllah Al Shakil', 'shakil', 'shakil3300bd@gmail.com', '01517868256', '2', '4', '55', '1', 'fdf', '2023-08-26', 'Paid', 'Delivered', '2023-08-25 00:03:56', '2023-08-25 00:18:28'),
(2, 'MD. Abdulllah Al Shakil', 'Napa', 'shakil3300bd@gmail.com', '01517868256', '2', '2', '6237', '1', 'Beximco', '2023-08-26', 'Cash On Delivery', 'Processing', '2023-08-25 00:03:56', '2023-08-25 00:03:56'),
(3, 'MD. Abdulllah Al Shakil', 'fsdf', 'shakil3300bd@gmail.com', '01517868256', '2', '3', '35', '1', 'Beximco', '2023-08-26', 'Cash On Delivery', 'Processing', '2023-08-25 00:03:56', '2023-08-25 00:03:56'),
(4, 'MD. Abdulllah Al Shakil', 'shakil', 'shakil3300bd@gmail.com', '01517868256', '2', '4', '100', '10000', 'fdf', '2023-08-26', 'Paid', 'Delivered', '2023-08-31 22:49:01', '2023-08-31 23:05:35'),
(5, 'MD. Abdulllah Al Shakil', 'fsdf', 'shakil3300bd@gmail.com', '01517868256', '2', '3', '35', '1', 'Beximco', '2023-08-26', 'Cash On Delivery', 'Processing', '2023-08-31 22:49:01', '2023-08-31 22:49:01'),
(6, 'Ahaabwe', 'Aspirin', '', '01517808256', '11', '30', '100000', '1000', 'M-G', '2024-04-18', 'Failed', 'Pending', '2024-04-23 12:45:15', '2024-04-23 12:45:15');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_14_202635_create_sessions_table', 1),
(7, '2023_08_15_000441_create_doctors_table', 1),
(8, '2023_08_15_023958_create_appointments_table', 1),
(9, '2023_08_15_175922_create_notifications_table', 1),
(10, '2023_08_15_204354_create_contacts_table', 1),
(11, '2023_08_16_204115_create_blogs_table', 1),
(12, '2023_08_16_211158_create_categories_table', 1),
(13, '2023_08_17_002928_create_food_table', 1),
(14, '2023_08_17_050210_create_orders_table', 1),
(15, '2023_08_21_222218_create_appointment_histories_table', 1),
(16, '2023_08_24_185030_create_pres_table', 1),
(17, '2023_08_24_204349_create_pharmachies_table', 1),
(18, '2023_08_24_213233_create_labs_table', 1),
(19, '2023_08_25_002119_create_lab_carts_table', 1),
(20, '2023_08_25_010156_create_lab_orders_table', 1),
(21, '2023_08_25_045642_create_medi_carts_table', 1),
(22, '2023_08_25_055345_create_medi_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('bdd07283-fb95-11ee-a013-ecf4bb14ea50', 'inquiry', 'doctor', 1, 'I took some dosage but dint work. Can we schedule please!', NULL, '2024-04-18 05:05:33', '0000-00-00 00:00:00'),
('bdd085a9-fb95-11ee-a013-ecf4bb14ea50', 'appointment', 'Medical Examination', 2, 'Am not feelin well, i wish to be examined', NULL, '2024-04-24 05:06:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `person_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `food_name`, `food_price`, `quantity`, `person_name`, `phone`, `room`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 'Item 01', '3500', '10', 'MD Abdullah Al Shakil', '01517868256', '406', NULL, '1', '2023-08-21 11:03:36', '2023-08-21 11:03:36'),
(9, 'Item 04', '1500', '5', 'MD Abdullah Al Shakil', '01517868256', '512', NULL, '2', '2023-08-21 19:47:09', '2023-08-21 19:47:09'),
(10, 'Item 05', '240', '2', 'Md Abu Sama', '01716610045', '512', NULL, '2', '2023-09-04 02:40:38', '2023-09-04 02:40:38'),
(11, 'Item 01', '3500', '10', 'Md Abu Sama', '01716610045', '510', NULL, '2', '2023-09-04 03:20:01', '2023-09-04 03:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('shakil3300bd@gmail.com', '$2y$10$/FhibQY9NgGnmnvyAZzYjOnRtsJvEZYMIdhiy2WTYzfbzxx5dV4ka', '2023-08-15 11:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmachies`
--

CREATE TABLE `pharmachies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pharmachies`
--

INSERT INTO `pharmachies` (`id`, `name`, `code`, `price`, `quantity`, `description`, `image`, `vendor`, `date`, `created_at`, `updated_at`) VALUES
(2, 'Napa', 'dfhj', '6237', '8364', 'bdhfdifyuiy', 'admin-assets/assets/food/143428814.png', 'Beximco', '2023-08-26', '2023-08-24 15:04:49', '2023-08-24 15:04:49'),
(3, 'fsdf', 'fdsf', '35', '223', 'sdgg', 'admin-assets/assets/food/145804914.pptx', 'Beximco', '2023-08-26', '2023-08-24 15:06:25', '2023-08-24 15:06:25'),
(4, 'shakil', 'IZYGBO', '55', '324', 'hvdjvdivjhiopjvhkv iopejh', 'admin-assets/assets/food/1718406533.png', 'fdf', '2023-08-26', '2023-08-24 15:07:00', '2023-08-24 15:30:18'),
(5, 'uyiu', '55', '57', '66', 'fc,b', 'admin-assets/assets/food/1240253178.pptx', 'jjk', '2023-09-08', '2023-08-31 23:49:37', '2023-08-31 23:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `pres`
--

CREATE TABLE `pres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `d_phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `medicines` text DEFAULT NULL,
  `tests` text DEFAULT NULL,
  `advice` varchar(255) DEFAULT NULL,
  `age` varchar(255) NOT NULL,
  `appointment_id` varchar(255) NOT NULL,
  `doctor_id` varchar(255) NOT NULL,
  `appointmenthistory_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `fee` varchar(255) NOT NULL,
  `current_datetime` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pres`
--

INSERT INTO `pres` (`id`, `p_name`, `sex`, `d_phone`, `email`, `d_name`, `medicines`, `tests`, `advice`, `age`, `appointment_id`, `doctor_id`, `appointmenthistory_id`, `user_id`, `fee`, `current_datetime`, `created_at`, `updated_at`) VALUES
(1, 'MD Abdullah Al', 'Male', '01517868256', 'shakil3300bd@gmail.com', 'Abu Shaleh', 'bfhsdjhs', 'uihvhihv', 'hghgd', '20', '9', '2', '2', '1', '700', '2023-08-24 19:22:50', '2023-08-24 13:22:58', '2023-08-24 13:22:58'),
(2, 'MD Abdullah Al', 'Male', '01517868256', 'shakil3300bd@gmail.com', 'Abu Shaleh', 'hfgsdjklfh\r\nsdfjhdsjhsdb\r\nfuhygsdahcgdsjg', 'gvhvj\r\nhfghsdg\r\nsdjhfgvsdh', NULL, '-1', '9', '2', '2', '1', '700', '2023-08-24 19:27:03', '2023-08-24 13:27:21', '2023-08-24 13:27:21'),
(3, 'MD Abdullah Al', 'Male', '01517868256', 'shakil3300bd@gmail.com', 'Abu Shaleh', 'ghdv', NULL, NULL, '22', '9', '2', '2', '1', '700', '2023-08-24 19:28:22', '2023-08-24 13:29:02', '2023-08-24 13:29:02'),
(4, 'Test', 'Male', '01716610045', 'shakil3300bd@gmail.com', 'Abu Shaleh', 'gvhjfhji', 'jhfbasdjkfh', 'bsdjfdfjvbhh', '22', '15', '2', '11', '2', '700', '2023-08-24 19:41:01', '2023-08-24 13:41:11', '2023-08-24 13:41:11');

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

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('12KpizzTQ3YzxzErLGdEtjNZ8BHDm2msSJpsYJML', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo2OntzOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjM3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vZGFzaGJvYXJkIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kb2N0b3IiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiZXQ4Q1pFWVpsOXk0T2M0NVVlV0s0YzdubUM0VmY5UmZpOEJ3TDJUQyI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMiRtd1NoZzloWGxlVk96R0RmRkViQmwuaUlrcTlPMGluRHk3Lm53UlF2RVVHRnJDVHpxZmRFcSI7fQ==', 1713941055),
('lcYZDyp5PBaEbV4N1KxHkzhgw0uhg5DT6PyaggRq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYm1LSjNRMTdvQVNQYzlLdFNFT0pXdG1GNkpoT3dnUWJkOFZ0a3FhSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJG13U2hnOWhYbGVWT3pHRGZGRWJCbC5pSWtxOU8waW5EeTcubndSUXZFVUdGckNUenFmZEVxIjt9', 1713940899),
('xac6vomKcikvoxbCFb2rJvK7JfvOWEw8TBqzQZlT', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36 Edg/124.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSk9sS3praFNkS2tENks2azVFRmlLWXF5TEN2akdoQXFLRWlGNlJxQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJG13U2hnOWhYbGVWT3pHRGZGRWJCbC5pSWtxOU8waW5EeTcubndSUXZFVUdGckNUenFmZEVxIjt9', 1713938644);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `doctor_id` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `doctor_id`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '+256763469896', 'Kampala', '1', '2023-08-21 17:53:37', '$2y$12$mwShg9hXleVOzGDfFEbBl.iIkq9O0inDy7.nwRQvEUGFrCTzqfdEq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-14 14:01:59', '2024-04-15 12:08:24'),
(2, 'user', 'user@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '0', '2023-08-21 18:01:45', '$2y$12$mwShg9hXleVOzGDfFEbBl.iIkq9O0inDy7.nwRQvEUGFrCTzqfdEq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-21 18:00:59', '2023-08-21 18:01:45'),
(4, 'Md Abu Sama', 'shakil33003bd@gmail.com', '01716610045', 'Midandighi, Boda, Panchagarh', '3', NULL, '$2y$10$YcLoOsPImqcHHNCRUk.g7enVZJYw/8Z8tP82HbF4AqDBooqIfjBIK', NULL, NULL, NULL, '', NULL, NULL, NULL, '2023-08-21 18:26:55', '2023-08-21 18:26:55'),
(5, 'Doctor-02', 'jowati1680@cwtaa.com', '12345678', 'uhhfdjiwhfuig', '2', '2023-08-21 18:45:26', '$2y$10$RRDWirT7VE3Q7mxlIe1VGO6tI4KpSA/v7uZanSiiUHA2RHeHcYY82', NULL, NULL, NULL, '2', NULL, NULL, NULL, '2023-08-21 18:29:12', '2023-08-21 18:45:26'),
(6, 'Food Manager', 'vosoj31395@vikinoko.com', '01517868256', 'Mirpur-2, Dhaka', '3', '2023-08-24 16:43:10', '$2y$10$yL8ccJ2OdukxmBZgBruBJO.RGdLQVoFpHp8e/.gru2y0T3IwM2pSi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-24 16:42:20', '2023-08-24 16:43:10'),
(7, 'Reciptionist', 'sivale1060@stypedia.com', '01517868256', 'Rupnagar R/A , Mirpur-02, Dhaka-1216', '4', '2023-08-24 16:45:55', '$2y$10$62akuh7.JKrCoa3Q8Cn.uuMdZo1p/YnJguWP1nDARGU1XVv28PPbe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-24 16:44:59', '2023-08-24 16:45:55'),
(8, 'Lab & Medicine', 'sedepic766@stypedia.com', '01517868256', 'Mirpur-02', 'Lab and Medicines', '2023-08-24 16:49:43', '$2y$10$erwXG2UNe.IrF.FwE4/nQ.dqdDZg03em8sgj4sXJV8GQRpYQsjGXy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-24 16:48:54', '2023-08-24 17:42:30'),
(14, 'Lab & Medicine', 'mdanik0178@gmail.com', '09776555', 'strdtyfyyfd', '5', NULL, '$2y$10$fc6HXYvzuoKxmJwuYepnsenGuyGfQSuPS1LhSAo2pDrxyHl0PBHr2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-31 22:56:51', '2023-08-31 22:56:51'),
(15, 'MD. Abdulllah Al Shakil', 'shakilforuniversity@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '5', '2023-09-04 02:38:11', '$2y$10$0fGHMa0/v8w0ncbKVceewuZgQSMrNYH0Xn2MVbPFS5TPgV/6pDZ3u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-31 22:58:45', '2023-09-04 02:38:11'),
(100, 'Admin', 'shakil.180csebubt@gmail.com', '01784918947', 'Rupnagar R/A , Mirpur-02, Dhaka-1216', '1', '2023-08-21 17:53:37', '$2y$10$DyjqIM.Tk6mxVs7nR0kT9.yUWe5C1MSnJfbAUIqP3tUxGwMBDtxEe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-21 17:52:29', '2023-08-21 17:53:37'),
(101, 'Johna', 'n@gmail.com', '+256763469896', 'Kampala', '0', NULL, '$2y$12$Txp/vcYmsdStWGbS/nmBhe15ZeUZm.6gPwhjhD20l75msaJSLSMGG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-23 14:35:34', '2024-04-23 14:35:34'),
(102, 'Tahia', 'tahia@gmail.com', '+256763469896', 'Kampala', '0', NULL, '$2y$12$62CAvvwTcwtIIl772BI2fOSJMR0blvKEkUVSLuXNJwTH.w1Q6VdF6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 03:39:59', '2024-04-24 03:39:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_histories`
--
ALTER TABLE `appointment_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_carts`
--
ALTER TABLE `lab_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_orders`
--
ALTER TABLE `lab_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medi_carts`
--
ALTER TABLE `medi_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medi_orders`
--
ALTER TABLE `medi_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `pharmachies`
--
ALTER TABLE `pharmachies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pres`
--
ALTER TABLE `pres`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `appointment_histories`
--
ALTER TABLE `appointment_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lab_carts`
--
ALTER TABLE `lab_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_orders`
--
ALTER TABLE `lab_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `medi_carts`
--
ALTER TABLE `medi_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medi_orders`
--
ALTER TABLE `medi_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmachies`
--
ALTER TABLE `pharmachies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pres`
--
ALTER TABLE `pres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
