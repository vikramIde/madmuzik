-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2016 at 08:53 AM
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
  `album_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `album_art` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `album_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `album_release_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `album_compiled_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `album_mastering` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `album_artwork` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `album_mainart` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `album_soundcloud` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `album_youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `album_youtubeVideo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `album_facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `album_featured` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
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
  `artist_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artist_soundcloud` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artist_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artist_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artist_fb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artist_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artist_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artist_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `followers` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artist_featured` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `artist_name`, `artist_code`, `artist_soundcloud`, `artist_image`, `artist_title`, `artist_fb`, `artist_phone`, `artist_address`, `artist_description`, `followers`, `status`, `artist_featured`, `created_at`, `updated_at`) VALUES
(2, 'Vikram Anand', 'MAD_ARTIST-2016-0001', 'Meaaaow', 'images/artist/MAD_ARTIST-2016-0001/xxxx.jpg', 'DJ Wale Babu', 'dsfsdf ', 'dfsdfsdf', 'sdfsdf sdfsdf sdfsdfsdfsdfasasdas asdsadas dasdsad ', '<p><span class="vote-count-post " style="cursor: pointer;" title="View upvote and downvote totals">48</span> <a class="vote-down-off" title="This answer is not useful">down vote</a></p>\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td class="votecell">&nbsp;</td>\r\n<td class=', 0, 'active', 0, '2016-05-23 05:56:59', '2016-05-26 07:19:23');

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
  `song_art` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `song_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `song_mainart` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `song_soundcloud` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `song_youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artist_id` int(10) unsigned NOT NULL,
  `album_id` int(10) unsigned NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vikram Anand Bhushan', 'vikrambanand@gmail.com', '$2y$10$9dnNfpytnC98gVIruHj/JO3ve6gZRyRhrdIM8Xv29mc4pqD3T24ry', '3zXkK7hNBxpfAGjIgyCMB6RzAZJfrUSj72oiU0QwOitknFWC9T5OHItIzpGE', '2016-05-13 01:39:49', '2016-05-13 01:45:00');

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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
