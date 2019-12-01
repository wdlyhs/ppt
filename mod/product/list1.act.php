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
function act_product_list($pagesize=20,$limit=10,$field='*'){
	global $duoduo;

	if($_GET['cid']){
		$cid=empty($_GET['cid'])?1:intval($_GET['cid']);
		
		
	}
	
	
	
	  //$cid=dd_fcid($duoduo,$_GET['cid']);  这一行主要起到跳到分类的第一个子类中
	$page = empty($_GET['page'])?'1':intval($_GET['page']);
	$page2=($page-1)*$pagesize;
	
	$total = $duoduo->count(MOD,'1=1');
	$list=$duoduo->select_all(MOD,$field,"1=1 order by sort desc,id desc limit $page2,$pagesize");

	$page_url=u(MOD,ACT,array("cid"=>$_GET['cid']));
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