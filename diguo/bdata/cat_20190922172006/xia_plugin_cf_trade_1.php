<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_plugin_cf_trade`;");
E_C("CREATE TABLE `xia_plugin_cf_trade` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `trade_id` varchar(40) DEFAULT NULL,
  `uid` int(11) DEFAULT '0',
  `addtime` int(11) DEFAULT NULL,
  `commission` double(10,2) DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>