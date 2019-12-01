<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_bkjl`;");
E_C("CREATE TABLE `xia_bkjl` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bkdm` varchar(100) DEFAULT NULL,
  `jp` varchar(100) DEFAULT NULL,
  `jpnum` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8");
E_D("replace into `xia_bkjl` values('33','11111','A','111');");
E_D("replace into `xia_bkjl` values('34','11111','B','222');");
E_D("replace into `xia_bkjl` values('35','22222','A','123');");
E_D("replace into `xia_bkjl` values('36','22222','B','431');");
E_D("replace into `xia_bkjl` values('37','22222','C','231');");
E_D("replace into `xia_bkjl` values('38','33333','D','565');");
E_D("replace into `xia_bkjl` values('39','33333','B','557');");
E_D("replace into `xia_bkjl` values('40','33333','C','324');");

require("../../inc/footer.php");
?>