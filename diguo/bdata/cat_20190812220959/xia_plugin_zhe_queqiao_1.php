<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_plugin_zhe_queqiao`;");
E_C("CREATE TABLE `xia_plugin_zhe_queqiao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `event_id` int(11) NOT NULL,
  `commission_rate` double(10,2) NOT NULL DEFAULT '0.00',
  `fencheng_rate` double(10,2) NOT NULL DEFAULT '0.00',
  `sdate` int(11) NOT NULL DEFAULT '0',
  `edate` int(11) NOT NULL DEFAULT '0',
  `code` varchar(20) DEFAULT NULL,
  `caiji_mode` tinyint(1) DEFAULT '0',
  `caiji_mark` tinyint(1) DEFAULT '0',
  `addtime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>