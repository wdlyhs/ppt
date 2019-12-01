<?
$url="http://z.daivilala.com/index.php?m=Order&tpl=detail&id=4JJSHJJ4&uid=4";

$ch = curl_init(); 
//$url = "http://localhost/target_ip.php"; 
$header = array( 
'CLIENT-IP:14.100.255.255', 
'X-FORWARDED-FOR:14.100.255.255', 
); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $header); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 
$page_content = curl_exec($ch); 
curl_close($ch); 
echo $page_content; 
?>