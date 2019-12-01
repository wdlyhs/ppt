<?php
//http://hsq.xl779.com/jian_file/Wechat/WechatAction.class.php?a=createmenu
$buy_button = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Index&a=index_info&refresh=1';
$jiazu_button = 'http://'.$_SERVER['HTTP_HOST'].'/'.'my_family.php?refresh=1';
$newmenu = '{
		 "button":[
			{
			  "name":"交易区",
    		   "type":"view",
			   "url":"http://hsq.xl779.com/"
			},
			{
				
			   "name":"广告区",
			    "type":"view",
				  
				"url":"http://hsq.xl779.com/index.php?mod=tie&act=index"
			   
		   
			},
			{
			   "name":"会员中心",
			   
        		 "type":"view",
    		    "url":"http://hsq.xl779.com/index.php?mod=user&act=index"
		}';		
		
$message_name = '她他购物';
$link_config = 'http://mp.weixin.qq.com/s?__biz=MjM5NjQ5NTExMA==&mid=208072637&idx=1&sn=eb5c6271422506cc33cb3387c6b6b35f#rd';
$config_good_pic = 'http://'.$_SERVER['HTTP_HOST'].'/Public/Plugin/umeditor/php/upload/20150406/1428297272533.jpg';
$headimgurl = 'http://'.$_SERVER['HTTP_HOST'].'/imgpublic/weiyun.JPG';
?>