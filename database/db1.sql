-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2020 at 07:45 AM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(10) NOT NULL DEFAULT '',
  `cpassword` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `email`, `password`, `cpassword`) VALUES
(14, 'admin', 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(5) NOT NULL,
  `fname` varchar(30) NOT NULL DEFAULT '',
  `lname` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(40) NOT NULL DEFAULT '',
  `mobile` varchar(14) NOT NULL DEFAULT '',
  `application` varchar(500) NOT NULL DEFAULT '',
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `fname`, `lname`, `email`, `mobile`, `application`, `date`) VALUES
(4, 'shazaib', 'rahman', 'admin@gmail.com', '8959883069', 'hello i m intrested', '2020-05-18'),
(5, '', '', '', '', '', '2020-06-14'),
(6, 'shazaib', 'rehman', 'shazaib@gmail.com', '8959883069', 'hello', '2020-06-14'),
(7, 'Naveen', 'Patnakar', 'shazaibrehman127@gmail.com', '9638574', 'email applicatio', '2020-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(5) NOT NULL,
  `img` varchar(300) NOT NULL DEFAULT '',
  `title` varchar(300) NOT NULL DEFAULT '',
  `description` varchar(1000) NOT NULL DEFAULT '',
  `date` date DEFAULT NULL,
  `topic` varchar(1000) NOT NULL DEFAULT '',
  `temp` varchar(50) NOT NULL DEFAULT '',
  `insertedAt` date NOT NULL,
  `updateAt` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `img`, `title`, `description`, `date`, `topic`, `temp`, `insertedAt`, `updateAt`) VALUES
(1, '1592115985logo12.png', 'New logo Of Institute Comes', '                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut impedit nihil eos, consequuntur quibusdam magnam dignissimos molestias ab, excepturi perferendis veniam recusandae iusto ratione quae quisquam temporibus vel? Maxime, corporis.\r\n', '2020-12-31', '                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut impedit nihil eos, consequuntur quibusdam magnam dignissimos molestias ab, excepturi perferendis veniam recusandae iusto ratione quae quisquam temporibus vel? Maxime, corporis.\r\n', '1592115973', '2020-06-14', NULL),
(2, '159211612612.jpg', 'New logo Of Institute Comes', '                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut impedit nihil eos, consequuntur quibusdam magnam dignissimos molestias ab, excepturi perferendis veniam recusandae iusto ratione quae quisquam temporibus vel? Maxime, corporis.\r\n', '2020-12-31', '                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut impedit nihil eos, consequuntur quibusdam magnam dignissimos molestias ab, excepturi perferendis veniam recusandae iusto ratione quae quisquam temporibus vel? Maxime, corporis.\r\n', '1592116126', '2020-06-14', NULL),
(3, '1592116298wp3054731.jpg', 'New logo Of Institute Comes', '                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut impedit nihil eos, consequuntur quibusdam magnam dignissimos molestias ab, excepturi perferendis veniam recusandae iusto ratione quae quisquam temporibus vel? Maxime, corporis.\r\n', '2020-12-31', '                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut impedit nihil eos, consequuntur quibusdam magnam dignissimos molestias ab, excepturi perferendis veniam recusandae iusto ratione quae quisquam temporibus vel? Maxime, corporis.\r\n', '1592116276', '2020-06-14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `message` varchar(300) NOT NULL DEFAULT '',
  `name` varchar(200) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `mobile` varchar(14) NOT NULL DEFAULT '',
  `course` varchar(200) NOT NULL DEFAULT '',
  `date` date DEFAULT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`message`, `name`, `email`, `mobile`, `course`, `date`, `id`) VALUES
('', 'asddsa', 'admin@gmail.com', 'sdsdf', 'dca', '2020-05-17', 1),
('indore', 'asddsa', '', '234567890', 'bca', '2020-05-17', 2),
('JKSJkjsadd', 'asddsa', 'admin@gmail.com', 'lkjnndaslj', 'pgdca', '2020-05-17', 3),
('', '', '', '', 'bca', '2020-05-20', 4),
('', '', '', '', 'bca', '2020-06-02', 5),
('hello ', 'Shazaib rahman', 'shazaibrehman127@gmail.com', '8959883069', 'pgdca', '2020-06-11', 6),
('', '', '', '', 'bca', '2020-06-14', 7),
('', '', '', '', 'bca', '2020-06-14', 8),
('', '', '', '', 'bca', '2020-06-14', 9),
('hee i m intreseted', 'Amene', 'amasn@gmail.com', '8959883069', 'pgdca', '2020-06-14', 10),
('heelo', 'shazaib', 'shazaib@gmail.com', '978456984512', 'pgdca', '2020-06-14', 11),
('', '', '', '', 'bca', '2020-06-18', 12);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `temp` varchar(50) NOT NULL DEFAULT '',
  `category` varchar(50) NOT NULL,
  `imgname` varchar(200) DEFAULT '',
  `fees` varchar(20) NOT NULL DEFAULT '',
  `duration` varchar(5) NOT NULL DEFAULT '',
  `strtTime` varchar(10) NOT NULL DEFAULT '',
  `endTime` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `subtitle`, `Description`, `temp`, `category`, `imgname`, `fees`, `duration`, `strtTime`, `endTime`) VALUES
(30, 'BCA', 'Bachelor of Computer Applications', 'BCA is a three year undergraduate degree programme for candidates wishing to delve into the world of Computer languages. One of the most popular options to get started with a career in Information Technology, the course gives you an insight into the world of computers and its applications. ', '1591724821', 'graduate', '1591725358BCA.jpg', '18000', '3', '8:00 AM', '12:00 AM'),
(31, 'MSC (cs)', 'Master of Science  ', 'MSC(cs) is a two year Postgraduate degree programme for candidates wishing to delve into the world of Computer languages. One of the most popular options to get started with a career in Information Technology, the course gives you an insight into the world of computers and its applications.', '1591728344', 'postgraduate', '1591728700msc.jpg', '14000', '2', '8:00 AM', '12:00 PM'),
(32, 'BSC (plain/cs)', 'Bachelor of Science (Plain/cs)', 'BSc(Plain/cs) or Bachelor of Science is a 3-year undergraduate course for students who wish to make a career in science and research. There are around 4.68 million students who are pursuing BSc currently.', '1592838283', 'graduate', '1592838283bssc.jpg', '15000', '3', '08:00 AM', '12:00 PM'),
(33, 'B.com (plain/cs)', 'Bachelor of Commerce(plain/cs)', 'B.com(plain/cs)Bachelor of Commerce(cs) aims to produce qualified and trained personnel for fields such as banking, insurance, accounting, stock markets, e-commerce, and marketing, besides teaching jobs in universities and colleges.', '1592844922', 'graduate', '1592844922bcom.jpg', '18000', '3', '08:00 AM', '12:00 PM'),
(34, 'DCA', 'Diploma in Computer Applications', 'It is a one year course or diploma in computer application. The course is designed to impart fundamental, practical, and technical knowledge to the learners related to computer tools, and applications', '1592846639', 'undergraduate', '1592846639dca.png', '10000', '1', '08:00 AM', '12:00 PM'),
(35, 'PGDCA', 'PG Diploma In Computer Application', 'PGDCA or Postgraduate Diploma in Computer Applications is a 1-year postgraduate diploma course. This course is offered by many top colleges .The basic eligibility criteria required to pursue this course is graduation from any recognized unive', '1592847208', 'undergraduate', '1592847208pgdca.jpg', '14000', '1', '08:00 AM', '12:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `mobile` varchar(15) NOT NULL DEFAULT '',
  `dob` varchar(20) NOT NULL DEFAULT '',
  `age` varchar(10) NOT NULL DEFAULT '',
  `state` varchar(100) NOT NULL DEFAULT '',
  `gender` varchar(10) NOT NULL DEFAULT '',
  `subject` varchar(20) NOT NULL DEFAULT '',
  `city` varchar(50) NOT NULL DEFAULT '',
  `pinocde` int(10) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT '',
  `address` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `mobile`, `dob`, `age`, `state`, `gender`, `subject`, `city`, `pinocde`, `image`, `address`) VALUES
(14, 'ameen uddin', 'ameen@gmail.com', '741852963', '2009-12-31', '10', 'Bihar', 'male', 'BCA', ' Barh ', 966325, '1594320472WhatsApp_Image_2020-06-20_at_11-removebg-preview_burned (copy).jpg', 'hello i m intrested'),
(16, 'sham uddin', 'sham@gmail.com', '8959883069', '2020-12-01', '52', 'Arunachal Pradesh', 'male', 'PGDCA', ' Khonsa ', 7854, '1594320827pgdca.jpg', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(5) NOT NULL,
  `heading` varchar(200) NOT NULL DEFAULT '',
  `hplace` varchar(500) NOT NULL,
  `hdate` date DEFAULT NULL,
  `htime` time DEFAULT NULL,
  `temp` varchar(50) NOT NULL DEFAULT '',
  `onnounceDate` date DEFAULT NULL,
  `img` varchar(191) NOT NULL DEFAULT '',
  `detail` varchar(1500) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `heading`, `hplace`, `hdate`, `htime`, `temp`, `onnounceDate`, `img`, `detail`) VALUES
(13, 'Work Shops', 'sfddsf', '2020-12-31', '22:58:00', '1590456443', '2020-05-26', '1590456443author.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus augue nibh, at ullamcorper orci ullamcorper ut. Integer vehicula iaculis risus, non consequat eros tincidunt ac. Morbi a aliquam tortor. Nam convallis vestibulum nisi, sit amet fermentum libero scelerisque id. Integer iaculis mollis justo, sed interdum ligula auctor in. Donec a vehicula nisi. Fusce quis mollis sem. Nam velit dolor, ultricies non mollis vel, sagittis sed leo. Morbi lorem justo, porta eu odio a, tincidunt pretium dui. In ac fringilla arcu.');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(5) NOT NULL,
  `img_name` varchar(50) NOT NULL DEFAULT '',
  `img` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `img_name`, `img`) VALUES
(7, 'Smart Logo', '15943427881591838436logos.png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(5) NOT NULL,
  `heading` varchar(100) NOT NULL DEFAULT '',
  `detail` varchar(500) NOT NULL DEFAULT '',
  `currentdate` date DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  `temp` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `detail`, `currentdate`, `image`, `temp`) VALUES
(5, 'Those Other College Expenses You Arenâ€™t Thinking About', 'rem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2020-05-20', '15899310441.png', '1589931044'),
(6, 'Those Other College Expenses You Arenâ€™t Thinking About', 'rem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2020-05-20', '15899311832.png', '1589931183'),
(7, 'Examination date will be declared soon', 'rem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2020-06-11', '15918366851.png', '1591836685');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(5) NOT NULL,
  `title` varchar(20) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `descrip` varchar(30) NOT NULL,
  `temp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title`, `icon`, `descrip`, `temp`) VALUES
(1, 'Scholorships', 'flaticon-school', 'Available', '1589846106'),
(2, 'Membership', 'flaticon-membership', 'available', '1589846666'),
(3, 'Programmes', 'flaticon-public', 'not Avaible', '1589846714');

-- --------------------------------------------------------

--
-- Table structure for table `short-terms`
--

CREATE TABLE `short-terms` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `body` varchar(200) NOT NULL DEFAULT '',
  `price` varchar(200) NOT NULL DEFAULT '',
  `start_time` varchar(20) NOT NULL DEFAULT '',
  `image` varchar(100) NOT NULL DEFAULT '',
  `end_time` varchar(20) NOT NULL DEFAULT '',
  `start_at` date NOT NULL,
  `update_at` date NOT NULL,
  `duration` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `short-terms`
--

INSERT INTO `short-terms` (`id`, `title`, `body`, `price`, `start_time`, `image`, `end_time`, `start_at`, `update_at`, `duration`) VALUES
(109, 'c & c ++', 'If you want to come in programming filed C& C++ is the first step for beginners.', '5000', '09:00', '1594234368c.jpg', '10:00', '2020-07-09', '2020-07-09', '6'),
(110, 'java', 'If you want to come in programming filed Java is the first step for beginners.', '7000', '09:00', '1594235364java.jpeg', '10:00', '2020-07-09', '2020-07-09', '10'),
(111, 'PHP', 'Hypertext Pre Processor', '5000', '11:00', '1594235575php.jpeg', '12:00', '2020-07-09', '2020-07-09', '6'),
(112, 'ASP.Net', 'Active server pages', '3000', '08:00', '1594236049asp.jpg', '09:00', '2020-07-09', '2020-07-09', '6'),
(113, 'MYSQL', 'MYSQL', '2000', '11:00', '1594316438mysql.png', '12:00', '2020-07-09', '2020-07-09', '2');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(5) NOT NULL,
  `content` varchar(500) NOT NULL DEFAULT '',
  `imgname` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `content`, `imgname`) VALUES
(5, 'Any successful career starts with good education, so we impart knowledge that helps you climb the career ladder.', '1590278109banner.png'),
(6, 'Boost up your skills with a new way of learning.	', '1590278126banner2.png'),
(7, '', '1594143137Screenshot from 2020-06-11 16-48-54.png');

-- --------------------------------------------------------

--
-- Table structure for table `toppersLists`
--

CREATE TABLE `toppersLists` (
  `id` int(5) NOT NULL,
  `year` varchar(10) NOT NULL DEFAULT '',
  `image` varchar(200) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `rank` varchar(10) NOT NULL DEFAULT '',
  `percent` varchar(30) NOT NULL DEFAULT '',
  `subject` varchar(30) NOT NULL DEFAULT '',
  `temp` varchar(50) NOT NULL DEFAULT '',
  `createAt` date NOT NULL,
  `updateAt` date NOT NULL,
  `division` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toppersLists`
--

INSERT INTO `toppersLists` (`id`, `year`, `image`, `name`, `rank`, `percent`, `subject`, `temp`, `createAt`, `updateAt`, `division`) VALUES
(3, 'I', '1591813160g6.jpg', 'Peter Adams', '2', '7.5', 'bca', '1591813160', '2020-06-10', '2020-06-11', 'I'),
(4, 'III', '1591813930g5.jpg', 'ALxender Thomas', '3', '7.5', 'b.com', '1591813930', '2020-06-11', '2020-06-11', 'I');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `short-terms`
--
ALTER TABLE `short-terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toppersLists`
--
ALTER TABLE `toppersLists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `short-terms`
--
ALTER TABLE `short-terms`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `toppersLists`
--
ALTER TABLE `toppersLists`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
