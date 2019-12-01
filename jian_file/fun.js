// JavaScript Document


$(function  () {

	//获取短信验证码
	var validCode=true;
	$(".msgs").click (function  () {
	    
		if ($("#mobile").val()==""){
			 alert("手机号码不能为空");
			 return false;
			}
		if (isphone($("#mobile").val())==false){
			 alert("手机格式不正确");
			 return false;
			}	
		var time=60;
		var code=$(this);
		if (validCode) {
			validCode=false;
			//ajax
		
		 $.ajax({
				//url: '/index.php/jian/send/tel/'+$("#username").val()+'/time/'+ new Date().getTime(),
				url:"index.php?mod=send&act=send&tel="+$("#mobile").val()+"&time="+new Date().getTime(),
				dataType:'text',
				jsonp:"callback",
				success: function(data){
				
				 if (data==10){
					 alert("手机号码已经注册过");
					 validCode=true;
					 return false;
					 }
				  if (data==11){
					 alert("短时间内验证太频繁");
					 validCode=true;
					 return false;
					 }
				 alert(data);
				 code.addClass("msgs1");
		         var t=setInterval(function  () {
				time--;
				code.html(time+"秒后重新获取");
				if (time==0) {
					
						validCode=true;
					clearInterval(t);
				code.html("重新获取");
					
				code.removeClass("msgs1");

			    }
		},1000)
	           }
          });
			//ajax
		}
	})
})


function isphone(str)
{
	var rexTel=/^(1)[0-9]{10}$/;
	if(!rexTel.test(str))
	{
		return false;
	}
	return true;
}	
