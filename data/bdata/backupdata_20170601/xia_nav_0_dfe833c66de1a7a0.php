<?php exit;?>
DROP TABLE IF EXISTS `xia_nav`;
CREATE TABLE `xia_nav` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `url` text,
  `tip` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(5) NOT NULL DEFAULT '0',
  `hide` tinyint(1) NOT NULL DEFAULT '0',
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `auto` tinyint(1) NOT NULL DEFAULT '0',
  `target` tinyint(1) NOT NULL DEFAULT '0',
  `custom` varchar(255) DEFAULT NULL,
  `mod` varchar(50) DEFAULT NULL,
  `act` varchar(50) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `tag` varchar(10) DEFAULT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  `alt` varchar(30) DEFAULT NULL,
  `sys` tinyint(1) NOT NULL DEFAULT '0',
  `plugin` tinyint(1) NOT NULL DEFAULT '0',
  `lianjie` int(1) NOT NULL DEFAULT '0',
  `bankuai_name` varchar(50) DEFAULT NULL,
  `mod_name` varchar(50) DEFAULT NULL,
  `diaoyong` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `xia_nav` (`id`,`title`,`url`,`tip`,`sort`,`hide`,`type`,`auto`,`target`,`custom`,`mod`,`act`,`code`,`tag`,`addtime`,`pid`,`alt`,`sys`,`plugin`,`lianjie`,`bankuai_name`,`mod_name`,`diaoyong`) VALUES('1','首页','','0','1','0','0','0','0','','index','index','','index','1343495490','0','','1','0','0','','','0');
INSERT INTO `xia_nav` (`id`,`title`,`url`,`tip`,`sort`,`hide`,`type`,`auto`,`target`,`custom`,`mod`,`act`,`code`,`tag`,`addtime`,`pid`,`alt`,`sys`,`plugin`,`lianjie`,`bankuai_name`,`mod_name`,`diaoyong`) VALUES('10','精选专享','','0','2','0','0','0','0','','goods','index','','goods','1438176963','0','','0','0','0','','goods','1');
INSERT INTO `xia_nav` (`id`,`title`,`url`,`tip`,`sort`,`hide`,`type`,`auto`,`target`,`custom`,`mod`,`act`,`code`,`tag`,`addtime`,`pid`,`alt`,`sys`,`plugin`,`lianjie`,`bankuai_name`,`mod_name`,`diaoyong`) VALUES('14','比价搜索','','0','0','1','0','0','0','','mall','goods','','mall','1343495490','0','比一比','1','0','0','','','0');
INSERT INTO `xia_nav` (`id`,`title`,`url`,`tip`,`sort`,`hide`,`type`,`auto`,`target`,`custom`,`mod`,`act`,`code`,`tag`,`addtime`,`pid`,`alt`,`sys`,`plugin`,`lianjie`,`bankuai_name`,`mod_name`,`diaoyong`) VALUES('4','晒单秀','','0','5','0','0','0','0','','baobei','list','','baobei','1343495490','0','','1','0','0','','index','0');
INSERT INTO `xia_nav` (`id`,`title`,`url`,`tip`,`sort`,`hide`,`type`,`auto`,`target`,`custom`,`mod`,`act`,`code`,`tag`,`addtime`,`pid`,`alt`,`sys`,`plugin`,`lianjie`,`bankuai_name`,`mod_name`,`diaoyong`) VALUES('8','站点文章','','0','0','1','0','0','0','','article','index','','article','1343495490','0','','1','0','0','','','0');
INSERT INTO `xia_nav` (`id`,`title`,`url`,`tip`,`sort`,`hide`,`type`,`auto`,`target`,`custom`,`mod`,`act`,`code`,`tag`,`addtime`,`pid`,`alt`,`sys`,`plugin`,`lianjie`,`bankuai_name`,`mod_name`,`diaoyong`) VALUES('13','值得买','','0','0','0','0','0','0','','goods','index','zhidemai','goods','1348990106','10','','1','0','0','zhidemai','goods','2');
INSERT INTO `xia_nav` (`id`,`title`,`url`,`tip`,`sort`,`hide`,`type`,`auto`,`target`,`custom`,`mod`,`act`,`code`,`tag`,`addtime`,`pid`,`alt`,`sys`,`plugin`,`lianjie`,`bankuai_name`,`mod_name`,`diaoyong`) VALUES('12','19.9包邮','','0','0','0','0','0','0','','goods','index','shijiu','goods','1348990105','10','','1','0','0','shijiu','goods','2');
INSERT INTO `xia_nav` (`id`,`title`,`url`,`tip`,`sort`,`hide`,`type`,`auto`,`target`,`custom`,`mod`,`act`,`code`,`tag`,`addtime`,`pid`,`alt`,`sys`,`plugin`,`lianjie`,`bankuai_name`,`mod_name`,`diaoyong`) VALUES('5','积分商城','','0','6','0','0','0','0','','huan','list','','huan','1401696979','0','','1','0','0','','index','0');
INSERT INTO `xia_nav` (`id`,`title`,`url`,`tip`,`sort`,`hide`,`type`,`auto`,`target`,`custom`,`mod`,`act`,`code`,`tag`,`addtime`,`pid`,`alt`,`sys`,`plugin`,`lianjie`,`bankuai_name`,`mod_name`,`diaoyong`) VALUES('6','任务赚钱','','0','7','0','1','0','0','','task','index','','task','1401697176','0','','1','0','0','','index','0');
INSERT INTO `xia_nav` (`id`,`title`,`url`,`tip`,`sort`,`hide`,`type`,`auto`,`target`,`custom`,`mod`,`act`,`code`,`tag`,`addtime`,`pid`,`alt`,`sys`,`plugin`,`lianjie`,`bankuai_name`,`mod_name`,`diaoyong`) VALUES('3','购物返利','','0','4','0','0','0','0','','mall','index','','mall','1405411223','0','','1','0','0','','','0');
INSERT INTO `xia_nav` (`id`,`title`,`url`,`tip`,`sort`,`hide`,`type`,`auto`,`target`,`custom`,`mod`,`act`,`code`,`tag`,`addtime`,`pid`,`alt`,`sys`,`plugin`,`lianjie`,`bankuai_name`,`mod_name`,`diaoyong`) VALUES('11','9.9包邮','','0','0','0','0','0','0','','goods','index','jiu','goods','1348990104','10','','1','0','0','jiu','goods','2');
INSERT INTO `xia_nav` (`id`,`title`,`url`,`tip`,`sort`,`hide`,`type`,`auto`,`target`,`custom`,`mod`,`act`,`code`,`tag`,`addtime`,`pid`,`alt`,`sys`,`plugin`,`lianjie`,`bankuai_name`,`mod_name`,`diaoyong`) VALUES('2','淘宝返利','','0','3','0','2','0','0','','tao','index','','tao','1406167909','0','','0','0','0','','index','0');
