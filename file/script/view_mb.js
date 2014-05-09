
$(document).ready(function(){
$("#j-tplpreview-expand").click(function(){//当点击触发silideToggle
$(".MYanshi_LOGO").slideToggle("slow");
$(".MB_Sh_LJGM").slideToggle("slow");
$(this).toggleClass("open"); return false;//触发后然后改变小图标方向，

});
});

// 
// 模版展示导航浮动
$().ready(function(){
    //导航距离屏幕顶部距离
    var _defautlTop = $("#MYanshi_s").offset().top;//假如网速慢，或者页面较长加载较慢时，不能及时获取_defautlTop的值，导致回到页头时无法归位没找到好的解决方法，我增加了document.ready也不行，于是我就写死了这个值
    //导航距离屏幕左侧距离
    var _defautlLeft = $("#MYanshi_s").offset().left;
    //导航默认样式记录，还原初始样式时候需要
    var _position = $("#MYanshi_s").css('position');
    var _top = $("#MYanshi_s").css('top');
    var _left = $("#MYanshi_s").css('left');
    var _zIndex = $("#MYanshi_s").css('z-index');
    //鼠标滚动事件
    $(window).scroll(function(){
        if($(this).scrollTop() > _defautlTop){
            //IE6不认识position:fixed，单独用position:absolute模拟
            if($.browser.msie && $.browser.version=="6.0"){
                $("#top").css({'position':'absolute','top':eval(document.documentElement.scrollTop),'left':_defautlLeft,'z-index':99999});
                //防止出现抖动
                $("html,body").css({'background-image':'url(about:blank)','background-attachment':'fixed'});
            }else{
                $("#MYanshi_s").css({'position':'fixed','top':0,'left':_defautlLeft,'z-index':99999});
            }
        }else{
            $("#MYanshi_s").css({'position':_position,'top':_top,'left':_left,'z-index':_zIndex});
        }
    });
});