-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220802.ff0b2d86c9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 04:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msd`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(50) NOT NULL,
  `user_id` int(10) NOT NULL,
  `sp_id` int(50) NOT NULL,
  `type` varchar(25) NOT NULL,
  `category` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `sp_id`, `type`, `category`, `name`, `address`, `phone`, `date`, `time`) VALUES
(1, 7, 27, 'plumber', 'plumber', 'tetst', 'tstst', '8521479632', '2020-01-23', '07:00:00'),
(2, 7, 27, ' repair and fixes', 'plumber', 'malani', 'near vasi talav road, mahuva', '9988556644', '2020-01-25', '11:00:00'),
(10, 7, 28, ' water leakages', '', 'pppppp', 'near gandhibaug', '7990624777', '0000-00-00', '05:00:00'),
(13, 7, 47, 'water leakages', '', 'pppppp', 'near gandhibaug', '7990624723', '2020-01-29', '05:00:00'),
(22, 63, 29, 'hairstyling', 'beauty_salon', 'jinal', 'mahakali nagar,mahuva', '7096868515', '2020-02-15', '03:00:00'),
(23, 63, 25, 'AC and washing machine re', 'Home Appliance', '555', 'near gandhibaug', '9988556622', '2020-02-17', '03:00:00'),
(27, 63, 25, 'AC and washing machine re', 'Home Appliance', 'jinal', 'near vasi talav road , mahuva', 'jjj', '2020-02-17', '00:00:00'),
(28, 63, 25, 'AC and washing machine re', 'Home Appliance', 'ggg', 'near vasi talav road , mahuva', '56655585', '2020-02-17', '00:00:00'),
(30, 63, 29, 'hairstyling', 'beauty_salon', 'jinal', 'near vasi talav road , mahuva', '9988556644', '2020-02-18', '11:00:00'),
(31, 63, 29, 'makeup', 'beauty_salon', 'radhika', 'near gandhibaug', 'jjk', '2020-02-18', '03:00:00'),
(32, 63, 46, 'massage for women', 'beauty_salon', 'radhika', 'near vasi talav road , mahuva', '5895689632', '2020-02-18', '09:00:00'),
(33, 98, 44, 'fridge repair', 'Home Appliance', 'radhi', 'near gandhibaug', '7990624723', '2020-02-05', '07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `subject`, `email`, `message`) VALUES
(1, 'vijay', 'kain', 'vijayjoliya66@gmail.', 'this site is free and open to everyone'),
(2, 'radhi', 'gardener', 'kjjksjkd', 'in this site service provider is good at their services'),
(3, 'jinal', 'gardener', 'jinalmalani055@gmail', 'hello msd ');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `type`, `status`) VALUES
(1, 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, 1),
(9, 'testuser@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, 1),
(23, 'vrundavan11@gmail.com', 'password', 1, 1),
(24, 'surya123@gmail.com', 'password', 1, 0),
(25, 'suvidha11@gmail.com', 'password', 1, 0),
(26, 'vishwas1234@gmail.com', 'password', 1, 0),
(27, 'dhiraj11@gmail.com', 'b4af804009cb036a4ccdc33431ef9ac9', 1, 1),
(28, 'bhukan234@gmail.com', 'password', 1, 0),
(29, 'ms123@gmail.com', 'password', 1, 0),
(30, 'pretty123@gmail.com', 'password', 1, 0),
(31, 'ram111@gmail.com', 'password', 1, 0),
(32, 'ksheth2233@gmail.com', 'password', 1, 0),
(33, 'shahpaint@gmail.com', 'password', 1, 0),
(34, 'valiya23@gmail.com', 'password', 1, 0),
(35, 'shekh123@gmail.com', 'password', 1, 0),
(36, 'darbar12@gmail.com', 'password', 1, 0),
(37, 'shiyal234@gmail.com', 'password', 1, 0),
(38, 'jay223@gmail.com', 'password', 1, 0),
(39, 'vk12@gmail.com', 'password', 1, 0),
(41, 'pjoshi234@gmail.com', 'password', 1, 0),
(42, 'solanki11@gmail.com', 'password', 1, 0),
(43, 'bbarot45@gmail.com', 'password', 1, 0),
(44, 'astore@gmail.com', 'password', 1, 0),
(45, 'rd11@gmail.com', 'password', 1, 0),
(46, 'hajira22@gmail.com', 'password', 1, 0),
(47, 'bhanderi2233@gmail.com', 'password', 1, 0),
(48, 'vala11@gmail.com', 'password', 1, 0),
(49, 'phd11@gmail.com', 'password', 1, 0),
(50, 'piyush56@gmail.com', 'password', 1, 0),
(58, 'test@gmail.com', 'password', 2, 1),
(59, 'mahi@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 1),
(60, 'preet@gmail.com', '9f4d54d93c9857785ac7ab43403921aa', 2, 0),
(63, 'test@gmail.com', 'password', 2, 1),
(64, 'marci.landers2014@gmail.com', '7f0c69c193734109c097764e6eef053f', 2, 1),
(65, 'dhiraj11@gmail.com', '0997f9a1f7b4df85cc08f18f89c35b51', 2, 1),
(66, 'marci.landers2014@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 1),
(67, 'heena@gmail.com', '4e9a9dae6321a3baafe10346d3061f4d', 2, 1),
(70, 'jinalmalani055@gmail.com', 'jinal009', 1, 0),
(71, 'pihaan@gmail.com', 'pihaan009', 1, 0),
(73, 'mihir@gmail.com', 'mihir009', 1, 0),
(74, 'marci.landers2014@gmail.com', '1234567890', 1, 0),
(75, 'jinalmalani055@gmail.com', 'radhika009', 1, 0),
(76, 'radhika@gmail.com', 'radikaa009', 1, 0),
(77, 'radhika@gmail.com', 'radikaa009', 1, 0),
(78, 'falguni@gmail.com', 'falguni009', 1, 0),
(88, 'jiyan@gmail.com', 'password', 1, 0),
(89, 'kartik@gmail.com', 'kartik009', 1, 0),
(90, 'kartik@gmail.com', 'kartik009', 1, 0),
(91, 'haresh@gmail.com', 'haresh009', 1, 0),
(92, 'marci.landers2014@gmail.com', 'jinu009', 1, 0),
(93, 'marci.landers2014@gmail.com', 'jinu009', 1, 0),
(94, 'marci.landers2014@gmail.com', 'jinu009', 1, 0),
(95, 'marci.landers2014@gmail.com', 'abcabc', 1, 0),
(96, 'jinalmalani055@gmail.com', 'abcabc', 1, 0),
(97, 'jinalmalani055@gmail.com', 'abcabc', 1, 0),
(98, 'jinalmalani055@gmail.com', '7f0c69c193734109c097764e6eef053f', 2, 1),
(99, 'jinalmalano055@gmail.xom', '74e9bfab3b2449b7cf4865fe00c43f5d', 2, 1),
(100, 'admin@gmail.com', '7f0c69c193734109c097764e6eef053f', 2, 1),
(101, 'dhiraj11@gmail.com', 'password', 1, 0),
(102, 'surya123@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 1),
(103, 'dhiraj11@gmail.com', 'password', 1, 0),
(104, 'radhi@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 1),
(105, 'jinu009@gmail.com', '7f0c69c193734109c097764e6eef053f', 2, 1),
(106, 'tirthhirapara3304@gmail.com', 'bc55ba83efd6b2f22116aa5dd404c46f', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `sp_id`, `user_id`, `rating`, `review`) VALUES
(5, 30, 98, 5, 'good hairstyle '),
(6, 46, 98, 3, 'nice mackup'),
(7, 31, 98, 3, 'good carpenter'),
(8, 37, 98, 5, 'better service provide'),
(9, 0, 98, 4, 'not good services'),
(11, 35, 98, 4, 'not good services provides'),
(12, 23, 98, 5, 'fast delivery'),
(30, 50, 98, 3, 'good in all'),
(31, 38, 98, 5, 'good electrician'),
(32, 42, 98, 3, 'not good'),
(33, 24, 98, 3, 'good products'),
(34, 49, 98, 4, 'fast delivery and good products'),
(35, 33, 98, 3, 'good painter'),
(36, 34, 98, 2, 'not good at his work'),
(37, 27, 98, 3, 'behaviour and service is good'),
(38, 47, 98, 1, 'behaviour is not good'),
(39, 25, 98, 2, 'good at his work.'),
(40, 26, 98, 5, 'good service provider and behaviour is so good');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `service_list` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_list`) VALUES
(1, 'plumber'),
(2, 'capentar'),
(3, 'grocery'),
(4, 'gardener'),
(5, 'home appliances'),
(6, 'electrician'),
(7, 'beauty salon'),
(8, 'laundry'),
(9, 'painter'),
(10, 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `service_person2`
--

CREATE TABLE `service_person2` (
  `user_id` int(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(50) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_person2`
--

INSERT INTO `service_person2` (`user_id`, `category`, `image`, `description`, `price`, `type`) VALUES
(23, 'grocery', 'img/clients/c1.jpg', 'good delivery service', 100, 'dairy products'),
(24, 'grocery', 'img/clients/pm2.png', 'delivers on time', 100, 'frozen foods'),
(25, 'Home Appliance', 'img/clients/h2.jpg', 'provides best good service', 200, 'AC and washing machine repairs'),
(26, 'Home Appliance', 'img/clients/p1.png', 'provide good service', 200, 'tv repair, fridge repair'),
(27, 'plumber', 'img/clients/pm.png', 'good plumbing service', 300, 'water leakages , repair and fixes'),
(28, 'plumber', 'img/clients/pm2.png', 'best plumbing service', 300, 'pipe and tape fittings, water leakages'),
(29, 'beauty_salon', 'img/clients/b1.png', 'good makeup artist', 300, 'makeup,hairstyling'),
(30, 'beauty_salon', 'img/clients/b2.jpg', 'good artist', 400, 'hairstyling,makeup,massage for women'),
(31, 'carpentar', 'img/clients/c1.jpg', 'good srvice provider', 400, 'repair and fixes, new furniture making'),
(32, 'carpentar', 'img/clients/c2.jpg', 'best service', 300, 'repair and fixes, new furniture making, other wood'),
(33, 'painter', 'img/clients/h1.png', 'good painter', 500, 'house painting'),
(34, 'painter', 'img/clients/p1.png', 'outstanding wall painting', 400, 'house painting'),
(35, 'gardener', 'img/clients/p1.png', 'good service', 200, 'shed and fencing repair ,waste removal'),
(36, 'gardener', 'img/clients/g1.jpg', 'provides gardener service', 300, 'applying feeds and pesticides, waste removal'),
(37, 'electrician', 'img/clients/pm2.png', 'best fitting service', 500, 'electricity breakdown, electricial wiring'),
(38, 'electrician', 'img/clients/c1.jpg', 'good electrician', 400, 'computer repairs, electricial wiring'),
(39, 'laundry', 'img/clients/pm2.png', 'best laundry servce', 100, 'dry cleaning, pressing or iorning'),
(41, 'laundry', 'img/clients/p1.png', 'good service provider', 150, 'spot treatment, pressing or iorning'),
(42, 'electrician', 'img/clients/p1.png', 'best fitting service', 400, 'electricity breakdown, electricial wiring'),
(43, 'carpentar', 'img/clients/p1.png', 'provide good service', 400, 'repair and fixes, new furniture making'),
(44, 'Home Appliance', 'img/clients/h1.png', 'good service', 100, 'fridge repair, tv repair'),
(45, 'painter', 'img/clients/p1.png', 'good artist', 300, 'house painting,spray painting'),
(46, 'beauty_salon', 'img/clients/b3.jpg', 'do best makeup', 500, 'hairstyling,makeup,massage for women'),
(47, 'plumber', 'img/clients/pm3.png', 'best plumbing service', 200, 'water leakages,repair and fixes'),
(48, 'gardener', 'img/clients/c1.jpg', 'good service', 200, 'shed and fencing repair ,waste removal'),
(49, 'grocery', 'img/clients/pm2.png', 'fast delivery', 200, 'dairy products'),
(50, 'laundry', 'img/clients/pm2.png', 'good laundry service', 150, 'dry cleaning, pressing or iorning'),
(51, 'Gardener', 'img/clients/pm2.png', 'good gardener ', 150, 'shed and fencing repair ,waste removal'),
(68, 'painter', 'img/clients/41390B612_20190314_134522_056.jpg', 'good artist', 1000, 'house painting'),
(69, 'painter', 'img/clients/267722791e7e5d8ec6ab65599490098c6ee7f.jpg', 'good artist', 400, 'house painting'),
(70, 'painter', 'img/clients/641552791e7e5d8ec6ab65599490098c6ee7f.jpg', 'good artist', 400, 'house painting'),
(71, 'gardener', 'img/clients/89445IMG_20180716_161357.jpg', 'good service', 200, 'repair and fixes, new furniture making, other wood'),
(73, 'grocery', 'img/clients/91816IMG_20180716_161453.jpg', 'good service', 150, 'dairy products'),
(74, '0', 'img/clients/8883706c41f132081da38dd883d26b88e17b9.jpg', 'jj', 450, 'water leakages , repair and fixes'),
(75, 'beauty salon', 'img/clients/322832791e7e5d8ec6ab65599490098c6ee7f.jpg', 'provide good service', 300, 'hairstyling,makeup,massage for women'),
(76, 'beauty salon', 'img/clients/707882791e7e5d8ec6ab65599490098c6ee7f.jpg', 'good artist', 100, 'hairstyling,makeup,massage for women'),
(77, 'beauty salon', '../img/clients/707002791e7e5d8ec6ab65599490098c6ee7f.jpg', 'good artist', 100, 'hairstyling,makeup,massage for women'),
(88, 'beauty salon', '../img/clients/20943', '', 150, 'fixing and repair'),
(89, 'painter', 'img/clients/68220IMG_20181229_233824_770.jpg', 'good service', 200, 'fixing and repair'),
(90, 'painter', 'img/clients/61749IMG_20181229_233824_770.jpg', 'good service', 200, 'fixing and repair'),
(91, 'gardener', 'img/clients/97346IMG_20190217_221604_947.jpg', 'best fitting service', 200, 'shed and fencing repair ,waste removal'),
(92, 'capentar', '../img/clients/41244', '', 200, 'repair and fixes, new furniture making'),
(93, 'capentar', '../img/clients/66027', 'good services', 200, 'repair and fixes, new furniture making'),
(94, 'capentar', '../img/clients/58831', 'good services', 200, 'repair and fixes, new furniture making'),
(95, 'beauty salon', '../img/clients/23319', 'good services', 200, 'fixing and repair'),
(96, 'gardener', '../img/clients/8036006c41f132081da38dd883d26b88e17b9.jpg', 'dddd', 150, 'repair and fixes, new furniture making'),
(97, 'gardener', '../img/clients/8207106c41f132081da38dd883d26b88e17b9.jpg', 'dddd', 150, 'repair and fixes, new furniture making'),
(101, 'painter', '../img/clients/87588â€ª+91 6354 731 347â€¬ 20190211_142145.jpg', 'good service', 400, 'dairy products'),
(103, 'beauty salon', 'img/clients/40845Screenshot_2019-03-08-22-29-17.png', 'best plumbing service', 500, 'hairstyling,makeup,massage for women');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_image` varchar(90) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `name`, `user_image`, `address`, `phone`) VALUES
(1, 'vijay joliya', 'jinal.jpg', 'mahuva', '7623861157'),
(7, 'jinal', '', 'khadasali', '7990624777'),
(9, 'malani', 'C:\\Users\\Marci\\Pictures\\jinup1306\\preet.jpg', 'khadasali', '7202915981'),
(23, 'vrundavan provision', '', 'radheshyam mandir road,mahuva', '9988556622'),
(24, 'suryakamal provision', '', 'kubernath road, mahuva', '7202915981'),
(25, 'suvidha store', '', 'near vasi talav road , mahuva', '7623861157'),
(26, 'vishwas store', '', 'near gandhibaug', '7623861157'),
(27, 'dhiraj patel ', '', 'kubernath road, mahuva', '6655442233'),
(28, 'nikunj bhukan', '', 'poastal society,mahuva', '9988554477'),
(29, 'madhu salon', 'img/clients/b2.jpg', 'gandhibaug road,mahuva', '8899774455'),
(30, 'ladycare salon', '', 'near telephone exchange', '8855669944'),
(31, 'ramjibhai patel', '', 'mahakali nagar,mahuva', '9988556644'),
(32, 'kantilal sheth', '', 'indira vasat ,mahuva', '7788995566'),
(33, 'mahesh shah', '', 'haveli road ,mahuva', '9988556644'),
(34, 'rameshbhai valiya', '', 'near vasi talav road, mahuva', '6598742311'),
(35, 'gopibhai shekh', '', 'gandhi vasat ,mahuva', '8899554466'),
(36, 'kishanbhai darbar', '', 'radheshyam road , mahuva', '9988526314'),
(37, 'vijay shiyal', '', 'jadra road, mahuva', '6655214874'),
(38, 'jaydeep patel', '', 'near radheshyam school, mahuva', '6598742311'),
(39, 'vishal kavad', '', 'near param shop, mahuva', '8796500221'),
(41, 'pintu bhai joshi', '', 'near vasi talav road, mahuva', '9955220011'),
(42, 'bhaveshbhai solanki', '', 'shilpi society,mahuva', '6688775544'),
(43, 'bharatbhai barot', '', 'near vasi talav road , mahuva', '6548722331'),
(44, 'A-one store', '', 'near heaven hotel,mahuva', '8855669977'),
(45, 'rameshbhai doshi', '', 'near kuberbaug road,mahuva', '7744559988'),
(46, 'hajira salon', '', 'near garden road , mahuva', '8855223366'),
(47, 'jaysukh bhai bhanderi', '', 'kubernath road, mahuva', '7623861157'),
(48, 'shrikant vala', '', 'kubernath road, mahuva', '6699887744'),
(49, 'phd mart', '', 'near heaven hotel,mahuva', '6541298752'),
(50, 'piyush bhai  shekh', '', 'near gandhibaug', '6542198756'),
(51, 'rahul joshi', '', 'kuberbaug mahuva', '9988556644'),
(58, 'test', '', 'dojwje sdksjd', '8787278872'),
(59, 'mahi malani', '', 'near gandhibaug khadasali', '7990624777'),
(60, 'preet', '', 'surat', '7202915981'),
(63, 'jinal', 'img/clients/b2.jpg', 'mahuva', '7202915981'),
(64, 'jinal', 'img/clients/8741906c41f132081da38dd883d26b88e17b9.jpg', 'near vasi talav road , mahuva', '8956236698'),
(65, 'malani', 'img/clients/3571906c41f132081da38dd883d26b88e17b9.jpg', 'mahuva', '7623861157'),
(66, 'radhi', 'img/clients/22702â€ª+91 6354 731 347â€¬ 20190211_142145.jpg', 'mahuva', '7623861157'),
(67, 'heena', 'img/clients/9537306c41f132081da38dd883d26b88e17b9.jpg', 'vijapadi', '8956234568'),
(68, 'jiyan', 'img/clients/41390B612_20190314_134522_056.jpg', 'near gandhibaug mahuva', '9988556644'),
(69, 'jinal', 'img/clients/267722791e7e5d8ec6ab65599490098c6ee7f.jpg', 'near vasi talav road , mahuva', '7990624723'),
(70, 'jinal', 'img/clients/641552791e7e5d8ec6ab65599490098c6ee7f.jpg', 'near vasi talav road , mahuva', '7990624723'),
(71, 'pihaan', 'img/clients/89445IMG_20180716_161357.jpg', 'near vasi talav road, mahuva', '7990624723'),
(73, 'mihir', 'img/clients/91816IMG_20180716_161453.jpg', 'kubernath road, mahuva', '9988556644'),
(74, 'jjj', 'img/clients/8883706c41f132081da38dd883d26b88e17b9.jpg', 'jj', '789655455565'),
(75, 'radhika', 'img/clients/322832791e7e5d8ec6ab65599490098c6ee7f.jpg', 'near vasi talav road, mahuva', '7990624777'),
(76, 'radhika', 'img/clients/707882791e7e5d8ec6ab65599490098c6ee7f.jpg', 'near vasi talav road , mahuva', '8956234568'),
(77, 'radhika', '../img/clients/707002791e7e5d8ec6ab65599490098c6ee7f.jpg', 'near vasi talav road , mahuva', '8956234568'),
(78, 'falguni', '../img/clients/43026abc.jpg', 'kubernath road, mahuva', '7990624723'),
(79, 'falguni', '../img/clients/40335abc.jpg', 'kubernath road, mahuva', '7990624723'),
(80, 'falguni', '../img/clients/96388abc.jpg', 'kubernath road, mahuva', '7990624723'),
(81, 'falguni', '../img/clients/67222abc.jpg', 'kubernath road, mahuva', '7990624723'),
(82, 'falguni', '../img/clients/26782abc.jpg', 'kubernath road, mahuva', '7990624723'),
(83, 'falguni', '../img/clients/13970abc.jpg', 'kubernath road, mahuva', '7990624723'),
(84, 'falguni', '../img/clients/73607abc.jpg', 'kubernath road, mahuva', '7990624723'),
(85, 'falguni', '../img/clients/25651abc.jpg', 'kubernath road, mahuva', '7990624723'),
(86, 'falguni', '../img/clients/59712abc.jpg', 'kubernath road, mahuva', '7990624723'),
(87, 'falguni', '../img/clients/54972abc.jpg', 'kubernath road, mahuva', '7990624723'),
(88, 'jinal', '../img/clients/20943', 'near vasi talav road , mahuva', '9988556622'),
(89, 'kartik', 'img/clients/68220IMG_20181229_233824_770.jpg', 'kubernath road, mahuva', '9988556622'),
(90, 'kartik', 'img/clients/61749IMG_20181229_233824_770.jpg', 'kubernath road, mahuva', '9988556622'),
(91, 'haresh bhaliya', 'img/clients/97346IMG_20190217_221604_947.jpg', 'near vasi talav road , mahuva', '7990624777'),
(92, 'jinal', '../img/clients/41244', 'near vasi talav road , mahuva', '9988556644'),
(93, 'jinal', '../img/clients/66027', 'near vasi talav road , mahuva', '9988556644'),
(94, 'jinal', '../img/clients/58831', 'near vasi talav road , mahuva', '9988556644'),
(95, 'malani', '../img/clients/23319', 'near vasi talav road, mahuva', '7990624777'),
(96, 'malani', '../img/clients/8036006c41f132081da38dd883d26b88e17b9.jpg', 'near vasi talav road, mahuva', '9988556644'),
(97, 'malani', '../img/clients/8207106c41f132081da38dd883d26b88e17b9.jpg', 'near vasi talav road, mahuva', '9988556644'),
(98, 'jinal', 'img/clients/2033906c41f132081da38dd883d26b88e17b9.jpg', 'e', '8956234568'),
(99, 'jinal gandi', 'img/clients/30113Screenshot_2019-03-23-15-29-30.png', 'shivv mandir pase', '9624120241'),
(100, 'jinal', 'img/clients/92541Screenshot_2019-03-08-22-29-17.png', 'huh', '6598742311'),
(101, 'malani', '../img/clients/87588â€ª+91 6354 731 347â€¬ 20190211_142145.jpg', 'kubernath road, mahuva', '7623861157'),
(102, 'malani', 'img/clients/82158Screenshot_2019-05-27-14-20-17-59.png', 'near vasi talav road , mahuva', '7623861157'),
(103, 'malani', 'img/clients/40845Screenshot_2019-03-08-22-29-17.png', 'near vasi talav road , mahuva', '7990624777'),
(104, 'radhi', 'img/clients/3935159ab99188f822002ce58cfc7b71d05d8 - Copy.jpg', '56 jawahar society', '7819838096'),
(105, 'jinal patel', 'img/clients/50312B612_20190309_104647_544.jpg', 'khadasali', '8895632485'),
(106, 'tirth', 'img/clients/16656B612_20190314_133751_063.jpg', 'godhavadar', '6352462096');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_ibfk_1` (`sp_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_person2`
--
ALTER TABLE `service_person2`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service_person2`
--
ALTER TABLE `service_person2`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`sp_id`) REFERENCES `user_registration` (`id`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_registration` (`id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_registration` (`id`);

--
-- Constraints for table `service_person2`
--
ALTER TABLE `service_person2`
  ADD CONSTRAINT `service_person2_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_registration` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
