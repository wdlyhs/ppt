<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_link`;");
E_C("CREATE TABLE `xia_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '0',
  `img` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT '0',
  `ewm_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8");
E_D("replace into `xia_link` values('29','','dd','1531883751','0','template/default/src/images/links.png','0','http://www.fjfzxyt.com/template/default/images/header_ewm2.gif');");
E_D("replace into `xia_link` values('28','','dd','1531883746','0','template/default/src/images/links.png','0',NULL);");
E_D("replace into `xia_link` values('26','','d','1531883731','0','template/default/src/images/links.png','0',NULL);");
E_D("replace into `xia_link` values('27','','dd','1531883737','0','template/default/src/images/links.png','0',NULL);");

require("../../inc/footer.php");
?>