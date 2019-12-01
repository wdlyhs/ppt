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
) ENGINE=MyISAM AUTO_INCREMENT=313 DEFAULT CHARSET=utf8");
E_D("replace into `xia_group` values('300','重庆医科大学附属第一医院','0','296');");
E_D("replace into `xia_group` values('299','陆军军医大学新桥医院','0','296');");
E_D("replace into `xia_group` values('298','重庆医科大学附属第二医院','0','296');");
E_D("replace into `xia_group` values('296','重庆','0','0');");
E_D("replace into `xia_group` values('301','重庆市人民医院','0','296');");
E_D("replace into `xia_group` values('302','陆军军医大学西南医院','0','296');");
E_D("replace into `xia_group` values('303','陆军军医大学大坪医院','0','296');");
E_D("replace into `xia_group` values('304','中国解放军第三二四医院','0','296');");
E_D("replace into `xia_group` values('305','重庆市第五人民医院','0','296');");
E_D("replace into `xia_group` values('306','重庆市中医院','0','296');");
E_D("replace into `xia_group` values('307','重庆市肿瘤医院','0','296');");
E_D("replace into `xia_group` values('308','重庆市人民医院(三院院区)','0','296');");
E_D("replace into `xia_group` values('309','重庆医科大学附属儿童医院','0','296');");
E_D("replace into `xia_group` values('311','福安','0','0');");
E_D("replace into `xia_group` values('312','闽东医院','0','311');");

require("../../inc/footer.php");
?>