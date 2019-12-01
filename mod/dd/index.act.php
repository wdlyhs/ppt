<?

if ($_POST['sub1']){


$captcha = trim($_POST['yzm']);
			if (reg_captcha($captcha) == 0) {
				//jump("-1", "验证码错误"); //验证码错误
			}
$rows_dd=$duoduo->select_all("dd",'*',"phone='".$_POST['phone']."'");
$ip=get_client_ip();
if (count($rows_dd)>0){
		//jump('-1','你的电话已经提交过，不用重复提交了');
	}
$addtime=$duoduo->select("dd",'addtime',"ip='".$ip."' order by id desc");
if (time()-$addtime<1200){
   echo ('提交太频繁,稍后再试');
   exit();
}
unset($_POST['yzm']);
unset($_POST['sub1']);
unset($_POST['mod']);
unset($_POST['act']);
$_POST['ip']=$ip;
$_POST['addtime']=TIME;
$_POST['uid']=$dduser['id'];
$_POST['title']=$_POST['phone'];
trim_arr($_POST);

$str="";

$id=$duoduo->insert("dd",$_POST);

if ($id)
   echo "你的留言提交成功";

}
function jian_up($img){
	 $b=explode("/",$_FILES[$img]['type']);
		if($b[1]=='x-png'){
			$b[1]='png';
		}
		if($b[1]=='jpeg'){
			$b[1]='jpg';
		}
	  $type=array("jpg","gif","bmp","jpeg","png");//设置允许上传文件的类型    
	    if(!in_array(strtolower(fileext($_FILES[$img]['name'])),$type))   
           {   
        $text=implode(",",$type);   
        echo "您只能上传以下类型文件: ",$text,"<br>";   
          }   
		$saved_upload_name=DDROOT.'/upload/dd/'.$img.time().'.'.$b['1'];
	
		if (!move_uploaded_file($_FILES[$img]['tmp_name'],$saved_upload_name)){
			 echo "异常";
			}
		
	return 'welldone/upload/dd/'.$img.time().'.'.$b['1'];
	}
	
	
	   function fileext($filename)   
    {   
        return substr(strrchr($filename, '.'), 1);   
    }   
?>