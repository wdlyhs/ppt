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
?>
<script>
/*$(function(){
	$('#category').change(function(){
		
	});
})

function category_select(){
	if($('#category').val()=='wap' || $('#category').val()=='app'){
		
	}
}*/
</script>
<form action="index.php?mod=<?=MOD?>&act=<?=ACT?>" method="post" name="form1">
<table id="addeditable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
  <tr>
    <td width="115px" align="right">栏目：</td>
    <td>&nbsp;<select name="cid"><?php getCategorySelect($row['cid']?$row['cid']:$_GET['cid'],0,0,4);?></select></td>
  </tr>
  <tr  style="display:none">
    <td align="right">标题：</td>
    <td>&nbsp;<input name="title" type="text" id="title" value="1" style="width:300px"/></td>
  </tr>
   <tr>
    <td align="right">赛事：</td>
    <td>&nbsp;<?=select(get_select_game(),$row['gid']?$row['gid']:$webset['gid'],'gid')?> <span class="zhushi"></span>
  </td>
  </tr>
  
  <tr>
    <td align="right">内容：</td>
    <td>&nbsp;<textarea id="content" name="content"><?=$row['content']?></textarea></td>
  </tr>
  
 
  
  
  
  
  
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;<input type="hidden" name="id" value="<?=$row['id']?>" /><input type="submit" class="sub" name="sub" value=" 保 存 " /></td>
  </tr>
</table>
</form>
<?php include(ADMINTPL.'/footer.tpl.php');?>