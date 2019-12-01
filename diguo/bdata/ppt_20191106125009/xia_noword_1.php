<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_noword`;");
E_C("CREATE TABLE `xia_noword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `replace` varchar(50) DEFAULT NULL,
  `title_arr` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `xia_noword` values('1','硬币','****',NULL);");
E_D("replace into `xia_noword` values('2','百家乐','****',NULL);");
E_D("replace into `xia_noword` values('3','网赚','****',NULL);");

require("../../inc/footer.php");
?>