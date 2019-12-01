 <div class="foot">
    	<div class="rtrt">
            <a href="/">返回首页</a>
            <? foreach ($nav_row as $row){?>
              <a href="<?=list_url($duoduo,$row['id'])?>"><?=$row['title']?></a>
          <? }?>
        </div>
        <div class="foot-zhong">
        	<ul class="footer">
            	<li>
                	<h3>发货时间:</h3>
                    <p>下午5点之前的订单，均当天发货，除特别情况外。</p>
                </li>
                <li>
                	<h3>关于快递:</h3>
                    <p>本店默认快递EMS，如须发其他快递请与我们联系。</p>
                </li>
                <li class="op">
                	<img class="erwei" src="<?=$webset['w_img']?>"/>
                    <p class="rtrtgg">扫一扫二维码，加微信联系我们</p>
                </li>
                <li class="oo">
                	<h3>关于拍摄:</h3>
                    <p>本店图片均为实物拍摄，但轻微色差仍不可避免，请以实物为准。</p>
                </li>
                <li>
                	<h3>关于货源:</h3>
                    <p>福建省建阳市产地直销，名家建盏一手直销。</p>
                </li>
                <div style="clear:both;"></div>
            </ul>
        </div>
        <div class="didun"><?=$webset['banquan']?></div>
    </div>
<!--------------------点击询价----------------------------------->
    <div class="da">
    	<div class="tang">
        	<div class="ghgh">开始询价</div>
           <form>
            	<input class="btn" type="text"  id="title" placeholder="请输入姓名"/>
             
                <input class="btn"  type="text" placeholder="请输入正确的手机号" id="phone"/>
                <input class="btn2" type="button" value="提交开始询价 " name="sub"/>
            </form>
          
            
            <img class="fuangbi" src="<?=TPLURL?>/img/guang.png"/>
        </div>
    </div>
<!----------------------------点击询价--------------------------->
</body>
</html>
<script src="<?=TPLURL?>/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=TPLURL?>/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
		$('.flexslider').flexslider({
			directionNav: true,
			pauseOnAction: false
		});
	});
</script>
<script>
	$(".dianji").click(function(){
		$(".da").show();	
	})
	$(".fuangbi").click(function(){
		$(".da").hide();
	})
</script>

  <script>
			  $(".btn2").click(function(){
			   if ($("#title").val() == null || $("#title").val() == "") {
				alert("请输入您的姓名"); 
				$("#title").focus();
				$("#title").select();
				return false;
			  }
	
			if ($("#phone").val() == null || $("#phone").val() == "") {
				alert("请输入电话号码"); 
				$("#phone").focus();
				$("#phone").select();
				return false;
			}
               var time=new Date().getTime();
			   var jian = {
				phone:$("#phone").val(),
				title:$("#title").val()
				   };
				if(typeof post=='undefined'){	
					post=1;
					$.ajax({
						url:'index.php?mod=dd&act=index&time='+time,
						data:jian,
						type:'post',
						dataType:'text',
						jsonp:"callback",
						success: function(data){
							alert(data);
						}
					});
				}
				else{
					alert("您已经提交过了");
					
				}
			})
			
			
			
			
			  $(".boot2").click(function(){
			    if ($("#title1").val() == null || $("#title1").val() == "") {
				alert("请输入您的姓名"); 
				$("#title").focus();
				$("#title").select();
				return false;
			  }
	
			if ($("#phone1").val() == null || $("#phone1").val() == "") {
				alert("请输入电话号码"); 
				$("#phone").focus();
				$("#phone").select();
				return false;
			}
               var time=new Date().getTime();
			   var jian = {
				phone:$("#phone1").val(),
				title:$("#title1").val()
				   };
				if(typeof post=='undefined'){	
					post=1;
					$.ajax({
						url:'index.php?mod=dd&act=index&time='+time,
						data:jian,
						type:'post',
						dataType:'text',
						jsonp:"callback",
						success: function(data){
							alert(data);
						}
					});
				}
				else{
					alert("您已经提交过了");
					
				}
			})
			</script>

