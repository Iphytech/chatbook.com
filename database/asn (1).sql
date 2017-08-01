-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asn`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `ads_title` varchar(25) NOT NULL,
  `ads_content` varchar(135) NOT NULL,
  `ads_pic` varchar(90) NOT NULL,
  PRIMARY KEY (`ads_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ads_id`, `ads_title`, `ads_content`, `ads_pic`) VALUES
(1, 'dsdsddsd', 'sdsdsdd', 'uploadedimage/a5512.jpg'),
(2, 'argie', 'fewrfewr rfererer erererere ererer erferer erer er re rererererer ererererer erererer ererere sdfdtftewrhuhuh uhuhuihuy ygygygy ygygygy', 'uploadedimage/creative-abstract-design-thumb5833954.jpg'),
(3, 'abcd', 'hello abcd', 'uploadedimage/abtus_clip_image001.jpg'),
(4, 'abcd', 'axcbxsdaf', 'uploadedimage/6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bleh`
--

CREATE TABLE IF NOT EXISTS `bleh` (
  `bleh_id` int(11) NOT NULL AUTO_INCREMENT,
  `remarks` text NOT NULL,
  `remarksby` varchar(30) NOT NULL,
  PRIMARY KEY (`bleh_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `bleh`
--

INSERT INTO `bleh` (`bleh_id`, `remarks`, `remarksby`) VALUES
(4, '7', 'Argie'),
(6, '5', '123'),
(5, '6', 'Argie'),
(7, '5', 'Argie'),
(8, '4', '123'),
(9, '3', '123'),
(10, '3', 'Argie'),
(12, '5', 'Argie'),
(13, '5', 'Argie'),
(14, '5', 'Argie'),
(15, '2', 'Argie'),
(16, '2', 'Argie'),
(17, '1', 'Argie'),
(18, '1', 'Argie'),
(19, '3', 'Argie'),
(20, '3', 'Argie'),
(21, '15', '123'),
(22, '16', 'Argie'),
(23, '16', '123'),
(24, '16', '123'),
(25, '16', '123'),
(26, '16', '123'),
(27, '4', '123'),
(28, '4', 'Argie'),
(29, '17', 'Argie'),
(30, '17', 'Argie'),
(31, '20', 'aravinda'),
(32, '20', 'aravinda'),
(33, '20', 'aravinda'),
(34, '20', 'aravinda'),
(35, '20', 'aravinda'),
(36, '20', 'aravinda'),
(37, '20', 'aravinda');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `EventInput` varchar(255) NOT NULL,
  `datepicker` varchar(255) NOT NULL,
  `where_text` varchar(255) NOT NULL,
  `WhoInvited` varchar(255) NOT NULL,
  `users_ip` varchar(200) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `EventInput`, `datepicker`, `where_text`, `WhoInvited`, `users_ip`, `date_created`) VALUES
(1, 'lagaw', '1299295800', 'CHMSC', 'Migz &amp; sweet', '127.0.0.1', 1299301175),
(2, 'sdsdsss', '1299297600', 'sdsd', 'sdsds', '127.0.0.1', 1299301218),
(3, 'fgfgfgfgfgf', '1136440800', 'dfgfgfg', 'fgfgfg', '127.0.0.1', 1136132744),
(4, 'check program', '1300282200', 'Sa skul', 'classmates and sir pabz', '127.0.0.1', 1300248204),
(7, 'wedding ceremony', '1363231800', 'friends wedding', 'aravida', '::1', 1363245327),
(6, 'birthday', '1363233600', 'Today is my birthday', 'aravinda', '::1', 1363236072);

-- --------------------------------------------------------

--
-- Table structure for table `friendlist`
--

CREATE TABLE IF NOT EXISTS `friendlist` (
  `friends_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(80) NOT NULL,
  `contact_no` int(14) NOT NULL,
  `website` text NOT NULL,
  `gender` varchar(6) NOT NULL,
  `addby` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `location` varchar(100) NOT NULL,
  PRIMARY KEY (`friends_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `friendlist`
--

INSERT INTO `friendlist` (`friends_id`, `firstname`, `lastname`, `address`, `contact_no`, `website`, `gender`, `addby`, `status`, `location`) VALUES
(1, 'Argie', 'Poliacrpio', 'talisay city', 2147483647, 'policarpio.argie@yahoo.com', 'Male', '123', 'accepted', 'uploadedimage/AbstractDesignBackgroundVector.jpg'),
(2, '123', '123', '123', 0, '123', 'Female', 'Argie', 'accepted', 'uploadedimage/defoult.jpg'),
(3, 'Argie', 'Poliacrpio', 'talisay city', 2147483647, 'policarpio.argie@yahoo.com', 'Male', 'qwe', 'accepted', 'uploadedimage/AbstractDesignBackgroundVector.jpg'),
(4, 'qwe', 'qwe', 'qwe', 0, 'qwe', 'Female', 'Argie', 'accepted', 'uploadedimage/defoult.jpg'),
(5, '', '', '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `friend_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `group_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`friend_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(50) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `invite_status`
--

CREATE TABLE IF NOT EXISTS `invite_status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(10) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `ContactNo` varchar(14) NOT NULL,
  `Url` varchar(100) NOT NULL,
  `Status_ID` int(11) NOT NULL,
  `Birthdate` varchar(20) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `Relationship_ID` int(14) NOT NULL,
  `profImage` varchar(100) NOT NULL,
  `curcity` varchar(50) NOT NULL,
  `hometown` varchar(50) NOT NULL,
  `Interested` varchar(30) NOT NULL,
  `language` varchar(30) NOT NULL,
  `college` varchar(100) NOT NULL,
  `highschool` varchar(100) NOT NULL,
  `experiences` varchar(200) NOT NULL,
  `arts` text NOT NULL,
  `aboutme` text NOT NULL,
  `month` varchar(4) NOT NULL,
  `day` varchar(2) NOT NULL,
  `year` varchar(4) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `UserName`, `Password`, `FirstName`, `LastName`, `Address`, `ContactNo`, `Url`, `Status_ID`, `Birthdate`, `Gender`, `DateAdded`, `Relationship_ID`, `profImage`, `curcity`, `hometown`, `Interested`, `language`, `college`, `highschool`, `experiences`, `arts`, `aboutme`, `month`, `day`, `year`) VALUES
(1, 'argie', 'migza', 'Argie', 'Poliacrpio', 'talisay city', '09104362006', 'policarpio.argie@yahoo.com', 0, 'Mar/19/1991', 'Male', '0000-00-00 00:00:00', 0, 'uploadedimage/AbstractDesignBackgroundVector.jpg', 'surigao', 'matab-ang', 'Women', 'cebuano', 'CHMSC', 'MNHS', 'Running While Eating', 'Basket', 'simple lang', 'Mar', '19', '1991'),
(3, '123', '221', '123', '123', '123', '123', '123', 0, 'Jan/1/2011', 'Female', '0000-00-00 00:00:00', 0, 'uploadedimage/defoult.jpg', '123', '', '', '', '', '', '', '', '', 'Jan', '1', '2011'),
(4, 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 0, 'Nov/1/2011', 'Female', '0000-00-00 00:00:00', 0, 'uploadedimage/defoult.jpg', 'qwe', '', '', '', '', '', '', '', '', 'Nov', '1', '2011'),
(5, 'mvaravinda', 'technology', 'aravinda', 'mv', 'mangalore bangalore', '987654321', 'aravinda@Gmail.com', 0, 'May/4/1986', 'Male', '0000-00-00 00:00:00', 0, 'uploadedimage/images (8).jpg', 'mangalore bangalore', 'mangalore', 'Men', 'kannanda', 'xyz college', 'abcd high school', '3', 'yes', 'hello', 'May', '4', '1986');

-- --------------------------------------------------------

--
-- Table structure for table `member_status`
--

CREATE TABLE IF NOT EXISTS `member_status` (
  `Status_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(10) NOT NULL,
  PRIMARY KEY (`Status_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `member_status`
--

INSERT INTO `member_status` (`Status_ID`, `Status`) VALUES
(1, 'approved'),
(2, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `messages_id` int(11) NOT NULL AUTO_INCREMENT,
  `messages` text NOT NULL,
  `user` text NOT NULL,
  `picture` varchar(100) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  `poster` varchar(30) NOT NULL,
  PRIMARY KEY (`messages_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`messages_id`, `messages`, `user`, `picture`, `date_created`, `poster`) VALUES
(1, 'gfgfg', 'Argie', 'uploadedimage/AbstractDesignBackgroundVector.jpg', '1300242858', 'Argie'),
(2, 'dfdfdf', 'Argie', 'uploadedimage/AbstractDesignBackgroundVector.jpg', '1300242914', 'Argie'),
(3, 'sdsdsd', '123', 'uploadedimage/defoult.jpg', '1300243096', '123'),
(4, 'dsdsd', '123', 'uploadedimage/defoult.jpg', '1300243142', '123'),
(5, 'asasas', 'Argie', 'uploadedimage/AbstractDesignBackgroundVector.jpg', '1300244464', '123'),
(6, 'fghdfhgh', '123', 'uploadedimage/defoult.jpg', '1300244776', 'Argie'),
(7, 'hi argie', '123', 'uploadedimage/defoult.jpg', '1300245182', 'Argie'),
(15, 'ddfd', '123', 'uploadedimage/defoult.jpg', '1136895128', 'Argie'),
(16, 'aAaA', 'Argie', 'uploadedimage/AbstractDesignBackgroundVector.jpg', '1136895220', '123'),
(17, 'asasa', 'Argie', 'uploadedimage/AbstractDesignBackgroundVector.jpg', '1136895621', 'Argie'),
(19, 'hi', 'aravinda', 'uploadedimage/images (8).jpg', '1363168324', 'aravinda'),
(20, 'aravindas post', 'aravinda', 'uploadedimage/images (8).jpg', '1363168334', 'aravinda'),
(21, 'hi', 'aravinda', 'uploadedimage/images (8).jpg', '1363234828', 'aravinda'),
(22, 'hello', 'aravinda', 'uploadedimage/images (8).jpg', '1363242676', 'aravinda'),
(23, 'ghj', 'aravinda', 'uploadedimage/images (8).jpg', '1363252403', 'aravinda'),
(24, '', '', '', '1363255592', ''),
(25, 'hello', 'aravinda', 'uploadedimage/abtus_clip_image001.jpg', '1363256553', ''),
(26, 'hi', 'aravinda', 'uploadedimage/abtus_clip_image001.jpg', '1363256798', 'aravinda'),
(27, 'hi', 'aravinda', 'uploadedimage/abtus_clip_image001.jpg', '1363256907', 'Argie'),
(28, 'What''s on your mind.................', 'aravinda', 'uploadedimage/abtus_clip_image001.jpg', '1363256914', 'Argie'),
(29, 'What''s on your mind.................', 'aravinda', 'uploadedimage/abtus_clip_image001.jpg', '1363256920', 'Argie'),
(30, 'What''s on your mind.................', 'aravinda', 'uploadedimage/abtus_clip_image001.jpg', '1363256921', 'Argie'),
(31, 'What''s on your mind.................', 'aravinda', 'uploadedimage/abtus_clip_image001.jpg', '1363256925', 'Argie'),
(32, 'What''s on your mind.................', 'aravinda', 'uploadedimage/abtus_clip_image001.jpg', '1363256926', 'Argie'),
(33, 'hi', 'aravinda', 'uploadedimage/abtus_clip_image001.jpg', '1363258252', 'Argie'),
(34, 'What''s on your mind...........', 'aravinda', '', '1363261256', 'aravinda');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `sender`, `receiver`, `content`, `status`) VALUES
(1, 'Argie', '', '545', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `term` varchar(30) NOT NULL,
  `location` varchar(200) NOT NULL,
  `uploadedby` int(11) NOT NULL,
  `caption` varchar(50) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `term`, `location`, `uploadedby`, `caption`) VALUES
(1, 'Private', 'uploadedimage/Chrysanthemum.jpg', 1, 'wala'),
(2, 'Private', 'uploadedimage/Penguins.jpg', 1, 'ssdsds'),
(3, 'Select Term', 'uploadedimage/Desert.jpg', 123, ''),
(4, 'Select Term', 'uploadedimage/Koala.jpg', 123, ''),
(5, 'Select Term', 'uploadedimage/Tulips.jpg', 123, 'hjhjhj'),
(6, 'Select Term', 'uploadedimage/4.jpg', 0, ''),
(7, 'Select Term', 'uploadedimage/2.jpg', 0, ''),
(8, 'Public', 'uploadedimage/DSC01074.JPG', 0, ''),
(9, 'Select Term', 'uploadedimage/edu_world_1.png', 5, ''),
(10, 'Select Term', 'uploadedimage/4.jpg', 5, ''),
(11, 'Select Term', 'uploadedimage/2.JPG', 5, ''),
(12, 'Select Term', 'uploadedimage/3.jpg', 5, ''),
(13, 'Select Term', 'uploadedimage/4.jpg', 5, ''),
(14, 'Select Term', 'uploadedimage/8.jpg', 5, ''),
(15, 'Private', 'uploadedimage/5.jpg', 5, 'test page'),
(16, 'Private', 'uploadedimage/15.jpg', 5, 'test image 1'),
(17, 'Private', 'uploadedimage/images (1).jpg', 5, 'image 21');

-- --------------------------------------------------------

--
-- Table structure for table `photoscomment`
--

CREATE TABLE IF NOT EXISTS `photoscomment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `commentby` int(100) NOT NULL,
  `PIC` varchar(30) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `photoscomment`
--

INSERT INTO `photoscomment` (`comment_id`, `comment`, `commentby`, `PIC`) VALUES
(1, 'dsdsds', 2, 'uploadedimage/Koala.jpg'),
(2, 'dfgdfgfgfg', 1, 'uploadedimage/Lighthouse.jpg'),
(3, '21', 2, 'uploadedimage/Lighthouse.jpg'),
(4, '-Leave comment Here-', 1, 'uploadedimage/Lighthouse.jpg'),
(5, '6u77', 1, 'uploadedimage/AbstractDesignBa'),
(6, '77', 1, 'uploadedimage/AbstractDesignBa'),
(7, '7', 1, 'uploadedimage/AbstractDesignBa'),
(8, '7', 1, 'uploadedimage/AbstractDesignBa'),
(9, 'u7u7', 1, 'uploadedimage/AbstractDesignBa'),
(10, '777', 1, 'uploadedimage/AbstractDesignBa'),
(11, 'dssd', 5, 'uploadedimage/AbstractDesignBa'),
(12, 'gfhgfh', 9, 'uploadedimage/defoult.jpg'),
(13, 'test comment', 9, 'uploadedimage/defoult.jpg'),
(14, 'aasdfsd', 14, 'uploadedimage/abtus_clip_image'),
(15, 'sadfsdf', 14, 'uploadedimage/abtus_clip_image'),
(16, 'sadfsadfsadf', 14, 'uploadedimage/abtus_clip_image'),
(17, 'dfsadfsdf', 14, 'uploadedimage/abtus_clip_image'),
(18, 'sadfsadfsadf', 14, 'uploadedimage/abtus_clip_image'),
(19, 'jghjghj', 14, 'uploadedimage/abtus_clip_image'),
(20, 'etertert', 14, 'uploadedimage/abtus_clip_image'),
(21, 'sdgfdsfg', 14, 'uploadedimage/abtus_clip_image'),
(22, '-Leave comment Here-', 14, 'uploadedimage/abtus_clip_image'),
(23, 'dfgdfg', 14, 'uploadedimage/abtus_clip_image');

-- --------------------------------------------------------

--
-- Table structure for table `postcomment`
--

CREATE TABLE IF NOT EXISTS `postcomment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `commentedby` varchar(30) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `id` int(40) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `postcomment`
--

INSERT INTO `postcomment` (`comment_id`, `content`, `commentedby`, `pic`, `id`, `date_created`) VALUES
(1, 'tnx nakuwa ko na', 'Argie', 'uploadedimage/AbstractDesignBackgroundVector.jpg', 7, '1136137882'),
(2, 'rttrt', 'Argie', 'uploadedimage/AbstractDesignBackgroundVector.jpg', 7, '1136138102'),
(5, '', '', '', 0, '1136138786'),
(6, '', '', '', 0, '1136138795'),
(7, '', '', '', 0, '1136138817'),
(8, '', '', '', 0, '1136139110'),
(9, '', '', '', 0, '1136139127'),
(10, '', '', '', 0, '1136139145'),
(11, '', '', '', 0, '1136139230'),
(12, '', '', '', 0, '1136139609'),
(13, 'cno naghambal?', 'Argie', 'uploadedimage/AbstractDesignBackgroundVector.jpg', 8, '1136139639'),
(14, 'ano ni?', '123', 'uploadedimage/defoult.jpg', 11, '1300248165'),
(15, 'sdfdfd', 'Argie', 'uploadedimage/AbstractDesignBackgroundVector.jpg', 10, '1300096664'),
(16, 'dfdf', 'Argie', 'uploadedimage/AbstractDesignBackgroundVector.jpg', 9, '1300096865'),
(17, 'fsdfdfd', 'Argie', 'uploadedimage/AbstractDesignBackgroundVector.jpg', 5, '1300097857'),
(18, 'wewew', 'Argie', 'uploadedimage/AbstractDesignBackgroundVector.jpg', 5, '1300098480'),
(19, 'wewew', 'Argie', 'uploadedimage/AbstractDesignBackgroundVector.jpg', 4, '1300098721'),
(20, 'dssd', 'Argie', 'uploadedimage/AbstractDesignBackgroundVector.jpg', 5, '1300098755'),
(23, 'hello', 'aravinda', 'uploadedimage/images (8).jpg', 21, '1363247188'),
(22, 'hello user', 'aravinda', 'uploadedimage/images (8).jpg', 22, '1363242689'),
(24, 'hello this is test page', 'aravinda', 'uploadedimage/abtus_clip_image001.jpg', 23, '1363253193'),
(25, 'hellio', 'aravinda', 'uploadedimage/abtus_clip_image001.jpg', 6, '1363258216'),
(26, 'hi', 'aravinda', 'uploadedimage/abtus_clip_image001.jpg', 23, '1363258226'),
(27, 'hi', 'aravinda', 'uploadedimage/abtus_clip_image001.jpg', 32, '1363258238');

-- --------------------------------------------------------

--
-- Table structure for table `relationship`
--

CREATE TABLE IF NOT EXISTS `relationship` (
  `relationship_ID` int(11) NOT NULL AUTO_INCREMENT,
  `relationship` varchar(10) NOT NULL,
  PRIMARY KEY (`relationship_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
