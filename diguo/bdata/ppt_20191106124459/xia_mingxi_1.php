<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_mingxi`;");
E_C("CREATE TABLE `xia_mingxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `shijian` varchar(50) NOT NULL,
  `money` double(10,2) DEFAULT '0.00',
  `jifen` int(5) NOT NULL DEFAULT '0',
  `addtime` datetime DEFAULT NULL,
  `source` varchar(250) DEFAULT NULL,
  `relate_id` int(11) NOT NULL DEFAULT '0',
  `leave_money` double(10,2) DEFAULT '0.00',
  `jifenbao` double(10,2) NOT NULL DEFAULT '0.00',
  `leave_jifenbao` double(10,2) NOT NULL DEFAULT '0.00',
  `leave_jifen` int(11) NOT NULL DEFAULT '0',
  `pid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `shijian` (`shijian`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `xia_mingxi` values('1','3682','103','24.40','0','2019-07-30 11:34:01','黄小明','0','48.80','0.00','0.00','0','195');");
E_D("replace into `xia_mingxi` values('2','3682','103','24.40','0','2019-07-30 11:35:01','黄小明','0','73.20','0.00','0.00','0','195');");
E_D("replace into `xia_mingxi` values('3','3683','104','12.20','0','2019-07-30 11:35:01','黄小明','0','36.60','0.00','0.00','0','195');");
E_D("replace into `xia_mingxi` values('4','3682','103','24.40','0','2019-07-30 12:20:31','黄小明','0','97.60','0.00','0.00','0','195');");
E_D("replace into `xia_mingxi` values('5','3683','104','12.20','0','2019-07-30 12:20:31','黄小明','0','48.80','0.00','0.00','0','195');");
E_D("replace into `xia_mingxi` values('6','3682','20','111.00','0','2019-07-30 16:37:01','','0','208.60','0.00','0.00','0','195');");
E_D("replace into `xia_mingxi` values('7','3682','21','-10.00','0','2019-07-30 16:37:28','','0','198.60','0.00','0.00','0',NULL);");
E_D("replace into `xia_mingxi` values('8','3682','9','-11.00','0','2019-07-30 21:41:16','支付宝：ah191516@163.com','1','187.60','0.00','0.00','0',NULL);");
E_D("replace into `xia_mingxi` values('9','3682','9','-100.00','0','2019-07-30 21:42:48','支付宝：ah191516@163.com','2','87.60','0.00','0.00','0',NULL);");
E_D("replace into `xia_mingxi` values('10','3681','20','1500.00','0','2019-07-31 12:32:18','','0','1500.00','0.00','0.00','0',NULL);");
E_D("replace into `xia_mingxi` values('11','3682','103','0.20','0','2019-08-01 15:18:31','黄小明','0','87.80','0.00','0.00','0','195');");
E_D("replace into `xia_mingxi` values('12','3683','104','0.10','0','2019-08-01 15:18:31','黄小明','0','48.90','0.00','0.00','0','195');");
E_D("replace into `xia_mingxi` values('13','3681','9','-1000.00','0','2019-08-03 11:49:25','支付宝：chh0158a@sina.com.cn','3','500.00','0.00','0.00','0',NULL);");
E_D("replace into `xia_mingxi` values('14','3681','9','-14.00','0','2019-08-03 12:07:17','支付宝：','4','486.00','0.00','0.00','0',NULL);");
E_D("replace into `xia_mingxi` values('15','3681','9','-12.00','0','2019-08-03 12:30:29','支付宝：','5','474.00','0.00','0.00','0',NULL);");
E_D("replace into `xia_mingxi` values('16','3681','9','-112.00','0','2019-08-03 12:40:11','支付宝：','6','362.00','0.00','0.00','0',NULL);");
E_D("replace into `xia_mingxi` values('17','3681','9','-22.00','0','2019-08-03 12:41:58','支付宝：','7','340.00','0.00','0.00','0',NULL);");
E_D("replace into `xia_mingxi` values('18','3681','9','-22.00','0','2019-08-03 12:45:27','支付宝：chh0158a@sina.com.cn','8','318.00','0.00','0.00','0',NULL);");
E_D("replace into `xia_mingxi` values('19','3681','9','-12.00','0','2019-08-03 12:46:29','支付宝：chh0158a@sina.com.cn','9','306.00','0.00','0.00','0',NULL);");
E_D("replace into `xia_mingxi` values('20','3681','9','-300.00','0','2019-08-03 12:46:42','支付宝：chh0158a@sina.com.cn','10','6.00','0.00','0.00','0',NULL);");

require("../../inc/footer.php");
?>