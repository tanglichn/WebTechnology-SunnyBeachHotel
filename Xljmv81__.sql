-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2018-03-16 14:10:20
-- 服务器版本： 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Xljmv81__`
--

-- --------------------------------------------------------

--
-- 表的结构 `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(100) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `guest_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `guest`
--

INSERT INTO `guest` (`guest_id`, `email`, `password`, `guest_name`) VALUES
(1, 'abc@qq.com', '1', 'jack'),
(2, 'bbc@qq.com', '2', 'mike'),
(3, 'cbc@qq.com', '3', 'lee'),
(4, 'dbc@qq.com', '4', 'lucy'),
(5, 'ebc@qq.com', '5', 'tony'),
(6, 'fbc@qq.com', '6', 'jay');

-- --------------------------------------------------------

--
-- 表的结构 `manager`
--

CREATE TABLE `manager` (
  `manager_id` int(100) NOT NULL,
  `manager_password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `manager`
--

INSERT INTO `manager` (`manager_id`, `manager_password`) VALUES
(666, 666);

-- --------------------------------------------------------

--
-- 表的结构 `reservation`
--

CREATE TABLE `reservation` (
  `order_id` int(100) UNSIGNED NOT NULL,
  `room_id` int(100) NOT NULL,
  `guest_id` int(100) NOT NULL,
  `guest_name` varchar(100) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `reservation`
--

INSERT INTO `reservation` (`order_id`, `room_id`, `guest_id`, `guest_name`, `check_in_date`, `check_out_date`) VALUES
(1, 1, 1, 'jack', '2018-03-16', '2018-03-23'),
(2, 2, 2, 'mike', '2018-04-06', '2018-04-13'),
(3, 3, 3, 'lee', '2018-04-27', '2018-05-04'),
(4, 4, 4, 'lucy', '2018-05-18', '2018-05-25'),
(5, 5, 5, 'lucy', '2018-05-18', '2018-05-25'),
(6, 6, 6, 'jay', '2018-06-08', '2018-06-15');

-- --------------------------------------------------------

--
-- 表的结构 `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(100) UNSIGNED NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `price` decimal(65,0) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_type`, `price`, `status`) VALUES
(1, 'standard', '388', 'unavailable'),
(2, 'single', '188', 'unavailable'),
(3, 'standard', '388', 'unavailable'),
(4, 'standard', '388', 'unavailable'),
(5, 'single', '188', 'unavailable'),
(6, 'standard', '388', 'unavailable'),
(7, 'single', '188', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用表AUTO_INCREMENT `reservation`
--
ALTER TABLE `reservation`
  MODIFY `order_id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用表AUTO_INCREMENT `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
