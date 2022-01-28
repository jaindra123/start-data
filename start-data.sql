-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 09:59 PM
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
(3, 'qwerty', '$2y$10$xheu1fKuetO4aDhJxY2gluUg.ha0mIaIsDzG7YT/bmYzaiU5gx4lq', 'Admin@1234', 'qwerty@gmail.com', 'qwerty', 1, 1, 'user', '2022-01-19 07:56:37', '2022-01-25 06:42:21', '2022-01-25 06:42:21'),
(4, 'Blog', '$2y$10$W.VZQGi/vsfsiOFLvgodee0dtK.GGBPTgfM607gG6ZaAc9VN4IXOy', NULL, 'Blog@k.com', 'Blog', 1, 1, 'user', '2022-01-19 08:08:02', '2022-01-19 08:08:02', NULL),
(6, 'test', '$2y$10$GtU050gQhsjaVi1XVDCaJuH1iCbDKz2dQ/EFFllbNnmDP8MgB1JGO', NULL, 'test@qw.com', 'test', 2, 1, 'user', '2022-01-19 10:51:32', '2022-01-19 10:51:32', NULL),
(8, 'newuser', '$2y$10$x.1u80cxkxCNjIpYqf7dP.8yDPqtA8khWk7lGR8.jfm9oebLzhY6S', NULL, 'newuser@gmail.com', 'newuser', 4, 2, 'user', '2022-01-20 15:15:30', '2022-01-20 15:15:30', NULL),
(9, 'mail', '$2y$10$dtfX79SeaIIohTYM2wJlTelnHocqSIc48YNFEx80CXrmmqT2zcPWa', NULL, 'mail@gmail.com', 'mail', 4, 2, 'user', '2022-01-20 15:29:57', '2022-01-21 11:18:13', '2022-01-21 11:18:13'),
(10, 'Testmail', '$2y$10$ipVMMne/Zx3xXvnFAdF1aeZbyNEpjLYi4N81dMLWbvVDOtICGCiX.', NULL, 'Testmail@v.com', 'Testmail', 2, 1, 'user', '2022-01-20 15:34:01', '2022-01-20 15:34:01', NULL),
(11, 'Testmail1', '$2y$10$XEJ6ECHw6AxBNsaLUot7detgrb1Mv2E1SzS.V1lm8Mjo4oDT33nyq', NULL, 'Testmail1@v.com', 'Testmail', 2, 1, 'user', '2022-01-20 15:35:38', '2022-01-20 15:35:38', NULL),
(12, 'Testmail11', '$2y$10$N2SYpc7eWnmC0.c2QKNr7eL3gTvxcXvjWvK4uNuG9SLkDtmlaCl6u', NULL, 'Testmail11@v.com', 'Testmail', 2, 1, 'user', '2022-01-20 15:36:59', '2022-01-20 15:36:59', NULL),
(13, 'Testmail111', '$2y$10$iLjmJ9YjWTpksAk3oN/BOu5fly/Lw9/uqWOv6pfLhzfq6F3J5BFO6', NULL, 'Testmail111@v.com', 'Testmail', 2, 1, 'user', '2022-01-20 15:38:00', '2022-01-20 15:38:00', NULL),
(14, 'newusercheck', '$2y$10$TyVWDG2SwSBnkS0kNHDcSOz1tvWcFSyfRbox0eMreJKM1qlXfHEFK', NULL, 'newusercheck@gmail.com', 'newusercheck', 2, 2, 'user', '2022-01-20 15:51:33', '2022-01-20 15:51:33', NULL),
(15, 'test123', '$2y$10$d9pCGtPi05DPskBCAZweR.TI6wayqE49NZXdFfdUKiN7qh4BfiNR.', NULL, 'test@qw.coma', 'test', 15, 1, 'customer', '2022-01-24 15:37:31', '2022-01-24 15:37:31', NULL),
(16, 'newtestcheck', '$2y$10$m3MlZkMkj.V8C2lh0F9KhO07sWbhfQZ6V/30k1ANMIwRbFUhYhd5O', NULL, 'newtestcheck@vmial.com', 'newtestcheck', 3, 1, 'customer', '2022-01-25 11:14:37', '2022-01-25 11:14:37', NULL),
(17, 'newtestcheck1', '$2y$10$ElArcIFHusEu7CfSmsfWYukSP78xkXR/QClD9uR9/eQto6zHKybpq', NULL, 'newtestcheck1@vmial.com', 'newtestcheck', 3, 1, 'customer', '2022-01-25 11:16:43', '2022-01-25 11:16:43', NULL),
(18, 'newtestcheck11', '$2y$10$9jBjVOOPztpn6VC9YjgeruUncikfKwmh1hjS84Y8vvULqfSSuMoK.', NULL, 'newtestcheck11@vmial.com', 'msg', 3, 1, 'customer', '2022-01-25 11:20:40', '2022-01-25 11:20:40', NULL),
(19, 'newtestcheck11a', '$2y$10$.jmYfcY2NuGU4v9Ak3N3buOsmTpjTIuIE4amyp7THVamOn9MwKS0K', 'Admin@1234', 'newtestcheck113a@vmial.com', 'msg', 3, 1, 'customer', '2022-01-25 11:21:20', '2022-01-25 11:30:48', NULL),
(20, NULL, '$2y$10$5iW018XrcXVij9eZO357ueWM8j3Vvbl7kVVAalKWpkEus.BQReA6q', 'Admin@1234', 'admins@mail.com', 'aa', 2, 1, 'customer', '2022-01-25 12:42:06', '2022-01-25 12:42:38', NULL),
(21, NULL, '$2y$10$msINeuqMJ/vkcnVDgM/QEOuqRZw67LEpJ4FzYeEvfcjwoZTJQcHX6', NULL, 'checking@gmail.com', 'checking', 1, 1, 'customer', '2022-01-25 13:54:12', '2022-01-25 13:54:12', NULL),
(22, NULL, '$2y$10$DRrKXlD42mwgQws46E5UpOXwUxAai4m07DAk6adniiohW/2Sh5AvC', NULL, 'checking1@gmail.com', 'checking1', 1, 1, 'customer', '2022-01-25 13:59:18', '2022-01-25 13:59:18', NULL),
(23, NULL, '$2y$10$Zkpkd33HUm2EBnisBxwfYuHwUZ.Xq7qnvRVJ5TITgMusv.pr/6uL.', NULL, 'checking11@gmail.com', 'checking11', 1, 1, 'customer', '2022-01-25 14:01:15', '2022-01-25 14:01:15', NULL),
(24, NULL, '$2y$10$BgzmOX4nByOo4vKh7ajwLuXLWOPP16FVZBuS5kn.g7OypYdHvG1Wa', NULL, 'checking111@gmail.com', 'checking111', 1, 1, 'customer', '2022-01-25 14:04:47', '2022-01-25 14:04:47', NULL),
(25, NULL, '$2y$10$HhDFYYDTW31hXEWZGYI4TOi8LlLB02F/.YOjPHcGPwClRF16JgOUy', 'Admin@1234', 'checking1112@gmail.com', 'checking1112', 1, 1, 'customer', '2022-01-25 14:08:34', '2022-01-25 14:08:34', NULL),
(26, NULL, '$2y$10$3ylbBrKQFdQwbMF4yfTQFuimBCXR5tdjr6E2XNs6M3oq0V.r2vwD2', 'Laptop@1234', 'Laptop@gmail.com', 'Laptop', 1, 1, 'customer', '2022-01-25 14:21:47', '2022-01-25 14:21:47', NULL),
(27, NULL, '$2y$10$KJ8yY2dHm0DlV4LENQpFsuRpsQR8wEnf4VC8SKodP9nKDSrgL6c8a', 'Admin@1234', 'Laptop1@gmail.com', 'Laptop', 1, 1, 'customer', '2022-01-25 14:26:58', '2022-01-25 14:26:58', NULL),
(28, NULL, '$2y$10$4DXfgn7GMheF0Q9QhTDObOw67RKhUUgi8tVuPfcD.0enjfTjk9Nyq', 'System@1234', 'System@gmail.com', 'System', 1, 1, 'customer', '2022-01-25 14:27:46', '2022-01-25 14:27:46', NULL);

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
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `questions_id`, `option`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Agra', NULL, NULL, NULL),
(2, 1, 'Delhi', NULL, NULL, NULL),
(3, 1, 'Noida', NULL, NULL, NULL),
(4, 1, 'Faridabad', NULL, NULL, NULL),
(5, 2, '111', NULL, NULL, NULL),
(6, 2, '115', NULL, NULL, NULL),
(7, 2, '103', NULL, NULL, NULL),
(8, 2, '104', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questionairs`
--

CREATE TABLE `questionairs` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `base_color` varchar(50) DEFAULT NULL,
  `button_background` varchar(50) DEFAULT NULL,
  `button_text` varchar(50) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `start_img` varchar(255) DEFAULT NULL,
  `last_img` varchar(255) DEFAULT NULL,
  `is_publish` tinyint(1) DEFAULT NULL,
  `headline` varchar(255) DEFAULT NULL,
  `start_text` varchar(50) DEFAULT NULL,
  `last_text` varchar(50) DEFAULT NULL,
  `display_progress_bar` tinyint(1) DEFAULT NULL,
  `last_page_timer` int(11) DEFAULT NULL,
  `idle_timer` int(11) DEFAULT NULL,
  `protected_link` tinyint(1) DEFAULT NULL,
  `select_customer` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_type_id` int(10) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_type_id`, `question`, `answer`, `status`, `options`, `created_at`, `updated_at`) VALUES
(1, 2, 'Where is Taj Mahal', 'Agra', NULL, NULL, '2022-01-23 20:02:08', '2022-01-23 20:02:08'),
(2, 1, 'What is the no. between [100, 110]', '103,104', NULL, NULL, '2022-01-23 20:03:20', '2022-01-23 20:03:20');

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
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_types`
--

INSERT INTO `question_types` (`id`, `title`, `description`, `short_code`, `question_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Multiple Choice Question', NULL, 'mcq', 'Multi', '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(2, 'Single Choice Question', NULL, 'scq', 'Single', '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(3, 'Open Question', NULL, 'oq', 'Multi', '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(4, 'Picture Question (Multiple choice)', NULL, 'pq', 'Multi', '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(5, 'Matrix Question', NULL, 'mq', 'Matrix', '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(6, 'Scale Question', NULL, 'sq', 'Scale', '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(7, 'Number Question', NULL, 'nq', 'Number', '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(8, 'Country Question', NULL, 'cq', 'Country', '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(9, 'Ranking Question', NULL, 'rq', 'Ranking', '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL),
(10, 'Other Question/ Elements', NULL, 'oq', 'Other', '2022-01-18 10:54:00', '2022-01-18 10:54:00', NULL);

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
(1, 1, 'English', '2022-01-27 11:21:47', '2022-01-27 20:44:20', NULL),
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
-- Indexes for table `questionairs`
--
ALTER TABLE `questionairs`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
-- AUTO_INCREMENT for table `questionairs`
--
ALTER TABLE `questionairs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_lists`
--
ALTER TABLE `question_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_types`
--
ALTER TABLE `question_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `system_languages`
--
ALTER TABLE `system_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
