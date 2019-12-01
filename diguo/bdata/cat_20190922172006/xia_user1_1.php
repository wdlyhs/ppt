<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_user1`;");
E_C("CREATE TABLE `xia_user1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ddusername` varchar(30) DEFAULT NULL,
  `ddpassword` varchar(50) DEFAULT NULL,
  `realname` varchar(50) DEFAULT NULL,
  `regtime` datetime DEFAULT NULL,
  `regip` varchar(20) DEFAULT NULL,
  `logip` varchar(20) DEFAULT NULL,
  `loginnum` int(11) DEFAULT '0',
  `lastlogintime` datetime DEFAULT NULL,
  `lasttixian` int(10) NOT NULL DEFAULT '0',
  `alipay` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `money` double(10,2) DEFAULT '0.00',
  `jifenbao` double(10,2) NOT NULL DEFAULT '0.00',
  `jifen` int(11) NOT NULL DEFAULT '0',
  `txstatus` tinyint(1) DEFAULT '0',
  `dhstate` tinyint(1) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '0',
  `tjr` int(11) NOT NULL DEFAULT '0',
  `tjr_over` int(11) NOT NULL DEFAULT '0',
  `mobile` bigint(15) NOT NULL DEFAULT '0',
  `mobile_test` tinyint(1) NOT NULL DEFAULT '0',
  `qq` varchar(20) DEFAULT NULL,
  `pass_question` varchar(250) DEFAULT NULL,
  `pass_answer` varchar(250) DEFAULT NULL,
  `yitixian` double(10,2) DEFAULT '0.00',
  `search` tinyint(1) NOT NULL DEFAULT '0',
  `jihuo` tinyint(1) NOT NULL DEFAULT '0',
  `hart` int(10) NOT NULL DEFAULT '0',
  `tbyitixian` double(11,2) NOT NULL DEFAULT '0.00',
  `ucid` int(11) NOT NULL DEFAULT '0',
  `hytx` tinyint(1) NOT NULL DEFAULT '0',
  `signtime` int(10) NOT NULL DEFAULT '0',
  `tenpay` varchar(50) DEFAULT NULL,
  `bank_name` varchar(20) DEFAULT NULL,
  `tbtxstatus` tinyint(1) NOT NULL DEFAULT '0',
  `txtool` tinyint(1) NOT NULL DEFAULT '1',
  `bank_code` varchar(20) DEFAULT '0',
  `platform` tinyint(1) NOT NULL DEFAULT '1',
  `trade_uid` varchar(200) DEFAULT '0',
  `tbnick` varchar(200) DEFAULT NULL,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  `type` int(1) DEFAULT '0',
  `signnum` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ddusername` (`ddusername`),
  UNIQUE KEY `email` (`email`),
  KEY `loginnum` (`loginnum`),
  KEY `lastlogintime` (`lastlogintime`),
  KEY `alipay` (`alipay`),
  KEY `money` (`money`),
  KEY `jifenbao` (`jifenbao`),
  KEY `jifen` (`jifen`),
  KEY `txstatus` (`txstatus`),
  KEY `dhstate` (`dhstate`),
  KEY `level` (`level`),
  KEY `tjr` (`tjr`),
  KEY `mobile` (`mobile`),
  KEY `ucid` (`ucid`),
  KEY `tbtxstatus` (`tbtxstatus`),
  KEY `platform` (`platform`),
  KEY `trade_uid` (`trade_uid`),
  KEY `del` (`del`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `xia_user1` values('1','185138902','d0970714757783e6cf17b26fb8e2298f',NULL,'2016-11-12 20:10:51','120.36.86.62',NULL,'1','2016-11-12 20:10:51','0',NULL,'185138902@qq.com','0.00','0.00','0','0','0','0','0','0','0','0',NULL,NULL,NULL,'0.00','0','1','0','0.00','0','0','0',NULL,NULL,'0','1','0','1','0',NULL,'0','0','0');");

require("../../inc/footer.php");
?>