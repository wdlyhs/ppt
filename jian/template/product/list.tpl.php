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
$tj_arr=array('0'=>'全部','1'=>'未推荐','2'=>'推荐');
$status_arr=array('0'=>'全部','1'=>'上架','2'=>'下架');
$ss=$duoduo->select_all("duoduo2010","*","role=5 order by id desc");
$sarr[0]="全部";
foreach ($ss as $rr){
	$sarr[$rr['id']]=$rr['yname'];
	}
include(ADMINTPL.'/header.tpl.php');
?>
<form name="form1" action="" method="get">
<table cellspacing="0" width="100%" style="border:1px  solid #DCEAF7; border-bottom:0px; background:#E9F2FB;">
        <tr>
              <td width="10%">&nbsp;<img src="images/arrow.gif" width="16" height="22" align="absmiddle" />&nbsp;<a href="<?=u(MOD,'addedi')?>" class="link3">[新增产品]</a> </strong></td>
              <td width="" align="right">名称：<input type="text" name="q" value="<?=$q?>" />&nbsp;上架：<?=select($status_arr,$_GET['status'],'status')?>&nbsp;<input type="submit" value="搜索" /></td>
              <td width="125px" align="right" class="bigtext">共有 <b><?php echo $total;?></b> 条记录&nbsp;&nbsp;</td>
            </tr>
      </table>
      <input type="hidden" name="mod" value="<?=MOD?>" />
      <input type="hidden" name="act" value="<?=ACT?>" />
      </form>
      <form name="form2" method="get" action="" style="margin:0px; padding:0px">
                  <table id="listtable" border=1 cellpadding=0 cellspacing=0  bordercolor="#dddddd">
                    <tr>
                      <th width="3%"  ><input type="checkbox" onClick="checkAll(this,'ids[]')" /></th>
					  <th width="30%">名称</th>
                      
                     <th width="5%">状态</th>
                      <th width="10%">分类</th>
                       <th width="5%">原创</th>
                      <th width="10%">作者</th>
                      <th width="10%">图片</th>
             
                     
                      <th width="10%">排序</th>
                     
                      <th width="15%">操作</th>
                    </tr>
					<?php 
				
					foreach ($row as $r){
						  
						?>
					  <tr>
                        <td><input type='checkbox' name='ids[]' value='<?=$r["id"]?>' id='content_<?=$r["id"]?>' /></td>
                        <td><?=($r['tj']==2)?"<font color='red'>[推荐]</font>":""?><?=($r['cx']==2)?"<font color='red'>[促销]</font>":""?><?=get_str($r["title"],25)?></td>
						
                        <td><?=($r['status']==1)?"上架":"下架"?></td>
                         
                        <td><?=get_title("type",$r['cid'])?></td>
                          <td><?=($r['original']==1)?"不是":"是"?></td>
                       <td><?=$r['author']?></td>
                        
                        <td <?php if($r["img"]!=''){echo 'class="showpic"';}?> pic="<?=$r["img"]?>"><?=$r["img"]?'查看':'无'?></td>
                        
                        <td class="input" field='sort' w='50' tableid="<?=$r["id"]?>" status='a' title="双击编辑"><?=$r["sort"]==DEFAULT_SORT?'——':$r["sort"]?></td>
						
						<td><a href="<?=u(MOD,'addedi',array('id'=>$r['id']))?>" class=link4>修改</a></td>
					  </tr>
					<?php }?>
                    
                    
                    
                    
                    
                  </table>
				<div style="position:relative; padding-bottom:10px">
            <input type="hidden" name="mod" value="<?=MOD?>" /><input type="hidden" name="act" value="del" />
            <div style="position:absolute; left:5px; top:5px"><input type="submit" value="删除" class="myself" onclick='return confirm("确定要删除?")'/></div>
            <div class="megas512" style=" margin-top:15px;"><?=pageft($total,$pagesize,u(MOD,'list',array('q'=>$q,"gid"=>$_GET['gid'],"status"=>$_GET['status'])));?></div>
            </div>
       </form>
<?php include(ADMINTPL.'/footer.tpl.php');?>