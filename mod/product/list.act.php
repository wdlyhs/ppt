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
dd_session_start();
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
function act_product_list($pagesize=20,$limit=10,$field='id,title,img,content,addtime'){
	global $duoduo;
	   $cid=intval($_GET['cid']);
       if (!$cid)
	        $cid=$duoduo->select("type","id","1=1 order by sort desc");

	$page = empty($_GET['page'])?'1':intval($_GET['page']);
	$page2=($page-1)*$pagesize;
	$awhere="1=1";
    if ($_GET['attr']){
		
		$rows= explode(".", $_GET['attr']);
		foreach ($rows as $vo){
			 $aid=get_title("aitems",$vo,"aid");
			if ($vo>0){
				$temp=get_table("product_attr",$vo);
				$ps=$duoduo->select_all("product_attr","pid","aid=".$aid." and value=".$vo);
			    $a=array();
				foreach ($ps as $item){
					
					 $a[]=$item['pid'];
				}
				
				 $astr=implode(",", $a); 
				 $awhere.=" and id in ($astr)";
				 
			}
			
		}
	}
	
    
    if ($_GET['q']){
		    insert_search($_GET);
		    $_SESSION['loacol_'.$_GET['cid']]=$_GET['q'];
		    $a="";
			$lenth=mb_strlen($_GET['q'],'utf8');
			for($i=0;$i<$lenth;$i++){
					$char = mb_substr($_GET['q'], $i, 1, 'utf8');
					$awhere=$awhere." and title like '%".$char."%'";
			}
		 // $awhere.=" and title like '%".$_GET['q']."%'";
		}

	 if ($_GET['order'])
	     $order=$_GET['order']." desc,";
		
	$total = $duoduo->count('product','cid="'.$cid.'" and `status`=1 and '.$awhere);
	
	
	$list=$duoduo->select_all("product","*","cid='".$cid."' and `status`=1 and $awhere order by $order sort desc,id desc limit $page2,$pagesize");


    $page_url=u(MOD,ACT,array('cid'=>$cid,"q"=>$_GET['q'],"order"=>$_GET['order'],"attr"=>$_GET['attr']));
	unset($duoduo);
	$parameter['list']=$list;
	$parameter['total']=$total;
	$parameter['pagesize']=$pagesize;
	$parameter['page_url']=$page_url;

	$parameter['cid']=$cid;
	return $parameter;
}
?>