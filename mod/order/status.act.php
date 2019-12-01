<?
$status=$duoduo->select("order","`status`","id=".$_GET['id']);
if ($status==2)
   echo 1;
   else
   echo 0;
?>