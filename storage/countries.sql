-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 10:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flight-advisor`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `title`) VALUES
(1, 'Papua New Guinea'),
(2, 'Greenland'),
(3, 'Iceland'),
(4, 'Canada'),
(5, 'Algeria'),
(6, 'Benin'),
(7, 'Burkina Faso'),
(8, 'Ghana'),
(9, 'Cote d\'Ivoire'),
(10, 'Nigeria'),
(11, 'Niger'),
(12, 'Tunisia'),
(13, 'Togo'),
(14, 'Belgium'),
(15, 'Germany'),
(16, 'Estonia'),
(17, 'Finland'),
(18, 'United Kingdom'),
(19, 'Guernsey'),
(20, 'Jersey'),
(21, 'Isle of Man'),
(22, 'Falkland Islands'),
(23, 'Netherlands'),
(24, 'Ireland'),
(25, 'Denmark'),
(26, 'Faroe Islands'),
(27, 'Luxembourg'),
(28, 'Norway'),
(29, 'Poland'),
(30, 'Sweden'),
(31, 'South Africa'),
(32, 'Botswana'),
(33, 'Congo (Brazzaville)'),
(34, 'Congo (Kinshasa)'),
(35, 'Swaziland'),
(36, 'Central African Republic'),
(37, 'Equatorial Guinea'),
(38, 'Saint Helena'),
(39, 'Mauritius'),
(40, 'British Indian Ocean Territory'),
(41, 'Cameroon'),
(42, 'Zambia'),
(43, 'Comoros'),
(44, 'Mayotte'),
(45, 'Reunion'),
(46, 'Madagascar'),
(47, 'Angola'),
(48, 'Gabon'),
(49, 'Sao Tome and Principe'),
(50, 'Mozambique'),
(51, 'Seychelles'),
(52, 'Chad'),
(53, 'Zimbabwe'),
(54, 'Malawi'),
(55, 'Lesotho'),
(56, 'Mali'),
(57, 'Gambia'),
(58, 'Spain'),
(59, 'Sierra Leone'),
(60, 'Guinea-Bissau'),
(61, 'Liberia'),
(62, 'Morocco'),
(63, 'Senegal'),
(64, 'Mauritania'),
(65, 'Guinea'),
(66, 'Cape Verde'),
(67, 'Ethiopia'),
(68, 'Burundi'),
(69, 'Somalia'),
(70, 'Egypt'),
(71, 'Kenya'),
(72, 'Libya'),
(73, 'Rwanda'),
(74, 'Sudan'),
(75, 'South Sudan'),
(76, 'Tanzania'),
(77, 'Uganda'),
(78, 'Albania'),
(79, 'Bulgaria'),
(80, 'Cyprus'),
(81, 'Croatia'),
(82, 'France'),
(83, 'Saint Pierre and Miquelon'),
(84, 'Greece'),
(85, 'Hungary'),
(86, 'Italy'),
(87, 'Slovenia'),
(88, 'Czech Republic'),
(89, 'Israel'),
(90, 'Malta'),
(91, 'Austria'),
(92, 'Portugal'),
(93, 'Bosnia and Herzegovina'),
(94, 'Romania'),
(95, 'Switzerland'),
(96, 'Turkey'),
(97, 'Moldova'),
(98, 'Macedonia'),
(99, 'Gibraltar'),
(100, 'Serbia'),
(101, 'Montenegro'),
(102, 'Slovakia'),
(103, 'Turks and Caicos Islands'),
(104, 'Dominican Republic'),
(105, 'Guatemala'),
(106, 'Honduras'),
(107, 'Jamaica'),
(108, 'Mexico'),
(109, 'Nicaragua'),
(110, 'Panama'),
(111, 'Costa Rica'),
(112, 'El Salvador'),
(113, 'Haiti'),
(114, 'Cuba'),
(115, 'Cayman Islands'),
(116, 'Bahamas'),
(117, 'Belize'),
(118, 'Cook Islands'),
(119, 'Fiji'),
(120, 'Tonga'),
(121, 'Kiribati'),
(122, 'Wallis and Futuna'),
(123, 'Samoa'),
(124, 'American Samoa'),
(125, 'French Polynesia'),
(126, 'Vanuatu'),
(127, 'New Caledonia'),
(128, 'New Zealand'),
(129, 'Antarctica'),
(130, 'Afghanistan'),
(131, 'Bahrain'),
(132, 'Saudi Arabia'),
(133, 'Iran'),
(134, 'Jordan'),
(135, 'West Bank'),
(136, 'Kuwait'),
(137, 'Lebanon'),
(138, 'United Arab Emirates'),
(139, 'Oman'),
(140, 'Pakistan'),
(141, 'Iraq'),
(142, 'Syria'),
(143, 'Qatar'),
(144, 'Northern Mariana Islands'),
(145, 'Guam'),
(146, 'Marshall Islands'),
(147, 'Midway Islands'),
(148, 'Micronesia'),
(149, 'Palau'),
(150, 'Taiwan'),
(151, 'Japan'),
(152, 'South Korea'),
(153, 'Philippines'),
(154, 'Argentina'),
(155, 'Brazil'),
(156, 'Chile'),
(157, 'Ecuador'),
(158, 'Paraguay'),
(159, 'Colombia'),
(160, 'Bolivia'),
(161, 'Suriname'),
(162, 'French Guiana'),
(163, 'Peru'),
(164, 'Uruguay'),
(165, 'Venezuela'),
(166, 'Guyana'),
(167, 'Antigua and Barbuda'),
(168, 'Barbados'),
(169, 'Dominica'),
(170, 'Martinique'),
(171, 'Guadeloupe'),
(172, 'Grenada'),
(173, 'Virgin Islands'),
(174, 'Puerto Rico'),
(175, 'Saint Kitts and Nevis'),
(176, 'Saint Lucia'),
(177, 'Aruba'),
(178, 'Netherlands Antilles'),
(179, 'Anguilla'),
(180, 'Trinidad and Tobago'),
(181, 'British Virgin Islands'),
(182, 'Saint Vincent and the Grenadines'),
(183, 'Kazakhstan'),
(184, 'Kyrgyzstan'),
(185, 'Azerbaijan'),
(186, 'Russia'),
(187, 'Ukraine'),
(188, 'Belarus'),
(189, 'Turkmenistan'),
(190, 'Tajikistan'),
(191, 'Uzbekistan'),
(192, 'India'),
(193, 'Sri Lanka'),
(194, 'Cambodia'),
(195, 'Bangladesh'),
(196, 'Hong Kong'),
(197, 'Laos'),
(198, 'Macau'),
(199, 'Nepal'),
(200, 'Bhutan'),
(201, 'Maldives'),
(202, 'Thailand'),
(203, 'Vietnam'),
(204, 'Burma'),
(205, 'Indonesia'),
(206, 'Malaysia'),
(207, 'Brunei'),
(208, 'East Timor'),
(209, 'Singapore'),
(210, 'Australia'),
(211, 'Christmas Island'),
(212, 'Norfolk Island'),
(213, 'China'),
(214, 'North Korea'),
(215, 'Mongolia'),
(216, 'United States'),
(217, 'Latvia'),
(218, 'Lithuania'),
(219, 'Armenia'),
(220, 'Eritrea'),
(221, 'Palestine'),
(222, 'Georgia'),
(223, 'Yemen'),
(224, 'Bermuda'),
(225, 'Solomon Islands'),
(226, 'Nauru'),
(227, 'Tuvalu'),
(228, 'Namibia'),
(229, 'Djibouti'),
(230, 'Montserrat'),
(231, 'Johnston Atoll');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
