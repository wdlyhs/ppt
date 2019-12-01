<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_doctor`;");
E_C("CREATE TABLE `xia_doctor` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cid` int(10) DEFAULT NULL COMMENT '所在医院',
  `title` varchar(100) DEFAULT NULL,
  `ks` int(10) DEFAULT '0' COMMENT '科室',
  `zhi` varchar(222) DEFAULT NULL,
  `area` varchar(200) DEFAULT NULL,
  `content` text,
  `sort` int(10) DEFAULT '0',
  `city` int(10) DEFAULT NULL,
  `sex` int(10) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `xia_doctor` values('1','295','张小丽','101','主任医师','内科','areaarea','0','290','2',NULL);");
E_D("replace into `xia_doctor` values('2','292','黄习','100','主任医师','内科,外科,神经科','内科,外科,神经科内科,外科,神经科内科,外科,神经科','0','289','1','http://images.qqyy.com/dpic/doctor/201403/146a27ca-7d30-4c7d-bae5-79ab97d95be5_20140320010313.jpg');");

require("../../inc/footer.php");
?>