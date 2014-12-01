-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 27 nov 2014 om 12:34
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

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
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_nr` int(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `amount` int(255) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_customers`
--

CREATE TABLE IF NOT EXISTS `tbl_customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `companyname` text NOT NULL,
  `residence` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `house_number` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `insertion` text NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `companyname`, `residence`, `firstname`, `lastname`, `zip_code`, `telephone`, `email`, `password`, `house_number`, `street`, `insertion`) VALUES
(1, 'RemmertBV', 'Raamsdonk', 'Remmert', 'Kloppenburg', '4944BV', '0610542399', 'remmert_kloppenburg@msn.com', 'raamsdonk', '47', 'sluisakker', ''),
(2, 'Aegon', 'Amsterdam', 'Piet', 'Janssen', '9032RT', '0654238799', 'pietjanssen@msn.com', 'test123', '40', 'kerkstraat', ''),
(3, 'Ziggo', 'Amsterdam', 'Sjaak', 'Swart', '7890UJ', '0678427456', 'sjaakswart@msn.com', 'test123', '29', 'stadionsstraat 1', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_invoices`
--

CREATE TABLE IF NOT EXISTS `tbl_invoices` (
  `invoices_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `invoicesDate` date NOT NULL,
  `endDate` date NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `totalPrice` int(255) NOT NULL,
  `btw` int(21) NOT NULL,
  PRIMARY KEY (`invoices_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_invoices`
--

INSERT INTO `tbl_invoices` (`invoices_id`, `customer_id`, `description`, `invoicesDate`, `endDate`, `quantity`, `price`, `totalPrice`, `btw`) VALUES
(1, 1, 'facturen fifa 15', '2014-11-02', '2014-11-30', 1, 60, 60, 21);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` int(255) NOT NULL,
  `naam` text NOT NULL,
  `price` decimal(11,0) NOT NULL,
  `description` text NOT NULL,
  `sale_percentage` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_tempcart`
--

CREATE TABLE IF NOT EXISTS `tbl_tempcart` (
  `tempcart_id` int(255) NOT NULL AUTO_INCREMENT,
  `customer_nr` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `price` decimal(11,0) NOT NULL,
  `amount` int(255) NOT NULL,
  PRIMARY KEY (`tempcart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_wishlist`
--

CREATE TABLE IF NOT EXISTS `tbl_wishlist` (
  `list_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  PRIMARY KEY (`list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `tbl_invoices`
--
ALTER TABLE `tbl_invoices`
  ADD CONSTRAINT `customer-> customer` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customers` (`customer_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
