<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_type`;");
E_C("CREATE TABLE `xia_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `title` varchar(50) DEFAULT NULL,
  `sort` int(11) DEFAULT '0',
  `tag` varchar(20) NOT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `sys` tinyint(1) NOT NULL DEFAULT '0',
  `isshow` int(2) DEFAULT '1',
  `dan` int(2) DEFAULT NULL,
  `content` text,
  `url` varchar(255) DEFAULT NULL,
  `e_title` varchar(100) DEFAULT NULL,
  `jian_mod` varchar(100) DEFAULT NULL,
  `jian_act` varchar(100) DEFAULT NULL,
  `img` varchar(166) DEFAULT NULL,
  `pics` text,
  `etitle` varchar(200) DEFAULT NULL,
  `istj` int(2) DEFAULT '1',
  `img_ad` varchar(255) DEFAULT NULL,
  `model_id` int(10) DEFAULT NULL,
  `wap_content` text,
  `wap_desc` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `jump_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=704 DEFAULT CHARSET=utf8");
E_D("replace into `xia_type` values('687','684','百科分类1','0','article','1568515147','0','1',NULL,' <p>\r\n         \r\n       英国短毛猫有悠久的历史，但直到20世纪初才引起人们的宠爱。该猫体形圆胖，外型 由中型至大型。其骨架及肌肉很发达，短而肥的颈与及阔而平的肩膊相配合。头部圆而阔， 体粗短发达，被毛短而密，头大脸圆，大而圆的眼睛根据被毛不同而呈现各种颜色。最大的特征是支耳的距离很接近身。该猫温柔平静，对人友善，很容易饲养。 </p>\r\n         <p>\r\n         \r\n        <img src=\"http://img.boqiicdn.com/Data/BK/A/1407/25/img1011406259105_y.jpg\">\r\n         </p>\r\n  <p>\r\n       英国短毛猫的祖先们可以说是“战功赫赫”，早在2000多年前的古罗马帝国时期，它们就曾跟随凯撒大帝到处征战。在战争中，它们靠着超强的捕鼠能力，保护罗马大军的粮草不被老鼠偷吃，充分保障了军需后方的稳定。从此，这些猫在人们心中得到了很高的地位。就在那个时候，它们被带到了英国境内，靠着极强的适应能力，逐渐演变成为英国的土著猫。它不仅被公认为捕鼠高手，那英俊外形也被更多人所喜爱。\r\n </p>  <p>\r\n　　  到了19世纪的末期，英国的育种专家们在这些土著猫中选出最美丽的猫咪，开始了漫长的培育工作，最终这个被称为英国短毛猫的品种诞生了。1871年，英国短毛猫参加了伦敦的水晶宫博览会，起品种也从此开始被命名。1901年，英国猫俱乐部成立了，那时的英国短毛猫还是体型大而结实的蓝色毛种，很像法国的卡尔特猫，后来由于它们的后代越来越像，甚至不分彼此。所以FIFE(英国最大爱猫协会)决定将这两个品种合二为一。第二次世界大战之后，更多毛色的英国短毛猫也陆续被各国的猫会所承认，它们走进了千家万户，成为人们生活中的伴侣。\r\n         </p>\r\n     ','',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'2',NULL,NULL,NULL,NULL,NULL);");
E_D("replace into `xia_type` values('688','684','百科分类2','0','article','1568515147','0','1',NULL,'<p>\r\n	英国短毛猫有悠久的历史，但直到20世纪初才引起人们的宠爱。该猫体形圆胖，外型 由中型至大型。其骨架及肌肉很发达，短而肥的颈与及阔而平的肩膊相配合。头部圆而阔， 体粗短发达，被毛短而密，头大脸圆，大而圆的眼睛根据被毛不同而呈现各种颜色。最大的特征是支耳的距离很接近身。该猫温柔平静，对人友善，很容易饲养。\r\n</p>\r\n<p>\r\n	<img src=\"http://img.boqiicdn.com/Data/BK/A/1407/25/img1011406259105_y.jpg\" /> \r\n</p>\r\n<p>\r\n	英国短毛猫的祖先们可以说是“战功赫赫”，早在2000多年前的古罗马帝国时期，它们就曾跟随凯撒大帝到处征战。在战争中，它们靠着超强的捕鼠能力，保护罗马大军的粮草不被老鼠偷吃，充分保障了军需后方的稳定。从此，这些猫在人们心中得到了很高的地位。就在那个时候，它们被带到了英国境内，靠着极强的适应能力，逐渐演变成为英国的土著猫。它不仅被公认为捕鼠高手，那英俊外形也被更多人所喜爱。\r\n</p>\r\n<p>\r\n	　　  到了19世纪的末期，英国的育种专家们在这些土著猫中选出最美丽的猫咪，开始了漫长的培育工作，最终这个被称为英国短毛猫的品种诞生了。1871年，英国短毛猫参加了伦敦的水晶宫博览会，起品种也从此开始被命名。1901年，英国猫俱乐部成立了，那时的英国短毛猫还是体型大而结实的蓝色毛种，很像法国的卡尔特猫，后来由于它们的后代越来越像，甚至不分彼此。所以FIFE(英国最大爱猫协会)决定将这两个品种合二为一。第二次世界大战之后，更多毛色的英国短毛猫也陆续被各国的猫会所承认，它们走进了千家万户，成为人们生活中的伴侣。\r\n</p>','',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL);");
E_D("replace into `xia_type` values('689','684','百科分类3','0','article','1568515147','0','1',NULL,'<p>\r\n	英国短毛猫有悠久的历史，但直到20世纪初才引起人们的宠爱。该猫体形圆胖，外型 由中型至大型。其骨架及肌肉很发达，短而肥的颈与及阔而平的肩膊相配合。头部圆而阔， 体粗短发达，被毛短而密，头大脸圆，大而圆的眼睛根据被毛不同而呈现各种颜色。最大的特征是支耳的距离很接近身。该猫温柔平静，对人友善，很容易饲养。\r\n</p>\r\n<p>\r\n	<img src=\"http://img.boqiicdn.com/Data/BK/A/1407/25/img1011406259105_y.jpg\" /> \r\n</p>\r\n<p>\r\n	英国短毛猫的祖先们可以说是“战功赫赫”，早在2000多年前的古罗马帝国时期，它们就曾跟随凯撒大帝到处征战。在战争中，它们靠着超强的捕鼠能力，保护罗马大军的粮草不被老鼠偷吃，充分保障了军需后方的稳定。从此，这些猫在人们心中得到了很高的地位。就在那个时候，它们被带到了英国境内，靠着极强的适应能力，逐渐演变成为英国的土著猫。它不仅被公认为捕鼠高手，那英俊外形也被更多人所喜爱。\r\n</p>\r\n<p>\r\n	　　  到了19世纪的末期，英国的育种专家们在这些土著猫中选出最美丽的猫咪，开始了漫长的培育工作，最终这个被称为英国短毛猫的品种诞生了。1871年，英国短毛猫参加了伦敦的水晶宫博览会，起品种也从此开始被命名。1901年，英国猫俱乐部成立了，那时的英国短毛猫还是体型大而结实的蓝色毛种，很像法国的卡尔特猫，后来由于它们的后代越来越像，甚至不分彼此。所以FIFE(英国最大爱猫协会)决定将这两个品种合二为一。第二次世界大战之后，更多毛色的英国短毛猫也陆续被各国的猫会所承认，它们走进了千家万户，成为人们生活中的伴侣。\r\n</p>','',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL);");
E_D("replace into `xia_type` values('684','0','知识百科','3','article','1568513995','0','1',NULL,'<p>\r\n	<br />\r\n</p>','',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'2',NULL,NULL,'','','');");
E_D("replace into `xia_type` values('685','0','文章资讯','2','article','1568514009','0','1',NULL,' <p>\r\n         \r\n       英国短毛猫有悠久的历史，但直到20世纪初才引起人们的宠爱。该猫体形圆胖，外型 由中型至大型。其骨架及肌肉很发达，短而肥的颈与及阔而平的肩膊相配合。头部圆而阔， 体粗短发达，被毛短而密，头大脸圆，大而圆的眼睛根据被毛不同而呈现各种颜色。最大的特征是支耳的距离很接近身。该猫温柔平静，对人友善，很容易饲养。 </p>\r\n         <p>\r\n         \r\n        <img src=\"http://img.boqiicdn.com/Data/BK/A/1407/25/img1011406259105_y.jpg\">\r\n         </p>\r\n  <p>\r\n       英国短毛猫的祖先们可以说是“战功赫赫”，早在2000多年前的古罗马帝国时期，它们就曾跟随凯撒大帝到处征战。在战争中，它们靠着超强的捕鼠能力，保护罗马大军的粮草不被老鼠偷吃，充分保障了军需后方的稳定。从此，这些猫在人们心中得到了很高的地位。就在那个时候，它们被带到了英国境内，靠着极强的适应能力，逐渐演变成为英国的土著猫。它不仅被公认为捕鼠高手，那英俊外形也被更多人所喜爱。\r\n </p>  <p>\r\n　　  到了19世纪的末期，英国的育种专家们在这些土著猫中选出最美丽的猫咪，开始了漫长的培育工作，最终这个被称为英国短毛猫的品种诞生了。1871年，英国短毛猫参加了伦敦的水晶宫博览会，起品种也从此开始被命名。1901年，英国猫俱乐部成立了，那时的英国短毛猫还是体型大而结实的蓝色毛种，很像法国的卡尔特猫，后来由于它们的后代越来越像，甚至不分彼此。所以FIFE(英国最大爱猫协会)决定将这两个品种合二为一。第二次世界大战之后，更多毛色的英国短毛猫也陆续被各国的猫会所承认，它们走进了千家万户，成为人们生活中的伴侣。\r\n         </p>\r\n     ','',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'1',NULL,NULL,'','','');");
E_D("replace into `xia_type` values('686','0','联系我们','1','article','1568514130','0','1',NULL,' <p>\r\n         \r\n       英国短毛猫有悠久的历史，但直到20世纪初才引起人们的宠爱。该猫体形圆胖，外型 由中型至大型。其骨架及肌肉很发达，短而肥的颈与及阔而平的肩膊相配合。头部圆而阔， 体粗短发达，被毛短而密，头大脸圆，大而圆的眼睛根据被毛不同而呈现各种颜色。最大的特征是支耳的距离很接近身。该猫温柔平静，对人友善，很容易饲养。 </p>\r\n         <p>\r\n         \r\n        <img src=\"http://img.boqiicdn.com/Data/BK/A/1407/25/img1011406259105_y.jpg\">\r\n         </p>\r\n  <p>\r\n       英国短毛猫的祖先们可以说是“战功赫赫”，早在2000多年前的古罗马帝国时期，它们就曾跟随凯撒大帝到处征战。在战争中，它们靠着超强的捕鼠能力，保护罗马大军的粮草不被老鼠偷吃，充分保障了军需后方的稳定。从此，这些猫在人们心中得到了很高的地位。就在那个时候，它们被带到了英国境内，靠着极强的适应能力，逐渐演变成为英国的土著猫。它不仅被公认为捕鼠高手，那英俊外形也被更多人所喜爱。\r\n </p>  <p>\r\n　　  到了19世纪的末期，英国的育种专家们在这些土著猫中选出最美丽的猫咪，开始了漫长的培育工作，最终这个被称为英国短毛猫的品种诞生了。1871年，英国短毛猫参加了伦敦的水晶宫博览会，起品种也从此开始被命名。1901年，英国猫俱乐部成立了，那时的英国短毛猫还是体型大而结实的蓝色毛种，很像法国的卡尔特猫，后来由于它们的后代越来越像，甚至不分彼此。所以FIFE(英国最大爱猫协会)决定将这两个品种合二为一。第二次世界大战之后，更多毛色的英国短毛猫也陆续被各国的猫会所承认，它们走进了千家万户，成为人们生活中的伴侣。\r\n         </p>\r\n     ','',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'4',NULL,NULL,'','','');");
E_D("replace into `xia_type` values('699','687','呼吸疾病','0','article','1568968830','0','1',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'4',NULL,NULL,NULL,NULL,NULL);");
E_D("replace into `xia_type` values('700','687','感染病症','0','article','1568968845','0','1',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'4',NULL,NULL,NULL,NULL,NULL);");
E_D("replace into `xia_type` values('701','687','肠胃病症','0','article','1568968874','0','1',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'4',NULL,NULL,NULL,NULL,NULL);");
E_D("replace into `xia_type` values('702','688','测试分类1','0','article','1568972349','0','1',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'4',NULL,NULL,NULL,NULL,NULL);");
E_D("replace into `xia_type` values('703','0','会员中心','0','article','1569051969','0','0',NULL,'','index.php?mod=user&act=index',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'1',NULL,NULL,NULL,NULL,NULL);");

require("../../inc/footer.php");
?>