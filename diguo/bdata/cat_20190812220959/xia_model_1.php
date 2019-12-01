<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `xia_model`;");
E_C("CREATE TABLE `xia_model` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `act` varchar(50) DEFAULT NULL,
  `mod` varchar(50) DEFAULT NULL,
  `sort` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk");
E_D("replace into `xia_model` values('1','文章模块','list','article','122');");
E_D("replace into `xia_model` values('2','医生模块','list','doctor','0');");
E_D("replace into `xia_model` values('4','单页模块','index','about','1333');");
E_D("replace into `xia_model` values('12','保单索引','index','bd','0');");
E_D("replace into `xia_model` values('11','保单模块','list','bd','0');");

require("../../inc/footer.php");
?>