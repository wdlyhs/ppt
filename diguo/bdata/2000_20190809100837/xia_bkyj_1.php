<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_bkyj`;");
E_C("CREATE TABLE `xia_bkyj` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bkdm` varchar(100) DEFAULT NULL,
  `lsmonth` varchar(100) DEFAULT NULL,
  `lsyj` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8");
E_D("replace into `xia_bkyj` values('61','11111','2019年04月','1000');");
E_D("replace into `xia_bkyj` values('62','11111','2019年05月','2000');");
E_D("replace into `xia_bkyj` values('63','11111','2019年06月','3000');");
E_D("replace into `xia_bkyj` values('64','11111','2019年07月','500');");
E_D("replace into `xia_bkyj` values('65','11111','2019年08月','2000');");
E_D("replace into `xia_bkyj` values('66','22222','2019年04月','123');");
E_D("replace into `xia_bkyj` values('67','22222','2019年05月','3333');");
E_D("replace into `xia_bkyj` values('68','22222','2019年06月','5682');");
E_D("replace into `xia_bkyj` values('69','22222','2019年07月','345');");
E_D("replace into `xia_bkyj` values('70','22222','2019年08月','3258');");
E_D("replace into `xia_bkyj` values('71','333333','2019年04月','156');");
E_D("replace into `xia_bkyj` values('72','333333','2019年05月','3256');");
E_D("replace into `xia_bkyj` values('73','333333','2019年06月','25852');");
E_D("replace into `xia_bkyj` values('74','333333','2019年07月','1246');");
E_D("replace into `xia_bkyj` values('75','333333','2019年08月','2253');");

require("../../inc/footer.php");
?>