<?php
//decode by QQ:270656184 http://www.yunlu99.com/
function get_css_js_dir($_var_0, $_var_1)
{
	$_var_2 = '';
	foreach ($_var_0 as $_var_3) {
		$_var_2 .= $_var_3;
	}
	$_var_2 = dd_crc32($_var_2);
	if (defined('ACT')) {
		$_var_2 = ACT . '_' . $_var_2;
	}
	if (defined('MOD')) {
		$_var_2 = MOD . '_' . $_var_2;
	}
	$_var_2 = 'data/' . $_var_1 . '/' . $_var_2 . '.' . $_var_1;
	return $_var_2;
}

function css($_var_4, $_var_5 = '')
{
	if (defined('DEBUG') && DEBUG == 1) {
		foreach ($_var_4 as $_var_6 => $_var_3) {
			echo '<link rel=stylesheet type=text/css href="' . $_var_3 . '" />' . "\r\n";
		}
		return '';
	}
	$_var_7 = '';
	$_var_8 = '';
	$_var_2 = '';
	$_var_9 = '';
	if (is_array($_var_4)) {
		$_var_2 = get_css_js_dir($_var_4, 'css');
		$_var_10 = DDROOT . '/' . $_var_2;
		$_var_11 = $_var_2;
		foreach ($_var_4 as $_var_6 => $_var_3) {
			if (preg_match('/[a-z]/', $_var_6)) {
				$_var_9 .= '<link rel=stylesheet type=text/css href="' . $_var_3 . '" />' . "\r\n";
				continue;
			}
		}
		if (is_file($_var_10) && file_get_contents($_var_10) != '') {
			return $_var_9 . '<link rel=stylesheet type=text/css href="' . $_var_5 . $_var_11 . '" />' . "\r\n";
		}
		foreach ($_var_4 as $_var_6 => $_var_3) {
			if (preg_match('/[a-z]/', $_var_6)) {
				$_var_9 .= '<link rel=stylesheet type=text/css href="' . $_var_3 . '" />' . "\r\n";
				continue;
			}
			$_var_7 = file_get_contents(DDROOT . '/' . $_var_3);
			$_var_12 = dirname($_var_3) . '/';
			preg_match_all('`url\\s*\\(\\s*(["\']?(\\.\\.\\/)*[^\\)]+)`', $_var_7, $_var_13);
			foreach ($_var_13[1] as $_var_14 => $_var_15) {
				if (strpos($_var_15, 'http://') !== false || strpos($_var_15, 'https://') !== false) {
					continue;
				}
				$_var_16 = preg_replace('/"|\'/', '', $_var_15);
				preg_match_all('/\\.\\.\\//', $_var_16, $_var_17);
				$_var_18 = $_var_12;
				if ($_var_17[0]) {
					foreach ($_var_17[0] as $_var_19) {
						$_var_18 = dirname($_var_18);
					}
					if ($_var_18 == '.') {
						$_var_18 = '../../';
					} elseif ($_var_18) {
						$_var_18 = '../../' . $_var_18 . '/';
					}
				} else {
					if (substr($_var_16, 0, 1) == '/' || substr($_var_16, 0, 1) == DIRECTORY_SEPARATOR) {
						$_var_18 = "";
					} else {
						$_var_18 = '../../' . $_var_18;
					}
				}
				$_var_20 = str_replace('../', '', $_var_16);
				$_var_21 = $_var_13[0][$_var_14];
				$_var_22 = str_replace($_var_16, $_var_18 . $_var_20, $_var_21);
				$_var_7 = str_replace($_var_21, $_var_22, $_var_7);
			}
			$_var_8 .= $_var_7 . '/*' . $_var_3 . '*/';
		}
		$_var_8 = preg_replace("/[\r\n]/", '', $_var_8);
		$_var_8 = preg_replace('/[\\s]+/', ' ', $_var_8);
		dd_file_put($_var_10, $_var_8);
		return $_var_9 . '<link rel=stylesheet type=text/css href="' . $_var_5 . $_var_11 . '" />' . "\r\n";
	}
}

function js($_var_23, $_var_5 = '')
{
	if (isset($_var_23['a'])) {
		$_var_24[] = $_var_23['a'];
		unset($_var_23['a']);
		$_var_23 = array_merge($_var_24, $_var_23);
	}
	if (defined('DEBUG') && DEBUG == 1) {
		foreach ($_var_23 as $_var_6 => $_var_3) {
			echo '<script type="text/javascript" src="' . $_var_3 . '"></script>' . "\r\n";
		}
		return '';
	}
	$_var_7 = '';
	$_var_25 = '';
	$_var_2 = '';
	if (is_array($_var_23)) {
		$_var_2 = get_css_js_dir($_var_23, 'js');
		$_var_26 = DDROOT . '/' . $_var_2;
		$_var_27 = $_var_2;
		if (is_file($_var_26) && file_get_contents($_var_26) != '') {
			return '<script type="text/javascript" src="' . $_var_5 . $_var_27 . '"></script>' . "\r\n";
		}
		foreach ($_var_23 as $_var_3) {
			$_var_25 .= file_get_contents(DDROOT . '/' . $_var_3) . "\r\n/*" . $_var_3 . "*/\r\n";
		}
		dd_file_put($_var_26, $_var_25);
		return '<script type="text/javascript" src="' . $_var_5 . $_var_27 . '"></script>' . "\r\n";
	}
}

function curl_email($_var_28, $_var_29, $_var_30, $_var_31, $_var_32, $_var_33, $_var_34, $_var_7)
{
	list ($_var_35, $_var_36) = explode(' ', microtime());
	$_var_37 = curl_init();
	$_var_38[] = 'HELO localhost';
	$_var_38[] = 'AUTH LOGIN ' . base64_encode($_var_29);
	$_var_38[] = base64_encode($_var_30);
	$_var_38[] = 'MAIL FROM:<' . $_var_31 . '>';
	$_var_38[] = 'RCPT TO:<' . $_var_32 . '>';
	$_var_38[] = 'DATA';
	$_var_38[] = "MIME-Version:1.0\r\nContent-Type:text/html\r\nTo: " . $_var_32 . "\r\nFrom: " . $_var_33 . '<' . $_var_31 . ">\r\nSubject: " . $_var_34 . "\r\nDate: " . date('r') . "\r\nX-Mailer:By Redhat (PHP/5.3.8)\r\nMessage-ID: <" . date('YmdHis', $_var_36) . '.' . ($_var_35 * 1000000) . '.' . $_var_31 . ">\r\n\r\n" . $_var_7;
	$_var_38[] = "\r\n.\r\n";
	$_var_38[] = 'QUIT';
	$_var_7 = '';
	foreach ($_var_38 as $_var_3) {
		$_var_7 .= $_var_3 . "\r\n";
	}
	curl_setopt($_var_37, CURLOPT_URL, $_var_28);
	curl_setopt($_var_37, CURLOPT_PORT, 25);
	curl_setopt($_var_37, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($_var_37, CURLOPT_CONNECTTIMEOUT, 15);
	curl_setopt($_var_37, CURLOPT_CUSTOMREQUEST, $_var_7);
	$_var_39 = curl_exec($_var_37);
	curl_close($_var_37);
	return $_var_39;
}

function mail_send($_var_40, $_var_34, $_var_41, $_var_42 = '', $_var_43 = '', $_var_28 = '', $_var_1 = 0)
{
	global $webset;
	if ($_var_1 == 0 || $_var_1 == '') {
		$_var_1 = $webset['smtp']['type'];
	}
	if ($_var_1 == 2) {
		$_var_44 = 'MIME-Version: 1.0' . "\r\n";
		$_var_44 .= 'Content-type:text/html;charset=utf-8' . "\r\n";
		if ($_var_42 != '') {
			$_var_44 .= 'From: <' . $_var_42 . '>' . "\r\n";
		}
		$_var_45 = mail($_var_40, $_var_34, $_var_41, $_var_44);
		if ($_var_45 == 1) {
			$_var_46 = 1;
		} else {
			$_var_46 = 0;
		}
		return $_var_46;
	}
	$_var_42 = $_var_42 ? $_var_42 : $webset['smtp']['name'];
	$_var_43 = $_var_43 ? $_var_43 : $webset['smtp']['pwd'];
	$_var_28 = $_var_28 ? $_var_28 : $webset['smtp']['host'];
	unset($webset);
	if ($_var_42 == '' || $_var_43 == '' || $_var_28 == '') {
		return 0;
	}
	$_var_47 = WEBNICK;
	$_var_48 = $_var_42;
	if (!function_exists('fsockopen') && !function_exists('pfsockopen')) {
		if (!function_exists('curl_exec')) {
			return 'curl模块，fsockopen或者pfsockopen函数不可用，联系空间商为您开启此函数';
		}
		curl_email($_var_28, $_var_48, $_var_43, $_var_42, $_var_40, $_var_47, $_var_34, $_var_41);
		return 1;
	}
	if (!class_exists('PHPMailer')) {
		include(DDROOT . '/comm/class.phpmailer.php');
	}
	$_var_49 = new PHPMailer();
	$_var_49->CharSet = 'UTF-8';
	$_var_49->Encoding = 'base64';
	$_var_49->IsSMTP();
	$_var_49->SMTPAuth = true;
	$_var_49->Host = $_var_28;
	$_var_49->Username = $_var_48;
	$_var_49->Password = $_var_43;
	$_var_49->From = $_var_42;
	$_var_49->FromName = $_var_47;
	$_var_49->WordWrap = 50;
	$_var_49->IsHTML(true);
	$_var_49->Subject = (isset ($_var_34)) ? $_var_34 : '';
	$_var_49->MsgHTML($_var_41);
	if ($_var_40) {
		$_var_50 = explode('|', $_var_40);
		foreach ($_var_50 AS $_var_14 => $_var_51) {
			$_var_49->AddAddress($_var_51, "");
		}
	}

	if (!$_var_49->Send()) {
		$_var_46 = 0;
	} else {
		$_var_46 = 1;
	}
	$_var_52 = func_get_args();
	$_var_52['re'] = $_var_46;
	$_var_52['from'] = $_var_42;
	$_var_52['usepassword'] = $_var_43;
	$_var_52['smtp'] = $_var_28;
	$_var_52['html'] = $_var_41;
	return $_var_46;
}

function str_utf8_chinese_word_count($_var_53 = "")
{
	$_var_54 = '/[\\x{4e00}-\\x{9fff}\\x{f900}-\\x{faff}]/u';
	$_var_55 = '/[\\x{ff00}-\\x{ffef}\\x{2000}-\\x{206F}]/u';
	$_var_53 = preg_replace($_var_55, "", $_var_53);
	return preg_match_all($_var_54, $_var_53, $_var_0);
}

function str_utf8_english_count($_var_53 = "")
{
	$_var_54 = '/[\\x{4e00}-\\x{9fff}\\x{f900}-\\x{faff}]/u';
	$_var_55 = '/[\\x{ff00}-\\x{ffef}\\x{2000}-\\x{206F}]/u';
	$_var_53 = preg_replace($_var_55, "", $_var_53);
	return strlen(preg_replace($_var_54, "", $_var_53));
}

function str_utf8_mix_word_count($_var_53 = "")
{
	$_var_54 = '/[\\x{4e00}-\\x{9fff}\\x{f900}-\\x{faff}]/u';
	$_var_55 = '/[\\x{ff00}-\\x{ffef}\\x{2000}-\\x{206F}]/u';
	$_var_53 = preg_replace($_var_55, "", $_var_53);
	return str_utf8_chinese_word_count($_var_53) + strlen(preg_replace($_var_54, "", $_var_53));
}

function authcode($_var_56, $_var_57 = 'DECODE', $_var_14 = DDKEY, $_var_58 = 0)
{
	$_var_59 = 4;
	if (empty ($_var_14)) {
		$_var_14 = DDKEY;
	}
	$_var_14 = md5($_var_14);
	$_var_60 = md5(substr($_var_14, 0, 16));
	$_var_61 = md5(substr($_var_14, 16, 16));
	$_var_62 = $_var_59 ? ($_var_57 == 'DECODE' ? substr($_var_56, 0, $_var_59) : substr(md5(microtime()), -$_var_59)) : '';
	$_var_63 = $_var_60 . md5($_var_60 . $_var_62);
	$_var_64 = strlen($_var_63);
	$_var_56 = $_var_57 == 'DECODE' ? base64_decode(substr($_var_56, $_var_59)) : sprintf('%010d', $_var_58 ? $_var_58 + TIME : 0) . substr(md5($_var_56 . $_var_61), 0, 16) . $_var_56;
	$_var_65 = strlen($_var_56);
	$_var_66 = '';
	$_var_67 = range(0, 255);
	$_var_68 = array();
	for ($_var_69 = 0; $_var_69 <= 255; $_var_69++) {
		$_var_68[$_var_69] = ord($_var_63[$_var_69 % $_var_64]);
	}
	for ($_var_70 = $_var_69 = 0; $_var_69 < 256; $_var_69++) {
		$_var_70 = ($_var_70 + $_var_67[$_var_69] + $_var_68[$_var_69]) % 256;
		$_var_71 = $_var_67[$_var_69];
		$_var_67[$_var_69] = $_var_67[$_var_70];
		$_var_67[$_var_70] = $_var_71;
	}
	for ($_var_72 = $_var_70 = $_var_69 = 0; $_var_69 < $_var_65; $_var_69++) {
		$_var_72 = ($_var_72 + 1) % 256;
		$_var_70 = ($_var_70 + $_var_67[$_var_72]) % 256;
		$_var_71 = $_var_67[$_var_72];
		$_var_67[$_var_72] = $_var_67[$_var_70];
		$_var_67[$_var_70] = $_var_71;
		$_var_66 .= chr(ord($_var_56[$_var_69]) ^ ($_var_67[($_var_67[$_var_72] + $_var_67[$_var_70]) % 256]));
	}
	if ($_var_57 == 'DECODE') {
		if ((substr($_var_66, 0, 10) == 0 || substr($_var_66, 0, 10) - TIME > 0) && substr($_var_66, 10, 16) == substr(md5(substr($_var_66, 26) . $_var_61), 0, 16)) {
			return substr($_var_66, 26);
		} else {
			return '';
		}
	} else {
		return $_var_62 . str_replace('=', '', base64_encode($_var_66));
	}
}

function PutInfo($_var_73, $_var_74 = '', $_var_75 = 0)
{
	$_var_34 = '系统提示';
	$_var_76 = '';
	$_var_77 = '';
	if (is_numeric($_var_74) && $_var_74 < 0) {
		$_var_76 = 'history.go(' . $_var_74 . ');';
	} elseif ($_var_74 != '') {
		$_var_77 = '<meta http-equiv=\'refresh\' content=\'1;url=' . $_var_74 . '\' />';
	}
	if ($_var_75 == 1) {
		$_var_73 .= '<br/><a href=\'' . $_var_74 . '\'>如果浏览器没有跳转，请点击这里</a>';
	}
	$_var_78 = "<html>\n<head>\r\n\t\t<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />\r\n" . $_var_77 . "\r\n\t\t<title>" . $_var_34 . "</title>\r\n\t\t<base target='_self'/>\n\r\n\t\t<script>setTimeout(function(){" . $_var_76 . "},1000);</script>
		</head>
<body style='text-align:center'>

		<br/>
		<div style='margin:auto;width:400px;'>
		<div style='width:400px; padding-top:4px;height:24;font-size:10pt;border-left:1px solid #cccccc;border-top:1px solid #cccccc;border-right:1px solid #cccccc;background-color:#DBEEBD; text-align:center'>" . $_var_34 . "</div>
		<div style='width:400px;height:100px;font-size:10pt;border:1px solid #cccccc;background-color:#F4FAEB; text-align:center'>
		<span style='line-height:160%'><br/>" . $_var_73 . '</span></div></div>';
	echo $_var_78 . "\n</body>\n</html>";
	dd_exit();
}

function upload($_var_79, $_var_80 = '', $_var_81 = 1)
{
	if (is_uploaded_file($_FILES[$_var_79]['tmp_name'])) {
		$_var_82 = fs('pic_upload');
		$_var_82->out_file_dir = DDROOT . '/' . 'upload';
		$_var_82->upload_form_field = $_var_79;
		$_var_82->saved_upload_name = $_var_80;
		$_var_82->upload_process();
		$_var_83 = $_var_82->saved_upload_name;
	
		$_var_83 = str_replace(DDROOT . '/', '', $_var_83);
			
		if ($_var_82->error_no) {

			switch ($_var_82->error_no) {
				case 1 :
					$_var_84 = 201;
					break;
				case 2 :
				case 5 :
					$_var_84 = 202;
					break;
				case 3 :
					$_var_84 = 203;
					break;
				case 4 :
					$_var_84 = 204;
					break;
			}
			return $_var_84;
		} else {
			if (FUJIAN_FTP == 1 && $_var_81 <= 1) {
				$_var_85 = array('hostname' => FTP_IP, 'username' => FTP_USER, 'password' => FTP_PWD, 'port' => FTP_PORT, 'pasv' => FTP_PASV, 'timeout' => FTP_TIMEOUT, 'mulu' => FTP_MULU, 'url' => FTP_URL);
				$_var_86 = fs('ftp', $_var_85);
				return $_var_86->make_dir_file(DDROOT . '/' . $_var_83, $_var_81);
			} else {
				return $_var_83;
			}
		}
	}
	return 1;
}

function template_parse($_var_53)
{
	$_var_53 = strip_tags($_var_53);
	$_var_53 = trim($_var_53);
	$_var_87 = str_replace('if ', '', $_var_53);
	preg_match_all('/\\{(.*?)\\}/', $_var_87, $_var_72);
	foreach ($_var_72[1] as $_var_3) {
		if (preg_match('/[\\n\\r\\t\\s\\{\\}]+/i', $_var_3)) {
			jump(-1, '模板解析失败！');
		}
	}
	$_var_88 = '\\(|\\)|"|;|_post|_get|_request';
	if (preg_match('#' . $_var_88 . '#i', $_var_53)) {
		jump(-1, '模板解析失败！');
	}
	$_var_89 = get_defined_functions();
	$_var_89 = $_var_89['internal'];
	$_var_90 = array('date', 'time', 'sleep', 'file', 'mail', 'sort', 'end', 'next', 'key', 'min', 'max', 'ord', '_');
	foreach ($_var_89 as $_var_3) {
		if (!in_array($_var_3, $_var_90)) {
			if (strpos($_var_53, $_var_3)) {
				jump(-1, '模板解析失败！' . $_var_3);
			}
		}
	}
	$_var_72 = include(DDROOT . '/data/template_replace.php');
	$_var_53 = strtr($_var_53, $_var_72);
	$_var_53 = preg_replace('/\\{if\\s+(.+?)\\}/', '<?php if(\\1) {?>', $_var_53);
	$_var_53 = preg_replace('/\\{else\\}/', '<?php } else { ?>', $_var_53);
	$_var_53 = preg_replace('/\\{elseif\\s+(.+?)\\}/', '<?php } elseif (\\1) {?>', $_var_53);
	$_var_53 = preg_replace('/\\{\\/if\\}/', '<?php } ?>', $_var_53);
	$_var_53 = preg_replace("/\\{([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff:]*\\(([^{}]*)\\))\\}/", '<?php echo \\1;?>', $_var_53);
	$_var_53 = preg_replace("/\\{\\\$([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff:]*\\(([^{}]*)\\))\\}/", '<?php echo \\1;?>', $_var_53);
	$_var_53 = preg_replace("/\\{(\\\$[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)\\}/", '<?php echo \\1;?>', $_var_53);
	$_var_53 = preg_replace("/\\{(\\\$[a-zA-Z0-9_\\[\\]\\'\"\$\x7f-\xff]+)\\}/es", 'addquote(\'<?php echo \\1;?>\')', $_var_53);
	$_var_53 = preg_replace("/\\{([A-Z_\x7f-\xff][A-Z0-9_\x7f-\xff]*)\\}/s", '<?php echo \\1;?>', $_var_53);
	return $_var_53;
}

function getCategorySelect($_var_91 = 0, $_var_92 = 0, $_var_93 = 0,$type)
{
	global $duoduo;
	global $mod_tag;
	if (!isset($mod_tag)) {
		$mod_tag = "article";
	}
	if ($type)
	  $where=" and model_id=$type";
	 
	$_var_94 = $duoduo->select_all('type', '*', 'pid="' . $_var_92 . '" and tag="' . $mod_tag . '"'.$where.' order by sort desc');
	for ($_var_95 = 0; $_var_95 < $_var_93 * 2 - 1; $_var_95++) {
		$_var_96 .= '&nbsp;';
	}
	if ($_var_93++) $_var_96 .= '┝';
	foreach ($_var_94 as $_var_97) {
		$_var_92 = $_var_97 ['id'];
		$_var_98 = $_var_97 ['title'];
		$_var_99 = $_var_91 == $_var_92 ? 'selected' : '';
		echo '<option value="' . $_var_92 . '" ' . $_var_99 . '>' . $_var_96 . ' ' . $_var_98 . "</option>\n";
		if ($_var_92 > 0) {
			getCategorySelect($_var_91, $_var_92, $_var_93);
		}
	}
}



function getGroupSelect($_var_91 = 0, $_var_92 = 0, $_var_93 = 0)
{
	global $duoduo;
	  $where=" and `status`=1";
	 
	$_var_94 = $duoduo->select_all('group', '*', 'pid=' . $_var_92 .$where.' order by sort desc');



	for ($_var_95 = 0; $_var_95 < $_var_93 * 2 - 1; $_var_95++) {
		$_var_96 .= '&nbsp;';
	}
	if ($_var_93++) $_var_96 .= '┝';
	if ($_var_93==3){
		return false;
		}
	foreach ($_var_94 as $_var_97) {
		$_var_92 = $_var_97 ['id'];
		$_var_98 = $_var_97 ['title'];
		$_var_99 = $_var_91 == $_var_92 ? 'selected' : '';
		echo '<option value="' . $_var_92 . '" ' . $_var_99 . '>' . $_var_96 . ' ' . $_var_98 . "</option>\n";
		if ($_var_92 > 0) {
			getGroupSelect($_var_91, $_var_92, $_var_93);
		}
	}
}

function getattributeSelect($_var_91 = 0, $_var_92 = 0, $_var_93 = 0,$cid)
{
	global $duoduo;
	  $where=" and cid=$cid and input_type<>1";
	 
	$_var_94 = $duoduo->select_all('attribute', '*', 'aid=' . $_var_92 .$where.' order by sort desc');


	for ($_var_95 = 0; $_var_95 < $_var_93 * 2 - 1; $_var_95++) {
		$_var_96 .= '&nbsp;';
	}
	if ($_var_93++) $_var_96 .= '┝';
	
	foreach ($_var_94 as $_var_97) {
		$_var_92 = $_var_97 ['id'];
		$_var_98 = $_var_97 ['title'];
		$_var_99 = $_var_91 == $_var_92 ? 'selected' : '';
		echo '<option value="' . $_var_92 . '" ' . $_var_99 . '>' . $_var_96 . ' ' . $_var_98 . "</option>\n";
		if ($_var_92 > 0) {
			getattributeSelect($_var_91, $_var_92, $_var_93,$cid);
		}
	}
}



function dd_strtotime($_var_100)
{
	if ($_var_100 > '2038-01-19 11:14:07') {
		$_var_72 = explode(' ', $_var_100);
		$_var_101 = $_var_72[0];
		if (isset($_var_72[1])) {
			$_var_102 = $_var_72[1];
		} else {
			$_var_102 = '00:00:00';
		}
		$_var_103 = explode('-', $_var_101);
		$_var_104 = ceil(($_var_103[0] - 2038) / 68);
		$_var_105 = 0;
		for ($_var_69 = 1; $_var_69 < $_var_104; $_var_69++) {
			$_var_105 += 2147483647;
		}
		$_var_106 = $_var_103[0] - 2038 - ($_var_104 - 1) * 68 + 1970;
		$_var_107 = $_var_103[1];
		$_var_108 = $_var_103[2];
		$_var_103 = explode(':', $_var_102);
		$_var_109 = $_var_103[0];
		$_var_110 = $_var_103[1];
		$_var_111 = $_var_103[2];
		return 2147483647 + strtotime($_var_112 = $_var_106 . '-' . $_var_107 . '-' . $_var_108 . ' ' . $_var_109 . ':' . $_var_110 . ':' . $_var_111) + 2793600 + $_var_105;
	} else {
		$_var_113 = strtotime($_var_100);
		return $_var_113 < 0 ? 0 : $_var_113;
	}
}

function dd_date($_var_114, $_var_1 = 1)
{
	if ($_var_114 > 2147483647) {
		$_var_104 = ceil(($_var_114 - 2147483647) / 2147483647);
		$_var_105 = 0;
		for ($_var_69 = 1; $_var_69 < $_var_104; $_var_69++) {
			$_var_105 += 1;
		}
		$_var_100 = date('Y-m-d H:i:s', $_var_114 - 2147483647 - 2793600 - $_var_105 * 2147483647);
		$_var_72 = explode(' ', $_var_100);
		$_var_101 = $_var_72[0];
		$_var_102 = $_var_72[1];
		$_var_103 = explode('-', $_var_101);
		$_var_106 = $_var_103[0] - 1970 + 2038 + $_var_105 * 68;
		$_var_107 = $_var_103[1];
		$_var_108 = $_var_103[2];
		$_var_103 = explode(':', $_var_102);
		$_var_109 = $_var_103[0];
		$_var_110 = $_var_103[1];
		$_var_111 = $_var_103[2];
		if ($_var_1 == 1) {
			return $_var_106 . '-' . $_var_107 . '-' . $_var_108 . ' ' . $_var_109 . ':' . $_var_110 . ':' . $_var_111;
		} elseif ($_var_1 == 2) {
			return $_var_106 . '-' . $_var_107 . '-' . $_var_108;
		}
	} else {
		if ($_var_1 == 1) {
			$_var_113 = date('Y-m-d H:i:s', $_var_114);
			if ($_var_113 == '1970-01-01 08:00:00') {
				$_var_113 = '';
			}
		} elseif ($_var_1 == 2) {
			$_var_113 = date('Y-m-d', $_var_114);
			if ($_var_113 == '1970-01-01') {
				$_var_113 = '';
			}
		}
		return $_var_113;
	}
}

function beijing_time()
{
	$_var_115 = 'http://www.time.ac.cn/timeflash.asp?user=flash';
	$_var_116 = dd_get_xml($_var_115);
	if (is_array($_var_116)) {
		$_var_117 = $_var_116['time']['year'] . '-' . $_var_116['time']['month'] . '-' . $_var_116['time']['day'] . ' ' . $_var_116['time']['hour'] . ':' . $_var_116['time']['minite'] . ':' . $_var_116['time']['second'];
		$_var_118 = strtotime($_var_117);
	} else {
		$_var_118 = 0;
	}
	return $_var_118;
}

function get_domain($_var_74 = '')
{
	if ($_var_74 == '') {
		$_var_74 = $_SERVER['HTTP_HOST'];
	}
	if (preg_match('#^http[s]?://#', $_var_74)) {
		$_var_74 = preg_replace('#http[s]?://#', '', $_var_74);
	}
	if (preg_match('#^localhost#', $_var_74) || preg_match('/127\\.\\d+\\.\\d+\\.\\d+/', $_var_74) || preg_match('/192\\.168\\.\\d+\\.\\d+/', $_var_74) || preg_match('/172\\.16|31\\.\\d+\\.\\d+/', $_var_74)) {
		return 'localhost';
	}
	$_var_72 = explode('/', $_var_74);
	$_var_74 = $_var_72[0];
	preg_match('/^(\\d+\\.\\d+\\.\\d+\\.\\d+)/', $_var_74, $_var_72);
	if (isset($_var_72[1])) {
		return $_var_72[1];
	}
	$_var_119 = DOMAIN_PREG;
	preg_match($_var_119, $_var_74, $_var_120);
	if (count($_var_120) > 0) {
		$_var_121 = $_var_120[0];
	} else {
		$_var_122 = parse_url($_var_74);
		$_var_123 = $_var_122['host'];
		if (!strcmp(long2ip(sprintf('%u', ip2long($_var_123))), $_var_123)) {
			return $_var_123;
		} else {
			$_var_0 = explode('.', $_var_123);
			$_var_124 = count($_var_0);
			$_var_125 = array('com', 'net', 'org', '3322');
			if (in_array($_var_0[$_var_124 - 2], $_var_125)) {
				$_var_121 = $_var_0[$_var_124 - 3] . '.' . $_var_0[$_var_124 - 2] . '.' . $_var_0[$_var_124 - 1];
			} else {
				$_var_121 = $_var_0[$_var_124 - 2] . '.' . $_var_0[$_var_124 - 1];
			}
		}
	}
	if ($_var_121 == '.') {
		$_var_121 = '';
	}
	return $_var_121;
}

function get_host($_var_74 = "")
{
	if (empty($_var_74)) {
		return false;
	}
	if ($_var_74 == 'localhost' || preg_match('/127\\.\\d+\\.\\d+\\.\\d+/', $_var_74) || preg_match('/192\\.168\\.\\d+\\.\\d+/', $_var_74) || preg_match('/172\\.16|31\\.\\d+\\.\\d+/', $_var_74)) {
		return 'localhost';
	}
	if (!preg_match('/^http(s?):/is', $_var_74)) $_var_74 = 'http://' . $_var_74;
	$_var_74 = parse_url(strtolower($_var_74));
	return strtolower($_var_74['host']);
}

function iptocity($_var_126 = '')
{
	if ($_var_126 == '') {
		$_var_126 = get_client_ip();
	}
	if (preg_match('/127\\.0\\.\\d+\\.\\d+/', $_var_126) == 1) {
		return '本地';
	}
	$_var_74 = 'http://ip.taobao.com/service/getIpInfo.php?ip=' . $_var_126;
	$_var_72 = dd_get_json($_var_74);
	return str_replace('市', '', $_var_72['data']['city']);
}

function mobiletocity($_var_127)
{
	if (reg_mobile($_var_127) == 0) {
		return 0;
	}
	$_var_74 = 'http://webservice.webxml.com.cn/WebServices/MobileCodeWS.asmx/getMobileCodeInfo?mobileCode=' . $_var_127 . '&userID=';
	$_var_72 = dd_get($_var_74);
	preg_match('#<string xmlns="http://WebXml.com.cn/">\\d+：(.*)</string>#', $_var_72, $_var_103);
	return $_var_103[1];
}

function dd_crc32($_var_53)
{
	return (float)sprintf("%u\n", crc32($_var_53));
}

function StopAttack(&$_var_128 = array())
{
	if (empty($_var_128)) {
		check_attack($_GET);
		check_attack($_POST);
		if (!defined('ADMIN') && !preg_match('/^[\\/\\.\\w-]+$/', $_SERVER['PHP_SELF'])) {
			$_var_73 = '操作IP: ' . $_SERVER['REMOTE_ADDR'] . '操作时间: ' . strftime('%Y-%m-%d %H:%M:%S') . '操作页面:' . MOD . '_' . ACT . '提交方式: ' . $_SERVER['REQUEST_METHOD'];
			create_file(DDROOT . '/data/temp/attack/' . date('Y-m-d') . '.txt', $_var_73 . "\r\n" . var_export($_REQUEST, 1) . "\r\n", 1, 1);
			dd_exit('what are you doing man!');
		}
		if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != '') {
			$_var_72 = array($_SERVER['HTTP_REFERER']);
			check_attack($_var_72);
			$_SERVER['HTTP_REFERER'] = $_var_72[0];
		}
	} else {
		check_attack($_var_128);
	}
}

function check_attack(&$_var_129)
{
	$_var_130 = '\\b(alert\\(|confirm\\(|prompt\\()\\b|<[^>]*?\\b(onerror|onmousemove|onload|onclick|onmouseover)\\b[^>]*?>|^\\+\\/v(8|9)|\\b(and|or)\\b\\s*?([\\(\\)\'"\\d]+?=[\\(\\)\'"\\d]+?|[\\(\\)\'"a-zA-Z]+?=[\\(\\)\'"a-zA-Z]+?|>|<|\\s+?[\\w]+?\\s+?\\bin\\b\\s*?\\(|\\blike\\b\\s+?["\'])|\\/\\*.+?\\*\\/|<\\s*script\\b|\\bEXEC\\b|UNION.+?SELECT|UPDATE.+?SET|INSERT\\s+INTO.+?VALUES|(SELECT|DELETE).+?FROM|(CREATE|ALTER|DROP|TRUNCATE)\\s+(TABLE|DATABASE)|\\.\\./\\.\\./';
	foreach ($_var_129 as $_var_6 => $_var_3) {
		if (!defined('ADMIN') && !preg_match('/^[\\w-]+$/', $_var_6)) {
			$_var_73 = '操作IP: ' . $_SERVER['REMOTE_ADDR'] . '操作时间: ' . strftime('%Y-%m-%d %H:%M:%S') . '操作页面:' . MOD . '_' . ACT . '提交方式: ' . $_SERVER['REQUEST_METHOD'];
			create_file(DDROOT . '/data/temp/attack/' . date('Y-m-d') . '.txt', $_var_73 . "\r\n" . var_export($_REQUEST, 1) . "\r\n", 1, 1);
			dd_exit('what are you doing man!');
		}
		if (is_array($_var_3)) {
			check_attack($_var_3);
		} else {
			if (get_magic_quotes_gpc() == 0) {
				$_var_3 = addslashes($_var_3);
			}
			if (preg_match('#' . $_var_130 . '#is', $_var_3) == 1) {
				$_var_73 = '操作IP: ' . $_SERVER['REMOTE_ADDR'] . '操作时间: ' . strftime('%Y-%m-%d %H:%M:%S') . '操作页面:' . MOD . '_' . ACT . '提交方式: ' . $_SERVER['REQUEST_METHOD'];
				create_file(DDROOT . '/data/temp/attack/' . date('Y-m-d') . '.txt', $_var_73 . "\r\n" . var_export($_REQUEST, 1) . "\r\n", 1, 1);
				dd_exit('what are you doing man!');
			}
			$_var_3 = dd_htmlspecialchars($_var_3);
			$_var_129[$_var_6] = $_var_3;
		}
	}
}

function dd_htmlspecialchars($_var_53)
{
	$_var_0 = array('"' => '&quot;', '\'' => '&#039', '<' => '&lt;', '>' => '&gt;', 'u003c' => '&lt;', 'u003e' => '&gt;');
	foreach ($_var_0 as $_var_6 => $_var_3) {
		if (strpos($_var_53, $_var_6) !== false) {
			$_var_53 = str_replace($_var_6, $_var_3, $_var_53);
		}
	}
	return $_var_53;
}

function php2js_array($_var_129, $_var_98)
{
	if (empty($_var_129)) {
		return false;
	}
	$_var_131 = "\r\n";
	echo $_var_98 . '=new Array();' . $_var_131;
	foreach ($_var_129 as $_var_6 => $_var_3) {
		if (strpos($_var_3, '\'') !== false) {
			$_var_3 = str_replace('\'', '\\\'', $_var_3);
		}
		echo $_var_98 . '[\'' . $_var_6 . '\']=\'' . $_var_3 . '\';' . $_var_131;
	}
}

function php2js_object($_var_129, $_var_98)
{
	if (empty($_var_129)) {
		return false;
	}
	$_var_131 = "\r\n";
	echo $_var_98 . '=new Object();' . $_var_131;
	foreach ($_var_129 as $_var_6 => $_var_3) {
		if (strpos($_var_3, '\'') !== false) {
			$_var_3 = str_replace('\'', '\\\'', $_var_3);
		}
		echo $_var_98 . '[\'' . $_var_6 . '\']=\'' . $_var_3 . '\';' . $_var_131;
	}
}

function str2arr($_var_53, $_var_132)
{
	$_var_45 = array();
	$_var_72 = '';
	if (is_string($_var_53)) {
		$_var_0 = explode(',', $_var_53);
	} else {
		$_var_0 = $_var_53;
	}
	$_var_133 = count($_var_0);
	if ($_var_133 > $_var_132) {
		$_var_69 = 0;
		foreach ($_var_0 as $_var_3) {
			$_var_72 .= $_var_3 . ',';
			$_var_69++;
			if ($_var_69 == $_var_132) {
				$_var_72 = preg_replace('/,$/', '', $_var_72);
				$_var_45[] = $_var_72;
				$_var_72 = '';
				$_var_69 = 0;
			}
		}
		$_var_72 = preg_replace('/,$/', '', $_var_72);
		if ($_var_72 != '') {
			$_var_45[] = $_var_72;
		}
	} else {
		$_var_45[] = $_var_53;
	}
	return $_var_45;
}

function randsort($_var_134, $_var_135 = 4)
{
	$_var_136 = count($_var_134) - 1;
	$_var_137 = ceil($_var_136 / $_var_135);
	for ($_var_138 = $_var_137, $_var_139 = $_var_136; $_var_138 < $_var_136 - $_var_137; $_var_138++, $_var_139--) {
		$_var_140 = $_var_134[$_var_138];
		$_var_134[$_var_138] = $_var_134[$_var_139];
		$_var_134[$_var_139] = $_var_140;
	}
	for ($_var_138 = 0, $_var_139 = $_var_136; $_var_138 < $_var_136 - 2; $_var_138 += 2, $_var_139--) {
		$_var_140 = $_var_134[$_var_138];
		$_var_134[$_var_138] = $_var_134[$_var_139];
		$_var_134[$_var_139] = $_var_140;
	}
	return $_var_134;
}

function split_word($_var_34)
{
	if (!class_exists('SplitWord')) {
		include(DDROOT . '/comm/splitword.class.php');
	}
	$_var_141 = fs('SplitWord');
	$_var_141 = new SplitWord();
	$_var_141->SetSource($_var_34);
	$_var_141->StartAnalysis();
	$_var_72 = $_var_141->GetFinallyIndex();
	return $_var_72;
}

function rand_title($_var_34, $_var_132 = 1)
{
	$_var_72 = split_word($_var_34);
	for ($_var_69 = 0; $_var_69 < $_var_132; $_var_69++) {
		$_var_72 = randsort($_var_72);
	}
	return implode('', $_var_72);
}

function check_plugin_auth($_var_142, $_var_143)
{
	if ($_var_142 == '' || $_var_143 == '') {
		return '参数不能为空';
	}
	global $duoduo;
	$_var_144 = $duoduo->select('plugin', 'authcode', 'code="' . $_var_142 . '"');
	if ($_var_144 == '') {
		return 1;
	}
	$_var_144 = json_decode(authcode($_var_144, 'DECODE', $_var_143), 1);
	if ($_var_144 == '') {
		return 2;
	}
	$_var_145 = (int)$_var_144['endtime'];
	$_var_146 = (int)$_var_144['checktime'];
	$_var_121 = $_var_144['domain'];
	if ($_var_121 != get_domain()) {
		return 4;
	}
	if (date('Ymd') - date('Ymd', $_var_146) > 6) {
		$_var_74 = DD_YUN_URL . '/index.php?m=Api&a=one&code=' . $_var_142 . '&url=' . $_var_121;
		$_var_45 = dd_get_json($_var_74);
		if ($_var_45['s'] == '0') {
			return 3;
		} elseif ($_var_45['s'] == '-1') {
			return 5;
		} elseif ($_var_45['s'] == '-2') {
			return 100;
		} else {
			if ($_var_45['r']['authcode'] != '') {
				$_var_147 = array('authcode' => $_var_45['r']['authcode']);
				$duoduo->update('plugin', $_var_147, 'code="' . $_var_142 . '"');
			}
		}
	}
	return 100;
}

function add_plugin_test($_var_142)
{
	global $duoduo;
	$_var_144 = array('endtime' => time() + 3600 * 24 * 365, 'checktime' => time(), 'domain' => DOMAIN);
	$_var_144 = authcode(json_encode($_var_144), 'ENCODE', $_var_142);
	$_var_147 = array('code' => $_var_142, 'title' => $_var_142, 'status' => 0, 'addtime' => TIME, 'key' => $_var_142, authcode => $_var_144, 'mod' => '', 'act' => '', 'tag' => '', 'admin_set' => 0, 'endtime' => date('Y-m-d H:i:s', TIME + 3600 * 24 * 365), 'toper_name' => 'duoduo', 'toper_qq' => '111111', 'banben' => BANBEN, 'install' => 0, 'jiaocheng' => 'http://bbs.duoduo123.com', 'need_include' => 1, 'version' => 1.0);
	$_var_92 = (int)$duoduo->select('plugin', 'id', 'code="' . $_var_142 . '"');
	if ($_var_92 > 0) {
		$duoduo->update('plugin', $_var_147, 'id="' . $_var_92 . '"');
		file_put_contents(DDROOT . '/data/plugin_update.txt', 'add_plugin_test|' . $duoduo->lastsql . "\r\n", FILE_APPEND);
	} else {
		$duoduo->insert('plugin', $_var_147);
	}
	$_var_148 = mysql_error();
	if ($_var_148 == '') {
		return 1;
	} else {
		return $_var_148;
	}
}

function get_nick_url($_var_74)
{
	if (!function_exists('curl_exec')) {
		$_var_41 = file_get_contents($_var_74);
	} else {
		$_var_149 = curl_init();
		curl_setopt($_var_149, CURLOPT_URL, $_var_74);
		curl_setopt($_var_149, CURLOPT_RETURNTRANSFER, 1);
		$_var_150 = curl_exec($_var_149);
		$_var_41 = curl_redir_exec($_var_149);
	}
	return $_var_41;
}

function curl_redir_exec($_var_149, $_var_151 = "")
{
	static $_var_152 = 0;
	static $_var_153 = 20;
	if ($_var_152++ >= $_var_153) {
		$_var_152 = 0;
		return FALSE;
	}
	curl_setopt($_var_149, CURLOPT_HEADER, true);
	curl_setopt($_var_149, CURLOPT_RETURNTRANSFER, true);
	$_var_147 = curl_exec($_var_149);
	$_var_154 = $_var_147;
	list ($_var_38, $_var_147) = explode("\n\n", $_var_147, 2);
	$_var_155 = curl_getinfo($_var_149, CURLINFO_HTTP_CODE);
	if ($_var_155 == 301 || $_var_155 == 302) {
		$_var_120 = array();
		preg_match('/Location:(.*?)\\n/', $_var_38, $_var_120);
		$_var_74 = @ parse_url(trim(array_pop($_var_120)));
		if (!$_var_74) {
			$_var_152 = 0;
			return $_var_147;
		}
		$_var_156 = parse_url(curl_getinfo($_var_149, CURLINFO_EFFECTIVE_URL));
		$_var_157 = $_var_74['scheme'] . '://' . $_var_74['host'] . $_var_74['path'] . ($_var_74['query'] ? '?' . $_var_74['query'] : '');
		curl_setopt($_var_149, CURLOPT_URL, $_var_157);
		return curl_redir_exec($_var_149);
	} else {
		$_var_152 = 0;
		return $_var_154;
	}
}

function get_4_tradeid($_var_158)
{
	if (strpos($_var_158, ',') !== false) {
		$_var_159 = explode(',', $_var_158);
	} else {
		$_var_159 = array($_var_158);
	}
	foreach ($_var_159 as $_var_6 => $_var_158) {
		if (preg_match('/^\\d{14,}$/', $_var_158)) {
			$_var_159[$_var_6] = substr($_var_158, -4);
		} else {
			$_var_159[$_var_6] = 9999;
		}
	}
	return $_var_159;
}

function check_sold_out($_var_160)
{
	$_var_74 = DD_YUN_URL . '/api/index.php?m=taoapi&method=check_sold_out&iid=' . $_var_160 . '&ddurl=' . urlencode(URL) . '&ddyunkey=' . urlencode(DDYUNKEY);
	$_var_161 = DDROOT . '/data/temp/session/' . date('Ymd') . '/' . dd_crc32($_var_160) . '.txt';
	if (file_exists($_var_161)) {
		$_var_72 = file_get_contents($_var_161);
	} else {
		$_var_72 = dd_get($_var_74);
		create_file($_var_161, $_var_72);
	}
	$_var_72 = dd_json_decode($_var_72, 1);
	return $_var_72;
}

function bijia($_var_14, $_var_162 = 1, $_var_163 = 0, $_var_164 = 0, $_var_165 = '')
{
	if (DDMALL == 1) return false;
	$_var_74 = 'http://sf.manmanbuy.com/s.aspx?id=71&key=' . urlencode($_var_14) . '&PageID=' . $_var_162;
	if ($_var_164 < $_var_163) return false;
	if ($_var_163 > 0) {
		$_var_74 .= '&price1=' . $_var_163;
	}
	if ($_var_164 > 0) {
		$_var_74 .= '&price2=' . $_var_164;
	}
	if ($_var_165 != '') {
		$_var_74 .= '&orderby=' . $_var_165;
	}
	$_var_166 = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
	$_var_167 = md5($_var_74);
	$_var_168 = DDROOT . '/data/temp/bijia/' . substr($_var_167, 0, 2) . '/' . substr($_var_167, 2, 2) . '/' . $_var_167 . '.json';
	if (file_exists($_var_168)) {
		$_var_169 = file_get_contents($_var_168);
		$_var_169 = dd_json_decode($_var_169, 1);
	} else {
		if (function_exists('curl_exec')) {
			$_var_149 = curl_init();
			curl_setopt($_var_149, CURLOPT_URL, $_var_74);
			curl_setopt($_var_149, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($_var_149, CURLOPT_USERAGENT, $_var_166);
			$_var_72 = curl_exec($_var_149);
		} else {
			$_var_170 = array('http' => array('method' => 'GET', 'header' => 'User-Agent: ' . $_var_166));
			$_var_171 = stream_context_create($_var_170);
			$_var_72 = file_get_contents($_var_74, false, $_var_171);
		}
		$_var_72 = compact_html($_var_72);
		preg_match('/共有(\\d+)条记录/', $_var_72, $_var_103);
		$_var_172 = $_var_103[1];
		preg_match('/<divid="listpro"(.*)<divid="dispage"style="margin:20px8px;width:600px;/', $_var_72, $_var_41);
		preg_match_all('/<divclass="bjline">(.*?)<divclass=\'clear\'><\\/div>/', $_var_41[1], $_var_72);
		$_var_169 = array();
		foreach ($_var_72[1] as $_var_6 => $_var_3) {
			preg_match('#<ahref=".*&url=(.*)"target="_blank">.*\'"src="(.*)"class=\'sppicclass\'>.*class="f14sc">(.*)</a><spanstyle.*align=\'absmiddle\'>(.*?)</div></div><divclass=.*<fontclass=\'priceword\'>(.*)</font></div><divclass#', $_var_3, $_var_72);
			if ($_var_72[1] != '') {
				$_var_169[$_var_6]['url'] = urldecode($_var_72[1]);
				$_var_169[$_var_6]['img'] = $_var_72[2];
				$_var_169[$_var_6]['title'] = str_replace('<fontcolor="red">', '<font color="red">', $_var_72[3]);
				$_var_169[$_var_6]['mall'] = preg_replace('/\\(第三方\\)|\\(自营\\)/', '', $_var_72[4]);
				$_var_169[$_var_6]['price'] = $_var_72[5];
			}
		}
		if (!empty($_var_169)) {
			$_var_169['total'] = $_var_172;
			create_file($_var_168, dd_json_encode($_var_169));
		} else {
			$_var_169['total'] = 0;
		}
	}
	return $_var_169;
}

function get_tao_mobile_price($_var_160)
{
	$_var_74 = 'http://hws.m.taobao.com/cache/wdetail/5.0/?id=' . $_var_160 . '&ttid=2013@taobao_h5_1.0.0&exParams={}';
	$_var_72 = dd_get($_var_74, 'get', 86400);
	$_var_72 = json_decode($_var_72, 1);
	$_var_72 = json_decode($_var_72['data']['apiStack'][0]['value'], 1);
	return (float)$_var_72['data']['itemInfoModel']['priceUnits'][0]['price'];
}

