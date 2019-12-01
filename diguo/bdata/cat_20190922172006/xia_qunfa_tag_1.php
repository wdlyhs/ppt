<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_qunfa_tag`;");
E_C("CREATE TABLE `xia_qunfa_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sign` int(11) DEFAULT '0',
  `title` varchar(200) DEFAULT NULL,
  `num` int(11) DEFAULT '0',
  `ynum` int(11) DEFAULT '0',
  `msg` varchar(200) DEFAULT NULL,
  `content` text,
  `addtime` datetime DEFAULT NULL,
  `reset` int(11) DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `sign` (`sign`),
  KEY `title` (`title`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>