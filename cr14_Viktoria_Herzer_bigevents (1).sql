-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 14, 2018 at 03:24 PM
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
-- Database: `cr14_Viktoria_Herzer_bigevents`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(40) DEFAULT NULL,
  `event_date` datetime DEFAULT NULL,
  `event_description` varchar(200) DEFAULT NULL,
  `event_img` varchar(30) DEFAULT NULL,
  `event_capacity` int(11) DEFAULT NULL,
  `contact_email` varchar(100) DEFAULT NULL,
  `contact_number` int(11) DEFAULT NULL,
  `event_address` varchar(150) DEFAULT NULL,
  `event_url` varchar(300) DEFAULT NULL,
  `event_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_date`, `event_description`, `event_img`, `event_capacity`, `contact_email`, `contact_number`, `event_address`, `event_url`, `event_type`) VALUES
(1, 'I am from Austria', '2018-03-09 19:30:00', 'The new musical of the VBW with the music of Austria\'s hit producer number one, Rainhard Fendrich, is our declaration of love to this country.', '1.jpg', 500, 'musicalvienna@gmail.com', 43158885, 'Raimund Theater\r\nWallgasse 18-20 \r\n1060 Wien', 'https://events.wien.info/en/ri9/i-am-from-austria/', 'Musical'),
(2, 'Tanz der Vampire', '2018-03-09 19:30:00', 'It\'s time again to dive into the secretive world of the bloodsuckers: With vampire hunter Abronsius and his assistant Alfred, audiences are taken on a journey to the murky realm of Count Krolock.', '2.jpg', 500, 'tickets@gmail.com', 43158885, 'Ronacher\r\nSeilerstätte 9 \r\n1010 Wien', 'www.musicalvienna.at', 'Musical'),
(3, 'Die Schatztaucherin', '2018-03-10 14:00:00', '„Die Schatztaucherin“ führt uns zu den wahren Schätzen des Lebens, die am Grunde jedes Herzens liegen und uns glücklich machen. Man muss nur lernen, mutig nach ihnen zu tauchen.“', '3.jpg', 40, 'office@heuschreck.at', 435239180, 'Porgy & Bess\r\nRiemergasse 11 \r\n1010 Wien', 'www.heuschreck.at', 'Kids Musical'),
(4, 'Stomp', '2018-03-09 20:00:00', 'Das furioseste, originellste und witzigste Rhythmusspektakel der Erde sorgt für staunende Augen, klingelnde Ohren und erschöpfte Lachmuskeln - neu entwickelte Szenen inklusive!', '4.jpg', 200, 'ticket@gmail.com', 4396096, 'Hall E in the MuseumsQuartier\r\nMuseumsplatz 1 \r\n1070 Wien', 'www.oeticket.com', 'Dance'),
(5, 'Test', '2018-03-15 00:00:00', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Musical'),
(6, 'AnotherEvent', '2018-03-15 00:00:00', '', NULL, NULL, NULL, NULL, NULL, NULL, '123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_pass`) VALUES
(3, 'Viki Herzer', 'vherzer@gmail.com', 'ac818c81a10cff5361baa9af0353df5678370b1d2fe547eeb9c1f57cf96347dc'),
(4, 'hello', 'hi@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(5, 'Admin', 'admin@admin.com', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9'),
(6, 'Test', 'test@gmail.com', 'ecd71870d1963316a97e3ac3408c9835ad8cf0f3c1bc703527c30265534f75ae');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `userEmail` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
