<?php 
/**
 * ============================================================================
 * 版权所有 2008-2012 多多科技，并保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/

if(!defined('ADMIN')){
	exit('Access Denied');
}

include(ADMINTPL.'/header.tpl.php');
?>
<form action="index.php?mod=<?=MOD?>&act=<?=ACT?>" method="post" name="form1">
<table id="addeditable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
  <tr>
    <td width="115px" align="right">父栏目：</td>
    <td>&nbsp;<select name="pid" style="font-size:12px"><option value="0">--顶层栏目--</option><?php getCategorySelect($pid);?></select></td>
  </tr>
  <tr>
    <td align="right">栏目名称：</td>
    <td>&nbsp;<input name="title" type="text" id="title"  width="500px" value="<?=$row['title']?>"/><? if(!$row['id']){?>(可批量添加，标题之间有用,号隔开)<? }?></td>
  </tr>

  
  
  <tr>
    <td align="right">模块：</td>
    <td>&nbsp;<select name='model_id' class="f_cid">
     
    <? 
	$types=$duoduo->select_all("model","*","1=1 order by sort desc ,id desc");
	foreach ($types as $row2){?>
    <option value="<?=$row2['id']?>"  <? if($row2['id']==$row['model_id']) echo "selected"?>><?=$row2['title']?></option>  
	
	
	<? }?>
    </select>
    
   
   
    </td>
  </tr>
  
<tr>
    <td align="right">是否显示：</td>
    <?
   if (!isset($row['isshow']))
	      $row['isshow']=1;
	?>
    <td>&nbsp; <?=html_radio(array(1=>'显示',0=>'隐藏'),$row['isshow'],'isshow')?></td>
  </tr>
  
  <tr>
    <td align="right">url：</td>
    <td>&nbsp;<input name="url" type="text" id="sort" value="<?=$row['url']?>" style="width:500px"/>(如果有写URL以URL链接为主)</td>
  </tr>
  
  <tr>
    <td align="right">列表样式：</td>
    <td>&nbsp;<?=select(list_type(),$row['list_type'],"list_type")?></td>
  </tr>
  
  
  <tr>
    <td align="right">相关搜索：</td>
    <td><div style="float:left">&nbsp;<textarea name="search"  style="width:400px; height:200px;"><?=$row['search']?></textarea></div>
    </td>
  </tr>
  
  <tr>
    <td align="right">内容：</td>
    <td>&nbsp;<textarea id="content" name="content"><?=$row['content']?></textarea></td>
  </tr>
  
  
   <script>
$(function(){
	KindEditor.options.filterMode = false;
	editor = KindEditor.create('#pics');

});

</script>


  
  
  
  <tr>
    <td align="right">排序：</td>
    <td>&nbsp;<input name="sort" type="text" id="sort" value="<?=$row['sort']?>"/></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;<input type="hidden" name="id" value="<?=$row['id']?>" /><input type="hidden" name="tag" value="<?=$mod_tag?>" /><input type="submit" class="sub" name="sub" value=" 保 存 " /></td>
  </tr>
</table>
</form>
<?php include(ADMINTPL.'/footer.tpl.php');?>