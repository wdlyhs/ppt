<?php

/**
 *支付宝插件
 * ============================================================================
 * * 版权所有 2005-2012 商派网络，并保留所有权利。
 * ecshop.com
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: douqinghua $
 * $Id: alipay.php 17217 2011-01-19 06:29:08Z douqinghua $
 */


class alipay
{

    /**
     * 构造函数
     *
     * @access  public
     * @param
     *
     * @return void
     */

	/* 代码修改_start  By  www.68ecshop.com */
    function __construct()
    {
        $this->alipay();
    }

	 function alipay()
    {
    }
	/* 代码修改_end  By  www.68ecshop.com */

    /**
     * 生成支付代码
     * @param   array   $order      订单信息
     * @param   array   $payment    支付方式信息
     */
    function get_code($order, $payment)
    {
	
		
        if (!defined('EC_CHARSET'))
        {
            $charset = 'utf-8';
        }
        else
        {
            $charset = EC_CHARSET;
        }

        $real_method = $payment['alipay_pay_method'];

        $service = 'create_direct_pay_by_user';
        $extend_param = 'isv^sh22';

        $parameter = array(
            'extend_param'      => $extend_param,
            'service'           => $service,
            'partner'           => $payment['alipay_partner'],
            //'partner'           => ALIPAY_ID,
            '_input_charset'    => $charset,
            'notify_url'        => SITEURL."/alipay.php",
            'return_url'        => SITEURL."/respond.php?code=alipay",
            /* 业务参数 */
            'subject'           => $order['title'],
            'out_trade_no'      => $order['order_sn'],
            'price'             => $order['order_amount'],
            'quantity'          => 1,
            'payment_type'      => 1,
            /* 物流参数 */
            'logistics_type'    => 'EXPRESS',
            'logistics_fee'     => 0,
            'logistics_payment' => 'BUYER_PAY_AFTER_RECEIVE',
            /* 买卖双方信息 */
            'seller_email'      => $payment['alipay_account']
        );

        ksort($parameter);
        reset($parameter);

        $param = '';
        $sign  = '';

        foreach ($parameter AS $key => $val)
        {
            $param .= "$key=" .urlencode($val). "&";
            $sign  .= "$key=$val&";
        }

        $param = substr($param, 0, -1);
        $sign  = substr($sign, 0, -1). $payment['alipay_key'];
        //$sign  = substr($sign, 0, -1). ALIPAY_AUTH;
        jump('https://mapi.alipay.com/gateway.do?'.$param. '&sign='.md5($sign).'&sign_type=MD5');
       // $button = '<div style="text-align:center"><input type="button" onclick="window.open(\'https://mapi.alipay.com/gateway.do?'.$param. '&sign='.md5($sign).'&sign_type=MD5\')" value="' .$GLOBALS['_LANG']['pay_button']. '" class="main-btn main-btn-large"/></div>';

        //return $button;
    }

    /**
     * 响应操作
     */
    function notify($payment)
    {
		
        if (!empty($_POST))
        {
            foreach($_POST as $key => $data)
            {
                $_GET[$key] = $data;
            }
        }
       
        $seller_email = rawurldecode($_GET['seller_email']);

       
        /* 检查数字签名是否正确 */
        ksort($_GET);
        reset($_GET);

        $sign = '';
        foreach ($_GET AS $key=>$val)
        {
            if ($key != 'sign' && $key != 'sign_type' && $key != 'code')
            {
                $sign .= "$key=$val&";
            }
        }
          $order_sn=$_GET['out_trade_no'];
		  if (!check_money($order_sn, $_GET['total_fee']))
        {  
		
		
            return false;
        }
		
		
        $sign = substr($sign, 0, -1) . $payment['alipay_key'];
		
        //$sign = substr($sign, 0, -1) . ALIPAY_AUTH;
        if (md5($sign) != $_GET['sign'])
        {
			file_put_contents("alipay1.txt","fail");
            return false;
        }
        /* 检查支付的金额是否相符 */
      
        if ($_GET['trade_status'] == 'WAIT_SELLER_SEND_GOODS')
        {
            /* 改变订单状态 */
	
           update_order($_GET['out_trade_no'],$_GET['trade_no']);
          
            return true;
        }
        elseif ($_GET['trade_status'] == 'TRADE_SUCCESS')
        {
			file_put_contents("alipay1.txt",serialize($_GET));
            /* 改变订单状态 */
            update_order($_GET['out_trade_no'],$_GET['trade_no']);

            return true;
        }
        else
        {
            return false;
        }
    }
}

?>

