-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2012 at 12:02 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ip3`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `Comment_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `PostID` int(3) NOT NULL,
  `Comment_Date` date NOT NULL,
  `Comment_Content` varchar(255) NOT NULL,
  PRIMARY KEY (`Comment_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Comment_ID`, `Username`, `PostID`, `Comment_Date`, `Comment_Content`) VALUES
(18, 'Thomas', 6, '0000-00-00', 'This is cool'),
(19, 'Thomas', 6, '2012-03-16', 'This is the best'),
(27, 'Admin', 7, '2012-04-03', 'I think everything is working fine :D'),
(28, 'Admin', 7, '2012-04-03', 'I think everything is working fine :D'),
(29, 'Thomas', 6, '2012-02-28', 'Rock on Metallica !!!!!!!!!!'),
(30, 'Fred', 6, '2012-02-28', 'at long last can''t wait for this album :D '),
(31, 'Bob', 6, '2012-02-28', 'Great news, has made my day'),
(32, 'Tom', 6, '2012-02-28', 'Nooooooooo!!!!'),
(33, 'Thomas', 6, '2012-02-28', 'Listening to a bit of Enter Sandman :D :D'),
(35, 'Thomas', 4, '2012-03-28', 'Need to dig out my Camping gear'),
(36, 'Bob', 2, '2012-03-28', 'Roll on 2013'),
(37, 'Bob', 4, '2012-03-29', 'Best news all year cannot wait !');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `PostID` int(3) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Post_Title` varchar(255) NOT NULL,
  `Post_Content` text NOT NULL,
  `Post_Creation_Date` datetime NOT NULL,
  `Post_Modification_Date` datetime NOT NULL,
  `Hide` tinyint(4) NOT NULL,
  PRIMARY KEY (`PostID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`PostID`, `Username`, `Post_Title`, `Post_Content`, `Post_Creation_Date`, `Post_Modification_Date`, `Hide`) VALUES
(4, 'Thomas', 'Metallica''s New Album', 'it''s official Metallica have a new album coming out,the album is expected to be released before the end of the year. More information will become known nearer the time.  ', '2012-02-28 00:00:00', '2012-02-10 00:00:00', 0),
(5, 'Thomas', '2012 Tour', 'New Dates announced for the forthcoming Metallica Tour. Check out the tours section for more information.', '2012-02-29 00:00:00', '2012-02-29 12:54:33', 0),
(6, 'Thomas', 'If its no announced here then it''s not official ', 'Just a reminder that the only official metallica information will be avaliable from this website information from other sources cannot be trusted', '2012-02-28 00:00:00', '2012-02-29 00:00:00', 0),
(7, 'Thomas', 'Metallica to Headline Sonisphere 2013', 'Rumours are rife that Metallica are set to headline the Sonisphere Festival in 2013 they will be joined by other Rock gods such as Trivium, Evanescence and Iron Maiden.', '2012-03-24 00:00:00', '2012-03-24 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE IF NOT EXISTS `tours` (
  `Tour_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Tour_Title` varchar(255) NOT NULL,
  `Venue` varchar(255) NOT NULL,
  `Box_OfficeNo` varchar(20) NOT NULL,
  `Tour_Date` date NOT NULL,
  PRIMARY KEY (`Tour_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email_Address` varchar(255) NOT NULL,
  `Privileges` tinyint(1) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `First_Name`, `Last_Name`, `Email_Address`, `Privileges`) VALUES
('Admin', 'Admin', 'Tomasz', 'Daraszewicz', 'Daraszewicz@gmail.com', 1),
('Arsenal', 'Arsenal', 'Bob', 'London', 'Sfdsd@sdas.com', 0),
('ClassTest', 'ClassTest', 'ClassTest', 'ClassTest', 'ClassTest', 0),
('Computer', 'Computer', 'Thomas', 'Abcd', 'as@asd.com', 0),
('Database', 'Oracle', 'Thomas', 'Uncle', 'Anjds@o2.com', 0),
('Fred', 'Fred', 'Fred', 'Fredy', 'Fred@fred.com', 1),
('Joell', 'Test', 'Test', 'Test', 'Test', 0),
('Misterthomas', 'Misterthomas', 'Bob', 'Bob1', 'Bob@bob.com', 0),
('Ortiz', 'Ortiz', 'Ortiz', 'Ortiz', 'Ortiz', 0),
('Programing', 'Php', 'Asdea', 'Aaasd', 'Dss@asd.com', 0),
('Strange', 'Strange', 'Fred', 'Know', 'Strange@as.com', 0),
('This', 'Abc', 'Tomasz', 'Daraszewicz', 'This', 0),
('Thomas', 'Thomas', 'Thomas', 'Daraszewicz', 'daraszewicz@o2.pl', 0),
('Username', 'Password', 'Something', 'Nice', 'Username@user.com', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
