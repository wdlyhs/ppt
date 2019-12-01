<?php
/**
 * ============================================================================
 * 版权所有 多多科技，保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/

if(!defined('INDEX')){
	exit('Access Denied');
}
//include DDROOT."/jian_file/code/qrlib.php"; //别的函数引用过来，所以不用加这行
$set=get_game();
$gid=$set['id'];
//获取推荐人信息
if(isset($_GET["rec"])){
	if(!is_numeric($_GET["rec"])){
		$_GET["rec"]=ddStrCode($_GET["rec"],DDKEY,'DECODE');
	}
    if((int)$_GET["rec"]>0){
        set_cookie('tjr',(int)$_GET["rec"],3600);
    }
}

$apps = dd_get_cache('apps');
if(!empty($apps)){
	$app_show=1;
}
else{
	$app_show=0;
}

$nav=dd_get_cache('nav');

if($webset['bijia']['open']==1 || $webset['yiqifaapi']['open']==1 || $webset['wujiumiaoapi']['open']==1){
	$mallapiopen=1;
}


//微信处理




//if (is_wechat_browser()){

     
	 if (false){  
	
	 
	  $wx_rookie=get_cookie('userlogininfo'.$weixin['id']);
	
	  if(!$wx_rookie['uid']){
		    
		      $weObj = obj();
			  
			
			  $wx_info = $weObj->getOauthAccessToken();
			  
           
			  
			  $backurl='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
			  if(!$wx_info){
				 
					$code = $weObj->getOauthRedirect($backurl,'','snsapi_base');
			
					header("Location: $code");
					exit();
                }
			   if ($wx_info){
		
				    $wx_user = $weObj->getUserInfo($wx_info['openid']);
				  
					$wx_user= json_decode($wx_user,true);
					//print_r($wx_user);exit();
					$wx_row=$duoduo->select("user","id,ddpassword,jihuo","openid='".$wx_info['openid']."'");
                    if (!$wx_row['jihuo']){
						//echo "此账户已被禁用";
						}
					if ($wx_row){
					user_login($wx_row['id'], $wx_row['ddpassword'], $life);
				
					$set_con_arr = array(array('f' => 'lastlogintime', 'v' => SJ), array('f' => 'loginnum', 'e' => '+', 'v' => 1), array('f' => 'logip', 'e' => '=', 'v' => get_client_ip()));
				    $duoduo -> update('user', $set_con_arr, 'id="' . $wx_row['id'] . '"');
				
					}else{
					
					if (get_cookie('tjr'))
					    $tjr = get_cookie('tjr');
			
			        
					    add_weixin_user($wx_user,$tjr,1);
					}
				   }
		  
		  }
	
	

	}

 
//微信处理结束 



$userlogininfo=unserialize(get_cookie('userlogininfo')); 

$hcookieuid = $userlogininfo['uid']; 
$hcookiepassword = $userlogininfo['ddpassword']; 
$hcookiesavetime = $userlogininfo['ddsavetime'];

$dduser['name'] = '';
$dduser['id'] = 0;
$dduser['level'] = 0;
if($hcookieuid>0 && $hcookiepassword<>NULL){	
	$user=$duoduo->select('user','*',"id='".$hcookieuid."' and ddpassword='".$hcookiepassword."'");
	if($user['id']>0){
		$dduser=$user;
		$dduser['name'] = $user['ddusername'];
		$dduser['type'] = (int)$dduser['type'];
		$dduser['level'] = (int)$dduser['level'];
		unset($dduser['ddusername']);
		list($dduser['reg_from'],$dduser['email'])=reg_web_email($dduser['email']);
		$dduser['jifenbao'] = jfb_data_type($user['jifenbao']);
		$dduser['mobile'] = $user['mobile']=='0'?'':$user['mobile'];
		if($dduser['mobile']==''){
			$dduser['mobile_test']=0;
		}
		$dduser['bank_code']=$user['bank_code']!=0?$user['bank_code']:'';
		$msgnum = $duoduo->count('msg',"uid='".$dduser['id']."' and see=0");
		$dduser=$duoduo->freeze_user($dduser);
    }
	else{
        set_cookie('userlogininfo','',0);
    }
}
else{
    set_cookie('userlogininfo','',0);
}
$duoduo->dduser=$dduser;

$dd_have_tdj=1;
$t=app_status();
if($t===0){
	$app_status=0;
}
else{
	$app_status=1;
	$webset['app']['erweima']=$t['sj']['erweima'];
}
?>