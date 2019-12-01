<?

include (dirname(__FILE__).'/comm/dd.config.php');

include(DDROOT."/comm/alipay.class.php");
$payment['alipay_partner']=$webset['zfb']['appid'];
$payment['alipay_key']=$webset['zfb']['appsecret'];
$payment['alipay_account']=$webset['zfb']['zh'];

$alipay =new alipay();
$alipay->notify($payment);
?>