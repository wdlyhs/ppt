<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_kuaijie`;");
E_C("CREATE TABLE `xia_kuaijie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `xia_kuaijie` values('1','淘宝订单','index.php?mod=tradelist&act=list','2015-07-18 00:00:00');");
E_D("replace into `xia_kuaijie` values('2','商家订单','index.php?mod=mall_order&act=list','2015-07-18 00:00:00');");
E_D("replace into `xia_kuaijie` values('3','会员列表','index.php?mod=user&act=list','2015-07-18 00:00:00');");
E_D("replace into `xia_kuaijie` values('4','提现列表','index.php?mod=tixian&act=list','2015-07-18 00:00:00');");
E_D("replace into `xia_kuaijie` values('5','兑换记录','index.php?mod=duihuan&act=list','2015-07-18 00:00:00');");
E_D("replace into `xia_kuaijie` values('6','添加文章','index.php?mod=article&act=addedi','2015-07-18 00:00:00');");
E_D("replace into `xia_kuaijie` values('8','收入报表','index.php?mod=baobiao&act=list','2015-07-18 00:00:00');");

require("../../inc/footer.php");
?>