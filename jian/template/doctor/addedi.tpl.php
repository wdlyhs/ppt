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
    <td width="115px" align="right">医生名称：</td>
    <td>&nbsp;<input name="title" type="text" id="title" value="<?=$row['title']?>" style="width:300px" /></td>
  </tr>
  
  
  
  
  
  
  
  <tr>
    <td align="right">性别：</td>
   
    <td>&nbsp; <?=html_radio(array(1=>'男',2=>'女'),$row['sex']?$row['sex']:1,'sex')?></td>
  </tr>
  
   <tr>
    <td align="right">相片：</td>
    <td>&nbsp;<input name="img" type="text" id="img" value="<?=$row['img']?>" style="width:300px" /> <input class="sub" type="button" value="上传文件" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'img','sid'=>session_id()))?>','upload','450','350')" /> (100*100)</td>
  </tr>
  
  
  <tr>
    <td width="115px" align="right">职位：</td>
    <td>&nbsp;<input name="zhi" type="text" id="title" value="<?=$row['zhi']?>"  /></td>
  </tr>
  
  

  <tr>
    <td align="right">城市/医院：</td>
    
    <?
	if ($row['city']>0)
	    $fcid=$row['city'];
		else{
			
		 $fcid=$duoduo->select("group","id","pid=0 order by sort desc,id desc");
	}
  
	
	?>
    <td>&nbsp;<?=select1(get_group_arr(0),$row['city'],"city","select02")?>
    
    <?=select1(get_group_arr($fcid),$row['cid'],"cid","select02")?>
    
     </td>
  </tr>
  
  
  
  
  
  
  
  
  
  <tr>
    <td width="115px" align="right">科室：</td>
      <td>&nbsp;<?=select(get_arr(26),$row['ks'],'ks')?></td>
  </tr>
  
  
  
  
  <tr>
    <td width="115px" align="right">擅长领域：</td>
    <td>&nbsp;<input name="area" type="text" id="title" value="<?=$row['area']?>" style="width:300px" />(中间有,号隔开如内科,外科,神经科)</td>
  </tr>
  
  
  
  

  
 
 
 
  
  
  
  
  
  
  
  <tr>
    <td align="right">备注：</td>
    <td>&nbsp;<textarea id="content" name="content"><?=$row['content']?></textarea></td>
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
<div class="jitem" style="display:none"> <?=select(get_user_arr(),0,'uids[]')?></div>
<script src="../js/p1.js" type="text/javascript"></script>
<script src="../js/dd.js" type="text/javascript"></script>
<?php 
include("../comm/city.php");
include(ADMINTPL.'/footer.tpl.php');?>