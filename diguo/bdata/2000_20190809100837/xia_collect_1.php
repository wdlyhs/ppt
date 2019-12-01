<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_collect`;");
E_C("CREATE TABLE `xia_collect` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `beizhu` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `laiyuan` tinyint(1) DEFAULT '0',
  `api_url` varchar(255) DEFAULT NULL,
  `sprice` double(10,2) DEFAULT '0.00',
  `eprice` double(10,2) DEFAULT '0.00',
  `cid_arr` text,
  `update_time` int(11) DEFAULT '0',
  `web_cid` int(11) DEFAULT '0',
  `api_kwd` varchar(255) DEFAULT NULL,
  `api_cid` int(11) DEFAULT '0',
  `yun_cid` text,
  `api_sort` char(20) DEFAULT NULL,
  `is_mall` char(50) DEFAULT NULL,
  `start_price` int(11) DEFAULT '0',
  `end_price` int(11) DEFAULT '0',
  `start_tk_rate` int(11) DEFAULT '0',
  `end_tk_rate` int(11) DEFAULT '0',
  `page_no` int(11) DEFAULT '0',
  `page_size` int(11) DEFAULT '0',
  `admin_name` varchar(255) DEFAULT NULL,
  `sys` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `xia_collect` values('5','0','9.9包邮','采集10元以下的包邮商品','jiu','1','http://www.fanlicheng.com/api.php?code=jiu','1.00','10.00',NULL,'1437199498','0','','0','a:8:{i:1;a:2:{s:3:\"yun\";s:5:\"10008\";s:5:\"bendi\";s:5:\"10008\";}i:2;a:2:{s:3:\"yun\";s:5:\"10007\";s:5:\"bendi\";s:5:\"10007\";}i:3;a:2:{s:3:\"yun\";s:5:\"10006\";s:5:\"bendi\";s:5:\"10006\";}i:4;a:2:{s:3:\"yun\";s:5:\"10005\";s:5:\"bendi\";s:5:\"10005\";}i:5;a:2:{s:3:\"yun\";s:5:\"10004\";s:5:\"bendi\";s:5:\"10004\";}i:6;a:2:{s:3:\"yun\";s:5:\"10003\";s:5:\"bendi\";s:5:\"10003\";}i:7;a:2:{s:3:\"yun\";s:5:\"10002\";s:5:\"bendi\";s:5:\"10002\";}i:8;a:2:{s:3:\"yun\";s:5:\"10001\";s:5:\"bendi\";s:5:\"10001\";}}','','','0','0','0','0','0','0','admin','1');");
E_D("replace into `xia_collect` values('6','0','值得买','采集带有介绍的推荐商品','zhidemai','1','http://www.fanlicheng.com/api.php?code=zhidemai','0.00','0.00',NULL,'1437181878','0','','0','a:8:{i:1;a:2:{s:3:\"yun\";s:5:\"10008\";s:5:\"bendi\";s:5:\"10008\";}i:2;a:2:{s:3:\"yun\";s:5:\"10007\";s:5:\"bendi\";s:5:\"10007\";}i:3;a:2:{s:3:\"yun\";s:5:\"10006\";s:5:\"bendi\";s:5:\"10006\";}i:4;a:2:{s:3:\"yun\";s:5:\"10005\";s:5:\"bendi\";s:5:\"10005\";}i:5;a:2:{s:3:\"yun\";s:5:\"10004\";s:5:\"bendi\";s:5:\"10005\";}i:6;a:2:{s:3:\"yun\";s:5:\"10003\";s:5:\"bendi\";s:5:\"10006\";}i:7;a:2:{s:3:\"yun\";s:5:\"10002\";s:5:\"bendi\";s:5:\"10007\";}i:8;a:2:{s:3:\"yun\";s:5:\"10001\";s:5:\"bendi\";s:5:\"10008\";}}','','','0','0','0','0','0','0','admin','1');");
E_D("replace into `xia_collect` values('8','0','19元购','采集20元以下的特卖商品','shijiu','1','http://www.fanlicheng.com/api.php?code=shijiu','10.00','20.00',NULL,'1435654433','0','','0','a:8:{i:1;a:2:{s:3:\"yun\";s:5:\"10008\";s:5:\"bendi\";s:5:\"10008\";}i:2;a:2:{s:3:\"yun\";s:5:\"10007\";s:5:\"bendi\";s:5:\"10007\";}i:3;a:2:{s:3:\"yun\";s:5:\"10006\";s:5:\"bendi\";s:5:\"10006\";}i:4;a:2:{s:3:\"yun\";s:5:\"10005\";s:5:\"bendi\";s:5:\"10005\";}i:5;a:2:{s:3:\"yun\";s:5:\"10004\";s:5:\"bendi\";s:5:\"10005\";}i:6;a:2:{s:3:\"yun\";s:5:\"10003\";s:5:\"bendi\";s:5:\"10006\";}i:7;a:2:{s:3:\"yun\";s:5:\"10002\";s:5:\"bendi\";s:5:\"10007\";}i:8;a:2:{s:3:\"yun\";s:5:\"10001\";s:5:\"bendi\";s:5:\"10001\";}}','','','0','0','0','0','0','0','admin','1');");
E_D("replace into `xia_collect` values('13','0','京东优选','京东优选','jd','1','http://www.fanlicheng.com/api.php?code=jd','0.00','0.00',NULL,'1438236712','0','','0','a:8:{i:1;a:2:{s:3:\"yun\";s:5:\"10008\";s:5:\"bendi\";s:5:\"10008\";}i:2;a:2:{s:3:\"yun\";s:5:\"10007\";s:5:\"bendi\";s:5:\"10007\";}i:3;a:2:{s:3:\"yun\";s:5:\"10006\";s:5:\"bendi\";s:5:\"10006\";}i:4;a:2:{s:3:\"yun\";s:5:\"10005\";s:5:\"bendi\";s:5:\"10005\";}i:5;a:2:{s:3:\"yun\";s:5:\"10004\";s:5:\"bendi\";s:5:\"10004\";}i:6;a:2:{s:3:\"yun\";s:5:\"10003\";s:5:\"bendi\";s:5:\"10003\";}i:7;a:2:{s:3:\"yun\";s:5:\"10002\";s:5:\"bendi\";s:5:\"10002\";}i:8;a:2:{s:3:\"yun\";s:5:\"10001\";s:5:\"bendi\";s:5:\"10001\";}}','','','0','0','0','0','0','0','admin','1');");

require("../../inc/footer.php");
?>