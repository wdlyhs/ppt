<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_dljl`;");
E_C("CREATE TABLE `xia_dljl` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `gong` varchar(100) DEFAULT NULL,
  `jp` varchar(100) DEFAULT NULL,
  `jpnum` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=utf8");
E_D("replace into `xia_dljl` values('111','A00001','奖品A','1');");
E_D("replace into `xia_dljl` values('112','B00003','奖品A','2');");
E_D("replace into `xia_dljl` values('113','D00006','奖品A','3');");
E_D("replace into `xia_dljl` values('114','A00001','奖品B','1');");
E_D("replace into `xia_dljl` values('115','B00003','奖品B','2');");
E_D("replace into `xia_dljl` values('116','D00006','奖品B','3');");
E_D("replace into `xia_dljl` values('117','A00001','奖品C','1');");
E_D("replace into `xia_dljl` values('118','B00003','奖品C','2');");
E_D("replace into `xia_dljl` values('119','B00003','奖品D','2');");
E_D("replace into `xia_dljl` values('120','D00006','奖品D','3');");

require("../../inc/footer.php");
?>