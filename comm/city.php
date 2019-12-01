<?

$citys=$duoduo->select_all("group","*","pid=0 order by sort desc,id desc");

?>
<script>
city=Array();
<?
foreach ($citys as $row){ 

        $ztypes=$duoduo->select_all("group","*","pid=".$row['id']." order by sort desc,id desc");
		if (ACT=="list" or ACT=="index")
		    $str="<option value='0'>全部</option>";
		else
	    $str="";
	
	 foreach ($ztypes as $row1){
		 $id=$row1['id'];
		 $title=$row1['title'];
		
		 $str.="<option value='$id'>$title</option>";
		 } 
?>
city[<?=$row['id']?>]="<?=$str?>";

<? }?>


</script>






<?

$areas=get_types($duoduo,631);

?>
<script>
areas=Array();
<?
foreach ($areas as $row){ 

        $ztypes=get_types($duoduo,$row['id']);
		
	        $str="";
	 
	 foreach ($ztypes as $row1){
		 $id=$row1['id'];
		 $title=$row1['title'];
		
		 $str.="<option value='$id'>$title</option>";
		 } 
		
?>
areas[<?=$row['id']?>]="<?=$str?>";

<? }?>


</script>







<?
$user_arr=unserialize($dduser['group']);
$ps=get_types($duoduo,603);

?>
<script>
ps=Array();
<?
foreach ($ps as $row){ 

        $ztypes=$duoduo->select_all("product","id,title,`group`","bu=".$row['id']);
		
	        if (ACT=="list")
		    $str="<option value='0'>全部</option>";
		else
	    $str="";
	 
	 foreach ($ztypes as $row1){
		 $id=$row1['id'];
		 $title=$row1['title'];
		 if ($dduser['id']>0){
		  $temp_arr=unserialize($row1['group']);
				 //判断产品分组与会员组是否有交集
				 $array_intersect = array_intersect($user_arr,$temp_arr); 
				 if(count($array_intersect)==0){
					 
					continue;
					 }
		 }
		 $str.="<option value='$id'>$title</option>";
		 } 
		
?>
ps[<?=$row['id']?>]="<?=$str?>";

<? }?>


</script>