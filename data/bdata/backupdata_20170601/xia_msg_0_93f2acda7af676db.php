<?php exit;?>
DROP TABLE IF EXISTS `xia_msg`;
CREATE TABLE `xia_msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `see` int(11) DEFAULT '0',
  `uid` int(11) NOT NULL DEFAULT '0',
  `senduser` int(11) NOT NULL DEFAULT '0',
  `sid` int(11) NOT NULL DEFAULT '0',
  `admin` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `senduser` (`senduser`),
  KEY `admin` (`admin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
