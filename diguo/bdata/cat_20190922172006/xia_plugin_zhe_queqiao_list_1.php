<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_plugin_zhe_queqiao_list`;");
E_C("CREATE TABLE `xia_plugin_zhe_queqiao_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `cid` int(11) NOT NULL DEFAULT '0',
  `data_id` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  `discount_price` double(10,2) NOT NULL DEFAULT '0.00',
  `shouji_price` double(10,2) NOT NULL DEFAULT '0.00',
  `fanli_bl` double(4,2) DEFAULT '0.00',
  `sell` int(11) DEFAULT '0',
  `baoyou` tinyint(1) DEFAULT '0',
  `laiyuan` varchar(20) DEFAULT NULL,
  `laiyuan_type` tinyint(1) DEFAULT '0',
  `starttime` int(11) NOT NULL DEFAULT '0',
  `endtime` int(11) NOT NULL DEFAULT '0',
  `tg_url` text NOT NULL,
  `code` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>