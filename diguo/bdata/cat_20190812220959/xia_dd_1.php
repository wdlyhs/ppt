<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `xia_dd`;");
E_C("CREATE TABLE `xia_dd` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(222) DEFAULT NULL,
  `addtime` varchar(23) DEFAULT NULL,
  `status` int(2) DEFAULT '1',
  `uid` int(10) DEFAULT NULL,
  `pid` int(10) DEFAULT NULL,
  `order_sn` varchar(155) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `shtime` varchar(255) DEFAULT NULL,
  `shuid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=gbk");
E_D("replace into `xia_dd` values('78','测试商品','1564211657','3','3681','195','2019072703141750366','122','1564547382','3681');");
E_D("replace into `xia_dd` values('79','测试商品','1564455040','3','3681','195','2019073010504052382','122','1564446819','3682');");
E_D("replace into `xia_dd` values('80','测试商品','1564455529','3','3681','195','2019073010584911601','122','1564547143','3681');");
E_D("replace into `xia_dd` values('81','测试商品','1564556585','1','3681','195','2019073103030564576','122',NULL,NULL);");
E_D("replace into `xia_dd` values('82','测试商品','1564556587','1','3681','195','2019073103030766304','122',NULL,NULL);");
E_D("replace into `xia_dd` values('83','测试商品','1564556899','1','3681','195','2019073103081988358','122',NULL,NULL);");
E_D("replace into `xia_dd` values('84','测试商品','1564643855','2','3681','195','2019080103173562390','1',NULL,NULL);");
E_D("replace into `xia_dd` values('86','测试商品','1564819092','1','3681','195','2019080303581253269','1',NULL,NULL);");
E_D("replace into `xia_dd` values('87','测试商品','1564820456','1','3681','195','2019080304205677308','1',NULL,NULL);");

require("../../inc/footer.php");
?>