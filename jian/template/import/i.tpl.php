<?php
/**
 * ============================================================================
 * 版权所有 2008-2012 多多科技，并保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 */

if ($_POST['sub'] != '') {
	
	//导入处理函数
    ini_set('memory_limit', '256M');
    set_time_limit(0);
    $max_file_size = 503300000; //上传文件大小限制, 单位BYTE

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
        if (!is_uploaded_file($_FILES["upfile"]['tmp_name'])) { //是否存在文件
            echo "<font color='red'>文件不存在！</font>";
            exit;
        }
        $file = $_FILES["upfile"];
		
        if ($max_file_size < $file["size"]) {
            echo "<font color='red'>文件太大！</font>";
            exit;
        }
        function resetname($name) {
            $arr = explode('.', $name);
            return date('His') . rand(10000, 99999) . '.' . $arr[1];
        }
        $saved_upload_name = DDROOT . "/upload/" . resetname($_FILES['upfile']['name']);
	
        if (!move_uploaded_file($_FILES["upfile"]['tmp_name'], $saved_upload_name)) {
            echo "<font color='red'>服务器的临时目录没有移动文件权限，找空间商！</font>";
        } else {
            chmod($saved_upload_name, 0777);
        }
		
        $result['update_num'] = 0;
        $result['insert_num'] = 0;
        $file_type = substr(strstr($file['name'], '.') , 1);

        if ($file_type == "csv") {
            $handle = fopen($saved_upload_name, "r");
            $kk = 1;
            while ($row = fgetcsv($handle, 1000, ',')) {
                $row = array_map("gbk2utf8", $row);
                foreach ($row as $key => $vo) {
                    $csv_arr[$kk][($key + 1) ] = $vo;
                }
                $kk++;
            }
            fclose($handle);
			$result=$duoduo->trade_import($csv_arr,$result);
        }
	
        if ($file_type == "xls") {
            include DDROOT . '/comm/readxls.php';
            $uptypes = array(
                'application/vnd.ms-excel'
            );
            /*if (!in_array($file["type"], $uptypes)){
            echo "<font color='red'>只能上传xls！</font>";
            exit;
            }*/
			
            $data = new Spreadsheet_Excel_Reader();
            $data->setOutputEncoding('utf-8');
            $data->read($saved_upload_name);
			 $table_data=excels();
		     //核实excel是否符合标准
			 foreach ($data->sheets as $k=>$row){
				 
				    $data1=$row['cells'][1];
					$data2=$table_data[$k]['fields'];
					
					foreach ($data1 as $j=>$item){
					
					
						 $title=$data2[$j-1]['title'];
						 if ($title<>$item){
							 
							    echo $table_data[$k]['table']."表里的字段".$item."异常";
								exit();
							 }
						
						}
					
				
				    
				 
				 }
			  
		//开启事务	  
			  foreach ($data->sheets as $k=>$rows){
				     
					 $table=$table_data[$k]['table'];
					 $fields=$table_data[$k]['fields'];
					 if ($table<>"user"){
		                    $duoduo->delete($table,"1=1");
					 }
					foreach ($rows['cells'] as $m=>$row){
					  
					   if ($m==1) 
					        continue;
				         $data3=array();
					    foreach ($row as $n=>$r){
							 
							 $data3[$fields[$n-1]['field']]=$r;
							 if ($fields[$n-1]['field']=="lsmonth"){
								 
								    $data3[$fields[$n-1]['field']]=excelTime($r);
								 }
							
							}
						
						
					
						if ($table<>"user"){
							
						     
						     $duoduo->insert($table,$data3);
						  }
						  
						  if ($table=="user"){
							
						    //工号有重复，过掉
							$id=$duoduo->select("user","id","gong='".$data3['gong']."'");
							if (empty($id)){
								  $data3['ddpassword']=md5($data3['gong']);
									$data3['lastlogintime'] = SJ;
									$data3['type'] = 1;
									$duoduo->insert($table,$data3);
								
								}
						    
						  }
					
						
					}
					//这里可以进行数据操入操作
					
					
				
					
			  }
			  
			  //事务结束
	       
				 
			//验证EXCEL第一行，防止淘宝更新造成的收入
			// $first_r=array();
//			 $first_r[1]="日期";
//			 $first_r[2]="白天";
//			 $first_r[3]="晚上";
//			 $first_r[4]="当班领导";
//			  $first_r[5]="当班司机";
//			 
//			 $first_row=$c_row[1];
//			 foreach ($first_r as $k=>$row){
//				     if (trim($row)!=trim($first_row[$k])){
//						 
//						 echo "验证".$row."出错";exit();
//						 }
//					    
//				 }
			//验证结束 
		 
          
        }
    }
	
    
} else {
}

        echo "更新成功";
		unlink($saved_upload_name);


   function excelTime($date, $time = false) {
        if(function_exists('GregorianToJD')){
            if (is_numeric( $date )) {
                $jd = GregorianToJD( 1, 1, 1970 );
                $gregorian = JDToGregorian( $jd + intval ( $date ) - 25569 );
                $date = explode( '/', $gregorian );
                $date_str = str_pad( $date [2], 4, '0', STR_PAD_LEFT )
                    ."年". str_pad( $date [0], 2, '0', STR_PAD_LEFT )
                    ."月";
					
                return $date_str;
            }
        }else{
            $date=$date>25568?$date+1:25569;
            /*There was a bug if Converting date before 1-1-1970 (tstamp 0)*/
            $ofs=(70 * 365 + 17+2) * 86400;
            $date = date("Y年m月",($date * 86400) - $ofs).($time ? " 00:00:00" : '');
        }
        return $date;
    }


?>