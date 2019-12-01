<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_plugin_zhe_linkpush`;");
E_C("CREATE TABLE `xia_plugin_zhe_linkpush` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `platform` tinyint(1) NOT NULL,
  `key` varchar(20) DEFAULT NULL,
  `mod` varchar(20) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  `domain` varchar(50) NOT NULL,
  `num` int(11) NOT NULL,
  `tipinfo` varchar(255) DEFAULT NULL,
  `last_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>