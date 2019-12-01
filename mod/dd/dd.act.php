<?
$time=time()-10;
$id=$duoduo->select("dd","id","addtime>$time");
if ($id>0)
    echo 1;
	
?>