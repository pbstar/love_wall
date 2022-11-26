-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2022-11-26 13:29:53
-- 服务器版本： 5.5.62-log
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbq`
--

-- --------------------------------------------------------

--
-- 表的结构 `qiang`
--

CREATE TABLE IF NOT EXISTS `qiang` (
  `id` int(12) NOT NULL,
  `name1` varchar(50) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `btime` int(12) NOT NULL,
  `tel` int(15) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `qiang`
--

INSERT INTO `qiang` (`id`, `name1`, `name2`, `content`, `btime`, `tel`, `photo`) VALUES
(44, '测试被表白人', '开发者', '测试内容', 1669440303, 1234567890, '202211261325031logo.png');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(1, '11111', '111111'),
(2, 'admin', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qiang`
--
ALTER TABLE `qiang`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qiang`
--
ALTER TABLE `qiang`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
