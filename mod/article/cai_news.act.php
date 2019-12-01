<?

for ($i=1; $i>0; $i--) {
$url="http://www.zn-test.cn/news.asp?titleid=3";

$html_content=file_get_contents($url);
   $html_content=iconv('GB2312', 'UTF-8', $html_content); //将字符串的编码从GB2312转到UTF
 $html_content = str_replace(array("\r\n", "\r", "\n"), "", $html_content);     //去回车换行 
//echo  $html_content;exit();
preg_match_all('/<div class="yb_a1">([\s\S]*?)<\/div>/',$html_content,$m);
								

$rows=$m[1];

$data=array();
$cid=550;

foreach  (array_reverse($rows) as $row){
	      $data=array();
		  
		  //preg_match('/<img src="([\s\S]*?)"/',$row,$m);
		  //$img_url="http://www.hnsmzk.com/".$m[1];
		 //$data['img']=set_img($img_url);
		 
		  preg_match('/\[([\s\S]*?)\]/',$row,$m);

		  $data['addtime']=strtotime($m[1]);
	      preg_match('/<a href="([\s\S]*?)">/',$row,$m);
	
	     $url="http://www.zn-test.cn/".$m[1];
	     
		
         $html_content=file_get_contents($url);
	     $html_content=iconv('GB2312', 'UTF-8', $html_content); //将字符串的编码从GB2312转到UTF-8 
         $html_content = str_replace(array("\r\n", "\r", "\n"), "", $html_content);     //去回车换行 
	   
		 preg_match('/<DIV class=ya_f1><H1>([\s\S]*?)<\/H1>/',$html_content,$m);
		 $m[1] = str_replace(array(" "), "",$m[1]);     //去回车换行 
	     $data['title']=$m[1];
		
		
		
	     $data['source']=WEBNAME;
	
		 preg_match('/<DIV class=ya_f3>([\s\S]*?)<\/DIV>/',$html_content,$m);
	     $content=$m[1];
		 $img_rows=get_imgs($content);
		//图像保存到本地，暂时不需要
		// foreach ($img_rows as $r){   
//			
//			  $img_url="http://www.hnsmzk.com".$r;
//	
//			  $img_url=set_img($img_url);
//		     
//			  $r = preg_replace("/\//", "\\/", $r);
//			
//			  $content = preg_replace("/$r/", $img_url, $content); 
//	
//			 }
		 $content = preg_replace('/http:\/\/www.hnsmzk.com\/(.*)\.html/', '/', $content);  //去掉外链
		  $content = preg_replace('/http:\/\/www.hnsmzk.com\//', '/', $content);  //去掉外链
		   $content = preg_replace('/http:\/\/www.hnsmzk.com/', '/', $content);  //去掉外链
		$data['content']=$content;

		
		$data['tj']=1;
		$data['cid']=$cid;
      
        $id=$duoduo->insert("article",$data);
		if ($id)
	        echo "第".$i."页添加成功".$data['title']."<br>";

	    ob_flush();  
      flush();  
      sleep(1); 
		
		 
	} 
}
	exit();
    function get_imgs ($str){
		
		$parrent = "/(href|src)=([\"|']?)([^\"'>]+.(jpg|JPG|jpeg|JPEG|gif|GIF|png|PNG))/i";
		preg_match_all($parrent,$str,$jian_m);
		return $jian_m[3];
		}
	
	function set_img($url){
		  $ext = strrchr($url,'.');   //获取图片格式
		   $img = file_get_contents($url); 
		   
		    $img_name="cai/".getMillisecond().$ext;
			usleep(1000);
			file_put_contents($img_name,$img); 
			return "/".$img_name;
		}
	function getMillisecond() { 
list($s1, $s2) = explode(' ', microtime()); 
return (float)sprintf('%.0f', (floatval($s1) + floatval($s2)) * 1000); 
} 
	
	function jian_cur($url,$cookie,$post_fields){
		
         $ch= curl_init();
		 curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
         curl_setopt($ch, CURLOPT_URL,$url);
         curl_setopt($ch, CURLOPT_COOKIE, $cookie);
		// curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-FORWARDED-FOR:111.222.333.4', 'CLIENT-IP:111.222.333.4'));  
         curl_setopt($ch, CURLOPT_REFERER, "http://www.tiangua.com/");
         curl_setopt($ch, CURLOPT_HEADER, false);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		 $useragent="Mozilla/5.0 (Windows NT 5.1; rv:30.0) Gecko/20100101 Firefox/30.0";
         curl_setopt ($ch, CURLOPT_USERAGENT, $useragent);
         curl_exec($ch);
         $tempCn = curl_multi_getcontent($ch);
		 return $tempCn;
		}
?>