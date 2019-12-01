<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_arrtype`;");
E_C("CREATE TABLE `xia_arrtype` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `sort` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8");
E_D("replace into `xia_arrtype` values('27','类别','0');");
E_D("replace into `xia_arrtype` values('28','场景','0');");
E_D("replace into `xia_arrtype` values('29','风格','0');");

require("../../inc/footer.php");
?>