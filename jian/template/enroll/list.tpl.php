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
<form name="form1" action="" method="get">
<table cellspacing="0" width="100%" style="border:1px  solid #DCEAF7; border-bottom:0px; background:#E9F2FB;">
        <tr>
              <td width="20%">&nbsp;<img src="images/arrow.gif" width="16" height="22" align="absmiddle" />&nbsp;<a href="<?=u(MOD,'addedi')?>" class="link3">[新增报名]</a> </strong></td>
              <td width="" align="right">赛事: <?=select(get_select_game(1),$_GET['gid'],'gid')?>&nbsp;审核状态: <?=select(get_status(1),$_GET['status'],'status')?>&nbsp;姓名：<input type="text" name="q" value="<?=$q?>" />&nbsp;<input type="submit" value="搜索" /></td>
              <td width="115px" align="right" class="bigtext">共有 <b><?php echo $total;?></b> 条记录&nbsp;&nbsp;</td>
            </tr>
      </table>
      <input type="hidden" name="mod" value="<?=MOD?>" />
      <input type="hidden" name="act" value="<?=ACT?>" />
      </form>
      <form name="form2" method="get" action="" style="margin:0px; padding:0px">
                  <table id="listtable" border=1 cellpadding=0 cellspacing=0  bordercolor="#dddddd">
                    <tr>
                      <th width="3%"  ><input type="checkbox" onClick="checkAll(this,'ids[]')" /></th>
					  <th width="10%">姓名</th>
                     <th width="10%">手机</th>
                     <th width="10%">审核状态</th>
                     
                      <th width="10%">相片</th>
                      <th width="10%">电子档</th>
                      <th width="10%">提交时间</th>
                      <th width="6%">操作</th>
                    </tr>
					<?php foreach ($row as $r){?>
					  <tr>
                        <td><input type='checkbox' name='ids[]' value='<?=$r["id"]?>' id='content_<?=$r["id"]?>' /></td>
                        <td><?=$r["title"]?></td>
						<td><?=$r["mobile"]?></td>
                        <td><?
                          $temp=get_status();
						  echo $temp[$r['status']];
						?></td>
                        <td class="showpic" pic="<?=http_pic($r["img"])?>">查看</td>
                       <td class="showpic" pic="<?=http_pic("/upload/enroll/".$r['id'].".jpg")?>">查看</td>
						<td><?=date('Y-m-d H:i:s',$r["addtime"])?></td>
						<td><a href="<?=u(MOD,'addedi',array('id'=>$r['id']))?>" class=link4>修改</a></td>
					  </tr>
					<?php }?>
                  </table>
				<div style="position:relative; padding-bottom:10px">
            <input type="hidden" name="mod" value="<?=MOD?>" /><input type="hidden" name="act" value="del" />
            <div style="position:absolute; left:5px; top:5px"><input type="submit" value="删除" class="myself" onclick='return confirm("确定要删除?")'/></div>
            <div class="megas512" style=" margin-top:15px;"><?=pageft($total,$pagesize,u(MOD,'list',array('q'=>$q,'status'=>$_GET['status'],'gid'=>$_GET['gid'])));?></div>
            </div>
       </form>
<?php include(ADMINTPL.'/footer.tpl.php');?>