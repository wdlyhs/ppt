<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_dlhdpm`;");
E_C("CREATE TABLE `xia_dlhdpm` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `gong` varchar(100) DEFAULT NULL,
  `pm` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8");
E_D("replace into `xia_dlhdpm` values('31','A00001','1');");
E_D("replace into `xia_dlhdpm` values('32','B00003','2');");
E_D("replace into `xia_dlhdpm` values('33','D00006','3');");

require("../../inc/footer.php");
?>