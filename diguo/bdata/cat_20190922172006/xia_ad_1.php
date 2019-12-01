<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_ad`;");
E_C("CREATE TABLE `xia_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `link` text,
  `title` varchar(100) DEFAULT NULL,
  `height` varchar(5) DEFAULT NULL,
  `width` varchar(5) DEFAULT NULL,
  `content` text,
  `adtype` varchar(255) DEFAULT NULL,
  `addtime` int(11) NOT NULL DEFAULT '0',
  `sys` tinyint(1) NOT NULL DEFAULT '0',
  `edate` int(10) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `tag` varchar(200) DEFAULT NULL,
  `bgcolor` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=utf8");
E_D("replace into `xia_ad` values('129','template/default/src/images/long_ad1.png','','幻灯片广告1','','','','幻灯片广告1','1531882265','0','1563379200','2','','');");
E_D("replace into `xia_ad` values('130','template/default/src/images/long_ad2.png','','幻灯片下面广告2','','','','幻灯片下面广告2','1531882421','0','1563379200','2','','');");

require("../../inc/footer.php");
?>