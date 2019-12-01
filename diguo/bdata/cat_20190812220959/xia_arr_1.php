<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_arr`;");
E_C("CREATE TABLE `xia_arr` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `cid` int(10) DEFAULT NULL,
  `sort` int(10) DEFAULT '0',
  `item` varchar(100) DEFAULT NULL,
  `dan` varchar(100) DEFAULT NULL,
  `gid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8");
E_D("replace into `xia_arr` values('102','中医科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('101','外科','26','0',NULL,NULL,'1');");
E_D("replace into `xia_arr` values('100','内科','26','0',NULL,NULL,'1');");

require("../../inc/footer.php");
?>