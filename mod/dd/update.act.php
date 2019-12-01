<?
$status_arr=status();
$id=$_POST['id'];
$status=$duoduo->select("dd","status","id=$id");
if ($status==1)
    $data['status']=2;
if ($status==2)
    $data['status']=3;
if ($status==3)
    $data['status']=2;
$data['uid']=$dduser['id'];
$data['stime']=time();
$aid=$duoduo->update("dd",$data,"id=$id");
if ($aid>0)
   echo $status_arr[$data['status']];
?>