<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `xia_dd`;");
E_C("CREATE TABLE `xia_dd` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(222) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `content` text,
  `addtime` varchar(23) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `area` varchar(199) DEFAULT NULL,
  `price` varchar(25) DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `isshow` int(2) DEFAULT '1',
  `sex` int(2) DEFAULT '1' COMMENT '1?????งต?2?????',
  `cz` varchar(111) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=gbk");
E_D("replace into `xia_dd` values('54',NULL,NULL,NULL,'1568638667','127.0.0.1',NULL,NULL,NULL,NULL,'1','1',NULL,NULL);");
E_D("replace into `xia_dd` values('53','อ๕ตยวๅ','18558752804','sdfg','1568634882','127.0.0.1',NULL,NULL,NULL,NULL,'1','1',NULL,NULL);");

require("../../inc/footer.php");
?>