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

if(!defined('INDEX')){
	exit('Access Denied');
}

if($_GET['code']!='' && $_GET['state']!='' && preg_match('/^qq_/',$_GET['state'])){
	
	jump(u('api','qq',array('do'=>'back','code'=>$_GET['code'],'state'=>$_GET['state'])));
}
if($_GET['code']!='' && $_GET['state']!='' && preg_match('/^wx_/',$_GET['state'])){
	
	jump(u('api','wx',array('do'=>'back','code'=>$_GET['code'],'state'=>$_GET['state'])));
}


if($is_wap==0 && is_mobile()==1 && $webset['wap']['status']==1 && $_COOKIE['use_web']!=1 && ($webset['md_access']=='wap' || $webset['md_access']=='app')){
	if($webset['md_access']=='wap'){
		jump(wap_l('index','index'));
	}
	elseif($webset['md_access']=='app'){
		jump(u('app','index'));
	}
}


?>