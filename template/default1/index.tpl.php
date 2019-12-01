<?
include(TPLURL."/head.tpl.php");
?>


 <?
 if (!is_mobile()){
 ?>
      <div id="myCarousel" class="carousel slide ">
	<!-- 轮播（Carousel）指标 -->
	<ol class="carousel-indicators">
    
     <?
        
		foreach ($slides as $k=>$row){
		?>
		<li data-target="#myCarousel" data-slide-to="<?=$k?>" class="<?=($k==0)?"active":""?>"></li>
		<? }?>
	</ol>   
	<!-- 轮播（Carousel）项目 -->
	<div class="carousel-inner">
     <?
        
		foreach ($slides as $k=>$row){
		?>
		<div class="item <?=($k==0)?"active":""?>">
			<img src="<?=$row['img']?>" alt="First slide">
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

<div id="myCarousel" class="carousel slide visible-xs">
	<!-- 轮播（Carousel）指标 -->
	<ol class="carousel-indicators">
    
     <?
	 $slides=dd_slides($duoduo,6,"*",2);
        
		foreach ($slides as $k=>$row){
		?>
		<li data-target="#myCarousel" data-slide-to="<?=$k?>" class="<?=($k==0)?"active":""?>"></li>
		<? }?>
	</ol>   
	<!-- 轮播（Carousel）项目 -->
	<div class="carousel-inner">
     <?
        
		foreach ($slides as $k=>$row){
		?>
		<div class="item <?=($k==0)?"active":""?>">
			<img src="<?=$row['img']?>" alt="First slide">
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
<? }?>

<div class="section2" style="position:relative; z-index:12121">
<!--<div class="section1">
<div class="container">
<div class="s1 s1-1 wow fadeInUp" data-wow-delay=".3s">
<a title="生产经验" href="https://www.cmseasy.cn/demo/business-template/v471/fu-wu-fan-wei/show_184.html" target="_blank">
<h3>23<small></small></h3>
<div class="s1-text">
<h4><font style="color:;">生产经验</font></h4>
<p>oduction experience</p>
<div class="s1-img">
<script src="https://edge.yunjiasu.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="3347e483a4e9ba1bd3282e48-|49"></script><img alt="生产经验" src="https://www.cmseasy.cn/demo/business-template/v471/upload/images/201801/15157479436906.png" onerror='this.src="/images/nopic.gif"' />
</div>
</div>
</a>
</div>
<div class="s1 s1-2 wow fadeInUp" data-wow-delay=".4s">
<a title="出口国家" href="https://www.cmseasy.cn/demo/business-template/v471/fu-wu-fan-wei/show_185.html" target="_blank">
<h3>65<small></small></h3>
<div class="s1-text">
<h4><font style="color:;">出口国家</font></h4>
<p>ecporting nations</p>
<div class="s1-img">
<script src="https://edge.yunjiasu.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="3347e483a4e9ba1bd3282e48-|49"></script><img alt="出口国家" src="https://www.cmseasy.cn/demo/business-template/v471/upload/images/201801/15157480503257.png" onerror='this.src="/images/nopic.gif"' />
</div>
</div>
</a>
</div>
<div class="s1 s1-3 wow fadeInUp" data-wow-delay=".5s">
<a title="厂房面积" href="https://www.cmseasy.cn/demo/business-template/v471/fu-wu-fan-wei/show_186.html" target="_blank">
<h3>72<small>k</small></h3>
<div class="s1-text">
<h4><font style="color:;">厂房面积</font></h4>
<p>plant area</p>
<div class="s1-img">
<script src="https://edge.yunjiasu.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="3347e483a4e9ba1bd3282e48-|49"></script><img alt="厂房面积" src="https://www.cmseasy.cn/demo/business-template/v471/upload/images/201801/15157481488414.png" onerror='this.src="/images/nopic.gif"' />
</div>
</div>
</a>
</div>
</div>
</div>-->


                        
                        
                        
<div class="container" style="padding-top:30px">
<div class="title10 wow fadeInUp" data-wow-delay=".3s">
<h4><a title="产品展示" href="https://www.cmseasy.cn/demo/business-template/v471/chan-pin-zhan-shi" target="_blank">产品展示</a></h4>
<p>PRODUCT</p>
<ul class="nav nav-pills">

<?

$ps=dd_product_sons($duoduo,708,3);

$types=get_types($duoduo,708);
array_unshift($types,array("title"=>"全部","id"=>708));
foreach ($types as $k=>$row){ 
?>
<li style="float:none; display:inline-block" class="<?=($k==0)?"active":""?>"><a href="#home<?=$row['id']?>" data-toggle="tab" aria-expanded="<?=($k==0)?"true":"false"?>"><?=$row['title']?></a></li>
<? }?>
</ul>
</div>


 <div class="tab-content">
<?
foreach ($types as $k=>$row){ 
?> 
<div class="row tab-pane fade <?=($k==0)?"active in":""?>" id="home<?=$row['id']?>" >

<?

$ps=dd_product_sons($duoduo,$row['id'],3);
foreach ($ps as $r){
?>
<div class="col-sm-4">
<div class="s2-item wow fadeInUp" data-wow-delay=".8s">
<a title="<?=$r['title']?>" href="<?=u("product","view",array("id"=>$r['id']))?>" target="_blank">
<div class="s2-img">
<img alt="<?=$row['title']?>" src="<?=$r['img']?>" />
<!--<p>型号齐全</p>-->
</div>
<div class="s2-text">
<h4><font style="color:;"><?=$r['title']?></font></h4>
<h4><font  class="price">￥&nbsp;<?=$r['price']?></font></h4>
<!--<p>原装配件的使用是工业制粉设备得以保持较长服务周期的关键要素。所有工业制粉设备主要零部件和易损件均选用最优质的耐磨材料，采</p>-->
</div>
</a>
</div>
</div>

<? }?>
</div>
<? }?>
</div>
<div class="index-more wow fadeInUp" data-wow-delay=".3s">
<a href="<?=list_url($duoduo,708)?>" title="" target="_blank">more</a>
</div>
</div>
</div>
<!--<div class="section3">
<div class="container">
<div class="title10 wow fadeInUp" data-wow-delay=".3s">
<h4><a title="资讯中心" href="<?=list_url($duoduo,719)?>" target="_blank">新闻资讯</a></h4>
<p>NEWS</p>
</div>
<div class="row">



<?
$news=dd_article_sons($duoduo,719,4);
foreach ($news as $row){
?>
<div class="col-sm-6">
<div class="s3-item wow fadeInUp" data-wow-delay=".6s">
<a title="<?=$row['title']?>" href="<?=aurl($row['id'])?>" target="_blank">
<div class="s3-img">
<img alt="<?=$row['title']?>" src="<?=get_article_img($row['id'])?>"  />
</div>
<div class="s3-text">
<h4><font style="color:;"><?=$row['title']?></font></h4>
<p><?=get_str($row['content'],45)?>...</p>
</div>
</a>
</div>
</div>

<? }?>
</div>
</div>
</div>-->

<div class="section4" data-stellar-background-ratio="0.5">
<div class="container">
<div class="clearfix s4 wow fadeInUp" data-wow-delay=".3s">
<div class="col-sm-6">
<div class="s4-img">
<a title="关于我们" href="https://www.cmseasy.cn/demo/business-template/v471/guan-yu-wo-men" target="_blank"><script src="https://edge.yunjiasu.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="3347e483a4e9ba1bd3282e48-|49"></script><img alt="关于我们" src="http://www.wthuanbao.cn/html/upload/images/201907/15590055325938.jpg"  /></a>
</div>
</div>
<div class="col-sm-6">
<div class="s4-text clearfix">
<h4>关于我们</h4>
<span>about us</span>
<p><?=get_str(get_content(705),120)?>...</p>
<a title="关于我们" href="<?=list_url($duoduo,705)?>" target="_blank">more</a>
</div>
</div>
</div>
</div>
</div>
<div class="section5">
<div class="container">
<div class="title10">
<h4><a title="项目案例" href="<?=list_url($duoduo,711)?>" target="_blank">项目案例</a></h4>
<p>Case</p>
</div>
<div class="row">

<?
$cases=dd_article_sons($duoduo,711,6);
foreach ($cases as $row){
?>



<!--<div class="clearifx"></div>-->


<div class="col-sm-4">
<div class="s2-item wow fadeInUp" data-wow-delay=".8s">
<a title="<?=$row['title']?>" href="javascript:;" target="_blank">
<div class="s2-img">
<img alt="<?=$row['title']?>" src="<?=$row['img']?>" />
<!--<p>型号齐全</p>-->
</div>
<div class="s2-text">
<h4><font style="color:;"><?=$row['title']?></font></h4>
<!--<p>原装配件的使用是工业制粉设备得以保持较长服务周期的关键要素。所有工业制粉设备主要零部件和易损件均选用最优质的耐磨材料，采</p>-->
</div>
</a>
</div>
</div>

<? }?>
<script src="https://edge.yunjiasu.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="3347e483a4e9ba1bd3282e48-|49"></script>
</div>
</div>
</div>

<?
include(TPLURL."/foot.tpl.php");
?>