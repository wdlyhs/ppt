<?php 
/**
 * ============================================================================
 * 版权所有 多多科技，保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/

if(!defined('ADMIN')){
	exit('Access Denied');
}
$row=$duoduo->select('hezuo','*','id='.$_GET['id']);
if($row['status']==0){
	$duoduo->update('hezuo',array('status'=>1),'id='.$_GET['id']);
}
$url=u('goods','addedi',array('uid'=>$row['uid'],'code'=>$row['code']));
?>