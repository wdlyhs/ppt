<?
$pid=$_POST['pid'];
$uid=$dduser['id'];
if (empty($pid) or !$uid){
	
	$data['msg']="异常";
	echo dd_json_encode($data);
	exit();
}
// 判断授权时间有没有到期

$auth_time=get_title("user",$uid,"auth_time");
if (empty($auth_time)){
	$data['msg']="你还不是VIP会员";
	echo dd_json_encode($data);
	exit();
}
if (time()>$auth_time){
	$data['msg']="你的VIP会员已经到期";
	echo dd_json_encode($data);
	exit();
}

//判断一天有没有限制
$day_xiazai_num=order_time1($uid);
if ($day_xiazai_num==0){
	$data['msg']="您的VIP会员已经到期";
	echo dd_json_encode($data);
	exit();
}
if ($day_xiazai_num>0){
    $todaytime=strtotime(date('Y-m-d 00:00:00'));
    $num=$duoduo->count("xiazai","addtime>$todaytime and uid=$uid");
	if ($num>=$day_xiazai_num){
		$data['msg']="你今天已经下载了".$num."个,不能再下载，升级套系可马上下载";
	    echo dd_json_encode($data);
		exit();
	}
}
$xiazai_url=get_title("product",$pid,"xia");

if (!check_url($xiazai_url)){

	$data['msg']="下载地址出错，联系客服处理";
	$data['error']=2;
	echo dd_json_encode($data);
	exit();
}

//插入收藏
$xid=$duoduo->select("xiazai","id","uid=$uid and pid=$pid");
if (!$xid){
	$data1['pid']=$pid;
	$data1['uid']=$uid;
	$data1['addtime']=time();
	$data1['title']=get_title("product",$pid);
	$duoduo->insert("xiazai",$data1);
	
	$xiazai=get_title("product",$pid,"xiazai");
	$data2['xiazai']=$xiazai+1;
	$duoduo->update("product",$data2,"id=$pid");
}


$data['url']=$xiazai_url;

echo dd_json_encode($data);
?>