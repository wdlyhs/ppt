<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_buy_log`;");
E_C("CREATE TABLE `xia_buy_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` bigint(15) NOT NULL DEFAULT '0',
  `iid` bigint(15) DEFAULT NULL,
  `day` datetime DEFAULT NULL,
  `keyword` varchar(200) DEFAULT NULL,
  `fxje` double(11,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `iid` (`iid`),
  KEY `day` (`day`),
  KEY `keyword` (`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>