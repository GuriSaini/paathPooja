-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 02, 2019 at 06:03 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paathpooja`
--

-- --------------------------------------------------------

--
-- Table structure for table `pandit`
--

CREATE TABLE `pandit` (
  `pandit_id` varchar(20) NOT NULL,
  `pandit_name` text NOT NULL,
  `pandit_phone` int(10) NOT NULL,
  `pandit_mail` varchar(50) NOT NULL,
  `pandit_password` varchar(32) NOT NULL,
  `address_line1` varchar(50) NOT NULL,
  `address_line2` varchar(50) NOT NULL,
  `pin` int(6) NOT NULL,
  `pooja` varchar(130) NOT NULL,
  `status` int(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pandit`
--

INSERT INTO `pandit` (`pandit_id`, `pandit_name`, `pandit_phone`, `pandit_mail`, `pandit_password`, `address_line1`, `address_line2`, `pin`, `pooja`, `status`, `date`) VALUES
('660', 'pandit', 98765430, 'pandit@gmail.com', '1234567', 'chd', 'chd', 160014, '2019-12-01', 0, '2019-12-01'),
('773', 'new user', 987654334, 'newuser@gmai.com', '1234567', 'mohali', 'mohali', 190010, '2019-03-02', 0, '2019-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `pooja`
--

CREATE TABLE `pooja` (
  `p_id` int(10) NOT NULL,
  `p_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pcat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pooja`
--

INSERT INTO `pooja` (`p_id`, `p_name`, `pcat`) VALUES
(1, 'गर्भाधान संस्कार', 1),
(2, 'पुंसवन संस्कार ', 1),
(3, 'सिमन्तोउन्यन संस्कार', 1),
(4, 'जातकर्म संस्कार', 1),
(5, 'नामकरण संस्कार', 1),
(6, 'निष्क्रमण  संस्कार', 1),
(7, 'अन्नप्राशन संस्कार', 1),
(8, 'मुंडन संस्कार', 1),
(9, 'विद्यारंभ संस्कार', 1),
(10, 'कर्णवेध संस्कार', 1),
(11, 'यज्ञोंपवीत  संस्कार', 1),
(12, 'वेदारंभ संस्कार', 1),
(13, 'केशांत संस्कार', 1),
(14, 'विवाह संस्कार', 1),
(15, 'अन्तेयेष्ठी  संस्कार', 1),
(16, 'जन्मकुंडली बनवाएं', 2),
(17, 'हस्त रेखा दिखाएँ', 2),
(18, 'वास्तु शांति पूजा (5 दिन, 3 दिन, 1दिन)', 2),
(19, 'भूमि पुजन', 2),
(20, 'गृहप्रवेश पूजा ', 2),
(21, 'कालसर्प दोष शांति', 2),
(22, 'मंगल शांति पूजा', 2),
(23, 'नवग्रह  शांति पूजा', 2),
(24, 'शनि दोष निवारण पूजा', 2),
(25, 'पितृदोष निवारण पूजा', 2),
(26, 'तेरहवी शांति पूजा', 2),
(27, 'सत्यनारायण कथा', 3),
(28, 'रामचरितमानस कथा(24 घंटे में)', 3),
(29, 'रामचरितमानस कथा  (नवदिवाशिया)', 3),
(30, 'श्री मदभागवत कथा (सप्त्दिवशिया)', 3),
(31, 'श्री मद बाल्मीकि रामायण  (नवदिवाशिया)', 3),
(32, 'भक्तमाल कथा ( पञ्च दिवसीय)', 3),
(33, 'शिव महापुराण (नव दिवसीय)', 3),
(34, 'देवीपुराण आदि कथाएं', 3),
(35, 'सुंदरकांड पाठ', 3),
(36, 'रुद्राभिषेक', 3),
(37, 'हरिनाम संकीर्तन (24 घंटे में)', 3),
(38, 'दुर्गासप्तसती पाठ', 3),
(39, 'महामृत्युंजय   जाप', 3),
(40, 'तुलसी विवाह पूजा', 3),
(41, 'लक्ष्मी पूजा (दिपावली)', 3),
(42, 'रामनवमी पूजा (श्री रामजन्मोत्सव )', 3),
(43, 'गणेश चतुर्थी  पूजा', 3),
(44, 'माँ सरस्वती पूजा', 3),
(45, 'विश्वकर्मा   पूजा', 3),
(46, 'नवरात्री  दुर्गा पाठ', 3),
(47, 'पितृदोष निवारण  पूजा', 3),
(48, 'गरुड़पुराण  पाठ', 3),
(49, 'शिव पुराण पाठ', 3),
(50, 'वाहन  पूजा', 3),
(51, 'विष्णु सहस्त्र नाम पूजा', 3),
(52, 'गीता पाठ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `poojaCategory`
--

CREATE TABLE `poojaCategory` (
  `pcat_id` int(10) NOT NULL,
  `pcategory` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poojaCategory`
--

INSERT INTO `poojaCategory` (`pcat_id`, `pcategory`) VALUES
(1, 'संस्कार पूजा (सोलह संस्कार)'),
(2, 'ज्योतिष'),
(3, 'कथा,कीर्तन ,पाठ ,अभिषेक');

-- --------------------------------------------------------

--
-- Table structure for table `suhbdin`
--

CREATE TABLE `suhbdin` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suhbdin`
--

INSERT INTO `suhbdin` (`id`, `title`, `start_event`, `end_event`) VALUES
(3, 'check', '2019-09-04 00:00:00', '2019-09-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(20) NOT NULL,
  `user_name` text NOT NULL,
  `user_phone` int(10) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_phone`, `user_email`, `password`, `status`, `date`) VALUES
('6671', 'pppp', 1111, 'q@.b', '1111', 0, '2019-08-08'),
('678', 'pppp', 1111, 'q@.b', '1111', 0, '2019-08-08'),
('735', 'abc', 123, 'a@s.c', '1', 0, '2019-08-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pooja`
--
ALTER TABLE `pooja`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `poojaCategory`
--
ALTER TABLE `poojaCategory`
  ADD PRIMARY KEY (`pcat_id`);

--
-- Indexes for table `suhbdin`
--
ALTER TABLE `suhbdin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pooja`
--
ALTER TABLE `pooja`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `poojaCategory`
--
ALTER TABLE `poojaCategory`
  MODIFY `pcat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suhbdin`
--
ALTER TABLE `suhbdin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
