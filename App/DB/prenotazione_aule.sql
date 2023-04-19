-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 07:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prenotazione_aule`
--
CREATE DATABASE IF NOT EXISTS `prenotazione_aule` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `prenotazione_aule`;

-- --------------------------------------------------------

--
-- Table structure for table `aula`
--

DROP TABLE IF EXISTS `aula`;
CREATE TABLE IF NOT EXISTS `aula` (
  `idAula` int(5) NOT NULL AUTO_INCREMENT,
  `nomeAula` varchar(25) NOT NULL,
  `capacita` int(3) DEFAULT NULL,
  `attrezatura` varchar(100) DEFAULT NULL,
  `immagine` blob DEFAULT NULL,
  PRIMARY KEY (`idAula`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aula`
--

INSERT INTO `aula` (`idAula`, `nomeAula`, `capacita`, `attrezatura`, `immagine`) VALUES
(1, 'Sala PC', 10, NULL, NULL),
(2, 'Sala Conferenza', 20, NULL, NULL),
(3, 'Sala Riunioni', 30, NULL, NULL),
(4, 'Sala Studio', 40, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prenotazione`
--

DROP TABLE IF EXISTS `prenotazione`;
CREATE TABLE IF NOT EXISTS `prenotazione` (
  `data` date NOT NULL,
  `idAula` int(5) NOT NULL,
  `idUtente` int(5) DEFAULT NULL,
  PRIMARY KEY (`data`,`idAula`),
  KEY `idAula` (`idAula`),
  KEY `idUtente` (`idUtente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prenotazione`
--

INSERT INTO `prenotazione` (`data`, `idAula`, `idUtente`) VALUES
('2023-03-29', 2, 2),
('2023-04-03', 3, 2),
('2023-04-07', 2, 2),
('2023-04-11', 1, 2),
('2023-04-19', 3, 2),
('2023-04-26', 4, 2),
('2023-04-30', 2, 2),
('2023-04-02', 1, 3),
('2023-04-03', 2, 3),
('2023-04-18', 3, 3),
('2023-04-19', 4, 3),
('2023-04-27', 3, 3),
('2023-04-29', 2, 3),
('2023-04-20', 4, 13),
('2023-04-24', 1, 13),
('2023-04-24', 3, 13),
('2023-04-27', 1, 13),
('2023-05-04', 2, 13);

-- --------------------------------------------------------

--
-- Table structure for table `utente`
--

DROP TABLE IF EXISTS `utente`;
CREATE TABLE IF NOT EXISTS `utente` (
  `idUtente` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  `cognome` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `psw` varchar(300) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `linkAttivazione` varchar(30) DEFAULT NULL,
  `confermaAttivazione` tinyint(1) DEFAULT 0,
  `dataNascita` date DEFAULT NULL,
  PRIMARY KEY (`idUtente`,`username`,`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utente`
--

INSERT INTO `utente` (`idUtente`, `nome`, `cognome`, `username`, `psw`, `mail`, `linkAttivazione`, `confermaAttivazione`, `dataNascita`) VALUES
(2, 'Francesco', 'Dui', 'frandui', 'francesco1', '', NULL, 0, NULL),
(3, 'Renato', 'Cau', 'renacau', 'renato1', 'caurenato@hotmail.it', NULL, 0, NULL),
(13, 'Fernando', 'Coeli', 'fercoeli', 'pluto', 'fercoeli@gmail.com', NULL, 0, '1979-02-12');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prenotazione`
--
ALTER TABLE `prenotazione`
  ADD CONSTRAINT `prenotazione_ibfk_1` FOREIGN KEY (`idAula`) REFERENCES `aula` (`idAula`),
  ADD CONSTRAINT `prenotazione_ibfk_2` FOREIGN KEY (`idUtente`) REFERENCES `utente` (`idUtente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
