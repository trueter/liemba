-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2013 at 11:16 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `liemba_map`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `icon_path` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon_path`) VALUES
(1, 'FirstCategory', 'FirstCategory.png');

-- --------------------------------------------------------

--
-- Table structure for table `hotspots`
--

DROP TABLE IF EXISTS `hotspots`;
CREATE TABLE IF NOT EXISTS `hotspots` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `xOff` int(10) unsigned NOT NULL,
  `yOff` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;
