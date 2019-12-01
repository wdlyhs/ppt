<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_slides`;");
E_C("CREATE TABLE `xia_slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `url` text,
  `title` varchar(100) DEFAULT NULL,
  `hide` int(11) DEFAULT '0',
  `addtime` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '10',
  `cid` varchar(10) DEFAULT NULL,
  `gid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8");
E_D("replace into `xia_slides` values('82','ad.jpg','','广告描述1','0','1562768731','0','1','1');");
E_D("replace into `xia_slides` values('81','ad.jpg','','广告描述2','0','1562768725','0','1','1');");

require("../../inc/footer.php");
?>