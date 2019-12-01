<?
$from = "admin@51jfb.net";
			$to = "185238902@qq.com";
			$usepassword = "Hxj191516";
			$smtp = "smtp.exmail.qq.com";
			$type = 1;
			$title = "测试";
			$html = "adaf";
			
			echo mail_send($to, $title, $html, $from, $usepassword, $smtp,$type);
?>