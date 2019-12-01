<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_duoduo2010`;");
E_C("CREATE TABLE `xia_duoduo2010` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(30) DEFAULT NULL,
  `adminpass` varchar(50) DEFAULT NULL,
  `lastlogintime` int(10) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  `lastloginip` varchar(15) DEFAULT NULL,
  `loginnum` int(11) DEFAULT '0',
  `logintime` int(10) NOT NULL DEFAULT '0',
  `loginip` varchar(15) DEFAULT NULL,
  `role` int(5) NOT NULL DEFAULT '0',
  `yname` varchar(100) DEFAULT NULL,
  `ymobile` varchar(100) DEFAULT NULL,
  `ystatus` int(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `adminname` (`adminname`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8");
E_D("replace into `xia_duoduo2010` values('1','admin','22a8e7276df9acbd6ec0cd4bbe6b4e37','1565314558','1478942156','127.0.0.1','137','1565316128','127.0.0.1','1',NULL,NULL,'1');");
E_D("replace into `xia_duoduo2010` values('2','wdlyhs','ad1819a08c335ba4eecdb75a539515df','1565314536','1494468576','127.0.0.1','169','1565314600','127.0.0.1','2',NULL,NULL,'1');");
E_D("replace into `xia_duoduo2010` values('16','aaa001','ad1819a08c335ba4eecdb75a539515df','1557540246','1539652682','127.0.0.1','3','1557805958','127.0.0.1','5','陈佳慧','18760210313','1');");
E_D("replace into `xia_duoduo2010` values('36','N021',NULL,'0','1557026759',NULL,'0','0',NULL,'5','周国生','13960188663','1');");
E_D("replace into `xia_duoduo2010` values('27','aaa013','22a8e7276df9acbd6ec0cd4bbe6b4e37','0','1541038161',NULL,'0','0',NULL,'5','夏宝','13601945809','1');");
E_D("replace into `xia_duoduo2010` values('34','N022',NULL,'0','1551168377',NULL,'0','0',NULL,'5','陈辉','17759303173','1');");
E_D("replace into `xia_duoduo2010` values('29','aaa015','22a8e7276df9acbd6ec0cd4bbe6b4e37','0','1542175054',NULL,'0','0',NULL,'5','郑依轩','15392356309','1');");
E_D("replace into `xia_duoduo2010` values('33','aaa017',NULL,'0','1551071774',NULL,'0','0',NULL,'5','陈涵涵','15060219962','1');");
E_D("replace into `xia_duoduo2010` values('32','aaa016',NULL,'0','1551071720',NULL,'0','0',NULL,'5','戴彬彬','13030955156','1');");

require("../../inc/footer.php");
?>