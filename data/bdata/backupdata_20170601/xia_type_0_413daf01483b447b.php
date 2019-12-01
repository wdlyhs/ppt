<?php exit;?>
DROP TABLE IF EXISTS `xia_type`;
CREATE TABLE `xia_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `title` varchar(50) DEFAULT NULL,
  `sort` int(11) DEFAULT '0',
  `tag` varchar(20) NOT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `sys` tinyint(1) NOT NULL DEFAULT '0',
  `isshow` int(2) DEFAULT '1',
  `dan` int(2) DEFAULT NULL,
  `content` text,
  `url` varchar(255) DEFAULT NULL,
  `e_title` varchar(100) DEFAULT NULL,
  `jian_mod` varchar(100) DEFAULT NULL,
  `jian_act` varchar(100) DEFAULT NULL,
  `img` varchar(166) DEFAULT NULL,
  `pics` text,
  `etitle` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `xia_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`,`isshow`,`dan`,`content`,`url`,`e_title`,`jian_mod`,`jian_act`,`img`,`pics`,`etitle`) VALUES('396','0','产品及方案','12','article','1496031555','0','1',NULL,'','','','product','index','upload/2017/0529/13284480971.jpg','','product');
INSERT INTO `xia_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`,`isshow`,`dan`,`content`,`url`,`e_title`,`jian_mod`,`jian_act`,`img`,`pics`,`etitle`) VALUES('397','396','驱动控制/不间断电源产品','22','article','1496031591','0','1',NULL,'','','','product','list','https://www.fujielectric.com.cn/uploadfiles/image/201608/401.jpg','','');
INSERT INTO `xia_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`,`isshow`,`dan`,`content`,`url`,`e_title`,`jian_mod`,`jian_act`,`img`,`pics`,`etitle`) VALUES('398','396','自动化/仪器仪表','0','article','1496031603','0','1',NULL,'','','','about','index','https://www.fujielectric.com.cn/uploadfiles/image/201608/401.jpg','','');
INSERT INTO `xia_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`,`isshow`,`dan`,`content`,`url`,`e_title`,`jian_mod`,`jian_act`,`img`,`pics`,`etitle`) VALUES('399','396','电源半导体','0','article','1496031614','0','1',NULL,'','','','about','index','https://www.fujielectric.com.cn/uploadfiles/image/201608/401.jpg','','');
INSERT INTO `xia_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`,`isshow`,`dan`,`content`,`url`,`e_title`,`jian_mod`,`jian_act`,`img`,`pics`,`etitle`) VALUES('400','397','可编程控制器（PLC）','0','article','1496031654','0','1',NULL,'<span style=\"color:#666666;font-family:SimSun;line-height:22px;white-space:normal;background-color:#F3F3F3;\">充分满足客户所要求的功能、性能的伺服系统。尤其适合于高节拍、高速度定位的机械。</span>','','','product','list','https://www.fujielectric.com.cn/uploadfiles/image/201608/135.png','','');
INSERT INTO `xia_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`,`isshow`,`dan`,`content`,`url`,`e_title`,`jian_mod`,`jian_act`,`img`,`pics`,`etitle`) VALUES('401','397','人机界面（HMI）','0','article','1496031686','0','1',NULL,'<span style=\"color:#666666;font-family:SimSun;line-height:22px;white-space:normal;background-color:#F3F3F3;\">充分满足客户所要求的功能、性能的伺服系统。尤其适合于高节拍、高速度定位的机械。</span>','','','product','list','https://www.fujielectric.com.cn/uploadfiles/image/201608/55.png','','');
INSERT INTO `xia_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`,`isshow`,`dan`,`content`,`url`,`e_title`,`jian_mod`,`jian_act`,`img`,`pics`,`etitle`) VALUES('402','0','售后及服务','11','article','1496031741','0','1',NULL,'<span style=\"color:#888888;font-family:SimSun;line-height:20px;white-space:normal;background-color:#FFFFFF;\">我们提供的各种服务，涵盖了整个客户的设施的生命周期，从最初的安装到他们的更新和处置。</span>\r\n<p style=\"padding:0px;margin-top:10px;margin-bottom:0px;list-style-type:none;color:#888888;font-family:SimSun;line-height:20px;white-space:normal;float:none;background-color:#FFFFFF;\">\r\n	技术维护热线：<br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n<b style=\"padding:0px;margin:0px;list-style-type:none;font-size:14px;\">400-880-9197</b>\r\n</p>','','','about','index','upload/2017/0529/13184990148.jpg','','serivce');
INSERT INTO `xia_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`,`isshow`,`dan`,`content`,`url`,`e_title`,`jian_mod`,`jian_act`,`img`,`pics`,`etitle`) VALUES('403','402','售后服务','11','article','1496031769','0','1',NULL,'<table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"padding:0px;margin:0px;list-style-type:none;max-width:100%;empty-cells:show;border-spacing:0px;color:#6B6A6A;font-family:SimSun;font-size:12px;line-height:21.6px;\" class=\"ke-zeroborder\">\r\n	<tbody style=\"padding:0px;margin:0px;list-style-type:none;\">\r\n		<tr class=\"my_tbl\" style=\"padding:0px;margin:0px;list-style-type:none;\">\r\n			<td class=\"sht1\" align=\"center\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:89px;min-width:30px;\">\r\n				上海\r\n			</td>\r\n			<td class=\"sht2\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:727px;\">\r\n				<p style=\"padding:0px;margin-top:0px;margin-bottom:0px;list-style-type:none;\">\r\n					上海市普陀区凯旋北路1188号环球港B座26楼&nbsp;<a href=\"http://j.map.baidu.com/7USMj\" target=\"_blank\" style=\"padding:0px;margin:0px;list-style-type:none;text-decoration:none;border:0px;\"><img src=\"https://www.fujielectric.com.cn/views/default/images/map_icon.gif\" width=\"50\" height=\"14\" style=\"padding:0px;margin:0px;list-style-type:none;vertical-align:middle;max-width:100%;float:none;\" /></a><br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n邮编:200062\r\n				</p>\r\n			</td>\r\n			<td class=\"sht3\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:254px;\">\r\n				电话 (021)5496-1177<br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n传真 (021)6422-4650\r\n			</td>\r\n		</tr>\r\n		<tr class=\"my_tbl\" style=\"padding:0px;margin:0px;list-style-type:none;\">\r\n			<td class=\"sht1\" align=\"center\" style=\"padding:5px;margin:0px;list-style-type:none;width:89px;min-width:30px;\">\r\n				北京\r\n			</td>\r\n			<td class=\"sht2\" style=\"padding:5px;margin:0px;list-style-type:none;width:727px;\">\r\n				<p style=\"padding:0px;margin-top:0px;margin-bottom:0px;list-style-type:none;\">\r\n					北京市朝阳区曙光西里甲5号凤凰置地广场A座2007室&nbsp;<a href=\"http://j.map.baidu.com/qM23h\" target=\"_blank\" style=\"padding:0px;margin:0px;list-style-type:none;text-decoration:none;border:0px;\"><img src=\"https://www.fujielectric.com.cn/views/default/images/map_icon.gif\" width=\"50\" height=\"14\" style=\"padding:0px;margin:0px;list-style-type:none;vertical-align:middle;max-width:100%;float:none;\" /></a><br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n邮编:100028\r\n				</p>\r\n			</td>\r\n			<td class=\"sht3\" style=\"padding:5px;margin:0px;list-style-type:none;width:254px;\">\r\n				电话 (010)5939-2250<br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n传真 (010)5939-2251\r\n			</td>\r\n		</tr>\r\n		<tr class=\"my_tbl\" style=\"padding:0px;margin:0px;list-style-type:none;\">\r\n			<td class=\"sht1\" align=\"center\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:89px;min-width:30px;\">\r\n				天津\r\n			</td>\r\n			<td class=\"sht2\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:727px;\">\r\n				<p style=\"padding:0px;margin-top:0px;margin-bottom:0px;list-style-type:none;\">\r\n					天津市和平区南京路189号津汇广场写字楼1号楼1005室&nbsp;<a href=\"http://j.map.baidu.com/hw23h\" target=\"_blank\" style=\"padding:0px;margin:0px;list-style-type:none;text-decoration:none;border:0px;\"><img src=\"https://www.fujielectric.com.cn/views/default/images/map_icon.gif\" width=\"50\" height=\"14\" style=\"padding:0px;margin:0px;list-style-type:none;vertical-align:middle;max-width:100%;float:none;\" /></a><br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n邮编:300051\r\n				</p>\r\n			</td>\r\n			<td class=\"sht3\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:254px;\">\r\n				电话 (022)2332-0905<br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n传真 (022)2711-9796\r\n			</td>\r\n		</tr>\r\n		<tr class=\"my_tbl\" style=\"padding:0px;margin:0px;list-style-type:none;\">\r\n			<td class=\"sht1\" align=\"center\" style=\"padding:5px;margin:0px;list-style-type:none;width:89px;min-width:30px;\">\r\n				沈阳\r\n			</td>\r\n			<td class=\"sht2\" style=\"padding:5px;margin:0px;list-style-type:none;width:727px;\">\r\n				<p style=\"padding:0px;margin-top:0px;margin-bottom:0px;list-style-type:none;\">\r\n					辽宁省沈阳市沈河区惠工街10号卓越大厦1205室&nbsp;<a href=\"http://j.map.baidu.com/q523h\" target=\"_blank\" style=\"padding:0px;margin:0px;list-style-type:none;text-decoration:none;border:0px;\"><img src=\"https://www.fujielectric.com.cn/views/default/images/map_icon.gif\" width=\"50\" height=\"14\" style=\"padding:0px;margin:0px;list-style-type:none;vertical-align:middle;max-width:100%;float:none;\" /></a><br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n邮编:110013\r\n				</p>\r\n			</td>\r\n			<td class=\"sht3\" style=\"padding:5px;margin:0px;list-style-type:none;width:254px;\">\r\n				电话 (024)2252-8852<br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n传真 (024)2252-8316\r\n			</td>\r\n		</tr>\r\n		<tr class=\"my_tbl\" style=\"padding:0px;margin:0px;list-style-type:none;\">\r\n			<td class=\"sht1\" align=\"center\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:89px;min-width:30px;\">\r\n				大连\r\n			</td>\r\n			<td class=\"sht2\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:727px;\">\r\n				<p style=\"padding:0px;margin-top:0px;margin-bottom:0px;list-style-type:none;\">\r\n					辽宁省大连市中山区人民路24号平安大厦1607室&nbsp;<a href=\"http://j.map.baidu.com/5fK6i\" target=\"_blank\" style=\"padding:0px;margin:0px;list-style-type:none;text-decoration:none;border:0px;\"><img src=\"https://www.fujielectric.com.cn/views/default/images/map_icon.gif\" width=\"50\" height=\"14\" style=\"padding:0px;margin:0px;list-style-type:none;vertical-align:middle;max-width:100%;float:none;\" /></a><br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n邮编:116001\r\n				</p>\r\n			</td>\r\n			<td class=\"sht3\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:254px;\">\r\n				电话 (0411)8265-1933<br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n传真 (0411)8265-2933\r\n			</td>\r\n		</tr>\r\n		<tr class=\"my_tbl\" style=\"padding:0px;margin:0px;list-style-type:none;\">\r\n			<td class=\"sht1\" align=\"center\" style=\"padding:5px;margin:0px;list-style-type:none;width:89px;min-width:30px;\">\r\n				济南\r\n			</td>\r\n			<td class=\"sht2\" style=\"padding:5px;margin:0px;list-style-type:none;width:727px;\">\r\n				<p style=\"padding:0px;margin-top:0px;margin-bottom:0px;list-style-type:none;\">\r\n					山东省济南市经十路17703号华特广场A419室&nbsp;<a href=\"http://j.map.baidu.com/0H23h\" target=\"_blank\" style=\"padding:0px;margin:0px;list-style-type:none;text-decoration:none;border:0px;\"><img src=\"https://www.fujielectric.com.cn/views/default/images/map_icon.gif\" width=\"50\" height=\"14\" style=\"padding:0px;margin:0px;list-style-type:none;vertical-align:middle;max-width:100%;float:none;\" /></a><br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n邮编:250061\r\n				</p>\r\n			</td>\r\n			<td class=\"sht3\" style=\"padding:5px;margin:0px;list-style-type:none;width:254px;\">\r\n				电话 (0531)8697-2246<br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n传真 (0531)8697-5997\r\n			</td>\r\n		</tr>\r\n		<tr class=\"my_tbl\" style=\"padding:0px;margin:0px;list-style-type:none;\">\r\n			<td class=\"sht1\" align=\"center\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:89px;min-width:30px;\">\r\n				西安\r\n			</td>\r\n			<td class=\"sht2\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:727px;\">\r\n				<p style=\"padding:0px;margin-top:0px;margin-bottom:0px;list-style-type:none;\">\r\n					陕西省西安市西二路23号万景商务中心1103室&nbsp;<a href=\"http://j.map.baidu.com/DL23h\" target=\"_blank\" style=\"padding:0px;margin:0px;list-style-type:none;text-decoration:none;border:0px;\"><img src=\"https://www.fujielectric.com.cn/views/default/images/map_icon.gif\" width=\"50\" height=\"14\" style=\"padding:0px;margin:0px;list-style-type:none;vertical-align:middle;max-width:100%;float:none;\" /></a><br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n邮编:710004\r\n				</p>\r\n			</td>\r\n			<td class=\"sht3\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:254px;\">\r\n				电话 (029)8754-3418<br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n传真 (029)8754-3486\r\n			</td>\r\n		</tr>\r\n		<tr class=\"my_tbl\" style=\"padding:0px;margin:0px;list-style-type:none;\">\r\n			<td class=\"sht1\" align=\"center\" style=\"padding:5px;margin:0px;list-style-type:none;width:89px;min-width:30px;\">\r\n				重庆\r\n			</td>\r\n			<td class=\"sht2\" style=\"padding:5px;margin:0px;list-style-type:none;width:727px;\">\r\n				<p style=\"padding:0px;margin-top:0px;margin-bottom:0px;list-style-type:none;\">\r\n					重庆市渝中区中山三路131号庆隆希尔顿商务中心626室&nbsp;<a href=\"http://j.map.baidu.com/QP23h\" target=\"_blank\" style=\"padding:0px;margin:0px;list-style-type:none;text-decoration:none;border:0px;\"><img src=\"https://www.fujielectric.com.cn/views/default/images/map_icon.gif\" width=\"50\" height=\"14\" style=\"padding:0px;margin:0px;list-style-type:none;vertical-align:middle;max-width:100%;float:none;\" /></a><br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n邮编:400015\r\n				</p>\r\n			</td>\r\n			<td class=\"sht3\" style=\"padding:5px;margin:0px;list-style-type:none;width:254px;\">\r\n				电话 (023)8903-8939<br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n传真 (023)8903-8949\r\n			</td>\r\n		</tr>\r\n		<tr class=\"my_tbl\" style=\"padding:0px;margin:0px;list-style-type:none;\">\r\n			<td class=\"sht1\" align=\"center\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:89px;min-width:30px;\">\r\n				武汉\r\n			</td>\r\n			<td class=\"sht2\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:727px;\">\r\n				<p style=\"padding:0px;margin-top:0px;margin-bottom:0px;list-style-type:none;\">\r\n					武汉市洪山区文治街32号武昌府二期西区5号商业栋B单元1715室&nbsp;<a href=\"http://j.map.baidu.com/v-23h\" target=\"_blank\" style=\"padding:0px;margin:0px;list-style-type:none;text-decoration:none;border:0px;\"><img src=\"https://www.fujielectric.com.cn/views/default/images/map_icon.gif\" width=\"50\" height=\"14\" style=\"padding:0px;margin:0px;list-style-type:none;vertical-align:middle;max-width:100%;float:none;\" /></a><br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n邮编:430033\r\n				</p>\r\n			</td>\r\n			<td class=\"sht3\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:254px;\">\r\n				电话 (027)8571-2540<br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n传真 (027)8739-8955\r\n			</td>\r\n		</tr>\r\n		<tr class=\"my_tbl\" style=\"padding:0px;margin:0px;list-style-type:none;\">\r\n			<td class=\"sht1\" align=\"center\" style=\"padding:5px;margin:0px;list-style-type:none;width:89px;min-width:30px;\">\r\n				成都\r\n			</td>\r\n			<td class=\"sht2\" style=\"padding:5px;margin:0px;list-style-type:none;width:727px;\">\r\n				<p style=\"padding:0px;margin-top:0px;margin-bottom:0px;list-style-type:none;\">\r\n					四川省成都市人民南路2段1号 仁恒置地广场写字楼3206室&nbsp;<a href=\"http://j.map.baidu.com/hW23h\" target=\"_blank\" style=\"padding:0px;margin:0px;list-style-type:none;text-decoration:none;border:0px;\"><img src=\"https://www.fujielectric.com.cn/views/default/images/map_icon.gif\" width=\"50\" height=\"14\" style=\"padding:0px;margin:0px;list-style-type:none;vertical-align:middle;max-width:100%;float:none;\" /></a><br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n邮编:610016\r\n				</p>\r\n			</td>\r\n			<td class=\"sht3\" style=\"padding:5px;margin:0px;list-style-type:none;width:254px;\">\r\n				电话 (028)6210-1091<br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n传真 (028)6210-1096\r\n			</td>\r\n		</tr>\r\n		<tr class=\"my_tbl\" style=\"padding:0px;margin:0px;list-style-type:none;\">\r\n			<td class=\"sht1\" align=\"center\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:89px;min-width:30px;\">\r\n				青岛\r\n			</td>\r\n			<td class=\"sht2\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:727px;\">\r\n				<p style=\"padding:0px;margin-top:0px;margin-bottom:0px;list-style-type:none;\">\r\n					山东省青岛市市北区连云港路33号万达广场商务楼B座2516室&nbsp;<a href=\"http://j.map.baidu.com/qnG3h\" target=\"_blank\" style=\"padding:0px;margin:0px;list-style-type:none;text-decoration:none;border:0px;\"><img src=\"https://www.fujielectric.com.cn/views/default/images/map_icon.gif\" width=\"50\" height=\"14\" style=\"padding:0px;margin:0px;list-style-type:none;vertical-align:middle;max-width:100%;float:none;\" /></a><br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n邮编:266034\r\n				</p>\r\n			</td>\r\n			<td class=\"sht3\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:254px;\">\r\n				电话 (0532)8086-0012<br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n传真 (0532)8086-0013\r\n			</td>\r\n		</tr>\r\n		<tr class=\"my_tbl\" style=\"padding:0px;margin:0px;list-style-type:none;\">\r\n			<td class=\"sht1\" align=\"center\" style=\"padding:5px;margin:0px;list-style-type:none;width:89px;min-width:30px;\">\r\n				广州\r\n			</td>\r\n			<td class=\"sht2\" style=\"padding:5px;margin:0px;list-style-type:none;width:727px;\">\r\n				<p style=\"padding:0px;margin-top:0px;margin-bottom:0px;list-style-type:none;\">\r\n					广东省广州市天河区林和西路1号广州国际贸易中心3201房&nbsp;<a href=\"http://j.map.baidu.com/LBzui\" target=\"_blank\" style=\"padding:0px;margin:0px;list-style-type:none;text-decoration:none;border:0px;\"><img src=\"https://www.fujielectric.com.cn/views/default/images/map_icon.gif\" width=\"50\" height=\"14\" style=\"padding:0px;margin:0px;list-style-type:none;vertical-align:middle;max-width:100%;float:none;\" /></a><br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n邮编:510180\r\n				</p>\r\n			</td>\r\n			<td class=\"sht3\" style=\"padding:5px;margin:0px;list-style-type:none;width:254px;\">\r\n				电话 (020)8755-3800<br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n传真 (020)8755-4283\r\n			</td>\r\n		</tr>\r\n		<tr class=\"my_tbl\" style=\"padding:0px;margin:0px;list-style-type:none;\">\r\n			<td class=\"sht1\" align=\"center\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:89px;min-width:30px;\">\r\n				厦门\r\n			</td>\r\n			<td class=\"sht2\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:727px;\">\r\n				<p style=\"padding:0px;margin-top:0px;margin-bottom:0px;list-style-type:none;\">\r\n					福建省厦门市湖滨南路258号鸿翔大厦21楼B1室&nbsp;<a href=\"http://j.map.baidu.com/9uG3h\" target=\"_blank\" style=\"padding:0px;margin:0px;list-style-type:none;text-decoration:none;border:0px;\"><img src=\"https://www.fujielectric.com.cn/views/default/images/map_icon.gif\" width=\"50\" height=\"14\" style=\"padding:0px;margin:0px;list-style-type:none;vertical-align:middle;max-width:100%;float:none;\" /></a><br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n邮编:361004\r\n				</p>\r\n			</td>\r\n			<td class=\"sht3\" bgcolor=\"#f3eed7\" style=\"padding:5px;margin:0px;list-style-type:none;width:254px;\">\r\n				电话 (0592)518-7953<br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n传真 (0592)518-5289\r\n			</td>\r\n		</tr>\r\n		<tr class=\"my_tbl\" style=\"padding:0px;margin:0px;list-style-type:none;\">\r\n			<td class=\"sht1\" align=\"center\" style=\"padding:5px;margin:0px;list-style-type:none;width:89px;min-width:30px;\">\r\n				深圳\r\n			</td>\r\n			<td class=\"sht2\" style=\"padding:5px;margin:0px;list-style-type:none;width:727px;\">\r\n				<p style=\"padding:0px;margin-top:0px;margin-bottom:0px;list-style-type:none;\">\r\n					广东省深圳市南山区桃园路田厦金牛广场A座3008-3010单元(田厦国际中心)&nbsp;<a href=\"http://j.map.baidu.com/43dAl\" target=\"_blank\" style=\"padding:0px;margin:0px;list-style-type:none;text-decoration:none;border:0px;\"><img src=\"https://www.fujielectric.com.cn/views/default/images/map_icon.gif\" width=\"50\" height=\"14\" style=\"padding:0px;margin:0px;list-style-type:none;vertical-align:middle;max-width:100%;float:none;\" /></a><br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n邮编:518053\r\n				</p>\r\n			</td>\r\n			<td class=\"sht3\" style=\"padding:5px;margin:0px;list-style-type:none;width:254px;\">\r\n				电话 (0755)8363-2248<br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n传真 (0755)8362-9785\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>','','','about','index','','','');
INSERT INTO `xia_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`,`isshow`,`dan`,`content`,`url`,`e_title`,`jian_mod`,`jian_act`,`img`,`pics`,`etitle`) VALUES('404','402','资料下载','2','article','1496031800','0','1',NULL,'','','','article','xia','','','');
INSERT INTO `xia_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`,`isshow`,`dan`,`content`,`url`,`e_title`,`jian_mod`,`jian_act`,`img`,`pics`,`etitle`) VALUES('405','0','关于我们','9','article','1496031835','0','1',NULL,'<span style=\"color:#888888;font-family:SimSun;line-height:20px;white-space:normal;background-color:#FFFFFF;\"><span style=\"font-family:monospace;font-size:medium;line-height:normal;white-space:pre-wrap;\">福州威尔达电气科技有限公司</span>自创业以来已有90余年，<span style=\"color:#888888;font-family:monospace;font-size:medium;line-height:normal;white-space:pre-wrap;background-color:#FFFFFF;\">威尔达</span>在这悠久的历史中，不断革新能源技术，在产业和社会领域中为世界作出巨大贡献。中国与<span style=\"color:#888888;font-family:monospace;font-size:medium;line-height:normal;white-space:pre-wrap;background-color:#FFFFFF;\">威尔达</span>电机的渊源由来已久，可追溯至1965年在四川省射洪县引进中国首例的阀门水轮发电机。</span>','','','about','index','upload/2017/0529/13241544433.jpg','','about');
INSERT INTO `xia_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`,`isshow`,`dan`,`content`,`url`,`e_title`,`jian_mod`,`jian_act`,`img`,`pics`,`etitle`) VALUES('406','405','总代表致辞','21','article','1496031873','0','1',NULL,'<span style=\"color:#6B6A6A;font-family:SimSun;font-size:14px;line-height:26px;white-space:normal;background-color:#FFFFFF;\">在这悠久的历史中，威尔达电机不断革新能源技术，在产业和社会领域中为世界作出巨大贡献。中国与<span style=\"color:#6B6A6A;font-family:SimSun;font-size:14px;line-height:26px;white-space:normal;background-color:#FFFFFF;\">威尔达</span>电机的渊源由来已久。&nbsp;</span><br style=\"padding:0px;margin:0px;list-style-type:none;color:#6B6A6A;font-family:SimSun;font-size:14px;line-height:26px;white-space:normal;background-color:#FFFFFF;\" />\r\n<span style=\"color:#6B6A6A;font-family:SimSun;font-size:14px;line-height:26px;white-space:normal;background-color:#FFFFFF;\">如今，地球正因前所未有的人口激增和工业化的急速发展，面临着各种各样的能源问题和环境问题。即便是已经拥有全球性经济规模，每年保持快速增长的中国，也日益重视如何构筑一个环保和节能双赢的和谐社会这一课题。&nbsp;</span><br style=\"padding:0px;margin:0px;list-style-type:none;color:#6B6A6A;font-family:SimSun;font-size:14px;line-height:26px;white-space:normal;background-color:#FFFFFF;\" />\r\n<span style=\"color:#6B6A6A;font-family:SimSun;font-size:14px;line-height:26px;white-space:normal;background-color:#FFFFFF;\"><span style=\"color:#6B6A6A;font-family:SimSun;font-size:14px;line-height:26px;white-space:normal;background-color:#FFFFFF;\">威尔达</span>电机（中国）依托创业以来积累的技术和经验，追求电力、热能技术的革新，通过能够高效利用能源的高附加值环保型产品，为中国社会的发展贡献自身力量。</span>','','','about','index','','','');
INSERT INTO `xia_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`,`isshow`,`dan`,`content`,`url`,`e_title`,`jian_mod`,`jian_act`,`img`,`pics`,`etitle`) VALUES('407','405','公司概要','222','article','1496031887','0','1',NULL,'本公司位于海峡西岸经济区，集工贸一体的自动化控制系统集成商；我们拥有一支朝气蓬勃、团结协助的专业技术队伍，秉承“专业、创新、卓越、服务”的经营理念，专心专注为客户提供系统解决方案。也是一家能为广大客户提供纺电技术咨询、设备选配、售后培训及维护的专业服务公司。<br />\r\n主要提供工厂电气自动化配电设计，设备布局，棉纺厂数据采集监控系统；梳棉机、并条专用控制器改PLC，粗纱铁炮改四电机电脑控制，各种细纱变频的维修和替换。<br />\r\n专业维修各种伺服电机，驱动器，触摸屏及专用控制器。如特吕的梳棉机面板，电机控制器，触摸屏，五层板等；朗维细纱机的西门子触摸屏，PLC，力士乐的伺服电机，驱动器等；冬夏并条机的触摸屏，变频器，PLC；天门并条的伺服，文本，变频器等；村田N5自络工控机，单锭板，电源，检测头 ，，诺菲电清工控机的维修；………..<br />\r\n各种机器的配套天门，宏源，东台等品牌的以下电气配件：PCB控制电路板、显示屏、触摸屏、接近开关、薄膜开关、编码器、 变频器、、、、、等。<br />\r\n建设现代化纺织强国，是我们共同的责任和愿望；加快纺织工业科技进步的步伐，是你我追求的目标和理想。为了同一个责任和理想，让我们携起手来，至诚至信，精诚合作，共谋发展。<br />\r\n我们的努力是为您节省成本，节约时间，提高设备的运行稳定性！<br />','','','about','index','','','');
INSERT INTO `xia_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`,`isshow`,`dan`,`content`,`url`,`e_title`,`jian_mod`,`jian_act`,`img`,`pics`,`etitle`) VALUES('408','0','新闻活动','7','article','1496031908','0','1',NULL,'<span style=\"color:#888888;font-family:SimSun;line-height:20px;white-space:normal;background-color:#FFFFFF;\">威尔达电机自创业以来已有90余年，在这悠久的历史中，<span style=\"color:#888888;font-family:SimSun;line-height:20px;white-space:normal;background-color:#FFFFFF;\">威尔达</span>不断革新能源技术，在产业和社会领域中为世界作出巨大贡献。中国与富士电机的渊源由来已久，可追溯至1965年在四川省射洪县引进中国首例的阀门水轮发电机。</span>','','','article','list','upload/2017/0529/13253323249.jpg','','news');
INSERT INTO `xia_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`,`isshow`,`dan`,`content`,`url`,`e_title`,`jian_mod`,`jian_act`,`img`,`pics`,`etitle`) VALUES('409','408','新闻活动','2','article','1496031926','0','1',NULL,'','','','article','list','','','');
INSERT INTO `xia_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`,`isshow`,`dan`,`content`,`url`,`e_title`,`jian_mod`,`jian_act`,`img`,`pics`,`etitle`) VALUES('411','0','联系我们','1','article','1496031960','0','1',NULL,'<span style=\"color:#888888;font-family:SimSun;line-height:20px;white-space:normal;background-color:#FFFFFF;\">请选择需要咨询的产品类型与我们联系。针对本网站的意见也开设有咨询窗口，欢迎使用。</span><br style=\"padding:0px;margin:0px;list-style-type:none;color:#888888;font-family:SimSun;line-height:20px;white-space:normal;background-color:#FFFFFF;\" />\r\n<p style=\"padding:0px;margin-top:10px;margin-bottom:0px;list-style-type:none;color:#888888;font-family:SimSun;line-height:20px;white-space:normal;float:none;background-color:#FFFFFF;\">\r\n	威尔达电机（中国）有限公司 营业本部<br style=\"padding:0px;margin:0px;list-style-type:none;\" />\r\n<b style=\"padding:0px;margin:0px;list-style-type:none;font-size:14px;\">021-54961177&nbsp;<span style=\"padding:0px;margin:0px;list-style-type:none;font-weight:normal;\">(9:00-17:00)</span></b> \r\n</p>','','','about','index','upload/2017/0529/13261413175.jpg','','contact');
INSERT INTO `xia_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`,`isshow`,`dan`,`content`,`url`,`e_title`,`jian_mod`,`jian_act`,`img`,`pics`,`etitle`) VALUES('415','411','联系我们','0','article','1496062858','0','1',NULL,'<p>\r\n	<span style=\"padding:0px;margin:0px;list-style-type:none;color:#6B6A6A;line-height:21.6px;white-space:normal;font-family:\'font-size:12px;background-color:#FFFFFF;\">公司名称:<span style=\"font-family:monospace;font-size:medium;line-height:normal;white-space:pre-wrap;\">福州威尔达电气科技有限公司</span></span>\r\n</p>\r\n<p>\r\n	<span style=\"padding:0px;margin:0px;list-style-type:none;color:#6B6A6A;line-height:21.6px;white-space:normal;font-family:\'font-size:12px;background-color:#FFFFFF;\">网址：www.welldone.cc</span>\r\n</p>\r\n<p>\r\n	<span style=\"padding:0px;margin:0px;list-style-type:none;color:#6B6A6A;line-height:21.6px;white-space:normal;font-family:\'font-size:12px;background-color:#FFFFFF;\">地址:福州市五一中路万都阿波罗1325单元</span>\r\n</p>\r\n<p>\r\n	<span style=\"padding:0px;margin:0px;list-style-type:none;color:#6B6A6A;line-height:21.6px;white-space:normal;font-family:\'font-size:12px;background-color:#FFFFFF;\">电话:0591-83204099<span style=\"color:#6B6A6A;font-family:\'font-size:12px;background-color:#FFFFFF;line-height:21.6px;white-space:normal;\">（平日9：00-17：00）</span></span>\r\n</p>','','','about','index','','','');
INSERT INTO `xia_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`,`isshow`,`dan`,`content`,`url`,`e_title`,`jian_mod`,`jian_act`,`img`,`pics`,`etitle`) VALUES('414','399','子分类','0','article','1496037736','0','1',NULL,'','','','about','index','','','');
