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


/**
* @name 文章列表页面
* @copyright duoduo123.com
* @example 示例article_list();
* @param $cid 文章栏目分类id
* @param $pagesize 每页默认20篇
* @param $field 字段
* @param $limit 限制
*/
$page1=$_GET['page'];
$size=$_GET['size'];
$q=$_GET['q'];
$arr=act_article_list_more($size,10,"*",$page1,$q);
if (count($arr)<1){
	echo 1;
	exit();
	}
//foreach ($arr as $k=>$row){
//	 $arr_1[$k]["url"]=u('article','view',array('id'=>$row['id']));
//	  $arr_1[$k]["title"]=$row['title'];
//	   $arr_1[$k]["img"]=$row['img'];
//	  $arr_1[$k]["addtime"]=date('m/d',$row['addtime']);
//	}
//
//echo dd_json_encode($arr_1);
//print_r($arr);

function act_article_list_more($pagesize=30,$limit=10,$field='*',$page=1,$q){
	global $duoduo;
	$page2=($page-1)*$pagesize;
	
	$list=$duoduo->select_all('product',$field,"title like '%$q%' and 1=1 order by sort desc,id desc limit $page2,$pagesize");

	return $list;
}
?>

  <?  foreach ($arr as $r){
					 ?>
                  	<div class="pro_pic" style="margin-bottom: 10px; zoom: 1; opacity: 1;width: 48%; float:
            left;">



								<div class="img">



									<a href="javascript:;">






											<img src="<?=$r['img']?>" style="width: 48%; height: auto; display: block; margin-left: auto; margin-right: auto;">






									</a>



								</div>



								<a href="javascript:;"><div class="name"><?=$r['title']?></div></a>



							</div>
                    <? }?>