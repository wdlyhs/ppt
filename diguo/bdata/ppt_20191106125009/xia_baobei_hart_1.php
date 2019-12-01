<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_baobei_hart`;");
E_C("CREATE TABLE `xia_baobei_hart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `baobei_id` int(11) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  `uid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `baobei_id` (`baobei_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>