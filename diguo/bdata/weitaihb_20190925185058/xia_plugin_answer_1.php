<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_plugin_answer`;");
E_C("CREATE TABLE `xia_plugin_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `isshow` int(11) NOT NULL DEFAULT '0',
  `d1` varchar(255) DEFAULT NULL,
  `d2` varchar(255) DEFAULT NULL,
  `d3` varchar(255) DEFAULT NULL,
  `d4` varchar(255) DEFAULT NULL,
  `select` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>