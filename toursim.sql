-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2019 at 09:59 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `toursim`
--

-- --------------------------------------------------------

--
-- Table structure for table `addplace`
--

CREATE TABLE IF NOT EXISTS `addplace` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placename` varchar(160) NOT NULL,
  `placeloc` varchar(167) NOT NULL,
  `placedes` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `addplace`
--

INSERT INTO `addplace` (`id`, `placename`, `placeloc`, `placedes`, `image`) VALUES
(10, 'Tandi', 'Near Chamba', 'Soon Bhaga was found coming with great struggle through the narrow gorges to Tandi where ultimately both met and the celestial marriage was performed. Tandis importance for the people of Lahaul is sam', 'gallery/cham.jpg'),
(11, 'Tabo', 'Near Lahaul Spiti', 'At the right of Spiti river is an ancient village named Tabo flanked on either side by lofty brown hills and sun burnt is the seat of one of the most famous Buddhist monasteries -Sherlang Duang Chamba', 'gallery/h5.jpg'),
(12, 'Kalpa', 'Near Kinnaur', 'This mountain changes colors several times a day with a change of weather conditions or may be as destined by Lord Shiva his eternal abode. Parvati Kund is located on the top of Kinner Kailash. The an', 'gallery/Kasol3.jpg'),
(14, 'Sangla', 'Near Kinnaur', ' It is an important village of the Baspa valley situated on the right bank of Baspa river is built on a slope with houses rising one above other with gigantic Kinner Kailash peak  6500 meters  towerin', 'gallery/d.jpg'),
(15, 'Baspa Valley', 'Near Kinnaur', 'It is like a Fairyland. The quaint little houses temples gompas and the people of Baspa valley conjure up a perfect image of Shangri La.', 'gallery/s3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `addtour`
--

CREATE TABLE IF NOT EXISTS `addtour` (
  `Id` int(150) NOT NULL AUTO_INCREMENT,
  `no` int(200) NOT NULL DEFAULT '0',
  `heading` varchar(160) NOT NULL,
  `placename` varchar(160) NOT NULL,
  `price` varchar(159) NOT NULL,
  `days` varchar(150) NOT NULL,
  `vec` varchar(159) NOT NULL,
  `image` varchar(159) NOT NULL,
  `ratting` int(200) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `addtour`
--

INSERT INTO `addtour` (`Id`, `no`, `heading`, `placename`, `price`, `days`, `vec`, `image`, `ratting`) VALUES
(16, 1, 'Kullu  is one of the most frequented tourist destinations', 'Kullu', '5,000', '5', 'By Bus', 'gallery/bird_is_about_to_fly.jpg', 2),
(17, 3, 'The enchanting beauty of Shimla', 'Shimla', '2,000', '3', 'By Car', 'gallery/s9.jpg', 10),
(18, 0, 'The Scotland of India', 'Dharamshala', '8,000', '5', 'By Bus', 'gallery/41393524.jpg', 0),
(19, 0, ' This hill station is spread across five hills.', 'Dalhousie', '4,000', '2', 'By bus', 'gallery/DalhousieDharamshala.jpg', 0),
(20, 0, 'Roghi village is small village situated in Kinnaur Himachal Pradesh India.', 'Kinnaur', '15,000', '10', 'By Bus', 'gallery/kinor0.png', 0),
(21, 0, 'One of the scenic valleys in Himachal Pradesh, Kangra', 'Kangra', '12,000', '34', 'By Bus', 'gallery/palampur.jpg', 0),
(22, 0, 'Beautiful temple in himachal pardesh.', 'Temple', '30,000', '15', 'By Bus', 'gallery/92_HimachalPradeshTemple.jpg', 0),
(23, 0, 'Mandi has a collection of some of the most beautiful and rich natural splendors .', 'Mandi', '3,000', '2', 'By Bus', 'gallery/mandi7.jpg', 0),
(24, 0, 'Most beautiful place in kinnaur', 'kalpa', '15,000', '5', 'By Bus', 'gallery/kalpa2.jpg', 0),
(26, 1, 'Sirmaur is located on the south-eastern part of the state', 'Sirmaur', '8,000', '4', 'By Bus', 'gallery/sirmor1.jpg', 4),
(27, 0, 'Mandi has a collection of some of the most beautiful and rich natural splendors .', 'Manali', '4,000', '4', 'By Bus', 'gallery/manali1.jpg', 0),
(28, 0, 'This hill station is spread across five hills.', 'Chamba', '5,000', '4', 'By Bus', 'gallery/cham.jpg', 0),
(29, 0, 'taj', 'chandigarh', '2000', 'special', '', 'gallery/blog-three.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bookhotel`
--

CREATE TABLE IF NOT EXISTS `bookhotel` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `room` varchar(200) NOT NULL,
  `sday` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bookhotel`
--

INSERT INTO `bookhotel` (`id`, `name`, `room`, `sday`, `price`, `email`) VALUES
(1, 'taj', '2', '05/18/2018', '4000', 'Shivani.raanaa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE IF NOT EXISTS `checkout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placename` varchar(70) NOT NULL,
  `days` varchar(80) NOT NULL,
  `vec` varchar(60) NOT NULL,
  `room` int(50) NOT NULL,
  `sday` varchar(60) NOT NULL,
  `eday` varchar(70) NOT NULL,
  `price` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `placename`, `days`, `vec`, `room`, `sday`, `eday`, `price`, `email`) VALUES
(47, 'Kullu', '5', 'By Bus', 6, '04/25/2018', '', '30000', 'Shivani.raanaa@gmail.com'),
(48, 'Shimla', '3', 'By Car', 3, '04/27/2018', '', '6000', 'Shivani.raanaa@gmail.com'),
(49, 'Shimla', '3', 'By Car', 2, '04/28/2018', '', '4000', 'Shivani.raanaa@gmail.com'),
(50, 'Temple', '15', 'By Bus', 2, '05/17/2018', '', '60000', 'Shivani.raanaa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `comment` longtext NOT NULL,
  `like2` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `comment`
--


-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `placename` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `placename`, `email`, `message`) VALUES
(44, 'sommmal', 'ajxnasjxnjs', 'Shivani123.raanaa@gmail.com', 'bjbcujdshichasc'),
(46, 'Sssss', 'sxdsdwdw', 'Shivani123.raanaa@gmail.com', 'dwedbheiheide'),
(47, 'Shivani', 'shimla', 'Shivani123.raanaa@gmail.com', 'dvfcygud');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE IF NOT EXISTS `demo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room` varchar(200) NOT NULL,
  `sday` varchar(200) NOT NULL,
  `eday` varchar(300) NOT NULL,
  `pid` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `demo`
--


-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `desc1` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `location`, `price`, `desc1`, `image`) VALUES
(2, 'taj', 'chandigarh', '2000', 'dkajkls dalksdl dlaskd daslk;', 'hotel/blog-two.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `Id` int(170) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=201 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`Id`, `image`, `name`) VALUES
(96, 'a/6_138.74434811364478.jpg', ''),
(97, 'a/kalka-shimla-rail-route-wallpaper.jpg', ''),
(98, 'a/s9.jpg', ''),
(99, 'a/shimla-city-wallpaper.jpg', ''),
(100, 'a/shimla-hill-station-wallpaper.jpg', ''),
(101, 'a/Shimla-Hill-Station-Winter-HD-Wallpaper-1024x768.jpg', ''),
(102, 'a/shimla-mall-road-wallpaper.jpg', ''),
(103, 'a/shimlas-christ-church-wallpaper.jpg', ''),
(104, 'a/shimlas-rashtrapati-niwas-wallpaper.jpg', ''),
(105, 'a/shimlas-snowfall-wallpaper.jpg', ''),
(106, 'b/Gallery-himachal-pradesh-holidays-17.jpg', ''),
(107, 'b/h2.jpg', ''),
(108, 'b/h5.jpg', ''),
(109, 'b/h7.JPG', ''),
(110, 'b/kalpa1.jpg', ''),
(111, 'c/kalpakin.jpg', ''),
(112, 'c/kalpa.jpg', ''),
(113, 'c/kalpa1.jpg', ''),
(114, 'c/kalpa3.jpg', ''),
(115, 'c/kalpa9.jpg', ''),
(116, 'c/kapla.jpg', ''),
(117, 'c/kinoor4.jpg', ''),
(118, 'c/kinor.jpg', ''),
(119, 'c/kinor0.png', ''),
(120, 'd/kalpa9.jpg', ''),
(121, 'd/kinor2.jpg', ''),
(122, 'd/kinor5.jpg', ''),
(123, 'd/kinor9.jpg', ''),
(124, 'd/kinour.jpg', ''),
(125, 'd/kior6.jpg', ''),
(126, 'd/LTCKashmirTourPackage.jpg', ''),
(127, 'e/kinor.jpg', ''),
(128, 'e/Mountainsideroadwithhairpinturns,H.jpeg', ''),
(129, 'e/pla1v.jpg', ''),
(130, 'e/prashar-lake.jpg', ''),
(131, 'e/PrasharLakeHD.png', ''),
(132, 'e/s.jpg', ''),
(133, 'e/s2.jpg', ''),
(134, 'e/s3.jpg', ''),
(135, 'e/s4.jpg', ''),
(136, 'f/masurihill.jpg', ''),
(137, 'f/maxresdefault.jpg', ''),
(138, 'f/palm.jpg', ''),
(139, 'f/PrasharLakeHD.png', ''),
(140, 'f/shrinager.jpg', ''),
(141, 'f/sirmor.jpg', ''),
(142, 'f/SomeBeautifulLandscapesfromPeer-Ki-Gali-MughalRoad-Pulwama,PeerKiGali,Dogrian,Dubgian,Shopian,Chatapani(1of20).jpg', ''),
(143, 'f/SomeBeautifulLandscapesfromPeer-Ki-Gali-MughalRoad-Pulwama,PeerKiGali,Dogrian,Dubgian,Shopian,Chatapani(13of20).jpg', ''),
(144, 'g/cham.jpg', ''),
(145, 'g/ChambaTownofHimachalPradesh-2-Copy.jpg', ''),
(146, 'g/chamba.jpg', ''),
(147, 'g/chandartallake.jpg', ''),
(148, 'g/route-everest-base-camp-trek.jpg', ''),
(149, 'g/sirmor3.jpg', ''),
(150, 'g/sirmor4.jpg', ''),
(151, 'abc/92_HimachalPradeshTemple.jpg', 'abc'),
(152, 'abc/2015-06-04_WorldEnvironmentDay_EN-CA10944643351_1920x1080.jpg', 'abc'),
(153, 'Kufri/Gallery-himachal-pradesh-holidays-17.jpg', 'Kufri'),
(154, 'Kufri/h2.jpg', 'Kufri'),
(155, 'Kufri/h5.jpg', 'Kufri'),
(156, 'Kufri/h7.JPG', 'Kufri'),
(157, 'Kufri/LTCKashmirTourPackage.jpg', 'Kufri'),
(158, 'Kufri/pla1v.jpg', 'Kufri'),
(159, 'Tandi/cham-Copy.jpg', 'Tandi'),
(160, 'Tandi/ChambaTownofHimachalPradesh-2-Copy.jpg', 'Tandi'),
(161, 'Tandi/ChambaTownofHimachalPradesh-2.jpg', 'Tandi'),
(162, 'Tandi/chamba.jpg', 'Tandi'),
(163, 'Tandi/chamba2-Copy.jpg', 'Tandi'),
(164, 'Tandi/chamba2.jpg', 'Tandi'),
(165, 'Tandi/chandartallake.jpg', 'Tandi'),
(166, 'Tabo/h2.jpg', 'Tabo'),
(167, 'Tabo/h3.jpg', 'Tabo'),
(168, 'Tabo/images.jpg', 'Tabo'),
(169, 'Tabo/IMG_6943.JPG', 'Tabo'),
(170, 'Tabo/Kasol3.jpg', 'Tabo'),
(171, 'Tabo/manali1.jpg', 'Tabo'),
(172, 'Tabo/manali2.jpg', 'Tabo'),
(173, 'Kalpa/kalpakin.jpg', 'Kalpa'),
(174, 'Kalpa/kalpa1.jpg', 'Kalpa'),
(175, 'Kalpa/kalpa3.jpg', 'Kalpa'),
(176, 'Kalpa/kalpa9.jpg', 'Kalpa'),
(177, 'Kalpa/kapla.jpg', 'Kalpa'),
(178, 'Kalpa/Kasol3.jpg', 'Kalpa'),
(179, 'Kalpa/kinor2.jpg', 'Kalpa'),
(180, 'Kalpa/kinor5.jpg', 'Kalpa'),
(181, 'Kalpa/kior6.jpg', 'Kalpa'),
(182, 'Sangla/kalpakin.jpg', 'Sangla'),
(183, 'Sangla/kinor0.png', 'Sangla'),
(184, 'Sangla/kinor1.jpg', 'Sangla'),
(185, 'Sangla/pa.jpg', 'Sangla'),
(186, 'Sangla/pla1v.jpg', 'Sangla'),
(187, 'Sangla/prashar-lake.jpg', 'Sangla'),
(188, 'Sangla/PrasharLakeHD.png', 'Sangla'),
(189, 'Sangla/raj.jpg', 'Sangla'),
(190, 'Sangla/rajgher.jpg', 'Sangla'),
(191, 'Sangla/rajgher1.jpg', 'Sangla'),
(192, 'Sangla/rajgher3.jpg', 'Sangla'),
(193, 'Baspa Valley/PrasharLakeHD.png', 'Baspa Valley'),
(194, 'Baspa Valley/raj.jpg', 'Baspa Valley'),
(195, 'Baspa Valley/rajgher.jpg', 'Baspa Valley'),
(196, 'Baspa Valley/rajgher1.jpg', 'Baspa Valley'),
(197, 'Baspa Valley/rajgher3.jpg', 'Baspa Valley'),
(198, 'Baspa Valley/s.jpg', 'Baspa Valley'),
(199, 'Baspa Valley/s4.jpg', 'Baspa Valley'),
(200, 'Baspa Valley/SomeBeautifulLandscapesfromPeer-Ki-Gali-MughalRoad-Pulwama,PeerKiGali,Dogrian,Dubgian,Shopian,Chatapani(8of20).jpg', 'Baspa Valley');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `name` varchar(89) NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=218 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `image`) VALUES
(80, 'Shimla', 'Shimla/6_138.74434811364478.jpg'),
(81, 'Shimla', 'Shimla/kalka-shimla-rail-route-wallpaper.jpg'),
(82, 'Shimla', 'Shimla/s3.jpg'),
(83, 'Shimla', 'Shimla/s4.jpg'),
(84, 'Shimla', 'Shimla/s5.jpg'),
(85, 'Shimla', 'Shimla/s6.jpg'),
(86, 'Shimla', 'Shimla/s7.jpg'),
(87, 'Shimla', 'Shimla/s8.jpg'),
(88, 'Shimla', 'Shimla/s9.jpg'),
(89, 'Shimla', 'Shimla/shimla-city-wallpaper.jpg'),
(90, 'Shimla', 'Shimla/shimla-hill-station-wallpaper.jpg'),
(91, 'Shimla', 'Shimla/Shimla-Hill-Station-Winter-HD-Wallpaper-1024x768.jpg'),
(92, 'Shimla', 'Shimla/shimla-mall-road-wallpaper.jpg'),
(93, 'Shimla', 'Shimla/shimlas-christ-church-wallpaper.jpg'),
(94, 'Shimla', 'Shimla/shimlas-snowfall-wallpaper.jpg'),
(95, 'Dharamshala', 'Dharamshala/01.jpg.jpg'),
(96, 'Dharamshala', 'Dharamshala/37469808.jpg'),
(97, 'Dharamshala', 'Dharamshala/41393524.jpg'),
(98, 'Dharamshala', 'Dharamshala/43045607.jpg'),
(99, 'Dharamshala', 'Dharamshala/86406756.jpg'),
(100, 'Dharamshala', 'Dharamshala/DharamshalaofHimachalpradesh.jpg'),
(101, 'Dharamshala', 'Dharamshala/kashmir-hd-wallpaper.jpg'),
(102, 'Dharamshala', 'Dharamshala/maxresdefault.jpg'),
(103, 'Dharamshala', 'Dharamshala/on_the_way_to_manali_by_harsh1991-d2yjzi7.jpg'),
(104, 'Kasauli', 'Kasauli/800px-India_Snow_Tourism_.jpg'),
(105, 'Kasauli', 'Kasauli/223004_196470733742767_100001395254461_565022_2871264_n-Copy-Copy.jpg'),
(106, 'Kasauli', 'Kasauli/Shimla_231107_032.jpg'),
(107, 'Kasauli', 'Kasauli/slide6.jpg'),
(108, 'Kasauli', 'Kasauli/story-bg-1.jpg'),
(109, 'Solan', 'Solan/log.jpg'),
(110, 'Solan', 'Solan/templatemo_image_01.jpg'),
(111, 'Solan', 'Solan/thumb6.jpg'),
(112, 'Sirmaur', 'Sirmaur/800px-Rashtrapati_Niwas,_Shimla.jpg'),
(113, 'Sirmaur', 'Sirmaur/800px-SHIMLA_IMG_0036.jpg'),
(114, 'Sirmaur', 'Sirmaur/223004_196470733742767_100001395254461_565022_2871264_n.jpg'),
(115, 'Sirmaur', 'Sirmaur/log.jpg'),
(116, 'fnejdfjqwiodkqw', 'fnejdfjqwiodkqw/Shimla_231107_032.jpg'),
(117, 'fnejdfjqwiodkqw', 'fnejdfjqwiodkqw/slide1.jpg'),
(118, 'fnejdfjqwiodkqw', 'fnejdfjqwiodkqw/slide6.jpg'),
(119, 'fnejdfjqwiodkqw', 'fnejdfjqwiodkqw/story-bg-1-Copy.jpg'),
(120, 'Kullu', 'Kullu/bridginmandi.jpg'),
(121, 'Kullu', 'Kullu/pla1v.jpg'),
(122, 'Kullu', 'Kullu/s3.jpg'),
(123, 'Kullu', 'Kullu/skiing-kufri-himachal-pradesh_90873-1600x1200.jpg'),
(124, 'Kullu', 'Kullu/Waterfalls-on-the-way-to-Mani-Mahesh-Lake-in-Chamba-District-of-Himachal-Pradesh-10.jpg'),
(125, 'Shimla', 'Shimla/6_138.74434811364478.jpg'),
(126, 'Shimla', 'Shimla/kalka-shimla-rail-route-wallpaper.jpg'),
(127, 'Shimla', 'Shimla/s3.jpg'),
(128, 'Shimla', 'Shimla/s4.jpg'),
(129, 'Shimla', 'Shimla/s7.jpg'),
(130, 'Shimla', 'Shimla/shimla-mall-road-wallpaper.jpg'),
(131, 'Shimla', 'Shimla/shimlas-christ-church-wallpaper.jpg'),
(132, 'Shimla', 'Shimla/shimlas-snowfall-wallpaper.jpg'),
(133, 'Shimla', 'Shimla/shimla-wallpaper-hd.jpg'),
(134, 'Dharamshala', 'Dharamshala/01.jpg.jpg'),
(135, 'Dharamshala', 'Dharamshala/18409870.jpg'),
(136, 'Dharamshala', 'Dharamshala/37469808.jpg'),
(137, 'Dharamshala', 'Dharamshala/41393524.jpg'),
(138, 'Dharamshala', 'Dharamshala/86406756.jpg'),
(139, 'Dharamshala', 'Dharamshala/DharamshalaofHimachalpradesh.jpg'),
(140, 'Dharamshala', 'Dharamshala/kashmir-hd-wallpaper.jpg'),
(141, 'Dharamshala', 'Dharamshala/maxresdefault.jpg'),
(142, 'Dharamshala', 'Dharamshala/on_the_way_to_manali_by_harsh1991-d2yjzi7.jpg'),
(143, 'Dalhousie', 'Dalhousie/Bhagsunath-Waterfall-Mcleodganj.jpg'),
(144, 'Dalhousie', 'Dalhousie/DalhousieDharamshala.jpg'),
(145, 'Dalhousie', 'Dalhousie/dharm.jpg'),
(146, 'Dalhousie', 'Dalhousie/dhsr2.jpg'),
(147, 'Dalhousie', 'Dalhousie/qq.jpg'),
(148, 'Dalhousie', 'Dalhousie/rajgher.jpg'),
(149, 'Dalhousie', 'Dalhousie/rampur.jpg'),
(150, 'Kinnaur', 'Kinnaur/kinor.jpg'),
(151, 'Kinnaur', 'Kinnaur/kinor1.jpg'),
(152, 'Kinnaur', 'Kinnaur/kinor2.jpg'),
(153, 'Kinnaur', 'Kinnaur/kinor5.jpg'),
(154, 'Kinnaur', 'Kinnaur/kinor7.jpg'),
(155, 'Kinnaur', 'Kinnaur/kinor8.jpg'),
(156, 'Kinnaur', 'Kinnaur/kinor9.jpg'),
(157, 'Kinnaur', 'Kinnaur/kinour.jpg'),
(158, 'Kinnaur', 'Kinnaur/kior6.jpg'),
(159, 'Kinnaur', 'Kinnaur/LTCKashmirTourPackage.jpg'),
(160, 'Kangra', 'Kangra/p.jpg'),
(161, 'Kangra', 'Kangra/p1.jpg'),
(162, 'Kangra', 'Kangra/pa.jpg'),
(163, 'Kangra', 'Kangra/Palampur-Himachal.jpg'),
(164, 'Kangra', 'Kangra/palm.jpg'),
(165, 'Kangra', 'Kangra/palmp.jpg'),
(166, 'Kangra', 'Kangra/palmpurr.jpg'),
(167, 'Temple', 'Temple/8.jpg'),
(168, 'Temple', 'Temple/92_HimachalPradeshTemple.jpg'),
(169, 'Temple', 'Temple/93_KanyakumariTemple.jpg'),
(170, 'Temple', 'Temple/bridginmandi.jpg'),
(171, 'Temple', 'Temple/ramanathaswamy-temple.jpg'),
(172, 'Temple', 'Temple/sh.jpg'),
(173, 'Temple', 'Temple/Shoolini-Mata-Temple1-e1388577066312.jpg'),
(174, 'Temple', 'Temple/Shri_Baijnath_Temple_1.jpg'),
(175, 'Temple', 'Temple/VrindavanTempleWallpapers.jpg'),
(176, 'Mandi', 'Mandi/m_Khajjiar1.jpg'),
(177, 'Mandi', 'Mandi/mandi.jpg'),
(178, 'Mandi', 'Mandi/mandi7.jpg'),
(179, 'Mandi', 'Mandi/mandi8.jpg'),
(180, 'Mandi', 'Mandi/masurihill.jpg'),
(181, 'kalpa', 'kalpa/kalpakin.jpg'),
(182, 'kalpa', 'kalpa/kalpa1.jpg'),
(183, 'kalpa', 'kalpa/kalpa3.jpg'),
(184, 'kalpa', 'kalpa/kalpa9.jpg'),
(185, 'kalpa', 'kalpa/kapla.jpg'),
(186, 'kalpa', 'kalpa/Kasol3.jpg'),
(187, 'kalpa', 'kalpa/kinoor4.jpg'),
(188, 'kalpa', 'kalpa/kinor5.jpg'),
(189, 'kalpa', 'kalpa/kinor7.jpg'),
(190, ' Manali offers splendid views of the snow-capped mountains.', ' Manali offers splendid views of the snow-capped mountains./d.jpg'),
(191, ' Manali offers splendid views of the snow-capped mountains.', ' Manali offers splendid views of the snow-capped mountains./DSC01350.JPG'),
(192, ' Manali offers splendid views of the snow-capped mountains.', ' Manali offers splendid views of the snow-capped mountains./manali1.jpg'),
(193, ' Manali offers splendid views of the snow-capped mountains.', ' Manali offers splendid views of the snow-capped mountains./manali2.jpg'),
(194, ' Manali offers splendid views of the snow-capped mountains.', ' Manali offers splendid views of the snow-capped mountains./manali3.jpg'),
(195, ' Manali offers splendid views of the snow-capped mountains.', ' Manali offers splendid views of the snow-capped mountains./RohtangpassManaliHimachalPradeshIndia.jpg'),
(196, ' Manali offers splendid views of the snow-capped mountains.', ' Manali offers splendid views of the snow-capped mountains./skiing-kufri-himachal-pradesh_90873-1600x1200.jpg'),
(197, 'Sirmaur', 'Sirmaur/kinour.jpg'),
(198, 'Sirmaur', 'Sirmaur/sarahan-bhimkali-temple-1.jpg'),
(199, 'Sirmaur', 'Sirmaur/sirmor.jpg'),
(200, 'Sirmaur', 'Sirmaur/sirmor1.jpg'),
(201, 'Sirmaur', 'Sirmaur/sirmor3.jpg'),
(202, 'Sirmaur', 'Sirmaur/sirmor4.jpg'),
(203, 'Sirmaur', 'Sirmaur/teagardenpalampur.jpg'),
(204, 'Manali', 'Manali/kinor.jpg'),
(205, 'Manali', 'Manali/kinour.jpg'),
(206, 'Manali', 'Manali/manali1.jpg'),
(207, 'Manali', 'Manali/manali2.jpg'),
(208, 'Manali', 'Manali/manali3.jpg'),
(209, 'Manali', 'Manali/pla1v.jpg'),
(210, 'Manali', 'Manali/RohtangpassManaliHimachalPradeshIndia.jpg'),
(211, 'Chamba', 'Chamba/7214eb30-1bcd-4c40-8ff9-f44fad5724a7_dp_600_400.jpg'),
(212, 'Chamba', 'Chamba/4737668338_9b051dd9d3_b.jpg'),
(213, 'Chamba', 'Chamba/10473308934fe7eb69b16ae.jpg'),
(214, 'Chamba', 'Chamba/cham.jpg'),
(215, 'Chamba', 'Chamba/ChambaTownofHimachalPradesh-2.jpg'),
(216, 'Chamba', 'Chamba/chamba.jpg'),
(217, 'Chamba', 'Chamba/chamba2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `emailid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--


-- --------------------------------------------------------

--
-- Table structure for table `ratting_tour`
--

CREATE TABLE IF NOT EXISTS `ratting_tour` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `t_id` int(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `ratting` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ratting_tour`
--

INSERT INTO `ratting_tour` (`id`, `t_id`, `email`, `ratting`) VALUES
(2, 17, 'Shivani.raanaa@gmail.com', '4'),
(6, 17, 'garg@gmail.com', '5'),
(7, 17, 'aa', '1'),
(8, 16, 'aa', '2'),
(9, 26, 'Shivani.raanaa@gmail.com', '4');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(60) NOT NULL,
  `email` varchar(90) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `mobileno` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `user`, `email`, `pwd`, `gender`, `mobileno`, `address`) VALUES
(1, '', 'admin', 'admin', '', '0', '>'),
(2, 'Shivani', 'Shivani.raanaa@gmail.com', 'shivani', 'female', '7147483647', 'srstd'),
(3, 'Aaaaaaaaaaaaa', 'aa', 'aa', 'male', '2147483647', ' xjnxx'),
(4, 'Kamal', 'garg@gmail.com', 'kamal', 'male', '8699192345', 'ambala');
