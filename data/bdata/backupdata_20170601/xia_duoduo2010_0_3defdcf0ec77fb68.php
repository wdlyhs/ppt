<?php exit;?>
DROP TABLE IF EXISTS `xia_duoduo2010`;
CREATE TABLE `xia_duoduo2010` (
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `adminname` (`adminname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `xia_duoduo2010` (`id`,`adminname`,`adminpass`,`lastlogintime`,`addtime`,`lastloginip`,`loginnum`,`logintime`,`loginip`,`role`) VALUES('1','admin','22a8e7276df9acbd6ec0cd4bbe6b4e37','1496029850','1478942156','127.0.0.1','33','1496231728','127.0.0.1','1');
INSERT INTO `xia_duoduo2010` (`id`,`adminname`,`adminpass`,`lastlogintime`,`addtime`,`lastloginip`,`loginnum`,`logintime`,`loginip`,`role`) VALUES('2','wdlyhs','ad1819a08c335ba4eecdb75a539515df','0','1494468576','','0','0','','2');
INSERT INTO `xia_duoduo2010` (`id`,`adminname`,`adminpass`,`lastlogintime`,`addtime`,`lastloginip`,`loginnum`,`logintime`,`loginip`,`role`) VALUES('3','wdlyhss','ad1819a08c335ba4eecdb75a539515df','0','1496282378','','0','0','','4');
