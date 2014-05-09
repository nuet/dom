 $(function(){       
	    //案例展示hover效果
	    $('.QuanZ_An_List .QuanZ_An_List_ul li').hover(function(){
	        $(this).css("border-color","#ff6600");
	        $(this).css("-moz-box-shadow","0px 0px 10px #909090");
	        $(this).find('div div').css('display','block');
	     
	       
	    },function(){
	        $(this).css("border-color","#ccc");
	         $(this).find('div div').css('display','none');
	           
	      
	    });
	    });

	// 全站搜素页面案例展示结束

	$(function(){       
	    $('.QuanZ_An_List .QuanZ_An_List_ul li').hover(function(){
	        $(this).css("-moz-box-shadow","0px 0px 10px #909090");
	        $(this).find('div div').css('display','block');
	         $(this).find('div img').css('filter','alpha(optacity=80)');
	         $(this).find('div img').css('opacity','0.8');
	       
	    },function(){
	        $(this).css("border-color","#ccc");
	         $(this).find('div div').css('display','none');
	        $(this).find('div img').css('filter','alpha(optacity=100)');
	         $(this).find('div img').css('opacity','1.0');
	           
	      
	    });
	    });
	// 展示收起
	$(document).ready(function(){
	$("#JS_shouqi_fliter").click(function(){//当点击触发silideToggle
	$("#QuanZ_An_S_xz_sq").slideToggle("slow");
	$(this).toggleClass("nav1"); return false;//触发后然后改变小图标方向，

	});
});



  