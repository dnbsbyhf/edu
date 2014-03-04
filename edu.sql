-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 03 月 02 日 13:42
-- 服务器版本: 5.1.44
-- PHP 版本: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `edu`
--

-- --------------------------------------------------------

--
-- 表的结构 `tab`
--

CREATE TABLE IF NOT EXISTS `tab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(10) NOT NULL,
  `value` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=69 ;

--
-- 转存表中的数据 `tab`
--

INSERT INTO `tab` (`id`, `key`, `value`) VALUES
(1, '#', '1'),
(2, '#', '2'),
(3, '#', '3'),
(4, '#', 'a'),
(5, '1', '1'),
(6, '1', '2'),
(7, '1', '3'),
(8, '1', '4'),
(9, '2', '1'),
(10, '2', '2'),
(11, '2', '3'),
(12, '3', '1'),
(14, '3', '2'),
(15, '3', '3'),
(16, 'a', '1'),
(17, 'a', '2'),
(18, 'a', '3'),
(19, 'a', '4'),
(20, '1-1', '1'),
(21, '1-1', '2'),
(22, '1-2', '1'),
(23, '1-2', '2'),
(24, '1-3', '1'),
(25, '1-3', '2'),
(26, '1-3', '3'),
(27, '1-4', '1'),
(28, '1-4', '2'),
(29, '1-4', '3'),
(30, '1-4', '4'),
(31, '2-1', '1'),
(32, '2-1', '2'),
(33, '2-1', '3'),
(34, '2-1', '4'),
(35, '2-1', '5'),
(36, '2-2', '1'),
(37, '2-2', '2'),
(38, '2-2', '3'),
(39, '2-3', '1'),
(40, '2-3', '2'),
(41, '2-3', '3'),
(42, '2-3', '4'),
(43, '2-3', '5'),
(44, '3-1', '1'),
(45, '3-1', '2'),
(46, '3-1', '3'),
(47, '3-1', '4'),
(48, '3-2', '1'),
(49, '3-2', '2'),
(50, '3-3', '1'),
(51, '3-3', '2'),
(52, '3-3', '3'),
(53, 'a-1', '1'),
(54, 'a-1', '2'),
(55, 'a-1', '3'),
(56, 'a-1', '4'),
(57, 'a-2', '1'),
(58, 'a-2', '2'),
(59, 'a-2', '3'),
(60, 'a-2', '4'),
(61, 'a-2', '5'),
(62, 'a-2', '6'),
(63, 'a-3', '1'),
(64, 'a-3', '2'),
(66, 'a-4', '1'),
(67, 'a-4', '2'),
(68, 'a-4', '3');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `own` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `uname`, `own`) VALUES
(2, '123', '111', 'test', 'test');

-- --------------------------------------------------------

--
-- 表的结构 `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `intro` varchar(200) NOT NULL,
  `src` varchar(100) NOT NULL,
  `type` int(2) NOT NULL DEFAULT '1',
  `grade` int(2) NOT NULL,
  `premission` int(1) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `uid` int(11) NOT NULL,
  `palytime` int(10) NOT NULL DEFAULT '0',
  `text` varchar(200) DEFAULT NULL,
  `chapter` int(2) NOT NULL,
  `section` int(2) NOT NULL,
  `uname` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `video`
--

INSERT INTO `video` (`id`, `title`, `intro`, `src`, `type`, `grade`, `premission`, `views`, `date`, `uid`, `palytime`, `text`, `chapter`, `section`, `uname`) VALUES
(1, '化合作用', '阳光，二氧化碳', 'dsfa', 1, 1, 0, 21, '2014-02-11', 2, 12, NULL, 2, 1, '羊羊羊'),
(4, '水', '氢气和氧气', '的说法', 2, 1, 1, 12, '2014-02-26', 2, 21, NULL, 2, 2, '羊羊羊'),
(20, '李晓', 'test', 'http://localhost/ba/edu/uploads/test2.mp4', 1, 1, 0, 0, '2014-03-02', 2, 0, NULL, 1, 1, 'test'),
(21, 'test', '1111', 'http://localhost/ba/edu/uploads/test3.flv', 1, 1, 0, 0, '2014-03-02', 2, 0, NULL, 1, 1, 'test'),
(19, '完整演示', '哈哈', 'http://localhost/ba/edu/uploads/test1.mp4', 1, 1, 0, 0, '2014-03-02', 2, 0, NULL, 4, 1, 'test');
