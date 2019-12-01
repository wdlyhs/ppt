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

if($_POST['sub']!=''){
	if($_POST['adminpass']==''){
	    unset($_POST['adminpass']);
	}
	else{
	    $_POST['adminpass']=deep_jm($_POST['adminpass']);
	}
	
    $id=$ddadmin['id'];
	unset($_POST['id']);
	unset($_POST['sub']);
	if($id==0){
		
	}
	else{
		if($_POST['adminpass']==''){unset($_POST['adminpass']);}
		unset($_POST['addtime']);
	
	
	    $duoduo->update(MOD,$_POST,'id="'.$id.'"');
		jump('-1','修改成功');
	}
}
else{
	return false;
	$id=empty($_GET['id'])?0:(int)$_GET['id'];
    if($id==0){
	    $row=array();
	}
	else{
	    $row=$duoduo->select(MOD,'*','id="'.$id.'"');
	}
}
?>