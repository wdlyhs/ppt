<?php
/**
 * ============================================================================
 * 版权所有 2008-2012 多多科技，并保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/



$cid=$_GET['cid'];
if ($cid==0){
	echo "cid参数为空";
	exit();
	}
$row=$duoduo->select("type",'*','id="'.$cid.'"');
$title=$row['title'];
for ($x=1; $x<=10; $x++) {
       $arr['title']=$title.$x.$title.$x.$title.$x.$title.$x;
	   $arr['content']=$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x.$title.$x;
	   $arr['addtime']=time();
	    $arr['img']="";
		$arr['sort']=0;
		$arr['hits']=0;
		$arr['tj']=0;
		$arr['del']=0;
		$arr['keyword']=WEBNAME;
	   $arr['cid']=$cid;
	   $duoduo->insert("article",$arr);
} 

echo $title."__添加成功";
?>