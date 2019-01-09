-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2018 at 09:46 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vocomfest18`
--

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `path` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `status`, `path`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-02-08-02-39-51_15505a-.jpg', '', '2018-02-08 13:39:51', '2018-02-08 07:41:39'),
(2, 1, '2018-02-08-02-39-59_20955a-ggg.jpg', 'ggg', '2018-02-08 13:39:59', '2018-02-08 07:41:33'),
(3, 1, '2018-02-08-02-40-40_323165-.jpg', '', '2018-02-08 13:40:40', '2018-02-08 07:41:43'),
(4, 1, '2018-02-08-02-40-49_142775-.jpg', '', '2018-02-08 13:40:49', '2018-02-08 07:41:31'),
(5, 1, '2018-02-08-06-39-09_29765a-sadasdasd.jpg', 'sadasdasd', '2018-02-08 17:39:09', '2018-02-08 11:41:41'),
(6, 1, '2018-02-08-06-39-16_254335-.jpg', '', '2018-02-08 17:39:16', '2018-02-08 11:41:37'),
(7, 1, '2018-02-08-06-41-56_69425a-.jpg', '', '2018-02-08 17:41:56', '2018-02-08 11:41:58'),
(8, 1, '2018-02-08-06-42-12_305985-.jpg', '', '2018-02-08 17:42:12', '2018-02-08 23:59:53'),
(9, 1, '2018-02-08-06-42-24_266955-.jpg', '', '2018-02-08 17:42:24', '2018-02-09 00:00:02'),
(10, 1, '2018-02-08-06-48-16_166595-.jpg', '', '2018-02-08 17:48:16', '2018-02-08 11:48:18'),
(11, 1, '2018-02-08-06-48-37_313335-.jpg', '', '2018-02-08 17:48:37', '2018-02-08 11:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `madc_progress`
--

CREATE TABLE `madc_progress` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `madc_teams`
--

CREATE TABLE `madc_teams` (
  `user_id` int(11) NOT NULL,
  `instance_name` varchar(255) NOT NULL,
  `instance_address` varchar(255) NOT NULL,
  `leader_name` varchar(255) NOT NULL,
  `leader_phone` varchar(255) NOT NULL,
  `leader_identity` varchar(255) DEFAULT NULL,
  `coleader_name` varchar(255) DEFAULT NULL,
  `coleader_email` varchar(255) DEFAULT NULL,
  `coleader_phone` varchar(255) DEFAULT NULL,
  `coleader_identity` varchar(255) DEFAULT NULL,
  `member1_name` varchar(255) DEFAULT NULL,
  `member1_email` varchar(255) DEFAULT NULL,
  `member1_identity` varchar(255) DEFAULT NULL,
  `member2_name` varchar(255) DEFAULT NULL,
  `member2_email` varchar(255) DEFAULT NULL,
  `member2_identity` varchar(255) DEFAULT NULL,
  `progress` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `madc_teams`
--

INSERT INTO `madc_teams` (`user_id`, `instance_name`, `instance_address`, `leader_name`, `leader_phone`, `leader_identity`, `coleader_name`, `coleader_email`, `coleader_phone`, `coleader_identity`, `member1_name`, `member1_email`, `member1_identity`, `member2_name`, `member2_email`, `member2_identity`, `progress`) VALUES
(2, 'UGM', 'Bulaksumur', 'Salim', '12345', NULL, '', '', '', NULL, '', '', NULL, '', '', NULL, 0),
(3, 'UGM', 'Bulaksumur', 'Fulan', '67890', NULL, '', '', '', NULL, '', '', NULL, '', '', NULL, 4),
(4, 'UGM', 'Bulaksumur', 'Muhammad Rohman Irfanuddin', '12345', NULL, 'Prilivia', 'prilivia@puruhita.com', '67890', NULL, '', '', NULL, '', '', NULL, 4),
(6, 'UGM', 'Bulaksumur', 'Salim', '12345', NULL, '', '', '', NULL, '', '', NULL, '', '', NULL, 4),
(10, 'ade group', 'pangkalpinang', 'le mineral', '22222222', '4th_180203_0014.jpg', 'lee 2', 'adit@gm.co', '22222222', '4th_180203_0239.jpg', 'gogo talk', 'talk@gg.com', '3rd_180203_001214.jpg', 'lkasdlkasdl', 'llcoK@gg.com', '3rd_180203_0028.jpg', 4),
(11, 'ade group', 'pangkalpinang', 'ade putra', '82279395028', '4th_180203_0107.jpg', 'adit', 'adit@gmail.com', '82279395028', '4th_180203_0218.jpg', 'ramadhan', 'ade@fa.com', '4th_180203_0227.jpg', 'putra', 'gg@gg.com', '4th_180203_0198.jpg', 4),
(12, 'ade group', 'adasdas', 'akaz', '82182627382', '3rd_180203_00081.jpg', 'pinta', 'pinpin@gg.cin', '8773723722', '3rd_180203_00082.jpg', '', '', NULL, '', '', NULL, 4),
(13, 'mamal', 'mamal', 'amal', '8212123222', '3rd_180203_00129.jpg', 'pinp', 'pin@gg.com', '82882823782', '4th_180203_0155.jpg', '', '', '3rd_180203_001210.jpg', '', '', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `thumbnail`, `is_published`, `created_at`, `updated_at`) VALUES
(7, 'Berita #1', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'news-image-7.jpg', 1, '2018-02-07 11:14:21', '2018-02-07 11:55:26');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `user_id`, `path`, `created_at`, `updated_at`) VALUES
(23, 2, 'asd', '2018-02-08 18:30:19', '2018-02-08 18:30:19'),
(24, 3, 'daasd', '2018-02-08 18:30:32', '2018-02-08 18:30:32'),
(25, 7, '', '2018-02-08 18:30:32', '2018-02-08 18:30:32'),
(26, 4, 'adds', '2018-02-08 18:30:40', '2018-02-08 18:30:40'),
(27, 6, 'dasa', '2018-02-08 18:30:46', '2018-02-08 18:30:46'),
(29, 10, '3rd_180203_00123.jpg', '2018-02-09 01:25:29', '2018-02-09 01:25:29'),
(30, 11, '4th_180203_0243.jpg', '2018-02-09 04:05:56', '2018-02-09 04:05:56'),
(31, 12, '3rd_180203_00122.jpg', '2018-02-09 04:41:18', '2018-02-09 04:41:18'),
(32, 13, '3rd_180203_00082.jpg', '2018-02-09 04:53:05', '2018-02-09 04:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tipe` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(2, 'Haha', 'salim@puruhita.com', 'gFoOfAddI5l7KdY6JeLT+aE468TfqNavuFMVqQ65fvowO0+1M8qPv+fhfiKwsxvpEmfKhFzeio+PT9VE9+MyUw==', 2, '2018-01-18 14:04:24', '2018-01-18 14:04:24'),
(3, 'Team B', 'fulan@puruhita.com', 'SY0WWHQcrpxBRQBr8MhBmxxDzbRBGoaRSn9UXP8NcQJlh009++D3OWTb/SwvD03GF5A9Tg0e4b3AHkNqXEmERw==', 2, '2018-01-18 14:33:02', '2018-01-18 14:33:02'),
(4, 'TukangSapu', 'irfan@puruhita.com', 'e/ap4M9oLkbRXNanWVzoj6a69HvvChdJky92+UeMaCJ9sYKplKkw6YR2qfqfozbH1LCEYtMX7I5aPWRDARJ4vw==', 2, '2018-01-18 14:39:05', '2018-01-18 14:39:05'),
(5, 'WALLe', 'slmrmdhn@gmail.com', '/yi28x0MnjwTiTm4rmE24PFYWOzkXhS+PCMb7rK3qzkXYriupdIpQKZ7mAZ7OiRviv4QLnk8QLMvBP9XmTez8A==', 2, '2018-01-18 14:44:35', '2018-01-18 14:44:35'),
(6, 'TukangSapuLagi', 'salim@google.com', 'NWjqACA0subIGu9XfE4oaN6cVlLmtyb9wJnxc72i/8Eueo4xR1BUktyc+ERPWiyD6oOAfa70iD94zfLzO6gw4w==', 2, '2018-01-18 15:57:23', '2018-01-18 15:57:23'),
(7, 'Team WDC 1', 'email@wdc1.com', 'f3wNjy+4i73uRe+ExLkDRCcgh3hmHD5dwrpiAlfS9qXYFMrjM+14umciOM1CQyECAnYdLAY/VuAMLaTZEcX4MQ==', 3, '2018-01-18 16:15:57', '2018-01-18 16:15:57'),
(8, 'WDC 1', 'wdc1@vocomfest.com', 'BofYDCyGUB6k5YyXlmpTrGgUdmxuNs7cpPz5kdNVGl04FDNsDgTCBXGZ8rCkOu/+SLdEOTksjXZ7Iv41uettCw==', 3, '2018-01-18 17:56:20', '2018-01-18 17:56:20'),
(9, 'Admin', 'admin@vocomfest.com', 'aU4sKp1VZ7hWvA7s4Lby4EasJxASKT+mvXE9W43U6rRV0tKWP6uF6ZzoHdD+1hEnDjvuzy0QpgM1HV55G2LvdQ==', 1, '2018-01-24 09:51:14', '2018-01-24 09:51:14'),
(10, 'akazu', 'adedwiputra.id@gmail.com', 'X46S5U5dqvUkAT+heM/QPLPNKRuGof+GX+mPw72UXmps7nru2iqdCO8Cqt16OJqs8InIAkVu7hpIjmTxEPh7Gw==', 2, '2018-02-08 07:18:25', '2018-02-08 07:18:25'),
(11, 'fenice', 'ade@gmail.com', 'Wh0eVsIGotk8xWCZqgUhnGoeGnbh0hPmd9IXAAmoTmE1AODGjVVtp2ekwn82XnLUVaCEBJkcXx3n6M6+k+DtFA==', 2, '2018-02-08 20:35:53', '2018-02-08 20:35:53'),
(12, 'aka', 'agc@gg.com', 'i7Etq3JV2/5WrsXrTwcc3WG+Ao3KxzyrWb9V2+t4BEsgzfwTRY/E8ljdOIWwc10zcewbeY1h3xb6aweHIwt1jA==', 2, '2018-02-08 22:39:39', '2018-02-08 22:39:39'),
(13, 'amaludding', 'amal@mail.com', 'SwHDQ4yGml0zej5P+DkDhPgQJ9CmexyP0Etl1MV9sochiSwOG0WCEyDX+omT+//5JlOyUKG8EJIT7/bUXuA4Mg==', 2, '2018-02-08 22:49:53', '2018-02-08 22:49:53');

-- --------------------------------------------------------

--
-- Table structure for table `wdc_progress`
--

CREATE TABLE `wdc_progress` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wdc_teams`
--

CREATE TABLE `wdc_teams` (
  `user_id` int(11) NOT NULL,
  `instance_name` varchar(255) NOT NULL,
  `instance_address` varchar(255) NOT NULL,
  `leader_name` varchar(255) NOT NULL,
  `leader_phone` varchar(255) NOT NULL,
  `leader_photo` varchar(255) DEFAULT NULL,
  `coleader_name` varchar(255) DEFAULT NULL,
  `coleader_email` varchar(255) DEFAULT NULL,
  `coleader_phone` varchar(255) DEFAULT NULL,
  `coleader_photo` varchar(255) DEFAULT NULL,
  `member1_name` varchar(255) DEFAULT NULL,
  `member1_email` varchar(255) DEFAULT NULL,
  `member1_photo` varchar(255) DEFAULT NULL,
  `progress` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wdc_teams`
--

INSERT INTO `wdc_teams` (`user_id`, `instance_name`, `instance_address`, `leader_name`, `leader_phone`, `leader_photo`, `coleader_name`, `coleader_email`, `coleader_phone`, `coleader_photo`, `member1_name`, `member1_email`, `member1_photo`, `progress`) VALUES
(7, 'Name', 'Address', 'Leader', '12345', NULL, '', '', '', NULL, '', '', NULL, 0),
(8, 'UGM', 'Bulaksumur', 'WDC 1', '12345', NULL, '', '', '', NULL, '', '', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `madc_teams`
--
ALTER TABLE `madc_teams`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wdc_teams`
--
ALTER TABLE `wdc_teams`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `submissions`
--
ALTER TABLE `submissions`
  ADD CONSTRAINT `submissions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;