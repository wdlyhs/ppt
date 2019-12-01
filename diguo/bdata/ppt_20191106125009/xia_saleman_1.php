<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_saleman`;");
E_C("CREATE TABLE `xia_saleman` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `xia_saleman` values('1','黄小明');");
E_D("replace into `xia_saleman` values('2','张一清');");
E_D("replace into `xia_saleman` values('3','张春珠');");
E_D("replace into `xia_saleman` values('4','黄小康');");

require("../../inc/footer.php");
?>