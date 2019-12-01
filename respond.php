<?
file_put_contents("rralipay.txt",serialize($_GET));
include (dirname(__FILE__).'/comm/dd.config.php');
if ($_GET['code']=="alipay"){

	  $id=$duoduo->select("order","id","order_sn='".$_GET['out_trade_no']."'");
	  if ($id and $_GET['trade_status']=="TRADE_SUCCESS"){
		 // update_order($_GET['out_trade_no'],$_GET['trade_no']);  
	      jump(u("user","success",array("id"=>$id)));
		  //回调成功更新处理
	  }else{
			 echo "异常";exit();
	  }
		  
		  
}
  

?>