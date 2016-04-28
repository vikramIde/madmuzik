-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2016 at 09:23 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `madmuzik`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(10) unsigned NOT NULL,
  `album_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `album_image_loc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artist_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE IF NOT EXISTS `artists` (
  `id` int(10) unsigned NOT NULL,
  `artist_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artist_image_loc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artist_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `followers` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `artist_name`, `artist_image_loc`, `artist_title`, `followers`, `created_at`, `updated_at`) VALUES
(1, 'Ms. Nicole Dickinson', '', 'Dj / Producer', 3, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(2, 'Elinore Gaylord', '', 'Rock/Pop', 4, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(3, 'Prof. Josiah Auer III', '', 'Dj / Producer', 9, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(4, 'Jess Thompson', '', 'Blues/Jazz', 6, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(5, 'Jerad Johnson', '', 'Blues/Jazz', 1, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(6, 'Lizzie Kub', '', 'Dj / Producer', 9, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(7, 'Mitchel Goodwin', '', 'Rock/Pop', 2, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(8, 'Ashleigh Kuhn', '', 'Dj / Producer', 6, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(9, 'Hilario Bruen', '', 'Blues/Jazz', 1, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(10, 'Dr. Chester Cole', '', 'Rock/Pop', 8, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(11, 'Kayden Russel DDS', '', 'Blues/Jazz', 4, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(12, 'Bernhard Ryan', '', 'Dj / Producer', 4, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(13, 'Odie Bailey II', '', 'Blues/Jazz', 2, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(14, 'Joseph Schmidt', '', 'Rock/Pop', 5, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(15, 'Eriberto Dach', '', 'Dj / Producer', 3, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(16, 'Miss Wanda Bashirian', '', 'Blues/Jazz', 3, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(17, 'Waldo Little', '', 'Dj / Producer', 2, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(18, 'Prof. Jamison Russel Jr.', '', 'Rock/Pop', 8, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(19, 'Kathleen Kirlin DDS', '', 'Dj', 6, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(20, 'Ms. Judy Nicolas Sr.', '', 'Dj / Producer', 5, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(21, 'Mariano Bergnaum', '', 'Dj', 8, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(22, 'Miss Elza Rempel III', '', 'Dj / Producer', 2, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(23, 'Lukas Rice', '', 'Dj', 5, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(24, 'Craig Gerlach', '', 'Blues/Jazz', 7, '2016-04-27 01:20:26', '2016-04-27 01:20:26'),
(25, 'Abigail Marquardt', '', 'Dj / Producer', 9, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(26, 'Murl Becker', '', '', 5, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(27, 'Prof. Myron Rohan V', '', '', 2, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(28, 'Mr. Merlin Smitham PhD', '', '', 9, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(29, 'Leda Hane', '', '', 7, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(30, 'Jocelyn Heidenreich IV', '', '', 9, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(31, 'Kenton Homenick', '', '', 4, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(32, 'Torrance Casper', '', '', 8, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(33, 'Dr. Evalyn Larkin I', '', '', 7, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(34, 'Susana Sanford', '', '', 5, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(35, 'Dahlia Lang PhD', '', '', 5, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(36, 'Leila Torphy', '', '', 7, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(37, 'Ada Howe', '', '', 3, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(38, 'Murray Koepp', '', '', 1, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(39, 'Mr. Rhiannon Bins', '', '', 1, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(40, 'Chester Block', '', '', 2, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(41, 'Ricardo Feeney', '', '', 1, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(42, 'Kaelyn Blanda', '', '', 7, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(43, 'Nyah Botsford', '', '', 1, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(44, 'Aliya Nienow III', '', '', 2, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(45, 'Elisha Tremblay', '', '', 6, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(46, 'Mariana Sporer', '', '', 2, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(47, 'Mr. Jaydon Connelly', '', '', 5, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(48, 'Kaylie Feest', '', '', 2, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(49, 'Erin King Jr.', '', '', 6, '2016-04-27 01:20:27', '2016-04-27 01:20:27'),
(50, 'Chadd Kunze', '', '', 7, '2016-04-27 01:20:27', '2016-04-27 01:20:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_25_141612_create_artists_table', 2),
('2016_04_25_141712_create_albums_table', 2),
('2016_04_25_141722_create_songs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `id` int(10) unsigned NOT NULL,
  `song_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `song_image_loc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `album_id` int(10) unsigned NOT NULL,
  `artist_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`), ADD KEY `albums_artist_id_foreign` (`artist_id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`), ADD KEY `songs_artist_id_foreign` (`artist_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
ADD CONSTRAINT `albums_artist_id_foreign` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`);

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
ADD CONSTRAINT `songs_artist_id_foreign` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
