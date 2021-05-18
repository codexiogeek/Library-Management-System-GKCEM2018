-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2016 at 10:06 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `email`, `password`, `photo`) VALUES
(1, 'ari', 'admin@gmail.com', 'admin', 'images_upload/');

-- --------------------------------------------------------

--
-- Table structure for table `booked_books`
--

CREATE TABLE IF NOT EXISTS `booked_books` (
  `booked_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `issued_date` date NOT NULL,
  `submit_date` date NOT NULL,
  PRIMARY KEY (`booked_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `booked_books`
--

INSERT INTO `booked_books` (`booked_id`, `book_id`, `user_id`, `issued_date`, `submit_date`) VALUES
(6, 1, 'user@gmail.com', '2016-12-03', '2017-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_name` char(50) NOT NULL,
  `author_name` char(50) NOT NULL,
  `publishers_name` varchar(50) NOT NULL,
  `book_cost` varchar(10) NOT NULL,
  `publication_year` varchar(10) NOT NULL,
  `book_purchasing_date` date NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `author_name`, `publishers_name`, `book_cost`, `publication_year`, `book_purchasing_date`, `category`) VALUES
(1, 'PHP COmplete Refrence', 'Sanjeev', 'sanejev', '15000', '2016-12-07', '2016-10-10', '1'),
(2, 'aaaa', 'fdfdfdf', 'dfdfd', '1000', '2016-12-24', '2016-10-10', '2'),
(3, 'Algenbar', 'dlfj', 'ldjfl', '454', '2016-12-16', '2016-10-10', '4');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Story'),
(2, 'Love  Story'),
(4, 'Algebra');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` varchar(50) NOT NULL,
  `user` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `notification` text NOT NULL,
  `book_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `admin`, `user`, `subject`, `notification`, `book_id`, `date`) VALUES
(8, 'admin@gmail.com', 'a@gmail.com', 'dfjl', 'ldfjldjll', 0, '2016-02-07'),
(9, 'admin@gmail.com', 'a@gmail.com', 'dfjl', 'ldfjldjll', 0, '2016-02-07'),
(5, 'admin@gmail.com', 'sanjeev@gmail.com', 'Hello ', 'hello Sujeet', 0, '2016-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `total_books` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `book_id`, `total_books`) VALUES
(15, 1, 9),
(14, 2, 3),
(17, 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `join_date` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `email`, `password`, `mobile`, `join_date`, `status`, `branch`, `address`) VALUES
(1, 'user', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 0, '2016-12-03', 0, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
