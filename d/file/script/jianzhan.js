$(function(){  
//建站资料切换
$('.js_title-list li').click(function(){
var liindex = $('.js_title-list li').index(this);
$(this).addClass('on').siblings().removeClass('on');
$('.product-wrap div.js_product').eq(liindex).fadeIn(150).siblings('div.js_product').hide();
var liWidth = $('.js_title-list li').width();
$('.js_case .js_title-list p').stop(false,true).animate({'left' : liindex * liWidth + 'px'},300);
});

//建设资料hover效果
$('.product-wrap .js_product li').hover(function(){
$(this).css("border-color","#ff6600");
$(this).find('p > a').css('color','#ff6600');
},function(){
$(this).css("border-color","#fafafa");
$(this).find('p > a').css('color','#666666');
});
});


//颜色选择
function listHover(){
$(this).addClass('hover').siblings().removeClass('hover');
}




