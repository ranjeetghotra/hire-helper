-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 08:43 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(15) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_uname` varchar(15) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_dp` varchar(100) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_uname`, `admin_password`, `admin_dp`, `admin_email`, `admin_hash`) VALUES
(1, '', 'admin', 'ranapriya', '', 'multanipiya25@gmail.com', '922338d7a0b672767d00c7d94375801b');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(30) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_subject` varchar(100) NOT NULL,
  `contact_phone` varchar(15) NOT NULL,
  `contact_message` text NOT NULL,
  `contact_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_phone`, `contact_message`, `contact_created_at`) VALUES
(3, 'Ranjeet Ghotra', 'ranjeetghotra6@gmail.com', 'Inquary', '9877947698', 'Did you provide service in Bhogpur?', '2019-12-17 16:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_code` varchar(30) NOT NULL,
  `coupon_discount` int(11) NOT NULL DEFAULT 0,
  `is_flat` tinyint(4) NOT NULL DEFAULT 1,
  `coupon_active` tinyint(4) NOT NULL DEFAULT 1,
  `coupon_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`coupon_id`, `coupon_code`, `coupon_discount`, `is_flat`, `coupon_active`, `coupon_created_at`) VALUES
(1, 'NEW10', 10, 0, 1, '2019-07-21 14:01:53'),
(2, 'FLAT50', 50, 1, 1, '2019-07-21 14:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `feature_service`
--

CREATE TABLE `feature_service` (
  `f_id` int(11) NOT NULL,
  `f_sid` int(20) NOT NULL,
  `f_title` varchar(200) NOT NULL,
  `f_bg` varchar(200) NOT NULL,
  `f_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feature_service`
--

INSERT INTO `feature_service` (`f_id`, `f_sid`, `f_title`, `f_bg`, `f_desc`) VALUES
(1, 1, 'Keep Your Home Safe', 'images/description/desc/plum4.jpg', 'With experience and expertise, your plumbers will be able to inspect your plumbing repairs and fixtures and identify where any problems may have originated. With the right tools on hand, they’ll be able to fix the problem, right there and then. If your water heater has triggered a full-blown flood, they’ll know exactly how and where to shut off the water supply. Should the flood be the result of a burst pipe, they’ll be able to change it before it can do any additional damage. Expert, cheap, and local plumbers know a lot about their craft that we do not, and the Handy platform gives you the opportunity to book them and benefit from their knowledge and ability.'),
(2, 1, 'The Importance of Plumbing Expertise', 'images/description/desc/plum.jpg', 'Even attempting to fix your plumbing repairs on your own without proper knowledge can cause massive problems down the line. Book your plumber using the Handy platform and you’ll be matched with plumbers who know just what they’re doing. Experienced and practiced in their craft, they’ll provide you with the best job at a price that won’t break the bank. When you use Handy to find cheap plumbers, you can rest assured that you’ll be connected with a capable plumbing service who will get your job done without you having to worry about how much a plumber costs ever again.'),
(3, 1, 'The Best Plumbers Bring the Right Equipment', 'images/description/desc/plum1.jpg', 'When you book a plumber using the Handy platform for water heater installation, to unclog a toilet, or to clean out your drains, they’ll always arrive with the equipment they’ll need to do a great job. It’s in their interest as much as it’s in yours to complete every job quickly, professionally, and efficiently. That’s why when they show up, they’ll be prepared for whatever curveballs your plumbing repairs may throw at them. When you use the Handy platform to book the best plumbers, you’ll be asked to input a few details about the plumbing repair job. Using that information, your chosen plumbing services provider will be able to prepare in advance and ensure they bring everything they need.'),
(4, 2, 'Ready to Take Charge of Any Electrical Job', 'images/description/desc/elec1.jpg', 'A Hire A Helper electrician will always arrive with everything they need to get the work done. When you use the Hire A Helper platform, you’ll be asked to input some details about the job you need doing. Using that information, your electrical contractor will make sure that they bring the required tools and equipment, so you won’t have to rush down to the hardware store to buy anything. Don’t panic if you don’t even own basic tools! Electrical contractors on the Hire A Helper platform take their responsibility to their customers very seriously.'),
(5, 2, 'Shockingly Qualified Professional Electricians', 'images/description/desc/elec2.jpg', 'Even wiring an outlet can come with its own set of potential hazards. Book your electrician through Handy and you\'ll be connected with electrician professionals who have plenty of experience with the work you’re asking them to complete. They will provide you with top-notch service at a price point that won’t break the bank. When you use Handy to find the best electrician in your area, you\'ll be connected with a qualified electrical handyman that will serves your needs and your budget.'),
(6, 2, 'No Job Too Big or Small', 'images/description/desc/elec3.jpg', 'Hire A Helper electrical contractors are used to working on jobs of all sizes. It doesn\'t have to be a huge, complete electrical rewiring job to warrant using the services of a professional. Many of our customers use electrical contractors for small jobs, just to make sure that it\'s done safely and to required standards. Many Handy customers book an electrician for someone else. You might have an elderly relative or disabled friend who can\'t deal with minor tasks—booking an electrician through Hire A Helper to help them out is a great way to get those electrical services done and prevent further problems.'),
(7, 5, 'Bedroom, Living Room & Common Areas', 'images/description/desc/clean1.jpg', '->Dust all accessible surfaces\r\n->Wipe down all mirrors and glass fixtures\r\n->Clean all floor surfaces\r\n->Take out garbage and recycling'),
(8, 5, 'Bathroom Cleaning', 'images/description/desc/clean3.jpg', 'Wash and sanitize the toilet, shower, tub and sink\r\nDust all accessible surfaces\r\nWipe down all mirrors and glass fixtures\r\nClean all floor surfaces\r\nTake out garbage and recycling'),
(9, 5, 'Kitchen Cleaning', 'images/description/desc/clean2.jpg', 'Dust all accessible surfaces\r\nEmpty sink and load up dishwasher with dirty dishes\r\nWipe down exterior of stove, oven and fridge\r\nClean all floor surfaces\r\nTake out garbage and recycling'),
(10, 13, 'No Painting Equipment? No Problem', 'images/description/desc/p2.jpg', 'Maybe you\'ve just moved into a new home, and you haven\'t got around to buying brushes and rollers yet. Perhaps you\'re worried that your brush-skills aren\'t that good, and you won\'t achieve that professional-looking finish that you’re really going for. Handy professionals will turn up with everything they need to get the job done, from ladders and brushes, to rollers and tarps. You just have to provide the interior paint and primer!'),
(11, 13, 'Hardworking Painting Professionals', 'images/description/desc/p4.jpg', 'Residential house painters on the Handy platform have used countless gallons of paint and tons of brushes over the years. With a wealth of experience under their belts, they know the best, quickest and most cost-effective ways to get the work done. From how to achieve that perfect glossy finish to ensuring no paint drips onto your crown molding, you might find yourself picking up a few tips!'),
(12, 13, 'No Need to Panic ', 'images/description/desc/p1.jpg', 'Over time, even the best paint job needs a new coat. Old paint peels and fades and those colors that were all the rage ten years ago can start to look a bit dated. With your busy schedule, you\'ve got no time to pick up a paintbrush, and you\'ve just remembered that your in-laws are in town for dinner next week! We hear stories like this all the time, and our reply is always the same: don\'t panic! Book a painting professional through the Handy platform. Wall painting shouldn’t be stressful and when you use the Handy platform, it won’t be.'),
(13, 9, 'We’ll Bring the Toolbox', 'images/description/desc/f4.jpg', 'Did you just move into a new apartment? Haven’t had the time to purchase a full tool set? Worried how you’re going to turn that giant IKEA box into a fully formed sofa ready to be enjoyed without a drill? The furniture assembly professional you book through Handy will arrive with the full host of tools you’ll need to make your dreams of a fully furnished home come true — drill, screwdrivers, screws, wrenches, nails, hammers, and more.'),
(14, 9, 'Years of Experience', 'images/description/desc/s1.jpg', 'Handy professionals have assembled thousands of pieces of IKEA furniture and Wayfair furniture. They have extensive experience with plenty of other brands as well, including retailers like West Elm, Pottery Barn, Restoration Hardware, Joss & Main, Amazon, Crate and Barrel, Overstock, and more. Once you’ve built fifty or sixty Billy bookcases or Malm dressers and bedroom sets from IKEA, it’s a snap to put them them together. Our pros have done just that, and you can rest assured knowing that your furniture is in good hands.'),
(15, 9, 'No Waiting Around', 'images/description/desc/s2.jpg', 'There’s nothing worse than being given a window of time during which you’re expected to sit around and wait for a home services professional to arrive. When you book furniture assembly services with Handy, not only is it quick and easy, but we’ll give you a specific time when your pro will show up so you don’t have to put your day on hold.');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `newsletter_id` int(11) NOT NULL,
  `newsletter_email` varchar(50) NOT NULL,
  `newsletter_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`newsletter_id`, `newsletter_email`, `newsletter_created_at`) VALUES
(1, 'ttt', '2019-07-21 07:51:56'),
(2, 'jhg', '2019-07-21 07:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `order_user` int(11) NOT NULL,
  `order_service` int(11) NOT NULL,
  `order_fn` varchar(15) NOT NULL,
  `order_ln` varchar(15) NOT NULL,
  `order_email` varchar(200) NOT NULL,
  `order_mob` text NOT NULL,
  `order_img` varchar(200) NOT NULL,
  `order_address` text NOT NULL,
  `order_detail` text NOT NULL,
  `choose_srvice` varchar(100) NOT NULL,
  `choose_service` varchar(100) NOT NULL,
  `select_extras` varchar(100) NOT NULL,
  `choose_date` date NOT NULL,
  `choose_time` time NOT NULL,
  `order_discount` int(11) NOT NULL DEFAULT 0,
  `order_total` int(11) NOT NULL DEFAULT 0,
  `often` varchar(30) DEFAULT NULL,
  `promo_code` varchar(10) DEFAULT NULL,
  `order_status` varchar(30) NOT NULL DEFAULT 'waiting',
  `order_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `order_user`, `order_service`, `order_fn`, `order_ln`, `order_email`, `order_mob`, `order_img`, `order_address`, `order_detail`, `choose_srvice`, `choose_service`, `select_extras`, `choose_date`, `choose_time`, `order_discount`, `order_total`, `often`, `promo_code`, `order_status`, `order_created_at`) VALUES
(9, 0, 0, 'piya', 'kaddu', 'sabimeera028@gm', '2147483647', '', '{\"address\":\"VILL. MEERA PO SULTANPUR LODHI\",\"city\":\"MEERA\",\"pincode\":\"144626\"}', '', '', '', 'null', '0000-00-00', '00:00:00', 0, 0, '', '0', '', '2019-07-20 05:08:47'),
(10, 0, 0, 'piya', 'kaddu', 'sabimeera028@gm', '2147483647', '', '{\"address\":\"VILL. MEERA PO SULTANPUR LODHI\",\"city\":\"MEERA\",\"pincode\":\"144626\"}', '', '', '', 'null', '0000-00-00', '00:00:00', 0, 0, '', '0', '', '2019-07-20 05:08:47'),
(11, 0, 0, 'piya', 'kaddu', 'sabimeera028@gm', '2147483647', '', '{\"address\":\"VILL. MEERA PO SULTANPUR LODHI\",\"city\":\"MEERA\",\"pincode\":\"144626\"}', '', '', '', '[\"windows\",\"fridge\",\"basement\",\"load\"]', '0000-00-00', '00:00:00', 0, 0, '', '0', '', '2019-07-20 05:08:47'),
(18, 0, 0, 'happy', 'multani', 'multanipiya25@g', '2147483647', '', '{\"address\":\"kamrai\",\"city\":\"kpt\",\"pincode\":\"144622\"}', '', '', '', '[\"load\"]', '0000-00-00', '00:00:00', 0, 0, '7', '14876', '', '2019-07-20 05:08:47'),
(19, 0, 0, 'hrpreet', 'kaur', 'priya@gmail.com', '2147483647', '', '{\"address\":\"vop bholath\",\"city\":\"KAPURTHALA\",\"pincode\":\"144622\"}', '', '', '', '[\"windows\",\"fridge\",\"cabinets\"]', '0000-00-00', '00:00:00', 0, 0, '14', '987654', '', '2019-07-20 05:08:47'),
(20, 0, 0, '', '', '', '0', '', '{\"address\":\"\",\"city\":\"\",\"pincode\":\"\"}', '', '', '', 'null', '0000-00-00', '00:00:00', 0, 0, '1', '0', '', '2019-07-20 05:08:47'),
(21, 0, 0, '', '', '', '0', '', '{\"address\":\"\",\"city\":\"\",\"pincode\":\"\"}', '', '', '', 'null', '0000-00-00', '00:00:00', 0, 0, NULL, '0', '', '2019-07-20 05:08:47'),
(22, 0, 0, '', '', '', '0', '', '{\"address\":\"\",\"city\":\"\",\"pincode\":\"\"}', '', '', '', 'null', '0000-00-00', '00:00:00', 0, 0, NULL, '0', '', '2019-07-20 05:08:47'),
(23, 0, 0, 'route ch servic', 'ok', 'duja dekhi ik h', '0', '', '{\"address\":\"\",\"city\":\"\",\"pincode\":\"\"}', '', '', '', 'null', '0000-00-00', '00:00:00', 0, 0, NULL, '0', '', '2019-07-20 05:08:47'),
(24, 0, 0, 'happo', 'multNI', 'sabimeera028@gm', '2147483647', '', '{\"address\":\"VILL. MEERA PO SULTANPUR LODHI\",\"city\":\"MEERA\",\"pincode\":\"144626\"}', '', '', '', 'null', '0000-00-00', '00:00:00', 0, 0, '14', '0', '', '2019-07-20 05:08:47'),
(25, 14, 5, '', '', '', '0', '', '{\"address\":\"\",\"city\":\"\",\"pincode\":\"\"}', '', '', '', 'null', '0000-00-00', '00:00:00', 0, 0, NULL, '', '', '2019-07-20 05:08:47'),
(26, 14, 5, '', '', '', '0', '', '{\"address\":\"\",\"city\":\"\",\"pincode\":\"\"}', '', '', '', 'null', '0000-00-00', '00:00:00', 0, 0, NULL, '', 'cancel', '2019-07-20 16:59:08'),
(27, 14, 5, '', '', '', '0', '', '{\"address\":\"\",\"city\":\"\",\"pincode\":\"\"}', '', '', '', 'null', '0000-00-00', '00:00:00', 0, 0, NULL, '', 'cancel', '2019-07-21 06:23:59'),
(28, 14, 5, '', '', '', '0', '', '{\"address\":\"\",\"city\":\"\",\"pincode\":\"\"}', '', '', '', 'null', '0000-00-00', '00:00:00', 0, 0, NULL, '', 'cancel', '2019-07-20 16:59:03'),
(29, 14, 5, '', '', '', '0', '', '{\"address\":\"\",\"city\":\"\",\"pincode\":\"\"}', '', '', '', '[\"5\",\"6\"]', '0000-00-00', '00:00:00', 0, 0, NULL, '', 'cancel', '2019-07-21 06:24:15'),
(30, 14, 5, '', '', '', '0', '', '{\"address\":\"\",\"city\":\"\",\"pincode\":\"\"}', '', '', '', '[\"5\",\"6\"]', '0000-00-00', '00:00:00', 0, 0, NULL, '', 'cancel', '2019-07-20 05:14:17'),
(31, 14, 5, '', '', '', '0', '', '{\"address\":\"\",\"city\":\"\",\"pincode\":\"\"}', '', '', '', '[\"5\",\"6\"]', '0000-00-00', '00:00:00', 0, 0, NULL, '', 'complete', '2019-07-20 05:14:09'),
(32, 14, 5, '', '', '', '0', '', '{\"address\":\"\",\"city\":\"\",\"pincode\":\"\"}', '', '', '', '[\"5\",\"6\"]', '0000-00-00', '00:00:00', 0, 0, NULL, '', 'cancel', '2019-07-21 06:23:46'),
(33, 14, 5, '', '', '', '0', '', '{\"address\":\"\",\"city\":\"\",\"pincode\":\"\"}', '', '', '', '[\"5\",\"6\"]', '2019-07-24', '05:13:17', 5, 100, NULL, '', 'cancel', '2019-07-20 17:12:28'),
(34, 14, 9, 'piya', 'kaddu', 'ranjeetghotra6@', '2147483647', '', '{\"address\":\"vil bagrian po bholath\",\"city\":\"KAPURTHALA\",\"pincode\":\"144622\"}', '', '', '', 'null', '0000-00-00', '00:00:00', 0, 0, '7', '', 'waiting', '2019-07-21 07:56:42'),
(35, 14, 9, '', '', '', '0', '', '{\"address\":\"\",\"city\":\"\",\"pincode\":\"\"}', '', '', '', 'null', '0000-00-00', '00:00:00', 0, 999, NULL, '', 'waiting', '2019-07-21 08:13:03'),
(36, 14, 2, 'Rana', 'Priya', 'ranjeetghotra6@', '9781838309', '', '{\"address\":\"vil bagrian po bholath\",\"city\":\"KAPURTHALA\",\"pincode\":\"144622\"}', '', '', '', 'null', '0000-00-00', '00:00:00', 0, 0, '14', '', 'waiting', '2019-07-21 12:38:16'),
(37, 14, 9, 'Rana', 'Priya', 'ranjeetghotra6@', '9781838309', '', '{\"address\":\"\",\"city\":\"\",\"pincode\":\"\"}', '', '', '', 'null', '0000-00-00', '00:00:00', 0, 999, NULL, '', 'waiting', '2019-07-21 13:07:36'),
(38, 16, 5, 'rana', 'ghotra', 'ranjeetghotra6@', '8284895525', '', '{\"address\":\"\",\"city\":\"Bholath\",\"pincode\":\"144622\"}', '', '', '', 'null', '0000-00-00', '00:00:00', 0, 0, NULL, '', 'waiting', '2019-10-13 09:12:53'),
(39, 16, 1, 'Ranjeet Ghotra', '', 'ranjeetghotra6@', '9781838309', '', '{\"address\":\"Akala\",\"city\":\"Bhulath\",\"pincode\":\"144622\"}', '', '', '', '', '0000-00-00', '00:00:00', 0, 230, NULL, NULL, 'waiting', '2019-11-15 17:32:14'),
(40, 16, 1, 'Ranjeet Ghotra', '', 'ranjeetghotra6@gmail.com', '9781838309', '', '{\"address\":\"Akala\",\"city\":\"Bhulath\",\"pincode\":\"144622\"}', '', '', '', '', '0000-00-00', '00:00:00', 0, 230, NULL, NULL, 'waiting', '2019-11-15 17:36:35'),
(41, 16, 1, 'Ranjeet Ghotra', '', 'ranjeetghotra6@gmail.com', '9781838309', '', '{\"address\":\"Akala\",\"city\":\"Bhulath\",\"pincode\":\"144622\"}', '', '', '', '', '0000-00-00', '00:00:00', 0, 230, NULL, NULL, 'waiting', '2019-11-15 17:37:14'),
(42, 16, 1, 'Ranjeet Ghotra', '', 'ranjeetghotra6@gmail.com', '9781838309', '', '{\"address\":\"Akala\",\"city\":\"Bhulath\",\"pincode\":\"144622\"}', '', '', '', '', '0000-00-00', '00:00:00', 0, 230, NULL, NULL, 'waiting', '2019-11-15 17:37:53'),
(43, 16, 1, 'Ranjeet Ghotra', '', 'ranjeetghotra6@gmail.com', '9781838309', '', '{\"address\":\"Akala\",\"city\":\"Bhulath\",\"pincode\":\"144622\"}', '', '', '', '', '0000-00-00', '00:00:00', 0, 230, NULL, NULL, 'waiting', '2019-11-15 17:40:33'),
(44, 16, 1, 'Ranjeet Ghotra', '', 'ranjeetghotra6@gmail.com', '9781838309', '', '{\"address\":\"Akala\",\"city\":\"Bhulath\",\"pincode\":\"144622\"}', '', '', '', '', '0000-00-00', '00:00:00', 0, 230, NULL, NULL, 'waiting', '2019-11-15 17:40:56'),
(45, 16, 1, 'Ranjeet Ghotra', '', 'ranjeetghotra6@gmail.com', '9781838309', '', '{\"address\":\"Akala\",\"city\":\"Bhulath\",\"pincode\":\"144622\"}', '', '', '', '', '0000-00-00', '00:00:00', 0, 230, NULL, NULL, 'waiting', '2019-11-15 17:41:26'),
(46, 16, 1, 'Ranjeet Ghotra', '', 'ranjeetghotra6@gmail.com', '9781838309', '', '{\"address\":\"Akala\",\"city\":\"Bhulath\",\"pincode\":\"144622\"}', '', '', '', '', '2019-11-16', '00:00:00', 0, 230, NULL, NULL, 'waiting', '2019-11-15 17:45:17'),
(47, 16, 1, 'Ranjeet Ghotra', '', 'ranjeetghotra6@gmail.com', '9781838309', '', '{\"address\":\"Akala\",\"city\":\"Bhulath\",\"pincode\":\"144622\"}', '', '', '', '', '2019-11-16', '14:00:00', 0, 230, NULL, NULL, 'waiting', '2019-11-15 17:47:07'),
(48, 16, 1, 'Ranjeet Ghotra', '', 'ranjeetghotra6@gmail.com', '9781838309', '', '{\"address\":\"Akala\",\"city\":\"Bhulath\",\"pincode\":\"144622\"}', '{\"houseItems\":{\"small\":\"0\",\"large\":\"0\"},\"ladder\":\"6\",\"worktime\":\"2\",\"detail\":\"\"}', '', '', '', '2019-11-16', '14:00:00', 0, 230, NULL, NULL, 'waiting', '2019-11-15 17:52:57'),
(49, 16, 1, 'Ranjeet Ghotra', '', 'ranjeetghotra6@gmail.com', '9781838309', '', '{\"address\":\"Akala\",\"city\":\"Bhulath\",\"pincode\":\"144622\"}', '{\"houseItems\":{\"small\":\"0\",\"large\":\"0\"},\"ladder\":\"6\",\"worktime\":\"2\",\"detail\":\"\"}', '', '', '', '2019-11-16', '14:00:00', 0, 230, NULL, NULL, 'waiting', '2019-11-15 17:54:48'),
(50, 16, 8, 'Ranjeet Ghotra', '', 'ranjeetghotra6@gmail.com', '9781838309', '', '{\"address\":\"Akala\",\"city\":\"Bhulath\",\"pincode\":\"144622\"}', '{\"houseItems\":{\"small\":\"3\",\"large\":\"2\"},\"ladder\":\"6\",\"worktime\":\"2\",\"detail\":\"\"}', '', '', '', '2019-11-16', '07:00:00', 0, 255, NULL, NULL, 'waiting', '2019-11-15 18:12:09'),
(51, 16, 8, 'Ranjeet Ghotra', '', 'ranjeetghotra6@gmail.com', '9781838309', '', '{\"address\":\"Akala\",\"city\":\"Bhulath\",\"pincode\":\"144622\"}', '{\"houseItems\":{\"small\":\"3\",\"large\":\"2\"},\"ladder\":\"6\",\"worktime\":\"2\",\"detail\":\"\"}', '', '', '', '2019-11-16', '07:00:00', 0, 255, NULL, NULL, 'waiting', '2019-11-15 18:12:26'),
(52, 16, 8, '', '', 'ranjeetghotra6@gmail.com', '9781818309', '', '{\"address\":\"\",\"city\":\"\",\"pincode\":\"\"}', '{\"houseItems\":{\"small\":\"1\",\"large\":\"2\"},\"ladder\":\"6\",\"worktime\":\"2\",\"detail\":\"\"}', '', '', '', '2019-11-16', '07:00:00', 0, 105, NULL, NULL, 'cancel', '2019-11-22 17:50:59'),
(53, 16, 2, 'Ranjeet Ghotra', '', 'ranjeetghotra6@gmail.com', '9781838309', '', '{\"address\":\"Akala\",\"city\":\"Bholath\",\"pincode\":\"144622\"}', '{\"houseItems\":{\"small\":\"2\",\"large\":\"0\"},\"ladder\":\"0\",\"worktime\":\"2\",\"detail\":\"\"}', '', '', '', '2019-12-18', '07:00:00', 0, 448, NULL, NULL, 'waiting', '2019-12-17 16:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `route_id` int(11) NOT NULL,
  `route_url` varchar(200) NOT NULL,
  `route_control` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`route_id`, `route_url`, `route_control`) VALUES
(1, 'electricity', 'welcome/service/2'),
(2, 'princesspriya', ''),
(4, 'about', 'welcome/about'),
(5, 'plumbing', 'welcome/service/1'),
(6, 'cleaning', 'welcome/service/5'),
(7, 'vehicle', 'welcome/service/7'),
(8, 'pest-control', 'welcome/service/8'),
(9, 'appliance', 'welcome/service/9'),
(10, 'geyser-service', 'welcome/service/10'),
(11, 'service', 'welcome/service'),
(12, 'booking', 'welcome/booking'),
(13, 'contactus', 'welcome/contactus'),
(14, 'profile', 'welcome/user'),
(15, 'bath-cleaning', 'welcome/service/11'),
(16, 'imgetest', 'welcome/service/12'),
(17, 'painting2', 'welcome/service/13'),
(18, 'test', 'welcome/service/14'),
(19, 'happy', 'welcome/service/15'),
(20, 'ranjeet-ghotra', 'welcome/service/16');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `service_icon` varchar(300) NOT NULL,
  `service_image` varchar(100) NOT NULL,
  `service_parts` text NOT NULL,
  `service_description` text NOT NULL,
  `service_url` varchar(200) NOT NULL,
  `service_price` int(11) NOT NULL DEFAULT 149,
  `service_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `service_faq` text NOT NULL,
  `service_detail` longtext NOT NULL,
  `service_banner` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `service_icon`, `service_image`, `service_parts`, `service_description`, `service_url`, `service_price`, `service_created_at`, `service_faq`, `service_detail`, `service_banner`) VALUES
(1, 'Plumbing Service', 'uploads/plumbing.png', 'images/service/plumbing.png', '', 'When you have a plumbing issue that needs professional attention, look no further than Handy. No matter how skilled you might be at home maintenance, some jobs should only ever be tackled by a professional, and plumbing is one of them. When you book plumbers through the Handy platform, you\'ll be booking a cheap but reliable plumbing professional who will know just where to look to find the source of the problem and who will have all the right tools and expertise to fix it.', 'plumbing', 149, '2019-07-07 09:18:48', '', '', 'images/description/p.jpg'),
(2, 'Electricity Service', 'images/services-icons/electrical.png', 'images/service/electrical1.png', '', 'Are you looking for the best electrician in your area? Hire A Helper has you covered. Some jobs should only be undertaken by a professional, and we know you’d rather not fiddle with your electrical wiring or outlets unless you know exactly what you’re doing. When you use the Hire A Helper platform to book a professional electrical contractor, you can take all your stress out of the equation. Why run the risk of making an electrical problem even more complicated when you can book a professional electrician to take care of those faulty outlets or run a wire to that new lighting fixture?', 'electricity', 149, '2019-07-07 09:18:48', '', '', 'images/description/elec.jpg'),
(5, 'Cleaning Service', 'images/services-icons/cleaning.png', 'images/service/cleaning.png', '[{   \"name\": \"Bedroom\",   \"price\": \"150\" }, {   \"name\": \"Bathroom\",   \"price\": \"100\" }]', 'Hire A Helper has been connecting people to professional house cleaning and other home services since 2012. In our short history, house cleaning professionals using the Hire A Helper platform have helped clean millions of homes and apartments in NYC, SF, Boston, Chicago, Los Angeles, London, and beyond. Hire A Helper is your one-stop shop for whenever you need professional house cleaning help.', 'cleaning', 149, '2019-07-07 09:18:48', '', '', 'images/description/cleansofabnnr.jpg'),
(7, 'Vehicle Care', 'images/services-icons/vehicle.png', 'images/service/vehicle.png', '', '', 'vehicle', 149, '2019-07-07 09:18:48', '', '', 'images/description/vhicle2.jpg'),
(8, 'Pest Control', 'images/services-icons/pest.png', 'images/service/pest.png', '', '', 'pest-control', 149, '2019-07-07 09:18:48', '', '', 'images/description/pest.jpg'),
(9, 'Furniture Assembly', 'uploads/appliances.png', 'uploads/appliances.png', '', 'Are you looking for the easiest furniture assembly experience? Do you want only the top furniture assembly pro to come to your home to transform that box of loose pieces of wood into your beautiful dresser or bed frame? With Hire A Helper, you’ve come to the right place.', 'appliance', 149, '2019-07-07 09:18:48', '', '', 'images/description/fur2.png'),
(10, 'Geyser Services', 'images/services-icons/geyser.png', 'images/service/geyser.png', '', '', 'geyser-service', 149, '2019-07-07 09:18:48', '', '', 'images/description/gey.jpg'),
(13, 'Painting', 'uploads/painting2.png', 'uploads/painting2.png', '', 'Are you looking for interior house painters that are local, reliable and the best at what they do? Does the idea of painting the walls of your home fill you with dread? If you want to get the best results with minimal fuss, then make Handy your first choice when you need to connect with expert painting contractors. From preparing your interior walls and ceilings to achieving a neat, professional finish, Handy will put you in touch with the right people for the job. Customize your request by specifying your job details, from how many painters you need to how long you’ll need them. We’ll connect you with the painting professionals that suit you best with no compromise on quality.', 'painting2', 149, '2019-07-23 15:08:05', '', '', 'images/description/paint.jpg'),
(14, 'test', 'uploads/', 'uploads/', '', 'vhvjbknlm/./', 'test', 149, '2019-07-30 05:04:47', '', '', ''),
(15, 'happy', 'uploads/download4.jpg', 'uploads/download5.jpg', '', 'hello this is description', 'happy', 149, '2019-10-01 15:31:39', '', '', 'uploads/download3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service_detail`
--

CREATE TABLE `service_detail` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(15) NOT NULL,
  `service_icon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_feature`
--

CREATE TABLE `service_feature` (
  `sf_id` int(11) NOT NULL,
  `sf_service` varchar(30) NOT NULL,
  `sf_desc` varchar(1000) NOT NULL,
  `sf_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_feature`
--

INSERT INTO `service_feature` (`sf_id`, `sf_service`, `sf_desc`, `sf_title`) VALUES
(5, '5', '\r\n\r\nHire A Helper has been connecting people to professional house cleaning and other home services since 2012. In our short history, house cleaning professionals using the Hire A Helper platform have helped clean millions of homes and apartments in NYC, SF, Boston, Chicago, Los Angeles, London, and beyond. Handy is your one-stop shop for whenever you need professional house cleaning help.', 'Experienced'),
(6, '5', 'When you schedule a cleaner or maid service through Hire A Helper to come to your home, you can rest assured knowing that someone will be at your home ready to go at the time you specified. They’ll help return your bedrooms, bathrooms, kitchen, living room, and more to the like-new condition that you remember from when you first moved in!', 'Reliable'),
(7, '5', 'Late nights at work preventing you from keeping your apartment tidy? Too busy taking the kids to school, practices, and playdates to vacuum the floors? We know life can be crazy and unpredictable, and when you’re tired and overworked, the last thing anybody wants to do is clean their home. Whatever the reason you’re looking for home cleaning help, Handy has you covered.', 'Convenient'),
(8, '5', 'With Handy, it’s easy to schedule and reschedule bookings. Just open the Handy app and choose the date and time that works best for you. Or maybe your home needs an extra deep clean with some special attention - you can use the app to add extras to your booking, like laundry, inside the cabinets, inside the refrigerator, and more. Make Handy your #1 cleaning services provider, whether you’re looking for a house cleaning, apartment cleaning, maid service, or more!', 'Flexible'),
(9, '1', 'Plumbers on the Handy platform have experience in fixing all the common (and uncommon) plumbing problems that plague homes. Whether you’ve got a water heater leaking, a clogged toilet, or a blocked drain, chances are that your plumber will have seen and dealt with a similar job before. When you use the Handy app or website, you’ll be connected to experienced plumbers who’ll know exactly what to do, no matter how big or small the job might be.', ' Experienced'),
(10, '1', 'When you book an affordable plumber, whether it\'s to fix a broken boiler or to unclog a drain, you want to know they\'re skilled enough for the task at hand. Nothing is worse than sending an amateur with a wrench to look at your pipes. Odds are, there will be more damage than when they started. All plumbers on the Handy platform are vetted, verified, and background checked way before they arrive at your home, so you can be sure that they\'re the right person for the job. ', ' Skilled and Capable'),
(11, '1', 'There are few things worse than waiting for a plumber after being given an 8 hour time window, while your sink is spouting water all over the carpet or your toilet is overflowing. Using the Handy platform, you can arrange an exact time for your plumber to arrive, which means you don’t have to take an entire day off of work to sit around and wait for them. The plumbers on the Handy platform have seen it all and they have the ratings and reviews to prove it.  We’ll match the details of your job with a reliable plumber in your area before you know it.', ' Reliable'),
(12, '1', 'The Handy customer service team is online 24 hours a day, 7 days a week. If you have any concerns either before, during, or after your job, someone will be in contact with you to help make things right. No matter how big or small your job is, we’re confident that you’ll be satisfied by the affordable plumbers on the Handy platform. When you book plumbing services through Handy, you’re in charge of when the work gets done. And should your situation change, you can always cancel or reschedule your appointment with at least to 24 hours’ notice.', ' Flexible'),
(13, '2', 'When you book an electrician through the Handy platform, your pro will have all the benefits of on-the-job training. While courses and paperwork might be all you need to pass exams and certifications, there\'s just no substitute for experience. Your electrical contractor will have honed their skills over the years working on a broad range of jobs. Whether you need help installing a light switch, wiring an outlet or running a wire to a new lighting fixture, the Handy platform will connect you with the right electrical service professional with the right experience.', 'Experienced'),
(14, '2', 'Make changes to your electrician service right in the app or on the website. And if you need extra help, the Handy customer service team is always available. If you’ve got an electrical emergency, you can book an electrician to arrive as soon as tomorrow morning. If you’re buying a new property and want a fully-qualified residential electrician to check the wiring in a few weeks, just name the date. Using the Handy platform to book your electrician puts you in charge of when the work gets done. Should your situation change, you can cancel or reschedule your appointment—we just ask that you provide 24 hours’ notice.', ' Flexible'),
(15, '2', 'Wherever electricity is concerned, you want to know that you’ve booked the best electrician for the job. All the electrical contractors on the Handy platform are background checked, so you know you’re not letting a complete stranger into your home. Every pro is rated and reviewed by past customers as well, so you can rest assured that they have a track record of excellence. Whether you need a single residential electrician for a quick job, or someone to help rewire your home, the Handy platform helps connect you with the best electrician possible.', ' Skilled and Capable'),
(16, '2', 'Whether you work in a busy office or are a stay-at-home parent, there’s nothing worse than waiting for hours for an electrical service provider to turn up. When you book electrical contractors through the Handy platform, you can be sure that they’ll turn up on time and ready to work. Using the Handy app or website, you can pick the time you want your electrician to arrive. Get on with the important things in your day, secure in the knowledge that electrical help is on its way.', 'Reliable'),
(17, '', '', ''),
(18, '9', 'Handy has been connecting people to furniture assembly professionals and other home service providers since 2012. In its short history, Handy has helped thousands of customers build furniture in NYC, SF, Boston, Chicago, Los Angeles, London, and beyond.', 'Experienced'),
(19, '9', 'We know there’s nothing worse than scheduling an appointment with a furniture assembly service, staying home from work to let them into your home, only for them to not show up. When you book through Handy, there’s no ambiguity -- Handy will work to ensure that someone will be at your home at the time you agree upon.', 'Reliable'),
(20, '9', 'You don’t want just any random person building your furniture. When you book through Handy, we’ll match your job with an experienced furniture assembly pro who will ensure you’re satisfied.', 'Skilled and Capable'),
(21, '9', 'No matter what type of furniture assembly you need help with, Handy has you covered. Whether you’ve just purchased a new desk for your bedroom, a bookshelf for your living room, a sofa or couch, a new kitchen table, chairs, stools, or more, we will connect you with a professional who will be able to handle your job.', 'Flexible'),
(22, '13', 'As far as we’re concerned, there’s no such thing as a job that’s too big or too small. Whether you’re looking to paint the walls in your kitchen, bathroom, or living room, Handy’s got you covered. Using the Handy platform, you can book your painting contractors to arrive right when you need them, whether it’s tomorrow or later this month.\r\n', ' Flexible'),
(24, '13', 'Handy has been connecting customers with home service professionals for six years. In its short history, the Handy platform has helped thousands of people get expert help with all their wall painting needs. If you don’t know how to paint your walls yourself, we’ll connect you with a painting professional who does.', ' Experienced'),
(25, '13', 'Painting is a skilled job with plenty of room for error, from knowing how to prepare the appropriate surface to understanding the best interior paint for the situation. When you book through Handy, we match your job’s requirements with experienced house painters who will leave you completely satisfied. They\'ll arrive with the right equipment in hand, ready to roll.', 'Skilled and Capable'),
(26, '13', 'We\'ve heard countless stories of people who have been let down by other house painting services. No one wants to take valuable time off of work to wait for painters who never show up. At Handy, we pride ourselves on connecting our customers with reliable and trustworthy residential house painters. They will arrive on time, fully ready to do your job.', ' Reliable'),
(27, '8', 'Our team of pest control will deliver the services of pest control. We will take care of your health properly, we will do it in such a way that it will not affect your health. They can manage it anywhere and wherever you want to get them for pest control. They will provide you their services with the perfection and dedication, which will never disappoint you.', 'Why Hire A Helper For Pest COntrol??');

-- --------------------------------------------------------

--
-- Table structure for table `sub_service`
--

CREATE TABLE `sub_service` (
  `cservice_id` int(11) NOT NULL,
  `c_name` varchar(12) NOT NULL,
  `cservice_service` int(11) NOT NULL,
  `c_icon` varchar(200) NOT NULL,
  `c_image` varchar(200) NOT NULL,
  `c_price` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_service`
--

INSERT INTO `sub_service` (`cservice_id`, `c_name`, `cservice_service`, `c_icon`, `c_image`, `c_price`) VALUES
(1, 'kdduuuuuu', 7, 'uploads/is24.PNG', '', 0),
(4, 'piys', 5, 'uploads/', '', 56),
(5, 'piya', 5, 'uploads/is1.PNG', '', 87),
(6, 'piya', 5, 'uploads/is3.PNG', '', 42),
(7, 'toilet', 5, 'uploads/plumbing1.png', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(10) NOT NULL,
  `user_lname` varchar(10) NOT NULL,
  `user_mobile` varchar(15) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_activated` tinyint(1) NOT NULL DEFAULT 0,
  `user_verified` float NOT NULL DEFAULT 0,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_wallet` varchar(20) NOT NULL,
  `user_otp` varchar(30) NOT NULL,
  `user_hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_id`, `user_fname`, `user_lname`, `user_mobile`, `user_email`, `user_password`, `user_activated`, `user_verified`, `user_created_at`, `user_wallet`, `user_otp`, `user_hash`) VALUES
(15, 'happy', 'multani', '9876537798', 'happy123@gmail.com', 'happy123', 0, 0, '2019-07-10 08:39:34', '123', '456', ''),
(16, 'rana', 'ghotra', '8284895525', 'ranjeetghotra6@gmail.com', 'dGVzdDEyMzQ=', 0, 0, '2019-11-21 16:21:15', '', '', '547059'),
(17, '', '', '', '', '', 0, 0, '2019-12-17 05:30:50', '', '634353', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `feature_service`
--
ALTER TABLE `feature_service`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`newsletter_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`route_id`),
  ADD UNIQUE KEY `route_url` (`route_url`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_detail`
--
ALTER TABLE `service_detail`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_feature`
--
ALTER TABLE `service_feature`
  ADD PRIMARY KEY (`sf_id`);

--
-- Indexes for table `sub_service`
--
ALTER TABLE `sub_service`
  ADD PRIMARY KEY (`cservice_id`),
  ADD KEY `sub_service_ibfk_1` (`cservice_service`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feature_service`
--
ALTER TABLE `feature_service`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `newsletter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `service_detail`
--
ALTER TABLE `service_detail`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_feature`
--
ALTER TABLE `service_feature`
  MODIFY `sf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sub_service`
--
ALTER TABLE `sub_service`
  MODIFY `cservice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_service`
--
ALTER TABLE `sub_service`
  ADD CONSTRAINT `sub_service_ibfk_1` FOREIGN KEY (`cservice_service`) REFERENCES `service` (`service_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
