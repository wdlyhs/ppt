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
session_start();
if(!defined('INDEX')){
	exit('Access Denied');
}
/**
* @name 用户密码找回
* @copyright duoduo123.com
* @example 示例user_getpassword();
* @param $pagesize 每页多少
* @param $nick 指定店铺卖家
* @return $parameter 结果集合
*/
function act_user_getpassword(){
	global $duoduo,$webset;
	$webset = $duoduo->webset;
	$dduser = $duoduo->dduser;
	$step=intval($_GET['step'])?intval($_GET['step']):1;
	$username=trim($_GET['username']);
	if($step==2){

		if(!preg_match("/^1\d{10}$/",$username)){  
            jump(-1, '手机号码格式错误');
		  }
		  //判断是否存在此用户
	 $jian_count=$duoduo->select("user","id","ddusername='$username'");
	 if (empty($jian_count)){
		  jump(-1, '不存在此手机号码');
		 
		 }
		$_SESSION['jian_username'] =$username;
		if (!isset($_SESSION['time']))//判断缓存时间
		{   $_SESSION['time'] =0;
		}
		if(($_SESSION['time']+600)<time()) {
			$sjs=rand(1000,9999);
			$sjs=(string)$sjs;
			$_SESSION['sjs']=StrCode($sjs,$webset['strcode_key'],"ENCODE");
			$_SESSION['time'] =time();
		
			sends($username,$sjs);
			
			
		}
    

		
	}
	elseif($step==3){
		$captcha=$_GET['captcha'];
		$sjs=StrCode($_SESSION['sjs'],$webset['strcode_key'],"DECODE");
	    
		if ($captcha!= $sjs) {
			jump("-1", '验证码错误');
		}
	}
	elseif($step==4){
		$name=trim($_POST['ddusername']); 
		
		if ($name<>$_SESSION['jian_username']){
			jump(-1,'系统异常'); 
			}
		$pwd=trim($_POST['password']); 
	   
	  $password_confirm=$_POST['password_confirm'];
	  if ($pwd<>$password_confirm){
		  
		  jump(-1,'两次输入的密码不一致'); 
		  }
	    
		$md5pwd=md5($pwd);
	
		if($name==""||$pwd==""){
			jump(-1,'缺少必要参数'); 
		}
		
		$user=$duoduo->select('user','ddusername,ddpassword','ddusername="'.$name.'"');
	
		if($webset['ucenter']['open']==1){
			include DDROOT.'/comm/uc_define.php';
			include_once DDROOT.'/uc_client/client.php';
			$uc_name = iconv("utf-8", "utf-8//IGNORE", $name);
			$ucresult = uc_user_edit($uc_name,'',$pwd,'',1);
			if($ucresult<0){
				jump(-1,'修改密码失败'); 
			}
		}
		
		$duoduo->update('user', array('ddpassword'=>$md5pwd), "ddusername='".$name."'");
		$mymsg="密码重置成功，现在您可以用您新设置的密码登录了。<br><br><a href=".u('user','login')."  class=redlink>用户登录</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=".u('index')." class=redlink>返回首页</a>";
	}
	unset($duoduo);
	$parameter['step']=$step;
	$parameter['mymsg']=$mymsg;

	$parameter['array_result']=$array_result;
	return $parameter;
}
?>