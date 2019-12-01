<?php exit;?>
DROP TABLE IF EXISTS `xia_tpl`;
CREATE TABLE `xia_tpl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `data` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `xia_tpl` (`id`,`title`,`data`) VALUES('1','pc_default','eJyNkk1ugzAQhe/iSllFlDZAk0ioh+iiGyQ04MEMGNvlp02IcveOSReV0kpIXtgzn5+e3/gitFVWHAV1oHDIHv0xcEaJLXdAklE5deo3APM5UFQxUIBpJ6B8dJqB5zjkmgPiJY4X0eL53faSO9n0EqLMpngXJwui8I1m5E7krwy2H3m/P4jrVjQEtqyRDbBEB9ork5F4ClztXjsrU+hHKjVuoBzTT8KvDck0eWKdEewdXKN2C1npYmbGK+bsCvt1ut7fXIMxSP9rqwk4ppEcw6W1LeEq8ShiXvJTm3vtv/j44B9ZGCrbdeYTH+gHgRm8oYeqSpJwCZzzvZVwHxVh8TOT4TaTnZ8RNHDK/QfIzdRxMRbXb/nVuQM=');
INSERT INTO `xia_tpl` (`id`,`title`,`data`) VALUES('2','wap_default','eJwljF2OwjAMhO+SfV2RNi1pugfYU1hChjhRpPwUSJAAwdlxxMtoPJ5vniIWX8SfaFssaEGmfu+27MWv6EnI/hCS50YCWSltESuBtOSwxQoy5BNLQk9XkBEf950Pjlm0N7rUcCUmoe0nmqAZY46sVlloi9Ire2dn/irFfln3xF5rA825YeSRI+Zzw/ydWEf86vvdy3aEppUZ+tTMiF7mqSfz0P2wMn4qsVwY/tHTP5+ulHooG/W9Ubw+esJQJw==');
