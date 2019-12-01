<?php exit;?>
DROP TABLE IF EXISTS `xia_link`;
CREATE TABLE `xia_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '0',
  `img` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `xia_link` (`id`,`url`,`title`,`addtime`,`type`,`img`,`sort`) VALUES('4','/','新三板资讯','1492845185','0','','0');
INSERT INTO `xia_link` (`id`,`url`,`title`,`addtime`,`type`,`img`,`sort`) VALUES('12','','我要省','1492845440','0','upload/2017/0422/15171916773.jpg','0');
