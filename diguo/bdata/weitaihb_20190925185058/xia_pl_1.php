<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_pl`;");
E_C("CREATE TABLE `xia_pl` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aid` int(10) DEFAULT NULL,
  `addtime` varchar(100) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `sort` int(10) DEFAULT NULL,
  `is_show` int(2) DEFAULT '1' COMMENT '1为不显示，2为显示',
  `ip` varchar(100) DEFAULT NULL,
  `uid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
E_D("replace into `xia_pl` values('20','2162','1569118343','我来年十','3906','0','2','127.0.0.1',NULL);");
E_D("replace into `xia_pl` values('21','2162','1569119064','我有点没有明白','3906','0','2','127.0.0.1',NULL);");
E_D("replace into `xia_pl` values('22','2162','1569119212','这些土著猫中选出最美丽的猫咪，开始了漫长的培育工作，最终这个被称为英国短毛猫的品种诞生了。1871年，英国短毛猫参加了伦敦的水晶宫博览会，起品种也从此开始被命名。1901年，英国猫俱乐部成立了，那时的英国短毛猫还是体型大而结实的蓝色毛种，很像法国的卡尔特猫，后来由于它们的后代','3906','0','2','127.0.0.1',NULL);");
E_D("replace into `xia_pl` values('26','2162','1569124866','不','3906','0','2','192.168.1.8',NULL);");
E_D("replace into `xia_pl` values('24','2162','1569119494','好好学习，天天向上','3906','0','2','127.0.0.1',NULL);");
E_D("replace into `xia_pl` values('27','2162','1569143098','asdfs','3903','0','2','127.0.0.1',NULL);");

require("../../inc/footer.php");
?>