<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_bksale`;");
E_C("CREATE TABLE `xia_bksale` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bkdm` varchar(100) DEFAULT NULL,
  `cp` varchar(100) DEFAULT NULL,
  `cpnum` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8");
E_D("replace into `xia_bksale` values('33','11111','产品A','111');");
E_D("replace into `xia_bksale` values('34','11111','产品','222');");
E_D("replace into `xia_bksale` values('35','22222','产品A','123');");
E_D("replace into `xia_bksale` values('36','22222','产品B','431');");
E_D("replace into `xia_bksale` values('37','22222','产品C','231');");
E_D("replace into `xia_bksale` values('38','33333','产品D','565');");
E_D("replace into `xia_bksale` values('39','33333','产品B','557');");
E_D("replace into `xia_bksale` values('40','33333','产品C','324');");

require("../../inc/footer.php");
?>