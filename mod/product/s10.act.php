<?
dd_session_start();

?>
<? if ( $_SESSION['loacol_'.$_GET['cid']]){?>
<div class="historyso">

                   <i>搜索历史：</i><a class="tips-item" ishistory="1" href="javascript:;"><dd key-type="0" class="tips-keyword"><?=$_SESSION['loacol_'.$_GET['cid']]?></dd></a></div>
                   <? }?>
                    <?
               $search=get_title("type",$_GET['cid'],"search");
			   $rows= explode("\r\n", $search);
			   
			
			   if ($search){
			   ?>
                   <ul class="sotips tips-count" data-length="10" data-index="11">
                   
                     <? foreach ($rows as $k=>$vo){ 
					 $k++;
					 if ($k>3)
					     $style="";
						 else
						  $style=$k;
					 ?>
                 <li class="tips-item"><span class="bc<?=$style?>"><?=($k)?></span><a class="tips-keyword" herf="javascript:;"><?=$vo?></a></li>
                 
                 <? }?>
                 
                 </ul>
                 <? }?>