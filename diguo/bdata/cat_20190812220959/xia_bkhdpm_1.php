<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_bkhdpm`;");
E_C("CREATE TABLE `xia_bkhdpm` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bkdm` varchar(100) DEFAULT NULL,
  `pm` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `xia_bkhdpm` values('13','11111','1');");
E_D("replace into `xia_bkhdpm` values('14','22222','2');");
E_D("replace into `xia_bkhdpm` values('15','33333','3');");

require("../../inc/footer.php");
?>