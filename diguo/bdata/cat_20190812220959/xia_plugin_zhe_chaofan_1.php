<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_plugin_zhe_chaofan`;");
E_C("CREATE TABLE `xia_plugin_zhe_chaofan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `url` varchar(500) NOT NULL,
  `img` varchar(255) NOT NULL,
  `fan` varchar(15) NOT NULL,
  `sdate` bigint(11) NOT NULL DEFAULT '0',
  `edate` bigint(11) NOT NULL DEFAULT '0',
  `hits` int(11) DEFAULT '0',
  `sort` int(10) NOT NULL DEFAULT '0',
  `addtime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `xia_plugin_zhe_chaofan` values('1','50元好货','https://temai.taobao.com/event805561.htm?q=POWOCjS4%2BQjzX1yJ4zwwto%2FEHeFogXWEwZTkuPFbmlOrvnjMZccKQH3K7I09scXU9DuFqHAbh%2FCie%2FpBy9wBFg%3D%3D','http://gtms02.alicdn.com/tps/i2/TB1P2t9IFXXXXaWXXXXtgciMFXX-1680-220.jpg','38','1478966400','1479657599','0','0','1479122341');");

require("../../inc/footer.php");
?>