<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_xiazai`;");
E_C("CREATE TABLE `xia_xiazai` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `uid` int(10) DEFAULT NULL,
  `addtime` varchar(100) DEFAULT NULL,
  `sort` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `xia_xiazai` values('1','226','80页超精美PPT关系图形精选','3903','1572834046','0');");
E_D("replace into `xia_xiazai` values('8','206','不忘初心牢记使命第二批主题教育PPT模板','3903','1572834945','0');");
E_D("replace into `xia_xiazai` values('9','225','我太难了','3903','1572960806','0');");

require("../../inc/footer.php");
?>