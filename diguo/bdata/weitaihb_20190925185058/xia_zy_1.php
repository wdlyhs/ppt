<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_zy`;");
E_C("CREATE TABLE `xia_zy` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `img` varchar(222) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `weixin` varchar(122) DEFAULT NULL,
  `sort` int(10) DEFAULT '0',
  `bks` text,
  `sex` int(10) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>