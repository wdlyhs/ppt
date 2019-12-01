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

if (!defined('INDEX')) {
	exit ('Access Denied');
}

function act_user_order($pagesize = 16) {
	global $duoduo,$dduser;
	$page = empty($_GET['page'])?'1':intval($_GET['page']);
	$page2=($page-1)*$pagesize;
	$total = $duoduo->count("order","pay=2 and `status`=2 and  uid=".$dduser['id']);

	$list=$duoduo->select_all("order","*","pay=2 and `status`=2 and  uid=".$dduser['id']." order by id desc limit $page2,$pagesize");
 
    
	$page_url=u(MOD,ACT,array('cid'=>$_GET['cid']));
	unset ($duoduo);
    $parameter['list'] = $list;
	$parameter['page_url']=$page_url;
	$parameter['total'] = $total;
	$parameter['pagesize'] = $pagesize;
	return $parameter;
}
?>