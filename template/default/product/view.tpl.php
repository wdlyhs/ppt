<?
$_GET['cid']=$duoduo->select(MOD,"cid","id=".$_GET['id']);
$article=get_table("product",$_GET['id']);
include(TPLURL."/head.tpl.php");
include(TPLURL."/p.tpl.php");

//如果有属性，得获得属性值
$sql="select pa.value,a.title from xia_product_attr as pa,xia_attribute as a where  pa.aid=a.id and pa.pid=".$_GET['id']." and a.input_type=1";
$attributes=$duoduo->sql_to_array($sql);

?>
 <link rel="stylesheet" href="<?=TPLURL?>/css/show20191003.css" /> 


<div class="middle wlimit">
        <div class="m-l" swf="1" height="7970">

          <div class="banquan">


                 <?
                 if ($article['original']==2){
				 ?>
                        <i></i>
                        
                        <? }?>
            
            <h1 class="title"><?=$article['title']?></h1>
          <? 
                $scid=$duoduo->select("sczan","id","type=1 and pid=".$_GET['id']." and uid=".$dduser['id']);
				if ($scid){
				?>
            <em class="bj-collect "  user="<?=$dduser['id']?>" pid="<?=$_GET['id']?>" isfrom="5" issc="1"><em class="chose"></em>已收藏</em>
                <? }else{?>
                
                 <em class="bj-collect"  user="<?=$dduser['id']?>" pid="<?=$_GET['id']?>" isfrom="5" issc="0"><em></em>收藏</em>
                <? }?>
          </div>



                    <?
                    $list_type=get_title("type",$_GET['cid'],"list_type");
					if ($list_type==4){
					?>
                       <link rel="stylesheet" href="<?=TPLURL?>/css/audio20190522.css" /> 
                            <div class="guangp">
                      <i class="guxz"></i>
                      <i class="dy"></i>
                      <i class="xy"></i>
                      <i class="gp audio-stick"></i>
                </div>
                
                <div class="audio-box">
                  <i class="icon-bofang"></i>
                  <audio preload="none" id="audio850995" data-time="<?=get_s($article['mp3_time'])?>">
                      <source src="<?=$article['video']?>" type="audio/mpeg">
                  </audio>
                  <span class="star-time">00:00</span>
                  <div class="time-bar">
                      <span class="progressBar"></span>
                      <i class="move-color"></i>
                      <p class="timetip"></p>
                  </div>
                  <span class="end-time"><?=$article['mp3_time']?></span>
                <p class="timeTip"></p></div>
                
                <? } else {
					if ($article['video']){
					?>
                
                
                 <div class="videos" style="cursor: pointer;">
                    <video autoplay="autoplay" id="videoe" onclick="playPause()" src="<?=$article['video']?>" imgurl="<?=$article['video_img']?>" poster="<?=$article['video_img']?>" controls="controls" loop="loop">
                    </video>
                </div>
                
                
                <? }}?>
                            

              <div class="jian_content picjianjie">
              
                <?=$article['content']?>
              
              </div>
                    
            

               <?
               $search=get_title("type",$_GET['cid'],"search");
			   $rows= explode("\r\n", $search);
			   
			
			   if ($search){
			   ?>


                        <div class="m-about">
                <span>相关搜索</span>
                <ul>
                                      
                                      <?
                                      foreach ($rows as $vo){
									  ?>
                                      
                                        <li><a  href="<?=u(MOD,"list",array("cid"=>$_GET['cid'],"q"=>$vo))?>"><?=$vo?></a></li><? }?>
                                    </ul>
            </div>
            
            <? }?>
           
                    </div>


        <div class="m-r">
            <!--下载相关模块-->
            <div class="work-down">
                                       <span kid="1" style="display:block;" pid="<?=$article['id']?>" class="d-down"><i></i>
                                                立即下载
                                          </span>
                  
                  <div class="d-msg ">
                  
                  <? 
                $scid=$duoduo->select("sczan","id","type=2 and pid=".$_GET['id']." and uid=".$dduser['id']);
				if ($scid){
				?>
                  
                          <span class="d-view" title="点赞" style="width:25%"><i  user="<?=$dduser['id']?>" pid="<?=$_GET['id']?>"class="down-num dianzan yjdz"></i><span class="dzs"><?=$article['zan']?></span><span class="jiayi">+1</span></span>
                <? } else {?>
                  <span class="d-view" title="点赞" style="width:25%"><i  user="<?=$dduser['id']?>" pid="<?=$_GET['id']?>"class="down-num dianzan "></i><span class="dzs"><?=$article['zan']?></span><span class="jiayi">+1</span></span>
                
                <? }?>
                
                
            
 <span class="d-view" title="下载" style="width:25%"><i class="xz-num"></i><?=$article['xiazai']?></span>
                          <span class="d-view" title="浏览" style="width:25%"><i class="view-num"></i><?=$article['hits']?></span>
                          <span class="d-view" title="收藏" style="width:25%"><i class="coll-num"></i><span class="sc<?=$_GET['id']?>"><?=$article['sc']?></span>
                          
                          
                          </span>
                  </div>
              </div>
<style>
.xz-num{
	display: inline-block;
    margin-right: 10px;
    width: 22px;
    height: 20px;
    background: url(<?=TPLURL?>/images/common_new.png) -10px -8px no-repeat;
    vertical-align: -4px;
	}
</style>

                <div class="work-info">
                    <ul>
                                                 <li>
                            <span class="m-l2">软件</span>
                            <span class="m-r2"><?=$article['software']?></span>
                                                       <!-- <a target="_blank" rel="nofollow" href="https://img.tukuppt.com/banner/jiaocheng1.pdf" class="course">查看教程</a>-->
                                                    </li>
                        
                         <li>
                             <span class="m-l2">格式</span>
                            <span class="m-r2"><?=$article['format']?></span>
                        </li>
                                                 <li>
                             <span class="m-l2">大小</span>
                            <span class="m-r2">  <?=$article['size']?> MB</span>
                        </li>
                        
                         <li>
                             <span class="m-l2">作者</span>
                            <span class="m-r2">  <?=$article['author']?> </span>
                        </li>
                        
                        
                              <?
                              foreach ($attributes as $vo){
								    if ($vo['value']){
							  ?>
                                                 <li>
                             <span class="m-l2"><?=$vo['title']?> </span>
                            <span class="m-r2"><?=$vo['value']?></span>
                        </li>
                               <? }}?>               
                                                  <li>
                               <span class="m-l2">上传时间 </span>
                              <span class="m-r2"><?=format_date($article['addtime'])?></span>
                          </li>
                         
                         <li class="chose">
                            <span class="m-l2">版权 </span>
                                                        <span class="m-r2">
                                                            © 人物画像、字体及音频仅供参考
                                                            <em>i 
                                <div class="say" style="top:-202px; z-index:121212">
                                  <div class="s-tt">版权声明</div>
                                                                   
                                          <?=$webset['wap_banquan']?>
                                </div>
                                </em>
                            </span>
                                                  </li>
                                            </ul>
                                        <!--<a href="/about/level" target="_blank" class="dzweb dz-ppt">
                        <i></i>
                        懒得动手，帮我代做PPT
                        <em></em>
                    </a>-->
                              </div>
                              
            <?
			
			if ($list_type==1){
            $ps=$duoduo->select_all("product","id,img,title","cid=".$_GET['cid']." and id<>".$_GET['id']." order by id desc limit 0,3");
		
			?>
                    <div class="support">
              <div class="recommend">
                                最新相关作品                <a target="_blank" href="<?=list_url($duoduo,$_GET['cid'])?>">更多 &gt; </a>
               

              </div>
                            
                    <?
					$s=array("one","two","three");
                    foreach ($ps as $k=>$row){
					?>        
                            <a href="<?=u("product","view",array("id"=>$row['id']))?>" target="_blank" class="img">
                <i class="<?=$s[$k]?>"></i>
                <img class="lazy-nodelay" data-original="<?=$row['img']?>" src="<?=$row['img']?>" style="display: inline; width:100%">
              </a>
              
              <? }}?>
                        </div>
              </div>
</div>





  <?
    $list=$duoduo->select_all("product","*","cid=".$_GET['cid']." order by hits desc limit 0,8");
	
	?>
      

<div class="you-like">
    <div class="wlimit">
        <div class="y-title">热门模版</div>

                <?
include(TPLURL."/list_type.tpl.php");
?>

       
   
</div>
</div>


<?
include(TPLURL."/foot.tpl.php");
?>