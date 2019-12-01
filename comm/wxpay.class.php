<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：wxpay.php
 * ----------------------------------------------------------------------------
 * 功能描述：微信支付插件
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */

/* 访问控制 */


/**
 * 微信支付类
 */
class wxpay
{

    var $parameters; // cft 参数
    var $payment; // 配置信息
    /**
     * 生成支付代码
     *
     * @param array $order
     *            订单信息
     * @param array $payment
     *            支付方式信息
     */
    function get_code($order, $payment,$dduser)
    {
		
	
		
        // 配置参数
        $this->payment = $payment;
        // 网页授权获取用户openid
        $openid = $dduser['openid'];
        if (!isset($openid) || empty($openid)) {
            return false;
        }
        
        // 设置必填参数
        // 根目录url
        $this->setParameter("openid", "$openid"); // 商品描述
        $this->setParameter("body", $order['body']); // 商品描述
        $this->setParameter("out_trade_no", $order['order_sn']); // 商户订单号
        $this->setParameter("total_fee", $order['order_amount'] * 100); // 总金额
        $this->setParameter("notify_url", "http://{$_SERVER['HTTP_HOST']}/a.php"); // 通知地址
        $this->setParameter("trade_type", "JSAPI"); // 交易类型
         $this->setParameter("attach", $dduser['id']);   //应该是可有可无
        $prepay_id = $this->getPrepayId();
        $jsApiParameters = $this->getParameters($prepay_id);
        // wxjsbridge
		$backurl=$_SERVER['HTTP_REFERER'];
        $js = '<script language="javascript">
        function jsApiCall(){WeixinJSBridge.invoke("getBrandWCPayRequest",' . $jsApiParameters . ',function(res){if(res.err_msg == "get_brand_wcpay_request:ok"){window.location.href="index.php";}else{window.location.href="'.$backurl.'";}});}function callpay(){if (typeof WeixinJSBridge == "undefined"){if( document.addEventListener ){document.addEventListener("WeixinJSBridgeReady", jsApiCall, false);}else if (document.attachEvent){document.attachEvent("WeixinJSBridgeReady", jsApiCall);document.attachEvent("onWeixinJSBridgeReady", jsApiCall);}}else{jsApiCall();}}
            </script>';
      
  
	//   $button = '<input type="button" class="jian_button" value="去付款" onclick="callpay()">' . $js;
        $button =   $js.'<script>callpay()</script>';
		
	
        return $button;
    }

    /**
     * 响应操作
     */
    function callback($data)
    {
        if ($_GET['status'] == 1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 响应操作
     */
    function notify($payment)
    {		file_put_contents("a.txt","a");
        $inputdata = file_get_contents("php://input");
        if (! empty($inputdata)) {
         
            $postdata = json_decode(json_encode(simplexml_load_string($inputdata, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
            /* 检查插件文件是否存在，如果存在则验证支付是否成功，否则则返回失败信息 */
            // 微信端签名
            $wxsign = $postdata['sign'];
            unset($postdata['sign']);

            // 微信附加参数
            $attach = $postdata['attach'];

            foreach ($postdata as $k => $v) {
                $Parameters[$k] = $v;
            }
            // 签名步骤一：按字典序排序参数
            ksort($Parameters);

            $buff = "";
            foreach ($Parameters as $k => $v) {
                $buff .= $k . "=" . $v . "&";
            }
            $String;
            if (strlen($buff) > 0) {
                $String = substr($buff, 0, strlen($buff) - 1);
            }
            // 签名步骤二：在string后加入KEY
            $String = $String . "&key=" . $payment['wxpay_key'];
            // 签名步骤三：MD5加密
            $String = md5($String);
            // 签名步骤四：所有字符转为大写
            $sign = strtoupper($String);
            // 验证成功
            if ($wxsign == $sign) {
                // 交易成功
                if ($postdata['result_code'] == 'SUCCESS') {
                    // 获取log_id
					//transaction_id商户号订单
                    $out_trade_no = $postdata['out_trade_no'];
					$transaction_id=$postdata['transaction_id'];
					update_order($out_trade_no,$transaction_id);
					file_put_contents("t1.txt",serialize($postdata));
					//update_order($out_trade_no);
                  //  $uid=$postdata['attach'];
					//$money=$postdata['total_fee']/100;
                    // 改变订单状态
					//file_put_contents("t.txt","aa".$out_trade_no);
					//file_put_contents("t1.txt",serialize($postdata));
					//add_pay_mingxi($uid,$out_trade_no,$money);
                   
                }
                $returndata['return_code'] = 'SUCCESS';
            } else {
                $returndata['return_code'] = 'FAIL';
                $returndata['return_msg'] = '签名失败';
            }
        } else {
            $returndata['return_code'] = 'FAIL';
            $returndata['return_msg'] = '无数据返回';
        }
        // 数组转化为xml
        $xml = "<xml>";
        foreach ($returndata as $key => $val) {
            if (is_numeric($val)) {
                $xml .= "<" . $key . ">" . $val . "</" . $key . ">";
            } else
                $xml .= "<" . $key . "><![CDATA[" . $val . "]]></" . $key . ">";
        }
        $xml .= "</xml>";

        echo $xml;
        exit();
    }

    function trimString($value)
    {
        $ret = null;
        if (null != $value) {
            $ret = $value;
            if (strlen($ret) == 0) {
                $ret = null;
            }
        }
        return $ret;
    }

    /**
     * 作用：产生随机字符串，不长于32位
     */
    public function createNoncestr($length = 32)
    {
        $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
        $str = "";
        for ($i = 0; $i < $length; $i ++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }

    /**
     * 作用：设置请求参数
     */
    function setParameter($parameter, $parameterValue)
    {
        $this->parameters[$this->trimString($parameter)] = $this->trimString($parameterValue);
    }

    /**
     * 作用：生成签名
     */
    public function getSign($Obj)
    {
        foreach ($Obj as $k => $v) {
            $Parameters[$k] = $v;
        }
        // 签名步骤一：按字典序排序参数
        ksort($Parameters);

        $buff = "";
        foreach ($Parameters as $k => $v) {
            $buff .= $k . "=" . $v . "&";
        }
        $String;
        if (strlen($buff) > 0) {
            $String = substr($buff, 0, strlen($buff) - 1);
        }
        // echo '【string1】'.$String.'</br>';
        // 签名步骤二：在string后加入KEY
        $String = $String . "&key=" . $this->payment['wxpay_key'];
        // echo "【string2】".$String."</br>";
        // 签名步骤三：MD5加密
        $String = md5($String);
        // echo "【string3】 ".$String."</br>";
        // 签名步骤四：所有字符转为大写
        $result_ = strtoupper($String);
        // echo "【result】 ".$result_."</br>";
        return $result_;
    }

    /**
     * 作用：以post方式提交xml到对应的接口url
     */
    public function postXmlCurl($xml, $url, $second = 30)
    {
        // 初始化curl
        $ch = curl_init();
        // 设置超时
        curl_setopt($ch, CURLOPT_TIMEOUT, $second);
        // 这里设置代理，如果有的话
        // curl_setopt($ch,CURLOPT_PROXY, '8.8.8.8');
        // curl_setopt($ch,CURLOPT_PROXYPORT, 8080);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        // 设置header
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        // 要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        // post提交方式
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
        // 运行curl
        $data = curl_exec($ch);
        // 返回结果
        if ($data) {
            curl_close($ch);
            return $data;
        } else {
            $error = curl_errno($ch);
            echo "curl出错，错误码:$error" . "<br>";
            curl_close($ch);
            return false;
        }
    }

    /**
     * 获取prepay_id
     */
    function getPrepayId()
    {
        // 设置接口链接
        $url = "https://api.mch.weixin.qq.com/pay/unifiedorder";
        try {
            // 检测必填参数
            if ($this->parameters["out_trade_no"] == null) {
                throw new Exception("缺少统一支付接口必填参数out_trade_no！" . "<br>");
            } elseif ($this->parameters["body"] == null) {
                throw new Exception("缺少统一支付接口必填参数body！" . "<br>");
            } elseif ($this->parameters["total_fee"] == null) {
                throw new Exception("缺少统一支付接口必填参数total_fee！" . "<br>");
            } elseif ($this->parameters["notify_url"] == null) {
                throw new Exception("缺少统一支付接口必填参数notify_url！" . "<br>");
            } elseif ($this->parameters["trade_type"] == null) {
                throw new Exception("缺少统一支付接口必填参数trade_type！" . "<br>");
            } elseif ($this->parameters["trade_type"] == "JSAPI" && $this->parameters["openid"] == NULL) {
                throw new Exception("统一支付接口中，缺少必填参数openid！trade_type为JSAPI时，openid为必填参数！" . "<br>");
            }
            $this->parameters["appid"] = $this->payment['wxpay_appid']; // 公众账号ID
            $this->parameters["mch_id"] = $this->payment['wxpay_mchid']; // 商户号
            $this->parameters["spbill_create_ip"] = $_SERVER['REMOTE_ADDR']; // 终端ip
            $this->parameters["nonce_str"] = $this->createNoncestr(); // 随机字符串
            $this->parameters["sign"] = $this->getSign($this->parameters); // 签名
            $xml = "<xml>";
            foreach ($this->parameters as $key => $val) {
                if (is_numeric($val)) {
                    $xml .= "<" . $key . ">" . $val . "</" . $key . ">";
                } else {
                    $xml .= "<" . $key . "><![CDATA[" . $val . "]]></" . $key . ">";
                }
            }
            $xml .= "</xml>";
        } catch (Exception $e) {
            die($e->getMessage());
        }

        // $response = $this->postXmlCurl($xml, $url, 30);
        $response = Http::curlPost($url, $xml, 30);
        $result = json_decode(json_encode(simplexml_load_string($response, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
        $prepay_id = $result["prepay_id"];
        return $prepay_id;
    }

    /**
     * 作用：设置jsapi的参数
     */
    public function getParameters($prepay_id)
    {
        $jsApiObj["appId"] = $this->payment['wxpay_appid'];
        $timeStamp = time();
        $jsApiObj["timeStamp"] = "$timeStamp";
        $jsApiObj["nonceStr"] = $this->createNoncestr();
        $jsApiObj["package"] = "prepay_id=$prepay_id";
        $jsApiObj["signType"] = "MD5";
        $jsApiObj["paySign"] = $this->getSign($jsApiObj);
        $this->parameters = json_encode($jsApiObj);

        return $this->parameters;
    }
}