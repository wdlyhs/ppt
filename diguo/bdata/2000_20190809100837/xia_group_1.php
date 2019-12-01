<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_group`;");
E_C("CREATE TABLE `xia_group` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `sort` int(10) DEFAULT '0',
  `pid` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=296 DEFAULT CHARSET=utf8");
E_D("replace into `xia_group` values('292','福州省立医院','0','289');");
E_D("replace into `xia_group` values('291','厦门','0','0');");
E_D("replace into `xia_group` values('290','漳州','0','0');");
E_D("replace into `xia_group` values('289','福州','10','0');");
E_D("replace into `xia_group` values('293','福州妇幼医院','0','289');");
E_D("replace into `xia_group` values('294','漳州中医院','0','290');");
E_D("replace into `xia_group` values('295','漳州民族医院','0','290');");

require("../../inc/footer.php");
?>