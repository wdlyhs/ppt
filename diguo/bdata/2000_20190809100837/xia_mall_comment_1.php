<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_mall_comment`;");
E_C("CREATE TABLE `xia_mall_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mall_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `fen` tinyint(1) NOT NULL DEFAULT '0',
  `content` text,
  `addtime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mall_id` (`mall_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>