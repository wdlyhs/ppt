<?php exit;?>
DROP TABLE IF EXISTS `xia_dd`;
CREATE TABLE `xia_dd` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(222) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `content` text,
  `addtime` varchar(23) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `area` varchar(199) DEFAULT NULL,
  `money` varchar(25) DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `mj` varchar(100) DEFAULT NULL,
  `zhe` varchar(100) DEFAULT NULL,
  `ji` varchar(100) DEFAULT NULL,
  `zhu` varchar(122) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;
/*duoduo table info cup*/;
