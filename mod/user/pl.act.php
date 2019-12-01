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
/**
* @name 文章页面首页
* @copyright duoduo123.com
* @example 示例article_view();
* @param $cid 文章栏目分类id
* @param $pagesize 每页默认20篇
* @param $field 字段
* @param $limit 限制
*/


function act_pl_list($pagesize=20,$limit=10,$field='*'){
	global $duoduo,$dduser;

	if($_GET['id']){
		$aid=empty($_GET['id'])?1:intval($_GET['id']);
		
	}
    
	 
	$page = empty($_GET['page'])?'1':intval($_GET['page']);
	$page2=($page-1)*$pagesize;
	
    
	
     $uid=$dduser['id'];
	
	$list=$duoduo->select_all("pl","*","title=$uid and is_show=2 order by id desc limit $page2,$pagesize");
	
	$total=$duoduo->count("pl","title=$uid");
    

	$total_page = ceil($total / $pagesize); //最后页，也是总页数
	 if (($total_page*$pagesize)==$total)
	     $total_page++;
	$page_url=u(MOD,ACT,array('id'=>$aid));
	unset($duoduo);
	$parameter['list']=$list;
	$parameter['total']=$total;
	$parameter['pagesize']=$pagesize;
	$parameter['page_url']=$page_url;
	$parameter['jian']=$jian;
	$parameter['total_page']=$total_page;

	return $parameter;
}
?>