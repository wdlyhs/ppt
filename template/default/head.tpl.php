<?php 


if ($dduser['id'] and $dduser['jihuo']==2){
	
	jump(u("user","exit"),"您的账号已经被禁用");
	
}
 if (empty($_GET['cid']))
    $_GET['cid']=$duoduo->select("type","id","1=1 order by sort desc");
 if ($_GET['cid']){
	 
	$top_id=dd_cid($duoduo,$_GET['cid']);
	
	$top_row=$duoduo->select("type","*","id=".$top_id);
	 $_GET['cid']=dd_fcid($duoduo,$_GET['cid']);
	 
	 
	 if (ACT!="view"){
		 $article=$duoduo->select("type","*","id=".$_GET['cid']);
		 $article1=$article;
		 }
	    
	}

 $types=get_types($duoduo,0);

 
?>
<!DOCTYPE html> 
<html><head> 


<meta charset="utf-8" /> 
<meta name="renderer" content="ie-compt">
<?php if(is_file(DDROOT.'/data/title/'.$mod.'_'.$act.'.title.php')){?>
<?php include(DDROOT.'/data/title/'.$mod.'_'.$act.'.title.php');?>
<?php }else{?>
<title><?=WEBNAME?></title>
<link type="image/x-icon" href="favicon.ico" rel="icon">
<meta name="keywords" content="<?=WEBNAME?>" />
<meta name="description" content="<?=WEBNAME?>" />


<?php }?>


<link rel="stylesheet" href="<?=TPLURL?>/css/common20191024.css" />

<link rel="stylesheet" href="<?=TPLURL?>/css/personal.v4.css" />
<link rel="stylesheet" href="<?=TPLURL?>/css/desiger.css" />


     <link rel="stylesheet" href="<?=TPLURL?>/css/cateso20190731.css" /> 

<script type="text/javascript">
      var now=new Date();
      var startTime=now.getTime();
      var isLogin =  false;; 
      var isvip  = 0;
      var code = "2";
            var exetime = "0.003";
            var istuisong = 1;
      var kid = 1;
      var loadtime = 0;
      var uid = 0;
      var click_num = 0;
      var ispay = 0;    </script>
</head> 
<body style="background: #eceff1;"> 
          <!--统一蒙版-->
      <div id="mengcheng"></div>
      
    
     
     
        <div id='login'>
<div class='close logincolse'></div>

<div class="pastone">
    <div class='l-logo' >
    <img src="<?=$webset['logo']?>" alt="用户登陆logo">
	</div>
	<a href="javascript:;" onclick="openLogin('qq')" class='l-qq'><i></i>QQ<span class="loginname">登录</span></a>
	<a href="javascript:;" onclick="openLogin('wx')" class='l-wx'><i></i>微信<span class="loginname">登录</span></a>
	<a href="<?=list_url($duoduo,737)?>"  class='l-deal diyige'><input type="checkbox" name="yonghuxieyi" checked="checked">我已阅读并接受《用户协议》</a>
	<div class='diff-login'>
	    <a href="javascript:;" class='phone-longin' type="1">用户<span style="color:#8a8a8a" class="loginname">登录</span></a>
	    <a href="javascript:;" class='l-deal isreg' type="1">没有账号  <span>立即注册</span></a>
	</div>	
</div>

<div class="pasttwo" style="display:none;">
	<div  class='l-logo l-top' style="margin-top:25px;" >
    <img src="<?=$webset['logo']?>" alt="用户登陆logo">
    </div>

    <div class='login-input i-pone'>
    	<input type="text" class="Phone-code-inp" name="username" id="username" placeholder="用户名"> 
    	<span class='l-yes' style="display:none;">✔</span>
    </div> 
    
    <div class='login-input i-pone'>
    	<input  type="password" class="Phone-code-inp" name="password" id="password" placeholder="密码"> 
    	<span class='l-yes' style="display:none;">✔</span>
    </div>
    
 <!--      <div class='login-input i-pone'>
    	<input type="text" class="Phone-code-inp" name="password_confirm" id="password_confirm" placeholder="确认密码"> 
    	<span class='l-yes' style="display:none;">✔</span>
    </div>-->

     <div class='htiao'>
        <div class='login-input phone-yzm' style="float:left;">
            <input type="text" class="phonecode" name="yzm" id="yzm"  placeholder="验证码"> 
            <span style="display:none;" class='l-yes'>✔</span>
        </div>
        <?=yzm()?>
        <!--<span style="float:left;" class='get-agin'></span>-->
    </div>


    <!--<div class='htiao'>
       <div class='login-input phone-info'><input type="text" class="Veri-code-inp" placeholder="短信验证码">
       	<span class='l-yes' style="display:none">✔</span>
       </div>
        <a class='get-yzm'>获取短信验证码</a>
    </div>-->

    

    <a href="javascript:;" class='alert-phone-longin loginname' id="user11">登录</a>
    <div class='diff-login'>
        <a href="javascript:;" class="phone-longin  wx-login" type="2">&lt; QQ微信<span class="loginname">登录</span></a>
        <a href="/about/gvrf" target="_blank" class='l-deal'><input type="checkbox" name="yonghuxieyi" checked="checked">我已阅读并接受《用户协议》</a>
    </div>
</div>

<div class='l-left'>
    <div class='title'>欢迎来到五彩办公</div>
    <ul>
        <li><i class='i1'></i>海量创意模板，满足您的需求</li>
        <li><i class='i2'></i>实用易修改，提升您的效率</li>
        <li><i class='i3'></i>高质量精品热点内容每日更新</li>
        <li><i class='i4'></i>专业客服接待，及时解决问题</li>
    </ul>
</div>
</div>
    <!-- 用户立即加入vip -->
<div class='get-vipintro addvip'>
    <div class='close'></div>
    <div class='vip1'><i class='panda1'></i> 开通会员全站免费下载</div> 
    <a target="_blank" href="/purchase?from=down" class='be-vip'>立即加入</a> 
</div>
<!-- 开通vip成功 -->
<div class='get-vipintro vips vipone'>
    <div class='close'></div>
    <div class='vips'><i class='panda2'></i></div> 
    <a class='suc-vip'>您的一年会员开通成功！</a> 
</div>
<div class='get-vipintro viptwo'>
    <div class='close'></div>
    <div class='vips'><i class='panda3'></i></div> 
    <a class='suc-vip'>您的一年会员开通成功！</a> 
</div>
<div class='get-vipintro vipthree' style="display:none">
    <div class='close'></div>
    <div class='vips'><i class='panda3'></i></div> 
    <a class='suc-vip'>开通终身VIP成功！</a> 
</div>

<!-- vip数量用户 -->
<div class='get-vipintro upvip'>
    <div class='close'></div>
    <div class='over'><i class='panda4'></i> 今日下载数已用完</div> 
    <a target="_blank" href="/purchase?type=1&from=down" class='more-vip'>升级会员</a> 
</div>

<!--意见反馈-->
<div class='user-advice'>
    <div class='close'></div>
    <div class='thanks'>感谢您留下宝贵的建议</div>
    <div class="feedback-type">
      <span class="type-title">反馈类型：</span>
      <div class="type-list advicetype">
        <input type="hidden" name="advicetype" value="1">
          <a href="javascript:;" class="t1 on" type="1">使用问题</a>
          <a href="javascript:;" class="t2" type="2">产品功能改进</a>
          <a href="javascript:;" class="t3 " type="3">提交素材需求</a><span class="warn-tip" style="opacity: 1;position: relative;z-index: 1;"></span>
      </div>
    </div>
    <textarea class='u-advice' name="content" placeholder="请输入你在使用过程中遇到的问题？如被采纳有机会获得VIP哦！"></textarea>

        <div class="c-type advicecate" style="display:none;">
      <span >请选择素材分类：</span>
       <select name="cType" id="cType" >
                           <?
                             foreach ($types as $row){
						   ?>
                              <option value="<?=$row['id']?>" ><?=$row['title']?></option>
                           
                           <? }?>
                   </select>
    </div>
    
    <input type="text" class='connect' name="contact" placeholder="留下您的联系方式（QQ或者电话）,加入五彩办公官方QQ群:<?=$webset['kfq']?>">
    <div class='submit'>提交</div>
</div>

        <div class='headercatage'>
    <div class="header">
            <div class="navs wlimit">
            <a class="logo" alt="五彩办公" href="/" style="background: url(<?=$webset['logo']?>) -3px 1px no-repeat;"></a>
             <div class="allfenl">
              <a href="/"  class="kuai">首页</a> 
              <div class="kuai">分类
                <em></em>
                <ul>
                
								   <?
                                  
                                   foreach ($types as $row){
                                   ?>
                                   
                                    <li><a href="<?=list_url($duoduo,$row['id'])?>" ><?=$row['title']?></a></li>
                                    
                                    <? }?>
                                </ul>
              </div>

  <script>
  
  var cid=<?=$_GET['cid']?>;
  </script>
                          <div id="searchdiv">
                <div class="search c-search" id="cd-search-float">
                  <div class="search-box">
                                         <div class='searchtype'>
                                                         <span><?=get_title("type",$_GET['cid'])?></span>
                                                  <em></em>
                        <i></i>
                      </div>
                      <ul id='typedown'>
                       
         <!--               <li class="allkid0"    ><a kid="0" href="javascript:;">全部</a></li>-->
                        <?
                                  
                                   foreach ($types as $k=>$row){
									   $k++;
                                   ?>
                       
                       
                        <li class="allkid<?=$k?>"    style="display:<?=($row['id']==$_GET['cid'])?"none":""?>" ><a cid="<?=$row['id']?>"  kid="<?=$k?>" href="javascript:;"><?=$row['title']?></a></li>
                       
                       <? }?>
                                            </ul>
                                          <input id="keyword-float" isfont="0" type="text" key-type="1" value="<?=$_GET['q']?>" autocomplete="off" name="search" class='i-search'   placeholder="搜索<?=get_title("type",$_GET['cid'])?>">

                  </div>          
                   <a class='s-niu search-btn' href="javascript:;" key-type="1"><em></em></a>
                   
                   
                   
                   <div id="dropdown-box-float" class="hot-search" style="display: none;">
                   
                  
                 </div>
                   
                   
                   
                   
                </div>
              </div>
                      </div>
                <?
     if ($dduser['id']>0){
		
	 ?>
     <script>
         var isLogin=1;
     </script>
     <div class="login">
               <!-- 未登录 -->
                                    <div class="s-regist">
     <a href="<?=u("user","index")?>"  class="a-regist"><img width="" alt="用户头像" class="lazy-nodelay" data-original="<?=head_img($dduser['id'])?>" src="<?=head_img($dduser['id'])?>" style="display: inline;"></a>

     <div class="u-detail">
         <div class="name">
            <span class="zhanghao">账号：</span><span class="yongname"><?=$dduser['name']?></span><span class="yongid">(ID:<?=$dduser['id']?>)</span><i style="margin-left:2px;" class="yongbiao i-d1"></i>
         </div>

                     <a href="<?=u("user","recharge")?>" class="power"  target="_blank">获得会员特权</a>
         
         <div class="u-detail1 ">
            <a href="<?=u("user","index")?>"><div class="u-down">我的收藏</div></a>
            <a href="<?=u("user","xiazai")?>"><div class="u-coll">我的下载</div></a>
         </div>
         <a href="<?=u("user","exit")?>" class="loginout">[ 退出登录 ]</a>
     </div>
</div>
                                             <a href="javascript:;"  class="vip-int jianvip"><div class="diamond"></div></a>
                         

            </div>
     
     <? }else {?>
     
            <div class="login">
               <!-- 未登录 -->
                                   <span name="注册" class="regist">注册</span>
                   <span name="登录" class="regist-lg">请登录</span>
                                             <a   href="javascript:;" target="_blank" class='vip-int jianvip'><div class='diamond'></div></a>
                         

            </div>
            
            
            
            <? }?>
                     </div>
    </div>
</div>