<?php
$buy_button = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Index&a=index_info&refresh=1';
$jiazu_button = 'http://'.$_SERVER['HTTP_HOST'].'/'.'my_family.php?refresh=1';
$newmenu = '{
		 "button":[
			{
			  "name":"优惠券",
    		    "sub_button":[
				{
    			   "name":"便民服务",
				   "type":"view",
				   "url":"http://'.$_SERVER['HTTP_HOST'].'/'.'/bianmin.php" 
    			},
    			
    			{
    			   "name":"社区服务",
				   "type":"view",
				   "url":"http://'.$_SERVER['HTTP_HOST'].'/'.'/shequ.php"
    			},
    			{	
    			   "name":"步行街",
    			   "type":"view",
    				"url":"http://'.$_SERVER['HTTP_HOST'].'/'.'/buxingjie.php?parentid=43&classid=26&typeid=49"
    			},
    			{	
    			    "name":"商城登录",
				    "type":"view",
				    "url":"http://'.$_SERVER['HTTP_HOST'].'" 
    			}
                ]
			},
			{
				
			   "name":"我的特权",
			    "sub_button":[
				{
    			   "name":"物流查询",
				   "type":"view",
				   "url":"http://m.kuaidi100.com" 
    			},
				{
				    "name":"商家查询",
    			   "type":"view",
    				"url":"http://'.$_SERVER['HTTP_HOST'].'/'.'login.php"
				},
        		{
				   "type":"click",
				   "name":"推广二维码",
				   "key":"GET_PIC"
				},
        		
        		{ 
    			   "name":"我要入驻",
    			   "type":"view",
    				"url":"http://'.$_SERVER['HTTP_HOST'].'/'.'ruzhu.php"
    			},
				{ 
    			   "name":"个人中心",
    			   "type":"view",
    				"url":"http://'.$_SERVER['HTTP_HOST'].'/'.'my_family.php"
    			}
				
    			]
		   
			},
			{
			   "name":"售后服务",
			    "sub_button":[
        		{ 
    			   "name":"了解我们",
    			   "type":"view",
    				"url":"http://'.$_SERVER['HTTP_HOST'].'/'.'about.php?cid=9"
    			},
        		 
				{
				  "name":"无理由退货",
    			   "type":"view",
    				"url":"http://'.$_SERVER['HTTP_HOST'].'/'.'about.php?cid=24"
				},
        		{ 
    			   "name":"新手指南",
    			   "type":"view",
    				"url":"http://'.$_SERVER['HTTP_HOST'].'/'.'about.php?cid=19"
    			},
 				]
		   }]
		}';		
		
$message_name = '她他购物';
$link_config = 'http://mp.weixin.qq.com/s?__biz=MjM5NjQ5NTExMA==&mid=208072637&idx=1&sn=eb5c6271422506cc33cb3387c6b6b35f#rd';
$config_good_pic = 'http://'.$_SERVER['HTTP_HOST'].'/Public/Plugin/umeditor/php/upload/20150406/1428297272533.jpg';
$headimgurl = 'http://'.$_SERVER['HTTP_HOST'].'/imgpublic/weiyun.JPG';
?>