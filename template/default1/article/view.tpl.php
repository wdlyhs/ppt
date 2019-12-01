<?
$parameter=act_article_view();
extract($parameter);
include(TPLURL."/head.tpl.php");
$_GET['cid']=$duoduo->select(MOD,"cid","id=".$_GET['id']);
?>

<div id="banner2" style="margin-top:0px">
<div class="por_img">
</div>
</div>

<div class="box2">
<div class="container">
<div class="box2-left">
<?
include(TPLURL."/left.tpl.php");
?>
</div>
<div class="box2-right">
<nav class="sub_menu" >
<ol class="breadcrumb"><span class="iconfont">&#xe616;</span>
<?=dd_position($duoduo,$_GET['cid'])?>
</ol>
</nav>


<h4 class="about_title"><?=$article['title']?></h4>


<p class="ftitle">
 <span><?=date("Y-m-d",$article['addtime'])?>&nbsp;&nbsp;来源：<?=($article['source'])?$article['source']:WEBNAME?> &nbsp;&nbsp;浏览量：<?=$article['hits']?></span> 
<p>
<div class="about_content"><?=$article['content']?></div>
</div>


</div>
</div>
<?
include(TPLURL."/foot.tpl.php");
?>