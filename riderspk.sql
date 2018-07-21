-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 04:49 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riderspk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `type` varchar(6) NOT NULL,
  `carposts` int(11) NOT NULL,
  `bikeposts` int(11) NOT NULL,
  `hbikeposts` int(11) NOT NULL,
  `allpost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `username`, `email`, `password`, `type`, `carposts`, `bikeposts`, `hbikeposts`, `allpost`) VALUES
(1, 'hamza', 'hamza@pakriders.com', '12345', 'admin', 18, 10, 9, 37),
(2, 'hassan', 'hassan@riderspk.com', 'hassan123', 'editor', 17, 10, 9, 36);

-- --------------------------------------------------------

--
-- Table structure for table `bikeposts`
--

CREATE TABLE `bikeposts` (
  `post_id` int(11) NOT NULL,
  `author` text NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  `company` text NOT NULL,
  `year` text NOT NULL,
  `model` text NOT NULL,
  `pmaxl` int(11) NOT NULL,
  `pmaxt` int(11) NOT NULL,
  `pminl` int(11) NOT NULL,
  `pmint` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img1thumb` text NOT NULL,
  `img2thumb` text NOT NULL,
  `img3thumb` text NOT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `sdesp` text NOT NULL,
  `desp` text NOT NULL,
  `pc` int(6) NOT NULL,
  `start` int(6) NOT NULL,
  `engine` text NOT NULL,
  `edisp` int(6) NOT NULL,
  `type` text NOT NULL,
  `millage` int(6) NOT NULL,
  `gearbox` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bikeposts`
--

INSERT INTO `bikeposts` (`post_id`, `author`, `created`, `updated`, `company`, `year`, `model`, `pmaxl`, `pmaxt`, `pminl`, `pmint`, `img1`, `img2`, `img3`, `img1thumb`, `img2thumb`, `img3thumb`, `img4`, `img5`, `sdesp`, `desp`, `pc`, `start`, `engine`, `edisp`, `type`, `millage`, `gearbox`) VALUES
(10, 'hamza', '2018-06-10', '2018-06-09', 'Suzuki', '2018', 'Suzuki CR 70', 0, 0, 0, 0, '028500f599a5371244b86fcdacfe807b1.jpg', '1591f2bde21b851fa1e85dfb002e8af32.jpg', '89aa4d6a3751f7a295672f5fd69090c83.jpg', '464ce2c938307b5f8ddff8ab34324af41thumb.jpg', '552940832e00956e64de2973674ce1602thumb.jpg', '2a40def0a135c1cdcfda4023e75825ee3thumb.jpg', '', '', 'Honda 125 has been a style icon for several decades; An icon of style, perfection, and power. Honda CG 125 is a perfect tough roadmaster for all \r\nkinds of roads and never lets you down when it comes to comfort and economy. Honda 125 is a stunning outcome of latest Japanese technology to \r\nsurvive and run the best performance in all conditions. \r\n', '\r\nThe fascinating silencer modification looks enthralling with the eye-catching tank graphics. Honda CG 125 2018 now comes with Euro II technology \r\n\r\noffering great miles per kilometre on the road while keeping a good balance of performance and road grip. A fuel tank capacity of 12L ensures that \r\n\r\nyou donâ€™t stop halfway down for refuelling. Honda 125 is unbeatable and unmatchable.\r\n', 10, 1, '1.8 Litre SOHC 16 Valve Engine', 600, '1', 18, '5-Speed'),
(11, 'hamza', '2018-06-11', '2018-06-09', 'Honda', '2019', 'Honda Cd 70', 0, 0, 0, 0, '028500f599a5371244b86fcdacfe807b1.jpg', '1591f2bde21b851fa1e85dfb002e8af32.jpg', '89aa4d6a3751f7a295672f5fd69090c83.jpg', '552940832e00956e64de2973674ce1602thumb.jpg', '464ce2c938307b5f8ddff8ab34324af41thumb.jpg', '2a40def0a135c1cdcfda4023e75825ee3thumb.jpg', '', '', 'Honda 125 has been a style icon for several decades; An icon of style, perfection, and power. Honda CG 125 is a perfect tough roadmaster for all \r\nkinds of roads and never lets you down when it comes to comfort and economy. Honda 125 is a stunning outcome of latest Japanese technology to \r\nsurvive and run the best performance in all conditions. \r\n', '\r\nThe fascinating silencer modification looks enthralling with the eye-catching tank graphics. Honda CG 125 2018 now comes with Euro II technology \r\n\r\noffering great miles per kilometre on the road while keeping a good balance of performance and road grip. A fuel tank capacity of 12L ensures that \r\n\r\nyou donâ€™t stop halfway down for refuelling. Honda 125 is unbeatable and unmatchable.\r\n', 10, 1, '1.8 Litre SOHC 16 Valve Engine', 900, '1', 22, '4-Speed'),
(12, 'hamza', '2018-06-23', '2018-06-23', 'Crown', '2019', 'Crown CW 14', 3, 0, 2, 10, 'c870df9b2bffa021cb7fb3d6286680861.jpg', '192de353f2ce1b6bfb7829b24eaf5b862.jpg', '0dd6bf7e9404a36f85a6bbd0324b5f863.jpg', 'd12be7eb8457ed3842a7b8b5fab817181thumb.jpg', 'f1c7c3a7670c3ad5f7837d40f58442f62thumb.jpg', '59092f5e3d65c6046bdd043689df862c3thumb.jpg', '', '', 'Yamaha Ybr 125 simply feels like more than a two-wheeler. Yamaha Ybr 125 does not disappoint its buyers at any point in time. Yamaha Ybr 125- A taste of superiority. One can also find this motorcycle on PakWheels listings.', 'The road grip of Yamaha Ybr 125 simply feels like more than a two-wheeler. Yamaha Ybr 125 does not disappoint its buyers at any point in time. Yamaha Ybr 125- A taste of superiority. One can also find this motorcycle on PakWheels listings.The road grip of Yamaha Ybr 125 simply feels like more than a two-wheeler. Yamaha Ybr 125 does not disappoint its buyers at any point in time. Yamaha Ybr 125- A taste of superiority. One can also find this motorcycle on PakWheels listings.', 10, 1, '1 Liter 2 Valve Engine', 1600, '1', 30, '5-Speed'),
(15, 'hamza', '2018-06-30', '2018-06-30', 'Hero', '2019', 'Hero Black', 2, 50, 2, 0, '100436a41126b2429fdab8ef95401de11.jpg', '76a6bd5f15a0e709588c98f01ead7b582.jpg', '041570d15a07ccb7f0db0da9b236076d3.jpg', '3ae64127ad5f8fee2f53b34ca987f7b61thumb.jpg', '700a972828a6cb79a560fd0f4d7763242thumb.jpg', '6f616d447bed94a793173c1baf863b6f3thumb.jpg', '', '', 'The fascinating silencer modification looks enthralling with the eye-catching tank graphics. Honda CG 125 2018 now comes with Euro II technology offering great miles per kilometre on the road while keeping a good balance of performance and road grip. A fuel tank capacity of 12L ensures that you donâ€™t stop halfway down for refuelling. Honda 125 is unbeatable and unmatchable.\r\n', 'Hero fascinating silencer modification looks enthralling with the eye-catching tank graphics. Honda CG 125 2018 now comes with Euro II technology offering great miles per kilometre on the road while keeping a good balance of performance and road grip. A fuel tank capacity of 12L ensures that you donâ€™t stop halfway down for refuelling. Honda 125 is unbeatable and unmatchable.The fascinating silencer modification looks enthralling with the eye-catching tank graphics. Honda CG 125 2018 now comes with Euro II technology offering great miles per kilometre on the road while keeping a good balance of performance and road grip. A fuel tank capacity of 12L ensures that you donâ€™t stop halfway down for refuelling. Honda 125 is unbeatable and unmatchable.\r\n\r\n\r\n', 20, 1, '\r\n1.3 Liter DOHC 16 Valve Engine', 1800, '2', 35, '4-Speed'),
(16, 'hamza', '2018-07-02', '2018-07-02', 'Ravi', '2019', 'Ravi Prince 125', 2, 0, 1, 50, 'f0f17f87c8f1186223a673c6694d14971.jpg', '8065d09c1e30193bba8310e32bd4688a2.jpg', '8d4bcd13f25b1bfcb6ae270a6edf2cd73.jpg', '96c5effdcfbabf2474161562bbb7956b1thumb.jpg', '3e4c72bfe1653f3c647f884e3ac355a82thumb.jpg', 'bbeb291221974f1691540eed7387d3a73thumb.jpg', '', '', 'offering great miles per kilometre on the road while keeping a good balance of performa\r\n', 'The fascinating silencer modification looks enthralling with the eye-catching tank graphics. Honda CG 125 2018 now comes with Euro II technology \r\n\r\noffering great miles per kilometre on the road while keeping a good balance of performance and road grip. A fuel tank capacity of 12L ensures that \r\n\r\nyou donÃ¢â‚¬â„¢t stop halfway down for refuelling. Honda 125 is unbeatable and unmatchable.\r\n', 16, 2, '1 Liter 2 Valve Engine', 600, '1', 32, '4-Speed'),
(17, 'hamza', '2018-07-05', '2018-07-05', 'Eagle', '2019', 'Eagle Hond', 2, 5, 4, 0, '875c83172320509c9657776748c066271.jpg', 'ab2f4b8d1bed210342ac5f13397fdb3a2.jpg', '5b8347abfe110b8f5064e9364e2e572b3.jpg', '284d12a47a2a91b8c4064f58be33a9651thumb.jpg', 'c31b168df7bd29868cbf71939e20486f2thumb.jpg', '9e33b5c8f37682a72e39e7c22053bc373thumb.jpg', '', '', '2018 interior comprises of black and beige plastic trim pieces. The front and rear seats are covered in ivory fabric. Standard features of the base variant includes air conditioning, infotainment system, power steering and tachometer. while higher variants have satellite navigations, leather upholstery,multifunction steering wheel switches, two airbags, cruise control, front and rear camera, paddle shift and sunroof. Toyota Corolla 2018 cabin is very spacious, practical and luxurious\r\n', '2018 interior comprises of black and beige plastic trim pieces. The front and rear seats are covered in ivory fabric. Standard features of the base variant includes air conditioning, infotainment system, power steering and tachometer. while higher variants have satellite navigations, leather upholstery,multifunction steering wheel switches, two airbags, cruise control, front and rear camera, paddle shift and sunroof. Toyota Corolla 2018 cabin is very spacious, practical and luxurious\r\n2018 interior comprises of black and beige plastic trim pieces. The front and rear seats are covered in ivory fabric. Standard features of the base variant includes air conditioning, infotainment system, power steering and tachometer. while higher variants have satellite navigations, leather upholstery,multifunction steering wheel switches, two airbags, cruise control, front and rear camera, paddle shift and sunroof. Toyota Corolla 2018 cabin is very spacious, practical and luxurious\r\n', 15, 3, '1 Liter 2 Valve Engine', 1000, '1', 40, '4-Speed'),
(18, 'hamza', '2018-07-05', '2018-07-05', 'Honda', '2019', 'Honda Frod', 5, 0, 4, 0, '59ef1f7ddb500a25530b8f9ae5f682bf1.jpg', 'cab6eec0c6c1ef101ed46c4419ae5dcb2.jpg', '1a17175ce468845342f23e59fcba67ce3.jpg', 'f94120ccf22fd35f68dde19e7937fe4b1thumb.jpg', '2deb5471ff01d15d9c726c95e7a53aac2thumb.jpg', '00a14e107a47ac9235e6df2a0a35c5d13thumb.jpg', '', '', 'black and polished silver plastic trim pieces. Honda Civic front and rearseats trims are available in a combination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio system, 5.0-inch multi-information display, traction control, electronic stability control, power door mirrors, push button start and keyless entry. Options include leather seats, cruise control and navigation.\r\n', 'black and polished silver plastic trim pieces. Honda Civic front and rearseats trims are available in a combination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio system, 5.0-inch multi-information display, traction control, electronic stability control, power door mirrors, push button start and keyless entry. Options include leather seats, cruise control and navigation.\r\nblack and polished silver plastic trim pieces. Honda Civic front and rearseats trims are available in a combination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio system, 5.0-inch multi-information display, traction control, electronic stability control, power door mirrors, push button start and keyless entry. Options include leather seats, cruise control and navigation.\r\n', 20, 3, '', 500, '1', 25, '4-Speed'),
(19, 'hamza', '2018-07-05', '2018-07-05', 'Unique', '2018', 'Unique 70', 1, 0, 1, 50, '1647c69c980ac76dd1bbbfef18e8832e1.jpg', '84f61eeec0091d6bfe068b65be648bc12.jpg', '8cd6b8182fd028f7a88176402ba5096f3.jpg', 'a2e32f3bc51a7789eda787a3ed5435fd1thumb.jpg', '57571c828fcee0ac8b8d1b120511d9d22thumb.jpg', 'd33b93e512749002960ffeff5d99028e3thumb.jpg', '', '', 'black and polished silver plastic trim pieces. Honda Civic front and rearseats trims are available in a combination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio system, 5.0-inch multi-information display, traction control, electronic stability control, power door mirrors, push button start and keyless entry. Options include leather seats, cruise control and navigation.\r\nblack and polished silver plastic trim pieces. Honda Civic front and rearseats trims are available in a combination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio system, 5.0-inch multi-information display, traction control, electronic stability control, power door mirrors, push button start and keyless entry. Options include leather seats, cruise control and navigation.\r\nblack and polished silver plastic trim pieces. Honda Civic front and rearseats trims are available in a combination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio system, 5.0-inch multi-information display, traction control, electronic stability control, power door mirrors, push button start and keyless entry. Options include leather seats, cruise control and navigation.\r\n', 'black and polished silver plastic trim pieces. Honda Civic front and rearseats trims are available in a combination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio system, 5.0-inch multi-information display, traction control, electronic stability control, power door mirrors, push button start and keyless entry. Options include leather seats, cruise control and navigation.\r\nblack and polished silver plastic trim pieces. Honda Civic front and rearseats trims are available in a combination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio system, 5.0-inch multi-information display, traction control, electronic stability control, power door mirrors, push button start and keyless entry. Options include leather seats, cruise control and navigation.\r\n', 20, 1, 'Air Cool', 200, '1', 35, '4-Speed'),
(20, 'hamza', '2018-07-05', '2018-07-05', 'Sohrab', '2014', 'Sohrab Spear 125', 2, 0, 3, 0, 'bba7a9d365e7080ec33d092175ec72151.jpg', '93cd07254dd5a85a1a455dcc12370e402.jpg', 'a6aaa8d5ae43dc072e71d31d7f6bd2f53.jpg', '0215e9bb8222ca65679e043a1e31377a1thumb.jpg', '232ccade656717dc4f42011753c802302thumb.jpg', '62cbc70f617666775fc27ffd286369b93thumb.jpg', '', '', 'The panoramic sunroof of new Vitara consists of two glass panels, both of which can be slid. Moreover, for big families and for traveling, thereâ€™s plenty of luggage space, to be exact 375 liters. The meter cluster, tilt and telescopic steering wheel, paddle shifters, cruise control and automatic wipers and lights are some of the prominent features you can enjoy, as you drive the all-new Suzuki Vitara.', 'The panoramic sunroof of new Vitara consists of two glass panels, both of which can be slid. Moreover, for big families and for traveling, thereâ€™s plenty of luggage space, to be exact 375 liters. The meter cluster, tilt and telescopic steering wheel, paddle shifters, cruise control and automatic wipers and lights are some of the prominent features you can enjoy, as you drive the all-new Suzuki Vitara.', 35, 1, '1.6 Liter DOHC 1 Valve Engine', 600, '1', 50, '4-Speed'),
(21, 'hamza', '2018-06-09', '2018-06-09', 'Honda', '2019', 'Honda 125', 1, 50, 1, 0, '028500f599a5371244b86fcdacfe807b1.jpg', '1591f2bde21b851fa1e85dfb002e8af32.jpg', '89aa4d6a3751f7a295672f5fd69090c83.jpg', '464ce2c938307b5f8ddff8ab34324af41thumb.jpg', '552940832e00956e64de2973674ce1602thumb.jpg', '2a40def0a135c1cdcfda4023e75825ee3thumb.jpg', '', '', 'Honda 125 has been a style icon for several decades; An icon of style, perfection, and power. Honda CG 125 is a perfect tough roadmaster for all \r\nkinds of roads and never lets you down when it comes to comfort and economy. Honda 125 is a stunning outcome of latest Japanese technology to \r\nsurvive and run the best performance in all conditions. \r\n', '\r\nThe fascinating silencer modification looks enthralling with the eye-catching tank graphics. Honda CG 125 2018 now comes with Euro II technology \r\n\r\noffering great miles per kilometre on the road while keeping a good balance of performance and road grip. A fuel tank capacity of 12L ensures that \r\n\r\nyou donâ€™t stop halfway down for refuelling. Honda 125 is unbeatable and unmatchable.\r\n', 25, 2, '1.8 Litre SOHC 16 Valve Engine', 600, '2', 18, '4-Speed');

-- --------------------------------------------------------

--
-- Table structure for table `biketype`
--

CREATE TABLE `biketype` (
  `typeid` int(11) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biketype`
--

INSERT INTO `biketype` (`typeid`, `type`) VALUES
(1, 'Standard Bike'),
(2, 'Sports Bike'),
(3, 'Standard and Sports Bike');

-- --------------------------------------------------------

--
-- Table structure for table `bmakers`
--

CREATE TABLE `bmakers` (
  `bmkval` int(11) NOT NULL,
  `bmakers` varchar(22) NOT NULL,
  `cdetails` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bmakers`
--

INSERT INTO `bmakers` (`bmkval`, `bmakers`, `cdetails`) VALUES
(1, 'Honda', 'Honda Motor Company, Ltd. is a Japanese public multinational conglomerate corporation primarily known as a manufacturer of automobiles, aircraft, motorcycles, and power equipment.'),
(2, 'Suzuki', 'Suzuki Motor Corporation is a Japanese multinational corporation headquartered in Minami-ku, Hamamatsu, that manufactures automobiles, four-wheel drive vehicles, motorcycles, all-terrain vehicles, '),
(3, 'Yamaha', 'Yamaha Motor Company Limited is a Japanese manufacturer of motorcycles, marine products such as boats and outboard motors, and other motorized products.'),
(4, 'Unique', 'Unique - D.S.Motors Pvt. Ltd was established in 2004 with a sole aim to be the market leader in the industry.'),
(6, 'Crown', 'Crown Motor CompanyCrown Motor Company is looking forward to introduce CROWN, A Hallmark of high equality of best technology in the market.'),
(8, 'Eagle', 'Motor vehicle company in Lahore, Pakistan'),
(10, 'Hero', 'Hero Motocorp Ltd., formerly Hero Honda, is an Indian motorcycle and scooter manufacture'),
(14, 'Pak Hero', ''),
(16, 'Ravi', ''),
(17, 'Road Prince', ''),
(18, 'Sohrab', ''),
(20, 'Super Asia', ''),
(21, 'Super Power', '');

-- --------------------------------------------------------

--
-- Table structure for table `bpc`
--

CREATE TABLE `bpc` (
  `id` int(11) NOT NULL,
  `capacity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bpc`
--

INSERT INTO `bpc` (`id`, `capacity`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '15'),
(16, '16'),
(17, '17'),
(18, '18'),
(19, '19'),
(20, '20'),
(21, '21'),
(22, '22'),
(23, '23'),
(24, '24'),
(25, '25'),
(26, '26'),
(27, '27'),
(28, '28'),
(29, '29'),
(30, '30'),
(31, '31'),
(32, '32'),
(33, '33'),
(34, '34'),
(35, '35');

-- --------------------------------------------------------

--
-- Table structure for table `bs`
--

CREATE TABLE `bs` (
  `id` int(11) NOT NULL,
  `start` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bs`
--

INSERT INTO `bs` (`id`, `start`) VALUES
(1, 'Self Start'),
(2, 'Kick Start'),
(3, 'Self and Kick Start');

-- --------------------------------------------------------

--
-- Table structure for table `carposts`
--

CREATE TABLE `carposts` (
  `post_id` int(11) NOT NULL,
  `author` text NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  `company` varchar(14) NOT NULL,
  `year` text NOT NULL,
  `model` text NOT NULL,
  `pmaxl` int(11) NOT NULL,
  `pmaxt` int(11) NOT NULL,
  `pminl` int(11) NOT NULL,
  `pmint` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img1thumb` text NOT NULL,
  `img2thumb` text NOT NULL,
  `img3thumb` text NOT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `sdesp` text NOT NULL,
  `desp` text NOT NULL,
  `inter` text NOT NULL,
  `exter` text NOT NULL,
  `engine` text NOT NULL,
  `edisp` int(6) NOT NULL,
  `transmission` text NOT NULL,
  `gearbox` text NOT NULL,
  `millage` int(6) NOT NULL,
  `pc` int(6) NOT NULL,
  `fuel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carposts`
--

INSERT INTO `carposts` (`post_id`, `author`, `created`, `updated`, `company`, `year`, `model`, `pmaxl`, `pmaxt`, `pminl`, `pmint`, `img1`, `img2`, `img3`, `img1thumb`, `img2thumb`, `img3thumb`, `img4`, `img5`, `sdesp`, `desp`, `inter`, `exter`, `engine`, `edisp`, `transmission`, `gearbox`, `millage`, `pc`, `fuel`) VALUES
(64, 'hamza', '2018-06-09', '2018-06-09', 'Honda', '2019', 'Honda Civic', 0, 0, 0, 0, 'f5a25ce4d04144e687b02852d1e36bd31.jpg', '3b43098ccfeb3e813b4d080bf00910462.jpg', '0f40f3419e7a365e11e69c102e9ed4c93.jpg', '0ffd324c96c36f07a70758eedd4b0fc31thumb.jpg', '73a3e6b246531b5b185a0db465ccd7ca2thumb.jpg', '2dd5e1b2141d364deb8c2f9eea6e318f3thumb.jpg', '', '', 'Honda 2018 exterior specifications include a brand new and more aggressive design language. Honda Civic 2018 front end houses sleek HIDs with \r\n\r\nintegrated LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. \r\n\r\nHonda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.Options include Modulo kit, door edge guards and \r\n\r\ndoor visors.', 'Honda 2018 interior comprises of black and polished silver plastic trim pieces. Honda Civic front and rearseats trims are available in a \r\n\r\ncombination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio \r\n\r\nsystem, 5.0-inch multi-information display, traction control, electronic stability control, power door mirrors, push button start and keyless \r\n\r\nentry', 'The Honda 2018 interior comprises of black and polished silver plastic trim pieces. Honda Civic front and rearseats trims are available in a \r\n\r\ncombination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio \r\n\r\nsystem, 5.0-inch multi-information display, traction control, electronic stability control, power door mirrors, push button start and keyless \r\n\r\nentry', 'Honda 2018 exterior specifications include a brand new and more aggressive design language. Honda Civic 2018 front end houses sleek HIDs with \r\n\r\nintegrated LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. \r\n\r\nHonda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.Options include Modulo kit, door edge guards and \r\n\r\ndoor visors.', '1.6 Liter DOHC 16 Valve Engine', 500, 'manual', '4-speed', 20, 30, 'Petrol'),
(65, 'hamza', '2018-06-09', '2018-06-09', 'Suzuki', '2018', 'Suzuki Cultus', 0, 0, 0, 0, 'f5a25ce4d04144e687b02852d1e36bd31.jpg', '3b43098ccfeb3e813b4d080bf00910462.jpg', '0f40f3419e7a365e11e69c102e9ed4c93.jpg', '73a3e6b246531b5b185a0db465ccd7ca2thumb.jpg', '0ffd324c96c36f07a70758eedd4b0fc31thumb.jpg', '2dd5e1b2141d364deb8c2f9eea6e318f3thumb.jpg', '', '', 'Honda 2018 exterior specifications include a brand new and more aggressive design language. Honda Civic 2018 front end houses sleek HIDs with \r\n\r\nintegrated LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. \r\n\r\nHonda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.Options include Modulo kit, door edge guards and \r\n\r\ndoor visors.', 'Honda 2018 interior comprises of black and polished silver plastic trim pieces. Honda Civic front and rearseats trims are available in a \r\n\r\ncombination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio \r\n\r\nsystem, 5.0-inch multi-information display, traction control, electronic stability control, power door mirrors, push button start and keyless \r\n\r\nentry', 'The Honda 2018 interior comprises of black and polished silver plastic trim pieces. Honda Civic front and rearseats trims are available in a \r\n\r\ncombination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio \r\n\r\nsystem, 5.0-inch multi-information display, traction control, electronic stability control, power door mirrors, push button start and keyless \r\n\r\nentry', 'Honda 2018 exterior specifications include a brand new and more aggressive design language. Honda Civic 2018 front end houses sleek HIDs with \r\n\r\nintegrated LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. \r\n\r\nHonda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.Options include Modulo kit, door edge guards and \r\n\r\ndoor visors.', '1.6 Liter DOHC 16 Valve Engine', 1000, 'automatic', '4-speed', 15, 20, 'Petrol'),
(66, 'hamza', '2018-06-09', '2018-06-09', 'Suzuki', '2019', 'Suzuki Cultus', 7, 50, 6, 0, 'f5a25ce4d04144e687b02852d1e36bd31.jpg', '3b43098ccfeb3e813b4d080bf00910462.jpg', '0f40f3419e7a365e11e69c102e9ed4c93.jpg', '73a3e6b246531b5b185a0db465ccd7ca2thumb.jpg', '2dd5e1b2141d364deb8c2f9eea6e318f3thumb.jpg', '0ffd324c96c36f07a70758eedd4b0fc31thumb.jpg', '', '', 'Honda 2018 exterior specifications include a brand new and more aggressive design language. Honda Civic 2018 front end houses sleek HIDs with \r\n\r\nintegrated LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. \r\n\r\nHonda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.Options include Modulo kit, door edge guards and \r\n\r\ndoor visors.', 'Honda 2018 interior comprises of black and polished silver plastic trim pieces. Honda Civic front and rearseats trims are available in a \r\n\r\ncombination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio \r\n\r\nsystem, 5.0-inch multi-information display, traction control, electronic stability control, power door mirrors, push button start and keyless \r\n\r\nentry', 'The Honda 2018 interior comprises of black and polished silver plastic trim pieces. Honda Civic front and rearseats trims are available in a \r\n\r\ncombination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio \r\n\r\nsystem, 5.0-inch multi-information display, traction control, electronic stability control, power door mirrors, push button start and keyless \r\n\r\nentry', 'Honda 2018 exterior specifications include a brand new and more aggressive design language. Honda Civic 2018 front end houses sleek HIDs with \r\n\r\nintegrated LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. \r\n\r\nHonda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.Options include Modulo kit, door edge guards and \r\n\r\ndoor visors.', '1.6 Liter DOHC 16 Valve Engine', 600, 'manual', '5-speed', 20, 25, 'Petrol'),
(67, 'hamza', '2018-06-22', '2018-06-22', 'Toyota', '2019', 'Toyota Corolla', 0, 0, 0, 0, '0eedd1e551e0d4a07015a0f2503a12dd1.jpg', 'f5854f31528da706ca024335639662f01.png', '1fda948bb8acf3530fc87c0f7298a3441.png', '4a758b1ebbfd6b76c7e6891caeeefcd81thumb.jpg', '95877a49591d929b39c9651e83b7f4c51thumb.jpg', 'c6ae017e873fcbe3bb0798a09b85c4b71thumb.jpg', '', '', 'Honda 2018 Exterior features a brand new more modern and premium design language. The front end houses sleek narrow side swept headlights, a large grille with a chrome accent and a trapezium air intake. The rear end houses sleek sharp side swept taillights, a large rear bumper and a chrome trim piece running the length of the trunk. All variants of the Toyota Corolla 2018 feature almost identical styling. Toyota Corolla exterior has unique design language that allows it to stand out amongst other in its class.\r\n', '', '', '', '', 400, 'manual', '5-speed', 35, 15, 'Petrol'),
(68, 'hamza', '2018-06-22', '2018-06-22', 'Suzuki', '2013', 'Suzuki Celerio', 0, 0, 0, 0, '976b10d956c55ff44b93ff1d2bfa2edd1.jpg', '478bacf04ebcea0e6836ceb67d14ff4f2.jpg', 'dfbe97bfe3ac96a557a1fe1a1d43f2583.jpg', '84bb762f65923384ab75ec08d07616861thumb.jpg', 'f374edd9aa70c900ce32f1a0e5070a342thumb.jpg', 'dd73616b84e52fb9da3e34f5865090863thumb.jpg', '', '', 'exterior specifications include a brand new and more aggressive design language. Honda Civic 2018 front end houses sleek HIDs with integrated LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. Honda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.Options include Modulo kit, door edge guards and door visors.', '2018 is a front engine, front wheel drive, subcompact sedan also known as Civic X. The Honda Civic 2018 is available in 2 variants in Pakistan 1.8 Litre and 1.8-Liter VTI Oriel while globally it is sold in 4 variants LX, EX, EX-T and EX-L. The Honda Civic 2018 price in Pakistan is between PKR 2,499,000 To 2,649,000', '', '', '', 800, 'automatic', '5-speed', 22, 25, 'Diesel'),
(69, 'hamza', '2018-06-22', '2018-06-22', 'Toyota', '2019', 'Toyota Corolla', 7, 0, 8, 0, '6759d80994a67838b383ce6212df43ab1.jpg', '4c024917bb463918a9b349c6845e35042.jpg', 'fb8b2573e314fb36ad38c6f2f48bb73e3.jpg', '7756b954a80ec6c18c4aae14c5de6c3f1thumb.jpg', 'a947475613a04ca3a8ad48e674a0adf82thumb.jpg', 'd4152a50db167007fbb110d94faf711a3thumb.jpg', '', '', 'short description', 'long', 'interior', 'exterior', 'engine', 1200, 'manual', '5-speed', 28, 22, 'Diesel'),
(70, 'hamza', '2018-06-23', '2018-06-23', 'Audi', '2018', 'Audi A7', 17, 0, 20, 50, '8a443a6195f7a42d396eafc18a075f041.jpg', '4600d4e6c9ef6801beb528be9a2e384c2.jpg', 'c1794c56b2dcc532e45f37708eadcf8d3.jpg', 'c4432a274a4e0e9a96171cfbbbea99ea1thumb.jpg', 'bac995bf547476f2e88e32cf98d214362thumb.jpg', '04c2da99c463f4b044a7406c5954bed03thumb.jpg', '', '', 'exterior specifications include a brand new and more aggressive design language. Honda Civic 2018 front end houses sleek HIDs with integrated LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. Honda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.Options include Modulo kit, door edge guards and door visors.', 'exterior specifications include a brand new and more aggressive design language. Honda Civic 2018 front end houses sleek HIDs with integrated LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. Honda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.Options include Modulo kit, door edge guards and door visors.', 'exterior specifications include a brand new and more aggressive design language. Honda Civic 2018 front end houses sleek HIDs with integrated LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. Honda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.Options include Modulo kit, door edge guards and door visors.', 'exterior specifications include a brand new and more aggressive design language. Honda Civic 2018 front end houses sleek HIDs with integrated LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. Honda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.Options include Modulo kit, door edge guards and door visors.', 'enigen', 700, 'manual', '5-speed', 25, 25, 'Petrol'),
(71, 'hamza', '2018-06-25', '2018-06-25', 'Hyundai', '2018', 'Hyundai Santro', 4, 50, 5, 0, '967395dca6e440dbb695f140b2a4bb781.jpg', 'dc7339826431ae79676d63818dfa7cb52.jpg', '15fa60132ccd6b9de5d12bb2b6b799913.jpg', '8b047515dc52124a11bb9693dcfb66bb1thumb.jpg', 'b22326d6b69319a02ce6c4043cfd44f82thumb.jpg', 'fe7e941f0f335f0fbe35203b86d8dae63thumb.jpg', '', '', 'short', '', '', '', '', 400, 'manual', '', 0, 0, 'Petrol'),
(72, 'hamza', '2018-06-29', '2018-06-29', 'Audi', '2016', 'Audi Q3', 45, 0, 44, 50, '815733bc55657ffabd31eec562190d2d1.jpg', '1c69dd2b7e598a2c62397ed8efe52fe12.jpg', 'd39adb9adbe7106de52f7eeb495fcae43.jpg', 'a97e83d2c0b35e0f2d3317f562f9c2781thumb.jpg', '7072429d5da99cf8e17945ade027ce572thumb.jpg', 'ed9cd9f4162cdc3e3536d5504548293c3thumb.jpg', '', '', 'Audi was launched in Pakistan by the Toyota Indus Motor Company in July 2014. Toyota Corolla 2018 is a front engine front wheel drive subcompact sedan and the most popular model among all its predecessors in Pakistan. Having a variety of different models with an option between 3 engines, 4 transmissions options, and 5 trims levels makes the Toyota Corolla accessible by a broader range of people due to the range of variants to choose from.', '2018 interior comprises of black and beige plastic trim pieces. The front and rear seats are covered in ivory fabric. Standard features of the base variant includes air conditioning, infotainment system, power steering and tachometer. while higher variants have satellite navigations, leather upholstery,multifunction steering wheel switches, two airbags, cruise control, front and rear camera, paddle shift and sunroof. Toyota Corolla 2018 cabin is very spacious, practical and luxurious', 'Audi interior comprises of black and beige plastic trim pieces. The front and rear seats are covered in ivory fabric. Standard features of the base variant includes air conditioning, infotainment system, power steering and tachometer. while higher variants have satellite navigations, leather upholstery,multifunction steering wheel switches, two airbags, cruise control, front and rear camera, paddle shift and sunroof. Toyota Corolla 2018 cabin is very spacious,', 'Exterior features a brand new more modern and premium design language. The front end houses sleek narrow side swept headlights, a large grille with a chrome accent and a trapezium air intake. The rear end houses sleek sharp side swept taillights, a large rear bumper and a chrome trim piece running the length of the trunk. All variants of the Toyota Corolla 2018 feature almost identical styling. Toyota Corolla exterior has unique design language', '1.8 Litre SOHC 16 Valve Engine', 600, 'automatic', '4-speed', 8, 25, 'Petrol'),
(73, 'hamza', '2018-06-29', '2018-06-29', 'Audi', '2019', 'Audi R8', 45, 70, 50, 0, '15424def42602933a5aab865518113411.jpg', 'adce5d4b50fbdc89abf6eed05c9e24162.jpg', '9e9048aa26356dca4a57a0a694c708c93.jpg', '3cde6f7e4246378052209643f111bd321thumb.jpg', '8c582e8455f28b91d74e4621b578f2002thumb.jpg', '8a6eaca130902e76edf2199b20f9112d3thumb.jpg', '', '', 'Audi possesses a highly comfortable rider and passenger seat. A 13L fuel tank coupled with surprisingly great fuel economy makes you go miles without worrying about refilling or fuel cost. The road grip of Yamaha Ybr 125 simply feels like more than a two-wheeler. Yamaha Ybr 125 does not disappoint its buyers at any point in time. Yamaha Ybr 125- A taste of superiority. One can also find this motorcycle on PakWheels listings.', 'Audi has been a style icon for several decades; An icon of style, perfection, and power. Honda CG 125 is a perfect tough roadmaster for all kinds of roads and never lets you down when it comes to comfort and economy. Honda 125 is a stunning outcome of latest Japanese technology to survive has been a style icon for several decades; An icon of style, perfection, and power. Honda CG 125 is a perfect tough roadmaster for all kinds of roads and never lets you down when it comes to comfort and economy. Honda 125 is a stunning outcome of latest Japanese technology to survive ', 'Interior has been a style icon for several decades; An icon of style, perfection, and power. Honda CG 125 is a perfect tough roadmaster for all kinds of roads and never lets you down when it comes to comfort and economy. Honda 125 is a stunning outcome of latest Japanese technology to survive ', 'Exterior has been a style icon for several decades; An icon of style, perfection, and power. Honda CG 125 is a perfect tough roadmaster for all kinds of roads and never lets you down when it comes to comfort and economy. Honda 125 is a stunning outcome of latest Japanese technology to survive ', '1.5 Litre DOHC 16 Valve Earth Dream Technology Engine', 200, 'manual', '6 Speed Automatic', 30, 15, 'Petrol'),
(74, 'hamza', '2018-06-29', '2018-06-29', 'Audi', '2019', 'Audi A3', 45, 70, 50, 0, '15424def42602933a5aab865518113411.jpg', 'adce5d4b50fbdc89abf6eed05c9e24162.jpg', '9e9048aa26356dca4a57a0a694c708c93.jpg', '3cde6f7e4246378052209643f111bd321thumb.jpg', '8c582e8455f28b91d74e4621b578f2002thumb.jpg', '8a6eaca130902e76edf2199b20f9112d3thumb.jpg', '', '', 'Audi possesses a highly comfortable rider and passenger seat. A 13L fuel tank coupled with surprisingly great fuel economy makes you go miles without worrying about refilling or fuel cost. The road grip of Yamaha Ybr 125 simply feels like more than a two-wheeler. Yamaha Ybr 125 does not disappoint its buyers at any point in time. Yamaha Ybr 125- A taste of superiority. One can also find this motorcycle on PakWheels listings.', 'Audi has been a style icon for several decades; An icon of style, perfection, and power. Honda CG 125 is a perfect tough roadmaster for all kinds of roads and never lets you down when it comes to comfort and economy. Honda 125 is a stunning outcome of latest Japanese technology to survive has been a style icon for several decades; An icon of style, perfection, and power. Honda CG 125 is a perfect tough roadmaster for all kinds of roads and never lets you down when it comes to comfort and economy. Honda 125 is a stunning outcome of latest Japanese technology to survive ', 'Interior has been a style icon for several decades; An icon of style, perfection, and power. Honda CG 125 is a perfect tough roadmaster for all kinds of roads and never lets you down when it comes to comfort and economy. Honda 125 is a stunning outcome of latest Japanese technology to survive ', 'Exterior has been a style icon for several decades; An icon of style, perfection, and power. Honda CG 125 is a perfect tough roadmaster for all kinds of roads and never lets you down when it comes to comfort and economy. Honda 125 is a stunning outcome of latest Japanese technology to survive ', '1.5 Litre DOHC 16 Valve Earth Dream Technology Engine', 400, 'manual', '6 Speed Automatic', 40, 15, 'Diesel'),
(75, 'hamza', '2018-06-29', '2018-06-29', 'Audi', '2016', 'Audi Q1', 45, 0, 44, 50, '815733bc55657ffabd31eec562190d2d1.jpg', '1c69dd2b7e598a2c62397ed8efe52fe12.jpg', 'd39adb9adbe7106de52f7eeb495fcae43.jpg', 'a97e83d2c0b35e0f2d3317f562f9c2781thumb.jpg', '7072429d5da99cf8e17945ade027ce572thumb.jpg', 'ed9cd9f4162cdc3e3536d5504548293c3thumb.jpg', '', '', 'Audi was launched in Pakistan by the Toyota Indus Motor Company in July 2014. Toyota Corolla 2018 is a front engine front wheel drive subcompact sedan and the most popular model among all its predecessors in Pakistan. Having a variety of different models with an option between 3 engines, 4 transmissions options, and 5 trims levels makes the Toyota Corolla accessible by a broader range of people due to the range of variants to choose from.', '2018 interior comprises of black and beige plastic trim pieces. The front and rear seats are covered in ivory fabric. Standard features of the base variant includes air conditioning, infotainment system, power steering and tachometer. while higher variants have satellite navigations, leather upholstery,multifunction steering wheel switches, two airbags, cruise control, front and rear camera, paddle shift and sunroof. Toyota Corolla 2018 cabin is very spacious, practical and luxurious', 'Audi interior comprises of black and beige plastic trim pieces. The front and rear seats are covered in ivory fabric. Standard features of the base variant includes air conditioning, infotainment system, power steering and tachometer. while higher variants have satellite navigations, leather upholstery,multifunction steering wheel switches, two airbags, cruise control, front and rear camera, paddle shift and sunroof. Toyota Corolla 2018 cabin is very spacious,', 'Exterior features a brand new more modern and premium design language. The front end houses sleek narrow side swept headlights, a large grille with a chrome accent and a trapezium air intake. The rear end houses sleek sharp side swept taillights, a large rear bumper and a chrome trim piece running the length of the trunk. All variants of the Toyota Corolla 2018 feature almost identical styling. Toyota Corolla exterior has unique design language', '1.8 Litre SOHC 16 Valve Engine', 1600, 'automatic', '4-speed', 0, 25, 'Petrol'),
(76, 'hamza', '2018-06-29', '2018-06-29', 'Chevrolet', '2019', 'Chevrolet Optra', 9, 0, 8, 50, 'f0f5e95c4882939f4e5f8239dac205471.jpg', 'c2142b168268739282de12d176d20b2a2.jpg', 'd9c37596e71fc3d5eff5ebee5f4cb5443.jpg', '3f510d4c2f8a6670f08bf9720cb3d9041thumb.jpg', '7f6df4dc3651a343f106fbcbe8584ffa2thumb.jpg', 'f16844b5c16b6214ef6b5afd803218803thumb.jpg', '', '', 'pioneer of quality sports bikes in Pakistan. With a splendid performance, sporty shape and a first-class impression, Yamaha Ybr 125 simply have no match in the local market. Features like self-start, Alloy rims, alluring speedometer with fuel gauge indicator and an ultra-bright headlight', 'With a splendid performance, sporty shape and a first-class impression, Yamaha Ybr 125 simply have no match in the local market. Features like self-start, Alloy rims, alluring speedometer with fuel gauge indicator and an ultra-bright headlightpioneer of quality sports bikes in Pakistan. With a splendid performance, sporty shape and a first-class impression, Yamaha Ybr 125 simply have no match in the local market. Features like self-start, Alloy rims, alluring speedometer with fuel gauge indicator and an ultra-bright headlight', 'sports bikes in Pakistan. With a splendid performance, sporty shape and a first-class impression, Yamaha Ybr 125 simply have no match in the local market. Features like self-start, Alloy rims, alluring speedometer with fuel gauge indicator and an ultra-bright headlight', 'Quality sports bikes in Pakistan. With a splendid performance, sporty shape and a first-class impression, Yamaha Ybr 125 simply have no match in the local market. Features like self-start, Alloy rims, alluring speedometer with fuel gauge indicator and an ultra-bright headlight', '1.6 Liter DOHC 16 Valve Engine', 800, 'automatic', '4-speed', 24, 25, 'Petrol'),
(77, 'hamza', '2018-06-30', '2018-06-30', 'Nissan', '2018', 'Nissan March', 6, 50, 5, 0, '34e69999f034aab622849350daf0a94d1.jpg', '42f01ca9079fadc9f6aac08c313f18b82.jpg', 'e243d4095b26fe06cb3fce7eca65f0e33.jpg', '564d945e7cdc6391bfb55d3fd1b8d6ca1thumb.jpg', '06460617308c614cb5ec4fff0b6b64a72thumb.jpg', '80eae8b75600be16d574ba90d16660c03thumb.jpg', '', '', 'March front and rearseats trims are available in a \r\n\r\ncombination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio \r\n\r\nsystem, 5.0-inch multi-information display, traction control, electronic stability control, power door mirrors, push button start and keyless', 'Nissan 2018 interior comprises of black and polished silver plastic trim pieces. Honda Civic front and rearseats trims are available in a \r\n\r\ncombination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio \r\n\r\nsystem, 5.0-inch multi-information display, traction control, electronic stability control, power door mirrors, push button start and keyless Honda 2018 interior comprises of black and polished silver plastic trim pieces. Honda Civic front and rearseats trims are available in a \r\n\r\ncombination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio \r\n\r\nsystem, 5.0-inch multi-information display, traction control, electronic stability control, power door mirrors, push button start and keyless \r\n\r\nentry', 'combination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audiocombination of black, grey and ivory fabric. Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio', 'Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio Standard features include, automatic climate control, 12-Volt power outlet, 4-speaker 160 watt audio ', '1 Liter 2 Valve Engine', 100, 'manual', '4-Speed', 25, 10, 'Petrol'),
(78, 'hamza', '2018-06-23', '2018-06-23', 'Audi', '2018', 'Audi A7', 17, 0, 20, 50, '8a443a6195f7a42d396eafc18a075f041.jpg', '4600d4e6c9ef6801beb528be9a2e384c2.jpg', 'c1794c56b2dcc532e45f37708eadcf8d3.jpg', 'c4432a274a4e0e9a96171cfbbbea99ea1thumb.jpg', 'bac995bf547476f2e88e32cf98d214362thumb.jpg', '04c2da99c463f4b044a7406c5954bed03thumb.jpg', '', '', 'exterior specifications include a brand new and more aggressive design language. Honda Civic 2018 front end houses sleek HIDs with integrated LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. Honda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.Options include Modulo kit, door edge guards and door visors.', 'exterior specifications include a brand new and more aggressive design language. Honda Civic 2018 front end houses sleek HIDs with integrated LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. Honda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.Options include Modulo kit, door edge guards and door visors.', 'exterior specifications include a brand new and more aggressive design language. Honda Civic 2018 front end houses sleek HIDs with integrated LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. Honda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.Options include Modulo kit, door edge guards and door visors.', 'exterior specifications include a brand new and more aggressive design language. Honda Civic 2018 front end houses sleek HIDs with integrated LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. Honda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.Options include Modulo kit, door edge guards and door visors.', 'enigen', 700, 'manual', '5-speed', 25, 25, 'Petrol'),
(79, 'hamza', '2018-07-02', '2018-07-02', 'Audi', '2019', 'Audi A3', 9, 50, 8, 50, '0b0f196cb8f95e0358d857a9e1e987f51.jpg', '8661592c3d82a88f0606bd87e3fdc7462.jpg', '2e920a93d1d72b29d59a2fe14158e5033.jpg', '16461c2709ba8245e64959a9c7119bc41thumb.jpg', '5aec4e5c02bee3ddccc2d12b7e6a59332thumb.jpg', 'afc6cfba8e63f4a866c79e36a09e99343thumb.jpg', '', '', 'Audi was launched in Pakistan by the Toyota Indus Motor Company in July 2014. Toyota Corolla 2018 is a front engine front wheel drive subcompact sedan and the most popular model among all its predecessors in Pakistan. Having a variety of different models with an option between 3 engines, 4 transmissions options, and 5 trims levels makes the Toyota Corolla accessible by a broader range of people due to the range of variants to choose from.', 'Audi was launched in Pakistan by the Toyota Indus Motor Company in July 2014. Toyota Corolla 2018 is a front engine front wheel drive subcompact sedan and the most popular model among all its predecessors in Pakistan. Having a variety of different models with an option between 3 engines, 4 transmissions options, and 5 trims levels makes the Toyota Corolla accessible by a broader range of people due to the range of variants to choose from.Audi was launched in Pakistan by the Toyota Indus Motor Company in July 2014. Toyota Corolla 2018 is a front engine front wheel drive subcompact sedan and the most popular model among all its predecessors in Pakistan. Having a variety of different models with an option between 3 engines, 4 transmissions options, and 5 trims levels makes the Toyota Corolla accessible by a broader range of people due to the range of variants to choose from.', 'Wheel drive subcompact sedan and the most popular model among all its predecessors in Pakistan. Having a variety of different models with an option between 3 engines, 4 transmissions options, and 5 trims levels makes the Toyota Corolla accessible by a broader range of people due to the range of variants to choose from.', 'Audi  is a front engine front wheel drive subcompact sedan and the most popular model among all its predecessors in Pakistan. Having a variety of different models with an option between 3 engines, 4 transmissions options, and 5 trims levels makes the Toyota Corolla accessible by a broader range of people due to the range of variants to choose from.', '1 Liter 2 Valve Engine', 100, 'Automatic', '4-Speed', 30, 65, 'Diesel'),
(80, 'hamza', '2018-07-06', '2018-07-06', 'Toyota', '2019', 'Toyota Land Cruiser', 9, 50, 8, 0, '32b0aa3547f79f7e6a740a16608324f31.jpg', 'b42f71e5d7e7bed78d287668b9dcf9122.jpg', 'c91d18dc9ef2b8cf9ae9093c6a014f923.jpg', 'a4aed71e7e05c80cc616430d4b2e9dad1thumb.jpg', '530b93c3c7345606ff8da440be88586c2thumb.jpg', 'd7caf3bac6ca90a65cda1f9f5f56e5453thumb.jpg', '', '', 'A brand new and more aggressive design language. Honda Civic 2018 front end houses sleek HIDs with integrated LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. Honda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.', 'LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. Honda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.a brand new and more aggressive design language. Honda Civic 2018 front end houses sleek HIDs with integrated LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. Honda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.', ' running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. Honda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.', 'HIDs with integrated LED daytime running lights, a trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. Honda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights.', '1 Liter 2 Valve Engine', 1100, 'Automatic', '5-Speed', 15, 15, 'Diesel'),
(81, 'hamza', '2018-07-08', '2018-07-08', 'Toyota', '2019', 'Toyota Land Cruiser', 5, 50, 4, 0, '4e03ba5acc4e7200c38a6205afff2e431.jpg', '5c72e6b940d96627e02d6e528b9faa0e2.jpg', 'b95823632c2d05b22dc1b9ea1c190eaf3.jpg', 'd91cc1c1c1e638c2b6c21838ed0a6b7b1thumb.jpg', '31836f42c4dbee192bda09eaf9f4897e2thumb.jpg', 'ac8cf2231fd69b85c929f04743777f113thumb.jpg', '', '', 'rapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. Honda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights', 'Trapezium grille integrated into the design of the headlights with chrome accents and triple air intakes. Honda Civic sloping rear end houses aggressively designed angular C-shaped side swept taillights', '', '', '1.6 Liter DOHC 16 Valve Engine', 100, 'Manual', '4-Speed', 30, 25, 'Petrol'),
(82, 'hamza', '2018-07-08', '2018-07-08', 'Toyota', '2019', 'Toyota Camry', 9, 50, 8, 5, '17e13cb4310e0c754a1e1712bcd44b791.jpg', '710291127f2c7ee63f7b3b3bd1440f802.jpg', '5a09a1035d2299ea82630cf28ce784d63.jpg', 'f34acc820738ac8cdc125fd4db1f29961thumb.jpg', '2cb0270b04abd541cc6f4470643104492thumb.jpg', '239701c4106fb6f60a533b820d2b848f3thumb.jpg', '', '', ' was launched in Pakistan by the Toyota Indus Motor Company in July 2014. Toyota Corolla 2018 is a front engine fron... was launched in Pakistan by the Toyota Indus Motor Company in July 2014. Toyota Corolla 2018 is a front engine fron...', ' was launched in Pakistan by the Toyota Indus Motor Company in July 2014. Toyota Corolla was launched in Pakistan by the Toyota Indus Motor Company in July 2014. Toyota Corolla 2018 is a front engine fron... was launched in Pakistan by the Toyota Indus Motor Company in July 2014. Toyota Corolla 2018 is a front engine fron... was launched in Pakistan by the Toyota Indus Motor Company in July 2014. Toyota Corolla 2018 is a front engine fron... 2018 is a front engine fron...', ' was launched in Pakistan by the Toyota Indus Motor Company in July 2014. Toyota Corolla 2018 is a front engine fron...', ' was launched in Pakistan by the Toyota Indus Motor Company in July 2014. Toyota Corolla 2018 is a front engine fron...', '1.6 Liter DOHC 16 Valve Engine', 800, 'Automatic', '5-Speed', 30, 36, 'Petrol');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `crval` int(11) NOT NULL,
  `car` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`crval`, `car`) VALUES
(1, 'Toyota Corolla'),
(2, 'Toyota Vitz'),
(3, 'Toyota Passo'),
(4, 'Toyota Land Cruiser'),
(5, 'Toyota iQ'),
(6, 'Toyota Mark II'),
(7, 'Toyota Prado'),
(8, 'Toyota Camry'),
(9, 'Toyota Celica'),
(10, 'Toyota Starlet'),
(11, 'Honda Civic'),
(12, 'Honda City'),
(13, 'Honda Vezel'),
(14, 'Honda Accord'),
(15, 'Honda Civic Hybrid'),
(16, 'Honda CR-Z Sports Hybrid'),
(17, 'Honda CR-V'),
(18, 'Honda Integra'),
(19, 'Honda Fit Aria'),
(20, 'Honda Fit Hybrid'),
(21, 'Suzuki Mehran'),
(22, 'Suzuki Swift'),
(23, 'Suzuki Cultus'),
(24, 'Suzuki Celerio'),
(25, 'Suzuki Wagon R'),
(26, 'Suzuki Liana'),
(27, 'Suzuki APV'),
(28, 'Suzuki Alto'),
(29, 'Suzuki Ravi'),
(30, 'Suzuki Baleno'),
(31, 'BMW X1 Series'),
(32, 'BMW X5 Series'),
(33, 'BMW i8'),
(34, 'BMW 3 Series'),
(35, 'BMW 5 Series'),
(36, 'BMW 7 Series'),
(37, 'Chevrolet Optra'),
(38, 'Chevrolet Exclusive'),
(39, 'Chevrolet Joy'),
(40, 'Hyundai Santro'),
(41, 'Hyundai Excel'),
(42, 'Hyundai Shehzore'),
(43, 'Hyundai Tucson'),
(44, 'Mercedes Benz CLA Class'),
(45, 'Mercedes Benz SLK Class'),
(46, 'Mercedes Benz CLS Class'),
(47, 'Mercedes Benz S Class'),
(48, 'Mercedes Benz E Class'),
(49, 'Mercedes Benz C Class'),
(50, 'Mercedes Benz CLK Class'),
(51, 'Nissan Titan'),
(52, 'Nissan Tiida'),
(53, 'Nissan March'),
(54, 'Nissan Pino'),
(55, 'Nissan Qashqai'),
(56, 'Nissan GT-R'),
(57, 'Nissan Sunny'),
(58, 'Nissan Bluebird Sylphy'),
(59, 'Nissan AD Van'),
(60, 'Nissan Wingroad'),
(61, 'Audi A3'),
(62, 'Audi A5'),
(63, 'Audi A7'),
(64, 'Audi Q3'),
(65, 'Audi Q5'),
(66, 'Audi R8'),
(67, 'Audi A4'),
(68, 'Audi A6'),
(69, 'Audi Q7'),
(70, 'Audi A8');

-- --------------------------------------------------------

--
-- Table structure for table `carspecs`
--

CREATE TABLE `carspecs` (
  `id` int(11) NOT NULL,
  `ced` text NOT NULL,
  `cgt` text NOT NULL,
  `cgb` text NOT NULL,
  `cft` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carspecs`
--

INSERT INTO `carspecs` (`id`, `ced`, `cgt`, `cgb`, `cft`) VALUES
(1, '100', 'Manual', '4-Speed', 'Petrol'),
(2, '200', 'Automatic', '5-Speed', 'Diesel'),
(3, '300', '', '', ''),
(4, '400', '', '', ''),
(5, '500', '', '', ''),
(6, '600', '', '', ''),
(7, '700', '', '', ''),
(8, '800', '', '', ''),
(9, '900', '', '', ''),
(10, '1000', '', '', ''),
(11, '1100', '', '', ''),
(12, '1200', '', '', ''),
(13, '1300', '', '', ''),
(14, '1400', '', '', ''),
(15, '1500', '', '', ''),
(16, '1600', '', '', ''),
(17, '1700', '', '', ''),
(18, '1800', '', '', ''),
(19, '1900', '', '', ''),
(20, '2000', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `ctval` int(11) NOT NULL,
  `city` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`ctval`, `city`) VALUES
(1, 'Abdul Hakeem'),
(2, 'Abottabad'),
(3, 'Adda jahan khan'),
(4, 'Adda shaiwala'),
(5, 'Ahmed Pur East'),
(6, 'Ahmedpur Lamma'),
(7, 'Akhora khattak'),
(8, 'Ali chak'),
(9, 'Alipur Chatta'),
(10, 'Allahabad'),
(11, 'Amangarh'),
(12, 'Arifwala'),
(13, 'Attock'),
(14, 'Babarloi'),
(15, 'Babri banda'),
(16, 'Badin'),
(17, 'Bahawal Nagar'),
(18, 'Balakot'),
(19, 'Bannu'),
(20, 'Baroute'),
(21, 'Basirpur'),
(22, 'Basti Shorekot'),
(23, 'Bat khela'),
(24, 'Batang'),
(25, 'Bhai pheru'),
(26, 'Bhakkar'),
(27, 'Bhalwal'),
(28, 'Bhan saeedabad'),
(29, 'Bhawalpur'),
(30, 'Bhera'),
(31, 'Bhikky'),
(32, 'Bhimber'),
(33, 'Bhirya road'),
(34, 'Bhuawana'),
(35, 'Buchay key'),
(36, 'Burewala'),
(37, 'Chacklala'),
(38, 'Chaininda'),
(39, 'Chak 4 b c'),
(40, 'Chak 46'),
(41, 'Chak jamal'),
(42, 'Chak jhumra'),
(43, 'Chak Shahzad'),
(44, 'Chaksawari'),
(45, 'Chakwal'),
(46, 'Charsadda'),
(47, 'Chashma'),
(48, 'Chawinda'),
(49, 'Chichawatni'),
(50, 'Chiniot'),
(51, 'Chishtian'),
(52, 'Chitral'),
(53, 'Chohar jamali'),
(54, 'Choppar hatta'),
(55, 'Chowha saidan shah'),
(56, 'Chowk azam'),
(57, 'Chowk mailta'),
(58, 'Chowk munda'),
(59, 'Chunian'),
(60, 'D.G.Khan'),
(61, 'Dadakhel'),
(62, 'Dadu'),
(63, 'Dadyal Ak'),
(64, 'Daharki'),
(65, 'Dandot'),
(66, 'Dargai'),
(67, 'Darya khan'),
(68, 'Daska'),
(69, 'Daud khel'),
(70, 'Daulatpur'),
(71, 'Deh pathaan'),
(72, 'Depal pur'),
(73, 'Dera Allah Yar'),
(74, 'Dera ismail khan'),
(75, 'Dera murad jamali'),
(76, 'Dera nawab sahib'),
(77, 'Dhatmal'),
(78, 'Dhoun kal'),
(79, 'Digri'),
(80, 'Dijkot'),
(81, 'Dina'),
(82, 'Dinga'),
(83, 'Dir'),
(84, 'Doaaba'),
(85, 'Doltala'),
(86, 'Domeli'),
(87, 'Donga Bonga'),
(88, 'Dudial'),
(89, 'Dunia Pur'),
(90, 'Eminabad'),
(91, 'Esa Khel'),
(92, 'Faisalabad'),
(93, 'Faqirwali'),
(94, 'Farooqabad'),
(95, 'Fateh Jang'),
(96, 'Fateh pur'),
(97, 'Feroz walla'),
(98, 'Feroz watan'),
(99, 'Ferozwatowan'),
(100, 'Fiza got'),
(101, 'Fort Abbass'),
(102, 'Gadoon amazai'),
(103, 'Gaggo mandi'),
(104, 'Gakhar mandi'),
(105, 'Gambat'),
(106, 'Gambet'),
(107, 'Garh maharaja'),
(108, 'Garh more'),
(109, 'Garhi yaseen'),
(110, 'Gari habibullah'),
(111, 'Gari mori'),
(112, 'Gharo'),
(113, 'Ghazi'),
(114, 'Ghotki'),
(115, 'Gilgit'),
(116, 'Gohar ghoushti'),
(117, 'Gojar khan'),
(118, 'Gojra'),
(119, 'Goth Machi'),
(120, 'Goular khel'),
(121, 'Guddu'),
(122, 'Gujar Khan'),
(123, 'Gujranwala'),
(124, 'Gujrat'),
(125, 'Gwadar'),
(126, 'Hafizabad'),
(127, 'Hala'),
(128, 'Hangu'),
(129, 'Harappa'),
(130, 'Hari pur'),
(131, 'Hariwala'),
(132, 'Haroonabad'),
(133, 'Hasilpur'),
(134, 'hamza abdal'),
(135, 'Hattar'),
(136, 'Hattian'),
(137, 'Hattian lawrencepur'),
(138, 'Havali Lakhan'),
(139, 'Hawilian'),
(140, 'Hayatabad'),
(141, 'Hazro'),
(142, 'Head marala'),
(143, 'Hub'),
(144, 'Hub-Balochistan'),
(145, 'Hujra Shah Mukeem'),
(146, 'Hunza'),
(147, 'Hyderabad'),
(148, 'Iskandarabad'),
(149, 'Jacobabad'),
(150, 'Jahaniya'),
(151, 'Jaja abasian'),
(152, 'Jalalpur Jattan'),
(153, 'Jalalpur Pirwala'),
(154, 'Jampur'),
(155, 'Jamrud road'),
(156, 'Jamshoro'),
(157, 'Jan pur'),
(158, 'Jand'),
(159, 'Jandanwala'),
(160, 'Jaranwala'),
(161, 'Jatlaan'),
(162, 'Jatoi'),
(163, 'Jauharabad'),
(164, 'Jehangira'),
(165, 'Jehlum'),
(166, 'Jhal Magsi'),
(167, 'Jhand'),
(168, 'Jhang'),
(169, 'Jhatta bhutta'),
(170, 'Jhudo'),
(171, 'Jin Pur'),
(172, 'K.N. Shah'),
(173, 'Kabirwala'),
(174, 'Kacha khooh'),
(175, 'Kahuta'),
(176, 'Kakul'),
(177, 'Kakur town'),
(178, 'Kala bagh'),
(179, 'Kala shah kaku'),
(180, 'Kalaswala'),
(181, 'Kallar Kahar'),
(182, 'Kallar Saddiyian'),
(183, 'Kallur kot'),
(184, 'Kamalia'),
(185, 'Kamalia musa'),
(186, 'Kamber ali khan'),
(187, 'Kameer'),
(188, 'Kamoke'),
(189, 'Kamra'),
(190, 'Kandh kot'),
(191, 'Kandiaro'),
(192, 'Karak'),
(193, 'Karoor pacca'),
(194, 'Karore lalisan'),
(195, 'Kashmir'),
(196, 'Kashmore'),
(197, 'Kasur'),
(198, 'Kazi ahmed'),
(199, 'Khair Pur Mirs'),
(200, 'Khairpur'),
(201, 'Khan Bela'),
(202, 'Khan qah sharif'),
(203, 'Khandabad'),
(204, 'Khanewal'),
(205, 'Khangarh'),
(206, 'Khanqah dogran'),
(207, 'Khanqah sharif'),
(208, 'Kharian'),
(209, 'Khebar'),
(210, 'Khewra'),
(211, 'Khoski'),
(212, 'Khudian Khas'),
(213, 'Khurian wala'),
(214, 'Khurrianwala'),
(215, 'Khushab'),
(216, 'Khushal kot'),
(217, 'Khuzdar'),
(218, 'Klaske'),
(219, 'Kohat'),
(220, 'Kot addu'),
(221, 'Kot bunglow'),
(222, 'Kot ghulam mohd'),
(223, 'Kot mithan'),
(224, 'Kot Momin'),
(225, 'Kot radha kishan'),
(226, 'Kotla'),
(227, 'Kotla arab ali khan'),
(228, 'Kotla jam'),
(229, 'Kotla Pathan'),
(230, 'Kotly Ak'),
(231, 'Kotly Loharana'),
(232, 'Kotri'),
(233, 'Kumbh'),
(234, 'Kundina'),
(235, 'Kunjah'),
(236, 'Kunri'),
(237, 'Laki marwat'),
(238, 'Lala musa'),
(239, 'Lala rukh'),
(240, 'Laliah'),
(241, 'Lalshanra'),
(242, 'Larkana'),
(243, 'Lasbella'),
(244, 'Lawrence pur'),
(245, 'Layya'),
(246, 'Liaqat Pur'),
(247, 'Lodhran'),
(248, 'Lower Dir'),
(249, 'Ludhan'),
(250, 'Madina'),
(251, 'Makli'),
(252, 'Malakand Agency'),
(253, 'Malikwal'),
(254, 'Mamu kunjan'),
(255, 'Mandi bahauddin'),
(256, 'Mandra'),
(257, 'Manga mandi'),
(258, 'Mangal sada'),
(259, 'Mangi'),
(260, 'Mangla'),
(261, 'Mangowal'),
(262, 'Manoabad'),
(263, 'Mansahra'),
(264, 'Mardan'),
(265, 'Mari indus'),
(266, 'Mastoi'),
(267, 'Matli'),
(268, 'Mehar'),
(269, 'Mehmood kot'),
(270, 'Mehrabpur'),
(271, 'Melsi'),
(272, 'Mian Channu'),
(273, 'Mian Wali'),
(274, 'Minchanaabad'),
(275, 'Mingora'),
(276, 'Mir ali'),
(277, 'Miran shah'),
(278, 'Mirpur A.K.'),
(279, 'Mirpur khas'),
(280, 'Mirpur mathelo'),
(281, 'Mithi'),
(282, 'Mitiari'),
(283, 'Mohen jo daro'),
(284, 'More kunda'),
(285, 'Morgah'),
(286, 'Moro'),
(287, 'Mubarik pur'),
(288, 'Multan'),
(289, 'Muridkay'),
(290, 'Murree'),
(291, 'Musafir khana'),
(292, 'Mustung'),
(293, 'Muzaffar Gargh'),
(294, 'Muzaffarabad'),
(295, 'Nankana sahib'),
(296, 'Narang mandi'),
(297, 'Narowal'),
(298, 'Naseerabad'),
(299, 'Naukot'),
(300, 'Naukundi'),
(301, 'Nawabshah'),
(302, 'New saeedabad'),
(303, 'Nilore'),
(304, 'Noor kot'),
(305, 'Nooriabad'),
(306, 'Noorpur nooranga'),
(307, 'Noshero Feroze'),
(308, 'Noudero'),
(309, 'Nowshera'),
(310, 'Nowshera cantt'),
(311, 'Nowshera Virka'),
(312, 'Okara'),
(313, 'Other'),
(314, 'Padidan'),
(315, 'Pak china fertilizer'),
(316, 'Pak pattan sharif'),
(317, 'Panjan kisan'),
(318, 'Panjgoor'),
(319, 'Panno Aqil'),
(320, 'Panu Aqil'),
(321, 'Pasni'),
(322, 'Pasroor'),
(323, 'Pattoki'),
(324, 'Phagwar'),
(325, 'Phalia'),
(326, 'Phool nagar'),
(327, 'Piaro goth'),
(328, 'Pind Dadan Khan'),
(329, 'Pindi Bhattiya'),
(330, 'Pindi bhohri'),
(331, 'Pindi gheb'),
(332, 'Piplan'),
(333, 'Pir mahal'),
(334, 'Pishin'),
(335, 'Qalandarabad'),
(336, 'Qamber Ali Khan'),
(337, 'Qasba gujrat'),
(338, 'Qazi ahmed'),
(339, 'Qila Deedar Singh'),
(340, 'Quaid Abad'),
(341, 'Quetta'),
(342, 'Rabwah'),
(343, 'Rahim Yar Khan'),
(344, 'Rahwali'),
(345, 'Raiwind'),
(346, 'Rajana'),
(347, 'Rajanpur'),
(348, 'Rangoo'),
(349, 'Ranipur'),
(350, 'Rato Dero'),
(351, 'Rawala kot'),
(352, 'Rawat'),
(353, 'Renala khurd'),
(354, 'Risalpur'),
(355, 'Rohri'),
(356, 'Sadiqabad'),
(357, 'Sagri'),
(358, 'Sahiwal'),
(359, 'Saidu sharif'),
(360, 'Sajawal'),
(361, 'Sakhi Sarwar'),
(362, 'Samanabad'),
(363, 'Sambrial'),
(364, 'Samma satta'),
(365, 'Sanghar'),
(366, 'Sanghi'),
(367, 'Sangla Hills'),
(368, 'Sangote'),
(369, 'Sanjarpur'),
(370, 'Sanjwal'),
(371, 'Sara e naurang'),
(372, 'Sara-E-Alamgir'),
(373, 'Sargodha'),
(374, 'Satiayana'),
(375, 'Sawabi'),
(376, 'Sehar baqlas'),
(377, 'Sehwan Sharif'),
(378, 'Sekhat'),
(379, 'Serai alamgir'),
(380, 'Shadiwal'),
(381, 'Shah kot'),
(382, 'Shahdad kot'),
(383, 'Shahdara'),
(384, 'Shahpur chakar'),
(385, 'Shahpur Saddar'),
(386, 'Shaikhupura'),
(387, 'Shakargarh'),
(388, 'Shamsabad'),
(389, 'Shankiari'),
(390, 'Shedani sharif'),
(391, 'Shehdadpur'),
(392, 'Shemier'),
(393, 'Shiekhopura'),
(394, 'Shikar pur'),
(395, 'Shorekot Cantt'),
(396, 'Shorkot'),
(397, 'Shuja Abad'),
(398, 'Sialkot'),
(399, 'Sibi'),
(400, 'Sihala'),
(401, 'Sikandarabad'),
(402, 'Sillanwali'),
(403, 'Sita road'),
(404, 'Skardu'),
(405, 'Skrand'),
(406, 'Sohawa'),
(407, 'Sohawa district daska'),
(408, 'Sukkur'),
(409, 'Sumandari'),
(410, 'Swat'),
(411, 'Swatmingora'),
(412, 'Takhtbai'),
(413, 'Talagang'),
(414, 'Talamba'),
(415, 'Talhur'),
(416, 'Tandiliyawala'),
(417, 'Tando adam'),
(418, 'Tando Allah Yar'),
(419, 'Tando jam'),
(420, 'Tando Muhammad Khan'),
(421, 'Tank'),
(422, 'Tarbela'),
(423, 'Tarmatan'),
(424, 'Tatlay Wali'),
(425, 'Taunsa sharif'),
(426, 'Taxila'),
(427, 'Tharo shah'),
(428, 'Thatta'),
(429, 'Theing jattan more'),
(430, 'Thull'),
(431, 'Tibba sultanpur'),
(432, 'Toba Tek Singh'),
(433, 'Topi'),
(434, 'Toru'),
(435, 'Tranda Muhammad Pannah'),
(436, 'Turbat'),
(437, 'Ubaro'),
(438, 'Ubauro'),
(439, 'Ugoke'),
(440, 'Ukba'),
(441, 'Umer Kot'),
(442, 'Upper deval'),
(443, 'Usta Muhammad'),
(444, 'Vehari'),
(445, 'Village Sunder'),
(446, 'Wah cantt'),
(447, 'Wahi hassain'),
(448, 'Wahn Bachran'),
(449, 'Wan radha ram'),
(450, 'Warah'),
(451, 'Warburton'),
(452, 'Wazirabad'),
(453, 'Yazman mandi'),
(454, 'Zafarwal'),
(455, 'Zahir Peer'),
(456, 'Lahore'),
(457, 'Karachi'),
(458, 'Islamabad'),
(459, 'Rawalpindi'),
(460, 'Peshawar');

-- --------------------------------------------------------

--
-- Table structure for table `cmakers`
--

CREATE TABLE `cmakers` (
  `cmkval` int(11) NOT NULL,
  `cmakers` varchar(22) NOT NULL,
  `cdetails` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmakers`
--

INSERT INTO `cmakers` (`cmkval`, `cmakers`, `cdetails`) VALUES
(1, 'Toyota', 'Toyota Motor Corporation, usually shortened to Toyota, is a Japanese multinational automotive manufacturer headquartered in Toyota, Aichi, Japan.'),
(2, 'Honda', 'Honda Motor Company, Ltd. is a Japanese public multinational conglomerate corporation primarily known as a manufacturer of automobiles, aircraft, motorcycles, and power equipment.'),
(3, 'Suzuki', 'Suzuki Motor Corporation is a Japanese multinational corporation headquartered in Minami-ku, Hamamatsu, that manufactures automobiles, four-wheel drive vehicles, motorcycles, all-terrain vehicles, '),
(4, 'Audi', 'Audi AG is a German automobile manufacturer that designs, engineers, produces, markets and distributes luxury vehicles. Audi is a member of the Volkswagen Group and has its roots at Ingolstadt, Bavaria, Germany.'),
(5, 'Nissan', 'Nissan Motor Company Ltd, usually shortened to Nissan, is a Japanese multinational automobile manufacturer headquartered in Nishi-ku, Yokohama.'),
(6, 'BMW', 'BMW is a German multinational company which currently produces luxury automobiles and motorcycles, and also produced aircraft engines until 1945. The company was founded in 1916 and has its headquarters in Munich, Bavaria'),
(7, 'Mercedes Benz', 'Mercedes-Benz is a global automobile marque and a division of the German company Daimler AG. The brand is known for luxury vehicles, buses, coaches, and lorries. The headquarters is in Stuttgart, Baden-Württemberg.'),
(8, 'Hyundai', 'The Hyundai Motor Company is a South Korean multinational automotive manufacturer headquartered in Seoul, South Korea. '),
(9, 'Chevrolet', 'Chevrolet, colloquially referred to as Chevy and formally the Chevrolet Division of General Motors Company, is an American automobile division of the American manufacturer General Motors.'),
(11, 'hello', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `val` int(11) NOT NULL,
  `pc` text NOT NULL,
  `ac` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`val`, `pc`, `ac`) VALUES
(1, 'lahore', 'any');

-- --------------------------------------------------------

--
-- Table structure for table `featured`
--

CREATE TABLE `featured` (
  `id` int(11) NOT NULL,
  `fc` int(11) NOT NULL,
  `fb` int(11) NOT NULL,
  `fhb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured`
--

INSERT INTO `featured` (`id`, `fc`, `fb`, `fhb`) VALUES
(1, 80, 16, 6);

-- --------------------------------------------------------

--
-- Table structure for table `hbmakers`
--

CREATE TABLE `hbmakers` (
  `bmkval` int(11) NOT NULL,
  `bmakers` varchar(22) NOT NULL,
  `cdetails` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hbmakers`
--

INSERT INTO `hbmakers` (`bmkval`, `bmakers`, `cdetails`) VALUES
(1, 'Honda', 'Honda Motor Company, Ltd. is a Japanese public multinational conglomerate corporation primarily known as a manufacturer of automobiles, aircraft, motorcycles, and power equipment.'),
(2, 'Suzuki', 'Suzuki Motor Corporation is a Japanese multinational corporation headquartered in Minami-ku, Hamamatsu, that manufactures automobiles, four-wheel drive vehicles, motorcycles, all-terrain vehicles, '),
(3, 'Yamaha', 'Yamaha Motor Company Limited is a Japanese manufacturer of motorcycles, marine products such as boats and outboard motors, and other motorized products.'),
(4, 'Kawasaki', 'Kawasaki Heavy Industries Ltd. is a Japanese public multinational corporation primarily known as a manufacturer of motorcycles, heavy equipment, aerospace and defense equipment, rolling stock and ships'),
(5, 'Triumph', 'Triumph Motorcycles Ltd is the largest British motorcycle manufacturer, established in 1983 by John Bloor after the original company Triumph Engineering went into receivership');

-- --------------------------------------------------------

--
-- Table structure for table `heavybikeposts`
--

CREATE TABLE `heavybikeposts` (
  `post_id` int(11) NOT NULL,
  `author` text NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  `company` text NOT NULL,
  `year` int(6) NOT NULL,
  `model` text NOT NULL,
  `pmaxl` int(11) NOT NULL,
  `pmaxt` int(11) NOT NULL,
  `pminl` int(11) NOT NULL,
  `pmint` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img1thumb` text NOT NULL,
  `img2thumb` text NOT NULL,
  `img3thumb` text NOT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `sdesp` text NOT NULL,
  `desp` text NOT NULL,
  `pc` int(6) NOT NULL,
  `start` int(6) NOT NULL,
  `engine` text NOT NULL,
  `edisp` int(6) NOT NULL,
  `type` text NOT NULL,
  `millage` int(6) NOT NULL,
  `speedometer` int(6) NOT NULL,
  `topspeed` int(6) NOT NULL,
  `gearbox` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heavybikeposts`
--

INSERT INTO `heavybikeposts` (`post_id`, `author`, `created`, `updated`, `company`, `year`, `model`, `pmaxl`, `pmaxt`, `pminl`, `pmint`, `img1`, `img2`, `img3`, `img1thumb`, `img2thumb`, `img3thumb`, `img4`, `img5`, `sdesp`, `desp`, `pc`, `start`, `engine`, `edisp`, `type`, `millage`, `speedometer`, `topspeed`, `gearbox`) VALUES
(3, 'hamza', '2018-06-09', '2018-06-09', 'Suzuki', 2018, 'Suzuki GSX750 F Katana', 0, 0, 0, 0, '200cbea3072353e080075f85979993f41.png', 'a9110778bf99bff368aadd8f421059c42.jpg', 'c1b63f5f8f20d2caf9acfb59e63b0e203.jpg', '14ec6004022814d3958cd6842129caf41thumb.jpg', '20bdd8b3d699c7977f62b05226d5ae792thumb.jpg', '916790142fc4c7f1ffc42e2a122edd1d3thumb.jpg', '', '', 'Yamaha Ybr 125 possesses a highly comfortable rider and passenger seat. A 13L fuel tank coupled with surprisingly great fuel economy makes you go \r\n\r\nmiles without worrying about refilling or fuel cost. The road grip of Yamaha Ybr 125 simply feels like more than a two-', 'Yamaha Ybr 125 is a pioneer of quality sports bikes in Pakistan. With a splendid performance, sporty shape and a first-class impression, Yamaha \r\n\r\nYbr 125 simply have no match in the local market. Features like self-start, Alloy rims, alluring speedometer with fuel gauge indicator and an \r\n\r\nultra-bright headlight', 1, 1, '', 0, '1', 0, 0, 0, ''),
(4, 'hamza', '2018-06-07', '2018-06-09', 'Honda', 2019, 'Honda CBR600F', 0, 0, 0, 0, '47b98a4a769af0af97495bfa1c45c5c91.png', 'a9110778bf99bff368aadd8f421059c42.jpg', 'c1b63f5f8f20d2caf9acfb59e63b0e203.jpg', '972014aae87aee6e1a4e35496d393c8c1thumb.jpg', '20bdd8b3d699c7977f62b05226d5ae792thumb.jpg', '916790142fc4c7f1ffc42e2a122edd1d3thumb.jpg', '', '', 'Yamaha Ybr 125 possesses a highly comfortable rider and passenger seat. A 13L fuel tank coupled with surprisingly great fuel economy makes you go \r\n\r\nmiles without worrying about refilling or fuel cost. The road grip of Yamaha Ybr 125 simply feels like more than a two-', 'Yamaha Ybr 125 is a pioneer of quality sports bikes in Pakistan. With a splendid performance, sporty shape and a first-class impression, Yamaha \r\n\r\nYbr 125 simply have no match in the local market. Features like self-start, Alloy rims, alluring speedometer with fuel gauge indicator and an \r\n\r\nultra-bright headlight', 1, 1, '', 0, '1', 0, 0, 0, ''),
(5, 'hamza', '2018-06-23', '2018-06-23', 'Kawasaki', 2014, 'Kawasaki Ninja 250', 2, 50, 3, 50, '2ec17978ca56f5d94533df80fe5095d81.jpg', '246fc14aa3bb88aca7037453169ca4d42.jpg', 'd6d58d9a14a506546a552b305e5d00fa3.jpg', 'fa4150f2604a112b75e018336f1f804b1thumb.jpg', '10270f62b292aa25c28ecdabfc9b60cf2thumb.jpg', '4416461ca8ae1a183374d6c27cd7eb273thumb.jpg', '', '', 'zdfva', '', 5, 1, '', 0, '1', 0, 0, 0, ''),
(6, 'hamza', '2018-06-29', '2018-06-29', 'Kawasaki', 2019, 'Kawasaki Z1', 8, 50, 9, 0, 'b48f197c07c9b11ab51d86b7c58fae7e1.jpg', '057541e00b2a0585227d576a253892012.jpg', '440e58a1df0c9a9cf0e56879c12be6013.jpg', 'b472b424dc5c6a8a8fb5020d1d9c3fc81thumb.jpg', '5534fce5fb436ca7a0f04483cef8d9d42thumb.jpg', '92ebc7d43a962a971085b22a39a24c3c3thumb.jpg', '', '', 'Z1 is a pioneer of quality sports bikes in Pakistan. With a splendid performance, sporty shape and a first-class impression, Yamaha Ybr 125 simply have no match in the local market. Features like self-start, Alloy rims, alluring speedometer with fuel gauge indicator and an ultra-bright headlight,', 'Kawasaki is a pioneer of quality sports bikes in Pakistan. With a splendid performance, sporty shape and a first-class impression, Yamaha Ybr 125 simply have no match in the local market. Features like self-start, Alloy rims, alluring speedometer with fuel gauge indicator and an ultra-bright headlight,is a pioneer of quality sports bikes in Pakistan. With a splendid performance, sporty shape and a first-class impression, Yamaha Ybr 125 simply have no match in the local market. Features like self-start, Alloy rims, alluring speedometer with fuel gauge indicator and an ultra-bright headlight,', 6, 1, '1.8 Litre SOHC 16 Valve Engine', 0, '1', 25, 320, 280, '4-Speed'),
(7, 'hamza', '2018-06-30', '2018-06-30', 'Yamaha', 2019, 'Yamaha YZF-R1M', 4, 0, 3, 0, '1db099577548da9a5cca6752f5b60b101.jpg', '07f4dea00ec50975cb3fdc1b8ef830e52.jpg', 'a5d684f680b32f3c7c29ab73620749493.jpg', '09adc700715ccee092ab54290933457b1thumb.jpg', '27a96e5ad531a71663943dd274fe353b2thumb.jpg', '2ae304b67a3ca6fe68cca770d5f617793thumb.jpg', '', '', 'A a style icon for several decades; An icon of style, perfection, and power. Honda CG 125 is a perfect tough roadmaster for all kinds of roads and never lets you down when it comes to comfort and economy. Honda 125 is a stunning outcome of latest Japanese technology to survive and run the best performance in all conditions. ', 'Style icon for several decades; An icon of style, perfection, and power. Honda CG 125 is a perfect tough roadmaster for all kinds of roads and never lets you down when it comes to comfort and economy. Honda 125 is a stunning outcome of latest Japanese technology to survive and run the best performance in all conditions. a style icon for several decades; An icon of style, perfection, and power. Honda CG 125 is a perfect tough roadmaster for all kinds of roads and never lets you down when it comes to comfort and economy. Honda 125 is a stunning outcome of latest Japanese technology to survive and run the best performance in all conditions. ', 7, 1, '1 Liter 2 Valve Engine', 0, '2', 40, 340, 280, '5-Speed'),
(8, 'hamza', '2018-07-02', '2018-07-02', 'Kawasaki', 2019, 'Kawasaki Z125', 5, 0, 4, 0, 'ae38f5672bffc83faaeb7ff6e5f4eea81.jpg', 'a111d557a2663cb234f8303382bf0b942.jpg', 'a83545fe678d595a53671d05442835433.jpg', 'b87ed46d59daa99328fcbb26e999ac871thumb.jpg', '55d88d89640606cf17193204939364962thumb.jpg', '5eb4f0f0662d4e2050b206636d0f7cc83thumb.jpg', '', '', 'Kawasaki is a pioneer of quality sports bikes in Pakistan. With a splendid performance, sporty shape and a first-class impression, Yamaha Ybr 125 simply have no match in the local market. Features like self-start, Alloy rims, alluring speedometer with fuel gauge indicator and an ultra-bright headlight,is a pioneer of quality sports bikes in Pakistan. With a splendid performance, sporty shape and a first-class impression, Yamaha Ybr 125 simply have no match in the local market. Features like self-start, Alloy rims, alluring speedometer with fuel gauge indicator and an ultra-bright headlight,', 'Kawasaki is a pioneer of quality sports bikes in Pakistan. With a splendid performance, sporty shape and a first-class impression, Yamaha Ybr 125 simply have no match in the local market. Features like self-start, Alloy rims, alluring speedometer with fuel gauge indicator and an ultra-bright headlight,is a pioneer of quality sports bikes in Pakistan. With a splendid performance, sporty shape and a first-class impression, Yamaha Ybr 125 simply have no match in the local market. Features like self-start, Alloy rims, alluring speedometer with fuel gauge indicator and an ultra-bright headlight,', 32, 3, '1.6 Liter DOHC 16 Valve Engine', 0, '3', 35, 350, 300, '5-Speed'),
(9, 'hamza', '2018-07-02', '2018-07-02', 'Yamaha', 2018, 'Yamaha YZF-R150', 6, 0, 6, 5, 'b7e2ef72c3f25acc1992204c5bdb26481.jpg', 'edb4a6ff5f76217a1fd4301ce3f4278e2.jpg', 'ba080255dde8869517a551fd508234823.jpg', 'a783e051f3afcfd416ea5faca76129791thumb.jpg', '2bed1ac8d4d1355435e8437855f3bfee2thumb.jpg', '65369643faf6ea467dab05d5e9ca42103thumb.jpg', '', '', 'The fascinating silencer modification looks enthralling with the eye-catching tank graphics. Honda CG 125 2018 now comes with Euro II technology offering great miles per kilometre on the road while keeping a good balance of performance and road grip. A fuel tank capacity of 12L ensures that ', 'The fascinating silencer modification looks enthralling with the eye-catching tank graphics. Honda CG 125 2018 now comes with Euro II technology \r\n\r\noffering great miles per kilometre on the road while keeping a good balance of performance and road grip. A fuel tank capacity of 1The fascinating silencer modification looks enthralling with the eye-catching tank graphics. Honda CG 125 2018 now comes with Euro II technology \r\n\r\noffering great miles per kilometre on the road while keeping a good balance of performance and road grip. A fuel tank capacity of 12L ensures that \r\n\r\n\r\n.\r\n', 9, 1, '1 Liter 2 Valve Engine', 700, '1', 35, 420, 300, '4 Speed'),
(10, 'hamza', '2018-07-05', '2018-07-05', 'Yamaha', 2016, 'Yamaha YZF-R15', 5, 50, 4, 0, '791dcd34ffb4d3e9dd594086cc0d59bc1.jpg', '612b2cf296f751ec145e093ac04f010a2.jpg', 'a68ee7b2563072bc03765c7bd11e65c93.jpg', '94df52bcaeb718bb7ff56cd4b63093ab1thumb.jpg', '6dd5a283a66c486fad7597a807ee4d372thumb.jpg', 'ed78280612a496eada44aa7825a593523thumb.jpg', '', '', 'The panoramic sunroof of new Vitara consists of two glass panels, both of which can be slid. Moreover, for big families and for traveling, thereâ€™s plenty of luggage space, to be exact 375 liters. The meter cluster, tilt and telescopic steering wheel, paddle shifters, cruise control and automatic wipers and lights are some of the prominent features you can enjoy, as you drive the all-new Suzuki Vitara.', 'The panoramic sunroof of new Vitara consists of two glass panels, both of which can be slid. Moreover, for big families and for traveling, thereâ€™s plenty of luggage space, to be exact 375 liters. The meter cluster, tilt and telescopic steering wheel, paddle shifters, cruise control and automatic wipers and lights are some of the prominent features you can enjoy, as you drive the all-new Suzuki Vitara.The panoramic sunroof of new Vitara consists of two glass panels, both of which can be slid. Moreover, for big families and for traveling, thereâ€™s plenty of luggage space, to be exact 375 liters. The meter cluster, tilt and telescopic steering wheel, paddle shifters, cruise control and automatic wipers and lights are some of the prominent features you can enjoy, as you drive the all-new Suzuki Vitara.', 20, 3, '0', 100, '2', 0, 350, 320, '5-Speed'),
(11, 'hamza', '2018-07-05', '2018-07-05', 'Yamaha', 2019, 'Yamaha YBR 125', 7, 0, 5, 0, '21f73dc19f57407b61d4a815e1f809531.jpg', '17518539ee61a32b632aebada1096a232.jpg', 'd07cdc72bbae860adef91feb82be40ff3.jpg', '8bc730b5ad47528b4bd26aa7cc2b11ef1thumb.jpg', '1ffd6734368d0d58cf5ada07688a8c7c2thumb.jpg', '21905b440274cd60e8959f02f03ef44b3thumb.jpg', '', '', '2018 comes with a huge 10.1â€ touchscreen infotainment system that captivates attention as soon as you enter the vehicle. Thereâ€™s a pretty attractive climate control system. Once the desired temperature is set, the airflow and outlets are automatically selected and adjusted to maintain a uniform temperature throughout the cabin.', '2018 comes with a huge 10.1â€ touchscreen infotainment system that captivates attention as soon as you enter the vehicle. Thereâ€™s a pretty attractive climate control system. Once the desired temperature is set, the airflow and outlets are automatically selected and adjusted to maintain a uniform temperature throughout the cabin.', 18, 3, '2.5 Liters', 1600, '1', 35, 420, 300, '5-Speed');

-- --------------------------------------------------------

--
-- Table structure for table `heavybikes`
--

CREATE TABLE `heavybikes` (
  `id` int(11) NOT NULL,
  `heavybikes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heavybikes`
--

INSERT INTO `heavybikes` (`id`, `heavybikes`) VALUES
(1, 'Honda CBR150R'),
(2, 'Honda CBR250R'),
(3, 'Honda CBR250RR'),
(4, 'Honda CBR500R'),
(5, 'Honda CBR600F'),
(6, 'Honda CBR600RR'),
(7, 'Honda CBR650F'),
(8, 'Honda CBR1000RR'),
(9, 'Suzuki GSX600 F Katana'),
(10, 'Suzuki GSX750 F Katana'),
(11, 'Suzuki GSX1300 R Hayabusa'),
(12, 'Suzuki GSX-R400'),
(13, 'Suzuki GSX-R600'),
(14, 'Suzuki GSX-R750'),
(15, 'Suzuki GSX-R1100'),
(16, 'Suzuki GSX-R1000'),
(17, 'Yamaha YBR 110'),
(18, 'Yamaha YBR 125'),
(19, 'Yamaha YBR 150'),
(20, 'Yamaha YZF-R1'),
(21, 'Yamaha YZF-R1M'),
(22, 'Yamaha YZF-R2'),
(23, 'Yamaha YZF-R3'),
(24, 'Yamaha YZF-R6'),
(25, 'Yamaha YZF-R15'),
(26, 'Yamaha YZF-R125'),
(27, 'Yamaha YZF-R150'),
(28, 'Kawasaki GTO 100'),
(29, 'Kawasaki GTO 110'),
(30, 'Kawasaki GTO 125'),
(31, 'Kawasaki GTO 550'),
(32, 'Kawasaki Ninja 250'),
(33, 'Kawasaki Ninja 300'),
(34, 'Kawasaki Ninja 650'),
(35, 'Kawasaki Ninja 1000'),
(36, 'Kawasaki Ninja H2'),
(37, 'Kawasaki Z1'),
(38, 'Kawasaki Z125'),
(39, 'Kawasaki Z800'),
(40, 'Kawasaki Z1000'),
(41, 'Kawasaki ZX6 R'),
(42, 'Kawasaki ZX10 R'),
(43, 'Kawasaki ZX14 R');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
(1, 'allow-registration', 'On'),
(2, 'show-login', 'On'),
(3, 'email-verification', 'Off'),
(4, 'cache', 'On'),
(5, 'cache-duration', '3'),
(6, 'default-group', '1'),
(7, 'current-theme', '1'),
(8, 'send-errors', 'On'),
(9, 'send-usage-info', 'On'),
(10, 'usage-info-level', '1'),
(11, 'automatic-updates', 'On'),
(12, 'updates-skip-modified', 'Off'),
(13, 'automatic-updates-purchased', 'On'),
(14, 'automatic-updates-backup', 'On'),
(15, 'tools', 'a:5:{s:13:\"Search Engine\";a:8:{i:0;s:11:\"google-serp\";i:1;s:9:\"bing-serp\";i:2;s:18:\"top-search-queries\";i:3;s:13:\"indexed-pages\";i:4;s:10:\"robots-txt\";i:5;s:7:\"sitemap\";i:6;s:14:\"submit-sitemap\";i:7;s:10:\"alexa-rank\";}s:9:\"Backlinks\";a:4:{i:0;s:22:\"high-quality-backlinks\";i:1;s:13:\"new-backlinks\";i:2;s:14:\"poor-backlinks\";i:3;s:13:\"top-referrers\";}s:4:\"Test\";a:4:{i:0;s:12:\"crawlability\";i:1;s:14:\"mobile-support\";i:2;s:7:\"headers\";i:3;s:10:\"speed-test\";}s:7:\"Content\";a:3:{i:0;s:13:\"link-analysis\";i:1;s:15:\"keyword-density\";i:2;s:17:\"extract-meta-tags\";}s:8:\"Research\";a:2:{i:0;s:11:\"competition\";i:1;s:16:\"keyword-research\";}}'),
(16, 'categories', 'a:5:{i:0;s:13:\"Search Engine\";i:1;s:9:\"Backlinks\";i:2;s:4:\"Test\";i:3;s:7:\"Content\";i:4;s:8:\"Research\";}'),
(17, 'push-updates', 'Off'),
(18, 'ssl-updates', 'Off'),
(19, 'default-language', 'en-us'),
(20, 'token', ''),
(21, 'last-update-check', '1486694593'),
(22, 'last-uinfo-report', '1486694244'),
(23, 'update-missing-translations', '0'),
(24, 'push-token', ''),
(25, 'cron-last-run', '0'),
(26, 'cron-token', ''),
(27, 'seohub-api-key', ''),
(28, 'errors-anonymous', 'Off'),
(29, 'api.secretkey', ''),
(30, 'google-enabled', 'Off'),
(31, 'public-url', 'http://localhost/seo/'),
(32, 'market-count', '0'),
(33, 'market-count-updated', '0'),
(34, 'contact-email-sendto', 'youremail@example.com'),
(35, 'contact-email-sendfrom', 'webmaster@getseostudio.com'),
(36, 'contact-block-speed', 'On'),
(37, 'contact-block-spam', 'On'),
(38, 'contact-send-history', 'YTowOnt9'),
(39, 'seoprofiler-email', ''),
(40, 'seoprofiler-password', '');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`) VALUES
(1, 'Toyota Corolla'),
(2, 'Toyota Vitz'),
(3, 'Toyota Passo'),
(4, 'Toyota Land Cruiser'),
(5, 'Toyota iQ'),
(6, 'Toyota Mark II'),
(7, 'Toyota Prado'),
(8, 'Toyota Camry'),
(9, 'Toyota Celica'),
(10, 'Toyota Starlet'),
(11, 'Honda Civic'),
(12, 'Honda City'),
(13, 'Honda Vezel'),
(14, 'Honda Accord'),
(15, 'Honda Civic Hybrid'),
(16, 'Honda CR-Z Sports Hybrid'),
(17, 'Honda CR-V'),
(18, 'Honda Integra'),
(19, 'Honda Fit Aria'),
(20, 'Honda Fit Hybrid'),
(21, 'Suzuki Mehran'),
(22, 'Suzuki Swift'),
(23, 'Suzuki Cultus'),
(24, 'Suzuki Celerio'),
(25, 'Suzuki Wagon R'),
(26, 'Suzuki Liana'),
(27, 'Suzuki APV'),
(28, 'Suzuki Alto'),
(29, 'Suzuki Ravi'),
(30, 'Suzuki Baleno'),
(31, 'BMW X1 Series'),
(32, 'BMW X5 Series'),
(33, 'BMW i8'),
(34, 'BMW 3 Series'),
(35, 'BMW 5 Series'),
(36, 'BMW 7 Series'),
(37, 'Chevrolet Optra'),
(38, 'Chevrolet Exclusive'),
(39, 'Chevrolet Joy'),
(40, 'Hyundai Santro'),
(41, 'Hyundai Excel'),
(42, 'Hyundai Shehzore'),
(43, 'Hyundai Tucson'),
(44, 'Mercedes Benz CLA Class'),
(45, 'Mercedes Benz SLK Class'),
(46, 'Mercedes Benz CLS Class'),
(47, 'Mercedes Benz S Class'),
(48, 'Mercedes Benz E Class'),
(49, 'Mercedes Benz C Class'),
(50, 'Mercedes Benz CLK Class'),
(51, 'Nissan Titan'),
(52, 'Nissan Tiida'),
(53, 'Nissan March'),
(54, 'Nissan Pino'),
(55, 'Nissan Qashqai'),
(56, 'Nissan GT-R'),
(57, 'Nissan Sunny'),
(58, 'Nissan Bluebird Sylphy'),
(59, 'Nissan AD Van'),
(60, 'Nissan Wingroad'),
(61, 'Audi A3'),
(62, 'Audi A5'),
(63, 'Audi A7'),
(64, 'Audi Q3'),
(65, 'Audi Q5'),
(66, 'Audi R8'),
(67, 'Audi A4'),
(68, 'Audi A6'),
(69, 'Audi Q7'),
(70, 'Audi A8'),
(71, 'Honda'),
(72, 'Suzuki'),
(73, 'Yamaha'),
(74, 'Unique'),
(75, 'Crown'),
(76, 'Eagle'),
(77, 'Hero'),
(78, 'Pak Hero'),
(79, 'Ravi'),
(80, 'Road Prince'),
(81, 'Sohrab'),
(82, 'Super Asia'),
(83, 'Super Power'),
(84, 'Honda'),
(85, 'Suzuki'),
(86, 'Yamaha'),
(87, 'Kawasaki'),
(88, 'Triumph');

-- --------------------------------------------------------

--
-- Table structure for table `uc`
--

CREATE TABLE `uc` (
  `val` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uc`
--

INSERT INTO `uc` (`val`) VALUES
(348);

-- --------------------------------------------------------

--
-- Table structure for table `ucars`
--

CREATE TABLE `ucars` (
  `name` int(11) NOT NULL,
  `img` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `specs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `domain` text NOT NULL,
  `timeCreated` int(11) NOT NULL,
  `timeAccessed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `userId`, `domain`, `timeCreated`, `timeAccessed`) VALUES
(1, 1, 'localhost', 1486696925, 1486697127);

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `val` int(11) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`val`, `year`) VALUES
(1, 2019),
(2, 2018),
(3, 2017),
(4, 2016),
(5, 2015),
(6, 2014),
(7, 2013),
(8, 2012),
(9, 2011),
(10, 2010),
(11, 2009),
(12, 2008),
(13, 2007),
(14, 2006),
(15, 2005),
(16, 2004),
(17, 2003),
(18, 2002),
(19, 2001),
(20, 2000),
(21, 1999),
(22, 1998),
(23, 1997),
(24, 1996),
(25, 1995),
(26, 1991),
(27, 1990);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `bikeposts`
--
ALTER TABLE `bikeposts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `biketype`
--
ALTER TABLE `biketype`
  ADD PRIMARY KEY (`typeid`);

--
-- Indexes for table `bmakers`
--
ALTER TABLE `bmakers`
  ADD PRIMARY KEY (`bmkval`);

--
-- Indexes for table `bpc`
--
ALTER TABLE `bpc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bs`
--
ALTER TABLE `bs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carposts`
--
ALTER TABLE `carposts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`crval`);

--
-- Indexes for table `carspecs`
--
ALTER TABLE `carspecs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`ctval`);

--
-- Indexes for table `cmakers`
--
ALTER TABLE `cmakers`
  ADD PRIMARY KEY (`cmkval`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`val`);

--
-- Indexes for table `featured`
--
ALTER TABLE `featured`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hbmakers`
--
ALTER TABLE `hbmakers`
  ADD PRIMARY KEY (`bmkval`);

--
-- Indexes for table `heavybikeposts`
--
ALTER TABLE `heavybikeposts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `heavybikes`
--
ALTER TABLE `heavybikes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`val`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bikeposts`
--
ALTER TABLE `bikeposts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `biketype`
--
ALTER TABLE `biketype`
  MODIFY `typeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bmakers`
--
ALTER TABLE `bmakers`
  MODIFY `bmkval` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `bpc`
--
ALTER TABLE `bpc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `bs`
--
ALTER TABLE `bs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carposts`
--
ALTER TABLE `carposts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `crval` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `carspecs`
--
ALTER TABLE `carspecs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `ctval` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=461;

--
-- AUTO_INCREMENT for table `cmakers`
--
ALTER TABLE `cmakers`
  MODIFY `cmkval` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `val` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `featured`
--
ALTER TABLE `featured`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hbmakers`
--
ALTER TABLE `hbmakers`
  MODIFY `bmkval` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `heavybikeposts`
--
ALTER TABLE `heavybikeposts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `heavybikes`
--
ALTER TABLE `heavybikes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `val` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
