<?php exit;?>
DROP TABLE IF EXISTS `xia_ad`;
CREATE TABLE `xia_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `link` text,
  `title` varchar(100) DEFAULT NULL,
  `height` varchar(5) DEFAULT NULL,
  `width` varchar(5) DEFAULT NULL,
  `content` text,
  `adtype` varchar(255) DEFAULT NULL,
  `addtime` int(11) NOT NULL DEFAULT '0',
  `sys` tinyint(1) NOT NULL DEFAULT '0',
  `edate` int(10) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `tag` varchar(200) DEFAULT NULL,
  `bgcolor` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `xia_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('110','template/default/images/wKiAiVdGoLq-XBQ-AABoKtpQ65g096.gif','','','144','280','','关于雷昂','1491038735','0','1522512000','2','','');
INSERT INTO `xia_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('111','http://www.shidun-china.com/kps01/M00/71/C3/wKiAiVWx7XSoQu_7AADWS6Z1XEg333.jpg','','','144','280','','新闻资讯（首页）','1491038775','0','1522512000','2','','');
