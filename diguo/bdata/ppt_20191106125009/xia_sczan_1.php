<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_sczan`;");
E_C("CREATE TABLE `xia_sczan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) DEFAULT NULL,
  `addtime` varchar(100) DEFAULT NULL,
  `type` int(2) DEFAULT '1' COMMENT '1为mgood,2为hgood',
  `uid` int(10) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=utf8");
E_D("replace into `xia_sczan` values('83','214','1572710068','1','3903','1');");
E_D("replace into `xia_sczan` values('84','215','1572710072','1','3903','1');");
E_D("replace into `xia_sczan` values('85','216','1572710075','1','3903','1');");
E_D("replace into `xia_sczan` values('105','206','1572712176','2','3903','1');");
E_D("replace into `xia_sczan` values('108','217','1572751163','1','3903','1');");
E_D("replace into `xia_sczan` values('109','220','1572751164','1','3903','1');");
E_D("replace into `xia_sczan` values('110','222','1572751166','1','3903','1');");
E_D("replace into `xia_sczan` values('115','216','1572796024','2','3903',NULL);");
E_D("replace into `xia_sczan` values('117','207','1572831145','1','3903',NULL);");

require("../../inc/footer.php");
?>