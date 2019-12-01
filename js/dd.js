// JavaScript Document


 
 




var p1=1;
    $(function(){ 
　     $("#user11").click(function(){  
            
			
			if ($("#username").val()==""){
			   
			   alert("账号不能为空");
			   return false;
			   }
			   if ($("#password").val()==""){
			   
			   alert("密码不能为空");
			   return false;
			   }
			    if ($("#yzm").val()==""){
			   
			   alert("验证码不能为空");
			   return false;
			   }
			   
		   var a = $(".isreg").attr('type');
		 
		   if (a==2){  
			//注册
			r();   
		  }else{
			  l();   
			  
		}
		   
         
    });
})
 
 

function r(){
	
            if (p1==1){
		        p1=2;
		
	        $.ajax({
			url: 'index.php?mod=user&act=login_register&sjs='+new Date().getTime(),
			type: "POST",
			data: {username:$("#username").val(),password:$("#password").val(),yzm:$("#yzm").val(),sub1:"register"},
			dataType: "json",
			success:function(data){
				    p1=1;
					if (data.stauts==1){
						
						alert("注册成功");
						window.location.href="index.php?mod=user&act=index";
					}else{
						alert(data.msg);
						
					}
	   },
	error:function(error){
		p1=1;
	}
});
		}
		
			
}


function l(){
	
			  
            if (p1==1){
		     p1=2;
		
		
	        $.ajax({
			url: 'index.php?mod=user&act=login_register&sjs='+new Date().getTime(),
			type: "POST",
			data: {username:$("#username").val(),password:$("#password").val(),yzm:$("#yzm").val(),sub1:"login"},
			dataType: "json",
			success:function(data){
				
				    p1=1;
					if (data.stauts==1){
						
						window.location.reload();
					}else{
						alert(data.msg);
						
					}
	   },
	error:function(error){
		p1=1;
	}
});
		}
		
		
	
}

p2=1;
    $(function(){ 
　     $("#login1").click(function(){  
            
          
    });
})



 
   
function sh_dd(){
	
	alert(1);
	
	}