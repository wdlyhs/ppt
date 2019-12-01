<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_browse`;");
E_C("CREATE TABLE `xia_browse` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `pid` int(10) DEFAULT NULL,
  `addtime` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `xia_browse` values('1','3683','195','1564391992','测试商品');");
E_D("replace into `xia_browse` values('5','3681','195','1564816888','测试商品');");
E_D("replace into `xia_browse` values('3','3682','195','2019-07-29 17:26:47','1');");
E_D("replace into `xia_browse` values('4','3684','195','1564727503','测试商品');");

require("../../inc/footer.php");
?>