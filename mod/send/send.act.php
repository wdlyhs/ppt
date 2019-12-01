<?
dd_session_start();


$tel=$_GET['tel'];

//$captcha = trim($_GET['yzm']);
//if (reg_captcha($captcha) == 0) {
//	  echo 10;
//	  exit();
//}
//			
		
		if(preg_match("/1\d{10}$/",$tel)){  

		}else{  
		  
		 echo "手机号码格式不正确";  
		 exit();
		  
		}  
		
		if (!isset($_SESSION['time']))//判断缓存时间
		{   $_SESSION['time'] =0;
		}
		if(($_SESSION['time']+60)<time()) {//将获取的缓存时间转换成时间戳加上60秒后与当前时间比较，小于当前时间即为过期
		
		
			//限制频繁验证的 1天限制验证多少次
		        $todaytime=strtotime(date('Y-m-d 00:00:00'));
				$num=$duoduo->count("yzm","addtime>$todaytime and title='".$tel."'");
				
				if ($num>=$webset['mobile_num']){
					  echo 11;
					  exit();
					}
			//限制结束
		
                $sjs=rand(1000,9999);
				$sjs=(string)$sjs;
				
		        $_SESSION['sjs']=StrCode($sjs,$webset['strcode_key'],"ENCODE");
				
				$_SESSION['jian_username']=trim($tel);
				$_SESSION['time'] =time();
		       // $str=sends($tel,$sjs);
				
				//echo $str;
				echo $sjs;exit();
				$data['addtime']=time();
				$data['title']=trim($tel);
				
				$duoduo->insert("yzm",$data);
				
				
			// echo "发送成功".$sjs."__".$_SESSION['sjs'];
				
           }else{   
			echo "获取验证码时间间隔须在60秒以上";   
		   }
    
   
?>