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

if(!defined('ADMIN')){
	exit('Access Denied');
}

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
	
	
	del_magic_quotes_gpc($_POST,1);

	$jump_url='';
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
	

	
	if (MOD=="dd"){
		 $_POST['shtime']=strtotime($_POST['shtime']);
		
		
		}
	if(isset($_POST['uname'])){
		if($_POST['uname']!=''){
			$_POST['uid']=(int)$duoduo->select('user','id','ddusername="'.$_POST['uname'].'"');
			if($_POST['uid']==0){
		    	jump('-1','会员不存在');
			}
		}
		unset($_POST['uname']);
	}
	
	if(isset($_POST['jump_url'])){
	    $jump_url=urldecode($_POST['jump_url']);
		unset($_POST['jump_url']);
	}
	
	if(isset($_POST['relateid'])){
	    $relate_arr=explode('@',$_POST['relateid']);
	    $relate_table=$relate_arr[0];
        $relate_id=$relate_arr[1];
		unset($_POST['relateid']);
	}
	if (MOD=="product"){
		//音频获取时间长
		
		  $_POST['addtime']=strtotime($_POST['addtime']);
		   $post=$_POST;
		  //清除AJAX生的POST值
		  foreach ($_POST as $v=>$vo){
			  
			  if (strpos("a".$v,"product_")){
				   
				   unset($_POST[$v]);
				  
				}
			  
		  }
		   
	}
    $id=empty($_POST['id'])?0:(int)$_POST['id'];
	unset($_POST['id']);
	unset($_POST['sub']);
    
	
		
		
	if($id==0){
		if((!isset($_POST['addtime']) || $_POST['addtime']=='') && array_key_exists('addtime',$basedata[MOD])){
		
			$_POST['addtime']=TIME;
		}
		$v=1;
			if (array_key_exists('addtime',$basedata[MOD]) and MOD=='article'){
				 $_POST['addtime']=strtotime($_POST['addtime']);
			}
		
		
		       
		trim_arr($_POST);
		if (MOD=="arr" or MOD=="attribute" or MOD=="aitems"){
			 $_POST['title']=str_replace("，",",",$_POST['title']);
			$title_array=explode(',',$_POST['title']);
			foreach (array_reverse($title_array) as $row){
			$_POST['title']=$row;
	
			$id=$duoduo->insert(MOD,$_POST);
			}
		}else
	
		$id=$duoduo->insert(MOD,$_POST);
		if (MOD=="product"){
			product_attr($post,$id);
		}
		$word='保存';
	}
	else{
		if(array_key_exists('addtime',$_POST)){
		  //  unset($_POST['addtime']);
		}
		if(isset($_POST['relateid']) && $relate_id==0){
		    $_POST['relate_id']=0;
		}
		
		trim_arr($_POST);
			if (array_key_exists('addtime',$basedata[MOD]) and MOD=='article'){
			
				$_POST['addtime']=strtotime($_POST['addtime']);
				}
	        
		if (MOD=="product")
		    $duoduo->delete("product_attr","pid=$id");  //清掉好更新
		$duoduo->update(MOD,$_POST,'id="'.$id.'"');
		$word='修改';
		if (MOD=="product"){
			
			product_attr($post,$id);
			
		}
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
		if ($v==1 and $_POST['cid']>0){
			
				  jump(u(MOD,ACT,array('cid'=>$_POST['cid'])),$word.'成功');
				
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