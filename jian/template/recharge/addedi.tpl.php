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
<table id="addeditable"  align="center" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
  <tr>
    <td width="115px" align="right">标题：</td>
    <td>&nbsp;<input name="title" type="text" id="title" value="<?=$row['title']?>" style="width:300px" /></td>
  </tr>
  <tr>
    <td align="right">日期类型：</td>
    <td>&nbsp;<?=select(date_type(),$row['date_type'],"date_type")?></td>
  </tr>
  
  <tr>
    <td width="115px" align="right">日期时长：</td>
    <td>&nbsp;<input name="date_num" type="text" id="title" value="<?=($row['date_num'])?$row['date_num']:1?>"  />(与上面日期类型关连，如上面选择天，这边填写10,则代表授权时间10天)</td>
  </tr>
  
  <tr>
    <td width="115px" align="right">每天下载限制：</td>
    <td>&nbsp;<input name="day_xiazai_num" type="text" id="title" value="<?=($row['day_xiazai_num'])?$row['day_xiazai_num']:0?>"  />(0或空表示不限制)</td>
  </tr>
  <tr>
    <td width="115px" align="right">价钱：</td>
    <td>&nbsp;<input name="price" type="text"  value="<?=$row['price']?>"  /></td>
  </tr>
  
  <tr>
    <td width="115px" align="right">原价钱：</td>
    <td>&nbsp;<input name="yprice" type="text"  value="<?=$row['yprice']?>"  /></td>
  </tr>
  
  
  
  
  <tr>
    <td width="115px" align="right">描述：</td>
    <td>&nbsp;<input name="desc" type="text"  value="<?=$row['desc']?>"  /></td>
  </tr>
  
  
  <tr>
    <td width="115px" align="right">右上描述：</td>
    <td>&nbsp;<input name="ydesc" type="text"  value="<?=$row['ydesc']?>"  />&nbsp;颜色:<input name="ycolor" type="text"  value="<?=$row['ycolor']?>"  style="width:50px" /></td>
  </tr>
  
  
  <tr>
    <td align="right">排序：</td>
    <td>&nbsp;<input name="sort" type="text" id="sort" value="<?=$row['sort']?>"/> <span class="zhushi">数字越大越靠前</span></td>
  </tr>
  
  
  
  
  
  
  
  
  
 
  
  
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;<input type="hidden" name="id" value="<?=$row['id']?>" /><input type="submit" class="sub" name="sub" value=" 保 存 " /></td>
  </tr>
</table>
</form>
<?php include(ADMINTPL.'/footer.tpl.php');?>