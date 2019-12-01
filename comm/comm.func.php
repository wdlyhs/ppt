<?php 

function dump($var, $echo=true, $label=null, $strict=true) {

	$label = ($label === null) ? '' : rtrim($label) . ' ';

	if (!$strict) {

		if (ini_get('html_errors')) {

			$output = print_r($var, true);

			$output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';

		} else {

			$output = $label . print_r($var, true);

		}

	} 

	else {

		ob_start();

		var_dump($var);

		$output = ob_get_clean();

		if (!extension_loaded('xdebug')) {

			$output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);

			$output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';

		}

	}

	if ($echo) {

		echo($output);

		return NULL;

	}

	else{

		return $output;

	}		

}



function get_object_vars_final ($obj){

	if (is_object($obj)) {

		$obj = get_object_vars($obj);

	}



	if (is_array($obj)) {

		foreach ($obj as $key => $value) {

			$obj[$key] =get_object_vars_final($value);

		}

	}

    return $obj;

}

/*数组相关函数*/

function logout_key($a, $b) {

	foreach ($b as $v) {

		unset ($a[$v]);

	}

	return $a;

}



function arr_diff($arr1, $arr, $xs = 1) { //xs=0，arr是键值  xs=1，arr是键名

	if ($xs == 1) {

		foreach ($arr as $k => $v) {

		    $arr1[$v] = '%$%^@#$asdsfsdf355432';

		}

		$arr3 = array_diff($arr1, array('%$%^@#$asdsfsdf355432'));

	} 

	else {

		$arr3 = array_diff($arr1, $arr);

	}

	return $arr3;

}



function empty2zero(&$arr,$keyarr){ //指定键值空转0

    foreach ($arr as $key => $value) {

        if (is_array($value)) {

            empty2zero($arr[$key]);

        } else {

            $value = trim($value);

            if ($value == '' and in_array($key,$keyarr)) {

                $arr[$key] = 0;

            }

        }

    }

}



function arr2param($arr){

	$param='';

    foreach($arr as $k=>$v){

		$param.='&'.$k.'='.rawurlencode($v);

	}

	return $param;

}



function diguiFilter(&$p, $ArrFiltrate,$c) {

	for ($i=0;$i<$c;$i++) {

		$sql = $ArrFiltrate[$i];

		if (strpos(strtolower($p), $sql)!==false) {

			$p = preg_replace('#' . $sql . '#i', '', $p);

			diguiFilter($p, $ArrFiltrate,$c);

		} else {

			if($i==$c-1){return false;}

		}

	}

}



function filter(&$array,$ArrFiltrate,$c=0)

{

	if($c==0){

		$c=count($ArrFiltrate);

	}

	if (is_array($array))

	{

		foreach ($array as $key => $value)

		{

			if (is_array($value))

				filter($array[$key],$ArrFiltrate,$c);

			else

				diguiFilter($array[$key], $ArrFiltrate,$c);

		}

	}

}



function arr_replace($arr,$key,$val){

    $arr[$key]=$val;

	return $arr;

}



function arr_get_key($arr,$v){

	foreach($arr as $key=>$val){

	    if($v==$val){

			return $key;

		}

	}

}



/*function dd_float($arr){ //数字格式化

	if(is_array($arr)){

		foreach ($arr as $key => $value) {

			if(is_array($value)){print_r($value);exit;}

            $value = trim($value);

            if(is_numeric($value) && strlen($value)<11){

		        $arr[$key] = (float)$value;

	        }

        }

	}

	else{

		if(is_numeric($arr) && strlen($arr)<=11){

		    $arr = (float)$arr;

	    }

	}

	return $arr;

}



function dd_string($arr){ //字符格式化

	if(is_array($arr)){

		foreach ($arr as $key => $value) {

            $value = trim($value);

		    $arr[$key] = (string)$value;

        }

    }

	else{

		$arr=(string)$value;

	}

	return $arr;

}*/



function dd_float(&$arr){ //数字格式化

	foreach ($arr as $key => $value) {

        if (is_array($value)) {

            dd_float($arr[$key]);

        } else {

            $value = trim($value);

            if(!preg_match('/^0.*/',$value) && is_numeric($value) && strlen($value)<11){

		        $arr[$key] = (float)$value;

	        }

        }

    }

}



function dd_string(&$arr){ //字符格式化

	foreach ($arr as $key => $value) {

        if (is_array($value)) {

            dd_string($arr[$key]);

        } else {

            $value = trim($value);

		    $arr[$key] = (string)$value;

        }

    }

}



function dd_addslashes(&$v,$do=0) {

	if (get_magic_quotes_gpc() == 0 || $do==1) {

		if (is_array($v)) {

			foreach ($v as $key => $value) {

				if (is_array($value)) {

					dd_addslashes($v[$key]);

				} else {

					$value = addslashes(trim($value));

					$v[$key] = $value;

				}

			}

		}

		else {

			$v = addslashes($v);

		}

	}

	return $v;

}



function trim_arr(&$arr){

	if (is_array($arr)) {

		foreach($arr as $k=>$v){

			if (is_array($v)) {

				 trim_arr($v);

			}

			else{

				$arr[$k]=trim($v);

			}

		}

	}

	else{

		$arr=trim($arr);

	}

}



function back_arr($a) {  //倒叙数组

	$c = count($a);

	$d = $c;

	$b = array ();

	$m = 0;



	for ($i = 0; $i < $d; $i++) {

		$c = count($a);

		foreach ($a as $k => $v) {

			$m++;

			if ($m == $c) {

				$b[$k] = $v;

				$m = 0;

				unset ($a[$k]);

			}

		}

	}

	return $b;

}



function arr2canshu($array){

	$b='';

	foreach($array as $v){

		$b.='ids%5B%5D='.$v.'&';

	}

	return preg_replace('/&$/','',$b);

}



/*html相关函数*/

function select($array, $id = 10000, $name,$attr='',$return=0) {

	$i = 0;

	$s = '<select name="'.$name.'" id="'.$name.'" class="'.$name.'" '.$attr.'>';

	foreach ($array as $key => $val) {

		if ($id == $key && isset($id)){

		    $select = 'selected';

		}

		else{

			$select = '';

		}

		$s.= "<option value='$key' $select style='background:$bg'>$val</option>";

		$i++;

	}

	$s.= "</select>";

	if($return==1){

		return $s;

	}

	else{

		echo $s;

	}

}



function html_radio($array,$id,$name){

    foreach ($array as $key => $val) {

		if ($id == $key)

			$checked = 'checked="checked"';

		else

			$checked = '';

		echo "<label><input ".$checked." name='".$name."' type='radio' value='".$key."' /> ".$val."</label>&nbsp;&nbsp;";

	}

}



function dd_html_img($pic_url,$title,$size=''){

	if($size!=''){

		$pic_url=tb_img($pic_url,$size);

	}

	if(PICWJT==1){

		$pic_url= ddStrCode($pic_url,DDKEY,'ENCODE');

		$pic_url=urlencode($pic_url);

		$pic_url=SITEURL.'/tbimg/'.$pic_url.'.jpg';

	}

	if(PICJM==1){

		$pic_url= base64_encode($pic_url);

	}

	$img='<img alt="'.$title.'" src="'.LOADING_IMG.'" class="lazy" data-original="'.$pic_url.'"/>';

	return $img;

}



function html_img($pic_url,$type='',$alt='',$class='',$width='',$height='',$onerror_pic=''){ //type大于10为不给图片进行js加密，类型再去个位数

	$alt=strip_tags($alt);

	if($onerror_pic==''){

		$onerror_pic=SITEURL.'/images/dian.png';

	}

	if($type>=10){$img_type=$type%10;}

	else{$img_type=$type;}

	if(strpos($pic_url,'taobaocdn.com')>0 || strpos($pic_url,'alicdn.com')>0){

		switch($img_type){

	    	case 1:

		    	$pic_url=$pic_url."_100x100.jpg";

			break;

			case 2:

		    	$pic_url=$pic_url."_b.jpg";

			break;

			case 3:

		    	$pic_url=$pic_url."_310x310.jpg";

			break;

		}

	}

	

	if($type>=10){

		if($alt!=''){$alt='alt="'.$alt.'"';}

	    if($class!=''){$class='class="'.$class.'"';}

	    if($width>0){$width='width:'.$width.'px';}else{$width='';}

	    if($height>0){$height=';height:'.$height.'px';}else{$height='';}

		$onerror='onerror="this.src=\''.$onerror_pic.'\'"';

		$re= "<img src='".$pic_url."' ".$alt." ".$class." style='".$width." ".$height."' ".$onerror."/>";

	}

	elseif(PICJM==0){

		if(strpos($alt,"'")!==false){

			$alt=str_replace("'",'',$alt);

		}

		

	    $re= "<SCRIPT language=javascript>setPic('".base64_encode($pic_url)."','".$width."','".$height."','".$alt."','".$class."','".$onerror_pic."');</SCRIPT>";

	}

	elseif(PICJM==1){

		$pic_url= ddStrCode($pic_url,DDKEY,'ENCODE');

		$pic_url=urlencode($pic_url);

	    if($alt!=''){$alt='alt="'.$alt.'"';}

	    if($class!=''){$class='class="'.$class.'"';}

	    if($width>0){$width='width:'.$width.'px';}else{$width='';}

	    if($height>0){$height=';height:'.$height.'px';}else{$height='';}

		$onerror='onerror="this.src=\''.$onerror_pic.'\'"';

		if(PICWJT==0){

		    $re= "<img src='".SITEURL."/comm/showpic.php?pic=".$pic_url."' ".$alt." ".$class." style='".$width." ".$height."' ".$onerror."/>";

		}

	    else{

		    $re= "<img src='".SITEURL."/tbimg/".$pic_url.".jpg' ".$alt." ".$class." style='".$width." ".$height."' ".$onerror."/>";

		}

	}

	return $re;

}



function script($str){

    return '<script language="javascript" type="text/javascript">'.$str.'</script>';

}



function js_confirm($word,$next,$prev){

	$str='if(confirm("'.$word.'")){location.href="'.$next.'";}else{'.$prev.';};';

	return script($str);

}



function wangwang($nick,$type=1){

	$nick=urlencode($nick);

	switch($type){

	    case 1:

		    return '<a target="_blank" href="http://amos.im.alisoft.com/msg.aw?v=2&uid='.$nick.'&site=cntaobao&s=2&charset=utf-8" ><img style="width:77px; height:19px" src="http://amos.im.alisoft.com/online.aw?v=2&uid='.$nick.'&site=cntaobao&s=1&charset=utf-8" alt="点击这里给我发消息" /></a>';

		break;   

		case 2:

		    return '<a target="_blank" href="http://amos.im.alisoft.com/msg.aw?v=2&uid='.$nick.'&site=cntaobao&s=2&charset=utf-8" ><img style="width:16px; height:16px" border="0" src="http://amos.im.alisoft.com/online.aw?v=2&uid='.$nick.'&site=cntaobao&s=2&charset=utf-8" alt="点击这里给我发消息" /></a>';

		break;

	}

}



function qq($qq,$type=1){

	if($qq==''){

		return '——';

	}

	switch($type){

		case 1:

			return '<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin='.$qq.'&site=qq&menu=yes"><img style="height:16px" border="0" src="http://wpa.qq.com/pa?p=2:'.$qq.':46" alt="点击这里给我发消息" title="点击这里给我发消息"></a>';

		break;

		case 2:

			return '<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin='.$qq.'&site=qq&menu=yes"><img style="width:21px; height:21px" border="0" src="http://wpa.qq.com/pa?p=2:'.$qq.':45" alt="点击这里给我发消息" title="点击这里给我发消息"></a>';

		break;

	}

    

}



function a($uid, $size = '', $type = '') {

	$size = in_array($size, array (

		'big',

		'middle',

		'small'

	)) ? $size : 'middle';

	$uid = abs(intval($uid));

	$uid = sprintf("%010d", $uid);

	$dir1 = substr($uid, 0, 4);

	$dir2 = substr($uid, 4, 4);

	//$dir3 = substr($uid, 5, 2);

	$typeadd = $type == 'real' ? '_real' : '';

	$avatar_path='upload/avatar/'.$dir1 . '/' . $dir2 . '/' . substr($uid, -2) . $typeadd . "_avatar_$size.jpg";

	if(file_exists(DDROOT.'/'.$avatar_path)){

		if(FUJIAN_FTP==1){

			return FTP_URL.'/'.$avatar_path;

		}

		else{

			return $avatar_path;

		}

	}

	else{

		return 'images/noavatar_'.$size.'.jpg';	

	}

}



function postform($action,$param){

	$authcode_arr=array('webid');

	$f='<form name="form" method="post" action="'.$action.'">';

	foreach($param as $k=>$v){

		if(in_array($k,$authcode_arr)){

			$v=authcode($v,'ENCODE',DDKEY);

		}

		$f.='<input type="hidden" name="'.$k.'" value="'.$v.'" />';

	}

    $f.="<input type='submit' style='width:0px; height:0px;filter:alpha(opacity=0);opacity:0' value='' /></form><script>document.form.submit();</script>";

	return $f;

}



function limit_input($name,$value=DEFAULTPWD,$width='150',$pwd=1){

    if(strpos($name,'[')!==false){

	    preg_match('/\[(.*)\]/',$name,$a);

		$b=str_replace('['.$a[1].']','',$name);

		$id=$b.$a[1];

	}

	else{

	    $id=$name;

	}

	if($pwd==1){

	    $type='password';

	}

	else{

	    $type='text';

	}

	return $s='<input style="width:'.$width.'px" type="'.$type.'" _name="'.$name.'" id="'.$id.'" readonly="readonly" class="disabled" value="'.$value.'"/><input type="checkbox" title="激活修改" onClick="if($(this).attr(\'checked\')==\'checked\' || $(this).attr(\'checked\')==true){$(\'#'.$id.'\').attr(\'readonly\',false).removeClass(\'disabled\').attr(\'name\',$(\'#'.$id.'\').attr(\'_name\')).val(\'\');}else{$(\'#'.$id.'\').attr(\'readonly\',\'readonly\').addClass(\'disabled\');}"  />';

}





/*文件操作相关函数*/

function make_arr_cache($arr, $name,$root=0) {

	$data = "<?php\n return " . var_export($arr, true) . ";\n?>";

	if($root==0){

	    dd_file_put(DDROOT .'/' . $name . '.php', $data);

	}

	else{

	    dd_file_put($name . '.php', $data);

	}

}



function create_dir($dir) {

	if ($dir!='/' && !is_dir($dir)) {

		$d=str_replace(DDROOT.'/','',$dir);

		$d_arr=explode('/',$d);

		$di='';

		foreach($d_arr as $v){

			$di.='/'.$v;

			if(is_dir(DDROOT.$di)){

				if(iswriteable(DDROOT.$di)==0){

					return $di.'目录不可写';

				}

			}

			else{

				mkdir(DDROOT.$di);

			}

		}

	}

}



function create_file($file,$data='',$add=0,$detect=1,$original=0){

	$file=str_replace("\\", '/', $file);

    if($detect==1){

		$dir_arr=explode('/',$file);

	    $c=count($dir_arr);

		unset($dir_arr[$c-1]);

		$dir=implode('/',$dir_arr);

		create_dir($dir);

	}

	if($add==0){

		if($original==0){

			return dd_file_put($file,$data);

		}

		else{

			return file_put_contents($file,$data);

		}

	}

	else{

		return dd_file_put($file,$data,FILE_APPEND);

	}

}



function iswriteable($file){

	if(!file_exists($file)){

		return 0;

	}

	$writeable = 0;

    if(is_dir($file)){  

	    $dir=$file;  

		file_put_contents($dir.'/test.txt',1);

		if(file_exists($dir.'/test.txt')){

			if(unlink($dir.'/test.txt')){

				$writeable = 1; 

			}

		}

	}

	else{  

		if(file_exists($file)){

			$rename=rename($file,$file.'.duoduo');

			if($rename==1){

				rename($file.'.duoduo',$file);

			}

			file_put_contents($file,'duoduo_test_file_exists',FILE_APPEND);

			$a=file_get_contents($file);

			if(preg_match('/duoduo_test_file_exists$/',$a)){

				$a=preg_replace('/duoduo_test_file_exists$/','',$a);

				file_put_contents($file,$a);

				$update = 1;

			}

		}

		$writeable=$rename*$update;

	} 

	return $writeable;

}



function directory_size($directory) {

	$directorySize = 0;

	if(!file_exists($directory)){return 0;}

	if ($dh =  opendir($directory)) {

		while (($filename = readdir($dh))) {

			if ($filename != "." && $filename != "..") {

				if (is_file($directory . "/" . $filename))

					$directorySize += filesize($directory . "/" . $filename);

				if (is_dir($directory . "/" . $filename))

					$directorySize += directory_size($directory . "/" . $filename);

			}

		} 

	} 

    closedir($dh);

	return $directorySize;

}



function deldir($dir) {

	if (!file_exists($dir)) {

		return false;

	} 

	if($dh = opendir($dir)){

		while ($file = readdir($dh)) {

			if ($file != "." && $file != "..") {

				$fullpath = $dir . "/" . $file;

				if (!is_dir($fullpath)) {

					unlink($fullpath);

				} else {

					deldir($fullpath);

				}

			}

		}

	closedir($dh);

	}

	if (rmdir($dir)) {

		return true;

	} else {

		return false;

	} 

}



function MkdirAll($truepath) {

	if (!file_exists($truepath)) {

		mkdir($truepath, 0777);

		chmod($truepath, 0777);

		return true;

	} else {

		return true;

	}

}



function judge_empty_dir($directory){      

    $handle = opendir($directory);      

    while (($file = readdir($handle)) !== false){          

        if ($file != "." && $file != ".."){              

            closedir($handle);              

            return 0;          

        }      

    }     

    closedir($handle);     

    return 1;  

}





/*文字字符串相关函数*/

function utf_substr($str, $len) {

	for ($i = 0; $i < $len; $i++) {

		$temp_str = substr($str, 0, 1);

		if (ord($temp_str) > 127) {

			$i++;

			if ($i < $len) {

				$new_str[] = substr($str, 0, 3);

				$str = substr($str, 3);

			}

		} else {

			$new_str[] = substr($str, 0, 1);

			$str = substr($str, 1);

		}

	}

	return join($new_str);

}



function str_del_last($str){

	$newstr = substr($str,0,strlen($str)-1);

	return $newstr;

}



function utf8_count($content,$_content=''){

	preg_match_all('/./us', $content, $match);

    $num=count($match[0]);

	if($_content!=''){

		preg_match_all('/./us', $_content, $match);

   		$_num=count($match[0]);

		if(strpos($content,$_content)!==false){

			return round(min($num,$_num)/max($num,$_num),2);

		}

		else{

			return 0;

		}

	}

	else{

		return $num;

	}

}



/*验证相关函数*/

function reg_name($name,$min=3,$max=15,$shield_arr=array()){

	if($name=='网站客服'){

		return -2; //包含非法词汇

	}

	$strl=str_utf8_chinese_word_count($name)*2+str_utf8_english_count($name);


	if($strl<$min or $strl>$max){

	    return -1; //用户名不合法

	}

	if(!empty($shield_arr)){

	    foreach($shield_arr as $v=>$k){

	        if(strpos($name,$v)!==false){

			    return -2; //包含非法词汇

	        }

	    }

	}

	$pcre_name = "/^[a-zA-Z0-9_\.\-@\x80-\xff]+$/"; //utf-8

	//$pcre_name = "/^[a-z0-9_".chr(0xa1)."-".chr(0xff)."]+$/"; //gbk

    if(preg_match($pcre_name,$name)){

        return 1;

    }else{

        return -1;  //用户名不合法

    }

}



function reg_password($pwd){

	$pcre_pwd = '/.{5,20}/';

    if(preg_match($pcre_pwd,$pwd)){

        return 1;

    }else{

        return 0;

    }

}



function reg_email($email){

	$pcre_email = '/^[-0-9a-zA-Z_.]+@([0-9a-zA-Z][_\-0-9a-zA-Z.]{0,30}\.)[a-zA-Z]{2,10}$/';

    if(preg_match($pcre_email,$email)){

        return 1;

    }else{

        return 0;

    }

}



function reg_qq($qq){

	$pcre_qq = '/^[0-9]{4,20}$/';

    if(preg_match($pcre_qq,$qq) || reg_email($qq)==1){

        return 1;

    }else{

        return 0;

    }

}



function reg_mobile($mobile){

	$pcre_mobile = '/^1[0-9]{10}$/';

    if(preg_match($pcre_mobile,$mobile)){

        return 1;

    }else{

        return 0;

    }

}



function is_url($url){

	$pcre_url = '/^http[s]?:\/\/[\w-]+\.[\w-]+[\.[\w-]|]+[\/=\?%\-&~`@[\]\':+!\w]+$/';

    if(preg_match($pcre_url,$url)){

        return 1;

    }else{

        return 0;

    }

}



function reg_taobao_url($url){

    if(preg_match('/(taobao\.com|tmall\.com|tmall\.hk)/',$url)==1){

		return 1;

	}

	else{

	    return 0;

	}

}



function reg_alipay($alipay){

	$is_email=reg_email($alipay);

	if($is_email==1){

	    return 1;

	}

	else{

		$is_mobile=reg_mobile($alipay);

	    if($is_mobile==1){

		    return 1;

		}

		else{

		    return 0;

		}

	}

}



function reg_tenpay($tenpay){

	$is_email=reg_email($tenpay);

	if($is_email==1){

		return 1;

	}

	$is_qq=reg_qq($tenpay);

	if($is_qq==1){

		return 1;

	}

	$is_mobile=reg_mobile($tenpay);

	if($is_mobile==1){

		return 1;

	}

	return 0;

}



function reg_bank_code($code){

	$len=strlen($code);

	if(is_numeric($code) && $len>=16 && $len<=19){

		return 1;

	}

	else{

		return 0;

	}

}



function reg_time($time){

	if($time==''){return 0;}

    $unixTime = strtotime($time);

    if (!is_numeric($unixTime)){

		return 0;

	}

	return 1;

}



function reg_captcha($yzm,$code='captcha'){

	if($yzm==''){return 0;}

	else{$yzm=strtolower($yzm);}

    if(!defined('ADMIN')){

		dd_session_start();

	}

	

	$captcha=strtolower($_SESSION[$code]);

	

	if($captcha=='' || strtolower($yzm)!=strtolower($captcha)){

	    return 0;

	}

	unset($_SESSION[$code]);

	return 1;

}



function dd_encrypt($val,$key){

    return base64_encode($key.$val);

}



function dd_decrypt($val,$key){

	$a=base64_decode($val);

    $a=preg_replace('/^'.$key.'/','',$a);

	return $a;

}



function fs($class,$config='')

{

	if(!class_exists($class)){include(DDROOT.'/comm/'.$class.'.class.php');}

	static $classes = array();

	if(!isset($classes[$class]) || $classes[$class] === NULL)

	{

		$classes[$class] = new $class($config);

		//unset($class);

	}

	return $classes[$class];

}



function compact_html($str) {

	$str = preg_replace("/\t/", "", $str);

	$str = preg_replace("/\r\n/", "", $str);

	$str = preg_replace("/\r/", "", $str);

	$str = preg_replace("/\n/", "", $str);

	$str = preg_replace("/\s/", "", $str);

	return $str;

}



function get_final_url($url) {

	$str = '';

	$url = parse_url($url);

	$fp = fsockopen($url['host'], 80, $errno, $errstr);

	if ($fp) {

		if (!array_key_exists('query', $url)) {

			$url['query'] = '';

		}



		$header = "GET " . $url['path'] . "?" . $url['query'] . " HTTP/1.1\r\n";

		$header .= "Host: " . $url['host'] . "\r\n";

		$header .= "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.0; zh-CN; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1\r\n";

		$header .= "Referer: http://" . $url['host'] . "\r\n";

		$header .= "Connection: Close\r\n\r\n";

		fwrite($fp, $header);

		while (!feof($fp)) {

			$s = fgets($fp, 128);

			$str .= $s;

		}

		fclose($fp);

		preg_match("|Location:(.*?)Content-Type|", compact_html($str), $arr);

		return $arr[1];

	}

}



function dsetcookie($var, $value = '', $life = 0,$cookie_path='/',$cookie_domain='',  $http_only = false)

{

	if($cookie_domain==''){

		$cookie_domain=DOMAIN;

	}

	$_COOKIE[$var] = $value;



	if($value == '' || $life < 0)

	{

		$value = '';

		$life = -1;

	}



	$life = $life > 0 ? TIME + $life : ($life < 0 ? TIME - 31536000 : 0);

	$path = $http_only && PHP_VERSION < '5.2.0' ? $cookie_path.'; HttpOnly' : $cookie_path;



	$secure = $_SERVER['SERVER_PORT'] == 443 ? 1 : 0;

	if(PHP_VERSION < '5.2.0')

	{

		setcookie($var, $value, $life, $path, $cookie_domain, $secure);

	}

	else

	{

		setcookie($var, $value, $life, $path, $cookie_domain, $secure, $http_only);

	}

}



function set_cookie($var, $value = '', $life = 1200,$encrypt=1){

	if($encrypt==1 && $life!=0){

	    $value=authcode($value, 'ENCODE');

	}

	

	if($life>0 && $value!=''){

		$life=TIME+$life;

	}

	else{

		$life=TIME-3153600000;

		$value='';

	}

	$_COOKIE[$var] = $value;

	

	if($_GET['domain_ignore']==1){

		setcookie($var, $value, $life,'/');

		if($life<=0){

			setcookie($var, $value, $life,'/',DOMAIN);

		}

	}

	else{

		if(DOMAIN=='localhost'){

			setcookie($var, $value, $life,'/');

		}

		else{

			setcookie($var, $value, $life,'/',DOMAIN);

		}

		if($life<=0){

			setcookie($var, $value, $life,'/');

		}

	}

}



function get_cookie($var,$encrypt=1){

	if(isset($_COOKIE[$var])){

	    if($encrypt==1){

	       $value=authcode($_COOKIE[$var], 'DECODE');

	    }

        else{

	        $value=$_COOKIE[$var];

	    }

	    return $value;

	}

	else{

	    return '';

	}

}



function user_login($uid,$md5pwd,$life=''){

	if($life==''){$life=3600*24;}

	$userlogininfo=serialize(array('uid'=>$uid,'ddpassword'=>$md5pwd,'ddsavetime'=>$life,'ver'=>'2'));

	set_cookie("userlogininfo", $userlogininfo, $life);

}



function webtype($a,$b=''){

    if(WEBTYPE==0){

	    return $a;

	}

	else{

	    return $b;

	}

}



function extension($filename){  //求后缀名

	if(strpos($filename,'/')!==false){

		$arr= explode('/',$filename);

		$arr = array_reverse($arr);

		if(strpos($arr[0],'.')!==false){

			$row= explode('.',$arr[0]);

			$row = array_reverse($row);

			return $row[0];

		}

		else{

			return '';

		}

	}

	else{

		if(strpos($filename,'.')!==false){

			$row = array_reverse($row);

			return $row[0];

		}

		else{

			return '';

		}

	}

}



/*function get_client_ip()

{

	$ip = $_SERVER['REMOTE_ADDR'];

	if (isset($_SERVER['HTTP_CLIENT_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_CLIENT_IP']))

	{

		$ip = $_SERVER['HTTP_CLIENT_IP'];

	}

	elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && preg_match_all('#\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}#s', $_SERVER['HTTP_X_FORWARDED_FOR'], $matches))

	{

		foreach ($matches[0] AS $xip)

		{

			if (!preg_match('#^(10|172\.16|192\.168)\.#', $xip))

			{

				$ip = $xip;

				break;

			}

		}

	}

	return $ip;

}*/



function get_client_ip() {

	$ip = $_SERVER['REMOTE_ADDR'];

	if (isset($_SERVER['HTTP_X_REAL_FORWARDED_FOR']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_X_REAL_FORWARDED_FOR'])) {

		$ip = $_SERVER['HTTP_X_REAL_FORWARDED_FOR'];

	}  

    elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_X_FORWARDED_FOR'])) {

		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

	}  

	elseif (isset($_SERVER['HTTP_CLIENT_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_CLIENT_IP'])) {

		$ip = $_SERVER['HTTP_CLIENT_IP'];

	} 

	if($ip=='127.0.0.1'){

		$ip=$_SERVER['REMOTE_ADDR'];

	}

	return $ip;

}



function fuzzyTradeId($trade_id,$num=3){

	$len=strlen($trade_id);

    return substr($trade_id,0,$num).'*****'.substr($trade_id,-$num);

}



function deep_jm($val,$key=DDKEY){

    return md5(md5($key.$val).$key);

}



function http_pic($pic){

    if(preg_match('|^http://|',$pic)==0){

	    return SITEURL.'/'.$pic;

	}

	else{

	    return $pic;

	}

}



function del_pic($img){

	if($img==''){

		return;

	}

    if(preg_match('|^http://|',$img)==0){

	    if(file_exists(DDROOT.'/'.$img)){

		    unlink(DDROOT.'/'.$img);

		}

	}

}



function addquote($var)

{

	return str_replace("\\\"", "\"", preg_replace("/\[([a-zA-Z0-9_\-\.\x7f-\xff]+)\]/s", "['\\1']", $var));

}



function RpLine($str)

{

	$str = str_replace("\r","\\r",$str);

	$str = str_replace("\n","\\n",$str);

	return $str;

}







/*时间转换函数*/   

function qian_time($time) {

    $rtime = date("m-d H:i",$time);

    $htime = date("H:i",$time);

    $timetime = time() - $time;



    if ($timetime < 60) {

       $str = '刚刚';

    }

    else if ($timetime < 60 * 60) {

       $min = floor($timetime/60);

       $str = $min.'分钟前';

    }

    else if ($timetime < 60 * 60 * 24) {

       $h = floor($timetime/(60*60));

       $str = $h.'小时前 '.$htime;

    }

    else if ($timetime < 60 * 60 * 24 * 3) {

       $d = floor($timetime/(60*60*24));

       if($d==1)

       $str = '昨天 '.$rtime;

    else

       $str = '前天 '.$rtime;

    }

    else {

       $str = $rtime;

    }

    return $str;

}



function tranTime($time){

	$str='';

	if(!is_numeric($time)){

		$time=strtotime($time);

	}

	

	$current_time = time();

	if ($time >= $current_time) {

        $time = $time - $current_time;

		if ($time < 60) {

			$str = '马上';

		}

		elseif ($time < 60 * 60) {

			$min = floor($time / 60);

			$str = $min . '分钟后';

		}

		elseif ($time < 60 * 60 * 24) {

			$h = floor($time / (60 * 60));

			$str = $h . '小时后';

		}

		elseif ($time < 60 * 60 * 24 * 30) {

			$d = floor($time / (60 * 60 * 24));

			$str='还有'.$d.'天';

		}

		elseif ($time < 60 * 60 * 24 * 30*12) {

			$d = floor($time / (60 * 60 * 24*30));

			$str='还有'.$d.'个月';

		}

		else{

			$d = floor($time / (60 * 60 * 24*30*12));

			$str='还有'.$d.'年';

		}

	}

	else{

	    $str='已过期'; 

	}

	return $str;

}



function browser() {

	if(!isset($_SERVER["HTTP_USER_AGENT"])){

		return '';

	}

	if (strpos($_SERVER["HTTP_USER_AGENT"], "MSIE") || strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mozilla")!==false){

		$browser = "ie";

	}

	elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Firefox")){

		$browser = "firefox";

	}

	elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Chrome")){

		$browser = "chrome";

	}

	elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Safari")){

		$browser = "safari";

	}

	elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Opera")){

		$browser = "opera";

	}

	else{

		$browser='';

	}

	return $browser;

}



/*多多函数*/



function alert($word){

    echo script('alert("'.$word.'")');

}



function fenduan($val,$arr=array(),$type=0,$bili=1){

	$re=$val*$arr[$type];

	$re*=$bili;

	return round($re,2);

}



function rep($str){

    $re="/[^\d]/";

    return preg_replace($re,"",$str);

}



function StrCode($string,$key,$action='ENCODE'){

	$key	= substr(md5($_SERVER["HTTP_USER_AGENT"].$key),8,18);

	$string	= $action == 'ENCODE' ? $string : base64_decode($string);

	$len	= strlen($key);

	$code	= '';

	for($i=0; $i<strlen($string); $i++)

	{

		$k		= $i % $len;

		$code  .= $string[$i] ^ $key[$k];

	}

	$code = $action == 'DECODE' ? $code : base64_encode($code);

	return $code;

}



function ddStrCode($string,$key,$action='ENCODE'){

	$string=(string)$string;

	$key	= substr(md5($key),8,18);

	$string	= $action == 'ENCODE' ? $string : base64_decode($string);

	$len	= strlen($key);

	$code	= '';

	for($i=0; $i<strlen($string); $i++)

	{

		$k		= $i % $len;

		$code  .= $string[$i] ^ $key[$k];

	}

	$code = $action == 'DECODE' ? $code : base64_encode($code);

	if($action=='ENCODE' && preg_match('/={2}$/',$code)==1){

		$code=preg_replace('/={2}$/','',$code);

	}

	return $code;

}



//签名函数

	function createSign ($paramArr) { 

	    global $appSecret; 

	    $sign = $appSecret; 

	    ksort($paramArr); 

	    foreach ($paramArr as $key => $val) { 

	       if ($key !='' && $val !='') { 

	           $sign .= $key.$val; 

	       } 

	    } 

	    $sign = strtoupper(md5($sign.$appSecret));

	    return $sign; 

	}



	//组参函数 

	function createStrParam ($paramArr) { 

	    $strParam = ''; 

	    foreach ($paramArr as $key => $val) { 

	       if ($key != '' && $val !='') { 

	           $strParam .= $key.'='.urlencode($val).'&'; 

	       } 

	    } 

	    return $strParam; 

	}







function param2str($parame) {

	$parame_str = '';

	if (!empty ($parame)) {

		foreach ($parame as $k => $v) {

			if ($k != '') {

				$parame_str .= $k . '=' . urlencode($v) . '&';

			}

		}

		$parame_str = preg_replace('/&$/', '', $parame_str);

	}

	return $parame_str;

}



function filename(){ 

	$dir_file = $_SERVER['SCRIPT_NAME']; 

	$filename = basename($dir_file); 

	return $filename; 

} 



function dd_strip_tags($html,$tags=''){

    $default_tags='<a>,<b>,<br>,<div>,<p>,<table>,<tr>,<td>,<th>,<i>,<font>,<dl>,<dt>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<hr>,<ul>,<li>,<ol>';

	if($tags!=''){$default_tags=','.$default_tags;}

	return $html=strip_tags($html,$default_tags);

}



/**

 * 字符串截取，支持中文和其他编码

 *

 * @param string $str 需要转换的字符串

 * @param string $start 开始位置

 * @param string $length 截取长度

 * @param string $charset 编码格式

 * @param string $suffix 截断字符串后缀

 * @return string

 */

function substr_ext($str, $start=0, $length, $charset="utf-8", $suffix="")

{

    if(function_exists("mb_substr")){

         return mb_substr($str, $start, $length, $charset).$suffix;

	}

    elseif(function_exists('iconv_substr')){

         return iconv_substr($str,$start,$length,$charset).$suffix;

    }

    $re['utf-8']  = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";

    $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";

    $re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";

    $re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";

    preg_match_all($re[$charset], $str, $match);

    $slice = join("",array_slice($match[0], $start, $length));

    return $slice.$suffix;

}



function dd_replace($str,$arr=array()){

	if(REPLACE==0){

		return $str;

	}

	

	if(REPLACE<3){

		$noword_tag='';

	}

	else{

		$noword_tag='3';

	}

	

	if(empty($arr)){

		$arr=dd_get_cache('no_words'.$noword_tag);

	}

	

	if(REPLACE==1 && !empty($arr)){

	    $str=strtr($str,$arr);

		//print_r($str);exit;

	}

	elseif(REPLACE==2){

	    foreach($arr as $a=>$b){

		    if(strpos($str,(string)$a)!==false){

				if(MOD=='ajax'){

					$re=array('s'=>0,'id'=>55);

					dd_exit(json_encode($re));

				}

				else{

					error_html('商品不存在！',-1);

				}

			}

		}

	}

	elseif(REPLACE==3){

		foreach($arr as $k=>$row){

		    $title_split=implode('(.*)',$row['title_arr']);

			$replace=$row['replace'];

			if(preg_match('/'.$title_split.'/',$str)==1){

				if(MOD=='ajax'){

					$re=array('s'=>0,'id'=>55);

					dd_exit(json_encode($re));

				}

				else{

					error_html('商品不存在！',-1);

				}

			}

		}

	}

	return $str;

}



function dd_exit($str=''){

    global $duoduo;

	if(isset($duoduo)){$duoduo->close();}

	echo $str;

	unset($duoduo);

	exit;

}



function ob_gzip($content)

{    

    if(!headers_sent() &&  extension_loaded("zlib") && strpos($_SERVER["HTTP_ACCEPT_ENCODING"],"gzip")!==false)

    {

        $content = gzencode($content,9);

        header("Content-Encoding: gzip");

        header("Vary: Accept-Encoding");

        header("Content-Length: ".strlen($content));

    }

    return $content;

}



function strtoarray($str){

	$str=str_replace('，',',',$str);

	$str=preg_replace('/[\n\r\t\s]+/i',',',$str);

	$arr=explode(',',$str);

	return $arr;

}



function limit_ip($name,$ip=''){

	if($ip=='')	{

		$ip=get_client_ip();

	}

	$limit_ip=dd_get_cache($name);

	if($limit_ip[0]=='') return 0;

	$ips=implode('|',$limit_ip);

	if(preg_match('/'.$ips.'/',$ip)==1){

		return 1;

	}

	return 0;

}



function dd_tag_replace($str){

	global $webset;

	$arr=array('{WEBNAME}'=>WEBNAME,'{WEBNICK}'=>WEBNICK,'{QQ}'=>$webset['qq'],'{EMAIL}'=>$webset['email'],'{URL}'=>URL,'{TBMONEY}'=>TBMONEY,'{TBMONEYBL}'=>TBMONEYBL,'{TBMONEYTYPE}'=>TBMONEYTYPE);

	$str=strtr($str,$arr);

	return $str;

}



function no_cache(){

	//设置此页面的过期时间(用格林威治时间表示)，只要是已经过去的日期即可。    

	header("Expires: Mon, 26 Jul 1970 05:00:00 GMT");      

   

	//设置此页面的最后更新日期(用格林威治时间表示)为当天，可以强制浏览器获取最新资料     

	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");      

   

	//告诉客户端浏览器不使用缓存，HTTP 1.1 协议     

	header("Cache-Control: no-cache, must-revalidate");      

   

	//告诉客户端浏览器不使用缓存，兼容HTTP 1.0 协议     

	header("Pragma: no-cache");

}



/*function gbk2utf8($q) {

	echo $encode=mb_detect_encoding($q,array('ASCII','GB2312','GBK','UTF-8','BIG5'));

	if($encode!='UTF-8' && $encode!='CP936'){

		$q=iconv($encode,'utf-8//IGNORE',$q);

	}

	return $q;

}*/



function gbk2utf8($string, $encoding = 'utf8') {

	if(GBK_UTF8_FUN==2){

		/*$encode=mb_detect_encoding($q,array('ASCII','GB2312','GBK','UTF-8','BIG5'));

		if($encode!='UTF-8' && $encode!='CP936'){

			$q=iconv($encode,'utf-8//IGNORE',$q);

		}

		return $q;*/

		if (preg_match("/^([".chr(228)."-".chr(233)."]{1}[".chr(128)."-".chr(191)."]{1}[".chr(128)."-".chr(191)."]{1}){1}/",$string) == true || preg_match("/([".chr(228)."-".chr(233)."]{1}[".chr(128)."-".chr(191)."]{1}[".chr(128)."-".chr(191)."]{1}){1}$/",$string) == true || preg_match("/([".chr(228)."-".chr(233)."]{1}[".chr(128)."-".chr(191)."]{1}[".chr(128)."-".chr(191)."]{1}){2,}/",$string) == true){

			return $string;

		}

		else{

			return iconv('gb2312','utf-8//IGNORE',$string);

		}

	}

	else{

		$is_utf8 = preg_match('%^(?:[\x09\x0A\x0D\x20-\x7E]| [\xC2-\xDF][\x80-\xBF]|  \xE0[\xA0-\xBF][\x80-\xBF] | [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}    |  \xED[\x80-\x9F][\x80-\xBF] |  \xF0[\x90-\xBF][\x80-\xBF]{2}  | [\xF1-\xF3][\x80-\xBF]{3}  |  \xF4[\x80-\x8F][\x80-\xBF]{2} )*$%xs', $string);

		if ($is_utf8 && $encoding == 'utf8') {

			return $string;

		}

		elseif ($is_utf8) {

			return mb_convert_encoding($string, $encoding, "UTF-8");

		} else {

			return mb_convert_encoding($string, $encoding, 'gbk,gb2312,big5');

		}

	}

}



function dd_glob($dir){

	if(!preg_match('/.*\/$/',$dir)){

		$dir.='/';

	}

	$a=array();

	$b=array();

	$a=glob($dir.'*');

	$b=glob($dir.'.*');

	foreach($b as $k=>$v){

		if($v==$dir.'.' || $v==$dir.'..'){

			unset($b[$k]);

		}

	}

	if(empty($a)){

		return $b;

	}

	elseif(empty($b)){

		return $a;

	}

	else{

		return array_merge($a,$b);

	}

}



function get2var(){

	$re=1;

	foreach($_GET as $k=>$v){

		if($v==='' && $strict==1){ //严格检测get，不准有空

			$re=0;

			break;

		}

		global $$k;

		$$k=htmlspecialchars($v);

		if(!empty($arr)){

			$arr=array_diff($arr,array($k));

		}



	}

	if(!empty($arr)){  //严格检测post，不准不存在

		if(count($arr)>0){

		    $re=0;

	    }

	}

	return $re;

}



function post2var($arr=array(),$strict=0){

	$re=1;

	foreach($_POST as $k=>$v){

		if($v==='' && $strict==1){ //严格检测post，不准有空

			$re=0;

			break;

		}

		global $$k;

		$$k=htmlspecialchars($v);

		if(!empty($arr)){

			$arr=array_diff($arr,array($k));

		}



	}

	if(!empty($arr)){  //严格检测post，不准不存在

		if(count($arr)>0){

		    $re=0;

	    }

	}

	return $re;

}



function dd_file_put($file,$data,$mode=FILE_USE_INCLUDE_PATH){

	//if($mode!=FILE_APPEND && is_file($file)) unlink($file);

	if($mode=='FILE_APPEND' || $mode==FILE_APPEND){

		return file_put_contents($file,$data,FILE_APPEND);

	}

	else{

		return file_put_contents($file,$data);

	}

}



function data_type($v,$type=1){

	if($type==1){

		return (int)$v;

	}

	elseif($type==2){

		return (round($v*100))/100;

	}

}



function zhengchu($a,$b){

	$x=explode('.',$b);

	if(isset($x[1])){

		$b=$b*pow(10,strlen($x[1]));

		$a=$a*pow(10,strlen($x[1]));

	}

	$c=$a/$b;

	if($c==(int)$c){

		return 1;

	}

	else{

		return 0;

	}

}



function del_magic_quotes_gpc(&$content,$type=0){ //type等于1，会强制使用

	if(get_magic_quotes_gpc()==1 || $type==1){

		if(is_array($content)){

			foreach($content as $k=>$v){

				if(is_array($v)){

					del_magic_quotes_gpc($content[$k],$type);

				}

				else{

					if(strpos($v,'\\"')!==false){

						$v=str_replace('\\"','"',$v);

					}

					if(strpos($v,"\\'")!==false){

						$v=str_replace("\\'","'",$v);

					}

					//$v = addslashes($v);

					$content[$k]=$v;

				}

			}

		}

		else{

			if(strpos($content,'\\"')!==false){

				$content=str_replace('\\"','"',$content);

			}

			if(strpos($content,"\\'")!==false){

				$content=str_replace("\\'","'",$content);

			}

			//$content = addslashes($content);

		}

	}

	return $content;

}



function dd_hash_hmac( $algo , $data , $key , $raw_output = false ){

	if(function_exists('hash_hmac')){

		return hash_hmac($algo, $data, $key, $raw_output);

	}



	$algo = strtolower($algo);

	if($algo == 'sha1'){

		$pack = 'H40';

	}

	elseif($algo == 'md5')

	{

		$pack = 'H32';

	}

	else

	{

		return '';

	}

	$size = 64;

	$opad = str_repeat(chr(0x5C), $size);

	$ipad = str_repeat(chr(0x36), $size);

	if (strlen($key) > $size) {

		$key = str_pad(pack($pack, $algo($key)), $size, chr(0x00));

	} else {

		$key = str_pad($key, $size, chr(0x00));

	}

	for ($i = 0; $i < strlen($key) - 1; $i++) {

		$opad[$i] = $opad[$i] ^ $key[$i];

		$ipad[$i] = $ipad[$i] ^ $key[$i];

	}

	$output = $algo($opad.pack($pack, $algo($ipad.$data)));

	return ($raw_output) ? pack($pack, $output) : $output;

}



function array_yasuo($arr){

	if(empty($arr)){

		return '';

	}

	else{

		$a=dd_json_encode($arr);

		$a=gzdeflate($a,9);

		return base64_encode($a);

	}

}



function array_jieyasuo($str){

	if($str==''){

		return array();

	}

	else{

		$str=base64_decode($str);

		$str=gzinflate($str);

		$arr=dd_json_decode($str,1);

		return $arr;

	}

}



function erweima_api($str){

	return 'http://qr.liantu.com/api.php?text='.urlencode($str).'&w=150&bg=ffffff&gc=cc00000&m=5';

}



function change_img($img,$to,$del=1){

	$ext=pathinfo($img,PATHINFO_EXTENSION);

	if($ext==''){

		$a=getimagesize($img);

		$ext=str_replace('image/','',$a['mime']);

	}

	if($ext=='jpg' || $ext=='jpeg'){

		$im = imagecreatefromjpeg($img);

	}

	elseif($ext=='png'){

		$im = imagecreatefrompng($img);

	}

	elseif($ext=='gif'){

		$im = imagecreatefromgif($img);

	}

	

	if($ext==$to) return $img;

	

	if($del==1){

		unlink($img);

	}



	$dir=str_replace('.'.$ext,'.'.$to,$img);

	

	if($to=='jpg'){

		imagejpeg($im,$dir);

	}

	elseif($to=='png'){

		imagepng($im,$dir);

	}

	elseif($to=='gif'){

		imagegif($im,$dir);

	}

	return $dir;

}



function img_caiji($img_url,$lujing=''){

	$image_ext = array( 'gif', 'jpeg', 'jpg', 'jpe', 'png' );



	if($lujing!=''){$lujing=$lujing.'/';}

	preg_match('/(\.[a-zA-Z]{3,5})$/isU',$img_url,$exts);

    $dir = 'upload/'.$lujing.date('Y').'/'.date('md');

	$houzhui=str_replace('.','',strtolower($exts[1]));



	if(!in_array($houzhui,$image_ext)){

		return '';

	}



    $img_dir = $dir.'/'.substr(md5($img_url),8,16).$exts[1];

	$img=dd_get($img_url);

	create_file(DDROOT.'/'.$img_dir,$img);

	$a=getimagesize(DDROOT.'/'.$img_dir);

	if($a['mime']==''){

		unlink(DDROOT.'/'.$img_dir);

		$img_dir='';

	}

	return $img_dir;

}



function check_box($check_arr,$a){

	if($a==1){

		foreach($check_arr as $k=>$v){

			foreach($v as $a=>$b){

		echo '$(\'input[id="'.$k.'['.$a.']'.'"]\').click(function(){

				if($(\'input[name="'.$k.'['.$a.']'.'"]\').val()==0){

				$(\'input[name="'.$k.'['.$a.']'.'"]\').val(1);

				}else{

				$(\'input[name="'.$k.'['.$a.']'.'"]\').val(0);

				}

		});';

			}

		}

	}else{

		foreach($check_arr as $k=>$v){

			foreach($v as $a=>$b){

		echo '<input type="hidden" name="'.$k.'['.$a.']'.'" value="'.$b.'" class="'.$k.'['.$a.']'.'">';

			}

		}

	}

}

function is_kong($v=''){

	if($v=='' || $v===0 || $v==='0' || $v===0.00 || strpos($v,'1970-01-01')!==false){

		return '——';

	}else{

		return $v;

	}

}



function del_cache($path,$word,$type=1){  

    //给定的目录不是一个文件夹  

    if(!is_dir($path)){  

        return false;  

    } 

	

	//必须规定函数运行起始时间

	if(!defined('STIME')){

		return false;

	}

  

    $fh = opendir($path);  

    while(($row = readdir($fh)) !== false){  

        //过滤掉虚拟目录  

        if($row == '.' || $row == '..'){  

            continue;  

        }

		

		if(strpos($path.'/'.$row, 'session/'.date('Ymd'))>0 && defined('DEL_SESS')){

			continue;

		}



        if(!is_dir($path.'/'.$row)){ 

			unlink($path.'/'.$row);

			$page=(int)$_GET['page'];

			if($page<=1){

				$wait_time=1;

			}

			else{

				$wait_time=15;

			}

			$page++;

			if(time()-STIME>$wait_time){

				$get=$_GET;

				unset($get['mod']);

				unset($get['act']);

				unset($get['go_mod']);

				unset($get['go_act']);

				$get['page']=$page;

				if($type==1){  //页面跳转方式

					PutInfo('删除'.$word.'缓存中。。。<br/><br/><img src="'.SITEURL.'/images/wait2.gif" />',u(MOD,ACT,$get));

				}

				else{  //无阻赛（异步）模式

					only_send(u(MOD,ACT,$get));

				}

			} 

        }  

        del_cache($path.'/'.$row,$word,$type);  

          

    }  

    //关闭目录句柄，否则出Permission denied  

    closedir($fh);  

    //删除文件之后再删除自身  

    if(!rmdir($path)){  

        //echo $path.'无权限删除<br>';  

    }  

    return true;  

}



function check_bom ($filename,$auto=0) {

	$contents=file_get_contents($filename);

	$charset[1]=substr($contents, 0, 1);

	$charset[2]=substr($contents, 1, 1);

	$charset[3]=substr($contents, 2, 1);

	if (ord($charset[1])==239 && ord($charset[2])==187 && ord($charset[3])==191) {

		if ($auto==1) {

			$rest=substr($contents, 3);

			file_put_contents($filename, $rest);

			return 1;

		} 

		return 1;

	}

	else{

		return 0;

	}

}



function random($len) {

	$srcstr = "0123456789";

	mt_srand();

	$strs = "";

	for ($i = 0; $i < $len; $i++) {

		$strs .= $srcstr[mt_rand(0, 9)];

	}

	return strtoupper($strs);

}



function is_json($str){

	return preg_match('/^[\{|\[]/',$str);

}

function ddcache_dir($name,$dir_name){

	$md5_str=md5($name);

	$md5_dir=DDROOT.'/data/temp/'.$dir_name.'/'.substr($md5_str,0,2).'/'.substr($md5_str,2,2).'/'.$md5_str.'.json';

	return $md5_dir;

}



function set_ddcache($name,$data,$dir_name='cache'){

	$md5_dir=ddcache_dir($name,$dir_name);

	if(is_array($data)){

		$data=dd_json_encode($data,0);

		$data='duoduo_'.$data;

	}

	create_file($md5_dir,$data);

}



function get_ddcache($name,$dir_name='cache',$time=86400){

	if(defined('ADMIN') && ADMIN==1){

		return false;

	}

	$md5_dir=ddcache_dir($name,$dir_name);	

	if(file_exists($md5_dir) && TIME-filemtime($md5_dir)<$time){

		$data=file_get_contents($md5_dir);

		if(strpos($data,'duoduo_')===0){

			$data=preg_replace('/duoduo_/','',$data,1);

			$data=dd_json_decode($data,1);

		}

		return $data;

	}

	else{

		return false;

	}

}



function del_ddcache($name,$dir_name){

	if($name==''){

		deldir(DDROOT.'/data/temp/'.$dir_name);

	}

	else{

		$md5_dir=ddcache_dir($name,$dir_name);

		if(file_exists($md5_dir)){

			unlink($md5_dir);

		}

	}

}



function is_mobile() {

	//如果有HTTP_X_WAP_PROFILE则一定是移动设备

	if (isset ($_SERVER['HTTP_X_WAP_PROFILE'])) {

		return true;

	}

	//如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息

	if (isset ($_SERVER['HTTP_VIA'])) {

		//找不到为flase,否则为true

		$t=stristr($_SERVER['HTTP_VIA'], "wap");

		if($t){

			return true;

		}

	}

	//脑残法，判断手机发送的客户端标志,兼容性有待提高

	if (isset ($_SERVER['HTTP_USER_AGENT'])) {

		$clientkeywords = array ('nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile');

		//从HTTP_USER_AGENT中查找手机浏览器的关键字

		if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {

			return true;

		}

	}

	//协议法，因为有可能不准确，放到最后判断

	if (isset ($_SERVER['HTTP_ACCEPT'])) {

		//如果只支持wml并且不支持html那一定是移动设备

		//如果支持wml和html但是wml在html之前则是移动设备

		if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {

			return true;

		}

	}

	return false;

}



function php_self(){

    $php_self=substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

    return $php_self;

}

function title_replace($title) {//替换关键词

	$re_word=include(DDROOT . '/data/array/title_replace.php');

	foreach($re_word as $k=>$v){

		$title=str_replace($k,$v,$title);

	}

	return $title;

}

function curl_get_file_contents($URL,$tag=1,$time=86400,$mulu='wuliu') {

	if($tag==2){

		

	}

	else{

		$md5_url=$URL;

		$md5_cache_path=md5($md5_url);

		$md5_cache_path=substr($md5_cache_path,0,2).'/'.$md5_cache_path.'.json';

		$cache_dir=DDROOT.'/data/temp/tao_api_log/'.$mulu.'/'.$md5_cache_path;

		if(file_exists($cache_dir) && time()-filemtime($cache_dir)<$time){

			$contents=file_get_contents($cache_dir);

			$contents=title_replace($contents);

			return $contents;

		}	

	}

	

	

	$c = curl_init();

	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);

	//curl_setopt($c, CURLOPT_HEADER, 1);//输出远程服务器的header信息

	curl_setopt($c, CURLOPT_USERAGENT, 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e Safari/8536.25');

	curl_setopt($c, CURLOPT_URL, $URL);

	$contents = curl_exec($c);

	curl_close($c);

	if ($contents) {

		$contents=trim($contents);

		create_file($cache_dir);

		

		$contents=title_replace($contents);

		

		if($tag==2){

		

		}

		else{

			file_put_contents($cache_dir,$contents);

		}

		return $contents;

	} else {

		return FALSE;

	}

}

function is_kongzhi($v){

	if($v=='' || $v===0 || $v===0.00){

		return '--';

	}else{

		return $v;

	}

}



/*

函数功能，限制恶意提交

type：insert是执行成功后写入记录，delete是删除记录，check是检测记录

name：功能名，各功能之间不重复

max_error_num：最大错误次数

ip：检测记录的标准，默认用IP

miao：错误间隔，单位秒（在max_error_num之前判断）

使用场景说明：

1，限制同一IP内一天最多发送50条短信，在短信发送成功后使用函数try_error('insert','sms',50)，在发送短信前，校验函数返回值try_error('check','sms',50)，如果是1表示已经达到上限

2，限制同一手机号内一天最多发送10条短信，函数格式为try_error('insert','sms_mobile',10,$mobile)

3，限制同一IP10秒内只能发送一次短信try_error('insert','sms_mobile','','',10)

4，限制同一手机号10秒内只能发送一次短信try_error('insert','sms_mobile','',$mobile,10)

*/

function try_error($type,$name,$max_error_num=0,$ip='',$miao=0){

	if($max_error_num==0){

		$max_error_num=MAX_ERROR_LOGIN_NUM;

	}

	if($ip==''){

		$ip=$_SERVER['REMOTE_ADDR'];

	}

	$error_ip_dir=DDROOT.'/data/temp/session/'.date('Ymd').'/'.$name.'_'.$ip.'.txt';

	$time=filemtime($error_ip_dir);

	if($type=='insert'){

		if(file_exists($error_ip_dir)){

			$error_login=(int)file_get_contents($error_ip_dir);

			$error_login++;

			

		}

		else{

			$error_login=1;

		}

		create_file($error_ip_dir,$error_login);

	}

	elseif($type=='delete'){

		unlink($error_ip_dir);

	}

	elseif($type=='check'){

		if($miao>0){

			if(time()-$time<$miao){

				return 1;

			}

		}

		$error_login=(int)file_get_contents($error_ip_dir);

		if($error_login>=$max_error_num){

			return 1;

		}

		else{

			return 0;

		}

	}

}



function recurse_copy( $src, $dst ){

    $handle = opendir( $src );

    mkdir( $dst );

    while( false !== ( $file = readdir( $handle ) ) ) {

        if( ( $file != '.' ) && ( $file != '..' ) ) {

            if( is_dir( $src . '/' . $file ) ){

                recurse_copy( $src . '/' . $file, $dst . '/' . $file );

            }

            else {

                copy( $src . '/' . $file, $dst . '/' . $file );

            }

        }

    }

    closedir( $handle );

} 



function dd_parse_str($str,&$arr){

	parse_str($str,$arr);

	StopAttack($arr);

}























//黄小建添加



function dd_slides($duoduo,$num=10,$fileds='img,url,title',$cid){

	$slides=$duoduo->select_all('slides',$fileds,'hide=0 and cid='.$cid.' order by sort desc,id desc limit 0,'.$num);

	return $slides;

}

function dan_show($duoduo,$cid){

	$dan=$duoduo->select('type','*','id='.$cid);

	return $dan;

	}

function html_str($str,$num){

	$sstr= preg_replace('/&nbsp;|\s/','', strip_tags($str));

	$sstr=mb_substr($sstr,0,$num,'utf-8');

	return $sstr;

	}

//网站前台公告

function dd_article($duoduo,$cid,$num=4,$fileds='*'){

	$article=$duoduo->select_all('article',$fileds,'cid="'.$cid.'" and is_show=0 order by sort desc,id desc limit 0,'.$num);

	return $article;

}

//友情链接

function dd_link($duoduo,$num=30,$type=0,$fileds='*'){

	

	$yqlj=$duoduo->select_all('link',$fileds,'1=1 order by sort desc limit '.$num);

	return $yqlj;

}

function dd_all_acticle($duoduo,$num,$fileds='*',$sort){

	if ($sort!="")

	    $order="order by $sort desc";

		else

		$order="order by sort desc";

	$article=$duoduo->select_all('article',$fileds,'1=1 '.$order.',id desc limit 0,'.$num);

	return $article;	

	}

function dd_article_tj($duoduo,$cid,$num=4,$fileds='*'){

	$article=$duoduo->select_all('article',$fileds,"cid=$cid and tj=1 and is_show=0 order by sort desc,id desc limit 0,".$num);

	return $article;

}

function dd_article_ntj($duoduo,$cid,$num=4,$fileds='*'){

	$article=$duoduo->select_all('article',$fileds,"cid=$cid and tj=0 and is_show=0 order by sort desc,id desc limit 0,".$num);

	return $article;

}

function dd_type_nav($duoduo,$num=10,$fileds='*',$pid=0){

	$article=$duoduo->select_all('type',$fileds,"tag='article' and isshow=1 and pid=$pid order by sort desc,id desc limit 0,".$num);

	return $article;

}

function dd_position($duoduo,$cid){

	$row=$duoduo->select('type','pid,id,model_id,title,jian_mod,jian_act','id='.$cid);



	$row1=$duoduo->select("model","*","id=".$row['model_id']);



	$arr[]=array("id"=>$row['id'],"title"=>$row['title']);

	while ($row['pid']!=0){

		$row=$duoduo->select('type','pid,id,title,model_id,jian_mod,jian_act','id='.$row['pid']);

		$row1=$duoduo->select("model","*","id=".$row['model_id']);

	$arr[]=array("id"=>$row['id'],"title"=>$row['title']);

	}

	

	$str='<span class="icon-home"></span> &nbsp;'.WEBNAME; 

	  foreach (array_reverse($arr) as $row){

               $str=$str.'><a href="'.list_url($duoduo,$row['id']).'">'.$row['title'].'</a>';    

	  }	

	return $str;

	}

function dd_cid($duoduo,$cid){

	$row=$duoduo->select('type','pid,id,title','id='.$cid);

	//$arr[]=array("id"=>$row['id'],"title"=>$row['title']);

	while ($row['pid']!=0){

		$row=$duoduo->select('type','pid,id,title','isshow=1 and id='.$row['pid']);

		$cid=$row['id'];

	}

	return $cid;

	}	

function dd_cid_ad($duoduo,$cid){

	$row=$duoduo->select('type','pid,id,title,img_ad','id='.$cid);

	if ($row['img_ad']!=""){

		 return $row['img_ad'];

		 break;

		}

	  

	//$arr[]=array("id"=>$row['id'],"title"=>$row['title']);

	while ($row['pid']!=0){

		$row=$duoduo->select('type','pid,id,title,img_ad','isshow=1 and id='.$row['pid']);

		$cid=$row['id'];

		if ($row['img_ad']!=""){

			 return $row['img_ad'];

			 break;

			}

	       

	}

	return "";

	}	

function get_sons($duoduo,$cid,$str){

	global $str; 

	$row=$duoduo->select_all('type','pid,id,title','isshow=1 and pid='.$cid);



		

   // $result = mysql_query("select id from dede_arctype where reid = {$type}");

    foreach ($row as $r){

		

        $str=$str.",".$r['id'];

		//echo $str."_".$cid."<br>";

        get_sons($duoduo, $r['id'],$str);

    }

}		



function dd_fcid($duoduo,$cid){

	$row=$duoduo->select('type','pid,id,title','isshow=1 and  pid='.$cid.' order by sort desc,id desc');



	//$arr[]=array("id"=>$row['id'],"title"=>$row['title']);

	while ($row['id']!=0){

		$cid=$row['id'];

		$row=$duoduo->select('type','pid,id,title','isshow=1 and pid='.$row['id'].' order by sort desc,id desc');

		

		

	}

	return $cid;

	}	

function dd_article_sons($duoduo,$cid,$num=4,$tj=0,$strat_num=0,$q){

global $str; 

$str="";

	$where="";

	if($tj==2 or $tj==1)

	  $where="tj=$tj";

	  else

	  $where="1=1";

	  



	if ($q)

	    $where=$where." and (title like '%".$q."%' or content like '%".$q."%')";

	get_sons($duoduo,$cid,$str);

	$str=$cid.$str;

	 

	$sql="select * from xia_article where $where and cid in ($str) order by sort desc,id desc limit $strat_num,$num";



	$article=$duoduo->sql_to_array($sql);

	//$article=$duoduo->select_all('article',$fileds,'cid="'.$cid.'" and is_show=0 order by sort desc,id desc limit 0,'.$num);

	return $article;

}	





function dd_product_sons($duoduo,$cid,$num=4,$tj=0,$strat_num=0,$q){

global $str; 

$str="";

	$where="";

	if($tj==2 or $tj==1)

	  $where="tj=$tj";

	  else

	  $where="1=1";

	  



	if ($q)

	    $where=$where." and (title like '%".$q."%' or content like '%".$q."%')";

	get_sons($duoduo,$cid,$str);

	$str=$cid.$str;

	 

	$sql="select * from xia_product where $where and cid in ($str) order by sort desc,id desc limit $strat_num,$num";



	$article=$duoduo->sql_to_array($sql);

	//$article=$duoduo->select_all('article',$fileds,'cid="'.$cid.'" and is_show=0 order by sort desc,id desc limit 0,'.$num);

	return $article;

}	







function get_types($duoduo,$cid){

	$row=$duoduo->select_all('type','*','isshow=1 and pid='.$cid.' order by sort desc,id desc');

	return $row;

	}

	

function get_str($content,$num){

	$content=str_replace("&nbsp;","",$content);

	return mb_substr(strip_tags($content),0,$num,'utf-8');

	}	

function list_url($duoduo,$cid){

	

	   $row=$duoduo->select('type','*','id='.$cid);

	 

	   if (!empty($row['url'])){

		    return $row['url'];

		   }else{

			$row1=$duoduo->select("model","*","id=".$row['model_id']);

			

			return u($row1['mod'],$row1['act'],array('cid'=>$row['id']));

		}

	}





function get_content($cid){

	 global $duoduo;

	 $content=$duoduo->select('type','content','id='.$cid);

	 return $content;

	}

	

function ObjectToArray($o) {

  if(is_object($o)) $o = get_object_vars($o);

  if(is_array($o))

     foreach($o as $k=>$v) $o[$k] = ObjectToArray($v);

  return $o;

}





function aurl($id){

	  global $duoduo;

	  $url=$duoduo->select("article","jian_url","id=".$id);

	  if ($url)

	      return $url;

		  else

		  return u("article","view",array('id'=>$id));

	   

	}

	

function zhe_page($totle, $displaypg = 20, $url = '', $wjt=0, $shownum = 1, $showlvtao = 7) {
		$page = $_GET['page']?(int)$_GET['page']:1;
		if($wjt==0){
			$url.='&page';
		}
		elseif($wjt==1){
		    $url=preg_replace('/\.html$/','',$url);
		}

		//页码计算：
		$lastpg = ceil($totle / $displaypg); //最后页，也是总页数
		$page = min($lastpg, $page);
		$prepg = $page -1; //上一页
		$nextpg = ($page == $lastpg ? 0 : $page +1); //下一页
		$firstcount = ($page -1) * $displaypg;

		//如果只有一页则跳出函数：
		if ($lastpg <= 1)
			return false;

		if ($wjt == '1') {
			if ($prepg)
				$pagenav .= "<a href='$url-$prepg.html' class='pg-prev'>上一页</a>";
			else
				$pagenav .= "<span class='pg-prev'>上一页</span>";
			
		} else {
			if ($prepg)
				$pagenav .= "<a href='$url=$prepg' class='pg-prev'>上一页</a>";
			else
				$pagenav .= "<span class='pg-prev'>上一页</span>";
		}
		if ($shownum == 1) {
			$o = $showlvtao; //中间页码表总长度，为奇数
			$u = ceil($o / 2); //根据$o计算单侧页码宽度$u
			$f = $page - $u; //根据当前页$currentPage和单侧宽度$u计算出第一页的起始数字
			//str_replace('{p}',,$fn)//替换格式
			if ($f < 0) {
				$f = 0;
			} //当第一页小于0时，赋值为0
			$n = $lastpg; //总页数,20页
			if ($n < 1) {
				$n = 1;
			} //当总数小于1时，赋值为1
			if ($page == 1) {
				$pagenav .= '<span>1</span>';
			} else {
				if ($wjt == '1') {
					$pagenav .= "<a href='$url-1.html'>1</a>";
				} else {
					$pagenav .= "<a href='$url=1'>1</a>";
				}
			}
			///////////////////////////////////////
			for ($i = 1; $i <= $o; $i++) {
				if ($n <= 1) {
					break;
				} //当总页数为1时
				$c = $f + $i; //从第$c开始累加计算
				if ($i == 1 && $c > 2) {
					$pagenav .= '<i>...</i>';
				}
				if ($c == 1) {
					continue;
				}
				if ($c == $n) {
					break;
				}
				if ($c == $page) {
					$pagenav .= '<span>' . $page . '</span>';
				} else {
					if ($wjt == '1') {
						$pagenav .= "<a href='$url-$c.html'>$c</a>";
					} else {
						$pagenav .= "<a href='$url=$c'>$c</a>";
					}
				}
				if ($i == $o && $c < $n -1) {
					$pagenav .= '<i>...</i>';
				}
				if ($i > $n) {
					break;
				} //当总页数小于页码表长度时	
			}
			if ($page == $n && $n != 1) {
				$pagenav .= '<span>' . $n . '</span>';
			} else {
				if ($wjt == '1') {
					$pagenav .= "<a href='$url-$n.html'>$n</a>";
				} else {
					$pagenav .= "<a href='$url=$n'>$n</a>";
				}
			}
		}

		if ($wjt == '1') {
			if ($nextpg)
				$pagenav .= "<a href='$url-$nextpg.html' class='pg-next'>下一页</a>";
			else
				$pagenav .= "<span class='pg-next'>下一页</span>";
			;
		} else {
			if ($nextpg)
				$pagenav .= "<a href='$url=$nextpg' class='pg-next'>下一页</a>";
			else
				$pagenav .= "<span class='pg-next'>下一页</span>";
			;
		}
		return $pagenav;
	}

	function create_qrcode($url){

	

	include DDROOT."/jian_file/code/qrlib.php";

	QRcode::png($url, false, "l", 9, 2);

	}

	

function sends($mobile,$code){

	global $webset;

	$sendUrl = 'http://v.juhe.cn/sms/send'; //短信接口的URL

  

$smsConf = array(

    'key'   => $webset['sms_key'], //您申请的APPKEY

    'mobile'    => $mobile, //接受短信的用户手机号码

    'tpl_id'    => $webset['sms_moban_id'], //您申请的短信模板ID，根据实际情况修改

    'tpl_value' =>"#code#=$code" //您设置的模板变量，根据实际情况修改

);

 

$content = juhecurl($sendUrl,$smsConf,1); //请求发送短信

 

if($content){

    $result = json_decode($content,true);

    $error_code = $result['error_code'];

    if($error_code == 0){

        //状态为0，说明短信发送成功

       // echo "短信发送成功,请及时查收：".$result['result']['sid'];

	   return "短信发送成功,请及时查收";

    }else{

        //状态非0，说明失败

        $msg = $result['reason'];

        return "短信发送失败(".$error_code.")：".$msg;

    }

}else{

    //返回内容异常，以下可根据业务逻辑自行修改

    return "请求发送短信失败";

}

	

	}

	

	

/**

 * 请求接口返回内容

 * @param  string $url [请求的URL地址]

 * @param  string $params [请求的参数]

 * @param  int $ipost [是否采用POST形式]

 * @return  string

 */

function juhecurl($url,$params=false,$ispost=0){

    $httpInfo = array();

    $ch = curl_init();

    curl_setopt( $ch, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1 );

    curl_setopt( $ch, CURLOPT_USERAGENT , 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.172 Safari/537.22' );

    curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT , 30 );

    curl_setopt( $ch, CURLOPT_TIMEOUT , 30);

    curl_setopt( $ch, CURLOPT_RETURNTRANSFER , true );

    if( $ispost )

    {

        curl_setopt( $ch , CURLOPT_POST , true );

        curl_setopt( $ch , CURLOPT_POSTFIELDS , $params );

        curl_setopt( $ch , CURLOPT_URL , $url );

    }

    else

    {

        if($params){

            curl_setopt( $ch , CURLOPT_URL , $url.'?'.$params );

        }else{

            curl_setopt( $ch , CURLOPT_URL , $url);

        }

    }

    $response = curl_exec( $ch );

    if ($response === FALSE) {

        //echo "cURL Error: " . curl_error($ch);

        return false;

    }

    $httpCode = curl_getinfo( $ch , CURLINFO_HTTP_CODE );

    $httpInfo = array_merge( $httpInfo , curl_getinfo( $ch ) );

    curl_close( $ch );

    return $response;

}





 function hnum($sale_id,$pid,$sdate,$edate){

	

	 global $duoduo;

	 $where="and 1=1";

	 if ($pid>0)

	     $where ="and pid=".$pid;

	 $users=$duoduo->select_all("user","id","tjr=$sale_id");

	 

	 $str="";

	 foreach ($users as $k=>$row){

		  if ($k==0)

		      $str=$row['id'];

			  else

		     $str=$str.",".$row['id'];

		 } 

	 if ($sdate){

		  $sdate=strtotime($sdate);

		   $where.=' and addtime>='.$sdate;

	}

	if ($edate){

		  $edate=strtotime($edate);

		  $edate=$edate+86400;

		  $where.=' and addtime<'.$edate;

	}

	 $num=$duoduo->count("browse","uid in ($str) $where");

	

	 return $num;

	 

}





function pnum($pid){

	 global $duoduo;

	 $num=$duoduo->count("browse","pid=$pid");

	 return $num;

	 

}

function pnum1($pid,$yuser,$sdate,$edate){

	 global $duoduo;

	 $where="1=1";

	 if ($yuser>0){

		  $users=$duoduo->select_all("user","id","tjr=".$yuser);

	       $str="";

			foreach ($users as $k=>$row){

				  if ($k==0)

					  $str=$row['id'];

					  else

					 $str=$str.",".$row['id'];

			 }

	      $where.=" and uid in ($str)";

		 

		 

		 }

	

	  if ($sdate){

		  $sdate=strtotime($sdate);

		   $where.=' and addtime>='.$sdate;

	}

	if ($edate){

		  $edate=strtotime($edate);

		  $edate=$edate+86400;

		  $where.=' and addtime<'.$edate;

	}



	 $num=$duoduo->count("browse","pid=$pid and $where");

	 return $num;

	 

}

function tjrs($uid,$sdate,$edate){

	 global $duoduo;

	 $where="1=1";

	  if ($sdate){

		 

		   $where.=" and regtime>='$sdate'";

	}

	if ($edate){

		  $edate=strtotime($edate);

		  $edate=$edate+86400;

		  $edate=date("Y-m-d",$edate);

		

		  $where.=" and regtime<'$edate'";

	}

	

	 $num=$duoduo->count("user","tjr=$uid and $where");

	 return $num;

	

	}

	

//图像等比例缩放函数

/**

    *等比例缩放函数（以保存新图片的方式实现）

    *@param string $picname  被缩放的处理图片源

    *@param int $maxx 缩放后图片的最大宽度

    *@param int $maxy 缩放后图片的最大高度

    *@param string $newfilename 保存新文件

    *

**/

     function imageUpdatesize($picname,$maxx=100,$maxy=100,$newfilename){

        $info=getimageSize($picname);//获取图片的基本信息 

        $w=$info[0];//获取宽度

        $h=$info[1];//获取高度

        //获取图片的类型并为此创建对应图片资源

        switch($info[2]){

            case 1://gif

                  $im=imagecreatefromgif($picname);    

                  break;                  

            case 2://jpg

                  $im=imagecreatefromjpeg($picname);

                  break;

            case 3://png

                 $im=imagecreatefrompng($picname);  

                  break;

            default:

                 die("图像类型错误");

        }

        //计算缩放比例

        if(($maxx/$w)>($maxy/$h)){

            $b=$maxy/$h;

        }else{

            $b=$maxx/$w;    

        }

        //计算出缩放后的尺寸

       // $nw=floor($w*$b);

       // $nh=floor($h*$b);

	   

	   $nw=$maxx;  //强制修改

        $nh=$maxy;

        //创建一个新的图像源（目标图像）

        $nim=imagecreatetruecolor($nw,$nh);

        //执行等比缩放

        imagecopyresampled($nim,$im,0,0,0,0,$nw,$nh,$w,$h);

        //输出图像（根据源图像的类型，输出为对应的类型）

        $picinfo=pathinfo($picname);//解析源图像的名字和路径信息

        $newpicname=$newfilename;

        switch($info[2]){

            case 1:

                imagegif($nim,$newpicname);

                break;

            case 2:

                imagejpeg($nim,$newpicname);

                break;

            case 3:

                imagepng($nim,$newpicname);

                break;                

            

        }

        //释放图片资源

        imagedestroy($im);

        imagedestroy($nim);

        //返回结果

        return $newpicname;

     }

function jian_mark_pic($img,$img1,$x,$y,$newfile="images/ac.jpg")



  {



	$dst_path = $img;



	$src_path = $img1;



	//创建图片的实例



	$dst = imagecreatefromstring(file_get_contents($dst_path));



	$src = imagecreatefromstring(file_get_contents($src_path));



	//获取水印图片的宽高



	list($src_w, $src_h) = getimagesize($src_path);



	//将水印图片复制到目标图片上，最后个参数50是设置透明度，这里实现半透明效果



	//imagecopymerge($dst, $src, 10, 10, 0, 0, $src_w, $src_h, 100);



	



	//如果水印图片本身带透明色，则使用imagecopy方法



	 imagecopy($dst, $src, $x, $y, 0, 0, $src_w, $src_h);



	



	//输出图片



	list($dst_w, $dst_h, $dst_type) = getimagesize($dst_path);



	



	



	switch ($dst_type) {



		case 1://GIF



			//header('Content-Type: image/gif');



			imagegif($dst);



			break;



		case 2://JPG



			//header('Content-Type: image/jpeg');



			imagejpeg($dst,$newfile,100);  //图片质量，第三个参数



			break;



		case 3://PNG



			//header('Content-Type: image/png');



			imagepng($dst,$newfile);



			break;



		default:



			break;



	}



	imagedestroy($dst);



	imagedestroy($src);



	   



  }

  

  

  function jian_mark_zhi($img,$title,$jian_x,$jian_y){



	  $dst_path = $img;



//创建图片的实例



$dst = imagecreatefromstring(file_get_contents($dst_path));







//打上文字



$font = DDROOT.'/images/simsun.ttc';//字体路径







$black = imagecolorallocate($dst, 0, 0, 0);//字体颜色



imagefttext($dst, 14, 0, $jian_x, $jian_y, $black, $font, $title);  //16字体大小，0文字的倾斜角度，如果是0度代表文字从左往右，如果是90度代表从上往，

imagefttext($dst, 14, 0, $jian_x, $jian_y, $black, $font, $title);  //16字体大小，0文字的倾斜

//输出图片



list($dst_w, $dst_h, $dst_type) = getimagesize($dst_path);



switch ($dst_type) {



    case 1://GIF



      //  header('Content-Type: image/gif');



        imagegif($dst,$img,100);



        break;



    case 2://JPG



      //  header('Content-Type: image/jpeg');



        imagejpeg($dst,$img,100);



        break;



    case 3://PNG



       // header('Content-Type: image/png');



        imagepng($dst,$img,9);



        break;



    default:



        break;



}



imagedestroy($dst);



	  } 





function short_url($longurl){

	

	$html=file_get_contents("http://api.t.sina.com.cn/short_url/shorten.json?source=31641035&url_long=".$longurl);

	$row=json_decode($html,true);

	return ($row[0]['url_short']); 

	

	}

//删除目录 以及目录 下的文件

function delDirAndFile( $dirName ) 



{ 



if ( $handle = opendir( "$dirName" ) ) { 



while ( false !== ( $item = readdir( $handle ) ) ) { 



if ( $item != "." && $item != ".." ) { 



if ( is_dir( "$dirName/$item" ) ) { 



delDirAndFile( "$dirName/$item" ); 



} else { 



if( unlink( "$dirName/$item" ) )



echo ""; 



} 



} 



} 



closedir( $handle ); 



if( rmdir( $dirName ) )



echo ""; 



} 



} 

//删除目录 下的所有文件，不包含目录 

function delFileUnderDir( $dirName="../Smarty/templates/templates_c" ) 



{ 



if ( $handle = opendir( "$dirName" ) ) { 



while ( false !== ( $item = readdir( $handle ) ) ) { 



if ( $item != "." && $item != ".." ) { 



if ( is_dir( "$dirName/$item" ) ) { 



delFileUnderDir( "$dirName/$item" ); 



} else {//开源代码phpfensi.com 



if( unlink( "$dirName/$item" ) )echo ""; 



} 



} 



} 



closedir( $handle ); 



} 



} 

/**

 * @param $dir 目标目录路径

 * @param $zip ZipArchive类对象

 * @param $prev

 */

function compressDir($dir, $zip, $prev='.')

{

    $handler = opendir($dir);

    $basename = basename($dir);

    $zip->addEmptyDir($prev . '/' . $basename);

    while($file = readdir($handler))

    {

        $realpath = $dir . '/' . $file;

        if(is_dir($realpath))

        {

            if($file !== '.' && $file !== '..')

            {

                $zip->addEmptyDir($prev . '/' . $basename . '/' . $file);

                compressDir($realpath, $zip, $prev . '/' . $basename);

            }

        }else

        {

            $zip->addFile($realpath, $prev. '/' . $basename . '/' . $file);

        }

    }



    closedir($handler);

    return null;

}





function zip($where="1=1",$sid){



	 global $duoduo;

	 include DDROOT."/jian_file/code/qrlib.php";

	 $dir=DDROOT."/upload/ewm/".$sid;

	  delFileUnderDir($dir);

	 if (!file_exists($dir)){

		 

            mkdir ($dir,0777,true);

		}

	

     $rows=$duoduo->select_all("product","id,title","1=1 ".$where);

	 foreach ($rows as $row){

		 

		  watermark($row['id'],$sid);

		

		 

	 }

	 

	 $zip = new ZipArchive();

	$res = $zip->open($dir."/$sid.zip", ZipArchive::OVERWRITE | ZipArchive::CREATE);

	if($res)

	{

		compressDir($dir, $zip);

		$zip->close();

	}

	

	header('Content-Type:text/html;charset=utf-8');

	header("Content-disposition:attachment;filename=$sid.zip");

	$filesize = filesize($dir."/$sid.zip");

	readfile($dir."/$sid.zip");

	header('Content-length:'.$filesize);

	unlink($dir."/$sid.zip");

}



function watermark($uid,$pid){

	 global $duoduo;

	

	 global $duoduo;

	 $dir=DDROOT."/upload/ewm/".$pid;

	  if (!file_exists($dir))

            mkdir ($dir,0777,true);

	  $row=$duoduo->select("product","id,title,bg_img","id=$pid");

	

	  $bg=DDROOT."/".$row['bg_img'];

   

	  $url=u("product","view",array("id"=>$pid,"rec"=>$uid));	

      $url=SITEURL."/".$url;

	  $ewm_url= $dir."/".$uid."ewm.png";

	  QRcode::png($url, $ewm_url, "l", 2.65, 2);

	  jian_mark_pic($bg,$ewm_url,497,408,  $dir."/$uid.jpg");

	  unlink($ewm_url);

	  unlink($newfile);

	

	

}







function txt($where="1=1",$sid){



	 global $duoduo;

	 $str="";

     $rows=$duoduo->select_all("product","id,title","1=1 ".$where);

	 foreach ($rows as $row){

	      

		      $url=SITEURL."/".u("product","view",array("id"=>$row['id'],"rec"=>$sid));

			   $url=urlencode($url);	 

				$short_url=short_url($url);

							

			

		   $str=$str. $row['title']."      ".$short_url."\r\n";

		   

		   

		      	 

	 

	 }

	

	 

		header("Content-type: application/octet-stream"); 

		header("Accept-Ranges: bytes"); 

		header("Content-Disposition: attachment; filename = $sid.txt"); //文件命名

		header("Expires: 0"); 

		header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 

		header("Pragma: public"); 

		echo $str;



	 

}



function get_title($table,$id,$field){

	    global $duoduo;

		if ($field)

		   $title=$field;

		   else

		   $title="title";

	    $title=$duoduo->select("$table",$title,"id=$id");

		return $title;

	}

	

function status($type){

   if ($type==1)

      return array(1=>"审核中",2=>"审核通过",3=>"审核没通过");	

	  else

   return array(0=>"请选择状态",1=>"审核中",2=>"审核通过",3=>"审核没通过");	

}

function get_name($id){

	

	global $duoduo;

	// $title=$duoduo->select("user","realname","id=$id");

//	 if (empty($title))

	     $title=$duoduo->select("user","ddusername","id=$id");

	 return $title;

	}

	

function get_user_arr($show){

	   global $duoduo;

	   $rows=$duoduo->select_all("user","id,realname","1=1 order by id desc");

	   if ($show==1){

	

		  $arrs[0]="全部";

		 }

	  foreach ($rows as $row){



		  $arrs[$row['id']]=$row['realname'];

		  }

	

	return  $arrs;

	}

	

function get_product_arr($show){

	   global $duoduo;

	   $rows=$duoduo->select_all("product","id,title","1=1 order by sort desc, id desc");

	   if ($show==1){

	

		  $arrs[0]="全部";

		 }

	  foreach ($rows as $row){



		  $arrs[$row['id']]=$row['title'];

		  }

	

	return  $arrs;

	}

	

function yc_phone($str){

    $str=$str;

    $resstr=substr_replace($str,'****',3,4);

    return $resstr;

}



/*html相关函数*/

function select1($array, $id = 10000, $name,$attr='',$return=0) {



	

	$i = 0;

	$s = '<select  name="'.$name.'" id="'.$name.'" class="form-control" '.$attr.'>';

	foreach ($array as $key => $val) {

		if ($id == $key && isset($id)){

		    $select = 'selected';

		}

		else{

			$select = '';

		}

		$s.= "<option value='$key' $select style='background:$bg'>$val</option>";

		$i++;

	}

	$s.= "</select>";

	if($return==1){

		return $s;

	}

	else{

		echo $s;

	}

} 



function get_arr($cid,$show,$type_title){

	   global $duoduo,$gid;

	   $rows=$duoduo->select_all("arr","*","cid=$cid  order by sort desc ,id desc");

	   if ($show==1){

		   $title=$duoduo->select("arrtype","title","id=".$cid);

		   if ($type_title)

		      $arrs[0]="$type_title";

		  else

		      $arrs[0]="全部";

		 }

	  foreach ($rows as $row){



		  $arrs[$row['id']]=$row['title'];

		  }

	

	return  $arrs;

	}

function get_arr_id($title){

	 global $duoduo,$gid;

	 $id=$duoduo->select("arr","id","title='$title' and gid=$gid");

	 return $id;

	

}



function dd_excel($where="1=1",$type){

	

 global $duoduo,$dduser;

 

 $status_arr=status();

  if (empty($where))

     $where="1=1";

 $fields = array(

    array("field"=>"title","title"=>"账号"),

	array("field"=>"pid","title"=>"产品"),

	array("field"=>"uid","title"=>"负责管理"),

	array("field"=>"mobile","title"=>"电话"),

    array("field"=>"status","title"=>"审核状态"),

	array("field"=>"addtime","title"=>"提交时间"),

	array("field"=>"stime","title"=>"审核时间")

	



);

 

	 

	

   $list=$duoduo->select_all("dd","*",$where);

   $list=array_reverse($list);

   foreach ($list as $k=>$row){



	  

	   $status=$status_arr[$row['status']];

	   $list[$k]['status']=$status;

	   $list[$k]['pid']=get_title("product",$row['pid']);

	   $list[$k]['uid']=get_name($row['uid']);

	   $list[$k]['addtime']=date("Y-m-d H:i:s",$row['addtime']);

	   if ($row['stime'])

	       $list[$k]['stime']=date("Y-m-d H:i:s",$row['stime']);

   }

  

   import_excel("audit".date("Y-m-d",time()),$fields,$list);

}

function import_excel($filename,$title,$data){

header("Content-type:application/vnd.ms-excel");

header("Content-Disposition:filename=".$filename.".xls");



$str="";

foreach ($title as $row){

	  $str=$str." <td>".$row['title']."</td>";

	   

}



echo '<table> <tr style="border:#ccc 0.5px solid; text-align:center">



                          '.$str.'

                          

                         

                        </tr>';





foreach($data as $row){

	

	$str="";

	foreach ($title as $r){

	  $str=$str." <td>".$row[$r['field']]."</td>";

	   

     }

    echo '<tr style="border:#ccc 0.5px solid;text-align:center">';

    echo $str;

    echo '</tr>';

}

echo "</table>";	

}





function get_groups($show,$pid=0,$title="请选择分组"){

	   global $duoduo;

	 

	   $rows=$duoduo->select_all("group","*","pid=$pid order by sort desc ,id desc");

	

	    if ($show==1){

		  array_unshift($rows,array("title"=>$title,"id"=>0));

		 }

		

	  foreach ($rows as $row){

		  

		

		  if ($row['title']=="请选择分组")

		    $gongs[$row['id']]=$row['title'];

		  elseif($pid>0)

		    $gongs[$row['id']]=$row['title'];

		   else

		    $gongs[$row['id']]=$row['title'];

		   

		   

		   

		  }

	

	return  $gongs;

	}

	

	//php获取中文字符拼音首字母 

function getFirstCharter($str){ 

 if(empty($str)){return '';} 

 $fchar=ord($str{0}); 

 if($fchar>=ord('A')&&$fchar<=ord('z')) return strtoupper($str{0}); 

 $s1=iconv('UTF-8','gb2312',$str); 

 $s2=iconv('gb2312','UTF-8',$s1); 

 $s=$s2==$str?$s1:$str; 

 $asc=ord($s{0})*256+ord($s{1})-65536; 

 if($asc>=-20319&&$asc<=-20284) return 'A'; 

 if($asc>=-20283&&$asc<=-19776) return 'B'; 

 if($asc>=-19775&&$asc<=-19219) return 'C'; 

 if($asc>=-19218&&$asc<=-18711) return 'D'; 

 if($asc>=-18710&&$asc<=-18527) return 'E'; 

 if($asc>=-18526&&$asc<=-18240) return 'F'; 

 if($asc>=-18239&&$asc<=-17923) return 'G'; 

 if($asc>=-17922&&$asc<=-17418) return 'H'; 

 if($asc>=-17417&&$asc<=-16475) return 'J'; 

 if($asc>=-16474&&$asc<=-16213) return 'K'; 

 if($asc>=-16212&&$asc<=-15641) return 'L'; 

 if($asc>=-15640&&$asc<=-15166) return 'M'; 

 if($asc>=-15165&&$asc<=-14923) return 'N'; 

 if($asc>=-14922&&$asc<=-14915) return 'O'; 

 if($asc>=-14914&&$asc<=-14631) return 'P'; 

 if($asc>=-14630&&$asc<=-14150) return 'Q'; 

 if($asc>=-14149&&$asc<=-14091) return 'R'; 

 if($asc>=-14090&&$asc<=-13319) return 'S'; 

 if($asc>=-13318&&$asc<=-12839) return 'T'; 

 if($asc>=-12838&&$asc<=-12557) return 'W'; 

 if($asc>=-12556&&$asc<=-11848) return 'X'; 

 if($asc>=-11847&&$asc<=-11056) return 'Y'; 

 if($asc>=-11055&&$asc<=-10247) return 'Z'; 

 return null; 

}

function get_select_game($type){



   global $duoduo;

   $rows=$duoduo->select_all("game","id,title","1=1 order by  sort desc ,id desc");



   if ($type==1)

      $temp[0]="全部";

   foreach ($rows as $row){

	      $temp[$row['id']]=$row['title'];

	   

	   }

	return $temp;

	  

}





function get_game(){

	

	 global $duoduo;

	 $domain=$_SERVER['HTTP_HOST'];//获取当前域名 

	 $game=$duoduo->select("game","*","domain='$domain'");

	  return $game;

	}

function get_article_img($id){

	global $duoduo,$webset;

	$row=$duoduo->select("article","img,content","id=$id");

	if ($row['img'])

	   return $row['img'];

	   

	$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";  

	preg_match_all($pattern,$row['content'],$matchContent); 

	if(isset($matchContent[1][0])){ 

	  $temp=$matchContent[1][0]; 

	}else{ 

	  $temp=$webset['aimg'];//需要在相应位置放置4张jpg的文件，名称为1，2，3，4 

	} 

	

	return $temp;

	}

	

	function is_Date($str,$format='Y-m-d'){ 



    $unixTime_1=strtotime($str); 



    if(!is_numeric($unixTime_1)) return false; //如果不是数字格式，则直接返回 



    $checkDate=date($format,$unixTime_1); 



    $unixTime_2=strtotime($checkDate); 



    if($unixTime_1==$unixTime_2){ 



        return true; 



    }else{ 



        return false; 



    } 



}



function isAllChinese($str){

        //新疆等少数民族可能有·

        if(strpos($str,'·')){

            //将·去掉，看看剩下的是不是都是中文

            $str=str_replace("·",'',$str);

            if(preg_match('/^[\x7f-\xff]+$/', $str)){

                return true;//全是中文

            }else{

                return false;//不全是中文

            }

        }else{

            if(preg_match('/^[\x7f-\xff]+$/', $str)){

                return true;//全是中文

            }else{

                return false;//不全是中文

            }

        }



}





function is_idcard( $id ) 

{ 

  $id = strtoupper($id); 

  $regx = "/(^\d{15}$)|(^\d{17}([0-9]|X)$)/"; 

  $arr_split = array(); 

  if(!preg_match($regx, $id)) 

  { 

    return FALSE; 

  } 

  if(15==strlen($id)) //检查15位 

  { 

    $regx = "/^(\d{6})+(\d{2})+(\d{2})+(\d{2})+(\d{3})$/"; 

  

    @preg_match($regx, $id, $arr_split); 

    //检查生日日期是否正确 

    $dtm_birth = "19".$arr_split[2] . '/' . $arr_split[3]. '/' .$arr_split[4]; 

    if(!strtotime($dtm_birth)) 

    { 

      return FALSE; 

    } else { 

      return TRUE; 

    } 

  } 

  else      //检查18位 

  { 

    $regx = "/^(\d{6})+(\d{4})+(\d{2})+(\d{2})+(\d{3})([0-9]|X)$/"; 

    @preg_match($regx, $id, $arr_split); 

    $dtm_birth = $arr_split[2] . '/' . $arr_split[3]. '/' .$arr_split[4]; 

    if(!strtotime($dtm_birth)) //检查生日日期是否正确 

    { 

      return FALSE; 

    } 

    else

    { 

      //检验18位身份证的校验码是否正确。 

      //校验位按照ISO 7064:1983.MOD 11-2的规定生成，X可以认为是数字10。 

      $arr_int = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2); 

      $arr_ch = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2'); 

      $sign = 0; 

      for ( $i = 0; $i < 17; $i++ ) 

      { 

        $b = (int) $id{$i}; 

        $w = $arr_int[$i]; 

        $sign += $b * $w; 

      } 

      $n = $sign % 11; 

      $val_num = $arr_ch[$n]; 

      if ($val_num != substr($id,17, 1)) 

      { 

        return FALSE; 

      } //phpfensi.com 

      else

      { 

        return TRUE; 

      } 

    } 

  } 

  

} 



//判断是否是正确的邮箱格式;

  	function isEmail($email){

   		$mode = '/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/';

   		if(preg_match($mode,$email)){

  			return true;

 		}

  		else{

 			return false;

		}



	}

function get_status($type){

	if ($type==1)

	return array(0=>"全部",1=>"待付款",2=>"未核验",3=>"已核验");

	else 

	return array(1=>"待付款",2=>"未核验",3=>"已核验");

	}

function pm($pid){

	global $duoduo;

	$sql="select sort from (select @rownum := @rownum+1 as sort,p.id from  (select  num,num1,id from xia_product order by (num1+num) desc)  as p,(select @rownum:=0) as r) pp where pp.id=$pid";



	

	$row=$duoduo->sql_to_array($sql);

	

	  return $row[0]['sort'];

	

	}

	

function get_table($table,$id){

	

	  global $duoduo;

	  

	  $rows=$duoduo->select($table,"*","id=$id");

	  return $rows;

	}

function is_action($pid){

	 global $duoduo;

	 $row=get_table("product",$pid);

	 $time=time();

	 if ($time>=$row['stime'] and $time<$row['etime']){

		 

		 return true;

		 } else{

			 

		return false;	 

	   }

	 

}

function add_dd($pid,$uid){

	

	   global $duoduo;

	    $product=get_table("product",$pid);

	    $data['price']=$product['price'];

	    $data['title']=$product['title'];

		$data['addtime']=time();

		$data['status']=1;  //未付款状态

		$data['uid']=$uid;

		$data['pid']=$pid;

		$data['order_sn']=date('Ymdhis') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT); //订单号

		$id=$duoduo->insert("dd",$data);

		return $id;	   

	

}

function get_ddnums($pid){

	  global $duoduo;

	  $num=$duoduo->count("dd","pid=$pid");

	  $num1=get_title("product",$pid,"dd_num");

	  return ($num+$num1);

	

	}

function obj(){

	 

	global $webset;

		 

	

		 include DDROOT."/jian_file/Wechat/Wechat.class.php";

		 $options = array (

		  'token' => $webset['weixin']['token'], // 填写你设定的key

        'encodingaeskey' => $webset['weixin']['aeskey'], // 填写加密用的EncodingAESKey

        'appid' => $webset['weixin']['appid'], // 填写高级调用功能的app id

        'appsecret' => $webset['weixin']['appsecret'] // 填写高级调用功能的密钥

		);

		$weObj = new Wechat ($options);

		return $weObj;

	 }

	 

function adduser($input){   //$login表示 是否要cookie设置，关注号自动增加账号不用

	

	global $duoduo;
    

	
	      
		   
	
	$user_info['ddusername'] = $input['web'].time();
	$user_info['realname'] =$input['webname'];
	$user_info['regtime'] = SJ;
	
	$user_info['regip'] = get_client_ip();
	
	$user_info['lastlogintime'] = SJ;
	
	$user_info['loginnum'] = 0;
	
	$user_info['money'] = 0;
	
	$user_info['jifenbao'] = 0;
	
	$user_info['jifen'] = 0;
	
	$user_info['level'] = 0;
	
	$user_info['email'] = time()."@163.com";
	
	$user_info['jihuo'] = 1;
	
	$sjs=rand(111111,999999);
	
	$pwd=md5($sjs);
	
	$user_info['ddpassword'] = $pwd;
	$user_info['code'] = $input['web'];
	
	if (get_cookie("tjr"))
	
	    $user_info['tjr'] = get_cookie("tjr");
	
	$user_info['img']=$input['img'];
	
	$user_info['openid']=$input['openid'];
	
	$uid = $duoduo -> insert('user', $user_info, 0); //插入会员	
	if (empty($uid)){
		  //如果用户名重名重新跳一下怕万一
		 jump(u("api","do",array("code"=>$input['web'],"do"=>"go")),"系统繁忙，请重新再试");
	}
	user_login($uid, $pwd, $life);
	
	$data['uid'] = $uid;
	
	$data['username'] =$user_info['ddusername'];
	
	$data['tg'] = "";
	
	$data['webnick'] = WEBNAME.",您的用户名为".$user_info['ddusername'].",密码为".$pwd;
	
	$data['email'] = "";
	
	$msg_zhuce = $duoduo->msg_insert($data, 1); //1号站内信	
	
	echo "<script>
	window.opener.location.reload();//刷新父窗口
    window.close();//关闭当前窗口
	</script>";
	exit();
	//if ($_SESSION['api_login_reffrer'])
//	
//	   jump(u($_SESSION['api_login_reffrer']));
//	   else
//	   jump(u("index","user"));
	
	}

	function is_wechat_browser()

{

    $user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);

    if (strpos($user_agent, 'micromessenger') === false) {

        return false;

    } else {

        return true;

    }

}



function save_weixin_img($url){

	

	 

	}

function get_browse($pid){

	global $duoduo;

	$rows=$duoduo->select_all("browse","*","pid=$pid  order by id desc limit 0,9");

	return $rows;

	

	}

function get_dd_num($uid){

	  

	  global $duoduo;

	  

	  	$status1=$duoduo->count("dd","status=1 and uid=$uid");

		$data['status1']=$status1;

		$status2=$duoduo->count("dd","status=2 and uid=$uid");

		$data['status2']=$status2;

		$status3=$duoduo->count("dd","status=3 and uid=$uid");

		$data['status3']=$status3;

		return $data;

	}

function get_dd_status($status){

	  

	  if ($status==1)

	     return "未付款，未核验";

	   if ($status==2)

	     return "已付款，未核验";

	     if ($status==3)

	     return "已付款，已核验";

	  

	}

	


//生成核验二维码

function shma($order_sn){

	  global $duoduo;

	 

	  $dd=$duoduo->select("dd","*","order_sn='".$order_sn."'");

	

	  $dir=DDROOT."/upload/shma/";

	   if (!file_exists($dir)){

            mkdir ($dir,0777,true);

		}

	

	  $url=u("user","hydd_view",array("id"=>$order_id));	

      $url=SITEURL."/".$url;

	  $ewm_url= $dir."/".$dd['order_sn'].".jpg";

	  QRcode::png($url, $ewm_url, "l", 5.65, 2);

	}

function get_price_zhi($price){

	 $price1=abs($price);

		 if ($price==$price1) {

		     return "增加"; //echo 1

		} else {

		   return "减少"; 

		}

	}

function level($type){

	

	if ($type==1)

	    return array(0=>"全部",1=>"普通会员",2=>"核验会员");

		else 

	    return array(1=>"普通会员",2=>"核验会员");

	}





function get_group_arr($cid,$show,$name){



	   global $duoduo,$dduser;

	   $rows=$duoduo->select_all("group","*","pid=$cid order by sort desc,id desc");

	  

	   if ($show==1){

		   $name=($name)?$name:"全部";

		  $title=$duoduo->select("type","title","id=".$cid);

		  array_unshift($rows,array("title"=>$name,"id"=>0));

		 }

	  foreach ($rows as $row){

            

		  $arrs[$row['id']]=$row['title'];

		  }

	

	return  $arrs;

	}

	

function get_img($id){

	  global $duoduo,$webset;

	  $img=$duoduo->select("doctor","img","id=$id");

	  if (!$img)

	      return $webset['default_img'];

		  else

		  return $img;

	}

function excel_type(){

	

	$fields = array(

 

	array("field"=>"user","title"=>"部课代理人清单"),

	array("field"=>"dlsale","title"=>"代理人活动销量"),

	array("field"=>"dljl","title"=>"代理人活动奖励"),

	array("field"=>"dlhdpm","title"=>"代理人活动排名"),

	array("field"=>"dlyj","title"=>"代理人历史业绩"),

	array("field"=>"dlpm","title"=>"代理人累计排名")



);

$arr=array();

    foreach ($fields as $row){

	

		  $arr[$row['field']]=$row['title'];

		

		  

		}



   return $arr;

	}

function excels(){

	  $fields = array(

 

	     array("table"=>"user","fields"=>array(

			 array("field"=>"yyx","title"=>"营业区"),

			 array("field"=>"bk","title"=>"部/课"),

			  array("field"=>"bkdm","title"=>"部课代码"),

			 array("field"=>"ddusername","title"=>"姓名"),

			 array("field"=>"gong","title"=>"工号"),

		 )),

		   array("table"=>"dlsale","fields"=>array(

			 array("field"=>"gong","title"=>"工号"),

			 array("field"=>"jp","title"=>"产品"),

			 array("field"=>"jpnum","title"=>"产品数量"),

		 )),

		   array("table"=>"dljl","fields"=>array(

			 array("field"=>"gong","title"=>"工号"),

			 array("field"=>"jp","title"=>"奖品"),

			 array("field"=>"jpnum","title"=>"奖品数量"),

		 )),

		 

		  array("table"=>"dlhdpm","fields"=>array(

			 array("field"=>"gong","title"=>"工号"),

			 array("field"=>"pm","title"=>"排名"),

		 )),

		  array("table"=>"dlyj","fields"=>array(

			 array("field"=>"gong","title"=>"工号"),

			 array("field"=>"lsmonth","title"=>"历史月份"),

			 array("field"=>"lsyj","title"=>"历史业绩（元）"),

		 )),

		  array("table"=>"dlpm","fields"=>array(

			 array("field"=>"gong","title"=>"工号"),

			 array("field"=>"pm","title"=>"当前排名"),

			 array("field"=>"yj","title"=>"总业绩"),

			 array("field"=>"xz","title"=>"健康勋章"),

		 )),

           array("table"=>"bksale","fields"=>array(

			 array("field"=>"bkdm","title"=>"部课代码"),

			 array("field"=>"cp","title"=>"产品"),

			 array("field"=>"cpnum","title"=>"产品数量"),

		 )),

          array("table"=>"bkjl","fields"=>array(

			 array("field"=>"bkdm","title"=>"部课代码"),

			 array("field"=>"jp","title"=>"奖品"),

			 array("field"=>"jpnum","title"=>"奖品数量"),

		 )),



          array("table"=>"bkhdpm","fields"=>array(

			 array("field"=>"bkdm","title"=>"部课代码"),

			 array("field"=>"pm","title"=>"排名"),

		 )),

		 

		   array("table"=>"bkyj","fields"=>array(

			 array("field"=>"bkdm","title"=>"部课代码"),

			 array("field"=>"lsmonth","title"=>"历史月份"),

			 array("field"=>"lsyj","title"=>"历史业绩（元）"),

		 )),

		  array("table"=>"bkpm","fields"=>array(

			 array("field"=>"bkdm","title"=>"部课代码"),

			 array("field"=>"pm","title"=>"当前排名"),

			 array("field"=>"yj","title"=>"总业绩"),

			 array("field"=>"xz","title"=>"健康勋章"),

		 ))







//	array("field"=>"bkpm","title"=>"部课代码,当前排名,总业绩,健康勋章"),



);



    return  $fields;

	

	}

function excel_check($data,$first_row){

	  

	

    



	   foreach ($data as $k=>$row){

				 if (trim($row)!=trim($first_row[$k])){

					 

					 echo "验证".$row."出错";exit();

				}

					    

		 }

	

	

	}

	

function ml_json(){

	

	 global $duoduo;

	 $types=get_types($duoduo,684);

	 $arr=array();

	 $i=0;

	 foreach ($types as $k=>$row){

		 

		 $arr[$k]['text']=$row['title'];

		  $arr[$k]['node']=$i++;

		 $ztypes=get_types($duoduo,$row['id']);

		 

		 $top_id=dd_fcid($duoduo,$row['id']);

		 

		 if ($top_id==$row['id']){

			 

			   $as=dd_article_sons($duoduo,$row['id']);

			   

			   foreach ($as as $j=>$r){

				   

				   $arr[$k]['nodes'][$j]['text']=get_str($r['title'],10);

				   

				   $arr[$k]['nodes'][$j]['href']=$r['id'];  

				}

			 

			 }else{

		 if ($ztypes){

			   foreach ($ztypes as $j=>$r){

			    

				   $arr[$k]['nodes'][$j]['text']=$r['title'];

				 

				  $as=dd_article_sons($duoduo,$r['id']);

			      

				  

				   foreach ($as as $j1=>$r1){

				   

				   $arr[$k]['nodes'][$j]['nodes'][$j1]['text']=get_str($r1['title'],10);

				   $arr[$k]['nodes'][$j]['nodes'][$j1]['href']=$r1['id'];  

				}

		       }

		 }

		 

		 

			 }

	 }

	 return $arr;





	

}



function head_img($id){

	global $duoduo,$webset;

	

	$row=$duoduo->select("user","img","id=$id");

	if ($row){

	   return $row;

	   

	}else{ 



	  $temp=$webset['default_img'];//需要在相应位置放置4张jpg的文件，名称为1，2，3，4 

	} 

	

	return $temp;

	}

function left(){

	

	$fields = array(

        array("title"=>"我的后台","icon"=>"&#xe616;","url"=>u("user","index"),"tag"=>"index"),

    

	

	);

	

}



function arr_sort($list,$type,$param){

        global $_W;

        $a = array();

        foreach($list as $key=>$val){

          $a[] = $val[$param];  //这里要注意$val['nums']不能为空，不然后面会出问题

        }

        //$a先排序

        if($type=='down'){

            rsort($a);

        }else{

            sort($a);

        }

        $a = array_flip($a);

        $result = array();

        foreach($list as $k=>$v){

          $temp1 = $v[$param];

          $temp2 = $a[$temp1];		//按着键值大小排序，所以要求键值不相等，否则只能出现其中一条

          $result[$temp2] = $v;

        }

        //这里还要把$result进行排序，健的位置不对

        if($type=='down'){

            ksort($result);

        }else{

            asort($result);

        }

        

        //然后就是你想看到的结果了

        return $result;

    }

 function get_content_imgs($str){
	  
	
		
		$parrent = "/(href|src)=([\"|']?)([^\"'>]+.(jpg|JPG|jpeg|JPEG|gif|GIF|png|PNG))/i";
		preg_match_all($parrent,$str,$jian_m);
		return $jian_m[3];
		
} 
function atyeps(){
	
	return array(1=>'唯一属性',3=>'复选属性');
}

function attribute_arr($id){
	
	 global $duoduo;
	// $value=$duoduo->select("attribute","value","id=$id");
	 
	 $rows=aitems($id);
	 
	 return $rows;
	 
	 
}

function checkbox($array,$values,$name,$disabled){
	global $duoduo;
	 $s="";
	foreach ($array as $key => $val) {
		
		 
			      if (in_array($key,$values))
												
				   $str='checked="checked"';
				   else
				   $str="";
			
	
		
		
		$aaid=get_title("aitems",$key,"aaid");
		 //判断有没有子级，没有子级就不要添加事件
		 $child=$duoduo->select("aitems","id","aaid=$key");
		 if (!$child)
		    $child=0;
			else 
			$child=1;
		//获取上级
		$aaid=$duoduo->select("aitems","aaid","id=$key");
		global $itemstr;
		$itemstr="";
		$delatiems=dd_aitems($key);
		
		$s.= "<span class='ack'   child='$child'><input  id='a$key' class='aitems$aaid $delatiems' $disabled   name='".$name."[]'   type='checkbox' $str value='".$key."' aaid='$aaid'><span class='$disabled aaaa'>".$val."</span>&nbsp;&nbsp;</span>";
		
	}
	
	return $s;
	
	
 }
function product_attr($post,$id){
	

	 global $duoduo;
	
	 $cid=get_title("product",$id,"cid");
	 
	 $rows=$duoduo->select_all("attribute","*","cid=$cid order by sort desc,id desc"); 
	 foreach ($rows as $row){
		
		   if ($row['input_type']==1 or $row['input_type']==2){
			   
			   $data['pid']=$id;
			   $data['aid']=$row['id'];
			   $value=$post["product_".$row['id']];
			   if (empty($value))
			       continue;
			   $data['value']=$value;
			   
			   $duoduo->insert("product_attr",$data);
			}else{
			   $values=$post["product_".$row['id']];
			   
			   foreach ($values as $vo){
				   
				    $data['pid']=$id;
			        $data['aid']=$row['id'];
			        $data['value']=$vo;
			
					$duoduo->insert("product_attr",$data);
				   
			   }
			  
				
			}
		 
		 
	 }
	
}
function a1($cid,$pid,$aid){
	 global $duoduo; 
    if (empty($pid))
	   return false;
	 $temp_cid=get_title("product",$pid,"cid");  
	 if ($temp_cid<>$cid)
	      return false;
		  
	$value=$duoduo->select("product_attr","value","pid=$pid and aid=$aid");
	return $value;	
}
function a2($cid,$pid,$aid){
	 global $duoduo; 
    if (empty($pid))
	   return false;
	 $temp_cid=get_title("product",$pid,"cid");  
	 if ($temp_cid<>$cid)
	      return false;
		  
	$values=$duoduo->select_all("product_attr","value","pid=$pid and aid=$aid");
	$arr=array();
	foreach ($values as $vo){
		
		$arr[]=$vo['value'];
		
		}
	return $arr;	
}
//产品页获页URL，构建数组
function attribute($cid,$attr){
	global $duoduo,$aaarr; 
	 $rows=$duoduo->select_all("attribute","*","cid=$cid  and input_type<>1 order by sort desc,id desc"); 
	 //value为空，赋初始值
	 if (empty($attr)){
		  foreach ($rows as $vo){
		     $temp[]=0;
	     }
		 $attr=implode(".", $temp); 
	 }
	 $attribute=array();
	 foreach ($rows as $k=>$row){
		 
		 //判断有没有上级，
		 $d=array();
		 $d['title']=$row['title'];
		 
		 
		
		      
		 $child=array();
		 
		 $temp_arr = explode('.', $attr);
		  
		  $tarr=array();
		
		  //判断自己下线索引
		  $aaarr=array();
	
		  
		  $tarr=get_asons($rows,$row['id']);
		  
		  if ($row['aid']>0){
			 
			 $ins=str_replace(".",",",$attr);
			 $where="and aaid in ($ins)";
			 
		  	 $id=$duoduo->select("aitems","id","aid=".$row['id']." ".$where);
			 
			 if ($id<1)
			     continue; 
		 }else{
			 
			 $where="and 1=1";
			}
		 
		
		 
		 $temp_data['active']=($temp_arr[$k]==0)?1:0;
		 $temp_arr[$k]=0;
		 $temp_data['attr']=implode(".",$temp_arr); 
		  $temp_data['title']="全部"; 
		 $child[]=$temp_data;
		 $sql="select * from xia_aitems where aid=".$row['id']." $where  order by sort desc ,id desc";

		 $list=$duoduo->sql_to_array($sql);
		
		 $items=attribute_arr($row['id']);
		 foreach ($list as $v=>$vo){
			 
			  $temp_data=array();
			  $temp_arr = explode('.', $attr);
			  $temp_data['active']=($temp_arr[$k]==$vo['id'])?1:0;
			  $temp_arr[$k]=$vo['id'];
			
			  foreach ($tarr  as $r){
				
				  $a=is_father($temp_arr[$r],$vo['id']);
				  if ($a==false)
				      $temp_arr[$r]=0;
			  }
			  $temp_data['attr']=implode(".",$temp_arr); 
			  $temp_data['title']= $vo['title'];
			  $child[]=$temp_data;
			 
		 }
		 $d['child']=$child;
		 $attribute[]=$d;
		   
		 
	 }
	
	return $attribute;
	
}

function format_date($time){
    $t=time()-$time;
	
    $f=array(
        '31536000'=>'年',
       '2592000'=>'个月',
        '604800'=>'周',
        '86400'=>'天',
        '3600'=>'小时',
        '60'=>'分钟',
        '1'=>'秒'
    );
    foreach ($f as $k=>$v)    {
        if (0 !=$c=floor($t/(int)$k)) {
            return $c.$v.'前';
        }
    }
}

function list_type(){
	
    return array(1=>"常规样式",2=>"广告样式",3=>"视频样式",4=>"音频样式",5=>"PPT图表",6=>"免抠元素");
}

function wh($url){
	
	  $data=getimagesize($url);
	  return $data;
}
function get_mp3_time($filename){
	// include(DDROOT."/comm/mp3.class.php");
//	$mp3 = new MP3File($filename);
//	$a = $mp3->getDurationEstimate();
//	$b = $mp3->getDuration();
//	$duration = $mp3::formatTime($b);
//	
//	
//	print_r($duration);exit();
	
}

function get_s($str){
	$rows= explode(":", $str);
	$value=$rows[0]*60+$rows[1];
	return $value;
	
}

function get_user_menu(){
	
// return array(1=>"我的收藏",2=>"下载记录",3=>"会员信息");
return array(

  array("url"=>u("user","index"),"title"=>"我的收藏","tag"=>"index"),
  array("url"=>u("user","xiazai"),"title"=>"下载记录","tag"=>"xiazai"),
  array("url"=>u("user","order"),"title"=>"我的订单","tag"=>"order")
);		
}
function date_type(){
	
 return array(1=>"天",2=>"周",3=>"月",4=>"年");	
}

function date_type_value(){
	
 return array(1=>"days",2=>"weeks",3=>"months",4=>"years");	
}
function is_vip($id){
	
   $auth_time=get_title("user",$id,"auth_time");
   if ($auth_time>time())
      return 1;
	  else
	  return 0;
      	
}
function insert_order($id,$type){
	global $dduser,$duoduo; 
	$row=get_table("recharge",$id);
	$data['title']=$row['title'];
	$data['price']=$row['price'];
	if (empty($row['day_xiazai_num']))
	    $data['day_xiazai_num']=100000;  //设置无穷大
		else
	$data['day_xiazai_num']=$row['day_xiazai_num'];
	
	$date_type=$row["date_type"]; //日期类型
	//获取时间
	$temp=date_type_value(); //对应日期类型的值
	$recharge=$row['date_num'].$temp[$date_type];		 
	$data['recharge']=$recharge;  
	$data['rid']=$id;
	$data['date_num']=$row['date_num'];
	$data['date_type']=$row['date_type'];
	$data['type']=$type;
	$data['addtime']=time();
	$data['uid']=$dduser['id'];
	$data['status']=1;
	$data['goods_id']=$row['id'];
	$data['order_sn']=date('Ymdhis') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT); //订单号

	$aid=$duoduo->insert("order",$data);
	
	return $aid;
	
}

function update_order($order_sn,$transaction_id){

	global $duoduo;
	
	$row=$duoduo->select("order","*","order_sn='".$order_sn."'");  //判断这个订单有没有支付过，怕多次回调
	
	$data['status']=2;
	$data['pay']=2;
	$data['transaction_id']=$transaction_id;
	$duoduo->update("order",$data,"order_sn='".$order_sn."'");
	if ($row['pay']==1){

		 $user=$duoduo->select("user","*","id=".$row['uid']);
		 $t=$user["auth_time"];
		 if ($t<=time()){
			  $t=time();
		  }
		  $auth_time=strtotime("+".$row['recharge'],$t);
		  //因为类型为年的数字填写18以上好像不起作用
           if ($row['date_type']==4 and $$row['date_num']>15){  //data_type 4代表年
			  $auth_time=strtotime("2100-01-01");	  
		   }
		  $ydata["auth_time"]=$auth_time;
		
		   $aid=$duoduo->update("user",$ydata,"id=".$row['uid']);
		  $data=array();
		  $data['end_time']=$auth_time;
		  $data['start_time']=time();
		  $duoduo->update("order",$data,"order_sn='".$order_sn."'");
		  if (!$aid){
			  
			  //更新失败的话，改回未处理状态以防万一
			     $data=array();
				$data['pay']=1;
				$duoduo->update("order",$data,"order_sn='".$order_sn."'");
			  
		 }
	}
	
	

}
function order_time($id,$uid,$recharge_time){
	global $duoduo;
	$sql="select max(day_xiazai_num) as day_xiazai_num  from xia_order where uid=$uid and pay=2 and `status`=2 and id<>$id and  end_time>".time();

   $temp=$duoduo->sql_to_array($sql);
   $day_xiazai_num=$temp[0]['day_xiazai_num'];
   
   $row=get_table("order",$id);
   
   if ($row['day_xiazai_num']>$day_xiazai_num){
	      
		  $sql="select *  from xia_order where uid=$uid and pay=2 and `status`=2 and id<>$id and  end_time>".time();

          $temp=$duoduo->sql_to_array($sql);
          foreach ($temp as $vo){
			  
			   $t=$vo['end_time'];
			    $end_time=strtotime("+".$recharge_time,$vo['end_time']);
		        $data['end_time']=$end_time;
		        $duoduo->update("order",$data,"id=".$vo['id']);
		  }
		  
	       $end_time=strtotime("+".$recharge_time,time());
		   $data['end_time']=$end_time;
		   $duoduo->update("order",$data,"id=$id");
		   //循环未过期的付款订单
		     
	   
	}
	
}

function order_time1($uid){
	
	global $duoduo;

	$rows=$duoduo->select_all("order","id,end_time,date_type,date_num,recharge,start_time,day_xiazai_num","uid=$uid and pay=2 and `status`=2  order by day_xiazai_num desc");
	
	$t=0;
	foreach ($rows as $k=>$row){	
		
		 if ($row['date_type']==4 and $$row['date_num']>15){  //代表终身会员
	
			  return $row['day_xiazai_num'] ;
		 }
		 
		  $temp=strtotime("+".$row['recharge'],$row['start_time']);
		  $temp=$temp-$row['start_time'];
		  $t=$t+$temp;
		  if ($row['start_time']+$t>time()){
			  
			    return $row['day_xiazai_num'] ;
		  }
		  
		 
		   
		   
	}
	
	return 0;
	
}

//判断远程文件 
function check_remote_file_exists($url) 
{ 
$curl = curl_init($url); 
// 不取回数据 
curl_setopt($curl, CURLOPT_NOBODY, true); 
// 发送请求 
$result = curl_exec($curl); 
$found = false; 
// 如果请求没有发送失败 
if ($result !== false) { 
// 再检查http响应码是否为200 
$statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE); 
if ($statusCode == 200) { 
$found = true; 
} 
} 
curl_close($curl); 

return $found; 
} 
//检查文件是否存在
function check_url($url){
	
	if (strpos("a".$url,"http://")){
		
		if (check_remote_file_exists($url))
		    return true;
			else
			return false;
	}else{
		
		if (file_exists($url))
		    return true;
			else
			return false;				
		
	}
	
}
function check_money($order_sn,$total_fee){
	global $duoduo;
	$price=$duoduo->select("order","price","order_sn='".$order_sn."'");
	if ($price==$total_fee)
	   return true;
	   else
	   return false;
	
	
}
function dd_type(){
	
return array(1=>"使用问题",2=>"产品功能改进",3=>"提交素材需求");	
}

function aitems($aid){
	
	global $duoduo;
	
	$rows=$duoduo->select_all("aitems","id,title","aid=$aid order by aaid asc,sort desc,id desc");
	
	foreach ($rows as $row){
		$arr[$row['id']]=$row['title'];
	} 
	
	return $arr;
}


function dd_attributes($id){
	global $duoduo;
    global $str;
	$id=$duoduo->select('attribute','aid','id='.$id);
   
	while ($id!=0){
        $str=$str." a".$id;
		$id=$duoduo->select('attribute','aid','id='.$id);
        

	}

	return $str;

	}
	
function dd_aitems($id){
	global $duoduo;
    global $itemstr;
	$id=$duoduo->select('aitems','aaid','id='.$id);
   
	while ($id!=0){
        $itemstr=$itemstr." delaitems".$id;
		$id=$duoduo->select('aitems','aaid','id='.$id);
        

	}

	return $itemstr;

	}

function is_father($son,$father){
	global $duoduo;
	
	$id=$duoduo->select('aitems','aaid','id='.$son);
	while ($id!=0){ 
	    if ($id==$father)
		    return true;
		$id=$duoduo->select('aitems','aaid','id='.$id); 

	}
	return false;
     	
}
//获取索引值
function get_asons($rows,$id){
    
	global $duoduo,$aaarr; 
  
	    
    foreach ($rows as $k=>$r){
	      if ($r['id']==$id)
		      continue;
        $a=$duoduo->select("attribute","id","aid=$id and id=".$r['id']);
		
		if ($a>0){
			$aaarr[]=$k;
			 get_asons($rows,$r['id']);
		}
        
        
   
    
    }
	
	  return $aaarr;  

}		
function insert_search($get){
	 global $duoduo;
	 $data['title']=$get['q'];
	 $data['cid']=$get['cid'];
	 $data['addtime']=time();
	 $duoduo->insert("search",$data);
}
?>