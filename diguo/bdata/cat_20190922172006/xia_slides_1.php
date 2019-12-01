<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_slides`;");
E_C("CREATE TABLE `xia_slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `url` text,
  `title` varchar(100) DEFAULT NULL,
  `hide` int(11) DEFAULT '0',
  `addtime` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '10',
  `cid` varchar(10) DEFAULT NULL,
  `gid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=utf8");
E_D("replace into `xia_slides` values('83','upload/2019/0915/10294686940.jpg','','a','0','1568514588','0','1',NULL);");
E_D("replace into `xia_slides` values('84','upload/2019/0921/14225262190.jpg','','b','0','1568514604','0','1',NULL);");

require("../../inc/footer.php");
?>