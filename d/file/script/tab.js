// JavaScript Document

function setTab(name,cursel,n){
for(i=1;i<=n;i++){
var menu=document.getElementById(name+i);
var con=document.getElementById("con_"+name+"_"+i);
menu.className=i==cursel?"hover":"";
con.style.display=i==cursel?"block":"none";
}
}


function cityshow(){ 
    document.getElementById('oyw_city_qh').style.display = "block";
    document.getElementById('oyw_city_showa').className="oyw_city_showover";
    } 
 function cityhide(){ 
    document.getElementById('oyw_city_qh').style.display = "none";
    document.getElementById('oyw_city_showa').className ="oyw_city_showout";
}


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
	    	
	        $(this).css("border-color","#ff6600");
	        $(this).css("-moz-box-shadow","0px 0px 10px #909090");
	        $(this).find('div div').css('display','block');
	        $(this).find('div img').css('filter','alpha(optacity=70)');
	        $(this).find('div img').css('opacity','0.7');
	       
	    },function(){
	        $(this).css("border-color","#ccc");
	         $(this).find('div div').css('display','none');
	         $(this).find('div img').css('opacity','1');
	        $(this).find('div img').css('filter','alpha(opacity=100)');
	      
	      
	    });
	    $('.product-wrap .js_product li').hover(function(){
	        $(this).css("border-color","#ff6600");
	       
	    },function(){
	        $(this).css("border-color","#fafafa");
	        
	    });
 
 });
 
 

 $(function(){       
     //设计师首页切换
   
     $("#u_shejis_li_bg li:even").addClass("Grey");
     //设计师首页展示hover效果
   
     });
 // 设计师大厅展示隔行变色开始
 $(function(){
      $("#u_SheJiS_DaTing_List_cont_info p:even").addClass("Grey");
 });
 
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


