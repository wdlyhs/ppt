<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_tie_comment`;");
E_C("CREATE TABLE `xia_tie_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `content` text,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `replay_id` int(10) DEFAULT NULL,
  `txt` text,
  PRIMARY KEY (`id`),
  KEY `mall_id` (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8");
E_D("replace into `xia_tie_comment` values('1','15','5581','说好的呢，我草','1497171572','0','说好的呢，我草');");
E_D("replace into `xia_tie_comment` values('2','15','5581','//w电压','1497171925','1','//w电压');");
E_D("replace into `xia_tie_comment` values('3','15','5581','要要阿斯蒂芬 工<br><img src=''/u/a/0.87887400 1497172001.jpg'' /><br><img src=''/u/a/0.17889100 1497172002.jpg'' />','1497172003','1','要要阿斯蒂芬 工');");
E_D("replace into `xia_tie_comment` values('4','15','5581','4放','1497172189','1','4放');");
E_D("replace into `xia_tie_comment` values('5','15','5581','好好学习天天向上哈','1497172202','1','好好学习天天向上哈');");
E_D("replace into `xia_tie_comment` values('6','15','5581','哪里拍的','1497172230','1','哪里拍的');");
E_D("replace into `xia_tie_comment` values('7','15','5581','也是，其实我也是想争取我的利益，不管他们如何。只是利益冲突下，他们联合起来指责我罢了','1497172246','1','也是，其实我也是想争取我的利益，不管他们如何。只是利益冲突下，他们联合起来指责我罢了');");
E_D("replace into `xia_tie_comment` values('8','15','5581','社会上都是些豺狼虎豹。只会管自己的。谁会管你的死活啊','1497172255','1','社会上都是些豺狼虎豹。只会管自己的。谁会管你的死活啊');");
E_D("replace into `xia_tie_comment` values('9','15','5581','我家院子里的月季花开了，虽不艳丽，不显眼，但我很喜欢它','1497172303','1','我家院子里的月季花开了，虽不艳丽，不显眼，但我很喜欢它');");
E_D("replace into `xia_tie_comment` values('10','15','5581','我家院子里的月季花开了，虽不艳丽，不显眼，但我很喜欢它<br><img src=''/u/a/0.17762200 1497172312.jpg'' />','1497172313','1','我家院子里的月季花开了，虽不艳丽，不显眼，但我很喜欢它');");
E_D("replace into `xia_tie_comment` values('11','15','5581','你们香港空间能不能处理下，太卡了','1497172322','1','你们香港空间能不能处理下，太卡了');");
E_D("replace into `xia_tie_comment` values('12','15','5580','长期下哈','1497191221','0','长期下哈');");
E_D("replace into `xia_tie_comment` values('13','15','5580','太卡有什么方法呢<br><img src=''/u/a/0.95080100 1497191249.jpg'' /><br><img src=''/u/a/0.99280300 1497191249.jpg'' />','1497191251','11','太卡有什么方法呢');");
E_D("replace into `xia_tie_comment` values('14','15','5580','s<br><img src=''/u/a/0.44760400 1497191316.jpg'' />','1497191317','0','s');");
E_D("replace into `xia_tie_comment` values('15','15','5580','a','1497191356','0','a');");
E_D("replace into `xia_tie_comment` values('16','15','5580','现在可以了不','1497191433','0','现在可以了不');");
E_D("replace into `xia_tie_comment` values('17','15','5580','222','1497191498','0','222');");
E_D("replace into `xia_tie_comment` values('18','15','5580','3','1497191509','0','3');");
E_D("replace into `xia_tie_comment` values('19','15','5580','可以不','1497191769','0','可以不');");
E_D("replace into `xia_tie_comment` values('20','15','5580','a','1497191827','0','a');");
E_D("replace into `xia_tie_comment` values('21','15','5580','工','1497191879','0','工');");
E_D("replace into `xia_tie_comment` values('22','15','5580','工','1497191894','0','工');");
E_D("replace into `xia_tie_comment` values('23','15','5580','终于可以了是吧','1497191905','0','终于可以了是吧');");
E_D("replace into `xia_tie_comment` values('24','15','5580','继续 测试','1497192268','0','继续 测试');");
E_D("replace into `xia_tie_comment` values('25','15','5580','黄飞鸿<br><img src=''/u/a/0.95882800 1497192281.jpg'' />','1497192283','0','黄飞鸿');");
E_D("replace into `xia_tie_comment` values('26','15','5580','关键时候来了','1497192294','0','关键时候来了');");
E_D("replace into `xia_tie_comment` values('27','15','5580','哈哈','1497192378','0','哈哈');");
E_D("replace into `xia_tie_comment` values('28','15','5580','我也不矢回事一','1497192408','0','我也不矢回事一');");
E_D("replace into `xia_tie_comment` values('29','2','5580','试下这个哈','1497192708','0','试下这个哈');");
E_D("replace into `xia_tie_comment` values('30','2','5580','我<br><img src=''/u/a/0.35518900 1497192725.jpg'' />','1497192726','0','我');");
E_D("replace into `xia_tie_comment` values('31','15','5580','的','1497242632','1','的');");
E_D("replace into `xia_tie_comment` values('32','15','5580','再测试吧','1497243062','31','再测试吧');");
E_D("replace into `xia_tie_comment` values('33','15','5580','长期下','1497327183','0','长期下');");
E_D("replace into `xia_tie_comment` values('34','15','1298','再弄','1497327287','0','再弄');");
E_D("replace into `xia_tie_comment` values('35','15','1298','s','1497328898','0','s');");
E_D("replace into `xia_tie_comment` values('36','15','1298','a','1497329028','0','a');");
E_D("replace into `xia_tie_comment` values('37','15','1298','sd','1497329073','0','sd');");
E_D("replace into `xia_tie_comment` values('38','20','1298','测试','1497344990','0','测试');");
E_D("replace into `xia_tie_comment` values('39','20','1298','有人吗，有人吗','1497345022','0','有人吗，有人吗');");
E_D("replace into `xia_tie_comment` values('40','16','5582','我也不好','1497345956','0','我也不好');");
E_D("replace into `xia_tie_comment` values('41','2','5582','我也回下看下','1497347151','0','我也回下看下');");
E_D("replace into `xia_tie_comment` values('42','2','1','此时无声胜有声','1498184558','0','此时无声胜有声');");
E_D("replace into `xia_tie_comment` values('43','21','1','在<br><img src=''/u/a/0.30829200 1498184685.jpg'' /><br><img src=''/u/a/0.21776800 1498184686.jpg'' />','1498184686','0','在');");
E_D("replace into `xia_tie_comment` values('44','12','1','哈<br><img src=''/u/a/0.17350800 1498214430.jpg'' />','1498214430','0','哈');");
E_D("replace into `xia_tie_comment` values('45','20','1','R<br><img src=''/u/a/0.67985400 1498218914.jpg'' />','1498218914','0','R');");
E_D("replace into `xia_tie_comment` values('46','21','5584','又来了','1498363419','0','又来了');");
E_D("replace into `xia_tie_comment` values('47','21','5591','哈','1498453338','0','哈');");
E_D("replace into `xia_tie_comment` values('48','21','5590','你','1498453431','47','你');");
E_D("replace into `xia_tie_comment` values('49','20','5595','哈哈','1498744981','0','哈哈');");
E_D("replace into `xia_tie_comment` values('50','7','5595','在<br><img src=''/u/a/0.21537300 1498745272.jpg'' />','1498745275','0','在');");
E_D("replace into `xia_tie_comment` values('51','22','5592','不','1498784103','0','不');");
E_D("replace into `xia_tie_comment` values('52','21','5596','刚<br><img src=''/u/a/0.74171800 1498790090.jpg'' />','1498790090','0','刚');");
E_D("replace into `xia_tie_comment` values('53','2','5592','在','1501929227','0','在');");
E_D("replace into `xia_tie_comment` values('54','2','5592','你<br><img src=''/u/a/0.72998700 1501929289.jpg'' />','1501929289','0','你');");
E_D("replace into `xia_tie_comment` values('55','21','5592','不<br><img src=''/u/a/0.08276800 1503369813.jpg'' />','1503369813','0','不');");
E_D("replace into `xia_tie_comment` values('56','23','5592','不<br><img src=''/u/a/0.61085300 1506082637.jpg'' /><br><img src=''/u/a/0.72853500 1506082640.jpg'' /><br><img src=''/u/a/0.88221100 1506082641.jpg'' /><br><img src=''/u/a/0.53221400 1506082642.jpg'' />','1506082645','0','不');");
E_D("replace into `xia_tie_comment` values('57','23','5592','不<br><img src=''/u/a/0.72580000 1506082693.jpg'' />','1506082694','0','不');");
E_D("replace into `xia_tie_comment` values('58','23','5592','不<br><img src=''/u/a/0.17702100 1506082727.jpg'' />','1506082727','0','不');");
E_D("replace into `xia_tie_comment` values('59','23','5592','不<br><img src=''/u/a/0.22958800 1506082783.jpg'' />','1506082783','0','不');");
E_D("replace into `xia_tie_comment` values('60','20','5592','这<br><img src=''/u/a/0.48727000 1506085427.jpg'' />','1506085428','0','这');");
E_D("replace into `xia_tie_comment` values('61','20','5592','在<br><img src=''/u/a/0.87779800 1506085627.jpg'' />','1506085628','0','在');");
E_D("replace into `xia_tie_comment` values('62','24','5592','这<br><img src=''/u/a/0.88908900 1506087060.png'' />','1506087061','0','这');");
E_D("replace into `xia_tie_comment` values('63','24','5592','不<br><img src=''/u/a/0.30164700 1506087123.jpg'' />','1506087124','0','不');");
E_D("replace into `xia_tie_comment` values('64','24','5592','这<br><img src=''/u/a/0.92329000 1506087298.jpg'' />','1506087299','0','这');");
E_D("replace into `xia_tie_comment` values('65','24','5592','王子','1506087323','64','王子');");
E_D("replace into `xia_tie_comment` values('66','24','5592','在<br><img src=''/u/a/0.97295300 1506087606.jpg'' />','1506087607','0','在');");
E_D("replace into `xia_tie_comment` values('67','22','5592','不<br><img src=''/u/a/0.20552300 1506151232.jpg'' />','1506151232','0','不');");
E_D("replace into `xia_tie_comment` values('68','22','5592','在<br><img src=''/u/a/0.29029200 1506151249.jpg'' />','1506151250','0','在');");
E_D("replace into `xia_tie_comment` values('69','22','5592','不<br><img src=''/u/a/0.26631800 1506151327.jpg'' /><br><img src=''/u/a/0.57158100 1506151327.jpg'' /><br><img src=''/u/a/0.41136500 1506151329.jpg'' /><br><img src=''/u/a/0.98273000 1506151331.jpg'' /><br><img src=''/u/a/0.81874700 1506151331.jpg'' />','1506151333','0','不');");
E_D("replace into `xia_tie_comment` values('70','25','5592','可以啊','1506167722','0','可以啊');");
E_D("replace into `xia_tie_comment` values('71','26','5609','在','1506245516','0','在');");
E_D("replace into `xia_tie_comment` values('72','14','5609','一','1506246081','0','一');");
E_D("replace into `xia_tie_comment` values('73','28','5611','古奇99新！原价：38000元。合伙人只要26000元。积分26000分。1积分1元。每天千分之一送返您的积分账户！<br><img src=''/u/a/0.91698000 1506634300.jpg'' /><br><img src=''/u/a/0.99015400 1506634300.jpg'' /><br><img src=''/u/a/0.40628400 1506634301.jpg'' /><br><img src=''/u/a/0.60351700 1506634301.jpg'' />','1506634302','0','古奇99新！原价：38000元。合伙人只要26000元。积分26000分。1积分1元。每天千分之一送返您的积分账户！');");

require("../../inc/footer.php");
?>