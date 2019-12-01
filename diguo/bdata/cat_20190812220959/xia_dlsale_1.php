<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_dlsale`;");
E_C("CREATE TABLE `xia_dlsale` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `gong` varchar(100) DEFAULT NULL,
  `jp` varchar(100) DEFAULT NULL,
  `jpnum` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=142 DEFAULT CHARSET=utf8");
E_D("replace into `xia_dlsale` values('132','A00001','产品A','5');");
E_D("replace into `xia_dlsale` values('133','B00003','产品A','7');");
E_D("replace into `xia_dlsale` values('134','D00006','产品A','12');");
E_D("replace into `xia_dlsale` values('135','A00001','产品B','7');");
E_D("replace into `xia_dlsale` values('136','B00003','产品B','1');");
E_D("replace into `xia_dlsale` values('137','D00006','产品B','3');");
E_D("replace into `xia_dlsale` values('138','A00001','产品C','5');");
E_D("replace into `xia_dlsale` values('139','B00003','产品C','7');");
E_D("replace into `xia_dlsale` values('140','B00003','产品A','7');");
E_D("replace into `xia_dlsale` values('141','D00006','产品A','12');");

require("../../inc/footer.php");
?>