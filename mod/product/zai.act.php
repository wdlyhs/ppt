<?
$page=$_GET['page'];
$pagesize=$_GET['pagesize'];

$page2=$pagesize*($page-1);

$list=$duoduo->select_all("product","*","1=1 and `status`=1 order by sort desc,id desc limit $page2,$pagesize");

$page2=$pagesize*($page);
$list_next=$duoduo->select_all("product","*","1=1 and `status`=1 order by sort desc,id desc limit $page2,$pagesize");



?>



<? foreach ($list as $k=>$row){
	$k++;
	?>
  
  
  
  <li class="content clearfix">
	            <div class="fl">
	                <div class="link">
	                    <img src="<?=$row['img']?>" alt=""/>
	                </div>
	                
	            </div>
	            <div class="fr exp">
	                <h1><i class="fa fa-gift" aria-hidden="true"></i> <?=$row['title']?></h1>

	                <p>● 活动对象：<?=$row['dc']?></p>

	                <p>● 活动内容：<?=$row['content']?></p>

	                <div class="shenqing tac">
	                    <p>
	                        <a href='<?=u("product","apply",array("id"=>$row['id']))?>' class="di-b bgcolor querycon2_btn" data="" target='_blank'>立即申请</a>
	                    </p>
	                </div>
	            </div>
	        </li>
  
  
  <? }?>
  
  
  <?
 
if (count($list_next)==0){
?>

<span class="jianjian" style="display:none"></span>
<? }?>