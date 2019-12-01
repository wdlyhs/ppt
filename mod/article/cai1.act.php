<?

//for ($i=230; $i>=0; $i--) {
$url="http://www.hnsmzk.com/pro_center.aspx?page=1&type=29&proname=";
$html_content=file_get_contents($url);

preg_match_all('/<p class="show_title">
                                    <a href="([\s\S]*?)" target="_blank">/',$html_content,$m);
									



$rows=$m[1];
$data=array();
$cid=428;

foreach  (array_reverse($rows) as $row){
	     $url="http://www.hnsmzk.com/$row";
		 echo $url."<br>";
         $html_content=file_get_contents($url);
	     $html_content=iconv('GB2312', 'UTF-8', $html_content); //将字符串的编码从GB2312转到UTF-8 
         $html_content = str_replace(array("\r\n", "\r", "\n"), "", $html_content);     //去回车换行 
	
		 preg_match('/<h1 class="p_title">([\s\S]*?)<\/h1>/',$html_content,$m);
	     $data['title']=$m[1];
		 
		 preg_match('/型   号：<\/b>([\s\S]*?)<\/p>/',$html_content,$m);
	     $data['model']=$m[1];
		 preg_match('/简   介：<\/b>([\s\S]*?)<\/p>/',$html_content,$m);
	     $data['desc']=$m[1];
		 preg_match('/关键词：<\/b>([\s\S]*?)<\/p>/',$html_content,$m);
	     $data['keyword']=$m[1];
		 $data['addtime']=time();
		 preg_match('/<div class="pro_detail">	<ul>([\s\S]*?)<\/ul><\/div>/',$html_content,$m);
         $content=$m[1];
		 preg_match_all('/<img src="([\s\S]*?)"/',$content,$m);
		 $rs=$m[1];
		 
		  preg_match("/<li><a href='javascript:;'><img src='..([\s\S]*?)'/",$html_content,$m);
		   $url="http://www.hnsmzk.com".$m[1];
		   $data['img']=set_img($url);
		 
		 $str="";
		 
		foreach  (array_reverse($rs) as $k=>$r){
		
             $ext = strrchr($r,'.');   //获取图片格式
			 $url="http://www.hnsmzk.com".$r;
			  $img_name=set_img($url);
			 $str.="<li><img src='$img_name' /></li>";
			}
	
       //  $url="http://www.bangcheng168.com/news/detail/".$row['UNID'];
//		 $html_content=file_get_contents($url);
//		preg_match('/<div class="content">([\s\S]*?)<\/div>/',$html_content,$m);
		$data['content']=$str;
		
		
		
		$data['tj']=1;
		$data['cid']=$cid;
      
        $id=$duoduo->insert("article",$data);
		if ($id)
	        echo "添加成功".$data['title']."<br>";
	
	    ob_flush();  
      flush();  
      sleep(1); 
		
		 
	} 
//}
	exit();

	
	function set_img($url){
		  $ext = strrchr($url,'.');   //获取图片格式
		   $img = file_get_contents($url); 
		   
		    $img_name="cai/".getMillisecond().$ext;
			sleep(1);
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