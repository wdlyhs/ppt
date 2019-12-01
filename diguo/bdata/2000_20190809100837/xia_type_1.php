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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=682 DEFAULT CHARSET=utf8");
E_D("replace into `xia_type` values('675','668','其他资讯','90','article','1565146696','0','1',NULL,'','',NULL,NULL,NULL,'',NULL,'','1','','1','','','purple','fa-list-alt','');");
E_D("replace into `xia_type` values('674','668','读保绑卡','92','article','1565146696','0','1',NULL,'','',NULL,NULL,NULL,'',NULL,'','1','','11','','','orange','fa-files-o',NULL);");
E_D("replace into `xia_type` values('673','668','挂号问诊','93','article','1565146696','0','1',NULL,'','',NULL,NULL,NULL,'',NULL,'','1','','11','','','yellow','fa-send-o',NULL);");
E_D("replace into `xia_type` values('672','668','线上理赔','94','article','1565146696','0','1',NULL,'','',NULL,NULL,NULL,'',NULL,'','1','','11','','','red','fa-rmb',NULL);");
E_D("replace into `xia_type` values('671','668','信息修改','95','article','1565146696','0','1',NULL,'','',NULL,NULL,NULL,'',NULL,'','1','','11','','','green','fa-edit',NULL);");
E_D("replace into `xia_type` values('670','668','保单查询','96','article','1565146696','0','1',NULL,'保单查询<span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span><span style=\"white-space:normal;\">保单查询</span>保单查询保单查询保单查询保单查询保单查询保单查询保单查询保单查询保单查询保单查询','',NULL,NULL,NULL,'',NULL,'','1','','11','','','primary','fa-search','http://www.sina.com');");
E_D("replace into `xia_type` values('669','0','员工信息','98','article','1565146626','0','1',NULL,'','index.php?mod=user&act=index',NULL,NULL,NULL,'',NULL,'','1','','4','','','yellow','fa-user','');");
E_D("replace into `xia_type` values('668','0','保单服务','99','article','1565146599','0','1',NULL,'','index.php?mod=bd&act=index&cid=668',NULL,NULL,NULL,'',NULL,'','1','','1','','','green','fa-tasks','');");
E_D("replace into `xia_type` values('667','0','医生查询','100','article','1565146586','0','1',NULL,'','index.php?mod=doctor&act=list',NULL,NULL,NULL,'',NULL,'','1','','2','','','primary','fa-search','');");
E_D("replace into `xia_type` values('676','669','个人激励查询','89','article','1565162079','0','1',NULL,'','index.php?mod=user&act=index',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'4',NULL,NULL,'','','');");
E_D("replace into `xia_type` values('677','669','个人英雄榜','88','article','1565162079','0','1',NULL,'','index.php?mod=user&act=dlnc&cid=677',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'4',NULL,NULL,'','','');");
E_D("replace into `xia_type` values('678','669','个人历史信息查询','87','article','1565162079','0','1',NULL,'','index.php?mod=user&act=dlls&cid=678',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'4',NULL,NULL,'','','');");
E_D("replace into `xia_type` values('679','669','部课激励查询','86','article','1565312684','0','1',NULL,'','index.php?mod=user&act=index1',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'4',NULL,NULL,'','','');");
E_D("replace into `xia_type` values('680','669','部课历史信息查询','85','article','1565313218','0','1',NULL,'','index.php?mod=user&act=bkls&cid=680',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'4',NULL,NULL,'','','');");
E_D("replace into `xia_type` values('681','669','部课英雄榜','84','article','1565313437','0','1',NULL,'','index.php?mod=user&act=bknc&cid=681',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'4',NULL,NULL,'','','');");

require("../../inc/footer.php");
?>