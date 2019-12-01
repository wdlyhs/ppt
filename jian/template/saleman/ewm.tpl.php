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

$title=$duoduo->select(MOD,"title","id=".$_GET['id']);
$url=SITEURL."/index.php?rec=".$_GET['id'];
?>
<form action="index.php?mod=<?=MOD?>&act=<?=ACT?>" method="post" name="form1">
<table id="addeditable"  align="center" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
  <tr>
  
    <td style="text-align:center">
    
    
                <p>
                <?=$title?>推广二维码
                </p>
                <p>
                <img src="/index.php?mod=article&act=ewm&url=<?=$url?>" />
                </p>
                  <p>
               推广链接:<?=$url?>
                </p>
    </td>
  </tr>
  
  
  
  
  
  
  
  
  
  
  
</table>
</form>
<?php include(ADMINTPL.'/footer.tpl.php');?>