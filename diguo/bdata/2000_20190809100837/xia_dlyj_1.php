<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_dlyj`;");
E_C("CREATE TABLE `xia_dlyj` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `gong` varchar(100) DEFAULT NULL,
  `lsmonth` varchar(100) DEFAULT NULL,
  `lsyj` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=166 DEFAULT CHARSET=utf8");
E_D("replace into `xia_dlyj` values('151','A00001','2019年04月','1000');");
E_D("replace into `xia_dlyj` values('152','A00001','2019年05月','2000');");
E_D("replace into `xia_dlyj` values('153','A00001','2019年06月','3000');");
E_D("replace into `xia_dlyj` values('154','A00001','2019年07月','500');");
E_D("replace into `xia_dlyj` values('155','A00001','2019年08月','2000');");
E_D("replace into `xia_dlyj` values('156','B00003','2019年04月','123');");
E_D("replace into `xia_dlyj` values('157','B00003','2019年05月','3333');");
E_D("replace into `xia_dlyj` values('158','B00003','2019年06月','5682');");
E_D("replace into `xia_dlyj` values('159','B00003','2019年07月','345');");
E_D("replace into `xia_dlyj` values('160','B00003','2019年08月','3258');");
E_D("replace into `xia_dlyj` values('161','D00006','2019年04月','156');");
E_D("replace into `xia_dlyj` values('162','D00006','2019年05月','3256');");
E_D("replace into `xia_dlyj` values('163','D00006','2019年06月','25852');");
E_D("replace into `xia_dlyj` values('164','D00006','2019年07月','1246');");
E_D("replace into `xia_dlyj` values('165','D00006','2019年08月','2253');");

require("../../inc/footer.php");
?>