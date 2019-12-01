<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_game`;");
E_C("CREATE TABLE `xia_game` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `bmstime` varchar(100) DEFAULT NULL,
  `bmetime` varchar(100) DEFAULT NULL,
  `tpstime` varchar(100) DEFAULT NULL,
  `tpetime` varchar(100) DEFAULT NULL,
  `shstime` varchar(100) DEFAULT NULL,
  `shetime` varchar(100) DEFAULT NULL,
  `domain` varchar(100) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `content` text,
  `address` varchar(222) DEFAULT NULL,
  `tel` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `wx` varchar(100) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `sort` int(10) DEFAULT '0',
  `zz` text,
  `img1` varchar(200) DEFAULT NULL,
  `img2` varchar(200) DEFAULT NULL,
  `img3` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `xia_game` values('1','国锐杯','1564070400','1564502400','1565884800','1596124800','','','www.cas.com','upload/2019/0718/17354683174.jpg','<span style=\"white-space:normal;\">国锐杯介绍</span><span style=\"white-space:normal;\">国锐杯介绍</span><span style=\"white-space:normal;\">国锐杯介绍</span><span style=\"white-space:normal;\">国锐杯介绍</span><span style=\"white-space:normal;\">国锐杯介绍</span><span style=\"white-space:normal;\">国锐杯介绍</span><span style=\"white-space:normal;\">国锐杯介绍</span><span style=\"white-space:normal;\">国锐杯介绍</span><span style=\"white-space:normal;\">国锐杯介绍</span><span style=\"white-space:normal;\">国锐杯介绍</span><span style=\"white-space:normal;\">国锐杯介绍</span><span style=\"white-space:normal;\">国锐杯介绍</span>国锐杯介绍<span style=\"white-space:normal;\">国锐杯介绍</span>','三肯街86号','18558752805','yg19hxj@163.com','tv6363k','355002','0','<p class=\"active\">\r\n	合作伙伴：新浪 &nbsp;&nbsp;新浪\r\n</p>\r\n<p class=\"active\">\r\n	主办单位：中国XX大学身学习研究中心、XX希望公益基金会\r\n</p>\r\n<p>\r\n	承办单位：福州教育科技股份有限公司\r\n</p>\r\n<p>\r\n	客服热线：0591-51601030\r\n</p>\r\n<p>\r\n	传真：0591-62781112\r\n</p>\r\n<p>\r\n	地址：福州科学研究院\r\n</p>','http://wfxnew.leiang-ele.com/themes/default/statics/img/ewm.png','http://wfxnew.leiang-ele.com/themes/default/statics/img/ewm.png','upload/2019/0713/15525493537.jpg');");
E_D("replace into `xia_game` values('2','熊猫杯','','','','','','','qm.cas.com','http://www.wysfanli.com/upload/2017/0121/11352121936.jpg','熊猫杯熊猫杯熊猫杯熊猫杯熊猫杯熊猫杯熊猫杯熊猫杯熊猫杯熊猫杯熊猫杯熊猫杯','Si Ming Qu Jia He Lu 106Hao 35EShi','15606061987','yg29hxj@163.com','tv6363k_test','361004','0','<p class=\"active\">\r\n	合作伙伴：<a>新浪</a> &nbsp;&nbsp;<a>新浪</a> \r\n</p>\r\n<p class=\"active\">\r\n	主办单位：中国XX大学身学习研究中心、XX希望公益基金会\r\n</p>\r\n<p>\r\n	承办单位：福州教育科技股份有限公司\r\n</p>\r\n<p>\r\n	客服热线：0591-51601030\r\n</p>\r\n<p>\r\n	传真：0591-62781112\r\n</p>\r\n<p>\r\n	地址：福州科学研究院\r\n</p>',NULL,NULL,NULL);");

require("../../inc/footer.php");
?>