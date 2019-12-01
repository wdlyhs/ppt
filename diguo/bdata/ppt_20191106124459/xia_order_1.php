<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_order`;");
E_C("CREATE TABLE `xia_order` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `title` varchar(155) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `addtime` varchar(100) DEFAULT NULL,
  `status` int(2) DEFAULT '1' COMMENT '1为未付款，2为已付款',
  `order_sn` varchar(100) DEFAULT NULL,
  `goods_id` int(10) DEFAULT NULL,
  `transaction_id` varchar(111) DEFAULT NULL,
  `pay` int(2) DEFAULT '1' COMMENT '1表示没有处理，2表示已经处理过时间授权',
  `type` int(2) DEFAULT '1' COMMENT '1为微信，2为支付宝',
  `rid` int(10) DEFAULT NULL COMMENT '充值类型ID',
  `day_xiazai_num` int(10) DEFAULT NULL,
  `start_time` varchar(100) DEFAULT NULL,
  `recharge` varchar(100) DEFAULT NULL COMMENT '充值类型时长',
  `date_num` varchar(100) DEFAULT NULL,
  `date_type` varchar(100) DEFAULT NULL,
  `end_time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=298 DEFAULT CHARSET=utf8");
E_D("replace into `xia_order` values('263','3903','终身VIP','199.00','1572947761','1','2019110505560145165','4',NULL,'1','1','4','100000',NULL,NULL,NULL,NULL,NULL);");
E_D("replace into `xia_order` values('264','3903','包日VIP','0.01','1572947768','1','2019110505560807228','1',NULL,'1','1','1','2',NULL,NULL,NULL,NULL,NULL);");
E_D("replace into `xia_order` values('265','3903','包月VIP','0.01','1572947769','1','2019110505560923108','2',NULL,'1','1','2','10',NULL,NULL,NULL,NULL,NULL);");
E_D("replace into `xia_order` values('266','3903','包月VIP','0.01','1572947772','2','2019110505561214124','2','2019110522001456690565803102','2','2','2','10','1572947798','2months',NULL,NULL,NULL);");
E_D("replace into `xia_order` values('267','3903','终身VIP','199.00','1572947805','1','2019110505564594359','4',NULL,'1','1','4','100000',NULL,NULL,NULL,NULL,NULL);");
E_D("replace into `xia_order` values('268','3903','包日VIP','0.01','1572947817','1','2019110505565778184','1',NULL,'1','1','1','2',NULL,NULL,NULL,NULL,NULL);");
E_D("replace into `xia_order` values('269','3903','包日VIP','0.01','1572947818','1','2019110505565895237','1',NULL,'1','2','1','2',NULL,NULL,NULL,NULL,NULL);");
E_D("replace into `xia_order` values('270','3903','包日VIP','0.01','1572947819','2','2019110505565994185','1','2019110522001456690565930958','2','2','1','2','1572947857','1days',NULL,NULL,NULL);");
E_D("replace into `xia_order` values('271','3903','终身VIP','199.00','1572949242','1','2019110506204250935','4',NULL,'1','1','4','100000',NULL,NULL,NULL,NULL,NULL);");
E_D("replace into `xia_order` values('272','3903','包月VIP','0.01','1572949248','2','2019110506204832372','2','','2','1','2','10','1572949624','10months',NULL,NULL,NULL);");
E_D("replace into `xia_order` values('273','3903','包月VIP','0.01','1572949250','2','2019110506205034749','2','2019110522001456690565721907','2','2','2','10','1572949289','10months',NULL,NULL,NULL);");
E_D("replace into `xia_order` values('274','3903','终身VIP','199.00','1572949849','1','2019110506304910289','4',NULL,'1','1','4','100000',NULL,'100years',NULL,NULL,NULL);");
E_D("replace into `xia_order` values('275','3903','包年VIP','0.02','1572949858','1','2019110506305845575','3',NULL,'1','1','3','70',NULL,'1years',NULL,NULL,NULL);");
E_D("replace into `xia_order` values('276','3903','包月VIP','0.01','1572949863','1','2019110506310305910','2',NULL,'1','1','2','10',NULL,'10months',NULL,NULL,NULL);");
E_D("replace into `xia_order` values('277','3903','终身VIP','199.00','1572950142','1','2019110506354281179','4',NULL,'1','1','4','100000',NULL,'100years','100','4',NULL);");
E_D("replace into `xia_order` values('278','3903','包年VIP','0.02','1572950256','2','2019110506373666996','3','','2','1','3','70','1572950340','1years','1','4',NULL);");
E_D("replace into `xia_order` values('279','3903','终身VIP','199.00','1572950342','1','2019110506390296390','4',NULL,'1','1','4','100000',NULL,'100years','100','4',NULL);");
E_D("replace into `xia_order` values('280','3903','终身VIP','199.00','1572951172','1','2019110506525238628','4',NULL,'1','1','4','100000',NULL,'100years','100','4',NULL);");
E_D("replace into `xia_order` values('281','3903','终身VIP','199.00','1572961792','1','2019110509495239894','4',NULL,'1','1','4','100000',NULL,'100years','100','4',NULL);");
E_D("replace into `xia_order` values('282','3903','终身VIP','199.00','1572961802','1','2019110509500299349','4',NULL,'1','1','4','100000',NULL,'100years','100','4',NULL);");
E_D("replace into `xia_order` values('283','3903','包年VIP','0.02','1572961805','1','2019110509500579943','3',NULL,'1','1','3','70',NULL,'1years','1','4',NULL);");
E_D("replace into `xia_order` values('284','3903','包月VIP','0.01','1572961807','1','2019110509500733662','2',NULL,'1','1','2','10',NULL,'10months','10','3',NULL);");
E_D("replace into `xia_order` values('285','3903','包日VIP','0.01','1572961808','1','2019110509500854652','1',NULL,'1','1','1','2',NULL,'1days','1','1',NULL);");
E_D("replace into `xia_order` values('286','3903','包年VIP','0.02','1572961810','1','2019110509501042908','3',NULL,'1','1','3','70',NULL,'1years','1','4',NULL);");
E_D("replace into `xia_order` values('287','3903','终身VIP','199.00','1572961812','1','2019110509501293268','4',NULL,'1','1','4','100000',NULL,'100years','100','4',NULL);");
E_D("replace into `xia_order` values('288','3903','终身VIP','199.00','1572966539','1','2019110511085916742','4',NULL,'1','1','4','100000',NULL,'100years','100','4',NULL);");
E_D("replace into `xia_order` values('289','3903','终身VIP','199.00','1572966547','1','2019110511090788356','4',NULL,'1','1','4','100000',NULL,'100years','100','4',NULL);");
E_D("replace into `xia_order` values('290','3903','终身VIP','199.00','1572968612','1','2019110511433256703','4',NULL,'1','1','4','100000',NULL,'100years','100','4',NULL);");
E_D("replace into `xia_order` values('291','3903','终身VIP','199.00','1572968759','1','2019110511455974728','4',NULL,'1','1','4','100000',NULL,'100years','100','4',NULL);");
E_D("replace into `xia_order` values('292','3903','终身VIP','199.00','1572968789','1','2019110511462984501','4',NULL,'1','1','4','100000',NULL,'100years','100','4',NULL);");
E_D("replace into `xia_order` values('293','3903','终身VIP','199.00','1572968843','1','2019110511472391151','4',NULL,'1','1','4','100000',NULL,'100years','100','4',NULL);");
E_D("replace into `xia_order` values('294','3903','终身VIP','199.00','1572968854','1','2019110511473462933','4',NULL,'1','1','4','100000',NULL,'100years','100','4',NULL);");
E_D("replace into `xia_order` values('295','3903','终身VIP','199.00','1572969080','1','2019110511512031764','4',NULL,'1','1','4','100000',NULL,'100years','100','4',NULL);");
E_D("replace into `xia_order` values('296','3903','终身VIP','199.00','1572969143','1','2019110511522357652','4',NULL,'1','1','4','100000',NULL,'100years','100','4',NULL);");
E_D("replace into `xia_order` values('297','3903','终身VIP','199.00','1572969171','1','2019110511525182729','4',NULL,'1','1','4','100000',NULL,'100years','100','4',NULL);");

require("../../inc/footer.php");
?>