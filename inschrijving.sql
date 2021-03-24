-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 24 mrt 2021 om 11:17
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opleiding`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `inschrijving`
--

DROP TABLE IF EXISTS `inschrijving`;
CREATE TABLE IF NOT EXISTS `inschrijving` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(100) NOT NULL,
  `Leeftijd` varchar(50) NOT NULL,
  `Studies` varchar(100) NOT NULL,
  `Tel` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Postcode` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `inschrijving`
--

INSERT INTO `inschrijving` (`id`, `naam`, `Leeftijd`, `Studies`, `Tel`, `Email`, `Postcode`) VALUES
(1, 'tjardo de heer', '18', 'dit is een test', '06155zegiklekkerniet', '-----@gmail.com', 'jjjjjjj'),
(2, '1', '1 ', '2', 'diajsd', 'ksadkisjda', 'aksdjksadj'),
(3, 'naam', 'leeftijd', 'studies', 'telefoonnummer', 'email', 'postcode'),
(4, 'test', 'ik', 'test', 'de', 'test', 'test'),
(5, 'nog', 'een', 'x', 'testen', 'jaj', 'jajaja'),
(6, 'bla', 'bla', 'bla', 'bla', 'bla', 'bla'),
(7, '', '', '', '', '', ''),
(8, '', '', '', '', '', ''),
(9, '', '', '', '', '', ''),
(10, '', '', '', '', '', ''),
(11, 'itjsji', 'irjtjiraji', 'tijatjiitj', 'tijaijtij', 'tijaijatij', 'tijatjita'),
(12, 'daifidfi', 'huuudahufuasfuhhu', 'u', 'uuhuphduhfhudphuu', 'wu', 'dfuhupidf'),
(13, 'tijjiaijfdiij', 'idajisfjisf', 'iaijdsjifdi', 'iadjijfdij', 'adijifisjf', 'diasifjfad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
