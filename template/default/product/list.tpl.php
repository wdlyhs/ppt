<?

$parameter=act_product_list(20);
extract($parameter);

include(TPLURL."/head.tpl.php");
include(TPLURL."/p.tpl.php");

?>
       

    <!--中部的东西-->
    



 <div class='type wlimit'>
         <div class='f-type' >
            <div class="uli">
              <!--  <a  class="" key-type="0"  href="/comprehensive/" >全部</a> -->
                                           
                                          <?
                                  
                                   foreach ($types as $k=>$row){
									   $k++;
                                   ?>
                                             <a  class="<?=($row['id']==$_GET['cid'])?"f-chose":""?>" key-type="1"  href="<?=list_url($duoduo,$row['id'])?>" ><?=$row['title']?></a> 
                                            <? }?>
                                </div>
          </div>
        
        
        <?
        $attribute=attribute($_GET['cid'],$_GET['attr']);
		
		foreach ($attribute as $row){
		?>
                <div class='type1'>
            <div class='all-type'><?=$row['title']?>：</div>
            <div class="uli">
            
                               <?
                               foreach ($row['child'] as $vo){
							   ?>
                                      <a  class="<?=($vo['active']==1)?"current":""?>" href="<?=u(MOD,"list",array("cid"=>$_GET['cid'],"attr"=>$vo['attr']))?>"><?=$vo['title']?></a>
                                      
                                      <? }?>
                                     
                            </div>
            <div class="gengduo" style="display: none;">
                更多<i></i>
            </div>
        </div>
               <? }?>
        </div>



<div class='hot-topic'>
    <div class='wlimit'>
        <a rel="nofollow" class="sort <?=empty($_GET['order'])?"chose":""?>" href="<?=u(MOD,"list",array("attr"=>$_GET['attr'],"q"=>$_GET['q'],"cid"=>$_GET['cid']))?>">综合排序</a>
        <a rel="nofollow" class="sort <?=($_GET['order']=="xiazai")?"chose":""?>" href="<?=u(MOD,"list",array("attr"=>$_GET['attr'],"q"=>$_GET['q'],"cid"=>$_GET['cid'],"order"=>"xiazai"))?>">热门下载</a>
        <a rel="nofollow" class="sort <?=($_GET['order']=="id")?"chose":""?>" href="<?=u(MOD,"list",array("attr"=>$_GET['attr'],"q"=>$_GET['q'],"cid"=>$_GET['cid'],"order"=>"id"))?>">最新上传</a>   

        
    </div>
</div>


<?
include(TPLURL."/list_type.tpl.php");
?>







   <?
   include(TPLURL."/foot.tpl.php");
   ?>
   
