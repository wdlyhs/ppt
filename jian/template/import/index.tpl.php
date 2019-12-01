<?php 
/**
 * ============================================================================
 * 版权所有 2008-2012 多多科技，并保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/

if(!defined('ADMIN')){
	exit('Access Denied');
}

include(ADMINTPL.'/header.tpl.php');
?>

<div class="explain-col"> 提示：导入的excel表应按固定格式进行上传，必须为xls文件,底部sheet顺序以及第一列名称顺序必须保持一致   &nbsp;&nbsp;<a href="/a.xls" target="_blank">点击下载excel格式案例</a> </div>
<br />
<?php if($_POST['sub']!=''){?>
<form method="get" action="">
  <input type="hidden" name="mod" value="tradelist" />
  <input type="hidden" name="act" value="list" />
  <table id="listtable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
    <tr>
      <th colspan="2"  style="text-align:left">&nbsp;共有<?=$result['total']?>条记录，新增<?=$result['insert_num']?>条记录，更新<?=$result['update_num']?>条记录，其中共<?=count($chongfu)?>条重复记录。</th>
    </tr>
    <?php if($chongfu){?>
    <tr>
      <th width="115px">交易号</th>
      <th width="">商品名称</th>
    </tr>
    <?php foreach ($chongfu as $r){?>
    <tr>
      <td style="text-align:left">&nbsp;
        <?=$r["trade_id"]?></td>
      <td style="padding:0px 3px 0px 3px; text-align:left">&nbsp;
        <?=$r["item_title"]?></td>
    </tr>
    <?php }?>
    <?php }?>
    <tr>
      <td  width="115px" align="left">&nbsp;</td>
      <td colspan="12" style="text-align:left">&nbsp;
        <input type="submit" class="sub" name="sub" value="返回" /></td>
    </tr>
  </table>
</form>
<?php }else{
	
	?>
<form method="post" action="index.php?mod=<?=MOD?>&act=i" enctype="multipart/form-data" name="form1">
  <table id="addeditable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
    <tr>
      <td width="115px" align="right">导入文件：</td>
      <td>&nbsp;
        <input name="upfile" type="file" size="17" /></td>
    </tr>
    
    
    
    
    <tr>
      <td align="right">&nbsp;</td>
      <td>&nbsp;
        <input type="submit" class="myself" name="sub" value=" 文 件 导 入 " />  </td>
    </tr>
  </table>
</form>


<?php }?>
<?php include(ADMINTPL.'/footer.tpl.php');?>
