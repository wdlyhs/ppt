<?
if ($dduser['id']<1){
	echo "你还没有登录";
	exit();
	}
$data['content']=$_POST['content'];
$data['title']=$dduser['id'];
$data['addtime']=time();
$data['is_show']=$webset['pl'];
$data['aid']=$_POST['aid'];
$data['sort']=0;
$ip=get_client_ip();
$data['ip']=$ip;
$addtime=$duoduo->select("pl",'addtime',"ip='".$ip."' and aid=".$data['aid']." order by id desc");
if (time()-$addtime<10){
    echo ('提交太频繁,稍后再试');
	exit();
}
trim_arr($data);
$id=$duoduo->insert("pl",$data);
if ($id>0)
    echo 1;
?>