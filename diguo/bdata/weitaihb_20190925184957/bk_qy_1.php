<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `bk_qy`;");
E_C("CREATE TABLE `bk_qy` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bkdm` varchar(100) DEFAULT NULL,
  `qy` varchar(100) DEFAULT NULL,
  `lsyj` varchar(100) DEFAULT NULL,
  `fan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>