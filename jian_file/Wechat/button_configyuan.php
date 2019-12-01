<?php
$buy_button = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Index&a=index_info&refresh=1';
$jiazu_button = 'http://'.$_SERVER['HTTP_HOST'].'/'.'my_family.php?refresh=1';
$newmenu = '{
		 "button":[
			{
			  "name":"商城首页",
    		    "sub_button":[
    			
    			{
    			   "name":"物流查询",
				   "type":"view",
				   "url":"http://m.kuaidi100.com" 
    			},
    			{	
    			   "name":"特价产品",
    			   "type":"view",
    				"url":"http://'.$_SERVER['HTTP_HOST'].'/'.'item_list.php?parentid=0&classid=12&typeid=1&flag=t"
    			},
    			{	
    			    "name":"商城登录",
				    "type":"view",
				    "url":"http://'.$_SERVER['HTTP_HOST'].'" 
    			}
                ]
			},
			{
				
			   "name":"我要赚钱",
			    "sub_button":[
        		{ 
    			   "name":"分享赚钱",
    			   "type":"view",
    				"url":"http://'.$_SERVER['HTTP_HOST'].'/'.'about.php?cid=22"
    			},
        		{
				   "type":"click",
				   "name":"推广二维码",
				   "key":"GET_PIC"
				},
        		
        		{ 
    			   "name":"我的特权",
    			   "type":"view",
    				"url":"http://'.$_SERVER['HTTP_HOST'].'/'.'about.php?cid=23"
    			}
    			]
		   
			},
			{
			   "name":"售后服务",
			    "sub_button":[
        		{ 
    			   "name":"联系我们",
    			   "type":"view",
    				"url":"http://'.$_SERVER['HTTP_HOST'].'/'.'about.php?cid=9"
    			},
        		{ 
    			   "name":"合法性声明",
    			   "type":"view",
    				"url":"http://'.$_SERVER['HTTP_HOST'].'/'.'about.php?cid=20"
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