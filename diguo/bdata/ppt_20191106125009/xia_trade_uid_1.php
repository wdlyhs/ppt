<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_trade_uid`;");
E_C("CREATE TABLE `xia_trade_uid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trade_uid` varchar(4) NOT NULL,
  `uid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `trade_uid` (`trade_uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>