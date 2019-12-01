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



function do_datetime($field){
	if(isset($_POST[$field])){
		if($_POST[$field]!=''){
			$_POST[$field]=dd_strtotime($_POST[$field]);
		}
		else{
			$_POST[$field]=0;
		}
	}
}

if($_POST['sub']!=''){
	
	if ($_POST['jump_url']){
		
		$jump_url=$_POST['jump_url'];
		unset($_POST['jump_url']);
		}
if (!$_GET['table'])
	jump('-1',"异常");
	$table=$_GET['table'];
	

	del_magic_quotes_gpc($_POST,1);


	$relate_id=0;
	$basedata=dd_get_cache('basedata','array');
	if(isset($_POST['sort']) && ($_POST['sort']=='' || $_POST['sort']==0)){$_POST['sort']=DEFAULT_SORT;}
	
	do_datetime('sdate');
	do_datetime('edate');
	do_datetime('sdatetime');
	do_datetime('edatetime');
	
	if(isset($_POST['array']) && $_POST['array']!=''){
		$_POST['array']=strtoarray($_POST['array']);
	    $_POST['array']=serialize($_POST['array']);
	}
	
	
	
	
	
    $id=empty($_POST['id'])?0:(int)$_POST['id'];
	unset($_POST['id']);
	unset($_POST['sub']);

	if($id==0){
		
		exit();
			 
		trim_arr($_POST);
	   
	
		
		$id=$duoduo->insert($table,$_POST);
		
		
		jump(u($table,"list"),"添加成功");
	}
	else{
		if(array_key_exists('addtime',$_POST)){
		   // unset($_POST['addtime']);
		}
		
		
		trim_arr($_POST);
			
	    if ($table=="dd"){
			  $_POST['uid']=$dduser['id'];
			  $_POST['stime']=time();
			}
		  
		$duoduo->update($table,$_POST,'id="'.$id.'"');
		
		
		jump($jump_url,"修改成功");
	}
	
	if(isset($basedata[MOD]['sort']) && $_POST['sort']>0){
		$duoduo->update_sort($id,$_POST['sort'],MOD);
	}
	
	if(mysql_error()!=''){
		echo $duoduo->lastsql;
		exit(mysql_error());
	}
	
	if(function_exists(MOD.'_'.ACT)){
		$fun=MOD.'_'.ACT;
		$fun($_POST,$id);
	}
	
	if($relate_id>0){
	    $data=array('relate_id'=>$id);
		
		$duoduo->update($relate_table,$data,'id="'.$relate_id.'"');
		jump('-4',$word.'成功');
	}
	if($jump_url!=''){
		if(strpos($jump_url,'{$id}')!==false){
			$jump_url=str_replace('{$id}',$id,$jump_url);
		}
		jump($jump_url,$word.'成功，跳转到关联页面');
	}
	else{
		include(ADMINROOT.'/mod/public/mod.update.php');
		
		if(in_array(MOD,$duoduo->sql_cache_table_arr)){
			del_ddcache('','sql/'.MOD);
		}
		if ($v==1){
			  if ($_POST['cid']>0){
				  	setcookie("jcid",$_POST['cid']);
				    
				  }
				  jump(u(MOD,ACT),$word.'成功');
				
		}else
		
		   jump("-2",$word.'成功');
		
		
	}
}
else{
	$id=empty($_GET['id'])?0:(int)$_GET['id'];
    if($id==0){
	    $row=array();
		if(isset($_GET['relateid']) && $_GET['relateid']!=''){
		    $relate_arr=explode('@',$_GET['relateid']);
			$table=$relate_arr[0];
			$id=$relate_arr[1];
			$relate_row=$duoduo->select($table,'*','id="'.$id.'"');
			if(isset($relate_row['sdate']) && $relate_row['sdate']!=''){$relate_row['sdate']=dd_date($relate_row['sdate'],2);}
			if(isset($relate_row['edate']) && $relate_row['edate']!=''){$relate_row['edate']=dd_date($relate_row['edate'],2);}
		}
	}
	else{
	    $row=$duoduo->select(MOD,'*','id="'.$id.'"');
		if(isset($row['sdate']) && $row['sdate']!=''){$row['sdate']=dd_date($row['sdate'],2);}
		if(isset($row['edate']) && $row['edate']!=''){$row['edate']=dd_date($row['edate'],2);}
		if(isset($row['sdatetime']) && $row['sdatetime']!=''){$row['sdatetime']=dd_date($row['sdatetime']);}
		if(isset($row['edatetime']) && $row['edatetime']!=''){$row['edatetime']=dd_date($row['edatetime']);}
		
		if(isset($row['array']) && $row['array']!=''){
	        $row['array']=unserialize($row['array']);
			$row['array']=implode(',',$row['array']);
	    }
	}
}
?>