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
) ENGINE=MyISAM AUTO_INCREMENT=172 DEFAULT CHARSET=utf8");
E_D("replace into `xia_arr` values('136','商务','29','20',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('137','简约','29','19',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('138','酷炫','29','18',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('139','微粒体','29','17',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('140','中国风','29','16',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('141','小清新','29','15',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('142','卡通','29','14',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('143','手绘党','29','13',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('144','政风','29','12',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('145','欧美风','29','11',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('146','科技风','29','10',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('147','扁平化','29','9',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('148','水彩','29','8',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('149','杂志风','29','7',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('150','IOS风','29','6',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('151','其他','29','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('152','其他','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('153','工作总结','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('154','教育培训','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('155','节假节日','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('156','企业宣传','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('157','党政军警','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('158','述职汇报','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('159','商业计划书','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('160','营销策划','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('161','相册图集','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('162','个人简历','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('163','岗位竞聘','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('164','晚会颁奖','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('165','产品发布','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('166','论文答辩','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('167','生日聚会','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('168','婚庆爱情','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('169','PPT图表','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('170','PPT背景','28','0',NULL,NULL,NULL);");
E_D("replace into `xia_arr` values('171','ppt','27','0',NULL,NULL,NULL);");

require("../../inc/footer.php");
?>