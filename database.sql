-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2024 at 02:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quality`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `heading` varchar(250) NOT NULL,
  `dcp` text NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `heading`, `dcp`, `image`) VALUES
(1, 'ABOUT OUR COMPANY', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', '30007-about-01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Kamran', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `heading` varchar(2500) NOT NULL,
  `dcp` text NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `heading`, `dcp`, `image`) VALUES
(1, '2024 <br>Success <br>Checklist', '<p>Get Access To Our Entire Product Catalog &amp; More!</p>', '84314-banner-img.png');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `heading` varchar(250) NOT NULL,
  `dcp` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `heading`, `dcp`, `image`, `date`) VALUES
(1, 'Common Mistakes to Avoid When Using PLR in Your Shopify Store', '<p>A s we reflect on this achievement, we look forward to continuing our journey of digital innovation, creating transformative solutions, and shaping the future of the digital landscape. Celebrating a major milestone in digital services is a significant occasion . A s we reflect on this achievement, we look forward to continuing our journey of digital innovation, creating transformative solutions, and shaping the future of the digital landscape. Celebrating a major milestone in digital services is a significant occasion .&nbsp;A s we reflect on this achievement, we look forward to continuing our journey of digital innovation, creating transformative solutions, and shaping the future of the digital landscape. Celebrating a major milestone in digital services is a significant occasion . A s we reflect on this achievement, we look forward to continuing our journey of digital innovation, creating transformative solutions, and shaping the future of the digital landscape. Celebrating a major milestone in digital services is a significant occasion . A s we reflect on this achievement, we look forward to continuing our journey of digital innovation, creating transformative solutions, and shaping the future of the digital landscape. Celebrating a major milestone in digital services is a significant occasion . A s we reflect on this achievement, we look forward to continuing our journey of digital innovation, creating transformative solutions, and shaping the future of the digital landscape. Celebrating a major milestone in digital services is a significant occasion .&nbsp;</p>', '53534-blog.webp', '2024-04-16'),
(2, 'Surpasses Expectations with Latest Projects.', '<p>A s we reflect on this achievement, we look forward to continuing our journey of digital innovation, creating transformative solutions, and shaping the future of the digital landscape. Celebrating a major milestone in digital services is a significant occasion . A s we reflect on this achievement, we look forward to continuing our journey of digital innovation, creating transformative solutions, and shaping the future of the digital landscape. Celebrating a major milestone in digital services is a significant occasion .&nbsp;A s we reflect on this achievement, we look forward to continuing our journey of digital innovation, creating transformative solutions, and shaping the future of the digital landscape. Celebrating a major milestone in digital services is a significant occasion . A s we reflect on this achievement, we look forward to continuing our journey of digital innovation, creating transformative solutions, and shaping the future of the digital landscape. Celebrating a major milestone in digital services is a significant occasion . A s we reflect on this achievement, we look forward to continuing our journey of digital innovation, creating transformative solutions, and shaping the future of the digital landscape. Celebrating a major milestone in digital services is a significant occasion . A s we reflect on this achievement, we look forward to continuing our journey of digital innovation, creating transformative solutions, and shaping the future of the digital landscape. Celebrating a major milestone in digital services is a significant occasion .&nbsp;</p>', '42940-blog1.webp', '2024-04-12'),
(3, 'Finding Your Niche: Using PLR to Target Specific Audiences', '<p>A s we reflect on this achievement, we look forward to continuing our journey of digital innovation, creating transformative solutions, and shaping the future of the digital landscape. Celebrating a major milestone in digital services is a significant occasion . A s we reflect on this achievement, we look forward to continuing our journey of digital innovation, creating transformative solutions, and shaping the future of the digital landscape. Celebrating a major milestone in digital services is a significant occasion .&nbsp;A s we reflect on this achievement, we look forward to continuing our journey of digital innovation, creating transformative solutions, and shaping the future of the digital landscape. Celebrating a major milestone in digital services is a significant occasion . A s we reflect on this achievement, we look forward to continuing our journey of digital innovation, creating transformative solutions, and shaping the future of the digital landscape. Celebrating a major milestone in digital services is a significant occasion . A s we reflect on this achievement, we look forward to continuing our journey of digital innovation, creating transformative solutions, and shaping the future of the digital landscape. Celebrating a major milestone in digital services is a significant occasion . A s we reflect on this achievement, we look forward to continuing our journey of digital innovation, creating transformative solutions, and shaping the future of the digital landscape. Celebrating a major milestone in digital services is a significant occasion .&nbsp;</p>', '43472-blog2.webp', '2024-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `session_id`, `product_id`, `quantity`) VALUES
(346, '7n14p8lqv48kqbamgh5ahn2qhj', 1, 1),
(368, 't1odtenuj1uh0nnh9aaded5u17', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(2500) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`) VALUES
(1, 'Fresh for 2024', '67060-download21.webp'),
(2, 'Etsy & Resell Ready', '46583-download18.webp'),
(3, 'Highest In Demand PLR', '20826-download22.webp');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'kamran', 'kamran@gmail.com', 'lorem ipsum'),
(2, 'rehman', 'rehmanmir@gmail.com', 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `contact_detail`
--

CREATE TABLE `contact_detail` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_detail`
--

INSERT INTO `contact_detail` (`id`, `email`, `phone`, `location`) VALUES
(1, 'dummy@gmail.com', '123 456 789', 'Canada City, Office-02,');

-- --------------------------------------------------------

--
-- Table structure for table `easiest`
--

CREATE TABLE `easiest` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `easiest`
--

INSERT INTO `easiest` (`id`, `heading`, `image`) VALUES
(1, 'Organizers', '84982-download9.webp'),
(2, 'E-Commerce PLR', '71836-download10.webp'),
(3, 'Fitness PLR', '70788-download11.webp'),
(4, 'Food PLR', '38576-download12.webp');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'How do I download the product?', 'To download the product, simply check your email and click the download link or click the \"Download Files\" button located after checkout. If you are on a mobile device, such as an iPhone, copy and paste the download link into Safari and download it there. Once downloaded, open the \"Downloads\" section on safari and then save it to your iPhones \"files.\" For Android users, it is much easier. Simply download it and then access it from your phones files section.'),
(2, 'What is the format of the product? Can it be opened on my device?', '<p>The format of the product is typically a .zip file.</p><ul><li>PDF or .txt file of your digital product</li><li>Images, assets, and other info</li><li>Product License Rights</li></ul><p>A .zip file is a folder that has been consolidated for sharing. Within that .zip file, you will find all the files associated with your PLR Product. The files inside each .zip file will usually contain the following:</p><p>The files can be opened on any device. Please refer to our previous section \"How do I download the product?\"</p>'),
(3, 'Do I need any special software to open the product?', '<p>Nope! All of our PLR digital downloads should be easily accessible by any device.</p>'),
(4, 'How long do I have access to the product?', '<p>Once you purchase and download the PLR Product, you have an indefinite amount of access to it. It is your license now! For security reasons and preservation of assets, we give you 3 download attempts. Additionally download links are active for one week following your purchase. If you are unsuccessful in downloading the product and saving it to your files within 3 attempts and one calendar week, please email our support team.</p>'),
(5, 'Can I download the product to multiple devices?', '<p>Yes! As soon as you download the product you can share it within your devices. For our PLR products, we have a 3 time download limit. Meaning, you can use the download link provided to you by plrze.com 3 times</p>'),
(6, 'Can I print the product?', '<p>Absolutely! We actually encourage this as it can be a great method of distributing and profiting off your PLR. It\'s a different but powerful route most people don\'t take.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `dcp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `image`, `dcp`) VALUES
(1, '59752-ne-removebg-preview.png', '<p>Copyright 2024 | Design By Softrobo Systems</p>');

-- --------------------------------------------------------

--
-- Table structure for table `newslatter`
--

CREATE TABLE `newslatter` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newslatter`
--

INSERT INTO `newslatter` (`id`, `email`) VALUES
(1, 'rehman@gmail.com'),
(2, 'kamran@gmail.com'),
(3, 'faizan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(250) NOT NULL,
  `unique_num` int(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `total_price` varchar(250) NOT NULL,
  `user_id` int(250) NOT NULL,
  `ref` varchar(250) NOT NULL,
  `discount` varchar(200) NOT NULL,
  `payment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `unique_num`, `date`, `status`, `total_price`, `user_id`, `ref`, `discount`, `payment`) VALUES
(171, 6645, '2024-05-16', 'pending', '44.97', 38, 'null', '0', ''),
(172, 6645, '2024-05-16', 'pending', '19.99', 38, 'null', '0', ''),
(173, 6645, '2024-05-16', 'pending', '19.99', 38, 'null', '0', ''),
(174, 6645, '2024-05-16', 'pending', '19.99', 38, 'null', '0', ''),
(175, 664608, '2024-05-16', 'pending', '19.99', 38, 'null', '0', ''),
(176, 66461, '2024-05-16', 'pending', '19.99', 38, 'null', '0', ''),
(177, 664738, '2024-05-17', 'pending', '19.99', 38, 'null', '0', ''),
(178, 66474, '2024-05-17', 'pending', '19.99', 38, 'null', '0', ''),
(179, 66474, '2024-05-17', 'pending', '19.99', 38, 'null', '0', ''),
(180, 66474, '2024-05-17', 'pending', '19.99', 38, 'null', '0', ''),
(181, 664750473, '2024-05-17', 'pending', '12.99', 38, 'null', '0', ''),
(182, 664751, '2024-05-17', 'pending', '12.99', 38, 'null', '0', ''),
(183, 2147483647, '2024-05-17', 'pending', '19.99', 38, 'null', '0', ''),
(184, 664752, '2024-05-17', 'pending', '19.99', 38, 'null', '0', ''),
(185, 6647530, '2024-05-17', 'pending', '10', 38, 'null', '0', ''),
(186, 664753552, '2024-05-17', 'pending', '10', 38, 'null', '0', ''),
(187, 6647535, '2024-05-17', 'pending', '10', 38, 'null', '0', ''),
(188, 664753655, '2024-05-17', 'pending', '10', 38, 'null', '0', ''),
(189, 6647540, '2024-05-17', 'pending', '19.99', 38, 'null', '0', ''),
(190, 2147483647, '2024-05-17', 'pending', '10', 38, 'null', '0', ''),
(191, 664756, '2024-05-17', 'pending', '10', 38, 'null', '0', ''),
(192, 2147483647, '2024-05-17', 'pending', '10', 38, 'null', '0', ''),
(193, 2147483647, '2024-05-17', 'pending', '10', 38, 'null', '0', ''),
(194, 664757, '2024-05-17', 'pending', '19.99', 38, 'null', '0', ''),
(195, 664757, '2024-05-17', 'pending', '10', 38, 'null', '0', ''),
(196, 6647580, '2024-05-17', 'pending', '10', 38, 'null', '0', ''),
(197, 66475831, '2024-05-17', 'pending', '10', 38, 'null', '0', ''),
(198, 2147483647, '2024-05-17', 'pending', '10', 38, 'null', '0', ''),
(199, 66475854, '2024-05-17', 'pending', '10', 38, 'null', '0', ''),
(200, 66475862, '2024-05-17', 'pending', '10', 38, 'null', '0', ''),
(201, 2147483647, '2024-05-17', 'pending', '10', 38, 'null', '0', ''),
(202, 66486708, '2024-05-18', 'pending', '19.99', 38, 'null', '0', ''),
(203, 2147483647, '2024-05-18', 'pending', '19.99', 38, 'null', '0', ''),
(204, 66486746, '2024-05-18', 'pending', '19.99', 38, 'null', '0', ''),
(205, 664, '2024-05-20', 'pending', '15.98', 38, 'null', '0', ''),
(206, 664, '2024-05-20', 'pending', '29.98', 38, 'null', '0', ''),
(207, 664, '2024-05-20', 'pending', '29.98', 38, 'null', '0', ''),
(208, 664, '2024-05-20', 'pending', '29.98', 38, 'null', '0', ''),
(209, 664, '2024-05-20', 'pending', '29.98', 38, 'null', '0', ''),
(210, 664, '2024-05-20', 'pending', '19.99', 38, 'null', '0', ''),
(211, 664, '2024-05-21', 'pending', '12.99', 38, 'null', '0', '1'),
(212, 6659, '2024-05-31', 'pending', '19.99', 31, 'null', '0', '1'),
(213, 665, '2024-06-03', 'pending', '19.99', 38, 'null', '0', '1'),
(214, 665, '2024-06-03', 'pending', '19.99', 38, 'null', '0', '1'),
(215, 6664244, '2024-06-08', 'pending', '19.99', 38, 'null', '0', '1'),
(216, 66642, '2024-06-08', 'pending', '19.99', 38, 'null', '0', '1'),
(217, 66642, '2024-06-08', 'pending', '12.99', 38, 'null', '0', '1'),
(218, 666, '2024-06-14', 'pending', '69.94', 38, 'null', '0', '1'),
(219, 667, '2024-06-27', 'pending', '49.96', 38, 'null', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order-sumary`
--

CREATE TABLE `order-sumary` (
  `id` int(11) NOT NULL,
  `order_id` int(250) NOT NULL,
  `product_id` int(250) NOT NULL,
  `quantity` int(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `unique_num` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order-sumary`
--

INSERT INTO `order-sumary` (`id`, `order_id`, `product_id`, `quantity`, `price`, `unique_num`) VALUES
(170, 171, 2, 1, '9.99', 6645),
(171, 171, 5, 1, '14.99', 6645),
(172, 171, 8, 1, '9.99', 6645),
(173, 172, 2, 1, '9.99', 6645),
(174, 173, 2, 1, '9.99', 6645),
(175, 174, 2, 1, '9.99', 6645),
(176, 175, 2, 1, '9.99', 664608),
(177, 176, 2, 1, '9.99', 66461),
(178, 177, 2, 1, '9.99', 664738),
(179, 178, 2, 1, '9.99', 66474),
(180, 181, 1, 1, '2.99', 664750473),
(181, 183, 2, 1, '9.99', 2147483647),
(182, 184, 2, 1, '9.99', 664752),
(183, 189, 3, 1, '9.99', 6647540),
(184, 194, 2, 1, '9.99', 664757),
(185, 202, 2, 1, '9.99', 66486708),
(186, 205, 1, 2, '2.99', 664),
(187, 206, 2, 2, '9.99', 664),
(188, 209, 2, 2, '9.99', 664),
(189, 210, 3, 1, '9.99', 664),
(190, 211, 1, 1, '2.99', 664),
(191, 212, 0, 1, '', 6659),
(192, 212, 2, 1, '9.99', 6659),
(193, 213, 2, 1, '9.99', 665),
(194, 215, 2, 1, '9.99', 6664244),
(195, 216, 2, 1, '9.99', 66642),
(196, 217, 1, 1, '2.99', 66642),
(197, 218, 6, 6, '9.99', 666),
(198, 219, 2, 4, '9.99', 667);

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` int(11) NOT NULL,
  `heading` varchar(250) NOT NULL,
  `dcp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `heading`, `dcp`) VALUES
(1, 'Privacy Policy', '<h4>1. GENERAL</h4><p>ZELARA TECHNOLOGIES (\"ZELARA TECHNOLOGIES\" or \"we\" or \"us\" or \"our\") respects the privacy of everyone (\"Sites\' visitor\" \"user\" or \"you\") that uses our website at buycbdsupps.com, as well as other device or online applications related or connected thereto (collectively, the \"Sites\").</p><ul><li><strong>i ) The following ZELARA: </strong>TECHNOLOGIES Privacy Notice (\"Privacy Notice\") is designed to inform you, as a user of the Sites, about the types of personal information that ZELARA TECHNOLOGIES may gather about or collect from you in connection with your use of the Sites. It also is intended to explain the conditions under which ZELARA TECHNOLOGIES uses and discloses that personal information, and your rights in relation to that personal information.</li><li><strong>ii ) The Sites are hosted:</strong> in the United States and is subject to U.S. state and federal law. If you are accessing our Sites from other jurisdictions, please be advised that you are transferring your personal information to us in the United States, and by using our Sites, you are agreeing to that transfer and use of your personal information in accordance with this Privacy Notice. You also agree to abide to the applicable laws of the State of Oregon and U.S. federal law concerning your use of the Sites and your agreements with us. If your use of the Sites would be unlawful in your jurisdiction, please do not use the Sites.</li></ul><h4>2. HOW WE COLLECT AND USE YOUR PERSONAL INFORMATION</h4><p>ZELARA TECHNOLOGIES gather personal information from users of the Sites. When you browse our Sites, subscribe to our services, or contact us through various social or web forms you are voluntarily sharing personal information with us. This personal information also includes various data that we collect automatically. This may be the user’s Internet Protocol (IP) address, operating system, browser type, and the locations of the Sites the user views right before arriving at while navigating and immediately after leaving the Sites. It may also include various technical aspects of the user’s computer or browser and users\' browsing habits that are collected through cookies. ZELARA TECHNOLOGIES may analyze various mentioned personal information gathered from or about users to help ZELARA TECHNOLOGIES better understand how the Sites are used and how to make them better. By identifying patterns and trends in usage, ZELARA TECHNOLOGIES is able to better design the Sites to improve users’ experiences, both in terms of content and ease of use. From time to time, ZELARA TECHNOLOGIES may also release the anonymized information gathered from the users in the aggregate, such as by publishing a report on trends in the usage of the Sites.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `heading` varchar(250) NOT NULL,
  `dcp` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `heading`, `dcp`, `image`, `price`, `cat_id`) VALUES
(1, '2024 Planner V1 | PLR Planne', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '65858-download1.webp', '2.99', 1),
(2, 'Self Love Workbook | PLR Workbook', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '78416-download2.webp', '9.99', 1),
(3, 'Home Management Planner | PLR Planner', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '88799-download3.webp', '9.99', 1),
(4, 'Anxiety Journal | PLR Journal', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '4486-download4.webp', '2.99', 1),
(5, 'Personal Journal | PLR Journal', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '25354-download5.webp', '14.99', 2),
(6, 'Self Love Workbook | PLR Workbook', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '58860-download6.webp', '9.99', 2),
(7, 'Home Management Planner | PLR Planner', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '8907-download7.webp', '9.99', 2),
(8, 'Anxiety Journal | PLR Journal', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '80609-download8.webp', '9.99', 2),
(9, '52 Week Planner For 2023 V1 | PREMIUM PLR Planner', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '20277-download14.webp', '14.99', 3),
(10, 'Gratitude Self Care Journal V1 | PLR Journal', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '43187-download13.webp', '19.99', 3),
(11, 'Self Improvement Planner | PLR Planner', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '88142-download15.webp', '9.99', 3),
(12, '52 Week Planner For 2023 V2 | PLR Planner', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '38636-download16.webp', '9.99', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ref_discount`
--

CREATE TABLE `ref_discount` (
  `id` int(11) NOT NULL,
  `discount` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_discount`
--

INSERT INTO `ref_discount` (`id`, `discount`) VALUES
(1, '50');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `heading` varchar(250) NOT NULL,
  `dcp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `heading`, `dcp`) VALUES
(1, 'Terms & Condition', '<p>This Terms of Use Agreement (\"Agreement”), along with our Company Privacy Policy, constitutes a legally binding agreement made between you, whether personally or on behalf of an entity (\"user” or \"you”) and ZELARA TECHNOLOGIES and its affiliated companies, Websites, applications and tools (collectively, ZELARA TECHNOLOGIES, \"Company” or \"we” or \"us” or \"our”), concerning your access to and use of the plrze.com Website(s) as well as any other media form, media channel, mobile website or mobile application related or connected thereto (collectively, the \"Sites”). The Sites provide the following service: Sale of Digital Content. (\"Company Services”). Supplemental terms and conditions or documents that may be posted on the Sites from time to time, are hereby expressly incorporated into this Agreement by reference.</p><ul><li><strong>i ) The company makes: </strong>no representation that the site is appropriate or available in locations other than where it is operated by Company. The information provided on the Sites is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or regulation or which would subject Company to any registration requirement within such jurisdiction or country. Accordingly, those persons who choose to access the Sites from other locations do so on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable.</li><li><strong>ii ) YOU ACCEPT AND AGREE:</strong> TO BE BOUND BY THIS AGREEMENT BY ACKNOWLEDGING SUCH ACCEPTANCE DURING THE REGISTRATION PROCESS (IF APPLICABLE) AND ALSO BY CONTINUING TO USE THE SITES. IF YOU DO NOT AGREE TO ABIDE BY THIS AGREEMENT, OR TO MODIFICATIONS THAT THE COMPANY MAY MAKE TO THIS AGREEMENT IN THE FUTURE, DO NOT USE OR ACCESS OR CONTINUE TO USE OR ACCESS THE COMPANY SERVICES OR THE SITES.</li></ul><h4>2. PURCHASES; PAYMENT</h4><p>ZELARA TECHNOLOGIES may offer a free trial or samples of our products or services. The duration of the free trial period and all other details of the offer will be posted on our Sites If you wish to try our free options please read through them carefully first. ZELARA TECHNOLOGIES will bill you through a payment provider for our Services. By using our paid options you agree to pay ZELARA TECHNOLOGIES all charges at the prices then in effect for the products or services you or other persons using your billing account may purchase, and you authorize ZELARA TECHNOLOGIES to charge your chosen payment provider for any such purchases. You agree to make payment using that selected payment method. If you have ordered a product or service that is subject to recurring charges then you agree to us charging your payment method on a recurring basis, without requiring your prior approval from you for each recurring charge until such time as you cancel the applicable product or service. ZELARA TECHNOLOGIES reserves the right to correct any errors or mistakes in pricing that it makes even if it has already requested or received payment. Sales tax will be added to the sales price of purchases as deemed required by Company. The company may change prices at any time. All payments shall be in U.S. dollars</p>');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `dcp` text NOT NULL,
  `designation` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `dcp`, `designation`, `image`) VALUES
(1, 'Great Agency!', 'By actively seeking, analyzing, and acting upon feedback, a digital agency can continuously refine its processes, enhance client satisfaction, and foster a culture of continuous.', 'Mr. Daniel Scoot', '70222-testimonial-img-01.png'),
(3, 'Great Agency!', 'Proactively engaging with feedback enables a digital agency to iteratively refine processes, ensuring client satisfaction and maintaining a culture of continual enhancement.', 'Catch, CEO', '42987-testimonial-img-03.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `referal` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `referal`) VALUES
(19, 'rehman', 'mir', 'rehmanmir@gmail.com', 'kamibutt', ''),
(23, 'ahmed', 'sheraz', 'ahmedsheraz@gmail.com', 'sheraz', ''),
(24, 'Sheraz', 'ahmed', 'sherazahmed@gmail.com', 'sheraz', ''),
(25, 'Ahmed', 'raz', 'ahmed@gmail.com', '12345', ''),
(26, 'hello', 'ok', 'hello@gmail.com', '12345', ''),
(30, 'Hamza ', 'jutt', 'hamza@gmail.com', '123', 'REF_66321a3487f4a'),
(31, 'sheraz', 'ahmed', 'ahmedsheraz920@gmail.com', '123', 'REF_66333be6f1d6f'),
(32, 'gold', 'berg', 'gold@gmail.com', '123', '6634badf2d1cd'),
(38, 'Sheraz', 'Ahmed', 'sheraz.softerbits@gmail.com', '123', '663dd7067928f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_detail`
--
ALTER TABLE `contact_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `easiest`
--
ALTER TABLE `easiest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslatter`
--
ALTER TABLE `newslatter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order-sumary`
--
ALTER TABLE `order-sumary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_discount`
--
ALTER TABLE `ref_discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=377;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_detail`
--
ALTER TABLE `contact_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `easiest`
--
ALTER TABLE `easiest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newslatter`
--
ALTER TABLE `newslatter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `order-sumary`
--
ALTER TABLE `order-sumary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ref_discount`
--
ALTER TABLE `ref_discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
