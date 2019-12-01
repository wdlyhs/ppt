<?

$parameter=act_user_order(20);
extract($parameter);
include(TPLURL."/head.tpl.php");

?>

<!--中部的东西-->
  <?
  include(TPLURL."/user/head.tpl.php");
    include(TPLURL."/user/menu.tpl.php");
  ?>






<!--<div class="p-types co-types wlimit ">
      <a href="/index/usercenter/collect"><span class="p-box p-chose">作品</span></a> 
      <a href="/index/usercenter/collect?iszhuanti=1"><span class="p-box ">专题</span></a>
</div>-->



<style type="text/css">
table.gridtable {
 
   width:1200px; 
   margin:20px auto;
    color:#333333;
    border-width: 1px;
    border-color: #666666;
    border-collapse: collapse;
}
table.gridtable th {
    border-width: 1px;
    padding: 15px;
	font-size:14px;
    border-style: solid;
    border-color: #eee;
    background-color: #dedede;
}
table.gridtable td {
    border-width: 1px;
    padding: 15px;
    border-style: solid;
    border-color: #eee;
    background-color: #ffffff;
}
</style>
 
<!-- Table goes in the document BODY -->
<table class="gridtable">
<tr>
    <th>充值名称</th>
      <th>充值时间</th>
      <th>充值金额</th>
      <th>付款状态</th>
</tr>

  <?
   foreach ($list as $row){
   ?>
    <tr>
      <td><?=$row['title']?></td>
      <td><?=date("Y-m-d H:i:s",$row['addtime'])?></td>
      <td><?=$row['price']?>元</td>
      <td>已付款</td>
    </tr>
    
    <? }?>
</table>









</div>

<div class='clear'></div>

<?
if ($total>$pagesize){
?>
<div class='page' >
  <div class="wlimit">
      <div class="pagenew">
         <div class="pageinfo">
             <div class="page" style="text-align:center">
		<div class="pageNav"><?=zhe_page($total,$pagesize,$page_url,WJT)?></div>
	</div>
         </div>
      </div>
      </div>
</div>

<? }?>
<?
if (empty($list)){
?>
<div class="notvip wlimit" style="margin-top:0px">
    <div class="img"><img src="<?=$webset['logo']?>"></div>
    <div class="getvip">获取VIP <i>全站模板任意下载</i> </div>
    <a  href="<?=u("user","recharge")?>" class="openvip">立即开通</a>
</div>
<? }?>

<?
include(TPLURL."/foot.tpl.php");
?>