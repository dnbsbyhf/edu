-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 03 月 11 日 15:44
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
  `title` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=69 ;

--
-- 转存表中的数据 `tab`
--

INSERT INTO `tab` (`id`, `key`, `value`, `title`) VALUES
(1, '#', '1', '第一册'),
(2, '#', '2', '第二册'),
(3, '#', '3', '第三册'),
(4, '#', 'a', '拓展课程'),
(5, '1', '1', '走进生命科学'),
(6, '1', '2', '生命的物质基础'),
(7, '1', '3', '生命的结构基础'),
(8, '1', '4', '生命的物质变化和能量转换'),
(9, '2', '1', '生物体对信息的传递和调节'),
(10, '2', '2', '遗传信息的传递和表达'),
(11, '2', '3', '细胞的分裂和分化'),
(12, '3', '1', '遗传与变异'),
(14, '3', '2', '生物进化'),
(15, '3', '3', '生物多样性'),
(16, 'a', '1', '微生物'),
(17, 'a', '2', '人体内环境与自稳态'),
(18, 'a', '3', '遗传'),
(19, 'a', '4', '生物工程'),
(20, '1-1', '1', '走进生命科学的世纪'),
(21, '1-1', '2', '走进生命科学实验室'),
(22, '1-2', '1', '生物体中的无机化合物'),
(23, '1-2', '2', '生物体中的有机化合物'),
(24, '1-3', '1', '细胞膜'),
(25, '1-3', '2', '细胞核和细胞器'),
(26, '1-3', '3', '非细胞形态的生物——病毒'),
(27, '1-4', '1', '生物体内的化学反应'),
(28, '1-4', '2', '光合作用'),
(29, '1-4', '3', '细胞呼吸'),
(30, '1-4', '4', '生物体内营养物质的转变'),
(31, '2-1', '1', '动物体对外界信息的获取'),
(32, '2-1', '2', '神经系统中信息的传递和调节'),
(33, '2-1', '3', '内分泌系统中信息的传递和调节'),
(34, '2-1', '4', '动物体的细胞识别和免疫'),
(35, '2-1', '5', '植物生长发育的调节'),
(36, '2-2', '1', '遗传信息'),
(37, '2-2', '2', 'DNA复制和蛋白质合成'),
(38, '2-2', '3', '基因工程与转基因生物'),
(39, '2-3', '1', '生殖和生命的延续'),
(40, '2-3', '2', '有丝分裂'),
(41, '2-3', '3', '减数分裂'),
(42, '2-3', '4', '细胞分化和植物细胞的全能性'),
(43, '2-3', '5', '克隆技术'),
(44, '3-1', '1', '遗传规律'),
(45, '3-1', '2', '伴性遗传'),
(46, '3-1', '3', '变异'),
(47, '3-1', '4', '人类遗传病和遗产病的预防'),
(48, '3-2', '1', '生物的进化'),
(49, '3-2', '2', '生物进化理论'),
(50, '3-3', '1', '生物多样性及其价值'),
(51, '3-3', '2', '人类活动对生物多样性的影响'),
(52, '3-3', '3', '生物多样性保护与可持续发展'),
(53, 'a-1', '1', '微生物的探究历程'),
(54, 'a-1', '2', '显微镜下的微生物'),
(55, 'a-1', '3', '微生物的营养'),
(56, 'a-1', '4', '微生物传染病的传播和预防'),
(57, 'a-2', '1', '人体内环境的自稳态'),
(58, 'a-2', '2', '水和电解质的平衡及其调节'),
(59, 'a-2', '3', '人体的体温及其调节'),
(60, 'a-2', '4', '血糖的平衡及其调节'),
(61, 'a-2', '5', '血脂代谢及其调节'),
(62, 'a-2', '6', '血压及其调节'),
(63, 'a-3', '1', '基因连锁和交换定律'),
(64, 'a-3', '2', '孟德尔遗传定律的扩展'),
(66, 'a-4', '1', '生物工程概述'),
(67, 'a-4', '2', '细胞工程'),
(68, 'a-4', '3', '酶工程');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `video`
--

INSERT INTO `video` (`id`, `title`, `intro`, `src`, `type`, `grade`, `premission`, `views`, `date`, `uid`, `palytime`, `text`, `chapter`, `section`, `uname`) VALUES
(23, 'test', '111', 'http://localhost/ba/edu/uploads/test11.mp4', 1, 1, 0, 0, '2014-03-11', 2, 0, NULL, 1, 1, 'test');
