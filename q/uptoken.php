<?php

require_once  'vendor/autoload.php';
header('Access-Control-Allow-Origin:*');
use Qiniu\Auth;
$bucket = 'dong';
$accessKey = 'X81PYgi-8fiXLsJmvj3SfgTQ51O-XiKWHrdZUQ52';
$secretKey = 'eI4nNjRtEAh6zTT3v6YSLZHwbFXULvS2Ad2-MSyt';
$auth = new Auth($accessKey, $secretKey);
//$upToken = $auth->uploadToken($bucket);
$policy = array(
     
    'returnUrl' => $_SERVER['HTTP_REFERER'],
    'returnBody' => '{"fname": "$(fname)"}',
);
$upToken = $auth->uploadToken($bucket, null, 3600, $policy);
echo $upToken;