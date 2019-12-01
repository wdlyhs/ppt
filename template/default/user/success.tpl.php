<?


$data=$duoduo->select("order","*","id=".$_GET['id']);

include(TPLURL."/head.tpl.php");
?>
<link rel="stylesheet" type="text/css" href="<?=TPLURL?>/css/order.css">
<div class="middle">
    <input type="hidden" value="K1857219_1733616_0" id="PayId">
    <div class="pay-head">
        <h3><strong id="morePicBut"><?=$data['title']?>购买</strong></h3>
        <div class="payTotal fr">总金额：<strong>￥<span><?=$data['price']?></span></strong></div>
    </div>

     <div class="weixin-box" style="width:auto">
     
            <div class="flow_fastcg">
		<div class="xian">
			<p class="xian1"><span>购买成功，订单号: <?=$data['order_sn']?></span></p>
			<p class="xian2">支付方式: <font style="padding-right:30px;"><?=($data['type']==1)?"微信支付":"支付宝支付"?></font>已付总额: <font><b>￥<?=$data['price']?>元</b></font></p>
			 
			<div class="online1">
				<b>您可以 <a href="/">返回首页</a> 或去 <a href="<?=u("user","index")?>">用户中心</a></b>
				<br><br>
			</div>
			<div class="wcwxts">
				<p class="wxts1">温馨提示</p>
				<div class="wxtsny">
					<p><b style="color:#FF6600">如果遇到问题？</b>请拨打：<?=$webset['tel']?>，由客服协助您完成充值。</p>
				</div>
			</div>
					</div>
	</div>
    
    
    
<link rel="stylesheet" href="<?=TPLURL?>/css/success.css" />

        
        
        
        
     </div>
    <!--<div class="pay-change">
        <a href="http://user.huitu.com/Buy/Payment?PicPayId=1733616" class="pc-box">
            <i class="pc-box-left">&lt;</i>
            <strong>选择其他方式支付</strong>
        </a>
    </div>-->
    
</div>

<?

include(TPLURL."/foot.tpl.php");
?>