<?

$price=$_POST['money'];
$temp_price=get_title("recharge",$_POST['id'],"price");

if ($price<>$temp_price)
    exit();


$aid=insert_order($_POST['id'],1);
$row=get_table("order",$aid);
include(DDROOT."/comm/wxpay_native.class.php");
$payment['wxpay_native_appid']=$webset['weixin']['appid'];
$payment['wxpay_native_appsecret']=$webset['weixin']['appsecret'];
$payment['wxpay_native_key']=$webset['weixin']['sh_key'];
$payment['wxpay_native_mchid']=$webset['weixin']['sh_hao'];

$order['order_amount']=$row['price']; //订单金额
$order['order_sn']=$row['order_sn'];
$order['body']=WEBNAME.$row['title'];//订单号
$order['title']=WEBNAME.$row['title']."充值";//订单号


$wxpay=new wxpay_native();

$res=$wxpay->get_code($order, $payment);

$d['img']=$res;
$d['aid']=$aid;
echo dd_json_encode($d);
?>