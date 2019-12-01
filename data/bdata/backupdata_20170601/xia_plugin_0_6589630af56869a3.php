<?php exit;?>
DROP TABLE IF EXISTS `xia_plugin`;
CREATE TABLE `xia_plugin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  `key` varchar(50) DEFAULT NULL,
  `authcode` varchar(200) DEFAULT NULL,
  `mod` varchar(20) DEFAULT NULL,
  `act` varchar(20) DEFAULT NULL,
  `tag` varchar(20) DEFAULT NULL,
  `admin_set` tinyint(1) NOT NULL DEFAULT '0',
  `endtime` datetime DEFAULT NULL,
  `search_open` tinyint(1) NOT NULL DEFAULT '0',
  `search_name` varchar(10) DEFAULT NULL,
  `search_width` int(11) NOT NULL DEFAULT '40',
  `search_tip` varchar(30) DEFAULT NULL,
  `toper_name` varchar(30) DEFAULT NULL,
  `toper_qq` varchar(30) DEFAULT NULL,
  `banben` int(11) NOT NULL DEFAULT '0',
  `install` tinyint(1) NOT NULL DEFAULT '0',
  `jiaocheng` varchar(255) DEFAULT NULL,
  `need_include` tinyint(1) NOT NULL DEFAULT '0',
  `version` double(10,1) DEFAULT '0.0',
  `level` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
