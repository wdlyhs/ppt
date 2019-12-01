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
$(function(){
	$('#tbnickBd').click(function(){
		$('#tbnicktr').toggle();
	})
})
</script>
<form action="index.php?mod=<?=MOD?>&act=<?=ACT?>" method="post" name="form1">
<table id="addeditable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
  <tr>
    <td width="115px" align="right">会员名：</td>
    <td>&nbsp;<input name="ddusername" type="text" id="ddusername" value="<?=$row['ddusername']?>" /> <span class="zhushi"></span></td>
  </tr>
  
  <tr>
    <td align="right">登陆密码：</td>
    <td>&nbsp;<?=limit_input('ddpassword')?> <span class="zhushi">点击激活修改</span></td>
  </tr>
  
  <tr>
    <td align="right">vip到期时间：</td>
    <td>&nbsp;<input name="auth_time" type="text" id="sdatetime" value="<?=date("Y-m-d H:i:s",$row['auth_time'])?>"/> </td>
  </tr>
  
  <tr>
    <td align="right">状态：</td>
   
    <td>&nbsp; <?=html_radio(array(1=>'启用',2=>'禁用'),$row['jihuo']?$row['jihuo']:1,'jihuo')?></td>
  </tr>
  <tr>
    <td width="115px" align="right">姓名：</td>
    <td>&nbsp;<input name="realname" type="text" id="ddusername" value="<?=$row['realname']?>" /> <span class="zhushi"></span></td>
  </tr>
  
  
  <tr>
    <td width="115px" align="right">手机：</td>
    <td>&nbsp;<input name="mobile" type="text" id="ddusername" value="<?=$row['mobile']?>" /> <span class="zhushi"></span></td>
  </tr>
  
  <tr>
    <td align="right">头像：</td>
    <td>&nbsp;<input name="img" type="text" id="img" value="<?=$row['img']?>" style="width:300px" /> <input class="sub" type="button" value="上传文件" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'img','sid'=>session_id()))?>','upload','450','350')" /> </td>
  </tr>
  <!--<tr>
    <td align="right">会员类型：</td>
    <td>&nbsp;<?=select(level(),$row['type'],'type')?> </td>
  </tr>-->
  
  
  
  
   
  
  
  
  
  <tr>
    <td align="right">注册时间：</td>
    <td>&nbsp;<input name="regtime" type="text" id="regtime" value="<?=$row['regtime']?>" /></td>
  </tr>
  <tr>
    <td align="right">注册IP：</td>
    <td>&nbsp;<input name="regip" type="text" id="regip" value="<?=$row['regip']?>" /></td>
  </tr>
  <tr>
    <td align="right">登录IP：</td>
    <td>&nbsp;<input name="logip" type="text" id="logip" value="<?=$row['logip']?>" /></td>
  </tr>
  <tr>
    <td align="right">登陆次数：</td>
    <td>&nbsp;<input name="loginnum" type="text" id="loginnum" value="<?=$row['loginnum']?>" /></td>
  </tr>
  <tr>
    <td align="right">上次登录时间：</td>
    <td>&nbsp;<input name="lastlogintime" type="text" id="lastlogintime" value="<?=$row['lastlogintime']?>" /></td>
  </tr>
  

  
  
  <tr style="display:none">
    <td align="right">邮箱：</td>
    <td>&nbsp;<input name="email" type="text" id="email" value="<?=($row['email'])?$row['email']:time()."@qq.com"?>" /></td>
  </tr>
  
  
  
  
  
 
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;<input type="hidden" name="id" value="<?=$row['id']?>" /><input type="submit" class="sub" name="sub" value=" 保 存 " /></td>
  </tr>
</table>
</form>
<?php include(ADMINTPL.'/footer.tpl.php');?>