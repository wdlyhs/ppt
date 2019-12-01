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
<table id="addeditable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
  <tr>
    <td width="150" align="right">VIP页背景图：</td>
     <td>&nbsp;<input name="ad1[vip]" type="text" id="vip" value="<?=$webset['ad1']['vip']?>" style="width:300px" /> <input class="sub" type="button" value="上传文件" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'vip','sid'=>session_id()))?>','upload','450','350')" />(1920*499)</td>
  </tr>
  
  
   <tr>
    <td width="150" align="right">充值页面头部图：</td>
     <td>&nbsp;<input name="ad1[pay]" type="text" id="pay" value="<?=$webset['ad1']['pay']?>" style="width:300px" /> <input class="sub" type="button" value="上传文件" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'pay','sid'=>session_id()))?>','upload','450','350')" />(1366*122)</td>
  </tr>
  
  

  
  <tr>
     <td align="right">&nbsp;</td>
     <td>&nbsp;<input type="submit" name="sub" value=" 保 存 设 置 " /></td>
  </tr>
</table>
</form>
<?php include(ADMINTPL.'/footer.tpl.php');?>