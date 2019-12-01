<?
$_GET['cid']=$duoduo->select(MOD,"cid","id=".$_GET['id']);
$article=get_table("product",$_GET['id']);
$imgs=get_content_imgs($article['imgs']);
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


<p class="ftitle">
 <!--<span><?=date("Y-m-d",$article['addtime'])?>&nbsp;&nbsp;来源：<?=($article['source'])?$article['source']:WEBNAME?> &nbsp;&nbsp;浏览量：<?=$article['hits']?></span> -->
<p>
<div class="about_content">

<div class="pimg">
<?
if ($imgs){
?>



<div id="myCarousel" class="carousel ">
	<!-- 轮播（Carousel）指标 -->
	<ol class="carousel-indicators">
    
     <?
        
		foreach ($imgs as $k=>$row){
		?>
		<li data-target="#myCarousel" data-slide-to="<?=$k?>" class="<?=($k==0)?"active":""?>"></li>
		<? }?>
	</ol>   
	<!-- 轮播（Carousel）项目 -->
	<div class="carousel-inner">
     <?
        
		foreach ($imgs as $k=>$item){
		?>
		<div class="item <?=($k==0)?"active":""?>">
			<img src="<?=$item?>" alt="First slide">
		</div>
		<? }?>
	</div>
	<!-- 轮播（Carousel）导航 -->
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="iconfont glyphicon-chevron-left" aria-hidden="true">&#xe643;</span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="iconfont glyphicon-chevron-left" aria-hidden="true">&#xe75e;</span>
		<span class="sr-only">Next</span>
	</a>
</div>



<? } else {?>
<img src="<?=$article['img']?>">


<? }?>

<h4>价格:&nbsp;<font  class="price">￥<?=$article['price']?></font></h4>
</div>

<? if ($article['content']){?>
<div style="clear:both"></div>
<br>
<span class="iconfont">&#xe6ed;</span> &nbsp;&nbsp;<font style="font-size:16px">商品内容</font>
<hr class="featurette-divider">


<div class="about_content col-sm-12">

<?=$article['content']?>
</div>

<? }?>
<span class="iconfont">&#xe626;</span> &nbsp;&nbsp;<font style="font-size:16px">商品参数</font>
<hr class="featurette-divider">

<div class="pcz">
<?
 $arrs=unserialize($article['arrs']);
 array_multisort(array_column($arrs,'sort'),SORT_ASC,$arrs);
 foreach ($arrs as $k=>$r){
?>


<div class="col-sm-4 csitem" >
 
 <?=$r['title']?>: <?=$r['value']?>

</div>
<? }?>
</div>






</div>
</div>


</div>
</div>
<?
include(TPLURL."/foot.tpl.php");
?>