<?php exit;?>
DROP TABLE IF EXISTS `xia_slides`;
CREATE TABLE `xia_slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `url` text,
  `title` varchar(100) DEFAULT NULL,
  `hide` int(11) DEFAULT '0',
  `addtime` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '10',
  `cid` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `xia_slides` (`id`,`img`,`url`,`title`,`hide`,`addtime`,`sort`,`cid`) VALUES('19','http://www.welldone.com/template/default/images/66.jpg','','bb','0','1488176390','0','1');
