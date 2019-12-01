<?
include(DDROOT."/mod/article/list.act.php");
$parameter=act_article_list(9);
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

<div class="list-pic10">
<div class="row">
<?
foreach ($list as $row){
?>
<div class="col-sm-6 col-md-4">
<div class="list-pic10-item">
<a title="<?=$row['title']?>" href="javascript:;" target="_blank">
<div class="list-pic10-img">
<img alt="<?=$row['title']?>" src="<?=$row['img']?>" >
</div>
<div class="list-pic10-text s2-text">
<h4><?=$row['title']?></h4>

</div>
</a>
</div>
</div>

<? }?>
</div>


   <div class="page" style="text-align:center">
		<div class="pageNav"><?=zhe_page($total,$pagesize,$page_url,WJT)?></div>
	</div>
</div>

</div>
</div>
</div>
<?
include(TPLURL."/foot.tpl.php");
?>