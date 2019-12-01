<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_taopid`;");
E_C("CREATE TABLE `xia_taopid` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  `default` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `xia_taopid` values('1','mm_30558949_13792683_55592162','我要省','http://www.baidu.com','1478943643','0');");

require("../../inc/footer.php");
?>