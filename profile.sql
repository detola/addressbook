-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2018 at 09:41 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addressbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `title` varchar(11) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `place_of_birth` varchar(100) DEFAULT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `marital_status` enum('Single','Married','Divorced','Widowed') DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `height` varchar(5) DEFAULT NULL,
  `home_town` varchar(100) DEFAULT NULL,
  `lga` varchar(100) DEFAULT NULL,
  `state_of_origin` varchar(100) DEFAULT NULL,
  `permanent_add` varchar(255) DEFAULT NULL,
  `foreign_add` varchar(255) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `business_type` varchar(100) DEFAULT NULL,
  `type_of_permit` varchar(100) DEFAULT NULL,
  `special_feature` varchar(100) DEFAULT NULL,
  `next_of_kin` varchar(100) DEFAULT NULL,
  `next_of_kin_tel` varchar(25) DEFAULT NULL,
  `next_of_kin_add` varchar(255) DEFAULT NULL,
  `next_of_kin1` varchar(100) DEFAULT NULL,
  `next_of_kin1_tel` varchar(25) DEFAULT NULL,
  `next_of_kin1_add` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `title`, `last_name`, `first_name`, `middle_name`, `dob`, `place_of_birth`, `sex`, `marital_status`, `phone`, `email`, `height`, `home_town`, `lga`, `state_of_origin`, `permanent_add`, `foreign_add`, `occupation`, `business_type`, `type_of_permit`, `special_feature`, `next_of_kin`, `next_of_kin_tel`, `next_of_kin_add`, `next_of_kin1`, `next_of_kin1_tel`, `next_of_kin1_add`) VALUES
(38, 'Mrs', 'Pisculli', 'Tanney', 'Séréna', '0000-00-00', 'Tucson', 'Male', NULL, '(520) 7513414', 'tpisculli11@engadget.com', NULL, 'Des Moines', 'AZ', 'Arizona', '4 Melrose Plaza', '6130 Rockefeller Trail', 'Assistant Manager', NULL, NULL, NULL, 'Tanney Pisculli', '(515) 5416869', '65755 Elka Court', 'Tanney Pisculli', '(859) 2478453', '73399 Scott Point'),
(41, 'Honorable', 'McElane', 'Scarlett', 'Mégane', '0000-00-00', 'Hampton', 'Female', NULL, '(757) 1542225', 'smcelane14@unicef.org', NULL, 'Fort Myers', 'VA', 'Virginia', '15 Towne Terrace', '405 Green Ridge Way', 'Programmer II', NULL, NULL, NULL, 'Scarlett McElane', '(239) 5514971', '5 Red Cloud Hill', 'Scarlett McElane', '(757) 9261162', '907 Elmside Park'),
(46, 'Rev', 'McVittie', 'Corrie', 'Lèi', '0000-00-00', 'Birmingham', 'Female', NULL, '(205) 8278113', 'cmcvittie19@alexa.com', NULL, 'Terre Haute', 'AL', 'Alabama', '151 Towne Street', '886 Fair Oaks Plaza', 'Research Associate', NULL, NULL, NULL, 'Corrie McVittie', '(812) 8899252', '0824 Barby Way', 'Corrie McVittie', '(408) 7742189', '78748 Waywood Park'),
(47, 'Honorable', 'Ceresa', 'Darcy', 'Maïlis', '0000-00-00', 'Denver', 'Female', NULL, '(303) 1521563', 'dceresa1a@biblegateway.com', NULL, 'Huntington Beach', 'CO', 'Colorado', '97 Blaine Hill', '49047 Superior Pass', 'Registered Nurse', NULL, NULL, NULL, 'Darcy Ceresa', '(949) 7479892', '662 Merchant Road', 'Darcy Ceresa', '(503) 1272430', '93999 Stone Corner Plaza'),
(48, 'Mrs', 'Chevers', 'Rice', 'Béatrice', '0000-00-00', 'Oxnard', 'Male', NULL, '(805) 9061368', 'rchevers1b@irs.gov', NULL, 'Honolulu', 'CA', 'California', '8826 Chinook Way', '4 Northland Avenue', 'Cost Accountant', NULL, NULL, NULL, 'Rice Chevers', '(808) 6741318', '87143 Ridgeview Center', 'Rice Chevers', '(515) 4530547', '1226 Scott Place'),
(49, 'Ms', 'Shadrach', 'Corny', 'Hélène', '0000-00-00', 'San Diego', 'Male', NULL, '(619) 4313387', 'cshadrach1c@csmonitor.com', NULL, 'Knoxville', 'CA', 'California', '26847 Nelson Point', '18190 Debs Circle', 'Compensation Analyst', NULL, NULL, NULL, 'Corny Shadrach', '(865) 5648632', '543 La Follette Place', 'Corny Shadrach', '(719) 2289241', '8 Monica Drive'),
(50, 'Dr', 'Davson', 'Dominick', 'Léandre', '0000-00-00', 'Houston', 'Male', NULL, '(281) 9465304', 'ddavson1d@slate.com', NULL, 'Louisville', 'TX', 'Texas', '1 Darwin Junction', '52 Nova Hill', 'Senior Sales Associate', NULL, NULL, NULL, 'Dominick Davson', '(502) 7383242', '4359 Claremont Alley', 'Dominick Davson', '(317) 2755531', '212 Anzinger Crossing'),
(51, 'Ms', 'Haliday', 'Gae', 'Chloé', '0000-00-00', 'Conroe', 'Female', NULL, '(936) 2346985', 'ghaliday1e@sitemeter.com', NULL, 'Tacoma', 'TX', 'Texas', '41128 Lyons Center', '524 Commercial Road', 'Engineer III', NULL, NULL, NULL, 'Gae Haliday', '(253) 9503284', '35 Schiller Center', 'Gae Haliday', '(786) 4548557', '3623 Rieder Lane');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
