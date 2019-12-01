<?
	$cid=$_REQUEST['cid'];
	$pid=$_REQUEST['pid'];
	$tmep_cid=get_title("product",$pid,"cid");
	$rows=$duoduo->select_all("attribute","*","cid=$cid order by sort desc,id desc"); 
	$html="";
	foreach ($rows as $row){
?> 
    <?  if ($row['input_type']==1){ ?>
        <tr class="arr">
        <td width="115px" align="right"><?=$row['title']?>：</td>
        <td>&nbsp;<input name="product_<?=$row['id']?>" type="text" value="<?=a1($cid,$pid,$row['id'])?>" /></td>
         </tr>
    <? }?>
    
    <?  if ($row['input_type']==2){
		   $arrs=attribute_arr($row['id']);
		   $b=a1($cid,$pid,$row['id']);
		  
		 ?>
        <tr class="arr">
        <td width="115px" align="right"><?=$row['title']?>：</td>
        <td>&nbsp;<?=select($arrs,$b,"product_".$row['id'])?></td>
         </tr>
    <? }?>
    
     <?  if ($row['input_type']==3){
		   $arrs=attribute_arr($row['id']);
		   $b=a2($cid,$pid,$row['id']);
		   
		   //判断有没有父属性，如果有就隐藏
		   $fid=get_title("attribute",$row['id'],"aid");
		   if ($fid>0)
		       $disabled="disabled";
		  //获取上级aid
		  $str="";
		  $as=dd_attributes($row['id']);
		 ?>
        <tr class="arr <?=$as?>"  >
        <td width="115px" align="right"><?=$row['title']?>：</td>
        <td aid=<?=$row['id']?>><?=checkbox($arrs,$b,"product_".$row['id'],$disabled)?></td>
         </tr>
    <? }?>
    
    
    
    
<? }?>

<style>
.hidden{display:none}
.ack{ cursor:pointer}
.disabled{color:#999; background:url()}
</style>

<script>
$(".arr").on("click","input[type=checkbox]", function(e){ //user click on remove text  
       
	
            checked=$(this).attr('checked');
			if (checked=="checked"){
				aaid=$(this).attr("aaid");
				$("#a"+aaid).attr('checked',true);
				aid=$(this).parent().parent().attr("aid");
				$(".a"+aid).find("input[type=checkbox]").attr("disabled","disabled");
				$(".a"+aid).find(".aaaa").addClass("disabled");
				aaid=$(this).val();
				$(".aitems"+aaid).attr("disabled",false);
				$(".aitems"+aaid).next().removeClass("disabled");
				
			}else{
				
			     aaid=$(this).val();
				 $(".delaitems"+aaid).attr("disabled",true);
				  $(".delaitems"+aaid).attr('checked',false);
				 $(".delaitems"+aaid).next().addClass("disabled");
				 
			}
			
			
			
			
			
			
       
})  

$("body").on("click",".aaaa", function(e){
	
	if($(this).hasClass("disabled")){
		return false;
	}
	$(this).prev().attr('checked',true);
	aid=$(this).parent().parent().attr("aid");
	$(".a"+aid).find("input[type=checkbox]").attr("disabled","disabled");
	$(".a"+aid).find(".aaaa").addClass("disabled");
	aaid=$(this).prev().val();

	$(".aitems"+aaid).attr("disabled",false);
	$(".aitems"+aaid).next().removeClass("disabled");
}) 
</script>