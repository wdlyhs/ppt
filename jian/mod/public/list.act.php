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

if($_GET['public_sub']==1){
	$id=$_GET['id'];
	$table=$_GET['table'];
	$v=$_GET['v'];
	$f=$_GET['f'];
	
	if($f=='sort'){
	
		$duoduo->update_sort($id,$v,$table);
	}
	else{
		$data=array($f=>$v);
		$duoduo->update($table,$data,'id="'.$id.'"');
	}
	dd_exit(1);
}

$table_list=include(DDROOT.'/data/table_list.php');
if(isset($table_list[MOD])){
	$title=$table_list[MOD]['title'];
	$table_sort=$table_list[MOD]['sort'];
}
else{
	$title='title';
}

$page = !($_GET['page'])?'1':intval($_GET['page']);
$pagesize=20;

    
$frmnum=($page-1)*$pagesize;
$q=$_GET['q'];
$cid=(int)$_GET['cid'];
if(isset($_GET['sort'])){
    $by='sort asc,';
	$page_arr['sort']=$_GET['sort'];
}
else{
	if($table_sort!=''){
		$by=$table_sort.',';
	}
	else{
		$by='';
	}
}

if($cid>0){
    $where=' and cid="'.$cid.'"';
	$page_arr['cid']=$cid;
}
else{
    $where='';
}
$d=$duoduo->get_table_struct(MOD);
if($_GET['reycle']==1){
	$reycle=1;
	$where.=' and `del` ='.$reycle;
	$page_arr['reycle']=$reycle;
}elseif(!empty($d['del'])){
	$where.=' and `del` = "0"';
}
$page_arr['q']=$q;

 if (!empty($_GET['tj'])) { 
	  $where.=" and tj=".$_GET['tj'];
	 }
if (MOD=="dd"){
	
	 if (!empty($_GET['status'])) { 
	     $where.=" and `status`=".$_GET['status'];
	 }
	  if (!empty($_GET['uid'])) { 
	     $where.=" and `uid`=".$_GET['uid'];
	 }
	 
	   if ($_GET['i']){
		
		    $arr=dd_excel($where,1);
		    exit();
		   //导出处理
		}
	}
if (MOD=="slides" or MOD=="product" or MOD=="enroll" or MOD=="danye"){
	if ($_GET['gid'])
	$where.=" and gid=".$_GET['gid'];
	}
if (MOD=="product"){
	   
	  if (!empty($_GET['cx'])) { 
	  $where.=" and cx=".$_GET['cx'];
	 }
	 
	 if (!empty($_GET['status'])) { 
	  $where.=" and `status`=".$_GET['status'];
	 }
	
	// $by='`status` asc,';
	}
	
if (MOD=="doctor"){
	
	 if (!empty($_GET['city'])) { 
	  $where.=" and `city`=".$_GET['city'];
	 }
	  if (!empty($_GET['cid'])) { 
	  $where.=" and `cid`=".$_GET['cid'];
	 }
	 if (!empty($_GET['ks'])) { 
	  $where.=" and `ks`=".$_GET['ks'];
	 }
	
	}

if (MOD=="sczan"){
	
	 if (!empty($_GET['type'])) { 
	  $where.=" and `type`=".$_GET['type'];
	 }
	
	}
	
	
if (MOD=="attribute"){
	
     if (!empty($_GET['cid'])) { 
	  $where.=" and `cid`=".$_GET['cid'];
	 }
	 
}
if (MOD=="aitems"){
	
     if (!empty($_GET['aid'])) { 
	  $where.=" and `aid`=".$_GET['aid'];
	 }
	 
}
if (MOD=="order"){
	
    
	  $where.=" and `status`=2";
	
	 
}
if (MOD=="search"){
	
	if ($_GET['cid']){
	   
	  $where.=" and `cid`=".$_GET['cid'];
	}
	if ($_GET["sdate"]){
		   $sdate=strtotime($_GET["sdate"]);
		   $where.=' and addtime>='.$sdate;
	}
	if ($_GET["edate"]){
		  $edate=strtotime($_GET["edate"]);
		   $where.=' and addtime<='.$edate;
	}
	
	 
}


$d=$duoduo->get_table_struct(MOD);
$total=$duoduo->count(MOD,"`".$title."` like '%$q%' ".$where);
if (MOD=="search" ){ 
    $sql="select count(id) as num,title,cid from xia_search group by title,cid order by num desc";
	$row=$duoduo->sql_to_array($sql);
	$total=count($row);
}

if(!empty($d['sort'])){
	if(MOD=='nav'){
		if($_GET['fu']==1 || $q==''){
			$where=' and pid = 0 ';
		}
		$total_nav=$duoduo->count(MOD,"`".$title."` like '%$q%' ".$where);
		$row=$duoduo->select_all(MOD,'*','`'.$title.'` like "%'.$q.'%" '.$where.' order by '.$by.' hide asc ,sort desc ,id desc limit '.$frmnum.','.$pagesize);
		if($_GET['fu']==0 && $q==''){
			foreach($row as $k=>$v){
				$row[$k]['zdh'] = $duoduo->select_all(MOD,'*','pid = "'.$v['id'].'" order by hide asc ,sort desc id desc');
			}
		}
	}else{
		
		$row=$duoduo->select_all(MOD,'*','`'.$title.'` like "%'.$q.'%" '.$where.' order by '.$by.' sort desc ,id desc limit '.$frmnum.','.$pagesize);
		
		if (MOD=="search"){
		    $sql="select count(id) as num,title,cid from xia_search where 1=1  $where group by title,cid order by num desc limit ".$frmnum.','.$pagesize;
			$row=$duoduo->sql_to_array($sql);
			
		}
		
	}
}else{
	$row=$duoduo->select_all(MOD,'*','`'.$title.'` like "%'.$q.'%" '.$where.' order by '.$by.' id desc limit '.$frmnum.','.$pagesize);
	
	
}
?>