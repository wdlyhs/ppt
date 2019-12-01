<?
$pid=$_GET['pid'];
if (empty($pid)){
	jump("index.php","系统异常");
	exit();
	}
$uid=$dduser['id'];
$aid=$duoduo->select("browse","id","uid=$uid and pid=$pid");
if (empty($aid)){
   $data=array();
   $data['uid']=$uid;
   $data['title']="1";
   $data['pid']=$pid;
   $data['addtime']=time();	
   $duoduo->insert("browse",$data);
}
$url=$duoduo->select("product","url","id=".$pid);
jump($url);
?>