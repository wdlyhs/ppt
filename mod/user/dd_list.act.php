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

function act_user_dd($pagesize = 10) {
	global $duoduo,$dduser;
	$page = empty($_GET['page'])?'1':intval($_GET['page']);
	$page2=($page-1)*$pagesize;

	$where="1=1";
	if ($_GET['status'])
	   $where.=" and `status`=".$_GET['status'];
	
	$total = $duoduo->count("dd","$where and uid=".$dduser['id']);

	$list=$duoduo->select_all("dd","*","$where and uid=".$dduser['id']." order by id desc limit $page2,$pagesize");
	

    if (empty($_GET['status']))
	    $title="全部订单";
	 if ($_GET['status']==1)
	     $title="未付款";
	 if ($_GET['status']==2)
	     $title="已付款未核验";
	 if ($_GET['status']==3)
	     $title="已核验";
	$page_url=u(MOD,ACT,array('status'=>$_GET['stauts']));
	unset ($duoduo);
    $parameter['list'] = $list;
	$parameter['page_url']=$page_url;
	$parameter['total'] = $total;
	$parameter['title'] = $title;
	return $parameter;
}

?>