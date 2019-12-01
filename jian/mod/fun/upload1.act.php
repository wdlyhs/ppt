<?php
/**
 * ============================================================================
 * 版权所有 多多科技，保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/

if(!defined('ADMIN')){
	exit('Access Denied');
}

if($_GET['sid']) session_id($_GET['sid']);
if(isset($_GET['do'])) $do=$_GET['do'];
if(isset($_GET['type'])){
	$type=$_GET['type'];
}
else{
	$type='img';
}
$uploadtext = $_GET['uploadtext'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" type="text/javascript" src="../js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="../js/fun.js"></script>
<?php

$uploadtext = $_GET['uploadtext'];
if ($_GET['upload_ret']){
	  $ret = base64_decode($_GET['upload_ret']);
	  $cbody = json_decode($ret, true);	
			
	$dn = 'http://puiqcbvil.bkt.clouddn.com/';  
	$file_name = $dn . $cbody['fname'];
	
?>
		<script language="javascript" type="text/javascript">
		$(window.opener.document).find("#<?=$uploadtext?>").val('<?=$file_name?>');
		if(window.opener.uploadCall){
			window.opener.uploadCall("<?=$uploadtext?>","<?=$file_name?>");
		}
		window.close();
        </script>
<? }?>
<script type="text/javascript">
<!--
function doCheck() 
{
	if(upload.<?=$uploadtext?>.value == '') {
		alert('请选择文件!');
		return false;
	}
	return true;
}

function setpicWH(ImgD,w,h)
{
	var image=new Image();
	image.src=ImgD.src;
	if(image.width>0 && image.height>0)
	{
		flag=true;
		if(image.width/image.height>= w/h)
		{
			if(image.width>w)
			{
				ImgD.width=w;
				ImgD.height=(image.height*w)/image.width;
				ImgD.style.display="block";
			}else{
				ImgD.width=image.width;
				ImgD.height=image.height;
				ImgD.style.display="block";
			}
		}else{
			if(image.height>h)
			{
				ImgD.height=h;
				ImgD.width=(image.width*h)/image.height;
				ImgD.style.display="block";
			}else{
				ImgD.width=image.width;
				ImgD.height=image.height;
				ImgD.style.display="block";
			}
		}
	}
}
//-->
</script>

 <script type="application/javascript">
            function xmlhttp() {
                var $xmlhttp;
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    $xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    $xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                return $xmlhttp;
            }
            window.onload = function() {
                $xmlhttp = xmlhttp();
                $xmlhttp.onreadystatechange = function() {
                    if ($xmlhttp.readyState == 4) {
                        if($xmlhttp.status == 200){
                            document.getElementById('id_token').value = $xmlhttp.responseText;
                        } else {
                            alert('get uptoken other than 200 code was returned')
                        }
                    }
                }
               
                $upTokenUrl = '../q/uptoken.php';
                $xmlhttp.open('GET', $upTokenUrl, true);
                $xmlhttp.send(); 
                $bucketDomain = 'http://puio3qfh1.bkt.clouddn.com';
                $file = document.getElementById('id_file');
                $file.onchange = function(){
                    $key = $file.value.split(/(\\|\/)/g).pop(); 
                    document.getElementById('id_key').value = $key;
                    
                    $url = document.getElementById('id_url')
                    $url.href = $url.text = $bucketDomain + '/' + $key;
                };
            }; 
        </script>
<style type="text/css">
<!--
body { margin:0px; padding:0px; text-align:center; width:100%}
img { border:#FF9900 1px solid}
-->
</style>
</head>
<body>
<div style=" width:430px; height:auto; background:#CCCCCC; border:#999999 4px solid; margin:auto; margin-top:30px; padding-top:10px">
<form action="http://up.qiniu.com" method="post" enctype="multipart/form-data"  onSubmit="return doCheck();">  

<div style="text-align:center">视频上传</div>
<table style="width:200px; margin:0px auto">
                <tr style="display:none">
                    <td>Upload Token(<a href="">生成Token的代码</a>):</td>
                    <td><input id="id_token" name="token" type="text" /></td>
                </tr>
                  <tr style="display:none">
                    <td>上传文件名:</td>
                    <td><input id="id_key" name="key" type="text" /></td>
                </tr>
                <tr style="display:none">
                    <td>上传后文件外链(<a href="http://developer.qiniu.com/docs/v6/api/overview/dn/security.html">外链规则</a>):</td>
                    <td><a id="id_url" href=""/></a></td>
                </tr>
                <tr>
                    
                    <td colspan="2"  style="text-align:center"><input id="id_file" name="file" type="file" /></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center"><input type="submit" value="上传"/></td>
                </tr>
            </table>
</form>
</div>
</body>
</html>