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
    <td width="150" align="right">AppID：</td>
    <td>&nbsp;<input style=" width:300px;"  name="weixin[appid]" value="<?=$webset['weixin']['appid']?>" /></td>
  </tr>
  
  <tr>
    <td align="right">AppSecret：</td>
    <td>&nbsp;<input style=" width:300px;"  name="weixin[appsecret]" value="<?=$webset['weixin']['appsecret']?>" /></td>
  </tr>
  
  
  <tr>
    <td align="right">Token：</td>
    <td>&nbsp;<input style=" width:300px;"  name="weixin[token]" value="<?=$webset['weixin']['token']?>" /><span class="zhushi"></span></td>
  </tr>
  <tr>
    <td align="right">aeskey(明文消息加解密密钥)：</td>
    <td>&nbsp;<input style=" width:300px;"  name="weixin[aeskey]" value="<?=$webset['weixin']['aeskey']?>" /><span class="zhushi"></span></td>
  </tr>
  
  <tr>
    <td align="right">商户号：</td>
    <td>&nbsp;<input style=" width:300px;"  name="weixin[sh_hao]" value="<?=$webset['weixin']['sh_hao']?>" /><span class="zhushi"></span></td>
  </tr>
  
  
  <tr>
    <td align="right">商户key(密钥)：</td>
    <td>&nbsp;<input style=" width:300px;"  name="weixin[sh_key]" value="<?=$webset['weixin']['sh_key']?>" /><span class="zhushi"></span></td>
  </tr>

  
  <tr>
     <td align="right">&nbsp;</td>
     <td>&nbsp;<input type="submit" name="sub" value=" 保 存 设 置 " /></td>
  </tr>
</table>
</form>
<?php include(ADMINTPL.'/footer.tpl.php');?>