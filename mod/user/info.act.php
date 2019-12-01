<?php
/**
 * ============================================================================
 * 版权所有 多多科技，保留所有权利。
网站地址: http://soft.duoduo123.com；
----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
使用；不允许对程序代码以任何形式任何目的的再发布。
============================================================================
 */

if (!defined('INDEX')) {
	exit('Access Denied');
} 
/**
* @name 用户信息
* @copyright duoduo123.com
* @example 示例user_info();
* @param $field 字段
* @param $pagesize 每页显示多少
* @return $parameter 结果集合
*/
function act_user_info($pagesize=5,$field='title,code'){
	global $duoduo,$dd_user_class;
	$webset = $duoduo->webset;
	$dduser = $duoduo->dduser;
	dd_session_start();
	define('MOBILE_YZM_EFFECT', $webset['sms']['yzmjg']?$webset['sms']['yzmjg']:60);
	$default_pwd = $dd_user_class -> get_default_pwd($dduser['id']); 
	// 会员信息
	$do = $_GET['do']?$_GET['do']:'myinfo';
	
	if ($do == 'myinfo') {

		if ($_POST['sub1'] != '') {
			
			$mobile = trim($_POST['mobile']);
			$field_arr['realname'] = $_POST['realname'];
            $field_arr['img']=$_POST['img'];
			$field_arr['mobile']=$_POST['mobile'];
			
			$duoduo -> update('user', $field_arr, 'id=' . $dduser['id']);
	         echo 1;
			 exit();
			
		} 
	}
	elseif($do == 'tbnick'){
		if ($_POST['sub'] != '') {
			foreach($_POST['tbnick'] as $k=>$v){
				if($v==''){
					unset($_POST['tbnick'][$k]);
				}
			}
			//先取数据
			$trade_uid_arr=array();
			$u_trade_uid="";
			if(!empty($_POST['tbnick'])){
				foreach($_POST['tbnick'] as $v){
					$a=get_4_tradeid($v);
					if($a['0']>0){
						$trade_uid_arr[]=$a['0'];//存进去
						$u_trade_uid.=($u_trade_uid?',':'').$v;
					}
				}
				if(empty($trade_uid_arr)||empty($u_trade_uid)){
					jump(-1,'服务器异常不能修改');
				}
			}else{
				jump(-1,'只能修改，不能提交空数据');
			}
			//删除老数据
			$tbnick_arr=explode(',',$dduser['tbnick']);
			$tbnick_arr=array_unique($tbnick_arr);
			foreach($tbnick_arr as $v){
				$a=get_4_tradeid($v);
				if($a['0']>0){
					$duoduo->trade_uid($dduser['id'],$a['0'],'del');
				}
			}
			//更新数据
			foreach($trade_uid_arr as $v){
				if($v){
					$duoduo->trade_uid($dduser['id'],$v);
				}
			}
			$field_arr=array('tbnick'=>$u_trade_uid);
			$duoduo -> update('user', $field_arr, 'id=' . $dduser['id']);
			
			$jump_url=get_cookie('jump_url');
			if(empty($jump_url)){
				$jump_url=-1;
			}else{
				set_cookie('jump_url',NULL,0);
			}
			jump($jump_url,'保存完成');
		}
		
	}elseif ($do == 'apilogin') {
		$api = $duoduo -> select_all('api',$field, 'open=1 order by sort desc');
		$user_api = $duoduo -> sel_one_arr_sql('apilogin', 'web', 'uid="' . $dduser['id'] . '"');
	} elseif ($do == 'mobile') {
		$mobile_yzm_time = get_cookie('mobileYzmTime');
		if (isset($_GET['send_yzm']) && $_GET['send_yzm'] == 1) {
			$yzm=trim($_POST['yzm']);
			if(reg_captcha($yzm)==0){
				jump(-1, 5);
			}

			$mobile = $_POST['mobile'];
	
			if ($mobile_yzm_time > 0 && TIME - $mobile_yzm_time < MOBILE_YZM_EFFECT) {
				jump(-1, 69);
			} 
	
			$mobile_test = (int)$duoduo -> select('user', 'mobile_test', 'mobile="' . $mobile . '" and mobile_test=1 and id<>"' . $dduser['id'] . '"');
			if ($mobile_test == 1) {
				jump(-1, 68);
			} 
	
			$mobileYzmNum = (int)get_cookie('mobileYzmNum');
			$mobileYzmNum++;
	
			if ($webset['sms']['limit'] > 0 && $mobileYzmNum > $webset['sms']['limit']) {
				$re = array('s' => 0, 'id' => 67);
			} else {
				$yzm = rand(100000, 999999);
				$content = $duoduo -> select('msgset', 'sms', 'id=11');
				$content = array('yzm'=>$yzm);//str_replace('{yzm}', $yzm, $content);
	
				$ddopen = fs('ddopen');
				$ddopen -> sms_ini($webset['sms']['pwd']);
				$re = $ddopen -> sms_send($mobile, $content,11);
				if ($re['s'] == 1) {
					set_cookie('mobileYzm', $yzm, MOBILE_YZM_EFFECT * 10);
					$_SESSION['mobileYzm']=$yzm;
					$_SESSION['mobile']=$mobile;
					set_cookie('mobileYzmNum', $mobileYzmNum, 3600 * 24);
					set_cookie('mobileYzmTime', TIME, 3600 * 24);
				} else {
					$re = array('s' => 0, 'id' => 999);
				} 
			} 
	
			echo dd_json_encode($re);
			dd_exit();
		} 
		if ($_POST['sub'] != '') {
			$mobile_yzm = $_SESSION['mobileYzm'];//(int)get_cookie('mobileYzm');
			$mobile = $_SESSION['mobile'];
			$yzm = $_POST['yzm'];
	
			if ($mobile_yzm == $yzm) {
				set_cookie('mobileYzm', '', 0);
				unset($_SESSION['mobileYzm']);
				unset($_SESSION['mobile']);
				if($dduser['mobile_test']==1){//已验证解绑
					$data = array('mobile' => '0', 'mobile_test' => 0);
				}else{
					$data = array('mobile' => $mobile, 'mobile_test' => 1);
				}
				$duoduo -> update('user', $data, 'id="' . $dduser['id'] . '"');
				$re = json_encode(array('s' => 1));
				dd_exit($re);
			} else {
				jump(-1, 5);
			} 
		} 
	} elseif ($do == 'caiwu') {
		if ($webset['sms']['open'] == 1 && $webset['sms']['need_yz'] == 1 && $dduser['mobile_test'] == 0) {
			jump(u('user', 'info', array('do' => 'mobile')), '请验证您的手机号码');
		} 
	
		$txtool_arr = array();
		if ($webset['tixian']['need_alipay'] == 1) {
			$txtool_arr[1] = '支付宝';
		} 
		if ($webset['tixian']['need_tenpay'] == 1) {
			$txtool_arr[2] = '财付通';
		} 
		if ($webset['tixian']['need_bank'] == 1) {
			$bank_1 = dd_get_cache('bank');
			$bank = array(0 => '选择银行');
			foreach($bank_1 as $row) {
				$bank[] = $row['name'];
			} 
			$txtool_arr[3] = '银行';
		} 
	
		if ($_POST['sub'] != '') {
			$field_arr['old_password'] = trim($_POST['old_password']);
			$field_arr['realname'] = trim($_POST['realname']);
			$field_arr['alipay'] = trim($_POST['alipay']);
			$field_arr['tenpay'] = trim($_POST['tenpay']);
			$field_arr['bank_name'] = trim($_POST['bank_name']);
			$field_arr['bank_id'] = trim($_POST['bank_id']);
			$field_arr['bank_code'] = trim($_POST['bank_code']);
			if($_POST['txtool']!=''){
				$field_arr['txtool']=(int)trim($_POST['txtool']);
			}
	
			if ($webset['sms']['open'] == 1) {
				$yzm = $_POST['yzm'];
				$mobile_yzm = (int)get_cookie('mobileYzm');
				$mobile_yzm = $_SESSION['mobileYzm'];
				if ($mobile_yzm != $yzm) {
					jump(-1, 5);
				} 
			} 
	
			/**
			 * $txtool=$_POST['txtool'];
			 * if(!isset($txtool_arr[$txtool])){
			 * jump(-1,65);  //提现工具未选择
			 * }
			 */
	
			if ($duoduo -> check_oldpass($field_arr['old_password'], $dduser['id']) == 'false') {
				jump(-1, 4); //密码错误
			} 
	
			if ($dduser['realname'] != '') {
				unset($field_arr['realname']);
			} 
	
			if ($dduser['alipay'] != '') {
				unset($field_arr['alipay']);
			} elseif ($field_arr['alipay'] != '') {
				if (reg_alipay($field_arr['alipay']) == 0) {
					jump(-1, 35); //支付格式错误
				} 
				if ($duoduo -> check_my_field('alipay', $field_arr['alipay'], $dduser['id']) > 0) {
					jump(-1, 37); //支付宝已被使用
				} 
			} 
	
			if ($dduser['tenpay'] != '') {
				unset($field_arr['tenpay']);
			} elseif ($field_arr['tenpay'] != '') {
				if (reg_tenpay($field_arr['tenpay'] == 0)) {
					jump(-1, 62); //财付通格式错误
				} 
				if ($duoduo -> check_my_field('tenpay', $field_arr['tenpay'], $dduser['id']) > 0) {
					jump(-1, 63); //财付通已被使用
				} 
			} 
	
			if ($dduser['bank_name'] != '') {
				unset($field_arr['bank_id']);
			} elseif (isset($field_arr['bank_id']) && $field_arr['bank_id'] !== '') {
				$bank_id = (int)$field_arr['bank_id'];
				if (!isset($bank[$bank_id])) {
					jump(-1, 59); //银行id格式错误
				} else {
					unset($bank[0]);
					$field_arr['bank_name'] = $bank[$bank_id];
				} 
			} 
	
			if ($dduser['bank_code'] != '') {
				unset($field_arr['bank_code']);
			} elseif ($field_arr['bank_code'] == '') {
				if ($bank_id > 0) {
					jump(-1, 60); //银行账号格式错误
				} 
				$field_arr['bank_code'] = 0;
			} elseif ($field_arr['bank_code'] != '') {
				if (reg_bank_code($field_arr['bank_code'] == 0)) {
					jump(-1, 60); //银行账号格式错误
				} 
				if ($duoduo -> check_my_field('bank_code', $field_arr['bank_code'], $dduser['id']) > 0) {
					jump(-1, 61); //银行账号已被使用
				} 
				if (!isset($field_arr['bank_name'])) {
					jump(-1, 58); //未选择银行
				} 
			} 
			unset($field_arr['bank_id']);
			unset($field_arr['old_password']);
			$duoduo -> update('user', $field_arr, 'id=' . $dduser['id']);
			$re = json_encode(array('s' => 1));
			dd_exit($re);
		} else {
			if(!empty($bank)){
				$dduser['bank_id'] = array_search($dduser['bank_name'], $bank);
			}
		} 
	} elseif ($do == 'pwd') {
		
		 
		if ($_POST['sub1'] != '') {
			
			if (empty($_POST['ddpwd']) or empty($_POST['pwd_confirm'])  or empty($_POST['old_pwd'])){
				 	echo "密码不能为空";
					exit();
				}
			if ($_POST['ddpwd'] != $_POST['pwd_confirm']) { // 两次密码对比
				//$re = json_encode(array('s' => 0, 'id' => 34));
				//dd_exit($re);
				echo "两次输入的密码不一致";
				exit();
			} 
			if (reg_password($_POST['ddpwd']) == 0) { // 密码格式
				//$re = json_encode(array('s' => 0, 'id' => 3));
				//dd_exit($re);
					echo "密码格式错误";
				    exit();
			} 
	
			if ($duoduo -> check_oldpass($_POST['old_pwd'], $dduser['id']) == 'false') {
				//$re = json_encode(array('s' => 0, 'id' => 4));
				//dd_exit($re);
				echo ("旧密码错误");
				 exit();
			} 
	
			
	
			$field_arr['ddpassword'] = md5($_POST['ddpwd']);
			$duoduo -> update('user', $field_arr, 'id=' . $dduser['id']);
			user_login($dduser['id'], $field_arr['ddpassword'], $userlogininfo['ddsavetime']); //重置登陆状态
			
			
			echo "修改成功";exit();
		} 
	}
	elseif ($do == 'zfpwd') {
		
		 
		if ($_POST['sub1'] != '') {
			
			
			if (empty($_POST['zfddpwd']) or empty($_POST['zfpwd_confirm'])  or empty($_POST['zfold_pwd'])){
				 	echo "密码不能为空";
					exit();
				}
			if ($_POST['zfddpwd'] != $_POST['zfpwd_confirm']) { // 两次密码对比
				//$re = json_encode(array('s' => 0, 'id' => 34));
				//dd_exit($re);
				echo "两次输入的密码不一致";
				exit();
			} 
			if (reg_password($_POST['zfddpwd']) == 0) { // 密码格式
				//$re = json_encode(array('s' => 0, 'id' => 3));
				//dd_exit($re);
					echo "密码格式错误";
				    exit();
			} 

			if ($duoduo -> check_zfoldpass($_POST['zfold_pwd'], $dduser['id']) == 'false') {
				//$re = json_encode(array('s' => 0, 'id' => 4));
				//dd_exit($re);
				echo ("旧密码错误");
				 exit();
			} 
	
			
	
			$field_arr['zfpwd'] = md5($_POST['zfddpwd']);
			$duoduo -> update('user', $field_arr, 'id=' . $dduser['id']);
			//user_login($dduser['id'], $field_arr['ddpassword'], $userlogininfo['ddsavetime']); //重置登陆状态
			
			
			echo "修改成功";exit();
		} 
	}  
	elseif($do=='yzm'){
		$yzm=trim($_GET['yzm']);
		if(reg_captcha($yzm)==0){
			$re=array('s'=>0,'r'=>'验证码错误');
		}
		else{
			$_SESSION['mobile_yzm_ok']=1;
			$re=array('s'=>1);
		}
		$re=dd_json_encode($re);
		dd_exit($re);
	}
	unset($duoduo);
	$parameter['do']=$do;
	$parameter['dduser']=$dduser;
	$parameter['default_pwd']=$default_pwd;
	$parameter['api']=$api;
	$parameter['bank']=$bank;
	$parameter['txtool_arr']=$txtool_arr;
	$parameter['user_api']=$user_api;
	return $parameter;
}
?>