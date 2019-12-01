<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_article`;");
E_C("CREATE TABLE `xia_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `source` varchar(200) DEFAULT NULL,
  `content` text,
  `hits` int(11) DEFAULT '0',
  `sort` int(11) DEFAULT '0',
  `keyword` varchar(255) DEFAULT NULL,
  `desc` text,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `del` tinyint(1) NOT NULL DEFAULT '0',
  `tj` int(1) DEFAULT '0',
  `xia` varchar(233) DEFAULT NULL,
  `addtime1` varchar(222) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `shebei` varchar(100) DEFAULT NULL,
  `didian` varchar(200) DEFAULT NULL,
  `shijian` varchar(100) DEFAULT NULL,
  `jian_url` varchar(266) DEFAULT NULL,
  `school` varchar(200) DEFAULT NULL,
  `wei` varchar(100) DEFAULT NULL,
  `gid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `title` (`title`),
  KEY `sort` (`sort`),
  KEY `addtime` (`addtime`),
  KEY `del` (`del`)
) ENGINE=MyISAM AUTO_INCREMENT=2141 DEFAULT CHARSET=utf8");
E_D("replace into `xia_article` values('2132','675','资讯列表资讯列表资讯列表资讯列表','','','资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表','910','0','分销系统','','1565150557','0','1','',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,'1');");
E_D("replace into `xia_article` values('2133','675','资讯列表资讯列表资讯列表资讯列表','','','资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表','910','0','分销系统','','1565150557','0','1','',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,'1');");
E_D("replace into `xia_article` values('2134','675','资讯列表资讯列表资讯列表资讯列表','','','资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表','910','0','分销系统','','1565150557','0','1','',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,'1');");
E_D("replace into `xia_article` values('2135','675','资讯列表资讯列表资讯列表资讯列表','','','资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表','910','0','分销系统','','1565150557','0','1','',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,'1');");
E_D("replace into `xia_article` values('2136','675','资讯列表资讯列表资讯列表资讯列表','','','资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表','910','0','分销系统','','1565150557','0','1','',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,'1');");
E_D("replace into `xia_article` values('2137','675','资讯列表资讯列表资讯列表资讯列表','','','资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表','910','0','分销系统','','1565150557','0','1','',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,'1');");
E_D("replace into `xia_article` values('2138','675','资讯列表资讯列表资讯列表资讯列表','','','资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表','911','0','分销系统','','1565150557','0','1','',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,'1');");
E_D("replace into `xia_article` values('2139','675','资讯列表资讯列表资讯列表资讯列表','','','资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表','912','0','分销系统','','1565150557','0','1','',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,'1');");
E_D("replace into `xia_article` values('2140','675','资讯列表资讯列表资讯列表资讯列表','','','资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表','932','0','分销系统','','1565150557','0','1','',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,'1');");
E_D("replace into `xia_article` values('2131','675','资讯列表资讯列表资讯列表资讯列表','','','资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表资讯列表','910','0','分销系统','','1565150557','0','1','',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,'1');");

require("../../inc/footer.php");
?>