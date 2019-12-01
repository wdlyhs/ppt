<!--样1-->
<?

if ($top_row['list_type']==1){
?>

<div class='t-box wlimit '>
    <div class='b-box'>
                        
     <? foreach ($list as $row){
		 
		 ?>    
          <dl data-id="enpvnvvv" class='cbox s-box ' >

    <dd>
        <a target="_blank" href="<?=u("product","view",array("id"=>$row['id']))?>">
        <img  alt="<?=$row['title']?>"  class='s-pic lazy'  data-original="<?=$row['img']?>" src="<?=TPLURL?>/images/background.png">
        </a>
    </dd>

   
    <dt class='p-title'>
        <a target="_blank" href="<?=u("product","view",array("id"=>$row['id']))?>"><?=$row['title']?></a>
    </dt>

    <dd class='explain'>
        <span  class='coll'>
            <span class="dianzan-num"><i></i><span class="dzs"><?=$row['zan']?></span></span>
            <span title="收藏" class='coll-num'><i></i><span class="sc<?=$row['id']?>"><span class=""><?=$row['sc']?></span></span>
        </span>
                    <a rel="nofollow" target="_blank" href="<?=u("product","view",array("id"=>$row['id']))?>"><div class='mark' ></div></a>

                                <span  class='b-down box-down' pid="<?=$row['id']?>">立即下载</span>
                
                <?
                $scid=$duoduo->select("sczan","id","type=1 and pid=".$row['id']." and uid=".$dduser['id']);
				if ($scid){
				?>
                <span   class='b-collect chose'  user="<?=$dduser['id']?>" pid="<?=$row['id']?>" isfrom="0" issc="1">已收藏    </span>            
                <? }else {?>
                    <span   class='b-collect'  user="<?=$dduser['id']?>" pid="<?=$row['id']?>" isfrom="0" issc="0">收藏 </span>               
                <? }?>
                    
                    <?  if ($row['original']==2){?>
                        <div class="banquan"></div>
                        
                        <? }?>         
            
    </dd>

    </dl>              
      <? }?>                  
                        
   </div>
   </div>
 <? }?>  
 
 <!--样1结束-->
 
  <!--样2-->
 <?

if ($top_row['list_type']==2){
?>
   


<div class='t-box wlimit '>
                        <div id="demo1" class="flex-images">
                    
   
                <? foreach ($list as $row){
		 
		 $wh=wh($row['img']);
          
		 ?> 
   
       <dl class="cbox item" data-w="<?=$wh[0]?>" data-h="<?=$wh[1]?>">
	<a href="javascript:;"  class='ljxzk box-down' pid=<?=$row['id']?>><i></i>下载</a>
    
       <?
                $scid=$duoduo->select("sczan","id","type=1 and pid=".$row['id']." and uid=".$dduser['id']);
				if ($scid){
				?>
              
                
         <span class='ljsck b-collect chose' user="<?=$dduser['id']?>" pid="<?=$row['id']?>" issc="1" isfrom="2"></span>
    
    <? } else {?>
    
     <span class='ljsck b-collect' user="<?=$dduser['id']?>" pid="<?=$row['id']?>" issc="0" isfrom="2"></span>
    <? }?>
    <a href="<?=u("product","view",array("id"=>$row['id']))?>" target="_blank"><img title="<?=$row['title']?>" class="lazy" alt="<?=$row['title']?>"  data-original="<?=$row['img']?>" src="<?=TPLURL?>/images/background.png">
    </a>
    
	
</dl>
   
                 
  <? }?>
                 
  
                  
   
                                    </div>
            </div>




<? }?>
  <!--样2结束-->
 
  
   <!--样3-->
    <?

if ($top_row['list_type']==3){
?>
   
     
     <div class="t-box wlimit ">
                        <div class="b-box">
                                                         
             <? foreach ($list as $row){ ?>
            
                                            <dl data-id="lnyzeebk" class="cbox s-box video">
    <dd>
        <a href="<?=u("product","view",array("id"=>$row['id']))?>" target="_blank">
            <video class="onetwolnyzeebk" src="<?=$row['video']?>"   style="z-index:12121">
            </video>
        </a>
        <a href="<?=u("product","view",array("id"=>$row['id']))?>" target="_blank" class="img-none">
            <img alt="<?=$row['title']?>" class="s-pic lazy" data-original="<?=$row['img']?>" src="<?=TPLURL?>/images/background.png">
        </a>
                <a rel="nofollow" href="javascript:;"  class="v-down box-down" pid="<?=$row['id']?>">下载</a>
         <?
                $scid=$duoduo->select("sczan","id","type=1 and pid=".$row['id']." and uid=".$dduser['id']);
				if ($scid){
				?>
              
        <span class="v-collect b-collect chose " user="<?=$dduser['id']?>" pid="<?=$row['id']?>" isfrom="2" issc="1"></span>
        <? } else {?>
        
         <span class="v-collect b-collect" user="<?=$dduser['id']?>" pid="<?=$row['id']?>" isfrom="2" issc="0"></span>
        <? }?>
        <span class="mc-bottom"></span>
        <span class="video-bq "></span>
    </dd>

    <dt class="title "><?=$row['title']?></dt>

    </dl>    
    
    <? }?>
    
                                    </div>
            </div>
            
            
            
    <link rel="stylesheet" href="<?=TPLURL?>/css/video20190522.css" /> 

 <? }?>
   <!--样3结束-->
   
   
   <!--样4-->
    <?

if ($top_row['list_type']==4){
	
	
	
?>
   <link rel="stylesheet" href="<?=TPLURL?>/css/audio20190522.css" /> 

<div class="t-box wlimit ">
                        <div class="b-box">
                        
                  <? foreach ($list as $row){ 
				  
				   
				  ?>        
                      <dl data-id="vnjdbpox" class="cbox audio-box ">
    <i class="icon-bofang"></i>
    <dt class="info">
        <a class="title" target="_blank" href="<?=u("product","view",array("id"=>$row['id']))?>"><?=$row['title']?></a>
                <a target="_blank" href="javascript:;" class="down box-down" pid="<?=$row['id']?>"><i></i>下载</a>
                
             <?
                $scid=$duoduo->select("sczan","id","type=1 and pid=".$row['id']." and uid=".$dduser['id']);
				if ($scid){
				?>
        <a class="collect b-collect c-chose"  user="<?=$dduser['id']?>" pid="<?=$row['id']?>"  isfrom="3" issc="0"></a>
        
        <? } else {?>
        
        <a  class="collect b-collect "  user="<?=$dduser['id']?>" pid="<?=$row['id']?>"  isfrom="3" issc="0"></a>
        <? }?>
            </dt>
    <audio   class="jian_audio" data-time="<?=get_s($row['mp3_time'])?>">
        <source src="<?=$row['video']?>" type="audio/mpeg">
    </audio>
    <span class="star-time">00:00</span>
    <div class="time-bar">
        <span class="progressBar"></span>
        <i class="move-color"></i>
        <p class="timetip"></p>
    </div>
    <span class="end-time"><?=$row['mp3_time']?></span>

      <p class="timeTip"></p></dl>  
      
      
      <? }?>
                        
         </div>    </div>

<? }?>
 <!--样4结束-->
 
 
  <!--样5-->
    <?

if ($top_row['list_type']==5 and count($list)>0){?>

<div class="t-box wlimit ">
   <div class="b-box">
                        
                          <? foreach ($list as $row){  ?>     
                        <dl data-id="dldrmjwl" class="cbox s-box pptubiao" style="height:auto">

    <dd>
        <a target="_blank" href="<?=u("product","view",array("id"=>$row['id']))?>">
        <img alt="<?=$row['title']?>" style="height: 162px; display: inline;" class="s-pic lazy" data-original="<?=$row['img']?>" src="<?=$row['img']?>">
        </a>
    </dd>

   
    <dt class="p-title">
        <a target="_blank" href="<?=u("product","view",array("id"=>$row['id']))?>"><?=$row['title']?></a>
    </dt>

    <dd class="explain">
        <span class="coll">
            <span class="dianzan-num"><i></i><span class="dzs"><?=$row['zan']?></span></span>
            <span title="收藏" class="coll-num"><i></i><span class="sc<?=$row['id']?>"><span class=""><?=$row['sc']?></span></span>
        </span>
                    <a rel="nofollow" target="_blank" href="<?=u("product","view",array("id"=>$row['id']))?>"><div class="mark" style="height:162px"></div></a>

                
                <a href="javascript:;"  class="ljxzk box-down" pid=<?=$row['id']?>><i></i>下载</a>
                 <?
                $scid=$duoduo->select("sczan","id","type=1 and pid=".$row['id']." and uid=".$dduser['id']);
				if ($scid){
				?>
                <a class="ljsck d-coll chose" user="<?=$dduser['id']?>" pid="<?=$row['id']?>" issc="1" isfrom="2"></a>
                
                <? } else {?>
                
                 <a class="ljsck d-coll" user="<?=$dduser['id']?>" pid="<?=$row['id']?>" issc="0" isfrom="2"></a>
                <? }?>
            
    </dd>

    </dl>
                        
        <? }?>                
                        
   </div>  </div>

<? }?>

  <!--样5结束-->
  
  
 
 
 
 
  
  <!--样6-->
    <?

if ($top_row['list_type']==6 and count($list)>0){
	
	   
	?>

<link rel="stylesheet" href="<?=TPLURL?>/css/png20191016.css" /> 

<div class='t-box wlimit list'>
                       <div class="ones pngones">
                       
    <? foreach ($list as $row){ 
	        $wh=wh($row['img']);
			
	 ?>     
               
               <dl class='box two grid-v cbox' data-id="xpdwmbax">
    <dd> 
        <a class='img img-ys' style="height:<?=$wh[1]?>px;" href="<?=u("product","view",array("id"=>$row['id']))?>" target="_blank">

        <img class="lazy"  data-original="<?=$row['img']?>" >
        <div class='mark'></div>
        </a>
    </dd>

    <dt>
       <a href="<?=u("product","view",array("id"=>$row['id']))?>" target="_blank" class='btitle'>
       <?=$row['title']?>       </a>
    </dt>

    <dd class="jianaa">
    
     <? $scid=$duoduo->select("sczan","id","type=1 and pid=".$row['id']." and uid=".$dduser['id']);
		if ($scid){
	 ?>
         <span class="v-collect chose d-coll" user="<?=$dduser['id']?>" pid="<?=$row['id']?>" issc="1" isfrom="2"></span>
         
         <? } else {?>
          <span class="v-collect d-coll" user="<?=$dduser['id']?>" pid="<?=$row['id']?>" issc="0" isfrom="2"></span>
         
         <? }?>
        <span pid="xpdwmbax" type="1" class='box-down down ybc downpng'><i></i>下载</span>

            <!--    <span type="2" pid="xpdwmbax"  class='click-down down1 gbc downpng'><i></i>
            PSD        </span>-->
        
        <span class='downco'>
            <span class="dx"><i></i><?=$row['zan']?></span>
            <span class="collectnum"><i></i><span class="sc<?=$row['id']?>"><?=$row['sc']?></span></span>
        </span>
                
    </dd>

    </dl>                       
   
     <? }?> 
         
    
   
                                         
    
   
                                         
    
   
                                         



  <style>
  .jianaa .chose{
     background: url(<?=TPLURL?>/images/video.png) -11px -36px no-repeat #fff;
}
     .v-collect {
    position: absolute;
    top: 23px;
    left: 42%;
    z-index: 2;
    margin-left: 23px;
    padding-left: 0;
    width: 35px;
    height: 35px;
    border-radius: 2px;
    background: url(<?=TPLURL?>/images/video.png) -11px 7px no-repeat #fff;
    color: #333;
	cursor:pointer;
    letter-spacing: 7px;
    font-size: 20px;
    font-size: 17px;
    line-height: 35px;
    opacity:0;-webkit-transform:scale(0);-moz-transform:scale(0);-ms-transform:scale(0);-o-transform:scale(0);transform:scale(0);-webkit-transition:all .5s;-moz-transition:all .5s;-ms-transition:all .5s;-o-transition:all .5s;transition:all .5s
}
     </style>                  



                       
                                     
           </div>

     </div>         
           

<? }?>

  <!--样6结束-->
  
   
  
  
  
  
  
  
  
  <?
if (empty($list)){
?>
<div class="uploadempty  wlimit " style="height:500px;">
     <div class="emptylogo"></div>
     <div class="emptywen">找不到匹配信息！！~</div>
</div>
<? }?>
 <div class='clear'></div>

<?
if ($total > $pagesize){
?>
<div class='page' >
  <div class="wlimit">
      <div class="pagenew">
         <div class="pageinfo">
             <div class="page" style="text-align:center">
		<div class="pageNav"><?=zhe_page($total,$pagesize,$page_url,WJT)?></div>
	</div>
         </div>
      </div>
      </div>
</div>

<? }?>
