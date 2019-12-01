<?
include(TPLURL."/head.tpl.php");
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

<div class="about_content" style="font-size:15px"><?=$article['content']?></div>

</div>
</div>
</div>
<?
include(TPLURL."/foot.tpl.php");
?>