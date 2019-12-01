<?php
$weobj2 = new WechatAction();
if($_GET['a'] == 'index'){
    $weobj2->index();
}

if($_GET['a'] == 'createmenu'){
    $weobj2->createMenu();
}

class WechatAction {
    public function init() {
    require 'Wechat.class.php';

    
    $options = array (
        'token' => 'jialiheng', // 填写你设定的key
        'encodingaeskey' => 'azS1Qj6DlTCl1KpVbzkcEQRkUHSPh5ylyQr3KroRJdu', // 填写加密用的EncodingAESKey
        'appid' => 'wx9d8ad1568751b636', // 填写高级调用功能的app id
        'appsecret' => '51a1a34e1e67d929692e5882cce6e751' // 填写高级调用功能的密钥
//         'partnerid' => '', // 财付通商户身份标识
//         'partnerkey' => '', // 财付通商户权限密钥Key
//         'paysignkey' => ''  // 商户签名密钥Key
    );
        $weObj = new Wechat ( $options );
        return $weObj;
    }
    public function index() {
        $weObj = $this->init ();
        $weObj->valid ();
        $type = $weObj->getRev ()->getRevType ();
        include dirname(__FILE__).'/button_config.php';
        //---------------------------//
        define('IN_PHPMYWIND', true);
        require_once(dirname(dirname(__FILE__)).'/include/conn.inc.php');
        $conn=mysql_connect($db_host,$db_user,$db_pwd) or die("无法连接数据库".mysql_error());
        mysql_select_db($db_name,$conn) or die("无法连接数据库".mysql_error());
        mysql_query("set names '$db_charset'");
        $openid = $weObj->getRevFrom();//openid

        //---------------------------//

        switch ($type) {
            case Wechat::MSGTYPE_TEXT :

                
                
                
                
                $weObj->text ( "help2 info" )->reply ();
                break;
            case Wechat::MSGTYPE_EVENT :
                $eventype = $weObj->getRev ()->getRevEvent ();
                if ($eventype ['event'] == "CLICK") {
                    if( $eventype ['key']=='GET_PIC'){
                        $query = mysql_query("SELECT * FROM `jlh_member` WHERE openid='$openid'");
                        $usersresult = mysql_fetch_array($query);
                                       
                        
                        
                        if($usersresult['member'] == 1){
                            $image = realpath(dirname(dirname(__FILE__)).'/').'/imgpublic/user_'.$usersresult['id'].'.jpg';
                             
                            $data['media'] = "@$image";
                            $res = $weObj->uploadMedia($data, 'image');
                            
                            $weObj->getRev ()->image ( $res['media_id'] )->reply ();
                        }else{
							$text = '对不起，您还不是分销商，不能为您生成推广二维码，请<a href="index.php">立即购买</a>注册成为分销商，开始赚钱！';
							$weObj->text ( $text )->reply ();
						}

                        
                        
                        exit ();
                    }else{
                
                    }
                }elseif ($eventype['event'] == "subscribe") {

                    //查询是否有openid

                    $query = mysql_query("SELECT * FROM `jlh_member` WHERE openid='$openid'");
                    $result = mysql_fetch_array($query);
                    $user = array();
                    
                    //获取用户信息 返回json格式数据
                    $info = $weObj->getUserInfo($openid);
                    
                    $wx_info = json_decode($info,true);
                    //变性别
                    if ($wx_info['sex'] == 1) {
                        $sex = 0;
                    } else {
                        $sex = 1;
                    }
					
                    	
                    
                    if(empty($result['openid'])) {
                        
                        if(!empty($eventype['key']) && empty($result['l_id']) && empty($result['member'])) {
                            $a = explode('_', $eventype['key']);
                            $id = $a['1'];
                            //二级会员
                           
	

                            //新增一个用户(有上线)
                            $regtime  = time();
                            mysql_query("INSERT INTO `jlh_member` (
                            username,password,question,answer,cnname,enname,
                            avatar,sex,birthtype,cardnum,intro,email,qqnum,
                            mobile,telephone,address,zipcode,enteruser,expval,
                            integral,regtime,openid,wx_info,l_id,yongjin
                            )
                            VALUES
                            (
                            '','','','','','','',$sex,1,'','','','','','','','','',0,0,'$regtime','$openid','$info','$id',0)");
                        } else {
                            //新增一个用户
                            $regtime  = time();
                            mysql_query("INSERT INTO `jlh_member` (
                            username,password,question,answer,cnname,enname,
                            avatar,sex,birthtype,cardnum,intro,email,qqnum,
                            mobile,telephone,address,zipcode,enteruser,expval,
                            integral,regtime,openid,wx_info,yongjin
                            )
                            VALUES
                            (
                            '','','','','','','',$sex,1,'','','','','','','','','',0,0,'$regtime','$openid','$info',0)");
                        } 
                    }
                    
                    $query = mysql_query("SELECT * FROM `jlh_member` WHERE openid='$openid'");
                    $result1 = mysql_fetch_array($query);
					
					
					
					//二级
					
				   $query = mysql_query("SELECT * FROM `jlh_member` WHERE id='".$result1['l_id']."'");
                   $result2 = mysql_fetch_array($query);
				   
				  
				   
					
					if(!empty($result2['id'])){
						$lid=$result1['l_id'];
						//获取用户信息 返回json格式数据
						$info2 = $weObj->getUserInfo($result2['openid']);
						$wx_info2 = json_decode($info2,true);
						
						
						$query = mysql_query("SELECT openid FROM `jlh_member` WHERE id='".$lid."'");//id=15373
						$openid_l_id = mysql_fetch_array($query);
						$data = array();
						$data['touser'] = $openid_l_id['openid'];
						$data['msgtype'] = 'text';
						$data['text']['content'] = '【'.$wx_info['nickname'].'】通过二维码关注了本公众号，成为您的'.$message_name.'一级家族成员！';
						$weObj->sendCustomMessage($data);
						
						
					}else{
						$lid='-1';
					}
					
					$query = mysql_query("SELECT * FROM `jlh_member` WHERE id='".$result2['l_id']."'");
                    $result3 = mysql_fetch_array($query);
					if(!empty($result3['id'])){
						$lb=$result2['l_id'];
						
						$query = mysql_query("SELECT openid FROM `jlh_member` WHERE id='".$lb."'");//id=15373
						$openid_l_b = mysql_fetch_array($query);
						$data = array();
						$data['touser'] = $openid_l_b['openid'];
						$data['msgtype'] = 'text';
						$data['text']['content'] = '【'.$wx_info['nickname'].'】通过二维码关注了本公众号，成为您的'.$message_name.'二级家族成员！';
						$weObj->sendCustomMessage($data);
						
						
						
					}else{
						$lc='-1';
					}
					
					$query = mysql_query("SELECT * FROM `jlh_member` WHERE id='".$result3['l_id']."'");
              $result4 = mysql_fetch_array($query);
					if(!empty($result4['id'])){
						$lc=$result3['l_id'];
						
						$query = mysql_query("SELECT openid FROM `jlh_member` WHERE id='".$lc."'");//id=15373
						$openid_l_c = mysql_fetch_array($query);
						$data = array();
						$data['touser'] = $openid_l_c['openid'];
						$data['msgtype'] = 'text';
						$data['text']['content'] = '【'.$wx_info['nickname'].'】通过二维码关注了本公众号，成为您的'.$message_name.'三级家族成员！';
						$weObj->sendCustomMessage($data);
						
						
					}else{
						$lc='-1';
					}
					
					//mysql_query("update `jlh_member` set l_b='$lb',l_c='$lc' where  openid='$openid'");

                   	mysql_query("UPDATE `jlh_member` SET l_id='$lid', l_b='$lb',l_c='$lc' WHERE id='".$result1['id']."'");
					 
                   if(empty($result1['l_id']) && !empty($result1['member'])) {
                        $text = '恭喜您您由【'.$wx_info2['nickname'].'】推荐成为'.$message_name.'的第'.$result1['id'].'位会员！2015年'.$message_name.'引领你开启“赚钱新模式”，请直接<a href="http://'.$_SERVER['HTTP_HOST'].'">点击购买</a>成为族长，一部手机，一台电脑开启您的创业之旅，让您轻轻松松赚钱!!!';
                    } else {
                        if(!empty($result1["l_id"])){
                            $text = '恭喜您您由【'.$wx_info2['nickname'].'】推荐成为'.$message_name.'的第'.$result1['id'].'位会员！2015年'.$message_name.'引领你开启“赚钱新模式”，请直接请直接<a href="http://'.$_SERVER['HTTP_HOST'].'">点击购买</a>成为族长，一部手机，一台电脑开启您的创业之旅，让您轻轻松松赚钱!!!';
                        } else {
                            $text = '您好：欢迎您【'.$wx_info['nickname'].'】加入她他购物大家庭。
							
全新的移动互联，分销平台系统！通过手机，轻松创业，“钱”途无量！引领您开启创业之旅!
						
点下方【商城首页】>>【商城登录】>>购买商品即可成为分销商，她他购物期待你们的加入，We are "伐木累"!!!';

                        }
                   } 
								

				
                    $weObj->text ( $text )->reply ();
                }
                exit ();
                break;
            default :
                $weObj->text ( "help info" )->reply ();
        }
    }
    
    public function createMenu() {
        include dirname(__FILE__).'/button_config.php';
        $weObj = $this->init ();
        $weObj->createMenu ( $newmenu );
        
        echo '<script type="text/javascript">alert("菜单创建成功");history.go(-1);</script>';
     //    $this->success ( "重新创建菜单成功!" );
    }
}










?>