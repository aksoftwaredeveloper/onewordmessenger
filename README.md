# onewordmessenger
social network for sharing one word message

Currently you can only log in and see messages for user only, so I have done UI,  Login function/logout , Database , view messages on profile page , 
currently u can see only messages assigned to logged in users.

 
Test Users: 
          : tanya@tanya.com            pass:tanya123


SQL as follows:
=========================================================================================
-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 03:31 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onewordmessenger`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mID` smallint(3) UNSIGNED NOT NULL,
  `mFrom` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mTo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mSubject` text COLLATE utf8_unicode_ci,
  `mbody` tinytext COLLATE utf8_unicode_ci,
  `mDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`mID`, `mFrom`, `mTo`, `mSubject`, `mbody`, `mDate`) VALUES
(1, '1', '2', 'this is the first message', 'hello', '0000-00-00 00:00:00'),
(0, '2', '1', '2nd message from tanya to ayman', 'hi', '2018-06-22 15:46:13'),
(0, '2', '1', '2nd message from tanya to ayman', 'hi', '2018-06-22 15:46:26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uID` smallint(3) UNSIGNED NOT NULL,
  `uName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uLast` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uEmail` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uPsw` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uImg` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uID`, `uName`, `uLast`, `uEmail`, `uPsw`, `uImg`) VALUES
(1, 'Ayman', 'kay', 'mk12345678910@gmail.com', 'fa87b691f30b8da0f76a4571f9174250835c091b', 'https://www.google.co.uk/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwjd8MLEpefbAhVMWRQKHdvLCVEQjRx6BAgBEAU&url=https%3A%2F%2Fs3tv.com%2Fblog%2Fosman-khalid-butt-profile-biography-dramas-pictures%2F&psig=AOvVaw2eB3rvXZnUFX21Pb4WJlmg&ust=1529757654428201'),
(2, 'Tanya', 'Thomas', 'Tanya@tanya.com', '143bb279bb2476b1a562b96e817495dca1ae49f6', 'https://www.google.co.uk/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwjmprODpufbAhWBQBQKHWS-BdcQjRx6BAgBEAU&url=https%3A%2F%2Fwww.abilitynet.org.uk%2Ftrustees%2Frhianna-kinchin&psig=AOvVaw2eB3rvXZnUFX21Pb4WJlmg&ust=1529757654428201');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
===============================================================================================
