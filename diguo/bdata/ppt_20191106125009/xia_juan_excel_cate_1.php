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
E_D("replace into `xia_juan_excel_cate` values('1','3C�������','342','9');");
E_D("replace into `xia_juan_excel_cate` values('2','DIY����','4','11');");
E_D("replace into `xia_juan_excel_cate` values('3','MP3/MP4/iPod/¼����','2','9');");
E_D("replace into `xia_juan_excel_cate` values('4','OTCҩƷ/ҽ����е/������Ʒ','40','11');");
E_D("replace into `xia_juan_excel_cate` values('5','ZIPPO/��ʿ����/�۾�','50','11');");
E_D("replace into `xia_juan_excel_cate` values('6','���˻���/����/��Ħ����','218','5');");
E_D("replace into `xia_juan_excel_cate` values('7','���Զ���/��Ʒ���/DIY','11','11');");
E_D("replace into `xia_juan_excel_cate` values('8','����/����/����/���','9','11');");
E_D("replace into `xia_juan_excel_cate` values('9','�鼮/��־/��ֽ','159','11');");
E_D("replace into `xia_juan_excel_cate` values('10','���/����','10','5');");
E_D("replace into `xia_juan_excel_cate` values('11','��ͳ�̲�Ӫ��Ʒ','67','11');");
E_D("replace into `xia_juan_excel_cate` values('12','סլ�Ҿ�','39','11');");
E_D("replace into `xia_juan_excel_cate` values('13','����ʳƷ/��ʳӪ������ʳƷ','41','11');");
E_D("replace into `xia_juan_excel_cate` values('14','�칫�豸/�Ĳ�/��ط���','7','11');");
E_D("replace into `xia_juan_excel_cate` values('15','��װ','3','11');");
E_D("replace into `xia_juan_excel_cate` values('16','����/����þ�','117','5');");
E_D("replace into `xia_juan_excel_cate` values('17','��������','121','9');");
E_D("replace into `xia_juan_excel_cate` values('18','����/��Ƭ/����','76','7');");
E_D("replace into `xia_juan_excel_cate` values('19','��������','7','11');");
E_D("replace into `xia_juan_excel_cate` values('20','��ҵ�','12','11');");
E_D("replace into `xia_juan_excel_cate` values('21','Ůʿ����/��ʿ����/�Ҿӷ�','597','10');");
E_D("replace into `xia_juan_excel_cate` values('22','Ůװ/Ůʿ��Ʒ','1464','1');");
E_D("replace into `xia_juan_excel_cate` values('23','ŮЬ','308','6');");
E_D("replace into `xia_juan_excel_cate` values('24','�̷�/��ʳ/Ӫ��Ʒ/��ʳ','2','11');");
E_D("replace into `xia_juan_excel_cate` values('25','�и�װ/�в�����Ʒ/Ӫ��','69','3');");
E_D("replace into `xia_juan_excel_cate` values('26','����/����ʳƷ����Ʒ','58','11');");
E_D("replace into `xia_juan_excel_cate` values('27','�Ҿ���Ʒ','57','5');");
E_D("replace into `xia_juan_excel_cate` values('28','��ͥ/������๤��','240','5');");
E_D("replace into `xia_juan_excel_cate` values('29','��װ����','72','5');");
E_D("replace into `xia_juan_excel_cate` values('30','��Ƭ/ϴ��/ι��/�Ƴ���','217','3');");
E_D("replace into `xia_juan_excel_cate` values('31','�ӼҲ���','150','5');");
E_D("replace into `xia_juan_excel_cate` values('32','�Ӽ�����','180','5');");
E_D("replace into `xia_juan_excel_cate` values('33','������Ʒ','165','5');");
E_D("replace into `xia_juan_excel_cate` values('34','��ױ/��ˮ/��ױ����','337','4');");
E_D("replace into `xia_juan_excel_cate` values('35','Ӱ������','94','9');");
E_D("replace into `xia_juan_excel_cate` values('36','������Ʒ/��Ȥ��Ʒ','10','11');");
E_D("replace into `xia_juan_excel_cate` values('37','����/��ɽ/ҰӪ/������Ʒ','67','11');");
E_D("replace into `xia_juan_excel_cate` values('38','�ֻ�','3','9');");
E_D("replace into `xia_juan_excel_cate` values('39','�ֱ�','50','11');");
E_D("replace into `xia_juan_excel_cate` values('40','��������','127','5');");
E_D("replace into `xia_juan_excel_cate` values('41','�����豸','24','11');");
E_D("replace into `xia_juan_excel_cate` values('42','�������/Ƥ��/ñ��/Χ��','183','11');");
E_D("replace into `xia_juan_excel_cate` values('43','ģ��/����/�ܱ�/cos/����','6','11');");
E_D("replace into `xia_juan_excel_cate` values('44','ˮ������/�����߹�/��ʳ','65','7');");
E_D("replace into `xia_juan_excel_cate` values('45','����/��Ʒ/���/��װ','154','8');");
E_D("replace into `xia_juan_excel_cate` values('46','ϴ������/������/ֽ/��޹','276','5');");
E_D("replace into `xia_juan_excel_cate` values('47','������Ь','154','6');");
E_D("replace into `xia_juan_excel_cate` values('48','��ɫ�ֹ���','2','11');");
E_D("replace into `xia_juan_excel_cate` values('49','���/ͯ��/����/��ľ/ģ��','195','3');");
E_D("replace into `xia_juan_excel_cate` values('50','�鱦/��ʯ/���/�ƽ�','5','11');");
E_D("replace into `xia_juan_excel_cate` values('51','�������','104','9');");
E_D("replace into `xia_juan_excel_cate` values('52','�綯��/���/��ͨ����','5','11');");
E_D("replace into `xia_juan_excel_cate` values('53','����/�繤','22','11');");
E_D("replace into `xia_juan_excel_cate` values('54','���Ӵʵ�/��ֽ��/�Ļ���Ʒ','110','11');");
E_D("replace into `xia_juan_excel_cate` values('55','����Ӳ��/��ʾ��/�����ܱ�','30','11');");
E_D("replace into `xia_juan_excel_cate` values('56','��װ','546','2');");
E_D("replace into `xia_juan_excel_cate` values('57','ͯװ/Ӥ��װ/����װ','454','3');");
E_D("replace into `xia_juan_excel_cate` values('58','ͯЬ/Ӥ��Ь/����Ь','160','3');");
E_D("replace into `xia_juan_excel_cate` values('59','���Ƥ��/����Ů��/�а�','261','6');");
E_D("replace into `xia_juan_excel_cate` values('60','��������/�ϱ��ɻ�/��ζƷ','99','5');");
E_D("replace into `xia_juan_excel_cate` values('61','�����豸/�������','7','11');");
E_D("replace into `xia_juan_excel_cate` values('62','��������/�ٷ�','61','11');");
E_D("replace into `xia_juan_excel_cate` values('63','���ݻ���/����/����','347','4');");
E_D("replace into `xia_juan_excel_cate` values('64','���г�/����װ��/�����','5','11');");
E_D("replace into `xia_juan_excel_cate` values('65','������Ʒ/��Ʒ','56','11');");
E_D("replace into `xia_juan_excel_cate` values('66','��','73','11');");
E_D("replace into `xia_juan_excel_cate` values('67','�������ȯ','1','11');");
E_D("replace into `xia_juan_excel_cate` values('68','�˶�/�٤/����/������Ʒ','99','11');");
E_D("replace into `xia_juan_excel_cate` values('69','�˶���/�����/���','5','11');");
E_D("replace into `xia_juan_excel_cate` values('70','�˶���/���з�װ','12','11');");
E_D("replace into `xia_juan_excel_cate` values('71','�˶�Ьnew','22','11');");
E_D("replace into `xia_juan_excel_cate` values('72','����','24','11');");
E_D("replace into `xia_juan_excel_cate` values('73','���濨/U��/�洢/�ƶ�Ӳ��','11','11');");
E_D("replace into `xia_juan_excel_cate` values('74','�����۾�/����Һ','11','11');");
E_D("replace into `xia_juan_excel_cate` values('75','��ʳ/���/�ز�','397','7');");
E_D("replace into `xia_juan_excel_cate` values('76','������','192','5');");
E_D("replace into `xia_juan_excel_cate` values('77','��Ʒ/��������/ʱ����Ʒ��','155','11');");
E_D("replace into `xia_juan_excel_cate` values('78','�ʻ��ٵ�/���ܷ���/��ֲ԰��','27','11');");

require("../../inc/footer.php");
?>