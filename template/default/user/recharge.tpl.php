<? include(TPLURL."/head.tpl.php");


//清空10天前的无用订单

$t=strtotime("-15days",time());
$duoduo->delete("order","pay=1 and `status`=1 and addtime>$t");
?>

   <link rel="stylesheet" href="<?=TPLURL?>/css/pay201909041.css" /> 
 
<!--中部的东西-->
    
<div class='p-banner wlimit' style="background:url(<?=$webset['ad1']['pay']?>) center center no-repeat" new="1" youhuijuan="100"></div>
<div class='p-middle'>
    <div class='wlimit'>
        <div class='n-box'>
            <div class='name'>
                              赞助账号：<?=$dduser['name']?> （                 <?=(is_vip($dduser['id']))?"vip会员":"普通会员"?>
                ）
                          </div>
            <div class='vip' v="">

           
                   <?
                     $list=$duoduo->select_all("recharge","*","1=1 order by sort desc,id desc");
					 foreach ($list as $k=>$row){
						   $k++;
				   ?>
                                <div taocan="<?=$row['id']?>" money="<?=$row['price']?>"  class='box  <?=($k==1)?"chose":""?>'>
                       <?
                       if ($row['ydesc']){
						   
						   if ($row['ycolor']){
					   ?>
                       <div class='vip-tj' style="background: <?=$row['ycolor']?>;
    box-shadow: 0px 1px 5px <?=$row['ycolor']?>;"><?=$row['ydesc']?></div>
                       
                       <? } else {?>
                         <div class='vip-tj'><?=$row['ydesc']?></div>
                       <? } }?>
                    
                    <div class='vip-name'><?=$row['title']?></div>
                    <div class='vip-money'><span>￥</span><?=$row['price']?>
                    <?
					if ($row['yprice']){
                    ?>
                    <div class='yjia'>原价:￥<?=$row['yprice']?></div><? }?></div>
                                         <div class='vip-intr'>
                                         <? //($row['day_xiazai_num'])?$row['day_xiazai_num']."个每天":""?>
                                         <?=$row['desc']?></div>
                                         
                                   <?
                                   if ($k==1){
								   ?>
                    <div class='gou '></div>
                    
                    <? }?>
                </div>
                               
                    <? }?>           
                               <div class='clear'></div>
            </div>

                       

            <div class='money'>支付金额：<span class="current_money"><?=$list[0]['price']?></span>元<!--<i class="shengone" ></i>--></div>
            <div class='pay'>
               <div class='weixin'>
                    <div class='wx-box' id="wxqr"></div>
                    <div class='wx-say'><i></i>微信扫码支付</div>
                </div>

                <div class='zhifubao'  onClick="alipay()">
                    <div class='zfb-box'></div>
                    <div class='zfb-say'><i></i>支付宝支付&nbsp; <em>></em></div>
                </div>
             
            </div>
        </div>
    </div>
</div>

<div class='tishi'>
   温馨提示：请合理使用任意下载账号。如恶意刷图盗图，将被系统暂停账号下载功能。如有疑问请联系客服 
</div>







<? include(TPLURL."/foot.tpl.php");?>

<script>
var aid=0;
    if(isLogin == false){
        login();
        $('#login').find('.close').remove();
    }


     function getRandom(min, max){
            var r = Math.random() * (max - min);
            var re = Math.round(r + min);
            re = Math.max(Math.min(re, max), min)
            return re;
      }

    //红包js----start
   // $('.open-cj').click(function(){
//         $('.cj-bc').show();
//         $('.vipfour').hide();
//         var url = '/api/activity/redpacket';
//         $.getJSON(url,{type:1},function(){});
//         dingshi =setInterval(function(){
//            num = getRandom(0,100)
//            $('.youhuijuan').html(num);
//            if(num>50 && num<55){
//                clearInterval(dingshi);
//               $('.youhuijuan').html($('.p-banner').attr('youhuijuan'));
//            }
//         },10);
//    });
//
//    $('#yhhb').click(function(){
//          $('#mengcheng').show();
//          $('.gnyjh').show(); 
//          var url = '/api/activity/redpacket';
//          $.getJSON(url,{type:2},function(){});
//          return false;
//    });
    //红包js----end

    var isaddvip = $('.vip').attr('v');
    if(isaddvip>0){
       paysuccess(isaddvip); 
    }

     $('.hgez').hover(function(){
          $(this).css('cursor','pointer');
     });

     $('.hgez').click(function(){
        //  var coupon = $(this).attr('coupon');
//          var taocan = $(this).attr('taocan');
//          $("input[name='click_type']").val(301);
//          $('.hgez').removeClass('h-chose');
//          $(this).addClass('h-chose');
//          $('.box').removeClass('chose');
//          $('.gou').addClass('d-none');
//          $(".box[taocan="+taocan+"]").addClass('chose');
//          $(".box[taocan="+taocan+"]").find('.gou').removeClass('d-none');
//          var money = $(".box[taocan="+taocan+"]").attr('money');
//
//           if(coupon>0){
//               var money = money - coupon;
//           }
//
//           $('.current_money').html(money);
//           $("input[name='pay-money']").val(money);
//           $("input[name='taocan']").val(taocan);
//           createWxQR(money, taocan);
     });


     
     $('.box').click(function(){

          taocan = $(this).attr('taocan');

        // $('.hgez').removeClass('h-chose');
//         $('.couponbox'+taocan).addClass('h-chose');
//         var coupon = parseInt($('.couponbox'+taocan).attr('coupon'));
//
//         if(taocan<4 && coupon>0){
//            $("input[name='click_type']").val(301);
//         }else{
//            $("input[name='click_type']").val(1);
//         }
//
         $('.gou').addClass('d-none');
         $(this).find('.gou').removeClass('d-none');
         $(this).addClass('chose').siblings().removeClass('chose');

         var money = $(this).attr('money');
            $('.shengone').hide();
         $('.current_money').html(money);
         $("input[name='pay-money']").val(money);
         $("input[name='taocan']").val(taocan);
         createWxQR(money, taocan);
     });

    
    function createWxQR(money,taocan){
          $("#wxqr").html('<img src="images/wait.gif">');
	    $.ajax({
            type: 'post',
            url: "index.php?mod=user&act=pay&sjs="+new Date().getTime(),
            data: {'money':money,'id':taocan},
			dataType: "json",
            success: function(res){    
			  aid=res.aid;
		
			  $("#wxqr").html(res.img);
                   
            }
            })
	   
    }
         
         var taocan=<?=$list[0]['id']?>;
         createWxQR(<?=$list[0]['price']?>, <?=$list[0]['id']?>);
   
  function alipay(){
	  
	  if (aid<1){
		  
		  alert("系统繁忙");
		  return false;
	 }
	 window.location.href="index.php?mod=user&act=alipay&rid="+taocan;
  }
</script>


<script>
function get_dtk(){
$.ajax({
			url: "index.php?mod=order&act=status&id="+aid,
			data:{},
			dataType:'text',
			success: function(data){
				if (data==1)
				    window.location.href="index.php?mod=user&act=success&id="+aid;
					
			 }
		});
		

}

window.setInterval(get_dtk, 5000); 

setInterval("window.location.reload()",3600000);
</script>


<style>
#wxqr img{ width:140px; height:140px}
</style>