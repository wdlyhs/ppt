<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_redpaper`;");
E_C("CREATE TABLE `xia_redpaper` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `pid` int(10) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `num` int(10) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `sort` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `xia_redpaper` values('1','黄小建','195','http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJbQozibFs5h4BibyLFiadO7ibZUsj8ojSJGldibicZeZICfbC4vcLBFbdyPa9q6jpIoMgoiaKhGQbAExNXg/132','10','1000.00','10');");
E_D("replace into `xia_redpaper` values('2','黄小明','195','http://thirdwx.qlogo.cn/mmopen/vi_32/DYAIOgq83erRMKuRPmiauNvoMXcwLWsVHn2junHSy6q6GElHuzgE5RDogicwibPs0gTfv1pNjpQvWBu4qW0JQMfAA/132','10','12.00','0');");
E_D("replace into `xia_redpaper` values('3','黄小清','195','http://wx.qlogo.cn/mmopen/bWHTcKxRACibgdvLbqNTrXyDaUak1uhd6IUH7d2lqrGUUr5l3MO9sEv99cnED8ypSKUY4wE6b4JnJglAjVBVhLtO611gPHiaMu/132','5','10.00','0');");

require("../../inc/footer.php");
?>