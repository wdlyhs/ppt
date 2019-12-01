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
if ($_GET['id']>0){
	
	$row=$duoduo->select("duoduo2010","*","id=".$_GET['id']);
	}

$ystatus_arr=array(1=>"在职",2=>"休假",3=>"离职");
?>
<form action="index.php?mod=<?=MOD?>&act=addedi" method="post" name="form1">
<table id="addeditable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
  <tr>
    <td width="115px" align="right">账号：</td>
    <td>&nbsp;<input name="adminname" type="text" id="adminname" value="<?=$row['adminname']?>"/></td>
  </tr>
  <tr>
    <td align="right">密码：</td>
    <td>&nbsp;<input name="adminpass" style="width:127px" type="password" id="adminpass" value=""/> </td>
  </tr>
  <tr style="display:none">
    <td align="right">权限组：</td>
    <td>&nbsp;<input name="role" style="width:127px"  type="hidden" id="adminpass" value="5"/></td>
  </tr>
  
  <tr>
    <td width="115px" align="right">姓名：</td>
    <td>&nbsp;<input name="yname" type="text" id="" value="<?=$row['yname']?>"/></td>
  </tr>
  
  
  <tr>
    <td width="115px" align="right">手机：</td>
    <td>&nbsp;<input name="ymobile" type="text" id="" value="<?=$row['ymobile']?>"/></td>
  </tr>
  
  <tr>
    <td width="115px" align="right">状态：</td>
    <td>&nbsp;<?=select($ystatus_arr,$row['ystatus'],'ystatus')?></td>
  </tr>
  <?php if($id>0){
	  $url=SITEURL."/index.php?rec=".$id;
	  ?>
  
  <tr>
    <td align="right">推广链接：</td>
    <td>&nbsp;<label>
    <?=$url?>
    </label></td>
  </tr>
  
  <tr>
    <td align="right">推广二维码：</td>
    <td>&nbsp;<label>
     <img src="/index.php?mod=article&act=ewm&url=<?=$url?>" />
    </label></td>
  </tr>
  
  
  <tr>
    <td align="right">添加时间：</td>
    <td>&nbsp;<input name="addtime" type="text" id="addtime" value="<?=date('Y-m-d H:i:s',$row['addtime'])?>"/></td>
  </tr>
  <?php }?>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;<input type="hidden" name="id" value="<?=$row['id']?>" /><input type="submit" class="sub" name="sub" value=" 保 存 " /></td>
  </tr>
</table>
</form>
<?php include(ADMINTPL.'/footer.tpl.php');?>