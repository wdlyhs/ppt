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
function act_article_list($pagesize=20,$limit=10,$field='id,title,img,content,addtime'){
	global $duoduo,$gid;

	if($_GET['cid']){
		$cid=empty($_GET['cid'])?1:intval($_GET['cid']);
		
		
	}
	
	
	
	// $cid=dd_fcid($duoduo,$_GET['cid']);  //这一行主要起到跳到分类的第一个子类中
	$page = empty($_GET['page'])?'1':intval($_GET['page']);
	$page2=($page-1)*$pagesize;

	$catname=$duoduo->select('type','title','id="'.$cid.'"');

	//$total = $duoduo->count('article','cid="'.$cid.'" and is_show=0');
	//$list=$duoduo->select_all('article',$field,"cid='".$cid."' and is_show=0 order by sort desc,id desc limit $page2,$pagesize");
    if (!$cid)
	    $cid=0;

	$list=dd_article_sons($duoduo,$cid,$num=$pagesize,$tj=0,$strat_num=$page2,$_GET['q']);
	$list_total=dd_article_sons($duoduo,$cid,100000,$tj=0,0,$_GET['q']);

	$total=count($list_total);
	
	$type_all=dd_get_cache('type');
	$type=$type_all['article'];
	
	//热门文章
	$hotnews=$duoduo->select_all('article',$field,'1=1 order by sort desc  limit 0,'.$limit);
	$page_url=u(MOD,ACT,array('cid'=>$cid,"q"=>$_GET['q']));
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