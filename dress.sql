-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2023 at 11:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dress`
--

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `col_id` int(11) NOT NULL,
  `collection_name` varchar(20) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `rate` smallint(2) DEFAULT NULL,
  `nameProduct1` varchar(40) DEFAULT NULL,
  `nameProduct2` varchar(40) DEFAULT NULL,
  `nameProduct3` varchar(40) DEFAULT NULL,
  `nameProduct4` varchar(40) DEFAULT NULL,
  `nameProduct5` varchar(40) DEFAULT NULL,
  `nameProduct6` varchar(40) DEFAULT NULL,
  `nameProduct7` varchar(40) DEFAULT NULL,
  `nameProduct8` varchar(40) DEFAULT NULL,
  `nameProduct9` varchar(40) DEFAULT NULL,
  `nameProduct10` varchar(40) DEFAULT NULL,
  `is_show` smallint(1) DEFAULT 0,
  `price_1` int(11) DEFAULT NULL,
  `price_2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`col_id`, `collection_name`, `photo`, `description`, `rate`, `nameProduct1`, `nameProduct2`, `nameProduct3`, `nameProduct4`, `nameProduct5`, `nameProduct6`, `nameProduct7`, `nameProduct8`, `nameProduct9`, `nameProduct10`, `is_show`, `price_1`, `price_2`) VALUES
(1, 'المجموعه الاولي', 'http://localhost:8000/upload/collection_image/images.png', 'تعد تلك المجموعه من المجموعات الغاليه جدا حيث انها مجموعه من الفساتين الجميله التي توفر لك ميزات الاختيار من المجموعه المتاحه .', 4, 'اكسسوار 1', 'اكسسوار 2', 'فستان زفاف 1', 'فستان زفاف 3', 'فستان سواريه 2', NULL, NULL, NULL, NULL, NULL, 0, 2700, 20000),
(2, 'المجموعه الثاني', 'http://localhost:8000/upload/collection_image/il_340x270.4818822617_764o.jpg', 'تعد تلك المجموعه من المجموعات الغاليه جدا حيث انها مجموعه من الفساتين الجميله التي توفر لك ميزات الاختيار من المجموعه المتاحه .', 3, 'فستان سواريه 3', 'فستان زفاف 3', 'اكسسوار 2', 'اكسسوار 1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 3000, 30000),
(3, 'المجموعه الثالثه', 'http://localhost:8000/upload/collection_image/Wedding-Shoppe-dresses-by-David-Grube-Photography.jpg', 'تعد تلك المجموعه من المجموعات الغاليه جدا حيث انها مجموعه من الفساتين الجميله التي توفر لك ميزات الاختيار من المجموعه المتاحه .', 2, 'فستان سواريه ', 'فستان سواريه 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1200, 10000),
(4, 'المجموعه الرابعه', 'http://localhost:8000/upload/collection_image/istockphoto-656980138-612x612.jpg', 'تعد تلك المجموعه من المجموعات الغاليه جدا حيث انها مجموعه من الفساتين الجميله التي توفر لك ميزات الاختيار من المجموعه المتاحه .', 1, 'فستان سواريه 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1000, 10000),
(5, 'المجموعه الخامسه', 'http://localhost:8000/upload/collection_image/1000s.jpg', 'تعد تلك المجموعه من المجموعات الغاليه جدا حيث انها مجموعه من الفساتين الجميله التي توفر لك ميزات الاختيار من المجموعه المتاحه .', 5, 'فستان سواريه 2', 'فستان زفاف 3', 'اكسسوار 1', 'فستان سواريه ', NULL, NULL, NULL, NULL, NULL, NULL, 0, 5000, 50000),
(10, 'المحموعه السادسه', 'https://localhost/dressing_backend/upload/collection_image/Turkish-veiled-wedding-dresses.jpg', 'تتميز بالشكل الجذاب اللمتتع', 2, 'اكسسوار 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1200, 4000),
(11, 'المحموعه السابعه', 'https://localhost/dressing_backend/upload/collection_image/Turkish-veiled-wedding-dresses.jpg', 'تتميز بالشكل الجذاب اللمتتع', 2, 'اكسسوار 1', 'فستان زفاف 3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1200, 4000);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(30) DEFAULT NULL,
  `prod_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_id`, `color_name`, `prod_id`) VALUES
(4, 'red', 1),
(5, 'white', 1),
(6, 'green', 1),
(7, 'yallow', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(24) DEFAULT NULL,
  `dep_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`, `dep_photo`) VALUES
(1, 'فساتين زفاف', 'http://localhost:8000/upload/department_image/dress1.jpg'),
(4, 'اكسسوارات', 'http://localhost:8000/upload/department_image/118733-الخواتم-الحلقات-أحدث-اكسسوارات-2021-4.jpg'),
(5, 'فساتين سواريه', 'http://localhost:8000/upload/department_image/dress2.jpg'),
(13, 'فساتين hq', 'http://localhost:8000/upload/department_image/Turkish-veiled-wedding-dresses.jpg'),
(15, 'اخواتم', 'http://localhost:8000/upload/department_image/418aylX3BLL._AC_SY780_.jpg'),
(16, 'سبشسبشس', 'http://localhost:8000/upload/department_image/iamge.png'),
(17, 'قسم آطفال', 'http://localhost:8000/upload/department_image/900.jpg'),
(18, 'dasdasd', 'http://localhost:8000/upload/department_image/nasrin--mt15_2x_10050687.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `image_url` varchar(250) NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `image_url`, `prod_id`) VALUES
(1, 'http://localhost:8000/upload/product_image/product4755761x1000.jpg', 1),
(2, 'http://localhost:8000/upload/product_image/900.jpg', 2),
(3, 'http://localhost:8000/upload/product_image/imgs-1_133194-1.jpg', 3),
(4, 'http://localhost:8000/upload/product_image/274360637_2052553491581174_4966135038175933114_n.jpg', 7),
(5, 'http://localhost:8000/upload/product_image/418aylX3BLL._AC_SY780_.jpg', 8),
(6, 'http://localhost:8000/upload/product_image/headpiece.jpg', 9),
(7, 'http://localhost:8000/upload/product_image/920.jpg', 4),
(8, 'http://localhost:8000/upload/product_image/dress4.jpg', 5),
(9, 'http://localhost:8000/upload/product_image/Turkish-veiled-wedding-dresses.jpg', 6),
(10, 'http://localhost:8000/upload/product_image/nasrin--mt15_2x_10050687.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `inter_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `prod_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`inter_id`, `user_id`, `prod_id`) VALUES
(18, 11, 4),
(19, 11, 7),
(20, 11, 2),
(21, 27, 4),
(22, 11, 5),
(23, 11, 6),
(24, 11, 8),
(25, 29, 2),
(26, 29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `interset_coll`
--

CREATE TABLE `interset_coll` (
  `interset_coll_id` int(11) NOT NULL,
  `collection_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interset_coll`
--

INSERT INTO `interset_coll` (`interset_coll_id`, `collection_id`, `user_id`) VALUES
(4, 3, 11),
(5, 1, 27);

-- --------------------------------------------------------

--
-- Table structure for table `orderRant`
--

CREATE TABLE `orderRant` (
  `orderRentID` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `prod_ID` int(11) DEFAULT NULL,
  `user_ID` int(11) NOT NULL,
  `collection_id` int(11) DEFAULT NULL,
  `size_name` varchar(25) DEFAULT NULL,
  `color_code` varchar(25) NOT NULL,
  `amount` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `pay_now` int(11) NOT NULL DEFAULT 0,
  `end_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderRant`
--

INSERT INTO `orderRant` (`orderRentID`, `created_at`, `update_at`, `prod_ID`, `user_ID`, `collection_id`, `size_name`, `color_code`, `amount`, `total_price`, `pay_now`, `end_at`) VALUES
(1, '2023-09-20 05:59:46', '2023-08-21 07:55:19', 1, 11, NULL, NULL, '', 1, 1000, 1, '2023-08-21 07:55:19'),
(2, '2023-09-20 08:02:47', '2023-08-21 07:55:19', NULL, 11, 1, NULL, '', 1, 3000, 0, '2023-08-21 07:55:19'),
(3, '2023-09-20 10:53:55', '2023-08-21 07:55:19', 2, 11, NULL, NULL, '', 1, 1000, 0, '2023-08-21 07:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(230) NOT NULL,
  `rate` smallint(2) DEFAULT NULL,
  `price_1` int(11) DEFAULT NULL,
  `price_2` int(11) DEFAULT NULL,
  `price_3` int(11) DEFAULT 0,
  `price_4` int(11) DEFAULT 0,
  `dep_ID` int(11) DEFAULT NULL,
  `is_show` smallint(2) DEFAULT 0,
  `amount` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `name`, `description`, `image`, `rate`, `price_1`, `price_2`, `price_3`, `price_4`, `dep_ID`, `is_show`, `amount`) VALUES
(1, 'فستان سواريه ', 'فستان حفل زفاف جميل', 'http://localhost:8000/upload/product_image/product4755761x1000.jpg', 4, 1000, 12000, 0, 0, 5, 0, 3),
(2, 'فستان سواريه 2', 'فستان سواريه جديد ذات طابع جذاب ومظهر ملفت', 'http://localhost:8000/upload/product_image/900.jpg', 3, 500, 2400, 0, 0, 5, 0, 1),
(3, 'فستان سواريه 3', 'فستان سواريه جديد ذات طابع جذاب ومظهر ملفت', 'http://localhost:8000/upload/product_image/imgs-1_133194-1.jpg', 2, 400, 2000, 300, 0, 5, 0, 1),
(4, 'فستان زفاف 1', 'يتمتع الفستان بالراحه كما انه ذات طبع ارستقراطي جميل جاذب للنظر', 'http://localhost:8000/upload/product_image/920.jpg', 4, 3000, 20000, 0, 0, 1, 0, 1),
(5, 'فستان زفاف 2', 'يتمتع الفستان بالراحه كما انه ذات طبع ارستقراطي جميل جاذب للنظر', 'http://localhost:8000/upload/product_image/dress4.jpg', 4, 5000, 25000, 0, 0, 1, 0, 1),
(6, 'فستان زفاف 3', 'الفستان (المعروف أيضًا باسم الفستان أو الثوب) هو ثوب ترتديه النساء أو الفتيات تقليديًا ويتكون من تنورة مع صد متصل (أو صد مطابق يعطي تأثير قطعة واحدة من الملابس). وتتكون من قطعة علوية تغطي الجذع وتتدلى فوق الساقين. يمكن أن يكون الفستان أي قطعة ملابس تحتوي على تنورة بأي طول، ويمكن أن يكون رسميًا أو غير رسمي.\r\n\r\nيمكن أن يكون للفستان أكمام، أو أشرطة، أو يمكن تثبيته بمرونة حول الصدر، مع ترك الكتفين عاريتين. تختلف الفساتين أيضًا في اللون.\r\n\r\nتختلف أطراف الفساتين حسب الحشمة أو الطقس أو الموضة أو الذوق الشخصي لمرتديها', 'http://localhost:8000/upload/product_image/Turkish-veiled-wedding-dresses.jpg', 5, 10000, 34000, 0, 0, 1, 0, 1),
(7, 'اكسسوار 1', 'تعد تلك الاكسسوارات من ملفتات وزينات الشكل الخارجي الغير قابل للنقاش', 'http://localhost:8000/upload/product_image/274360637_2052553491581174_4966135038175933114_n.jpg', 2, 50, 300, 0, 0, 4, 0, 1),
(8, 'اكسسوار 2', 'تعد تلك الاكسسوارات من ملفتات وزينات الشكل الخارجي الغير قابل للنقاش', 'http://localhost:8000/upload/product_image/418aylX3BLL._AC_SY780_.jpg', 2, 70, 350, 0, 0, 4, 0, 1),
(9, 'اكسسوار 3', 'تعد تلك الاكسسوارات من ملفتات وزينات الشكل الخارجي الغير قابل للنقاش', 'http://localhost:8000/upload/product_image/headpiece.jpg', 2, 100, 400, 0, 0, 4, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` int(11) NOT NULL,
  `size_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id`, `size_type`) VALUES
(2, 'medium'),
(1, 'small'),
(3, 'XL'),
(4, 'XXL'),
(5, 'XXXL');

-- --------------------------------------------------------

--
-- Table structure for table `size_relation`
--

CREATE TABLE `size_relation` (
  `size_id` int(11) NOT NULL,
  `size_name` varchar(25) NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `size_relation`
--

INSERT INTO `size_relation` (`size_id`, `size_name`, `prod_id`) VALUES
(1, 'small', 1),
(2, 'medium', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(24) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `place` varchar(20) DEFAULT NULL,
  `confirm_phone` varchar(11) DEFAULT NULL,
  `type` smallint(1) DEFAULT 0,
  `verfiyCode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `phone`, `age`, `place`, `confirm_phone`, `type`, `verfiyCode`) VALUES
(1, 'Ahmed', 'mohamedw@gmail.com', '88ea39439e74fa27c09a4fc0bc8ebe6d00978392', '1020504710', 23, 'Luxor', NULL, 1, 31363),
(2, 'Ahmed', 'mohamed@gmail.com', '377ed701da6302b6426b7a5bc5de62217c4439cb', '1020504710', 23, 'Luxor', NULL, 0, 38695),
(3, 'owner', 'admin@dress.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', '0', 0, 'LUXOR', NULL, 2, 0),
(5, 'Admin', 'admin@address.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', '1008295287', 24, 'Aswan', NULL, 0, 44706),
(6, 'Khaled Moahedm', 'mo7amed4522@gmail.com', '542a340487432cdba320eceddb18a8ea6e780113', '1020504710', 23, 'Mana', NULL, 0, 34763),
(7, 'Ahmed mohamed', 'mo66@gmail.com', '542a340487432cdba320eceddb18a8ea6e780113', '1020504710', 22, 'Qena', NULL, 0, 54398),
(8, 'Ali said', 'ss@gmail.com', '542a340487432cdba320eceddb18a8ea6e780113', '1020504710', 23, 'Qena', NULL, 1, 16076),
(9, 'Ali Ali', 'ali@gmail.com', 'f658d5499810cad8284178e7239276ff375c4794', '1144853242', 23, 'Qena', NULL, 1, 25064),
(11, 'Saued', 'mm12@gmail.com', 'f658d5499810cad8284178e7239276ff375c4794', '01020504710', 23, 'Qena', '01144853242', 1, 12521),
(12, 'ali ahmed', 'mo7@gmail.com', '730142586d976f6e5e7193eac8eccf817419b62b', '1144853242', 23, 'Qena', NULL, 0, 36172),
(13, 'mohamed', 'moh12@gmail.com', 'f658d5499810cad8284178e7239276ff375c4794', '1144853242', 23, 'Qena', NULL, 0, 88241),
(14, 'Admin', 'admin@address.coms', 'f865b53623b121fd34ee5426c792e5c33af8c227', '1008295287', 24, 'Aswan', NULL, 0, 13928),
(15, 'asdacdscsdcds', 'asx@aasd.cda', '88ea39439e74fa27c09a4fc0bc8ebe6d00978392', '01144853242', 23, 'Mana', NULL, 0, 50507),
(16, 'Admin', 'admin@address.rr', 'f865b53623b121fd34ee5426c792e5c33af8c227', '01008295287', 24, 'Aswan', NULL, 0, 85910),
(17, 'Admin', 'admin@address.r', 'f865b53623b121fd34ee5426c792e5c33af8c227', '01008295287', 24, 'Aswan', NULL, 0, 71151),
(18, 'ahmed', 'mohamedss@jdj.cds', 'c1d36c2b371f6e51e0219bdedeb6fd01702f15df', '01020504710', 22, 'qena', NULL, 0, 17202),
(19, 'ahggj', 'mo12@gmail.com', 'f658d5499810cad8284178e7239276ff375c4794', '01144853242', 22, 'qena', NULL, 0, 13927),
(21, 'qwe', 'qwe', '056eafe7cf52220de2df36845b8ed170c67e23e3', '01008295287', 24, 'Nag Hamadi', NULL, 0, 26071),
(22, 'qwe', 'qwe@wqq.d', '056eafe7cf52220de2df36845b8ed170c67e23e3', '01008295287', 24, 'Nag Hamadi', NULL, 0, 82382),
(23, 'qwe', 'qwe@wqq.ds', '056eafe7cf52220de2df36845b8ed170c67e23e3', '01008295287', 24, 'Nag Hamadi', NULL, 0, 30718),
(24, 'qwe', 'qwe@wqq.dsa', '056eafe7cf52220de2df36845b8ed170c67e23e3', '01008295287', 24, 'Nag Hamadi', NULL, 0, 39440),
(25, 'qwe', 'qwe@wqq.dsas', '056eafe7cf52220de2df36845b8ed170c67e23e3', '01008295287', 24, 'Nag Hamadi', NULL, 0, 89353),
(26, 'ale', 'Ahmed22@gmail.com', 'f658d5499810cad8284178e7239276ff375c4794', '01144853242', 2, 'Qena', '011', 1, 55955),
(27, 'ahmedali', 'ahah@gmail.com', '542a340487432cdba320eceddb18a8ea6e780113', '01020504710', 23, 'qena', NULL, 1, 63803),
(28, 'خالد محمد عبده', 'moo12@gmail.com', 'f658d5499810cad8284178e7239276ff375c4794', '01144853242', 22, 'قنا', '01144853242', 1, 13186),
(29, 'احمد محمد عبد الفتاح', 'mq12@gmail.com', 'f658d5499810cad8284178e7239276ff375c4794', '01144853242', 23, 'قنا', '01020504710', 1, 94261);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`col_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `product_id` (`prod_id`);

--
-- Indexes for table `interest`
--
ALTER TABLE `interest`
  ADD PRIMARY KEY (`inter_id`),
  ADD KEY `prod_id` (`prod_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `interset_coll`
--
ALTER TABLE `interset_coll`
  ADD PRIMARY KEY (`interset_coll_id`),
  ADD KEY `collection_id` (`collection_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orderRant`
--
ALTER TABLE `orderRant`
  ADD PRIMARY KEY (`orderRentID`),
  ADD KEY `user_ID` (`user_ID`),
  ADD KEY `collection_id` (`collection_id`),
  ADD KEY `prod_ID` (`prod_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `dep_ID` (`dep_ID`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`),
  ADD UNIQUE KEY `size_type` (`size_type`);

--
-- Indexes for table `size_relation`
--
ALTER TABLE `size_relation`
  ADD PRIMARY KEY (`size_id`),
  ADD KEY `size_name` (`size_name`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `col_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `interest`
--
ALTER TABLE `interest`
  MODIFY `inter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `interset_coll`
--
ALTER TABLE `interset_coll`
  MODIFY `interset_coll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orderRant`
--
ALTER TABLE `orderRant`
  MODIFY `orderRentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `size_relation`
--
ALTER TABLE `size_relation`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collection`
--
ALTER TABLE `collection`
  ADD CONSTRAINT `collection_ibfk_1` FOREIGN KEY (`nameProduct1`) REFERENCES `product` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `collection_ibfk_10` FOREIGN KEY (`nameProduct10`) REFERENCES `product` (`name`),
  ADD CONSTRAINT `collection_ibfk_2` FOREIGN KEY (`nameProduct2`) REFERENCES `product` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `collection_ibfk_3` FOREIGN KEY (`nameProduct3`) REFERENCES `product` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `collection_ibfk_4` FOREIGN KEY (`nameProduct4`) REFERENCES `product` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `collection_ibfk_5` FOREIGN KEY (`nameProduct5`) REFERENCES `product` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `collection_ibfk_6` FOREIGN KEY (`nameProduct6`) REFERENCES `product` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `collection_ibfk_7` FOREIGN KEY (`nameProduct7`) REFERENCES `product` (`name`),
  ADD CONSTRAINT `collection_ibfk_8` FOREIGN KEY (`nameProduct8`) REFERENCES `product` (`name`),
  ADD CONSTRAINT `collection_ibfk_9` FOREIGN KEY (`nameProduct9`) REFERENCES `product` (`name`);

--
-- Constraints for table `color`
--
ALTER TABLE `color`
  ADD CONSTRAINT `color_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `product` (`prod_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `product` (`prod_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `interest`
--
ALTER TABLE `interest`
  ADD CONSTRAINT `interest_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `product` (`prod_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `interest_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `interset_coll`
--
ALTER TABLE `interset_coll`
  ADD CONSTRAINT `interset_coll_ibfk_1` FOREIGN KEY (`collection_id`) REFERENCES `collection` (`col_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `interset_coll_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderRant`
--
ALTER TABLE `orderRant`
  ADD CONSTRAINT `orderrant_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderrant_ibfk_2` FOREIGN KEY (`collection_id`) REFERENCES `collection` (`col_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderrant_ibfk_3` FOREIGN KEY (`prod_ID`) REFERENCES `product` (`prod_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`dep_ID`) REFERENCES `department` (`dep_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `size_relation`
--
ALTER TABLE `size_relation`
  ADD CONSTRAINT `size_relation_ibfk_1` FOREIGN KEY (`size_name`) REFERENCES `size` (`size_type`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `size_relation_ibfk_2` FOREIGN KEY (`prod_id`) REFERENCES `product` (`prod_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
