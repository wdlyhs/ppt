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
    <td width="115px" align="right">栏目：</td>
    <td>&nbsp;<select name="cid"><?php getCategorySelect($row['cid']?$row['cid']:$_GET['cid'],0,0);?></select></td>
  </tr>
  <tr>
    <td align="right">标题：</td>
    <td>&nbsp;<input name="title" type="text" id="title" value="<?=$row['title']?>" style="width:300px"/></td>
  </tr>
  
  
 
  
  <tr>
    <td align="right">更新时间：</td>
    <td>&nbsp;<input name="addtime" type="text" id="sdatetime" value="<?=($row['addtime'])?date("Y-m-d H:i:s",$row['addtime']):date("Y-m-d H:i:s",time())?>"/> </td>
  </tr>
  
  
  <tr>
    <td align="right">跳转URL：</td>
    <td>&nbsp;<input name="jian_url" type="text" id="title" value="<?=$row['jian_url']?>" style="width:300px"/>(如果此处填充网址，则文章链接则跳到此网址上，非必要别填)</td>
  </tr>
  <tr>
    <td align="right">缩略图：</td>
    <td>&nbsp;<input name="img" type="text" id="img" value="<?=$row['img']?>" style="width:300px" /> <input class="sub" type="button" value="上传文件" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'img','sid'=>session_id()))?>','upload','450','350')" /> </td>
  </tr>
  <tr>
    <td align="right">是否推荐：</td>
   
    <td>&nbsp; <?=html_radio(array(1=>'不推荐',2=>'推荐'),$row['tj']?$row['tj']:1,'tj')?></td>
  </tr>
  
 
  
  <tr>
    <td align="right">文件上传：</td>
    <td>&nbsp;<input name="xia" type="text" id="xia" value="<?=$row['xia']?>" style="width:300px" /> <input class="sub" type="button" value="上传文件" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'xia','sid'=>session_id()))?>','upload','450','350')" /> （如果有视频此处上传）</td>
  </tr>
  <!--<tr>
    <td align="right">缩略图：</td>
    <td>&nbsp;<input name="img" type="text" id="img" value="<?=$row['img']?>" style="width:300px" /> <input class="sub" type="button" value="上传图片" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'img','sid'=>session_id()))?>','upload','450','350')" /> <span class="zhushi">可直接添加网络地址</span></td>
  </tr>-->
  <tr>
    <td align="right">来源：</td>
    <td>&nbsp;<input name="source" type="text" id="source" value="<?=$row['source']?>"/> <span class="zhushi">为空默认为：<?=WEBNAME?></span></td>
  </tr>
  <tr>
    <td align="right">关键词：</td>
    <td>&nbsp;<input name="keyword" type="text" id="keyword" value="<?=$row['keyword']?$row['keyword']:WEBNAME?>" style="width:300px"/> <span class="zhushi">使用半角逗号“,”隔开</span></td>
  </tr>
  <tr>
    <td align="right">摘要：</td>
    <td>&nbsp;<textarea id="desc" style="width:400px" name="desc"><?=$row['desc']?></textarea></td>
  </tr>
  
  <tr>
    <td align="right">点击量：</td>
    <td>&nbsp;<input name="hits" type="text" id="title" value="<?=($row['hits'])?$row['hits']:rand(100,1000)?>" /></td>
  </tr>
  <tr>
    <td align="right">排序：</td>
    <td>&nbsp;<input name="sort" type="text" id="sort" value="<?=$row['sort']?>"/> <span class="zhushi">数字越大越靠前</span></td>
  </tr>
  <tr>
    <td align="right">内容：</td>
    <td>&nbsp;<textarea id="content" name="content"><?=$row['content']?></textarea></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;<input type="hidden" name="id" value="<?=$row['id']?>" /><input type="submit" class="sub" name="sub" value=" 保 存 " /></td>
  </tr>
</table>
</form>
<?php include(ADMINTPL.'/footer.tpl.php');?>