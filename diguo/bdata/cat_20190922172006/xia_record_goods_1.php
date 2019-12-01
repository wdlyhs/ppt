<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_record_goods`;");
E_C("CREATE TABLE `xia_record_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `laiyuan` varchar(20) DEFAULT NULL,
  `laiyuan_type` tinyint(1) DEFAULT '0',
  `cid` int(11) NOT NULL DEFAULT '0',
  `code` varchar(10) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `discount_price` double(10,2) NOT NULL DEFAULT '0.00',
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  `shouji_price` double(10,2) NOT NULL DEFAULT '0.00',
  `starttime` int(11) DEFAULT NULL,
  `endtime` int(11) DEFAULT NULL,
  `fanli_bl` double(4,2) DEFAULT '0.00',
  `fanli_ico` tinyint(1) DEFAULT '0',
  `price_man` double(10,2) DEFAULT '0.00',
  `price_jian` double(10,2) DEFAULT '0.00',
  `sell` int(11) NOT NULL DEFAULT '0',
  `goods_attribute` text,
  `type` int(1) NOT NULL DEFAULT '0',
  `goods_id` int(11) NOT NULL DEFAULT '0',
  `data_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `cid` (`cid`),
  KEY `title` (`title`),
  KEY `discount_price` (`discount_price`),
  KEY `price` (`price`),
  KEY `shouji_price` (`shouji_price`),
  KEY `starttime` (`starttime`),
  KEY `endtime` (`endtime`),
  KEY `type` (`type`),
  KEY `goods_id` (`goods_id`),
  KEY `data_id` (`data_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>