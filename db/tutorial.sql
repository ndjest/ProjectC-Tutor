-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 01:11 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `t_id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `u_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`t_id`, `heading`, `content`, `u_email`) VALUES
(1, 'Array', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'nill');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `id` int(11) NOT NULL,
  `topic` varchar(30) NOT NULL,
  `link` text NOT NULL,
  `descript` text NOT NULL,
  `date` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `topic`, `link`, `descript`, `date`) VALUES
(1, 'Select Structure', 'uploads/PDF_A2031CB_04112018_121144.docx', 'Go through the file below to complete the work and submit on monday', '04-11-2018');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `title`, `body`, `img`) VALUES
(1, 'If Statement', '\"#include <iostream>\r\nusing namespace std;\r\nint main (){\r\n	\r\n	int main ();\r\n	\r\n	int number1, number2;\r\n	cout<<\"Enter number1<<number2\";\r\n	cin>>number1>>number2;\r\n	if (number1>number2 )\r\n		cout<<number1 <<\" 	is grater than  \"<< number2;\r\n	if (number1==number2 )\r\n		cout<<number1 <<\" 	is equal to \"<< number2;\r\n	\r\n	if (number1<number2 )\r\n		cout<<number1 <<\" 	is less than  \"<< number2;\r\n		return 0;\r\n}\"', 'uploads/IMG_C30A2B1_08112018_091136.jpg'),
(2, 'Prime Number', '\"#include <iostream>\r\nusing namespace std;\r\n\r\nint main(){\r\n	int i, j;\r\n	cout<<\"A program to generate prime numbers from 2 to 100 \n\n\";\r\n	for(i = 2; i<100; i++){\r\n		for(j = 2; j<=(i/j); j++)\r\n		if(!(i%j)) break;\r\n		if(j>(i/j)) cout<<\"	\"<< i <<\" is prime \n\";\r\n	}\r\n	\r\n	return 0;\r\n}\"', 'uploads/IMG_2CAB103_08112018_091142.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `t_id` int(11) NOT NULL,
  `keytitle` varchar(30) NOT NULL,
  `caption1` varchar(30) NOT NULL,
  `caption2` varchar(30) NOT NULL,
  `caption3` varchar(30) NOT NULL,
  `caption4` varchar(30) NOT NULL,
  `caption5` varchar(30) NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL,
  `text4` text NOT NULL,
  `text5` text NOT NULL,
  `index1` varchar(4) NOT NULL,
  `index2` varchar(4) NOT NULL,
  `index3` varchar(4) NOT NULL,
  `index4` varchar(4) NOT NULL,
  `index5` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`t_id`, `keytitle`, `caption1`, `caption2`, `caption3`, `caption4`, `caption5`, `text1`, `text2`, `text3`, `text4`, `text5`, `index1`, `index2`, `index3`, `index4`, `index5`) VALUES
(1, 'Select structure', 'Storage Structure', 'Select Case', 'Control', 'Function', 'Loop Controls', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1.1', '1.2', '1.3', '1.4', '1.5'),
(2, 'Array and Functions', 'Array Structure', 'Slicing Array', 'Array Controls', 'Array Function', 'Looping Arrays', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1.1', '1.2', '1.3', '1.4', '1.5'),
(3, 'Control Structures', 'Loop Controls', 'Select Case', 'Do While', '', '', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', '', '1.1', '1.2', '1.3', '', ''),
(4, 'Iterative Structures', 'Loop Controls', 'Select Case', 'Do While', 'For Loop', 'Loop Controls', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1.1', '1.2', '1.3', '1.4', '1.5'),
(5, 'Repetitive Structures', 'Loop Controls', 'Select Case', 'Do While', 'For Loop', 'Loop Controls', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1.1', '1.2', '1.3', '1.4', '1.5'),
(6, 'Loop Controls', 'Loop Controls', 'Select Case', 'Do While', 'For Loop', 'Loop Controls', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1.1', '1.2', '1.3', '1.4', '1.5'),
(7, 'Variable Declaration ', 'Loop Controls', 'Select Case', 'Do While', 'For Loop', 'Loop Controls', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1.1', '1.2', '1.3', '1.4', '1.5'),
(8, 'Concatenation', 'Loop Controls', 'Select Case', 'Do While', 'For Loop', 'Loop Controls', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1.1', '1.2', '1.3', '1.4', '1.5'),
(9, 'C++ Syntax', 'Loop Controls', 'Select Case', 'Do While', 'For Loop', 'Loop Controls', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1.1', '1.2', '1.3', '1.4', '1.5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `gender`, `regno`, `password`, `u_email`, `role`, `date`) VALUES
(1, 'John', 'Onwosi', 'Male', '2013/HND/33928/CS', 'john1234', '', 'student', '2018-10-29'),
(2, 'Chukwu', 'Kingsley', 'Male', '2013/HND/33948/CS', 'chukwu', 'chukwukings@yahoo.com', 'student', '2018-10-29'),
(3, 'odigbo', 'christian', 'Male', 'nill', 'christian', 'christian121@yahoo.com', 'admin', '2018-10-17'),
(4, 'John', 'Onwosi', 'Male', 'sss', 'chukwu', 'johnchukwu@gmail.com', 'lecturer', '2018-10-29'),
(5, 'obiora', 'john', 'Male', '2016/HND/19312/CS', 'obiora', 'ty@yahoo.com', 'student', '2018-11-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_email` (`u_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
