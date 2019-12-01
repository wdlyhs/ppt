<?php 
/**
 * ============================================================================
 * 版权所有 多多科技，保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/ 



if(!defined('ADMIN')){
	exit('Access Denied');
}

include(ADMINTPL.'/header.tpl.php');
if (empty($row))
   $did=$duoduo->select("type","id","1=1 order by sort desc");
   else
   $did=$row['cid'];
if (empty($row) and $_GET['cid'])
    $did=$_GET['cid'];
?>
<form action="index.php?mod=<?=MOD?>&act=<?=ACT?>" method="post" name="form1">
<table id="addeditable"  align="center" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
  <tr>
    <td width="115px" align="right">名称：</td>
    <td>&nbsp;<input name="title" type="text" id="title" value="<?=$row['title']?>" style="width:500px" /></td>
  </tr>
   <tr>
    <td align="right">状态：</td>
   
    <td>&nbsp; <?=html_radio(array(1=>'上架',2=>'下架'),$row['status']?$row['status']:1,'status')?></td>
  </tr>
  
  <tr>
    <td width="115px" align="right">分类：</td>
    <td>&nbsp;<select name="cid" id="jian_type"><?php getCategorySelect(($row['cid'])?$row['cid']:$_GET['cid'],0,0,2);?></select></td>
  </tr>
  
  
  
  
  <tr>
    <td align="right">缩略图：</td>
    <td>&nbsp;<input name="img" type="text" id="img" value="<?=$row['img']?>" style="width:300px" /> <input class="sub" type="button" value="上传文件" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'img','sid'=>session_id()))?>','upload','450','350')" /> (常规288*405,视频/ppt图表288*162,广告样式无要求,音频不用传,免抠元素宽度必须为260px高度随意)</td>
  </tr>


<tr>
    <td align="right">视/音频：</td>
    <td>&nbsp;<input name="video" type="text" id="video" value="<?=$row['video']?>" style="width:300px" /> <input class="sub" type="button" value="上传文件" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'video','sid'=>session_id()))?>','upload','450','350')" /> </td>
  </tr>

  <tr>
    <td width="115px" align="right">原创：</td>
     <td>&nbsp; <?=html_radio(array(1=>'不是',2=>'是'),$row['original']?$row['original']:1,'original')?></td>
  </tr>
  
  
  <tr>
    <td align="right">软件文件：</td>
    <td>&nbsp;<input name="xia" type="text" id="xia" value="<?=$row['xia']?>" style="width:300px" /> <input class="sub" type="button" value="上传文件" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'xia','sid'=>session_id()))?>','upload','450','350')" /> (可直接填写网盘地址)</td>
  </tr>
  
  
  
  <!--<tr>
    <td width="115px" align="right">网盘地址：</td>
    <td>&nbsp;<input name="url" type="text" id="title" value="<?=$row['url']?>" style="width:300px" />(文件下载此处有内容以处为准，无内容则以上面文件为准)</td>
  </tr>
  -->
  
  
  
 <tr>
    <td width="115px" align="right">软件：</td>
    <td>&nbsp;<input name="software" type="text" id="title" value="<?=$row['software']?>" /></td>
  </tr>
  
  <tr>
    <td width="115px" align="right">作者：</td>
    <td>&nbsp;<input name="author" type="text" id="title" value="<?=$row['author']?>" /></td>
  </tr>
  <tr>
    <td width="115px" align="right">格式：</td>
    <td>&nbsp;<input name="format" type="text" id="title" value="<?=$row['format']?>" /></td>
  </tr>
  
  
  
  
  
  
  <tr id="aa">
    <td width="115px" align="right">大小：</td>
    <td>&nbsp;<input name="size" type="text" id="title" value="<?=$row['size']?>" />(填数字即可，单位为MB)</td>
  </tr>
  
  


  

  
  

  
  
  <tr>
    <td align="right">更新时间：</td>
    <td>&nbsp;<input name="addtime" type="text" id="sdatetime" value="<?=($row['addtime'])?date("Y-m-d H:i:s",$row['addtime']):date("Y-m-d H:i:s",time())?>"/> </td>
  </tr>
  <tr>
    <td width="115px" align="right">收藏数：</td>
    <td>&nbsp;<input name="sc" type="text" id="title" value="<?=($row['sc'])?$row['sc']:rand(200,500)?>" /></td>
  </tr>
  <tr>
    <td width="115px" align="right">点赞数：</td>
    <td>&nbsp;<input name="zan" type="text" id="title" value="<?=($row['zan'])?$row['zan']:rand(200,500)?>" /></td>
  </tr>
  
  <tr>
    <td width="115px" align="right">下载数：</td>
    <td>&nbsp;<input name="xiazai" type="text"  value="<?=($row['xiazai'])?$row['xiazai']:rand(200,500)?>" /></td>
  </tr>
  
  <tr>
    <td width="115px" align="right">浏览量：</td>
    <td>&nbsp;<input name="hits" type="text"  value="<?=($row['hits'])?$row['hits']:rand(1000,5000)?>" /></td>
  </tr>
  
  <tr>
    <td width="115px" align="right">时长：</td>
    <td>&nbsp;<input name="mp3_time" type="text"  value="<?=($row['mp3_time'])?$row['mp3_time']:"00:00"?>" />(音频文件会用到，其它不用填)</td>
  </tr>
  
  
 
 <tr>
    <td align="right">内容：</td>
    <td>&nbsp;<textarea  name="content" id="content"  style="width:708px; height:208px"><?=$row['content']?></textarea></td>
  </tr>
  
  
  
  
  
  
  
  
    <td align="right">排序：</td>
    <td>&nbsp;<input name="sort" type="text" id="sort" value="<?=$row['sort']?$row['sort']:0?>" /> <span class="zhushi">数字越大越靠前</span></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;
    
    
    <input type="hidden" name="id" value="<?=$row['id']?>" /><input type="submit" class="sub" name="sub" value=" 保 存 " /></td>
  </tr>
</table>
</form>

  <script>
	   sh(<?=$did?>,<?=$row['id']?>);
	   function sh(cid,pid){
		   
		     p=1;
		     if (p==1){
	         p=2;
	       $.ajax({
			url: '/index.php?mod=<?=MOD?>&act=attribute&sjs='+new Date().getTime(),
			type: "POST",
			data: {cid:cid,pid:pid},
			dataType: "text",
			success:function(data){
				 p=1;
				$(".arr").remove();
				$("#aa").after(data)
				   
				
			   	 
				
				
	},
	error:function(error){
		p=1;
	}
});
         
 
 
 
	 }	   
		 
		 
		 
 }
 
 $("#jian_type").change(function(){
        $(".arr").remove();
	   sh($(this).val(),<?=$row['id']?>);
});
</script>
<style>
.ack{ padding:5px; float:left;}
</style>

<?php include(ADMINTPL.'/footer.tpl.php');?>