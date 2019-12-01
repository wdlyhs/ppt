<?

$rows_dd=$duoduo->select_all("dd",'*',"phone='".$_GET['phone']."'");
$ip=get_client_ip();
if (count($rows_dd)>0){
		jump('-1','你的电话已经提交过，不用重复提交了');
	}
$addtime=$duoduo->select("dd",'addtime',"ip='".$ip."' order by id desc");
if (time()-$addtime<1200)
    jump('-1','提交太频繁,稍后再试');
unset($_GET['mod']);
unset($_GET['act']);
unset($_GET['tijiao_y']);
unset($_GET['tijiao_x']);
$_GET['ip']=$ip;
$_GET['addtime']=TIME;
trim_arr($_GET);

$id=$duoduo->insert("dd",$_GET);
echo $id;
if ($id)
jump('-1','已提交成功，稍后我们工作人员会联系您');

?>