-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2014 at 07:45 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--
CREATE DATABASE IF NOT EXISTS `library` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `library`;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `author` varchar(100) NOT NULL,
  `title` varchar(150) NOT NULL,
  `place_of_publication` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `copyright_date` int(4) NOT NULL,
  `location_symbol` varchar(5) NOT NULL,
  `classification_number` int(5) NOT NULL,
  `author_number` varchar(5) NOT NULL,
  `edition` varchar(50) NOT NULL,
  `accession_number` int(10) NOT NULL,
  `preliminary_pages` varchar(5) NOT NULL,
  `no_of_pages` int(5) NOT NULL,
  `isbn` varchar(15) NOT NULL,
  `tags` varchar(50) NOT NULL,
  `stock` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This can be used in borrowing/returning, inventory and OPAC';

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`author`, `title`, `place_of_publication`, `publisher`, `copyright_date`, `location_symbol`, `classification_number`, `author_number`, `edition`, `accession_number`, `preliminary_pages`, `no_of_pages`, `isbn`, `tags`, `stock`) VALUES
('sample', 'sample book title', 'Manila', 'sample publishers', 2014, 'SAM', 123, '222', '1st', 2223548, 'v', 150, '2254866458', '1. sample I. Title', 3);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `borrower_sid` varchar(15) NOT NULL,
  `borrower_fname` int(11) NOT NULL,
  `borrower_lname` int(11) NOT NULL,
  `isbn` int(11) NOT NULL,
  `date_borrowed` date NOT NULL,
  `return_date` date NOT NULL,
  `transacted_by` varchar(15) NOT NULL,
  PRIMARY KEY (`borrower_sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`borrower_sid`, `borrower_fname`, `borrower_lname`, `isbn`, `date_borrowed`, `return_date`, `transacted_by`) VALUES
('0', 0, 0, 0, '2014-01-06', '2014-01-14', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'p@ssw0rd', 'Administrator');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
