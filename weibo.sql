-- phpMyAdmin SQL Dump
-- version 4.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2014-11-23 15:59:43
-- 服务器版本： 5.5.37-log
-- PHP Version: 5.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `weibo`
--

-- --------------------------------------------------------

--
-- 表的结构 `weibo_comment`
--

CREATE TABLE IF NOT EXISTS `weibo_comment` (
`id` int(10) unsigned NOT NULL COMMENT '评论的ID',
  `content` char(255) NOT NULL COMMENT '评论的内容',
  `create` int(10) unsigned NOT NULL COMMENT '评论发布时间',
  `ip` int(10) unsigned NOT NULL COMMENT 'IP',
  `tid` int(10) unsigned NOT NULL COMMENT '微博的ID',
  `uid` int(10) unsigned NOT NULL COMMENT '用户ID'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `weibo_comment`
--

INSERT INTO `weibo_comment` (`id`, `content`, `create`, `ip`, `tid`, `uid`) VALUES
(15, '哈哈', 1416728631, 2130706433, 25, 24),
(16, '我来评论了', 1416729294, 2130706433, 26, 24),
(17, '评论一下', 1416729314, 2130706433, 29, 24);

-- --------------------------------------------------------

--
-- 表的结构 `weibo_images`
--

CREATE TABLE IF NOT EXISTS `weibo_images` (
`id` int(10) unsigned NOT NULL COMMENT '自动编号',
  `data` char(200) NOT NULL COMMENT '微博配图URL的JSON格式',
  `tid` int(10) unsigned NOT NULL COMMENT '配图绑定微博的ID'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=215 ;

-- --------------------------------------------------------

--
-- 表的结构 `weibo_refer`
--

CREATE TABLE IF NOT EXISTS `weibo_refer` (
`id` int(10) unsigned NOT NULL COMMENT '自动编号',
  `tid` int(10) unsigned NOT NULL COMMENT '微博ID',
  `uid` int(10) unsigned NOT NULL COMMENT '被@的用户',
  `read` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否阅读',
  `create` int(10) unsigned NOT NULL COMMENT '创建时间'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- 表的结构 `weibo_topic`
--

CREATE TABLE IF NOT EXISTS `weibo_topic` (
`id` int(10) unsigned NOT NULL COMMENT '自动编号',
  `reid` int(11) NOT NULL,
  `content` char(255) NOT NULL COMMENT '微博内容',
  `content_over` char(25) DEFAULT '' COMMENT '微博溢出的内容',
  `ip` int(10) unsigned NOT NULL COMMENT 'IP',
  `re_count` int(11) NOT NULL,
  `create` int(10) unsigned NOT NULL COMMENT '发表时间',
  `uid` int(10) unsigned NOT NULL COMMENT '发表用户'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `weibo_topic`
--

INSERT INTO `weibo_topic` (`id`, `reid`, `content`, `content_over`, `ip`, `re_count`, `create`, `uid`) VALUES
(13, 0, 'dsafasdf', '', 0, 0, 1408871640, 11),
(14, 0, 'dsafasdfsdf', '', 0, 0, 1408871686, 11),
(15, 0, '中国人好样的', '', 0, 0, 1408871826, 11),
(16, 0, '中国人好样的士大夫中国人好样的士大夫中国人好样的士大夫中国人好样的士大夫中国人好样的士大夫中国人好样的士大夫中国人好样的士大夫中国人好样的士大夫中国人好样的士大夫中国人好样的士大夫中国人好样的士大夫中国人好样的士大夫中国人好样的士大夫中国人好样的士大夫中国人好样的士大夫中国人好样', '', 0, 0, 1408871860, 11),
(17, 0, '111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111', '111111111111111111111111', 0, 0, 1408871937, 11),
(18, 0, 'sdf', '', 0, 0, 1408876740, 18),
(19, 0, 'sdf', '', 0, 0, 1408876742, 18),
(20, 0, 'sdf', '', 0, 0, 1408876745, 18),
(21, 0, 'sdf', '', 0, 0, 1408876748, 18),
(22, 0, 's', '', 0, 0, 1408879844, 18),
(23, 0, 'sfdsdf sdfasdf sda', '', 0, 0, 1409134724, 18),
(24, 0, 'sfdsdf sdfasdf sda', '', 0, 0, 1409134727, 18),
(25, 0, '我的开心事情', '', 2130706433, 0, 1416728225, 24),
(26, 0, '哈哈', '', 2130706433, 0, 1416728243, 24),
(27, 26, '你好', '', 2130706433, 0, 1416729144, 24),
(28, 0, '@路飞', '', 2130706433, 0, 1416729167, 24),
(29, 24, '测试', '', 2130706433, 0, 1416729181, 24);

-- --------------------------------------------------------

--
-- 表的结构 `weibo_user`
--

CREATE TABLE IF NOT EXISTS `weibo_user` (
`id` int(10) unsigned NOT NULL,
  `username` char(20) CHARACTER SET utf8 NOT NULL COMMENT '用户名',
  `password` char(40) CHARACTER SET utf8 NOT NULL COMMENT '密码',
  `email` char(50) CHARACTER SET utf8 NOT NULL COMMENT '邮箱',
  `face` varchar(100) CHARACTER SET utf8 NOT NULL,
  `domain` varchar(30) CHARACTER SET utf8 NOT NULL,
  `last_ip` int(10) NOT NULL COMMENT '上次登录ip',
  `last_login` char(10) CHARACTER SET utf8 NOT NULL COMMENT '上次登录时间',
  `create` int(10) unsigned NOT NULL COMMENT '创建时间'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `weibo_user`
--

INSERT INTO `weibo_user` (`id`, `username`, `password`, `email`, `face`, `domain`, `last_ip`, `last_login`, `create`) VALUES
(1, 'phpandjs@sina.com', '', '', '', '', 0, '', 0),
(8, '娜美', '9b09c083905dc4d72f31ad6ae77d6d1ee66cddf5', '772648576@qq.com', '', '', 0, '1408438869', 1406367418),
(9, '雨上清阳', '9b09c083905dc4d72f31ad6ae77d6d1ee66cddf5', '772648s576@qq.com', '', '', 0, '', 1406370584),
(10, '娜美酱', '9b09c083905dc4d72f31ad6ae77d6d1ee66cddf5', '772648576@sina.com', '', '', 0, '', 1406445074),
(11, 'root', '9b09c083905dc4d72f31ad6ae77d6d1ee66cddf5', '7726485s76@qq.com', '', '', 0, '1408870785', 1406465239),
(12, 'admin', '9b09c083905dc4d72f31ad6ae77d6d1ee66cddf5', 'phpandjs@sina.com', '', '', 0, '', 1406467010),
(13, '罗宾', '9b09c083905dc4d72f31ad6ae77d6d1ee66cddf5', 'luobin@sina.com', '', '', 0, '', 1406467146),
(14, '乌索普', '9b09c083905dc4d72f31ad6ae77d6d1ee66cddf5', '23423427777@qq.com', '', '', 0, '', 1406467554),
(15, '索隆', '9b09c083905dc4d72f31ad6ae77d6d1ee66cddf5', '234232427777@qq.com', '', '', 0, '', 1406467715),
(16, 'test', '9b09c083905dc4d72f31ad6ae77d6d1ee66cddf5', '77f264d85s76@qq.com', '', '', 0, '', 1406467834),
(17, 'test2', '9b09c083905dc4d72f31ad6ae77d6d1ee66cddf5', '23423s427777@qq.com', '', '', 0, '', 1406468108),
(18, '路飞', '9b09c083905dc4d72f31ad6ae77d6d1ee66cddf5', '23423@sina.com', '', 'lufei', 2130706433, '1416729352', 1406468178),
(19, '蜡笔小新', '9b09c083905dc4d72f31ad6ae77d6d1ee66cddf5', 'sdfs@qq.com', '', '', 0, '', 1406714357),
(20, '赵桂花', '9b09c083905dc4d72f31ad6ae77d6d1ee66cddf5', '234323@qq.com', '', '', 0, '', 1406714624),
(21, '晴天小猪', '9b09c083905dc4d72f31ad6ae77d6d1ee66cddf5', 'sdfsd@qq.com', '', '', 0, '', 1406714788),
(22, 'haha', '9b09c083905dc4d72f31ad6ae77d6d1ee66cddf5', 'sdfsd@163.com', '', '', 0, '', 1406714834),
(23, '神奇小子', '9b09c083905dc4d72f31ad6ae77d6d1ee66cddf5', '2342342@163.com', '', '', 0, '', 1406967569),
(24, 'june', '9b09c083905dc4d72f31ad6ae77d6d1ee66cddf5', 'wzjg520@qq.com', '{"small":"Uploads\\/face\\/24_50*50.jpg","big":"Uploads\\/face\\/24_200*200.jpg"}', 'june', 2130706433, '1416130734', 1416130058);

-- --------------------------------------------------------

--
-- 表的结构 `weibo_user_extend`
--

CREATE TABLE IF NOT EXISTS `weibo_user_extend` (
  `intro` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '简介',
  `uid` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `weibo_user_extend`
--

INSERT INTO `weibo_user_extend` (`intro`, `uid`) VALUES
('为理想先行哈', 18),
('', 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `weibo_comment`
--
ALTER TABLE `weibo_comment`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`) USING BTREE, ADD KEY `tid` (`tid`), ADD KEY `uid` (`uid`);

--
-- Indexes for table `weibo_images`
--
ALTER TABLE `weibo_images`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- Indexes for table `weibo_refer`
--
ALTER TABLE `weibo_refer`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`) USING BTREE, ADD KEY `tid` (`tid`), ADD KEY `uid` (`uid`);

--
-- Indexes for table `weibo_topic`
--
ALTER TABLE `weibo_topic`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`) USING BTREE, ADD KEY `uid` (`uid`), ADD KEY `reid` (`reid`);

--
-- Indexes for table `weibo_user`
--
ALTER TABLE `weibo_user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`) USING BTREE, ADD UNIQUE KEY `email` (`email`) USING BTREE;

--
-- Indexes for table `weibo_user_extend`
--
ALTER TABLE `weibo_user_extend`
 ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `weibo_comment`
--
ALTER TABLE `weibo_comment`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '评论的ID',AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `weibo_images`
--
ALTER TABLE `weibo_images`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自动编号',AUTO_INCREMENT=215;
--
-- AUTO_INCREMENT for table `weibo_refer`
--
ALTER TABLE `weibo_refer`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自动编号',AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `weibo_topic`
--
ALTER TABLE `weibo_topic`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自动编号',AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `weibo_user`
--
ALTER TABLE `weibo_user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
