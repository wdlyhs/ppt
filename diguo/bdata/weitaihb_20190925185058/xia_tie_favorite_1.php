<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `xia_tie_favorite`;");
E_C("CREATE TABLE `xia_tie_favorite` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aid` int(10) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `addtime` varchar(222) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=gbk");
E_D("replace into `xia_tie_favorite` values('9','16','5582','1497497045');");
E_D("replace into `xia_tie_favorite` values('10','21','5587','1498365212');");
E_D("replace into `xia_tie_favorite` values('11','21','5590','1498643433');");
E_D("replace into `xia_tie_favorite` values('12','7','5595','1498745312');");
E_D("replace into `xia_tie_favorite` values('14','2','5592','1501929265');");
E_D("replace into `xia_tie_favorite` values('15','18','5592','1506181821');");
E_D("replace into `xia_tie_favorite` values('16','21','5609','1506273387');");
E_D("replace into `xia_tie_favorite` values('18','44','1298','1506934754');");
E_D("replace into `xia_tie_favorite` values('19','40','1298','1545444817');");

require("../../inc/footer.php");
?>