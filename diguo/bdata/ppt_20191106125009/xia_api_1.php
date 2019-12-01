<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_api`;");
E_C("CREATE TABLE `xia_api` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `key` varchar(100) NOT NULL,
  `secret` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `code` varchar(10) NOT NULL,
  `open` int(1) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  `sys` tinyint(1) NOT NULL DEFAULT '0',
  `back_url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `xia_api` values('1','','','新浪微博','sina','0','0','1334223685','1',NULL);");
E_D("replace into `xia_api` values('2','','','QQ账号','qq','0','0','1334223685','1',NULL);");
E_D("replace into `xia_api` values('3','','','淘宝账号','tb','0','0','1334771963','1',NULL);");
E_D("replace into `xia_api` values('4','','','腾讯微博','qqweibo','0','0','1334811155','1',NULL);");
E_D("replace into `xia_api` values('5','','','开心账号','kaixin','0','0','1334811175','1',NULL);");

require("../../inc/footer.php");
?>