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
    <td width="115px" align="right">赛事名称：</td>
    <td>&nbsp;<input name="title" type="text" id="title" value="<?=$row['title']?>" style="width:300px" /></td>
  </tr>
  <tr>
    <td width="115px" align="right">域名：</td>
    <td>&nbsp;<input name="domain" type="text" id="title" value="<?=$row['domain']?>" /></td>
  </tr>
  
  
  <tr>
    <td align="right">logo：</td>
    <td>&nbsp;<input name="logo" type="text" id="logo" value="<?=$row['logo']?>" style="width:300px" /> <input class="sub" type="button" value="上传文件" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'logo','sid'=>session_id()))?>','upload','450','350')" /> </td>
  </tr>
  
  
  <tr>
    <td align="right">公众号二维码：</td>
    <td>&nbsp;<input name="img1" type="text" id="img1" value="<?=$row['img1']?>" style="width:300px" /> <input class="sub" type="button" value="上传文件" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'img1','sid'=>session_id()))?>','upload','450','350')" /> (125*125)</td>
  </tr>
  
  <tr>
    <td align="right">客服二维码：</td>
    <td>&nbsp;<input name="img2" type="text" id="img2" value="<?=$row['img2']?>" style="width:300px" /> <input class="sub" type="button" value="上传文件" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'img2','sid'=>session_id()))?>','upload','450','350')" /> (125*125)</td>
  </tr>
  
  
  <tr>
    <td align="right">内页广告：</td>
    <td>&nbsp;<input name="img3" type="text" id="img3" value="<?=$row['img3']?>" style="width:300px" /> <input class="sub" type="button" value="上传文件" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'img3','sid'=>session_id()))?>','upload','450','350')" /> (1920*170)</td>
  </tr>
  
  
  
  
  <tr>
    <td width="115px" align="right">报名：</td>
    <td>&nbsp;开始时间：<input name="bmstime" type="text" id="bmstime" value="<?=($row['bmstime'])?date("Y-m-d",$row['bmstime']):""?>"/>&nbsp;结束时间：<input name="bmetime" type="text" id="bmetime" value="<?=($row['bmetime'])?date("Y-m-d",$row['bmetime']):""?>"/></td>
  </tr>
  
  
  
  <tr>
    <td width="115px" align="right">投票：</td>
    <td>&nbsp;开始时间：<input name="tpstime" type="text" id="tpstime" value="<?=($row['tpstime'])?date("Y-m-d",$row['tpstime']):""?>"/>&nbsp;结束时间：<input name="tpetime" type="text" id="tpetime" value="<?=($row['tpetime'])?date("Y-m-d",$row['tpetime']):""?>"/></td>
  </tr>
  
  
  <tr>
    <td width="115px" align="right">地址：</td>
    <td>&nbsp;<input name="address" type="text" id="title" value="<?=$row['address']?>" style="width:400px" /></td>
  </tr>
  
  
  <tr>
    <td width="115px" align="right">电话：</td>
    <td>&nbsp;<input name="tel" type="text" id="title" value="<?=$row['tel']?>" /></td>
  </tr>
  
  
  <tr>
    <td width="115px" align="right">邮箱：</td>
    <td>&nbsp;<input name="email" type="text" id="title" value="<?=$row['email']?>" /></td>
  </tr>
  
  
  <tr>
    <td width="115px" align="right">邮编：</td>
    <td>&nbsp;<input name="code" type="text" id="title" value="<?=$row['code']?>" /></td>
  </tr>
  
  
  
  <tr>
    <td width="115px" align="right">微信：</td>
    <td>&nbsp;<input name="wx" type="text" id="title" value="<?=$row['wx']?>" /></td>
  </tr>
  
  <tr>
    <td align="right">内容：</td>
    <td>&nbsp;<textarea id="content" name="content"><?=$row['content']?></textarea></td>
  </tr>
  
  
  <tr>
    <td align="right">组织单位：</td>
    <td>&nbsp;<textarea id="wap_banquan"  style="width:708px; height:208px" name="zz"><?=$row['zz']?></textarea></td>
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