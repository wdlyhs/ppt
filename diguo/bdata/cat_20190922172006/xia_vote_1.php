<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_vote`;");
E_C("CREATE TABLE `xia_vote` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `addtime` varchar(100) DEFAULT NULL,
  `pid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ip` (`ip`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `xia_vote` values('7','193','127.0.0.1','1563203106','193');");
E_D("replace into `xia_vote` values('8','192','127.0.0.1','1563236924','192');");
E_D("replace into `xia_vote` values('10','188','127.0.0.1','1563238439','188');");
E_D("replace into `xia_vote` values('11','186','127.0.0.1','1563238597','186');");
E_D("replace into `xia_vote` values('12','194','127.0.0.1','1563240082','194');");
E_D("replace into `xia_vote` values('13','189','127.0.0.1','1563284598','189');");
E_D("replace into `xia_vote` values('14','185','127.0.0.1','1563324005','185');");

require("../../inc/footer.php");
?>