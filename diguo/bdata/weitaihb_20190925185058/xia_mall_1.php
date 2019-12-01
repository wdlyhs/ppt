<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_mall`;");
E_C("CREATE TABLE `xia_mall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `pinyin` varchar(100) DEFAULT NULL,
  `merchant` varchar(20) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `pindao_url` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `cid` int(11) NOT NULL DEFAULT '0',
  `fan` varchar(15) DEFAULT NULL,
  `des` varchar(255) DEFAULT '暂无',
  `content` text,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `yiqifaurl` varchar(255) DEFAULT NULL,
  `lm` tinyint(2) NOT NULL DEFAULT '0',
  `edate` bigint(11) NOT NULL DEFAULT '0',
  `renzheng` tinyint(1) NOT NULL DEFAULT '1',
  `duomaiid` int(11) DEFAULT '0',
  `yiqifaid` int(11) DEFAULT '0',
  `chanetid` int(11) DEFAULT '0',
  `chanet_draftid` int(11) DEFAULT '0',
  `chaneturl` varchar(255) DEFAULT NULL,
  `weiyiid` varchar(20) DEFAULT NULL,
  `wujiumiaoid` int(10) NOT NULL DEFAULT '0',
  `wujiumiaourl` varchar(255) DEFAULT NULL,
  `yqhid` int(11) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `merchantId` int(11) DEFAULT '0',
  `score` double(3,2) NOT NULL DEFAULT '0.00',
  `pjnum` int(11) NOT NULL DEFAULT '0',
  `fuwu` varchar(255) DEFAULT '货到付款：有 正规发票：有 运费政策：购满XX免',
  `del` tinyint(1) NOT NULL DEFAULT '0',
  `domain` varchar(30) DEFAULT NULL,
  `uid` int(11) DEFAULT '0',
  `tbnick` varchar(50) DEFAULT NULL,
  `is_search` tinyint(1) DEFAULT '0',
  `banner` varchar(255) DEFAULT NULL,
  `host` varchar(255) DEFAULT NULL,
  `suoding` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `merchant` (`merchant`),
  KEY `cid` (`cid`),
  KEY `sort` (`sort`),
  KEY `edate` (`edate`),
  KEY `duomaiid` (`duomaiid`),
  KEY `yiqifaid` (`yiqifaid`),
  KEY `chanetid` (`chanetid`),
  KEY `wujiumiaoid` (`wujiumiaoid`),
  KEY `yqhid` (`yqhid`),
  KEY `del` (`del`),
  KEY `domain` (`domain`),
  KEY `host` (`host`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>