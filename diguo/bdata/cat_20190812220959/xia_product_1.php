<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `xia_product`;");
E_C("CREATE TABLE `xia_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cid` int(10) DEFAULT NULL,
  `img` varchar(222) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `url` varchar(222) DEFAULT NULL,
  `tj` int(2) DEFAULT '1',
  `sort` int(10) DEFAULT '0',
  `status` int(2) DEFAULT '1' COMMENT '1?????2????',
  `addtime` varchar(100) NOT NULL,
  `content1` text,
  `content` text,
  `price` decimal(10,0) DEFAULT NULL,
  `stime` varchar(100) DEFAULT NULL,
  `etime` varchar(100) DEFAULT NULL,
  `num` int(10) DEFAULT NULL,
  `hits` int(10) DEFAULT NULL,
  `dd_num` int(10) DEFAULT NULL,
  `bg_img` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `dds` text,
  `content2` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=196 DEFAULT CHARSET=gbk");
E_D("replace into `xia_product` values('195',NULL,'upload/2019/0729/09064914699.jpg','²âÊÔÉÌÆ·',NULL,'1','0','1','','<p>\r\n	<img src=\"http://wxapp.hxmryy.com/App/Item/qzhx/1902xmtg/skin/images/czbs/04.jpg?v1\" alt=\"\" /> \r\n</p>\r\n<p>\r\n	<img src=\"http://wxapp.hxmryy.com/App/Item/qzhx/1902xmtg/skin/images/czbs/05.jpg?v1\" alt=\"\" /> \r\n</p>\r\n<p>\r\n	<img src=\"http://wxapp.hxmryy.com/App/Item/qzhx/1902xmtg/skin/images/czbs/zt/01.jpg?z1\" alt=\"\" /> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>','<p>\r\n	<img src=\"http://wxapp.hxmryy.com/App/Item/qzhx/1902xmtg/skin/images/czbs/01.jpg?v1\" alt=\"\" /> \r\n</p>\r\n<p>\r\n	<img src=\"http://wxapp.hxmryy.com/App/Item/qzhx/1902xmtg/skin/images/czbs/03.jpg?v1\" alt=\"\" /> \r\n</p>','1','1528473600','1591632000','121','124','100','upload/2019/0729/09064914699.jpg','',NULL,'<p>\r\n	<img src=\"http://wxapp.hxmryy.com/App/Item/qzhx/1902xmtg/skin/images/czbs/06.jpg?v1\" alt=\"\" />\r\n</p>\r\n<p>\r\n	<img src=\"http://wxapp.hxmryy.com/App/Item/qzhx/1902xmtg/skin/images/czbs/07.jpg?v1\" alt=\"\" />\r\n</p>\r\n<p>\r\n	<img src=\"http://wxapp.hxmryy.com/App/Item/qzhx/1902xmtg/skin/images/czbs/08.jpg?v1\" alt=\"\" />\r\n</p>\r\n<p>\r\n	<img src=\"/upload/2019/0803/15384328190.jpg\" alt=\"\" />\r\n</p>');");

require("../../inc/footer.php");
?>