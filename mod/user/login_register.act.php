<?

if ($_POST['sub1']=="register"){
	
	   
	    if (reg_captcha($_POST['yzm']) == 0) {
			$result['msg']=('验证码错误');
			echo dd_json_encode($result);exit();
		}
		unset($_POST['yzm']);
		 $tjr = (int) get_cookie("tjr");
		 $username=$_POST['username'];
		 $username_pass = reg_name($username, 3, 15, $shield_arr);
		 if ($username_pass == -1) {
					$result['msg']=('用户名不合法');
					 echo dd_json_encode($result);exit();
		}
		elseif ($username_pass == -2) {
			$result['msg']('包含非法词汇');
			 echo dd_json_encode($result);exit();
		}
		elseif ($duoduo->check_user($username) == 'false') {
			$result['msg']=('用户名已存在');
			echo dd_json_encode($result);exit();
		}
		$password = trim($_POST['password']);

		$password_pass = reg_password($password);
		if ($password_pass == 0) {
			$result['msg']=('密码位数须为6位数以上');
			echo dd_json_encode($result);exit();
		}
	    
		
		if ($webset['user']['reg_between'] > 0) {
			$regtime = $duoduo->select('user', 'regtime', 'regip="' . $ip . '" order by id desc');
			$regtime = strtotime($regtime);
			if ($regtime > 0 && TIME - $regtime < $webset['user']['reg_between'] * 3600) {
				$result['msg']=('注册受限');
				echo dd_json_encode($result);exit();
			}
		}
		$md5pwd = md5($password);
	
		$info = arr_diff($_POST, array (
				'sub',
				'sub1',
				'captcha',
				'from',
				'agree',
				'password_confirm',
				'password',
				'username',
				'web',
				'webid',
				'webname',
				'YinXiangMa_response',
				'YinXiangMa_challenge',
				'YXM_level',
				'YXM_input_result',
				'YinXiangMa_pk',
				'tjrname',
				'mod',
				'act',
				'apireg',
				'callback',
				'_',
				'mobile_jym',
			));
			$ip = get_client_ip();
			$info['regtime'] = SJ;
			$info['regip'] = $ip;
			$info['lastlogintime'] = SJ;
			$info['loginnum'] = 1;
			$info['money'] = (float) $webset['user']['reg_money'];
			$info['jifenbao'] = (float) $webset['user']['reg_jifenbao'];
			$info['jifen'] = (int) $webset['user']['reg_jifen'];
			$info['level'] = (int) $webset['user']['reg_level'];
			$info['ddpassword'] = $md5pwd;
			$info['ddusername'] = $username;
			$info['tjr'] = $tjr;
			$info['ucid'] = $ucid;
			if($regtype==1){
				$info['mobile'] = $username;
				$info['mobile_test'] = 1;
			}
			if ($webset['user']['jihuo'] == 1) { //如果需要激活，会员初始的激活状态为0
				$info['jihuo'] = 0;
			} else {
				$info['jihuo'] = 1;
			}
          
			$uid = $duoduo->insert('user', $info, 0); //插入会员
			
			if ($uid <= 0) {
				$result['msg']= ( '插入会员失败');
				echo dd_json_encode($result);exit();
			}
	
			if ($web != '') {
				$data = array (
					'webid' => $webid,
					'webname' => $webname,
					'web' => $web,
					'uid' => $uid
				);
				$duoduo->insert('apilogin', $data, 0);
			}
			
			
			
			if ($webset['user']['jihuo'] == 0) { //如果需要激活，会员初始的激活状态为0
				unset ($data);
				$data['uid'] = $uid;
				$data['username'] = $username;
				$data['tg'] = $tg;
				$data['webnick'] = WEBNAME;
				$data['email'] = $email;
				$msg_zhuce = $duoduo->msg_insert($data, 1); //1号站内信
			}
	       user_login($uid, $md5pwd);
		   
		   
		   $result['stauts']=1;
		   echo dd_json_encode($result);exit();
			
			
				
				
		  
	}
	
if ($_POST['sub1']=="login"){

    if (isset($_POST['sub']) && $_POST['sub'] != '') {
			if (limit_ip('user_limit_ip')) {
				$result['msg']=('你的IP已经被禁用');
			    echo dd_json_encode($result);exit();
	         } 
	}
	
	if (reg_captcha($_POST['yzm']) == 0) {
			$result['msg']=('验证码错误');
			echo dd_json_encode($result);exit();
		}
		
		
		
		
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$remember = trim($_POST['remember'])?trim((int)$_POST['remember']):0;
	$md5pwd = md5($password);
	$username_pass = reg_name($username, 3, 30, $shield_arr);
	if ($username_pass == -1) {
		$result['msg']=('用户名不合法');
	    echo dd_json_encode($result);exit();
	} elseif ($username_pass == -2) {
		$result['msg']=('包含非法词汇');
	    echo dd_json_encode($result);exit();
	} 

	$password_pass = reg_password($password);
	if ($password_pass == 0) {
		$result['msg']=('密码格式错误');
	    echo dd_json_encode($result);exit();
	} 

	$dduser = $duoduo -> select('user', 'id,ddusername,email,jihuo', "(ddusername='" . $username . "' or email='" . $username . "') and ddpassword='" . $md5pwd . "' and del=0");
	$uid = $dduser['id'];
	
	if ($uid > 0) { // 如果会员存在
				$id = $dduser['id'];
				$username = $dduser['ddusername'];
				$email = $dduser['email'];
				$jihuo = $dduser['jihuo'];
				if ($jihuo ==2) {
					$result['msg']=('您的账号已经被禁用');
	                echo dd_json_encode($result);exit();
				} 
		
				if ($remember == 1) {
					$life = 3600 * 24 * 100;
				} else {
					$life = '';
				} 
				user_login($uid, $md5pwd, $life); //登陆状态
				$set_con_arr = array(array('f' => 'ddpassword', 'v' => $md5pwd), array('f' => 'lastlogintime', 'v' => SJ), array('f' => 'loginnum', 'e' => '+', 'v' => 1), array('f' => 'logip', 'e' => '=', 'v' => get_client_ip()));
				$duoduo -> update('user', $set_con_arr, 'id="' . $uid . '"');
			
			} else {
				$result['msg']=('账号密码错误');
	            echo dd_json_encode($result);exit();
			} 
			
		 $result['stauts']=1;
		 echo dd_json_encode($result);exit();
				
}
exit();
?>