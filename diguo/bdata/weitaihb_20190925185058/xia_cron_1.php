<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_cron`;");
E_C("CREATE TABLE `xia_cron` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `leixing` int(1) NOT NULL DEFAULT '0',
  `plugin_name` varchar(30) DEFAULT NULL,
  `filename` varchar(50) DEFAULT NULL,
  `fangshi` int(1) NOT NULL DEFAULT '0',
  `execute_time` int(5) NOT NULL DEFAULT '0',
  `last_time` varchar(30) DEFAULT NULL,
  `jindu` int(1) NOT NULL DEFAULT '0',
  `dd` int(1) NOT NULL DEFAULT '0',
  `msg` varchar(200) DEFAULT NULL,
  `dev` varchar(200) DEFAULT NULL,
  `interval_time` int(10) NOT NULL DEFAULT '0',
  `random` int(10) NOT NULL DEFAULT '0',
  `sys` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `xia_cron` values('1','9.9包邮采集','0','2','','cron_caiji.php','1','10','2015-07-07 22:59:10','0','1','','5','1','0','0');");
E_D("replace into `xia_cron` values('2','19元购采集','0','2','','cron_caiji.php','1','21','2015-05-06 16:07:07','0','1','','8','5','0','1');");
E_D("replace into `xia_cron` values('3','采集京东优选','0','2','','cron_caiji.php','1','10','2015-06-19 17:26:23','0','1','','13','0','0','0');");
E_D("replace into `xia_cron` values('4','值得买采集','0','2','','cron_caiji.php','1','9','2015-05-02 00:53:54','0','1','','6','0','0','1');");
E_D("replace into `xia_cron` values('5','获取综合商城','0','0','','cron_mall.php','1','10','2015-07-09 11:21:21','0','1','','a:1:{i:0;b:0;}','0','0','1');");
E_D("replace into `xia_cron` values('6','后台发送邮件','0','0','','cron_email.php','2','0','2015-06-19 17:09:33','0','0','','a:1:{i:0;b:0;}','2','0','1');");
E_D("replace into `xia_cron` values('7','获取淘宝订单','0','0','','cron_tradelist.php','2','0','2015-06-16 20:11:11','0','0','','a:2:{s:13:\"admin_ex_time\";s:19:\"2015-04-23 14:45:14\";s:7:\"ex_time\";s:19:\"2015-04-23 02:00:00\";}','5','0','1');");
E_D("replace into `xia_cron` values('9','删除数据库缓存','0','0','','cron_delsqlcache.php','3','0','2015-06-19 17:57:20','0','0','','','0','1','1');");
E_D("replace into `xia_cron` values('10','删除淘宝缓存','0','0','','cron_deltaocache.php','3','0','2015-06-19 17:07:43','0','0','','a:1:{i:0;b:0;}','0','1000','1');");
E_D("replace into `xia_cron` values('12','删除远程获取缓存','0','0','','cron_delurlcache.php','3','0','2015-06-19 17:57:20','0','0','','','0','1','1');");
E_D("replace into `xia_cron` values('13','删除临时缓存','0','0','','cron_delsessioncache.php','3','0','2015-06-19 17:57:20','0','0','','','0','1','1');");

require("../../inc/footer.php");
?>