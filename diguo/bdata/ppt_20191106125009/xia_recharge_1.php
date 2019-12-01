<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_recharge`;");
E_C("CREATE TABLE `xia_recharge` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `date_type` int(10) DEFAULT NULL,
  `date_num` varchar(100) DEFAULT NULL,
  `day_xiazai_num` varchar(100) DEFAULT '0' COMMENT '一天下载数量,0或空为不限制',
  `price` varchar(10) DEFAULT NULL,
  `yprice` varchar(10) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `sort` int(10) DEFAULT '0',
  `ydesc` varchar(100) DEFAULT NULL,
  `ycolor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `xia_recharge` values('1','包日VIP','1','1','2','0.01','','全站作品都可以下载','1','','');");
E_D("replace into `xia_recharge` values('2','包月VIP','3','10','10','0.01','35','单个低至0.1元','2','包月更优惠','green');");
E_D("replace into `xia_recharge` values('3','包年VIP','4','1','70','0.02','120','任意下载','3','买一送1','#007aff');");
E_D("replace into `xia_recharge` values('4','终身VIP','4','100','0','199','299','终身任意下载','4','超值即奖恢复原价','');");

require("../../inc/footer.php");
?>