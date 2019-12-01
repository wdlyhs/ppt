<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_bkpm`;");
E_C("CREATE TABLE `xia_bkpm` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bkdm` varchar(100) DEFAULT NULL,
  `pm` varchar(100) DEFAULT NULL,
  `yj` varchar(100) DEFAULT NULL,
  `xz` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `xia_bkpm` values('13','11111','122','8500','绩优个人');");
E_D("replace into `xia_bkpm` values('14','22222','26','12741','绩优个人\\\\持续开单');");
E_D("replace into `xia_bkpm` values('15','33333','12','32763','绩优个人\\\\高转化个人\\\\持续开单');");

require("../../inc/footer.php");
?>