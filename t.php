<?
set_img("http://romjd.xihailuntan.com/%E5%B7%A5%E4%BD%9C%E6%80%BB%E7%BB%93%E5%95%86%E5%8A%A1%E9%A3%8E%E6%A0%BC566fm.jpg");
	function set_img($url){
		  $ext = strrchr($url,'.');   //获取图片格式

		   $img = file_get_contents($url);
	
		   $return_img_name="1".$ext;
		  
			usleep(1000);
			file_put_contents($return_img_name,$img); 
			return $return_img_name;
		}
		
		
$str='a:17:{s:5:"appid";s:18:"wx8474f98f891d27e7";s:6:"attach";s:19:"2019110605353744513";s:9:"bank_type";s:3:"CFT";s:8:"cash_fee";s:1:"1";s:8:"fee_type";s:3:"CNY";s:12:"is_subscribe";s:1:"Y";s:6:"mch_id";s:10:"1362999602";s:9:"nonce_str";s:32:"81b1eiz9agz8bz4j61ntks5691yv4nez";s:6:"openid";s:28:"o36_0jjGUJYIF4SB6fgfU36iMqNw";s:12:"out_trade_no";s:19:"2019110605353744513";s:11:"result_code";s:7:"SUCCESS";s:11:"return_code";s:7:"SUCCESS";s:4:"sign";s:32:"F2BA861E6D7214A33D804CA774FF68BF";s:8:"time_end";s:14:"20191106173639";s:9:"total_fee";s:1:"1";s:10:"trade_type";s:6:"NATIVE";s:14:"transaction_id";s:28:"4200000461201911067337654867";}';
//$row=unserialize($str);
//echo http_build_query( $row);
?>