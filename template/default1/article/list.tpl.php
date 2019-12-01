<?
$parameter=act_article_list(10);
extract($parameter);
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
<?
foreach ($list as $row){
?>
<div class="news10">
<div class="news10-item">
<a title="<?=$row['title']?>" href="<?=aurl($row['id'])?>" target="_blank">
<div class="news-img">
<img alt="<?=$row['title']?>" src="<?=get_article_img($row['id'])?>" >
</div>
<div class="news-text">
<h4><?=$row['title']?></h4>
<p><?=get_str($row['content'],75)?>...</p>
</div>
</a>
</div>


</div>
<? }?>

<div class="page" style="text-align:center">
		<div class="pageNav"><?=zhe_page($total,$pagesize,$page_url,WJT)?></div>
	</div>
</div>


</div>
</div>
<?
include(TPLURL."/foot.tpl.php");
?>