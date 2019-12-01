<?php
/**
 * ECSHOP 微信扫码支付
 * ============================================================================
 * 版权所有 2005-2010 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: douqinghua $
 * $Id: unionpay.php 17063 2015-08-006Z z1988.com $
 */



		

require_once ( DDROOT.'/jian_file/wxpay/WxPay.Config.php' );
require_once ( DDROOT.'/jian_file/wxpay/WxPay.Api.php' );
require_once ( DDROOT.'/jian_file/wxpay/WxPay.Notify.php' );
require_once ( DDROOT.'/jian_file/wxpay/WxPay.PayNotifyCallBack.php' );
require_once ( DDROOT.'/jian_file/wxpay/log.php' );

/**
 * 类
 */
class wxpay_native
{
	private $dir  ;
	private $site_url;


	function _config( $payment )
	{
		WxPayConfig::set_appid( $payment['wxpay_native_appid'] );
		WxPayConfig::set_mchid( $payment['wxpay_native_mchid'] );
		WxPayConfig::set_key( $payment['wxpay_native_key'] );
		WxPayConfig::set_appsecret( $payment['wxpay_native_appsecret']);	
	}
	
	/**
     * 生成支付代码
     * @param   array   $order  订单信息
     * @param   array   $payment    支付方式信息
     */
	function get_code($order, $payment)
	{
		
		$this->_config($payment);
		$root_url ="/";
		$notify_url = SITEURL."/a.php";
		
		$out_trade_no = $order['order_sn'];
		
		$body = $order['body'];

		$input = new WxPayUnifiedOrder();
		$input->SetBody( $body);
		$input->SetAttach( $order['order_sn'] );		//商户支付日志
		$input->SetOut_trade_no( $out_trade_no );		//商户订单号 
		$input->SetTotal_fee( strval(($order['order_amount']*100)) ); //总金额
		$input->SetTime_start(date("YmdHis"));
		//$input->SetTime_expire(date("YmdHis", time() + 600));
		//$input->SetGoods_tag("test");
		$input->SetNotify_url( $notify_url );	//通知地址 
		$input->SetTrade_type("NATIVE");	//交易类型
		$input->SetProduct_id( $order['order_sn'] );

		$result = $this->GetPayUrl($input);
	  
		$url2 = null;
		$error = '出错了'; 
		if ( empty( $result ) ){
			return $this->return_error($error);
		}
		if( $result["return_code"] == 'FAIL'){
			return  $this->return_error($result["return_msg"]);

		}
		if( $result["result_code"] == 'FAIL'){
			return  $this->return_error($result["err_code_des"]);		
		}
		$url2 = $result["code_url"];
		
		if ( empty( $result["code_url"] ) ){
			return  $this->return_error($error);
		}	
		
	        $url2 = $result["code_url"];
			
            $html = '<div class="wx_qrcode" style="text-align:center">';
			$html .= "</div>";
            //$html .= $this->getcode($code_url);
		
			$img = '<img alt="扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data='.urlencode($url2).'" style=" width:150; height=150"/>';
       
			$img = $this->getcode($url2,$out_trade_no);

             return $img;
    }
	
	function respond()
	{
		return true;
	}
	
	/**
	 * 字符串截取，支持中文和其他编码
	 * @static
	 * @access public
	 * @param string $str 需要转换的字符串
	 * @param string $start 开始位置
	 * @param string $length 截取长度
	 * @param string $charset 编码格式
	 * @param string $suffix 截断显示字符
	 * @return string
	 */
	function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true) {
		if(function_exists("mb_substr"))
			$slice = mb_substr($str, $start, $length, $charset);
		elseif(function_exists('iconv_substr')) {
			$slice = iconv_substr($str,$start,$length,$charset);
		}else{
			$re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
			$re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
			$re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
			$re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
			preg_match_all($re[$charset], $str, $match);
			$slice = join("",array_slice($match[0], $start, $length));
		}
		return $suffix ? $slice.'...' : $slice;
	}

	
	function return_error( $error ){
		$root_url="/";
		$html = '<a id="pay_wxpayz1988com" href="javascript:;"  onclick="alert(\''. $error .'\')" style="display:block;"><img src="'. $root_url .'includes/modules/payment/wxpay/wxpay-icon.png" alt="'. $GLOBALS['_LANG']['wxpay_native']  .'"></a>';
		return $html;
	}
	

    function notify($payment)
    {
		
		
		$this->_config($payment);

		$lib_path	= DDROOT.'/jian_file/wxpay/';
		$logHandler= new CLogFileHandler($lib_path."logs/".date('Y-m-d').'.log');
		$log = Log::Init($logHandler, 15);
		
		Log::DEBUG("begin notify");
		$notify = new PayNotifyCallBack( );
		$notify->Handle(true);
		
		$data = $notify->data;
		file_put_contents("t2.txt",serialize($data));
	    if (!check_money($data['out_trade_no'], $data['total_fee']/100)){  
		     file_put_contents("wxpricefail.txt","1");
		    return false;
        }
		//判断签名
			if ($data['result_code'] == 'SUCCESS') {
				   $out_trade_no=$data['out_trade_no'];
				   $transaction_id=$data['transaction_id'];
				   file_put_contents("t15.txt",$out_trade_no."___".$transaction_id);
				    update_order($out_trade_no,$transaction_id);
					return true;
			}else{
				 echo 'fail';
			}
			
		return false;
		
    }


    function getcode($url, $out_trade_no){
        if(file_exists(DDROOT.'/jian_file/wxpay/phpqrcode.php')){
            include_once(DDROOT.'/jian_file/wxpay/phpqrcode.php');
        }
        // 纠错级别：L、M、Q、H 
        $errorCorrectionLevel = 'Q';  
        // 点的大小：1到10 
        $matrixPointSize = 7;
        // 生成的文件名
        $tmp = DDROOT .'/images/qrcode/';
        if(!is_dir($tmp)){
            @mkdir($tmp);
        }
        $filename = $tmp . $errorCorrectionLevel . $matrixPointSize .$out_trade_no. '.png';
        QRcode::png($url, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
        return '<img src="/images/qrcode/'.basename($filename).'" />';
    }
    
    function log($file,$txt)
    {
       $fp =  fopen($file,'ab+');
       fwrite($fp,'-'.local_date('Y-m-d H:i:s').'---');
       fwrite($fp,$txt);
       fwrite($fp,"\r\n");
       fclose($fp);
    }
	
/**
	 * 
	 * 生成扫描支付URL,模式一
	 * @param BizPayUrlInput $bizUrlInfo
	 */
	public function GetPrePayUrl($productId)
	{
		$biz = new WxPayBizPayUrl();
		$biz->SetProduct_id($productId);
		$values = WxpayApi::bizpayurl($biz);
		$url = "weixin://wxpay/bizpayurl?" . $this->ToUrlParams($values);
		return $url;
	}
	
	/**
	 * 
	 * 参数数组转换为url参数
	 * @param array $urlObj
	 */
	private function ToUrlParams($urlObj)
	{
		$buff = "";
		foreach ($urlObj as $k => $v)
		{
			$buff .= $k . "=" . $v . "&";
		}
		
		$buff = trim($buff, "&");
		return $buff;
	}
	
	/**
	 * 
	 * 生成直接支付url，支付url有效期为2小时,模式二
	 * @param UnifiedOrderInput $input
	 */
	public function GetPayUrl($input)
	{
		if($input->GetTrade_type() == "NATIVE")
		{
			$result = WxPayApi::unifiedOrder($input);
			return $result;
		}
	}
	

}

?>