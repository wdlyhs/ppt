<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_enroll`;");
E_C("CREATE TABLE `xia_enroll` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT NULL,
  `sex` varchar(100) DEFAULT NULL,
  `birth` varchar(100) DEFAULT NULL,
  `nation` varchar(100) DEFAULT NULL COMMENT '民族',
  `code` varchar(200) DEFAULT NULL COMMENT '身份证号码',
  `img` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `group` int(10) DEFAULT NULL,
  `type` int(10) DEFAULT NULL,
  `major` varchar(100) DEFAULT NULL COMMENT '专业',
  `grade` varchar(100) DEFAULT NULL,
  `teacher` varchar(200) DEFAULT NULL,
  `teacher_mobile` varchar(200) DEFAULT NULL,
  `sort` int(10) DEFAULT NULL,
  `gid` int(10) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `status` int(10) DEFAULT '1',
  `addtime` varchar(100) DEFAULT NULL,
  `no_str` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `xia_enroll` values('7','我要省','男','1983-07-07','汉','352229198701103515','','厦门思明区光共小区3#205','15606060987','yg119hxj@163.com','98','96','机械专业','15606061987','老共','15606061987',NULL,'1','127.0.0.1','1','1563198847',NULL);");
E_D("replace into `xia_enroll` values('6','张小丽','男','1983-07-07','汉','352202198303191011','upload/2019/0715/11562339484.jpg','15606061987','15606061980','yg19hxj@163.com','99','96','机械专业','15606061987','小张','15606061987',NULL,'1','127.0.0.1','2','1563163022','');");
E_D("replace into `xia_enroll` values('3','陈小敏','女','1989-07-08','汉','35010419861115447x','upload/2019/0715/11260723606.jpg','福建宁德赛岐光明路111号','18558752800','yg19hxj@163.com','98','95','计算机维护','大学五年级','陈寸','15606061987',NULL,'1','127.0.0.1','1','1563161226',NULL);");
E_D("replace into `xia_enroll` values('4','陈铢泉','男','1983-01-07','汉','350627198303175027','upload/2019/0715/11492872896.jpg','福建福安塘头村黄兴路88号','18558752785','yg22hxj@163.com','98','96','计算机','大专五年级','陈雨','15606061987',NULL,'1','127.0.0.1','1','1563162608',NULL);");
E_D("replace into `xia_enroll` values('5','甘欲法','男','1985-07-07','汉','350124197311010010','upload/2019/0715/11524989313.jpg','福建福鼎秦屿镇太姥路123号','18558752801','yg19hxj@163.com','98','96','机械专业','三年级大专','陈寸','15606061987',NULL,'1','127.0.0.1','1','1563162769',NULL);");

require("../../inc/footer.php");
?>