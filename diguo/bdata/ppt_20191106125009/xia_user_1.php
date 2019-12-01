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
  `mobile` varchar(150) NOT NULL DEFAULT '0',
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
  `auth_time` varchar(100) DEFAULT NULL,
  `status` int(2) DEFAULT '1',
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
) ENGINE=MyISAM AUTO_INCREMENT=3912 DEFAULT CHARSET=utf8");
E_D("replace into `xia_user` values('3903','wdlyhs','d0970714757783e6cf17b26fb8e2298f','','2019-09-17 21:10:17','127.0.0.1','127.0.0.1','11','2019-11-05 23:43:23','0',NULL,'1569143069@qq.com','0.00','0.00','0','0','0','0','0','0','0','0',NULL,NULL,NULL,'0.00','0','1','0','0.00','0','0','0',NULL,NULL,'0','1','0','1','0',NULL,'0','0','0',NULL,'',NULL,NULL,NULL,NULL,'1657016489','1');");
E_D("replace into `xia_user` values('3904','wdlyhs1','',NULL,'2019-09-17 21:27:12','127.0.0.1',NULL,'1','2019-09-17 21:27:12','0',NULL,NULL,'0.00','0.00','0','0','0','0','0','0','0','0',NULL,NULL,NULL,'0.00','0','1','0','0.00','0','0','0',NULL,NULL,'0','1','0','1','0',NULL,'0','0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1');");
E_D("replace into `xia_user` values('3905','wdlyhs11','d0970714757783e6cf17b26fb8e2298f',NULL,'2019-09-17 21:29:15','127.0.0.1',NULL,'1','2019-09-17 21:29:15','0',NULL,NULL,'0.00','0.00','0','0','0','0','0','0','0','0',NULL,NULL,NULL,'0.00','0','1','0','0.00','0','0','0',NULL,NULL,'0','1','0','1','0',NULL,'0','0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1');");
E_D("replace into `xia_user` values('3906','a131516','e10adc3949ba59abbe56e057f20f883e','天小天','2019-09-21 15:18:40','127.0.0.1','192.168.1.10','5','2019-09-22 16:32:26','0',NULL,'1569062693@qq.com','0.00','0.00','0','0','0','0','0','0','15606061987','0',NULL,NULL,NULL,'0.00','0','1','0','0.00','0','0','0',NULL,NULL,'0','1','0','1','0',NULL,'0','1','0',NULL,'upload/2019/0922/10330189002.jpg','','','','',NULL,'1');");
E_D("replace into `xia_user` values('3907','25888这','e10adc3949ba59abbe56e057f20f883e',NULL,'2019-09-21 17:24:41','192.168.1.8','127.0.0.1','3','2019-09-22 15:15:59','0',NULL,'1569062635@qq.com','0.00','0.00','0','0','0','0','0','0','0','0',NULL,NULL,NULL,'0.00','0','1','0','0.00','0','0','0',NULL,NULL,'0','1','0','1','0',NULL,'0','1','0',NULL,NULL,'','','','',NULL,'1');");
E_D("replace into `xia_user` values('3908','25888这顶替','d0970714757783e6cf17b26fb8e2298f',NULL,'2019-09-21 18:45:39','127.0.0.1','','1','2019-09-21 18:45:39','0',NULL,'1569062845@qq.com','0.00','0.00','0','0','0','0','0','0','0','0',NULL,NULL,NULL,'0.00','0','1','0','0.00','0','0','0',NULL,NULL,'0','1','0','1','0',NULL,'0','1','0',NULL,NULL,'','','','',NULL,'1');");
E_D("replace into `xia_user` values('3909','25888这工','d0970714757783e6cf17b26fb8e2298f','张小张','2019-09-21 18:47:56','127.0.0.1','','1','2019-09-21 18:47:56','0',NULL,'1569140928@qq.com','0.00','0.00','0','0','0','0','0','0','15606061987','0',NULL,NULL,NULL,'0.00','0','2','0','0.00','0','0','0',NULL,NULL,'0','1','0','1','0',NULL,'0','0','0',NULL,'upload/2019/0921/20154349795.jpg',NULL,NULL,NULL,NULL,NULL,'1');");
E_D("replace into `xia_user` values('3910','sdf122','93279e3308bdbbeed946fc965017f67a',NULL,'2019-11-02 18:35:56','127.0.0.1',NULL,'1','2019-11-02 18:35:56','0',NULL,NULL,'0.00','0.00','0','0','0','0','0','0','0','0',NULL,NULL,NULL,'0.00','0','1','0','0.00','0','0','0',NULL,NULL,'0','1','0','1','0',NULL,'0','0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1');");
E_D("replace into `xia_user` values('3911','adf','d0970714757783e6cf17b26fb8e2298f',NULL,'2019-11-02 18:45:06','127.0.0.1',NULL,'1','2019-11-02 18:45:06','0',NULL,NULL,'0.00','0.00','0','0','0','0','0','0','0','0',NULL,NULL,NULL,'0.00','0','1','0','0.00','0','0','0',NULL,NULL,'0','1','0','1','0',NULL,'0','0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1');");

require("../../inc/footer.php");
?>