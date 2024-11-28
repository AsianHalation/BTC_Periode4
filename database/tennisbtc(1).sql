-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 28, 2024 at 02:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tennisbtc`
--

-- --------------------------------------------------------

--
-- Table structure for table `leden`
--

CREATE TABLE `leden` (
  `lid_ID` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `telefoonnummer` bigint(20) NOT NULL,
  `emailadres` varchar(255) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leden`
--

INSERT INTO `leden` (`lid_ID`, `naam`, `achternaam`, `telefoonnummer`, `emailadres`, `userID`) VALUES
(204, 'Eliene', 'Holla', 644662246, 'ElieneHolla@outlook.com', 404),
(205, 'Philip', 'Boekholt', 682528319, 'PhilipBoekholt@outlook.com', 404),
(206, 'Selami', 'Meulenbroeks', 656109212, 'SelamiMeulenbroeks@gmail.com', 404),
(207, 'Semira', 'Trines', 698045357, 'SemiraTrines@yahoo.com', 404),
(208, 'Christian', 'Kroos', 628868799, 'ChristianKroos@hotmail.nl', 404),
(209, 'Doede', 'Smeulders', 686217996, 'DoedeSmeulders@gmail.com', 404),
(210, 'Sieberen', 'Breuskers', 694219111, 'SieberenBreuskers@yahoo.com', 404),
(211, 'Jouke', 'Walhout', 693561432, 'JoukeWalhout@gmail.com', 404),
(212, 'Hossein', 'Waterman', 644303878, 'HosseinWaterman@outlook.com', 404),
(213, 'Lilja', 'van Antwerpen', 699658607, 'LiljavanAntwerpen@hotmail.nl', 404),
(214, 'Allal', 'Poelsma', 638560634, 'AllalPoelsma@ziggo.nl', 404),
(215, 'Bouke', 'Haalboom', 687883016, 'BoukeHaalboom@yahoo.com', 404),
(216, 'Dio', 'Bramer', 679615938, 'DioBramer@ziggo.nl', 404),
(217, 'Linda', 'Butter', 628317272, 'LindaButter@ziggo.nl', 404),
(218, 'Jorian', 'de Bot', 688546197, 'JoriandeBot@ziggo.nl', 404);

-- --------------------------------------------------------

--
-- Table structure for table `rooster`
--

CREATE TABLE `rooster` (
  `lid_ID` int(11) NOT NULL,
  `werkzaamheden_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooster`
--

INSERT INTO `rooster` (`lid_ID`, `werkzaamheden_ID`) VALUES
(204, 1),
(204, 15),
(205, 3),
(206, 6),
(207, 9),
(207, 14),
(208, 6),
(209, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `inlognaam` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `inlognaam`, `wachtwoord`) VALUES
(404, 'pettelaer', 'T3nn1sIsH1p');

-- --------------------------------------------------------

--
-- Table structure for table `werkzaamheden`
--

CREATE TABLE `werkzaamheden` (
  `werkzaamheden_ID` int(11) NOT NULL,
  `dagdeel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `werkzaamheden`
--

INSERT INTO `werkzaamheden` (`werkzaamheden_ID`, `dagdeel`) VALUES
(1, 'maandagochtend'),
(2, 'maandagmiddag'),
(3, 'maandagavond'),
(4, 'dinsdagochtend'),
(5, 'dinsdagmiddag'),
(6, 'dinsdagavond'),
(7, 'woensdagochtend'),
(8, 'woensdagmiddag'),
(9, 'woensdagavond'),
(10, 'donderdagochtend'),
(11, 'donderdagmiddag'),
(12, 'donderdagavond'),
(13, 'vrijdagochtend'),
(14, 'vrijdagmiddag'),
(15, 'vrijdagavond');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leden`
--
ALTER TABLE `leden`
  ADD PRIMARY KEY (`lid_ID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `rooster`
--
ALTER TABLE `rooster`
  ADD KEY `lid_ID` (`lid_ID`),
  ADD KEY `werkzaamheden_ID` (`werkzaamheden_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `werkzaamheden`
--
ALTER TABLE `werkzaamheden`
  ADD PRIMARY KEY (`werkzaamheden_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leden`
--
ALTER TABLE `leden`
  MODIFY `lid_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;

--
-- AUTO_INCREMENT for table `werkzaamheden`
--
ALTER TABLE `werkzaamheden`
  MODIFY `werkzaamheden_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `leden`
--
ALTER TABLE `leden`
  ADD CONSTRAINT `leden_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `rooster`
--
ALTER TABLE `rooster`
  ADD CONSTRAINT `rooster_ibfk_1` FOREIGN KEY (`lid_ID`) REFERENCES `leden` (`lid_ID`),
  ADD CONSTRAINT `rooster_ibfk_2` FOREIGN KEY (`werkzaamheden_ID`) REFERENCES `werkzaamheden` (`werkzaamheden_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
