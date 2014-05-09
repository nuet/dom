// city.js
// 城市切换js

$(document).ready(function(){
	$("#Newjsddm li").hover(function(){
		
		$(this).find("ul").css("display","block");	
	},function(){
		$(this).find("ul").slideUp("fast");	
	});
});


$(document).ready(function(){
$('.INputLeft').toggle(
function(){
	$('#valuelist').show();
	// $('#boult').text('▲');
	$('#searchtype').css('background','#fff');
},function(){
	$('#valuelist').hide();
	// $('#boult').text('▼');
	$('#searchtype').css('background','#f6f6f6');
}); 
$('#searchvalue').toggle(
function(){
	$('#valuelist').show();
	// $('#boult').text('▲');
	$('#searchtype').css('background','#fff');
},function(){
	$('#valuelist').hide();
	// $('#boult').text('▼');
	$('#searchtype').css('background','#f6f6f6');
});

$('#boult').toggle(
function(){
	$('#valuelist').show();
	$('#searchtype').css('background','#fff');
	// $('#boult').text('▲');
},function(){
	$('#valuelist').hide();
	// $('#boult').text('▼');
	$('#searchtype').css('background','#f6f6f6');
});
$('#valuelist li').click(function(){
	var v = $(this).attr('title');
	var name = $(this).text();
	$('#typeid').val(v);
	$('#searchvalue').text(name);
	// $('#boult').text('▼');
	$('#valuelist').hide();
	$('#searchtype').css('background','#f6f6f6');
})
});
function cityshow(){ 
    document.getElementById('oyw_city_qh').style.display = "block";
    document.getElementById('oyw_city_showa').className="oyw_city_showover";
    } 
 function cityhide(){ 
    document.getElementById('oyw_city_qh').style.display = "none";
    document.getElementById('oyw_city_showa').className ="oyw_city_showout";
}



 var timeout         = 100;
 var closetimer		= 0;
 var ddmenuitem      = 0;

 function jsddm_open()
 {	jsddm_canceltimer();
 	jsddm_close();
 	ddmenuitem = $(this).find('ul').eq(0).css('visibility', 'visible');}

 function jsddm_close()
 {	if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}

 function jsddm_timer()
 {	closetimer = window.setTimeout(jsddm_close, timeout);}

 function jsddm_canceltimer()
 {	if(closetimer)
 	{	window.clearTimeout(closetimer);
 		closetimer = null;}}

 $(document).ready(function()
 {	$('#jsddm > li').bind('mouseover', jsddm_open);
 	$('#jsddm > li').bind('mouseout',  jsddm_timer);});

 document.onclick = jsddm_close;
 $(function(){
     $(".sjs_index_xmsh_img img").click(function(){
         $(this).css("width","+50px");

 })
 });



$(function(){
    $(".sjs_index_xmsh_img img").click(function(){
        $(this).css("width","+50px");

})
});


// New——Index首页选项案例展示
$(function(){       
    //首页选项案例展示
    $('.InAnL_title_list li').click(function(){
        var liindex = $('.InAnL_title_list li').index(this);
        $(this).addClass('on').siblings().removeClass('on');
        $('.Index_Anli_wrap div.Index_Anli_pro').eq(liindex).fadeIn(150).siblings('div.Index_Anli_pro').hide();
        var liWidth = $('.InAnL_title_list li').width();
       
    });
    $("#u_shejis_li_bg li:even").addClass("Grey");
    //首页选项案例展示hover效果
    $('.Index_Anli_wrap .Index_Anli_pro li').hover(function(){
       
        $(this).find('div div').css('display','block');
      
       
    },function(){
       
         $(this).find('div div').css('display','none');
     
      
      
    });
    });

/*filter:progid:DXImageTransform.Microsoft.Shadow(color=#909090,direction=120,strength=4);/*ie*/
    /*-moz-box-shadow: 0px 0px 10px #909090;/*firefox*/
    /*-webkit-box-shadow: 0px 0px 10px #909090;/*safari或chrome*/
    /*box-shadow:0px 0px 10px #909090;/*opera或ie9*/
// New——Index首页选项案例展示结束
// 首页显示隐藏透明度

// 首页显示隐藏透明度结束





$(function(){       
    $('.MoBan_yZNew_title_list li').click(function(){
       var liindex = $('.MoBan_yZNew_title_list li').index(this);
       $(this).addClass('on').siblings().removeClass('on');
       $('.MoBan_yZNew_wrap div.MoBan_yZNew_pro').eq(liindex).fadeIn(150).siblings('div.MoBan_yZNew_pro').hide();
       var liWidth = $('.MoBan_yZNew_title_list li').width();
      
   });
   //展示hover效果
   $('.MoBan_yZNew_pro').hover(function(){
       $('.MoBan_yZNew_NQ .sPrev1').css('display','block');
        $('.MoBan_yZNew_NQ .sNext1').css('display','block');
        $('.MoBan_yZNew_NQ .sPrev2').css('display','block');
        $('.MoBan_yZNew_NQ .sNext2').css('display','block');
        $('.MoBan_yZNew_NQ .sPrev3').css('display','block');
        $('.MoBan_yZNew_NQ .sNext3').css('display','block');
        $('.MoBan_yZNew_NQ .sPrev4').css('display','block');
        $('.MoBan_yZNew_NQ .sNext4').css('display','block');
   },function(){
      $('.MoBan_yZNew_NQ .sPrev1').css('display','none');
        $('.MoBan_yZNew_NQ .sNext1').css('display','none');
        $('.MoBan_yZNew_NQ .sPrev2').css('display','none');
        $('.MoBan_yZNew_NQ .sNext2').css('display','none');
        $('.MoBan_yZNew_NQ .sPrev3').css('display','none');
        $('.MoBan_yZNew_NQ .sNext3').css('display','none');
        $('.MoBan_yZNew_NQ .sPrev4').css('display','none');
        $('.MoBan_yZNew_NQ .sNext4').css('display','none');
   }
   );
   $('.MoBan_yZNew_wrap .MoBan_yZNew_pro li').hover(function(){
      
       $(this).find('div div').css('display','block');
  
      
   },function(){

        $(this).find('div div').css('display','none');
      
     
     
   });
   });





$(document).ready(function(){         
 $('.M_Y_XQ_rt_title ul li a').click(function(){
  $(this).addClass('MCon');
 });
 $('html').mousedown(function(){
  $('.M_Y_XQ_rt_title ul li a').removeClass('MCon');
 });
});
// 个性需求tab切换


