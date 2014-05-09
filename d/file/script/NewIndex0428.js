//搜索分类代码
$(document).ready(function(){
	$("#Newjsddm li").hover(function(){
		
		$(this).find("ul").css("display","block");	
	},function(){
		$(this).find("ul").slideUp("fast");	
	});
});

//大banner
$(document).ready(function(){

	$(".main_visual").hover(function(){
		$("#btn_prev,#btn_next").fadeIn();
	},function(){
		$("#btn_prev,#btn_next").fadeOut();
	});
	
	$dragBln = false;
	
	$(".main_image").touchSlider({
		flexible : true,
		speed : 200,
		btn_prev : $("#btn_prev"),
		btn_next : $("#btn_next"),
		paging : $(".flicking_con a"),
		counter : function (e){
			$(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
		}
	});
	
	$(".main_image").bind("mousedown", function() {
		$dragBln = false;
	});
	
	$(".main_image").bind("dragstart", function() {
		$dragBln = true;
	});
	
	$(".main_image a").click(function(){
		if($dragBln) {
			return false;
		}
	});
	
	timer = setInterval(function(){
		$("#btn_next").click();
	}, 5000);
	
	$(".main_visual").hover(function(){
		clearInterval(timer);
	},function(){
		timer = setInterval(function(){
			$("#btn_next").click();
		},5000);
	});
	
	$(".main_image").bind("touchstart",function(){
		clearInterval(timer);
	}).bind("touchend", function(){
		timer = setInterval(function(){
			$("#btn_next").click();
		}, 5000);
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
	if(name=="模版市场"){
		$("#search_header").attr("action", "/group/search.php");
	}else if(name=="平面案例"){
		$("#search_header").attr("action", "/pingmian/search_order.php");
	}else{
		$("#search_header").attr("action", "/mall/search_order.php");
	}
	$('#typeid').val(v);
	$('#searchvalue').text(name);
	// $('#boult').text('▼');
	$('#valuelist').hide();
	$('#searchtype').css('background','#f6f6f6');
})
});
// 定制案例切换
  $(function(){       
    
    $('.DingzhiInAnL_title_list li').click(function(){
        var liindex = $('.DingzhiInAnL_title_list li').index(this);
        $(this).addClass('on').siblings().removeClass('on');
        $('.DingzhiSHowZ div.DingzhiSHowZOne').eq(liindex).fadeIn(150).siblings('div.DingzhiSHowZOne').hide();
       
    });
    
  
    });

	//定制案例滑入效果
$(function(){
	$('.DingzhiSHowZOne li').hover(function(){

		$(this).find('a').children('div').children('span').stop(true,true).fadeIn(600);
		$(this).find('a').children('div').children('span').children('div').delay(400).stop(true,true).fadeIn(500);	
	},function(){
		$(this).find('a').children('div').children('span').children('div').stop(true,true).fadeOut();	
		$(this).find('a').children('div').children('span').delay(400).stop(true,true).fadeOut(1000);
	});
});
// 精品模版展示
  $(function(){       
    
    $('.JIngPINMOban_title_list li').click(function(){

        var liindex = $('.JIngPINMOban_title_list li').index(this);
        $(this).addClass('on').siblings().removeClass('on');
        $('.JInPinMoban_show div.JInPinMoban_show_one').eq(liindex).fadeIn(150).siblings('div.JInPinMoban_show_one').hide();
       	
    });
    	
    //hover效果
    $('.JpImg').hover(function(){
    	$(this).find('.MobanJpalp').css('display','block');
    },function(){
    	$(this).find('.MobanJpalp').css('display','none');
    });
    });

  

// 导航banner播放视频
 $(document).ready(function(){
 	$(".NewBannerBoFang div").hover(function(){
 		
 		$(this).css({"filter":"alpha(opacity=50)","-moz-opacity":"0.50","opacity":"0.50"});

 	},function(){
 		$(this).css({"filter":"alpha(opacity=60)","-moz-opacity":"0.60","opacity":"0.60"});
 	})
 });

 

 $(function(){


		//帮我挑选
		(function(){

		//颜色
		$('#j-start-color li').hover(function(){
		    $(this).children('span').addClass('hover');
		},function(){
		    $(this).children('span').removeClass('hover');  
		});
		$('#j-start-color li').click(function(){
		  var a=  $(this).parent().next().val($(this).attr('j_val'));
		   var t= $(this).children('span').addClass('current').parent().siblings().children('span').removeClass('current');
		    $("#color_1").val(t.context.className);
		 
		});
		$('#j-start-color1 li').hover(function(){
		    $(this).children('span').addClass('hover');
		},function(){
		    $(this).children('span').removeClass('hover');  
		});
		$('#j-start-color1 li').click(function(){
		  var a=  $(this).parent().next().val($(this).attr('j_val'));
		   var t= $(this).children('span').addClass('current').parent().siblings().children('span').removeClass('current');
		    $("#color_2").val(t.context.className);
		  
		});

		//提交
		$('#j-start-submit').click(function(){
		    $(this).parent().parent().submit();
		    return false;
		});
		})();

		});
