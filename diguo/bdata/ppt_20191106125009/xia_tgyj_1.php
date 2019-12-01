<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_tgyj`;");
E_C("CREATE TABLE `xia_tgyj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tjrid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `money` double(10,2) NOT NULL DEFAULT '0.00',
  `hytx` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`),
  KEY `tjrid` (`tjrid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>