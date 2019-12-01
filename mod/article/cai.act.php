<?

 

for ($i=1; $i>0; $i--) {

$url="http://840247.72116.30la.com.cn/product.asp?classid=694";
$html_content=file_get_contents($url);
  $html_content=iconv('GB2312', 'UTF-8', $html_content); //将字符串的编码从GB2312转到UTF-8 
 $html_content = str_replace(array("\r\n", "\r", "\n"), "", $html_content);     //去回车换行 

preg_match_all('/<div style="float:left; width:200px; height:166px; text-align:center; padding:10px 15px 10px 25px;">([\s\S]*?)<\/div>/',$html_content,$m);
								

$rows=$m[1];

$data=array();
$cid=615;

foreach  (array_reverse($rows) as $row){
	      $data=array();
		  
	      preg_match('/<a href="([\s\S]*?)">/',$row,$m);
	     $url="http://840247.72116.30la.com.cn/".$m[1];

         $html_content=file_get_contents($url);
	     $html_content=iconv('GB2312', 'UTF-8', $html_content); //将字符串的编码从GB2312转到UTF-8 
		 
	
         $html_content = str_replace(array("\r\n", "\r", "\n"), "", $html_content);     //去回车换行 
	   
		 preg_match('/<span style="color: #CC0000">([\s\S]*?)<\/span>/',$html_content,$m);
		 $m[1] = str_replace(array(" "), "",$m[1]);     //去回车换行 
	     $data['title']=$m[1];
		
		
	     $data['addtime']=time();

		 preg_match('/<td height="136"><a href="([\s\S]*?)">/',$html_content,$m);
     
		  $img_url="http://840247.72116.30la.com.cn/".$m[1];
		 
		  $data['img']=set_img($img_url);
	
		jian_thumb(DDROOT.$data['img'],565,424);  //图片缩放
	
		$data['tj']=1;
		$data['cid']=$cid;
      
        $id=$duoduo->insert("article",$data);
		if ($id)
	        echo "添加成功".$data['title']."<br>";
	   echo str_repeat(' ' ,1000);
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
		
function jian_thumb($filename,$width=100,$height=100){

        //获取原图像$filename的宽度$width_orig和高度$height_orig

        list($width_orig,$height_orig) = getimagesize($filename);

        //根据参数$width和$height值，换算出等比例缩放的高度和宽度

       // if ($width && ($width_orig<$height_orig)){
//
//            $width = ($height/$height_orig)*$width_orig;
//
//        }else{
//
//            $height = ($width / $width_orig)*$height_orig;
//
//        }



        //将原图缩放到这个新创建的图片资源中

        $image_p = imagecreatetruecolor($width, $height);

        //获取原图的图像资源

        $image = imagecreatefromjpeg($filename);

 

        //使用imagecopyresampled()函数进行缩放设置

        imagecopyresampled($image_p,$image,0,0,0,0,$width,$height,$width_orig,$height_orig);

 

        //将缩放后的图片$image_p保存，100(质量最佳，文件最大)

        imagejpeg($image_p,$filename);

 

        imagedestroy($image_p);

        imagedestroy($image);

    }
?>