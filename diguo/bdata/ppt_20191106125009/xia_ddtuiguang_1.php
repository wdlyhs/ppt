<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_ddtuiguang`;");
E_C("CREATE TABLE `xia_ddtuiguang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fuid` int(11) NOT NULL DEFAULT '0',
  `uid` int(11) NOT NULL DEFAULT '0',
  `order_id` int(11) NOT NULL DEFAULT '0',
  `mall` int(2) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `code` varchar(10) NOT NULL,
  `shuju_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `date` int(10) NOT NULL DEFAULT '0',
  `goods_id` varchar(32) DEFAULT NULL,
  `money` double(10,2) NOT NULL DEFAULT '0.00',
  `weiyi` varchar(16) NOT NULL,
  `pay_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `weiyi` (`weiyi`),
  KEY `fuid` (`fuid`),
  KEY `status` (`status`),
  KEY `code` (`code`),
  KEY `shuju_id` (`shuju_id`),
  KEY `date` (`date`),
  KEY `goods_id` (`goods_id`),
  KEY `pay_time` (`pay_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>