<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_statement`;");
E_C("CREATE TABLE `xia_statement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) DEFAULT NULL,
  `taocj` double(10,2) NOT NULL DEFAULT '0.00',
  `taoyj` double(10,2) NOT NULL DEFAULT '0.00',
  `taolr` double(10,2) NOT NULL DEFAULT '0.00',
  `paicj` double(10,2) NOT NULL DEFAULT '0.00',
  `paiyj` double(10,2) NOT NULL DEFAULT '0.00',
  `pailr` double(10,2) NOT NULL DEFAULT '0.00',
  `mallcj` double(10,2) NOT NULL DEFAULT '0.00',
  `mallyj` double(10,2) NOT NULL DEFAULT '0.00',
  `malllr` double(10,2) NOT NULL DEFAULT '0.00',
  `taskyj` double(10,2) NOT NULL DEFAULT '0.00',
  `tasklr` double(10,2) NOT NULL DEFAULT '0.00',
  `gameyj` double(10,2) NOT NULL DEFAULT '0.00',
  `gamelr` double(10,2) NOT NULL DEFAULT '0.00',
  `stime` datetime DEFAULT NULL,
  `dtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `date` (`date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>