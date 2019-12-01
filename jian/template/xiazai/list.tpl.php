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
              <td width="10%">&nbsp;<img src="images/arrow.gif" width="16" height="22" align="absmiddle" />&nbsp; </strong></td>
              <td width="" align="right"><input type="text" name="q" value="<?=$q?>" />&nbsp;<input type="submit" value="搜索" /></td>
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
					  <th width="20%">产品</th>
                      
                     <th width="15%">会员</th>
                    
                     <th width="10%">时间</th>
             
     
                    </tr>
					<?php 
				
					foreach ($row as $r){
						  
						?>
					  <tr>
                        <td><input type='checkbox' name='ids[]' value='<?=$r["id"]?>' id='content_<?=$r["id"]?>' /></td>
                        <td>
                          <a target="_blank"  href="../<?=u("product","view",array("id"=>$r['pid']))?>"><?=get_str(get_title("product",$r['pid']),25)?></a>
                        </td>
						 <td><?=get_title("user",$r['uid'],"ddusername")?></td>
                        
                       
                         <td><?=date("Y-m-d H:i:s",$r['addtime'])?></td>
                        
                        
                       
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