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
              <td width="150px">&nbsp;<img src="images/arrow.gif" width="16" height="22" align="absmiddle" />&nbsp;<a href="<?=u(MOD,'addedi')?>" class="link3">[添加业务员]</a> </td>
              <td width="" align="right">开始日期：<input type="text" name="sdate" value="<?=$_GET['sdate']?>" style="width:70px" id="sdate" />&nbsp;结束日期：<input type="text" name="edate" value="<?=$_GET['edate']?>" style="width:70px" id="edate"/>&nbsp;姓名：<input type="text" name="name" value="<?=$name?>"   style="width:100px"/>&nbsp;账号：<input type="text" name="q" value="<?=$q?>"  style="width:100px"/>&nbsp;<input type="submit" value="搜索" /></td>
              <td width="150px" align="right">共有 <b><?php echo $total;?></b> 条记录&nbsp;&nbsp;</td>
            </tr>
      </table>
      <input type="hidden" name="mod" value="<?=MOD?>" />
      <input type="hidden" name="act" value="<?=ACT?>" />
      </form>
      <form name="form2" method="get" action="" style="margin:0px; padding:0px">
                  <table id="listtable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
                    <tr>
                      <th width="3%"><input type="checkbox" onClick="checkAll(this,'ids[]')" /></th>
					  <th width="10%">账号</th>
                       <th width="10%">用户姓名</th>
                        <th width="10%">状态</th>
                      
                           <th width="10%">申请量</th>
                             <th width="10%">注册用户</th>
                   
                     
                      <th width="8%">登录次数</th>
                   
                       <th width="10%">添加时间</th>
                  
                      <th width="8%">操作</th>
                    </tr>
					<?php foreach ($row as $r){?>
					  <tr>
                        <td><input <?php if($r['id']==1){?> title="默认管理员不准删除" disabled<?php }?> type='checkbox' name='ids[]' value='<?=$r["id"]?>' id='content_<?=$r["id"]?>' />
                        <input type="hidden" name="table" value="duoduo2010">
                        </td>
                        <td><?=$r["adminname"]?></td>
                        <td><?=$r["yname"]?></td>
                         <td><?
                         if($r['ystatus']==1)
						    echo "在职";
						if($r['ystatus']==2)
						    echo "休假";
						if($r['ystatus']==3)
						    echo "离职";
						 ?></td>
                           
                        <td><a href="<?=u("browse","list",array("sid"=>$r['id'],"sdate"=>$_GET['sdate'],"edate"=>$_GET['edate']))?>"><?=hnum($r['id'],$_GET['pid'],$_GET['sdate'],$_GET['edate'])?></a></td>
                        <td><a href="<?=u("user","list",array("sid"=>$r['id'],"sdate"=>$_GET['sdate'],"edate"=>$_GET['edate']))?>"><?=tjrs($r['id'],$_GET['sdate'],$_GET['edate'])?></a></td>
                      
                   
                        <td><?=$r["loginnum"]?></td>
                       <td><?=date("Y-m-d H:i:s",$r["addtime"])?></td>
                      
                       
						<td><?php if($_SESSION['ddadmin']['id']==1 || $r['id']!=1){?><a href="<?=u(MOD,'addedi',array('id'=>$r['id']))?>">修改</a><?php }?></td>
					  </tr>
					<?php }?>
                  </table>
				<div style="position:relative; padding-bottom:10px">
            <input type="hidden" name="mod" value="<?=MOD?>" /><input type="hidden" name="act" value="del" />
            <div style="position:absolute; left:5px; top:5px"><input type="submit" value="删除" class="myself" onclick='return confirm("确定要删除?")'/></div>
            <div class="megas512" style=" margin-top:15px;"><?=pageft($total,$pagesize,u(MOD,'list',array('q'=>$q)));?></div>
            </div>
       </form>
<?php include(ADMINTPL.'/footer.tpl.php');?>