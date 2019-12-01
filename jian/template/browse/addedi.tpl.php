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
$ps=$duoduo->select_all("product","*","1=1 order by id desc");

foreach ($ps as $rr){
	$parr[$rr['id']]=$rr['title'];
	}
include(ADMINTPL.'/header.tpl.php');
?>
<form action="index.php?mod=<?=MOD?>&act=<?=ACT?>" method="post" name="form1">
<table id="addeditable"  align="center" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">

<tr>


    <td width="115px" align="right">产品：</td>
    <td>&nbsp;<?=select($parr,$row['pid'],'pid')?></td>
  </tr>
  
  
<tr>


    <td width="115px" align="right">会员id：</td>
    <td>&nbsp;<input name="uid" type="text" id="title" value="<?=$row['uid']?>" style="width:300px" /></td>
  </tr>
  
  
  
  <tr>
    <td align="right">更新时间：</td>
    <td>&nbsp;<input name="addtime" type="text" id="sdatetime" value="<?=($row['addtime'])?date("Y-m-d H:i:s",$row['addtime']):date("Y-m-d H:i:s",time())?>"/> </td>
  </tr>
  

  
  
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;<input type="hidden" name="id" value="<?=$row['id']?>" /><input type="submit" class="sub" name="sub" value=" 保 存 " /></td>
  </tr>
</table>
</form>
<?php include(ADMINTPL.'/footer.tpl.php');?>