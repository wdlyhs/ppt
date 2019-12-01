
 
   $(document).ready(function(){
	  $("#city").change(function(){
		
		      pid=$(this).val();
		  
	              
			$("#cid").find("option").remove();
			    if (pid==0){
					  $("#cid").append(' <option value="0">全部</option>  ');
					  
					   return false;
					}
				 
				if (city[pid]=="")
				   $("#cid").append(' <option value="0">无医院</option>  ');
				else{
					
				//$("#city").append(' <option value="0">全部</option>  ');
					$("#cid").append(city[pid]);
					}
				
	  });
	  
	  
	  
	  
	  
	  
	  
	  $("#region").change(function(){
		
		      pid=$(this).val();
		
	              
			$("#subregion").find("option").remove();
			    if (pid==0){
					  $("#subregion").append(' <option value="0">请选择</option>  ');
					  
					   return false;
					}
				 
				if (areas[pid]=="")
				   $("#subregion").append(' <option value="0">无小区</option>  ');
				else{
				<!--	$("#city").append(' <option value="0">全部</option>  ');-->
					$("#subregion").append(areas[pid]);
					}
				
	  });
	  
	  
	  
	  
	  
	  
	  
	  
	   $("#bu").change(function(){
		
		      pid=$(this).val();
		
	              
			$("#model").find("option").remove();
			    if (pid==0){
					  $("#model").append(' <option value="0">全部</option>  ');
					  
					   return false;
					}
				 
				if (ps[pid]=="")
				   $("#model").append(' <option value="0">无产品</option>  ');
				else{
				<!--	$("#city").append(' <option value="0">全部</option>  ');-->
					$("#model").append(ps[pid]);
					}
				
	  });
	  
	  
	  
	  
});
  	

function get_select(pid){
	   if (pid==0)
	       return false;
	  $.ajax({
			url: 'http://'+document.domain+'/index.php?mod=product&act=son&pid='+pid+'&sjs='+new Date().getTime(),
			type: "POST",
			dataType: "text",
			success:function(data){
				$(".brand").find("option").remove();
				if (data=="")
				$(".brand").append(' <option value="0">无车系</option>  ');
				else
				$(".brand").append(data);
				//alert(data);
				
	},
	error:function(error){
		
	}
});
	
	
	}
	  
