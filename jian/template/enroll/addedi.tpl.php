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
    <td width="115px" align="right">姓名：</td>
    <td>&nbsp;<input name="title" type="text" id="title" value="<?=$row['title']?>" style="width:300px" /></td>
  </tr>
  
  <tr>
    <td align="right">赛事：</td>
    <td>&nbsp;<?=select(get_select_game(),$row['gid']?$row['gid']:$webset['gid'],'gid')?> <span class="zhushi"></span>
  </td>
  </tr>
  <tr>
    <td width="115px" align="right">性别：</td>
    <td>&nbsp;<input name="sex" type="text" id="title" value="<?=$row['sex']?>" /></td>
  </tr>
  
  <tr>
    <td width="115px" align="right">民族：</td>
    <td>&nbsp;<input name="nation" type="text" id="title" value="<?=$row['nation']?>" /></td>
  </tr>
  
  <tr>
    <td width="115px" align="right">出生年月：</td>
    <td>&nbsp;<input name="birth" type="text" id="title" value="<?=$row['birth']?>" /></td>
  </tr>
  
  <tr>
    <td width="115px" align="right">身份证号码：</td>
    <td>&nbsp;<input name="code" type="text" id="title" value="<?=$row['code']?>"  style="width:300px" /></td>
  </tr>
  
  
  <tr>
    <td width="115px" align="right">地址：</td>
    <td>&nbsp;<input name="address" type="text" id="title" value="<?=$row['address']?>"  style="width:500px" /></td>
  </tr>
  
  
  <tr>
    <td width="115px" align="right">邮箱：</td>
    <td>&nbsp;<input name="email" type="text" id="title" value="<?=$row['email']?>"  /></td>
  </tr>
  
  
  <tr>
    <td width="115px" align="right">参赛组别：</td>
    <td>&nbsp;<?=select(get_arr(24),$row['group'],'group')?></td>
  </tr>
  
  <tr>
    <td width="115px" align="right">选拔赛类型：</td>
    <td>&nbsp;<?=select(get_arr(25),$row['type'],'type')?></td>
  </tr>
  
  
  <tr>
    <td width="115px" align="right">所学专业：</td>
    <td>&nbsp;<input name="major" type="text" id="title" value="<?=$row['major']?>"  /></td>
  </tr>
  
  <tr>
    <td width="115px" align="right">指导老师：</td>
    <td>&nbsp;<input name="teacher" type="text" id="title" value="<?=$row['teacher']?>"  /></td>
  </tr>
  
  
  <tr>
    <td width="115px" align="right">指导老师电话：</td>
    <td>&nbsp;<input name="teacher_mobile" type="text" id="title" value="<?=$row['teacher_mobile']?>"  /></td>
  </tr>
  
  
  <tr>
    <td width="115px" align="right">年级：</td>
    <td>&nbsp;<input name="grade" type="text" id="title" value="<?=$row['grade']?>"  /></td>
  </tr>
  
  
  <tr>
    <td width="115px" align="right">手机：</td>
    <td>&nbsp;<input name="mobile" type="text" id="title" value="<?=$row['mobile']?>"  /></td>
  </tr>
  
  
  
  <tr>
    <td align="right">图片：</td>
    <td>&nbsp;<input name="img" type="text" id="img" value="<?=$row['img']?>" style="width:300px" /> <input class="sub" type="button" value="上传图片" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'img','sid'=>session_id()))?>','upload','450','350')" /> <span class="zhushi">可直接添加网络地址</span></td>
  </tr>
  
  
  <tr>
    <td width="115px" align="right">审核状态：</td>
    <td>&nbsp;<?=select(get_status(),$row['status'],'status')?></td>
  </tr>
  
  <tr>
    <td width="115px" align="right">审核不通过原因：</td>
    <td>&nbsp;<input name="no_str" type="text" id="title" value="<?=$row['no_str']?>"  style="width:500px" /></td>
  </tr>
  
  <!--<tr>
    <td align="right">排序：</td>
    <td>&nbsp;<input name="sort" type="text" id="sort" value="<?=$row['sort']?$row['sort']:0?>" /> <span class="zhushi">数字越大越靠前</span></td>
  </tr>-->
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;<input type="hidden" name="id" value="<?=$row['id']?>" /><input type="submit" class="sub" name="sub" value=" 保 存 " /></td>
  </tr>
</table>
</form>
<?php include(ADMINTPL.'/footer.tpl.php');?>