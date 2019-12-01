<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_role`;");
E_C("CREATE TABLE `xia_role` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `sys` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `xia_role` values('1','超级管理员','1','1');");
E_D("replace into `xia_role` values('2','普通管理员','1','0');");
E_D("replace into `xia_role` values('3','经理编辑人员','1','0');");
E_D("replace into `xia_role` values('5','业务员','1','0');");

require("../../inc/footer.php");
?>