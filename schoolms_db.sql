-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2014 at 03:14 PM
-- Server version: 5.5.8-log
-- PHP Version: 5.3.5
 SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `schoolms_db`
--


--;USE `schoolms_db`;--
--------------------------------------------------------

--
-- Table structure for table `adminlogin_tb`
--

CREATE TABLE IF NOT EXISTS `adminlogin_tb` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(50) NOT NULL,
  `PassCode` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `adminlogin_tb`
--

INSERT INTO `adminlogin_tb` (`ID`, `Type`, `PassCode`) VALUES
(1, 'Principal', '7654321'),
(2, 'Admin', '7654321');

-- --------------------------------------------------------

--
-- Table structure for table `ass_tb`
--

CREATE TABLE IF NOT EXISTS `ass_tb` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Topic` varchar(500) NOT NULL,
  `ADate` varchar(50) NOT NULL,
  `Subj` varchar(50) NOT NULL,
  `Teacher` varchar(300) NOT NULL,
  `SubDate` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Cont` text NOT NULL,
  `RegNo` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ass_tb`
--

INSERT INTO `ass_tb` (`ID`, `Topic`, `ADate`, `Subj`, `Teacher`, `SubDate`, `Status`, `Cont`, `RegNo`) VALUES
(1, 'Draw A two dimenetional House plan', '12/5/2014', 'Technical Drawing', 'A.S Bassey', '20/5/2014', 'Submitted', 'Draw A two dimenetional House plan of two story building and specify the dimensions of each part of the drawing, all drawing should be done on your Assignment Drawing book', '65768798/666'),
(2, 'ysdhjdjhdf', '21/02/2014', 'Biology', 'Ekpeyong, Bassey Uduak', '', 'Not Submitted', '                   dfsfdgfgfgf  \n                  ', '65768798/66665768798/701; 65768798/532; '),
(3, 'What is social Study', '21/02/2014', 'Social Studies', 'Ekpeyong, Bassey Uduak', '', 'Not Submitted', 'Do it in your note book\n                  ', '65768798/66665768798/701; 65768798/532; '),
(4, 'What is social Study', '21/02/2014', 'Social Studies', 'Ekpeyong, Bassey Uduak', '', 'Not Submitted', 'Do it in your note book\n                  ', '65768798/66665768798/701; 65768798/532; '),
(5, 'Draw the dosal view of alizard', '21/02/2014', 'Biology', 'Ekpeyong, Bassey Uduak', '', 'Not Submitted', '    Draw a well labeled diagram of an agama lizard                 \n                  ', '');

-- --------------------------------------------------------

--
-- Table structure for table `box_tb`
--

CREATE TABLE IF NOT EXISTS `box_tb` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Topic` varchar(500) NOT NULL,
  `FromTo` text NOT NULL,
  `Content` text NOT NULL,
  `File` varchar(500) NOT NULL,
  `recepiant` varchar(50) NOT NULL,
  `Flow` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `box_tb`
--

INSERT INTO `box_tb` (`ID`, `Topic`, `FromTo`, `Content`, `File`, `recepiant`, `Flow`) VALUES
(1, 'Meet me in my Office', 'Paul Aniebiete;Okpukpan', 'Come to my office so that, we can start the proccessing of your new appointement as the time Keeper of the school', '', '65768798/666', 'IN'),
(2, 'money', 'wqee; Okpukpan; Okpukpan; ', '                     \n                  ', '', '', ''),
(3, 'aaaaa', 'Okpukpan; wrew; ', '                     \n               ddddd   ', '', '', ''),
(4, 'aaaaa', 'Okpukpan; wrew; ', 'Yommy', '', '', ''),
(5, 'My Texting', 'eee; Okpukpan; ', '     fggghgh ghghhh                \n                  ', '', '', ''),
(6, 'Dis should be last', 'Kejemilobu; Okpukpan;Princ; ', '          I hope so           \n                  ', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pin_tb`
--

CREATE TABLE IF NOT EXISTS `pin_tb` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `PIN` varchar(30) NOT NULL,
  `StudId` varchar(30) NOT NULL,
  `Status` int(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pin_tb`
--

INSERT INTO `pin_tb` (`ID`, `PIN`, `StudId`, `Status`) VALUES
(1, '1234567', '', 1),
(2, '7654321', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `result_tb`
--

CREATE TABLE IF NOT EXISTS `result_tb` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `RegNo` varchar(30) NOT NULL,
  `Subj` varchar(300) NOT NULL,
  `CA` int(10) NOT NULL,
  `Ass` int(10) NOT NULL,
  `Exam` int(10) NOT NULL,
  `Teacher` varchar(300) NOT NULL,
  `StudClass` varchar(300) NOT NULL,
  `Term` varchar(300) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `result_tb`
--

INSERT INTO `result_tb` (`ID`, `RegNo`, `Subj`, `CA`, `Ass`, `Exam`, `Teacher`, `StudClass`, `Term`) VALUES
(1, '65768798/666', 'Mathematics', 20, 10, 50, 'T. Y Colins', 'SSS 1', 'First'),
(2, '65768798/666', 'English Language', 15, 10, 30, 'Isaac Newton', 'SSS 1', 'First'),
(3, '65768798/666', 'Biology', 8, 15, 33, 'Adegoke B.', 'SSS 1', 'First'),
(4, '65768798/666', 'Chemistry', 8, 2, 20, 'Ekpeyong C.', 'SSS 1', 'First'),
(5, '65768798/666', 'Physcis', 10, 8, 49, 'Asuqwo E.', 'SSS 1', 'First'),
(6, '65768798/666', 'Economics', 15, 12, 51, 'Paul O.', 'SSS 1', 'First'),
(7, '65768798/666', 'Efik Language', 12, 10, 45, 'Ekpo C.', 'SSS 1', 'First'),
(8, '65768798/666', 'Geography', 10, 14, 52, 'T. S Bello', 'SSS 1', 'First'),
(9, '65768798/666', 'Agricultural Science', 3, 5, 5, 'T. Y Colins', 'SSS 1', 'First'),
(10, '65765798/686', 'Mathematics', 12, 11, 34, 'Ekpeyong, Bassey Uduak', 'Pry 1', 'First'),
(11, '45668798/765', 'Mathematics', 20, 12, 43, 'Ekpeyong, Bassey Uduak', 'Pry 1', 'First'),
(12, '87678908/987', 'Mathematics', 11, 17, 11, 'Ekpeyong, Bassey Uduak', 'Pry 1', 'First'),
(13, '65768798/701', 'Mathematics', 20, 12, 54, 'Ekpeyong, Bassey Uduak', 'Pry 1', 'First'),
(14, '65768798/532', 'Mathematics', 12, 11, 32, 'Ekpeyong, Bassey Uduak', 'Pry 1', 'First'),
(16, '65765798/686', 'Physics', 12, 20, 34, 'B. Ekpeyong', 'Pry 1', 'First'),
(17, '45668798/765', 'Physics', 12, 13, 45, 'B. Ekpeyong', 'Pry 1', 'First'),
(18, '87678908/987', 'Physics', 11, 17, 35, 'B. Ekpeyong', 'Pry 1', 'First'),
(19, '65768798/701', 'Physics', 2, 13, 12, 'B. Ekpeyong', 'Pry 1', 'First'),
(20, '65768798/532', 'Physics', 2, 14, 45, 'B. Ekpeyong', 'Pry 1', 'First');

-- --------------------------------------------------------

--
-- Table structure for table `studinfo_tb`
--

CREATE TABLE IF NOT EXISTS `studinfo_tb` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EntID` varchar(30) NOT NULL,
  `FullName` varchar(300) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` varchar(30) NOT NULL,
  `POB` varchar(300) NOT NULL,
  `Nat` varchar(200) NOT NULL,
  `State` varchar(20) NOT NULL,
  `LGA` varchar(100) NOT NULL,
  `AdminsTo` varchar(10) NOT NULL,
  `SchAttend` text NOT NULL,
  `GName` varchar(300) NOT NULL,
  `GPhone` varchar(20) NOT NULL,
  `GAddr` text NOT NULL,
  `NKName` varchar(300) NOT NULL,
  `NKPhone` varchar(20) NOT NULL,
  `NKAddr` text NOT NULL,
  `Geno` varchar(20) NOT NULL,
  `BldGrp` varchar(20) NOT NULL,
  `Des` varchar(20) NOT NULL,
  `Spt` varchar(50) NOT NULL,
  `Hob` varchar(50) NOT NULL,
  `MotSpch` text NOT NULL,
  `passp` varchar(500) NOT NULL,
  `RegNo` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `studinfo_tb`
--

INSERT INTO `studinfo_tb` (`ID`, `EntID`, `FullName`, `Gender`, `DOB`, `POB`, `Nat`, `State`, `LGA`, `AdminsTo`, `SchAttend`, `GName`, `GPhone`, `GAddr`, `NKName`, `NKPhone`, `NKAddr`, `Geno`, `BldGrp`, `Des`, `Spt`, `Hob`, `MotSpch`, `passp`, `RegNo`) VALUES
(1, '1234567', 'Bassey,Asuquo Edet', 'Male', 'hghggh', 'hghgh', 'ghhg', '', 'ghhghg', 'Pry 1', '', '', '', '', '', '', '', 'AA', 'O+', '', '', '', '', '', '65765798/686'),
(2, '875875487', 'Ewet, James Blessing', 'Male', 'trtrtr', 'rerr', 'trtr', '', 'trtrtr', 'Pry 1', '', '', '', '', '', '', '', 'AA', 'O+', '', '', '', '', 'image/35317598BF.jpeg', '45668798/765'),
(3, '7574778', 'Baba, Mustapha John', 'Male', '', 'fddf', 'dfd', '', 'dd', 'Pry 4', '', '', '', '', '', '', '', 'AA', 'O+', '', '', '', '', 'image/35135401BB.jpeg', '65767688/980'),
(4, 'geuyeyue', 'Temitope, Adesoji Okon', 'Male', 'eee', 'eee', 'eee', '', 'eee', 'Pry 1', '', '', '', '', '', '', '', 'AA', 'O+', '', '', '', '', 'image/35317598BF.jpeg', '87678908/987'),
(5, '97747474', 'Kejemilobu, Abayomi Olorunseun', 'Male', '12/03/1992', 'Lagos', 'Nigerian', '', 'Uyo', 'JSS 1', ';Uyo High School;B;1999~;Oke-Odo High School;A;2012~;Ifesowapo Aboru Senior Secondary School;C;2013~', 'Kejemilobi', '08076787656', '7, Oduleye street agbelekale abule-egba lagos state', 'OKejemilobi Olorubori', '08034615534', '12, ebute street ikorudu lagos state', 'AA', 'O+', 'None', 'Football', 'Programming', 'We are all great people', 'image/35317598BF.jpeg', '56779098/678'),
(6, '65768798', 'Okpukpan, Itohowo Effiong', 'Male', '12/6/1989', 'Ebesikpo', 'Nigerian', '', 'Uruan', 'JSS 1', ';Mbak Secondary School;B;1999~;Tecnical Colledge Uyo;C;2006~', 'Okpukpan', '08076565434', 'Uyo, Ifa-atai akwa ibom state', 'Okpukpan Effiong John', '098098767', 'Uyo, Ifa-atai akwa ibom state', 'AA', 'O+', 'None', 'Football', 'Pressing Phone', 'Love is all that matters', 'image/36667865DB.jpeg', '65768798/666'),
(7, '65768798', 'Okpukpan, Itohowo Effiong', 'Male', '12/6/1989', 'Ebesikpo', 'Nigerian', '', 'Uruan', 'Pry 1', '', '', '', '', '', '', '', 'AA', 'O+', '', '', '', '', 'image/35317008DJ.jpeg', '65768798/701'),
(8, '65768798', 'Okpukpan, Itohowo Effiong', 'Male', '12/6/1989', 'Ebesikpo', 'Nigerian', '', 'Uruan', 'Pry 1', '', '', '', '', '', '', '', 'AA', 'O+', '', '', '', '', 'image/35000042EG.jpeg', '65768798/532');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_tb`
--

CREATE TABLE IF NOT EXISTS `teacher_tb` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PassCode` varchar(50) NOT NULL,
  `SQuestion` varchar(500) NOT NULL,
  `SAnswer` varchar(500) NOT NULL,
  `FullName` varchar(300) NOT NULL,
  `TID` varchar(50) NOT NULL,
  `passp` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `teacher_tb`
--

INSERT INTO `teacher_tb` (`ID`, `PassCode`, `SQuestion`, `SAnswer`, `FullName`, `TID`, `passp`) VALUES
(1, '12345678', '1', 'yommy', 'Ekpeyong, Bassey Uduak', 'TEA2345', 'images/42-15217478.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
