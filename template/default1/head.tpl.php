<?

$nav_row=dd_type_nav($duoduo,10,"*",0);
$slides=dd_slides($duoduo,6,"*",1);

if ($_GET['cid']){
	$top_id=dd_cid($duoduo,$_GET['cid']);

	$top_row=$duoduo->select("type","*","id=".$top_id);
	 $_GET['cid']=dd_fcid($duoduo,$_GET['cid']);
	 
	 
	 if (ACT!="view"){
		 $article=$duoduo->select("type","*","id=".$_GET['cid']);
		 $article1=$article;
		 }
	    
	}
?>

<!DOCTYPE html>
<html>
<head>


<meta charset="utf-8" />
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<?php if(is_file(DDROOT.'/data/title/'.$mod.'_'.$act.'.title.php')){?>
<?php include(DDROOT.'/data/title/'.$mod.'_'.$act.'.title.php');?>
<?php }else{?>
<title><?=WEBNAME?></title>

<meta name="keywords" content="<?=WEBNAME?>" />
<meta name="description" content="<?=WEBNAME?>" />
<?php }?>
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link href="<?=SITEURL?>/<?=TPLURL?>/css/bootstrap.min.css" rel="stylesheet">
<link href="css/page.css" rel="stylesheet">
<link href="data:text/css;charset=utf-8," data-href="https://www.cmseasy.cn/demo/business-template/v471/template/CmsEasy_V_471/skin/css/bootstrap-theme.min.css" rel="stylesheet" id="bs-theme-stylesheet">
<link href="<?=SITEURL?>/<?=TPLURL?>/css/bootstrap-submenu.css" rel="stylesheet">
<link href="<?=SITEURL?>/<?=TPLURL?>/css/style.css" rel="stylesheet">
<script src="<?=SITEURL?>/<?=TPLURL?>/js/jquery.min.js" type="3347e483a4e9ba1bd3282e48-text/javascript"></script>
<script src="<?=SITEURL?>/<?=TPLURL?>/js/bootstrap.min.js" type="3347e483a4e9ba1bd3282e48-text/javascript"></script>
<script type="3347e483a4e9ba1bd3282e48-text/javascript">var cmseasy_wap_tpa=1,cmseasy_wap_tpb=1,cmseasy_wap_url='https://www.cmseasy.cn/demo/business-template/v471/wap';</script>
<script src="<?=SITEURL?>/<?=TPLURL?>/js/mobile.js" type="3347e483a4e9ba1bd3282e48-text/javascript"></script><script language=javascript type="3347e483a4e9ba1bd3282e48-text/javascript"> 
<!-- 
window.onerror=function(){return true;} 
// --> 
</script>
<script language=javascript type="3347e483a4e9ba1bd3282e48-text/javascript"> 
<!-- 
function chkMobile(tele) {
    var pattern = /^((13[0-9])|(15[1-3,5-9])|(17[7])|(18[0-9]))\d{8}$/
    var strPhone = pattern.test(tele);
    return strPhone;
}
function chkEmail(email) {
    var pattern = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
    var strEmail = pattern.test(email);
    return strEmail;
}
// --> 
</script>
</head>
<body>
<link href="<?=SITEURL?>/<?=TPLURL?>/css/font-awesome.css" rel="stylesheet">
<script src="<?=SITEURL?>/<?=TPLURL?>/js/nav.js" type="3347e483a4e9ba1bd3282e48-text/javascript"></script>
<script src="<?=SITEURL?>/<?=TPLURL?>/js/index.js" type="3347e483a4e9ba1bd3282e48-text/javascript"></script>

<!--<nav id="header" class="navbar navbar-default  navbar-fixed-top">-->
<nav id="header" class="navbar navbar-default" style="margin-bottom:0px">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">工业产品响应是网站模板</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<a href="/" class="navbar-brand text-center"><img src="<?=$webset['logo']?>" class="img-responsive" alt="工业产品响应是网站模板" /></a>

</div>
<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li class="oen <?=(!$_GET['cid'])?"active":""?>"><a href="/">网站首页</a></li>

<?
  foreach ($nav_row as $row){
	  
	  $ztypes=get_types($duoduo,$row['id']);
	  if ($ztypes){
?>
<li class="oen dropdown">
<a href="<?=list_url($duoduo,$row['id'])?>" data-toggle="dropdown" data-submenu=""><?=$row['title']?><span class="caret"></span></a>
<ul class="two dropdown-menu">

 <?
 foreach ($ztypes as $r){
 ?>

<li>
<a title="<?=$r['title']?>" href="<?=list_url($duoduo,$r['id'])?>"><?=$r['title']?></a>
</li>
<? }?>
</ul>
</li>
<? } else {?>
<li class="oen">
<a href="<?=list_url($duoduo,$row['id'])?>"><?=$row['title']?></a>
</li>
<? }}?>

</ul>
</div>
</div>
</nav>
