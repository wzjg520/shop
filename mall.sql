-- phpMyAdmin SQL Dump
-- version 4.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2014-11-06 19:47:59
-- 服务器版本： 5.5.37-log
-- PHP Version: 5.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mall`
--

-- --------------------------------------------------------

--
-- 表的结构 `mall_address`
--

CREATE TABLE IF NOT EXISTS `mall_address` (
`id` mediumint(8) unsigned NOT NULL COMMENT '//id',
  `name` varchar(20) NOT NULL COMMENT '//收货人地址',
  `tel` varchar(20) NOT NULL COMMENT '//收货人电话',
  `email` varchar(30) NOT NULL COMMENT '//邮箱',
  `address` varchar(100) NOT NULL COMMENT '//收货人地址',
  `buildings` varchar(200) NOT NULL COMMENT '//标志性建筑',
  `flag` tinyint(1) NOT NULL COMMENT '//是否江浙沪',
  `code` char(6) NOT NULL COMMENT '//邮编',
  `selected` tinyint(1) NOT NULL COMMENT '//是否首选',
  `user` varchar(20) NOT NULL COMMENT '//关联用户',
  `time` varchar(30) NOT NULL COMMENT '//追加送货时间'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `mall_address`
--

INSERT INTO `mall_address` (`id`, `name`, `tel`, `email`, `address`, `buildings`, `flag`, `code`, `selected`, `user`, `time`) VALUES
(1, '王佳君', '234234', '2342342@qq.com', '上海市泰云路', '帝国大厦', 0, '222333', 0, '路飞', '2'),
(3, '布玛', '2342342', '23432546@sina.com', '上海市嘉定区', '帝国大厦', 0, '222444', 0, '路飞', '礼拜四'),
(6, '孙悟空', '2342342', '23402394802@qq.com', '上海市东方明珠塔', '帝国大厦', 0, '222444', 0, '路飞', '5'),
(7, '孙悟饭', '4234234', '23402394802@qq.com', '上海市嘉定区', '东方明珠图', 1, '222444', 1, '路飞', '礼拜四'),
(8, '贝吉塔', '234234234', '2342342@qq.com', '帝国大厦', '上海市东方明珠塔', 1, '233356', 1, 'admin', '234'),
(9, '赵桂花', '12313456546', '242342@qq.com', '上海市东方明珠塔', '唐朝酒店对面', 1, '463900', 0, 'test', '2'),
(10, '王佳君', '24594758345', '242342@qq.com', '河南省焦庄乡王楼村三组', '唐朝酒店对面', 1, '463900', 1, 'test', '4');

-- --------------------------------------------------------

--
-- 表的结构 `mall_attr`
--

CREATE TABLE IF NOT EXISTS `mall_attr` (
`id` mediumint(8) unsigned NOT NULL COMMENT '//id',
  `name` varchar(200) NOT NULL COMMENT '//属性名',
  `item` varchar(200) NOT NULL COMMENT '//属性项目',
  `nav` varchar(200) NOT NULL COMMENT '//关联模型',
  `way` tinyint(1) NOT NULL DEFAULT '0' COMMENT '//选择方式'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `mall_attr`
--

INSERT INTO `mall_attr` (`id`, `name`, `item`, `nav`, `way`) VALUES
(4, '容量', '2G|4G|8G|16G|32G|64G|500G|1T|1.5T', '11,40,41,42', 0),
(5, '颜色', '红色|蓝色|绿色|紫色|水杨红|咖啡色|天蓝色', '30,31,32,38,12', 0),
(8, '尺寸', 'XS|S|M|L|XL|XXL', '31,32,38', 0),
(9, '款式', '中式|欧式|韩式', '30,31,32,38', 0),
(10, '赠品', '小挂件|配饰|卡通项链|卡通手表', '30,31,32,38,12,14,11,40,41,42,43', 1),
(11, '面料', '化纤|纯棉|涤纶|丝绸|羊毛', '30,31,32,38', 0),
(12, '处理器', 'i3|i4|i7|amd|奔腾', '11,40,41,42,43', 0),
(13, '重量', '0.1kg|0.5kg|1kg|2kg|4kg|8kg|30kg', '12,44,42,43', 0);

-- --------------------------------------------------------

--
-- 表的结构 `mall_brand`
--

CREATE TABLE IF NOT EXISTS `mall_brand` (
`id` mediumint(8) unsigned NOT NULL COMMENT '//id',
  `name` varchar(20) NOT NULL COMMENT '//品牌名称',
  `info` varchar(200) NOT NULL COMMENT '//品牌简介',
  `url` varchar(40) NOT NULL COMMENT '//链接地址',
  `reg_time` datetime NOT NULL COMMENT '//新增时间',
  `type` mediumint(8) NOT NULL COMMENT '//类型关联'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `mall_brand`
--

INSERT INTO `mall_brand` (`id`, `name`, `info`, `url`, `reg_time`, `type`) VALUES
(1, '其他品牌', '特殊品牌', 'http://ihuaihua.cc', '2014-05-23 11:55:14', 23),
(2, '阿依莲', '世界著名服装品牌', 'http://www.ayilian.com', '2014-05-22 15:55:19', 29),
(6, '夏奈尔', '永远的经典--夏奈尔 “夏奈尔”这个品牌是一个美丽而非凡的法国女子加布瑞拉.夏奈尔（Gabrielle Chanel）创立并以她的名字命名的。“', 'http://www.chanel.com/zh_CN/', '2014-05-22 16:24:37', 29),
(7, '路易威登', '世界著名服装品牌', 'www.louisvuitton.cn', '2014-05-22 16:36:21', 29),
(8, '范思哲', '世界著名服装品牌', 'http://www.versace.com', '2014-05-22 17:26:19', 29),
(9, '普拉达', '世界著名服装品牌', 'http://www.prada.com', '2014-05-22 17:27:05', 29),
(10, '阿迪达斯 ', '世界著名服装品牌', 'http://www.adidas.com', '2014-05-22 17:27:50', 29),
(18, '南街村方便面', '小时候的最爱呀很好吃', 'http://www.ihuahua.cc', '2014-05-23 15:38:10', 19),
(19, '神州', '神州', 'http://shenzhou.com', '2014-05-27 13:15:52', 23),
(20, '希捷', '希捷', 'http://www.seagate.com', '2014-05-27 13:18:01', 23),
(22, '外星人', '未来人类笔记本', 'http://ihuahua.cc', '2014-06-06 18:21:29', 23);

-- --------------------------------------------------------

--
-- 表的结构 `mall_collect`
--

CREATE TABLE IF NOT EXISTS `mall_collect` (
`id` mediumint(8) unsigned NOT NULL COMMENT '//id',
  `goods_id` mediumint(8) unsigned NOT NULL COMMENT '//商品id',
  `user` varchar(200) NOT NULL COMMENT '//用户',
  `date` datetime NOT NULL COMMENT '//收藏时间'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `mall_collect`
--

INSERT INTO `mall_collect` (`id`, `goods_id`, `user`, `date`) VALUES
(11, 21, '路飞', '2014-06-19 15:54:15'),
(15, 17, '路飞', '2014-06-19 16:42:29'),
(13, 21, 'admin', '2014-06-19 16:00:51'),
(17, 20, '路飞', '2014-06-20 18:09:27'),
(16, 9, '路飞', '2014-06-19 16:42:37'),
(18, 19, '路飞', '2014-06-20 18:09:31'),
(19, 10, '路飞', '2014-06-20 21:41:38'),
(20, 17, 'admin', '2014-06-21 19:03:53');

-- --------------------------------------------------------

--
-- 表的结构 `mall_commend`
--

CREATE TABLE IF NOT EXISTS `mall_commend` (
`id` mediumint(8) unsigned NOT NULL COMMENT 'id',
  `user` varchar(200) NOT NULL COMMENT '用户',
  `goods_id` mediumint(8) unsigned NOT NULL COMMENT '//商品id',
  `order_id` mediumint(8) unsigned NOT NULL COMMENT '订单id',
  `attr` varchar(400) NOT NULL COMMENT '商品属性',
  `star` tinyint(5) unsigned NOT NULL DEFAULT '5' COMMENT '星级',
  `re_content` varchar(200) NOT NULL COMMENT '评论回复',
  `content` varchar(200) NOT NULL COMMENT '评论内容',
  `flag` tinyint(1) NOT NULL,
  `re_date` datetime NOT NULL COMMENT '回复评价时间',
  `date` datetime NOT NULL COMMENT '//时间'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `mall_commend`
--

INSERT INTO `mall_commend` (`id`, `user`, `goods_id`, `order_id`, `attr`, `star`, `re_content`, `content`, `flag`, `re_date`, `date`) VALUES
(8, '路飞', 11, 53, '颜　　色:绿色;尺　　寸:XS;款　　式:中式;赠　　品:小挂件;面　　料:化纤', 5, '谢谢评论', '地方官第三方刚', 1, '2014-06-16 17:02:45', '2014-06-14 19:16:00'),
(9, '路飞', 10, 54, '颜　　色:红色;款　　式:中式;赠　　品:小挂件;面　　料:化纤', 4, '这个衣服还是很漂亮的真的呀 嘿嘿 大家都快来买吧 哈哈哈', '这个衣服还是很漂亮的真的呀 嘿嘿 大家都快来买吧  哈哈哈', 1, '2014-06-16 20:36:18', '2014-06-16 15:14:51'),
(10, 'admin', 10, 55, '颜　　色:红色;款　　式:中式;赠　　品:小挂件;面　　料:化纤', 4, 'admin同学你现在不努力以后怎么办呢，加油吧，linux,php,java,js,c,python这些东西通通拿下，我要再写一点用于测试', '我是admin同学，我来主要是为了测试一下 吆喝', 1, '2014-06-16 20:22:02', '2014-06-16 16:37:58'),
(11, 'admin', 10, 57, '颜　　色:红色;款　　式:中式;赠　　品:小挂件;面　　料:化纤', 5, '给你回复一个少年', '再次用于测试信息，再接再厉', 1, '2014-06-16 21:24:28', '2014-06-16 20:33:43');

-- --------------------------------------------------------

--
-- 表的结构 `mall_delivery`
--

CREATE TABLE IF NOT EXISTS `mall_delivery` (
`id` mediumint(8) unsigned NOT NULL COMMENT '//id',
  `name` varchar(20) NOT NULL COMMENT '//快递名称',
  `url` varchar(200) NOT NULL COMMENT '//url',
  `price_in` decimal(8,2) NOT NULL COMMENT '省内起步费用',
  `price_out` decimal(8,2) NOT NULL COMMENT '省外起步价',
  `price_add` decimal(8,2) NOT NULL COMMENT '超过10公斤后每1公斤增加的费用',
  `info` varchar(200) NOT NULL COMMENT '//说明',
  `date` datetime NOT NULL COMMENT '//时间'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `mall_delivery`
--

INSERT INTO `mall_delivery` (`id`, `name`, `url`, `price_in`, `price_out`, `price_add`, `info`, `date`) VALUES
(1, '顺丰速递', 'http://www.sf-express.com', '30.00', '40.00', '100.00', '江浙沪6元起步，省外11元起步，超过10公斤每公斤加10元。', '2014-06-11 17:36:21'),
(3, '圆通快递', 'http://www.yto.net.cn', '6.00', '11.00', '2.00', '江浙沪6元起步，省外11元起步，超过10公斤后的每1公斤增加2元', '2014-06-11 17:41:14'),
(8, '邮政EMS', 'http://ihuaihua.cc', '12.00', '20.00', '20.00', '江浙沪12元起步，省外20元起步，1公斤内，超过10公斤每公斤加20元。', '2014-06-11 15:26:48'),
(9, '邮政平邮', 'http://ihuahua.cc', '6.00', '6.00', '0.00', '一律6元', '2014-06-12 17:30:01');

-- --------------------------------------------------------

--
-- 表的结构 `mall_goods`
--

CREATE TABLE IF NOT EXISTS `mall_goods` (
`id` mediumint(8) unsigned NOT NULL COMMENT '//id',
  `name` varchar(20) NOT NULL COMMENT '//商品名称',
  `sn` varchar(50) NOT NULL COMMENT '//商品编号',
  `attr` varchar(200) NOT NULL COMMENT '//属性',
  `price_sale` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '//商品售价',
  `price_market` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '//商品标价',
  `price_cost` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '//商品进价',
  `sale_count` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '销售量',
  `keyword` varchar(40) NOT NULL COMMENT '//关键字',
  `unit` varchar(10) NOT NULL COMMENT '//计量单位',
  `weight` decimal(10,2) unsigned NOT NULL COMMENT '//商品重量',
  `is_promote` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否促销',
  `is_recommend` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否推荐',
  `is_up` tinyint(1) unsigned NOT NULL COMMENT '//是否上架',
  `is_freight` tinyint(1) NOT NULL DEFAULT '0' COMMENT '//是否免运费',
  `inventory` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '//库存',
  `warn_inventory` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '//库存告急',
  `nav` smallint(6) unsigned NOT NULL COMMENT '//所属导航',
  `brand` smallint(6) unsigned NOT NULL COMMENT '//所属品牌',
  `date` datetime NOT NULL COMMENT '//时间',
  `thumb` varchar(100) NOT NULL,
  `thumb_small` varchar(100) NOT NULL COMMENT '//小图地址',
  `service` mediumint(8) unsigned NOT NULL COMMENT '//售后服务',
  `content` text NOT NULL COMMENT '//内容'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `mall_goods`
--

INSERT INTO `mall_goods` (`id`, `name`, `sn`, `attr`, `price_sale`, `price_market`, `price_cost`, `sale_count`, `keyword`, `unit`, `weight`, `is_promote`, `is_recommend`, `is_up`, `is_freight`, `inventory`, `warn_inventory`, `nav`, `brand`, `date`, `thumb`, `thumb_small`, `service`, `content`) VALUES
(9, '时尚纯棉舒适休闲短裤', '3534524', '面　　料:化纤|纯棉|涤纶|丝绸;赠　　品:小挂件|配饰|卡通项链|卡通手表;款　　式:中式;尺　　寸:S|M|L|XL|XXL;颜　　色:蓝色|绿色|紫色|水杨红|咖啡色', '324.00', '234234.00', '234.00', 0, '秋季|纯棉|彩色；每个关键字必须用', '条', '34.00', 0, 0, 1, 0, 65518, 0, 38, 10, '2014-06-18 16:18:42', 'upload/20140526/20140526104420513.jpg', 'upload/20140526/20140526104420513220x220.jpg', 2, ''),
(10, '性感时尚超级连衣裙', 'sdf234234', '面　　料:化纤|纯棉|羊毛;赠　　品:小挂件|配饰|卡通项链;款　　式:中式|欧式|韩式;颜　　色:红色|蓝色|绿色', '50.00', '234.00', '34.00', 10, '秋季|纯棉|彩色', '件', '1.00', 1, 0, 1, 1, 75, 0, 30, 6, '2014-06-09 16:12:15', 'upload/20140606/20140606170258368.jpg', 'upload/20140606/20140606170258368220x220.jpg', 2, '<div class="attributes" id="attributes" style="margin: 0px; padding: 0px; color: rgb(64, 64, 64); font-family: tahoma, arial, 微软雅黑, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n<div class="attributes-list" id="J_AttrList" style="margin: 0px 0px 10px; padding: 0px; clear: both; border: 1px solid rgb(230, 230, 230); background-color: rgb(246, 246, 246);">\r\n<div class="tm-clear tb-hidden tm_brandAttr" id="J_BrandAttr" style="margin: 0px; padding: 8px 20px 10px; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(230, 230, 230); height: 40px; line-height: 40px; display: block; background-color: rgb(246, 246, 246);">\r\n<div class="name" style="margin: 0px 15px 0px 0px; padding: 0px; color: rgb(102, 102, 102); float: left;">品牌名称：<a class="J_EbrandLogo" href="http://brand.tmall.com/brandInfo.htm?brandId=39475968&amp;type=0&amp;scm=1048.1.1.4" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(51, 85, 170); outline: none;" target="_blank">Mumu Home</a></div>\r\n<a class="tm-collectBtn j_DetailBrand" href="http://detail.tmall.com/item.htm?spm=a220m.1000858.1000725.76.Jktd1o&amp;id=37967340553&amp;areaId=310000&amp;cat_id=50025145&amp;rn=33a4432697c6461358649084c14eeb83&amp;user_id=650800480&amp;is_b=1#" style="margin: 0px; padding: 0px; text-decoration: none !important; color: rgb(255, 255, 255); outline: 0px; position: relative; display: inline-block; height: 22px; width: 75px; border-top-left-radius: 11px; border-top-right-radius: 11px; border-bottom-right-radius: 11px; border-bottom-left-radius: 11px; font-size: 12px; line-height: 22px; text-align: center; white-space: nowrap; cursor: pointer; transition: all 0.2s ease-in; -webkit-transition: all 0.2s ease-in; background-color: rgb(204, 0, 0);">关注</a></div>\r\n\r\n<p><em>产品参数：</em></p>\r\n\r\n<ul>\r\n	<li>主图来源:&nbsp;自主实拍图</li>\r\n	<li>货号:&nbsp;Z14CQ6928</li>\r\n	<li>风格:&nbsp;甜美</li>\r\n	<li>甜美:&nbsp;波西米亚</li>\r\n	<li>组合形式:&nbsp;单件</li>\r\n	<li>裙长:&nbsp;长裙</li>\r\n	<li>款式:&nbsp;其他款式</li>\r\n	<li>领型:&nbsp;荷叶领</li>\r\n	<li>袖型:&nbsp;其他</li>\r\n	<li>腰型:&nbsp;高腰</li>\r\n	<li>衣门襟:&nbsp;拉链</li>\r\n	<li>裙型:&nbsp;公主裙</li>\r\n	<li>图案:&nbsp;其他</li>\r\n	<li>流行元素/工艺:&nbsp;褶皱&nbsp;拼接&nbsp;蕾丝</li>\r\n	<li>品牌:&nbsp;Mumu Home</li>\r\n	<li>面料:&nbsp;蕾丝</li>\r\n	<li>成分含量:&nbsp;95%以上</li>\r\n	<li>材质:&nbsp;聚酯纤维</li>\r\n	<li>适用年龄:&nbsp;18-24周岁</li>\r\n	<li>年份季节:&nbsp;2014年夏季</li>\r\n	<li>颜色分类:&nbsp;黑色 现货&nbsp;黄色 现货&nbsp;白色 现货</li>\r\n	<li>尺码:&nbsp;只要178，拍下即送腰带&nbsp;XS&nbsp;S&nbsp;M&nbsp;L&nbsp;第400名开始涨到199！！！&nbsp;4米高档用料，成本高达199元&nbsp;设计师原创款，官方正品</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div id="mall-banner" style="margin: 0px; padding: 0px; color: rgb(64, 64, 64); font-family: tahoma, arial, 微软雅黑, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n<div id="J_DescTMS1" style="margin: 0px; padding: 0px;">\r\n<div class="j-mdv" style="margin: 0px; padding: 0px;">\r\n<div style="margin: 0px; padding: 0px; width: 790px; height: 120px;"><a href="http://nvzhuang.tmall.com/?spm=3.7340041.a2228hl.1&amp;ad_id=&amp;am_id=1301090169c43844b135&amp;cm_id=&amp;pm_id=" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(51, 85, 170); outline: none;" target="_blank"><img src="http://gtms01.alicdn.com/tps/i1/T1sdi_FC0aXXcb1CvB-790-120.jpg" style="border:0px; height:120px; margin:0px; padding:0px; width:790px" /></a></div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div id="J_DcTopRightWrap" style="margin: 0px; padding: 0px; width: 790px; position: relative; overflow: hidden; color: rgb(64, 64, 64); font-family: tahoma, arial, 微软雅黑, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n<div class="J_DcAsyn tb-shop" id="J_DcTopRight" style="margin: 0px; padding: 0px; background-color: rgb(255, 255, 255);">\r\n<div class="J_TModule" id="shop6797886727" style="margin: 0px; padding: 0px;">\r\n<div class="skin-box tb-module tshop-pbsm tshop-pbsm-shop-self-defined" style="margin: 0px 0px 10px; padding: 0px;">\r\n<div class="skin-box-bd clear-fix" style="margin: 0px; padding: 0px; border: 0px solid rgb(229, 229, 229); color: rgb(41, 83, 166); line-height: 1.2; overflow: hidden; width: 790px; background: none 0px 0px no-repeat rgb(255, 255, 255);">\r\n<p><img src="http://img01.taobaocdn.com/imgextra/i1/650800480/T2OolbX.BXXXXXXXXX-650800480.jpg" style="border:0px; margin:0px; padding:0px; vertical-align:middle" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate; border-spacing:0px; height:87px; margin:0px auto; padding:0px; width:790px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="4"><a href="http://mumuhome.tmall.com/?scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img02.taobaocdn.com/imgextra/i2/650800480/T24e2BXvJaXXXXXXXX-650800480.jpg" style="border:0px; float:none; margin:0px; padding:0px; vertical-align:middle" /></a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate; border-spacing:0px; height:97px; margin:0px auto; padding:0px; width:790px">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="" src="http://img02.taobaocdn.com/imgextra/i2/650800480/T2oLdVX1JaXXXXXXXX-650800480.jpg" style="border:0px; height:97px; margin:0px; padding:0px; vertical-align:middle; width:344px" /></td>\r\n			<td><a href="http://mumuhome.tmall.com/p/rd369588.htm?t=c&amp;a=15877&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img alt="" src="http://img01.taobaocdn.com/imgextra/i1/650800480/T2iQhdX8dXXXXXXXXX-650800480.jpg" style="border:0px; height:97px; margin:0px; padding:0px; vertical-align:middle; width:200px" /></a></td>\r\n			<td><a href="http://mumuhome.tmall.com/p/rd369588.htm?t=c&amp;a=15879&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img alt="" src="http://img02.taobaocdn.com/imgextra/i2/650800480/T2mFViXWNXXXXXXXXX-650800480.jpg" style="border:0px; height:97px; margin:0px; padding:0px; vertical-align:middle; width:246px" /></a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate; border-spacing:0px; height:321px; margin:0px auto; padding:0px; width:790px">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href="http://mumuhome.tmall.com/p/rd296262.htm?spm=a1z10.1.w5003-7120642863.4.1mMPEI&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img alt="" src="http://img03.taobaocdn.com/imgextra/i3/650800480/T2wdhYX94XXXXXXXXX-650800480.jpg_.webp" style="border:0px; height:321px; margin:0px; padding:0px; vertical-align:middle; width:197px" /></a></td>\r\n			<td><a href="http://mumuhome.tmall.com/p/rd808825.htm?spm=a1z10.1.w5003-7120642863.5.1mMPEI&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img alt="" src="http://img04.taobaocdn.com/imgextra/i4/650800480/T2s47SXKpaXXXXXXXX-650800480.jpg_.webp" style="border:0px; height:321px; margin:0px; padding:0px; vertical-align:middle; width:200px" /></a></td>\r\n			<td><a href="http://mumuhome.tmall.com/p/rd517463.htm?spm=a1z10.1.w5003-7120642863.6.1mMPEI&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img alt="" src="http://img04.taobaocdn.com/imgextra/i4/650800480/T2thUTXIlaXXXXXXXX-650800480.jpg_.webp" style="border:0px; height:321px; margin:0px; padding:0px; vertical-align:middle; width:201px" /></a></td>\r\n			<td><a href="http://mumuhome.tmall.com/p/rd282405.htm?spm=a1z10.1.w5003-7120642863.7.1mMPEI&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img alt="" src="http://img02.taobaocdn.com/imgextra/i2/650800480/T2q93UXTBXXXXXXXXX-650800480.jpg_.webp" style="border:0px; height:321px; margin:0px; padding:0px; vertical-align:middle; width:192px" /></a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate; border-spacing:0px; height:872px; margin:0px auto; padding:0px; width:790px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="11">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="4">&nbsp;</td>\r\n			<td><a href="http://detail.tmall.com/item.htm?spm=a1z10.3.w4011-2667789566.178.mIy7jl&amp;id=37612922744&amp;rn=729b8f073ec4fa93c06a02d9c9556d4b&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img alt="" src="http://img03.taobaocdn.com/imgextra/i3/650800480/T2TkW_XoFbXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n			<td rowspan="4">&nbsp;</td>\r\n			<td><a href="http://detail.tmall.com/item.htm?spm=a1z10.4.w5003-6033051771.14.F3cysp&amp;id=38178408967&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img04.taobaocdn.com/imgextra/i4/650800480/T2QgaNXFRXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n			<td rowspan="4">&nbsp;</td>\r\n			<td><a href="http://detail.tmall.com/item.htm?spm=a1z10.4.w5003-6033051771.2.F3cysp&amp;id=38215102201&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img02.taobaocdn.com/imgextra/i2/650800480/T29r2EXwVaXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n			<td rowspan="4">&nbsp;</td>\r\n			<td><a href="http://detail.tmall.com/item.htm?id=38901756889&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img02.taobaocdn.com/imgextra/i2/650800480/T2828tXWdaXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n			<td rowspan="4">&nbsp;</td>\r\n			<td><a href="http://detail.tmall.com/item.htm?spm=a1z10.3.w4011-2667789566.233.mIy7jl&amp;id=37739459906&amp;rn=729b8f073ec4fa93c06a02d9c9556d4b&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img02.taobaocdn.com/imgextra/i2/650800480/T269uHXUBXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n			<td rowspan="4">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href="http://detail.tmall.com/item.htm?id=38906476371&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img03.taobaocdn.com/imgextra/i3/650800480/T2KOJtXV4aXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n			<td><a href="http://detail.tmall.com/item.htm?spm=a1z10.4.w5003-6033051771.24.F3cysp&amp;id=38337634430&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img02.taobaocdn.com/imgextra/i2/650800480/T20m1QXrJbXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n			<td><a href="http://detail.tmall.com/item.htm?id=38877798621&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img02.taobaocdn.com/imgextra/i2/650800480/T2RRXuX8XXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n			<td><a href="http://detail.tmall.com/item.htm?spm=a1z10.4.w5003-6033051771.15.F3cysp&amp;id=38178188787&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img04.taobaocdn.com/imgextra/i4/650800480/T2CpptXWNaXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n			<td><a href="http://detail.tmall.com/item.htm?spm=a1z10.1.w5003-6700075795.3.nuOW8X&amp;id=10679991318&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img03.taobaocdn.com/imgextra/i3/650800480/T2oruuXKxaXXXXXXXX-650800480.jpg_.webp" style="border:0px; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href="http://detail.tmall.com/item.htm?id=38375123378&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img01.taobaocdn.com/imgextra/i1/650800480/T2dWPRXmlbXXXXXXXX-650800480.jpg_.webp" style="border:0px; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n			<td><a href="http://detail.tmall.com/item.htm?spm=a1z10.3.w4011-2667789566.318.mIy7jl&amp;id=37046605034&amp;rn=729b8f073ec4fa93c06a02d9c9556d4b&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img02.taobaocdn.com/imgextra/i2/650800480/T2Gr1wXF0XXXXXXXXX-650800480.jpg_.webp" style="border:0px; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n			<td><a href="http://detail.tmall.com/item.htm?spm=a1z10.3.w4011-2667789566.88.mIy7jl&amp;id=37967340553&amp;rn=729b8f073ec4fa93c06a02d9c9556d4b&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img03.taobaocdn.com/imgextra/i3/650800480/T2L7AnXMxXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n			<td><a href="http://detail.tmall.com/item.htm?id=38873598117&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img04.taobaocdn.com/imgextra/i4/650800480/T2EBNsXZRaXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n			<td><a href="http://detail.tmall.com/item.htm?spm=a1z10.3.w4011-2667789566.188.mIy7jl&amp;id=37235632132&amp;rn=729b8f073ec4fa93c06a02d9c9556d4b&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img02.taobaocdn.com/imgextra/i2/650800480/T2RxSvXNpXXXXXXXXX-650800480.jpg_.webp" style="border:0px; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href="http://detail.tmall.com/item.htm?spm=a1z10.4.w5003-6033051771.34.F3cysp&amp;id=38378458028&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img03.taobaocdn.com/imgextra/i3/650800480/T2idywXNpXXXXXXXXX-650800480.jpg_.webp" style="border:0px; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n			<td><a href="http://detail.tmall.com/item.htm?spm=a1z10.3.w4011-2667789566.163.LMYbrS&amp;id=37370516191&amp;rn=a45e1cf4d3c939969b30d16f908e3777&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img04.taobaocdn.com/imgextra/i4/650800480/T22mCMXH4XXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n			<td><a href="http://detail.tmall.com/item.htm?spm=a1z10.3.w4011-2667789566.109.7ffCH9&amp;id=18675100024&amp;rn=48bf083c8543389f06f1b14fc3d21474&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img03.taobaocdn.com/imgextra/i3/650800480/T2qsCvXRxXXXXXXXXX-650800480.jpg_.webp" style="border:0px; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n			<td><a href="http://detail.tmall.com/item.htm?id=38435117817&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img03.taobaocdn.com/imgextra/i3/650800480/T2Fo8PXrdbXXXXXXXX-650800480.jpg_.webp" style="border:0px; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n			<td><a href="http://detail.tmall.com/item.htm?spm=a1z10.4.w5003-6033051771.52.F3cysp&amp;id=38377222715&amp;scene=taobao_shop" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(41, 83, 166); outline: none;" target="_blank"><img src="http://img03.taobaocdn.com/imgextra/i3/650800480/T2lt4xX2XXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; height:217px; margin:0px; padding:0px; vertical-align:middle; width:154px" /></a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="J_DetailSection tshop-psm tshop-psm-bdetaildes" id="description" style="margin: 0px; padding: 0px; width: auto; color: rgb(64, 64, 64); font-family: tahoma, arial, 微软雅黑, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n<div class="content ke-post" style="margin: 10px 0px 0px; padding: 0px; font-style: normal; font-variant: normal; font-weight: normal; font-size: 14px; line-height: 1.5; font-family: tahoma, arial, 宋体, sans-serif; width: 790px; overflow: hidden; height: auto;"><img class="desc_anchor" id="desc-module-1" src="http://a.tbcdn.cn/kissy/1.0.0/build/imglazyload/spaceball.gif" style="border:0px; clear:both; display:block; height:1px; margin:0px; padding:0px; vertical-align:top" />\r\n<div style="margin: 0px; padding: 0px; line-height: 0px;"><img src="http://img02.taobaocdn.com/imgextra/i2/696944147/T2wIWRXqRaXXXXXXXX-696944147.jpg?q=START_MEI2ZHE_MJS_ID53898685b8c1a373d4cc6ee7_START_.webp" style="border:0px; margin:0px; padding:0px; vertical-align:top" />\r\n<div style="margin: 0px 7.890625px 2px; padding: 5px 7.890625px; width: 758.390625px; border: 1px solid rgb(204, 204, 204); overflow: hidden; font-size: 12px; background: rgb(255, 255, 255);"><img src="http://img03.taobaocdn.com/bao/uploaded/i3/T1kZWZXj4jXXbaMLs2_043749.jpg_.webp" style="border:0px; display:inline; float:left; margin:0px; padding:0px; vertical-align:top; width:auto" />\r\n<div style="margin: 0px; padding: 0px 0px 0px 80px;">\r\n<p><strong>满减促销</strong>&nbsp;&nbsp;&nbsp;<span style="color:rgb(153, 153, 153)">活动日期：2014-05-31 15:36:00 -- 2014-06-30 23:59:00</span></p>\r\n\r\n<div style="margin: 0px; padding: 0px;">\r\n<p>单笔订单满<strong>198</strong>&nbsp;元:减<strong>20</strong>元</p>\r\n</div>\r\n</div>\r\n</div>\r\n<img src="http://img02.taobaocdn.com/imgextra/i2/696944147/T2wIWRXqRaXXXXXXXX-696944147.jpg?q=END_MEI2ZHE_MJS_ID53898685b8c1a373d4cc6ee7_END_.webp" style="border:0px; margin:0px; padding:0px; vertical-align:top" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px; width: 790px; display: inline-block;" title="mjsmarketbbx_323290901">&nbsp;</div>\r\n\r\n<p><img src="http://img02.taobaocdn.com/imgextra/i2/650800480/T2evz5XuVaXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; margin:0px; padding:0px; vertical-align:top" /><img src="http://img02.taobaocdn.com/imgextra/i2/650800480/T2LI6_XCXXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img03.taobaocdn.com/imgextra/i3/650800480/T2gmv8XElXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img02.taobaocdn.com/imgextra/i2/650800480/T2JvP.XApXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /></p>\r\n<img class="desc_anchor" id="desc-module-2" src="http://a.tbcdn.cn/kissy/1.0.0/build/imglazyload/spaceball.gif" style="border:0px; clear:both; display:block; height:1px; margin:0px; padding:0px; vertical-align:top" />\r\n<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate; border-color:rgb(0, 0, 0); border-spacing:0px; display:table; height:395px; margin:0px; padding:0px; text-align:left; width:790px">\r\n	<tbody>\r\n		<tr>\r\n			<td style="border-color:rgb(0, 0, 0)"><img alt="alt" src="http://img03.taobaocdn.com/imgextra/i3/650800480/T2L_YYXBdXXXXXXXXX-650800480.jpg_.webp" style="border:0px; height:174px; margin:0px; padding:0px; vertical-align:top; width:790px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="border-color:rgb(0, 0, 0)">\r\n			<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate; border-color:rgb(0, 0, 0); border-spacing:0px; display:table; font-family:宋体; font-size:12px; margin:28px 0px 0px 64px; padding:0px; text-align:left; width:600px">\r\n				<tbody>\r\n					<tr>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">尺码</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">裙长</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">胸围</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">肩宽</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">腰围</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">-</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">-</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">-</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">XS</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">118</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">79</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">32</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">65</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">-</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">-</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">13</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">S</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">121</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">82</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">33</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">68</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">-</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">-</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">-</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">M</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">124</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">85</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">34</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">71</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">-</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">-</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">-</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">L</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">127</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">88</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">35</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">74</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">-</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">-</td>\r\n						<td style="border-color:rgb(0, 0, 0); text-align:center">-</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="border-color:rgb(0, 0, 0)"><img src="http://img01.taobaocdn.com/imgextra/i1/650800480/T2DZPrXwVaXXXXXXXX-650800480.jpg_.webp" style="border:0px; margin:0px; padding:0px; vertical-align:top" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<img class="desc_anchor" id="desc-module-3" src="http://a.tbcdn.cn/kissy/1.0.0/build/imglazyload/spaceball.gif" style="border:0px; clear:both; display:block; height:1px; margin:0px; padding:0px; vertical-align:top" />\r\n<p style="text-align:center"><a href="http://detail.tmall.com/item.htm?id=38744009983&amp;spm=a220z.1000880.0.0.DY6a9q" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(51, 85, 170); outline: none; text-align: center;" target="_blank"><img src="http://img01.taobaocdn.com/imgextra/i1/650800480/T2YEjIXFhXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; margin:0px; padding:0px; vertical-align:top" /></a></p>\r\n\r\n<p style="text-align:center"><img src="http://img01.taobaocdn.com/imgextra/i1/650800480/T2ApVtXw8bXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; margin:0px; padding:0px; vertical-align:top" /><img src="http://img01.taobaocdn.com/imgextra/i1/650800480/T2YtYZXwlXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img04.taobaocdn.com/imgextra/i4/650800480/T2pynWXvtXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img04.taobaocdn.com/imgextra/i4/650800480/T2tpnZXtRXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img04.taobaocdn.com/imgextra/i4/650800480/T2VyvYXBhXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img01.taobaocdn.com/imgextra/i1/650800480/T2AJr0Xs8XXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img02.taobaocdn.com/imgextra/i2/650800480/T2jLnYXDtXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img02.taobaocdn.com/imgextra/i2/650800480/T2ZDbYXzFXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img04.taobaocdn.com/imgextra/i4/650800480/T2VcjZXwtXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img03.taobaocdn.com/imgextra/i3/650800480/T21jfYXA0XXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img04.taobaocdn.com/imgextra/i4/650800480/T2gFD0XulXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img03.taobaocdn.com/imgextra/i3/650800480/T2noZnXI4aXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img03.taobaocdn.com/imgextra/i3/650800480/T2iEUnXIxaXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img01.taobaocdn.com/imgextra/i1/650800480/T2zjwpXUxXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img03.taobaocdn.com/imgextra/i3/650800480/T2vRApXT4XXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img02.taobaocdn.com/imgextra/i2/650800480/T29RkpXUtXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img03.taobaocdn.com/imgextra/i3/650800480/T2h6IsXHdXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img01.taobaocdn.com/imgextra/i1/650800480/TB2bCp8XFXXXXbEXpXXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img03.taobaocdn.com/imgextra/i3/650800480/TB2JRIvXFXXXXaqXpXXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img01.taobaocdn.com/imgextra/i1/650800480/TB2S9rlXpXXXXbIXpXXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img01.taobaocdn.com/imgextra/i1/650800480/TB2k35lXXXXXXa1aXXXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img03.taobaocdn.com/imgextra/i3/650800480/TB2EOOPXpXXXXc2XpXXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img03.taobaocdn.com/imgextra/i3/650800480/TB22GECXXXXXXX0XFXXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img04.taobaocdn.com/imgextra/i4/650800480/TB2JePoXFXXXXb.XpXXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /><img src="http://img04.taobaocdn.com/imgextra/i4/650800480/TB2h8KlXXXXXXcOXFXXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; line-height:1.5; margin:0px; padding:0px; vertical-align:top" /></p>\r\n<img class="desc_anchor" id="desc-module-4" src="http://a.tbcdn.cn/kissy/1.0.0/build/imglazyload/spaceball.gif" style="border:0px; clear:both; display:block; height:1px; margin:0px; padding:0px; vertical-align:top" />\r\n<p><img src="http://img03.taobaocdn.com/imgextra/i3/650800480/T2BLr9XBJXXXXXXXXX-650800480.jpg_.webp" style="border:0px; float:none; margin:0px; padding:0px; vertical-align:top" /></p>\r\n</div>\r\n</div>\r\n'),
(11, '经典舒适棉线休闲装', '234234', '面　　料:化纤|纯棉|涤纶|丝绸|羊毛;赠　　品:小挂件|配饰|卡通项链|卡通手表;款　　式:中式|欧式;尺　　寸:XS|S|M|L|XL|XXL;颜　　色:红色|蓝色|绿色|紫色|水杨红', '100.00', '234.00', '234.00', 0, '秋季|纯棉|彩色', '套', '1.00', 1, 0, 1, 1, 564, 324, 31, 10, '2014-06-18 16:20:42', 'upload/20140526/20140526135746811.jpg', 'upload/20140526/20140526135746811220x220.jpg', 2, '<p>sdf<img alt="" src="upload/20140526/20140526140530195.jpg" style="height:350px; width:233px" /></p>\r\n'),
(12, '夏奈尔经典时尚工作套装', 'ADF342343', '赠　　品:小挂件|配饰|卡通项链;款　　式:中式|欧式|韩式;颜　　色:红色|蓝色|绿色|紫色', '324.00', '234.00', '545.00', 20, '秋季|纯棉|彩色', '件', '0.43', 0, 1, 1, 1, 407, 345, 30, 6, '2014-06-09 16:12:24', 'upload/20140527/20140527193507971.jpg', 'upload/20140527/20140527193507971220x220.jpg', 5, '<p>美丽大方时尚得体</p>\r\n'),
(15, '外星人笔记本', 'NB2342234', '处理器:i3|i4|i7;赠　　品:小挂件|配饰;容　　量:1T|1.5T', '14000.00', '20000.00', '9000.00', 0, '游戏本|未来人类|高清', '台', '2.60', 0, 1, 1, 1, 320, 0, 42, 22, '2014-06-18 16:17:49', 'upload/20140606/20140606184540734.jpg', 'upload/20140606/20140606184540734220x220.jpg', 2, '<ul>\r\n	<li>商品名称：未来人类X811</li>\r\n	<li>商品编号：1115454</li>\r\n	<li>品牌：<a href="http://www.jd.com/pinpai/1105-17653.html" style="margin: 0px; padding: 0px; color: rgb(0, 90, 160); text-decoration: none;" target="_blank">未来人类（Terrans Force）</a></li>\r\n	<li>上架时间：2014-05-06 20:44:25</li>\r\n	<li>商品毛重：6.75kg</li>\r\n	<li>商品产地：中国大陆</li>\r\n	<li>特色功能：背光键盘，专业音响，RAID硬盘加速，宽域技术</li>\r\n	<li>显卡：GTX880M</li>\r\n	<li>分辨率：全高清（1920X1080）</li>\r\n	<li>胜任游戏：梦幻西游，穿越火线，英雄联盟，坦克世界，魔兽世界，地下城与勇士，Dota2，实况足球2013 ，星际争霸2，暗黑破坏神3，古墓丽影9，鬼泣5，GTA圣安地列斯，刺客信条3，极品飞车17 ，使命召唤9，上古卷轴5 ，战地3，孤岛危机3，细胞分裂6，罗马2-全面战争，英雄连2，仙剑奇侠传5</li>\r\n	<li>尺寸：17.3英寸</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="mc" id="product-detail-1" style="margin: 0px; padding: 0px; overflow: hidden; zoom: 1; clear: both; color: rgb(102, 102, 102); font-family: Arial, Verdana, 宋体; font-size: 12px; line-height: 18px;">\r\n<div class="detail-content" style="margin: 0px; padding: 0px;">\r\n<div style="margin: 0px; padding: 0px;"><a href="http://club.jd.com/CommunityAct/10001586.html" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); text-decoration: none;" target="_blank"><img alt="" class="err-product" src="http://img30.360buyimg.com/jgsq-productsoa/g16/M00/0C/0D/rBEbRlONUVgIAAAAAABb1jfmARMAACaqgF_iVIAAFvu538.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; border:0px; margin:0px; padding:0px; vertical-align:middle" /></a></div>\r\n\r\n<table border="0" cellpadding="0" cellspacing="0" style="empty-cells:show; margin:auto">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="" class="err-product" src="http://img20.360buyimg.com/vc/g15/M00/1B/18/rBEhWlNnQfAIAAAAAACr9Sa35rsAAM4pQEafzoAAKwN266.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; height:350px; margin:0px; padding:0px; vertical-align:middle; width:750px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt="" class="err-product" src="http://img20.360buyimg.com/vc/g15/M0A/1B/19/rBEhWFNnQf0IAAAAAAEe7sM9YmIAAM4pwDNLJgAAR8G100.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; height:350px; margin:0px; padding:0px; vertical-align:middle; width:750px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt="" class="err-product" src="http://img20.360buyimg.com/vc/g15/M0A/1B/19/rBEhWlNnQgoIAAAAAAD2wiWZ_8sAAM4qQCwAP4AAPba728.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; height:350px; margin:0px; padding:0px; vertical-align:middle; width:750px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt="" class="err-product" src="http://img20.360buyimg.com/vc/g13/M03/00/19/rBEhU1NnQhgIAAAAAAFbqeWW5OIAAM3aQJLyxkAAVvB057.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; height:350px; margin:0px; padding:0px; vertical-align:middle; width:750px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt="" class="err-product" src="http://img20.360buyimg.com/vc/g13/M03/00/19/rBEhVFNnQiQIAAAAAACZdG3jc6IAAM3awJTbxIAAJmM950.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; height:350px; margin:0px; padding:0px; vertical-align:middle; width:750px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt="" class="err-product" src="http://img20.360buyimg.com/vc/g10/M00/1E/12/rBEQWFNnQjAIAAAAAAC79-hacfkAAF_qgE7ExMAALwP581.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; height:350px; margin:0px; padding:0px; vertical-align:middle; width:750px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt="" class="err-product" src="http://img20.360buyimg.com/vc/g10/M00/1E/12/rBEQWVNnQj4IAAAAAAEbPBm1XDsAAF_qwKLTEEAARtU137.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; height:350px; margin:0px; padding:0px; vertical-align:middle; width:750px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt="" class="err-product" src="http://img20.360buyimg.com/vc/g10/M00/1E/12/rBEQWFNnQkoIAAAAAAE2uUXSh40AAF_rAL4UsQAATbR499.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; height:350px; margin:0px; padding:0px; vertical-align:middle; width:750px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt="" class="err-product" src="http://img20.360buyimg.com/vc/g12/M00/0F/0A/rBEQYFNnQlYIAAAAAACkyn7MEbwAAFhjwEuuCUAAKTi735.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; height:350px; margin:0px; padding:0px; vertical-align:middle; width:750px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt="" class="err-product" src="http://img20.360buyimg.com/vc/g12/M00/0F/0A/rBEQYVNnQmEIAAAAAABnd0uJ8foAAFhkAB2B-4AAGeP846.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; height:350px; margin:0px; padding:0px; vertical-align:middle; width:750px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt="" class="err-product" src="http://img20.360buyimg.com/vc/g14/M06/02/06/rBEhVVNnQmwIAAAAAAF3NVmZsLIAANAoQPn2NsAAXdN618.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; height:350px; margin:0px; padding:0px; vertical-align:middle; width:750px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt="" class="err-product" src="http://img20.360buyimg.com/vc/g14/M06/02/06/rBEhVVNnQncIAAAAAADRsTyhfhMAANAogNP0ioAANHJ396.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; height:350px; margin:0px; padding:0px; vertical-align:middle; width:750px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt="" class="err-product" src="http://img20.360buyimg.com/vc/g14/M02/02/06/rBEhV1NnQoIIAAAAAAGDEQWKHiIAANApADlO40AAYMp366.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; height:350px; margin:0px; padding:0px; vertical-align:middle; width:750px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt="" class="err-product" src="http://img20.360buyimg.com/vc/g14/M02/02/06/rBEhVVNnQpIIAAAAAAEDRtq8vssAANApgJwA1oAAQNe079.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; height:350px; margin:0px; padding:0px; vertical-align:middle; width:750px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt="" class="err-product" src="http://img20.360buyimg.com/vc/g15/M01/1B/19/rBEhWFNnQp4IAAAAAAEzxmwU3UMAAM4qgPklzAAATPe319.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; height:399px; margin:0px; padding:0px; vertical-align:middle; width:750px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<div style="margin: 0px; padding: 0px;"><img alt="" class="err-product" src="http://img30.360buyimg.com/jgsq-productsoa/g14/M09/0C/08/rBEhV1LPZr8IAAAAAACpsqP98CQAAH4wgOhKVUAAKnK394.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; margin:0px; padding:0px; vertical-align:middle" /></div>\r\n</div>\r\n</div>\r\n\r\n<div id="promises" style="margin: 0px; padding: 10px; overflow: hidden; zoom: 1; border-top-width: 1px; border-top-style: dotted; border-top-color: rgb(222, 222, 222); clear: both; color: rgb(102, 102, 102); font-family: Arial, Verdana, 宋体; font-size: 12px; line-height: 18px;"><strong>服务承诺：</strong><br />\r\n京东商城向您保证所售商品均为正品行货，京东自营商品开具机打发票或电子发票。凭质保证书及京东商城发票，可享受全国联保服务（奢侈品、钟表除外；奢侈品、钟表由京东联系保修，享受法定三包售后服务），与您亲临商场选购的商品享受相同的质量保证。京东商城还为您提供具有竞争力的商品价格和<a href="http://www.jd.com/help/kdexpress.aspx" style="margin: 0px; padding: 0px; color: rgb(0, 90, 160); text-decoration: none;" target="_blank">运费政策</a>，请您放心购买！&nbsp;<br />\r\n<br />\r\n注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！</div>\r\n\r\n<div id="state" style="margin: 0px; padding: 10px; overflow: hidden; zoom: 1; border-top-width: 1px; border-top-style: dotted; border-top-color: rgb(222, 222, 222); color: rgb(102, 102, 102); font-family: Arial, Verdana, 宋体; font-size: 12px; line-height: 18px;"><strong>权利声明：</strong><br />\r\n京东商城上的所有商品信息、客户评价、商品咨询、网友讨论等内容，是京东商城重要的经营资源，未经许可，禁止非法转载使用。\r\n<p><strong>注：</strong>本站商品信息均来自于厂商，其真实性、准确性和合法性由信息拥有者（厂商）负责。本站不提供任何保证，并不承担任何法律责任。</p>\r\n</div>\r\n'),
(16, '老北京风味方便面', 'AMC23423', '重　　量:1kg', '26.00', '30.00', '20.00', 20, '美味|童年|味道', '箱', '2.00', 0, 1, 1, 1, 2312, 0, 44, 18, '2014-06-18 16:18:07', 'upload/20140607/20140607103921971.jpg', 'upload/20140607/20140607103921971220x220.jpg', 2, '<ul>\r\n	<li>商品名称：老北京 南街村方便面 干吃面 北京方便面...</li>\r\n	<li>商品编号：1161897748</li>\r\n	<li>店铺：<a href="http://mall.jd.com/index-49316.html" style="margin: 0px; padding: 0px; color: rgb(0, 90, 160); text-decoration: none;" target="_blank">一品唐朝专营店</a></li>\r\n	<li>上架时间：</li>\r\n	<li>商品毛重：4.0kg</li>\r\n	<li>商品产地：中国大陆</li>\r\n	<li>包装：袋装</li>\r\n	<li>类型：其他方便食品</li>\r\n</ul>\r\n\r\n<div class="detail-correction" style="margin: 0px; padding: 8px 0px; zoom: 1; color: rgb(102, 102, 102); font-family: Arial, Verdana, 宋体; font-size: 12px; line-height: 18px;">如果您发现商品信息不准确，<a href="http://club.360buy.com/jdvote/skucheck.aspx?skuid=1161897748&amp;cid1=1320&amp;cid2=1584&amp;cid3=2679" style="margin: 0px; padding: 0px; color: rgb(0, 90, 160); text-decoration: none;" target="_blank">欢迎纠错</a></div>\r\n\r\n<p><a href="http://c.fa.jd.com/adclick?sid=2&amp;cid=601&amp;aid=3951&amp;bid=2928&amp;unit=39353&amp;advid=96052&amp;guv=&amp;url=http://sale.jd.com/act/xKEGktnvPoLjib5N.html" id="p-cat-insert" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); text-decoration: none; font-family: Arial, Verdana, 宋体; font-size: 12px; line-height: 18px;" target="_blank" title=""><img alt="" src="http://img14.360buyimg.com/da/jfs/t187/348/607461234/100287/877b5cc5/5391f76fNdc127852.jpg" style="border:0px; height:180px; margin:0px; padding:0px; vertical-align:middle; width:990px" /></a></p>\r\n\r\n<div class="ac" style="margin: 0px; padding: 0px; text-align: center; color: rgb(102, 102, 102); font-family: Arial, Verdana, 宋体; font-size: 12px; line-height: 18px;">&nbsp;</div>\r\n\r\n<div class="detail-content" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Arial, Verdana, 宋体; font-size: 12px; line-height: 18px;">\r\n<p><span style="font-size:medium">本品为易碎产品，在快递运输过程中，难免有些擦碰，</span></p>\r\n\r\n<p><span style="font-size:medium">如果介意的朋友请慎重下单！</span></p>\r\n\r\n<p><span style="font-size:large">80克一袋</span></p>\r\n&nbsp;&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<img alt="" class="err-product" id="8bdd165ba7264a3fa51dfc4232e05737\r\n" src="http://img30.360buyimg.com/popWaterMark/g17/M00/02/07/rBEbSlNx9xIIAAAAAAevN6P_Tb0AAAo5gF8TgcAB69P575.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; margin:0px; padding:0px; vertical-align:middle" />&nbsp;<br />\r\n<img alt="" class="err-product" id="b0514a0de8464f8cac775a9cd5dc317a" src="http://img30.360buyimg.com/popWareDetail/g16/M00/05/17/rBEbRVN0F2EIAAAAAALwWD9WmvwAABHhwNS08EAAvBw274.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; margin:0px; padding:0px; vertical-align:middle" />&nbsp;<br />\r\n<img alt="" class="err-product" id="d978fb7546734ea6af2c11cbb9b0c7ba" src="http://img30.360buyimg.com/popWareDetail/g16/M00/05/17/rBEbRlN0F5QIAAAAAAbunA7rlasAABHiwG9qjEABu60157.jpg" style="background:url(http://misc.360buyimg.com/lib/skin/e/i/error-jd.gif) 50% 50% no-repeat; margin:0px; padding:0px; vertical-align:middle" />&nbsp;</div>\r\n'),
(17, '时尚魅力韩版连衣裙', 'ABK2342342', '面　　料:化纤|纯棉|涤纶|丝绸;赠　　品:小挂件|配饰|卡通项链|卡通手表;款　　式:韩式;颜　　色:红色|蓝色|绿色|紫色|水杨红|天蓝色', '200.00', '566.00', '100.00', 1, '时尚|性感|纯棉', '条', '0.40', 1, 0, 1, 1, 199, 300, 30, 2, '2014-06-18 21:10:32', 'upload/20140618/20140618210951149.jpg', 'upload/20140618/20140618210951149220x220.jpg', 2, '<p>用于测试暂时不想写详情了</p>\r\n'),
(18, '性感紧身新潮连衣裙', 'KJL234234', '面　　料:化纤|纯棉|涤纶|丝绸|羊毛;赠　　品:小挂件|配饰|卡通项链|卡通手表;款　　式:欧式;颜　　色:红色|蓝色|绿色|紫色|水杨红|天蓝色', '2433.00', '2652.00', '234.00', 0, '性感|紧身|纯棉', '条', '0.30', 0, 0, 1, 1, 200, 32, 30, 6, '2014-06-18 21:12:50', 'upload/20140618/20140618211219417.jpg', 'upload/20140618/20140618211219417220x220.jpg', 2, '<p>图片均来自网上</p>\r\n');
INSERT INTO `mall_goods` (`id`, `name`, `sn`, `attr`, `price_sale`, `price_market`, `price_cost`, `sale_count`, `keyword`, `unit`, `weight`, `is_promote`, `is_recommend`, `is_up`, `is_freight`, `inventory`, `warn_inventory`, `nav`, `brand`, `date`, `thumb`, `thumb_small`, `service`, `content`) VALUES
(19, '可爱纯棉舒适连衣裙', 'LJSDF234344', '面　　料:化纤|纯棉|涤纶|丝绸|羊毛;赠　　品:小挂件|配饰|卡通项链|卡通手表;款　　式:中式|欧式|韩式;颜　　色:红色|蓝色|绿色|紫色|水杨红', '23234.00', '24333.00', '555.00', 0, '秋季|纯棉|彩色', '条', '0.30', 0, 0, 1, 1, 0, 0, 30, 6, '2014-06-18 21:15:09', 'upload/20140618/20140618211455866.jpg', 'upload/20140618/20140618211455866220x220.jpg', 2, '<p>卡哇伊</p>\r\n'),
(20, '夏季流行清爽舒适连衣裙', 'JSDF2342', '面　　料:化纤|纯棉|涤纶|丝绸|羊毛;赠　　品:小挂件|配饰|卡通项链|卡通手表;款　　式:中式|欧式|韩式;颜　　色:红色|蓝色|绿色|紫色|水杨红', '234.00', '222.00', '22.00', 2, '秋季|纯棉|彩色', '条', '0.20', 0, 0, 1, 1, 1998, 1444, 30, 2, '2014-06-18 21:18:18', 'upload/20140618/20140618211733916.jpg', 'upload/20140618/20140618211733916220x220.jpg', 2, '<p>更多美图看我下个项目，图片采集</p>\r\n'),
(21, '韩版夏季清凉装', 'ADF2342', '面　　料:化纤|纯棉|涤纶|丝绸|羊毛;赠　　品:小挂件|配饰|卡通项链|卡通手表;款　　式:中式|欧式|韩式;颜　　色:红色|蓝色|绿色|紫色', '222.00', '2342.00', '100.00', 2, '秋季|纯棉|彩色', '件', '0.20', 0, 0, 1, 1, 198, 150, 30, 6, '2014-06-18 21:21:30', 'upload/20140618/20140618212100899.jpeg', 'upload/20140618/20140618212100899220x220.jpeg', 2, '<p>大家都来捐助我吧</p>\r\n');

-- --------------------------------------------------------

--
-- 表的结构 `mall_level`
--

CREATE TABLE IF NOT EXISTS `mall_level` (
`id` tinyint(3) unsigned NOT NULL COMMENT '//id',
  `level_name` varchar(20) NOT NULL COMMENT '//等级'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `mall_level`
--

INSERT INTO `mall_level` (`id`, `level_name`) VALUES
(1, '普通管理员'),
(2, '商品发布专员'),
(3, '订单处理专员'),
(4, '超级管理员');

-- --------------------------------------------------------

--
-- 表的结构 `mall_manage`
--

CREATE TABLE IF NOT EXISTS `mall_manage` (
`id` mediumint(8) unsigned NOT NULL COMMENT '//id',
  `user` varchar(20) NOT NULL COMMENT '//用户名',
  `pwd` char(40) NOT NULL COMMENT '//密码',
  `level` tinyint(1) NOT NULL COMMENT '//等级',
  `login_count` mediumint(6) NOT NULL DEFAULT '0' COMMENT '//登陆次数',
  `last_ip` varchar(20) NOT NULL COMMENT '//最后登录次数',
  `last_time` datetime NOT NULL COMMENT '//最后登录时间',
  `reg_time` datetime NOT NULL COMMENT '//注册时间'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=91 ;

--
-- 转存表中的数据 `mall_manage`
--

INSERT INTO `mall_manage` (`id`, `user`, `pwd`, `level`, `login_count`, `last_ip`, `last_time`, `reg_time`) VALUES
(67, '孙悟空', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 1, '::1', '2014-05-23 09:52:02', '2014-05-13 15:16:30'),
(68, '路飞', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2, 42, '::1', '2014-07-01 14:59:39', '2014-05-13 15:16:45'),
(69, '赤木刚宪', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2, 0, '::1', '2014-05-13 15:16:56', '2014-05-13 15:16:56'),
(70, '雨上清阳', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3, 0, '::1', '2014-05-13 15:17:12', '2014-05-13 15:17:12'),
(71, '马云', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 0, '::1', '2014-05-13 15:17:33', '2014-05-13 15:17:33'),
(72, '红孩儿', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3, 0, '::1', '2014-05-13 15:17:45', '2014-05-13 15:17:45'),
(73, 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2, 2, '127.0.0.1', '2014-10-04 12:31:59', '2014-05-13 15:18:00'),
(74, 'root', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 7, '::1', '2014-06-23 16:09:25', '2014-05-13 15:18:24'),
(75, '孙悟天', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 0, '::1', '2014-05-13 15:18:53', '2014-05-13 15:18:53'),
(76, '孙悟饭', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3, 0, '::1', '2014-05-13 15:19:12', '2014-05-13 15:19:12'),
(77, '海贼王', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3, 0, '::1', '2014-05-13 15:28:28', '2014-05-13 15:28:28'),
(78, '龟仙人', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2, 0, '::1', '2014-05-13 15:34:52', '2014-05-13 15:34:52'),
(80, '旗木卡卡西', '7c4a8d09ca3762af61e59520943dc26494f8941b', 4, 0, '::1', '2014-05-13 15:43:50', '2014-05-13 15:43:50'),
(81, '樱木花道', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3, 0, '::1', '2014-05-14 17:01:16', '2014-05-14 17:01:16'),
(88, '娜美', '7c4a8d09ca3762af61e59520943dc26494f8941b', 4, 0, '::1', '2014-05-19 15:08:30', '2014-05-19 15:08:30'),
(89, '李小龙', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2, 0, '::1', '2014-05-19 16:50:32', '2014-05-19 16:50:32'),
(90, '晴天小猪', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 0, '::1', '2014-05-19 17:13:38', '2014-05-19 17:13:38');

-- --------------------------------------------------------

--
-- 表的结构 `mall_nav`
--

CREATE TABLE IF NOT EXISTS `mall_nav` (
`id` mediumint(8) unsigned NOT NULL COMMENT '//id',
  `name` varchar(4) NOT NULL COMMENT '//导航名称',
  `info` varchar(200) NOT NULL COMMENT '//简介',
  `sort` mediumint(8) NOT NULL COMMENT '//排序',
  `sid` mediumint(8) NOT NULL COMMENT '//父类id',
  `brand` varchar(100) NOT NULL COMMENT '//品牌关联',
  `price` text NOT NULL COMMENT '//价格区间'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- 转存表中的数据 `mall_nav`
--

INSERT INTO `mall_nav` (`id`, `name`, `info`, `sort`, `sid`, `brand`, `price`) VALUES
(3, '手机数码', '123456', 5, 0, '0', ''),
(4, '饮食保健', '饮食保健5', 2, 0, '0', ''),
(5, '美容护肤', '美容护肤', 19, 1, '0', ''),
(6, '少儿营养', '少儿营养', 5, 4, '0', ''),
(7, '老年保健', '老年保健', 4, 4, '0', ''),
(10, '学生营养', '学生营养', 2, 4, '0', ''),
(11, '平板电脑', '平板电脑', 19, 3, '0', ''),
(12, '办公家具', '办公家具', 1, 4, 'a:1:{i:0;s:1:"1";}', ''),
(13, '影音娱乐', '影音娱乐', 4, 0, '0', ''),
(14, '电子游戏', '电子游戏', 19, 13, '0', ''),
(15, '家居时尚', '家居时尚', 3, 0, '0', ''),
(19, '美食养生', '美食养生', 6, 0, 'a:1:{i:0;s:1:"1";}', 'a:7:{i:0;s:4:"1-50";i:1;s:5:"1-100";i:2;s:5:"30-60";i:3;s:6:"50-100";i:4;s:8:"200-1000";i:5;s:8:"400-1500";i:6;s:9:"1000-2000";}'),
(22, '积分商城', '积分商城', 7, 0, '0', ''),
(23, '电脑配件', '电脑配件', 8, 0, '0', ''),
(24, '珠宝手表', '珠宝手表', 9, 0, '0', ''),
(25, '家居建材', '家居建材', 10, 0, '0', ''),
(26, '日用百货', '日用百货', 26, 0, '0', ''),
(29, '服装鞋帽', '服装鞋帽', 1, 0, 'a:1:{i:0;s:1:"1";}', 'a:6:{i:0;s:4:"1-50";i:1;s:5:"1-100";i:2;s:5:"30-60";i:3;s:6:"50-100";i:4;s:8:"200-1000";i:5;s:8:"400-1500";}'),
(30, '连衣裙', '连衣裙', 30, 29, 'a:6:{i:0;s:1:"2";i:1;s:1:"6";i:2;s:1:"7";i:3;s:1:"8";i:4;s:1:"9";i:5;s:2:"10";}', 'a:3:{i:0;s:8:"200-1000";i:1;s:8:"400-1500";i:2;s:9:"1000-2000";}'),
(31, '休闲装', '休闲装', 31, 29, 'a:1:{i:0;s:2:"10";}', 'a:3:{i:0;s:4:"1-50";i:1;s:5:"1-100";i:2;s:5:"30-60";}'),
(32, '牛仔裤', '牛仔裤', 32, 29, '0', ''),
(38, '运动服饰', '运动服饰', 38, 29, 'a:2:{i:0;s:1:"9";i:1;s:2:"10";}', ''),
(39, '士大夫似', '内衣', 39, 29, 'a:7:{i:0;s:1:"2";i:1;s:1:"6";i:2;s:1:"7";i:3;s:1:"8";i:4;s:1:"9";i:5;s:2:"10";i:6;s:1:"1";}', 'a:7:{i:0;s:4:"1-50";i:1;s:5:"1-100";i:2;s:5:"30-60";i:3;s:6:"50-100";i:4;s:8:"200-1000";i:5;s:8:"400-1500";i:6;s:9:"1000-2000";}'),
(40, 'U盘', 'U盘', 40, 3, 'a:1:{i:0;s:1:"1";}', ''),
(41, '硬盘', '硬盘', 41, 23, 'a:2:{i:0;s:2:"19";i:1;s:1:"1";}', ''),
(42, '笔记本', '笔记本', 42, 23, 'a:3:{i:0;s:1:"1";i:1;s:2:"19";i:2;s:2:"22";}', 'N;'),
(43, '台式机', '台式机', 43, 23, 'a:2:{i:0;s:2:"19";i:1;s:1:"1";}', ''),
(44, '方便面', '美味可口方便面', 44, 19, 'a:2:{i:0;s:2:"18";i:1;s:1:"1";}', 'a:2:{i:0;s:4:"1-50";i:1;s:5:"1-100";}');

-- --------------------------------------------------------

--
-- 表的结构 `mall_order`
--

CREATE TABLE IF NOT EXISTS `mall_order` (
`id` mediumint(8) unsigned NOT NULL COMMENT '//id',
  `user` varchar(20) NOT NULL COMMENT '//用户名',
  `name` varchar(20) NOT NULL COMMENT '//收货人姓名',
  `email` varchar(40) NOT NULL COMMENT '//电子邮件',
  `tel` char(11) NOT NULL COMMENT '//电话号码',
  `address` varchar(200) NOT NULL COMMENT '//地址',
  `buildings` varchar(200) NOT NULL COMMENT '//标志性建筑',
  `code` char(6) NOT NULL COMMENT '//邮政编码',
  `delivery` varchar(30) NOT NULL COMMENT '//物流方式',
  `pay` varchar(30) NOT NULL COMMENT '//支付方式',
  `price` decimal(10,2) NOT NULL COMMENT '//总金额',
  `text` varchar(255) NOT NULL COMMENT '//备注',
  `ps` varchar(30) NOT NULL COMMENT '//缺货处理方式',
  `ordernum` varchar(100) NOT NULL COMMENT '//订单号',
  `order_pay` varchar(10) NOT NULL DEFAULT '未付款' COMMENT '//付款状态',
  `order_state` varchar(10) NOT NULL DEFAULT '未确认' COMMENT '//订单状态',
  `order_delivery` varchar(10) NOT NULL DEFAULT '未发货' COMMENT '//发货状态',
  `delivery_name` varchar(20) NOT NULL COMMENT '配送名称',
  `delivery_num` varchar(40) NOT NULL COMMENT '运单号',
  `delivery_url` varchar(255) NOT NULL COMMENT '配送公司网址',
  `refund` tinyint(1) NOT NULL DEFAULT '0' COMMENT '申请退款',
  `is_record` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否添加到商品购买记录表',
  `goods` text NOT NULL COMMENT '//商品详情',
  `date` datetime NOT NULL COMMENT '//日期'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=74 ;

--
-- 转存表中的数据 `mall_order`
--

INSERT INTO `mall_order` (`id`, `user`, `name`, `email`, `tel`, `address`, `buildings`, `code`, `delivery`, `pay`, `price`, `text`, `ps`, `ordernum`, `order_pay`, `order_state`, `order_delivery`, `delivery_name`, `delivery_num`, `delivery_url`, `refund`, `is_record`, `goods`, `date`) VALUES
(53, '路飞', '王佳君', '242342@qq.com', '24594758345', '河南省焦庄乡王楼村三组', '唐朝酒店对面', '463900', '圆通快递', '支付宝', '106.00', '', '等货物齐全再发货', '201406141915176931', '已付款', '已确认', '已发货', '', '', 'http://www.yto.net.cn', 0, 0, 'a:1:{i:11;s:524:"a:10:{s:2:"id";s:2:"11";s:10:"price_sale";s:6:"100.00";s:12:"price_market";s:6:"234.00";s:5:"navid";s:2:"31";s:4:"attr";a:5:{s:12:"颜　　色";a:1:{i:0;s:6:"绿色";}s:12:"尺　　寸";a:1:{i:0;s:2:"XS";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:1:"1";s:11:"thumb_small";s:44:"upload/20140526/20140526135746811220x220.jpg";s:2:"sn";s:6:"234234";s:6:"weight";s:6:"234.00";s:4:"name";s:27:"经典舒适棉线休闲装";}";}', '2014-06-14 19:15:17'),
(54, '路飞', '王佳君', '242342@qq.com', '24594758345', '河南省焦庄乡王楼村三组', '唐朝酒店对面', '463900', '顺丰速递', '支付宝', '56.00', '', '等货物齐全再发货', '201406161513527918', '已付款', '已确认', '已发货', '', '234', 'http://www.sf-express.com', 0, 0, 'a:1:{i:10;s:489:"a:10:{s:2:"id";s:2:"10";s:10:"price_sale";s:5:"50.00";s:12:"price_market";s:6:"234.00";s:5:"navid";s:2:"30";s:4:"attr";a:4:{s:12:"颜　　色";a:1:{i:0;s:6:"红色";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:1:"1";s:11:"thumb_small";s:44:"upload/20140606/20140606170258368220x220.jpg";s:2:"sn";s:9:"sdf234234";s:6:"weight";s:8:"32434.00";s:4:"name";s:27:"性感时尚超级连衣裙";}";}', '2014-06-16 15:13:52'),
(55, 'admin', '王佳君', '242342@qq.com', '24594758345', '河南省焦庄乡王楼村三组', '唐朝酒店对面', '463900', '圆通快递', '支付宝', '56.00', '', '等货物齐全再发货', '201406161636297671', '已付款', '已确认', '已发货', '', '5465', 'http://www.yto.net.cn', 0, 0, 'a:1:{i:10;s:489:"a:10:{s:2:"id";s:2:"10";s:10:"price_sale";s:5:"50.00";s:12:"price_market";s:6:"234.00";s:5:"navid";s:2:"30";s:4:"attr";a:4:{s:12:"颜　　色";a:1:{i:0;s:6:"红色";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:1:"1";s:11:"thumb_small";s:44:"upload/20140606/20140606170258368220x220.jpg";s:2:"sn";s:9:"sdf234234";s:6:"weight";s:8:"32434.00";s:4:"name";s:27:"性感时尚超级连衣裙";}";}', '2014-06-16 16:36:29'),
(56, 'admin', '王佳君', '242342@qq.com', '24594758345', '河南省焦庄乡王楼村三组', '唐朝酒店对面', '463900', '顺丰速递', '银行转账', '208.00', '', '等货物齐全再发货', '201406161714565138', '已付款', '已确认', '未发货', '', '54465', 'http://www.sf-express.com', 0, 0, 'a:1:{i:11;s:524:"a:10:{s:2:"id";s:2:"11";s:10:"price_sale";s:6:"100.00";s:12:"price_market";s:6:"234.00";s:5:"navid";s:2:"31";s:4:"attr";a:5:{s:12:"颜　　色";a:1:{i:0;s:6:"绿色";}s:12:"尺　　寸";a:1:{i:0;s:2:"XS";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:1:"2";s:11:"thumb_small";s:44:"upload/20140526/20140526135746811220x220.jpg";s:2:"sn";s:6:"234234";s:6:"weight";s:6:"234.00";s:4:"name";s:27:"经典舒适棉线休闲装";}";}', '2014-06-16 17:14:56'),
(57, 'admin', '王佳君', '242342@qq.com', '24594758345', '河南省焦庄乡王楼村三组', '唐朝酒店对面', '463900', '顺丰速递', '支付宝', '56.00', '', '等货物齐全再发货', '201406162028271888', '已付款', '已确认', '未发货', '', '123456', 'http://www.sf-express.com', 0, 0, 'a:1:{i:10;s:489:"a:10:{s:2:"id";s:2:"10";s:10:"price_sale";s:5:"50.00";s:12:"price_market";s:6:"234.00";s:5:"navid";s:2:"30";s:4:"attr";a:4:{s:12:"颜　　色";a:1:{i:0;s:6:"红色";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:1:"1";s:11:"thumb_small";s:44:"upload/20140606/20140606170258368220x220.jpg";s:2:"sn";s:9:"sdf234234";s:6:"weight";s:8:"32434.00";s:4:"name";s:27:"性感时尚超级连衣裙";}";}', '2014-06-16 20:28:27'),
(58, 'admin', '王佳君', '242342@qq.com', '24594758345', '河南省焦庄乡王楼村三组', '唐朝酒店对面', '463900', '顺丰速递', '支付宝', '480.00', '', '等货物齐全再发货', '201406171530435592', '已付款', '已确认', '已发货', '', '345345', 'http://www.sf-express.com', 0, 0, 'a:3:{i:11;s:524:"a:10:{s:2:"id";s:2:"11";s:10:"price_sale";s:6:"100.00";s:12:"price_market";s:6:"234.00";s:5:"navid";s:2:"31";s:4:"attr";a:5:{s:12:"颜　　色";a:1:{i:0;s:6:"绿色";}s:12:"尺　　寸";a:1:{i:0;s:2:"XS";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:1:"1";s:11:"thumb_small";s:44:"upload/20140526/20140526135746811220x220.jpg";s:2:"sn";s:6:"234234";s:6:"weight";s:6:"234.00";s:4:"name";s:27:"经典舒适棉线休闲装";}";i:12;s:449:"a:10:{s:2:"id";s:2:"12";s:10:"price_sale";s:6:"324.00";s:12:"price_market";s:6:"234.00";s:5:"navid";s:2:"30";s:4:"attr";a:3:{s:12:"颜　　色";a:1:{i:0;s:6:"红色";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}}s:3:"num";s:1:"1";s:11:"thumb_small";s:44:"upload/20140527/20140527193507971220x220.jpg";s:2:"sn";s:9:"ADF342343";s:6:"weight";s:4:"0.43";s:4:"name";s:33:"夏奈尔经典时尚工作套装";}";i:10;s:489:"a:10:{s:2:"id";s:2:"10";s:10:"price_sale";s:5:"50.00";s:12:"price_market";s:6:"234.00";s:5:"navid";s:2:"30";s:4:"attr";a:4:{s:12:"颜　　色";a:1:{i:0;s:6:"红色";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:1:"1";s:11:"thumb_small";s:44:"upload/20140606/20140606170258368220x220.jpg";s:2:"sn";s:9:"sdf234234";s:6:"weight";s:8:"32434.00";s:4:"name";s:27:"性感时尚超级连衣裙";}";}', '2014-06-17 15:30:43'),
(59, 'admin', '王佳君', '242342@qq.com', '24594758345', '河南省焦庄乡王楼村三组', '唐朝酒店对面', '463900', '顺丰速递', '支付宝', '2080.00', '', '等货物齐全再发货', '201406171531301952', '已付款', '已确认', '已发货', '', '4345', 'http://www.sf-express.com', 0, 0, 'a:2:{i:9;s:528:"a:10:{s:2:"id";s:1:"9";s:10:"price_sale";s:6:"324.00";s:12:"price_market";s:9:"234234.00";s:5:"navid";s:2:"38";s:4:"attr";a:5:{s:12:"颜　　色";a:1:{i:0;s:6:"蓝色";}s:12:"尺　　寸";a:1:{i:0;s:1:"S";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:1:"6";s:11:"thumb_small";s:44:"upload/20140526/20140526104420513220x220.jpg";s:2:"sn";s:7:"3534524";s:6:"weight";s:5:"34.00";s:4:"name";s:30:"时尚纯棉舒适休闲短裤";}";i:16;s:345:"a:10:{s:2:"id";s:2:"16";s:10:"price_sale";s:5:"26.00";s:12:"price_market";s:5:"30.00";s:5:"navid";s:2:"44";s:4:"attr";a:1:{s:12:"重　　量";a:1:{i:0;s:3:"1kg";}}s:3:"num";s:1:"5";s:11:"thumb_small";s:44:"upload/20140607/20140607103921971220x220.jpg";s:2:"sn";s:8:"AMC23423";s:6:"weight";s:4:"2.00";s:4:"name";s:24:"老北京风味方便面";}";}', '2014-06-17 15:31:30'),
(60, '路飞', '王佳君', '242342@qq.com', '24594758345', '河南省焦庄乡王楼村三组', '唐朝酒店对面', '463900', '圆通快递', '支付宝', '14430.00', '', '等货物齐全再发货', '201406171615191797', '已付款', '已确认', '已发货', '', '234', 'http://www.yto.net.cn', 0, 1, 'a:3:{i:11;s:524:"a:10:{s:2:"id";s:2:"11";s:10:"price_sale";s:6:"100.00";s:12:"price_market";s:6:"234.00";s:5:"navid";s:2:"31";s:4:"attr";a:5:{s:12:"颜　　色";a:1:{i:0;s:6:"绿色";}s:12:"尺　　寸";a:1:{i:0;s:2:"XS";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:1:"1";s:11:"thumb_small";s:44:"upload/20140526/20140526135746811220x220.jpg";s:2:"sn";s:6:"234234";s:6:"weight";s:6:"234.00";s:4:"name";s:27:"经典舒适棉线休闲装";}";i:15;s:426:"a:10:{s:2:"id";s:2:"15";s:10:"price_sale";s:8:"14000.00";s:12:"price_market";s:8:"20000.00";s:5:"navid";s:2:"42";s:4:"attr";a:3:{s:12:"容　　量";a:1:{i:0;s:2:"1T";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:9:"处理器";a:1:{i:0;s:2:"i3";}}s:3:"num";s:1:"1";s:11:"thumb_small";s:44:"upload/20140606/20140606184540734220x220.jpg";s:2:"sn";s:9:"NB2342234";s:6:"weight";s:4:"2.60";s:4:"name";s:18:"外星人笔记本";}";i:9;s:528:"a:10:{s:2:"id";s:1:"9";s:10:"price_sale";s:6:"324.00";s:12:"price_market";s:9:"234234.00";s:5:"navid";s:2:"38";s:4:"attr";a:5:{s:12:"颜　　色";a:1:{i:0;s:6:"蓝色";}s:12:"尺　　寸";a:1:{i:0;s:1:"S";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:1:"1";s:11:"thumb_small";s:44:"upload/20140526/20140526104420513220x220.jpg";s:2:"sn";s:7:"3534524";s:6:"weight";s:5:"34.00";s:4:"name";s:30:"时尚纯棉舒适休闲短裤";}";}', '2014-06-17 16:15:19'),
(61, '路飞', '王佳君', '242342@qq.com', '24594758345', '河南省焦庄乡王楼村三组', '唐朝酒店对面', '463900', '圆通快递', '支付宝', '106.00', '', '等货物齐全再发货', '201406171647584471', '已付款', '已确认', '已发货', '', '34345', 'http://www.yto.net.cn', 0, 1, 'a:1:{i:10;s:489:"a:10:{s:2:"id";s:2:"10";s:10:"price_sale";s:5:"50.00";s:12:"price_market";s:6:"234.00";s:5:"navid";s:2:"30";s:4:"attr";a:4:{s:12:"颜　　色";a:1:{i:0;s:6:"红色";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:1:"2";s:11:"thumb_small";s:44:"upload/20140606/20140606170258368220x220.jpg";s:2:"sn";s:9:"sdf234234";s:6:"weight";s:8:"32434.00";s:4:"name";s:27:"性感时尚超级连衣裙";}";}', '2014-06-17 16:47:58'),
(62, '路飞', '王佳君', '242342@qq.com', '24594758345', '河南省焦庄乡王楼村三组', '唐朝酒店对面', '463900', '顺丰速递', '支付宝', '56.00', '', '等货物齐全再发货', '20140617165116571', '已付款', '已确认', '已发货', '', '234', 'http://www.sf-express.com', 0, 1, 'a:1:{i:10;s:489:"a:10:{s:2:"id";s:2:"10";s:10:"price_sale";s:5:"50.00";s:12:"price_market";s:6:"234.00";s:5:"navid";s:2:"30";s:4:"attr";a:4:{s:12:"颜　　色";a:1:{i:0;s:6:"红色";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:1:"1";s:11:"thumb_small";s:44:"upload/20140606/20140606170258368220x220.jpg";s:2:"sn";s:9:"sdf234234";s:6:"weight";s:8:"32434.00";s:4:"name";s:27:"性感时尚超级连衣裙";}";}', '2014-06-17 16:51:16'),
(63, '路飞', '王佳君', '242342@qq.com', '24594758345', '河南省焦庄乡王楼村三组', '唐朝酒店对面', '463900', '顺丰速递', '支付宝', '2006.00', '', '等货物齐全再发货', '201406181630587087', '已付款', '已确认', '已发货', '', '', 'http://www.sf-express.com', 0, 1, 'a:1:{i:11;s:523:"a:10:{s:2:"id";s:2:"11";s:10:"price_sale";s:6:"100.00";s:12:"price_market";s:6:"234.00";s:5:"navid";s:2:"31";s:4:"attr";a:5:{s:12:"颜　　色";a:1:{i:0;s:6:"红色";}s:12:"尺　　寸";a:1:{i:0;s:2:"XS";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:2:"20";s:11:"thumb_small";s:44:"upload/20140526/20140526135746811220x220.jpg";s:2:"sn";s:6:"234234";s:6:"weight";s:4:"1.00";s:4:"name";s:27:"经典舒适棉线休闲装";}";}', '2014-06-18 16:30:58'),
(66, '路飞', '王佳君', '242342@qq.com', '24594758345', '河南省焦庄乡王楼村三组', '唐朝酒店对面', '463900', '顺丰速递', '支付宝', '6486.00', '', '等货物齐全再发货', '201406181646099830', '已付款', '已确认', '已发货', '', '', 'http://www.sf-express.com', 0, 1, 'a:1:{i:12;s:450:"a:10:{s:2:"id";s:2:"12";s:10:"price_sale";s:6:"324.00";s:12:"price_market";s:6:"234.00";s:5:"navid";s:2:"30";s:4:"attr";a:3:{s:12:"颜　　色";a:1:{i:0;s:6:"红色";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}}s:3:"num";s:2:"20";s:11:"thumb_small";s:44:"upload/20140527/20140527193507971220x220.jpg";s:2:"sn";s:9:"ADF342343";s:6:"weight";s:4:"0.43";s:4:"name";s:33:"夏奈尔经典时尚工作套装";}";}', '2014-06-18 16:46:09'),
(67, '路飞', '王佳君', '242342@qq.com', '24594758345', '河南省焦庄乡王楼村三组', '唐朝酒店对面', '463900', '顺丰速递', '支付宝', '506.00', '', '等货物齐全再发货', '201406201742355929', '已付款', '已确认', '已发货', '', '', 'http://www.sf-express.com', 0, 1, 'a:1:{i:10;s:486:"a:10:{s:2:"id";s:2:"10";s:10:"price_sale";s:5:"50.00";s:12:"price_market";s:6:"234.00";s:5:"navid";s:2:"30";s:4:"attr";a:4:{s:12:"颜　　色";a:1:{i:0;s:6:"红色";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:2:"10";s:11:"thumb_small";s:44:"upload/20140606/20140606170258368220x220.jpg";s:2:"sn";s:9:"sdf234234";s:6:"weight";s:4:"1.00";s:4:"name";s:27:"性感时尚超级连衣裙";}";}', '2014-06-20 17:42:35'),
(68, '路飞', '孙悟饭', '23402394802@qq.com', '4234234', '上海市嘉定区', '东方明珠图', '222444', '圆通快递', '支付宝', '206.00', '', '等货物齐全再发货', '201407011443447068', '已付款', '已确认', '已发货', '', '', 'http://www.yto.net.cn', 0, 1, 'a:1:{i:17;s:488:"a:10:{s:2:"id";s:2:"17";s:10:"price_sale";s:6:"200.00";s:12:"price_market";s:6:"566.00";s:5:"navid";s:2:"30";s:4:"attr";a:4:{s:12:"颜　　色";a:1:{i:0;s:6:"红色";}s:12:"款　　式";a:1:{i:0;s:6:"韩式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:1:"1";s:11:"thumb_small";s:44:"upload/20140618/20140618210951149220x220.jpg";s:2:"sn";s:10:"ABK2342342";s:6:"weight";s:4:"0.40";s:4:"name";s:27:"时尚魅力韩版连衣裙";}";}', '2014-07-01 14:43:44'),
(69, '路飞', '孙悟饭', '23402394802@qq.com', '4234234', '上海市嘉定区', '东方明珠图', '222444', '顺丰速递', '银行转账', '230.00', '', '等货物齐全再发货', '201407011446068658', '已付款', '已确认', '已发货', '', '', 'http://www.sf-express.com', 0, 1, 'a:1:{i:21;s:480:"a:10:{s:2:"id";s:2:"21";s:10:"price_sale";s:6:"222.00";s:12:"price_market";s:7:"2342.00";s:5:"navid";s:2:"30";s:4:"attr";a:4:{s:12:"颜　　色";a:1:{i:0;s:6:"红色";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:1:"1";s:11:"thumb_small";s:45:"upload/20140618/20140618212100899220x220.jpeg";s:2:"sn";s:7:"ADF2342";s:6:"weight";s:4:"0.20";s:4:"name";s:21:"韩版夏季清凉装";}";}', '2014-07-01 14:46:06'),
(70, '路飞', '孙悟饭', '23402394802@qq.com', '4234234', '上海市嘉定区', '东方明珠图', '222444', '顺丰速递', '支付宝', '228.00', '', '等货物齐全再发货', '201407011446598621', '已付款', '已确认', '已配货', '', '', 'http://www.sf-express.com', 0, 1, 'a:1:{i:21;s:480:"a:10:{s:2:"id";s:2:"21";s:10:"price_sale";s:6:"222.00";s:12:"price_market";s:7:"2342.00";s:5:"navid";s:2:"30";s:4:"attr";a:4:{s:12:"颜　　色";a:1:{i:0;s:6:"红色";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:1:"1";s:11:"thumb_small";s:45:"upload/20140618/20140618212100899220x220.jpeg";s:2:"sn";s:7:"ADF2342";s:6:"weight";s:4:"0.20";s:4:"name";s:21:"韩版夏季清凉装";}";}', '2014-07-01 14:46:59'),
(71, '路飞', '孙悟饭', '23402394802@qq.com', '4234234', '上海市嘉定区', '东方明珠图', '222444', '--请选择一个物流公司', '支付宝', '240.00', '', '等货物齐全再发货', '201407011457155292', '已付款', '已确认', '已发货', '', '', '', 0, 1, 'a:1:{i:20;s:491:"a:10:{s:2:"id";s:2:"20";s:10:"price_sale";s:6:"234.00";s:12:"price_market";s:6:"222.00";s:5:"navid";s:2:"30";s:4:"attr";a:4:{s:12:"颜　　色";a:1:{i:0;s:6:"红色";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:1:"1";s:11:"thumb_small";s:44:"upload/20140618/20140618211733916220x220.jpg";s:2:"sn";s:8:"JSDF2342";s:6:"weight";s:4:"0.20";s:4:"name";s:33:"夏季流行清爽舒适连衣裙";}";}', '2014-07-01 14:57:15'),
(72, '路飞', '孙悟饭', '23402394802@qq.com', '4234234', '上海市嘉定区', '东方明珠图', '222444', '顺丰速递', '银行转账', '242.00', '', '等货物齐全再发货', '201407011457281145', '已付款', '已确认', '已发货', '', '', 'http://www.sf-express.com', 0, 1, 'a:1:{i:20;s:491:"a:10:{s:2:"id";s:2:"20";s:10:"price_sale";s:6:"234.00";s:12:"price_market";s:6:"222.00";s:5:"navid";s:2:"30";s:4:"attr";a:4:{s:12:"颜　　色";a:1:{i:0;s:6:"红色";}s:12:"款　　式";a:1:{i:0;s:6:"中式";}s:12:"赠　　品";a:1:{i:0;s:9:"小挂件";}s:12:"面　　料";a:1:{i:0;s:6:"化纤";}}s:3:"num";s:1:"1";s:11:"thumb_small";s:44:"upload/20140618/20140618211733916220x220.jpg";s:2:"sn";s:8:"JSDF2342";s:6:"weight";s:4:"0.20";s:4:"name";s:33:"夏季流行清爽舒适连衣裙";}";}', '2014-07-01 14:57:28'),
(73, '路飞', '孙悟饭', '23402394802@qq.com', '4234234', '上海市嘉定区', '东方明珠图', '222444', '顺丰速递', '货到付款', '526.00', '', '等货物齐全再发货', '201407011459155077', '已付款', '已确认', '已发货', '', '', 'http://www.sf-express.com', 1, 1, 'a:1:{i:16;s:346:"a:10:{s:2:"id";s:2:"16";s:10:"price_sale";s:5:"26.00";s:12:"price_market";s:5:"30.00";s:5:"navid";s:2:"44";s:4:"attr";a:1:{s:12:"重　　量";a:1:{i:0;s:3:"1kg";}}s:3:"num";s:2:"20";s:11:"thumb_small";s:44:"upload/20140607/20140607103921971220x220.jpg";s:2:"sn";s:8:"AMC23423";s:6:"weight";s:4:"2.00";s:4:"name";s:24:"老北京风味方便面";}";}', '2014-07-01 14:59:15');

-- --------------------------------------------------------

--
-- 表的结构 `mall_price`
--

CREATE TABLE IF NOT EXISTS `mall_price` (
`id` mediumint(8) unsigned NOT NULL COMMENT '//id',
  `price_left` mediumint(8) unsigned NOT NULL COMMENT '//左区间',
  `price_right` mediumint(8) unsigned NOT NULL COMMENT '//右区间'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `mall_price`
--

INSERT INTO `mall_price` (`id`, `price_left`, `price_right`) VALUES
(1, 1, 50),
(2, 1, 100),
(3, 50, 100),
(4, 200, 1000),
(5, 30, 60),
(6, 400, 1500),
(7, 1000, 2000);

-- --------------------------------------------------------

--
-- 表的结构 `mall_record`
--

CREATE TABLE IF NOT EXISTS `mall_record` (
`id` mediumint(8) unsigned NOT NULL COMMENT 'id',
  `goods_id` mediumint(8) unsigned NOT NULL COMMENT '商品id',
  `name` varchar(40) NOT NULL COMMENT '商品名称',
  `user` varchar(20) NOT NULL COMMENT '购买者',
  `num` smallint(6) unsigned NOT NULL COMMENT '购买数量',
  `attr` varchar(200) NOT NULL COMMENT '商品属性',
  `price` decimal(10,2) unsigned NOT NULL COMMENT '价格',
  `date` datetime NOT NULL COMMENT '时间'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `mall_record`
--

INSERT INTO `mall_record` (`id`, `goods_id`, `name`, `user`, `num`, `attr`, `price`, `date`) VALUES
(15, 11, '经典舒适棉线休闲装', '路飞', 1, '颜色:绿色;尺寸:XS;款式:中式;赠品:小挂件;面料:化纤;', '100.00', '2014-06-17 16:46:43'),
(16, 15, '外星人笔记本', '路飞', 1, '容量:1T;赠品:小挂件;处理器:i3;', '14000.00', '2014-06-17 16:46:43'),
(17, 9, '时尚纯棉舒适休闲短裤', '路飞', 1, '颜色:蓝色;尺寸:S;款式:中式;赠品:小挂件;面料:化纤;', '324.00', '2014-06-17 16:46:44'),
(18, 10, '性感时尚超级连衣裙', '路飞', 2, '颜色:红色;款式:中式;赠品:小挂件;面料:化纤;', '50.00', '2014-06-17 16:48:15'),
(19, 10, '性感时尚超级连衣裙', '路飞', 1, '颜色:红色;款式:中式;赠品:小挂件;面料:化纤;', '50.00', '2014-06-17 16:51:29'),
(20, 11, '经典舒适棉线休闲装', '路飞', 20, '颜色:红色;尺寸:XS;款式:中式;赠品:小挂件;面料:化纤;', '100.00', '2014-06-18 16:31:45'),
(21, 16, '老北京风味方便面', '路飞', 20, '重量:1kg;', '26.00', '2014-07-01 15:00:00'),
(22, 20, '夏季流行清爽舒适连衣裙', '路飞', 1, '颜色:红色;款式:中式;赠品:小挂件;面料:化纤;', '234.00', '2014-07-01 15:00:09'),
(23, 20, '夏季流行清爽舒适连衣裙', '路飞', 1, '颜色:红色;款式:中式;赠品:小挂件;面料:化纤;', '234.00', '2014-07-01 15:00:17'),
(24, 21, '韩版夏季清凉装', '路飞', 1, '颜色:红色;款式:中式;赠品:小挂件;面料:化纤;', '222.00', '2014-07-01 15:00:34'),
(25, 17, '时尚魅力韩版连衣裙', '路飞', 1, '颜色:红色;款式:韩式;赠品:小挂件;面料:化纤;', '200.00', '2014-07-01 15:00:47'),
(26, 10, '性感时尚超级连衣裙', '路飞', 10, '颜色:红色;款式:中式;赠品:小挂件;面料:化纤;', '50.00', '2014-07-01 15:00:56'),
(27, 12, '夏奈尔经典时尚工作套装', '路飞', 20, '颜色:红色;款式:中式;赠品:小挂件;', '324.00', '2014-07-01 15:01:05');

-- --------------------------------------------------------

--
-- 表的结构 `mall_service`
--

CREATE TABLE IF NOT EXISTS `mall_service` (
`id` mediumint(8) unsigned NOT NULL COMMENT '//id',
  `name` varchar(20) NOT NULL COMMENT '//售后服务名称',
  `content` text NOT NULL COMMENT '//内容',
  `first` tinyint(1) NOT NULL COMMENT '//首选',
  `date` datetime NOT NULL COMMENT '时间'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `mall_service`
--

INSERT INTO `mall_service` (`id`, `name`, `content`, `first`, `date`) VALUES
(2, '通用售后服务', '<div class="mc hide " id="product-detail-5" style="margin: 0px; padding: 0px; overflow: hidden; zoom: 1; display: block; clear: both; color: rgb(102, 102, 102); font-family: Arial, Verdana, 宋体; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n<div class="item-detail" style="margin: 0px; padding: 10px;">本产品质保期为：</div>\r\n</div>\r\n\r\n<div id="promises" style="margin: 0px; padding: 10px; overflow: hidden; zoom: 1; border-top-width: 1px; border-top-style: dotted; border-top-color: rgb(222, 222, 222); clear: both; color: rgb(102, 102, 102); font-family: Arial, Verdana, 宋体; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><strong>服务承诺：</strong><br />\r\n京 东商城向您保证所售商品均为正品行货，京东自营商品开具机打发票或电子发票。凭质保证书及京东商城发票，可享受全国联保服务（奢侈品、钟表除外；奢侈品、 钟表由京东联系保修，享受法定三包售后服务），与您亲临商场选购的商品享受相同的质量保证。京东商城还为您提供具有竞争力的商品价格和<a href="http://www.jd.com/help/kdexpress.aspx" style="margin: 0px; padding: 0px; color: rgb(0, 90, 160); text-decoration: none;" target="_blank">运费政策</a>，请您放心购买！<br />\r\n<br />\r\n注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！</div>\r\n\r\n<div id="state" style="margin: 0px; padding: 10px; overflow: hidden; zoom: 1; border-top-width: 1px; border-top-style: dotted; border-top-color: rgb(222, 222, 222); color: rgb(102, 102, 102); font-family: Arial, Verdana, 宋体; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><strong>权利声明：</strong><br />\r\n京东商城上的所有商品信息、客户评价、商品咨询、网友讨论等内容，是京东商城重要的经营资源，未经许可，禁止非法转载使用。\r\n<p><strong>注：</strong>本站商品信息均来自于厂商，其真实性、准确性和合法性由信息拥有者（厂商）负责。本站不提供任何保证，并不承担任何法律责任。</p>\r\n</div>\r\n', 1, '0000-00-00 00:00:00'),
(3, 'test', '<p>sdfdsf</p>\r\n', 0, '0000-00-00 00:00:00'),
(4, '电子产品类售后服务', '<p>电子产品类售后服务</p>\r\n', 0, '0000-00-00 00:00:00'),
(5, '服装类售后服务', '<p>本售后服务用语测试</p>\r\n', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `mall_user`
--

CREATE TABLE IF NOT EXISTS `mall_user` (
`id` mediumint(8) unsigned NOT NULL,
  `user` varchar(20) NOT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT '1',
  `pwd` char(40) NOT NULL,
  `question` varchar(20) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `thumb` varchar(100) NOT NULL COMMENT '//头像',
  `email` varchar(100) NOT NULL,
  `reg_time` datetime NOT NULL,
  `last_ip` varchar(30) NOT NULL,
  `login_time` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `mall_user`
--

INSERT INTO `mall_user` (`id`, `user`, `gender`, `pwd`, `question`, `answer`, `thumb`, `email`, `reg_time`, `last_ip`, `login_time`) VALUES
(3, '路飞', 1, '7c4a8d09ca3762af61e59520943dc26494f8941b', '您父亲的名字是', '王付海', 'view/default/images/default_face.jpg', '23402394802@qq.com', '2014-05-31 12:59:05', '127.0.0.1', '2014-10-19 11:27:19'),
(4, 'admin', 1, '7c4a8d09ca3762af61e59520943dc26494f8941b', '您父亲的名字是', '王付海', 'upload/20140531/20140531140103175.jpg', '23402394802@qq.com', '2014-05-31 14:01:20', '::1', '2014-06-21 19:02:21'),
(5, 'test', 1, '7c4a8d09ca3762af61e59520943dc26494f8941b', '您父亲的名字是', '234', 'view/default/images/default_face.jpg', '242342@qq.com', '2014-06-23 12:13:31', '::1', '2014-06-23 12:13:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mall_address`
--
ALTER TABLE `mall_address`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mall_attr`
--
ALTER TABLE `mall_attr`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mall_brand`
--
ALTER TABLE `mall_brand`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mall_collect`
--
ALTER TABLE `mall_collect`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mall_commend`
--
ALTER TABLE `mall_commend`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mall_delivery`
--
ALTER TABLE `mall_delivery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mall_goods`
--
ALTER TABLE `mall_goods`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mall_level`
--
ALTER TABLE `mall_level`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mall_manage`
--
ALTER TABLE `mall_manage`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mall_nav`
--
ALTER TABLE `mall_nav`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mall_order`
--
ALTER TABLE `mall_order`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mall_price`
--
ALTER TABLE `mall_price`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mall_record`
--
ALTER TABLE `mall_record`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mall_service`
--
ALTER TABLE `mall_service`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mall_user`
--
ALTER TABLE `mall_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mall_address`
--
ALTER TABLE `mall_address`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mall_attr`
--
ALTER TABLE `mall_attr`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `mall_brand`
--
ALTER TABLE `mall_brand`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `mall_collect`
--
ALTER TABLE `mall_collect`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `mall_commend`
--
ALTER TABLE `mall_commend`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mall_delivery`
--
ALTER TABLE `mall_delivery`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `mall_goods`
--
ALTER TABLE `mall_goods`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `mall_level`
--
ALTER TABLE `mall_level`
MODIFY `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mall_manage`
--
ALTER TABLE `mall_manage`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `mall_nav`
--
ALTER TABLE `mall_nav`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `mall_order`
--
ALTER TABLE `mall_order`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `mall_price`
--
ALTER TABLE `mall_price`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mall_record`
--
ALTER TABLE `mall_record`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `mall_service`
--
ALTER TABLE `mall_service`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mall_user`
--
ALTER TABLE `mall_user`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
