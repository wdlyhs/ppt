<?
include(DDROOT."/mod/user/sc.act.php");
$parameter=act_user_sc(20);
extract($parameter);
include(TPLURL."/head.tpl.php");

?>

<!--中部的东西-->
  <?
  include(TPLURL."/user/head.tpl.php");
    include(TPLURL."/user/menu.tpl.php");
  ?>






<!--<div class="p-types co-types wlimit ">
      <a href="/index/usercenter/collect"><span class="p-box p-chose">作品</span></a> 
      <a href="/index/usercenter/collect?iszhuanti=1"><span class="p-box ">专题</span></a>
</div>-->
<div class='comprehensive com-types wlimit' style="margin-top:2px;">
  <ul>
  
         <?
                                  
                                   foreach ($types as $row){
                                   ?>
  	    <li class='<?=($row['id']==$_GET['cid'])?"chose":""?>'><a href="<?=u(MOD,ACT,array("cid"=>$row['id']))?>"><?=$row['title']?></a></li>
	  <? }?>
	  </ul>
</div>


<?
include(TPLURL."/list_type.tpl.php");
?>



<?
if (empty($list)){
?>
<div class="uploadempty  wlimit " style="height:500px;">
     <div class="emptylogo"></div>
     <div class="emptywen">空空如也~ 赶快去收藏模板吧~</div>
</div>
<? }?>

<?
include(TPLURL."/foot.tpl.php");
?>