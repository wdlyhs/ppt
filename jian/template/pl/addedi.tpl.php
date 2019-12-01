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
    <td width="115px" align="right">用户id：</td>
    <td>&nbsp;<input name="title" type="text" id="title" value="<?=$row['title']?>" style="width:300px" /></td>
  </tr>
  <tr>
    <td width="115px" align="right">文章id：</td>
    <td>&nbsp;<input name="aid" type="text" id="title" value="<?=$row['aid']?>" style="width:150px" />(点击<a href="index.php?mod=article&act=list">此处查询文章ID</a>)</td>
  </tr>
  <tr>
    <td align="right">更新时间：</td>
    <td>&nbsp;<input name="addtime" type="text" id="sdatetime" value="<?=($row['addtime'])?date("Y-m-d H:i:s",$row['addtime']):date("Y-m-d H:i:s",time())?>"/> </td>
  </tr>
  
  <tr>
    <td align="right">是否显示：</td>
   
    <td>&nbsp; <?=html_radio(array(1=>'不显示',2=>'显示'),$row['is_show']?$row['is_show']:1,'is_show')?></td>
  </tr>
  <tr>
    <td align="right">内容：</td>
    <td>&nbsp;<textarea name="content"  style="width:400px" rows="5"><?=$row['content']?></textarea></td>
  </tr>
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