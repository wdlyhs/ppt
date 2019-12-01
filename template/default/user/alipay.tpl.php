<?



$aid=insert_order($_GET['rid'],2);
$row=get_table("order",$aid);
$order['order_amount']=$row['price'];
$order['order_sn']=$row['order_sn'];
$order['id']=$row['id'];
$order['title']=WEBNAME.$row['title'];
include(DDROOT."/comm/alipay.class.php");
$payment['alipay_partner']=$webset['zfb']['appid'];
$payment['alipay_key']=$webset['zfb']['appsecret'];
$payment['alipay_account']=$webset['zfb']['zh'];

$alipay =new alipay();

$alipay->get_code($order, $payment);

?>