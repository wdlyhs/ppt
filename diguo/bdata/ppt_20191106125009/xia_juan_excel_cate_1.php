<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `xia_juan_excel_cate`;");
E_C("CREATE TABLE `xia_juan_excel_cate` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `sort` int(10) DEFAULT NULL,
  `cid` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=gbk");
E_D("replace into `xia_juan_excel_cate` values('1','3C数码配件','342','9');");
E_D("replace into `xia_juan_excel_cate` values('2','DIY电脑','4','11');");
E_D("replace into `xia_juan_excel_cate` values('3','MP3/MP4/iPod/录音笔','2','9');");
E_D("replace into `xia_juan_excel_cate` values('4','OTC药品/医疗器械/计生用品','40','11');");
E_D("replace into `xia_juan_excel_cate` values('5','ZIPPO/瑞士军刀/眼镜','50','11');");
E_D("replace into `xia_juan_excel_cate` values('6','个人护理/保健/按摩器材','218','5');");
E_D("replace into `xia_juan_excel_cate` values('7','个性定制/设计服务/DIY','11','11');");
E_D("replace into `xia_juan_excel_cate` values('8','乐器/吉他/钢琴/配件','9','11');");
E_D("replace into `xia_juan_excel_cate` values('9','书籍/杂志/报纸','159','11');");
E_D("replace into `xia_juan_excel_cate` values('10','五金/工具','10','5');");
E_D("replace into `xia_juan_excel_cate` values('11','传统滋补营养品','67','11');");
E_D("replace into `xia_juan_excel_cate` values('12','住宅家具','39','11');");
E_D("replace into `xia_juan_excel_cate` values('13','保健食品/膳食营养补充食品','41','11');");
E_D("replace into `xia_juan_excel_cate` values('14','办公设备/耗材/相关服务','7','11');");
E_D("replace into `xia_juan_excel_cate` values('15','包装','3','11');");
E_D("replace into `xia_juan_excel_cate` values('16','厨房/烹饪用具','117','5');");
E_D("replace into `xia_juan_excel_cate` values('17','厨房电器','121','9');");
E_D("replace into `xia_juan_excel_cate` values('18','咖啡/麦片/冲饮','76','7');");
E_D("replace into `xia_juan_excel_cate` values('19','基础建材','7','11');");
E_D("replace into `xia_juan_excel_cate` values('20','大家电','12','11');");
E_D("replace into `xia_juan_excel_cate` values('21','女士内衣/男士内衣/家居服','597','10');");
E_D("replace into `xia_juan_excel_cate` values('22','女装/女士精品','1464','1');");
E_D("replace into `xia_juan_excel_cate` values('23','女鞋','308','6');");
E_D("replace into `xia_juan_excel_cate` values('24','奶粉/辅食/营养品/零食','2','11');");
E_D("replace into `xia_juan_excel_cate` values('25','孕妇装/孕产妇用品/营养','69','3');");
E_D("replace into `xia_juan_excel_cate` values('26','宠物/宠物食品及用品','58','11');");
E_D("replace into `xia_juan_excel_cate` values('27','家居饰品','57','5');");
E_D("replace into `xia_juan_excel_cate` values('28','家庭/个人清洁工具','240','5');");
E_D("replace into `xia_juan_excel_cate` values('29','家装主材','72','5');");
E_D("replace into `xia_juan_excel_cate` values('30','尿片/洗护/喂哺/推车床','217','3');");
E_D("replace into `xia_juan_excel_cate` values('31','居家布艺','150','5');");
E_D("replace into `xia_juan_excel_cate` values('32','居家日用','180','5');");
E_D("replace into `xia_juan_excel_cate` values('33','床上用品','165','5');");
E_D("replace into `xia_juan_excel_cate` values('34','彩妆/香水/美妆工具','337','4');");
E_D("replace into `xia_juan_excel_cate` values('35','影音电器','94','9');");
E_D("replace into `xia_juan_excel_cate` values('36','成人用品/情趣用品','10','11');");
E_D("replace into `xia_juan_excel_cate` values('37','户外/登山/野营/旅行用品','67','11');");
E_D("replace into `xia_juan_excel_cate` values('38','手机','3','9');");
E_D("replace into `xia_juan_excel_cate` values('39','手表','50','11');");
E_D("replace into `xia_juan_excel_cate` values('40','收纳整理','127','5');");
E_D("replace into `xia_juan_excel_cate` values('41','智能设备','24','11');");
E_D("replace into `xia_juan_excel_cate` values('42','服饰配件/皮带/帽子/围巾','183','11');");
E_D("replace into `xia_juan_excel_cate` values('43','模玩/动漫/周边/cos/桌游','6','11');");
E_D("replace into `xia_juan_excel_cate` values('44','水产肉类/新鲜蔬果/熟食','65','7');");
E_D("replace into `xia_juan_excel_cate` values('45','汽车/用品/配件/改装','154','8');");
E_D("replace into `xia_juan_excel_cate` values('46','洗护清洁剂/卫生巾/纸/香薰','276','5');");
E_D("replace into `xia_juan_excel_cate` values('47','流行男鞋','154','6');");
E_D("replace into `xia_juan_excel_cate` values('48','特色手工艺','2','11');");
E_D("replace into `xia_juan_excel_cate` values('49','玩具/童车/益智/积木/模型','195','3');");
E_D("replace into `xia_juan_excel_cate` values('50','珠宝/钻石/翡翠/黄金','5','11');");
E_D("replace into `xia_juan_excel_cate` values('51','生活电器','104','9');");
E_D("replace into `xia_juan_excel_cate` values('52','电动车/配件/交通工具','5','11');");
E_D("replace into `xia_juan_excel_cate` values('53','电子/电工','22','11');");
E_D("replace into `xia_juan_excel_cate` values('54','电子词典/电纸书/文化用品','110','11');");
E_D("replace into `xia_juan_excel_cate` values('55','电脑硬件/显示器/电脑周边','30','11');");
E_D("replace into `xia_juan_excel_cate` values('56','男装','546','2');");
E_D("replace into `xia_juan_excel_cate` values('57','童装/婴儿装/亲子装','454','3');");
E_D("replace into `xia_juan_excel_cate` values('58','童鞋/婴儿鞋/亲子鞋','160','3');");
E_D("replace into `xia_juan_excel_cate` values('59','箱包皮具/热销女包/男包','261','6');");
E_D("replace into `xia_juan_excel_cate` values('60','粮油米面/南北干货/调味品','99','5');");
E_D("replace into `xia_juan_excel_cate` values('61','网络设备/网络相关','7','11');");
E_D("replace into `xia_juan_excel_cate` values('62','美发护发/假发','61','11');");
E_D("replace into `xia_juan_excel_cate` values('63','美容护肤/美体/精油','347','4');");
E_D("replace into `xia_juan_excel_cate` values('64','自行车/骑行装备/零配件','5','11');");
E_D("replace into `xia_juan_excel_cate` values('65','节庆用品/礼品','56','11');");
E_D("replace into `xia_juan_excel_cate` values('66','茶','73','11');");
E_D("replace into `xia_juan_excel_cate` values('67','购物提货券','1','11');");
E_D("replace into `xia_juan_excel_cate` values('68','运动/瑜伽/健身/球迷用品','99','11');");
E_D("replace into `xia_juan_excel_cate` values('69','运动包/户外包/配件','5','11');");
E_D("replace into `xia_juan_excel_cate` values('70','运动服/休闲服装','12','11');");
E_D("replace into `xia_juan_excel_cate` values('71','运动鞋new','22','11');");
E_D("replace into `xia_juan_excel_cate` values('72','酒类','24','11');");
E_D("replace into `xia_juan_excel_cate` values('73','闪存卡/U盘/存储/移动硬盘','11','11');");
E_D("replace into `xia_juan_excel_cate` values('74','隐形眼镜/护理液','11','11');");
E_D("replace into `xia_juan_excel_cate` values('75','零食/坚果/特产','397','7');");
E_D("replace into `xia_juan_excel_cate` values('76','餐饮具','192','5');");
E_D("replace into `xia_juan_excel_cate` values('77','饰品/流行首饰/时尚饰品新','155','11');");
E_D("replace into `xia_juan_excel_cate` values('78','鲜花速递/花卉仿真/绿植园艺','27','11');");

require("../../inc/footer.php");
?>