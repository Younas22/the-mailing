-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 03:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_mailing`
--

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `email`, `status`) VALUES
(1, 'phpfiverrpk@gmail.com', '1'),
(2, 'muhammadsadique116@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mail_template`
--

CREATE TABLE `mail_template` (
  `id` int(11) NOT NULL,
  `from` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `template` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mail_template`
--

INSERT INTO `mail_template` (`id`, `from`, `name`, `subject`, `msg`, `template`, `status`) VALUES
(1, 'hm.younas22@gmail.com', NULL, 'contact ', 'abc', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `configure_mail` varchar(255) DEFAULT NULL,
  `configure_mail_pass` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `official_address` text DEFAULT NULL,
  `company_website` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `company_logo` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `locality` varchar(255) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `whatsapp_no` bigint(20) DEFAULT NULL,
  `source_get_to_know` varchar(255) DEFAULT NULL,
  `referred_by` varchar(255) DEFAULT NULL,
  `referral_code` varchar(255) DEFAULT NULL,
  `downloaded` int(1) NOT NULL DEFAULT 0,
  `profile_img` varchar(255) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `manager_name` varchar(255) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `decript_password` varchar(255) DEFAULT NULL,
  `theme` enum('blue','red') NOT NULL,
  `user_type` enum('admin','user','company') NOT NULL,
  `login_status` int(1) DEFAULT 0,
  `mail_status` int(1) NOT NULL DEFAULT 0,
  `user_status` int(1) NOT NULL DEFAULT 1,
  `terms_status` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin_id`, `company_id`, `first_name`, `last_name`, `configure_mail`, `configure_mail_pass`, `company_name`, `official_address`, `company_website`, `user_email`, `company_logo`, `street`, `locality`, `landmark`, `city`, `state`, `pincode`, `country`, `whatsapp_no`, `source_get_to_know`, `referred_by`, `referral_code`, `downloaded`, `profile_img`, `company_email`, `manager_name`, `user_phone`, `password`, `decript_password`, `theme`, `user_type`, `login_status`, `mail_status`, `user_status`, `terms_status`, `created_at`) VALUES
(8, NULL, NULL, 'Master', 'Admin', NULL, NULL, 'alphaexposofts', NULL, NULL, NULL, NULL, '', '', '', '', '', 0, '', 0, NULL, NULL, NULL, 0, '1645638099Walk.gif', 'admin@admin.com', 'Anang', '1111', '7e957d9933fff5a06e8b37d6e57a682bc121da9a', 'admin2022', 'red', 'admin', 0, 0, 1, 1, '2022-01-09 07:08:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_template`
--
ALTER TABLE `mail_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mail_template`
--
ALTER TABLE `mail_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=494;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
