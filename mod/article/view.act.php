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
function act_article_view($pagesize=20,$limit=10,$field='*'){
	global $duoduo;
	if($_GET['id']){
		$id=intval($_GET['id']);
	}
	include(DDROOT.'/comm/article.class.php');
	$article_class=new article($duoduo);
	$data=array('f'=>'hits','e'=>'+','v'=>1);
	$article_class->update('id="'.$id.'"',$data);
	
	$article = $article_class->select('id="'.$id.'"',$field);
	$article['url']=u('article','list',array('cid'=>$article['cid']));
	$article['add_time']=date('Y-m-d H:i:s',$article['addtime']);
	//$type_all=dd_get_cache('type');
	//$type=$type_all['article'];
	//建添加
    $type=$duoduo->select("type","*","id=".$article['cid']);
    $_GET['cid']=$article['cid'];
	
	//结束
	
	
	if($article['id']<=0){
		error_html('文章不存在');
	}
	
	$next_last = $article_class->next_last($id);
	
	$last_article = $next_last['last_article'];
	$next_article = $next_last['next_article'];
	
	//热门文章
	$hotnews=$duoduo->select_all("article","*","id<>$id and cid=".$article['cid']." order by id desc limit 0,3");
	unset($duoduo);
	$parameter['hotnews']=$hotnews;
	$parameter['next_article']=$next_article['title']?$next_article['title']:'没有了';
	$parameter['last_article']=$last_article['title']?$last_article['title']:'没有了';
	$parameter['next_url']=u('article','view',array('id'=>$next_article['id']));
	$parameter['last_url']=u('article','view',array('id'=>$last_article['id']));
	$parameter['article']=$article;

	$parameter['type']=$type;
	return $parameter;
}

function act_pl_list($pagesize=20,$limit=10,$field='*'){
	global $duoduo;

	if($_GET['id']){
		$aid=empty($_GET['id'])?1:intval($_GET['id']);
		
	}
    
	 
	$page = empty($_GET['page'])?'1':intval($_GET['page']);
	$page2=($page-1)*$pagesize;
	
    
	

	$list=$duoduo->select_all("pl","*","aid=$aid and is_show=2 order by id desc limit $page2,$pagesize");
	
	$total=$duoduo->count("pl","aid=$aid");
    

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