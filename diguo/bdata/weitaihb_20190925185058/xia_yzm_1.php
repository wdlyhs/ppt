<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_yzm`;");
E_C("CREATE TABLE `xia_yzm` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `addtime` varchar(100) DEFAULT NULL,
  `yzm` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `xia_yzm` values('6','18558752805','1558000266',NULL);");
E_D("replace into `xia_yzm` values('7','18558752805','1558001821',NULL);");
E_D("replace into `xia_yzm` values('8','18558752805','1563067184',NULL);");

require("../../inc/footer.php");
?>