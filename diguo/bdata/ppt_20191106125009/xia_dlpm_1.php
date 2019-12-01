<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_dlpm`;");
E_C("CREATE TABLE `xia_dlpm` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `gong` varchar(100) DEFAULT NULL,
  `pm` varchar(100) DEFAULT NULL,
  `yj` varchar(100) DEFAULT NULL,
  `xz` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8");
E_D("replace into `xia_dlpm` values('37','A00001','122','8500','绩优个人');");
E_D("replace into `xia_dlpm` values('38','B00003','26','12741','绩优个人\\\\持续开单');");
E_D("replace into `xia_dlpm` values('39','D00006','12','32763','绩优个人\\\\高转化个人\\\\持续开单');");

require("../../inc/footer.php");
?>