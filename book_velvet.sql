-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 04:31 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_velvet`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_stock` (IN `quantity` INT, IN `isbn` VARCHAR(20))  NO SQL
UPDATE book SET no_in_stock=no_in_stock-quantity WHERE book.ISBN=isbn$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `au_id` int(11) NOT NULL,
  `au_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`au_id`, `au_name`) VALUES
(1, 'Tina Fey'),
(2, 'Kurt Vonnegut'),
(3, 'Steve Martin'),
(4, 'Twinkle Khanna'),
(5, 'Spike Milligan'),
(6, 'Evelyn Waugh'),
(7, 'Manu Joseph'),
(8, 'Betty MacDonald'),
(9, 'Jerome K Jerome'),
(10, 'Leo Tolstoy'),
(11, 'Ian McEwan'),
(12, 'Toni Morrison'),
(13, 'Aldous Huxley'),
(14, 'Joseph Conrad'),
(15, 'Ralph Ellison'),
(16, 'Jane Austen'),
(17, 'J R R Tolkien'),
(18, 'S E Hinton'),
(20, 'S E Hinton'),
(21, 'Sara Green'),
(22, 'Octania Butler'),
(23, 'John Scalgi'),
(24, 'Kim Stanley Robinson'),
(25, 'Micheal Mommay'),
(26, 'Catheryne M Valente'),
(27, 'N K Jemisin'),
(28, 'Suzanne Collins'),
(29, 'Stephen King'),
(30, 'Naomi Novik'),
(31, 'Nnedi Okorafor'),
(32, 'Arthur Conan Doyle'),
(33, 'Luara Marshall'),
(34, 'Dan Brown'),
(35, 'David Baldacci'),
(36, 'Dan Brown'),
(37, 'Helen Fitz Gerald'),
(38, 'Anthony Cepella'),
(39, 'Jojo Moyes'),
(40, 'Julie Garwood'),
(41, 'Stephenie Meyer'),
(42, 'Jane Austen'),
(43, 'Nicholas Sparks'),
(44, 'Cecelia Thern'),
(45, 'Diana Gabaldon'),
(46, 'John Green'),
(47, 'Dan Brown'),
(48, 'Lucy Christopher'),
(49, 'Ravinder Singh'),
(50, 'Paulo Coelho');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ISBN` varchar(20) NOT NULL,
  `book_title` varchar(30) NOT NULL,
  `book_price` float NOT NULL,
  `no_in_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ISBN`, `book_title`, `book_price`, `no_in_stock`) VALUES
('0-06-250217-4', 'The Alchemist', 500, 15),
('0-224-06252-2', 'Atonment', 300, 12),
('0-316-16017-2', 'Twilight', 300, 10),
('0-385-15059-8', 'Kindered', 780, 13),
('0-399-12304-0', 'Cruel shoes', 400, 13),
('0-446-52080-2', 'The Notebook', 206, 13),
('0-525-47881-7', 'The fault in our stars', 350, 13),
('0-71-815783-4', 'Me before you', 300, 13),
('0-7653-4161-1', 'Three Men In A Boat', 669, 12),
('0385302304', 'Outlander', 237, 13),
('1-56512-499-5', 'Water For Elephants', 470, 13),
('1-58060-120-0', 'Beloved', 272, 11),
('978-0-06-091428-8', 'The Egg And I', 800, 11),
('978-0-316-26234-7', 'Newyork 2140', 650, 6),
('978-0-356-50819-1', 'The fifth season', 1030, 13),
('978-0-385-12168-2', 'The Stand', 450, 2),
('978-0-385-50422-5', 'The Lost Symbol', 500, 15),
('978-0-385-53785-8', 'Inferno', 230, 12),
('978-0-395-47670-2-8', 'The Hobbit', 208, 13),
('978-0-439-02352-8', 'The Hunger Games', 1698, 10),
('978-0-593-0730075-4', 'Origin', 625, 13),
('978-0-679-601-39-5', 'Invisible man', 145, 9),
('978-0-7653-7586-5', 'Lock in', 200, 7),
('978-0143418764', 'I Too Had A Love Story', 150, 15),
('978-0804179034', 'Uprooted', 700, 13),
('978-1-59463-366', 'The girl before', 389, 12),
('978-1-84749-059-9', 'Anna Karenina', 239, 13),
('9780007198894', 'If you could see me now', 218, 13),
('978006085024', 'Brave new world', 289, 11),
('9780141195124', 'Scoop', 940, 12),
('9780143424468', 'Mrs Funnybones', 220, 13),
('9780241971376', 'Puckoon', 358, 12),
('9780748129775', 'Bossypants', 352, 13),
('9780756406691', 'Who fears death', 413, 6),
('9780788769634', 'The Cry', 499, 9),
('9780816151608', 'The Bride', 287, 13),
('9781455589487', 'Memory Man', 224, 13),
('9781478948513', 'Friend Request', 574, 13),
('9781681689166', 'Space Opera', 700, 12),
('9781848543126', 'Serious Man', 463, 13),
('9781906427139', 'The Stolen', 600, 13),
('9783036991276', 'A Study in Scarlet', 185, 13),
('9788071453611', 'Cats Cradle', 400, 12),
('97880733514272', 'Pride & Prejudice', 256, 13),
('9788804683162', 'Heart of darkness', 341, 13),
('9788827521441', 'Persuasion', 285, 9);

-- --------------------------------------------------------

--
-- Table structure for table `bookau`
--

CREATE TABLE `bookau` (
  `ISBN` varchar(20) NOT NULL,
  `au_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookau`
--

INSERT INTO `bookau` (`ISBN`, `au_id`) VALUES
('0-06-250217-4', 50),
('0-224-06252-2', 11),
('0-316-16017-2', 41),
('0-385-15059-8', 22),
('0-399-12304-0', 3),
('0-446-52080-2', 43),
('0-525-47881-7', 46),
('0-71-815783-4', 39),
('0-7653-4161-1', 9),
('0385302304', 45),
('1-56512-499-5', 21),
('1-58060-120-0', 12),
('978-0-06-091428-8', 8),
('978-0-316-26234-7', 24),
('978-0-356-50819-1', 27),
('978-0-385-12168-2', 29),
('978-0-385-50422-5', 47),
('978-0-385-53785-8', 34),
('978-0-395-47670-2-8', 17),
('978-0-439-02352-8', 28),
('978-0-593-0730075-4', 36),
('978-0-679-601-39-5', 15),
('978-0-7653-7586-5', 23),
('978-0143418764', 49),
('978-0804179034', 30),
('978-1-59463-366', 38),
('978-1-84749-059-9', 10),
('9780007198894', 44),
('978006085024', 13),
('9780141195124', 6),
('9780143424468', 4),
('9780241971376', 5),
('9780748129775', 1),
('9780756406691', 31),
('9780788769634', 37),
('9780816151608', 40),
('9781455589487', 35),
('9781478948513', 33),
('9781681689166', 26),
('9781848543126', 7),
('9781906427139', 48),
('9783036991276', 32),
('9788071453611', 2),
('97880733514272', 16),
('9788804683162', 14),
('9788827521441', 16);

-- --------------------------------------------------------

--
-- Table structure for table `bookcat`
--

CREATE TABLE `bookcat` (
  `ISBN` varchar(20) NOT NULL,
  `cat_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookcat`
--

INSERT INTO `bookcat` (`ISBN`, `cat_code`) VALUES
('0-06-250217-4', 2),
('0-224-06252-2', 2),
('0-316-16017-2', 3),
('0-385-15059-8', 4),
('0-399-12304-0', 1),
('0-446-52080-2', 3),
('0-525-47881-7', 3),
('0-71-815783-4', 3),
('0-7653-4161-1', 1),
('0385302304', 3),
('1-58060-120-0', 2),
('978-0-06-091428-8', 1),
('978-0-316-26234-7', 4),
('978-0-356-50819-1', 4),
('978-0-385-12168-2', 4),
('978-0-385-50422-5', 5),
('978-0-385-53785-8', 5),
('978-0-395-47670-2-8', 2),
('978-0-439-02352-8', 4),
('978-0-593-0730075-4', 5),
('978-0-679-601-39-5', 2),
('978-0-7653-7586-5', 4),
('978-0143418764', 3),
('978-0804179034', 4),
('978-1-59463-366', 5),
('978-1-84749-059-9', 2),
('9780007198894', 3),
('978006085024', 2),
('9780141195124', 1),
('9780143424468', 1),
('9780241971376', 1),
('9780748129775', 1),
('9780756406691', 4),
('9780788769634', 5),
('9780816151608', 3),
('9781455589487', 5),
('9781478948513', 5),
('9781681689166', 4),
('9781848543126', 1),
('9781906427139', 5),
('9783036991276', 5),
('9788071453611', 1),
('97880733514272', 2),
('9788804683162', 2),
('9788827521441', 3);

-- --------------------------------------------------------

--
-- Table structure for table `bookpub`
--

CREATE TABLE `bookpub` (
  `ISBN` varchar(20) NOT NULL,
  `pub_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookpub`
--

INSERT INTO `bookpub` (`ISBN`, `pub_code`) VALUES
('0-06-250217-4', 48),
('0-224-06252-2', 11),
('0-316-16017-2', 39),
('0-385-15059-8', 20),
('0-399-12304-0', 9),
('0-446-52080-2', 41),
('0-525-47881-7', 44),
('0-71-815783-4', 37),
('0-7653-4161-1', 6),
('0385302304', 43),
('1-56512-499-5', 33),
('1-58060-120-0', 12),
('978-0-06-091428-8', 5),
('978-0-316-26234-7', 29),
('978-0-356-50819-1', 29),
('978-0-385-12168-2', 31),
('978-0-385-50422-5', 45),
('978-0-385-53785-8', 34),
('978-0-395-47670-2-8', 17),
('978-0-439-02352-8', 30),
('978-0-593-0730075-4', 22),
('978-0-679-601-39-5', 15),
('978-0-7653-7586-5', 35),
('978-0143418764', 47),
('978-0804179034', 25),
('978-1-59463-366', 24),
('978-1-84749-059-9', 10),
('9780007198894', 42),
('978006085024', 13),
('9780141195124', 3),
('9780143424468', 1),
('9780241971376', 2),
('9780748129775', 7),
('9780756406691', 26),
('9780788769634', 23),
('9780816151608', 38),
('9781455589487', 19),
('9781478948513', 21),
('9781681689166', 28),
('9781848543126', 4),
('9781906427139', 46),
('9783036991276', 27),
('9788071453611', 8),
('97880733514272', 16),
('9788804683162', 14),
('9788827521441', 40);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_code` int(11) NOT NULL,
  `cat_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_code`, `cat_name`) VALUES
(1, 'Comedy'),
(2, 'Literature'),
(3, 'Romance'),
(4, 'Sci-fi'),
(5, 'Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `ISBN` varchar(20) NOT NULL DEFAULT '',
  `quantity` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`username`, `ISBN`, `quantity`) VALUES
('Divya Joshi', '978-0-06-091428-8', 2),
('Divya Joshi', '978-0-316-26234-7', 1),
('Divya Joshi', '9780241971376', 1),
('Divya Joshi', '9781681689166', 1),
('Madhuri Reddy', '978-0-316-26234-7', 1),
('Madhuri Reddy', '978-0-385-12168-2', 1),
('Madhuri Reddy', '978-0-385-53785-8', 1),
('Madhuri Reddy', '978006085024', 2),
('Madhuri Reddy', '9780788769634', 1),
('Madhuri Reddy', '9788071453611', 1),
('Madhuri Reddy', '9788827521441', 3),
('Srivennala K', '0-7653-4161-1', 1),
('Srivennala K', '978-0-385-12168-2', 1),
('Srivennala K', '978-0-385-50422-5', 1),
('Srivennala K', '978-0-679-601-39-5', 4),
('Srivennala K', '978-1-59463-366', 1),
('Srivennala K', '9780141195124', 1),
('Srivennala K', '9780756406691', 7),
('Srivennala K', '9788827521441', 1);

--
-- Triggers `orders`
--
DELIMITER $$
CREATE TRIGGER `delete_stock` BEFORE DELETE ON `orders` FOR EACH ROW UPDATE book SET no_in_stock=no_in_stock+old.quantity WHERE ISBN=old.ISBN
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stock` BEFORE INSERT ON `orders` FOR EACH ROW CALL update_stock(new.quantity,new.ISBN)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `pub_code` int(11) NOT NULL,
  `pub_name` varchar(25) NOT NULL,
  `pub_add` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`pub_code`, `pub_name`, `pub_add`) VALUES
(1, 'Penguin', 'India'),
(2, 'Anthony Blond', 'UK'),
(3, 'Chapman & Hall', 'UK'),
(4, 'J B Lippineoth', 'US'),
(5, 'J B Lippineoth', 'US'),
(6, 'J W Aarronsmith', 'UK'),
(7, 'Little,Brown & Company', 'NewYork'),
(8, 'Henry Holt & Company', 'American Physical Society'),
(9, 'G P Putnamus Sons', 'NewYork'),
(10, 'The Russian Messenger', 'Russia'),
(11, 'Jonathan Cape', 'UK'),
(12, 'Alfred A Knopf', 'US'),
(13, 'Chatto & Windus', 'UK'),
(14, 'Black woods Magazine', 'UK'),
(15, 'Random House', 'US'),
(16, 'T Egerton, White hall', 'UK'),
(17, 'Houghton Mifflin', 'France'),
(18, 'Viking Press, Dell', 'US'),
(19, 'Grand Central ', 'India'),
(20, 'Double Day', 'US & UK'),
(21, 'Grand Central', 'UK'),
(22, 'Double day', 'US'),
(23, 'Riverhead books', 'US'),
(24, 'Riverhead books', 'US'),
(25, 'Del Rey', 'US'),
(26, 'DAW, Penguin', 'UK'),
(27, 'Ward Lock & Co', 'UK'),
(28, 'Pyramid books', 'France'),
(29, 'Orbit', 'Germany'),
(30, 'Scholastic Press', 'US'),
(31, 'Double Day', 'US'),
(32, 'Viking Press,Dell', 'US'),
(33, 'Workmen', 'US'),
(34, 'Double Day', 'US'),
(35, 'Tor Books', 'US'),
(36, 'Workmen', 'US'),
(37, 'Michael Joseph', 'UK'),
(38, 'Michel joseph', 'UK'),
(39, 'Little, Brown and co', 'US'),
(40, 'John Murray', 'UK'),
(41, 'Warner books', 'UK'),
(42, 'Harper Collins', 'US'),
(43, 'Delacorte books', 'France'),
(44, 'Dutton books', 'US'),
(45, 'Transworld', 'UK'),
(46, 'Chicken House', 'UK'),
(47, 'Srishti ', 'Penguin India'),
(48, 'HarperTorch', 'Brazil');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `password`, `email`, `phone`) VALUES
('Divya Joshi', 'password', 'divya@gmail.com', 7789942722),
('Greeshma K', '123456', 'greeshma@gmail.com', 8955562411),
('Madhuri Reddy', 'abcd', 'madhuri@gmail.com', 9876547845),
('Rajatha C H', '100298', 'rajatha@gmail.com', 8567412398),
('Srivennala K', 'password', 'srivennala@gmail.com', 8554123985);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`au_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indexes for table `bookau`
--
ALTER TABLE `bookau`
  ADD PRIMARY KEY (`ISBN`,`au_id`),
  ADD KEY `au_id` (`au_id`);

--
-- Indexes for table `bookcat`
--
ALTER TABLE `bookcat`
  ADD PRIMARY KEY (`ISBN`,`cat_code`),
  ADD KEY `cat_code` (`cat_code`);

--
-- Indexes for table `bookpub`
--
ALTER TABLE `bookpub`
  ADD PRIMARY KEY (`ISBN`,`pub_code`),
  ADD KEY `ISBN` (`ISBN`),
  ADD KEY `pub_code` (`pub_code`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_code`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`username`,`ISBN`),
  ADD KEY `ISBN` (`ISBN`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`pub_code`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `au_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookau`
--
ALTER TABLE `bookau`
  ADD CONSTRAINT `bookau_ibfk_1` FOREIGN KEY (`ISBN`) REFERENCES `book` (`ISBN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookau_ibfk_2` FOREIGN KEY (`au_id`) REFERENCES `author` (`au_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bookcat`
--
ALTER TABLE `bookcat`
  ADD CONSTRAINT `bookcat_ibfk_1` FOREIGN KEY (`ISBN`) REFERENCES `book` (`ISBN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookcat_ibfk_2` FOREIGN KEY (`cat_code`) REFERENCES `category` (`cat_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bookpub`
--
ALTER TABLE `bookpub`
  ADD CONSTRAINT `bookpub_ibfk_1` FOREIGN KEY (`ISBN`) REFERENCES `book` (`ISBN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookpub_ibfk_2` FOREIGN KEY (`pub_code`) REFERENCES `publisher` (`pub_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`username`) REFERENCES `register` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`ISBN`) REFERENCES `book` (`ISBN`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
