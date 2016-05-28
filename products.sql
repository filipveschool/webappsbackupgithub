-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 mei 2016 om 18:19
-- Serverversie: 10.1.9-MariaDB
-- PHP-versie: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajax`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productname` varchar(80) NOT NULL,
  `price` int(11) NOT NULL,
  `stockstatus` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `productname`, `price`, `stockstatus`) VALUES
(1, 'ps4', 200, 'voldoende'),
(2, 'ps4', 200, 'voldoende'),
(3, 'ps4', 200, 'voldoende'),
(4, 'ps4', 200, 'voldoende'),
(5, 'ff', 0, 'voldoende'),
(8, 'test', 5, ''),
(9, 'test', 5, 'voldoende'),
(10, 'name', 4, 'f'),
(11, 'ajax', 23, 'voldoende'),
(12, 'ajax', 23, 'voldoende'),
(13, 'nieuwproductajax', 123, 'onvoldoende'),
(14, 'ase', 3, 'gg'),
(15, 'fdg', 123, 'Elke');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
