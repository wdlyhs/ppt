<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_product_attr`;");
E_C("CREATE TABLE `xia_product_attr` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) DEFAULT NULL,
  `aid` int(10) DEFAULT NULL,
  `value` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aid` (`aid`) USING BTREE,
  KEY `pid` (`pid`) USING BTREE,
  KEY `value` (`value`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=199 DEFAULT CHARSET=utf8");
E_D("replace into `xia_product_attr` values('198','206','1','12');");
E_D("replace into `xia_product_attr` values('197','206','2','19');");
E_D("replace into `xia_product_attr` values('196','206','2','18');");
E_D("replace into `xia_product_attr` values('195','206','2','17');");
E_D("replace into `xia_product_attr` values('194','206','2','12');");
E_D("replace into `xia_product_attr` values('193','206','2','9');");
E_D("replace into `xia_product_attr` values('192','206','2','8');");
E_D("replace into `xia_product_attr` values('191','206','2','7');");
E_D("replace into `xia_product_attr` values('190','206','2','2');");
E_D("replace into `xia_product_attr` values('142','207','1','1');");
E_D("replace into `xia_product_attr` values('141','207','3','');");
E_D("replace into `xia_product_attr` values('100','208','2','18');");
E_D("replace into `xia_product_attr` values('99','208','2','17');");
E_D("replace into `xia_product_attr` values('98','208','2','12');");
E_D("replace into `xia_product_attr` values('97','208','3','30');");
E_D("replace into `xia_product_attr` values('96','208','4','16:9');");
E_D("replace into `xia_product_attr` values('101','208','1','5');");
E_D("replace into `xia_product_attr` values('140','207','4','');");
E_D("replace into `xia_product_attr` values('189','206','2','1');");
E_D("replace into `xia_product_attr` values('121','215','4','');");
E_D("replace into `xia_product_attr` values('122','215','3','');");
E_D("replace into `xia_product_attr` values('123','215','2','1');");
E_D("replace into `xia_product_attr` values('124','215','2','2');");
E_D("replace into `xia_product_attr` values('125','215','2','12');");
E_D("replace into `xia_product_attr` values('126','215','2','18');");
E_D("replace into `xia_product_attr` values('127','215','1','3');");

require("../../inc/footer.php");
?>