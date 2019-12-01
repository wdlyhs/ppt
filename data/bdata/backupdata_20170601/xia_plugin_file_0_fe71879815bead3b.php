<?php exit;?>
DROP TABLE IF EXISTS `xia_plugin_file`;
CREATE TABLE `xia_plugin_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `file` varchar(255) NOT NULL,
  `update_tag` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `code` (`code`),
  KEY `update_tag` (`update_tag`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
