<?php
require_once 'vendor/autoload.php'; //引入加载文件 
use Qiniu\Auth;  //使用auth类
use Qiniu\Storage\UploadManager; 
$accessKey = 'v-WUlUmeLMI7bLZEV5N5kqbh8He0r3erib8VS9KY';  //秘钥
$secretKey = 'V_Lquhcs9vsoGeoGnO3YPbFuXvvDuH_k5vscx3KO';  //秘钥
$auth = new Auth($accessKey, $secretKey);  //实例化
$bucket='jiandong';//存储空间
$token = $auth->uploadToken($bucket);
$uploadMgr = new UploadManager();
$filePath = $_FILES['image']['tmp_name'];//'./php-logo.png';  //接收图片信息
print_r($_FILES);exit();
if($_FILES['image']['type']=='video/mp4'){
	$key = 'video'.time().'.mp4';  
}elseif($_FILES['image']['type']=='audio/mp3'){
	$key = 'audio'.time().'.mp3';  
}else{
	$key = 'png'.time().'.png';  
}
list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);  
if ($err !== null) {  
    echo '上传失败';
} else{
	print_r($ret['key']);
}
