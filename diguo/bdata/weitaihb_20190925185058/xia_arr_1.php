<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_arr`;");
E_C("CREATE TABLE `xia_arr` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `cid` int(10) DEFAULT NULL,
  `sort` int(10) DEFAULT '0',
  `item` varchar(100) DEFAULT NULL,
  `dan` varchar(100) DEFAULT NULL,
  `gid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=135 DEFAULT CHARSET=utf8");
E_D("replace into `xia_arr` values('109','血液内科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('108','感染科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('107','耳鼻喉科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('106','肿瘤科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('105','血液科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('104','神经内科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('110','骨科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('111','儿科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('112','眼科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('113','中西医结合科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('114','肝胆外科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('115','消化内科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('116','心血管外科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('117','呼吸内科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('118','血管外科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('119','妇科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('120','内分泌科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('121','产科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('122','心内科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('123','乳腺科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('124','烧伤整形科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('125','中医科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('126','核医学科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('127','普通外科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('128','皮肤科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('129','中西医风湿科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('130','心胸外科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('131','乳腺中心','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('132','肾病科','26','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('133','生殖医学中心','26','0',NULL,NULL,NULL);");

require("../../inc/footer.php");
?>