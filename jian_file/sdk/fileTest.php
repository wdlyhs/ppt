<?php
header("Content-type: text/html; charset=utf-8");
    include "TopSdk.php";
    date_default_timezone_set('Asia/Shanghai'); 

     $c = new TopClient;
    $c->appkey = '23530534';
    $c->secretKey = 'a30394076fbbd773e7076a78315aca15';
   $req = new TbkItemGetRequest;
	$req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick");
	$req->setQ("包邮 2016年-2017年韩版超大台历 DIYwewew记事本台历 计划本农历日历");
	//$req->setCat("16,18");
	//$req->setItemloc("杭州");
	$req->setSort("total_sales_des");
	$req->setIsTmall("false");
	$req->setIsOverseas("false");
//	$req->setStartPrice("10");
	//$req->setEndPrice("10");
	//$req->setStartTkRate("123");
	//$req->setEndTkRate("123");
	//$req->setPlatform("1");
	//$req->setPageNo("123");
	//$req->setPageSize("20");
	$resp = $c->execute($req);
   $items=ObjectToArray($resp);
	
	print_r($items['results']['n_tbk_item']);
//print_r(json_decode($resp);


function ObjectToArray($o) {
  if(is_object($o)) $o = get_object_vars($o);
  if(is_array($o))
     foreach($o as $k=>$v) $o[$k] = ObjectToArray($v);
  return $o;
}
?>