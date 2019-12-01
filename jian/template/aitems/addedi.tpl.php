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
<form action="index.php?mod=<?=MOD?>&act=<?=ACT?>" method="post" name="form1">
<table id="addeditable"  align="center" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
  <tr>
    <td width="115px" align="right">值名称：</td>
    <td>&nbsp;<input name="title" type="text" id="title" value="<?=$row['title']?>" style="width:600px" />(批量添加，中间用,号隔开)</td>
  </tr>
  
  
  
 <tr style="display:none">
    <td width="115px" align="right">aid：</td>
    <td>&nbsp;<input name="aid" type="text" id="title" value="<?=$row['aid']?$row['aid']:$_GET['aid']?>" style="width:300px" /></td>
  </tr>
  
  <tr>
    <td width="115px" align="right">属性名称：</td>
    <td>&nbsp;<label><?=get_title("attribute",$_GET['aid'])?></label></td>
  </tr>
  
  
  <?
  $fid=get_title("attribute",$_GET['aid'],"aid");
  if ($fid){
  ?>
  
   <tr>
    <td width="115px" align="right">上级属性：</td>
    <td>&nbsp;<?=select(aitems($fid),$row['aaid'],"aaid")?></td>
  </tr>
  <? }?>
  
  
  <tr>
  
  
  
  
  
  
  
  
 
  
    <td align="right">排序：</td>
    <td>&nbsp;<input name="sort" type="text" id="sort" value="<?=$row['sort']?$row['sort']:0?>" /> <span class="zhushi">数字越大越靠前</span></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;<input type="hidden" name="id" value="<?=$row['id']?>" /><input type="submit" class="sub" name="sub" value=" 保 存 " /></td>
  </tr>
</table>
</form>
<?php include(ADMINTPL.'/footer.tpl.php');?>