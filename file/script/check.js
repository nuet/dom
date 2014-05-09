String.prototype.Trim = function() 
{ 
return this.replace(/(^\s*)|(\s*$)/g, ""); 
} 

String.prototype.LTrim = function() 
{ 
return this.replace(/(^\s*)/g, ""); 
} 

String.prototype.RTrim = function() 
{ 
return this.replace(/(\s*$)/g, ""); 
}
String.prototype.CTrim = function() 
{ 
return this.replace(/(\s*)/g, ""); 
} 
function cTrim(sInputString,iType)
{
var sTmpStr = ' ';
var i = -1;

if(iType == 0 || iType == 1)
{
while(sTmpStr == ' ');
{
++i;
sTmpStr = sInputString.substr(i,1);
}
sInputString = sInputString.substring(i);
}

if(iType == 0 || iType == 2)
{
sTmpStr = ' ';
i = sInputString.length;
while(sTmpStr == ' ')
{
--i;
sTmpStr = sInputString.substr(i,1);
}
sInputString = sInputString.substring(0,i+1);
}
return sInputString;
}
function isIp(data){
	var regip=/^((1?\d?\d|(2([0-4]\d|5[0-5])))\.){3}(1?\d?\d|(2([0-4]\d|5[0-5])))$/;
	return regip.test(data);
}
function isMobile(Mno){
	var regMobile=/^0?1(3|5|8)\d{9}$/;
	return regMobile.test(Mno);

}

function getStringLength(str)
    {
        var num=0;
        if (str!="")
        {
            var i;
            var s;
            for(i=0;i<str.length;i++)
            {
                s=str.charCodeAt(i);
                if(s-128<0) num=num+1;
                else num=num+2;
            }
        }
        return num;
        //alert(num);
}
function isEmail(strEmail) {
if (strEmail.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1)
	return true;
else
	return false;
}
function isdomain(strdomain){
	  var domainreg=/^(([\w\-]+)|([\u4e00-\u9fa5]+))(\.)(([\w\-]+)|([\w\-]+)([\.]?)([\w\-]+)|([\u4e00-\u9fa5]+))[\w\.\-]*$/;
	
	return domainreg.test(strdomain);
			
	
}
function isChinese(text){
	//是否含有中文
	var dhinesereg=/^.*[\u4e00-\u9fa5]+.*$/;	
	return dhinesereg.test(text);
	
}
function isEN(text){
	for (i=0;i<text.length;i++)
		if (text.charCodeAt(i)>255) {
		//alert("抱歉!提交失败,"+text+"不能含有汉字!");
		//data.focus();
		//data.select();
		return false;
		}
	return true;
}
function isNum(number){
var i,str1="0123456789";
	if (number==null||number=="")  return false;
	for(i=0;i<number.length;i++){
	if(str1.indexOf(number.charAt(i))==-1){
		return false;
		break;
			}
		}
return true;
}
function isNull(text){
	if (text==""){
		//alert("抱歉!提交失败，"+text+"不能为空!");
		//data.focus();
	   return false;
			}
	else{ 
		return true;}
}
function hasGB(text){
	for (i=0;i<text.length;i++)
		if (text.charCodeAt(i)>255) return true;
	//alert("抱歉!提交失败,"+text+"必须含有汉字!");
	//data.focus();
	//data.select();
	return false;
}
function validChar(text){
	charList="&^%$#@!*()~`+";
	for (i=0;i<charList.length;i++)
		if (text.indexOf(charList.charAt(i))!=-1) {
				//alert("错误，" +text+"不能含有特殊符号["+charList.charAt(i)+"]!");
				//data.focus();
				//data.select();
				return false;
			}
	return true;
}
function isNumberString(inString, refString) {
	if (inString.length == 0)
		return false;
	for (Count=0; Count<inString.length; Count++) {
		tempChar = inString.substring(Count, Count + 1);
		if (refString.indexOf(tempChar, 0) == -1)
			return false;
	}
	return true;
}

function isIdCardNo(idValue) {
        var len=0, re;
        len=idValue.length;
        if (len == 15 && isNumberString(idValue,"1234567890"))
        re = new RegExp(/^(\d{6})()?(\d{2})(\d{2})(\d{2})(\d{3})$/);
        else if (len == 18 && isNumberString(idValue,"1234567890xX"))
        re = new RegExp(/^(\d{6})()?(\d{4})(\d{2})(\d{2})(\d{3})(\d)$/);
        else {
       // alert("输入的公民身份号码不合法，请重新输入!");
        return false;
        }
        var a = idValue.match(re);
        if (a != null){
                if (len==15){
                    var D = new Date("19"+a[3]+"/"+a[4]+"/"+a[5]);
            var B = D.getYear()==a[3]&&(D.getMonth()+1)==a[4]&&D.getDate()==a[5];
          }else{
                    var D = new Date(a[3]+"/"+a[4]+"/"+a[5]);
            var B = D.getFullYear()==a[3]&&(D.getMonth()+1)==a[4]&&D.getDate()==a[5];
          }
          if (!B) {
						//alert("输入的公民身份号码 "+ a[0] +" 的日期不合法，请重新输入!");
						//alert("输入的公民身份号码不合法，请重新输入!");
						return false;
					}
        }
        if(len == 18 && !verifyGmsfhLast(idValue)){
						if (idValue.substr(17,1)=='x'){
						//alert("公民身份号码的最后一位校验码不正确('x'应为大写),请检查!");
						}else
						{
						//alert("输入的公民身份号码不合法，请重新输入!");
						}
            return false;
        }
        return true;
}
function verifyGmsfhLast(sVal){
        if(sVal.length != 18) return false;
        var wi = new Array(7,9,10,5,8,4,2,1,6,3,7,9,10,5,8,4,2,1);

        var vi = new Array(1,0,'X',9,8,7,6,5,4,3,2)
        var ai = new Array(17);
        var sum = 0;
        var remaining = 0;
        var verifyNum = "";
        //通过循环把18位身份证的前17位存到数组ai中
        for(var i = 0; i < 17; i++){
            ai[i] = parseInt(sVal.substring(i,i+1));
        }
        for(var m = 0; m < ai.length; m++){
            //加权
            sum = sum + wi[m] * ai[m];
        }
        remaining = sum % 11;
        if(remaining == 2){
            verifyNum = "X";
        }else{
            verifyNum = vi[remaining];
        }
        if(verifyNum != sVal.substring(17,18)){
            return false;
        }else{
            return true;
        }
    }
function DBC2SBC(str){
    var result = '';
    for (i=0 ; i<str.length; i++){
        code = str.charCodeAt(i);//获取当前字符的unicode编码
        if (code >= 65281 && code <= 65373)//在这个unicode编码范围中的是所有的英文字母已经各种字符
        {
            result += String.fromCharCode(str.charCodeAt(i) - 65248);//把全角字符的unicode编码转换为对应半角字符的unicode码
        }else if (code == 12288)//空格
        {
            result += String.fromCharCode(str.charCodeAt(i) - 12288 + 32);
        }else
        {
            result += str.charAt(i);
        }
    }
    return result;
}
function PasswordStrength(showed){	
	this.showed = (typeof(showed) == "boolean")?showed:true;
	this.styles = new Array();	
	this.styles[0] = {backgroundColor:"#EBEBEB",borderLeft:"solid 1px #FFFFFF",borderRight:"solid 1px #BEBEBE",borderBottom:"solid 1px #BEBEBE"};	
	this.styles[1] = {backgroundColor:"#FF4545",borderLeft:"solid 1px #FFFFFF",borderRight:"solid 1px #BB2B2B",borderBottom:"solid 1px #BB2B2B"};
	this.styles[2] = {backgroundColor:"#FFD35E",borderLeft:"solid 1px #FFFFFF",borderRight:"solid 1px #E9AE10",borderBottom:"solid 1px #E9AE10"};
	this.styles[3] = {backgroundColor:"#95EB81",borderLeft:"solid 1px #FFFFFF",borderRight:"solid 1px #3BBC1B",borderBottom:"solid 1px #3BBC1B"};
	
	this.labels= ["弱","中","强"];

	this.divName = "pwd_div_"+Math.ceil(Math.random()*100000);
	this.minLen = 6;
	
	this.width = "150px";
	this.height = "16px";
	
	this.content = "";
	
	this.selectedIndex = 0;
	
	this.init();	
}
PasswordStrength.prototype.init = function(){
	var s = '<table cellpadding="0" id="'+this.divName+'_table" cellspacing="0" style="width:'+this.width+';height:'+this.height+';">';
	s += '<tr>';
	for(var i=0;i<3;i++){
		s += '<td id="'+this.divName+'_td_'+i+'" width="33%" align="center"><span style="font-size:1px">&nbsp;</span><span id="'+this.divName+'_label_'+i+'" style="display:none;font-family: Courier New, Courier, mono;font-size: 12px;color: #000000;">'+this.labels[i]+'</span></td>';
	}	
	s += '</tr>';
	s += '</table>';
	this.content = s;
	if(this.showed){
		document.write(s);
		this.copyToStyle(this.selectedIndex);
	}	
}
PasswordStrength.prototype.copyToObject = function(o1,o2){
	for(var i in o1){
		o2[i] = o1[i];
	}
}
PasswordStrength.prototype.copyToStyle = function(id){
	this.selectedIndex = id;
	for(var i=0;i<3;i++){
		if(i == id-1){
			this.$("#"+this.divName+"_label_"+i).style.display = "inline";
		}else{
			this.$("#"+this.divName+"_label_"+i).style.display = "none";
		}
	}
	for(var i=0;i<id;i++){
		this.copyToObject(this.styles[id],this.$("#"+this.divName+"_td_"+i).style);			
	}
	for(;i<3;i++){
		this.copyToObject(this.styles[0],this.$("#"+this.divName+"_td_"+i).style);
	}
}
PasswordStrength.prototype.$ = function(s){
	return document.getElementById(s);
}
PasswordStrength.prototype.setSize = function(w,h){
	this.width = w;
	this.height = h;
}
PasswordStrength.prototype.setMinLength = function(n){
	if(isNaN(n)){
		return ;
	}
	n = Number(n);
	if(n>1){
		this.minLength = n;
	}
}
PasswordStrength.prototype.setStyles = function(){
	if(arguments.length == 0){
		return ;
	}
	for(var i=0;i<arguments.length && i < 4;i++){
		this.styles[i] = arguments[i];
	}
	this.copyToStyle(this.selectedIndex);
}
PasswordStrength.prototype.write = function(s){
	if(this.showed){
		return ;
	}
	var n = (s == 'string') ? this.$("#"+s) : s;
	if(typeof(n) != "object"){
		return ;
	}
	n.innerHTML = this.content;
	this.copyToStyle(this.selectedIndex);
}
PasswordStrength.prototype.update = function(s){
	if(s.length < this.minLen){
		this.copyToStyle(0);
		return;
	}
	var ls = -1;
	if (s.match(/[a-z]/ig)){
		ls++;
	}
	if (s.match(/[0-9]/ig)){
		ls++;
	}
 	if (s.match(/(.[^a-z0-9])/ig)){
		ls++;
	}
	if (s.length < 6 && ls > 0){
		ls--;
	}
	 switch(ls) { 
		 case 0:
			 this.copyToStyle(1);
			 break;
		 case 1:
			 this.copyToStyle(2);
			 break;
		 case 2:
			 this.copyToStyle(3);
			 break;
		 default:
			 this.copyToStyle(0);
	 }
}
function loadimg(myjson){
	 if(typeof(myjson.imgarr)!="object" || myjson.imgarr.length<=0)
	  return;
	 var img=myjson.imgarr.shift();
	 myjson={
		imgarr: myjson.imgarr,
		complete:myjson.complete,
		onload:myjson.onload
	 };
	 var imgObj = new Image();
	 	imgObj.src =img;
	 	if(imgObj.complete){
			if(typeof(myjson.complete)!="function" && typeof(myjson.onload)=="function"){
				myjson.onload(img);
				loadimg(myjson);
			}else if(typeof(myjson.complete)!="function"){
				myjson.complete(img);
				loadimg(myjson);
			}
		}else{
			if(typeof(myjson.onload)=="function"){
				imgObj.onload=function (){myjson.onload(img);};
				loadimg(myjson);
			}
		}
	 var imgObj=null;
	 
}
function docheckall(Obj,checkboxitem){
	if(typeof(checkboxitem)=="undefined")
		return ;
	if(checkboxitem.length){
		for(var j=0;j<checkboxitem.length;j++){
			checkboxitem[j].checked=Obj.checked;
		}
	}else{
		checkboxitem.checked=Obj.checked;
	}
}

function getOffset(obj){var offsetleft=obj.offsetLeft;var offsettop=obj.offsetTop;while(obj.offsetParent!=document.body){obj=obj.offsetParent;offsetleft+=obj.offsetLeft;offsettop+=obj.offsetTop}offsetleft+=document.body.offsetLeft;offsettop+=document.body.offsetTop;return{Left:offsetleft,Top:offsettop}}document.write("<sc"+"ript lang"+"uage=\"java"+"script\" src=\"/jscripts/jquery-1.11.0.min.js\"></scr"+"ipt><sc"+"ript lang"+"uage=\"java"+"script\" src=\"/jscripts/zxwbox.js\"></scr"+"ipt><sc" + "ript lang" + "uage=\"java" + "script\" src=\"/jscripts/lhgdialog.min.js?skin=idialog\"></scr" + "ipt>");function doouttitlemsg(){var v=arguments[0];var titletextinfo=$.trim(arguments[1]);var box_width=220;var box_height=50;var box_left=15;if(arguments.length>=3){if(!isNaN(arguments[2])&&arguments[2]!="")box_width=arguments[2]}if(arguments.length>=4){if(!isNaN(arguments[3])&&arguments[3]!="")box_height=arguments[3]}if(arguments.length>=5){if(!isNaN(arguments[4])&&arguments[4]!="")box_left=arguments[4]}$("#titletext").width((parseInt(box_width)-20));$("#titlemsg").width(box_width+10);$("#top_left").width(box_width);$("#bottom_left").width(box_width);$("#bottom_left").height(box_height);$("#bottom_right").height(box_height);$("#titletext").height(parseInt(box_height)+10);if(titletextinfo!=""){var offsetobj=$(v).offset();var T=parseInt(offsetobj.top)-10;var W=parseInt($(v).width());var L=parseInt(offsetobj.left)+W+box_left;$("#titlemsg").css({top:T.toString()+"px",left:L.toString()+"px"});$("#titlemsg").fadeIn(300);$("#titletext").html(titletextinfo)}}function getCalldiv(rootdivid){var callStr="<div id=\"titlemsg\">"+"<div id=\"titletext\"></div>"+"<div id=\"top_left\"></div>"+"<div id=\"top_right\"></div>"+"<div id=\"bottom_left\"></div>"+"<div id=\"bottom_right\"></div>"+"<div class=\"clearbottom\"></div></div>";$("#"+rootdivid).append(callStr)}function passwordStrength(password){var desc=new Array();desc[0]="请输入至少6位数密码";desc[1]="密码强度:<b>弱</b>";desc[2]="密码强度:<b>较好</b>";desc[3]="密码强度:<b>中等</b>";desc[4]="密码强度:<b>强</b>";desc[5]="密码强度:<b>非常强</b>";var score=0;if(password.match(/[a-z]/))score++;if(password.match(/[0-9]/))score++;if(password.match(/[A-Z]/))score++;if(password.match(/[^a-zA-Z0-9]/))score++;if(password.length>=12)score++;if(password.length<6)score=0;$("#passwordDescription").html($.trim(desc[score]));$("#passwordStrength").attr("class","strength"+score)}function closecalldiv(){height=300;$("#floatBoxBg").animate({opacity:"0"},"normal",function(){$(this).hide()});$("#floatBox").animate({top:($(document).scrollTop()-(height=="auto"?300:parseInt(height)))+"px"},"normal",function(){$(this).hide()})}

function showNewsbox(){
	var boxObj=$("#z_news_box");
	if(!boxObj.get(0))
		return;
	var ww=$(window).width();
	var wh=$(window).height();	
	var divW = boxObj.width();
	var divH = boxObj.height();
	var sw=$(window).scrollLeft();
	var sh=$(window).scrollTop();
	var T=sh+wh-divH;
	var L=sw+ww-divW;
	boxObj.css({top:(sh+wh).toString()+"px",left:L.toString()+"px",height:0});
	boxObj.animate({top:T.toString()+"px",height:divH.toString()+"px"},800,function(){$(window).scroll(function(){boxObj.css({ top:($(this).scrollTop()+$(this).height() - divH).toString() + "px"});});});
	$("div[class='closebutton']").click(function(){boxObj.animate({top:($(window).scrollTop()+$(window).height()).toString()+"px",height:0},600,function(){boxObj.hide();});});	 
	
}