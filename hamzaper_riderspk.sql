-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2018 at 11:56 PM
-- Server version: 10.1.31-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamzaper_riderspk`
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
(1, 'hamza', 'hamza@pakriders.com', 'admin778', 'admin', 0, 0, 0, 0),
(2, 'hassan', 'hassan@riderspk.com', 'stene777', 'editor', 0, 0, 0, 0),
(3, 'sheheryar', 'sheheryar@riderspk.com', 'harry444@', 'editor', 12, 3, 1, 16),
(4, 'abbas', 'abbas@riderspk.com', 'xcr666@', 'editor', 14, 42, 5, 61);

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
(1, 'sheheryar', '2018-07-11', '2018-07-11', 'Unique', '2018', 'Unique UD-150', 1, 70, 1, 65, '618a4e0a94617ac4a181f8d92bc1bf281.jpg', '4f8b3b3462741b4897b8387cee2e37502.jpg', '2d0821b7caabab7e4b2e2752ec7ca5533.jpg', '0cbb74f83719184e076f6901424dd4621thumb.jpg', 'e8e76b26fe4539edd269d830b18df1d82thumb.jpg', '8f2f80fe225000a9a88be349ffd5b5283thumb.jpg', '', '', 'Unique launched the Crazer UD 150 in Pakistan, with the rising trend of high specs bikes in Pakistan Unique Crazer UD 150 comes with the electric start, Front and rear disc brakes and piggyback rear shocks. Shortly, Unique Crazer UD 150 is a good addition to the product line of Unique, providing good value to money. Unique Crazer UD 150 is available in a price tag of 165000 Pkr.', 'Unique Bikes Pakistan has made a new addition to its motorbike family. It is new 150cc bike Crazer with a sporty shape. Unique Crazer 150cc is launched into bike market in two fascinating colors along with the ultra-powerful engine. It is designed as per modern day standards and requirements.The bright and beautiful led and display of the bike will make anyone fall in love with Unique Crazer and also with their ride on every road. Get ready to explore with the gigantic fuel tank. The extra powerful 150cc engine of the Unique Crazer is the piece of technology. Then there is a new addition in the shape of the durable disk brake. That is means to be safe with hi-tech disk brakes for being safe while cruising.', 9, 3, '4-Stroke Air Cooled Engine', 200, '1', 45, '5-Speed'),
(2, 'abbas', '2018-07-11', '2018-07-11', 'Honda', '2018', 'Honda CG 125 ', 1, 110, 1, 110, '0d97e959e1799a1630cb1b4df802e64f1.jpg', 'f2118d6e553ca11d6c25990d1568923b2.jpg', '76750496f188786451182ebb5aa188173.jpg', 'b4387bcc665955e142b609de9faa15991thumb.jpg', '3fcc3d2be62fadd2399f873e0bf3365d2thumb.jpg', '77227e2a96915df41b28a00dc8ea012c3thumb.jpg', '', '', 'The main competitors of Honda 125 are Yamaha YBR 125,Road Prince 125, Ravi Piaggio 125, United 125 etc.', ' Honda CG 125 2018 now comes with Euro II technology offering great miles per kilometre on the road while keeping a good balance of performance and road grip. A fuel tank capacity of 12L ensures that you donâ€™t stop halfway down for refuelling. Honda 125 is unbeatable and unmatchable.', 12, 2, '125 cc', 100, '1', 40, '4-Speed'),
(3, 'abbas', '2018-07-11', '2018-07-11', 'Yamaha', '2018', 'YBR 125G', 1, 138, 1, 138, 'fa5ad6bdbcb0d9130ae00da3e441224f1.jpg', 'f30aefcc89fad6b93112eaf1fdc265fc2.jpg', 'bfe4cf06f0ca5602cedd5752731d61c43.jpg', '7b8ab29597beb1c301a14db6528237101thumb.jpg', '4a80378b569db8456478ec67812913fb2thumb.jpg', '46f258d534c8293f832a913948e3665c3thumb.jpg', '', '', 'But comfort is better Fuel economy is best Performance is better also Money is so high in pakistan I want to try Yamaha YBR 125G', 'Yamaha presents a wholesome new experience of biking with its new YBR 125G. The YBR 125G is intelligently designed keeping in account the true taste of passionate bikers. Yamaha YBR 125G has an overall look of a trail bike. Yamaha YBR 125G possesses the same engine as of Yamaha YBR 125. Yamaha YBR 125G has powerful shocks that are the key to comfortable and smooth ride of this bike. The alluring speedometer has an rpm and fuel indicator. Significantly broad and comfortable seat of Yamaha YBR 125G ensures good backbone support on long journeys. Alloy rims, self-start mechanism and sporty body shape with dynamic graphics and Yamaha logo forces its buyers to boast proudly of their appealing ride.', 12, 2, '	4-Stroke Single Cylinder Air Cooled', 100, '1', 65, '4-Speed'),
(4, 'abbas', '2018-07-11', '2018-07-11', 'Honda', '2018', 'Honda CB 150F', 2, 167, 2, 167, '03e6a90b9c1c74413072df2d9596c6d71.jpg', '09e22ee41e5333021af3d3ad1859f83f2.jpg', 'd00d0a9e2a3fc5f3d01df358a4b891553.jpg', '1c51d1a164018567971d49ae1a26e48d1thumb.jpg', 'fe53e36828456c132558da2d3060dae42thumb.jpg', 'd140bcd1e93fa24b37a4a7b21367c0bb3thumb.jpg', '', '', 'Very Stylish and unique design', 'Honda presents a wholesome new experience of biking with its new CB 150F. The CB 150F is intelligently designed keeping in account the true taste of passionate bikers.Honda CB 150F has powerful shocks that are the key to comfortable and smooth ride of this bike. The alluring speedometer has an rpm and fuel indicator. Significantly broad and comfortable seat of Honda CB 150F ensures good backbone support on long journeys. Alloy rims, self-start mechanism and sporty body shape with dynamic graphics and Honda logo forces its buyers to boast proudly of their appealing ride.', 12, 3, '150 cc', 100, '1', 55, '5-Speed'),
(5, 'abbas', '2018-07-11', '2018-07-11', 'Road Prince', '2018', ' RP 110', 0, 46, 0, 46, '99913498b9336798bcf74f120bf784431.png', '2530ca3d33ed45cc28ab919ad67518a01.png', 'ffd9a72c965fbbc056dcf04de9a9edc71.png', 'f35816fa48e993c07efb569feaf74be81thumb.jpg', '830493e91a384e31c1092e23544fedd51thumb.jpg', 'e1717e4b3f834f1de511b436e9c924fe1thumb.jpg', '', '', 'Average bike with average comfort level.and Very light weight ', 'Road Prince RP 110 is a reasonably priced bike with a powerful 110cc engine power. Road Prince is proud to present such a powerful bike while maintaining the price tag in times of high inflation. Road Prince RP 110 is a superb engineering effort using the latest Japanese technology to give you the best road experience ever. A significant fuel tank capacity of 10L and a proclaimed city mileage of more than 50 Km/L with the finest of performance is the most appealing characteristic of Road Prince RP 110. Further, the new mudguard and headlight are an addition to the attractive features of Road Prince RP 110.', 10, 1, '110 cc', 100, '1', 50, '4-Speed'),
(6, 'abbas', '2018-07-11', '2018-07-11', 'Road Prince', '2018', 'RP 70', 0, 40, 0, 40, '5134a8c2addb42db70dcf6cdf8f013a81.jpg', '022f78249b698cbcb12377c2912a7dbd2.jpg', '6d42559ced3359abd9cde4385c5de3063.jpg', 'c99e271cb4b0747be0715a4ea6fe150c1thumb.jpg', 'fa5d6ecadad3a91427088c6f26f966602thumb.jpg', '664c57d2102031a2b164601ddb3bc7163thumb.jpg', '', '', 'Road Prince RP 70 has a spacious seat and a powerful 4-stroke engine. \r\nThe bright headlight and tail light makes you ride with good vision and comfort while riding in dark streets. ', 'Road Prince RP 70 has a high resale value against all the 70cc bikes. The road prince RP 70 feels more than comfortable while riding even on rough roads. The speedometer looks stunning with a subtle color combination and smart needle. Road Prince RP 70 has a great material quality that sustains its original look and shine for a long time. Road Prince RP 70 has a spacious seat and a powerful 4-stroke engine. The bright headlight and tail light makes you ride with good vision and comfort while riding in dark streets. Road Prince RP 70 is a mileage friendly bike and proclaims to give more than 55 km/L on usual routes.', 15, 1, '70cc', 100, '1', 70, '4-Speed'),
(7, 'abbas', '2018-07-11', '2018-07-11', 'Road Prince', '2018', ' Wego 150', 2, 20, 1, 80, '520c517d35678340bf9845f76b3e87da1.jpg', 'dda5a06b6925d37f87f635c5376808a52.jpg', 'a18a4db5dff2d08cd64f122fe3b7448e3.jpg', '9fe05cc06bbe6567036cadc20751b54d1thumb.jpg', '218972473fb2b0a5d39b0c144da7f60b2thumb.jpg', 'aa2f8accc9641ad8d6941235809616df3thumb.jpg', '', '', 'Road Prince Wego is a pioneer of quality sports bikes in Pakistan\r\n\r\n', 'Road Prince RP 70 has a high resale value against all the 70cc bikes. The road prince RP 70 feels more than comfortable while riding even on rough roads. The speedometer looks stunning with a subtle color combination and smart needle. Road Prince RP 70 has a great material quality that sustains its original look and shine for a long time. Road Prince RP 70 has a spacious seat and a powerful 4-stroke engine. The bright headlight and tail light makes you ride with good vision and comfort while riding in dark streets. Roadrince is a mileage friendly bike and proclaims to give more than 55 km/L on usual routes.', 12, 1, '	149 cc', 200, '1', 65, '5-Speed'),
(8, 'abbas', '2018-07-11', '2018-07-11', 'Ravi', '2018', 'Piaggio Storm 125', 1, 1, 112, 112, 'bfbdf60286ae2acb85e8fcc5d0e936631.jpg', '9607cebfa8d7d52e2e24bede6af709242.jpg', '7f4373db34a11ae5388bec19e1ad96313.jpg', '70728736ddcc142507a03220b854a6b51thumb.jpg', 'bc5dbd361f2ca9f2d8688df3e65b27f42thumb.jpg', '5c7aa9b9bab2abccf5730d7db9ed59b53thumb.jpg', '', '', 'Ravi Piaggio gained a positive response from the local market in a short time.', 'Ravi Piaggio Storm 125 is not just what you think. Itâ€™s a whole new experience of a sports bike. Ravi Piaggio gained a positive response from the local market in a short time. Equipped with state of the art Italian technology, Ravi Piaggio Storm 125 is a power booster with a 5-speed gearbox and an evergreen performance. The self-starter Ravi Piaggio Storm 125 stepped into a blue ocean market where there was hardly any competition for a reasonably priced sports bike. Ravi Piaggio Storm 125 has a 19 liters fuel tank capacity that is more than enough for a 125cc bike. With smart speedometer and a trendy handlebar, the Ravi Piaggio Storm 125 gives a premium look at a first glance.', 14, 1, '	126 cc', 100, '1', 50, '5-Speed'),
(9, 'abbas', '2018-07-11', '2018-07-11', 'Ravi', '2018', 'Premium R1', 0, 43, 0, 43, '153c47be4f59872619d9691989c02d6e1.jpg', 'be68a437926b8c26d5363dd2bf3654162.jpg', '32ba5160441207e0c089a5e493bcd9f53.jpg', '5d19c8be3d292340e53f24ae8b53e7aa1thumb.jpg', '214e4e6e4530d9f8318e2372deab4aae2thumb.jpg', 'e05c2ac8c805b76662d4c26d3fff49d43thumb.jpg', '', '', 'Ravi gained a positive response from the local market in a short time.', 'Ravi premium R1 proclaims to be a youth icon by presenting a pleasing design, aerodynamic shape and an attractive color combination. Ravi Premium R1 is a fast selling bike owing to its stylish shape, dual dial meter and much-appreciated fuel efficiency. Ravi premium R1 comes in four great colors i.e. blue, grey, black and red. Ravi premium R1 is designed with smart engineering intelligence. The innovative backlight design, front headlight shape and addition of dual dial speedometer on the dashboard gives a new taste to your biking needs. Ravi premium R1 promises a comfortable ride with a smoke-free journey.', 16, 2, '	78 cc', 100, '1', 65, '4-Speed'),
(10, 'abbas', '2018-07-11', '2018-07-11', 'Ravi', '2018', 'Humsafar 70 ', 0, 40, 0, 0, '965747e03b5a03f808e69a77ce0761971.jpg', '2a53a9e0ea4d736dd977c3a32c41da002.jpg', '362288cfec65eed30b9831a2cf542a0c3.jpg', 'ecfeeb9e4d278d24b61cce2ecfe21f971thumb.jpg', 'c0372823200ef0b6ce4a8ad69ac082752thumb.jpg', 'd8408b75c5574102a30fefc4a97902083thumb.jpg', '', '', 'Most of the Pakistani bikes are Chinese. And Chinese are famous for their reverse Engineering.', 'Ravi is one of the 5 motorcycles brands approved by the S&GAD. With all new Japanese technology, Ravi Hamsafar 70 stands as one of the most popular 70cc bikes in the local market. With coil springs Telescopic Hydraulic Forks in front and twin hydraulic shock absorbers, Ravi Hamsafar 70 adds a new comfort zone to your ride. Not worrying about the cost of fuel, you can ride your Ravi Hamsafar 70 anywhere you want. It possesses a great 72cc engine for lasting performance. With all the standard features of a 70cc bike, Ravi Hamsafar 70 is a super economical partner at all times. Ravi Hamsafar 70 has become a benchmark of economy and affordability for a layman', 12, 2, '70cc', 100, '1', 70, '4-Speed'),
(11, 'abbas', '2018-07-11', '2018-07-11', 'Pak Hero', '2018', 'Hero PH 70', 0, 38, 0, 38, '97ecdb7877ea49534505c319f3dc31e61.jpg', 'a0ebb15dfee82c22cb2929b0490e0a442.jpg', 'fc10ee685477a3a4118a1ed27d8fabbf3.jpg', '54e444343a680703e6e3163b284260311thumb.jpg', '824dec1db3637c798d76baefd45769f52thumb.jpg', '0bf4b32d07a804a8fe8524924604702c3thumb.jpg', '', '', 'Pak Hero is now a symbol of trust and reliability. The logo of Pak Hero on PH 70 creates a confidence among buyers.', 'Pak Hero has a solid track record for producing durable and economical bikes for more than a decade now. Pak hero has a number of satisfied customers who praise Pak Hero for every penny of its price. Pak Hero is now a symbol of trust and reliability. The logo of Pak Hero on PH 70 creates a confidence among buyers for spending their valuable money without a hesitation. An evergreen mileage, solid frame and a resale value of lifetime are some significant aspects of the Pak Hero PH 70. Further, a dry weight of 80kg makes Pak Hero PH 70 an ideal choice for beginners because of its stability and easy handling. ', 14, 2, '70cc', 100, '1', 70, '4-Speed'),
(12, 'abbas', '2018-07-11', '2018-07-11', 'Unique', '2018', 'Us 100 Jazba', 0, 55, 0, 55, 'a4846bee93e2a7509d662e57ddb997eb1.jpg', 'f308eb420758a020c1fa5198baeef19c2.jpg', 'fa197967bf6de16c0aa06f359875bb993.jpg', 'e0ed22af32baa68b71b45588d9d313ce1thumb.jpg', '1c48c5f0a3777bf048f457849d0a2a4c2thumb.jpg', 'e19be7df5a5395a37f72c88e28c97aac3thumb.jpg', '', '', 'Lacking millage but good in shape and cost friendly. ', '100cc 4 Stroke engine\r\nAvailable in red and black colors\r\nBeautiful fuel tank graphics\r\nAero dynamic front cowling\r\nNew design rear and front fenders\r\n6 months or 6000 km warranty (Which ever comes first)\r\nNew design rear seat cowling with back l', 12, 2, '98 cc', 100, '1', 50, '4-Speed'),
(13, 'abbas', '2018-07-11', '2018-07-11', 'Unique', '2018', 'US 125 Euro II', 0, 68, 0, 68, 'ff74db9d2129dd4eb4659c9698beefee1.jpg', '5e38f53921ff8a032d4d50fa5635b4302.jpg', '0ce6ee514ef6272e6e7a864ab65f84483.jpg', 'feaa5b7b7f25cc108b6dfdcfa675f00a1thumb.jpg', '7d408bbece76cc8b5e45c74e6234590a2thumb.jpg', '0b11dedf8724ed9a67804836542b8c773thumb.jpg', '', '', 'United US 125 Euro II is a perfect blend of engineered fuel efficient technology and powerful 125cc engine.', 'United US 125 Euro II launches in a time when there is a high demand for fuel efficient bikes. The primary goal to launch the United US 125 is to target potential customers who have high requirements for a fuel efficient conveyance. United US 125 encompasses a patent Euro II technology exclusively engineered to qualify your mileage requirements. Not only this, a considerably low price tag of United US 125 Euro II gives an opportunity to the buyers to consider this bike over other 125cc bikes in the market. United US 125 Euro II is a perfect blend of engineered fuel efficient technology and powerful 125cc engine.', 15, 2, '125cc', 100, '1', 40, '4-Speed'),
(14, 'abbas', '2018-07-11', '2018-07-11', 'Eagle', '2018', 'Eagle Fire Bird DG70 ', 0, 38, 0, 38, '8f4dee5709d4df20c85fd27e1e88670f1.jpg', '8f4fdc6618c353c78a3512dd034f6b462.jpg', '4ec7124468b144324a701a9fb878c0243.jpg', 'e41d09a503418ad6d9f0c6d4b5b9a7a51thumb.jpg', 'b388f15e690dcc510f3d0f6d8c568d682thumb.jpg', '13985fc2d7e696643787ae73e352b9fc3thumb.jpg', '', '', 'Nice look and comfort is ok as compared with other China bikes. Has more weight if compared with new Honda cd 70. Most important is low price bike. ', 'Eagle group of industries presents an affordable but uniquely shaped 70cc bike- Eagle Firebird 70. The Eagle Firebird 70 small bike with 4 stroke air cooled engine and an engine displacement of 72 cm3 only. Eagle Firebird 70 encompasses a special 4-stroke technology to add extra miles to your mileage. Nicely put up graphics on the tank and side covers along with a unique masked headlight sounds sensible in a price of 46,000 PKR. Eagle Firebird 70 proclaims to have a hi-tech suspension system that guarantees smooth ride on bumpy and uneven surfaces. With a 10L fuel capacity and 1L in the reserve tank, Eagle Firebird meets all your basic needs for a reasonable price.', 16, 2, '70cc', 100, '1', 70, '4-Speed'),
(15, 'abbas', '2018-07-11', '2018-07-11', 'Hero', '2018', 'RF 70 ', 0, 42, 0, 42, 'b890a338ba4a1c86de696996774439031.jpg', 'eba31ca2b8469af48f5560b5937298632.jpg', 'dd8c89595611f875ddb1beee17e22b1e3.jpg', 'da41f920c3b855030e9d28a3ab6d87fe1thumb.jpg', 'b7d992a2e3fa3a7c96d33c7423024e472thumb.jpg', 'd0bbf02ce25e8a436a39e8503672ad963thumb.jpg', '', '', 'HERO RF 70 FEATURES & SPECS\r\nHero 70cc bike offers a lot with the attached price tag. Hero 70cc is very popular because of the light weight it has making it more powerful than other 70cc bikes comparatively. The suspension system is not very advanced and is found to be a common one, but it still does its work well. ', 'Looking for a perfect road partner? Here Hero RF 70 for you. The ideal road partner Hero RF 70 would not let you down with its impressive mileage, comfortable ride and sleek shape with striking graphics. The extended dealership network of Hero facilitates you with easy availability of spare parts at your doorstep. A countrywide network warranty claim centers provide hassle free services. Hero RF 70 dominates over its counterparts with its durability and unmatched technology to contest the standards of modern bikes. ', 14, 2, '70cc', 100, '1', 70, '4-Speed'),
(16, 'abbas', '2018-07-11', '2018-07-11', 'Hero', '2018', 'RF 125 ', 0, 90, 0, 90, '00bb296008337df6e62860027e5d76d71.jpg', 'fa2c8472211474191e7c6712bf70df3b2.jpg', '4077b155f3e75c6104f3310d907afa3a3.jpg', 'f1f65e86e5da0c767398177e413f6d411thumb.jpg', 'fd6f9413ef92fb86f8d011f5489141d12thumb.jpg', 'edccbfd7571f08a0921b520750f14a663thumb.jpg', '', '', 'The new eye-catching graphics, comfortable new seat design and aerodynamic shape.', 'New 125cc is an ideal combination of attractive design with super econo-power and smoke-free 4-Stroke engine, which promises you the most economical ride of your life. The new eye-catching graphics, comfortable new seat design and aerodynamic shape', 12, 2, '125 cc', 100, '1', 50, '4-Speed'),
(17, 'abbas', '2018-07-11', '2018-07-11', 'Yamaha', '2018', 'YBR 125', 1, 30, 1, 32, 'b1e1f2bf06cab2a1953d1dfb7a153e271.jpg', 'fb3c0c466ce4b68053d55a6b9fc837022.jpg', 'b00c638be194f6bdb7513262bb1759063.jpg', '70745e5afb01b445f4c67e179d8ef14e1thumb.jpg', 'e08f94705942ec2037942c810c7493242thumb.jpg', 'fc3da8d39568c26cb3f17a616b9258203thumb.jpg', '', '', 'Feel of this bike is amzing Drive style is also mindblowing Look of the bike is cool Modification point of view this bike has also a perfect machine Sound if bike is so slient', 'Yamaha Ybr 125 is a pioneer of quality sports bikes in Pakistan. With a splendid performance, sporty shape and a first-class impression, Yamaha Ybr 125 simply have no match in the local market. Features like self-start, Alloy rims, alluring speedometer with fuel gauge indicator and an ultra-bright headlight, Yamaha Ybr 125 is worth every penny you spend. Yamaha Ybr 125 possesses a highly comfortable rider and passenger seat. A 13L fuel tank coupled with surprisingly great fuel economy makes you go miles without worrying about refilling or fuel cost. The road grip of Yamaha Ybr 125 simply feels like more than a two-wheeler. Yamaha Ybr 125 does not disappoint its buyers at any point in time. Yamaha Ybr 125- A taste of superiority. One can also find this motorcycle on PakWheels listings.', 17, 2, '124cc', 100, '1', 50, '4-Speed'),
(18, 'abbas', '2018-07-11', '2018-07-11', 'Yamaha', '2018', 'YBR 125G', 1, 38, 1, 45, '22b2282df6874358397798376ec045ee1.jpg', '9af7fc607c304d133e671c027bb0d5ea2.jpg', 'a58b13e9412e99accd5fbe278a286abc3.jpg', '432588a086ff3ebee9d4faef692d1e631thumb.jpg', '958eba316661baf272e06821f980e8252thumb.jpg', 'bf7ad4d9504c51a750e0ef719195c73b3thumb.jpg', '', '', 'Yamaha YBR 125G has powerful shocks that are the key to comfortable and smooth ride of this bike.', 'Yamaha presents a wholesome new experience of biking with its new YBR 125G. The YBR 125G is intelligently designed keeping in account the true taste of passionate bikers. Yamaha YBR 125G has an overall look of a trail bike. Yamaha YBR 125G possesses the same engine as of Yamaha YBR 125. Yamaha YBR 125G has powerful shocks that are the key to comfortable and smooth ride of this bike. The alluring speedometer has an rpm and fuel indicator. Significantly broad and comfortable seat of Yamaha YBR 125G ensures good backbone support on long journeys. Alloy rims, self-start mechanism and sporty body shape with dynamic graphics and Yamaha logo forces its buyers to boast proudly of their appealing ride', 12, 2, '125cc', 100, '1', 50, '4-Speed'),
(19, 'abbas', '2018-07-11', '2018-07-11', 'Yamaha', '2018', 'YB 125 Z ', 1, 16, 1, 20, 'c6cbd4ec83128bfc466d24964b2d3e3f1.jpg', '4455a60bb6e75d2484040a5093bf13b82.jpg', 'd517a1894ae928246af94f0470c3445f3.jpg', 'd27a3dcbfc55bf9d95932283ffc92f541thumb.jpg', 'e05e385287226e337f08285ab52b59f12thumb.jpg', 'c79066755a35a305e93558d93e41d3023thumb.jpg', '', '', 'Yamaha YBR 125Z has powerful shocks that are the key to comfortable and smooth ride of this bike. .', 'Yamaha YB 125Z was designed in a straight forward and rugged design to cache into the conventional market of local consumers. Yamaha YBR 125Z possesses the same engine as of Yamaha YBR 125. Yamaha YBR 125Z has powerful shocks that are the key to comfortable and smooth ride of this bike. The alluring speedometer has an rpm and fuel indicator. Significantly broad and comfortable seat of Yamaha YBR 125Z ensures good backbone support on long journeys. Yamaha Pakistan in an effort to make it price lower than the other models, excluded the disc brakes at the front and rear wheel. Yamaha YB 125Z is priced at Rs.115900 PKR.', 12, 2, '125 cc', 100, '1', 50, '4-Speed'),
(20, 'abbas', '2018-07-11', '2018-07-11', 'Suzuki', '2018', ' Inazuma Aegis ', 10, 0, 10, 50, '797280d19ff38bc8952fbea355be70b91.jpg', '4d34fad0dc3b0fc3a1dc7b40087b222b2.jpg', '5ca8a36bfa7a9e75bca3ccf555381ffc3.jpg', '555d906644aeac553dbc0d742a7eb2141thumb.jpg', '446e842d6dc8a14f440b4c73ac51e58a2thumb.jpg', '54834bd2605f3ea6476951911ef9df763thumb.jpg', '', '', 'Inazuma is gripping its success on the roads of all over the country with is heavy bike designs', 'When it comes to heavy bikes, the fabulous way to travel is with the Suzuki Inazuma Aegis 250. Itâ€™s a set of everything you can dream of. It has style, comfort, energetic sound and performance that goes beyond expectations. With its advanced fuel injected twin cylinder engine, Suzuki Inazuma delivers the best of smooth and powerful ride. With patent Suzuki quality, durability, and features, Suzuki Inazuma possesses a multi-functioned digital LCD speedometer containing a tachometer that indicates the gear levels. The digital LCD speedometer shows odometer, twin trip meter, clock display along with fuel level indicator, maintenance interval reminder and adjustable rpm indicator. The fuel injection system of Suzuki Inazuma electronically manages the fuel volume to provide improved fuel economy while ensuring fewer emissions. The electronic management also provides improved stability and throttle response.', 16, 3, '	250 cc', 100, '1', 50, '5-Speed'),
(21, 'abbas', '2018-07-11', '2018-07-11', 'Suzuki', '2018', 'Suzuki Bandit ', 15, 50, 16, 0, '22ca6b9331a91ff3e1fabb8428940c121.jpg', '7ad9cbd44ede7979dcb43404b375bd922.jpg', '8bf163e392da49112e04ca867ae5cc673.jpg', 'ae98bea46e276223be5aa415585600d51thumb.jpg', 'ead1cea81e39bef30cfaaa7da3be65c82thumb.jpg', '2e4da485cc89fbdf461ca5732380b28e3thumb.jpg', '', '', 'Suzuki Bandit is not just a bike, a winner on the road.  like a heavy bike', 'Suzuki Bandit is not just a bike, a winner on the road. If you have an urge of victory on the road, there cannot be a better road companion than Suzuki Bandit. Suzuki Bandit sets a new trend in the heavy bikes with its performance, advanced specifications and disk brakes. The substantial body of Suzuki Bandit proves the durability factor with every sport feel you need. A 4 stroke DOHC engine with 16 valves ensures winning performance on the racing track. The balanced suspension system at front and back provides a smooth ride with crisp handling. Enthralling design with eye-catching graphics and a powerful shock absorber: Suzuki Bandit offers you to experience a new, fun-filled ride.', 12, 3, '	656 cc', 100, '1', 40, '5-Speed'),
(22, 'sheheryar', '2018-07-12', '2018-07-12', 'Honda', '2018', 'HONDA CG 125', 1, 65, 1, 60, '8be876a70c7dd6506ba85049a84469451.jpg', 'b5fe35ba629ed462fca8872f4887c7ed2.jpg', '511f4b375a4e90c4f5b004f3b10f72153.jpg', 'b9f280618b299027a83e48d81b2410d51thumb.jpg', '40e6a9172f8b3fbb5c231dbaff588ac92thumb.jpg', '814325cca3b3b08a7f00210da9d439ef3thumb.jpg', '', '', 'There are several reasons why you should trust on Honda CG 125 2018. Firstly, it is the brand of Atlas Honda and CG 125 is friendly on all types of roads. It never lets you down when it comes to economy and comfort. It is also an icon of power, style, and perfection. Most interestingly, the number of Honda bikes on the road is greater than the number of other bikes of companies altogether. When a greater majority of people are trusting on the Honda CG 125 2018, it also deserves your trust. In addition to this, it has a high resale value. This is because there is a great demand for used Honda bikes. It also indicates that the technology of this Honda CG 125 bike is durable, advanced, and trustworthy.', 'Atlas Honda first started its operations back in 1962. Presently, it is in the fortune 500 list of top businesses of the country. The Honda Cg 125 is a bike made by Honda Motors Japan and the Atlas Group Pakistan. As a consequence, the Honda 125 is truly a work of art. Moreover, the firm is the prime makers of top quality bikes and spare parts.\r\nHonda is famous for making a sum of 1.3 million motor cycles in a year. It has 2 plants in the country. First plant is in Sheikhpura which makes around 1.2 million bikes in a year. Second is in Karachi which makes around 150,000 bikes in a year. The Honda CG 125 is famous for its huge fan base and customer loyalty. Hondaâ€™s brand value is proven to be 10 times more than other bike companies. Honda proudly and widely exports its bikes and spare parts to almost all the Asian countries. Furthermore, it aims to rise as the top auto mobile firm in the world and sell the largest number of great bikes.', 14, 2, '4-Stroke OHV, 125cc Engine', 200, '1', 45, '4-Speed'),
(23, 'sheheryar', '2018-07-12', '2018-07-12', 'Honda', '2018', 'HONDA CB 150F', 1, 67, 1, 59, '61dc23e826d33bf62baa592b7b55310e1.jpg', '67da3301efb20057459cc3a68ccfed492.jpg', '05add6f3dbed0fc74f350995780dd7493.jpg', '28eec1c123805e9636407c0d1fe9db181thumb.jpg', 'f5ab524f4349e3d71ec89c3df6059af42thumb.jpg', '71061f23e714660865e3bebdd35c82573thumb.jpg', '', '', 'Honda presents a wholesome new experience of biking with its new CB 150F. The CB 150F is intelligently designed keeping in account the true taste of passionate bikers.Honda CB 150F has powerful shocks that are the key to comfortable and smooth ride of this bike. The alluring speedometer has an rpm and fuel indicator. Significantly broad and comfortable seat of Honda CB 150F ensures good backbone support on long journeys. Alloy rims, self-start mechanism and sporty body shape with dynamic graphics and Honda logo forces its buyers to boast proudly of their appealing ride.', 'Atlas Honda has been dominating the Pakistani motorcycle industry for a very long time and we all know that already. In 2017, Honda takes the automobile concept to a whole new level by launching its very first 150 cc bike in Pakistan. Honda has been manufacturing and selling the 70cc, 100cc and 125cc motorcycles in Pakistan for a very long time and now it decided to take the automobile industry of Pakistan to the next stages by launching the New Honda CB 150cc in Pakistan. The Honda lovers of Pakistan are already hyped and super-excited to get their hands on this absolute beauty. The price of Honda CB150cc in Pakistan is Rs. 159,000. The main competitor of Honda CB 150cc in Pakistan is the Yamaha FZ-16 150cc. Honda CB 150 is all packed to amaze the Honda lovers and keep the automobile competition going.', 15, 3, '4 stroke 15cc SOHC inherent turbo air cooled engine with balancer', 200, '1', 55, '5-Speed'),
(24, 'abbas', '2018-07-12', '2018-07-12', 'Super Power', '2018', 'SP 70', 0, 48, 0, 48, '4a20aeb71e6359c4bef0ef656d65ba881.jpg', '1e834672fa89e8c20d83a0ee516afda72.jpg', '601f50b2d3ffca5d7deeae86035b9f5f3.jpg', 'ddd0fb95da9642007f368994cb1bdb1b1thumb.jpg', 'ae8906b267374687b996de0467291a932thumb.jpg', '14427175b5fb47d31f72c949f1505aec3thumb.jpg', '', '', 'Super Power 70 is the new affordable and user friendly bike introduced by Super Bikes Pakistan', 'Super Power is a struggling motorcycle brand in Pakistan. With immense competition in market, Super Power has tried its level best to cater the growing demands of customers by offering them a competitive advantage. Super Power SP 70 is a mid-range 70cc bike not much popular in the market. Super Power has launched SP 70 using the same fundamentals and standard specifications used by other bike companies. The price of Super Power SP 70 is somewhat similar to other Chinese bikes in the market. Super Power has added an innovative touch to their product by offering mobile charge facility in the dashboard meter which is quite beneficial for customers willing to use bikes for ride-hailing services like careem and uber. A strong shock absorber in Super Power SP 70 facilitates the rider to a great extent.', 14, 2, '70cc', 100, '1', 70, '4-Speed'),
(25, 'abbas', '2018-07-12', '2018-07-12', 'Super Power', '2018', 'SP 110', 0, 81, 0, 81, '6c34bcb098f27f23838c0909e118f9ba1.jpg', '7cd72c80b338067de9518e0a630bde5e2.jpg', 'b2fe0264000d03b96e643c37b609dc3f3.jpg', 'b7f10cb7e11b3fc1812fa4fedb5522751thumb.jpg', 'd0b0659175bf85e409cc9b90188443e92thumb.jpg', '3fc324ef5d3dce8b3794a701395e475d3thumb.jpg', '', '', 'With immense competition in market, Super Power has tried its level best to cater the growing demands of customers.', 'Super Power is a struggling motorcycle brand in Pakistan. With immense competition in market, Super Power has tried its level best to cater the growing demands of customers by offering them a competitive advantag', 15, 2, '110 cc', 100, '1', 50, '4-Speed'),
(26, 'abbas', '2018-07-12', '2018-07-12', 'Super Power', '2018', 'Leo 200', 2, 200, 2, 200, '5dd87545ae2b3ebe1172120e51c562661.jpg', '1ad61e7b0a4bdf77f2ea1d3b2102f4e72.jpg', '583fa060984bb5c3f248494493ded5473.jpg', 'f6a7a6b068e3d31a89cc0214d7b683681thumb.jpg', '0e06fbee8793d2d81e04d8a9f6cb7bf42thumb.jpg', '1f1abd72b9acd4ddd507e4e8aa8128ad3thumb.jpg', '', '', ' The main difference between international and local variants is that in Pakistan it comes with 5-speed transmission while GP 200 comes in 6-speed transmission.', 'Super Power Leo 200 comes with the powerful engine, alloy wheels, and sporty outlook.  Super Power has a contemporary and elegant design to allure young biker enthusiasts in the country. Super Power Leo 200 is also known as Loncin GP 200. The main difference between international and local variants is that in Pakistan it comes with 5-speed transmission while GP 200 comes in 6-speed transmission. Super Power Leo 200 has an overhead valve engine with a compression ratio of 9.2.1. The overall look of  Super Power Leo 200 is quite appealing. Super Power Leo 200 price in Pakistan is 2 lacs PKR.   ', 12, 2, '200cc', 200, '1', 30, '5-Speed'),
(27, 'abbas', '2018-07-12', '2018-07-12', 'Crown', '2018', 'Crown Jazba 70 ', 0, 42, 0, 42, '9924e2a329cbcf4e91d0d5c4c302427c1.jpg', 'ee6c514288af5ec1854702e910e57c422.jpg', 'e59200cb0e0e8c8f4ac84b09d24a96ae3.jpg', '25f0b035c5a6332acbdd685fb1fd76fe1thumb.jpg', '9e1e5b47083c7b95ac740499d776f36a2thumb.jpg', 'ec7212ca2721ce85c874a556a32142a03thumb.jpg', '', '', 'Coming out Successful, Crown Jazba is the new style icon and power companion.', 'Crown Jazba 70 is an outcome of growing success sales of Crown Motorcycle makers. The specially designed Crown Jazba 70 has a unique backbone comfort and highly efficient hydraulics to make you feel the true Jazba of a comfortable ride. The sense of true Jazba in the Crown Jazba 70 can also be felt through its highly reasonable mileage and great performance. The single cylinder 4-stroke air cooled engine ensures smoke-free emissions. The beautifully designed speed o meter looks stunning and adds as a considerable feature of Crown Jazba 70. Enjoy the ultimate feel of true jazba with the aerodynamic design of Crown Jazba 70.', 15, 2, '70cc', 100, '1', 70, '4-Speed'),
(28, 'abbas', '2018-07-12', '2018-07-12', 'Crown', '2018', 'CR 125 Euro', 0, 69, 0, 69, '9a5ccc062d64a0ffe9488706288657e71.jpg', 'a290d5d4512bce9aba2243e19584e5d92.jpg', 'ef5592aa61c5d16fe623d76a9515dfcd3.jpg', 'd13e768c4c0cafeb25ab8085087da28e1thumb.jpg', '02920144e5f47859b2c0bf6d452f4bbf2thumb.jpg', '86d6b5a439cc58f0ea62f55a5a5ccac03thumb.jpg', '', '', 'Crown 125 Euro II is a treat for bike lovers with a limited budget. The Crown 125 Euro II is primarily a power oriented bike for ultimate thrill and performance while maintaining an solid backbone support.', 'Crown 125 Euro II is a treat for bike lovers with a limited budget. The Crown 125 Euro II is primarily a power oriented bike for ultimate thrill and performance while maintaining an solid backbone support. The smooth ride, spectacular performance and dynamic body shape are everything one can ask for in a price tag of 66,000 PKR. The reserve fuel tank of 2L is added to ensure an uninterrupted expedition. Crown 125 Euro II has a 4 stroke OHC air-cooled engine which ensures ultimate power performance for fulfill your biking lust. Even if itâ€™s a devastated road, the heavy duty hydraulics is enough to support your backbone for a comfort-friendly long trip', 12, 2, '125cc', 100, '1', 45, '4-Speed'),
(29, 'abbas', '2018-07-12', '2018-07-12', 'Unique', '2018', ' UD 70 ', 0, 47, 0, 47, 'c20708e8714086544ad59b8ec82b0d8a1.jpg', 'f4df6da2bfd8f6d9451993ca7e1f6ebd2.jpg', '97cce18ae14d703fdab88974df03b9de3.jpg', 'aeddd6d82b17fad12528772adef066f61thumb.jpg', 'ebfbf354bd5535e3e99824068337b9e72thumb.jpg', '339573e812e3e16119645a37fdeda2b03thumb.jpg', '', '', 'Unique Xtreme UD 70 proclaims to be a trustworthy road partner with multi-colour body graphics.', 'Unique Xtreme UD 70 proclaims to be a trustworthy road partner with multi-colour body graphics. Unique Xtreme UD 70 has a reasonable resale value in the used bike market. Unique Xtreme UD 70 is Equipped with Euro II technology which enhances the fuel economy of the motorcycle. Unique UD 70 is quite similar to other 70cc bikes available in the market. Unique UD 70 is available in black and red color.  ', 12, 2, '70cc', 100, '1', 70, '4-Speed'),
(30, 'abbas', '2018-07-12', '2018-07-12', 'Unique', '2018', 'UD 125', 0, 75, 0, 75, 'af32854d1ab1f9302a4b5e103494e1611.jpg', 'd8d0218e2a885cfd4fc82f25d62d5b1f2.jpg', '3446550013f1eba848882ec0d9e5d5183.jpg', 'c25c04c00a787755e1ddebbe2fbf566d1thumb.jpg', '9d4b2b50a2b7101d5e1ad633c2e08cba2thumb.jpg', '1dbf80f811fef6a66dd1f431a93491943thumb.jpg', '', '', ': Unique UD 125 invites the buyers to enjoy the power of a 125cc engine without spending a heavy amount', 'Unique UD 125 comes for accomplishing a challenge of climbing the charts of best-selling bikes. Unique UD 125 presents the same conventional shape of a 125cc bike with a slight difference of colored graphics with the logo design. With similarity in design, headlight, tail light, back seat bar and handle bar: Unique UD 125 invites the buyers to enjoy the power of a 125cc engine without spending a heavy amount. The bike further contains strong shock absorbers to prevent vibration on rough roads. Unique UD 125 is a choice of those who look forward to improve their travel life without exceeding their budget.', 18, 2, '125 cc', 100, '1', 45, '4-Speed'),
(31, 'abbas', '2018-07-12', '2018-07-12', 'Unique', '2018', 'UD 100', 0, 85, 0, 85, '4f717fab2f50d771b8b64c653b29fa2f1.jpg', '3ab9226555f67b8d90dd9db35df90b422.jpg', '8b4d2d2072079ed213ddcda511190b0c3.jpg', '1ed4ea8401e6f90610fdbf3afa01d1eb1thumb.jpg', '7dde8f37003a2cca491b5fe2fd8ecd362thumb.jpg', '141732fba923e30c1ce21fd379a3ec873thumb.jpg', '', '', ' Most importantly, the performance of a 100cc 4stroke air cooled engine cannot be underestimated', 'Unique UD 100 comes one step forward for a number of reasons. The great Chinese technology with an overall shape of a modern bike is the best combination seems to be the best combination devised. The decent exhaust sound, stylish body and a mileage of around 50 Km/L is what a buyer looks for in a limited budget. Most importantly, the performance of a 100cc 4stroke air cooled engine cannot be underestimated. Unique UD 100 lets you enjoy a taste of performance, fuel efficiency and fascinating shape with creative graphics. Unique UD 100 is a delight for every bike seeker with a limited budget.', 16, 2, '100cc', 100, '1', 50, '4-Speed'),
(32, 'abbas', '2018-07-12', '2018-07-12', 'Unique', '2018', 'Crazer UD-150', 2, 70, 2, 50, '0a61aedd0852b4ad6f437bad56abfb311.jpg', '0af7c801188eb0eeaf54b1df1166c74e2.jpg', '8a8da488eac208dd16c2dc75091173943.jpg', 'da877e76980f39ff17f4d1758de7bffa1thumb.jpg', 'dda1b3dc40aa04dbf46f310dc0c30cd32thumb.jpg', '1e459cd71f423c627840d6ce1f95a8393thumb.jpg', '', '', 'Unique Crazer UD 150 comes with the electric start, Front and rear disc brakes and piggyback rear shocks. ', 'Unique launched the Crazer UD 150 in Pakistan, with the rising trend of high specs bikes in Pakistan Unique Crazer UD 150 comes with the electric start, Front and rear disc brakes and piggyback rear shocks. Shortly, Unique Crazer UD 150 is a good addition to the product line of Unique, providing good value to money. Unique Crazer UD 150 is available in a price tag of 165000 Pkr.', 15, 2, '150 cc', 100, '1', 40, '4-Speed'),
(33, 'abbas', '2018-07-12', '2018-07-12', 'Hero', '2018', 'RF 70 ', 0, 42, 0, 42, '513a8eeabfbf7bbcf5671b557826ec411.jpg', '6082ce838d15cb5868fdb28e125569b52.jpg', '7ccd963538b1b4361f92af81fc9f83be3.jpg', '3d4874b40abec40d4e511f67087e860f1thumb.jpg', 'fd8bd61fb763ed048967063b60d4a9ac2thumb.jpg', '3993ace80b1d4bcaa465f631ce3459353thumb.jpg', '', '', 'Hero 70cc bike offers a lot with the attached price tag. Hero 70cc is very popular because of the light weight it has making it more powerful than other 70cc bikes comparatively. The suspension system is not very advanced and is found to be a common one, but it still does its work well. ', 'Looking for a perfect road partner? Hereâ€™s Hero RF 70 for you. The ideal road partner Hero RF 70 would not let you down with its impressive mileage, comfortable ride and sleek shape with striking graphics. The extended dealership network of Hero facilitates you with easy availability of spare parts at your doorstep. A countrywide network warranty claim centers provide hassle free services. Hero RF 70 dominates over its counterparts with its durability and unmatched technology to contest the standards of modern bikes. ', 16, 2, '70cc', 100, '1', 70, '4-Speed'),
(34, 'abbas', '2018-07-12', '2018-07-12', 'Hero', '2018', ' Plus 90', 0, 44, 0, 44, '4d6f9a3fddd639c15db1e9de3c7695e91.jpg', '3a332be4159f4e2392490174c83cd9932.jpg', 'cc1fd08e57cf39f8cd3ef3be08aad3f13.jpg', '03560be76a6dc0664eae5a96aeedc65a1thumb.jpg', 'd8df5f0b978f30efa6714dd0c20f523f2thumb.jpg', 'd3ed304c54226570c600590e8667e9f73thumb.jpg', '', '', '', 'The ideal road partner Hero Plus 90 would not let you down with its impressive mileage, comfortable ride and sleek shape with striking graphics.  A dry weight of 80 kg for the Hero Plus 90 makes stable enough for beginners to ride with utmost safety and pleasure.', 15, 2, '72cc', 100, '1', 65, '4-Speed'),
(35, 'abbas', '2018-07-12', '2018-07-12', 'Hero', '2018', ' Splander 100 ', 0, 53, 0, 53, '7937869c32a5da0ce6099c4b7b552e3a1.jpg', '483ef5e9db4e7f72c72640113e8f11452.jpg', 'e3b1a4e82d9742585722e5b0ea793fe83.jpg', 'b5d8ac3bcac59fe50fddb7337f6713481thumb.jpg', '4cedba84b8b5041b4a4d992a70376b152thumb.jpg', '39ea06d1b3489226a5a2aac2f11afbda3thumb.jpg', '', '', 'The new eye-catching graphics, comfortable new seat design and aerodynamic shape.', 'New Splander 100cc is an ideal combination of attractive design with super econo-power and smoke-free 4-Stroke engine, which promises you the most economical ride of your life. The new eye-catching graphics, comfortable new seat design and aerodynamic shape.\r\n\r\n ', 14, 2, '100cc', 100, '1', 50, '4-Speed'),
(36, 'abbas', '2018-07-12', '2018-07-12', 'Hero', '2018', 'RF 125', 0, 90, 0, 90, '4f3172a89c135887a5d2b4e37cb9e4ff1.jpg', '279e3a255a4fcfd20da97bc27ec4ee072.jpg', '93d474eec11747038ba5bb7281dce2ca3.jpg', '702fcb04092784af971b7263ce6d9e281thumb.jpg', 'eb8e4d4f2d6b9477077f488cee9012732thumb.jpg', '1c83cd91b6ef726a86139cd7cf8db73b3thumb.jpg', '', '', 'The new eye-catching graphics, comfortable new seat design and aerodynamic shape.', 'New 125cc is an ideal combination of attractive design with super econo-power and smoke-free 4-Stroke engine, which promises you the most economical ride of your life. The new eye-catching graphics, comfortable new seat design and aerodynamic shape.', 12, 2, '125 cc', 100, '1', 45, '4-Speed'),
(37, 'abbas', '2018-07-12', '2018-07-12', 'Ravi', '2018', 'Humsafar 70', 0, 40, 0, 40, '4427b99ac3ac31a12dbd2606e6793e381.jpg', '65e01a17306996215ed1550021a374f72.jpg', '5dfee311ecbcd7b64fba345e532cc7673.jpg', '2980295bec2ee7da0c4d50215bf6a6ed1thumb.jpg', 'adbc43115a30836e491582a29554dff52thumb.jpg', '159e0fcc92b20b451a53eb42193615353thumb.jpg', '', '', 'Ravi Hamsafar 70 stands as one of the most popular 70cc bikes in the local market. With coil springs Telescopic Hydraulic Forks in front and twin hydraulic shock absorbers.', 'Ravi is one of the 5 motorcycles brands approved by the S&GAD. With all new Japanese technology, Ravi Hamsafar 70 stands as one of the most popular 70cc bikes in the local market. With coil springs Telescopic Hydraulic Forks in front and twin hydraulic shock absorbers, Ravi Hamsafar 70 adds a new comfort zone to your ride. Not worrying about the cost of fuel, you can ride your Ravi Hamsafar 70 anywhere you want. It possesses a great 72cc engine for lasting performance. With all the standard features of a 70cc bike, Ravi Hamsafar 70 is a super economical partner at all times. Ravi Hamsafar 70 has become a benchmark of economy and affordability for a layman', 9, 2, '70cc', 100, '1', 70, '4-Speed'),
(38, 'abbas', '2018-07-12', '2018-07-12', 'Ravi', '2018', 'Premium R1', 0, 43, 0, 43, 'e778e19f6311d373ec0bad4a326925281.jpg', 'ec687f081bd3cef1c6297206ab172c212.jpg', 'b356143672d89e1d7df9569298ac48303.jpg', 'd73a76781c25bdd3b865077a7f61cf3f1thumb.jpg', '0f47d928a9c2d7967fa18b57733da91b2thumb.jpg', '0dbe9f168808bcbdedeefdf6c0be440c3thumb.jpg', '', '', 'R1 is designed with smart engineering intelligence. The innovative backlight design, front headlight shape and addition of dual dial speedometer.', 'Ravi premium R1 proclaims to be a youth icon by presenting a pleasing design, aerodynamic shape and an attractive color combination. Ravi Premium R1 is a fast selling bike owing to its stylish shape, dual dial meter and much-appreciated fuel efficiency. Ravi premium R1 comes in four great colors i.e. blue, grey, black and red. Ravi premium R1 is designed with smart engineering intelligence. The innovative backlight design, front headlight shape and addition of dual dial speedometer on the dashboard gives a new taste to your biking needs. Ravi premium R1 promises a comfortable ride with a smoke-free journey.', 13, 2, '78cc', 100, '1', 65, '4-Speed'),
(39, 'abbas', '2018-07-12', '2018-07-12', 'Ravi', '2018', 'Piaggio Storm 125 ', 1, 12, 1, 0, '11762453189ba645be7a85f02548f20d1.jpg', 'f9ec5ca99d89c6d41a014d73aea6b9d92.jpg', '670d82663c64557645b3e12a80170c313.jpg', '7001d3dbadf3392145e71efb7bd43ecb1thumb.jpg', 'e508165ba8912e16306596e8026df9cc2thumb.jpg', '92214c8000b2142f0b4e973ab34fff8d3thumb.jpg', '', '', 'A whole new experience of a sports bike. Ravi Piaggio gained a positive response from the local market in a short time. Equipped with state of the art Italian.', 'Ravi Piaggio Storm 125 is not just what you think. Itâ€™s a whole new experience of a sports bike. Ravi Piaggio gained a positive response from the local market in a short time. Equipped with state of the art Italian technology, Ravi Piaggio Storm 125 is a power booster with a 5-speed gearbox and an evergreen performance. The self-starter Ravi Piaggio Storm 125 stepped into a blue ocean market where there was hardly any competition for a reasonably priced sports bike. Ravi Piaggio Storm 125 has a 19 liters fuel tank capacity that is more than enough for a 125cc bike. With smart speedometer and a trendy handlebar, the Ravi Piaggio Storm 125 gives a premium look at a first glance.', 14, 2, '125 cc', 100, '2', 50, '4-Speed'),
(40, 'abbas', '2018-07-12', '2018-07-12', 'Suzuki', '2018', 'GR 150', 2, 25, 2, 20, '062d06ae231ffe8c2eed2c5c068595941.jpg', '18b135636b7b67e462a66132f3fc907f2.jpg', '1aa63d7212f5e2ec980e28b44e3714503.jpg', '803abac0da213310b6a1c58e101565f61thumb.jpg', '79261e02fadb4319c24d18041315a20f2thumb.jpg', '371213e416acdc1e6f54c1749299091f3thumb.jpg', '', '', 'Suzuki GR 150 2018 comes with the 150cc 4 stroke air cooled OHC engine. Suzuki GR 150 comes with an additional RPM speedometer to provide sporty look to maintain high end  charisma.', 'Suzuki GR 150 was launched into the Pakistan market owing to high sales in 150 cc segment Suzuki GR 150 2018 comes with the 150cc 4 stroke air cooled OHC engine. Suzuki GR 150 comes with an additional RPM speedometer to provide sporty look to maintain high end  charisma of the bike Suzuki GR 150 price is kept at 219000 which is slightly higher than the competitors available in the market \r\n\r\n ', 12, 2, '150 cc', 100, '1', 45, '5-Speed'),
(41, 'abbas', '2018-07-12', '2018-07-12', 'Suzuki', '2018', ' Inazuma ', 6, 10, 6, 0, '8dcc2d018590314e8058f16532321d541.jpg', '32510517b0b6626722ea32a49c4bb5f52.jpg', '20806ce01cb3137ea4b0fad175ab035c3.jpg', 'f536126281c2794edec7c383f4b27d8e1thumb.jpg', 'eb77a489d3feafd099e73238962c0ec92thumb.jpg', '02281fba984187f96d4bea6d864e75383thumb.jpg', '', '', 'Suzuki Inazuma possesses a multi-functioned digital LCD speedometer containing a tachometer that indicates the gear levels', 'When it comes to heavy bikes, the fabulous way to travel is with the Suzuki Inazuma 250. Itâ€™s a set of everything you can dream of. It has style, comfort, energetic sound and performance that goes beyond expectations. With its advanced fuel injected twin cylinder engine, Suzuki Inazuma delivers the best of smooth and powerful ride. With patent Suzuki quality, durability, and features, Suzuki Inazuma possesses a multi-functioned digital LCD speedometer containing a tachometer that indicates the gear levels. The digital LCD speedometer shows odometer, twin trip meter, clock display along with fuel level indicator, maintenance interval reminder and adjustable rpm indicator. The fuel injection system of Suzuki Inazuma electronically manages the fuel volume to provide improved fuel economy while ensuring fewer emissions. The electronic management also provides improved stability and throttle response.', 16, 1, '	248 cc', 100, '1', 50, '5-Speed'),
(42, 'abbas', '2018-07-12', '2018-07-12', 'Suzuki', '2018', 'Inazuma Aegis ', 10, 10, 10, 0, '1ee59322f49302817659308c582e81471.jpg', 'd74673bdf83d2762a173040e56fc60be2.jpg', 'd311b512fe45f7e17c95f1bd6fd7a88c3.jpg', '0cbda8f5f6a4c1bb7fda6aac223bac411thumb.jpg', '1d7cb2f9a001bf93cc123db0aac67a722thumb.jpg', '3c90cf6531afa2d8453dda0d62e656303thumb.jpg', '', '', 'Suzuki Inazuma Aegis 250. Itâ€™s a set of everything you can dream of. It has style, comfort, energetic sound and performance that goes beyond expectations. With its advanced fuel injected twin cylinder engine, Suzuki Inazuma delivers the best of smooth and powerful ride. With patent Suzuki quality, durability, and features, Suzuki Inazuma possesses a multi-functioned digital LCD speedometer containing a tachometer that indicates the gear levels. The digital LCD speedometer shows odometer, twin trip meter, clock display along with fuel level indicator, maintenance interval reminder and adjustable rpm indicator. The fuel injection system of Suzuki Inazuma electronically manages the fuel volume to provide improved fuel economy while ensuring fewer emissions. The electronic management also provides improved stability and throttle response.', 'When it comes to heavy bikes, the fabulous way to travel is with the Suzuki Inazuma Aegis 250. Itâ€™s a set of everything you can dream of. It has style, comfort, energetic sound and performance that goes beyond expectations. With its advanced fuel injected twin cylinder engine, Suzuki Inazuma delivers the best of smooth and powerful ride. With patent Suzuki quality, durability, and features, Suzuki Inazuma possesses a multi-functioned digital LCD speedometer containing a tachometer that indicates the gear levels. The digital LCD speedometer shows odometer, twin trip meter, clock display along with fuel level indicator, maintenance interval reminder and adjustable rpm indicator. The fuel injection system of Suzuki Inazuma electronically manages the fuel volume to provide improved fuel economy while ensuring fewer emissions. The electronic management also provides improved stability and response.', 9, 1, '250 cc', 100, '1', 55, '4-Speed');
INSERT INTO `bikeposts` (`post_id`, `author`, `created`, `updated`, `company`, `year`, `model`, `pmaxl`, `pmaxt`, `pminl`, `pmint`, `img1`, `img2`, `img3`, `img1thumb`, `img2thumb`, `img3thumb`, `img4`, `img5`, `sdesp`, `desp`, `pc`, `start`, `engine`, `edisp`, `type`, `millage`, `gearbox`) VALUES
(43, 'abbas', '2018-07-12', '2018-07-12', 'Suzuki', '2018', 'Suzuki Bandit ', 15, 60, 15, 50, '3cb39abd233649aecda9e37697872d101.jpg', 'e020a5ce2aef74a4ec315a3090e8a4592.jpg', '713325aa007b1644abeb60a9ae49c10e3.jpg', '93c1bf189f0d13010303f79e44677b751thumb.jpg', '12f4589ebb8a3814283ad1dd1f45f50e2thumb.jpg', '07b72bd955473927ee8322513ea7ebf33thumb.jpg', '', '', 'The substantial body of Suzuki Bandit proves the durability factor with every sport feel you need', 'Suzuki Bandit is not just a bike; itâ€™s a winner on the road. If you have an urge of victory on the road, there cannot be a better road companion than Suzuki Bandit. Suzuki Bandit sets a new trend in the heavy bikes with its performance, advanced specifications and disk brakes. The substantial body of Suzuki Bandit proves the durability factor with every sport feel you need. A 4 stroke DOHC engine with 16 valves ensures winning performance on the racing track. The balanced suspension system at front and back provides a smooth ride with crisp handling. Enthralling design with eye-catching graphics and a powerful shock absorber: Suzuki Bandit offers you to experience a new, fun-filled ride.', 12, 1, '656 cc', 100, '1', 60, '5-Speed'),
(44, 'abbas', '2018-07-12', '2018-07-12', 'Suzuki', '2018', 'Intruder', 17, 5, 17, 50, 'b2ee9f68dcbcbe91d5c597c372359a4d1.jpg', '6c0362cfd48d579f64ce00bb8c9ed53f2.jpg', '17a7a4e0c6e68dd12ac449d9b44774f73.jpg', 'c8e974f57d8b7e6da0bc3cd4d8ab356b1thumb.jpg', '259650ad059f4318bdf5ce4a70d177cf2thumb.jpg', '4a657a840162eb4d8f450d8c864e55223thumb.jpg', '', '', 'Suzuki Intruder is an award winner heavy bike in the charts and a potential player in a road contest. Suzuki intruder is a perfect blend of cruising and Suzukiâ€™s powerful engine. ', 'Suzuki Intruder is an award winner heavy bike in the charts and a potential player in a road contest. Suzuki intruder is a perfect blend of cruising and Suzukiâ€™s powerful engine. Suzuki Intruder stands as one of the most modern and great cruise bikes. The classic impression of a cruiser in Suzuki Intruder is what you pay for. Suzuki Intruder is engineered on international standards of racing technology to compete other sports bikes in international championships. Just a glimpse of Suzuki Intruder is worth a thousand words. Suzuki Intruder is equipped with world class brake and an advanced suspension for an extraordinary performance and rewarding feeling. When you are craving for a race, get on with a Suzuki Intruder to define milestones of victory.', 15, 1, '805 cc', 100, '1', 65, '5-Speed'),
(45, 'abbas', '2018-07-12', '2018-07-12', 'Yamaha', '2018', 'Yamaha YBR 125G', 1, 38, 1, 40, 'aedef520c3b81fc96207261975eeb83c1.jpg', 'd9cd224542ba4486f26016094e856a4d2.jpg', '0e6cb78a5a9fac92c6ec350559f6fd043.jpg', 'a78bdebd993f9c9afdd3401bd611d6cb1thumb.jpg', 'e60c5bebe5509c93306436c841ae7db72thumb.jpg', 'dc112bdf2cbb18be414bb7d6270251013thumb.jpg', '', '', 'Yamaha presents a wholesome new experience of biking with its new YBR 125G. The YBR 125G is intelligently designed keeping in account the true taste of passionate bikers. ', 'Yamaha presents a wholesome new experience of biking with its new YBR 125G. The YBR 125G is intelligently designed keeping in account the true taste of passionate bikers. Yamaha YBR 125G has an overall look of a trail bike. Yamaha YBR 125G possesses the same engine as of Yamaha YBR 125. Yamaha YBR 125G has powerful shocks that are the key to comfortable and smooth ride of this bike. The alluring speedometer has an rpm and fuel indicator. Significantly broad and comfortable seat of Yamaha YBR 125G ensures good backbone support on long journeys. Alloy rims, self-start mechanism and sporty body shape with dynamic graphics and Yamaha logo forces its buyers to boast proudly of their appealing ride', 12, 2, '124 cc', 100, '1', 50, '5-Speed');

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
  `modelv` text NOT NULL,
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

INSERT INTO `carposts` (`post_id`, `author`, `created`, `updated`, `company`, `year`, `model`, `modelv`, `pmaxl`, `pmaxt`, `pminl`, `pmint`, `img1`, `img2`, `img3`, `img1thumb`, `img2thumb`, `img3thumb`, `img4`, `img5`, `sdesp`, `desp`, `inter`, `exter`, `engine`, `edisp`, `transmission`, `gearbox`, `millage`, `pc`, `fuel`) VALUES
(1, 'sheheryar', '2018-07-11', '2018-07-11', 'Honda', '2018', 'Honda Civic', 'Seden', 27, 50, 26, 0, '57d2fdf15df5eeb8436f1afb07c5c4721.png', '8c1b037eebaf4c4e9a93c18de7dd0e832.jpg', '027cc53eb34197806804f91370ee77593.jpg', '311158994ccd28bcbbab3514d8c019b91thumb.jpg', '0281325b4a48dc560a47e03be71031702thumb.jpg', 'ab0407592acc825b58c658a45349e93c3thumb.jpg', '', '', 'The civic is low slung and definitely looks like fun.The latest 2018 model brings some outstanding features and functionalities that make it a truly civic car. At the same time, the specs standards of the Civic Honda also make is suitable for long inter-city travels even in the pitch-dark environments. For example, it has all-LED headlights which brighten up the road a long way ahead. You will find them perfect for travelling during the night. Meanwhile, the car also features daytime running lights which will help you locate the way in the foggy or misty environments.', 'It has been over four decades of dominance of Honda Civic in the international automobile market. It has been reigning over the hearts of the riders and conquering the roads since its launch as a two-door subcompact car back in 1972. The same year saw the Civic as a three-door hatchback. After having gone through serval generational evolutions, it has finally emerged as a small-end mid-size car. During the period from 2000 to 2015, the Civic belonged to the category of compact cars and still it is a competent candidate for that title.Suzuki and Honda are the two main Japanese brands of four wheelers in the country. Each is facing a fierce competition from the other. The Suzuki cars are known to be economical and fuel efficient. On the other hand, the Honda cars are more luxurious than their Suzuki counterparts but are costly and unreachable for the low-income buyers. So, Suzuki gets more sales from the lower segment while Hondaâ€™s clientele consists of buyers mostly from the higher economic segment of the society. But there is another even stronger rival of Honda â€“ Toyota. For example, Toyotaâ€™s Corolla offers a relatively economical alternative to the Civic Sedan from the house of Honda.', 'Having grown up and matured through innovations in successive generations, the latest Civic Sedan brings a spacious and luxurious interior abounding in outstanding beauty. As you enter the car for driving, the first thing you may come across is the confident-inspiring cockpit of the car. It is rich in technology, style and beauty. There is a design centric instrument panel which features a single-level display of all the driving parameters. As it is easy to read, you can spend most of your time watching the scenery fly by.\r\nHere everything, from controls to the storage console, is well within the reach of the driver. The storage console can support drinks, a small bag or even a tablet PC. Meanwhile, adding to your convenience of parking the car, there is an electronic parking brake. It eliminates the need for pulling on a brake lever. On the other hand, you can activate the segment-first Electric Parking Brake with just the lift of a finger.This is only a brief intro of the Civicâ€™s grand features. You can explore more through the Honda Civic 2018 pictures. In short, it is a great car for a really great family travelling experience.', 'The Civic Sedan has a stylish exterior with its aggressive face and the sharp and sophisticated body lines. Every angle of the car seems to be the right angle. The sharpness and sleekness exudes from every inch of the car. In addition to a sleek profile, there is a long wheelbase which renders it a sporty appearance even while it is standing still.At the posterior end of the car, you will come across â€œC-shapedâ€ LED taillights. They have been designed to make a strong styling statement that is exclusively Civic. Similarly, the all-impressive sedan has got a wide and aggressive stance which shows that it is ready to scorch the pavement.', '2.0-liter 4-cylinder engine; 158 hp, 138 lb-ft', 700, 'Manual', '5-Speed', 39, 12, 'Petrol'),
(2, 'abbas', '2018-07-11', '2018-07-11', 'Toyota', '2018', 'Toyota Corolla', '', 19, 60, 19, 50, '12c3c746044d5ecf447076a0a68f53ee1.jpg', '52de04917608b6f0580b26b9711a6a4e2.jpg', '222f39b80693008c7d1c003bdff2ea793.jpg', 'e48a73d71a7f3d000d8881a7a84d6ae41thumb.jpg', '5ab92ea0b1506b05da49af3b59a9db872thumb.jpg', '628088d4831a0c40d92c279f2c1333623thumb.jpg', '', '', 'The car is good for family having 4 to 5 members.', 'The car is good for family having 4 to 5 members. The car gives better fuel average especially with CNG. Good market value and performance is best on bumpy roads.', 'The interior is good just like Honda city.\r\nComfort is also Good.\r\n', 'Exterior of the car show moder look', 'Engine 1298 cc', 1300, 'Manual', '5-Speed', 12, 55, 'Petrol'),
(3, 'abbas', '2018-07-11', '2018-07-11', 'Suzuki', '2018', 'Suzuki Mehran', 'VX Euro', 7, 50, 7, 20, '23587b1e48cf2f6f5b7e707963fde0f01.jpg', '707affc8876ccb25aee63b9864327eb42.jpg', '226154da8b68119fa7f442c72d8bfa743.jpg', '30e84e56527039e877cec5b4e42786e91thumb.jpg', '02fa62fd0b0c85b0ce914489f6eb08cc2thumb.jpg', '15baba0e7cd2abffee1d33f0d23718203thumb.jpg', '', '', 'strong body as compare to new one.Fuel economy is very good.It is a comfortless car', 'Suzuki Mehran is the successor hatchback version of 3rd generation, which was manufactured and imported from Japan back in 1989. It was marketed and distributed by Pak Suzuki Motors across Pakistan. Suzuki Mehran is one of the most selling hatchback cars in Pakistan, manufactured by Suzuki due to its economical price and perfect fuel efficiency. The car series was first introduced back in hatchback since then it has been some of the mode favorite car across the globe which includes Europe, Pakistan, China, japan and India.', 'which make you feel comfortable and ease while driving or sitting.While in the middle there is a manual gear lever, a hand break and a box to put medium size stuff', 'zuki Mehran  was available in 5-doors hatch with Front-engine, front-wheel-drive.', '796 cc', 700, 'Manual', '4-Speed', 13, 30, 'Petrol'),
(4, 'abbas', '2018-07-11', '2018-07-11', 'Suzuki', '2018', 'Suzuki Wagon R', '', 12, 20, 12, 0, '103e7e6d22e11df57cfabe2e82b7b46b1.jpg', '04b1d94b4d800b958083881c0b1fb81d2.jpg', '467393d06435f747a646cca601b0e1883.jpg', '3654fbbbf369a981f64f1b07e735083c1thumb.jpg', 'd5aad64ab87fecbe729de52ce920eb352thumb.jpg', 'c0eb4a5416b63750768f3ccb86ecf5473thumb.jpg', '', '', 'Suzuki Swift is a popular series of 5 seating hatchback cars introduced by Suzuki a decades ago, there are several models are now in the market since then and running on global roads successfully. It is a small design car similar to Suzuki Cultus with 5 or three doors. ', 'Suzuki Swift - is among one of the successor models of Suzuki hatchback 5 doors cars it is a third generation model, it is considered as low price car for family. The models include ZC72S, ZC82S and ZC32S. The second generation 1st model was introduced back in 2004 in Paris Auto Show. It is also labeled as Concept S and Concept S2 cars. It is ideal budget car especially in Asia and south Asian region which include India, Pakistan, China, Japan, Malaysia, Nepal, Bangladesh, Bhutan and Sri Lanka. Suzuki Swift was initially designed for European market but gained much popularity in Asia.', 'Suzuki Swift â€“ 2017 offers premium interior with most comfortable and mesmerizing interiors, which make you feel luxurious and elegant while driving or sitting. Starting from the dashboard which is sleek design made up of plastic, leather and rexine same as the seats, in the middle you would find the ac air output, multimedia system, ac controllers and small container to put tiny stuff. While in the middle there is a manual or automatic gear lever, a hand break and a box to put medium size stuff. At the other side of the steering wheel there is glove compartment.', 'car design attractive\r\nBrakes	Front: Ventillated Discs, Rear: Dru', '998 cc', 900, 'Manual', '5-Speed', 0, 35, 'Petrol'),
(5, 'abbas', '2018-07-11', '2018-07-11', 'Honda', '2018', 'Honda Accord', '', 12, 25, 12, 30, '96fb4fa4a243acdcd06828d8879bfcdb1.jpg', '025507e611d3addd5a5ad028fa6be22d2.jpg', '9ad564d5b116d08fd6c657e69182ea753.jpg', '1c9cf5acdef9db2630902e00b96635341thumb.jpg', '6fd9ca00b7e5059ca2cac933483a6d7e2thumb.jpg', 'e2126e9fab1a236d9d82698b3e82dd1f3thumb.jpg', '', '', 'The 9th Generation . The new model Honda Accord is a front engine front wheel drive luxury sedan. Honda Accord 2018 features a brand new angular design language and greater refinement compared to the previous 8th Generation Honda Accord. ', 'The 9th Generation . The new model Honda Accord is a front engine front wheel drive luxury sedan. Honda Accord 2018 features a brand new angular design language and greater refinement compared to the previous 8th Generation Honda Accord. ', 'Honda Accord 2018 interior comprises of dark wood trim panelling. The front and rear seats are covered in leather. Standard features include a sunroof, rain-sensing windscreen wipers, multi angle rear view camera, power fold-in mirrors, multifunction steering wheel, keyless entry, Engine Immobilizer, security alarm system,  blind spot monitoring, lane watch, automatic 2-zone climate control, cruise control, satellite navigation, vehicle stability control, foot operated park brake, 6-speaker and subwoofer, parking sensors, 8-way power driver seat with memory function, 4-way power passenger seat and 8 airbags. The overall interior of the 9th Generation Honda Accord features a good amount of interior space in both the front and rear for a sedan of its exterior dimensions. It also offers a good level of comfort and refinement thanks to its fairly luxurious interior and a high number of driving aids. ', 'Honda Accord 2018 exterior features a unique and very proportioned design language. The front fascia features sleek narrow trapezium side swept headlights with daytime running lights, a trapezium grille with triple chrome accents and rectangular style fog lights. The rear end houses sleek side-swept LED taillights, a chrome trim piece running the length of the trunk and a sports exhaust outlet. The overall exterior of the 9th Generation Honda Accord features a fairly unique design language that allows it to set itself apart from its rivals.', 'The 9th generation Honda Accord is offered in 1 engine 2.4 DOHC 16 Valve i-VTEC Inline-4', 1900, 'Automatic', '5-Speed', 10, 0, 'Petrol'),
(6, 'abbas', '2018-07-11', '2018-07-11', 'Honda', '2018', 'Honda CR-V', '', 95, 0, 96, 0, '30f42ec9c5f01207984385dad74485a41.jpg', '7c68782c40f4a3e39d31af19de8ba5b72.jpg', '9f173ed61b69a679056b462b62b6e69c3.jpg', '7676d93f25cda74fd0d9253df37c82501thumb.jpg', 'ce9e2e413e19f44cd33e9abab9b5b9ee2thumb.jpg', 'b30e10805c8f50ad936bdec7b68405173thumb.jpg', '', '', ' more powerful and more efficient engines.', 'Major Specs of 2018 Honda CR-V in Pakistan\r\n The 2018 Honda CR-V will be equipped with a 1.5 Litre VTEC turbo petrol engine with a choice of either CVT transmission or 6-speed manual. Moreover, it will no longer be featuring a diesel engine. Here are some of the major specs of the 2018 Honda CR-V in Pakistan:\r\n\r\n       Three Driving Modes: EV, Hybrid Drive, and Engine Drive\r\n         Power/Tilt Door Mirrors\r\n         Hid headlamps with auto leveling\r\n         Multi Information display\r\n         Telescope adjustable steering\r\n         Headlights auto off timer', 'Honda CR-V 2.0   front and rearseats trims are available in a combination of black, grey and ivory fabric. Standard features include, automatic climate control,', 'Exterior: A blend of uniqueness . Lowered SUV with a different outlook to exhibit ones distinguished sense of selection . CRV -2 does not need many words', '1997 cc', 100, 'Automatic', '4-Speed', 0, 57, 'Petrol'),
(7, 'abbas', '2018-07-11', '2018-07-11', 'Audi', '2018', 'Audi A5', '', 84, 75, 84, 50, '5fa44c7013fe8445f0f7095258adc4971.jpg', '18d8ef70f2709163147acf5f4c84b4452.jpg', 'b9a0fd88812520f184f641be5445da063.jpg', 'e10e02db3a09f60afd8125d3a56674e21thumb.jpg', '2a53107d23d0609d01c80e17e67abb762thumb.jpg', '9bea2bb41e244a9c8a72ffe4a643ce573thumb.jpg', '', '', ' Audi A5  features include transmission type (automatic/ manual), engine cc type, horsepower, fuel economy (mileage), body type, steering wheels & more', 'The stylish and comfortable A5 is available as a coupe or convertible. All-wheel drive is standard for great performance in all conditions. The A5 uses a 252-hp 2.0-liter four with a six-speed manual or a seven-speed dual-clutch automatic. Automated emergency braking is standard on all A5s with more active-safety tech available at extra cost. A 7.0-inch infotainment system features Apple CarPlay and Android Auto', 'The car is good for family having 4 to 5 members.', ' The car gives better fuel average especially with CNG. Good market value and performance is best on bumpy roads', '1395 cc', 100, 'Automatic', '5-Speed', 18, 65, 'Petrol'),
(8, 'abbas', '2018-07-11', '2018-07-11', 'Audi', '2018', 'Audi A6', '', 94, 60, 94, 50, '655e1166fc95f8f6e60245fef28709f91.jpg', 'c4c881b4f108b2e7d084eb50b5b5ec872.jpg', '040ae9ff4b2de71bd066f7e32952d95b3.jpg', '87b47a6e5a8b1c2fba4b4bfb6686073b1thumb.jpg', 'd015049f68f914eb01f67908ee4319092thumb.jpg', '79b53f7a24071d10222a97f7c261d0993thumb.jpg', '', '', 'Audi A6 1.8 TFSI BUSINESS CLASS EDITION', 'Audi A6 1.8 TFSI BUSINESS CLASS EDITION  features include transmission type (automatic/ manual), engine cc type, horsepower, fuel economy (mileage), body type, steering wheels & more. Explore the latest Audi A6 1.8 TFSI BUSINESS CLASS EDITION 2017 Price in Pakistan at   93.6 lacs', 'Standard features of the base variant includes air conditioning, infotainment system, power steering and tachometer', 'The front end houses sleek narrow side swept headlights, a large grille with a chrome accent and a trapezium air intake. The rear end houses sleek sharp side swept taillights, a large rear bumper and a chrome trim piece running the length of the trunk', '1798 cc', 100, 'Automatic', '5-Speed', 16, 65, 'Petrol'),
(9, 'sheheryar', '2018-07-11', '2018-07-11', 'Toyota', '2017', 'Toyota Vitz', '', 18, 0, 15, 0, '09c84ff44f58c2ac8f10cf31e0132c991.jpg', 'e1cd9c71975eb8b16af78d8ed363b0312.jpg', '1ded376567ba710e3eb87cd2a4bc15193.jpg', 'dda557e4ee75c9ec208d589ace7b9bef1thumb.jpg', '9cefdbc3928cade21849baf90a78f3f12thumb.jpg', '6d7cf17228efe4061a79be48e3d4b9113thumb.jpg', '', '', 'The car in question is Toyota Vitz. But it is no ordinary Vitz; we are talking about the 2017 Toyota Vitz Hybrid. And it is the first hybrid Vitz in Pakistan. But before we start talking about this particular car in details, letâ€™s take a brief look at Toyota Vitz and its evolution.', 'Vitz is a subcompact hatchback manufactured and sold by the Japanese automaker Toyota. Vitz comes in both 3- and 5-door variants. Toyota started producing Vitz back in 1998. Vitz is one of the most successful small cars by the Toyota. Up until now, there have been three generations of the car. It is sold under Yaris nameplate in many parts of the world.\r\nCurrently, as mentioned above, Toyota Vitz is in its third iteration. The first generation (XP10) lasted from 1998 to 2005. The second generation (XP90) was launched in 2005 and later discontinued in 2010. And this third generation (XP130) was introduced in 2010 and is still in production. The third generation received a couple of facelifts (2014 and 2017). The Toyota Vitz hybrid we reviewed, as mentioned above, is the 2017 model; the second facelift of 3rd gen XP130 Vitz.\r\nDepending on the market and year of production, Toyota Vitz has been sold in a bunch of variants with all sorts of drivetrain, and platform options. This particular 2017 Toyota Vitz hybrid we had is a 5-door base model F variant and was only 300 km driven.\r\n\r\n', 'The steering wheel is quite basic and has a simple three-spoke design with multimedia controls as well as Trip and return buttons situated on the right side of the steering. The steering wheel is adjustable.On the right side of the dashboard, you get lane departure watching and auto headlight buttons right above the A/C vent. The AC vents on the extreme left and right of the dashboard are same circular ones like to get in the 2017 facelift Toyota Corolla.Under the right A/C vent, you have your side mirror directional controls and folding button as well as headlight adjustor rotary switch along with a small coin tray that you can push in or pull out the dashboard.', 'Letâ€™s talk about body dimensions first. 2017 Vitz hybrid is 3945mm long, 1695mm wide and 1500mm tall. To give you a perspective, the new Suzuki Cultus is 3600x1600x1540mm. And the Pak Suzuki Swift is 3755 x 1690 x 1525mm. You can see that this Vitz is longer, wider and taller than the new Cultus, and longer and taller than the local Swift. The wheelbase of 2017 Toyota Vitz hybrid is 2510mm. That is more than both the new Cultus (2425mm) as well the Swift (2390mm).\r\nWith the first iteration facelift of the third generation, Toyota introduced a massive front grill in the front bumper. The newly introduced front bumper has quite a complex design where I can imagine it getting dirty quite easily and becoming hard to clean afterward.\r\nAnd with the 2017 facelift of Toyota Vitz, Toyota kept the same massive grill but made the edges and cuts more sharper than before. The front bumper has a massive front grill, and you can see the bumper arches just coming from extreme left and right of the bottom of the bumper and converging right under the bulge that houses Toyota monogram on the top of the bumper.\r\nYou get massive trapezoid front headlights as well. On the extreme left and right of the front bumper, you have black accents were top of the line Toyota Vitz has fog lamps.At the back of the 2017 Vitz, you get completely redesigned rear lights as well as the boot and the rear bumper. Where initially the third generation which had simple triangular brake lights the design has completely changed for the 2017 model. Now the rear brake lamps are wide and extend to the boot lid.\r\nToyota has also played with the red reflectors on the bottom of the rear bumpers. There werenâ€™t available in the first facelift but are back for the 2017 facelift. You will also notice how the rear arch-type design originates right from the extreme sides of the rear bumper and make a bow like impression on the whole rear of the car; something similar to what Toyota has done at the front of the car. The reversing cam is situated under a crease of that impression in the boot lid, where you also mount your rear registration plate. Where the top of the line 2017 letâ€™s get a spoiler with a rear mounted brake lamp, this basic model doesnâ€™t come with any sort of spoiler.', '84 hp @ 6000 RPM', 1300, 'Automatic', '4-Speed', 15, 42, 'Petrol'),
(10, 'sheheryar', '2018-07-11', '2018-07-11', 'Honda', '2018', 'Honda Accord', '', 122, 5, 122, 5, '6e83c82f2c081952a7efe13a93d8bdca1.jpg', 'd3cc7ecfede9664bdbd9392267fcc6b62.jpg', '68580d64e3a5e19370dff178cb6d51ad3.jpg', '2902093c56b5d07ebe49e7bae3c521431thumb.jpg', '2458ad8bd26f654bd391553b365769502thumb.jpg', '0ba88c6e4cc9abf67d38aee905a6662c3thumb.jpg', '', '', 'Updated with a major mid-cycle refresh last year, the Honda Accord continues unchanged for 2018, with the exception of a new Hybrid variant. It includes Apple CarPlay and Android Auto connectivity, as well as the addition of Honda Sensing, a comprehensive suite of safety and driver-assistive technologies, along with available new features and technologies, including parking sensors, wireless charger, remote engine start and rain-sensing windshield wipers. Models equipped with a four-cylinder i-VTEC engine and CVT (models without paddle shifters) see impressive highway fuel economy ratings due in part to the application of a lighter weight and re-sculpted all-aluminum hood, along with new aerodynamic elements and friction-reducing features. All models feature alloy wheels, while sedans in Sport and Touring trim get upsized wheels and tires as well as a side-sill garnish, with Touring also getting a rear deck spoiler. Coupe models benefit from a more stylish front and rear fascia', 'The 2018 Honda Accords have started to arrive at dealerships in what the automaker describes at the carâ€™s â€œmost dramatic remake in 41 years.â€ Itâ€™s hard to find any element in the new Accord that remains unchanged from last yearâ€™s lineup. Hondaâ€™s goals are to take the Accord upscale with more efficient body design, faster engines, and a full suite of safety, driver assist, and connected-car technology.Honda launched the Accordâ€™s tenth generation in the 2018 models. Odds are this will be the first of five years for this generation if the company follows past practice. Compared to the ninth-generation (2013-2017) models, the new Accord is lower, wider, lighter, and more rigid. New Accord conventional powertrains use 1.5- and 2.0-liter turbocharged engines â€” the first Accords ever equipped with boosted engines.The 2.0-liter turbo engine, paired with a new 10-speed automatic transmission, will begin to appear in dealer showrooms later in November. The new Accord Hybrids, due to launch in early 2018, will use the third-generation, two-motor hybrid powerplant. We will cycle back with full information on the 2.0-liter turbocharged Accords and Accord Hybrids when final information is available for each.The 2018 Accord has racked up an impressive array of awards since its launch. Kelley Blue Book named the 2018 Accord the Overall Best Buy of 2018. The Accord was one of several Hondas to win the 2018 Edmunds Buyers Most Wanted Award.  The 2018 Accord also won the 2018 Consumer Guide Automotive Best Buy Award for Midsized cars.', 'The Accordâ€™s interior is surprisingly spacious, and rear-seat passengers in particular will be happier in an Accord than in almost any other mid-size sedan. Hondaâ€™s no-options trim structure means that most decisions about accoutrements are made for the driver, but virtually every Accord has handsome interior furnishings and at least some creature comforts.The Accordâ€™s cabin is roomy enough that passengers should be comfortable no matter where theyâ€™re seated. Rear-seat legroom has stretched by nearly two inches compared with last yearâ€™s model, and no competitor listed here can come close to the spread-out room found in the Accord. The rear seat cushions are mounted high enough that longer-legged passengers can rest their legs comfortably.The list of standard features in the Accordâ€™s base LX trim is short. For Accords powered by the 1.5T engine, drivers will have to opt into the Sport trim before power-adjustable seats are available on the menu and choose the EX trim for heated seats. All 2.0T models, which start at the Sport trim level, are better equipped. The top Touring trim is thoroughly decked out, with heated and cooled leather front seats, heated rear seats, and a head-up display. Lower trim levels have their own charms, though. Among them: Hondaâ€™s attractive and comfortable cloth seats and interior trim, far superior to the orthopedic-shoe faux leather donned by certain Toyota Camrys.To measure a vehicleâ€™s interior quietness, we use a sound meter to take two measurements at the height of the driverâ€™s ear while traveling at 70 mph. We then average the results. As illustrated by the graphic below, decibels are a logarithmic unit, so a rating of 60 decibels isnâ€™t 1.5 times the sound pressure of 40 decibels; it is 10 times the sound pressure.', 'The Accordâ€™s new exterior is designed to look upscale and sporty, and weâ€™re inclined to say that it achieved those goals. The muscle-car-inspired downturned nose and the large chrome bar that runs across the top of the grille may not be for everyone, but they certainly set the Accord apart. And we appreciate the restrained exterior detailing, which we find more tasteful than some of Hondaâ€™s other recent offerings.\r\nThe Accord is now slightly shorter in both length and height compared with last yearâ€™s model, but it has gained almost half an inch in width. Those minor changes are intended to make the Accordâ€™s profile seem sportier, and, combined with the new long, curved hood, it certainly works.The Accord is roughly the same size as its competitors, and all of these mid-size sedans can slip easily through city traffic and into parking spots.', 'In-Line 4-Cylinder with Single-Scroll Turbocharger', 2000, 'Automatic', '4-Speed', 23, 60, 'Petrol'),
(11, 'abbas', '2018-07-11', '2018-07-11', 'Toyota', '2018', 'Toyota Camry', '', 85, 8500, 83, 8300, '5041c88a8d4f52551cc20d466d9b54511.jpg', '1a58878c62cfd7c44b59f5de1f1431882.jpg', '73bdf170e2fc5e7f59ea4bdf49c9161f3.jpg', '5e0809f1a0fe64f1f24e0b49a3be826d1thumb.jpg', '410ff676fac88a0388d029d16eefecb52thumb.jpg', '06c9fb667f07d5b8fd9e3868ccf004c63thumb.jpg', '', '', 'Toyota launched the 7th Generation Camry', 'Toyota launched the 7th Generation Camry . Toyota Camry 2018 is a pleasing mix of sweeping curves and chiselled surfaces. The Toyota Camry 2018 features a brand new angular design language and greater refinement compared to the previous 6th Generation Toyota Camry.The Toyota Camry 2018 is available in two trims, Low grade and High grade. Toyota Camry 2018 price in Pakistan is between Rs. 8,299,000 To 8,499,000', 'Toyota Camry 2018 Interior is equipped with almost every possible driving amenity. Toyota Camry 2018 comes with dual zone Ac with humidity sensor, push start button, smart entry button, cruise control, 7\" touch screen with bluetooth and USB, power Windows. Power door locks, sun visors, steering switches, 6 airbags, vehicle stability control, traction control, multi-information display, parking sensors, drive mode switches, pre-Collision System and Lan', 'The latest model Toyota Camry 2018 exterior specifications include a brand new and more aggressive design language. The front end houses sleek HIDs with integrated LED daytime running lights and sporty grills which projects a finely machined appearance to the vehicle. The sloping rear end houses trapezoid led rear combination lamps. The striking LED lamps not only provide excellent visibility in low light conditions they also consume less power proving it an energy saving machine. Toyota Camry variants available in Pakistan comes with LED fog lights, headlight washers, alloy wheels, auto retractable rearview mirror and body coloured door handles. The only visual differences in low grade and high-grade trims are Panoramic sunroofs and alloy wheels', '	2362 cc', 100, 'Automatic', '5-Speed', 0, 70, 'Petrol'),
(12, 'sheheryar', '2018-07-12', '2018-07-12', 'Toyota', '2018', 'Honda City', '', 20, 80, 17, 30, '74e92e3705f88df325d8b83945e00ab31.jpg', 'edc4f625e10a4dc0610f90048f8eee912.jpg', '6c6747d75eab92c85b1cc7b42cfd0c0d3.jpg', '9ffbf116ce6353b2bbd15e5a5ff4ef331thumb.jpg', '9e801f1e074a2eb11ace94dc1a09d8862thumb.jpg', '8e55319f52bb43a02888a2163831b5133thumb.jpg', '', '', 'The 7th Generation Honda City was introduced in 2015 worldwide. The 2018 Honda City is a front engine front wheel drive subcompact sedan. The 7th Generation Honda City features a revamped design language that is considerably more aerodynamically efficient compared to the previous generation, as well as a new range of more powerful, cleaner and much more efficient engines. Honda City new model launch date in Pakistan was January 2016 but Honda Atlas skip the 6th generation Honda City 2018 and directly launch the 7th Generation in 2018-19 will disclose the date as soon as the car will launch internationally.', 'The Honda City is a car with multiple names. There was a dire need for low-cost urban cars during the Japanese Industrial development era of the early 80s. Consequently, the Japanese automobile industry switched to the production of economical city cars. Cars produced in that era had a lower maintenance cost and consumed less fuel. At the same time, the City was introduced.\r\nIt was the winter of 1981 when the City was commercially launched. This car was available in three different body styles. The hatchback was the core version. While the sedan and the station wagons served as the upper versions. Well, it was the first every smallest car for Honda at that time. But it still was large enough to be classified as a Kei car. Certainly, it just a few inches shorter than the Civic of that time.\r\nThat was the first generation of the Honda City. Since then, it has evolved into five generations. The present one is the sixth generation that was introduced in 2014. Well, through its lifespan, it got numerous changes. After the conclusion of the second generation in 1994, the hatchbacks and the station wagons were discontinued. Only the sedans were left to go on.', 'The interior of the 7th Generation Honda City comprises of black and polished silver plastic trim pieces. The front and rear seats are covered in fabric. Standard features include the tire pressure monitoring system, climate control, cruise control, 12-Volt power outlet, stereo speaker audio system, 5.0-inch multi-information display, traction control, electronic stability control, power door mirrors and keyless entry. Options include push start button, 2-zone automatic climate control with air filtration system, leather upholstery, satellite navigation with Apple CarPlay and Andriod Autointegration, voice control, power moonroof and cruise control.', 'The exterior of the 2018 Honda City features a brand new design language. The front end houses sharp trapezium styled side swept headlights with integrated LED daytime running lights, an angular grille with a surround chrome accent, a trapezium air intake and dual standard fog lights. The rear end houses large aggressively designed side swept taillights and a chrome trim piece running the length of the trunk. Like Honda Civic 2018, the overall exterior of the Honda City 2018 is much more imposing and pronounced compared to previous generation models.', '1500', 1500, 'Manual', '5-Speed', 14, 42, 'Petrol'),
(13, 'abbas', '2018-07-12', '2018-07-12', 'Audi', '2018', 'Audi A8', 'FSI Quattro', 250, 0, 260, 0, 'e02b765f0f572688f41c9f94af14c31b1.jpg', '6e26e9ffbef921fe8c0f046d30b6a8542.jpg', 'c58fa13fb4e81e737790e375737a67c03.jpg', 'a1ab28e1eff45acd71ac64a9e9bc7bb91thumb.jpg', 'd677dabce735b0235e2ea48309e5e09c2thumb.jpg', '76ab5c01789a18ae1a1aca40fb35a3003thumb.jpg', '', '', 'The car is luxurious and awesome. The car is reviewed as the one car which has the amazing shape and amazing specifications. The car has the 333-hp supercharged 3.0-liter V-6 is standard; a 450-hp twin-turbo 4.0-liter V-8 is optional.The car therefore posses the best features. The car is rated as 4/', 'This car builds its own status and facts which gather around the best factor of all. The people are listed with the best updates that give you out each information which is listed. The people are given with the best updates and list of information which helps the students.\r\n\r\nThe people are given with the best car and the features as well as the specification which helps out in each way and point. The cars now a day are given with great edge than the purpose its self. The people mark the status from the cars which you have', '18-Way Power Heated Front Seats w/Memory -inc: 4-way power lumbar adjustment, and front and rear comfort headrests\r\n\r\nBench Front Facing Rear Seat\r\n\r\nPower Tilt/Telescoping Steering Column\r\n\r\nGauges -inc: Speedometer, Odometer, Engine Coolant Temp, Tachometer, Oil Temperature, Trip Odometer and Trip Computer\r\n\r\nPower Rear Windows and w/Power Sun Blinds\r\n\r\nAudi connect Mobile Hotspot Internet Access\r\n\r\n5 Person Seating Capacity\r\n\r\nLeather Steering Wheel w/Auto Tilt-Away\r\n\r\nCruise Control\r\n\r\nDual Zone Front And Rear Automatic Air Conditioning\r\n\r\nRear HVAC w/Separate Controls\r\n\r\nHVAC -inc: Underseat Ducts, Residual Heat Recirculation, Auxiliary Rear Heater, Headliner/Pillar Ducts and Console Ducts', 'Wheelbase       122.9   in\r\n\r\nLength, Overall           207.4   in\r\n\r\nWidth, Max w/o mirrors         76.7     in\r\n\r\nHeight, Overall           57.9     in\r\n\r\nTrack Width, Front     64.7     in\r\n\r\nTrack Width, Rear      64.4     in\r\n\r\nMin Ground Clearance           N/A     in\r\n\r\nLiftover Height           N/A     in', '4163 cc', 100, 'Automatic', '5-Speed', 0, 90, 'Petrol'),
(14, 'sheheryar', '2018-07-12', '2018-07-12', 'Suzuki', '2018', 'Suzuki Cultus', '', 15, 30, 13, 0, 'd541f0ada7c4560d6eef5b321751c32a1.jpg', 'a486bc9d66044441f8784eda85f9f0632.jpg', '5991afc9729b2a55b9e42ee9709d60a83.jpg', 'df914b42102c423bbb72a8642d639f861thumb.jpg', '7834b957bddd49bd961eec62a79164a02thumb.jpg', 'ee45347ca9d245605aa28347cdf542be3thumb.jpg', '', '', 'The all-new Suzuki Cultus Automatic 2018 is recently launched at a ceremony in Pearl Continental Hotel Rawalpindi yesterday. This new model Cultus will be featuring a new auto gear shift system that will surely be loved by the Suzuki fans. The price of 2018 Suzuki Cultus Automatic in Pakistan is going to be Rs.15,28,000, which surely is competitive as compared to other brand automobiles with same engine specs in Pakistan. ', 'the family friendly four-wheeler, Suzuki Cultus keeps on updating and innovating the specs standards to keep its appeal fresh among the public. It is because of this updated innovation that the car still enjoys the title of the most loved family traveling companion especially among the low-income buyers. Every new model brings some creative features and functionalities which rejuvenates the passion of the Suzuki fans. Keeping the tradition of novelty alive, the latest Suzuki Cultus 2018 model also brings something very special. It is in the form of automatic gear shift mechanism. Itâ€™s a new beginning but with different attitude. With the latest model of the cost-effective and environment-friendly Cultus, the drivers will enjoy the same ultra-convenience as found in the extremely luxurious vehicles which are usually beyond the reach of the buyers from lower economic stratum of the society. The Suzuki Cultus 2018 price in Pakistan ranges from twelve lakh and fifty thousand to a little over fifteen lakh rupees for different variants.', 'Just like the exterior, the interior has been redesigned from the ground up to allow for added space and new features.\r\nThe blacklit digital-analog speedometer combo meets modern standards while the smooth rotating controls are a step up from the previous model. To make journeys more comfortable, Suzuki has insulated the noise, added adjustable side mirrors, built-in Bluetooth connectivity and more.\r\n\r\nDespite it being narrower, the car is still spacious from the inside. Thereâ€™s ample leg space and headroom for a comfy experience. You get 254 litres of boot space as well.\r\n\r\nSuzuki made sure the seats are high and windows are larger than before to allow for more visibility in crowded city areas.\r\n', 'The design of the all-new Cultus 2018 has been totally revamped against the same affordable Suzuki Cultus 2018 price in Pakistan. Just like the performance and interior, the exterior appearance has been beautified to a great extent. All the curves and curvatures exude a high level of style and sophistication. It is a beautiful and stylish road runner which is equally suitable for the city roads and the inter-city drives. The raised back part further adds to its bold and confidence-inspiring design.\r\n\r\nWhat further adds to the appeal and attractiveness of the exterior is its availability in as many as seven cool and decent colors. They include pearl red, graphite grey, white, super pearl black, cerulean blue, silky silver and sand beige.', '	67 hp @ 6000 RPM', 1000, 'Automatic', '4-Speed', 22, 35, 'Petrol'),
(15, 'abbas', '2018-07-12', '2018-07-12', 'Audi', '2018', 'Audi A4', '', 72, 7, 72, 7225, 'a409dab076b5797ce1bf4e3e0217582e1.jpg', 'c47f4278170720a6fe47693faca6d1c42.jpg', 'f1eb8f71bf6a6b39cacadb2f14454fec3.jpg', '5ad31c5897dab28d5d3a8bffac3cabc91thumb.jpg', '9f6c6c83580c44a2223339a3804598122thumb.jpg', 'efafbd010ed4187496d8df299a65bb4a3thumb.jpg', '', '', '`Its a good car for 6 people. the style is awesome. It has the back ac too. The leathe...', 'Audi a4 looks so cool. the fuel economy is awesome. the value of money is low because its too expensive. `Its a good car for 6 people. the style is awesome. It has the back ac too. The leathe...', '3-zone deluxe automatic air conditioning with combined charcoal and particulate filter, uniform diffuse ventilation on the front passenger side, ventilated glove compartment and rear digital display Auto dimming interior mirror, frameless (required for 1.4 TFSI if ordering memory package) 4L6 Bottle holders in all four doors Door sill trims in front with aluminium inlays Extendable partition net for the luggage compartment (Avant only) â€” â€” Floor mats at front and rear Folding rear seat backrest with 40:20:40 split Front centre armrest, adjustable with storage compartment Interior lighting package including ambient lighting â€“ includes courtesy lighting in the exterior door handles, entrance lighting, cup holders in the front, footwell lighting at front and rear, inside door handles, door trims and centre console Colour interior lighting package including ambient lighting with 30 selectable colours and 5 colour profiles QQ2 Load area rails system with load-securing kit (Avant only) 3GN â€” â€” Map lights at front and rear, individually dimmable Sport leather steering wheel with multifunction plus and shift paddles Storage package â€“ storage net on the back of the front seat backrests, storage compartment on the  driverâ€™s side, lockable glove compartment, cup holders in the rear centre armrest, luggage ', 'Audi exclusive titanium black gloss package â€“ adds black highlights to the Audi Singleframe, the trim strips  on the side windows, the roof rails (Avant only) and the bumpers, front and rear. Includes exterior mirrors in black\r\n4ZD\r\nRemote central locking with keyless start â€” â€” â€” Convenience key, full keyless entry and start â€“ includes sensor controlled luggage compartment release PGE Diffuser insert, rear in Twilight grey, matt with horizontal chrome trim Electric rear tailgate with electric retractable luggage cover and sensor controlled tailgate release â€“ can be opened and closed with a kicking motion (Avant only) â€” â€” Exterior mirrors electrically adjustable with integrated LED indicators â€” â€” Exterior mirrors; heated and folding; kerb-side function on the passenger side â€“ includes heated windscreen washer jets2 6XE â€” â€”\r\nExterior mirrors; heated, folding and auto dimming with memory; kerb-side function on the passenger  side â€“ includes heated windscreen washer jets 6XL\r\nIncluded in electric seats with memory function (PV3)\r\nIncluded in electric seats with memory function (PV3)\r\nLED headlights including LED daytime running lights, all-weather lights, turning lights, motorway light function and LED rear lights with dynamic indicators Audi Matrix LED headlights including LED daytime running lights, dynamic front and rear indicators, all-weather lights, turning lights, motorway light function and LED rear lights â€“ includes headlight washer system PXC Privacy glass â€“ dark tinted rear and rear side windows with acoustic glazing for the front side windows VW6 Radiator grille in Twilight grey, matt; slats in chrome Roof rails in anodised aluminium (Avant only', '150 hp @ 5000 RPM', 1300, 'Automatic', '5-Speed', 20, 54, 'Petrol'),
(16, 'sheheryar', '2018-07-12', '2018-07-12', 'Audi', '2018', 'Audi A5', '', 83, 80, 83, 80, 'a44ab946640bf6e16e28dfaae055f0671.jpg', '8c355d62ee6fa1fc4732873d37e18b6d2.jpg', '8ad4b635c92317c7b528c19ee900f8513.jpg', '1b7c04935d504d911210ab56849319fa1thumb.jpg', '2b17dbe5581138872c2d4207c7e5e8db2thumb.jpg', '713b83e6cada65a4f9c7232b040853893thumb.jpg', '', '', 'Itâ€™s not as if we didnâ€™t know what to expect of the 2018 Audi A5. Underneath, itâ€™s the same as the 2017 Audi A4 we recently tested, which we summed up in this way. It doesnâ€™t make much noise about it, but the A4 possesses a quiet competence that is as wonderful as it is easily misunderstood.', 'The same could be said of its two-door brother, with the caveat that it has a more polarizing exterior design even as it strives to look sportier. As we noted in our review of its hotter sibling coupe, the S5, the A5 takes the outgoing car shape one that was among the aesthetic highlights of early 21st-century automotive design and amps up the contours until our visual VU meters flirt with the red zone.\r\nAudiâ€™s second-generation MLB platform underpins the A5, so when it gets here next year as a 2018 model in U.S. trim, it will share the A4 252-hp 2.0-liter turbocharged four-cylinder engine, and thatâ€™s no bad thing. European models also offer a complement of diesel powerplants and a lower-power version of the 2.0-liter gasoline four-banger. If youâ€™ve spent time in most any recent Volkswagen product, the character of the engine will seem familiar. But mat the throttle, and when the seven-speed dual clutch automatic transmission grabs a gear and the engine finds the fat part of its powerband, thereâ€™s a legitimate pants kicking punt that goes beyond what the previous 220horse engine could provide. And, oddly, the new A5 still offers that dual clutch gearbox, while the supposedly sportier S5 now relies on a conventional eight speed automatic.', 'Inside, the A5 follows the TT, the Q7, and the A4 into the maxi-electronic-dash era, providing myriad ways to display pertinent visual information, including in the TFT screen in the instrument panel, directly ahead of the driver. While some of us love this, others would be just as content with Audiâ€™s fine head-up display and the nav screen off to the right. The interior itself, largely shared with the A4, suggests that Audi may cede its long-standing lead in materials quality to an ascendant Mercedes-Benz. Comfort, however, is excellent in both front seats, and outward visibility has not been sacrificed on the altar of style.\r\nStyle, however, does mean giving up rear-seat headroom and accessibility; figure the back seats are for occasional use only. The rear seatback folds to expand the 16-cubic-foot cargo area, which allows for plenty of luggage with room to spare for purchases made on an extended road trip, so this is a useful coupe. Those who share our initial reaction of being underwhelmed by the design effort will find that the chassis numerous strengths are not tarnished in the least by the addition of two doors and that a buyer is likely to save a little money by opting for the A4. Just how much, we cannot say, since U.S. pricing has yet to be announced, but we expect the A5 to start somewhere around 44,000 dollars when it arrives next spring.', 'The A5 coupe and convertible are nearly identical in size, save for a slightly higher roof height for the convertible. Even so, neither A5 will take up much more or less garage real estate than any of the others in this comparison.\r\nThe previous generation A5 styling was simple and elegant, and it aged quite well during its ten year run. The 2018 model shares nary a panel with the 2017, yet it is instantly recognizable as both an Audi and an A5. Curvier character lines, both on the clamshell hood and along the body sides, are the biggest differentiators between new and old. All A5 coupes come standard with a large panoramic sunroof that opens wide over the front-seat passengers and allows rear-seat passengers a view of the sky.', '1.4 Litre DOHC 16 Valves TFSI Engine', 1800, 'Manual', '5-Speed', 14, 58, 'Petrol'),
(17, 'abbas', '2018-07-12', '2018-07-12', 'Suzuki', '2018', 'Suzuki Wagon R', '', 12, 1119, 11, 1100, '6e729e9b0d24ada43f3c1936db2c9dcf1.jpg', '5a7f4bffbf5c7da6e01e9b0bc626265a2.jpg', 'e13ba085a1b73fe3b0dcf426e5d73ebf3.jpg', '2e19f7b7ec30fbe771340acb002c5c7e1thumb.jpg', 'acbc7ec028734d7341b8fd53bbb1b61c2thumb.jpg', 'e10e2e1d78459171633143c6b00437013thumb.jpg', '', '', 'Nice leg space for rear passengers. Exterior is good. High road clearance. High resale ...', 'The 1st Generation Suzuki Wagon R was introduced in 2014. Suzuki Wagon R 2018 is a front engine front wheel drive hatchback. Suzuki Wagon R 2018 features the brand new Suzuki K-Series engine that is more economical and quieter than most of the other engines fitted in Pak Suzukiâ€™s range of cars. The 1st Generation Suzuki Wagon R is available in 2 variants Wagon R VXR and Wagon R VXL. Suzuki Wagon R 2018 price in Pakistan ranges between Rs. 1,104,000 To 1,194,000', 'Suzuki Wagon R 2018 interior features the use of beige and black plastic trim pieces. The front and rear seats are covered in fabric. Standard features on the WagonR VXR include air conditioning as standard, power steering and 2-speaker stereo audio system with CD, AUX and USB input as standard. Features on the highest end WagonR VXL include power lock doors, folding rear seats, front fog lights and power windows. Options on the base models include air conditioning, deluxe fabric upholstery, security alarm and a 2-speaker stereo audio system with CD, AUX and USB input. The overall interior of the 1st Generation Suzuki Wagon R 2018 features a decent amount of interior space in both the front and rear for a hatchback of its exterior dimensions, it also offers a decent level of comfort but a lack of interior refinement.', 'Suzuki Wagon R 2018 exterior features a familiar Suzuki design language. The front end houses large trapezium styled side swept headlights, a trapezium grille with a chrome accent, a trapezium air intake, and dual standard circular fog lights. The rear end houses a roof spoiler, stacked rectangular vertical side swept taillights, and a standard case hatchback. All variants of the Suzuki Wagon R feature identical styling in every aspect. The overall exterior of the 1st Generation Suzuki Wagon R 2018 features a fairly restrained design language that is familiar for Japanese hatchback of its type.', '1.0 Liter DOHC 12 Valve Inline-3', 100, 'Manual', '5-Speed', 14, 0, 'Petrol'),
(18, 'abbas', '2018-07-12', '2018-07-12', 'Toyota', '2018', 'Toyota Land Cruiser', '', 223, 22300, 223, 22300, '93ad2f11ce088b71312b437f8554fb001.jpg', '7ac5d7d10006e520f1a7fca77ef99e9d2.jpg', '2a00caa7d86da88bba1bfa1069e550333.jpg', '23456d81511b77edf9edc6b9427102291thumb.jpg', 'cb5ba672ce0496b5259d303ecfd4549f2thumb.jpg', 'b25919bcb8f25e0a580a6efeb1f37ac43thumb.jpg', '', '', ' The interior of the car is so beatiful and it has advanced technology. And morever, the price of the car is so co..', 'It is a stylish car and I love it so much. It is too much comfortable and powerful. The interior of the car is so beatiful and it has advanced technology. And morever, the price of the car is so co..', 'Power comes from a 2.8-litre diesel engine (in Britain thatâ€™s all we get; other markets can have bigger petrols and so on), tweaked by a new, smaller, turbo, and urea exhaust solution combo, and it makes a steady 174bhp, driving all four wheels through either a six-speed manual or auto gearbox. The more important number is 331lb ft, which the big four-cylinder makes at just 1600rpm, but it remains a fact that acceleration is not this carâ€™s theme: it weighs 2430kg and can tow a three-tonne trailer.', 'There are 3dr and 5dr body styles, with five or seven seats, all of which can be had in the UK in trim levels stretching up to Invincible, which costs Â£52,295 as a 5dr, which is how theyâ€™re mostly bought in Britain. In an effort to get as much value as it can from the model, though â€“ and perhaps spotting that the Land Rover Defender is no longer available (for now, at least) â€“ Toyota is now introducing a more basic, workhorsey variant, too: the â€˜Utilityâ€™ version can be had from Â£32,795 as a three-door manual. Whisper has it that the body-on-frameâ€™s versatility, from a many-body-styles perspective, hasnâ€™t gone entirely unnoticed at Toyota eithe', '	310 hp @ 5600 RPM', 1400, 'Automatic', '5-Speed', 240, 93, 'Petrol');
INSERT INTO `carposts` (`post_id`, `author`, `created`, `updated`, `company`, `year`, `model`, `modelv`, `pmaxl`, `pmaxt`, `pminl`, `pmint`, `img1`, `img2`, `img3`, `img1thumb`, `img2thumb`, `img3thumb`, `img4`, `img5`, `sdesp`, `desp`, `inter`, `exter`, `engine`, `edisp`, `transmission`, `gearbox`, `millage`, `pc`, `fuel`) VALUES
(19, 'abbas', '2018-07-12', '2018-07-12', 'Mercedes Benz', '2018', '', '', 136, 13, 136, 13, '09678159d38232c2fe95851fd0c653581.jpg', '85dcbaedef0d0fcd6292309a3eec33112.jpg', 'ac63feeccbe2a9b4749769a4d6efce463.jpg', '4405d97fdfda860e16e6e5a3e94b523a1thumb.jpg', '8839c105d060c15b6f23a8791c8b8fc62thumb.jpg', 'a2b15d684ee19e99215f23541827f13f3thumb.jpg', '', '', 'I love this car, its grip, its comfort and its design. I love its pa...', 'I drive E300 (2011) instead of E200CGI. E300 has a 3000 CC engine and is more powerful then the mere 1800CC engine of E200. I love this car, its grip, its comfort and its design. I love its pa...', 'Mercedes-Benz interior designers create and realise interior concepts for both series production vehicles and show cars as well as futuristic visions. Creative design concepts are conceived and implemented not only in Sindelfingen, but also by the Advanced Interieur Design Studio in Como. The designers are responsible for the entire process chain, from creation of the design through to finalisation of accurate data models and execution of series production vehicles.', 'My/the (Classic Design) working day is made up mainly of managing the design processes for various vehicle projects. This is done in meetings on 2D designs, so-called renderings, with the designers, as well as on 1:4 and 1:1-scale clay models with our model designers.', '184 hp @ 5500 RPM', 2000, 'Automatic', '5-Speed', 240, 66, 'Petrol'),
(20, 'abbas', '2018-07-12', '2018-07-12', 'Suzuki', '2018', 'Suzuki Cultus', '', 13, 1300, 13, 1300, 'f50a28f9b1652116b1372bc118a854171.jpg', '784a5d8f1db58af5bd71e49529d714812.jpg', 'e15e1240584623ecbe6909b71c29fe133.jpg', '98ab47fdc39f7d762d8dc2b906a376421thumb.jpg', '35686525ff447edd930ca95bfd04a8ce2thumb.jpg', '3c80f5d13c08a78a3df20dee34282fec3thumb.jpg', '', '', 'Good ground clearance better than all hondas and Japanese cars', 'Yea! The car is 20 years old but still looks better than most ridiculous boxy Japanese cars. Good ground clearance better than all hondas and Japanese cars. Better for urban and rural use. Int...', 'The dashboard is as stylish as you would expect from a mid-level Pakistani hatchback; it isnâ€™t! Suzuki Pakistan has offered multi-tone interior (dashboard trims and upholstery), but I think it only adds to the cheapness of the interior. And those cut and curves (talking about the diagonal line in passing through the passenger side of the dashboard) are completely unnecessary and do not add anything to the overall design of the interior in general and dashboard in specific (except maybe an extra place where dirt will set in and becomes a pain to clean). But it is practical.\r\n\r\n', 'The exterior of the new Cultus is as different from the previous Cultus as it could be. The new car is a massive jump from its previous generation. It is just a new car from scratch. It would be not wrong to say that Suzuki really milked the previous generation Cultus. I mean they are still milking the Mehran. So why not do the same with other cars. But thank goodness they decided to introduce the new model. The previous Cultus had been in production for many years without any substantial change (new front grills do not count, people). It had the similar platform the old Suzuki Margalla sedan had. Pretty much the same car but without the boot. So itâ€™s a good thing we finally got ourselves a brand new car.', '67 hp @ 6000 RPM', 1000, 'Manual', '5-Speed', 22, 35, 'Petrol'),
(21, '', '2018-07-12', '2018-07-12', 'Suzuki', '2016', 'Suzuki Baleno', 'NONE', 7, 0, 6, 0, '7eba1834870bf525215c8a2f4c5b72201.jpg', '024e9e6fb883cb37aec00aafd655017e2.jpg', '52c143c91ba04390e65d0c7574f678253.jpg', '9374d20d45cdb7cfe9d64165ed3bcea01thumb.jpg', 'e786682e03b437bb800518df7128203b2thumb.jpg', '6bcd3072e7b50aff5ad6ab7199ef38033thumb.jpg', '', '', 'Suzuki Baleno car power with a 1000cc booster jet direct injection turbocharged petrol engine which will be fuel efficient or another naturally aspirated 1200cc engine. The mid size hatchback is pretty decent to look at. Suzuki debut in with latest shape but this year all new facilities available in new model car of Suzuki Baleno 2018.', 'When it comes to luxury cars in Pakistan with a wide set of features, Suzuki is one of the well known names in it. It has introduced number of top cars in the automobile industry over the past few years. With that regard, the Suzuki Baleno is one of the top ranked cars in the category of family cars. The Suzuki Baleno 2017 is packed with a wide range of features and has an awesome look and feel which makes it look attractive. The price of 2017 Suzuki Baleno in Pakistan is yet to be announced by Suzuki dealers in Pakistan. The car is already launched in other Asian Markets and it performed really well in the customer satisfaction and sale ratio department. Now the car is to be launched in Pakistan really soon and the Suzuki car fans are more than excited to get their hands on this car projector headlamps, floating roofline and rear LED taillamp cluster. Further details will be disclosed at the Frankfurt Motor Show in a conference on 15th September, where the production version will probably be revealed. Production is expected to start in mid 2016.', 'The steering is a little light, but the Suzuki darts around corners with surprising vigour. Even slowing down is satisfying, as the brake pedal feel is well judged. Soft suspension means there is a bit of body roll, yet the Baleno is nearly as good to drive as its sportier brother, the Swift. The cabin feels spacious, so itâ€™s not just about the storage space. There is loads of room in the front, and even with the seats set right back, rear legroom is adequate for adults to sit comfortably. It easily one of the most accommodating superminis around. Headroom is tight for those over six feet tall, but the back seats will be big enough to keep most people happy.', 'Suzuki plans to power the car with a 1000 cc BOOSTERJET direct injection turbocharged petrol engine which will be fuel efficient or another naturally aspirated 1200 cc engine. The mid-size hatchback is pretty decent to look at. There is a stylish trim stretching from the front to the rear fender. The curves are smooth and the car looks like its aerodynamics were designed in a wind tunnel. The Baleno does not look Suzukish as we are not much used to expecting the company to make hot looking cars. The car is expected to have Daytime Running Lamps .', '1.4 litre four cylinder petrol engine ', 1000, 'Manual', '5-Speed', 5, 51, 'Petrol'),
(22, 'sheheryar', '2018-07-13', '2018-07-13', 'Suzuki', '2016', 'Suzuki Wagon R', 'NONE', 11, 94, 11, 63, '47136f4930c6209d7ffc4f33847eff431.jpg', 'f7c1c74f8d7f9fc45ce0431905ab44072.jpg', '758ad0290eb77b2b269da8cf4a77b7ec3.jpg', '8f8e5dc12b80447d2406f3c1be03fb5a1thumb.jpg', '4d4cc8d4c48f4eaff11b93243425acd12thumb.jpg', 'd164e2866afbd2f1bfc4b71675aad4a93thumb.jpg', '', '', 'The 2016 Wagon R is the best car for small families and its the best small car.The price is good.The fuel economy is also good.The inside interior is also good.Most of the taxi drivers buy that car.The colours are brown and silver.The style is okay.The perfomance is very good.', 'Wagan R 2016 is one of the most successful hatchback models of Suzuki all across the world in fifth generation which was produced in 2016, it was first revealed in Japan and Pakistan in 2016. It is a compact car with large space which is perfect for family and goods. The R is considered as Recreation, Suzuki Wagan Râ€™s design is also known as tall boy or tall wagons which have maximum interior space due to high roof. Wagan R 2016 has proved to be the successful models in local and international markets such as Pakistan, India and Indonesia.', 'Wagan R 2016 is a family car with maximum space in a compact design with the high roof top which allows more space inside with vertical height advantage. Suzuki Wagan R 2016 is also considered ideal hatchback for transporting goods. The dashboard has music systems, navigation LCD at the center, with the automatic or manual transmission gear along with container, handbrake and arm rest.', 'Wagan R 2016 has unique designs with tall height, small front hood and flat hatchback at rear, it has large head lights with fog lights at the bumper which are optional. It is a four door hatchback. The major upgrades are made in this generation wagon r in front grill, bumpers, lights and shape.', '50.0 KW @ 6200 rpm ', 100, 'Manual', '5-Speed', 19, 35, 'Petrol'),
(23, 'sheheryar', '2018-07-13', '2018-07-13', 'Suzuki', '2018', 'Suzuki APV', 'NONE', 24, 2, 24, 2, '0b9ac684ef4e819d0842dcb8f7677bb21.jpg', '0f148b61e52e259d85b46f5f60fac3952.jpg', '4fb6cee7f0892e14d3c3f50a2b7958d33.jpg', 'b5043b9b7d608264e44ea64461fa29ef1thumb.jpg', '0d40d7942eb5e959f8698ac92b3795552thumb.jpg', 'a53c61eac3e6aebda0ead84b40c496a23thumb.jpg', '', '', 'The 1st Generation Suzuki APV (All Purpose Vehicle) was launched in 2005. Suzuki APV 2018 is a front engine front wheel drive MPV.  Suzuki APV was introduced to replace the outgoing Suzuki Every. Suzuki APV 2018 was the first MPV to be launched in Pakistan by Pak Suzuki Motors. Suzuki APV 2018 is also referred to as the Suzuki APV Arene and the Mitsubishi Maven in other regions of the world.  Suzuki APV 2018 is only available in 1 variant GLX. The Suzuki APV 2018 price in Pakistan is 24 lacs which is not competitive when compared to other cars in the same class available in the local market.', 'Suzuki is preparing to launch its new MPV known as Suzuki APV 2018 in Pakistan. It is going to be an automobile which will be equipped with a 1.5 liter petrol engine with an efficient fuel economy. The price of 2018 Suzuki APV in Pakistan is not confirmed yet by the Suzuki officials, but according to the fans it is assumed to be around Rs.24,18,000. The tough rival of this spectacular automobile by Suzuki is going to be none other than the 2018 Honda BRV i-VTEC S. This automobile will surely be replace its old variant Suzuki Every.\r\nThe new Suzuki APV 2018 is expected to have the same exterior and interior like its previous model 2017 Suzuki APV. It will be powered by a 1.5 liter DOHC 16 Valve petrol engine. The interior of this first MPV by Suzuki will be comprising of beige and black color plastic trim pieces.', 'The interior of the Suzuki APV 2018 compromises of beige and black plastic trim pieces. The front and rear seats are covered in beige fabric. Standard features include air conditioning, 4-speaker 2 tweeter stereo speaker system, power windows, power steering, power lock doors and a tachometer. The overall interior of the Suzuki APV 2018 offers a good amount of interior space for a MPV of its exterior dimensions and it also offers a decent level comfort', 'The exterior of the Suzuki APV 2018 features a fairly boxy design even for an MPV. The front end houses trapezium side swept headlights, a rectangular grille with dual chrome accents, a large rectangular air intake and standard circular fog lights. The rear end houses rectangular stacked taillights and a standard case tailgate. The overall exterior of the Suzuki APV 2018 features a fairly boxy design that is familiar for a Japanese designed MPV.', '1.5 Liter DOHC 16 Valve Inline-4', 1500, 'Manual', '5-Speed', 9, 46, 'Petrol'),
(24, 'sheheryar', '2018-07-13', '2018-07-13', 'Toyota', '2018', 'Toyota Passo', 'None ', 19, 5, 19, 0, '94cc2cc82a5df702a647126a39012f4e1.jpg', '1fad71b9cbc629fb33cf10c5f01fab932.jpg', 'ecd275d9b456624f91e0d9dcd1250b073.jpg', '51b3238c0476081c93bac20227eccaa91thumb.jpg', 'c2398e4b33a1462713e084dbc0d7fd2a2thumb.jpg', '53defe22546194f432b798d724a9ac713thumb.jpg', '', '', 'Toyota Passo is 5-door subcompact hatchback that was first introduced in 2004. Passo is basically a rebranded Daihatsu Boon. Daihatsu launched the third generation of the car in 2016. The first generation of Passo/Boon lasted from 2004 to 2010. The second gen Passo was unveiled in Japan on February 15, 2010, and lasted till 2016. Toyota Passo was revealed in Japan on April 12, 2016.', 'Toyota Passo, in the past, has been launched with a 1.0 or a 1.3 liter engine. The engine is mated to a CVT gearbox and is available in both, front-wheel drive and 4 wheel drive layouts. Passo is sibling Boon, however, has been launched with a not only a conventional 4 speed automatic gearbox but also with a 5 speed manual gearbox. Like Passo, Boon has also been sold with a 4 wheel drive platform. Third gen Toyota Passo is only available with a 1.0 liter 3 cylinder 1KR FE engine and in only front-wheel layout.\r\n', 'You get a few options, as far as the interior color is concerned. The car we were testing had a brown interior color that reminded me of older cars. It is two tone of brown, and on seats, you get a lighter shade of fabric. The car comes with a wireless key. So you donâ€™t need a physical key to enter the car or start it.\r\nThe dashboard is two toned and looks contemporary yet simple. There is not much going on there, but I personally like that. You get a simple layout with lots of storage places and basic operational buttons. On the passenger side of the dashboard, you just get an AC vent, a glove compartment, and a pocket to store your things. The pocket carries all the way to the middle of the dashboard right under the AC controls. In the middle, above the AC controls, you get a head unit that is connected to two speakers. On the driver side, you get a simple and basic instrument cluster. On the left of the steering wheel, you get the gear lever, and on the right side, you get switches for side mirrors, headlight adjustment, and eco idle button.', 'Passo and Boon are visually quite similar. Dimension wise, Toyota Passo is 3650mm long, 1665mm wide and 1535mm tall. To give you a reference, the 2nd generation Toyota Vitz is 3785mm long, 1695mm wide and 1520mm in length. Passo has more height than the 2nd gen Vitz. Otherwise, it is smaller in length and width. Passo also has a shorter wheelbase than Vitz. Toyota Passo 2015 is fairly modern looking. But I think it is a kind of a design which wonâ€™t get old in a decades time. From the front, the same is fairly simple yet pleasing. The good thing about the design of the car is that it is not trying to achieve anything. Passo knows its place in the market and that is what it exactly is a mini family hatchback. You don not get unnecessary cuts and edges. You get massive oval-ish headlights in the front. Like other modern cars, there is no big gaping mouth in the front. You get two slim slits between the headlights in the front bumper, divided by the Passo monogram in the center. And at the bottom, there is a piece of a long surface for mounting the front number plate under the monogram. Since it is an X package, it does not come with fog lights. But the front bumper comes with space for the fog lights if you want to go for aftermarket install. One thing that did strike me about the front of this car is that the bonnet and over front end of the car look quite raised. In simple words, the front end looks kind of fat.', 'DOHC 16 Valves 106hp', 1300, 'Automatic', '4-Speed', 24, 36, 'Petrol'),
(25, 'sheheryar', '2018-07-13', '2018-07-13', 'Toyota', '2017', 'Toyota Vitz', 'NONE', 15, 0, 15, 0, 'd2da0d06163efbab2444263b06615ff71.jpg', '6ca6c1f8fe839feaeb90722ab3c43dc72.jpg', 'df12089ea3bea2a14b7869df0eb9488a3.jpg', 'cbf43b41bf8ca1571fbde78dbee5596c1thumb.jpg', 'c66714195cbb131121ab6ee6f8620b242thumb.jpg', '0991fdf5c2518eeb85d834b7ec1bfc6a3thumb.jpg', '', '', 'The car in question is Toyota Vitz. But it is no ordinary Vitz, we are talking about the 2017 Toyota Vitz Hybrid. And it is the first hybrid Vitz in Pakistan. But before we start talking about this particular car in details, let us take a brief look at Toyota Vitz and its evolution.', 'Vitz is a subcompact hatchback manufactured and sold by the Japanese automaker Toyota. Vitz comes in both 3- and 5-door variants. Toyota started producing Vitz back in 1998. Vitz is one of the most successful small cars by the Toyota. Up until now, there have been three generations of the car. It is sold under Yaris nameplate in many parts of the world.\r\n\r\nCurrently, as mentioned above, Toyota Vitz is in its third iteration. The first generation XP10 lasted from 1998 to 2005. The second generation XP90 was launched in 2005 and later discontinued in 2010. And this third generation XP130 was introduced in 2010 and is still in production. The third generation received a couple of facelifts 2014 and 2017. The Toyota Vitz hybrid we reviewed, as mentioned above, is the 2017 model the second facelift of 3rd gen XP130 Vitz.', 'The first thing you will notice about the interior of the 2017 hatchback is that how similar it is to the interior of Toyota Aqua. The dashboard looks almost identical, and so are the door trims. It is simple in design, and not much is going on there. The instrument cluster is also similar to the Toyota Aqua.\r\nHowever, I do have a little complaint about the way the plastic and other materials of the interior of Toyota cars feel like. Some parts of the dashboard feel a bit scratchy and tacky. I had the similar impression when I test drove the Aqua. Other than the feel of the dashboard and door panels, being a new car, the Vitz 2017 has very impressive build quality.Being base model, you do not get a push start button. Instead, you have a regular Turn Key ignition. And the fact that you are turning a hybrid car with the twist of a key feels quite different than pushing a button.', 'And with the 2017 facelift of Toyota Vitz, Toyota kept the same massive grill but made the edges and cuts more sharper than before. The front bumper has a massive front grill, and you can see the bumper arches just coming from extreme left and right of the bottom of the bumper and converging right under the bulge that houses Toyota monogram on the top of the bumper.You get massive trapezoid front headlights as well. On the extreme left and right of the front bumper, you have black accents were top of the line Toyota Vitz has fog lamps.There is a beautiful touch of design where there is a simple horizontal strip of chrome accent on the bumper that matches with the headlight in the front and makes a two-prong fork in the projector type halogen headlight.At the back of the 2017 Vitz, you get completely redesigned rear lights as well as the boot and the rear bumper. Where initially the third generation which had simple triangular brake lights the design has completely changed for the 2017 model. Now the rear brake lamps are wide and extend to the boot lid.', '84 hp @ 6000 RPM', 1400, 'Automatic', '5-Speed', 15, 42, 'Petrol'),
(26, 'sheheryar', '2018-07-14', '2018-07-14', 'Suzuki', '2016', 'Suzuki Alto', 'NONE', 84, 0, 70, 0, 'b3851d5da33eb29904d97f6371f5dade1.jpg', '500344b4b77524a088db7735c74383802.jpg', '9f3c626cdee070ad1a408d5e4dc7c9483.jpg', '851c973863b7bd0ee3000d89b238ca241thumb.jpg', 'a3cb5778634ed10971a766798e99fe0c2thumb.jpg', '6bd6842ef4a1c755f18bacb2c06d57b63thumb.jpg', '', '', 'This is the highly desired car nowadays due to its affordability and structure that understands needs of average income person. This is a fully featured family car for a mini family that gets minimum expenditures while giving a safe and comfortable ride.  This car is relatively reasonable that is designed by considering the income level and traveling needs of middle class persons.\r\nIt is amazing to know that this car is one of the most searched cars since April 2015. As per views, this new model has been designed by keeping in mind the needs of an average car user specifically safety and comfort which can never be compromised when it comes to the purchase of vehicles. This car is expected to give high-level performance due to its advanced features.', '2016 Suzuki Alto is the newly introduced Japanese Suzuki model 2015-16 that has been launched recently. This car is not very much but in some of its features different and amazing choice to purchase. With its launch to answer questions relating to its price, features and specifications have also been answered in detail.', 'Now let talk about whatâ€™s inside this inspiring car. Inside of this car contains newly introduced colorful coatings and color schemes. There are many facilities that help drivers to manage their driving including manual climate, anti-reflective glass, Pioneer stereo player MP3,CD plus USB port. If you want to use it for placement of luggage, there is a pretty enough space of 129 liters with open seats. With folded seats, this capacity extends to 367 liters.\r\nThis newly introduced Suzuki Alto 2016 Model is fascinating with its great body shape that adds to its attractiveness. It is light to drive vehicle that is easy to handle. It has raised the roof for securing the interior space of vertical direction.  Seats are comfortable, and there is enough space for a small family comprising of 5 members to adjust in this beautifully designed Alto Car.', 'Its exterior is as inspiring as its interior when it comes to appearance and performance. It is a powerfully accelerated car that is equipped with paddle shift, improved turbo engine with auto shift gear (AGS) which is mounted upon body being more rigid. Brakes and suspension give dedicated turning.\r\nIt has the private front seat that together with above features ensure higher driving performance with a comfortable ride. This car is the best possible example of advanced and safe technology.', '4,800 rpm@ 660cc', 700, 'Manual', '5-Speed', 36, 35, 'Petrol'),
(27, 'sheheryar', '2018-07-14', '2018-07-14', 'Suzuki', '2017', 'Suzuki Liana', 'NONE', 14, 44, 13, 75, '01ac0255aaa37cdc48242873e68c70a51.jpg', 'ff3430d62a0b3cb636922c5f775ccfbe2.jpg', 'e72b60b7cb2342bc09767b89cf989fc13.jpg', '48844fa67a4e2d95db7d314438031f771thumb.jpg', '77a65253af75f9e610387d3e6844ff662thumb.jpg', '7ee65ce6e8425f248cf23aec5ba934943thumb.jpg', '', '', 'With a new 2014 version, Suzuki Liana continues to bring glory to the already noteworthy Japanese manufacturer, Suzuki. This 4 door Sedan possesses everything you may desire from a compact automobile for your family: style, comfort, safety and efficiency.', 'As you can witness in the Suzuki Liana pictures, this sophisticated car comes in six elegant colors. You can drive off in a white, graphite grey or silver Liana if you want the automobile reflect extreme levels of soberness. On the other hand, pearl red and eminent blue can be an exciting choice for users who like more glamour.\r\n', 'The external design might be boring due to a typical Sedan style, but the interior is quite refreshing. Three people at the back and two at the front will enjoy a quiet and smooth ride in this spacious vehicle.', 'The external design of Liana follows a conventional Sedan body type with no modified curves or lines. Although the car looks elegant, it does not make a bold statement. The front grille is simple and is flanked by a pair of ordinary looking headlights. The same simple pattern follows for the rest of the car up to its rear end.', '115 KW @ 156 hp', 1400, 'Manual', '5-Speed', 13, 50, 'Petrol');

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
(1, '50', 'Manual', '4-Speed', 'Petrol'),
(2, '70', 'Automatic', '5-Speed', 'Diesel'),
(3, '100', '', '', ''),
(4, '125', '', '', ''),
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
(1, 24, 16, 6);

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
(1, 'sheheryar', '2018-07-11', '2018-07-11', 'Suzuki', 2018, 'Suzuki GSX1300 R Hayabusa', 26, 50, 26, 0, '931086e8d9bfd0a38890dbf6691bf68a1.jpg', 'fb62a3ff80ce2ad2a12e4052426348372.jpg', 'bfc913564de455171a3aae1c3c87bdbb3.jpg', 'fcac5d18fde77f4be66b2be27997bb8d1thumb.jpg', '00b197cb7ffa9ea4f1e1cf398d0508bf2thumb.jpg', 'c118e632a7d98a117adf0599f4e2c4573thumb.jpg', '', '', 'Suzuki Hayabusa is famed for being one of the most expensive and fastest heavy bikes in the world. Equipped with a 1340cc DOHC air cooled engine, Suzuki Hayabusa is one of the highly performing beasts around the world which is admired for its high performance by notable and renowned bikers. The resonating feel of power and thrill induces an attitude of pride for the rider and the bike. A 6-speed gear transmission and accompanied by a Suzuki clutch assistant system ensures smooth shifting of gears. A wheelbase of 1480mm provides maximum road grip for a dedicated performance and comfort. The Japanese engineered Suzuki Hayabusa defines the standards for super-fast modern racing bikes. Suzuki Hayabusa- Ride a rocketing thrill and be unbeatable.', 'Pak Suzuki has recently introduced the new model of their flagship sports bike of the world by the name of Suzuki Hayabusa 2018 in Pakistan. The new and spectacular Suzuki Hayabusa GSX 1300R has also won the award of one of the top speed heavy bikes in the world. This heavy bike by Pak Suzuki has a top speed of 312 kmph which is fast by all means for a heavy bike. The price of 2018 Suzuki Hayabusa in Pakistan is Rs.26,00,000, which is quite high as compared to other brand heavy bikes with similar engine specs available in the Pakistan Heavy Bike Industry. The rival of this heavy bike by Pak Suzuki in Pakistan is none other than the Aprilia Tuono V4 1100.\r\nThis dynamic machine may not be unknown to you as the nameplate has existed for over a decade, and is already famous for its breathtaking speed. Even today, Hayabusa GSX has the reputation of a champion among all bikes with the title of the â€˜fastest horseâ€™ in the world of racing. The professionally expert Japanese auto engineers have equipped the super fast vehicle with advanced features to bring it up to the expectations of the modern day sports bikers.', 20, 1, 'DOHC 16 Valve; 4-Cylinder; Liquid Cooled', 1400, '1', 11, 280, 262, '5-Speed'),
(2, 'abbas', '2018-07-11', '2018-07-11', 'Suzuki', 2018, 'Suzuki GSX-R600', 20, 1950, 20, 1950, '4065f11c703c239c67fa377eaa0670c71.jpg', 'bc8a3b04410185503cd0bfd68e4b96b42.jpg', 'a7429e6727fdfd712132bdaecf3277333.jpg', '60ac004dc6e3531adbf784915b0634951thumb.jpg', 'a8d5cfd4265d086debb92e29a95961d32thumb.jpg', '601e29e5443b23b417c0ec705e3eccba3thumb.jpg', '', '', 'Suzuki GSX-R600 Price in Pakistan Complete Details, Specs, Price and Features are give to you through comparebox you can also allow to compare your favorite bike and also other....\r\n', 'The Suzuki GSX-R600 continues its dominance in the AMA Pro Road Racing series, taking all 600cc championships in 2012 - including the Daytona Sportbike, Supersport West, and Supersport East.This further solidifies the GSX-R600 as part of a race-winning machine. Pak Suzuki launched the Suzuki GSX-R600 in Pakistan due to its popularity all over the world in a price tag of 1950000 which is slightly higher than the other competitors available in the market. \r\n\r\n', 1, 3, '	4-stroke, 4-cylinder, liquid-cooled, DOHC', 600, '1', 0, 0, 253, '5-Speed'),
(3, 'abbas', '2018-07-11', '2018-07-11', 'Honda', 2018, 'Honda CBR250R', 0, 0, 0, 0, 'e59356d816e0a4a0c3f903662a73c84c1.jpg', '393e9175f0f8fa4d5d3e4ab005f38f072.jpg', '6fcd7c5f0e6f73c5be51627dedd3ebc83.jpg', '48dc1e2511b5d12a59ce7bc3cc2556ae1thumb.jpg', '6688bf0552a957c467410302279372d52thumb.jpg', 'a9325d818b6c08a4a1c074c7102d84783thumb.jpg', '', '', '2018 Honda CB 250Fâ€™s features include:\r\n\r\n4-stroke single cylinder 250cc DOHC\r\n6-speed gearbox\r\nSelf-start system\r\nLED tail light\r\nFront & rear disc brakes\r\nAlloy rims with tubeless tires', 'The single disc brakes come in both rear and front wheels of the Honda 250F. Moreover, the front tyre is a 110/70-R 17 M/C (54H) whereas at the rear, you get a 140/70-R 17 M/C (66H).\r\n\r\nMoving towards the engine and suspension specifications, the 250F is, as the name suggests, a 250cc engine.\r\n\r\nExplaining the engine properties, an official source claimed:\r\n\r\nIt [Honda 250F] comes with a telescopic fork suspension in the front and monoshock swing arm suspension in the back.\r\n\r\nThe source also revealed that the 135 kilogram bike is capable of holding close to 17 liters of fuel.', 1, 1, 'Engine	4 Stroke Single Cylinder Oil and Air Cooled Engine	', 300, '2', 0, 0, 0, '5-Speed'),
(4, 'abbas', '2018-07-12', '2018-07-12', 'Suzuki', 2019, 'Suzuki GSX1300 R Hayabusa', 26, 2600, 26, 2600, '0334f397c68877024cecd2263596693a1.png', '18c71718f65ebeaeef2727669eae5cc61.png', '86ab9b407e8fabe151955e266fa5a9ae1.png', 'ddd7636f18d22612b7e95015c13332771thumb.jpg', '7334e236f8d40504455c1d784e309e761thumb.jpg', '72213fe4a8ed255a7a2705915f8ccaa01thumb.jpg', '', '', 'The Japanese engineered Suzuki Hayabusa defines the standards for super-fast modern racing bikes. Suzuki Hayabusa- Ride a rocketing thrill and be unbeatable.', 'Suzuki Hayabusa is famed for being one of the most expensive and fastest heavy bikes in the world. Equipped with a 1340cc DOHC air cooled engine, Suzuki Hayabusa is one of the highly performing beasts around the world which is admired for its high performance by notable and renowned bikers. The resonating feel of power and thrill induces an attitude of pride for the rider and the bike. A 6-speed gear transmission and accompanied by a Suzuki clutch assistant system ensures smooth shifting of gears. A wheelbase of 1480mm provides maximum road grip for a dedicated performance and comfort. The Japanese engineered Suzuki Hayabusa defines the standards for super-fast modern racing bikes. Suzuki Hayabusa- Ride a rocketing thrill and be unbeatable.', 1, 1, '1340 cc', 100, '2', 0, 303, 312, '5-Speed'),
(6, 'abbas', '2018-07-12', '2018-07-12', 'Yamaha', 2018, 'Yamaha YZF-R6', 14, 1435, 14, 1435, 'c6a06bd9c2a9a0bd28e25d6dd3f3929c1.png', '021439393d7fc02a6a28ee364993ed7e1.png', 'f386d39d85edc4c9bfbd979e5eedc0531.png', 'dbee13237b7cfb4ec54f5c407f129c6f1thumb.jpg', '4cb7520e25e0d7aee000a61d1306459f1thumb.jpg', '3acf7376e6c7b01967c66eb4174d0d1f1thumb.jpg', '', '', 'Fresh import june 2018 toce exhaust\r\nMention PakWheels.com when calling Seller to get a good deal', '', 1, 1, '0', 100, '1', 0, 0, 0, '4-Speed');

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bikeposts`
--
ALTER TABLE `bikeposts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
