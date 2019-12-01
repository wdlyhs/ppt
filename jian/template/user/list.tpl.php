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
$ps=$duoduo->select_all("product","*","1=1 order by id desc");
$parr[0]="全部";
foreach ($ps as $rr){
	$parr[$rr['id']]=$rr['title'];
	}
	
$ss=$duoduo->select_all("duoduo2010","*","role=5 order by id desc");
$sarr[0]="全部";
foreach ($ss as $rr){
	$sarr[$rr['id']]=$rr['yname'];
	}
include(ADMINTPL.'/header.tpl.php');
?>
<form action="" method="get">
<table cellspacing="0" width="100%" style="border:1px  solid #DCEAF7; border-bottom:0px; background:#E9F2FB">
        <tr>
              <td>&nbsp;<img src="images/arrow.gif" width="16" height="22" align="absmiddle" />&nbsp;<?php if($webset['taoapi']['auto_fanli']==1){?><?php }?>&nbsp;<a href="<?=u(MOD,"addedi")?>" class="link3">[添加会员]</a>&nbsp;<?php if($reycle==1){?><a href="<?=u(MOD,ACT)?>" class="link3">[返回列表]</a><?php }else{?><a href="<?=u(MOD,ACT,array('reycle'=>1))?>" class="link3">[回收站]</a><?php }?></td>
              <td align="right"><!--会员类型:<?=select(level(1),$t,'t')?>&nbsp;-->名称:<input type="text" name="q" value="<?=$q?>"  style="width:120px"/>&nbsp;<input type="submit" value="搜索" />&nbsp;共有 <b><?php echo $total;?></b> 条记录&nbsp;&nbsp;</td>
            </tr>
      </table>
      <input type="hidden" name="mod" value="<?=MOD?>" />
      <input type="hidden" name="act" value="<?=ACT?>" />
      </form>
      <form name="form2" method="get" action="" style="margin:0px; padding:0px">
      <table id="listtable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
                    <tr>
                      <th width="2%"><input type="checkbox" onClick="checkAll(this,'ids[]')" /></th>
                     
                 
                      <th width="10%">用户名</th>
                      <th width="10%">微信/qq呢称</th>
                      <th width="10%">会员类型</th>
                      <th width="10%">到期时间</th>

                      <th width="10%">状态</th>
                      
                      <th width="10%"><a href="<?=u(MOD,'list',array('lastlogintime'=>$listorder))?>">最近登录</a></th>
                     
                    
                     
                     
                      <th width="10%">操作</th>
                    </tr>
					<?php foreach ($row as $r){?>
					  <tr>
                        <td><input type='checkbox' name='ids[]' value='<?=$r["id"]?>' id='content_<?=$r["id"]?>' /></td>
                     
                        <td><?=$r["ddusername"]?></td>
                        <td><?=$r["realname"]?></td>
                        <td><?=(is_vip($r['id']))?"VIP会员":"普通会员"?></td>
                          <td><?=($r['auth_time'])?date("Y-m-d H:i:s",$r['auth_time']):""?></td>
                       
           
                        
                         <td><?=($r["jihuo"]==1)?"正常":"禁用"?></td>
                         
                          
                        <td title="<?=$r["lastlogintime"]?>"><?=date('Y-m-d H:i:s',strtotime($r["lastlogintime"]))?></td>
                        
                        
                    
                      
						<td><a href="<?=u(MOD,'addedi',array('id'=>$r['id']))?>">查看</a></td>
                       
					  </tr>
					<?php }?>
		</table>
        <div style="position:relative; padding-bottom:10px">
            <input type="hidden" name="mod" value="<?=MOD?>" /><input type="hidden" name="act" id="act" value="del" /><input type="hidden" id="msg" name="msg" value="" />
            <?php if($reycle==1){?>
            <input type="hidden" id="do_input" name="do" value="del" />
            <div style="position:absolute; left:5px; top:5px"><input type="submit" value="删除" class="myself" onclick='return confirm("确定要删除?")'/> &nbsp;<input type="submit" value="还原" class="myself" onclick='$("#do_input").val("reset");return confirm("确定要还原?")'/></div>
            <?php }else{?>
            <div style="position:absolute; left:5px; top:10px"><input type="submit" value="删除" onclick='return confirm("确认要删除转移到回收站?")'/></div>
            <?php }?>
            <div class="megas512" style=" margin-top:15px;">
			<?=pageft($total,$pagesize,u(MOD,'list',array('q'=>$q,"sdate"=>$_GET['sdate'],"edate"=>$_GET['edate'],"sid"=>$_GET['sid'],"pid"=>$_GET['pid'])));?>
            
			
	
            </div>
       </form>
<?php include(ADMINTPL.'/footer.tpl.php');?>