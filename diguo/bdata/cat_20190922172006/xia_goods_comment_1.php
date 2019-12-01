<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_goods_comment`;");
E_C("CREATE TABLE `xia_goods_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_id` int(11) NOT NULL DEFAULT '0',
  `uid` int(11) NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL,
  `addtime` int(11) NOT NULL DEFAULT '0',
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `data_id` (`data_id`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>