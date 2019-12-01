<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_user`;");
E_C("CREATE TABLE `xia_user` (
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
  `openid` varchar(200) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `yyx` varchar(155) DEFAULT NULL,
  `bk` varchar(100) DEFAULT NULL,
  `bkdm` varchar(100) DEFAULT NULL,
  `gong` varchar(100) DEFAULT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=3689 DEFAULT CHARSET=utf8");
E_D("replace into `xia_user` values('3686','王一','e2010f5e094d7e1dfb42da036f90883f',NULL,NULL,NULL,'192.168.1.9','2','2019-08-08 21:31:01','0',NULL,NULL,'0.00','0.00','0','0','0','0','0','0','0','0',NULL,NULL,NULL,'0.00','0','0','0','0.00','0','0','0',NULL,NULL,'0','1','0','1','0',NULL,'0','1','0',NULL,NULL,'沙坪坝一','刘德华部','11111','A00001');");
E_D("replace into `xia_user` values('3687','赵二','7bf7d38db91a6dbbc5434d7cafb381e8',NULL,NULL,NULL,'127.0.0.1','1','2019-08-09 10:06:54','0',NULL,NULL,'0.00','0.00','0','0','0','0','0','0','0','0',NULL,NULL,NULL,'0.00','0','0','0','0.00','0','0','0',NULL,NULL,'0','1','0','1','0',NULL,'0','1','0',NULL,NULL,'石桥铺二','鹿晗课','22222','B00003');");
E_D("replace into `xia_user` values('3688','李三','1d53f173504ce0dc9c3dbcd639deb8e7',NULL,'0000-00-00 00:00:00','','192.168.1.8','1','2019-08-09 09:28:16','0',NULL,'1565258018@qq.com','0.00','0.00','0','0','0','0','0','0','0','0',NULL,NULL,NULL,'0.00','0','0','0','0.00','0','0','0',NULL,NULL,'0','1','0','1','0',NULL,'0','1','0',NULL,NULL,'永川','哈士奇部','33333','D00006');");

require("../../inc/footer.php");
?>