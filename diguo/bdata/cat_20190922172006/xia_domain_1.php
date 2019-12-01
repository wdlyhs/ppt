<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_domain`;");
E_C("CREATE TABLE `xia_domain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mod` varchar(20) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `url` varchar(50) NOT NULL,
  `close` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>