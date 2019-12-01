<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_nav`;");
E_C("CREATE TABLE `xia_nav` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `url` text,
  `tip` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(5) NOT NULL DEFAULT '0',
  `hide` tinyint(1) NOT NULL DEFAULT '0',
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `auto` tinyint(1) NOT NULL DEFAULT '0',
  `target` tinyint(1) NOT NULL DEFAULT '0',
  `custom` varchar(255) DEFAULT NULL,
  `mod` varchar(50) DEFAULT NULL,
  `act` varchar(50) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `tag` varchar(10) DEFAULT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  `alt` varchar(30) DEFAULT NULL,
  `sys` tinyint(1) NOT NULL DEFAULT '0',
  `plugin` tinyint(1) NOT NULL DEFAULT '0',
  `lianjie` int(1) NOT NULL DEFAULT '0',
  `bankuai_name` varchar(50) DEFAULT NULL,
  `mod_name` varchar(50) DEFAULT NULL,
  `diaoyong` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `xia_nav` values('1','首页','','0','1','0','0','0','0','','index','index',NULL,'index','1343495490','0','','1','0','0',NULL,NULL,'0');");
E_D("replace into `xia_nav` values('10','精选专享','','0','2','0','0','0','0',NULL,'goods','index','','goods','1438176963','0','','0','0','0','','goods','1');");
E_D("replace into `xia_nav` values('14','比价搜索','','0','0','1','0','0','0','','mall','goods',NULL,'mall','1343495490','0','比一比','1','0','0',NULL,NULL,'0');");
E_D("replace into `xia_nav` values('4','晒单秀','','0','5','0','0','0','0','','baobei','list','','baobei','1343495490','0','','1','0','0','','index','0');");
E_D("replace into `xia_nav` values('8','站点文章','','0','0','1','0','0','0','','article','index',NULL,'article','1343495490','0','','1','0','0',NULL,NULL,'0');");
E_D("replace into `xia_nav` values('13','值得买','','0','0','0','0','0','0',NULL,'goods','index','zhidemai','goods','1348990106','10','','1','0','0','zhidemai','goods','2');");
E_D("replace into `xia_nav` values('12','19.9包邮','','0','0','0','0','0','0',NULL,'goods','index','shijiu','goods','1348990105','10','','1','0','0','shijiu','goods','2');");
E_D("replace into `xia_nav` values('5','积分商城','','0','6','0','0','0','0','','huan','list','','huan','1401696979','0','','1','0','0','','index','0');");
E_D("replace into `xia_nav` values('6','任务赚钱','','0','7','0','1','0','0','','task','index','','task','1401697176','0','','1','0','0','','index','0');");
E_D("replace into `xia_nav` values('3','购物返利','','0','4','0','0','0','0','','mall','index',NULL,'mall','1405411223','0','','1','0','0',NULL,NULL,'0');");
E_D("replace into `xia_nav` values('11','9.9包邮','','0','0','0','0','0','0',NULL,'goods','index','jiu','goods','1348990104','10','','1','0','0','jiu','goods','2');");
E_D("replace into `xia_nav` values('2','淘宝返利','','0','3','0','2','0','0','','tao','index','','tao','1406167909','0','','0','0','0','','index','0');");

require("../../inc/footer.php");
?>