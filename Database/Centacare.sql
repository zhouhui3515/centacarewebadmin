-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2016 at 03:08 PM
-- Server version: 5.6.28
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Centacare`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `1`
-- (See below for the actual view)
--
CREATE TABLE `1` (
);

-- --------------------------------------------------------

--
-- Table structure for table `Activity`
--

CREATE TABLE `Activity` (
  `activityname` varchar(100) NOT NULL DEFAULT '0',
  `dates` date NOT NULL DEFAULT '0000-00-00',
  `location` varchar(200) NOT NULL DEFAULT '0',
  `starttime` varchar(20) NOT NULL DEFAULT '0',
  `fileno` int(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Activity`
--

INSERT INTO `Activity` (`activityname`, `dates`, `location`, `starttime`, `fileno`) VALUES
('baseball', '2016-10-28', 'uq', '8:00', 2),
('Bball', '2016-10-31', 'uq', '10:00', 2),
('Boxing', '2016-10-19', 'UQ LAKES', '11:00', 2),
('Computer games', '2016-10-26', 'UQ', '10:00', 2),
('football', '2016-10-29', 'Centacare', '9:00', 1),
('Game', '2016-10-24', 'Home', '17:50', 2),
('Game', '2016-10-24', 'Home', '17:50', 123456789),
('game2', '2016-10-28', 'uq', '10:00', 2),
('game2', '2016-10-28', 'uq', '10:00', 123456789),
('games', '2016-10-23', 'st lucia', '14:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Additional_Information`
--

CREATE TABLE `Additional_Information` (
  `Support Plan prepared by` varchar(50) NOT NULL COMMENT 'Our Commitment To You',
  `Signature` varchar(50) NOT NULL COMMENT 'Our Commitment To You',
  `Date` date NOT NULL COMMENT 'Our Commitment To You',
  `Reviewed Date` date NOT NULL COMMENT 'Our Commitment To You',
  `Next Review Due Date` date NOT NULL COMMENT 'Our Commitment To You',
  `Client/Carer Name (please print)` varchar(50) NOT NULL COMMENT 'Client/Carer Agreement',
  `Client/Carer Agreement Signature` varchar(50) NOT NULL COMMENT 'Client/Carer Agreement',
  `Client/Carer Agreement Date` date NOT NULL COMMENT 'Client/Carer Agreement',
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` int(30) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `title`, `first_name`, `last_name`, `gender`, `email`, `tel`, `position`) VALUES
('admin', 'sha1:64000:18:0BsRhJg3rA097bJy9jTY7yN897kqvxI9:Q0JJQT8+qZXc0pXh5DGYqVa8', 'Ms', 'Ann', 'Donaghy', '1', 'Femail', 1, '1'),
('admin1', 'sha1:64000:18:98bxGzDk50gukEUtRjS4GbO4MNcpxnWC:mCy65Xx56zWeyrvupWKa+ZE4', 'Mr', 't', 'bc', '345', 'f', 123, '123'),
('Caroline', 'sha1:64000:18:/RmzGipI4pnX5VG+4/AYOe9o4umTNj2Y:FDKEXyQ+OfmG2MvIp+hnTEsw', 'Ms.', 'Caroline', '1', '1', '1', 1, '1'),
('jade', 'sha1:64000:18:isrKjrMerNw1qZIj2rAFQxk007JooMtL:zEO2G7HyDJ/B2/mbwUGJGJJ6', '1', '1', '1', '1', '1', 1, '1'),
('lee', 'sha1:64000:18:pmHcQPB04BgWBVhmkOFxxurRfp6eCYF3:pSX46D9OrO8yZK5vd7zTE3rM', 'q', 'q', 'q', 'q', 'q', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `ClientBackgroung`
--

CREATE TABLE `ClientBackgroung` (
  `Interest 1` varchar(300) NOT NULL DEFAULT '0',
  `Interest Additional Information` varchar(300) NOT NULL DEFAULT '0',
  `Cultural/ Social / Spiritual Considerations` varchar(300) NOT NULL DEFAULT '0',
  `Regular Contact/Support` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Social Network (e.g. family, friends, neighbours)',
  `Periodic Contact/Support` tinyint(1) NOT NULL DEFAULT '0',
  `little contact` tinyint(1) NOT NULL DEFAULT '0',
  `Social Network Details` varchar(300) NOT NULL DEFAULT '0',
  `Life History Details` varchar(300) NOT NULL DEFAULT '0' COMMENT '(e.g. early life, education, occupation/s, places lived, places travelled, highlights, achievements etc. )',
  `goaldetails` varchar(2000) NOT NULL DEFAULT '0',
  `carerdetails` varchar(2000) NOT NULL DEFAULT '0',
  `FileNo` int(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ClientBackgroung`
--

INSERT INTO `ClientBackgroung` (`Interest 1`, `Interest Additional Information`, `Cultural/ Social / Spiritual Considerations`, `Regular Contact/Support`, `Periodic Contact/Support`, `little contact`, `Social Network Details`, `Life History Details`, `goaldetails`, `carerdetails`, `FileNo`) VALUES
('0', '0', '0', 0, 0, 0, '0', '0', '0', '0', 1),
('mike', 'mike', 'mike', 1, 1, 1, 'mike', 'mike', 'mike', 'mike', 2),
('', '', '', 0, 0, 0, '', '', '', '', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `ClientBasicInformation`
--

CREATE TABLE `ClientBasicInformation` (
  `ClientName` varchar(50) NOT NULL,
  `D.O.B` date NOT NULL,
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ClientBasicInformation`
--

INSERT INTO `ClientBasicInformation` (`ClientName`, `D.O.B`, `FileNo`) VALUES
('mike', '1991-09-23', 1),
('mike', '1991-09-23', 2),
('Jade', '1993-04-08', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `ClientProfile`
--

CREATE TABLE `ClientProfile` (
  `What who is important to me` varchar(300) NOT NULL DEFAULT '0',
  `Things I need to have a good day` varchar(300) NOT NULL DEFAULT '0',
  `How I like to spend my time` varchar(300) NOT NULL DEFAULT '0',
  `My strengths and personal qualities` varchar(300) NOT NULL DEFAULT '0',
  `How best to support me` varchar(300) NOT NULL DEFAULT '0',
  `What would I like to achieve from this service` varchar(300) NOT NULL DEFAULT '0',
  `The role I would like to have in arranging this support` varchar(300) NOT NULL DEFAULT '0',
  `FileNo` int(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ClientProfile`
--

INSERT INTO `ClientProfile` (`What who is important to me`, `Things I need to have a good day`, `How I like to spend my time`, `My strengths and personal qualities`, `How best to support me`, `What would I like to achieve from this service`, `The role I would like to have in arranging this support`, `FileNo`) VALUES
('0', '0', '0', '0', '0', '0', '0', 1),
('mike', 'mike', 'mike', 'mike', 'mike', 'mike', 'mike', 2),
('', '', '', '', '', '', '', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `DietaryRequirements`
--

CREATE TABLE `DietaryRequirements` (
  `Allergies (refer to Health Summary)` tinyint(1) NOT NULL DEFAULT '0',
  `Special Dietary Needs` tinyint(1) NOT NULL DEFAULT '0',
  `Vegetarian` tinyint(1) NOT NULL DEFAULT '0',
  `Gluten Free` tinyint(1) NOT NULL DEFAULT '0',
  `Lactose Intolerant` tinyint(1) NOT NULL DEFAULT '0',
  `Other` tinyint(1) NOT NULL DEFAULT '0',
  `Food Likes/ Dislikes` tinyint(1) NOT NULL DEFAULT '0',
  `Cultural Food Preparation` tinyint(1) NOT NULL DEFAULT '0',
  `Independent` tinyint(1) NOT NULL DEFAULT '0',
  `Requires Supervision` tinyint(1) NOT NULL DEFAULT '0',
  `Requires Assistance` tinyint(1) NOT NULL DEFAULT '0',
  `Specific Routine` tinyint(1) NOT NULL DEFAULT '0',
  `Additional Information` varchar(300) NOT NULL DEFAULT '0',
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `DietaryRequirements`
--

INSERT INTO `DietaryRequirements` (`Allergies (refer to Health Summary)`, `Special Dietary Needs`, `Vegetarian`, `Gluten Free`, `Lactose Intolerant`, `Other`, `Food Likes/ Dislikes`, `Cultural Food Preparation`, `Independent`, `Requires Supervision`, `Requires Assistance`, `Specific Routine`, `Additional Information`, `FileNo`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 1),
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'mike', 2),
(0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, '', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `HealthLegalStatus`
--

CREATE TABLE `HealthLegalStatus` (
  `Diagnosed Health Condition (refer Medical Summary)` tinyint(1) NOT NULL DEFAULT '0',
  `Cognitive Impairment` tinyint(1) NOT NULL DEFAULT '0',
  `Locked Box for Medication` tinyint(1) NOT NULL DEFAULT '0',
  `Pendant Alarm` tinyint(1) NOT NULL DEFAULT '0',
  `Allergies` tinyint(1) NOT NULL DEFAULT '0',
  `Advance Health Care Directive (refer File)` tinyint(1) NOT NULL DEFAULT '0',
  `Power of Attorney` tinyint(1) NOT NULL DEFAULT '0',
  `Enduring Power of Attorney` tinyint(1) NOT NULL DEFAULT '0',
  `Perfferedhos` tinyint(1) NOT NULL DEFAULT '0',
  `Preferred Hospital` varchar(150) NOT NULL DEFAULT '0',
  `Additional Information` varchar(300) NOT NULL DEFAULT '0',
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `HealthLegalStatus`
--

INSERT INTO `HealthLegalStatus` (`Diagnosed Health Condition (refer Medical Summary)`, `Cognitive Impairment`, `Locked Box for Medication`, `Pendant Alarm`, `Allergies`, `Advance Health Care Directive (refer File)`, `Power of Attorney`, `Enduring Power of Attorney`, `Perfferedhos`, `Preferred Hospital`, `Additional Information`, `FileNo`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', 1),
(1, 1, 1, 1, 1, 1, 1, 1, 1, 'mike', 'mike', 2),
(0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `IntresComputing`
--

CREATE TABLE `IntresComputing` (
  `Email` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Computing',
  `Games` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Computing',
  `Internet` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Computing',
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `IntresComputing`
--

INSERT INTO `IntresComputing` (`Email`, `Games`, `Internet`, `FileNo`) VALUES
(0, 0, 0, 1),
(1, 1, 1, 2),
(0, 1, 0, 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `IntresCrafts`
--

CREATE TABLE `IntresCrafts` (
  `Card Making` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Crafts',
  `Crochet` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Crafts',
  `Craftwork` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Crafts',
  `Jewellery Making` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Crafts',
  `Knitting` tinyint(1) DEFAULT '0' COMMENT 'Crafts',
  `Needlework` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Crafts',
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `IntresCrafts`
--

INSERT INTO `IntresCrafts` (`Card Making`, `Crochet`, `Craftwork`, `Jewellery Making`, `Knitting`, `Needlework`, `FileNo`) VALUES
(0, 0, 0, 0, 0, 0, 1),
(1, 1, 1, 1, 1, 1, 2),
(0, 0, 0, 0, 0, 0, 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `IntresGames`
--

CREATE TABLE `IntresGames` (
  `Bingo` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Games',
  `Cards` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Games',
  `Chess/ Checkers` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Games',
  `Jigsaws` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Games',
  `Trivia` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Games',
  `Word Puzzles` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Games',
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `IntresGames`
--

INSERT INTO `IntresGames` (`Bingo`, `Cards`, `Chess/ Checkers`, `Jigsaws`, `Trivia`, `Word Puzzles`, `FileNo`) VALUES
(0, 0, 0, 0, 0, 0, 1),
(1, 1, 1, 1, 1, 1, 2),
(1, 0, 0, 0, 0, 1, 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `IntresHairBeauty`
--

CREATE TABLE `IntresHairBeauty` (
  `Hairdressing` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Hair/Beauty',
  `Facials` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Hair/Beauty',
  `Manicures` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Hair/Beauty',
  `Pedicures` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Hair/Beauty',
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `IntresHairBeauty`
--

INSERT INTO `IntresHairBeauty` (`Hairdressing`, `Facials`, `Manicures`, `Pedicures`, `FileNo`) VALUES
(0, 0, 0, 0, 1),
(1, 1, 1, 1, 2),
(0, 0, 0, 0, 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `IntresLeisure`
--

CREATE TABLE `IntresLeisure` (
  `Eating Out` tinyint(1) DEFAULT '0' COMMENT 'Leisure',
  `Films/Movies` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Leisure',
  `Galleries/Museums` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Leisure',
  `Outings` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Leisure',
  `Picnics` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Leisure',
  `Shopping` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Leisure',
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `IntresLeisure`
--

INSERT INTO `IntresLeisure` (`Eating Out`, `Films/Movies`, `Galleries/Museums`, `Outings`, `Picnics`, `Shopping`, `FileNo`) VALUES
(0, 0, 0, 0, 0, 0, 1),
(1, 1, 1, 1, 1, 1, 2),
(0, 0, 0, 0, 0, 0, 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `IntresLiteraryArts`
--

CREATE TABLE `IntresLiteraryArts` (
  `Poetry` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Literary Arts',
  `Novels` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Literary Arts',
  `Short Stories` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Literary Arts',
  `File No.` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `IntresLiteraryArts`
--

INSERT INTO `IntresLiteraryArts` (`Poetry`, `Novels`, `Short Stories`, `File No.`) VALUES
(0, 0, 0, 1),
(1, 1, 1, 2),
(1, 1, 0, 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `IntresMenGirlShed`
--

CREATE TABLE `IntresMenGirlShed` (
  `Men's Shed` tinyint(1) NOT NULL DEFAULT '0',
  `Girl's Shed` tinyint(1) NOT NULL DEFAULT '0',
  `Bicycle Repairs` tinyint(1) NOT NULL DEFAULT '0',
  `Framing` tinyint(1) NOT NULL DEFAULT '0',
  `Metal work` tinyint(1) NOT NULL DEFAULT '0',
  `Wood work` tinyint(1) NOT NULL DEFAULT '0',
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `IntresMenGirlShed`
--

INSERT INTO `IntresMenGirlShed` (`Men's Shed`, `Girl's Shed`, `Bicycle Repairs`, `Framing`, `Metal work`, `Wood work`, `FileNo`) VALUES
(0, 0, 0, 0, 0, 0, 1),
(1, 1, 1, 1, 1, 1, 2),
(0, 0, 0, 0, 0, 0, 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `IntresNaturalTherapies`
--

CREATE TABLE `IntresNaturalTherapies` (
  `Aromatherapy` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Natural Therapies',
  `Massage` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Natural Therapies',
  `Meditation` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Natural Therapies',
  `Relaxation` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Natural Therapies',
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `IntresNaturalTherapies`
--

INSERT INTO `IntresNaturalTherapies` (`Aromatherapy`, `Massage`, `Meditation`, `Relaxation`, `FileNo`) VALUES
(0, 0, 0, 0, 1),
(1, 1, 1, 1, 2),
(0, 0, 0, 0, 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `IntresOther`
--

CREATE TABLE `IntresOther` (
  `Cooking` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Other',
  `Flower Arranging` tinyint(1) DEFAULT '0' COMMENT 'Other',
  `Education` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Other',
  `Languages` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Other',
  `Model Building` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Other',
  `Volunteering` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Other',
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `IntresOther`
--

INSERT INTO `IntresOther` (`Cooking`, `Flower Arranging`, `Education`, `Languages`, `Model Building`, `Volunteering`, `FileNo`) VALUES
(0, 0, 0, 0, 0, 0, 1),
(1, 1, 1, 1, 1, 1, 2),
(0, 0, 0, 0, 0, 0, 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `IntresPerforming`
--

CREATE TABLE `IntresPerforming` (
  `Concerts/Music` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Performing Arts',
  `Dance/ Ballet` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Performing Arts',
  `Opera` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Performing Arts',
  `Plays` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Performing Arts',
  `Singing` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Performing Arts',
  `Theatre/Drama` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Performing Arts',
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `IntresPerforming`
--

INSERT INTO `IntresPerforming` (`Concerts/Music`, `Dance/ Ballet`, `Opera`, `Plays`, `Singing`, `Theatre/Drama`, `FileNo`) VALUES
(0, 0, 0, 0, 0, 0, 1),
(1, 1, 1, 1, 1, 1, 2),
(0, 0, 0, 0, 0, 0, 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `IntresPhysicalActivity`
--

CREATE TABLE `IntresPhysicalActivity` (
  `Fishing` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Physical Activity',
  `Gardening` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Physical Activity',
  `Golf` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Physical Activity',
  `Lawn Bowls` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Physical Activity',
  `Sailing/Boating` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Physical Activity',
  `Snooker` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Physical Activity',
  `Swimming` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Physical Activity',
  `Tai Chi` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Physical Activity',
  `Tennis` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Physical Activity',
  `Ten Pin Bowling` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Physical Activity',
  `Walking` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Physical Activity',
  `Yoga` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Physical Activity',
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `IntresPhysicalActivity`
--

INSERT INTO `IntresPhysicalActivity` (`Fishing`, `Gardening`, `Golf`, `Lawn Bowls`, `Sailing/Boating`, `Snooker`, `Swimming`, `Tai Chi`, `Tennis`, `Ten Pin Bowling`, `Walking`, `Yoga`, `FileNo`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `IntresVisualArts`
--

CREATE TABLE `IntresVisualArts` (
  `Architecture` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Visual Arts',
  `Drawing` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Visual Arts',
  `Fashion` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Visual Arts',
  `Painting` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Visual Arts',
  `Photography` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Visual Arts',
  `Pottery/Sculpture` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Visual Arts',
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `IntresVisualArts`
--

INSERT INTO `IntresVisualArts` (`Architecture`, `Drawing`, `Fashion`, `Painting`, `Photography`, `Pottery/Sculpture`, `FileNo`) VALUES
(0, 0, 0, 0, 0, 0, 1),
(1, 1, 1, 1, 1, 1, 2),
(0, 0, 0, 0, 0, 0, 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `Medication`
--

CREATE TABLE `Medication` (
  `pension` varchar(30) NOT NULL DEFAULT '0',
  `I do not require medication whilst attending...` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'I do not require medication whilst attending the Staying Well & Active Program',
  `I do require medication` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'refer to Medications List and Client Medication Summary',
  `Additional Information` varchar(300) NOT NULL DEFAULT '0',
  `Pharmacy Name` varchar(40) NOT NULL DEFAULT '0',
  `Telephone` int(20) NOT NULL DEFAULT '0',
  `Street Address` varchar(200) NOT NULL DEFAULT '0',
  `Suburb` varchar(50) NOT NULL DEFAULT '0',
  `Postcode` int(10) NOT NULL DEFAULT '0',
  `Business Hours` varchar(50) NOT NULL DEFAULT '0',
  `FileNo` int(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Medication`
--

INSERT INTO `Medication` (`pension`, `I do not require medication whilst attending...`, `I do require medication`, `Additional Information`, `Pharmacy Name`, `Telephone`, `Street Address`, `Suburb`, `Postcode`, `Business Hours`, `FileNo`) VALUES
('0', 0, 0, '0', '0', 0, '0', '0', 0, '0', 1),
('0001', 1, 1, 'mike', 'a', 0, 'a street', 'st lucia', 4100, '10am-15pm', 2),
('', 0, 0, '', '', 0, '', '', 0, '', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `MobilityandWellbeing`
--

CREATE TABLE `MobilityandWellbeing` (
  `Independent` tinyint(1) DEFAULT '0',
  `Requires Supervision` tinyint(1) NOT NULL DEFAULT '0',
  `Requires Assistance` tinyint(1) NOT NULL DEFAULT '0',
  `Falls Risk` tinyint(1) NOT NULL DEFAULT '0',
  `Requires assistance in the event of disaster or pandemic` tinyint(1) NOT NULL DEFAULT '0',
  `Additional Information` varchar(300) NOT NULL DEFAULT '0',
  `FileNo` int(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `MobilityandWellbeing`
--

INSERT INTO `MobilityandWellbeing` (`Independent`, `Requires Supervision`, `Requires Assistance`, `Falls Risk`, `Requires assistance in the event of disaster or pandemic`, `Additional Information`, `FileNo`) VALUES
(0, 0, 0, 0, 0, '0', 1),
(1, 1, 1, 1, 1, 'mike', 2),
(1, 0, 0, 0, 0, 'I like to be alone.', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `NonResponsetoScheduledVisit`
--

CREATE TABLE `NonResponsetoScheduledVisit` (
  `Contact Name 1` varchar(40) NOT NULL DEFAULT '0',
  `Telephone 1` int(20) NOT NULL DEFAULT '0',
  `Contact Name 2` varchar(40) NOT NULL DEFAULT '0',
  `Telephone 2` int(20) NOT NULL DEFAULT '0',
  `Contact Name 3` varchar(40) NOT NULL DEFAULT '0',
  `Telephone 3` int(20) NOT NULL DEFAULT '0',
  `Additional Information` varchar(300) NOT NULL DEFAULT '0',
  `FileNo` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `NonResponsetoScheduledVisit`
--

INSERT INTO `NonResponsetoScheduledVisit` (`Contact Name 1`, `Telephone 1`, `Contact Name 2`, `Telephone 2`, `Contact Name 3`, `Telephone 3`, `Additional Information`, `FileNo`) VALUES
('0', 0, '0', 0, '0', 0, '0', 1),
('contact a', 4001, 'contact c', 4002, '', 4003, 'mike', 2),
('', 0, '', 0, '', 0, '', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `SelfCare`
--

CREATE TABLE `SelfCare` (
  `Independent` tinyint(1) NOT NULL DEFAULT '0',
  `Requires Supervision` tinyint(1) NOT NULL DEFAULT '0',
  `Requires Assistance` tinyint(1) NOT NULL DEFAULT '0',
  `Has a Specific Routine` tinyint(1) NOT NULL DEFAULT '0',
  `Continence Care` tinyint(1) NOT NULL DEFAULT '0',
  `Bladder` tinyint(1) NOT NULL DEFAULT '0',
  `Bowel` tinyint(1) NOT NULL DEFAULT '0',
  `Additional Information` varchar(300) NOT NULL DEFAULT '0',
  `FileNo` int(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `SelfCare`
--

INSERT INTO `SelfCare` (`Independent`, `Requires Supervision`, `Requires Assistance`, `Has a Specific Routine`, `Continence Care`, `Bladder`, `Bowel`, `Additional Information`, `FileNo`) VALUES
(0, 0, 0, 0, 0, 0, 0, '0', 1),
(1, 1, 1, 1, 1, 1, 1, 'mike', 2),
(1, 0, 0, 0, 0, 0, 0, '', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `ServiceDetails`
--

CREATE TABLE `ServiceDetails` (
  `VHC` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Funding Type',
  `BP4H` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Funding Type',
  `CHSP` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Funding Type',
  `QCCS` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Funding Type',
  `Home Care Package` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Funding Type',
  `QHDR - YOSD` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Funding Type',
  `Domestic Assitance` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Service Type',
  `Personal Care` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Service Type',
  `Social Support` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Service Type',
  `In-Home Respite` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Service Type',
  `Staying Well & Active Program` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Service Type',
  `Overnight Respite` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Service Type',
  `Other` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Service Type',
  `Frequency` varchar(30) NOT NULL DEFAULT '0',
  `Day/s` varchar(30) NOT NULL DEFAULT '0',
  `Duration` varchar(30) NOT NULL DEFAULT '0',
  `Time` varchar(30) NOT NULL DEFAULT '0',
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ServiceDetails`
--

INSERT INTO `ServiceDetails` (`VHC`, `BP4H`, `CHSP`, `QCCS`, `Home Care Package`, `QHDR - YOSD`, `Domestic Assitance`, `Personal Care`, `Social Support`, `In-Home Respite`, `Staying Well & Active Program`, `Overnight Respite`, `Other`, `Frequency`, `Day/s`, `Duration`, `Time`, `FileNo`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', '0', '0', 1),
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2', '1', '30min', '10', 2),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `SocialSupport`
--

CREATE TABLE `SocialSupport` (
  `Shopping` tinyint(1) NOT NULL DEFAULT '0',
  `Appointments` tinyint(1) NOT NULL DEFAULT '0',
  `Other` tinyint(1) NOT NULL DEFAULT '0',
  `Disability Parking Permit` tinyint(1) NOT NULL DEFAULT '0',
  `Cash Handling` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'A Cash Handling Form must be completed on each occasion of service',
  `Additional Information` varchar(300) NOT NULL DEFAULT '0',
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `SocialSupport`
--

INSERT INTO `SocialSupport` (`Shopping`, `Appointments`, `Other`, `Disability Parking Permit`, `Cash Handling`, `Additional Information`, `FileNo`) VALUES
(0, 0, 0, 0, 0, '0', 1),
(1, 1, 1, 1, 1, 'mike', 2),
(0, 0, 0, 0, 0, '', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `SupportAidsUsed`
--

CREATE TABLE `SupportAidsUsed` (
  `None` tinyint(1) NOT NULL DEFAULT '0',
  `Walker/ Walking Stick` tinyint(1) NOT NULL DEFAULT '0',
  `Glasses` tinyint(1) NOT NULL DEFAULT '0',
  `Hearing Aids` tinyint(1) NOT NULL DEFAULT '0',
  `Left` tinyint(1) NOT NULL DEFAULT '0',
  `Right` tinyint(1) NOT NULL DEFAULT '0',
  `Both` tinyint(1) NOT NULL DEFAULT '0',
  `Dentures` tinyint(1) NOT NULL DEFAULT '0',
  `Additional Information` varchar(300) NOT NULL DEFAULT '0',
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `SupportAidsUsed`
--

INSERT INTO `SupportAidsUsed` (`None`, `Walker/ Walking Stick`, `Glasses`, `Hearing Aids`, `Left`, `Right`, `Both`, `Dentures`, `Additional Information`, `FileNo`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, '0', 1),
(1, 1, 1, 1, 1, 1, 1, 1, 'mike', 2),
(0, 0, 0, 0, 0, 0, 0, 0, '', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `TransportRequirements`
--

CREATE TABLE `TransportRequirements` (
  `1. Morning Drop-Off` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Own Transport',
  `1. Afternoon Pick-Up` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Own Transport',
  `1. Both Ways` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Own Transport',
  `2. Morning Drop-Off` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Centre Transport',
  `2. Afternoon Pick-Up` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Centre  Transport',
  `2. Both Ways` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Centre  Transport',
  `Mini Bus` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Preferred Mode of Transport',
  `Car` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Preferred Mode of Transport',
  `Additional Information` varchar(300) NOT NULL DEFAULT '0',
  `FileNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TransportRequirements`
--

INSERT INTO `TransportRequirements` (`1. Morning Drop-Off`, `1. Afternoon Pick-Up`, `1. Both Ways`, `2. Morning Drop-Off`, `2. Afternoon Pick-Up`, `2. Both Ways`, `Mini Bus`, `Car`, `Additional Information`, `FileNo`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, '0', 1),
(1, 1, 1, 1, 1, 1, 1, 1, 'mike', 2),
(0, 0, 0, 0, 0, 0, 0, 0, '', 123456789);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v`
-- (See below for the actual view)
--
CREATE TABLE `v` (
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v1`
-- (See below for the actual view)
--
CREATE TABLE `v1` (
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v2`
-- (See below for the actual view)
--
CREATE TABLE `v2` (
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v3`
-- (See below for the actual view)
--
CREATE TABLE `v3` (
`ClientName` varchar(50)
,`D.O.B` date
,`FileNo` int(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v4`
-- (See below for the actual view)
--
CREATE TABLE `v4` (
`ClientName` varchar(50)
,`D.O.B` date
,`FileNo` int(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v5`
-- (See below for the actual view)
--
CREATE TABLE `v5` (
`FileNo` int(30)
,`Additional Information` varchar(300)
,`Other` tinyint(1)
,`Shopping` tinyint(1)
,`Independent` tinyint(1)
,`Requires Supervision` tinyint(1)
,`Requires Assistance` tinyint(1)
,`ClientName` varchar(50)
,`D.O.B` date
,`Interest 1` varchar(300)
,`Interest Additional Information` varchar(300)
,`Cultural/ Social / Spiritual Considerations` varchar(300)
,`Regular Contact/Support` tinyint(1)
,`Periodic Contact/Support` tinyint(1)
,`little contact` tinyint(1)
,`Social Network Details` varchar(300)
,`Life History Details` varchar(300)
,`goaldetails` varchar(2000)
,`carerdetails` varchar(2000)
,`What who is important to me` varchar(300)
,`Things I need to have a good day` varchar(300)
,`How I like to spend my time` varchar(300)
,`My strengths and personal qualities` varchar(300)
,`How best to support me` varchar(300)
,`What would I like to achieve from this service` varchar(300)
,`The role I would like to have in arranging this support` varchar(300)
,`Allergies (refer to Health Summary)` tinyint(1)
,`Special Dietary Needs` tinyint(1)
,`Vegetarian` tinyint(1)
,`Gluten Free` tinyint(1)
,`Lactose Intolerant` tinyint(1)
,`Food Likes/ Dislikes` tinyint(1)
,`Cultural Food Preparation` tinyint(1)
,`Specific Routine` tinyint(1)
,`Diagnosed Health Condition (refer Medical Summary)` tinyint(1)
,`Cognitive Impairment` tinyint(1)
,`Locked Box for Medication` tinyint(1)
,`Pendant Alarm` tinyint(1)
,`Allergies` tinyint(1)
,`Advance Health Care Directive (refer File)` tinyint(1)
,`Power of Attorney` tinyint(1)
,`Enduring Power of Attorney` tinyint(1)
,`Perfferedhos` tinyint(1)
,`Preferred Hospital` varchar(150)
,`Email` tinyint(1)
,`Games` tinyint(1)
,`Internet` tinyint(1)
,`Card Making` tinyint(1)
,`Crochet` tinyint(1)
,`Craftwork` tinyint(1)
,`Jewellery Making` tinyint(1)
,`Knitting` tinyint(1)
,`Needlework` tinyint(1)
,`Bingo` tinyint(1)
,`Cards` tinyint(1)
,`Chess/ Checkers` tinyint(1)
,`Jigsaws` tinyint(1)
,`Trivia` tinyint(1)
,`Word Puzzles` tinyint(1)
,`Hairdressing` tinyint(1)
,`Facials` tinyint(1)
,`Manicures` tinyint(1)
,`Pedicures` tinyint(1)
,`Eating Out` tinyint(1)
,`Films/Movies` tinyint(1)
,`Galleries/Museums` tinyint(1)
,`Outings` tinyint(1)
,`Picnics` tinyint(1)
,`Poetry` tinyint(1)
,`Novels` tinyint(1)
,`Short Stories` tinyint(1)
,`File No.` int(30)
,`Men's Shed` tinyint(1)
,`Girl's Shed` tinyint(1)
,`Bicycle Repairs` tinyint(1)
,`Framing` tinyint(1)
,`Metal work` tinyint(1)
,`Wood work` tinyint(1)
,`Aromatherapy` tinyint(1)
,`Massage` tinyint(1)
,`Meditation` tinyint(1)
,`Relaxation` tinyint(1)
,`Cooking` tinyint(1)
,`Flower Arranging` tinyint(1)
,`Education` tinyint(1)
,`Languages` tinyint(1)
,`Model Building` tinyint(1)
,`Volunteering` tinyint(1)
,`Concerts/Music` tinyint(1)
,`Dance/ Ballet` tinyint(1)
,`Opera` tinyint(1)
,`Plays` tinyint(1)
,`Singing` tinyint(1)
,`Theatre/Drama` tinyint(1)
,`Fishing` tinyint(1)
,`Gardening` tinyint(1)
,`Golf` tinyint(1)
,`Lawn Bowls` tinyint(1)
,`Sailing/Boating` tinyint(1)
,`Snooker` tinyint(1)
,`Swimming` tinyint(1)
,`Tai Chi` tinyint(1)
,`Tennis` tinyint(1)
,`Ten Pin Bowling` tinyint(1)
,`Walking` tinyint(1)
,`Yoga` tinyint(1)
,`Architecture` tinyint(1)
,`Drawing` tinyint(1)
,`Fashion` tinyint(1)
,`Painting` tinyint(1)
,`Photography` tinyint(1)
,`Pottery/Sculpture` tinyint(1)
,`pension` varchar(30)
,`I do not require medication whilst attending...` tinyint(1)
,`I do require medication` tinyint(1)
,`Pharmacy Name` varchar(40)
,`Telephone` int(20)
,`Street Address` varchar(200)
,`Suburb` varchar(50)
,`Postcode` int(10)
,`Business Hours` varchar(50)
,`Falls Risk` tinyint(1)
,`Requires assistance in the event of disaster or pandemic` tinyint(1)
,`Contact Name 1` varchar(40)
,`Telephone 1` int(20)
,`Contact Name 2` varchar(40)
,`Telephone 2` int(20)
,`Contact Name 3` varchar(40)
,`Telephone 3` int(20)
,`Has a Specific Routine` tinyint(1)
,`Continence Care` tinyint(1)
,`Bladder` tinyint(1)
,`Bowel` tinyint(1)
,`VHC` tinyint(1)
,`BP4H` tinyint(1)
,`CHSP` tinyint(1)
,`QCCS` tinyint(1)
,`Home Care Package` tinyint(1)
,`QHDR - YOSD` tinyint(1)
,`Domestic Assitance` tinyint(1)
,`Personal Care` tinyint(1)
,`Social Support` tinyint(1)
,`In-Home Respite` tinyint(1)
,`Staying Well & Active Program` tinyint(1)
,`Overnight Respite` tinyint(1)
,`Frequency` varchar(30)
,`Day/s` varchar(30)
,`Duration` varchar(30)
,`Time` varchar(30)
,`Appointments` tinyint(1)
,`Disability Parking Permit` tinyint(1)
,`Cash Handling` tinyint(1)
,`None` tinyint(1)
,`Walker/ Walking Stick` tinyint(1)
,`Glasses` tinyint(1)
,`Hearing Aids` tinyint(1)
,`Left` tinyint(1)
,`Right` tinyint(1)
,`Both` tinyint(1)
,`Dentures` tinyint(1)
,`1. Morning Drop-Off` tinyint(1)
,`1. Afternoon Pick-Up` tinyint(1)
,`1. Both Ways` tinyint(1)
,`2. Morning Drop-Off` tinyint(1)
,`2. Afternoon Pick-Up` tinyint(1)
,`2. Both Ways` tinyint(1)
,`Mini Bus` tinyint(1)
,`Car` tinyint(1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewsample`
-- (See below for the actual view)
--
CREATE TABLE `viewsample` (
`FileNo` int(30)
,`Additional Information` varchar(300)
,`Other` tinyint(1)
,`Shopping` tinyint(1)
,`Independent` tinyint(1)
,`Requires Supervision` tinyint(1)
,`Requires Assistance` tinyint(1)
,`ClientName` varchar(50)
,`D.O.B` date
,`Interest 1` varchar(300)
,`Interest Additional Information` varchar(300)
,`Cultural/ Social / Spiritual Considerations` varchar(300)
,`Regular Contact/Support` tinyint(1)
,`Periodic Contact/Support` tinyint(1)
,`little contact` tinyint(1)
,`Social Network Details` varchar(300)
,`Life History Details` varchar(300)
,`goaldetails` varchar(2000)
,`carerdetails` varchar(2000)
,`What who is important to me` varchar(300)
,`Things I need to have a good day` varchar(300)
,`How I like to spend my time` varchar(300)
,`My strengths and personal qualities` varchar(300)
,`How best to support me` varchar(300)
,`What would I like to achieve from this service` varchar(300)
,`The role I would like to have in arranging this support` varchar(300)
,`Allergies (refer to Health Summary)` tinyint(1)
,`Special Dietary Needs` tinyint(1)
,`Vegetarian` tinyint(1)
,`Gluten Free` tinyint(1)
,`Lactose Intolerant` tinyint(1)
,`Food Likes/ Dislikes` tinyint(1)
,`Cultural Food Preparation` tinyint(1)
,`Specific Routine` tinyint(1)
,`Diagnosed Health Condition (refer Medical Summary)` tinyint(1)
,`Cognitive Impairment` tinyint(1)
,`Locked Box for Medication` tinyint(1)
,`Pendant Alarm` tinyint(1)
,`Allergies` tinyint(1)
,`Advance Health Care Directive (refer File)` tinyint(1)
,`Power of Attorney` tinyint(1)
,`Enduring Power of Attorney` tinyint(1)
,`Perfferedhos` tinyint(1)
,`Preferred Hospital` varchar(150)
,`Email` tinyint(1)
,`Games` tinyint(1)
,`Internet` tinyint(1)
,`Card Making` tinyint(1)
,`Crochet` tinyint(1)
,`Craftwork` tinyint(1)
,`Jewellery Making` tinyint(1)
,`Knitting` tinyint(1)
,`Needlework` tinyint(1)
,`Bingo` tinyint(1)
,`Cards` tinyint(1)
,`Chess/ Checkers` tinyint(1)
,`Jigsaws` tinyint(1)
,`Trivia` tinyint(1)
,`Word Puzzles` tinyint(1)
,`Hairdressing` tinyint(1)
,`Facials` tinyint(1)
,`Manicures` tinyint(1)
,`Pedicures` tinyint(1)
,`Eating Out` tinyint(1)
,`Films/Movies` tinyint(1)
,`Galleries/Museums` tinyint(1)
,`Outings` tinyint(1)
,`Picnics` tinyint(1)
,`Poetry` tinyint(1)
,`Novels` tinyint(1)
,`Short Stories` tinyint(1)
,`File No.` int(30)
,`Men's Shed` tinyint(1)
,`Girl's Shed` tinyint(1)
,`Bicycle Repairs` tinyint(1)
,`Framing` tinyint(1)
,`Metal work` tinyint(1)
,`Wood work` tinyint(1)
,`Aromatherapy` tinyint(1)
,`Massage` tinyint(1)
,`Meditation` tinyint(1)
,`Relaxation` tinyint(1)
,`Cooking` tinyint(1)
,`Flower Arranging` tinyint(1)
,`Education` tinyint(1)
,`Languages` tinyint(1)
,`Model Building` tinyint(1)
,`Volunteering` tinyint(1)
,`Concerts/Music` tinyint(1)
,`Dance/ Ballet` tinyint(1)
,`Opera` tinyint(1)
,`Plays` tinyint(1)
,`Singing` tinyint(1)
,`Theatre/Drama` tinyint(1)
,`Fishing` tinyint(1)
,`Gardening` tinyint(1)
,`Golf` tinyint(1)
,`Lawn Bowls` tinyint(1)
,`Sailing/Boating` tinyint(1)
,`Snooker` tinyint(1)
,`Swimming` tinyint(1)
,`Tai Chi` tinyint(1)
,`Tennis` tinyint(1)
,`Ten Pin Bowling` tinyint(1)
,`Walking` tinyint(1)
,`Yoga` tinyint(1)
,`Architecture` tinyint(1)
,`Drawing` tinyint(1)
,`Fashion` tinyint(1)
,`Painting` tinyint(1)
,`Photography` tinyint(1)
,`Pottery/Sculpture` tinyint(1)
,`pension` varchar(30)
,`I do not require medication whilst attending...` tinyint(1)
,`I do require medication` tinyint(1)
,`Pharmacy Name` varchar(40)
,`Telephone` int(20)
,`Street Address` varchar(200)
,`Suburb` varchar(50)
,`Postcode` int(10)
,`Business Hours` varchar(50)
,`Falls Risk` tinyint(1)
,`Requires assistance in the event of disaster or pandemic` tinyint(1)
,`Contact Name 1` varchar(40)
,`Telephone 1` int(20)
,`Contact Name 2` varchar(40)
,`Telephone 2` int(20)
,`Contact Name 3` varchar(40)
,`Telephone 3` int(20)
,`Has a Specific Routine` tinyint(1)
,`Continence Care` tinyint(1)
,`Bladder` tinyint(1)
,`Bowel` tinyint(1)
,`VHC` tinyint(1)
,`BP4H` tinyint(1)
,`CHSP` tinyint(1)
,`QCCS` tinyint(1)
,`Home Care Package` tinyint(1)
,`QHDR - YOSD` tinyint(1)
,`Domestic Assitance` tinyint(1)
,`Personal Care` tinyint(1)
,`Social Support` tinyint(1)
,`In-Home Respite` tinyint(1)
,`Staying Well & Active Program` tinyint(1)
,`Overnight Respite` tinyint(1)
,`Frequency` varchar(30)
,`Day/s` varchar(30)
,`Duration` varchar(30)
,`Time` varchar(30)
,`Appointments` tinyint(1)
,`Disability Parking Permit` tinyint(1)
,`Cash Handling` tinyint(1)
,`None` tinyint(1)
,`Walker/ Walking Stick` tinyint(1)
,`Glasses` tinyint(1)
,`Hearing Aids` tinyint(1)
,`Left` tinyint(1)
,`Right` tinyint(1)
,`Both` tinyint(1)
,`Dentures` tinyint(1)
,`1. Morning Drop-Off` tinyint(1)
,`1. Afternoon Pick-Up` tinyint(1)
,`1. Both Ways` tinyint(1)
,`2. Morning Drop-Off` tinyint(1)
,`2. Afternoon Pick-Up` tinyint(1)
,`2. Both Ways` tinyint(1)
,`Mini Bus` tinyint(1)
,`Car` tinyint(1)
);

-- --------------------------------------------------------

--
-- Structure for view `1`
--
DROP TABLE IF EXISTS `1`;
-- in use(#1356 - View 'Centacare.1' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Structure for view `v`
--
DROP TABLE IF EXISTS `v`;
-- in use(#1356 - View 'Centacare.v' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Structure for view `v1`
--
DROP TABLE IF EXISTS `v1`;
-- in use(#1356 - View 'Centacare.v1' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Structure for view `v2`
--
DROP TABLE IF EXISTS `v2`;
-- in use(#1356 - View 'Centacare.v2' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Structure for view `v3`
--
DROP TABLE IF EXISTS `v3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v3`  AS  select `ClientBasicInformation`.`ClientName` AS `ClientName`,`ClientBasicInformation`.`D.O.B` AS `D.O.B`,`ClientBasicInformation`.`FileNo` AS `FileNo` from `ClientBasicInformation` where (`ClientBasicInformation`.`FileNo` = 1) ;

-- --------------------------------------------------------

--
-- Structure for view `v4`
--
DROP TABLE IF EXISTS `v4`;

CREATE ALGORITHM=UNDEFINED DEFINER=`watson`@`localhost` SQL SECURITY DEFINER VIEW `v4`  AS  select `ClientBasicInformation`.`ClientName` AS `ClientName`,`ClientBasicInformation`.`D.O.B` AS `D.O.B`,`ClientBasicInformation`.`FileNo` AS `FileNo` from `ClientBasicInformation` where (`ClientBasicInformation`.`FileNo` = 1) ;

-- --------------------------------------------------------

--
-- Structure for view `v5`
--
DROP TABLE IF EXISTS `v5`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v5`  AS  select `ClientBasicInformation`.`FileNo` AS `FileNo`,`DietaryRequirements`.`Additional Information` AS `Additional Information`,`DietaryRequirements`.`Other` AS `Other`,`IntresLeisure`.`Shopping` AS `Shopping`,`DietaryRequirements`.`Independent` AS `Independent`,`DietaryRequirements`.`Requires Supervision` AS `Requires Supervision`,`DietaryRequirements`.`Requires Assistance` AS `Requires Assistance`,`ClientBasicInformation`.`ClientName` AS `ClientName`,`ClientBasicInformation`.`D.O.B` AS `D.O.B`,`ClientBackgroung`.`Interest 1` AS `Interest 1`,`ClientBackgroung`.`Interest Additional Information` AS `Interest Additional Information`,`ClientBackgroung`.`Cultural/ Social / Spiritual Considerations` AS `Cultural/ Social / Spiritual Considerations`,`ClientBackgroung`.`Regular Contact/Support` AS `Regular Contact/Support`,`ClientBackgroung`.`Periodic Contact/Support` AS `Periodic Contact/Support`,`ClientBackgroung`.`little contact` AS `little contact`,`ClientBackgroung`.`Social Network Details` AS `Social Network Details`,`ClientBackgroung`.`Life History Details` AS `Life History Details`,`ClientBackgroung`.`goaldetails` AS `goaldetails`,`ClientBackgroung`.`carerdetails` AS `carerdetails`,`ClientProfile`.`What who is important to me` AS `What who is important to me`,`ClientProfile`.`Things I need to have a good day` AS `Things I need to have a good day`,`ClientProfile`.`How I like to spend my time` AS `How I like to spend my time`,`ClientProfile`.`My strengths and personal qualities` AS `My strengths and personal qualities`,`ClientProfile`.`How best to support me` AS `How best to support me`,`ClientProfile`.`What would I like to achieve from this service` AS `What would I like to achieve from this service`,`ClientProfile`.`The role I would like to have in arranging this support` AS `The role I would like to have in arranging this support`,`DietaryRequirements`.`Allergies (refer to Health Summary)` AS `Allergies (refer to Health Summary)`,`DietaryRequirements`.`Special Dietary Needs` AS `Special Dietary Needs`,`DietaryRequirements`.`Vegetarian` AS `Vegetarian`,`DietaryRequirements`.`Gluten Free` AS `Gluten Free`,`DietaryRequirements`.`Lactose Intolerant` AS `Lactose Intolerant`,`DietaryRequirements`.`Food Likes/ Dislikes` AS `Food Likes/ Dislikes`,`DietaryRequirements`.`Cultural Food Preparation` AS `Cultural Food Preparation`,`DietaryRequirements`.`Specific Routine` AS `Specific Routine`,`HealthLegalStatus`.`Diagnosed Health Condition (refer Medical Summary)` AS `Diagnosed Health Condition (refer Medical Summary)`,`HealthLegalStatus`.`Cognitive Impairment` AS `Cognitive Impairment`,`HealthLegalStatus`.`Locked Box for Medication` AS `Locked Box for Medication`,`HealthLegalStatus`.`Pendant Alarm` AS `Pendant Alarm`,`HealthLegalStatus`.`Allergies` AS `Allergies`,`HealthLegalStatus`.`Advance Health Care Directive (refer File)` AS `Advance Health Care Directive (refer File)`,`HealthLegalStatus`.`Power of Attorney` AS `Power of Attorney`,`HealthLegalStatus`.`Enduring Power of Attorney` AS `Enduring Power of Attorney`,`HealthLegalStatus`.`Perfferedhos` AS `Perfferedhos`,`HealthLegalStatus`.`Preferred Hospital` AS `Preferred Hospital`,`IntresComputing`.`Email` AS `Email`,`IntresComputing`.`Games` AS `Games`,`IntresComputing`.`Internet` AS `Internet`,`IntresCrafts`.`Card Making` AS `Card Making`,`IntresCrafts`.`Crochet` AS `Crochet`,`IntresCrafts`.`Craftwork` AS `Craftwork`,`IntresCrafts`.`Jewellery Making` AS `Jewellery Making`,`IntresCrafts`.`Knitting` AS `Knitting`,`IntresCrafts`.`Needlework` AS `Needlework`,`IntresGames`.`Bingo` AS `Bingo`,`IntresGames`.`Cards` AS `Cards`,`IntresGames`.`Chess/ Checkers` AS `Chess/ Checkers`,`IntresGames`.`Jigsaws` AS `Jigsaws`,`IntresGames`.`Trivia` AS `Trivia`,`IntresGames`.`Word Puzzles` AS `Word Puzzles`,`IntresHairBeauty`.`Hairdressing` AS `Hairdressing`,`IntresHairBeauty`.`Facials` AS `Facials`,`IntresHairBeauty`.`Manicures` AS `Manicures`,`IntresHairBeauty`.`Pedicures` AS `Pedicures`,`IntresLeisure`.`Eating Out` AS `Eating Out`,`IntresLeisure`.`Films/Movies` AS `Films/Movies`,`IntresLeisure`.`Galleries/Museums` AS `Galleries/Museums`,`IntresLeisure`.`Outings` AS `Outings`,`IntresLeisure`.`Picnics` AS `Picnics`,`IntresLiteraryArts`.`Poetry` AS `Poetry`,`IntresLiteraryArts`.`Novels` AS `Novels`,`IntresLiteraryArts`.`Short Stories` AS `Short Stories`,`IntresLiteraryArts`.`File No.` AS `File No.`,`IntresMenGirlShed`.`Men's Shed` AS `Men's Shed`,`IntresMenGirlShed`.`Girl's Shed` AS `Girl's Shed`,`IntresMenGirlShed`.`Bicycle Repairs` AS `Bicycle Repairs`,`IntresMenGirlShed`.`Framing` AS `Framing`,`IntresMenGirlShed`.`Metal work` AS `Metal work`,`IntresMenGirlShed`.`Wood work` AS `Wood work`,`IntresNaturalTherapies`.`Aromatherapy` AS `Aromatherapy`,`IntresNaturalTherapies`.`Massage` AS `Massage`,`IntresNaturalTherapies`.`Meditation` AS `Meditation`,`IntresNaturalTherapies`.`Relaxation` AS `Relaxation`,`IntresOther`.`Cooking` AS `Cooking`,`IntresOther`.`Flower Arranging` AS `Flower Arranging`,`IntresOther`.`Education` AS `Education`,`IntresOther`.`Languages` AS `Languages`,`IntresOther`.`Model Building` AS `Model Building`,`IntresOther`.`Volunteering` AS `Volunteering`,`IntresPerforming`.`Concerts/Music` AS `Concerts/Music`,`IntresPerforming`.`Dance/ Ballet` AS `Dance/ Ballet`,`IntresPerforming`.`Opera` AS `Opera`,`IntresPerforming`.`Plays` AS `Plays`,`IntresPerforming`.`Singing` AS `Singing`,`IntresPerforming`.`Theatre/Drama` AS `Theatre/Drama`,`IntresPhysicalActivity`.`Fishing` AS `Fishing`,`IntresPhysicalActivity`.`Gardening` AS `Gardening`,`IntresPhysicalActivity`.`Golf` AS `Golf`,`IntresPhysicalActivity`.`Lawn Bowls` AS `Lawn Bowls`,`IntresPhysicalActivity`.`Sailing/Boating` AS `Sailing/Boating`,`IntresPhysicalActivity`.`Snooker` AS `Snooker`,`IntresPhysicalActivity`.`Swimming` AS `Swimming`,`IntresPhysicalActivity`.`Tai Chi` AS `Tai Chi`,`IntresPhysicalActivity`.`Tennis` AS `Tennis`,`IntresPhysicalActivity`.`Ten Pin Bowling` AS `Ten Pin Bowling`,`IntresPhysicalActivity`.`Walking` AS `Walking`,`IntresPhysicalActivity`.`Yoga` AS `Yoga`,`IntresVisualArts`.`Architecture` AS `Architecture`,`IntresVisualArts`.`Drawing` AS `Drawing`,`IntresVisualArts`.`Fashion` AS `Fashion`,`IntresVisualArts`.`Painting` AS `Painting`,`IntresVisualArts`.`Photography` AS `Photography`,`IntresVisualArts`.`Pottery/Sculpture` AS `Pottery/Sculpture`,`Medication`.`pension` AS `pension`,`Medication`.`I do not require medication whilst attending...` AS `I do not require medication whilst attending...`,`Medication`.`I do require medication` AS `I do require medication`,`Medication`.`Pharmacy Name` AS `Pharmacy Name`,`Medication`.`Telephone` AS `Telephone`,`Medication`.`Street Address` AS `Street Address`,`Medication`.`Suburb` AS `Suburb`,`Medication`.`Postcode` AS `Postcode`,`Medication`.`Business Hours` AS `Business Hours`,`MobilityandWellbeing`.`Falls Risk` AS `Falls Risk`,`MobilityandWellbeing`.`Requires assistance in the event of disaster or pandemic` AS `Requires assistance in the event of disaster or pandemic`,`NonResponsetoScheduledVisit`.`Contact Name 1` AS `Contact Name 1`,`NonResponsetoScheduledVisit`.`Telephone 1` AS `Telephone 1`,`NonResponsetoScheduledVisit`.`Contact Name 2` AS `Contact Name 2`,`NonResponsetoScheduledVisit`.`Telephone 2` AS `Telephone 2`,`NonResponsetoScheduledVisit`.`Contact Name 3` AS `Contact Name 3`,`NonResponsetoScheduledVisit`.`Telephone 3` AS `Telephone 3`,`SelfCare`.`Has a Specific Routine` AS `Has a Specific Routine`,`SelfCare`.`Continence Care` AS `Continence Care`,`SelfCare`.`Bladder` AS `Bladder`,`SelfCare`.`Bowel` AS `Bowel`,`ServiceDetails`.`VHC` AS `VHC`,`ServiceDetails`.`BP4H` AS `BP4H`,`ServiceDetails`.`CHSP` AS `CHSP`,`ServiceDetails`.`QCCS` AS `QCCS`,`ServiceDetails`.`Home Care Package` AS `Home Care Package`,`ServiceDetails`.`QHDR - YOSD` AS `QHDR - YOSD`,`ServiceDetails`.`Domestic Assitance` AS `Domestic Assitance`,`ServiceDetails`.`Personal Care` AS `Personal Care`,`ServiceDetails`.`Social Support` AS `Social Support`,`ServiceDetails`.`In-Home Respite` AS `In-Home Respite`,`ServiceDetails`.`Staying Well & Active Program` AS `Staying Well & Active Program`,`ServiceDetails`.`Overnight Respite` AS `Overnight Respite`,`ServiceDetails`.`Frequency` AS `Frequency`,`ServiceDetails`.`Day/s` AS `Day/s`,`ServiceDetails`.`Duration` AS `Duration`,`ServiceDetails`.`Time` AS `Time`,`SocialSupport`.`Appointments` AS `Appointments`,`SocialSupport`.`Disability Parking Permit` AS `Disability Parking Permit`,`SocialSupport`.`Cash Handling` AS `Cash Handling`,`SupportAidsUsed`.`None` AS `None`,`SupportAidsUsed`.`Walker/ Walking Stick` AS `Walker/ Walking Stick`,`SupportAidsUsed`.`Glasses` AS `Glasses`,`SupportAidsUsed`.`Hearing Aids` AS `Hearing Aids`,`SupportAidsUsed`.`Left` AS `Left`,`SupportAidsUsed`.`Right` AS `Right`,`SupportAidsUsed`.`Both` AS `Both`,`SupportAidsUsed`.`Dentures` AS `Dentures`,`TransportRequirements`.`1. Morning Drop-Off` AS `1. Morning Drop-Off`,`TransportRequirements`.`1. Afternoon Pick-Up` AS `1. Afternoon Pick-Up`,`TransportRequirements`.`1. Both Ways` AS `1. Both Ways`,`TransportRequirements`.`2. Morning Drop-Off` AS `2. Morning Drop-Off`,`TransportRequirements`.`2. Afternoon Pick-Up` AS `2. Afternoon Pick-Up`,`TransportRequirements`.`2. Both Ways` AS `2. Both Ways`,`TransportRequirements`.`Mini Bus` AS `Mini Bus`,`TransportRequirements`.`Car` AS `Car` from ((((((((((((((((((((((((`ClientBasicInformation` join `ClientBackgroung` on((`ClientBasicInformation`.`FileNo` = `ClientBackgroung`.`FileNo`))) join `ClientProfile` on((`ClientBasicInformation`.`FileNo` = `ClientProfile`.`FileNo`))) join `DietaryRequirements` on((`ClientBasicInformation`.`FileNo` = `DietaryRequirements`.`FileNo`))) join `HealthLegalStatus` on(((`ClientBasicInformation`.`FileNo` = `HealthLegalStatus`.`FileNo`) and (`DietaryRequirements`.`Additional Information` = `HealthLegalStatus`.`Additional Information`)))) join `IntresComputing` on((`ClientBasicInformation`.`FileNo` = `IntresComputing`.`FileNo`))) join `IntresCrafts` on((`ClientBasicInformation`.`FileNo` = `IntresCrafts`.`FileNo`))) join `IntresGames` on((`ClientBasicInformation`.`FileNo` = `IntresGames`.`FileNo`))) join `IntresHairBeauty` on((`ClientBasicInformation`.`FileNo` = `IntresHairBeauty`.`FileNo`))) join `IntresLeisure` on((`ClientBasicInformation`.`FileNo` = `IntresLeisure`.`FileNo`))) join `IntresLiteraryArts`) join `IntresMenGirlShed` on((`ClientBasicInformation`.`FileNo` = `IntresMenGirlShed`.`FileNo`))) join `IntresNaturalTherapies` on((`ClientBasicInformation`.`FileNo` = `IntresNaturalTherapies`.`FileNo`))) join `IntresOther` on((`ClientBasicInformation`.`FileNo` = `IntresOther`.`FileNo`))) join `IntresPerforming` on((`ClientBasicInformation`.`FileNo` = `IntresPerforming`.`FileNo`))) join `IntresPhysicalActivity` on((`ClientBasicInformation`.`FileNo` = `IntresPhysicalActivity`.`FileNo`))) join `IntresVisualArts` on((`ClientBasicInformation`.`FileNo` = `IntresVisualArts`.`FileNo`))) join `Medication` on(((`ClientBasicInformation`.`FileNo` = `Medication`.`FileNo`) and (`DietaryRequirements`.`Additional Information` = `Medication`.`Additional Information`)))) join `MobilityandWellbeing` on(((`ClientBasicInformation`.`FileNo` = `MobilityandWellbeing`.`FileNo`) and (`DietaryRequirements`.`Additional Information` = `MobilityandWellbeing`.`Additional Information`) and (`DietaryRequirements`.`Independent` = `MobilityandWellbeing`.`Independent`) and (`DietaryRequirements`.`Requires Supervision` = `MobilityandWellbeing`.`Requires Supervision`) and (`DietaryRequirements`.`Requires Assistance` = `MobilityandWellbeing`.`Requires Assistance`)))) join `NonResponsetoScheduledVisit` on(((`ClientBasicInformation`.`FileNo` = `NonResponsetoScheduledVisit`.`FileNo`) and (`DietaryRequirements`.`Additional Information` = `NonResponsetoScheduledVisit`.`Additional Information`)))) join `SelfCare` on(((`ClientBasicInformation`.`FileNo` = `SelfCare`.`FileNo`) and (`DietaryRequirements`.`Additional Information` = `SelfCare`.`Additional Information`) and (`DietaryRequirements`.`Independent` = `SelfCare`.`Independent`) and (`DietaryRequirements`.`Requires Supervision` = `SelfCare`.`Requires Supervision`) and (`DietaryRequirements`.`Requires Assistance` = `SelfCare`.`Requires Assistance`)))) join `ServiceDetails` on(((`ClientBasicInformation`.`FileNo` = `ServiceDetails`.`FileNo`) and (`DietaryRequirements`.`Other` = `ServiceDetails`.`Other`)))) join `SocialSupport` on(((`ClientBasicInformation`.`FileNo` = `SocialSupport`.`FileNo`) and (`DietaryRequirements`.`Other` = `SocialSupport`.`Other`) and (`DietaryRequirements`.`Additional Information` = `SocialSupport`.`Additional Information`) and (`IntresLeisure`.`Shopping` = `SocialSupport`.`Shopping`)))) join `SupportAidsUsed` on(((`ClientBasicInformation`.`FileNo` = `SupportAidsUsed`.`FileNo`) and (`DietaryRequirements`.`Additional Information` = `SupportAidsUsed`.`Additional Information`)))) join `TransportRequirements` on(((`ClientBasicInformation`.`FileNo` = `TransportRequirements`.`FileNo`) and (`DietaryRequirements`.`Additional Information` = `TransportRequirements`.`Additional Information`)))) where (`ClientBasicInformation`.`FileNo` = 2) ;

-- --------------------------------------------------------

--
-- Structure for view `viewsample`
--
DROP TABLE IF EXISTS `viewsample`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewsample`  AS  select `ClientBasicInformation`.`FileNo` AS `FileNo`,`DietaryRequirements`.`Additional Information` AS `Additional Information`,`DietaryRequirements`.`Other` AS `Other`,`IntresLeisure`.`Shopping` AS `Shopping`,`DietaryRequirements`.`Independent` AS `Independent`,`DietaryRequirements`.`Requires Supervision` AS `Requires Supervision`,`DietaryRequirements`.`Requires Assistance` AS `Requires Assistance`,`ClientBasicInformation`.`ClientName` AS `ClientName`,`ClientBasicInformation`.`D.O.B` AS `D.O.B`,`ClientBackgroung`.`Interest 1` AS `Interest 1`,`ClientBackgroung`.`Interest Additional Information` AS `Interest Additional Information`,`ClientBackgroung`.`Cultural/ Social / Spiritual Considerations` AS `Cultural/ Social / Spiritual Considerations`,`ClientBackgroung`.`Regular Contact/Support` AS `Regular Contact/Support`,`ClientBackgroung`.`Periodic Contact/Support` AS `Periodic Contact/Support`,`ClientBackgroung`.`little contact` AS `little contact`,`ClientBackgroung`.`Social Network Details` AS `Social Network Details`,`ClientBackgroung`.`Life History Details` AS `Life History Details`,`ClientBackgroung`.`goaldetails` AS `goaldetails`,`ClientBackgroung`.`carerdetails` AS `carerdetails`,`ClientProfile`.`What who is important to me` AS `What who is important to me`,`ClientProfile`.`Things I need to have a good day` AS `Things I need to have a good day`,`ClientProfile`.`How I like to spend my time` AS `How I like to spend my time`,`ClientProfile`.`My strengths and personal qualities` AS `My strengths and personal qualities`,`ClientProfile`.`How best to support me` AS `How best to support me`,`ClientProfile`.`What would I like to achieve from this service` AS `What would I like to achieve from this service`,`ClientProfile`.`The role I would like to have in arranging this support` AS `The role I would like to have in arranging this support`,`DietaryRequirements`.`Allergies (refer to Health Summary)` AS `Allergies (refer to Health Summary)`,`DietaryRequirements`.`Special Dietary Needs` AS `Special Dietary Needs`,`DietaryRequirements`.`Vegetarian` AS `Vegetarian`,`DietaryRequirements`.`Gluten Free` AS `Gluten Free`,`DietaryRequirements`.`Lactose Intolerant` AS `Lactose Intolerant`,`DietaryRequirements`.`Food Likes/ Dislikes` AS `Food Likes/ Dislikes`,`DietaryRequirements`.`Cultural Food Preparation` AS `Cultural Food Preparation`,`DietaryRequirements`.`Specific Routine` AS `Specific Routine`,`HealthLegalStatus`.`Diagnosed Health Condition (refer Medical Summary)` AS `Diagnosed Health Condition (refer Medical Summary)`,`HealthLegalStatus`.`Cognitive Impairment` AS `Cognitive Impairment`,`HealthLegalStatus`.`Locked Box for Medication` AS `Locked Box for Medication`,`HealthLegalStatus`.`Pendant Alarm` AS `Pendant Alarm`,`HealthLegalStatus`.`Allergies` AS `Allergies`,`HealthLegalStatus`.`Advance Health Care Directive (refer File)` AS `Advance Health Care Directive (refer File)`,`HealthLegalStatus`.`Power of Attorney` AS `Power of Attorney`,`HealthLegalStatus`.`Enduring Power of Attorney` AS `Enduring Power of Attorney`,`HealthLegalStatus`.`Perfferedhos` AS `Perfferedhos`,`HealthLegalStatus`.`Preferred Hospital` AS `Preferred Hospital`,`IntresComputing`.`Email` AS `Email`,`IntresComputing`.`Games` AS `Games`,`IntresComputing`.`Internet` AS `Internet`,`IntresCrafts`.`Card Making` AS `Card Making`,`IntresCrafts`.`Crochet` AS `Crochet`,`IntresCrafts`.`Craftwork` AS `Craftwork`,`IntresCrafts`.`Jewellery Making` AS `Jewellery Making`,`IntresCrafts`.`Knitting` AS `Knitting`,`IntresCrafts`.`Needlework` AS `Needlework`,`IntresGames`.`Bingo` AS `Bingo`,`IntresGames`.`Cards` AS `Cards`,`IntresGames`.`Chess/ Checkers` AS `Chess/ Checkers`,`IntresGames`.`Jigsaws` AS `Jigsaws`,`IntresGames`.`Trivia` AS `Trivia`,`IntresGames`.`Word Puzzles` AS `Word Puzzles`,`IntresHairBeauty`.`Hairdressing` AS `Hairdressing`,`IntresHairBeauty`.`Facials` AS `Facials`,`IntresHairBeauty`.`Manicures` AS `Manicures`,`IntresHairBeauty`.`Pedicures` AS `Pedicures`,`IntresLeisure`.`Eating Out` AS `Eating Out`,`IntresLeisure`.`Films/Movies` AS `Films/Movies`,`IntresLeisure`.`Galleries/Museums` AS `Galleries/Museums`,`IntresLeisure`.`Outings` AS `Outings`,`IntresLeisure`.`Picnics` AS `Picnics`,`IntresLiteraryArts`.`Poetry` AS `Poetry`,`IntresLiteraryArts`.`Novels` AS `Novels`,`IntresLiteraryArts`.`Short Stories` AS `Short Stories`,`IntresLiteraryArts`.`File No.` AS `File No.`,`IntresMenGirlShed`.`Men's Shed` AS `Men's Shed`,`IntresMenGirlShed`.`Girl's Shed` AS `Girl's Shed`,`IntresMenGirlShed`.`Bicycle Repairs` AS `Bicycle Repairs`,`IntresMenGirlShed`.`Framing` AS `Framing`,`IntresMenGirlShed`.`Metal work` AS `Metal work`,`IntresMenGirlShed`.`Wood work` AS `Wood work`,`IntresNaturalTherapies`.`Aromatherapy` AS `Aromatherapy`,`IntresNaturalTherapies`.`Massage` AS `Massage`,`IntresNaturalTherapies`.`Meditation` AS `Meditation`,`IntresNaturalTherapies`.`Relaxation` AS `Relaxation`,`IntresOther`.`Cooking` AS `Cooking`,`IntresOther`.`Flower Arranging` AS `Flower Arranging`,`IntresOther`.`Education` AS `Education`,`IntresOther`.`Languages` AS `Languages`,`IntresOther`.`Model Building` AS `Model Building`,`IntresOther`.`Volunteering` AS `Volunteering`,`IntresPerforming`.`Concerts/Music` AS `Concerts/Music`,`IntresPerforming`.`Dance/ Ballet` AS `Dance/ Ballet`,`IntresPerforming`.`Opera` AS `Opera`,`IntresPerforming`.`Plays` AS `Plays`,`IntresPerforming`.`Singing` AS `Singing`,`IntresPerforming`.`Theatre/Drama` AS `Theatre/Drama`,`IntresPhysicalActivity`.`Fishing` AS `Fishing`,`IntresPhysicalActivity`.`Gardening` AS `Gardening`,`IntresPhysicalActivity`.`Golf` AS `Golf`,`IntresPhysicalActivity`.`Lawn Bowls` AS `Lawn Bowls`,`IntresPhysicalActivity`.`Sailing/Boating` AS `Sailing/Boating`,`IntresPhysicalActivity`.`Snooker` AS `Snooker`,`IntresPhysicalActivity`.`Swimming` AS `Swimming`,`IntresPhysicalActivity`.`Tai Chi` AS `Tai Chi`,`IntresPhysicalActivity`.`Tennis` AS `Tennis`,`IntresPhysicalActivity`.`Ten Pin Bowling` AS `Ten Pin Bowling`,`IntresPhysicalActivity`.`Walking` AS `Walking`,`IntresPhysicalActivity`.`Yoga` AS `Yoga`,`IntresVisualArts`.`Architecture` AS `Architecture`,`IntresVisualArts`.`Drawing` AS `Drawing`,`IntresVisualArts`.`Fashion` AS `Fashion`,`IntresVisualArts`.`Painting` AS `Painting`,`IntresVisualArts`.`Photography` AS `Photography`,`IntresVisualArts`.`Pottery/Sculpture` AS `Pottery/Sculpture`,`Medication`.`pension` AS `pension`,`Medication`.`I do not require medication whilst attending...` AS `I do not require medication whilst attending...`,`Medication`.`I do require medication` AS `I do require medication`,`Medication`.`Pharmacy Name` AS `Pharmacy Name`,`Medication`.`Telephone` AS `Telephone`,`Medication`.`Street Address` AS `Street Address`,`Medication`.`Suburb` AS `Suburb`,`Medication`.`Postcode` AS `Postcode`,`Medication`.`Business Hours` AS `Business Hours`,`MobilityandWellbeing`.`Falls Risk` AS `Falls Risk`,`MobilityandWellbeing`.`Requires assistance in the event of disaster or pandemic` AS `Requires assistance in the event of disaster or pandemic`,`NonResponsetoScheduledVisit`.`Contact Name 1` AS `Contact Name 1`,`NonResponsetoScheduledVisit`.`Telephone 1` AS `Telephone 1`,`NonResponsetoScheduledVisit`.`Contact Name 2` AS `Contact Name 2`,`NonResponsetoScheduledVisit`.`Telephone 2` AS `Telephone 2`,`NonResponsetoScheduledVisit`.`Contact Name 3` AS `Contact Name 3`,`NonResponsetoScheduledVisit`.`Telephone 3` AS `Telephone 3`,`SelfCare`.`Has a Specific Routine` AS `Has a Specific Routine`,`SelfCare`.`Continence Care` AS `Continence Care`,`SelfCare`.`Bladder` AS `Bladder`,`SelfCare`.`Bowel` AS `Bowel`,`ServiceDetails`.`VHC` AS `VHC`,`ServiceDetails`.`BP4H` AS `BP4H`,`ServiceDetails`.`CHSP` AS `CHSP`,`ServiceDetails`.`QCCS` AS `QCCS`,`ServiceDetails`.`Home Care Package` AS `Home Care Package`,`ServiceDetails`.`QHDR - YOSD` AS `QHDR - YOSD`,`ServiceDetails`.`Domestic Assitance` AS `Domestic Assitance`,`ServiceDetails`.`Personal Care` AS `Personal Care`,`ServiceDetails`.`Social Support` AS `Social Support`,`ServiceDetails`.`In-Home Respite` AS `In-Home Respite`,`ServiceDetails`.`Staying Well & Active Program` AS `Staying Well & Active Program`,`ServiceDetails`.`Overnight Respite` AS `Overnight Respite`,`ServiceDetails`.`Frequency` AS `Frequency`,`ServiceDetails`.`Day/s` AS `Day/s`,`ServiceDetails`.`Duration` AS `Duration`,`ServiceDetails`.`Time` AS `Time`,`SocialSupport`.`Appointments` AS `Appointments`,`SocialSupport`.`Disability Parking Permit` AS `Disability Parking Permit`,`SocialSupport`.`Cash Handling` AS `Cash Handling`,`SupportAidsUsed`.`None` AS `None`,`SupportAidsUsed`.`Walker/ Walking Stick` AS `Walker/ Walking Stick`,`SupportAidsUsed`.`Glasses` AS `Glasses`,`SupportAidsUsed`.`Hearing Aids` AS `Hearing Aids`,`SupportAidsUsed`.`Left` AS `Left`,`SupportAidsUsed`.`Right` AS `Right`,`SupportAidsUsed`.`Both` AS `Both`,`SupportAidsUsed`.`Dentures` AS `Dentures`,`TransportRequirements`.`1. Morning Drop-Off` AS `1. Morning Drop-Off`,`TransportRequirements`.`1. Afternoon Pick-Up` AS `1. Afternoon Pick-Up`,`TransportRequirements`.`1. Both Ways` AS `1. Both Ways`,`TransportRequirements`.`2. Morning Drop-Off` AS `2. Morning Drop-Off`,`TransportRequirements`.`2. Afternoon Pick-Up` AS `2. Afternoon Pick-Up`,`TransportRequirements`.`2. Both Ways` AS `2. Both Ways`,`TransportRequirements`.`Mini Bus` AS `Mini Bus`,`TransportRequirements`.`Car` AS `Car` from ((((((((((((((((((((((((`ClientBasicInformation` join `ClientBackgroung` on((`ClientBasicInformation`.`FileNo` = `ClientBackgroung`.`FileNo`))) join `ClientProfile` on((`ClientBasicInformation`.`FileNo` = `ClientProfile`.`FileNo`))) join `DietaryRequirements` on((`ClientBasicInformation`.`FileNo` = `DietaryRequirements`.`FileNo`))) join `HealthLegalStatus` on(((`ClientBasicInformation`.`FileNo` = `HealthLegalStatus`.`FileNo`) and (`DietaryRequirements`.`Additional Information` = `HealthLegalStatus`.`Additional Information`)))) join `IntresComputing` on((`ClientBasicInformation`.`FileNo` = `IntresComputing`.`FileNo`))) join `IntresCrafts` on((`ClientBasicInformation`.`FileNo` = `IntresCrafts`.`FileNo`))) join `IntresGames` on((`ClientBasicInformation`.`FileNo` = `IntresGames`.`FileNo`))) join `IntresHairBeauty` on((`ClientBasicInformation`.`FileNo` = `IntresHairBeauty`.`FileNo`))) join `IntresLeisure` on((`ClientBasicInformation`.`FileNo` = `IntresLeisure`.`FileNo`))) join `IntresLiteraryArts`) join `IntresMenGirlShed` on((`ClientBasicInformation`.`FileNo` = `IntresMenGirlShed`.`FileNo`))) join `IntresNaturalTherapies` on((`ClientBasicInformation`.`FileNo` = `IntresNaturalTherapies`.`FileNo`))) join `IntresOther` on((`ClientBasicInformation`.`FileNo` = `IntresOther`.`FileNo`))) join `IntresPerforming` on((`ClientBasicInformation`.`FileNo` = `IntresPerforming`.`FileNo`))) join `IntresPhysicalActivity` on((`ClientBasicInformation`.`FileNo` = `IntresPhysicalActivity`.`FileNo`))) join `IntresVisualArts` on((`ClientBasicInformation`.`FileNo` = `IntresVisualArts`.`FileNo`))) join `Medication` on(((`ClientBasicInformation`.`FileNo` = `Medication`.`FileNo`) and (`DietaryRequirements`.`Additional Information` = `Medication`.`Additional Information`)))) join `MobilityandWellbeing` on(((`ClientBasicInformation`.`FileNo` = `MobilityandWellbeing`.`FileNo`) and (`DietaryRequirements`.`Additional Information` = `MobilityandWellbeing`.`Additional Information`) and (`DietaryRequirements`.`Independent` = `MobilityandWellbeing`.`Independent`) and (`DietaryRequirements`.`Requires Supervision` = `MobilityandWellbeing`.`Requires Supervision`) and (`DietaryRequirements`.`Requires Assistance` = `MobilityandWellbeing`.`Requires Assistance`)))) join `NonResponsetoScheduledVisit` on(((`ClientBasicInformation`.`FileNo` = `NonResponsetoScheduledVisit`.`FileNo`) and (`DietaryRequirements`.`Additional Information` = `NonResponsetoScheduledVisit`.`Additional Information`)))) join `SelfCare` on(((`ClientBasicInformation`.`FileNo` = `SelfCare`.`FileNo`) and (`DietaryRequirements`.`Additional Information` = `SelfCare`.`Additional Information`) and (`DietaryRequirements`.`Independent` = `SelfCare`.`Independent`) and (`DietaryRequirements`.`Requires Supervision` = `SelfCare`.`Requires Supervision`) and (`DietaryRequirements`.`Requires Assistance` = `SelfCare`.`Requires Assistance`)))) join `ServiceDetails` on(((`ClientBasicInformation`.`FileNo` = `ServiceDetails`.`FileNo`) and (`DietaryRequirements`.`Other` = `ServiceDetails`.`Other`)))) join `SocialSupport` on(((`ClientBasicInformation`.`FileNo` = `SocialSupport`.`FileNo`) and (`DietaryRequirements`.`Other` = `SocialSupport`.`Other`) and (`DietaryRequirements`.`Additional Information` = `SocialSupport`.`Additional Information`) and (`IntresLeisure`.`Shopping` = `SocialSupport`.`Shopping`)))) join `SupportAidsUsed` on(((`ClientBasicInformation`.`FileNo` = `SupportAidsUsed`.`FileNo`) and (`DietaryRequirements`.`Additional Information` = `SupportAidsUsed`.`Additional Information`)))) join `TransportRequirements` on(((`ClientBasicInformation`.`FileNo` = `TransportRequirements`.`FileNo`) and (`DietaryRequirements`.`Additional Information` = `TransportRequirements`.`Additional Information`)))) where (`ClientBasicInformation`.`FileNo` = 2) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Activity`
--
ALTER TABLE `Activity`
  ADD PRIMARY KEY (`activityname`,`dates`,`fileno`);

--
-- Indexes for table `Additional_Information`
--
ALTER TABLE `Additional_Information`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `ClientBackgroung`
--
ALTER TABLE `ClientBackgroung`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `ClientBasicInformation`
--
ALTER TABLE `ClientBasicInformation`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `ClientProfile`
--
ALTER TABLE `ClientProfile`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `DietaryRequirements`
--
ALTER TABLE `DietaryRequirements`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `HealthLegalStatus`
--
ALTER TABLE `HealthLegalStatus`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `IntresComputing`
--
ALTER TABLE `IntresComputing`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `IntresCrafts`
--
ALTER TABLE `IntresCrafts`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `IntresGames`
--
ALTER TABLE `IntresGames`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `IntresHairBeauty`
--
ALTER TABLE `IntresHairBeauty`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `IntresLeisure`
--
ALTER TABLE `IntresLeisure`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `IntresLiteraryArts`
--
ALTER TABLE `IntresLiteraryArts`
  ADD PRIMARY KEY (`File No.`);

--
-- Indexes for table `IntresMenGirlShed`
--
ALTER TABLE `IntresMenGirlShed`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `IntresNaturalTherapies`
--
ALTER TABLE `IntresNaturalTherapies`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `IntresOther`
--
ALTER TABLE `IntresOther`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `IntresPerforming`
--
ALTER TABLE `IntresPerforming`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `IntresPhysicalActivity`
--
ALTER TABLE `IntresPhysicalActivity`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `IntresVisualArts`
--
ALTER TABLE `IntresVisualArts`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `Medication`
--
ALTER TABLE `Medication`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `MobilityandWellbeing`
--
ALTER TABLE `MobilityandWellbeing`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `NonResponsetoScheduledVisit`
--
ALTER TABLE `NonResponsetoScheduledVisit`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `SelfCare`
--
ALTER TABLE `SelfCare`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `ServiceDetails`
--
ALTER TABLE `ServiceDetails`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `SocialSupport`
--
ALTER TABLE `SocialSupport`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `SupportAidsUsed`
--
ALTER TABLE `SupportAidsUsed`
  ADD PRIMARY KEY (`FileNo`);

--
-- Indexes for table `TransportRequirements`
--
ALTER TABLE `TransportRequirements`
  ADD PRIMARY KEY (`FileNo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
