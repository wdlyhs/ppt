 <!--尾部按键-->
    <div class='footer'>
     <div class='footer1'>
        <div class='user-say'>
            <span class='box'><i class='i-1'></i>价格优惠</span>
            <span class='box'><i class='i-2'></i>致臻精品</span>
            <span class='box'><i class='i-3'></i>高质售后</span>
            <span class='box'><i class='i-4'></i>100%满意</span>
            <span class='box1'><i class='i-5'></i>提升效率</span>
        </div>
    </div>
    <div class='footer2'>
        <div class='wlimit'>
            <div class='footer-logo' style="background: url(<?=$webset['blogo']?>) no-repeat 0 27px;"></div>
            <div class='company-say'> 
                <div class="statements">
                <a rel="nofollow" href="/">五彩办公</a>
                <?
                $dans=get_types($duoduo,735);
				foreach ($dans as $k=>$row){
				?>
                    
                    <a rel="nofollow" href="<?=list_url($duoduo,$row['id'])?>"><?=$row['title']?></a><span><?=($k==0)?"|":"|"?></span>
                <? }?>
                </div>
                <div class="copyrights">
                                     <?=$webset['banquan']?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 侧边栏 -->
<div class='cbl'>
    <div id="back-top" style="display:flex;flex-direction: column;justify-content:flex-start">

       <!--签到抽奖-->
       <div class="zr">
        <a  href="javascript:;" class="bg-b jianvip">
            <i class='ty huiyuan'></i>
        </a>
     
     
     </div> 
  
       <div class='lines'></div>
       <div class='userqq zr'>
            <a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$webset['qq']?>&site=qq&menu=yes" target="_blank" class="bg-b">
                <i class="ty qq"></i>
            </a> 
            <div class='userqqtipw'>
                <div class='userqqtip'>
                <div class="inner"></div>
               
                <div  class='qqtime'>在线时间：8:00-22:00</div>
                 <a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$webset['qq']?>&site=qq&menu=yes" target="_blank" class='clickqq'>点击咨询</a>
                <div class='cbl-line'></div>
                <div  class='qqtime'>官方交流群:<?=$webset['kfq']?></div>
                 <a href="https://shang.qq.com/wpa/qunwpa?idkey=<?=$webset['kfq_key']?>" target="_blank" class='clickqq'>点击加入</a>
                </div>
            </div>
        </div>
        <div class='lines'></div>
      <!--  <div class='lines'></div>-->
        <!--<div class="userqq">
            <a href="javascript:;"  class="bg-b">
                <i style="height:60px;" class="ty sizesc"></i>
            </a> 
            <div class="userqqtipw">
                <div class="userqqtip">
                    <div class="inner"></div>
                     <a  href='https://shang.qq.com/wpa/qunwpa?idkey=6af0aed5f921ddb9d1e21ccf5621953126b87e8f4faded954f29755042a2e059' target='_blank' class="clickqqco bluecolor">
                       <span class="qqnameblock">五彩办公官方群</span>
                      <i >加群</i></a>
                     <div class='cbl-line'></div>

                                         <a href='https://jq.qq.com/?_wv=1027&k=5Ln1KZw' target='_blank' class="clickqqco ">
                       <span class="qqnameblock">五彩办公美工兼职</span>
                      <i>加群</i></a>
                                        <a href='https://jq.qq.com/?_wv=1027&k=5lESmYw' target='_blank' class="clickqqco mgb">
                       <span class="qqnameblock">五彩办公UI设计</span>
                      <i>加群</i></a>
                                        <div class='grad'>
                      <a href='/index/qqgroup' target='_blank' class="qqmore">点击查看更多</a>
                    </div>
                </div>
            </div>
        </div>-->

      
            <!--<a href="javascript:;" class="bg-b"><i class='ty  qiandao'></i></a>
            <div class='lines'></div>-->
            <div class="zr" >
            <a href="javascript:;" class="bg-b web-coll" style="padding-bottom:25px"><i class='ty  sc'></i>
            <span class='web-col'>
                <span class='inner'></span>
                <span class='web-co'>
                  <em>Ctrl</em> + <em>D</em>
                  <p>快速收藏本站</p>
                </span>
              </span>
            </a> 
     </div>
     <div class='lines'></div>
         <!--   <div class='lines'></div>
            <a target="_blank" href="javascript:;" class="bg-b zuanqian">
             <i class='ty  winmoney'></i>
            </a> -->

             <div class="zr" style="margin-bottom:auto">

            <a href="javascript:;" class="bg-b"><i class='ty  advice'></i></a>  </div>
          
              <div class="zr" >
            <a href="javascript:;" class="bg-b"><i class='ty return-top'></i></a> </div>
        

    </div>
</div>

    <script src="<?=TPLURL?>/js/common20191026.js"></script>

    <link rel="stylesheet" href="<?=TPLURL?>/css/sign-alert.css">
<!-- 通用积分弹框 -->
<!--<div class='alertcredit alertjf'>
    <div class='close'></div>
    <div class='core'>5</div>
    <span class='insign'>签到领取 <em class='yellow'>5积分</em>成功</span>
    <span class='again'>明天再来哦~</span>
</div>-->

<!-- 获得vip弹框 -->
<!--<div class='alertcredit alertvip'>
    <div class='close'></div>
    <div class='pandaalert'></div>
    <span class='insign'>恭喜您获得 <em class='blue'>3天设计分类会员</em></span>
    <span class='again'>明天再来哦~</span>
</div>-->

<!--<div class='prize'>
    <div class='close'></div>
    <div class='prize-ba'>
        <span class='title'>签到抽奖得会员</span>
        <span class='titletwo'>每日签到送惊喜，连续签到更享心动奖励</span>
    </div>
    <div class='pro'>
        <div class='probox'>
            <div class=''></div>
            <span class='num'>+5</span>
            <span class='num'>积分</span>
        </div>
        <div class='line'></div>
        <div class='probox'>
            <div class=''></div>
            <span class='num'>+10</span>
            <span class='num'>积分</span>
        </div>
        <div class='line'></div>
        <div class='probox'>
            <div class=''></div>
            <span class='num'>+5</span>
            <span class='num'>积分</span>
        </div>
        <div class='line'></div>
        <div class='probox'>
            <div class='gift'>
                <em>随机礼包</em>
            </div>
        </div>
        <div class='line'></div>
        <div class='probox'>
            <div class=''></div>
            <span class='num'>+10</span>
            <span class='num'>积分</span>
        </div>
        <div class='line'></div>
        <div class='probox'>
            <div class=''></div>
            <span class='num'>+5</span>
            <span class='num'>积分</span>
        </div>
        <div class='line'></div>
        <div class='probox'>
            <div class='gift'>
                <em>随机礼包</em>
            </div>
        </div>
    </div>
    <a href="javascript:;" class='clickgo'>点击签到</a>
    <a href='javascript:;' class='todaygo' style="display: none">今日已签到</a>

    <span class='notice'>注：每周一重置签到奖励</span>
    <div class='line'></div>
    <div class='gocj'>
        <span>积分：<p class='blue'>加载中...</p> </span>
        <em class="sign" style="cursor:pointer;">积分明细</em>
        <a href="/index/lottery/index" class='go' target="_blank">去抽奖 ></a>
    </div>
</div>-->

<!--<div class='records'>
    <div class='close'></div>
    <div class='jl'>
        <a href="javascript:;" class='r-chose sign'>签到记录</a>
        <a href="javascript:;" class="gotocj">抽奖记录</a>
    </div>
    <div class='recordtime'>

    </div>
</div>-->

<style>
.lazy {
    background: #eee url(<?=$webset['lazy']?>) center center no-repeat;
}
</style>
<script type="text/javascript" src="<?=TPLURL?>/js/sign.js"></script>

    
<script src="<?=TPLURL?>/js/cateso20190522.js"></script>
<script src="<?=TPLURL?>/js/store.legacy.min.js"></script>

   <script src="<?=TPLURL?>/js/flex-images-v1.js" ></script>
 
      <script src="<?=TPLURL?>/js/video.js"></script>
      <script src="<?=TPLURL?>/js/audio.js"></script>
<script src="js/dd.js"></script>


<? if ($top_row['list_type']==6 and count($list)>0){?>
<script src="//static.tukuppt.com/png/js/masonry-v1.js" ></script>

<? }?>
<style>
.zr{ margin:5px auto}
</style>
<script>
//alert($(window).height());
$("#back-top").css("height",$(window).height());
 $('#demo1').flexImages({rowHeight: 320});
 $(".jian_audio").pause();

</script>
</body> 
</html> 