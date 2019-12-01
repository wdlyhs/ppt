<?
$root= dirname(dirname(dirname(dirname(__FILE__))));

include ($root."/comm/dd.config.php");
echo DDROOT;exit();
$httpurl="https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=gQE78DwAAAAAAAAAAS5odHRwOi8vd2VpeGluLnFxLmNvbS9xLzAycUxCZUlNdkxiUWUxMDAwME0wM1YAAgToe2hYAwQAAAAA";
$filename = "2.jpg";
			$local_file = fopen($filename, 'w');
			fwrite($local_file, file_get_contents($httpurl));
			fclose($local_file);
			imagecropper($filename,250,250,2,'ticket'); 
			
			$logoname="logo.jpg";
			
	
			$imgs    = array();
			
			$imgs[0] = $logoname;
			$imgs[1] = $filename;
			
			$target  = 'card.jpg'; //背景图片
			
			$target_img = Imagecreatefromjpeg($target);
			
			$source = array();
			
			foreach ($imgs as $k => $v) {
			
				$source[$k]['source'] = Imagecreatefromjpeg($v);
			
				$source[$k]['size'] = getimagesize($v);
			
			}
			imagecopy ($target_img,$source[0]['source'],15,11,0,0,114,104);
			imagecopy ($target_img,$source[1]['source'],190,550,0,0,250,250);
			
			Imagejpeg($target_img, 'a.jpg');

function imagecropper($source_path, $target_width, $target_height, $name,$logo)
{
    $source_info   = getimagesize($source_path);
    $source_width  = $source_info[0];
    $source_height = $source_info[1];
    $source_mime   = $source_info['mime'];
    $source_ratio  = $source_height / $source_width;
    $target_ratio  = $target_height / $target_width;

    // 源图过高
    if ($source_ratio > $target_ratio)
    {
        $cropped_width  = $source_width;
        $cropped_height = $source_width * $target_ratio;
        $source_x = 0;
        $source_y = ($source_height - $cropped_height) / 2;
    }
    // 源图过宽
    elseif ($source_ratio < $target_ratio)
    {
        $cropped_width  = $source_height / $target_ratio;
        $cropped_height = $source_height;
        $source_x = ($source_width - $cropped_width) / 2;
        $source_y = 0;
    }
    // 源图适中
    else
    {
        $cropped_width  = $source_width;
        $cropped_height = $source_height;
        $source_x = 0;
        $source_y = 0;
    }

    switch ($source_mime)
    {
        case 'image/gif':
            $source_image = imagecreatefromgif($source_path);
            break;

        case 'image/jpeg':
            $source_image = imagecreatefromjpeg($source_path);
            break;

        case 'image/png':
            $source_image = imagecreatefrompng($source_path);
            break;

        default:
            return false;
            break;
    }

    $target_image  = imagecreatetruecolor($target_width, $target_height);
    $cropped_image = imagecreatetruecolor($cropped_width, $cropped_height);

    // 裁剪
    imagecopy($cropped_image, $source_image, 0, 0, $source_x, $source_y, $cropped_width, $cropped_height);
    // 缩放
    imagecopyresampled($target_image, $cropped_image, 0, 0, 0, 0, $target_width, $target_height, $cropped_width, $cropped_height);

    //     header('Content-Type: image/jpeg');
    $path = $name.'.jpg';
    imagejpeg($target_image,$path);
    imagedestroy($source_image);
    imagedestroy($target_image);
    imagedestroy($cropped_image);
}

?>

