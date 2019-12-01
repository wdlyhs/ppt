<?php
    include "TopSdk.php";
    date_default_timezone_set('Asia/Shanghai'); 

    $c = new TopClient;
    $c->appkey = '23530534';
    $c->secretKey = 'a30394076fbbd773e7076a78315aca15';
    // $req = new TradeVoucherUploadRequest;
    // $req->setFileName("example");
    // $req->setFileData("@/Users/xt/Downloads/1.jpg");
    // $req->setSellerNick("奥利奥官方旗舰店");
    // $req->setBuyerNick("101NufynDYcbjf2cFQDd62j8M/mjtyz6RoxQ2OL1c0e/Bc=");
    // var_dump($c->execute($req));

   $req = new WirelessShareTpwdCreateRequest;
$tpwd_param = new IsvTpwdInfo;
$tpwd_param->ext="{\"xx\":\"xx\"}";
$tpwd_param->logo="http://m.taobao.com/xxx.jpg";
$tpwd_param->text="超值活动，惊喜活动多多 https://uland.taobao.com/coupon/edetail?e=%2Fe3BQJvOkBHzX1yJ4zwwto%2FEHeFogXWEwZTkuPFbmlMtntOBOzM2H1ecV8nS7f3JRFryxS8YJD05x3ZYPRIbwR0HgBdG%2FDDL%2F1M%2FBw7Sf%2FdvV7ddWRZQT%2FdiD74XgyPMSVIfZXqjVHgSOSZs0jDB%2BJfF0%2FZo6ma9&pid=mm_40653309_14398565_61462451&af=1生成网址";
$tpwd_param->url="https://uland.taobao.com/coupon/edetail?e=Dm5SojL3uQDzX1yJ4zwwto%2FEHeFogXWEwZTkuPFbmlMtntOBOzM2H1ecV8nS7f3JlC3EYHezXVjmrvTticLGyx0HgBdG%2FDDL%2F1M%2FBw7Sf%2Fe7ffmwcxrer9uHVFlfmvy5lBRiYmj7gZbpzK9ibe3YYLxQTkpEjTqy&pid=mm_40653309_14398565_61462451&af=1";
$tpwd_param->user_id="122";
$req->setTpwdParam(json_encode($tpwd_param));
$row=$c->execute($req);
$str=$row->model;
echo $str;
//print_r(json_decode($row));
?>