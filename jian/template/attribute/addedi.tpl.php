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
    <td width="115px" align="right">名称：</td>
    <td>&nbsp;<input name="title" type="text" id="title" value="<?=$row['title']?>" style="width:300px" /></td>
  </tr>
  
  
  <tr style="display:none">
    <td width="115px" align="right">栏目：</td>
    <td>&nbsp;<select name="cid"><?php getCategorySelect($row['cid']?$row['cid']:$_GET['cid'],0,0,2);?></select></td>
  </tr>
  <tr>
  
  <tr>
    <td width="115px" align="right">父属性：</td>
    <td>&nbsp;<select name="aid" style="font-size:12px"><option value="0">--顶层属性--</option><?php getattributeSelect($row['aid'],0,0,$_GET['cid']);?></select></td>
  </tr>
  
  
  <tr>
    <td align="right">类型：</td>
   
    <td>&nbsp; <?=html_radio(atyeps(),$row['input_type']?$row['input_type']:1,'input_type')?></td>
  </tr>
  
  
  
  <!--<tr>
    <td height="50" align="right">值：</td>
    <td height="50" style="padding:5px 13px;"><textarea name="value"  style="width:700px; height:107px"><?=$row['value']?></textarea></td>
  </tr>-->
  
  
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