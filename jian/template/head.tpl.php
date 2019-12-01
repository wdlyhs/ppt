
<?
$nav_row=dd_type_nav($duoduo,19,"*",0);
$slides=dd_slides($duoduo,3,"*",1);
$news=dd_article_sons($duoduo,417,$num=6);
$news_tj=dd_article_sons($duoduo,417,$num=6,2);
if ($_GET['cid']){
	$top_id=dd_cid($duoduo,$_GET['cid']);

	$top_row=$duoduo->select("type","*","id=".$top_id);
	 $_GET['cid']=dd_fcid($duoduo,$_GET['cid']);
	 if (MOD!=="article" and ACT!="view")
	    $article=$duoduo->select("type","*","id=".$_GET['cid']);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if(is_file(DDROOT.'/data/title/'.$mod.'_'.$act.'.title.php')){?>
<?php include(DDROOT.'/data/title/'.$mod.'_'.$act.'.title.php');?>
<?php }else{?>
<title><?=WEBNAME?></title>

<meta name="keywords" content="<?=WEBNAME?>" />
<meta name="description" content="<?=WEBNAME?>" />
<?php }?>

<link type="text/css" rel="stylesheet" href="<?=TPLURL?>/css/musheng.css">
</head>

<body>
	<div class="header"><img src="<?=TPLURL?>/img/head.png"/></div>
    <div class="daohang">
    	<ul class="liebiao">
        	<li><a href="#">首页</a></li>
            <? foreach ($nav_row as $row){?>
            <li><a href="<?=list_url($duoduo,$row['id'])?>"><?=$row['title']?></a></li>
          <? }?>
            <div style="clear:both;"></div>
        </ul>
    </div>