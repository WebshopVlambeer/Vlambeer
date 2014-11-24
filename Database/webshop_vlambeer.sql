-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Gegenereerd op: 24 nov 2014 om 14:10
-- Serverversie: 5.6.20
-- PHP-versie: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `webshop_vlambeer`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `link_product_tempcart`
--

CREATE TABLE IF NOT EXISTS `link_product_tempcart` (
  `product_id` int(11) NOT NULL,
  `tempcart_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_cart` (
`trempcart_id` int(11) NOT NULL,
  `customer_nr` int(255) NOT NULL,
  `artikel` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `numbers` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_customers`
--

CREATE TABLE IF NOT EXISTS `tbl_customers` (
`customer_id` int(11) NOT NULL,
  `companyname` text NOT NULL,
  `residence` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `zip-code` int(255) NOT NULL,
  `telephone` int(255) NOT NULL,
  `email` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `house_number` int(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `insertion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` int(255) NOT NULL,
  `naam` text NOT NULL,
  `price` decimal(11,0) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_tempcart`
--

CREATE TABLE IF NOT EXISTS `tbl_tempcart` (
`tempcart_id` int(255) NOT NULL,
  `klant_nr` int(255) NOT NULL,
  `artikel` int(255) NOT NULL,
  `price` decimal(11,0) NOT NULL,
  `numbers` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_wishlist`
--

CREATE TABLE IF NOT EXISTS `tbl_wishlist` (
`list_id` int(11) NOT NULL,
  `artikel` int(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tbl_cart`
--
ALTER TABLE `tbl_cart`
 ADD PRIMARY KEY (`trempcart_id`);

--
-- Indexen voor tabel `tbl_customers`
--
ALTER TABLE `tbl_customers`
 ADD PRIMARY KEY (`customer_id`);

--
-- Indexen voor tabel `tbl_tempcart`
--
ALTER TABLE `tbl_tempcart`
 ADD PRIMARY KEY (`tempcart_id`);

--
-- Indexen voor tabel `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
 ADD PRIMARY KEY (`list_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tbl_cart`
--
ALTER TABLE `tbl_cart`
MODIFY `trempcart_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbl_customers`
--
ALTER TABLE `tbl_customers`
MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbl_tempcart`
--
ALTER TABLE `tbl_tempcart`
MODIFY `tempcart_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
