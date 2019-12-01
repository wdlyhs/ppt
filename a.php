<?

include (dirname(__FILE__).'/comm/dd.config.php');

include(DDROOT."/comm/wxpay_native.class.php");
$payment['wxpay_native_appid']=$webset['weixin']['appid'];
$payment['wxpay_native_appsecret']=$webset['weixin']['appsecret'];
$payment['wxpay_native_key']=$webset['weixin']['sh_key'];
$payment['wxpay_native_mchid']=$webset['weixin']['sh_hao'];
$wxpay=new wxpay_native();
$wxpay->notify($payment);
?>