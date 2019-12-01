<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xia_webset`;");
E_C("CREATE TABLE `xia_webset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `var` varchar(50) NOT NULL,
  `val` text,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `var` (`var`)
) ENGINE=MyISAM AUTO_INCREMENT=186 DEFAULT CHARSET=utf8");
E_D("replace into `xia_webset` values('1','fxbl','a:4:{i:0;s:3:\"0.5\";i:1;s:3:\"0.6\";i:2;s:4:\"0.73\";i:3;s:3:\"0.8\";}','1');");
E_D("replace into `xia_webset` values('2','sign','a:4:{s:4:\"open\";s:1:\"0\";s:5:\"money\";s:1:\"0\";s:8:\"jifenbao\";s:1:\"0\";s:5:\"jifen\";s:1:\"0\";}','1');");
E_D("replace into `xia_webset` values('3','baobei','a:11:{s:10:\"shai_jifen\";s:1:\"0\";s:10:\"hart_jifen\";s:1:\"0\";s:13:\"shai_jifenbao\";s:1:\"0\";s:13:\"hart_jifenbao\";s:1:\"0\";s:11:\"shai_s_time\";s:10:\"2011-10-01\";s:8:\"word_num\";s:2:\"80\";s:16:\"comment_word_num\";s:2:\"80\";s:13:\"comment_level\";s:1:\"0\";s:10:\"re_tao_cid\";s:1:\"1\";s:12:\"jiangli_bili\";s:3:\"0.1\";s:9:\"user_show\";s:1:\"1\";}','1');");
E_D("replace into `xia_webset` values('5','picwjt','0','2');");
E_D("replace into `xia_webset` values('6','picjm','0','2');");
E_D("replace into `xia_webset` values('7','comment_interval','60','0');");
E_D("replace into `xia_webset` values('8','chanet','a:5:{s:6:\"status\";s:1:\"0\";s:4:\"name\";s:0:\"\";s:3:\"pwd\";s:0:\"\";s:4:\"wzid\";s:0:\"\";s:3:\"key\";s:0:\"\";}','1');");
E_D("replace into `xia_webset` values('9','static','a:1:{s:5:\"index\";a:1:{s:5:\"index\";i:0;}}','1');");
E_D("replace into `xia_webset` values('10','tixian_limit','10','0');");
E_D("replace into `xia_webset` values('11','txxz','10','0');");
E_D("replace into `xia_webset` values('12','user','a:16:{s:5:\"jihuo\";s:1:\"0\";s:9:\"reg_money\";s:1:\"0\";s:12:\"reg_jifenbao\";s:1:\"0\";s:9:\"reg_jifen\";s:1:\"0\";s:9:\"reg_level\";s:1:\"0\";s:11:\"need_alipay\";s:1:\"0\";s:7:\"need_qq\";s:1:\"0\";s:11:\"need_tbnick\";s:1:\"0\";s:8:\"need_tjr\";s:1:\"0\";s:11:\"reg_between\";s:1:\"0\";s:14:\"auto_increment\";s:2:\"26\";s:7:\"autoreg\";s:1:\"1\";s:9:\"login_tip\";s:1:\"1\";s:8:\"limit_ip\";s:0:\"\";s:9:\"up_avatar\";s:1:\"1\";s:6:\"shoutu\";s:1:\"1\";}','1');");
E_D("replace into `xia_webset` values('13','siteid','19934','0');");
E_D("replace into `xia_webset` values('14','wujiumiaoapi','a:1:{s:10:\"cache_time\";s:1:\"0\";}','1');");
E_D("replace into `xia_webset` values('132','douwan','a:4:{s:6:\"status\";s:1:\"1\";s:3:\"img\";s:24:\"images/task/douwan_1.jpg\";s:5:\"title\";s:18:\"做任务拿奖励\";s:3:\"url\";s:0:\"\";}','1');");
E_D("replace into `xia_webset` values('15','tao_report_interval','1200','0');");
E_D("replace into `xia_webset` values('16','jifenbl','10','0');");
E_D("replace into `xia_webset` values('17','tgbl','0.1','0');");
E_D("replace into `xia_webset` values('18','taoapi','a:14:{s:10:\"cache_time\";s:1:\"0\";s:13:\"cache_monitor\";s:2:\"10\";s:6:\"appkey\";s:0:\"\";s:6:\"secret\";s:0:\"\";s:6:\"tbname\";s:0:\"\";s:2:\"s8\";s:1:\"1\";s:3:\"m2j\";s:1:\"0\";s:11:\"trade_check\";s:1:\"1\";s:10:\"auto_fanli\";i:1;s:15:\"auto_fanli_plan\";a:3:{s:5:\"equal\";s:1:\"1\";s:3:\"per\";s:2:\"50\";s:4:\"time\";s:1:\"3\";}s:6:\"freeze\";s:1:\"0\";s:11:\"freeze_sday\";s:19:\"2015-04-29 14:37:47\";s:12:\"freeze_limit\";s:0:\"\";s:5:\"tbpwd\";s:0:\"\";}','1');");
E_D("replace into `xia_webset` values('117','fanli','1','2');");
E_D("replace into `xia_webset` values('19','baobiao','a:1:{s:6:\"status\";s:1:\"1\";}','1');");
E_D("replace into `xia_webset` values('21','wjt','0','2');");
E_D("replace into `xia_webset` values('22','webclose','0','0');");
E_D("replace into `xia_webset` values('23','webclosemsg','网站升级中。。。','0');");
E_D("replace into `xia_webset` values('24','webtype','1','2');");
E_D("replace into `xia_webset` values('25','webname','重庆健康运营助手','2');");
E_D("replace into `xia_webset` values('26','url','www.2000.com','2');");
E_D("replace into `xia_webset` values('27','email','22527034@qq.com','0');");
E_D("replace into `xia_webset` values('28','qq','22527034','0');");
E_D("replace into `xia_webset` values('30','moban','default','2');");
E_D("replace into `xia_webset` values('31','level','a:4:{i:0;a:2:{s:5:\"title\";s:12:\"普通会员\";s:5:\"level\";s:1:\"0\";}i:1;a:2:{s:5:\"title\";s:12:\"黄金会员\";s:5:\"level\";s:2:\"30\";}i:2;a:2:{s:5:\"title\";s:12:\"白金会员\";s:5:\"level\";s:2:\"50\";}i:3;a:2:{s:5:\"title\";s:12:\"钻石会员\";s:5:\"level\";s:3:\"100\";}}','1');");
E_D("replace into `xia_webset` values('32','taodianjin_pid','','0');");
E_D("replace into `xia_webset` values('33','mallfxbl','a:4:{i:0;s:4:\"0.52\";i:1;s:3:\"0.6\";i:2;s:4:\"0.76\";i:3;s:3:\"0.8\";}','1');");
E_D("replace into `xia_webset` values('35','smtp','a:5:{s:4:\"type\";s:1:\"1\";s:7:\"xingshi\";s:1:\"0\";s:4:\"host\";s:12:\"smtp.163.com\";s:4:\"name\";s:14:\"yg1hxj@163.com\";s:3:\"pwd\";s:8:\"29320882\";}','1');");
E_D("replace into `xia_webset` values('36','sql_debug','0','0');");
E_D("replace into `xia_webset` values('37','hytxjl','0','0');");
E_D("replace into `xia_webset` values('38','tgurl','http://www.newduoduo.com/index.php?','0');");
E_D("replace into `xia_webset` values('39','searchlimit','10','0');");
E_D("replace into `xia_webset` values('40','linktech','a:4:{s:6:\"status\";s:1:\"0\";s:4:\"name\";s:0:\"\";s:3:\"pwd\";s:0:\"\";s:4:\"wzbh\";s:0:\"\";}','1');");
E_D("replace into `xia_webset` values('41','duomai','a:6:{s:6:\"status\";s:1:\"0\";s:3:\"uid\";s:0:\"\";s:4:\"wzid\";s:0:\"\";s:4:\"wzbh\";s:0:\"\";s:3:\"key\";s:0:\"\";s:3:\"pwd\";N;}','1');");
E_D("replace into `xia_webset` values('42','gzip','0','0');");
E_D("replace into `xia_webset` values('44','yiqifa','a:5:{s:6:\"status\";s:1:\"0\";s:3:\"uid\";s:0:\"\";s:4:\"wzid\";s:0:\"\";s:4:\"name\";s:0:\"\";s:3:\"key\";s:0:\"\";}','1');");
E_D("replace into `xia_webset` values('45','yiqifaapi','a:1:{s:10:\"cache_time\";s:1:\"0\";}','1');");
E_D("replace into `xia_webset` values('47','ucenter','a:11:{s:8:\"UC_APPID\";s:1:\"3\";s:6:\"UC_KEY\";s:64:\"r3c9dbRauc1aQ78b13X502k8H967I784w2sahdx8r2jd54o3ydX6K8Xbz9z7k0pa\";s:6:\"UC_API\";s:29:\"http://localhost/dz/uc_server\";s:12:\"UC_DBCHARSET\";s:4:\"utf8\";s:10:\"UC_CHARSET\";s:5:\"utf-8\";s:9:\"UC_DBHOST\";s:9:\"localhost\";s:9:\"UC_DBUSER\";s:4:\"root\";s:7:\"UC_DBPW\";s:4:\"root\";s:9:\"UC_DBNAME\";s:6:\"dzutf8\";s:13:\"UC_DBTABLEPRE\";s:12:\"pre_ucenter_\";s:4:\"open\";s:1:\"0\";}','1');");
E_D("replace into `xia_webset` values('48','spider','a:12:{s:10:\"sosospider\";s:3:\"100\";s:11:\"baiduspider\";s:2:\"20\";s:5:\"yahoo\";s:3:\"100\";s:7:\"bingbot\";s:3:\"100\";s:9:\"googlebot\";s:3:\"100\";s:11:\"ia_archiver\";s:3:\"100\";s:9:\"youdaobot\";s:3:\"100\";s:4:\"sohu\";s:3:\"100\";s:6:\"msnbot\";s:3:\"100\";s:5:\"slurp\";s:3:\"100\";s:5:\"sogou\";s:3:\"100\";s:8:\"QihooBot\";s:3:\"100\";}','1');");
E_D("replace into `xia_webset` values('49','seo','a:1:{s:12:\"spider_limit\";s:1:\"0\";}','1');");
E_D("replace into `xia_webset` values('50','urlencrypt','','2');");
E_D("replace into `xia_webset` values('53','tao_report_time','1429777850','0');");
E_D("replace into `xia_webset` values('56','login_tip','1','0');");
E_D("replace into `xia_webset` values('58','phpwind','a:4:{s:3:\"key\";s:0:\"\";s:3:\"url\";s:0:\"\";s:7:\"charset\";s:0:\"\";s:4:\"open\";s:1:\"0\";}','1');");
E_D("replace into `xia_webset` values('59','yinxiangma','a:3:{s:4:\"open\";s:1:\"0\";s:11:\"private_key\";s:0:\"\";s:10:\"public_key\";s:0:\"\";}','1');");
E_D("replace into `xia_webset` values('61','paipai_report_time','1436943044','0');");
E_D("replace into `xia_webset` values('62','paipaifxbl','a:4:{i:0;s:4:\"0.53\";i:1;s:3:\"0.6\";i:2;s:4:\"0.71\";i:3;s:3:\"0.8\";}','1');");
E_D("replace into `xia_webset` values('63','url_mulu','','2');");
E_D("replace into `xia_webset` values('65','collect','a:3:{s:4:\"curl\";s:1:\"1\";s:17:\"file_get_contents\";s:1:\"2\";s:9:\"fsockopen\";s:1:\"3\";}','1');");
E_D("replace into `xia_webset` values('66','sql_log','0','0');");
E_D("replace into `xia_webset` values('68','replace','0','2');");
E_D("replace into `xia_webset` values('69','corrent_time','0','0');");
E_D("replace into `xia_webset` values('70','authorize','b25aDLokw07+/JefNyxG4hhMby72TnyGJ1jjxIA1rPiGnbG06xZnnahnC6WNpzY8Pa8ZXz8YWFQHqCWyWITjMoO2V/yDxY6km/R6VTCyiZi59e1WfUs2w62agDy/EGxgRKex/2f03mf7bMnYKpyYNs37vE68roFRTf2IQnnmTXNYfgS81rJI8VPuQscZKJ7sd7rFXsMQVOqgw871HbzHoVz9PgbKgmZoqTZcWdQO9iiP6dCoMrVGVN04hmJc78U','0');");
E_D("replace into `xia_webset` values('72','banquan','<p>\r\n	<strong>重庆健康运营助手</strong>&nbsp;版权所有 2019\r\n</p>','0');");
E_D("replace into `xia_webset` values('172','wap_logo','upload/2019/0515/16043994270.png','0');");
E_D("replace into `xia_webset` values('173','ip_num','10','0');");
E_D("replace into `xia_webset` values('174','mobile_num','2','0');");
E_D("replace into `xia_webset` values('158','gg','我们将继续秉承以“求实创新、拼搏奋进”的企业精神，遵守“质量为本、信誉为重、用户为上、效益为主”的企业宗旨，在今后的发展中精益求精，互惠双赢，携手与您共创美好未来！','0');");
E_D("replace into `xia_webset` values('73','email_notice','a:1:{s:2:\"dd\";s:1:\"1\";}','1');");
E_D("replace into `xia_webset` values('74','ddjson','0','2');");
E_D("replace into `xia_webset` values('75','paipai','a:11:{s:10:\"cache_time\";s:1:\"0\";s:4:\"open\";s:1:\"0\";s:6:\"userId\";s:0:\"\";s:2:\"qq\";s:0:\"\";s:10:\"appOAuthID\";s:0:\"\";s:14:\"secretOAuthKey\";s:0:\"\";s:11:\"accessToken\";s:0:\"\";s:7:\"keyWord\";s:6:\"夏装\";s:8:\"pageSize\";s:2:\"20\";s:4:\"sort\";s:2:\"11\";s:8:\"errorlog\";s:1:\"0\";}','1');");
E_D("replace into `xia_webset` values('78','admintempdata','a:5:{s:3:\"zsy\";i:0;s:6:\"tixian\";i:0;s:9:\"usermoney\";i:0;s:7:\"usernum\";i:0;s:4:\"time\";i:1347378137;}','3');");
E_D("replace into `xia_webset` values('79','sms','a:9:{s:4:\"open\";s:1:\"0\";s:3:\"pwd\";s:0:\"\";s:4:\"sign\";s:12:\"多多返利\";s:5:\"yzmjg\";s:2:\"60\";s:6:\"yidong\";s:19:\"1252007015917385693\";s:8:\"liantong\";s:14:\"10690259905429\";s:7:\"dianxin\";s:11:\"18007524761\";s:5:\"limit\";s:1:\"5\";s:7:\"need_yz\";s:1:\"0\";}','1');");
E_D("replace into `xia_webset` values('80','qq_meta','','0');");
E_D("replace into `xia_webset` values('81','backstage','1','2');");
E_D("replace into `xia_webset` values('82','tgfz','200','0');");
E_D("replace into `xia_webset` values('83','tbmoneybl','100','2');");
E_D("replace into `xia_webset` values('84','tbmoney','集分宝','2');");
E_D("replace into `xia_webset` values('85','tbmoneytype','1','2');");
E_D("replace into `xia_webset` values('86','tbfltip','100集分宝（支付宝积分）= 1元','2');");
E_D("replace into `xia_webset` values('87','tixian','a:11:{s:7:\"tblimit\";s:3:\"100\";s:6:\"tbtxxz\";s:3:\"100\";s:5:\"limit\";s:2:\"10\";s:5:\"level\";s:1:\"0\";s:4:\"txxz\";s:1:\"0\";s:5:\"ddpay\";s:1:\"0\";s:3:\"key\";s:0:\"\";s:11:\"need_alipay\";s:1:\"1\";s:11:\"need_tenpay\";s:1:\"0\";s:6:\"hytxjl\";s:1:\"0\";s:9:\"need_bank\";s:1:\"0\";}','1');");
E_D("replace into `xia_webset` values('88','jifenbao','1','2');");
E_D("replace into `xia_webset` values('89','tbmoneyunit','个','2');");
E_D("replace into `xia_webset` values('90','jfb_fee','0.06','2');");
E_D("replace into `xia_webset` values('91','taotype','1','2');");
E_D("replace into `xia_webset` values('93','ddyunkey','','2');");
E_D("replace into `xia_webset` values('97','webcloseallowip','','0');");
E_D("replace into `xia_webset` values('98','url_cookie','0','0');");
E_D("replace into `xia_webset` values('99','gametask','a:4:{s:6:\"status\";s:1:\"1\";s:3:\"img\";s:21:\"images/gametask/3.jpg\";s:5:\"title\";s:12:\"游戏返利\";s:3:\"url\";s:0:\"\";}','1');");
E_D("replace into `xia_webset` values('101','task','a:5:{s:6:\"status\";s:1:\"1\";s:3:\"img\";s:23:\"images/task/Banner2.jpg\";s:5:\"title\";s:12:\"任务返利\";s:3:\"url\";s:0:\"\";s:4:\"type\";s:1:\"2\";}','1');");
E_D("replace into `xia_webset` values('102','cache_time','4','0');");
E_D("replace into `xia_webset` values('104','tao_search_url','0','2');");
E_D("replace into `xia_webset` values('107','errorlog','0','0');");
E_D("replace into `xia_webset` values('109','wujiumiao','a:4:{s:6:\"status\";s:1:\"0\";s:3:\"uid\";s:0:\"\";s:3:\"pwd\";N;s:3:\"key\";N;}','1');");
E_D("replace into `xia_webset` values('110','weiyi','a:5:{s:6:\"status\";s:1:\"0\";s:4:\"name\";s:0:\"\";s:3:\"pwd\";s:0:\"\";s:4:\"wzbh\";s:0:\"\";s:3:\"key\";N;}','1');");
E_D("replace into `xia_webset` values('111','bijia','1','2');");
E_D("replace into `xia_webset` values('112','shangjia','a:3:{s:6:\"banner\";s:48:\"template/default/inc/images/baoming/bmbanner.gif\";s:7:\"content\";s:2425:\"<h3 id=\"u-h3\">\r\n	我们的优势\r\n</h3>\r\n<div class=\"con\">\r\n	<p>\r\n		我们拥有近&nbsp;<strong class=\"f-orange\">数十万</strong>&nbsp;优质合作网站；&nbsp;<strong class=\"f-orange\">上千万</strong>&nbsp;网购活跃用户；\r\n	</p>\r\n	<p>\r\n		只要您有超高性价比的宝贝，我们的网站各大页面为您&nbsp;<strong class=\"f-blue\">全力推荐！</strong>并且&nbsp;<strong class=\"f-blue\">完全免费！</strong> \r\n	</p>\r\n	<p>\r\n		帮您在短时间内迅速提升店铺人气，打造爆款，提升搜索排名及店铺知名度。\r\n	</p>\r\n</div>\r\n<h3 id=\"u-h3\">\r\n	合作方式\r\n</h3>\r\n<div class=\"con\">\r\n	<p>\r\n		1、报名条件符合以下规则\r\n	</p>\r\n	<table class=\"table-business\">\r\n		<tbody>\r\n			<tr>\r\n				<th width=\"105\">\r\n					九元购\r\n				</th>\r\n				<td>\r\n					价格小于10元且包邮\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<th>\r\n					十九元购\r\n				</th>\r\n				<td>\r\n					价格小于20元且包邮\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<th>\r\n					特价促销\r\n				</th>\r\n				<td>\r\n					五折商品且包邮\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<th>\r\n					价格要求\r\n				</th>\r\n				<td>\r\n					本站独家优惠\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<th>\r\n					C店要求\r\n				</th>\r\n				<td>\r\n					2钻以上\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<th>\r\n					B店要求\r\n				</th>\r\n				<td>\r\n					不限\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<th>\r\n					动态评分\r\n				</th>\r\n				<td>\r\n					同行持平及以上\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<th>\r\n					商品评价\r\n				</th>\r\n				<td>\r\n					不限\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<th>\r\n					发货速度\r\n				</th>\r\n				<td>\r\n					1-2日发货\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<th>\r\n					历史价格\r\n				</th>\r\n				<td>\r\n					&gt;本活动价格\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<th>\r\n					重复周期\r\n				</th>\r\n				<td>\r\n					15天后\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<th>\r\n					店内客服\r\n				</th>\r\n				<td>\r\n					必须在线\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<th>\r\n					优先通过\r\n				</th>\r\n				<td>\r\n					性价比高的商品\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<p>\r\n		2、审核说明\r\n	</p>\r\n	<ol>\r\n		<li>\r\n			1）活动报名后，我们将在2个工作日内（自提交之日算起）对您的宝贝进行审核。\r\n		</li>\r\n		<li>\r\n			2）宝贝的审核会优先考虑性价比高的商品，建议您调整商品活动价格，以便得到更快的审核进度。\r\n		</li>\r\n	</ol>\r\n</div>\";s:6:\"status\";s:1:\"0\";}','1');");
E_D("replace into `xia_webset` values('114','yqh','a:3:{s:6:\"status\";s:1:\"0\";s:4:\"wzid\";s:0:\"\";s:3:\"key\";N;}','1');");
E_D("replace into `xia_webset` values('116','hasapi','0','2');");
E_D("replace into `xia_webset` values('136','fujian_ftp','0','2');");
E_D("replace into `xia_webset` values('118','sub','1','0');");
E_D("replace into `xia_webset` values('137','ftp_ip','','2');");
E_D("replace into `xia_webset` values('138','ftp_port','','2');");
E_D("replace into `xia_webset` values('126','wap_moban','default','2');");
E_D("replace into `xia_webset` values('120','wap','a:22:{s:6:\"status\";s:1:\"0\";s:5:\"title\";s:9:\"多多wap\";s:9:\"advertise\";s:33:\"口袋中的购物返利神器！\";s:7:\"banquan\";s:38:\"Copyright ©2008-2015 XXXX版权所有\";s:6:\"tongji\";s:14:\"\"统计代码\"\";s:5:\"haoma\";s:6:\"手机\";s:2:\"qq\";s:2:\"qq\";s:3:\"app\";s:1:\"0\";s:11:\"tishi_words\";s:24:\"使用手机APP拿返利\";s:8:\"wap_jump\";s:1:\"1\";s:9:\"sign_open\";s:1:\"0\";s:4:\"sign\";a:7:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";i:3;s:1:\"4\";i:4;s:1:\"5\";i:5;s:1:\"6\";i:6;s:1:\"7\";}s:9:\"share_img\";s:0:\"\";s:5:\"color\";s:7:\"#EC1A5B\";s:4:\"logo\";s:3:\"222\";s:9:\"foot_open\";s:1:\"1\";s:8:\"apilogin\";a:2:{s:4:\"sina\";i:0;s:2:\"qq\";i:0;}s:3:\"tpl\";s:11:\"wap_default\";s:6:\"slides\";a:2:{i:0;a:2:{s:3:\"iid\";d:36865273356;s:3:\"img\";s:18:\"style/upload/1.jpg\";}i:1;a:2:{s:3:\"iid\";s:11:\"35543504091\";s:3:\"img\";s:18:\"style/upload/2.jpg\";}}s:4:\"help\";s:18:\"<p>\r\n	<br />\r\n</p>\";s:10:\"share_desc\";s:90:\"我正在看[ 多多返利-可以购物返利的网站]，分享给你，一起看吧！^^\";s:6:\"tubiao\";s:0:\"\";}','1');");
E_D("replace into `xia_webset` values('124','app','a:22:{s:6:\"status\";s:1:\"1\";s:4:\"open\";s:1:\"1\";s:14:\"update_content\";s:0:\"\";s:7:\"appname\";s:0:\"\";s:7:\"applogo\";s:0:\"\";s:15:\"android_version\";s:0:\"\";s:11:\"ios_version\";s:0:\"\";s:7:\"version\";s:0:\"\";s:19:\"iphone_appstore_url\";s:0:\"\";s:5:\"appid\";s:0:\"\";s:15:\"iphone_appstore\";s:1:\"0\";s:11:\"iphone_file\";s:0:\"\";s:12:\"android_file\";s:0:\"\";s:7:\"erweima\";s:0:\"\";s:4:\"logo\";s:0:\"\";s:7:\"addword\";s:0:\"\";s:5:\"about\";s:0:\"\";s:8:\"wap_jump\";s:1:\"0\";s:11:\"force_login\";s:1:\"0\";s:5:\"moshi\";s:1:\"1\";s:10:\"mobile_reg\";s:1:\"0\";s:4:\"sign\";a:7:{i:0;s:1:\"0\";i:1;s:1:\"0\";i:2;s:1:\"0\";i:3;s:1:\"0\";i:4;s:1:\"0\";i:5;s:1:\"0\";i:6;s:1:\"0\";}}','1');");
E_D("replace into `xia_webset` values('125','tdj_url','','2');");
E_D("replace into `xia_webset` values('148','mall_field','','0');");
E_D("replace into `xia_webset` values('130','md_access','wap','0');");
E_D("replace into `xia_webset` values('131','zhlm','a:1:{s:6:\"status\";s:1:\"1\";}','1');");
E_D("replace into `xia_webset` values('149','wami','a:4:{s:6:\"status\";s:1:\"1\";s:3:\"img\";s:22:\"images/task/wami_2.jpg\";s:5:\"title\";s:18:\"做任务拿奖励\";s:3:\"url\";s:0:\"\";}','1');");
E_D("replace into `xia_webset` values('133','offer','a:5:{s:6:\"status\";s:1:\"1\";s:3:\"img\";s:23:\"images/task/Banner2.jpg\";s:5:\"title\";s:18:\"做任务拿奖励\";s:3:\"url\";s:0:\"\";s:4:\"type\";s:1:\"2\";}','1');");
E_D("replace into `xia_webset` values('146','ftp_mulu','','2');");
E_D("replace into `xia_webset` values('147','baoliao_jiangli_bili','0','0');");
E_D("replace into `xia_webset` values('134','search_key','a:5:{s:2:\"s8\";s:6:\"夏装\";s:4:\"head\";s:6:\"夏季\";s:4:\"mall\";s:6:\"京东\";s:6:\"paipai\";s:6:\"热卖\";s:3:\"wap\";s:6:\"热卖\";}','1');");
E_D("replace into `xia_webset` values('139','ftp_user','','2');");
E_D("replace into `xia_webset` values('140','ftp_pwd','','2');");
E_D("replace into `xia_webset` values('141','ftp_pasv','','2');");
E_D("replace into `xia_webset` values('142','ftp_url_mulu','','2');");
E_D("replace into `xia_webset` values('143','ftp_url','','2');");
E_D("replace into `xia_webset` values('144','ftp_timeout','10','2');");
E_D("replace into `xia_webset` values('150','tel','18650083567','0');");
E_D("replace into `xia_webset` values('151','w_img','http://wfxnew.leiang-ele.com/themes/default/statics/img/ewm.png','0');");
E_D("replace into `xia_webset` values('152','mobile','13328215965','0');");
E_D("replace into `xia_webset` values('153','pc_logo','http://www.idealpaper.com/template/default/images/logo.gif','0');");
E_D("replace into `xia_webset` values('154','phone_logo','http://www.kadilon.com/Templates/cn/wap/images/logo.jpg','0');");
E_D("replace into `xia_webset` values('155','address','福州市五四北泰禾广场2号916','0');");
E_D("replace into `xia_webset` values('156','wap_banquan','尊敬的会员东方国际优惠专员将于10分钟内受理审核，请勿重复提交，如发现恶意提交者，取消参与该项优惠资格！\r\n东方国际官方网址：1343.CC','0');");
E_D("replace into `xia_webset` values('175','no_ad','很抱歉，您并没有参与任何优惠！东方国际 1343.CC','0');");
E_D("replace into `xia_webset` values('157','mobile1','18650739816','0');");
E_D("replace into `xia_webset` values('159','sp','<iframe width=\"100%\" height=\"100%\" src=\"http://player.youku.com/embed/XMTg5Mjc4MDU0NA==?client_id=a6286067c3cd40d7&amp;password=undefined&amp;autoplay=false\" id=\"iframeId\" frameborder=\"0\" allowfullscreen=\"true\" scrolling=\"no\"></iframe>','0');");
E_D("replace into `xia_webset` values('160','b_img','http://www.kadilon.com/Templates/cn/images/weixin1.jpg','0');");
E_D("replace into `xia_webset` values('161','b_logo','http://www.kadilon.com/Templates/cn/images/botlogo.png','0');");
E_D("replace into `xia_webset` values('162','jytd','upload/2018/0408/11040277673.jpg','0');");
E_D("replace into `xia_webset` values('163','pic_qq','template/default/images/hd_qq.gif','0');");
E_D("replace into `xia_webset` values('164','logo','upload/2019/0514/17570844370.png','0');");
E_D("replace into `xia_webset` values('165','daybi','24,324','0');");
E_D("replace into `xia_webset` values('166','tbi','205,122','0');");
E_D("replace into `xia_webset` values('167','sms_key','ed59461b5e952b76cfd07a70163d9f2d','0');");
E_D("replace into `xia_webset` values('168','sms_moban_id','50160','0');");
E_D("replace into `xia_webset` values('169','strcode_key','jian','0');");
E_D("replace into `xia_webset` values('170','user_gg','熊猫小袋借钱快，联系客服微信18150212158','0');");
E_D("replace into `xia_webset` values('171','ewm','upload/2018/1016/14412827265.png','0');");
E_D("replace into `xia_webset` values('176','game','1','0');");
E_D("replace into `xia_webset` values('177','gid','1','0');");
E_D("replace into `xia_webset` values('178','default_img','upload/2019/0807/10433247466.jpg','0');");
E_D("replace into `xia_webset` values('179','fx1','20','0');");
E_D("replace into `xia_webset` values('180','fx2','10','0');");
E_D("replace into `xia_webset` values('181','kf_img','http://wxapp.hxmryy.com/App/Item/qzhx/1902xmtg/skin/images/czbs/kfqr.jpg?v1','0');");
E_D("replace into `xia_webset` values('182','weixin','a:6:{s:5:\"appid\";s:18:\"wx8474f98f891d27e7\";s:9:\"appsecret\";s:32:\"3caba81c06421f3771facea1ea8a0fd0\";s:5:\"token\";s:4:\"jian\";s:6:\"aeskey\";s:0:\"\";s:6:\"sh_hao\";s:10:\"1362999602\";s:6:\"sh_key\";s:32:\"huangxiahuangxiahuangxiahuangxia\";}','1');");
E_D("replace into `xia_webset` values('183','tx','10','0');");
E_D("replace into `xia_webset` values('184','music','','0');");
E_D("replace into `xia_webset` values('185','bg','upload/2019/0803/13054030132.jpg','0');");

require("../../inc/footer.php");
?>