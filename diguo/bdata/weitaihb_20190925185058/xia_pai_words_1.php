<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_pai_words`;");
E_C("CREATE TABLE `xia_pai_words` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wordName` varchar(200) DEFAULT NULL,
  `sClassid` int(11) NOT NULL DEFAULT '0',
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wordName` (`wordName`),
  KEY `sClassid` (`sClassid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>