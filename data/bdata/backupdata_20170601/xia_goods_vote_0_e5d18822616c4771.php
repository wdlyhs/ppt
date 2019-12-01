<?php exit;?>
DROP TABLE IF EXISTS `xia_goods_vote`;
CREATE TABLE `xia_goods_vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_id` int(11) NOT NULL DEFAULT '0',
  `uid` int(11) NOT NULL DEFAULT '0',
  `addtime` int(11) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_id` (`data_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
