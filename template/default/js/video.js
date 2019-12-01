// JavaScript Document
$(function(){
	$('.video').hover(function(){
		
        $(this).find("video").get(0).play();
    }, function(){
         $(this).find("video").get(0).pause();
    });

    $('.v-collect1111').click(function(){
        var hclass =$(this).hasClass('chosed');
        if(hclass){
            $(this).removeClass('chosed');
        }else{
            $(this).addClass('chosed');
        }
    });
    $('.video').on('click',function(){
    	var  thisvideo=  $(this).find("video")[0];
    	if (thisvideo.paused){
           thisvideo.play();
        }else{
           thisvideo.pause();
        }
    });
});