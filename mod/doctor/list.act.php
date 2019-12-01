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

if(!defined('INDEX')){
	exit('Access Denied');
}
/**
* @name 文章列表页面
* @copyright duoduo123.com
* @example 示例article_list();
* @param $cid 文章栏目分类id
* @param $pagesize 每页默认20篇
* @param $field 字段
* @param $limit 限制
*/
function act_doctor_list($pagesize=20,$limit=10,$field='*'){
	global $duoduo;

	
	$where="1=1";
	if ($_GET["q"])
	   $where.=" and title like '%".$_GET["q"]."%'";
	
	if ($_GET["city"])
	       $where.=' and city='.$_GET["city"];
		   
     if ($_GET["cid"])
	       $where.=' and cid='.$_GET["cid"];
     if ($_GET["ks"])
	       $where.=' and ks='.$_GET["ks"];
	 
	
	
	$page = empty($_GET['page'])?'1':intval($_GET['page']);
	$page2=($page-1)*$pagesize;
	 if ($_GET['s']==1){
	$total = $duoduo->count(MOD,$where);

	$list=$duoduo->select_all(MOD,$field,"$where order by sort desc,id desc limit $page2,$pagesize");
	 }
	$page_url=u(MOD,ACT,array("cid"=>$_GET['cid'],"q"=>$_GET['q'],"city"=>$_GET['city'],"cid"=>$_GET['cid'],"ks"=>$_GET['ks']));
	unset($duoduo);
	$parameter['list']=$list;
	$parameter['total']=$total;
	$parameter['pagesize']=$pagesize;
	$parameter['page_url']=$page_url;
	$parameter['hotnews']=$hotnews;
	$parameter['catname']=$catname;
	$parameter['type']=$type;
	$parameter['cid']=$cid;
	return $parameter;
}
?>