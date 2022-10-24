-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2022 at 12:35 PM
-- Server version: 5.5.29
-- PHP Version: 5.3.10-1ubuntu3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `HNCWEBMR1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pass` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE IF NOT EXISTS `cinema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `img` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `genre` varchar(50) CHARACTER SET latin1 COLLATE latin1_danish_ci DEFAULT NULL,
  `director` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `cast` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `info` varchar(300) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `rating` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `tickets` int(100) NOT NULL,
  `time` varchar(11) DEFAULT NULL,
  `category` varchar(15) DEFAULT NULL,
  `category2` varchar(30) DEFAULT NULL,
  `video` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99 ;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`id`, `name`, `img`, `genre`, `director`, `cast`, `date`, `info`, `rating`, `tickets`, `time`, `category`, `category2`, `video`) VALUES
(3, 'E', 'emma.jpg', 'Drama', 'Autumn de Wilde', 'Anya Taylor, JoyJohnny,  FlynnMia Goth', '2021-11-17', 'In 1800s England, a well meaning but selfish young woman meddles in the love lives of her friends.', 'https://www.imdb.com/title/tt9214832/ratings/?ref_=tt_ov_rt', 344, '20:30', 'adult', 'Coming Soon', 'https://www.youtube.com/watch?v=qsOwj0PR5Sk'),
(5, 'Batman', 'batman.jpg', 'Action', 'Matt Reeves', ' Barry Keoghan, Peter Sarsgaard, Robert Pattinson', '2022-01-27', 'In his second year of fighting crime, Batman uncovers corruption in Gotham City that connects to his own family while facing a serial killer known as the Riddler.', NULL, 400, '18:30', 'adult', 'Coming Soon', 'https://www.youtube.com/watch?v=mqqft2x_Aa4'),
(6, 'Cruella', 'cruella.jpg', 'Crime', 'Craig Gillespie', 'Emma Stone, Emma Thompson, Joel Fry ', '2021-11-19', 'Estella is a young and clever grifter who', 'https://www.imdb.com/title/tt3228774/ratings/?ref_=tt_ov_rt', 75, '21:00', 'adult', 'watch', 'https://www.youtube.com/watch?v=gmRKv7n2If8'),
(11, 'Wheel Of Time', 'wheeloftime.jpg', 'Adventure', 'Rafe Judkins', 'Rosamund Pike, Daniel, Henney , Madeleine Madden', '2021-11-26', 'Set in a high fantasy world where magic exists, but only some can access it, a woman named Moiraine crosses paths with five young men and women. This sparks a dangerous, world-spanning journey. Based on the book series by Robert Jordan.', 'https://www.imdb.com/title/tt7462410/ratings/?ref_=tt_ov_rt', 400, '20:30', 'adult', 'watch ', 'https://www.youtube.com/watch?v=11ZozKfRqvA'),
(13, 'The Nutcracker and the Four Realms', 'nutcracker.jpg', 'Fantasy ', 'Joe Johnston', 'Mackenzie, FoyKeira Knightley, Morgan Freeman', '2021-02-09', 'On Christmas Eve, Clara realises that before dying, her mother left her with an inheritance to a magical world of fairies and toy soldiers that are alive. She holds the key to the fate of this world.', 'https://www.imdb.com/title/tt5523010/ratings/?ref_=tt_ov_rt', 400, '16:30', 'kids', 'Coming Soon', 'https://www.youtube.com/watch?v=BXfxLIuNJvw'),
(15, 'Turning Red', 'turningred.jpg', 'Animation', 'Domee Shi', 'Rosalie Chiang(voice), Sandra Oh(voice), Maitreyi Ramakrishnan(voice)', '2022-02-01', 'A 13-year-old girl named Mei Lee turns into a giant red panda whenever she gets too excited.', 'https://www.imdb.com/title/tt8097030/', 400, '18:30', 'kids', 'Coming Soon', 'https://www.youtube.com/watch?v=XdKzUbAiswE'),
(16, 'Raya and the Last Dragon', 'raya.jpg', 'Adventure', 'Don Hall', 'Kelly Marie Tran(voice), Awkwafina(voice), Gemma Chan(voice) ', '2021-11-30', 'In a realm known as Kumandra, a re-imagined Earth inhabited by an ancient civilization, a warrior named Raya is determined to find the last dragon.', 'https://www.imdb.com/title/tt5109280/ratings/?ref_=tt_ov_rt', 400, '18:30', 'kids', 'watch ', 'https://www.youtube.com/watch?v=1VIZ89FEjYI'),
(17, 'Ron', 'ronsgonewrong.jpg', 'Animation', ' Sarah Smith', 'Jack Dylan Grazer(voice), Zach Galifianakis(voice), Ed Helms(voice)', '2021-11-18', 'The story of Barney, an awkward middle-schooler and Ron, his new walking, talking, digitally-connected device. Ron', 'https://www.imdb.com/title/tt7504818/ratings/?ref_=tt_ov_rt', 400, '18:30', 'kids', 'adult', 'https://www.youtube.com/watch?v=fCqGfjBSk0I'),
(18, 'Dolittle', 'dollittle.jpg', 'Adventure', ' Stephen Gaghan', 'Robert Downey Jr., Antonio Banderas, Michael Sheen', '2021-12-15', 'A physician, who can speak with animals, is summoned by the queen to find a cure for her life-threatening disease. Soon, he embarks on a journey with his furry friends in search of a healing tree.', 'https://www.imdb.com/title/tt6673612/ratings/?ref_=tt_ov_rt', 400, '13:00', 'kids', 'watch ', 'https://www.youtube.com/watch?v=FEf412bSPLs'),
(19, 'The Fox and the Hound 2', 'thefoxandthehound2.jpg', 'Animation', ' Jim Kammerud', 'Reba McEntire(voice), Patrick Swayze(voice), Jonah Bobo(voice)', '2022-02-10', 'Copper abandons his best friend Tod to join the music band Singing Strays, who want to attract the attention of a talent scout. However, Dixie, a former member, tries to sabotage their audition.', 'https://www.imdb.com/video/vi2550701337?playlistId=tt0465997&ref_=tt_ov_vi', 400, '20:30', 'kids', 'watch ', 'https://www.imdb.com/video/vi2550701337?playlistId=tt0465997&ref_=tt_ov_vi'),
(97, 'Eternals', 'eternals.png', 'Adventure', 'Chloe Zhao', 'Gemma Chan, Richard Madden, Angelina Jolie', '2022-02-01', 'The Eternals, a race of immortal beings with superhuman powers who have secretly lived on Earth for thousands of years, reunite to battle the evil Deviants.', '', 100, '18:45', 'adult', 'coming soon', 'https://www.youtube.com/watch?v=x_me3xsvDgk'),
(98, 'Dune', 'Dune.jpg', 'Adventure', 'Denis Villeneuve', 'Timothee Chalamet, Zendaya, Rebecca Ferguson, Stel...', '2022-01-27', 'Feature adaptation of Frank Herbert', '', 95, '19:40', 'adult', 'coming soon', 'https://www.youtube.com/watch?v=n9xhJrPXop4');

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(25) NOT NULL,
  `image` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gigs`
--

CREATE TABLE IF NOT EXISTS `gigs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `date` date NOT NULL,
  `band` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `venue` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `link` varchar(300) CHARACTER SET latin1 COLLATE latin1_general_cs DEFAULT NULL,
  `time` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `gigs`
--

INSERT INTO `gigs` (`id`, `day`, `date`, `band`, `venue`, `link`, `time`) VALUES
(2, 'Friday', '2020-05-01', 'Pitchblenders ', 'Valvona & Crolla', 'https://www.valvonacrolla.co.uk/', '06:44'),
(5, 'Friday', '2022-02-01', 'Blue Bottle', 'Edinburgh Jazz n Jive Club', 'https://allevents.in/org/edinburgh-jazz-n-jive-club/12701463', '20:30'),
(6, 'Saturday', '2021-05-01', 'Christine Adams Trio', 'Valvona & Crolla', 'https://www.valvonacrolla.co.uk/', '20:30'),
(7, 'Friday', '2022-02-01', 'Blue Bottle', 'Edinburgh Jazz n Jive Club', 'https://allevents.in/org/edinburgh-jazz-n-jive-club/12701463', '19:00'),
(8, 'Saturday', '2021-11-19', 'Christine Adams Trio', 'Valvona & Crolla', 'https://www.valvonacrolla.co.uk/', '21:00'),
(9, 'Friday', '2022-02-01', ' New Phoenix Jazz', 'Edinburgh Jazz n Jive Club', 'https://allevents.in/org/edinburgh-jazz-n-jive-club/12701463', '20:00'),
(10, 'Saturday', '2021-11-19', 'Christine Adams Trio', 'Valvona & Crolla', 'https://www.valvonacrolla.co.uk/', '19:30'),
(14, 'Sunday', '2022-05-01', ' New Phoenix Jazz', 'The Jazz Bar', 'https://www.thejazzbar.co.uk/', '20:00');

-- --------------------------------------------------------

--
-- Table structure for table `mp3`
--

CREATE TABLE IF NOT EXISTS `mp3` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(10,2) NOT NULL,
  `mp3` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `mp3`
--

INSERT INTO `mp3` (`id`, `name`, `code`, `price`, `mp3`) VALUES
(1, 'Best Buddies', 'mp3', 3.00, 'bestbuddies.mp3'),
(2, 'Murder Gonna Be My Crime', 'MurderGonnaBe', 3.00, 'MurderGonnaBeMyCrime.mp3'),
(5, 'Rubinstein Melody', 'rubinsteinmelody', 3.00, 'rubinsteinmelody.mp3'),
(9, 'Pitchblenders Full Digital Album', 'album', 9.00, 'cd1.png'),
(10, 'Happy Jazz ', 'happyjazzyragtimepiano', 3.00, 'happyjazzyragtimepiano.mp3'),
(11, 'Crystal Coffee', 'CrystalCoffee', 3.00, 'CrystalCoffee.mp3'),
(12, 'Low Lit Blues', 'LowLitBlues', 3.00, 'LowLitBlues.mp3'),
(13, 'Speakeasy', 'speakeasy', 3.00, 'speakeasy.mp3'),
(27, 'Violeta Lazarova', '501370', 3.00, 'CrystalCoffee.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `p1` varchar(500) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `p2` varchar(500) CHARACTER SET latin1 COLLATE latin1_general_cs DEFAULT NULL,
  `iframe` varchar(500) CHARACTER SET latin1 COLLATE latin1_general_cs DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`p1`, `p2`, `iframe`, `id`) VALUES
('Add News', 'Add more information', '<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fchristineadamssings%2Fposts%2F1724294294581662&show_text=true&width=500" width="300" height="303" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>', 2),
('I Add News', 'Add news', '<iframe width="560" height="315" src="https://www.youtube.com/embed/hvAzePwKgzw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', 3),
('I am joining the Shades of Dave Pell Octet tonight. Maybe see you there!', 'Important information Important information Important informationImportant informationImportant information mmm', '<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fchristineadamssings%2Fposts%2F1724294294581662&show_text=true&width=500" width="300" height="303" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>', 4),
('I am joining the Shades of Dave Pell Octet tonight. Maybe see you there!', ' 9.15 at the Jazz Bar', '<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fchristineadamssings%2Fposts%2F1724294294581662&show_text=true&width=500" width="300" height="303" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>', 5);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `text` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `band` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_cs DEFAULT NULL,
  `venue` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_cs DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `img`, `text`, `band`, `venue`, `date`) VALUES
(45, 'bluebottle.jpg', 'Blue Bottle', 'Blue Bottle', 'The Jazz Bar', '2022-04-14'),
(46, 'bluebottle1.jpeg', 'Blue Bottle', 'Blue Bottle', 'The Jazz Bar', '2022-04-14'),
(47, 'bluebottle2.jpg', 'Blue Bottle', 'Blue Bottle', 'The Jazz Bar', '2022-04-14'),
(48, 'christine.JPG', 'Christine Adams', 'Pitchblenders ', 'The Jazz Bar', '2022-04-14'),
(49, 'christine1.JPG', 'Christine Adams', 'Blue Bottle', 'The Jazz Bar', '2022-04-14'),
(50, 'christine2.jpg', 'Christine Adams', 'Blue Bottle', 'The Jazz Bar', '2022-04-18'),
(51, 'jerry.jpg', 'New Phoenix Jazz Band', ' New Phoenix Jazz', '', '0000-00-00'),
(52, 'jerry1.jpg', 'New Phoenix Jazz Band', ' New Phoenix Jazz', '', '0000-00-00'),
(53, 'jerry2.jpg', 'New Phoenix Jazz Band', ' New Phoenix Jazz', 'The Jazz Bar', '0000-00-00'),
(54, 'jerry3.jpg', 'New Phoenix Jazz Band', ' New Phoenix Jazz', ' New Phoenix Jazz', '0000-00-00'),
(55, 'jerry4.jpg', 'New Phoenix Jazz Band', ' New Phoenix Jazz', '', '0000-00-00'),
(56, 'jerry5.jpg', 'New Phoenix Jazz Band', ' New Phoenix Jazz', 'The Jazz Bar', '0000-00-00'),
(57, 'jerry5.jpg', 'New Phoenix Jazz Band', ' New Phoenix Jazz', '', '0000-00-00'),
(58, 'jerry6.jpg', 'New Phoenix Jazz Band', ' New Phoenix Jazz', '', '0000-00-00'),
(59, 'jerry7.jpg', 'New Phoenix Jazz Band', ' New Phoenix Jazz', 'The Jazz Bar', '0000-00-00'),
(60, 'jerry8.jpg', 'New Phoenix Jazz Band', ' New Phoenix Jazz', '', '0000-00-00'),
(61, 'pitchblenders.JPG', 'Pitchblenders', 'Pitchblenders ', '', '0000-00-00'),
(62, 'pitchblenders1.JPG', 'Pitchblenders', 'Pitchblenders ', '', '0000-00-00'),
(63, 'pitchblenders2.JPG', 'Pitchblenders', 'Pitchblenders ', 'The Jazz Bar', '0000-00-00'),
(64, 'pitchblenders3.JPG', 'Pitchblenders', 'Pitchblenders ', '', '0000-00-00'),
(65, 'pitchblenders4.jpg', 'Pitchblenders', 'Pitchblenders ', '', '0000-00-00'),
(66, 'pitchblenders5.jpg', 'Pitchblenders', 'Pitchblenders ', '', '0000-00-00'),
(67, 't.jpg', 'Christine Adams Trio', 'Christine Adams Trio', '', '0000-00-00'),
(68, 'trio.jpg', 'Christine Adams Trio', 'Christine Adams Trio', '', '0000-00-00'),
(69, 'trio.png', 'Christine Adams Trio', 'Christine Adams Trio', '', '0000-00-00'),
(70, 'trio1.png', 'Christine Adams Trio', 'Christine Adams Trio', '', '0000-00-00'),
(71, 'trio2.jpg', 'Christine Adams Trio', 'Christine Adams Trio', '', '0000-00-00'),
(72, 'trio3.jpg', 'Christine Adams Trio', 'Christine Adams Trio', 'The Jazz Bar', '0000-00-00'),
(73, 'trio4.JPG', 'Christine Adams Trio', 'Christine Adams Trio', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `band` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`band`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `band`, `price`) VALUES
(1, 'MurderGonnaBeMyCrime.mp3', 'NewPhoenix', 3.00),
(4, 'bestbuddies.mp3', ' New Phoenix Jazz', 3.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password2` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `dob`, `password`, `password2`, `category`) VALUES
(11, 'vvlazarova@gmail.com', 'vily', '2010-12-18', '123123', '123123', ''),
(12, 'vvlazarova@gmail.com', 'vvlazarova', '1988-12-09', '123123', '123123', ''),
(20, 's@abv.bg', 'adult', '1995-01-02', 'adult', 'qazwsx', ''),
(28, 'colette.wilson07@btinternet.co', 'Letty19', '1965-09-19', 'Letty19', 'Letty19', ''),
(30, 'vvlazarova@gmail.com', 'adminnnn', '2015-02-12', '123123', '', ''),
(31, 'test@test.com', 'test', '1984-10-06', 'test', 'test', ''),
(32, 'stoiv@abv.bg', 'admin1', '1980-01-01', 'admin1', 'admin1', ''),
(33, 'ar@at.com', 'ar@at.com', '2022-01-12', '12', '12', ''),
(34, 'vlazarova@v.com', 'vlazarovaaaaaa', '1988-09-12', 'Pass123', 'Pass123', ''),
(35, 'vvlazarova@gmail.com', 'vlazarova1213231', '1980-01-01', 'Pass123', 'Pass123', ''),
(37, 'vvlazarova@gmail.com', 'vlaza123123rova', '1988-01-01', 'Pass123', 'Pass123', ''),
(38, 'vlazarova@v.com', 'vlazarova1212', '1988-01-01', 'Pass123', 'Pass123', ''),
(39, 'vvlazarova@gmail.com', 'vlazarov', '1988-09-12', 'Pass123', 'Pass123', ''),
(41, 'stoilpanchev@abv.bg', 'stoil', '1985-01-06', 'qweasdzxc', 'qweasdzxc', ''),
(42, 'vvlazarova@gmail.com', 'vlazarova', '1980-01-12', 'Pass123', 'Pass123', ''),
(43, 'vvlazarova@gmail.com', 'admin', '2022-01-05', 'admin', '', ''),
(45, 'vvlazarova@gmail.com', 'admin', '0000-00-00', 'admin', '', ''),
(46, 'vvlazarova@gmail.com', 'admin', '0000-00-00', 'admin', '', ''),
(48, 'adult3@adult3.com', 'adult3', '1994-01-05', 'adult', 'adult', ''),
(49, 'f@f.co.uk', 'f', '2021-12-29', 'f', '', ''),
(50, 'vaskolazarov@abv.bg', 'g', '1988-02-02', 'ddd', 'ddd', ''),
(51, 'vvlazarova@gmail.com', 'kids', '2022-01-14', '123', '123', ''),
(52, 'weronika.harlos@gmail.com', 'Wera', '1994-01-20', 'tetsab-Jixxi5-s', 'tetsab-Jixxi5-s', ''),
(53, 'luna@co.uk', 'Luna', '1994-01-11', 'Lamp', 'Lamp', ''),
(54, 'jan@co.pl', 'jan', '2021-06-09', 'lol', 'lol', ''),
(55, '', '', '0000-00-00', '', '', ''),
(56, 'kid@gmail.com', 'kid', '2021-02-08', 'kid', 'kid', ''),
(57, 'vvlazarova@gmail.com', 'vily', '1980-01-01', '123', '', ''),
(58, 'vvlazarova@gmail.com', 'vlazarova', '1988-09-12', 'Vv402338', 'Vv402338', '');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iframe` varchar(500) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `band` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs DEFAULT NULL,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `iframe`, `band`, `name`) VALUES
(1, '<iframe  size ="100%"  src="https://www.youtube-nocookie.com/embed/mVLFTIp0rBA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', ' New Phoenix Jazz', '2 April 2018'),
(7, '<iframe size ="100%" src="https://www.youtube.com/embed/iGfHzW2nYhk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', ' New Phoenix Jazz', 'Track 3'),
(12, '<iframe size ="100%" src="https://www.youtube.com/embed/hvAzePwKgzw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', ' New Phoenix Jazz', 'If You a Viper'),
(15, '<iframe size ="100%" src="https://www.youtube.com/embed/ngiBGyR00yY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', ' New Phoenix Jazz', 'Bye Bye Blackbird'),
(16, '<iframe size="100%" src="https://www.youtube.com/embed/2htVTaX4BL4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', ' New Phoenix Jazz', 'Busy Line'),
(17, '<iframe size="100%" src="https://www.youtube.com/embed/PlMdMgibmug" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', ' New Phoenix Jazz', 'Goody Goody'),
(19, '<iframe size="100%" src="https://www.youtube.com/embed/xiWiDR9RjgU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', ' New Phoenix Jazz', 'Track 21'),
(20, '<iframe size="100%" src="https://www.youtube.com/embed/-59Amws1ZQg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', ' New Phoenix Jazz', 'Track 19'),
(21, '<iframe size ="100%" src="https://www.youtube.com/embed/AtgQO3VN0eg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', ' New Phoenix Jazz', 'Track 10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
