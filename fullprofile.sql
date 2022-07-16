-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 09:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `fullprofile`
--

CREATE TABLE `fullprofile` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `termsandcondition` enum('unaccepted','accepted','','') NOT NULL DEFAULT 'unaccepted',
  `profilepicture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fullprofile`
--

INSERT INTO `fullprofile` (`id`, `fname`, `lname`, `gender`, `phone`, `qualification`, `email`, `pass`, `termsandcondition`, `profilepicture`) VALUES
(8, 'Yvonne', 'Valenci', 'Choose', '+234 (682) 326-9919', 'https://www.catybo.co', 'nyde@mailinator.com', 'Pa$$w0rd!', 'unaccepted', 'IMG_20201008_190042.jpg'),
(12, 'Aileen', 'Bauer', 'other', '+234 (815) 461-7612', 'https://www.xapezakoqozove.inf', 'jetim@mailinator.com', 'Pa$$w0rd!', 'accepted', 'IMG_20201008_190306.jpg'),
(13, 'Aileen', 'Bauer', 'other', '+234 (815) 461-7612', 'https://www.xapezakoqozove.inf', 'jetim@mailinator.com', 'Pa$$w0rd!', 'accepted', 'IMG_20201008_190111.jpg'),
(14, 'Travis', 'Rice', 'male', '+234 (138) 231-9823', 'https://www.wyhud.info', 'mover@mailinator.com', 'Pa$$w0rd!', 'accepted', 'IMG_20201008_190042.jpg'),
(15, 'Phelan', 'Ray', 'other', '+234 (268) 854-2754', 'https://www.vadorosojomec.co.u', 'kafiwoxib@mailinator.com', 'Pa$$w0rd!', 'accepted', 'IMG_20201008_190042.jpg'),
(16, 'Kyle', 'Patrick', 'other', '+234 (711) 528-1993', 'https://www.kacymusocag.ca', 'fodebo@mailinator.com', 'Pa$$w0rd!', 'accepted', 'IMG_20201008_190042.jpg'),
(17, 'Kyle', 'Patrick', 'other', '+234 (711) 528-1993', 'https://www.kacymusocag.ca', 'fodebo@mailinator.com', 'Pa$$w0rd!', 'accepted', 'IMG_20201008_190042.jpg'),
(18, 'Zeus', 'Dunlap', 'other', '+234 (932) 952-8425', 'https://www.zenadyj.in', 'hohuqep@mailinator.com', 'Pa$$w0rd!', 'accepted', ''),
(19, 'Zeus', 'Dunlap', 'other', '+234 (932) 952-8425', 'https://www.zenadyj.in', 'hohuqep@mailinator.com', 'Pa$$w0rd!', 'accepted', ''),
(20, 'Zeus', 'Dunlap', 'other', '+234 (932) 952-8425', 'https://www.zenadyj.in', 'hohuqep@mailinator.com', 'Pa$$w0rd!', 'accepted', ''),
(21, 'Victor', 'Russo', 'other', '+234 (872) 895-4234', 'https://www.qejawobolorij.org', 'kijaz@mailinator.com', 'Pa$$w0rd!', 'accepted', 'IMG_20201008_190055.jpg'),
(22, 'Bianca', 'Beasley', 'female', '+234 (378) 461-5516', 'https://www.saramozeky.com.au', 'titorevi@mailinator.com', 'Pa$$w0rd!', 'accepted', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fullprofile`
--
ALTER TABLE `fullprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fullprofile`
--
ALTER TABLE `fullprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
