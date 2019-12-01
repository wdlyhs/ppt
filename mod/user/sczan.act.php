<?
$type=$_POST['type'];
    if ($type==1)
	    $field="sc";
		else
		 $field="zan";
	$pid=$_POST['pid'];
	$uid=$_POST['uid'];
	$num=get_title("product",$pid,$field);
	$id=$duoduo->select("sczan","id","type=$type and pid=$pid and uid=$uid");
	$data=array();
	if ($id){
		$data[$field]=$num-1;
		$duoduo->update("product",$data,"id=$pid");
		$duoduo->delete("sczan","type=$type and id=$id");
	}else{
		
		$data[$field]=$num+1;
		$duoduo->update("product",$data,"id=$pid");
		$_POST['addtime']=time();
		$_POST['title']=1;
		$duoduo->insert("sczan",$_POST);
	}
	
	echo $data[$field];

?>