<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_goods_attribute`;");
E_C("CREATE TABLE `xia_goods_attribute` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `font_color` varchar(255) DEFAULT NULL,
  `bg_color` varchar(255) DEFAULT NULL,
  `ico` varchar(255) DEFAULT NULL,
  `beizhu` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT '0',
  `sys` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `sort` (`sort`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `xia_goods_attribute` values('1','拍改','#ffffff','#ff0000','','拍下改价格','3','1');");
E_D("replace into `xia_goods_attribute` values('2','包邮','#ffffff','#3399ff','','大部分地区包邮','1','1');");
E_D("replace into `xia_goods_attribute` values('3','专享','#ffffff','#0000ff','','本站专享','2','1');");
E_D("replace into `xia_goods_attribute` values('4','限购','#FFFFFF','#636','','限购','4','1');");
E_D("replace into `xia_goods_attribute` values('5','到付','#FFFFFF','#EC1A5B','','货到付款','5','1');");

require("../../inc/footer.php");
?>