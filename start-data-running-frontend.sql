-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2022 at 01:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `start-data`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_managements`
--

CREATE TABLE `access_managements` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `access_managements`
--

INSERT INTO `access_managements` (`id`, `username`, `password`, `pass`, `email`, `name`, `language_id`, `customer_id`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', '$2y$10$9aHDnjcRGEP5ZQl22E4iNOZQzhHJKA6N7F0g4pR6QniulgoKt4zVu', 'Admin@1234', 'sanjay.chaudhary@techinventive.com', 'Sanjay', 1, 1, 'admin', '2022-01-19 07:31:36', '2022-01-21 10:55:24', NULL),
(2, 'admin1', '$2y$10$OnzBRjWLoVsFexepr0tYrODXAgerk2bcv.T1D/M3n6ZjFX9kQHMee', 'Admin@12345', 'admin@gmail.com', 'adminyu', 1, 1, 'user', '2022-01-19 07:44:18', '2022-01-25 14:42:40', NULL),
(3, 'qwerty', '$2y$10$xheu1fKuetO4aDhJxY2gluUg.ha0mIaIsDzG7YT/bmYzaiU5gx4lq', 'Admin@1234', 'qwerty@gmail.com', 'qwerty', 1, 2, 'user', '2022-01-19 07:56:37', '2022-01-25 06:42:21', NULL),
(4, 'Blog', '$2y$10$W.VZQGi/vsfsiOFLvgodee0dtK.GGBPTgfM607gG6ZaAc9VN4IXOy', NULL, 'Blog@k.com', 'Blog', 1, 1, 'user', '2022-01-19 08:08:02', '2022-01-19 08:08:02', '2022-01-25 09:52:48'),
(6, 'test', '$2y$10$GtU050gQhsjaVi1XVDCaJuH1iCbDKz2dQ/EFFllbNnmDP8MgB1JGO', NULL, 'test@qw.com', 'test', 2, 1, 'user', '2022-01-19 10:51:32', '2022-01-19 10:51:32', '2022-01-25 09:53:07'),
(8, 'newuser', '$2y$10$x.1u80cxkxCNjIpYqf7dP.8yDPqtA8khWk7lGR8.jfm9oebLzhY6S', NULL, 'newuser@gmail.com', 'newuser', 4, 2, 'user', '2022-01-20 15:15:30', '2022-01-20 15:15:30', '2022-01-18 09:53:30'),
(9, 'mail', '$2y$10$dtfX79SeaIIohTYM2wJlTelnHocqSIc48YNFEx80CXrmmqT2zcPWa', NULL, 'mail@gmail.com', 'mail', 4, 2, 'user', '2022-01-20 15:29:57', '2022-01-21 11:18:13', '2022-01-21 11:18:13'),
(10, 'Testmail', '$2y$10$ipVMMne/Zx3xXvnFAdF1aeZbyNEpjLYi4N81dMLWbvVDOtICGCiX.', NULL, 'Testmail@v.com', 'Testmail', 2, 1, 'user', '2022-01-20 15:34:01', '2022-01-20 15:34:01', NULL),
(11, 'Testmail1', '$2y$10$XEJ6ECHw6AxBNsaLUot7detgrb1Mv2E1SzS.V1lm8Mjo4oDT33nyq', NULL, 'Testmail1@v.com', 'Testmail', 2, 1, 'user', '2022-01-20 15:35:38', '2022-01-30 16:46:14', '2022-01-30 16:46:14'),
(12, 'Testmail11', '$2y$10$N2SYpc7eWnmC0.c2QKNr7eL3gTvxcXvjWvK4uNuG9SLkDtmlaCl6u', NULL, 'Testmail11@v.com', 'Testmail', 2, 1, 'user', '2022-01-20 15:36:59', '2022-01-30 16:20:12', '2022-01-30 16:20:12'),
(13, 'Testmail111', '$2y$10$iLjmJ9YjWTpksAk3oN/BOu5fly/Lw9/uqWOv6pfLhzfq6F3J5BFO6', NULL, 'Testmail111@v.com', 'Testmail', 2, 1, 'user', '2022-01-20 15:38:00', '2022-01-30 16:19:29', '2022-01-30 16:19:29'),
(14, 'newusercheck', '$2y$10$TyVWDG2SwSBnkS0kNHDcSOz1tvWcFSyfRbox0eMreJKM1qlXfHEFK', NULL, 'newusercheck@gmail.com', 'newusercheck', 2, 2, 'user', '2022-01-20 15:51:33', '2022-01-20 15:51:33', NULL),
(15, 'test123', '$2y$10$d9pCGtPi05DPskBCAZweR.TI6wayqE49NZXdFfdUKiN7qh4BfiNR.', NULL, 'test@qw.coma', 'test', 15, 1, 'customer', '2022-01-24 15:37:31', '2022-01-24 15:37:31', NULL),
(16, 'newtestcheck', '$2y$10$m3MlZkMkj.V8C2lh0F9KhO07sWbhfQZ6V/30k1ANMIwRbFUhYhd5O', NULL, 'newtestcheck@vmial.com', 'newtestcheck', 3, 1, 'customer', '2022-01-25 11:14:37', '2022-01-25 11:14:37', NULL),
(17, 'newtestcheck1', '$2y$10$ElArcIFHusEu7CfSmsfWYukSP78xkXR/QClD9uR9/eQto6zHKybpq', NULL, 'newtestcheck1@vmial.com', 'newtestcheck', 3, 1, 'customer', '2022-01-25 11:16:43', '2022-01-31 04:24:35', '2022-01-31 04:24:35'),
(18, 'newtestcheck11', '$2y$10$9jBjVOOPztpn6VC9YjgeruUncikfKwmh1hjS84Y8vvULqfSSuMoK.', NULL, 'newtestcheck11@vmial.com', 'msg', 3, 1, 'customer', '2022-01-25 11:20:40', '2022-01-31 04:23:50', '2022-01-31 04:23:50'),
(19, 'newtestcheck11a', '$2y$10$.jmYfcY2NuGU4v9Ak3N3buOsmTpjTIuIE4amyp7THVamOn9MwKS0K', 'Admin@1234', 'newtestcheck113a@vmial.com', 'msg', 3, 1, 'customer', '2022-01-25 11:21:20', '2022-01-31 04:22:24', '2022-01-31 04:22:24'),
(20, NULL, '$2y$10$5iW018XrcXVij9eZO357ueWM8j3Vvbl7kVVAalKWpkEus.BQReA6q', 'Admin@1234', 'admins@mail.com', 'aa', 2, 1, 'customer', '2022-01-25 12:42:06', '2022-01-25 12:42:38', NULL),
(21, NULL, '$2y$10$msINeuqMJ/vkcnVDgM/QEOuqRZw67LEpJ4FzYeEvfcjwoZTJQcHX6', NULL, 'checking@gmail.com', 'checking', 1, 1, 'customer', '2022-01-25 13:54:12', '2022-01-31 04:24:29', '2022-01-31 04:24:29'),
(22, NULL, '$2y$10$DRrKXlD42mwgQws46E5UpOXwUxAai4m07DAk6adniiohW/2Sh5AvC', NULL, 'checking1@gmail.com', 'checking1', 1, 1, 'customer', '2022-01-25 13:59:18', '2022-01-31 04:24:51', '2022-01-31 04:24:51'),
(23, NULL, '$2y$10$Zkpkd33HUm2EBnisBxwfYuHwUZ.Xq7qnvRVJ5TITgMusv.pr/6uL.', NULL, 'checking11@gmail.com', 'checking11', 1, 1, 'customer', '2022-01-25 14:01:15', '2022-01-31 04:24:43', '2022-01-31 04:24:43'),
(24, NULL, '$2y$10$BgzmOX4nByOo4vKh7ajwLuXLWOPP16FVZBuS5kn.g7OypYdHvG1Wa', NULL, 'checking111@gmail.com', 'checking111', 1, 1, 'customer', '2022-01-25 14:04:47', '2022-01-31 04:24:09', '2022-01-31 04:24:09'),
(25, NULL, '$2y$10$HhDFYYDTW31hXEWZGYI4TOi8LlLB02F/.YOjPHcGPwClRF16JgOUy', 'Admin@1234', 'checking1112@gmail.com', 'checking1112', 1, 1, 'customer', '2022-01-25 14:08:34', '2022-01-31 04:10:55', '2022-01-31 04:10:55'),
(26, NULL, '$2y$10$3ylbBrKQFdQwbMF4yfTQFuimBCXR5tdjr6E2XNs6M3oq0V.r2vwD2', 'Laptop@1234', 'Laptop@gmail.com', 'Laptop', 1, 1, 'customer', '2022-01-25 14:21:47', '2022-01-31 04:24:01', '2022-01-31 04:24:01'),
(27, NULL, '$2y$10$KJ8yY2dHm0DlV4LENQpFsuRpsQR8wEnf4VC8SKodP9nKDSrgL6c8a', 'Admin@1234', 'Laptop1@gmail.com', 'Laptop', 1, 1, 'customer', '2022-01-25 14:26:58', '2022-01-25 14:26:58', NULL),
(28, NULL, '$2y$10$4DXfgn7GMheF0Q9QhTDObOw67RKhUUgi8tVuPfcD.0enjfTjk9Nyq', 'System@1234', 'System@gmail.com', 'System', 1, 1, 'customer', '2022-01-25 14:27:46', '2022-01-31 04:24:20', '2022-01-31 04:24:20'),
(29, NULL, '$2y$10$Q4XVrcY/l/kGIr7TRgb4juVPmd6slIhApxhW5vEu9nfrSuIP/q23G', 'Admin@1234', 'tstnewUser@gmail.com', 'tstnewUser', 2, 2, 'customer', '2022-01-31 11:17:44', '2022-01-31 11:17:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `ques_id` int(11) DEFAULT NULL,
  `option_name` varchar(50) DEFAULT NULL,
  `options_text` varchar(50) DEFAULT NULL,
  `standard_answer` int(11) DEFAULT NULL,
  `dependency_active` int(11) DEFAULT NULL,
  `dependencies` varchar(50) DEFAULT NULL,
  `dependent_answer` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `color_settings`
--

CREATE TABLE `color_settings` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `color1` varchar(50) DEFAULT NULL,
  `color2` varchar(50) DEFAULT NULL,
  `color3` varchar(50) DEFAULT NULL,
  `color4` varchar(50) DEFAULT NULL,
  `color5` varchar(50) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `color_settings`
--

INSERT INTO `color_settings` (`id`, `customer_id`, `color1`, `color2`, `color3`, `color4`, `color5`, `language_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'am', 'b0', 'ck', 'dm', 'e1', 3, '2022-01-27 07:04:44', '2022-01-27 12:55:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `country_code` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `country_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Afghanistan', 'AF', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(2, 'Ã…land Islands', 'AX', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(3, 'Albania', 'AL', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(4, 'Algeria', 'DZ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(5, 'American Samoa', 'AS', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(6, 'Andorra', 'AD', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(7, 'Angola', 'AO', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(8, 'Anguilla', 'AI', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(9, 'Antarctica', 'AQ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(10, 'Antigua and Barbuda', 'AG', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(11, 'Argentina', 'AR', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(12, 'Armenia', 'AM', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(13, 'Aruba', 'AW', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(14, 'Australia', 'AU', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(15, 'Austria', 'AT', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(16, 'Azerbaijan', 'AZ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(17, 'Bahamas', 'BS', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(18, 'Bahrain', 'BH', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(19, 'Bangladesh', 'BD', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(20, 'Barbados', 'BB', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(21, 'Belarus', 'BY', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(22, 'Belgium', 'BE', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(23, 'Belize', 'BZ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(24, 'Benin', 'BJ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(25, 'Bermuda', 'BM', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(26, 'Bhutan', 'BT', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(27, '\"Bolivia, Plurinational State of\"', 'BO', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(28, '\"Bonaire, Sint Eustatius and Saba\"', 'BQ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(29, 'Bosnia and Herzegovina', 'BA', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(30, 'Botswana', 'BW', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(31, 'Bouvet Island', 'BV', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(32, 'Brazil', 'BR', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(33, 'British Indian Ocean Territory', 'IO', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(34, 'Brunei Darussalam', 'BN', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(35, 'Bulgaria', 'BG', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(36, 'Burkina Faso', 'BF', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(37, 'Burundi', 'BI', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(38, 'Cambodia', 'KH', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(39, 'Cameroon', 'CM', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(40, 'Canada', 'CA', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(41, 'Cape Verde', 'CV', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(42, 'Cayman Islands', 'KY', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(43, 'Central African Republic', 'CF', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(44, 'Chad', 'TD', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(45, 'Chile', 'CL', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(46, 'China', 'CN', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(47, 'Christmas Island', 'CX', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(48, 'Cocos (Keeling) Islands', 'CC', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(49, 'Colombia', 'CO', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(50, 'Comoros', 'KM', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(51, 'Congo', 'CG', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(52, '\"Congo, the Democratic Republic of the\"', 'CD', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(53, 'Cook Islands', 'CK', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(54, 'Costa Rica', 'CR', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(55, 'CÃ´te dIvoire', 'CI', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(56, 'Croatia', 'HR', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(57, 'Cuba', 'CU', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(58, 'CuraÃ§ao', 'CW', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(59, 'Cyprus', 'CY', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(60, 'Czech Republic', 'CZ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(61, 'Denmark', 'DK', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(62, 'Djibouti', 'DJ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(63, 'Dominica', 'DM', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(64, 'Dominican Republic', 'DO', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(65, 'Ecuador', 'EC', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(66, 'Egypt', 'EG', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(67, 'El Salvador', 'SV', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(68, 'Equatorial Guinea', 'GQ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(69, 'Eritrea', 'ER', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(70, 'Estonia', 'EE', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(71, 'Ethiopia', 'ET', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(72, 'Falkland Islands (Malvinas)', 'FK', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(73, 'Faroe Islands', 'FO', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(74, 'Fiji', 'FJ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(75, 'Finland', 'FI', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(76, 'France', 'FR', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(77, 'French Guiana', 'GF', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(78, 'French Polynesia', 'PF', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(79, 'French Southern Territories', 'TF', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(80, 'Gabon', 'GA', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(81, 'Gambia', 'GM', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(82, 'Georgia', 'GE', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(83, 'Germany', 'DE', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(84, 'Ghana', 'GH', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(85, 'Gibraltar', 'GI', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(86, 'Greece', 'GR', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(87, 'Greenland', 'GL', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(88, 'Grenada', 'GD', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(89, 'Guadeloupe', 'GP', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(90, 'Guam', 'GU', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(91, 'Guatemala', 'GT', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(92, 'Guernsey', 'GG', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(93, 'Guinea', 'GN', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(94, 'Guinea-Bissau', 'GW', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(95, 'Guyana', 'GY', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(96, 'Haiti', 'HT', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(97, 'Heard Island and McDonald Islands', 'HM', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(98, 'Holy See (Vatican City State)', 'VA', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(99, 'Honduras', 'HN', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(100, 'Hong Kong', 'HK', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(101, 'Hungary', 'HU', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(102, 'Iceland', 'IS', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(103, 'India', 'IN', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(104, 'Indonesia', 'ID', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(105, '\"Iran, Islamic Republic of\"', 'IR', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(106, 'Iraq', 'IQ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(107, 'Ireland', 'IE', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(108, 'Isle of Man', 'IM', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(109, 'Israel', 'IL', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(110, 'Italy', 'IT', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(111, 'Jamaica', 'JM', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(112, 'Japan', 'JP', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(113, 'Jersey', 'JE', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(114, 'Jordan', 'JO', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(115, 'Kazakhstan', 'KZ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(116, 'Kenya', 'KE', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(117, 'Kiribati', 'KI', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(118, '\"Korea, Democratic People Republic of\"', 'KP', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(119, '\"Korea, Republic of\"', 'KR', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(120, 'Kuwait', 'KW', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(121, 'Kyrgyzstan', 'KG', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(122, 'Lao People Democratic Republic', 'LA', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(123, 'Latvia', 'LV', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(124, 'Lebanon', 'LB', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(125, 'Lesotho', 'LS', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(126, 'Liberia', 'LR', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(127, 'Libya', 'LY', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(128, 'Liechtenstein', 'LI', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(129, 'Lithuania', 'LT', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(130, 'Luxembourg', 'LU', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(131, 'Macao', 'MO', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(132, '\"Macedonia, the Former Yugoslav Republic of\"', 'MK', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(133, 'Madagascar', 'MG', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(134, 'Malawi', 'MW', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(135, 'Malaysia', 'MY', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(136, 'Maldives', 'MV', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(137, 'Mali', 'ML', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(138, 'Malta', 'MT', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(139, 'Marshall Islands', 'MH', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(140, 'Martinique', 'MQ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(141, 'Mauritania', 'MR', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(142, 'Mauritius', 'MU', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(143, 'Mayotte', 'YT', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(144, 'Mexico', 'MX', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(145, '\"Micronesia, Federated States of\"', 'FM', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(146, '\"Moldova, Republic of\"', 'MD', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(147, 'Monaco', 'MC', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(148, 'Mongolia', 'MN', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(149, 'Montenegro', 'ME', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(150, 'Montserrat', 'MS', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(151, 'Morocco', 'MA', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(152, 'Mozambique', 'MZ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(153, 'Myanmar', 'MM', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(154, 'Namibia', 'NA', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(155, 'Nauru', 'NR', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(156, 'Nepal', 'NP', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(157, 'Netherlands', 'NL', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(158, 'New Caledonia', 'NC', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(159, 'New Zealand', 'NZ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(160, 'Nicaragua', 'NI', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(161, 'Niger', 'NE', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(162, 'Nigeria', 'NG', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(163, 'Niue', 'NU', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(164, 'Norfolk Island', 'NF', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(165, 'Northern Mariana Islands', 'MP', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(166, 'Norway', 'NO', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(167, 'Oman', 'OM', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(168, 'Pakistan', 'PK', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(169, 'Palau', 'PW', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(170, '\"Palestine, State of\"', 'PS', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(171, 'Panama', 'PA', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(172, 'Papua New Guinea', 'PG', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(173, 'Paraguay', 'PY', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(174, 'Peru', 'PE', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(175, 'Philippines', 'PH', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(176, 'Pitcairn', 'PN', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(177, 'Poland', 'PL', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(178, 'Portugal', 'PT', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(179, 'Puerto Rico', 'PR', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(180, 'Qatar', 'QA', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(181, 'RÃ©union', 'RE', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(182, 'Romania', 'RO', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(183, 'Russian Federation', 'RU', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(184, 'Rwanda', 'RW', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(185, 'Saint BarthÃ©lemy', 'BL', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(186, '\"Saint Helena, Ascension and Tristan da Cunha\"', 'SH', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(187, 'Saint Kitts and Nevis', 'KN', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(188, 'Saint Lucia', 'LC', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(189, 'Saint Martin (French part)', 'MF', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(190, 'Saint Pierre and Miquelon', 'PM', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(191, 'Saint Vincent and the Grenadines', 'VC', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(192, 'Samoa', 'WS', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(193, 'San Marino', 'SM', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(194, 'Sao Tome and Principe', 'ST', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(195, 'Saudi Arabia', 'SA', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(196, 'Senegal', 'SN', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(197, 'Serbia', 'RS', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(198, 'Seychelles', 'SC', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(199, 'Sierra Leone', 'SL', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(200, 'Singapore', 'SG', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(201, 'Sint Maarten (Dutch part)', 'SX', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(202, 'Slovakia', 'SK', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(203, 'Slovenia', 'SI', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(204, 'Solomon Islands', 'SB', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(205, 'Somalia', 'SO', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(206, 'South Africa', 'ZA', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(207, 'South Georgia and the South Sandwich Islands', 'GS', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(208, 'South Sudan', 'SS', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(209, 'Spain', 'ES', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(210, 'Sri Lanka', 'LK', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(211, 'Sudan', 'SD', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(212, 'Suriname', 'SR', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(213, 'Svalbard and Jan Mayen', 'SJ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(214, 'Swaziland', 'SZ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(215, 'Sweden', 'SE', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(216, 'Switzerland', 'CH', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(217, 'Syrian Arab Republic', 'SY', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(218, '\"Taiwan, Province of China\"', 'TW', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(219, 'Tajikistan', 'TJ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(220, '\"Tanzania, United Republic of\"', 'TZ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(221, 'Thailand', 'TH', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(222, 'Timor-Leste', 'TL', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(223, 'Togo', 'TG', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(224, 'Tokelau', 'TK', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(225, 'Tonga', 'TO', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(226, 'Trinidad and Tobago', 'TT', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(227, 'Tunisia', 'TN', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(228, 'Turkey', 'TR', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(229, 'Turkmenistan', 'TM', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(230, 'Turks and Caicos Islands', 'TC', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(231, 'Tuvalu', 'TV', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(232, 'Uganda', 'UG', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(233, 'Ukraine', 'UA', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(234, 'United Arab Emirates', 'AE', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(235, 'United Kingdom', 'GB', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(236, 'United States', 'US', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(237, 'United States Minor Outlying Islands', 'UM', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(238, 'Uruguay', 'UY', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(239, 'Uzbekistan', 'UZ', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(240, 'Vanuatu', 'VU', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(241, '\"Venezuela, Bolivarian Republic of\"', 'VE', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(242, 'Viet Nam', 'VN', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(243, '\"Virgin Islands, British\"', 'VG', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(244, '\"Virgin Islands, U.S.\"', 'VI', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(245, 'Wallis and Futuna', 'WF', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(246, 'Western Sahara', 'EH', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(247, 'Yemen', 'YE', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(248, 'Zambia', 'ZM', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL),
(249, 'Zimbabwe', 'ZW', '2022-01-18 10:37:05', '2022-01-18 10:37:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_password` varchar(250) NOT NULL,
  `customer_type` varchar(255) NOT NULL,
  `customer_logo` varchar(250) NOT NULL,
  `primary_color` varchar(250) NOT NULL,
  `cust_industry_id` int(11) NOT NULL,
  `country` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `zip` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `street` varchar(250) NOT NULL,
  `house_number` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `customer_email`, `customer_password`, `customer_type`, `customer_logo`, `primary_color`, `cust_industry_id`, `country`, `state`, `zip`, `city`, `street`, `house_number`, `created_at`, `updated_at`) VALUES
(1, 'Jaindra55', 'jai55@gmail.com', '$2y$10$NuO1ij2ne2d7fG.G5VlayuBx7t6nry2/LpWM9jKFt5urOMHMH5oQ.', 'Test55', '2080447076.jpg', '#dsdsd', 3, 'IN', 'Delhi', '110067', 'New Delhi', 'Strret1', '101', '2022-01-17 00:49:45', '2022-01-20 19:45:36'),
(2, 'Sanjay', 'sanjay@gmail.com', '$2y$10$1C5K7dAFMYofShYr8Bh0x.KUesMxYyLtNctgAoWO7/RcVZkt3N4.i', 'Education', '1258284984.png', '#sdss', 2, 'IN', 'Punjab', '172002', 'Mohali', 'Franco', '111', '2022-01-17 02:57:42', '2022-01-20 00:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `headings`
--

CREATE TABLE `headings` (
  `id` int(11) NOT NULL,
  `heading1` varchar(50) DEFAULT NULL,
  `heading2` varchar(50) DEFAULT NULL,
  `annotation1` varchar(50) DEFAULT NULL,
  `annotation2` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` int(11) NOT NULL,
  `industry` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `industry`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Medical', '2022-01-19 07:44:30', '2022-01-19 11:53:58', NULL),
(3, 'Edication', '2022-01-19 08:02:19', '2022-01-19 08:02:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `language` varchar(50) DEFAULT NULL,
  `language_code` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `language`, `language_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Deutsch', 'deu', '2022-01-18 10:22:53', '2022-01-18 10:22:53', NULL),
(2, 'English', 'eng', '2022-01-18 10:22:53', '2022-01-18 10:22:53', NULL),
(3, 'Chinese', 'zho', '2022-01-18 10:22:53', '2022-01-18 10:22:53', NULL),
(4, 'Korean', 'kor', '2022-01-18 10:22:53', '2022-01-18 10:22:53', NULL),
(5, 'Spanish', 'spa', '2022-01-18 10:22:53', '2022-01-18 10:22:53', NULL),
(6, 'Français ', 'fra', '2022-01-18 10:22:53', '2022-01-18 10:22:53', NULL),
(7, 'Italian', 'ita', '2022-01-18 10:22:53', '2022-01-18 10:22:53', NULL),
(8, 'Polski', 'pol', '2022-01-18 10:22:53', '2022-01-18 10:22:53', NULL),
(9, 'Português ', 'por', '2022-01-18 10:22:53', '2022-01-18 10:22:53', NULL),
(10, 'Nederlands', 'nld', '2022-01-18 10:22:53', '2022-01-18 10:22:53', NULL),
(11, 'Czech', 'ces', '2022-01-18 10:22:53', '2022-01-18 10:22:53', NULL),
(12, 'Danish', 'dan', '2022-01-18 10:22:53', '2022-01-18 10:22:53', NULL),
(13, 'Japanese', 'jpn', '2022-01-18 10:22:53', '2022-01-18 10:22:53', NULL),
(14, 'Russian', 'rus', '2022-01-18 10:22:53', '2022-01-18 10:22:53', NULL),
(15, 'Turkish', 'tur', '2022-01-18 10:22:53', '2022-01-18 10:22:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `house_number` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `questions_id` int(10) UNSIGNED NOT NULL,
  `option` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `axis` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `display_text` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `picture_name` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `std_opt` tinyint(4) NOT NULL DEFAULT 0,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `questions_id`, `option`, `axis`, `display_text`, `picture_name`, `std_opt`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Agra', NULL, '', NULL, 0, NULL, NULL, NULL),
(2, 1, 'Delhi', NULL, '', NULL, 0, NULL, NULL, NULL),
(3, 1, 'Noida', NULL, '', NULL, 0, NULL, NULL, NULL),
(4, 1, 'Faridabad', NULL, '', NULL, 0, NULL, NULL, NULL),
(5, 2, '111', NULL, '', NULL, 0, NULL, NULL, NULL),
(6, 2, '115', NULL, '', NULL, 0, NULL, NULL, NULL),
(7, 2, '103', NULL, '', NULL, 0, NULL, NULL, NULL),
(8, 2, '104', NULL, '', NULL, 0, NULL, NULL, NULL),
(9, 3, 'India', NULL, '', NULL, 0, NULL, NULL, NULL),
(10, 3, 'Australia', NULL, '', NULL, 0, NULL, NULL, NULL),
(11, 3, 'France', NULL, '', NULL, 0, NULL, NULL, NULL),
(12, 3, 'New Zeland', NULL, '', NULL, 0, NULL, NULL, NULL),
(13, 4, '110', NULL, '1', NULL, 0, NULL, NULL, NULL),
(14, 4, '90', NULL, '2', NULL, 0, NULL, NULL, NULL),
(15, 6, 'P1', NULL, 'PG1', NULL, 0, NULL, NULL, NULL),
(16, 6, 'P2', NULL, 'PG2', NULL, 0, NULL, NULL, NULL),
(17, 6, 'P3', NULL, 'PG3', NULL, 0, NULL, NULL, NULL),
(18, 6, 'P4', NULL, 'PG4', NULL, 0, NULL, NULL, NULL),
(19, 12, 'op1', NULL, 'op1', NULL, 0, NULL, NULL, NULL),
(20, 12, 'op2', NULL, 'op2', NULL, 0, NULL, NULL, NULL),
(21, 13, 'very bad', 'x', 'v_b', NULL, 0, NULL, NULL, NULL),
(22, 13, 'very good', 'x', 'v_g', NULL, 0, NULL, NULL, NULL),
(23, 13, 'Dhoni', 'y', 'dhoni', NULL, 0, NULL, NULL, NULL),
(24, 13, 'Kholi', 'y', 'kholi', NULL, 0, NULL, NULL, NULL),
(25, 13, 'Rohit', 'y', 'rohit', NULL, 0, NULL, NULL, NULL),
(26, 13, 'Rahul', 'y', 'rahul', NULL, 0, NULL, NULL, NULL),
(27, 16, 'country1', NULL, 'country1', NULL, 0, NULL, NULL, NULL),
(28, 16, 'country2', NULL, 'country2', NULL, 0, NULL, NULL, NULL),
(29, 16, 'country3', NULL, 'country3', NULL, 0, NULL, NULL, NULL),
(30, 16, 'country4', NULL, 'country4', NULL, 0, NULL, NULL, NULL),
(31, 15, 'Prio 1', NULL, 'Prio 1', NULL, 0, NULL, NULL, NULL),
(32, 15, 'Prio 2', NULL, 'Prio 2', NULL, 0, NULL, NULL, NULL),
(33, 15, 'Prio 3', NULL, 'Prio 3', NULL, 0, NULL, NULL, NULL),
(34, 15, 'Prio 4', NULL, 'Prio 4', NULL, 0, NULL, NULL, NULL),
(35, 17, 'Prio 1', NULL, 'Prio 1', 'A', 0, NULL, NULL, NULL),
(36, 17, 'Prio 2', NULL, 'Prio 2', 'B', 0, NULL, NULL, NULL),
(37, 17, 'Prio 3', NULL, 'Prio 3', 'C', 0, NULL, NULL, NULL),
(38, 17, 'Prio 4', NULL, 'Prio 4', 'D', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_data`
--

CREATE TABLE `personal_data` (
  `id` int(11) NOT NULL,
  `questionair_id` int(11) NOT NULL DEFAULT 0,
  `questionTitle` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active,0=inactive, 2=deleted',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questionairs`
--

CREATE TABLE `questionairs` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `base_color` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `button_background` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `button_text` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language_sub_id` int(11) NOT NULL DEFAULT 0,
  `start_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_publish` tinyint(1) DEFAULT 0,
  `headline` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_text` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_text` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `display_progress_bar` tinyint(1) DEFAULT 0,
  `last_page_timer` int(11) DEFAULT NULL,
  `idle_timer` int(11) DEFAULT NULL,
  `protected_link` tinyint(1) DEFAULT 0,
  `password_for_protected_link` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `select_customer` int(11) DEFAULT 0,
  `url_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questionairs`
--

INSERT INTO `questionairs` (`id`, `name`, `year`, `base_color`, `button_background`, `button_text`, `language_id`, `language_sub_id`, `start_img`, `last_img`, `is_publish`, `headline`, `start_text`, `last_text`, `display_progress_bar`, `last_page_timer`, `idle_timer`, `protected_link`, `password_for_protected_link`, `select_customer`, `url_link`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'Alte Meister', '2010', '#48KKAS', '#48KKAS', '#48KKAS', '4', 0, '20220125_162706-header.jpg', '20220125_162706-colosseum_in_rome-april_2007-1-_copie_2b.jpg', 1, 'Datenschutzerklärung / Dataprivacy', '<p>WE WANT TO IMPROVE OUR VISITOR EXPERIENCE</p>', '<p>Thank You</p>', 0, 10, 10, 1, '3LGS72FLDy', 20, 'survey-start/1', '2022-01-25 16:27:06', '2022-01-25 16:27:06', NULL, 1),
(2, 'January', '2022', '#ff0000', '#ff0000', '#ff0000', '9', 0, '', '', 0, '1', '<p>1</p>', '<p>1</p>', 0, 10, 10, 0, NULL, 1, 'survey-start/2', '2022-01-28 06:56:15', '2022-01-28 06:56:15', NULL, 0),
(4, 'Alte meister   ftf', '5668', 'hghgf', 'gg', 'fg', '2', 0, '20220127_111511-header.jpg', '20220127_111511-header.jpg', 0, 'hghh', '<p>fghf</p>', '<p>ghfghf</p>', 0, 0, 0, 0, NULL, 0, NULL, '2022-01-27 11:15:11', '2022-01-27 11:15:11', NULL, 0),
(5, 'Alte Meister   t', '3567', '4534hhg', 'fgfgh', 'ggh', '2', 0, '20220127_111705-favicon.png', '20220127_111705-damir-bosnjak.jpg', 1, 'gyyg', '<p>Help us to by getting to know you and share how you liked our exhibition</p>\r\n', '<p>Help us to by getting to know you and share how you liked our exhibition</p>\r\n', 0, 10, 0, 1, 'WuUfiUbDzx', 1, 'start-survey/5', '2022-01-27 11:17:05', '2022-01-31 06:20:16', NULL, 1),
(6, 'January Test', '2021', '#ff0000', '#3333ff', '#ffff99', '2', 0, 'start.jpg', 'last.jpg', 1, 'Headline January Test', '<p><strong>Welcome</strong></p>', '<p><em>Thank you</em></p>', 0, 20, 60, 1, '8QHLEdlSTd', 1, 'survey-start/6', '2022-01-28 08:00:17', '2022-01-28 08:00:17', NULL, 1),
(7, 'January121', '2021', '#ff0000', '#3333ff', '#ffff99', '2', 0, 'start.jpg', 'last.jpg', 1, 'Headline January 121', '<p><strong>Welcome</strong></p>', '<p><em>Thank you</em></p>', 0, 20, 60, 1, '8QHLEdlST1', 1, 'survey-start/7', '2022-01-28 08:00:17', '2022-01-28 08:00:17', NULL, 1),
(8, 'Jhfjfh', '3647', 'jhjgj', 'hjjjghjg', 'hghjgjhg', '3', 0, '20220127_134809-header.jpg', '20220127_134809-favicon.png', 0, 'dfdhj', '<p>hgfe</p>\r\n', '<p>fghjgfh</p>\r\n', 0, 0, 0, 0, NULL, 1, 'start-survey/8', '2022-01-27 13:48:09', '2022-01-31 06:20:36', NULL, 0),
(9, 'Eghjeg', '4546', 'jehfrje', 'hejgfejh', 'ghdefg', '4', 0, '20220127_135110-jan-sendereks.jpg', '20220127_135110-default-avatar.png', 0, 'fhhjgfrhj', '<p>ghghjghj</p>', '<p>hjghhhg</p>', 0, 0, 0, 0, NULL, 1, NULL, '2022-01-27 13:51:10', '2022-01-27 13:51:10', NULL, 1),
(10, 'Hjd', '5567', 'bjhhjf', 'yghj', 'hjgj', '5', 0, '20220127_145348-favicon.png', '20220127_145348-colosseum_in_rome-april_2007-1-_copie_2b.jpg', 1, 'jkfdhj', '<p>uhjuj</p>\r\n', '<p>ghhfh</p>\r\n', 0, 10, 0, 1, 'QtXNKrfCXQ', 21, 'survey-start/10', '2022-01-27 14:53:48', '2022-01-31 08:28:30', NULL, 1),
(11, 'Jhdfj', '3889', 'hbjh', 'hjg', 'ghjg', '8', 0, '20220127_145450-damir-bosnjak.jpg', '20220127_145450-amazon-black.svg', 1, 'jhfkj', '<p>hgjg</p>\r\n', '<p>gh</p>\r\n', 0, 0, 0, 0, NULL, 1, 'survey-start/11', '2022-01-27 14:54:50', '2022-01-31 07:57:49', NULL, 1),
(12, 'Udhfg', '4999', 'jhf', 'ujhgjhg', 'fkjh', '8', 0, '20220127_145627-colosseum_in_rome-april_2007-1-_copie_2b.jpg', '20220127_145627-damir-bosnjak.jpg', 0, 'djfhdj', '<p>hgjhg</p>', '<p>hg</p>', 0, 0, 0, 1, 'hdXznojwc1', 1, NULL, '2022-01-27 14:56:27', '2022-01-31 10:30:13', '2022-01-31 10:30:13', 2),
(13, 'Jfdjdb', '4008', 'jfkdh', 'hjjg', 'jghjf', '1', 0, '20220127_150026-colosseum_in_rome-april_2007-1-_copie_2b.jpg', '20220127_150026-jan-sendereks.jpg', 0, 'jfbh', '<p>hjjg</p>', '<p>hgjgj</p>', 0, 0, 0, 0, NULL, 0, NULL, '2022-01-27 15:00:26', '2022-01-27 15:00:26', NULL, 1),
(14, 'Hdg', '3999', 'jhkfh', 'hjh', 'jhj', '2', 0, '20220127_150425-default-avatar.png', '20220127_150425-colosseum_in_rome-april_2007-1-_copie_2b.jpg', 0, 'jbfhb', '<p>hjgh</p>', '<p>hfhf</p>', 0, 10, 0, 1, 'nx8hOGWU4u', 0, NULL, '2022-01-27 15:04:25', '2022-01-31 09:15:55', '2022-01-31 09:15:55', 2),
(15, 'Red Fort Surveyhh', '3002', 'jkkjh', 'hjhkjh', 'jhjkhkj', '4', 0, '20220127_155822-colosseum_in_rome-april_2007-1-_copie_2b.jpg', '20220127_155822-apple-icon.png', 1, 'jvbhjd', '<p>hhjgj</p>\r\n', '<p>bgjbgjh</p>\r\n', 0, 10, 0, 1, 'a5w4BHSWUt', 2, 'start-survey/15', '2022-01-27 15:58:22', '2022-01-31 10:11:50', NULL, 1),
(16, 'Red Fort Survey nvjv', '2001', 'nbdnqmb', 'jbhjb', 'hbjhbj', '8', 0, '20220128_062843-damir-bosnjak.jpg', '20220128_062843-colosseum_in_rome-april_2007-1-_copie_2b.jpg', 0, 'fbhvhbvf', '<p>hhjvh</p>\r\n', '<p>gvhgv</p>\r\n', 0, 0, 0, 0, NULL, 0, NULL, '2022-01-28 06:28:43', '2022-01-31 10:28:01', '2022-01-31 10:28:01', 2),
(17, 'Hdsvbhv', '2010', 'hf', 'bjhb', 'hb', '5', 0, '20220128_063430-damir-bosnjak.jpg', '20220128_063430-damir-bosnjak.jpg', 0, 'cbsd', '<p>hbjhbh</p>', '<p>jvbhv</p>', 0, 0, 0, 0, NULL, 0, NULL, '2022-01-28 06:34:30', '2022-01-28 06:34:30', NULL, 1),
(18, 'Dbfhdv', '2019', 'hfg', 'hjdgcbhcvh', 'gh', '6', 0, '20220128_063528-damir-bosnjak.jpg', '20220128_063528-colosseum_in_rome-april_2007-1-_copie_2b.jpg', 1, 'djbejhh', '<p>jghgh</p>\r\n', '<p>gjh</p>\r\n', 0, 0, 0, 0, NULL, 21, 'survey-start/18', '2022-01-28 06:35:28', '2022-01-31 08:07:20', NULL, 1),
(19, 'Fhghjfgh', '2019', 'iuhjgf', 'ghjg', 'h', '4', 0, '20220128_063926-damir-bosnjak.jpg', '20220128_063926-damir-bosnjak.jpg', 0, 'jfbvjfhd', '<p>hjgjg</p>', '<p>h</p>', 0, 0, 0, 0, NULL, 0, NULL, '2022-01-28 06:39:26', '2022-01-28 06:39:26', NULL, 0),
(20, 'Fbhjf', '2001', 'jhfe', 'jhj', 'jgh', '2', 0, '20220128_064111-colosseum_in_rome-april_2007-1-_copie_2b.jpg', '20220128_064111-apple-icon.png', 0, 'dhfvhv', '<p>hgvgh</p>', '<p>vhgv</p>', 0, 10, 0, 1, 'm0uZX2PCQr', 2, NULL, '2022-01-28 06:41:11', '2022-01-28 06:41:11', NULL, 1),
(21, 'Fbhjf', '1001', 'jhfe', 'jhj', 'jgh', '3', 0, '20220128_064152-colosseum_in_rome-april_2007-1-_copie_2b.jpg', '20220128_064152-apple-icon.png', 0, 'dhfvhv', '<p>hgvgh</p>', '<p>vhgv</p>', 0, 10, 0, 1, 'ECb7MaoAT9', 2, NULL, '2022-01-28 06:41:52', '2022-01-28 06:41:52', NULL, 1),
(22, 'Jbjhg', '2333', 'thgfgg', 'fhghgf', 'fghfghf', '5', 0, '20220131_063124-damir-bosnjak.jpg', '20220131_063124-default-avatar.png', 1, 'fgd', '<p>spanish hi</p>\r\n', '<p>spanish bye</p>\r\n', 0, 10, 23, 1, 'hO2rew0KwL', 21, 'survey-start/22', '2022-01-31 06:30:11', '2022-01-31 06:31:43', NULL, 1),
(23, 'Alte Meister   G', '2002', '#48KKAS', '#48KKAS', '#48KKAS', '6', 0, '20220131_110928-jan-sendereks.jpg', '20220131_110928-damir-bosnjak.jpg', 1, 'wejwkrj', '<p>Hi</p>\r\n', '<p>Thqank you</p>\r\n', 0, 10, 10, 1, 'SAyHQitzGS', 1, 'survey-start/23', '2022-01-31 11:09:28', '2022-01-31 11:10:17', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questionair_and_questype`
--

CREATE TABLE `questionair_and_questype` (
  `id` int(11) NOT NULL,
  `questionair_id` int(11) NOT NULL DEFAULT 0,
  `ques_type_id` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active,0=inactive, 2=deleted',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionair_and_questype`
--

INSERT INTO `questionair_and_questype` (`id`, `questionair_id`, `ques_type_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 1, 1, '2022-02-01 03:56:43', '2022-02-01 14:56:43', NULL),
(3, 6, 2, 1, '2022-02-01 17:11:18', '2022-02-02 04:11:18', NULL),
(4, 6, 3, 1, '2022-02-01 19:24:17', '2022-02-02 06:24:17', NULL),
(5, 6, 10, 1, '2022-02-02 18:39:34', '2022-02-03 05:39:34', NULL),
(6, 6, 11, 1, '2022-02-04 03:10:13', '2022-02-04 14:10:13', NULL),
(7, 6, 12, 1, '2022-02-04 03:10:13', '2022-02-04 14:10:13', NULL),
(8, 6, 13, 1, '2022-02-04 03:10:13', '2022-02-04 14:10:13', NULL),
(9, 6, 14, 1, '2022-02-04 03:10:13', '2022-02-04 14:10:13', NULL),
(10, 6, 6, 1, '2022-02-04 03:10:13', '2022-02-04 14:10:13', NULL),
(11, 6, 5, 1, '2022-02-04 03:10:13', '2022-02-04 14:10:13', NULL),
(12, 6, 7, 1, '2022-02-04 03:10:13', '2022-02-04 14:10:13', NULL),
(13, 6, 9, 1, '2022-02-04 03:10:13', '2022-02-04 14:10:13', NULL),
(14, 6, 8, 1, '2022-02-04 03:10:13', '2022-02-04 14:10:13', NULL),
(15, 6, 4, 1, '2022-02-04 03:10:13', '2022-02-04 14:10:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questionair_other_language`
--

CREATE TABLE `questionair_other_language` (
  `id` int(11) NOT NULL,
  `questiaonair_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `start_text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `headline` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active,0=deactivated',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questionair_other_language`
--

INSERT INTO `questionair_other_language` (`id`, `questiaonair_id`, `language_id`, `start_text`, `last_text`, `headline`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 5, 2, 'Help us to by getting to know you and share how you liked our exhibition', 'Help us to by getting to know you and share how you liked our exhibition', 'Help us to by getting to know you and share how you liked our exhibition', 1, '2022-01-27 00:17:06', '2022-01-27 11:17:06', NULL),
(2, 5, 6, 'ythf', 'ythf', 'ythf', 1, '2022-01-27 00:17:06', '2022-01-27 11:17:06', NULL),
(3, 6, 3, 'Help us to by getting to know you and share how you liked our exhibition', 'Help us to by getting to know you and share how you liked our exhibition', 'Help us to by getting to know you and share how you liked our exhibition', 1, '2022-01-27 00:34:15', '2022-01-27 11:34:15', NULL),
(4, 6, 4, 'jdhjf', 'jdhjf', 'jdhjf', 1, '2022-01-27 00:34:15', '2022-01-27 11:34:15', NULL),
(5, 7, 3, 'jfdhdjh', 'jfdhdjh', 'jfdhdjh', 1, '2022-01-27 02:47:10', '2022-01-27 13:47:10', NULL),
(6, 7, 8, 'fhdg', 'fhdg', 'fhdg', 1, '2022-01-27 02:47:10', '2022-01-27 13:47:10', NULL),
(7, 8, 4, 'jfh', 'jfh', 'jfh', 1, '2022-01-27 02:48:09', '2022-01-27 13:48:09', NULL),
(8, 8, 8, 'dfg', 'dfg', 'dfg', 1, '2022-01-27 02:48:09', '2022-01-27 13:48:09', NULL),
(9, 9, 3, 'hejgjeh', 'hejgjeh', 'hejgjeh', 1, '2022-01-27 02:51:10', '2022-01-27 13:51:10', NULL),
(10, 11, 6, 'jfdh', 'jfdh', 'jfdh', 1, '2022-01-27 03:54:50', '2022-01-27 14:54:50', NULL),
(11, 12, 3, 'hjjh', 'hjjh', 'hjjh', 1, '2022-01-27 03:56:27', '2022-01-27 14:56:27', NULL),
(12, 13, 5, 'jnvj', 'jnvj', 'jnvj', 1, '2022-01-27 04:00:26', '2022-01-27 15:00:26', NULL),
(13, 14, 5, 'djkhjh', 'djkhjh', 'djkhjh', 1, '2022-01-27 04:04:25', '2022-01-27 15:04:25', NULL),
(14, 14, 7, 'mnfnm', 'mnfnm', 'mnfnm', 1, '2022-01-27 04:04:26', '2022-01-27 15:04:26', NULL),
(15, 14, 8, 'jbfhb', 'jbfhb', 'jbfhb', 1, '2022-01-27 04:04:26', '2022-01-27 15:04:26', NULL),
(16, 15, 2, 'jcbhjb', 'jcbhjb', 'jcbhjb', 1, '2022-01-27 04:58:22', '2022-01-27 15:58:22', NULL),
(17, 15, 6, 'hdfjh', 'hdfjh', 'hdfjh', 1, '2022-01-27 04:58:22', '2022-01-27 15:58:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `questionair_type_id` int(11) NOT NULL DEFAULT 0,
  `page_id` int(11) NOT NULL DEFAULT 1,
  `questionair_id` tinyint(5) NOT NULL DEFAULT 0,
  `question_type_id` tinyint(5) NOT NULL DEFAULT 0,
  `question` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scale_discription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lang_code` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language_id` int(11) NOT NULL DEFAULT 2,
  `std_qns` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=standardQuestion, 0=not_standardQuestion',
  `mandatory` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=mandatory, 0= not mandatory',
  `max_ans_size` int(11) NOT NULL DEFAULT 0 COMMENT 'scale_length or max_ans_size, number_length',
  `number_unit` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `open_text_field_ans` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=open_text_field, 0=not_need_open_text_field ',
  `personal_data_question_required` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=personal_question_required, 0=no_required_personal_question_field',
  `dependent_answer` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `first_data_or_not` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=first_data, 0=other data',
  `options` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `display_texts` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questionair_type_id`, `page_id`, `questionair_id`, `question_type_id`, `question`, `scale_discription`, `lang_code`, `language_id`, `std_qns`, `mandatory`, `max_ans_size`, `number_unit`, `open_text_field_ans`, `personal_data_question_required`, `dependent_answer`, `status`, `first_data_or_not`, `options`, `display_texts`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 6, 1, 'Where is Taj Mahal', NULL, 'eng', 2, 0, 1, 0, NULL, 1, 0, '', 1, 0, NULL, NULL, '2022-01-29 17:03:09', '2022-01-29 17:03:09', NULL),
(2, 1, 1, 6, 1, 'What is the no. between [100, 110]', NULL, 'eng', 2, 0, 1, 2, NULL, 0, 0, '', 1, 0, NULL, NULL, '2022-01-29 17:05:01', '2022-01-29 17:05:01', NULL),
(3, 3, 1, 6, 2, 'Capital of India', NULL, 'eng', 2, 1, 1, 0, NULL, 1, 0, 'Q02 First Time Visitor', 1, 0, NULL, NULL, '2022-01-30 15:50:57', '2022-01-30 15:50:57', NULL),
(4, 4, 2, 6, 3, 'What is the correct value > 110', NULL, 'eng', 2, 1, 1, 11, NULL, 1, 0, 'Q02 First Time Visitor', 1, 0, NULL, NULL, '2022-01-30 19:05:36', '2022-01-30 19:05:36', NULL),
(6, 1, 2, 6, 1, 'Program working', NULL, 'eng', 2, 1, 1, 3, NULL, 0, 0, 'Q22 Female', 1, 0, NULL, NULL, '2022-01-31 19:26:47', '2022-01-31 19:26:47', NULL),
(7, 7, 2, 6, 12, 'Annotation1', NULL, 'eng', 2, 1, 1, 3, NULL, 0, 0, 'Q22 Female', 1, 0, NULL, NULL, '2022-01-31 19:26:47', '2022-01-31 19:26:47', NULL),
(8, 5, 2, 6, 10, 'Agreement', NULL, 'eng', 2, 1, 1, 3, NULL, 0, 0, 'Q22 Female', 1, 0, NULL, NULL, '2022-01-31 19:26:47', '2022-01-31 19:26:47', NULL),
(9, 6, 2, 6, 11, 'Headline1', NULL, 'eng', 2, 1, 1, 3, NULL, 0, 0, 'Q22 Female', 1, 0, NULL, NULL, '2022-01-31 19:26:47', '2022-01-31 19:26:47', NULL),
(10, 9, 2, 6, 14, 'Annotation2', NULL, 'eng', 2, 1, 1, 3, NULL, 0, 0, 'Q22 Female', 1, 0, NULL, NULL, '2022-01-31 19:26:47', '2022-01-31 19:26:47', NULL),
(11, 8, 2, 6, 13, 'Headline2', NULL, 'eng', 2, 1, 1, 3, NULL, 0, 0, 'Q22 Female', 1, 0, NULL, NULL, '2022-01-31 19:26:47', '2022-01-31 19:26:47', NULL),
(12, 10, 2, 6, 6, 'Scale Question', '(1=very bad, 2=bad, 3=avg, 4=good, 5=very good, 6=outstanding)', 'eng', 2, 1, 1, 6, NULL, 0, 0, 'Q22 Female', 1, 0, NULL, NULL, '2022-01-31 19:26:47', '2022-01-31 19:26:47', NULL),
(13, 11, 2, 6, 5, 'Matrix Question', '(1=very bad, 2=bad, 3=avg, 4=good, 5=very good)', 'eng', 2, 1, 1, 5, NULL, 0, 0, 'Q22 Female', 1, 0, NULL, NULL, '2022-01-31 19:26:47', '2022-01-31 19:26:47', NULL),
(14, 12, 2, 6, 7, 'Number Question', NULL, 'eng', 2, 1, 1, 6, '$', 0, 0, 'Q22 Female', 1, 0, NULL, NULL, '2022-01-31 19:26:47', '2022-01-31 19:26:47', NULL),
(15, 13, 2, 6, 9, 'Ranking Question', NULL, 'eng', 2, 1, 1, 2, '$', 0, 0, 'Q22 Female', 1, 0, NULL, NULL, '2022-01-31 19:26:47', '2022-01-31 19:26:47', NULL),
(16, 14, 2, 6, 8, 'Country Question', NULL, 'eng', 2, 1, 1, 0, NULL, 0, 0, 'Q22 Female', 1, 0, NULL, NULL, '2022-01-31 19:26:47', '2022-01-31 19:26:47', NULL),
(17, 15, 2, 6, 4, 'Picture Question (Multiple choice)', NULL, 'eng', 2, 1, 0, 0, NULL, 0, 0, 'Q22 Female', 1, 0, NULL, NULL, '2022-01-31 19:26:47', '2022-01-31 19:26:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questionss`
--

CREATE TABLE `questionss` (
  `id` int(10) UNSIGNED NOT NULL,
  `questionair_type_id` int(11) NOT NULL DEFAULT 0,
  `page_id` int(11) NOT NULL DEFAULT 1,
  `questionair_id` int(11) NOT NULL DEFAULT 6,
  `question_type_id` int(10) UNSIGNED DEFAULT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lang_code` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language_id` int(11) NOT NULL DEFAULT 2,
  `std_qns` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=standardQuestion, 0=not_standardQuestion',
  `mandatory` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=mandatory, 0= not mandatory',
  `max_ans_size` int(11) NOT NULL DEFAULT 0 COMMENT 'scale_length or max_ans_size, number_length',
  `number_unit` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `open_text_field_ans` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=open_text_field, 0=not_need_open_text_field ',
  `personal_data_question_required` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=personal_question_required, 0=no_required_personal_question_field',
  `dependent_answer` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `first_data_or_not` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=first_data, 0=other data',
  `options` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `display_texts` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questionss`
--

INSERT INTO `questionss` (`id`, `questionair_type_id`, `page_id`, `questionair_id`, `question_type_id`, `question`, `lang_code`, `language_id`, `std_qns`, `mandatory`, `max_ans_size`, `number_unit`, `open_text_field_ans`, `personal_data_question_required`, `dependent_answer`, `status`, `first_data_or_not`, `options`, `display_texts`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 6, 1, 'Where is Taj Mahal', 'eng', 2, 0, 0, 0, NULL, 1, 0, '', 1, 0, NULL, NULL, '2022-01-29 17:03:09', '2022-01-29 17:03:09', NULL),
(2, 1, 2, 6, 1, 'What is the no. between [100, 110]', 'eng', 2, 0, 1, 2, NULL, 0, 0, '', 1, 0, NULL, NULL, '2022-01-29 17:05:01', '2022-01-29 17:05:01', NULL),
(3, 3, 1, 6, 2, 'Capital of India', 'eng', 2, 1, 0, 0, NULL, 1, 0, 'Q02 First Time Visitor', 1, 0, NULL, NULL, '2022-01-30 15:50:57', '2022-01-30 15:50:57', NULL),
(4, 4, 1, 6, 3, 'What is the correct value > 110', 'eng', 2, 1, 1, 11, NULL, 1, 0, 'Q02 First Time Visitor', 1, 0, NULL, NULL, '2022-01-30 19:05:36', '2022-01-30 19:05:36', NULL),
(6, 1, 2, 6, 1, 'Program working', 'eng', 4, 1, 1, 0, NULL, 0, 0, 'Q22 Female', 1, 0, NULL, NULL, '2022-01-31 19:26:47', '2022-01-31 19:26:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions_old`
--

CREATE TABLE `questions_old` (
  `id` int(10) UNSIGNED NOT NULL,
  `questionair_id` int(11) NOT NULL DEFAULT 6,
  `question_type_id` int(10) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lang_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT 2,
  `page_id` int(11) DEFAULT NULL,
  `max_tool` int(11) NOT NULL,
  `mandatory` tinyint(1) NOT NULL DEFAULT 1,
  `open_ans` tinyint(1) NOT NULL DEFAULT 1,
  `rows` int(11) NOT NULL DEFAULT 0,
  `std_qns` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `dependent_answer` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) DEFAULT 1,
  `options` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `display_texts` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions_old`
--

INSERT INTO `questions_old` (`id`, `questionair_id`, `question_type_id`, `question`, `lang_code`, `language_id`, `page_id`, `max_tool`, `mandatory`, `open_ans`, `rows`, `std_qns`, `dependent_answer`, `status`, `options`, `display_texts`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'Where is Taj Mahal', 'eng', 2, 1, 3, 0, 1, 0, 'std_qns', '', 1, NULL, NULL, '2022-01-29 22:33:09', '2022-01-29 22:33:09'),
(2, 6, 1, 'What is the no. between [100, 110]', 'eng', 2, 2, 2, 1, 0, 0, 'std_qns', '', 1, NULL, NULL, '2022-01-29 22:35:01', '2022-01-29 22:35:01'),
(3, 6, 2, 'Capital of India', 'eng', 2, 1, 0, 1, 1, 0, 'std_qns', 'Q02 First Time Visitor', 1, NULL, NULL, '2022-01-30 21:20:57', '2022-01-30 21:20:57'),
(4, 6, 3, 'What is the correct value > 110', 'eng', 2, 1, 0, 1, 1, 11, 'std_qns', 'Q02 First Time Visitor', 1, NULL, NULL, '2022-01-31 00:35:36', '2022-01-31 00:35:36'),
(6, 6, 1, 'Program working', 'eng', 2, 2, 0, 1, 0, 0, 'std_qns', 'Q22 Female', 1, NULL, NULL, '2022-02-01 00:56:47', '2022-02-01 00:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `question_dependecy`
--

CREATE TABLE `question_dependecy` (
  `id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT 0,
  `question_id` int(11) NOT NULL,
  `question_type_id` int(11) NOT NULL DEFAULT 0,
  `dependency` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=only appear if checked, 0 = only appear if unchecked, 2= no dependency ',
  `answer_name` varchar(200) DEFAULT NULL,
  `dependecy_logic` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0= no dependency, 1= logic AND, 2= Logic OR',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active, 2=delete',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_dependecy`
--

INSERT INTO `question_dependecy` (`id`, `option_id`, `language_id`, `question_id`, `question_type_id`, `dependency`, `answer_name`, `dependecy_logic`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(37, 328, 2, 203, 2, 0, 'op11', 1, 1, '2022-02-10 19:47:55', '2022-02-11 06:47:57', NULL),
(38, 329, 2, 203, 2, 0, 'op12', 1, 1, '2022-02-10 19:47:55', '2022-02-11 06:47:57', NULL),
(39, 331, 5, 204, 2, 0, 'op21', 1, 1, '2022-02-10 19:47:56', '2022-02-11 06:47:57', NULL),
(40, 332, 5, 204, 2, 0, 'op22', 1, 1, '2022-02-10 19:47:56', '2022-02-11 06:47:57', NULL),
(41, 334, 7, 205, 2, 0, 'op31', 1, 1, '2022-02-10 19:47:56', '2022-02-11 06:47:57', NULL),
(42, 335, 7, 205, 2, 0, 'op32', 1, 1, '2022-02-10 19:47:56', '2022-02-11 06:47:57', NULL),
(43, 337, 8, 206, 2, 0, 'op41', 1, 1, '2022-02-10 19:47:57', '2022-02-11 06:47:58', NULL),
(44, 338, 8, 206, 2, 0, 'op42', 1, 1, '2022-02-10 19:47:57', '2022-02-11 06:47:58', NULL),
(45, 341, 2, 207, 2, 1, 'oppp12', 2, 1, '2022-02-10 20:48:45', '2022-02-11 07:48:46', NULL),
(46, 343, 5, 208, 2, 1, 'oppp22', 2, 1, '2022-02-10 20:48:45', '2022-02-11 07:48:46', NULL),
(47, 345, 7, 209, 2, 1, 'oppp32', 2, 1, '2022-02-10 20:48:45', '2022-02-11 07:48:46', NULL),
(48, 347, 8, 210, 2, 1, 'opp42', 2, 1, '2022-02-10 20:48:45', '2022-02-11 07:48:46', NULL),
(49, 328, 0, 203, 2, 1, 'op11', 2, 1, '2022-02-10 20:48:45', '2022-02-11 07:48:45', NULL),
(50, 331, 0, 204, 2, 1, 'op21', 2, 1, '2022-02-10 20:48:46', '2022-02-11 07:48:46', NULL),
(51, 334, 0, 205, 2, 1, 'op31', 2, 1, '2022-02-10 20:48:46', '2022-02-11 07:48:46', NULL),
(52, 337, 0, 206, 2, 1, 'op41', 2, 1, '2022-02-10 20:48:46', '2022-02-11 07:48:46', NULL),
(62, 345, 0, 209, 2, 1, 'oppp32', 1, 1, '2022-02-10 20:58:54', '2022-02-11 07:58:54', NULL),
(63, 337, 0, 206, 2, 1, 'op41', 1, 1, '2022-02-10 20:58:54', '2022-02-11 07:58:54', NULL),
(71, 331, 0, 204, 2, 1, 'op21', 1, 1, '2022-02-10 21:00:20', '2022-02-11 08:00:20', NULL),
(72, 343, 0, 208, 2, 1, 'oppp22', 1, 1, '2022-02-10 21:00:20', '2022-02-11 08:00:20', NULL),
(73, 334, 0, 205, 2, 1, 'op31', 1, 1, '2022-02-10 21:00:20', '2022-02-11 08:00:20', NULL),
(74, 345, 0, 209, 2, 1, 'oppp32', 1, 1, '2022-02-10 21:00:20', '2022-02-11 08:00:20', NULL),
(75, 337, 0, 206, 2, 1, 'op41', 1, 1, '2022-02-10 21:00:21', '2022-02-11 08:00:21', NULL),
(76, 347, 0, 210, 2, 1, 'opp42', 1, 1, '2022-02-10 21:00:21', '2022-02-11 08:00:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question_lists`
--

CREATE TABLE `question_lists` (
  `id` int(11) NOT NULL,
  `ques_type_id` int(11) DEFAULT NULL,
  `question_name` varchar(50) DEFAULT NULL,
  `display_text` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `languages` varchar(50) DEFAULT NULL,
  `search_question` tinyint(1) DEFAULT NULL,
  `maximum_answer_by_user` int(11) DEFAULT NULL,
  `mandatory_question` tinyint(1) DEFAULT NULL,
  `open_text_field_ans` tinyint(1) DEFAULT NULL,
  `ans_field_size` int(5) DEFAULT NULL,
  `no_ans_option` tinyint(1) DEFAULT NULL,
  `personal_data_Question` tinyint(1) DEFAULT NULL,
  `scale_length` varchar(50) DEFAULT NULL,
  `number_length` varchar(50) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `maxinmum_ranking` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `question_types`
--

CREATE TABLE `question_types` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `short_code` varchar(50) DEFAULT NULL,
  `question_type` varchar(50) DEFAULT NULL,
  `status` tinyint(5) NOT NULL DEFAULT 1 COMMENT 'COMMENT ''0=active, 1=inactive''',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_types`
--

INSERT INTO `question_types` (`id`, `title`, `description`, `short_code`, `question_type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Multiple Choice Question', NULL, 'mcq', 'Multi', 1, '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(2, 'Single Choice Question', NULL, 'scq', 'Single', 1, '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(3, 'Open Question', NULL, 'oq', 'Multi', 1, '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(4, 'Picture Question (Multiple choice)', NULL, 'pq', 'Multi', 1, '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(5, 'Matrix Question', NULL, 'mq', 'Matrix', 1, '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(6, 'Scale Question', NULL, 'sq', 'Scale', 1, '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(7, 'Number Question', NULL, 'nq', 'Number', 1, '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(8, 'Country Question', NULL, 'cq', 'Country', 1, '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(9, 'Ranking Question', NULL, 'rq', 'Ranking', 1, '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(10, 'Agreement', NULL, 'agr', 'agreement', 1, '2022-02-04 16:23:59', '2022-02-04 16:23:59', NULL),
(11, 'Headline1', NULL, 'headline', 'headline', 1, '2022-02-04 16:23:59', '2022-02-04 16:23:59', NULL),
(12, 'Annotation1', NULL, 'ano', 'annotation', 1, '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(13, 'Headline2', NULL, 'headline', 'headline', 1, '2022-02-04 16:23:59', '2022-02-04 16:23:59', NULL),
(14, 'Annotation2', NULL, 'ano', 'annotation', 1, '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `survey_ans`
--

CREATE TABLE `survey_ans` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT 0,
  `questionair_id` int(11) NOT NULL DEFAULT 0,
  `language_id` int(11) NOT NULL DEFAULT 0,
  `page_id` int(11) NOT NULL DEFAULT 0,
  `question_id` int(11) NOT NULL DEFAULT 0,
  `other` tinyint(1) NOT NULL DEFAULT 0,
  `answer` varchar(255) DEFAULT NULL,
  `other_answer` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey_ans`
--

INSERT INTO `survey_ans` (`id`, `customer_id`, `questionair_id`, `language_id`, `page_id`, `question_id`, `other`, `answer`, `other_answer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 6, 2, 1, 1, 0, 'Agra,Delhi,Noida,Faridabad', 'sdf', '2022-02-04 08:17:11', '2022-02-04 08:28:12', NULL),
(2, 1, 6, 2, 1, 3, 0, 'skiped', 'sdf', '2022-02-04 08:17:11', '2022-02-04 08:28:12', NULL),
(3, 1, 6, 2, 1, 4, 0, 'dfsdf', NULL, '2022-02-04 08:17:11', '2022-02-04 08:23:18', NULL),
(4, 1, 6, 2, 1, 2, 0, '111,115', NULL, '2022-02-04 08:28:27', '2022-02-04 08:28:27', NULL),
(5, 1, 6, 2, 1, 6, 0, 'P3,P4', NULL, '2022-02-04 08:28:27', '2022-02-04 08:28:27', NULL),
(6, 2, 6, 2, 1, 1, 0, 'Agra,Delhi,Noida', 'ok', '2022-02-04 10:28:56', '2022-02-04 10:28:57', NULL),
(7, 2, 6, 2, 1, 2, 0, '103,104', NULL, '2022-02-04 10:29:08', '2022-02-04 10:29:08', NULL),
(8, 2, 6, 2, 1, 3, 0, 'skiped', 'uncheck', '2022-02-04 10:29:42', '2022-02-04 10:29:42', NULL),
(9, 2, 6, 2, 1, 4, 0, '112', NULL, '2022-02-04 10:29:55', '2022-02-04 10:30:24', NULL),
(10, 2, 6, 2, 1, 6, 0, 'P2,P3', NULL, '2022-02-04 10:30:41', '2022-02-04 10:30:41', NULL),
(11, 3, 6, 2, 1, 1, 0, 'Agra,Delhi,Faridabad', NULL, '2022-02-04 10:39:10', '2022-02-04 10:39:10', NULL),
(12, 4, 6, 2, 1, 1, 0, 'Agra,Delhi,Noida', NULL, '2022-02-04 10:39:52', '2022-02-04 10:39:52', NULL),
(13, 5, 6, 2, 1, 1, 0, 'Delhi,Noida,Faridabad', NULL, '2022-02-04 10:45:35', '2022-02-04 10:45:35', NULL),
(14, 6, 6, 2, 1, 1, 0, 'Delhi,Noida,Faridabad', NULL, '2022-02-04 10:50:24', '2022-02-04 10:50:24', NULL),
(15, 6, 6, 2, 1, 2, 0, '111,115,103', NULL, '2022-02-04 10:50:48', '2022-02-04 10:50:48', NULL),
(16, 6, 6, 2, 1, 3, 0, 'skiped', NULL, '2022-02-04 10:50:56', '2022-02-04 10:51:14', NULL),
(17, 6, 6, 2, 1, 4, 0, 'asd', NULL, '2022-02-04 10:51:37', '2022-02-04 10:51:37', NULL),
(18, 6, 6, 2, 1, 6, 0, 'P1,P2', NULL, '2022-02-04 10:52:07', '2022-02-04 10:52:07', NULL),
(19, 7, 6, 2, 1, 1, 0, 'Agra,Delhi,Noida', NULL, '2022-02-04 10:59:04', '2022-02-04 10:59:39', NULL),
(20, 7, 6, 2, 1, 2, 0, '115,103', NULL, '2022-02-04 10:59:54', '2022-02-04 10:59:54', NULL),
(21, 7, 6, 2, 1, 3, 0, 'Australia', NULL, '2022-02-04 11:00:01', '2022-02-04 11:00:30', NULL),
(22, 7, 6, 2, 1, 4, 0, 'dscs', NULL, '2022-02-04 11:00:59', '2022-02-04 11:00:59', NULL),
(23, 7, 6, 2, 1, 6, 0, 'P1,P2', NULL, '2022-02-04 11:01:04', '2022-02-04 11:01:04', NULL),
(24, 942348, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-07 09:13:41', '2022-02-07 09:13:41', NULL),
(25, 942348, 6, 2, 1, 1, 0, 'Agra,Delhi,Noida', 'test', '2022-02-07 09:18:19', '2022-02-07 09:18:19', NULL),
(26, 942348, 6, 2, 1, 2, 0, '111,115', NULL, '2022-02-07 09:18:19', '2022-02-07 09:18:19', NULL),
(27, 942348, 6, 2, 1, 3, 0, 'India', 'test', '2022-02-07 09:18:19', '2022-02-07 09:18:19', NULL),
(28, 942348, 6, 2, 1, 4, 0, 'ok', NULL, '2022-02-07 09:18:19', '2022-02-07 09:18:19', NULL),
(29, 942348, 6, 2, 1, 6, 0, 'P1,P2,P3,P4', NULL, '2022-02-07 09:18:19', '2022-02-07 09:18:19', NULL),
(30, 318262, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-07 09:20:10', '2022-02-07 09:20:10', NULL),
(31, 981773, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-07 12:17:25', '2022-02-07 12:21:38', NULL),
(32, 981773, 6, 2, 1, 12, 0, '4', NULL, '2022-02-07 12:52:37', '2022-02-07 13:49:45', NULL),
(33, 634661, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-07 16:13:48', '2022-02-07 16:13:48', NULL),
(34, 634661, 6, 2, 1, 12, 0, '2', NULL, '2022-02-07 16:13:48', '2022-02-07 16:42:09', NULL),
(35, 632542, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-08 10:58:41', '2022-02-08 10:58:41', NULL),
(36, 632542, 6, 2, 1, 12, 0, '3', NULL, '2022-02-08 10:58:41', '2022-02-08 11:31:29', NULL),
(37, 632542, 6, 2, 1, 13, 0, '3,2', NULL, '2022-02-08 10:58:41', '2022-02-08 11:31:29', NULL),
(38, 629486, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-08 11:45:57', '2022-02-08 11:45:57', NULL),
(39, 629486, 6, 2, 1, 12, 0, '3', NULL, '2022-02-08 11:45:57', '2022-02-08 11:45:57', NULL),
(40, 629486, 6, 2, 1, 13, 0, '3', NULL, '2022-02-08 11:45:57', '2022-02-08 11:46:47', NULL),
(41, 729281, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-08 12:19:48', '2022-02-08 12:19:48', NULL),
(42, 729281, 6, 2, 1, 12, 0, '4', NULL, '2022-02-08 12:19:48', '2022-02-08 12:19:48', NULL),
(43, 729281, 6, 2, 1, 13, 0, 'skiped', NULL, '2022-02-08 12:19:48', '2022-02-08 12:19:48', NULL),
(44, 651175, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-09 03:55:11', '2022-02-09 03:55:11', NULL),
(45, 651175, 6, 2, 1, 12, 0, '3', NULL, '2022-02-09 03:55:11', '2022-02-09 03:55:11', NULL),
(46, 651175, 6, 2, 1, 13, 0, '4,5,3,1', NULL, '2022-02-09 03:55:11', '2022-02-09 04:01:56', NULL),
(47, 350067, 6, 2, 1, 1, 0, 'Agra,Delhi,Noida,skiped', 'in agra', '2022-02-09 10:40:05', '2022-02-09 10:40:05', NULL),
(48, 350067, 6, 2, 1, 2, 0, '111,115,103,skiped', NULL, '2022-02-09 10:40:05', '2022-02-09 10:40:05', NULL),
(49, 350067, 6, 2, 1, 3, 0, 'France', 'bahut ache', '2022-02-09 10:40:05', '2022-02-09 10:40:05', NULL),
(50, 350067, 6, 2, 1, 4, 0, 'all value', NULL, '2022-02-09 10:40:05', '2022-02-09 10:40:05', NULL),
(51, 350067, 6, 2, 1, 6, 0, 'P2,P3,P4,skiped', NULL, '2022-02-09 10:40:05', '2022-02-09 10:40:05', NULL),
(52, 350067, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-09 10:40:05', '2022-02-09 10:40:05', NULL),
(53, 350067, 6, 2, 1, 12, 0, '3', NULL, '2022-02-09 10:40:05', '2022-02-09 10:40:05', NULL),
(54, 350067, 6, 2, 1, 13, 0, '5,4,4,3', NULL, '2022-02-09 10:40:05', '2022-02-09 10:40:05', NULL),
(55, 811302, 6, 2, 1, 1, 0, 'Delhi,Noida,Faridabad', NULL, '2022-02-09 10:43:09', '2022-02-09 10:43:10', NULL),
(56, 811302, 6, 2, 1, 2, 0, '115,103,104', NULL, '2022-02-09 10:43:10', '2022-02-09 10:43:10', NULL),
(57, 811302, 6, 2, 1, 3, 0, 'France', NULL, '2022-02-09 10:43:10', '2022-02-09 10:43:10', NULL),
(58, 811302, 6, 2, 1, 4, 0, 'all', NULL, '2022-02-09 10:43:10', '2022-02-09 10:43:10', NULL),
(59, 811302, 6, 2, 1, 6, 0, 'P1,P2,P3', NULL, '2022-02-09 10:43:10', '2022-02-09 10:43:10', NULL),
(60, 811302, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-09 10:43:10', '2022-02-09 10:43:10', NULL),
(61, 811302, 6, 2, 1, 12, 0, '5', NULL, '2022-02-09 10:43:10', '2022-02-09 10:43:10', NULL),
(62, 811302, 6, 2, 1, 13, 0, '4,3,2,3', NULL, '2022-02-09 10:43:10', '2022-02-09 10:43:10', NULL),
(63, 770655, 6, 2, 1, 1, 0, 'Agra,Delhi,Noida', NULL, '2022-02-09 11:53:40', '2022-02-09 11:54:33', NULL),
(64, 770655, 6, 2, 1, 2, 0, '111,115', NULL, '2022-02-09 11:53:40', '2022-02-09 11:53:40', NULL),
(65, 770655, 6, 2, 1, 6, 0, 'P1,P2,P4', NULL, '2022-02-09 11:53:40', '2022-02-09 11:54:33', NULL),
(66, 770655, 6, 2, 1, 12, 0, '3', NULL, '2022-02-09 11:53:40', '2022-02-09 11:53:40', NULL),
(67, 900083, 6, 2, 1, 12, 0, '2', NULL, '2022-02-11 09:33:21', '2022-02-11 09:33:21', NULL),
(68, 149951, 6, 2, 1, 12, 0, '4', NULL, '2022-02-12 14:04:26', '2022-02-12 14:04:26', NULL),
(69, 149951, 6, 2, 1, 14, 0, '356', NULL, '2022-02-12 14:04:27', '2022-02-12 14:04:27', NULL),
(70, 149951, 6, 2, 1, 1, 0, 'Agra,Delhi,Noida', 'taj', '2022-02-12 14:05:24', '2022-02-12 14:05:25', NULL),
(71, 149951, 6, 2, 1, 2, 0, '111,115,103', NULL, '2022-02-12 14:05:25', '2022-02-12 14:05:25', NULL),
(72, 149951, 6, 2, 1, 3, 0, 'India', 'india', '2022-02-12 14:05:25', '2022-02-12 14:05:25', NULL),
(73, 149951, 6, 2, 1, 4, 0, 'ok', NULL, '2022-02-12 14:05:25', '2022-02-12 14:05:25', NULL),
(74, 149951, 6, 2, 1, 6, 0, 'P1,P2,P3', NULL, '2022-02-12 14:05:25', '2022-02-12 14:05:25', NULL),
(75, 149951, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-12 14:05:25', '2022-02-12 14:05:25', NULL),
(76, 149951, 6, 2, 1, 13, 0, '1,2,4,5', NULL, '2022-02-12 14:05:25', '2022-02-12 14:05:25', NULL),
(77, 124383, 6, 2, 1, 1, 0, 'Agra,Delhi', 'taj', '2022-02-12 14:13:51', '2022-02-12 14:13:52', NULL),
(78, 124383, 6, 2, 1, 2, 0, '103,104', NULL, '2022-02-12 14:13:52', '2022-02-12 14:13:52', NULL),
(79, 124383, 6, 2, 1, 3, 0, 'India', 'india', '2022-02-12 14:13:53', '2022-02-12 14:13:53', NULL),
(80, 124383, 6, 2, 1, 4, 0, '111', NULL, '2022-02-12 14:13:53', '2022-02-12 14:13:53', NULL),
(81, 124383, 6, 2, 1, 6, 0, 'P1,P2,P3', NULL, '2022-02-12 14:13:53', '2022-02-12 14:13:53', NULL),
(82, 124383, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-12 14:13:53', '2022-02-12 14:13:53', NULL),
(83, 124383, 6, 2, 1, 12, 0, '5', NULL, '2022-02-12 14:13:53', '2022-02-12 14:13:53', NULL),
(84, 124383, 6, 2, 1, 13, 0, '5,3,2,1,336', NULL, '2022-02-12 14:13:53', '2022-02-12 14:13:53', NULL),
(85, 129874, 6, 2, 1, 1, 0, 'Agra,Delhi,Noida', NULL, '2022-02-12 14:21:07', '2022-02-12 14:21:07', NULL),
(86, 129874, 6, 2, 1, 2, 0, '111,115,103', NULL, '2022-02-12 14:21:07', '2022-02-12 14:21:07', NULL),
(87, 129874, 6, 2, 1, 3, 0, 'France', NULL, '2022-02-12 14:21:07', '2022-02-12 14:21:07', NULL),
(88, 129874, 6, 2, 1, 4, 0, 'er', NULL, '2022-02-12 14:21:07', '2022-02-12 14:21:07', NULL),
(89, 129874, 6, 2, 1, 6, 0, 'P1,P2,P4', NULL, '2022-02-12 14:21:07', '2022-02-12 14:21:07', NULL),
(90, 129874, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-12 14:21:07', '2022-02-12 14:21:07', NULL),
(91, 129874, 6, 2, 1, 12, 0, '4', NULL, '2022-02-12 14:21:07', '2022-02-12 14:21:07', NULL),
(92, 129874, 6, 2, 1, 13, 0, '5,4,4,2,557', NULL, '2022-02-12 14:21:07', '2022-02-12 14:21:07', NULL),
(93, 276187, 6, 2, 1, 1, 0, 'Agra,Delhi,Noida', NULL, '2022-02-12 14:35:42', '2022-02-12 14:35:42', NULL),
(94, 276187, 6, 2, 1, 2, 0, '111,115,103', NULL, '2022-02-12 14:35:42', '2022-02-12 14:35:42', NULL),
(95, 276187, 6, 2, 1, 3, 0, 'India', NULL, '2022-02-12 14:35:42', '2022-02-12 14:35:42', NULL),
(96, 276187, 6, 2, 1, 4, 0, '111', NULL, '2022-02-12 14:35:42', '2022-02-12 14:35:42', NULL),
(97, 276187, 6, 2, 1, 6, 0, 'P2,P3,P4', NULL, '2022-02-12 14:35:42', '2022-02-12 14:35:42', NULL),
(98, 276187, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-12 14:35:42', '2022-02-12 14:35:42', NULL),
(99, 276187, 6, 2, 1, 12, 0, '3', NULL, '2022-02-12 14:35:42', '2022-02-12 14:35:42', NULL),
(100, 276187, 6, 2, 1, 14, 0, '88', NULL, '2022-02-12 14:35:42', '2022-02-12 14:35:42', NULL),
(101, 651855, 6, 2, 1, 1, 0, 'Agra,Delhi,Noida,Faridabad', NULL, '2022-02-12 14:59:29', '2022-02-12 14:59:29', NULL),
(102, 651855, 6, 2, 1, 2, 0, '103,104', NULL, '2022-02-12 14:59:29', '2022-02-12 14:59:29', NULL),
(103, 651855, 6, 2, 1, 3, 0, 'India', NULL, '2022-02-12 14:59:29', '2022-02-12 14:59:29', NULL),
(104, 651855, 6, 2, 1, 4, 0, '111', NULL, '2022-02-12 14:59:29', '2022-02-12 14:59:29', NULL),
(105, 651855, 6, 2, 1, 6, 0, 'P1,P2,P3', NULL, '2022-02-12 14:59:29', '2022-02-12 14:59:29', NULL),
(106, 651855, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-12 14:59:29', '2022-02-12 14:59:29', NULL),
(107, 651855, 6, 2, 1, 12, 0, '4', NULL, '2022-02-12 14:59:29', '2022-02-12 14:59:29', NULL),
(108, 651855, 6, 2, 1, 13, 0, '4,2,4,2', NULL, '2022-02-12 14:59:29', '2022-02-12 15:04:41', NULL),
(109, 651855, 6, 2, 1, 14, 0, '00', NULL, '2022-02-12 14:59:29', '2022-02-12 14:59:29', NULL),
(110, 179564, 6, 2, 1, 16, 0, 'country2,', NULL, '2022-02-17 12:43:36', '2022-02-17 12:51:00', NULL),
(111, 179564, 6, 2, 1, 1, 0, 'Agra,Delhi', NULL, '2022-02-17 12:48:26', '2022-02-17 12:50:59', NULL),
(112, 179564, 6, 2, 1, 2, 0, '111,115,103', NULL, '2022-02-17 12:50:59', '2022-02-17 12:50:59', NULL),
(113, 179564, 6, 2, 1, 3, 0, 'India', NULL, '2022-02-17 12:50:59', '2022-02-17 12:50:59', NULL),
(114, 179564, 6, 2, 1, 4, 0, 'qwertyu', NULL, '2022-02-17 12:50:59', '2022-02-17 12:50:59', NULL),
(115, 179564, 6, 2, 1, 6, 0, 'P1,P2,P4', NULL, '2022-02-17 12:50:59', '2022-02-17 12:50:59', NULL),
(116, 179564, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-17 12:51:00', '2022-02-17 12:51:00', NULL),
(117, 179564, 6, 2, 1, 12, 0, '2', NULL, '2022-02-17 12:51:00', '2022-02-17 12:51:00', NULL),
(118, 179564, 6, 2, 1, 13, 0, '1,2,3,4', NULL, '2022-02-17 12:51:00', '2022-02-17 12:51:00', NULL),
(119, 179564, 6, 2, 1, 14, 0, '654123', NULL, '2022-02-17 12:51:00', '2022-02-17 12:51:00', NULL),
(120, 572259, 6, 2, 1, 15, 0, '3,1,4,2', NULL, '2022-02-18 08:48:46', '2022-02-18 08:48:46', NULL),
(121, 572259, 6, 2, 2, 1, 0, 'Agra,Delhi', NULL, '2022-02-18 08:49:59', '2022-02-18 08:49:59', NULL),
(122, 572259, 6, 2, 2, 2, 0, '111,115,103', NULL, '2022-02-18 08:49:59', '2022-02-18 08:49:59', NULL),
(123, 572259, 6, 2, 2, 3, 0, 'Australia', NULL, '2022-02-18 08:49:59', '2022-02-18 08:49:59', NULL),
(124, 572259, 6, 2, 2, 4, 0, 'qw', NULL, '2022-02-18 08:49:59', '2022-02-18 08:49:59', NULL),
(125, 572259, 6, 2, 2, 6, 0, 'P2,P3,P4', NULL, '2022-02-18 08:49:59', '2022-02-18 08:49:59', NULL),
(126, 572259, 6, 2, 2, 8, 0, 'checked', NULL, '2022-02-18 08:49:59', '2022-02-18 08:49:59', NULL),
(127, 572259, 6, 2, 2, 12, 0, '4', NULL, '2022-02-18 08:49:59', '2022-02-18 08:49:59', NULL),
(128, 572259, 6, 2, 2, 13, 0, '2,3,2,3', NULL, '2022-02-18 08:49:59', '2022-02-18 08:49:59', NULL),
(129, 572259, 6, 2, 2, 14, 0, '987456', NULL, '2022-02-18 08:49:59', '2022-02-18 08:49:59', NULL),
(130, 572259, 6, 2, 2, 16, 0, 'country1,country2,', NULL, '2022-02-18 08:49:59', '2022-02-18 08:49:59', NULL),
(131, 369071, 6, 2, 1, 1, 0, 'Agra,Delhi,Noida', NULL, '2022-02-18 08:53:57', '2022-02-18 08:53:57', NULL),
(132, 369071, 6, 2, 1, 2, 0, '111,115,103', NULL, '2022-02-18 08:53:57', '2022-02-18 08:53:57', NULL),
(133, 369071, 6, 2, 1, 3, 0, 'India', NULL, '2022-02-18 08:53:57', '2022-02-18 08:53:57', NULL),
(134, 369071, 6, 2, 1, 4, 0, 'qwerty', NULL, '2022-02-18 08:53:57', '2022-02-18 08:53:57', NULL),
(135, 369071, 6, 2, 1, 6, 0, 'P1,P2,P3', NULL, '2022-02-18 08:53:57', '2022-02-18 08:53:57', NULL),
(136, 369071, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-18 08:53:57', '2022-02-18 08:53:57', NULL),
(137, 369071, 6, 2, 1, 12, 0, '5', NULL, '2022-02-18 08:53:57', '2022-02-18 08:53:57', NULL),
(138, 369071, 6, 2, 1, 13, 0, '4,3,1,3', NULL, '2022-02-18 08:53:57', '2022-02-18 08:53:57', NULL),
(139, 369071, 6, 2, 1, 14, 0, '951357', NULL, '2022-02-18 08:53:57', '2022-02-18 08:53:57', NULL),
(140, 369071, 6, 2, 1, 15, 0, '1,2', NULL, '2022-02-18 08:53:57', '2022-02-18 08:53:57', NULL),
(141, 369071, 6, 2, 1, 16, 0, 'country1,country3,Nederlands', NULL, '2022-02-18 08:53:57', '2022-02-18 08:53:57', NULL),
(142, 462140, 6, 2, 1, 15, 0, '33-2,34-1', NULL, '2022-02-18 09:03:35', '2022-02-18 11:11:23', NULL),
(143, 462140, 6, 2, 2, 1, 0, 'Agra,Delhi', NULL, '2022-02-18 11:12:38', '2022-02-18 11:12:38', NULL),
(144, 462140, 6, 2, 2, 2, 0, '111,115,103', NULL, '2022-02-18 11:12:38', '2022-02-18 11:12:38', NULL),
(145, 462140, 6, 2, 2, 3, 0, 'Australia', NULL, '2022-02-18 11:12:38', '2022-02-18 11:12:38', NULL),
(146, 462140, 6, 2, 2, 4, 0, 'rty', NULL, '2022-02-18 11:12:38', '2022-02-18 11:12:38', NULL),
(147, 462140, 6, 2, 2, 6, 0, 'P1,P2,P3', NULL, '2022-02-18 11:12:38', '2022-02-18 11:12:38', NULL),
(148, 462140, 6, 2, 2, 8, 0, 'checked', NULL, '2022-02-18 11:12:38', '2022-02-18 11:12:38', NULL),
(149, 462140, 6, 2, 2, 12, 0, '3', NULL, '2022-02-18 11:12:38', '2022-02-18 11:12:38', NULL),
(150, 462140, 6, 2, 2, 13, 0, '1,3,2,5', NULL, '2022-02-18 11:12:38', '2022-02-18 11:12:38', NULL),
(151, 462140, 6, 2, 2, 14, 0, '248607', NULL, '2022-02-18 11:12:38', '2022-02-18 11:12:38', NULL),
(152, 462140, 6, 2, 2, 16, 0, 'country2,country3', NULL, '2022-02-18 11:12:38', '2022-02-18 11:12:38', NULL),
(153, 43113, 6, 2, 1, 16, 0, 'skiped', NULL, '2022-02-18 14:12:03', '2022-02-18 14:28:22', NULL),
(154, 43113, 6, 2, 1, 14, 0, 'skiped', NULL, '2022-02-18 14:29:59', '2022-02-18 14:42:00', NULL),
(155, 43113, 6, 2, 1, 13, 0, 'checked', NULL, '2022-02-18 14:48:54', '2022-02-18 15:06:42', NULL),
(156, 43113, 6, 2, 1, 12, 0, 'checked', NULL, '2022-02-18 15:09:02', '2022-02-18 15:09:08', NULL),
(157, 43113, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-18 15:12:30', '2022-02-18 15:17:19', NULL),
(158, 43113, 6, 2, 1, 6, 0, 'P2,P3', NULL, '2022-02-18 15:18:11', '2022-02-18 15:18:18', NULL),
(159, 43113, 6, 2, 1, 4, 0, '', NULL, '2022-02-18 15:19:09', '2022-02-18 15:27:10', NULL),
(160, 43113, 6, 2, 1, 3, 0, 'Australia', NULL, '2022-02-18 15:27:43', '2022-02-18 15:27:56', NULL),
(161, 43113, 6, 2, 1, 2, 0, 'skiped', NULL, '2022-02-18 15:29:54', '2022-02-18 15:30:07', NULL),
(162, 43113, 6, 2, 1, 1, 0, 'Agra,skiped', NULL, '2022-02-18 15:32:03', '2022-02-18 15:32:32', NULL),
(163, 43113, 6, 2, 1, 17, 0, 'skiped', NULL, '2022-02-18 15:42:24', '2022-02-18 15:54:19', NULL),
(164, 173277, 6, 2, 1, 17, 0, '35,36,38', NULL, '2022-02-19 04:39:48', '2022-02-19 04:39:48', NULL),
(165, 173277, 6, 2, 2, 1, 0, 'Agra,Delhi,Noida', NULL, '2022-02-19 04:45:14', '2022-02-19 04:45:14', NULL),
(166, 173277, 6, 2, 2, 2, 0, '111,115', NULL, '2022-02-19 04:45:15', '2022-02-19 04:45:15', NULL),
(167, 173277, 6, 2, 2, 3, 0, 'India', NULL, '2022-02-19 04:45:15', '2022-02-19 04:45:15', NULL),
(168, 173277, 6, 2, 2, 4, 0, 'ui', NULL, '2022-02-19 04:45:15', '2022-02-19 04:45:15', NULL),
(169, 173277, 6, 2, 2, 6, 0, 'P1,P2,P3', NULL, '2022-02-19 04:45:15', '2022-02-19 04:45:15', NULL),
(170, 173277, 6, 2, 2, 8, 0, 'checked', NULL, '2022-02-19 04:45:15', '2022-02-19 04:45:15', NULL),
(171, 173277, 6, 2, 2, 12, 0, '4', NULL, '2022-02-19 04:45:15', '2022-02-19 04:45:15', NULL),
(172, 173277, 6, 2, 2, 13, 0, '5,4,3,1', NULL, '2022-02-19 04:45:15', '2022-02-19 04:45:15', NULL),
(173, 173277, 6, 2, 2, 14, 0, '935170', NULL, '2022-02-19 04:45:15', '2022-02-19 04:45:15', NULL),
(174, 173277, 6, 2, 2, 15, 0, '31-2,33-1', NULL, '2022-02-19 04:45:15', '2022-02-19 04:45:15', NULL),
(175, 173277, 6, 2, 2, 16, 0, 'country2,country3', NULL, '2022-02-19 04:45:15', '2022-02-19 04:45:15', NULL),
(176, 249111, 6, 2, 1, 1, 0, 'Agra', NULL, '2022-02-19 04:53:38', '2022-02-19 04:53:38', NULL),
(177, 249111, 6, 2, 1, 2, 0, '103,104', NULL, '2022-02-19 04:53:39', '2022-02-19 04:53:39', NULL),
(178, 249111, 6, 2, 1, 3, 0, 'India', NULL, '2022-02-19 04:53:39', '2022-02-19 04:53:39', NULL),
(179, 249111, 6, 2, 1, 4, 0, 'from 111 to infinity', NULL, '2022-02-19 04:53:39', '2022-02-19 04:53:39', NULL),
(180, 249111, 6, 2, 1, 6, 0, 'P1,P2,P4', NULL, '2022-02-19 04:53:39', '2022-02-19 04:53:39', NULL),
(181, 249111, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-19 04:53:39', '2022-02-19 04:53:39', NULL),
(182, 249111, 6, 2, 1, 12, 0, '4', NULL, '2022-02-19 04:53:39', '2022-02-19 04:53:39', NULL),
(183, 249111, 6, 2, 1, 13, 0, '5,3,4,2', NULL, '2022-02-19 04:53:39', '2022-02-19 04:53:39', NULL),
(184, 249111, 6, 2, 1, 14, 0, '110018', NULL, '2022-02-19 04:53:39', '2022-02-19 04:53:39', NULL),
(185, 249111, 6, 2, 1, 15, 0, '32-1,34-2', NULL, '2022-02-19 04:53:39', '2022-02-19 04:53:39', NULL),
(186, 249111, 6, 2, 1, 16, 0, 'country2,Nederlands', NULL, '2022-02-19 04:53:40', '2022-02-19 04:53:40', NULL),
(187, 249111, 6, 2, 1, 17, 0, '36,38', NULL, '2022-02-19 04:53:40', '2022-02-19 04:53:40', NULL),
(188, 983091, 6, 2, 1, 1, 0, 'Agra,Delhi', NULL, '2022-02-19 04:59:58', '2022-02-19 04:59:58', NULL),
(189, 983091, 6, 2, 1, 2, 0, '103,104', NULL, '2022-02-19 04:59:58', '2022-02-19 04:59:58', NULL),
(190, 983091, 6, 2, 1, 3, 0, 'India', NULL, '2022-02-19 04:59:58', '2022-02-19 04:59:58', NULL),
(191, 498004, 6, 2, 1, 1, 0, 'Agra,Delhi', 'agra', '2022-02-19 05:08:24', '2022-02-19 05:15:43', NULL),
(192, 498004, 6, 2, 1, 2, 0, '115,103', NULL, '2022-02-19 05:08:24', '2022-02-19 05:08:24', NULL),
(193, 498004, 6, 2, 1, 3, 0, 'India', 'delhi', '2022-02-19 05:08:24', '2022-02-19 05:15:43', NULL),
(194, 498004, 6, 2, 2, 4, 0, 'ok', NULL, '2022-02-19 05:11:43', '2022-02-19 05:11:43', NULL),
(195, 498004, 6, 2, 2, 6, 0, 'P1,P2', NULL, '2022-02-19 05:11:44', '2022-02-19 05:11:44', NULL),
(196, 498004, 6, 2, 2, 8, 0, 'checked', NULL, '2022-02-19 05:11:44', '2022-02-19 05:11:44', NULL),
(197, 498004, 6, 2, 2, 12, 0, 'skiped,5', NULL, '2022-02-19 05:11:44', '2022-02-19 05:11:44', NULL),
(198, 498004, 6, 2, 2, 13, 0, 'skiped', NULL, '2022-02-19 05:11:44', '2022-02-19 05:11:44', NULL),
(199, 198160, 6, 2, 1, 1, 0, 'Agra,Delhi', 'agra', '2022-02-19 05:18:11', '2022-02-19 05:18:11', NULL),
(200, 198160, 6, 2, 1, 2, 0, '103,104', NULL, '2022-02-19 05:18:11', '2022-02-19 05:18:11', NULL),
(201, 198160, 6, 2, 1, 3, 0, 'India', 'delhi', '2022-02-19 05:18:11', '2022-02-19 05:18:11', NULL),
(202, 198160, 6, 2, 1, 4, 0, 'all', NULL, '2022-02-19 05:18:11', '2022-02-19 05:18:11', NULL),
(203, 198160, 6, 2, 1, 6, 0, 'P1,P2,P4', NULL, '2022-02-19 05:18:11', '2022-02-19 05:18:11', NULL),
(204, 198160, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-19 05:18:11', '2022-02-19 05:18:11', NULL),
(205, 198160, 6, 2, 1, 12, 0, '4', NULL, '2022-02-19 05:18:11', '2022-02-19 05:18:11', NULL),
(206, 198160, 6, 2, 1, 13, 0, '5,4,3,2', NULL, '2022-02-19 05:18:11', '2022-02-19 05:18:11', NULL),
(207, 198160, 6, 2, 1, 14, 0, '214569', NULL, '2022-02-19 05:18:11', '2022-02-19 05:18:11', NULL),
(208, 198160, 6, 2, 1, 15, 0, '33-1,34-2', NULL, '2022-02-19 05:18:11', '2022-02-19 05:18:11', NULL),
(209, 198160, 6, 2, 1, 16, 0, 'country4,Danish', NULL, '2022-02-19 05:18:11', '2022-02-19 05:18:11', NULL),
(210, 198160, 6, 2, 1, 17, 0, '36', NULL, '2022-02-19 05:18:11', '2022-02-19 05:18:11', NULL),
(211, 717447, 6, 2, 1, 1, 0, 'Agra,Delhi', 'agra', '2022-02-19 05:37:27', '2022-02-19 05:37:27', NULL),
(212, 717447, 6, 2, 1, 2, 0, '103,104', NULL, '2022-02-19 05:37:28', '2022-02-19 05:37:28', NULL),
(213, 717447, 6, 2, 1, 3, 0, 'India', 'delhi', '2022-02-19 05:37:28', '2022-02-19 05:37:28', NULL),
(214, 717447, 6, 2, 2, 4, 0, 'ok', NULL, '2022-02-19 05:38:44', '2022-02-19 05:38:44', NULL),
(215, 717447, 6, 2, 2, 6, 0, 'P2,P3,P4', NULL, '2022-02-19 05:38:44', '2022-02-19 05:38:44', NULL),
(216, 717447, 6, 2, 2, 8, 0, 'checked', NULL, '2022-02-19 05:38:44', '2022-02-19 05:38:44', NULL),
(217, 717447, 6, 2, 2, 12, 0, 'skiped,5', NULL, '2022-02-19 05:38:44', '2022-02-19 05:38:44', NULL),
(218, 717447, 6, 2, 2, 13, 0, 'skiped', NULL, '2022-02-19 05:38:44', '2022-02-19 05:38:44', NULL),
(219, 479521, 6, 2, 1, 1, 0, 'Agra,Delhi', NULL, '2022-02-19 05:58:13', '2022-02-19 05:58:13', NULL),
(220, 479521, 6, 2, 1, 2, 0, '111,115,103', NULL, '2022-02-19 05:58:13', '2022-02-19 05:58:13', NULL),
(221, 479521, 6, 2, 1, 3, 0, 'India', NULL, '2022-02-19 05:58:13', '2022-02-19 05:58:13', NULL),
(222, 479521, 6, 2, 1, 4, 0, 'jk', NULL, '2022-02-19 05:58:13', '2022-02-19 05:58:13', NULL),
(223, 479521, 6, 2, 1, 6, 0, 'P1,P2,P3', NULL, '2022-02-19 05:58:13', '2022-02-19 05:58:13', NULL),
(224, 479521, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-19 05:58:13', '2022-02-19 05:58:13', NULL),
(225, 479521, 6, 2, 1, 12, 0, '5', NULL, '2022-02-19 05:58:13', '2022-02-19 05:58:13', NULL),
(226, 479521, 6, 2, 1, 14, 0, '987412', NULL, '2022-02-19 05:58:13', '2022-02-19 05:58:13', NULL),
(227, 479521, 6, 2, 1, 15, 0, '31-1,33-2', NULL, '2022-02-19 05:58:13', '2022-02-19 05:58:13', NULL),
(228, 479521, 6, 2, 1, 16, 0, 'country3', NULL, '2022-02-19 05:58:13', '2022-02-19 05:58:13', NULL),
(229, 479521, 6, 2, 1, 17, 0, '35', NULL, '2022-02-19 05:58:13', '2022-02-19 05:58:13', NULL),
(230, 479521, 6, 2, 2, 13, 0, '5,1,3,2', NULL, '2022-02-19 05:58:23', '2022-02-19 05:58:23', NULL),
(231, 34719, 6, 2, 1, 1, 0, 'Agra,Delhi', NULL, '2022-02-19 06:00:15', '2022-02-19 06:00:15', NULL),
(232, 34719, 6, 2, 1, 2, 0, '111,115', NULL, '2022-02-19 06:00:15', '2022-02-19 06:00:15', NULL),
(233, 34719, 6, 2, 1, 6, 0, 'P1,P2,P3', NULL, '2022-02-19 06:00:15', '2022-02-19 06:00:15', NULL),
(234, 34719, 6, 2, 1, 12, 0, '4', NULL, '2022-02-19 06:00:15', '2022-02-19 06:00:15', NULL),
(235, 34719, 6, 2, 1, 14, 0, '654789', NULL, '2022-02-19 06:00:15', '2022-02-19 06:00:15', NULL),
(236, 34719, 6, 2, 2, 3, 0, 'India', NULL, '2022-02-19 06:00:31', '2022-02-19 06:00:31', NULL),
(237, 34719, 6, 2, 2, 8, 0, 'checked', NULL, '2022-02-19 06:00:31', '2022-02-19 06:00:31', NULL),
(238, 34719, 6, 2, 2, 13, 0, '1,2,5,1', NULL, '2022-02-19 06:00:31', '2022-02-19 06:00:31', NULL),
(239, 34719, 6, 2, 2, 17, 0, '36', NULL, '2022-02-19 06:00:31', '2022-02-19 06:00:31', NULL),
(240, 34719, 6, 2, 3, 4, 0, 'iop', NULL, '2022-02-19 06:00:56', '2022-02-19 06:00:56', NULL),
(241, 34719, 6, 2, 3, 15, 0, '31-1,32-2', NULL, '2022-02-19 06:00:56', '2022-02-19 06:00:56', NULL),
(242, 34719, 6, 2, 3, 16, 0, 'country1,country2,Armenia', NULL, '2022-02-19 06:00:56', '2022-02-19 06:00:56', NULL),
(243, 846594, 6, 2, 1, 1, 0, 'Agra,Delhi', NULL, '2022-02-19 06:04:58', '2022-02-19 06:12:36', NULL),
(244, 846594, 6, 2, 1, 2, 0, '111,115', NULL, '2022-02-19 06:04:58', '2022-02-19 06:04:58', NULL),
(245, 846594, 6, 2, 1, 3, 0, 'India', NULL, '2022-02-19 06:04:58', '2022-02-19 06:12:36', NULL),
(246, 846594, 6, 2, 2, 4, 0, 'ml', NULL, '2022-02-19 06:05:37', '2022-02-19 06:24:09', NULL),
(247, 846594, 6, 2, 2, 6, 0, 'P1,P2,P3', NULL, '2022-02-19 06:05:37', '2022-02-19 06:05:37', NULL),
(248, 846594, 6, 2, 2, 8, 0, 'checked', NULL, '2022-02-19 06:05:37', '2022-02-19 06:05:37', NULL),
(249, 846594, 6, 2, 2, 12, 0, '3', NULL, '2022-02-19 06:05:37', '2022-02-19 06:24:09', NULL),
(250, 846594, 6, 2, 2, 13, 0, '3,2,3,4', NULL, '2022-02-19 06:05:37', '2022-02-19 06:24:09', NULL),
(251, 846594, 6, 2, 2, 14, 0, '327895', NULL, '2022-02-19 06:13:46', '2022-02-19 06:24:09', NULL),
(252, 846594, 6, 2, 2, 15, 0, '31-1,32-2', NULL, '2022-02-19 06:13:46', '2022-02-19 06:13:46', NULL),
(253, 846594, 6, 2, 2, 16, 0, 'country2', NULL, '2022-02-19 06:13:46', '2022-02-19 06:24:09', NULL),
(254, 846594, 6, 2, 2, 17, 0, '35', NULL, '2022-02-19 06:15:00', '2022-02-19 06:22:57', NULL),
(255, 877612, 6, 2, 1, 1, 0, 'Agra,Delhi', NULL, '2022-02-19 06:25:32', '2022-02-19 06:25:32', NULL),
(256, 877612, 6, 2, 1, 2, 0, '111,115', NULL, '2022-02-19 06:25:32', '2022-02-19 06:25:32', NULL),
(257, 877612, 6, 2, 1, 3, 0, 'India', NULL, '2022-02-19 06:25:32', '2022-02-19 06:25:32', NULL),
(258, 877612, 6, 2, 2, 4, 0, 'kl', NULL, '2022-02-19 06:26:04', '2022-02-19 06:30:10', NULL),
(259, 877612, 6, 2, 2, 12, 0, '2', NULL, '2022-02-19 06:26:04', '2022-02-19 06:30:10', NULL),
(260, 877612, 6, 2, 2, 13, 0, '5,4,3,2', NULL, '2022-02-19 06:26:04', '2022-02-19 06:33:45', NULL),
(261, 877612, 6, 2, 2, 14, 0, '321456', NULL, '2022-02-19 06:26:04', '2022-02-19 06:30:10', NULL),
(262, 877612, 6, 2, 2, 15, 0, '31-1,32-2', NULL, '2022-02-19 06:26:04', '2022-02-19 06:28:32', NULL),
(263, 877612, 6, 2, 2, 16, 0, 'country1,country2,country3,country4', NULL, '2022-02-19 06:26:04', '2022-02-19 06:30:10', NULL),
(264, 877612, 6, 2, 2, 17, 0, '36,37,38', NULL, '2022-02-19 06:26:04', '2022-02-19 06:33:45', NULL),
(265, 877612, 6, 2, 2, 6, 0, 'P1,P2,P3', NULL, '2022-02-19 06:27:26', '2022-02-19 06:33:45', NULL),
(266, 877612, 6, 2, 2, 8, 0, 'checked', NULL, '2022-02-19 06:30:10', '2022-02-19 06:30:10', NULL),
(267, 877612, 6, 2, 1, 4, 0, 'dfb', NULL, '2022-02-19 06:32:11', '2022-02-19 06:33:02', NULL),
(268, 877612, 6, 2, 1, 8, 0, 'checked', NULL, '2022-02-19 06:32:11', '2022-02-19 06:32:11', NULL),
(269, 877612, 6, 2, 1, 12, 0, '3', NULL, '2022-02-19 06:32:11', '2022-02-19 06:33:02', NULL),
(270, 877612, 6, 2, 1, 13, 0, '3,5,2,3', NULL, '2022-02-19 06:32:11', '2022-02-19 06:32:11', NULL),
(271, 877612, 6, 2, 1, 14, 0, '354789', NULL, '2022-02-19 06:32:11', '2022-02-19 06:33:02', NULL),
(272, 877612, 6, 2, 1, 15, 0, '34-1', NULL, '2022-02-19 06:32:11', '2022-02-19 06:33:02', NULL),
(273, 877612, 6, 2, 1, 16, 0, 'country2,Algeria', NULL, '2022-02-19 06:32:11', '2022-02-19 06:33:02', NULL),
(274, 877612, 6, 2, 1, 17, 0, '35', NULL, '2022-02-19 06:32:11', '2022-02-19 06:32:11', NULL),
(275, 877612, 6, 2, 2, 1, 0, 'Agra,Delhi,Noida', NULL, '2022-02-19 06:33:45', '2022-02-19 06:33:45', NULL),
(276, 877612, 6, 2, 2, 2, 0, '111,115,103', NULL, '2022-02-19 06:33:45', '2022-02-19 06:33:45', NULL),
(277, 877612, 6, 2, 2, 3, 0, 'India', NULL, '2022-02-19 06:33:45', '2022-02-19 06:33:45', NULL),
(278, 938341, 6, 2, 1, 1, 0, 'Agra,Delhi', NULL, '2022-02-19 06:35:24', '2022-02-19 07:04:16', NULL),
(279, 938341, 6, 2, 1, 2, 0, '111,115', NULL, '2022-02-19 06:35:24', '2022-02-19 06:35:24', NULL),
(280, 938341, 6, 2, 1, 3, 0, 'Australia', NULL, '2022-02-19 06:35:24', '2022-02-19 07:04:16', NULL),
(281, 938341, 6, 2, 2, 4, 0, 'asadSda', NULL, '2022-02-19 06:36:04', '2022-02-19 06:55:54', NULL),
(282, 938341, 6, 2, 2, 6, 0, 'P1,P2,P3', NULL, '2022-02-19 06:36:04', '2022-02-19 06:36:04', NULL),
(283, 938341, 6, 2, 2, 8, 0, 'checked', NULL, '2022-02-19 06:36:04', '2022-02-19 06:36:04', NULL),
(284, 938341, 6, 2, 2, 12, 0, 'skiped,3', NULL, '2022-02-19 06:36:04', '2022-02-19 06:55:54', NULL),
(285, 938341, 6, 2, 2, 13, 0, '1,2,3,4', NULL, '2022-02-19 06:36:04', '2022-02-19 06:55:54', NULL),
(286, 938341, 6, 2, 2, 14, 0, '65', NULL, '2022-02-19 06:55:54', '2022-02-19 06:55:54', NULL),
(287, 938341, 6, 2, 2, 15, 0, '34-1', NULL, '2022-02-19 06:55:54', '2022-02-19 06:55:54', NULL),
(288, 938341, 6, 2, 2, 16, 0, 'Afghanistan', NULL, '2022-02-19 06:55:54', '2022-02-19 06:55:54', NULL),
(289, 938341, 6, 2, 2, 17, 0, '35,36', NULL, '2022-02-19 06:55:54', '2022-02-19 06:55:54', NULL),
(290, 139339, 6, 2, 1, 1, 0, 'Agra,Delhi', NULL, '2022-02-19 07:33:02', '2022-02-19 07:33:02', NULL),
(291, 139339, 6, 2, 1, 2, 0, '111,115', NULL, '2022-02-19 07:33:02', '2022-02-19 07:33:02', NULL),
(292, 139339, 6, 2, 1, 3, 0, 'India', NULL, '2022-02-19 07:33:02', '2022-02-19 07:33:02', NULL),
(293, 139339, 6, 2, 2, 4, 0, 'ui', NULL, '2022-02-19 07:33:46', '2022-02-19 07:33:46', NULL),
(294, 139339, 6, 2, 2, 6, 0, 'P1,P2,P3', NULL, '2022-02-19 07:33:46', '2022-02-19 07:33:46', NULL),
(295, 139339, 6, 2, 2, 8, 0, 'checked', NULL, '2022-02-19 07:33:46', '2022-02-19 07:33:46', NULL),
(296, 139339, 6, 2, 2, 12, 0, '5', NULL, '2022-02-19 07:33:46', '2022-02-19 07:33:46', NULL),
(297, 139339, 6, 2, 2, 13, 0, '1,2,3,4', NULL, '2022-02-19 07:33:46', '2022-02-19 07:33:46', NULL),
(298, 139339, 6, 2, 2, 14, 0, '357896', NULL, '2022-02-19 07:33:46', '2022-02-19 07:33:46', NULL),
(299, 139339, 6, 2, 2, 15, 0, '31-1,33-2', NULL, '2022-02-19 07:33:46', '2022-02-19 07:33:46', NULL),
(300, 139339, 6, 2, 2, 16, 0, 'country4', NULL, '2022-02-19 07:33:46', '2022-02-19 07:33:46', NULL),
(301, 139339, 6, 2, 2, 17, 0, '36', NULL, '2022-02-19 07:33:46', '2022-02-19 07:33:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `survey_ansa`
--

CREATE TABLE `survey_ansa` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT 0,
  `questionair_id` int(11) NOT NULL DEFAULT 0,
  `language_id` int(11) NOT NULL DEFAULT 0,
  `page_id` int(11) NOT NULL DEFAULT 0,
  `question_id` int(11) NOT NULL DEFAULT 0,
  `other` tinyint(1) NOT NULL DEFAULT 0,
  `answer` varchar(255) DEFAULT NULL,
  `other_answer` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey_ansa`
--

INSERT INTO `survey_ansa` (`id`, `customer_id`, `questionair_id`, `language_id`, `page_id`, `question_id`, `other`, `answer`, `other_answer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 6, 2, 1, 1, 0, 'skiped', NULL, '2022-02-03 11:46:23', '2022-02-03 11:46:23', NULL),
(2, 0, 6, 2, 1, 3, 0, 'skiped', NULL, '2022-02-03 11:46:23', '2022-02-03 11:46:23', NULL),
(3, 0, 6, 2, 1, 4, 0, '', NULL, '2022-02-03 11:46:23', '2022-02-03 11:46:23', NULL),
(4, 0, 6, 2, 2, 2, 0, '111,103', NULL, '2022-02-03 11:46:28', '2022-02-03 11:46:28', NULL),
(5, 0, 6, 2, 1, 1, 0, 'Agra,Noida', NULL, '2022-02-03 11:50:28', '2022-02-03 11:50:28', NULL),
(6, 0, 6, 2, 1, 3, 0, 'skiped', NULL, '2022-02-03 11:50:28', '2022-02-03 11:50:28', NULL),
(7, 0, 6, 2, 1, 4, 0, '', NULL, '2022-02-03 11:50:28', '2022-02-03 11:50:28', NULL),
(8, 0, 6, 2, 2, 2, 0, '111,115', NULL, '2022-02-03 11:51:11', '2022-02-03 11:51:11', NULL),
(9, 0, 6, 2, 2, 6, 0, 'P2,P3,P4', NULL, '2022-02-03 11:51:11', '2022-02-03 11:51:11', NULL),
(10, 0, 6, 2, 1, 1, 0, 'Delhi,Noida', NULL, '2022-02-03 12:09:39', '2022-02-03 12:09:39', NULL),
(11, 0, 6, 2, 1, 3, 0, 'skiped', NULL, '2022-02-03 12:09:39', '2022-02-03 12:09:39', NULL),
(12, 0, 6, 2, 1, 4, 0, '', NULL, '2022-02-03 12:09:39', '2022-02-03 12:09:39', NULL),
(13, 0, 6, 2, 2, 2, 0, '115,103', NULL, '2022-02-03 12:10:12', '2022-02-03 12:10:12', NULL),
(14, 0, 6, 2, 2, 6, 0, 'P1,P2,P4', NULL, '2022-02-03 12:10:12', '2022-02-03 12:10:12', NULL),
(15, 0, 6, 2, 1, 1, 0, 'Delhi,Noida,Faridabad', NULL, '2022-02-03 13:28:15', '2022-02-03 13:28:15', NULL),
(16, 0, 6, 2, 1, 3, 0, 'skiped', NULL, '2022-02-03 13:28:15', '2022-02-03 13:28:15', NULL),
(17, 0, 6, 2, 1, 4, 0, '', NULL, '2022-02-03 13:28:15', '2022-02-03 13:28:15', NULL),
(19, 1, 6, 2, 1, 1, 0, 'Delhi,Noida,Faridabad', NULL, '2022-02-04 07:56:59', '2022-02-04 08:01:17', NULL),
(20, 1, 6, 2, 1, 3, 0, 'skiped', 'dont', '2022-02-04 07:57:00', '2022-02-04 08:01:17', NULL),
(21, 1, 6, 2, 1, 4, 0, 'sd', NULL, '2022-02-04 07:57:00', '2022-02-04 08:01:17', NULL),
(22, 1, 6, 2, 2, 2, 0, '111,115,103', NULL, '2022-02-04 08:03:12', '2022-02-04 08:03:12', NULL),
(23, 1, 6, 2, 2, 6, 0, 'P1,P2,P3', NULL, '2022-02-04 08:03:12', '2022-02-04 08:03:12', NULL),
(24, 2, 6, 2, 1, 1, 0, 'Agra,Delhi,Faridabad', NULL, '2022-02-04 08:05:04', '2022-02-04 08:05:36', NULL),
(25, 2, 6, 2, 1, 3, 0, 'Australia', NULL, '2022-02-04 08:05:04', '2022-02-04 08:05:36', NULL),
(26, 2, 6, 2, 1, 4, 0, 'www', NULL, '2022-02-04 08:05:04', '2022-02-04 08:05:36', NULL),
(27, 2, 6, 2, 2, 2, 0, '115,103,104', NULL, '2022-02-04 08:05:56', '2022-02-04 08:05:56', NULL),
(28, 2, 6, 2, 2, 6, 0, 'P1,P2,P3', NULL, '2022-02-04 08:05:56', '2022-02-04 08:05:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_languages`
--

CREATE TABLE `system_languages` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_languages`
--

INSERT INTO `system_languages` (`id`, `customer_id`, `language`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'German', '2022-01-27 11:21:47', '2022-01-28 05:31:55', NULL),
(2, 2, 'German', '2022-01-27 16:24:16', '2022-01-27 16:24:21', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_managements`
--
ALTER TABLE `access_managements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_settings`
--
ALTER TABLE `color_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headings`
--
ALTER TABLE `headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_data`
--
ALTER TABLE `personal_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionairs`
--
ALTER TABLE `questionairs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionair_and_questype`
--
ALTER TABLE `questionair_and_questype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionair_other_language`
--
ALTER TABLE `questionair_other_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionss`
--
ALTER TABLE `questionss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions_old`
--
ALTER TABLE `questions_old`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_dependecy`
--
ALTER TABLE `question_dependecy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_lists`
--
ALTER TABLE `question_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_types`
--
ALTER TABLE `question_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_ans`
--
ALTER TABLE `survey_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_ansa`
--
ALTER TABLE `survey_ansa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_languages`
--
ALTER TABLE `system_languages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_managements`
--
ALTER TABLE `access_managements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `color_settings`
--
ALTER TABLE `color_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `headings`
--
ALTER TABLE `headings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `personal_data`
--
ALTER TABLE `personal_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questionairs`
--
ALTER TABLE `questionairs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `questionair_and_questype`
--
ALTER TABLE `questionair_and_questype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `questionss`
--
ALTER TABLE `questionss`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `questions_old`
--
ALTER TABLE `questions_old`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `question_dependecy`
--
ALTER TABLE `question_dependecy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `question_lists`
--
ALTER TABLE `question_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_types`
--
ALTER TABLE `question_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `survey_ans`
--
ALTER TABLE `survey_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

--
-- AUTO_INCREMENT for table `survey_ansa`
--
ALTER TABLE `survey_ansa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `system_languages`
--
ALTER TABLE `system_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
