$(document).ready(function(){ 
	
$('.G_X_XQ_XTab_li ul li').hover(function(){
	 var liindex = $('.G_X_XQ_XTab_li ul li').index(this);
        $(this).addClass('on').siblings().removeClass('on');
        $('.G_X_XQ_XTabWarm div.G_X_XQ_list').eq(liindex).fadeIn(0).siblings('div.G_X_XQ_list').hide();
        var liWidth = $('.G_X_XQ_XTab_li li').width();
});

});



