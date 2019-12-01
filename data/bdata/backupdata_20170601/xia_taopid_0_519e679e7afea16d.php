<?php exit;?>
DROP TABLE IF EXISTS `xia_taopid`;
CREATE TABLE `xia_taopid` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  `default` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `xia_taopid` (`id`,`pid`,`title`,`url`,`addtime`,`default`) VALUES('1','mm_30558949_13792683_55592162','我要省','http://www.baidu.com','1478943643','0');
