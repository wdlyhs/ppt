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
	

include(ADMINTPL.'/header.tpl.php');
?>
<form name="form1" action="" method="get">
<table cellspacing="0" width="100%" style="border:1px  solid #DCEAF7; border-bottom:0px; background:#E9F2FB;">
        <tr>
              <td width="20%">&nbsp;<img src="images/arrow.gif" width="16" height="22" align="absmiddle" />&nbsp;<a href="<?=u(MOD,'addedi')?>" class="link3">[新增访问]</a> </strong></td>
              <td width="" align="right">开始日期：<input type="text" name="sdate" value="<?=$_GET['sdate']?>" style="width:70px" id="sdate" />&nbsp;结束日期：<input type="text" name="edate" value="<?=$_GET['edate']?>" style="width:70px" id="edate"/>&nbsp;产品列表：<?=select($parr,$_GET['pid'],'pid')?>&nbsp;<input type="submit" value="搜索" /></td>
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
					  <th width="25%">商品名称</th>
                     <th width="10%">会员名称</th>
                      <th width="10%">浏览时间</th>
                      
                      <th width="6%">操作</th>
                    </tr>
					<?php foreach ($row as $r){?>
					  <tr>
                        <td><input type='checkbox' name='ids[]' value='<?=$r["id"]?>' id='content_<?=$r["id"]?>' /></td>
                        <td> 
                        <?
                        $prow=$duoduo->select("product","title,url,id","id=".$r['pid']);
						?>
						<a href="<?=$prow["url"]?>"  target="_blank" >  <? echo get_str($prow["title"],12)?></a></td>
						 <td>
                          <?
						
                        $user_temp=$duoduo->select("user","ddusername,tjr","id=".$r['uid']);
						
						 echo $user_temp['ddusername'];
     				
						?>
                         
                         </td>
                        <td><?=date("Y-m-d H:i:s",$r['addtime'])?></td>
                      
						<td><a href="<?=u(MOD,'addedi',array('id'=>$r['id']))?>" class=link4>修改</a></td>
					  </tr>
					<?php }?>
                  </table>
				<div style="position:relative; padding-bottom:10px">
            <input type="hidden" name="mod" value="<?=MOD?>" /><input type="hidden" name="act" value="del" />
            <div style="position:absolute; left:5px; top:5px"><input type="submit" value="删除" class="myself" onclick='return confirm("确定要删除?")'/></div>
            <div class="megas512" style=" margin-top:15px;"><?=pageft($total,$pagesize,u(MOD,'list',array('q'=>$q,'pid'=>$_GET['pid'])));?></div>
            </div>
       </form>
<?php include(ADMINTPL.'/footer.tpl.php');?>