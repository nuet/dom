
$(document).ready(function(){        
 $('#j_font').click(function(){
  $(".j_popWord").toggle(1000);
  face_hide();
 });
 $('#expressionButton').click(function(){
   // $('.j_popFace').toggle(1000);
   $(".im-pop-face").toggle(1000);
   font_hide();
  
 });
 $('.U_Lin_Bqoo').click(function(){
	   $(".im-pop-face").toggle(1000);
	 
	});
  $('#change').click(function(){
   // $('.j_popFace').toggle(1000);
   $(".im-pop-send-set").toggle(1000);

 });
  $('#j_fontClose').click(function(){
	
  $(".j_popWord").toggle(1000);
 });
   $('.im-pop-send-set').click(function(){
  $(".im-pop-send-set").toggle(1000);
 });
  $('#j_chatRestore').click(function(){
  $(".im-wrap").css('width','1000px');

 });
  
    $("#j_chatRestore").click(function() {
    
    // if (count == 1) {
      $('.im_wrap').animate({
        width: "1000px"
      });
    //   count++;
    // } else {
    //   $('.im_wrap').animate({
    //    width: "100%"
    //   });
    //   count–;
    // }
  });
 //   $('#j_colorClose').click(function(){
 //  $("#colorPanel").toggle(1000);

 // });
//     var maxCount = 360;  // 最高字数，这个值可以自己配置
//      $("#im-edit-ipt-t").click(function(){
//       alert(maxCount);
//      });
//   $("#im-edit-ipt-t").on('keyup', function() {
//     alert(1);
//     var len = getStrLength(this.value);
//     $("#countSZ").html(maxCount-len);
//   });
 
// // 中文字符判断
// function getStrLength(str) { 
//     var len = str.length; 
//     var reLen = 0; 
//     for (var i = 0; i < len; i++) {        
//         if (str.charCodeAt(i) < 27 || str.charCodeAt(i) > 126) { 
//             // 全角    
//             reLen += 2; 
//         } else { 
//             reLen++; 
//         } 
//     } 
//     return reLen;    
// }
// 限制输入字数
  $("#word").keyup(function(){
var maxl = 300;
var tishi = "" + maxl +"";
$(".im-txt-num").html(tishi);
    var xianyou = $(this).val().length ;
var keyi = maxl - xianyou;
var tishi = "" + keyi +"";
if(xianyou > 120){
 var tishi = "0"
 $(".im-txt-num").css({"color":"red"});
}else if(xianyou > 39){
}else{
}
$(".im-txt-num").html(tishi);
  });
  function clickDOM(){
        tempDOM  = $(this);

}
  // 输入插入
  function clickButton(){
     $("#im-edit-ipt-t").append(tempDOM);

}

});


// 限制输入字数end


Dd('word').focus();var chat_link=chat_time=chat_new_msg=0;var chat_word='';var chat_interval;
function unixtime(){return Math.round(new Date().getTime()/1000);}
function ec_set(i){
	if(i==1){
		$('#ec1').parent().addClass("current");
	    $('#ec2').parent().removeClass("current");
		Dd('chat_s').title=chat_lang.ec1;
}else{
	$('#ec2').parent().addClass("current");
    $('#ec1').parent().removeClass("current");
	Dd('chat_s').title=chat_lang.ec2;}
	chat_ec=i;set_cookie('chat_ec', i);Dh('ec');}
var chat_ec=get_cookie('chat_ec');chat_ec=chat_ec==1?1:2;ec_set(chat_ec);
function chat_send(){
	if(chat_status!=3){
		if(chat_status==0) chat_tip('对方已经离开了对话');
		return;
	}
	var l=Dd('word').value.length;
	if(Dd('word').value == chat_lang.tip || l<1){chat_tip('对话内容不能为空，请输入');Dd('word').focus();return;}
	if(l>chat_maxlen){chat_tip('最多输入'+chat_maxlen+'字，当前已输入'+l+'字');Dd('word').focus();return;}
	if(chat_mintime&&(unixtime()-chat_time<chat_mintime)){chat_tip('您的发言过快，请稍后再发');return;}
	chat_time=unixtime();chat_word=Dd('word').value;Dd('word').value='';
	var p='action=send';
	p+='&chatid='+chat_id;
	p+='&font_s='+Dd('font_s').value;
	p+='&font_c='+Dd('font_c').value;
	p+='&word='+encodeURIComponent(chat_word);
	chat_link=1;makeRequest(p, '?', '_chat_send');
}
function _chat_send(){
	if(xmlHttp.readyState==4&&xmlHttp.status==200){
		chat_link=0;
		if(xmlHttp.responseText=='0'){
			Dd('word').value=chat_word;
			chat_tip('发送失败，请重试');
		}else{
			Dd('word').value='';
			chat_load();
		}
	}
}
function chat_load(d){
	chat_link=1;
	makeRequest('action=load&chatlast='+chat_last+'&chatid='+chat_id+'&first='+(d ? 1 : 0), '?', '_chat_load');
}
function _chat_load(){
	if(xmlHttp.readyState==4&&xmlHttp.status==200){
		chat_link=0;
		if(xmlHttp.responseText){
			eval("var chat_json="+xmlHttp.responseText);
			chat_last=chat_json.chat_last;
			chat_msg=chat_json.chat_msg;
			chat_status = chat_json.chat_status;
			msglen=chat_msg.length;
			for(var i=0;i<msglen;i++){
				chat_into((chat_msg[i].date ? '<p class="dt"><span>'+chat_msg[i].date+'</span></p>' : '')+'<span class="u'+chat_msg[i].self+'">'+chat_msg[i].name+'</span><span class="t'+chat_msg[i].self+'">'+chat_msg[i].time+'</span><br/><p class="w'+chat_msg[i].self+'">'+chat_msg[i].word+'</p>');
			}
			chat_new(chat_json.chat_new);
			if(chat_status==0){chat_sys('对方离开了对话');clearInterval(chat_interval);}
		}
	}
}
function chat_into(msg){
	var o=document.createElement("div");
	o.innerHTML=msg;Dd('chat').appendChild(o);
	Dd('scrollDiv').scrollTop=Dd('chat').scrollHeight;
}
function chat_log(){
	Dd('chat').innerHTML='';
	chat_last=0;
	chat_load(1);
}
function chat_save(){
	Dd('down_data').value=Dd('chat').innerHTML;
	Dd('down').submit();
}
function chat_off(){
	if(confirm('确定要中断聊天吗？')){
		window.close();
	}
}
function chat_key(e){
	if(!e){e=window.event;}
	if(e.keyCode==13){
		if(chat_ec==1){
			if(e.ctrlKey){
				Dd('word').value=Dd('word').value+"\n";
				if(isIE){
					var r =Dd('word').createTextRange();
					r.moveStart('character', Dd('word').value.length);
					r.moveEnd("character", 0);
					r.collapse(true);
					r.select();
				}
			}else{
				chat_send();
				return false;
			}
		}else{
			if(e.ctrlKey) chat_send();
		}
	}
}
function chat_tip(msg){
	Ds('tip');
	Dd('tip').innerHTML=msg;
	Dd('sd').innerHTML=sound('chat_tip');
	window.setTimeout("Dh('tip');",5000);
}
function chat_sys(msg){
	chat_into('<span class="sys">[系统提示]'+msg+'</span>');
}
var chat_title_i=0;
var title_interval;
function chat_new(num){
	if(num>0){
		Dd('sd').innerHTML=sound('chat_msg');
		chat_new_msg=num;
		if(chat_title_i==0){
			title_interval=setInterval('new_tip()',1000);
		}
	}
}
function new_tip(){
	chat_title_i++;
	if(chat_title_i>5){
		new_tip_stop();
		return;
	}
	if(chat_title_i%2==0){
		document.title='【您有('+chat_new_msg+')条新消息，请注意查看】'+chat_title;
	}else{
		document.title=chat_title;
	}
}
function new_tip_stop(){
	try{
		clearInterval(title_interval);
		chat_title_i=0;
		document.title=chat_title;
	}catch(e){}
}
function font_show(){
	if(Dd('font_f').style.display!='none'){
		font_hide();
		return;
	}
	Ds('font_f');

}
function font_hide(){
	Dh('font');

}
function font_init(){
	var s='';
	if(Dd('font_s').value){s+=' s'+Dd('font_s').value;}
	if(Dd('font_f').value){s+=' f'+Dd('font_f').value;}
	if(Dd('font_c').value){s+=' c'+Dd('font_c').value;}
	if(s){Dd('word').className=s;}
}
function face_show(){
	if(Dd('j_popFace').style.display!='none'){
		face_hide();
		return;
	}
	Ds('font');

}
function face_hide(){
	Dh('j_popFace');
	Dd('j_popFace').style.display='none';
	Dh('.im-pop-face');
	$('.im-pop-face').css("display","none");
}
function face_into(s){
	if(Dd('word').value==chat_lang.tip){Dd('word').value='';}
	Dd('word').value+=':'+s+')';
	face_hide();
	Dd('word').focus();
}
if(isGecko){
	window.onbeforeunload=function(){
		chat_link=1;
		makeRequest('action=unload&chatid='+chat_id, '?');
	}
}else{
	window.onunload=function(){
		chat_link=1;
		makeRequest('action=unload&chatid='+chat_id, '?');
	}
}
chat_interval=setInterval('chat_load()',chat_poll);
chat_log();
function chat_off(){
  if(confirm('确定要中断聊天吗？')){
    window.close();
  }
}
// $(window).resize(function(){
//   var $OnLheight =($(window).height());
 
//    var $H =($OnLheight-257+'px');

//   // $('.im-chat-list').css('height','$H');

//   $(".im-chat-list").css("height",$H-210);
// });

// if($("#mydiv").is(":visible")==false){
// });