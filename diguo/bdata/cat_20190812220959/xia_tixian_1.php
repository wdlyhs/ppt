<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_tixian`;");
E_C("CREATE TABLE `xia_tixian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `money` double(10,2) NOT NULL DEFAULT '0.00',
  `money2` double(10,2) NOT NULL DEFAULT '0.00',
  `code` varchar(50) DEFAULT NULL,
  `addtime` int(10) NOT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `realname` varchar(30) DEFAULT NULL,
  `mobile` bigint(20) NOT NULL DEFAULT '0',
  `why` varchar(255) DEFAULT NULL,
  `remark` text,
  `type` tinyint(1) NOT NULL DEFAULT '2',
  `api_return` varchar(100) DEFAULT NULL,
  `tool` int(1) NOT NULL DEFAULT '1',
  `wait` tinyint(1) NOT NULL DEFAULT '0',
  `dotime` int(10) DEFAULT '0',
  `del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `code` (`code`),
  KEY `ip` (`ip`),
  KEY `del` (`del`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `xia_tixian` values('1','3682','11.00','11.00','ah191516@163.com','1564494050','127.0.0.1','1','小清','15606061987',NULL,'','2','','1','0','1564494075','0');");
E_D("replace into `xia_tixian` values('2','3682','100.00','100.00','ah191516@163.com','1564494158','127.0.0.1','1','小清','15606061987',NULL,'','2','','1','0','1564494167','0');");
E_D("replace into `xia_tixian` values('3','3681','1000.00','1000.00','chh0158a@sina.com.cn','1564803203','127.0.0.1','1','小黄','18558752805',NULL,'','2','','1','0','1564804163','0');");
E_D("replace into `xia_tixian` values('4','3681','14.00','14.00',NULL,'1564805209','127.0.0.1','1','小黄','18558752805',NULL,'','2','','1','0','1564805236','0');");
E_D("replace into `xia_tixian` values('5','3681','12.00','12.00',NULL,'1564806507','127.0.0.1','1','小黄','18558752805',NULL,'','2','','1','0','1564806628','0');");
E_D("replace into `xia_tixian` values('6','3681','112.00','112.00',NULL,'1564807199','127.0.0.1','1','小黄','18558752805',NULL,'','2','','1','0','1564807210','0');");
E_D("replace into `xia_tixian` values('7','3681','22.00','22.00',NULL,'1564807268','127.0.0.1','1','小黄','18558752805',NULL,'','2','','1','0','1564807317','0');");
E_D("replace into `xia_tixian` values('8','3681','22.00','22.00','chh0158a@sina.com.cn','1564807404','127.0.0.1','1','小黄','18558752805',NULL,'','2','','1','0','1564807526','0');");
E_D("replace into `xia_tixian` values('9','3681','12.00','12.00','chh0158a@sina.com.cn','1564807546','127.0.0.1','1','小黄','18558752805',NULL,'','2','','1','0','1564807588','0');");
E_D("replace into `xia_tixian` values('10','3681','300.00','300.00','chh0158a@sina.com.cn','1564807594','127.0.0.1','1','小黄','18558752805',NULL,'','2','','1','0','1564807601','0');");

require("../../inc/footer.php");
?>