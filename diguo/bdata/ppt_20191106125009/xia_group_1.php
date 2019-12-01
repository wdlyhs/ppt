<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_group`;");
E_C("CREATE TABLE `xia_group` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `sort` int(10) DEFAULT '0',
  `pid` int(10) DEFAULT '0',
  `status` int(2) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=354 DEFAULT CHARSET=utf8");
E_D("replace into `xia_group` values('313','ppt','0','0','1');");
E_D("replace into `xia_group` values('314','场景','0','313','1');");
E_D("replace into `xia_group` values('315','风格','0','313','1');");
E_D("replace into `xia_group` values('317','其他','0','315','1');");
E_D("replace into `xia_group` values('318','商务','0','315','1');");
E_D("replace into `xia_group` values('319','简约','0','315','1');");
E_D("replace into `xia_group` values('320','酷炫','0','315','1');");
E_D("replace into `xia_group` values('321','微粒体','0','315','1');");
E_D("replace into `xia_group` values('322','中国风','0','315','1');");
E_D("replace into `xia_group` values('323','小清新','0','315','1');");
E_D("replace into `xia_group` values('324','卡通','0','315','1');");
E_D("replace into `xia_group` values('325','手绘','0','315','1');");
E_D("replace into `xia_group` values('326','党政风','0','315','1');");
E_D("replace into `xia_group` values('327','欧美风','0','315','1');");
E_D("replace into `xia_group` values('328','科技风','0','315','1');");
E_D("replace into `xia_group` values('329','扁平化','0','315','1');");
E_D("replace into `xia_group` values('330','水彩','0','315','1');");
E_D("replace into `xia_group` values('331','杂志风','0','315','1');");
E_D("replace into `xia_group` values('332','IOS风','0','315','1');");
E_D("replace into `xia_group` values('333','其他','0','314','1');");
E_D("replace into `xia_group` values('334','工作总结','0','314','1');");
E_D("replace into `xia_group` values('335','教育培训','0','314','1');");
E_D("replace into `xia_group` values('336','节假节日','0','314','1');");
E_D("replace into `xia_group` values('337','企业宣传','0','314','1');");
E_D("replace into `xia_group` values('338','党政军警','0','314','1');");
E_D("replace into `xia_group` values('339','述职汇报','0','314','1');");
E_D("replace into `xia_group` values('340','商业计划书','0','314','1');");
E_D("replace into `xia_group` values('341','营销策划','0','314','1');");
E_D("replace into `xia_group` values('342','相册图集','0','314','1');");
E_D("replace into `xia_group` values('343','个人简历','0','314','1');");
E_D("replace into `xia_group` values('344','岗位竞聘','0','314','1');");
E_D("replace into `xia_group` values('345','晚会颁奖','0','314','1');");
E_D("replace into `xia_group` values('346','产品发布','0','314','1');");
E_D("replace into `xia_group` values('347','论文答辩','0','314','1');");
E_D("replace into `xia_group` values('348','生日聚会','0','314','1');");
E_D("replace into `xia_group` values('349','婚庆爱情','0','314','1');");
E_D("replace into `xia_group` values('350','PPT图表','0','314','1');");
E_D("replace into `xia_group` values('351','PPT背景','0','314','1');");
E_D("replace into `xia_group` values('352','Word模板','0','0','1');");
E_D("replace into `xia_group` values('353','Excel表格','0','0','1');");

require("../../inc/footer.php");
?>