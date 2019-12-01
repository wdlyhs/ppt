<?
if (empty($_POST))
    exit();
$id=$_POST['pid'];
$mobile=$_POST['mobile'];
$stutas_arr=status();
$rows=$duoduo->select_all("dd","*","pid=$id and mobile='$mobile'");
$str="";
$wap_str="";
foreach ($rows as $row){
	  $status=$stutas_arr[$row['status']]; 
	  $remark=get_title("arr",$row['remark_id']);
	  if (empty($remark))
	      $remark="无回复内容";
	  $a='<a href="">查看 <p class="tip"><span>'.$remark.'</span></p></a>';
	   $str=$str."<tr><td>".$row['title']."</td><td>".date("Y-m-d H:i:s",$row['addtime'])."</td><td>$status</td><td>$a</td></tr>";
	 $wap_str=$wap_str.'<div class="item"><p>申请日期：'.date("Y-m-d H:i:s",$row['addtime']).'</p><p>审核结果：<span class="red">'.$status.'</span></p><p>管理员答复：'.$remark.'</p></div>';
	}
if (empty($wap_str))
   $wap_str=$webset['no_ad'];
if (empty($str))
   $str="<tr><td colspan='4'>".$webset['no_ad']."</td></tr>";
$data['status']=1;
if (is_mobile())
    $data['list']=$wap_str;
else
$data['list']=$str;


$data['activity_title']=get_title("product",$_POST['pid']);
echo json_encode($data);
?>