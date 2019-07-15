-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2018 at 07:14 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ehub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `astatus` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `uname`, `password`, `phone`, `email`, `address`, `category`, `astatus`) VALUES
(3, 'zakir', 'zakir', '4969', '01830490518', 'zakir4969@gmail.com', 'yyy', 'Superadmin', 'Published'),
(4, 'amir', 'amir', '5454', '01745277979', 'amir5454@gmail.com', ' ffff', 'Admin', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `bname` varchar(255) NOT NULL,
  `bstatus` varchar(255) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`bid`, `bname`, `bstatus`) VALUES
(1, 'Samsung', 'Published'),
(2, 'Dell', 'Published'),
(3, 'HP', 'Published'),
(4, 'Acer', 'Published'),
(5, 'Compaq', 'Published'),
(6, 'A4tech', 'Published'),
(7, 'Logitech', 'Published'),
(8, 'Mercury', 'Published'),
(9, 'Apple', 'Published'),
(10, 'Nikon', 'Published'),
(11, 'Canon', 'Published'),
(12, 'Other', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `cstatus` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `cstatus`) VALUES
(1, 'Desktop', 'Published'),
(2, 'Laptop', 'Published'),
(3, 'Camera', 'Published'),
(4, 'Notebook', 'Published'),
(5, 'Mobile', 'Published'),
(6, 'Pendrive', 'Published'),
(7, 'Hard Drive', 'Published'),
(8, 'Accessories', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `mname` varchar(255) NOT NULL,
  `mlink` varchar(255) NOT NULL,
  `mcategory` varchar(255) NOT NULL,
  `mstatus` varchar(255) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`mid`, `mname`, `mlink`, `mcategory`, `mstatus`) VALUES
(1, 'Home', 'adminpanel.php', 'Superadmin+admin', 'Published'),
(2, 'Menu Management', 'menu_manage.php', 'Superadmin', 'Published'),
(3, 'Admin Management', 'admin_manage.php', 'Superadmin', 'Published'),
(4, 'Category Management', 'cat_manage.php', 'Superadmin+admin', 'Published'),
(5, 'Product Management', 'pro_manage.php', 'Superadmin+admin', 'Published'),
(6, 'My Account', 'my_account.php', 'Superadmin+admin', 'Published'),
(7, 'Change Password', 'change_pass.php', 'Superadmin+admin', 'Published'),
(8, 'Brand Management', 'brand_manage.php', 'Superadmin', 'Published'),
(9, 'Logout', 'Logout.php', 'Superadmin+admin', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `pcat` varchar(255) NOT NULL,
  `specialcat` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `pstatus` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `price`, `pcat`, `specialcat`, `stock`, `brand`, `description`, `pstatus`, `image`) VALUES
(1, 'Dell PC', 35000.00, 'Desktop', 'Latest Product', 'Available', 'Dell', 'Core i3 Processor, Intel Mothorboard, 500 GB Transend Hard Drive, 19 inch LED Monitor', 'Published', 'product-img2.jpg'),
(2, 'Dell 5421', 42000.00, 'Laptop', 'Featured Product', 'Available', 'Dell', 'Core i3 Processor, Intel Mothorboard, 500 GB Transend Hard Drive, 15 inch LED Monitor, Brand Dell, Made in China', 'Published', '1_2.jpg'),
(3, 'Multimedia KeyBord', 300.00, 'Desktop', 'Best Seller', 'Available', 'Mercury', '     sdfsd', 'Published', '4.jpg'),
(4, 'Multimedia KeyBord', 550.00, 'Desktop', 'Featured Product', 'Available', 'Mercury', '     dfsdfsd', 'Published', '3.jpg'),
(5, 'Apple Laptop', 65000.00, 'Laptop', 'Latest Product', 'Available', 'Apple', 'Core i3 Processor, Intel Mothorboard, 500 GB Transend Hard Drive, 15 inch LED Monitor, Brand Dell, Made in Japan', 'Published', 'aple.png'),
(6, 'Acer Aspire G9', 35000.00, 'Laptop', 'Latest Product', 'Available', 'Acer', 'Core i3 Processor, Intel Mothorboard, 500 GB Transend Hard Drive, 15 inch LED Monitor, Brand Dell, Made in China', 'Published', 'Acer-Aspire.png'),
(7, 'Desktop Computer', 34500.00, 'Desktop', 'Best Seller', 'Available', 'HP', 'Good', 'Published', 'MyCompulkter.png'),
(8, 'Dell 5420', 40000.00, 'Laptop', 'Featured Product', 'Available', 'Samsung', 'Core i3 Processor, Intel Mothorboard, 500 GB Transend Hard Drive, 15 inch LED Monitor, Brand Dell, Made in China', 'Published', '1_2.jpg'),
(9, 'Mouse logitech', 300.00, 'Desktop', 'Latest Product', 'Available', 'Samsung', '   1 year warenty', 'Published', '9.jpg'),
(10, 'KeyBord', 600.00, 'Desktop', 'Latest Product', 'Unavailable', 'A4tech', '1 Year Guaranty ', 'Published', '5.jpg'),
(11, 'Dell 5430', 41000.00, 'Laptop', 'Latest Product', 'Available', 'Dell', 'Core i3 Processor, Intel Mothorboard, 500 GB Transend Hard Drive, 15 inch LED Monitor, Brand Dell, Made in China', 'Published', '2_2.jpg'),
(12, 'Wireless Mouse', 800.00, 'Desktop', 'Latest Product', 'Available', 'Logitech', '   ', 'Published', '8.jpg'),
(13, 'Mouse', 350.00, 'Accessories', 'Best Seller', 'Available', 'Logitech', '', 'Published', '6.jpg'),
(14, 'Graphics Computer', 37500.00, 'Desktop', 'Featured Product', 'Available', 'Apple', ' Core i3 Processor, Intel Mothorboard, 500 GB Transend Hard Drive, 15 inch LED Monitor, Apple Dell, Made in China', 'Published', '3.png'),
(15, 'Nikon D90', 45000.00, 'Camera', 'Latest Product', 'Available', 'Nikon', 'Camera Type:DSLR, Sensor Resolution:12.3 Megapixels LCD Size:3"Media Type:Secure Digital, SDHC, Weight:21.92 oz.\r\n    Lens Mount:Nikon F', 'Published', 'camera_1.jpg'),
(16, 'Canon DS90', 52500.00, 'Camera', 'Featured Product', 'Available', 'Canon', 'Camera Type:DSLR, Sensor Resolution:12.3 Megapixels LCD Size:3"Media Type:Secure Digital, SDHC, Weight:21.92 oz. Lens Mount:Nikon F ', 'Published', 'image 2.jpg'),
(17, 'Apple Notebook', 89000.00, 'Notebook', 'Latest Product', 'Available', 'Apple', 'Crystal Clear Hard Plastic Shell Case Cover for Apple for MacBook AIR 13" 13.3" Inch Laptop Notebook - Baby Pink', 'Published', 'apple_notebook.jpg'),
(18, 'Adata Pendrive', 950.00, 'Accessories', 'Best Seller', 'Available', 'Other', 'Adata Pen drive, Size: 16 GB, USB 3, Flash, Life time Warranty  ', 'Published', 'pendrive.jpg'),
(19, 'Samsung Hard Drive', 5200.00, 'Accessories', 'Best Seller', 'Available', 'Samsung', 'Samsung HD300LD, SP2514N, SP2504C Hard Disk Drives, The 1TB WD Velociraptor SATA 6Gb/s Internal Hard Drive comes with a 3.5-inch mounting ', 'Published', 'samsung-hd300ld-iso.jpg'),
(20, 'RAM', 2500.00, 'Accessories', 'Best Seller', 'Available', 'Other', 'RAM 2 GB, DDR 2, 1 Year Warranty, Made In China ', 'Published', 'ram.jpg'),
(21, 'Samsung Galaxy S3', 35000.00, 'Mobile', 'Featured Product', 'Available', 'Samsung', 'The latest Android 4.4 KitKat update is here -- and the much-loved Samsung Galaxy S3 is finally updating to Android 4.3 Jelly Bean. ', 'Published', 'mobile.jpg'),
(22, 'Samsung Galaxy I8730', 23000.00, 'Mobile', 'Best Seller', 'Available', 'Samsung', 'LTE 4G, Display Technology, FHD sAMOLED, Colour Depth 16M, Size 5",Resolution   1920 x 1080, Memory 16GB (User memory approximately 9GB)**', 'Published', 'samsung-galaxy-express-gray-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `firstname` varchar(25) NOT NULL,
  `lasttname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_pass`, `user_email`) VALUES
(1, 'admin', '123', 'jakir@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
