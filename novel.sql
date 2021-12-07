-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 06:07 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_username` varchar(25) NOT NULL,
  `admin_record_inserted` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_password`, `admin_username`, `admin_record_inserted`) VALUES
(1, 'sure', 'nishant', 'nishant'),
(2, 'sharmasharma', 'rohit', 'nishant'),
(3, 'rahulrahul', 'rahul', 'rohit'),
(4, 'joshijoshi', 'saumya', 'nishant'),
(5, 'vatsal1234', 'vatsal', 'saumya');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(20) NOT NULL,
  `a_img` varchar(50) NOT NULL,
  `a_email` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `lastmodify_adminname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`a_id`, `a_name`, `a_img`, `a_email`, `description`, `lastmodify_adminname`) VALUES
(1, 'chetan bhagat', 'chetan bhagat.jpg', 'chetanbhagat@gmail.com', 'i m chetan', 'nishant'),
(2, 'amrita pritam', 'amrita pritam.jpg', 'amrita@gmail.com', '', 'saumya'),
(3, 'arundhati roy', 'arundhati roy.jpg', 'arundhati@gmail.com', '	', 'saumya'),
(4, 'jhumpa lahiri', 'jhumpa lahiri.jpg', 'jhumpa@gmail.com', '	', 'saumya'),
(5, 'r k narayan', 'r k narayan.jpg', 'narayan@gmail.com', '	', 'saumya'),
(6, 'rabindranath tagore', 'Rabindranath Tagore.jpg', 'tagore@gmail.com', '	', 'saumya'),
(7, 'ruskin bond', 'ruskin bond.jpg', 'bond@gmail.com', '	', 'saumya'),
(8, 'vikram seth', 'vikram seth.jpg', 'vikram@gmail.com', '	', 'saumya'),
(9, 'kushwant singh', 'Khushwant SingH.jpg', 'ksingh@gmail.com', '	', 'saumya');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_no` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `receivers_name` varchar(255) NOT NULL,
  `receivers_address` text NOT NULL,
  `receivers_phoneno` bigint(20) NOT NULL,
  `buying_date` date NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `grand_total` float NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `confirm_adminname` varchar(255) NOT NULL,
  `deliverydone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bk_bill`
--

CREATE TABLE `bk_bill` (
  `bill_book_id` int(11) NOT NULL,
  `bill_no` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `p_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `b_author` varchar(255) NOT NULL,
  `b_publisher` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `genre` varchar(30) NOT NULL,
  `imbdrating` float NOT NULL,
  `book_img` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `totalavailable_quantity` int(11) NOT NULL,
  `lastmodify_adminname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `b_author`, `b_publisher`, `price`, `genre`, `imbdrating`, `book_img`, `description`, `totalavailable_quantity`, `lastmodify_adminname`) VALUES
(1, 'half girlfriend', 'chetan bhagat', 'chetan', 200, 'love', 9, 'half girlfriend.jpg', 'i m half', 1, 'nishant'),
(2, 'one indian girl', 'chetan bhagat', 'chetan bhagat', 300, 'love', 9, 'one indian girl.jpg', 'one indian girl', 1, 'nishant'),
(3, 'revolution 2020', 'chetan bhagat', 'chetan bhagat', 350, 'adventure', 8, 'revolution 2020.jpg', 'evolution of life', 1, 'saumya'),
(4, 'The Girl in Room 105', 'chetan bhagat', 'chetan bhagat', 400, 'thriller', 8.5, 'The girl in room 105.jpg', 'alone girl', 1, 'saumya'),
(5, 'what young india wants', 'chetan bhagat', 'chetan bhagat', 450, 'current affairs', 8, 'what young india wants.jpg', '	', 1, 'saumya'),
(6, '3 mistakes of my life', 'chetan bhagat', 'chetan bhagat', 350, 'biography', 8, '3 Mistakes of My Life.jpg', '	', 1, 'saumya'),
(7, 'pinjar', 'amrita pritam', 'amrita pritam', 360, 'thriller', 8.5, 'Pinjar.jpg', '	', 1, 'saumya'),
(8, 'the god of small things', 'arundhati roy', 'arundhati roy', 450, 'friction', 9, 'The god of small things.jpg', '	', 1, 'saumya'),
(9, 'the friend', 'jhumpa lahiri', 'jhumpa lahiri', 300, 'relationship', 8, 'The Friend.jpg', '	', 1, 'saumya'),
(10, 'train to pakistan', 'kushwant singh', 'kushwant singh', 350, 'history', 8.5, 'Train to Pakistan.jpg', '	', 1, 'saumya'),
(11, 'indian thought', 'r k narayan', 'r k narayan', 350, 'thoughtness', 8, 'indian Thought.jpg', '	', 1, 'saumya'),
(12, 'waiting for the mahatma', 'r k narayan', 'r k narayan', 450, 'history', 9, 'waiting for the mahatma.jpg', '	', 1, 'saumya'),
(13, 'my boyhood days ', 'rabindranath tagore', 'rabindranath tagore', 500, 'biography', 9, 'my boyhood days.jpg', '	', 1, 'saumya'),
(14, 'ghost trouble', 'ruskin bond', 'ruskin bond', 300, 'thriller', 8, 'ghost trouble.jpg', '	', 1, 'saumya'),
(15, 'the ghost', 'ruskin bond', 'ruskin bond', 320, 'thriller', 8.5, 'the ghost.jpg', '	', 1, 'saumya'),
(16, 'the great train journey', 'ruskin bond', 'ruskin bond', 450, 'adventure', 9, 'the Great train Journey.jpg', '	', 1, 'saumya'),
(17, 'the perfect murder', 'ruskin bond', 'ruskin bond', 300, 'thriller', 8, 'The Perfect Murder.jpg', '	', 1, 'saumya'),
(18, 'the tree lover', 'ruskin bond', 'ruskin bond', 350, 'environment', 9, 'the tree lover.jpg', '	', 1, 'saumya'),
(19, 'upon an old wall dreaming', 'ruskin bond', 'ruskin bond', 450, 'thoughtness', 8, 'upon an old wall dreaming.jpg', '	', 1, 'saumya'),
(20, 'A SUITABLE BOY', 'VIKRAM SETH', 'VIKRAM SETH', 350, 'LIFE', 8.5, 'a Suitable boy.jpg', '	', 1, 'saumya'),
(21, 'THE GOLDEN GATE', 'VIKRAM SETH', 'VIKRAM SETH', 450, 'HISTORY', 9, 'the golden gate.jpg', '	', 1, 'saumya');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(10) NOT NULL,
  `book_id` int(11) NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(10) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_email`, `c_username`, `password`) VALUES
(2, 'sure.nishant@gmail.com', 'nishant', 'suresure');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_no`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `bk_bill`
--
ALTER TABLE `bk_bill`
  ADD PRIMARY KEY (`bill_book_id`),
  ADD KEY `bill_no` (`bill_no`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `c_id` (`c_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bk_bill`
--
ALTER TABLE `bk_bill`
  MODIFY `bill_book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `bk_bill`
--
ALTER TABLE `bk_bill`
  ADD CONSTRAINT `bk_bill_ibfk_2` FOREIGN KEY (`bill_no`) REFERENCES `bill` (`bill_no`),
  ADD CONSTRAINT `bk_bill_ibfk_3` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
