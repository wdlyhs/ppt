<?php	
session_start();
require(dirname(__FILE__).'/include/config.inc.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $cfg_webname; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0 , user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta content="telephone=no" name="format-detection">
<meta name="viewport"content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link href="style/webstyle.css" rel="stylesheet" type="text/css" />
<link href="style/public.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.touchslider.js"></script>


<script type="text/javascript">

//ios7 不用webapp

(function(){

  if(/(iPhone|iPad)\sOS\s7_/.test(window.navigator.userAgent)){

  var t=document.head.querySelector('meta[name="apple-mobile-web-app-capable"]');

  if(t)t.remove();

  }

})()





/*$(function(){	

$(".lctel").click(function(j){j.stopPropagation();

  location.href="tel:1366877905"

  });

})*/



window.onerror = function(err) {

  log('window.onerror: ' + err)

  }

  

  function connectWebViewJavascriptBridge(callback) {

  if (window.WebViewJavascriptBridge) {

    callback(WebViewJavascriptBridge)

  } else {

    document.addEventListener('WebViewJavascriptBridgeReady', function() {

    callback(WebViewJavascriptBridge)

    }, false)

  }

  }

  

  connectWebViewJavascriptBridge(function(bridge) {

  

  bridge.init(function(message, responseCallback) {

    



    responseCallback(data)

  })



    var button = document.getElementById('button');

  button.onclick = function(e) {

    e.preventDefault()

    

                   var data = 'Hello from JS button'

  

      bridge.callHandler('testObjcCallback', {'tel': '15110795155'}, function(response) {

                            alert(response);

                           

                            })

                   

    bridge.send(data, function(responseData) {

    

    })

  }



  })



</script>
<style>
input:-moz-placeholder,
textarea:-moz-placeholder {
	color: #9c9c9c;
}

input:-ms-input-placeholder,
textarea:-ms-input-placeholder {
	color: #9c9c9c;
}

input::-webkit-input-placeholder,
textarea::-webkit-input-placeholder {
	color: #9c9c9c;
}
</style>
</head>

<body style="max-width:640px;margin:0 auto;background:url(images/bg11.jpg);">

<!--头部 开始-->

<!--内容 开始-->
<div class="yjfk_title">我要入驻
  <div class="yjfk_icon"><a style="cursor:pointer;" onClick="history.back();"><img src="images/icon31.png"></a></div>

</div>

<!--头部 结束--> 
<!--内容 开始-->

<div class="yjfk_nr">
	<div class="yjfk_t"></div>
  		<?php
		$dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid='23'");
			while($row = $dosql->GetArray())
			{
				echo $row['content'];	
			}
		?>	
	<div class="cl"></div>
</div>
<!--内容 结束--> 
<!--底部 开始-->
<?php include ('footer.php');?>
<!--底部 结束-->
</body>
</html>