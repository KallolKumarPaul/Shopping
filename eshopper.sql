-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2017 at 02:59 PM
-- Server version: 5.5.58-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eshopper`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `User_id`, `product_id`, `seller_id`, `status`) VALUES
(4, 1, 9, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(254) NOT NULL,
  `brand` varchar(254) NOT NULL,
  `price` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `seller_id`, `name`, `category`, `description`, `brand`, `price`, `stock`, `image`) VALUES
(1, 0, 'Hair drier', 'femaleaccessories', '', '', '1200', 10, 'zesqa-professional-style-ac220v-dryer-hd-111-origi'),
(2, 0, 'Neckless', 'femaleaccessories', '', '', '2200', 20, 'zene-mn-com-54-zeneme-original-imaeaqxzqhefker3.jp'),
(3, 0, 'Hand band', 'femaleaccessories', '', '', '200', 45, 'wjb74-free-size-addic-1-original-imaejwg7zrnbmhzn.'),
(4, 1, 'cosmetic combo', 'femaleaccessories', '', '', '2400', 30, 'wholesale-rate-combo-of-nail-polish-and-rythm-lips'),
(5, 0, 'makeup kit', 'femaleaccessories', '', '', '350', 25, 'tya-tya-m-6007-original-imaeca35cxmgqyzg.jpeg'),
(6, 0, 'Hair straightener', 'femaleaccessories', '', '', '2000', 5, 'tuzech-comb-with-temperature-setting-original-imae'),
(7, 0, 'Ring', 'femaleaccessories', '', '', '515', 50, 'svr0080-8-suvam-jewels-ring-original-imae5mfdvqzyc'),
(8, 0, 'compact', 'femaleaccessories', '', '', '150', 80, 'studio-fix-compact-fond-de-teint-viva-glam-lipstic'),
(9, 1, 'Sliver earing', 'femaleaccessories', '', '', '1050', 35, 'sser1216a-silver-shoppee-huggie-earring-original-i'),
(10, 0, 'Hair style combo kit', 'femaleaccessories', '', '', '5000', 4, 'philips-miss-fresher-s-styling-kit-hp8647-00-origi'),
(11, 0, 'Beer shampoo for men', 'maleaccessories', '', '', '150', 90, 'park-avenue-350-beer-shampoo-damage-free-hair-orig'),
(12, 0, 'oriflam milk hoeny shampoo ', 'femaleaccessories', '', '', '350', 10, 'oriflame-400-milk-honey-shampoo-pack-of-2-original'),
(13, 1, 'matrix hair spa combo', 'femaleaccessories', '', '', '4000', 7, 'opti-care-smooth-straight-hair-spa-with-shampoo-ma'),
(14, 0, 'gold bangales', 'femaleaccessories', '', '', '12000', 2, 'na-2-2-8-17-12bnitin-styylo-fashion-original-imaew'),
(15, 0, 'hand breslate', 'femaleaccessories', '', '', '400', 10, 'na-1-br1100277rblu-mahi-original-imaeyqq8jgr5u7hd.'),
(16, 0, 'Latkan', 'femaleaccessories', '', '', '200', 100, 'latkan-golden-ball-blouse-latkan-ethnic-hanging-ne'),
(17, 0, 'Gold Ring', 'femaleaccessories', '22 carat gold', 'E-Shopper', '450', 50, 'lr-0238yg-iskiuski-original-imaer3cnmx8gguj91.jpeg'),
(18, 0, 'kajal', 'femaleaccessories', '24 hours samsh free', 'maybeline', '450', 8, 'maybelline-2-5-lasting-drama-gel-eye-liner-origina'),
(19, 2, 'makeupkit', 'femaleaccessories', 'long lasting', 'lakme', '3000', 5, 'liquid-last-eyeliner-studio-fix-compact-pro-long-w'),
(20, 0, 'stylish watch', 'femaleaccessories', 'flower design', 'E-Shopper', '1500', 1, 'free-1-wttc-9007-jewels-galaxy-original-imaeqjgqru'),
(21, 0, 'lipstick', 'femaleaccessories', 'longlasting', 'coloressence', '500', 45, 'coloressence-mesmerising-lip-color-4-g-brick-red-6'),
(22, 0, 'foundation with brush', 'femaleaccessories', 'deeply comb', 'coloressence', '399', 40, 'coloressence-aqua-makeup-base-foundation-beige-lf-'),
(23, 3, 'makeup kit', 'femaleaccessories', 'long lasting', 'cameleon', '645', 45, 'cameleon-palette-de-maquillage-makeup-kit-original'),
(24, 0, 'gold chain', 'femaleaccessories', '22 carat gold', 'E-Shopper', '7000', 64, 'bfssp146-double-fashion-original-imaeyfttmuhsgavf.'),
(25, 0, 'shampoo', 'maleaccessories', '100%pure', 'beardo', '250', 5, 'beardo-100-the-classic-beard-wash-original-imaecsx'),
(26, 2, 'shampoo', 'femaleaccessories', 'anti dandrop', 'himalaya', '180', 100, '200-anti-hair-fall-shampoo-himalaya-original-imaeu'),
(27, 0, 'nailpolis', 'femaleaccessories', '100%pure', 'E-Shopper', '80', 3, '80g-debelle-fairness-cream-combo-of-2-debelle-gel-'),
(28, 0, 'eyeshadoo', 'femaleaccessories', '24 hours samsh free', 'E-Shopper', '470', 64, '8-eyeshadow-2-blush-4-lipgloss-kit-6-sivanna-color'),
(29, 0, 'facial kit', 'femaleaccessories', '100%pure', 'vlcc', '749', 60, '1-vlcc-60-party-glow-facial-kit-original-imaebxxu8'),
(30, 0, 'jacket', 'maleclothes', '100%cotton', 'E-Shopper', '560', 100, 'zcmwjaa160023sunset-gold-john-players-m-original-i'),
(31, 0, 't-shirt', 'maleclothes', 'pure cotton', 'E-Shopper', '345', 56, 'xxl-cc201-2-dennis-lingo-original-imaesmvjhzaxzyab'),
(32, 0, 't-shirt', 'maleclothes', 'pure cotton', 'E-Shopper', '345', 56, 'xxl-cc201-2-dennis-lingo-original-imaesmvjhzaxzyab'),
(33, 0, 'cotton jacket', 'maleclothes', '100%cotton', 'E-Shopper', '600', 25, 'xl-ts900905-ghpc-original-imaex2ut7dbtsbhn.jpeg'),
(34, 0, 'kurta', 'maleclothes', '100%cotton', 'E-Shopper', '400', 30, 'svck1398-svanik-l-original-imaebvgjbzrxjgva.jpeg'),
(35, 0, 'straight kurta', 'maleclothes', '100%cotton', 'E-Shopper', '949', 10, 'skurta-412-wi-sanwara-xl-original-imaefgh6cb2kjfqh'),
(36, 0, 'winter jacket', 'maleclothes', 'half sleeve', 'E-Shopper', '1200', 40, 'tj5401-navy-tinted-xl-original-imaehu9bamdkqeuv.jp'),
(37, 0, 'formal shirt', 'maleclothes', '100%cotton', 'E-Shopper', '400', 56, 'mtsh016665-white-blue-mark-taylor-40-original-imae'),
(38, 0, 'winter jacket', 'maleclothes', 'full sleeve', 'E-Shopper', '2000', 70, 'm-rodjkfh3-b-rodid-original-imaeqg77emz8m9hb.jpeg'),
(39, 0, 't-shirt', 'maleclothes', 'full sleeve', 'E-Shopper', '589', 100, 'm-kurta-black-m-vlook-original-imaexf8g4gzypqqm.jp'),
(40, 0, 'blazzer', 'maleclothes', '100%cotton', 'E-Shopper', '3000', 24, '40-isu31703911blackwithwhite-peter-england-origina'),
(41, 0, 'palazo kurti', 'femaleclothes', '100%cotton', 'E-Shopper', '900', 33, 'xxl-kpl346-rangmor-original-imaes8r76vaemvpn.jpeg'),
(42, 0, 'long patiali saloar ', 'femaleclothes', '100%cotton', 'E-Shopper', '345', 23, 'xxl-jne1982-kr-253-janasya-original-imaewn5wtajvhs'),
(43, 0, 'long kurti', 'femaleclothes', '100%cotton', 'E-Shopper', '450', 45, 'xs-g360-orange-gerua-original-imaeshhtfadgdsk9.jpe'),
(44, 0, 'white long kurti', 'femaleclothes', '100%cotton', 'E-Shopper', '230', 12, 'xl-vfku80-vbuyz-original-imaey8e7bd8yfb87.jpeg'),
(45, 0, 'short frock', 'femaleclothes', 'Net work fully', 'E-Shopper', '600', 23, 'xl-drf500809-the-vanca-original-imaewpsx9n5mzdfq.j'),
(46, 0, 'pink top', 'femaleclothes', '100%cotton,color grunted', 'E-Shopper', '340', 44, 'women-s-women-s-tsf400344-the-vanca-s-original-ima'),
(47, 0, 'Black palazo', 'femaleclothes', '100%cotton', 'E-Shopper', '230', 34, 'stoplooknewplz-53-stop-look-l-original-imaeqyhwujw'),
(48, 0, 'white along frock', 'femaleclothes', 'stachble', 'E-Shopper', '600', 45, 's-0032244805-forever-21-original-imaewdzyhxz9ears.'),
(49, 0, 'black frock', 'femaleclothes', '100%cotton', 'E-Shopper', '230', 56, 'new7070e1-cottinfab-xl-original-imaehyyhcrpfdtkw.j'),
(50, 0, 'yellow kurti', 'femaleclothes', 'stachble clothe', 'E-Shopper', '330', 34, 'm-jne1975-kr-309-janasya-original-imaeww9ag3mvgdwv'),
(51, 0, 'jeance jaket', 'femaleclothes', '100% pure jeance', 'E-Shopper', '450', 45, 'l-545jaaf-99-affair-original-imaerek2jffgtxgk.jpeg'),
(52, 0, 'red lagince', 'femaleclothes', 'stachble', 'E-Shopper', '300', 34, 'pamo0228-pamo-l-original-imaegfjvf52pyyec.jpeg'),
(53, 0, 'suti sharee', 'femaleclothes', '100% cotton', 'E-Shopper', '450', 33, 'free-jari123firoji-manipuri-glory-sarees-original-'),
(54, 0, 'blue long frock', 'femaleclothes', 'cotton long frock', 'E-Shopper', '440', 34, 'laao1763b-apn-apnisha-original-imaer5fvrvhywngh.jp'),
(55, 0, 'long frock', 'femaleclothes', 'net work ', 'E-Shopper', '900', 33, 'harkrishna-joya-blue-harikrushna-enterprise-origin'),
(56, 0, 'one piece', 'femaleclothes', 'stachble', 'E-Shopper', '670', 12, 'gr3199-black-harpa-xl-original-imaegtfpw7gmf2z3.jp'),
(57, 0, 'kurti combo', 'femaleclothes', '100%cotton', 'E-Shopper', '670', 45, 'kavya-1109-1207-1215-jevi-prints-original-imaeu5p4'),
(58, 0, 'silk saree', 'femaleclothes', 'pure silk', 'E-Shopper', '700', 30, 'free-dream-girl5050a-kalaa-varsha-original-imaexyp'),
(59, 0, 'yellow kurti', 'femaleclothes', '100%cotton', 'E-Shopper', '380', 12, 'kt107609-black-ives-xs-original-imaenjq8zhnpgsab.j'),
(60, 0, 'top', 'femaleclothes', '100%cotton', 'E-Shopper', '390', 11, 'm-ep1602-pink-rare-original-imaeqct5fbzghe4q.jpeg'),
(61, 0, 'net sharee', 'femaleclothes', 'net work', 'E-Shopper', '1300', 23, 'cord-shree-creation-original-imaegxwsjftybhky.jpeg'),
(62, 0, 'red sharee', 'femaleclothes', '100%cotton', 'E-Shopper', '450', 56, 'free-8d689-divastri-original-imaexppke3g7pfsh.jpeg'),
(63, 0, 'ghagra', 'femaleclothes', '100%cotton', 'E-Shopper', '1300', 23, 'l001-philluri-purple-jul-julee-original-imaeujxmdz'),
(64, 0, 'jeance', 'femaleclothes', 'stachble jeance', 'E-Shopper', '689', 12, 'free-blue-ras-264-fit-n-you-original-imaew9r5c6rwx'),
(65, 0, 'black palazo top', 'femaleclothes', '100%cotton', 'E-Shopper', '780', 12, 's-efg1449black-eyelet-original-imaeyn9n5yjzyb9v.jp'),
(66, 0, 'patiali shut', 'femaleclothes', '100%cotton', '12', '670', 23, 'ea3955jodha-3-ethnic-adda-original-imae9sxfaeqaeza'),
(67, 0, 'sky top', 'femaleclothes', '100%cotton', 'E-Shopper', '340', 12, 'l-16208-10-u-f-original-imaeux2j69ehrqgw.jpeg'),
(68, 0, 'black one piece', 'femaleclothes', 'silk clothe', 'E-Shopper', '450', 4, 'gr3310-navy-harpa-xl-original-imaejwhbdtgeazmu.jpe'),
(69, 0, 'banarasi silk', 'femaleclothes', '100%cotton', 'E-Shopper', '3000', 5, 'free-pari2-ramapink-ssf-we-have-koto-doria-jali-br'),
(70, 0, 'top combo', 'femaleclothes', '100%cotton', 'E-Shopper', '800', 7, 'kk-229-slipp-41-piftif-l-original-imaefqjvdurwjc6h'),
(71, 0, 'suti patiali', 'femaleclothes', '100%cotton', 'E-Shopper', '450', 34, '522d4011-divastri-original-imaeuvfwmvdfv83q.jpeg'),
(72, 0, 'black top', 'femaleclothes', '100%cotton', 'E-Shopper', '450', 11, 'gr3747-navy-harpa-l-original-imaep8pvkqhhrhs6.jpeg'),
(73, 0, 'red silk', 'femaleclothes', '100%cotton', 'E-Shopper', '1300', 1, '2034-aai-shree-khodiyar-art-original-imaewpecdjndc'),
(74, 0, 'baluchori shree', 'femaleclothes', '100% silk', 'E-Shopper', '3400', 12, 'free-swaya-radhikamaroon-ishin-original-imaexuzsym'),
(75, 0, 'long saloar', 'femaleclothes', '100% cotton', 'E-Shopper', '1500', 23, 'dss9109a-cottinfab-m-original-imaejrrypwgc8v7h.jpe'),
(76, 5, 'combo kurti', 'femaleclothes', '100%cotton', 'E-Shopper', '670', 12, 'm-blueprintexmustardtailcut38-stylum-original-imae'),
(77, 0, 'black shipon', 'femaleclothes', 'shipon silk', 'E-Shopper', '1780', 12, '1-1-1023-mirchi-fashion-original-imaek6c4qv3reveg.'),
(78, 0, 'pink lhenga', 'femaleclothes', 'stone work', 'E-Shopper', '7200', 12, 'saidsolder0144-mychoicefashion-original-imaejzuffr'),
(79, 0, 'bajirao shut', 'kidsclothes', '100%cotton', 'E-Shopper', '900', 23, 'emp3663-saarah-green-9-10-years-original-imaeq3srg'),
(80, 0, 'jaket', 'kidsclothes', 'soft and 1oo% cotton', 'E-Shopper', '349', 34, '616-g-p-shaun-12-13-years-original-imae3qg25ws3kyq'),
(81, 0, 'ghagra', 'kidsclothes', 'net and stone work', 'E-Shopper', '3400', 6, '5-6-years-green-emp3343-nlc-saarah-original-imaeqr'),
(82, 0, 'long frock', 'kidsclothes', 'net work', 'E-Shopper', '900', 23, '144-12-13-years-g-sr-2-pink-aarika-156-original-im'),
(83, 0, 'long skirt', 'kidsclothes', '100%cotton', 'E-Shopper', '579', 5, 'lcs071-tiny-toon-12-13-years-original-imaegvzrdz7g'),
(84, 0, 'ghagra', 'kidsclothes', ' fullynet work', 'E-Shopper', '3400', 34, '11-12-years-pink-emp3516-haazra-original-imaemx9zw'),
(85, 0, 'frock', 'kidsclothes', '100%cotton', 'E-Shopper', '330', 12, '250-green-little-life-4-5-years-original-imaeh6w5b'),
(86, 0, 'winter jacket', 'kidsclothes', 'waterproof jaket', 'E-Shopper', '567', 10, 'crfljckt-d3pk-crazeis-5-6-years-original-imaezhgtg'),
(87, 0, 't-shirt combo', 'kidsclothes', '100%cotton', 'E-Shopper', '900', 11, 'dlf450-petrol-white-gyellow-s-1-dongli-xxl-origina'),
(88, 0, 'short skirt', 'kidsclothes', '100%cotton', 'E-Shopper', '340', 4, 'm-skt9001-kids-mandi-original-imae9zfnhfh4ngya.jpe'),
(89, 0, 'police dress', 'kidsclothes', 'voil dress', 'E-Shopper', '450', 12, '18-24-months-black-beige-arm001-ftc-bazar-original'),
(90, 0, 't-shirt', 'kidsclothes', '100%cotton', 'E-Shopper', '250', 34, '10-11-years-dark-blue-blblueroyal-bluntly-original'),
(91, 0, 'modi court', 'kidsclothes', '100%cotton', 'E-Shopper', '456', 34, '12-18-months-163-black-ahhaaaa-original-imaeun43zc'),
(92, 0, 'modi panjabi', 'kidsclothes', '100%cotton', 'E-Shopper', '940', 22, '3-4-years-vasbjk059co-brown-and-gold-jbn-creation-'),
(93, 0, 'red cangan', 'femaleaccessories', 'stone work', 'E-Shopper', '349', 11, '2-6-2-b9-2-6-stilettos-original-imaeynnbzjzk2f5s.j'),
(94, 0, 'raincort', 'kidsclothes', 'waterproof', 'E-Shopper', '440', 12, '9-10-years-rc550pk-burdy-original-imaew3agjuh35guj'),
(95, 0, 'francy dress', 'kidsclothes', 'fully fancy dress', 'E-Shopper', '500', 23, '36-kfd560-22-kfd-48-original-imaevt5dvmebr2cw.jpeg'),
(96, 0, 'black jaket', 'kidsclothes', 'waterproof jaket', 'E-Shopper', '589', 12, '8-9-years-ukjk5244black-us-polo-kids-original-imae'),
(97, 0, 'joypuriya dress', 'kidsclothes', '100%cotton', 'E-Shopper', '789', 12, '6-7-years-blue-pt-sj-01-blue-aarika-original-imaev'),
(98, 0, 'winter jaket', 'kidsclothes', '100% cotton', 'E-Shopper', '450', 44, '2-3-years-516-jacket-fullsleeve-blueskyblue-aa-ad-'),
(99, 0, 'panjabi', 'kidsclothes', '100%cotton', 'E-Shopper', '1000', 12, '6-7-years-vasbsw120ma-black-and-maroon-jbn-creatio'),
(100, 0, 'black top', 'kidsclothes', '100%cotton', 'E-Shopper', '230', 12, '4-5-years-507-sweater-alphabat-black-aa-ad-av-orig'),
(101, 0, 'shirt', 'kidsclothes', '100%cotton', 'E-Shopper', '450', 10, '2-3-years-om799-bella-moda-original-imaewqruecutqg');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ratings` int(5) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `name`, `email`, `designation`, `status`, `password`, `ratings`, `image`) VALUES
(1, 'Sagar Dolui', 'sagar03d@gmail.com', 'Web Developer', 'Truth will be out', '202cb962ac59075b964b07152d234b70', 0, 'seller.jpg'),
(2, 'Sagar Dolui', 'sagar03d@gmail.com', 'Web Developer', 'Truth will be out', '202cb962ac59075b964b07152d234b70', 0, ''),
(3, 'Sagar Dolui', 'sagar03d@gmail.com', 'Web Developer', 'Truth will be out', '202cb962ac59075b964b07152d234b70', 0, 'Screenshot_from_2017-10-25_20-47-41.png'),
(6, 'Sagar Dolui', 'sagar03d@gmail.com', 'Web Developer', 'Truth will be out', '202cb962ac59075b964b07152d234b70', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(254) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` int(12) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(254) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `address`, `pincode`, `mobile`, `location`, `gender`, `image`) VALUES
(1, 'kallol', 'kallol@gmail.com', 'fccd34167ebae90b38af872f60eb1a38', 'nandanpur', 700137, '2147483647', 'Mumbai', 'Male', 'ghjg2.jpg'),
(2, 'as', 'aa@a.a', 'd7afde3e7059cd0a0fe09eec4b0008cd', 'aaa', 0, '0', 'Kolkata', 'Male', ''),
(3, 'aa', 'admin@gmail.com', 'ad79e2cd5fd5ae53547d991007344847', 'aaa', 0, '0', 'Kolkata', 'Male', ''),
(4, 'aa', 'admin@gmail.com', 'd7afde3e7059cd0a0fe09eec4b0008cd', 'a', 21, '12', 'Mumbai', 'Male', ''),
(5, 'aa', 'admin@gmail.com', 'd7afde3e7059cd0a0fe09eec4b0008cd', 'a', 21, '12', 'Mumbai', 'Male', ''),
(6, 'sagar', 'sagar@gmail.com', '782abf6af6138cd838b59017978837df', 'kalikapur', 700136, '2147483647', 'Mumbai', 'Male', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE IF NOT EXISTS `user_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `phone` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`id`, `product_id`, `user_name`, `address`, `address2`, `phone`) VALUES
(1, 0, '1', '0', '138', '0'),
(2, 2, 'Sagar Dolui', '138, hossainpur', '', '2147483647'),
(3, 1, 'Sagar Dolui', '138, hossainpur', '', '2147483647'),
(4, 2, 'Sagar Dolui', '138, hossainpur', '', '2147483647'),
(5, 1, 'Sagar Dolui', '138, hossainpur', '', '2147483647'),
(6, 2, 'Sagar Dolui', '138, hossainpur', '', '2147483647'),
(7, 1, 'Sagar Dolui', '138, hossainpur', '1', '2147483647'),
(8, 1, 'Kallol', 'nandanpur', 'budge budge', '2147483647'),
(9, 1, 'Sudip Karmakar', 'fgdzf', 'dfgdfg', '154654');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
