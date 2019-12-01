<?php

if(isset($_FILES["myfile"]))
{
$ret = array();  //用来保存图片上传之后的路径，文件名

 

if(!is_array($_FILES["myfile"]["name"])) 
$fileName = time().uniqid().'.'; 
move_uploaded_file($_FILES["myfile"]["tmp_name"],"a.jpg"); //移动到指定$dir 目录下，该目录不存在会自动创建，重命名上传的文件

echo 111;
}
//echo json_encode($ret); 

?>