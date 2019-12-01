<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_goods`;");
E_C("CREATE TABLE `xia_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `laiyuan` varchar(20) DEFAULT NULL,
  `laiyuan_type` tinyint(1) DEFAULT '0',
  `cid` int(11) NOT NULL DEFAULT '0',
  `code` varchar(10) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `discount_price` double(10,2) NOT NULL DEFAULT '0.00',
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  `shouji_price` double(10,2) NOT NULL DEFAULT '0.00',
  `content` text,
  `starttime` int(11) DEFAULT NULL,
  `endtime` int(11) DEFAULT NULL,
  `fanli_bl` double(4,2) DEFAULT '0.00',
  `fanli_ico` tinyint(1) DEFAULT '0',
  `price_man` double(10,2) DEFAULT '0.00',
  `price_jian` double(10,2) DEFAULT '0.00',
  `lq_url` text,
  `nick` varchar(20) DEFAULT NULL,
  `sell` int(11) NOT NULL DEFAULT '0',
  `tg_url` text,
  `auditor` varchar(50) DEFAULT NULL,
  `uid` int(11) DEFAULT '0',
  `data_id` varchar(255) NOT NULL,
  `addtime` int(11) NOT NULL DEFAULT '0',
  `del` int(1) NOT NULL DEFAULT '0',
  `top` tinyint(1) DEFAULT '0',
  `top_stime` int(11) DEFAULT '0',
  `top_etime` int(11) DEFAULT '0',
  `goods_attribute` text,
  `oversell` tinyint(1) DEFAULT '0',
  `pinglun` int(11) DEFAULT '0',
  `ding` int(11) DEFAULT '0',
  `cai` int(11) DEFAULT '0',
  `sort` int(11) DEFAULT '0',
  `spread` tinyint(1) DEFAULT '0',
  `xiajia` int(1) NOT NULL DEFAULT '0',
  `domain` varchar(255) DEFAULT NULL,
  `yun_jump` int(1) NOT NULL DEFAULT '0',
  `web_id` int(11) NOT NULL DEFAULT '0',
  `quan_total` int(11) DEFAULT '0',
  `quan_surplus` int(11) DEFAULT '0',
  `quan_receive` int(11) DEFAULT '0',
  `quan_condition` varchar(255) DEFAULT NULL,
  `quan_stime` int(11) DEFAULT '0',
  `quan_etime` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `laiyuan_type` (`laiyuan_type`),
  KEY `cid` (`cid`),
  KEY `code` (`code`),
  KEY `title` (`title`),
  KEY `discount_price` (`discount_price`),
  KEY `price` (`price`),
  KEY `shouji_price` (`shouji_price`),
  KEY `starttime` (`starttime`),
  KEY `endtime` (`endtime`),
  KEY `nick` (`nick`),
  KEY `data_id` (`data_id`),
  KEY `addtime` (`addtime`),
  KEY `del` (`del`),
  KEY `top` (`top`),
  KEY `top_stime` (`top_stime`),
  KEY `top_etime` (`top_etime`),
  KEY `oversell` (`oversell`),
  KEY `sort` (`sort`),
  KEY `xiajia` (`xiajia`),
  KEY `domain` (`domain`),
  KEY `web_id` (`web_id`),
  KEY `quan_stime` (`quan_stime`),
  KEY `quan_etime` (`quan_etime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>