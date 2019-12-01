<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `xia_pay_log`;");
E_C("CREATE TABLE `xia_pay_log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `addtime` varchar(222) DEFAULT NULL,
  `order_sn` varchar(222) DEFAULT NULL,
  `money` varchar(111) DEFAULT NULL,
  `title` varchar(222) DEFAULT NULL,
  `transaction_id` varchar(222) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=gbk");
E_D("replace into `xia_pay_log` values('12','1','1498036482','11223344','100','yg1hxj',NULL);");
E_D("replace into `xia_pay_log` values('13','1','1498113263','11223344','100','yg1hxj',NULL);");
E_D("replace into `xia_pay_log` values('14','5590','1498624843','2017062812403534595','0.01','又4年',NULL);");
E_D("replace into `xia_pay_log` values('15','5590','1498625718','2017062812551158815','0.01','又4年',NULL);");
E_D("replace into `xia_pay_log` values('16','5590','1498626516','2017062801083058970','0.01','又4年',NULL);");
E_D("replace into `xia_pay_log` values('17','5590','1498627031','2017062801170685643','0.01','又4年',NULL);");
E_D("replace into `xia_pay_log` values('18','5590','1498627085','2017062801175918914','0.1','又4年',NULL);");
E_D("replace into `xia_pay_log` values('19','5590','1498650161','2017062807423032096','0.01','又4年',NULL);");
E_D("replace into `xia_pay_log` values('20','5590','1498650241','2017062807435346937','0.01','又4年',NULL);");
E_D("replace into `xia_pay_log` values('21','5592','1498784039','2017063008534852866','0.01','又4年',NULL);");
E_D("replace into `xia_pay_log` values('22','5592','1506082351','2017092208122217862','0.01','又4年',NULL);");
E_D("replace into `xia_pay_log` values('23','5592','1506182038','2017092311535035338','0.01','又4年',NULL);");
E_D("replace into `xia_pay_log` values('24','5609','1506228291','2017092412443465867','0.02','1506227899',NULL);");
E_D("replace into `xia_pay_log` values('25','5611','1506313469','2017092512242088963','10','华商情  生活服务站',NULL);");
E_D("replace into `xia_pay_log` values('26','5614','1506953197','123456789','3600','华商情  红酒服务',NULL);");
E_D("replace into `xia_pay_log` values('27','5614','1506953665','123456789','3600','华商情  红酒服务',NULL);");
E_D("replace into `xia_pay_log` values('28','5614','1506955387','123456789','3600','华商情  红酒服务',NULL);");
E_D("replace into `xia_pay_log` values('29','5614','1506955660','123456789','3600','华商情  红酒服务',NULL);");
E_D("replace into `xia_pay_log` values('30','5614','1506996849','123456789','3600','华商情  红酒服务',NULL);");
E_D("replace into `xia_pay_log` values('31','5614','1506997321','123456789','3600','华商情  红酒服务',NULL);");
E_D("replace into `xia_pay_log` values('32','5614','1506997383','123456789','3600','华商情  红酒服务',NULL);");
E_D("replace into `xia_pay_log` values('33','5614','1506997405','123456789','3600','华商情  红酒服务',NULL);");
E_D("replace into `xia_pay_log` values('34','5614','1506997455','123456789','3600','华商情  红酒服务',NULL);");
E_D("replace into `xia_pay_log` values('35','5614','1506997475','123456789','3600','华商情  红酒服务',NULL);");
E_D("replace into `xia_pay_log` values('36','5616','1506997630','123456789','3600','1506694359',NULL);");
E_D("replace into `xia_pay_log` values('37','5616','1506997686','123456789','3600','1506694359',NULL);");
E_D("replace into `xia_pay_log` values('38','5616','1506997741','123456789','3600','1506694359',NULL);");
E_D("replace into `xia_pay_log` values('39','5614','1506997849','123456789','3600','华商情  红酒服务',NULL);");
E_D("replace into `xia_pay_log` values('40','5595','1506998540','1234056789','3600','飘',NULL);");
E_D("replace into `xia_pay_log` values('41','5595','1506998650','123405256789','3600','飘',NULL);");
E_D("replace into `xia_pay_log` values('42','5612','1507023790','1234051256789','3600','笑笑',NULL);");
E_D("replace into `xia_pay_log` values('43','5612','1507023958','123405125556789','3600','笑笑',NULL);");
E_D("replace into `xia_pay_log` values('44','5612','1507024017','123405125555556789','3600','笑笑',NULL);");
E_D("replace into `xia_pay_log` values('45','5612','1507711431','12340512551155556789','3600','笑笑',NULL);");

require("../../inc/footer.php");
?>