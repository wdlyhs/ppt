<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_yyx`;");
E_C("CREATE TABLE `xia_yyx` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `danwei` varchar(100) DEFAULT NULL,
  `jb` varchar(100) DEFAULT NULL,
  `ren` varchar(100) DEFAULT NULL,
  `jp` varchar(100) DEFAULT NULL,
  `num` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=utf8");
E_D("replace into `xia_yyx` values('1','涪陵','新人奖','130','锅','213');");
E_D("replace into `xia_yyx` values('2','合川本部','新人奖','35','锅','62');");
E_D("replace into `xia_yyx` values('3','合川区拓','新人奖','4','锅','7');");
E_D("replace into `xia_yyx` values('4','铜梁','新人奖','81','锅','144');");
E_D("replace into `xia_yyx` values('5','潼南','新人奖','17','锅','29');");
E_D("replace into `xia_yyx` values('6','江津','新人奖','56','锅','95');");
E_D("replace into `xia_yyx` values('7','沙坪坝区拓','新人奖','25','锅','43');");
E_D("replace into `xia_yyx` values('8','长寿','新人奖','41','锅','69');");
E_D("replace into `xia_yyx` values('9','永川','新人奖','118','锅','213');");
E_D("replace into `xia_yyx` values('10','九龙坡','新人奖','39','锅','67');");
E_D("replace into `xia_yyx` values('11','金阳区拓','新人奖','11','锅','19');");
E_D("replace into `xia_yyx` values('12','巴南','新人奖','105','锅','170');");
E_D("replace into `xia_yyx` values('13','万达一区','新人奖','8','锅','13');");
E_D("replace into `xia_yyx` values('14','万达二区','新人奖','8','锅','11');");
E_D("replace into `xia_yyx` values('15','江北一区','新人奖','16','锅','26');");
E_D("replace into `xia_yyx` values('16','江北二区','新人奖','24','锅','42');");
E_D("replace into `xia_yyx` values('17','石桥铺一区','新人奖','24','锅','38');");
E_D("replace into `xia_yyx` values('18','石桥铺二区','新人奖','18','锅','32');");
E_D("replace into `xia_yyx` values('19','沙坪坝一区','新人奖','32','锅','49');");
E_D("replace into `xia_yyx` values('20','沙坪坝二区','新人奖','19','锅','32');");
E_D("replace into `xia_yyx` values('21','北碚','新人奖','84','锅','136');");
E_D("replace into `xia_yyx` values('22','渝中一区','新人奖','48','锅','85');");
E_D("replace into `xia_yyx` values('23','渝中二区','新人奖','37','锅','59');");
E_D("replace into `xia_yyx` values('24','渝中三区','新人奖','47','锅','86');");
E_D("replace into `xia_yyx` values('25','奥体区拓','新人奖','21','锅','40');");
E_D("replace into `xia_yyx` values('26','大坪二区','新人奖','21','锅','40');");
E_D("replace into `xia_yyx` values('27','江北区拓','新人奖','20','锅','34');");
E_D("replace into `xia_yyx` values('28','嘉州区拓','新人奖','16','锅','31');");
E_D("replace into `xia_yyx` values('29','江北三区','新人奖','54','锅','98');");
E_D("replace into `xia_yyx` values('30','江北五区','新人奖','39','锅','68');");
E_D("replace into `xia_yyx` values('31','江北六区','新人奖','21','锅','37');");
E_D("replace into `xia_yyx` values('32','大坪一区','新人奖','4','锅','7');");
E_D("replace into `xia_yyx` values('33','南岸一区','新人奖','9','锅','14');");
E_D("replace into `xia_yyx` values('34','南岸二区','新人奖','16','锅','27');");
E_D("replace into `xia_yyx` values('35','万州','新人奖','109','锅','169');");
E_D("replace into `xia_yyx` values('36','黔江','新人奖','8','锅','11');");
E_D("replace into `xia_yyx` values('37','涪陵','累加奖','225','礼盒','394');");
E_D("replace into `xia_yyx` values('38','合川本部','累加奖','53','礼盒','98');");
E_D("replace into `xia_yyx` values('39','合川区拓','累加奖','6','礼盒','10');");
E_D("replace into `xia_yyx` values('40','铜梁','累加奖','79','礼盒','139');");
E_D("replace into `xia_yyx` values('41','潼南','累加奖','17','礼盒','31');");
E_D("replace into `xia_yyx` values('42','江津','累加奖','115','礼盒','185');");
E_D("replace into `xia_yyx` values('43','沙坪坝区拓','累加奖','60','礼盒','107');");
E_D("replace into `xia_yyx` values('44','长寿','累加奖','157','礼盒','290');");
E_D("replace into `xia_yyx` values('45','永川','累加奖','179','礼盒','312');");
E_D("replace into `xia_yyx` values('46','九龙坡','累加奖','96','礼盒','179');");
E_D("replace into `xia_yyx` values('47','金阳区拓','累加奖','49','礼盒','78');");
E_D("replace into `xia_yyx` values('48','巴南','累加奖','167','礼盒','300');");
E_D("replace into `xia_yyx` values('49','万达一区','累加奖','20','礼盒','29');");
E_D("replace into `xia_yyx` values('50','万达二区','累加奖','21','礼盒','38');");
E_D("replace into `xia_yyx` values('51','江北一区','累加奖','47','礼盒','79');");
E_D("replace into `xia_yyx` values('52','江北二区','累加奖','78','礼盒','136');");
E_D("replace into `xia_yyx` values('53','石桥铺一区','累加奖','55','礼盒','96');");
E_D("replace into `xia_yyx` values('54','石桥铺二区','累加奖','55','礼盒','90');");
E_D("replace into `xia_yyx` values('55','沙坪坝一区','累加奖','84','礼盒','169');");
E_D("replace into `xia_yyx` values('56','沙坪坝二区','累加奖','45','礼盒','82');");
E_D("replace into `xia_yyx` values('57','北碚','累加奖','258','礼盒','460');");
E_D("replace into `xia_yyx` values('58','渝中一区','累加奖','83','礼盒','158');");
E_D("replace into `xia_yyx` values('59','渝中二区','累加奖','55','礼盒','90');");
E_D("replace into `xia_yyx` values('60','渝中三区','累加奖','74','礼盒','138');");
E_D("replace into `xia_yyx` values('61','奥体区拓','累加奖','39','礼盒','64');");
E_D("replace into `xia_yyx` values('62','大坪二区','累加奖','37','礼盒','71');");
E_D("replace into `xia_yyx` values('63','江北区拓','累加奖','48','礼盒','87');");
E_D("replace into `xia_yyx` values('64','嘉州区拓','累加奖','51','礼盒','87');");
E_D("replace into `xia_yyx` values('65','江北三区','累加奖','93','礼盒','163');");
E_D("replace into `xia_yyx` values('66','江北五区','累加奖','50','礼盒','80');");
E_D("replace into `xia_yyx` values('67','江北六区','累加奖','33','礼盒','55');");
E_D("replace into `xia_yyx` values('68','大坪一区','累加奖','26','礼盒','46');");
E_D("replace into `xia_yyx` values('69','南岸一区','累加奖','32','礼盒','48');");
E_D("replace into `xia_yyx` values('70','南岸二区','累加奖','30','礼盒','47');");
E_D("replace into `xia_yyx` values('71','万州','累加奖','172','礼盒','265');");
E_D("replace into `xia_yyx` values('72','黔江','累加奖','17','礼盒','26');");
E_D("replace into `xia_yyx` values('73','涪陵',NULL,NULL,'碗','39');");
E_D("replace into `xia_yyx` values('74','合川本部',NULL,NULL,'碗','9');");
E_D("replace into `xia_yyx` values('75','合川区拓',NULL,NULL,'碗','1');");
E_D("replace into `xia_yyx` values('76','铜梁',NULL,NULL,'碗','13');");
E_D("replace into `xia_yyx` values('77','潼南',NULL,NULL,'碗','3');");
E_D("replace into `xia_yyx` values('78','江津',NULL,NULL,'碗','18');");
E_D("replace into `xia_yyx` values('79','沙坪坝区拓',NULL,NULL,'碗','10');");
E_D("replace into `xia_yyx` values('80','长寿',NULL,NULL,'碗','29');");
E_D("replace into `xia_yyx` values('81','永川',NULL,NULL,'碗','31');");
E_D("replace into `xia_yyx` values('82','九龙坡',NULL,NULL,'碗','17');");
E_D("replace into `xia_yyx` values('83','金阳区拓',NULL,NULL,'碗','7');");
E_D("replace into `xia_yyx` values('84','巴南',NULL,NULL,'碗','30');");
E_D("replace into `xia_yyx` values('85','万达一区',NULL,NULL,'碗','2');");
E_D("replace into `xia_yyx` values('86','万达二区',NULL,NULL,'碗','3');");
E_D("replace into `xia_yyx` values('87','江北一区',NULL,NULL,'碗','7');");
E_D("replace into `xia_yyx` values('88','江北二区',NULL,NULL,'碗','13');");
E_D("replace into `xia_yyx` values('89','石桥铺一区',NULL,NULL,'碗','9');");
E_D("replace into `xia_yyx` values('90','石桥铺二区',NULL,NULL,'碗','9');");
E_D("replace into `xia_yyx` values('91','沙坪坝一区',NULL,NULL,'碗','16');");
E_D("replace into `xia_yyx` values('92','沙坪坝二区',NULL,NULL,'碗','8');");
E_D("replace into `xia_yyx` values('93','北碚',NULL,NULL,'碗','46');");
E_D("replace into `xia_yyx` values('94','渝中一区',NULL,NULL,'碗','15');");
E_D("replace into `xia_yyx` values('95','渝中二区',NULL,NULL,'碗','9');");
E_D("replace into `xia_yyx` values('96','渝中三区',NULL,NULL,'碗','13');");
E_D("replace into `xia_yyx` values('97','奥体区拓',NULL,NULL,'碗','6');");
E_D("replace into `xia_yyx` values('98','大坪二区',NULL,NULL,'碗','7');");
E_D("replace into `xia_yyx` values('99','江北区拓',NULL,NULL,'碗','8');");
E_D("replace into `xia_yyx` values('100','嘉州区拓',NULL,NULL,'碗','8');");
E_D("replace into `xia_yyx` values('101','江北三区',NULL,NULL,'碗','16');");
E_D("replace into `xia_yyx` values('102','江北五区',NULL,NULL,'碗','8');");
E_D("replace into `xia_yyx` values('103','江北六区',NULL,NULL,'碗','5');");
E_D("replace into `xia_yyx` values('104','大坪一区',NULL,NULL,'碗','4');");
E_D("replace into `xia_yyx` values('105','南岸一区',NULL,NULL,'碗','4');");
E_D("replace into `xia_yyx` values('106','南岸二区',NULL,NULL,'碗','4');");
E_D("replace into `xia_yyx` values('107','万州',NULL,NULL,'碗','26');");
E_D("replace into `xia_yyx` values('108','黔江',NULL,NULL,'碗','2');");

require("../../inc/footer.php");
?>