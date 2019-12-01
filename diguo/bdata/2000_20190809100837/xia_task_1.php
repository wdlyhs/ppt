<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_task`;");
E_C("CREATE TABLE `xia_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) DEFAULT NULL,
  `programname` varchar(100) DEFAULT NULL,
  `point` double(10,2) NOT NULL DEFAULT '0.00',
  `commission` double(10,2) NOT NULL DEFAULT '0.00',
  `eventid` varchar(100) DEFAULT NULL,
  `immediate` tinyint(1) NOT NULL DEFAULT '0',
  `addtime` datetime DEFAULT NULL,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eventid` (`eventid`),
  KEY `memberid` (`memberid`),
  KEY `del` (`del`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>