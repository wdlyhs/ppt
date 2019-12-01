<?php exit;?>
DROP TABLE IF EXISTS `xia_product`;
CREATE TABLE `xia_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cid` int(10) DEFAULT NULL,
  `img` varchar(222) DEFAULT NULL,
  `hao` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `sort` int(10) DEFAULT '0',
  `f_cid` int(10) DEFAULT NULL,
  `addtime` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;
/*duoduo table info cup*/;
INSERT INTO `xia_product` (`id`,`cid`,`img`,`hao`,`title`,`sort`,`f_cid`,`addtime`) VALUES('1','354','http://www.shidun-china.com/kps01/M00/DB/20/wKiAiVdqABTqZhLIAAAlYGZoYRM812.jpg','X51611-G','一位大跷板开关','2','338','');
INSERT INTO `xia_product` (`id`,`cid`,`img`,`hao`,`title`,`sort`,`f_cid`,`addtime`) VALUES('2','354','http://www.shidun-china.com/kps01/M00/DB/20/wKiAiVdqAB_cMLerAAAmr5gq_AY757.jpg','X51621-G','二位大跷板开关','2','338','');
INSERT INTO `xia_product` (`id`,`cid`,`img`,`hao`,`title`,`sort`,`f_cid`,`addtime`) VALUES('3','354','http://www.shidun-china.com/kps01/M00/DB/20/wKiAiVdqABjaNSDOAAAn-wEos8o444.jpg','X51631-G','三位大跷板开关','0','338','');
INSERT INTO `xia_product` (`id`,`cid`,`img`,`hao`,`title`,`sort`,`f_cid`,`addtime`) VALUES('4','353','http://www.shidun-china.com/kps01/M00/DB/20/wKiAiVdqACrxU6f4AAAm3-emFas908.jpg','X516V-G','一位16A三极插座','0','338','');
INSERT INTO `xia_product` (`id`,`cid`,`img`,`hao`,`title`,`sort`,`f_cid`,`addtime`) VALUES('5','353','http://www.shidun-china.com/kps01/M00/DB/20/wKiAiVdqACLkuncfAAApXZ6ndts501.jpg','X510UV-G','一位16A三极插座','0','338','');
INSERT INTO `xia_product` (`id`,`cid`,`img`,`hao`,`title`,`sort`,`f_cid`,`addtime`) VALUES('6','352','http://www.shidun-china.com/kps01/M00/DB/20/wKiAiVdqABWpG3FnAAAogQ3m2TU838.jpg','X51611V-G','一位大跷板开关16A三扁插座','0','338','');
INSERT INTO `xia_product` (`id`,`cid`,`img`,`hao`,`title`,`sort`,`f_cid`,`addtime`) VALUES('7','354','http://www.shidun-china.com/kps01/M00/DB/1F/wKiAiVdqABPSBZUBAAAni9RVJms407.jpg','345345','一位电视插座','0','338','');
INSERT INTO `xia_product` (`id`,`cid`,`img`,`hao`,`title`,`sort`,`f_cid`,`addtime`) VALUES('9','354','http://www.shidun-china.com/kps01/M00/DB/20/wKiAiVdqAB_cMLerAAAmr5gq_AY757.jpg','223','朋','0','338','');
