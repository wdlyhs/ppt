<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_attribute`;");
E_C("CREATE TABLE `xia_attribute` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(155) DEFAULT NULL,
  `cid` int(10) DEFAULT NULL,
  `sort` int(10) DEFAULT '0',
  `input_type` int(10) DEFAULT '1',
  `value` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `xia_attribute` values('1','风格','734','0','2','商务\r\n简约\r\n酷炫\r\n微粒体\r\n中国风\r\n小清新\r\n卡通\r\n手绘\r\n党政风\r\n欧美风\r\n科技风\r\n扁平化\r\n水彩\r\n杂志风\r\nIOS风\r\n其他');");
E_D("replace into `xia_attribute` values('2','场景','734','0','3','工作总结\r\n教育培训\r\n节假节日\r\n企业宣传\r\n党政军警\r\n述职汇报\r\n商业计划书\r\n营销策划\r\n相册图集\r\n个人简历\r\n岗位竞聘\r\n晚会颁奖\r\n产品发布\r\n论文答辩\r\n生日聚会\r\n婚庆爱情\r\nPPT图表\r\nPPT背景\r\n其他');");
E_D("replace into `xia_attribute` values('3','页数','734','0','1','');");
E_D("replace into `xia_attribute` values('4','比例','734','0','1','');");
E_D("replace into `xia_attribute` values('5','场景','733','0','3','简历\r\n手抄报/小报\r\n背景/信纸\r\n工作范文\r\n人事管理\r\n行政管理\r\n校园教育\r\n贺卡\r\n邀请函\r\nWord设计\r\nXMind\r\n其他');");

require("../../inc/footer.php");
?>