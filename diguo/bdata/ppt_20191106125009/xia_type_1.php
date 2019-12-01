<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_type`;");
E_C("CREATE TABLE `xia_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `title` varchar(50) DEFAULT NULL,
  `sort` int(11) DEFAULT '0',
  `tag` varchar(20) NOT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `sys` tinyint(1) NOT NULL DEFAULT '0',
  `isshow` int(2) DEFAULT '1',
  `dan` int(2) DEFAULT NULL,
  `content` text,
  `url` varchar(255) DEFAULT NULL,
  `e_title` varchar(100) DEFAULT NULL,
  `jian_mod` varchar(100) DEFAULT NULL,
  `jian_act` varchar(100) DEFAULT NULL,
  `img` varchar(166) DEFAULT NULL,
  `pics` text,
  `etitle` varchar(200) DEFAULT NULL,
  `istj` int(2) DEFAULT '1',
  `img_ad` varchar(255) DEFAULT NULL,
  `model_id` int(10) DEFAULT NULL,
  `wap_content` text,
  `wap_desc` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `jump_url` varchar(255) DEFAULT NULL,
  `search` varchar(555) DEFAULT NULL,
  `list_type` int(10) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=740 DEFAULT CHARSET=utf8");
E_D("replace into `xia_type` values('724','0','PPT图表','0','article','1572268667','0','1',NULL,'','',NULL,NULL,NULL,NULL,NULL,'','1',NULL,'2',NULL,NULL,NULL,NULL,NULL,'','5');");
E_D("replace into `xia_type` values('725','0','配乐','1','article','1572268667','0','1',NULL,'','',NULL,NULL,NULL,NULL,NULL,'','1',NULL,'2',NULL,NULL,NULL,NULL,NULL,'','4');");
E_D("replace into `xia_type` values('726','0','视频模板','2','article','1572268667','0','1',NULL,'','',NULL,NULL,NULL,NULL,NULL,'','1',NULL,'2',NULL,NULL,NULL,NULL,NULL,'','3');");
E_D("replace into `xia_type` values('727','0','字体库','3','article','1572268667','0','1',NULL,'','',NULL,NULL,NULL,NULL,NULL,'','1',NULL,'2',NULL,NULL,NULL,NULL,NULL,'','1');");
E_D("replace into `xia_type` values('728','0','摄影图','4','article','1572268667','0','1',NULL,'','',NULL,NULL,NULL,NULL,NULL,'','1',NULL,'2',NULL,NULL,NULL,NULL,NULL,'','2');");
E_D("replace into `xia_type` values('729','0','广告设计','5','article','1572268667','0','1',NULL,'','',NULL,NULL,NULL,NULL,NULL,'','1',NULL,'2',NULL,NULL,NULL,NULL,NULL,'','2');");
E_D("replace into `xia_type` values('730','0','背景图库','6','article','1572268667','0','1',NULL,'','',NULL,NULL,NULL,NULL,NULL,'','1',NULL,'2',NULL,NULL,NULL,NULL,NULL,'','2');");
E_D("replace into `xia_type` values('731','0','免抠元素','7','article','1572268667','0','1',NULL,'','',NULL,NULL,NULL,NULL,NULL,'','1',NULL,'2',NULL,NULL,NULL,NULL,NULL,'','2');");
E_D("replace into `xia_type` values('732','0','Excel表格','8','article','1572268667','0','1',NULL,'','',NULL,NULL,NULL,NULL,NULL,'','1',NULL,'2',NULL,NULL,NULL,NULL,NULL,'','1');");
E_D("replace into `xia_type` values('733','0','Word模板','9','article','1572268667','0','1',NULL,'','',NULL,NULL,NULL,NULL,NULL,'','1',NULL,'2',NULL,NULL,NULL,NULL,NULL,'','1');");
E_D("replace into `xia_type` values('734','0','PPT模板','10','article','1572268667','0','1',NULL,'','',NULL,NULL,NULL,NULL,NULL,'','1',NULL,'2',NULL,NULL,NULL,NULL,NULL,'儿童教育PPT\r\n教育PPT\r\n安全教育PPT\r\n教育教学PPT\r\n小学教育PPT\r\n党课教育PPT\r\n主题PPT\r\n感恩的心PPT\r\n主题班会PPT\r\n小学生安全教育PPT','1');");
E_D("replace into `xia_type` values('735','0','单页分类','0','article','1572965371','0','0',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'4',NULL,NULL,NULL,NULL,NULL,'','1');");
E_D("replace into `xia_type` values('736','735','关于我们','0','article','1572965410','0','1',NULL,'熊猫办公（www.tukuppt.com）成立于2017年，隶属于迷南文化传媒（上海）有限公司，是国内领先的办公创意服务平台。\r\n我们专注为用户提供优质创意办公服务，让个人及企业用户节省时间和人力成本，提高办公效率。服务内容覆盖了PPT模板、Excel模板、Word模板、广告模板、背景图片、免抠元素、优质配图、视频模板、音效配乐等办公人群常用服务。\r\n我们和众多优秀设计师开展了深度内容合作，在充实自身优质资源储备的同时，更为用户提供了丰富实用的精品办公模板。上线以来，为广大用户提供了帮助，深受用户的青睐。\r\n联系地址 ：上海市徐汇区田州路159号莲花大厦905\r\n熊猫办公，助您高效办公。','',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'4',NULL,NULL,NULL,NULL,NULL,'','1');");
E_D("replace into `xia_type` values('737','735','用户协议','0','article','1572965410','0','1',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'4',NULL,NULL,NULL,NULL,NULL,'','1');");
E_D("replace into `xia_type` values('738','735','版权说明','0','article','1572965410','0','1',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'4',NULL,NULL,NULL,NULL,NULL,'','1');");
E_D("replace into `xia_type` values('739','735','ppt教程','0','article','1572965410','0','1',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'4',NULL,NULL,NULL,NULL,NULL,'','1');");

require("../../inc/footer.php");
?>