/*用于备案 最后修改:2013-12-18 zxw
$.BeianObj.Settings.b_Dwxz=1101;
....
$.BeianObj();
*/
document.write("<sc"+"ript lang"+"uage=\"java"+"script\" src=\"/file/script/data.js\"></scr"+"ipt>");
var reloadstate;
$.ajaxSetup({timeout:60000,error:function(request, settings){if(settings.indexOf("time")>=0){alert("您本地网络太慢，请销候重试")}},complete:function(XHR, TS){XHR=null;}});
(function($){
	$.BeianObj=function(){
		
		var rootObj=$("form[name='form_beian'] dd[class*='clearfix']");
		
		inputObj=rootObj.find("input[name!='ztFzr_dhhm_code'][name!='Fzr_dhhm_code']:text,input[name!='']:password,select[name!=''],input[name!='']:radio,textarea[name!='']");
		$.BeianObj.Loading();
	
		$.BeianObj.BindingTo();
		
		inputObj.each(function(index, element) {
			
			$(element).AlertTitle();
	});	
	$.ajaxSetup({timeout:10000,complete:function(XHR, TS){XHR=null;}});
}
/****************功能部件*************/
$.extend($.BeianObj,{
	Settings:{
				isbeian:false,
				ischeckuser:false,/*是否是核验点*/
				f_memo:"fzr_new",
				regstatus:"0",
				b_Dwxz:0, /* 原单位性质 */
				b_Shengid:"",
				b_Shiid:0,
				b_Xianid:0,
				b_Zjlx:0,
				b_ztFzr_zjlx:"",/*原证件类型*/
				b_Yylb:0,
				b_wzFwnr:"",
				b_Fzr_zjlx:"",
				CkedObjArr:[],/*提交时存储需检查的项*/
				fzrJson:[],/*负责人信息存储，以供选择*/
				mustTelnum:"",/*必填座机的省份*/
				ipaddress:"四川省",
				iswzzr:false,
				Load_page:"/beian.php",
				tmp_wzfzrxm:"",/*选择负责人时*/
				TmpKey:""/*临时公共变量*/
		     },
	Title:{
				Dwmc:{msg:"多个以分号\";\"分隔。组织开办，则应填写组织名称，个人开办，则应填写个人姓名。",width:300,height:30,left:25},
				Dwxz:{msg:"请按网站的性质正确选择\"主办单位性质\",公司、学校等性质的网站不能选择为个人，否则通不过审核！",width:300,height:50,left:25,fn:function(Obj){
							$.BeianObj.PutOver("load",Obj);
							if(/^\d{1,2}$/.test($(Obj).val())){
								$.BeianObj.PutOver("ok",Obj);
							}else{
								$.BeianObj.PutOver("err",Obj,"请选择单位的类型");
							}
							return;
						 }},		
				Shengid:{msg:"按主办单位实际所在地进行选择,如果备案曾通过后该项将不允许再修改",width:300,height:30,left:25,fn:function(Obj){
							if(/^\d{5,8}$/.test($(Obj).val())){
								$.BeianObj.PutOver("ok",Obj);
								$.BeianObj.CheckInput(Obj);
							}else{
								$.BeianObj.PutOver("load",Obj);
								$.BeianObj.PutOver("err",Obj,"请选择省市县");
							}
							return;
						}},
				Shiid:{msg:"按主办单位实际所在地进行选择",width:300,height:20,left:25,fn:function(Obj){
							$.BeianObj.PutOver("load",Obj);
							if(/^\d{5,8}$/.test($(Obj).val())){
								$.BeianObj.PutOver("ok",Obj);
							}else{
								$.BeianObj.PutOver("err",Obj,"请选择所属市");
							}
							return;
						}},
				Xianid:{msg:"按主办单位实际所在地进行选择",width:300,height:20,left:25,fn:function(Obj){
							if(/^\d{5,8}$/.test($(Obj).val())){
								$.BeianObj.PutOver("ok",Obj);
							}else{
								$.BeianObj.PutOver("err",Obj,"请选择县区");
							}
							return;
						}},
				Xxdz:{msg:"必须详细填写到街道门牌、大楼名称、楼层房间号或信箱号（学校地址应注明所在院、系或班级）！否则通不过审核！",width:300,height:50,left:25},
				Zjlx:{msg:"主办单位或主办人的证件类型",width:200,height:20,left:25,fn:function(Obj){
					$.BeianObj.PutOver("load",Obj);
					if(/^\d{1,2}$/.test($(Obj).val())){
						$.BeianObj.PutOver("ok",Obj);
					}else{
						$.BeianObj.PutOver("err",Obj,"请选择证件的类型");
					}
					return;
				 }},	
				Zjhm:{msg:"证件号码",width:200,height:20,left:25},
				Zjzs:{msg:"请填写您的证件上的地址",width:200,height:20,left:25},
				icpmm:{msg:"请填入备案成功后通信管理局发送给您的ICP密码。",width:300,height:30,left:25},
				Cgszz:{msg:"工商营业执照",width:300,height:50,left:25},
				Czzjg:{msg:"组织机构代码",width:300,height:50,left:25},
				ztFzr_xm:{msg:"个人请填写本人姓名。单位请填写法人姓名",width:300,height:30,left:25},
				ztFzr_dhhm:{msg:"电话区号与通信地址必须相符,比如北京的用户填四川的电话则不能通过备案。 ",width:300,height:30,left:25},
				ztFzr_sjhm:{msg:"请输入企业法人本人的手机号码,不得借用他人的手机号。接入商和管局会分别拔打该手机号进行多项真实性校验，如果填他人的手机号导致真实性核验通不过的，后果自负！！",width:300,height:75,left:25},				
				ztFzr_dzyj:{msg:"电子邮件地址。备案成功后电子证书将发送至该邮箱",width:200,height:30,left:25},
				ztFzr_zjlx:{msg:"企业法人证件类型",width:200,height:20,left:25,fun:function(Obj){
								 if(!/^\d{1,2}$/.test($(Obj).val())){	
										$.BeianObj.PutOver("load",Obj);						
										$.BeianObj.PutOver("err",Obj,"证件类型格式错误!");
										return;	
								  }else{
									   $.BeianObj.CheckInput(Obj);
								  }
						  }},
				ztFzr_zjhm:{msg:"企业法人证件号码",width:200,height:20,left:25},
				Fzr_xm:{msg:"网站负责人姓名",width:200,height:20,left:25},
				jrsname:{msg:"请填写<font color=red>成都西维数码科技有限公司</font>，并牢记，管局会核查(请输入，不可复制)",width:300,height:50,left:25},
				Fzr_dhhm_code:{msg:"办公室电话区号",width:300,height:50,left:25},
				Fzr_dhhm:{msg:"电话区号与通信地址必须相符,比如北京的用户填四川的电话则不能通过备案。 ",width:300,height:30,left:25},
				Fzr_sjhm:{msg:"请输入网站负责人本人的手机号码,不得借用他人的手机号。接入商和管局会分别拔打该手机号进行多项真实性校验，如果填他人的手机号导致真实性核验通不过的，后果自负！！",width:400,height:50,left:25},
				mobilecode:{msg:"请输入发送到您手机的验证码(不区分大小写)<br><font color=red>若3分钟内还未收到，请再次\"获取手机验证码\",系统将自动换通道发送</font>.验证码5小时内均有效,如果发三次仍收不到的，请用您的手机拔打028-86263960-6 由客服人工提供验证码。切勿借他人手机来获取验证码，因为管局还会打手机进行真实性核验！",width:300,height:100,left:25,fn:function(Obj){if(!/^\w{4,6}$/.test($(Obj).val())){	
								$.BeianObj.PutOver("load",Obj);						
								$.BeianObj.PutOver("err",Obj,"手机验证码格式错误!");
								return;	
						   }else{
							   $.BeianObj.CheckInput(Obj);
						   }
						   }},
				Fzr_dzyj:{msg:"电子邮件地址。备案成功后电子证书将发送至该邮箱",width:300,height:25,left:25},
				QQ:{msg:"负责人QQ号码",width:300,height:50,left:25},
				Fzr_zjlx:{msg:"负责人证件类型",width:200,height:30,left:25,fun:function(Obj){
								 if(!/^\d{1,2}$/.test($(Obj).val())){	
										$.BeianObj.PutOver("load",Obj);						
										$.BeianObj.PutOver("err",Obj,"证件类型格式错误!");
										return;	
								  }else{
									   $.BeianObj.CheckInput(Obj);
								  }
						  }},
				Fzr_zjhm:{msg:"负责人证件号码",width:200,height:20,left:25},
				ftpname:{msg:"虚拟主机FTP名<br/><font color=red>1.若备案时用的港台，美国主机，成功15天后仍未将主机迁回国内的，将取消备案号.<br/>\
						  2.备案成功后，域名若未指向我司主机Ip，会被系统自动取消备案接入，并不再另行通知.<br>\
						  3.子站备案：请先去控制面板开通子站，备案时ftp用户名填：子站名@主站ftp用户名。比如主站ftp为：myftp4,子站为mymusic,则备案时填 mymusic@myftp4</font><br/>",width:430,height:140,left:25},
				ftppwd:{msg:"虚拟主机FTP密码,如果连续5次输错，该FTP将锁定，等待5分钟后再次输入.",width:300,height:30,left:25},		
				WebSiteName:{msg:"如果您的网站为单位性质：请输入3个汉字以上的网站名称全称。如果您的网站为个人性质：请输入3个汉字以上的个人网站名称全称，能体现出个人网站的内容及性质，<font color=red>不能包含个人姓名、地名，不能包含类似公司性质的名称</font>，正确个人网站名称举例：精选导航、思乡茅玉、新维网、星儿悠悠;错误个人网站名称举例(像公司名称)：博田地产、舒天阔装饰设计、金桥建材。<font color=red>特别提醒:若您填写的网站名称不规范,我司将直接酌情修改并不通知,敬请理解!</font>",width:430,height:100,left:25},
				wzFwnr:{msg:"请选择您网站的服务内容",width:200,height:30,left:25,fn:function(Obj){
							$.BeianObj.PutOver("load",Obj);
							if(/^\d{1,3}$/.test($(Obj).val())){
								$.BeianObj.PutOver("ok",Obj);
							}else{
								$.BeianObj.PutOver("err",Obj,"类型选择出错");
							}
							return;
					  }},
				Yylb:{msg:"请选择您网站的主要的语言类型",width:230,height:30,left:25,fn:function(Obj){
							$.BeianObj.PutOver("load",Obj);
							if(/^\d{1,2}$/.test($(Obj).val())){
								$.BeianObj.PutOver("ok",Obj);
							}else{
								$.BeianObj.PutOver("err",Obj,"类型选择出错");
							}
							return;
					 }},
				IspYmlist:{msg:"每行填写一个,可以同时把所有域名都要写上 <br> \
						  只填顶级域名，不用填二级域名,不用填www.<br> \
						  请勿填 * 号。<br> \
						  <font color=red>特别注意的是这里边一定不能含有已经备案过的域名.</font><br> \
						  可以直接填中文域名",width:300,height:80,left:25},
				wzbz:{msg:"对该网站的简单描述,120字内.<br>例如：该网站为xxxx公司所有,网站名称为:xxxx,主要用于提供公司在互联网上的知名度,用于企业形象宣传",width:300,height:50,left:25}	,
				nrlx:{msg:"请选择前置审批文件的类型",width:200,height:30,left:25,fn:function(Obj){
							$.BeianObj.PutOver("load",Obj);
							if(/^\d{1,2}$/.test($(Obj).val())){
								$.BeianObj.PutOver("ok",Obj);
							}else{
								$.BeianObj.PutOver("err",Obj,"类型选择出错");
							}
							return;
					  }},
				qzsph:{msg:"请填入前置审批号",width:200,height:30,left:25,fn:function(Obj){
							$.BeianObj.PutOver("load",Obj);
							if(/^[\w\-\.（）\(\)\[\]\#\,\u4e00-\u9fa5]{2,50}$/.test($(Obj).val())){
								$.BeianObj.PutOver("ok",Obj);
							}else{
								$.BeianObj.PutOver("err",Obj,"审批号格式错误");
							}
							return;}	
					  },
				 ztbah:{msg:"此处填写主体备案号。<br> 如：蜀ICP备07004665号",width:300,height:30,left:25},
				 baxh:{msg:"填写已备案成功的网站备案号，例如：蜀ICP备07004665号-1 ，请注意后面以数字结尾。",width:300,height:30,left:25}
		  		},
	ShengTixing:{
					s_620000:"抱歉，因甘肃通信管理局政策原因，甘肃地区的客户暂不能备案。我们可以免费为您转换为免备案的港台主机，请联系QQ:1491280480 敬请谅解。",
					s_230000:"抱歉，因黑龙江通信管理局政策原因，黑龙江地区的客户暂不能备案。我们可以免费为您转换为免备案的港台主机，请联系QQ:1491280480 敬请谅解。黑龙江管局投诉电话：0451-53610153，工信部电话：010-95169001",
					s_110000:"北京管局在审核备案的时候会检查您的网站是否能打开，如果能打开则备案会被拒绝，请在备案期间保证网站不能访问，勿使用转发功能",
					s_420000:"湖北管局在审核备案的时候会检查您的网站是否能打开，如果能打开则备案会被拒绝，请在备案期间保证网站不能访问，勿使用转发功能",
					s_360000:"江西管局在审核备案的时候会检查您的网站是否能打开，如果能打开则备案会被拒绝，请在备案期间保证网站不能访问，勿使用转发功能",
					s_520000:"贵州管局在审核备案的时候可能会检查您的网站是否能打开，如果能打开则备案会被拒绝，请在备案期间保证网站不能访问，勿使用转发功能",
					s_610000:"1.务必保证备案审核期间网站不可访问，避免网站内容与报备内容不符合被拒绝。<br>2.接入商和管局会在20天内打所留的手机进行真实性核验，如果核验时电话打不通或对姓名、身份证、域名等备案资料回答错误的，将拒绝通过并列入黑名单！<br>3.除其它资料真实外，务必保证座机、网站名称真实，若个人没有座机不用填写",
					s_220000:"1.务必保证备案审核期间网站不可访问，避免网站内容与报备内容不符合被拒绝。<br>2.接入商和吉林管局会在20天内打您的手机核实您提交的备案资料，<font color=red>企业类网站必须由企业的网站负责人自行办理，不能由建站公司代办！所填联系人及手机号必须是网站负责人自己的。</font>备案核实时电话打不通或回答不了公司名称、网站负责人姓名、身份证号码、域名等备案资料的，或所留手机号不是网站负责人本人的、由网建公司代办的，则备案将被拒绝并列为黑名单2个月内不再受理！",
					s_500000:"接入商和重庆管局会在20天内打您的手机核实您提交的备案资料，<font color=red>企业类网站必须由企业的网站负责人自行办理，不能由建站公司代办！所填联系人及手机号必须是网站负责人自己的。</font>备案核实时电话打不通或回答不了公司名称、网站负责人姓名、身份证号码、域名等备案资料的，或所留手机号不是网站负责人本人的、由网建公司代办的，则备案将被拒绝并列为黑名单2个月内不再受理！<br/>重庆管局在审核备案的时候可能会检查您的网站是否能打开，如果能打开则备案会被拒绝，请在备案期间保证网站不能访问，勿使用转发功能",
					s_310000:"接入商和上海管局会在20天内打您的手机核实您提交的备案资料，<font color=red>企业类网站必须由企业的网站负责人自行办理，不能由建站公司代办，所填联系人及手机号必须是网站负责人自己的。</font>备案核实时电话打不通或回答不了公司名称、网站负责人姓名、身份证号码、域名等备案资料的，或所留手机号不是网站负责人本人的、由网建公司代办的，则备案将被拒绝并列为黑名单2个月内不再受理！",
					s_330000:"接入商和浙江管局会在20天内打您的手机核实您提交的备案资料，<font color=red>请记住您的身份证号码或将身份证号码放在能立即查看的地方</font>。管局核实时电话打不通或回答不了姓名、身份证号码、域名等备案资料的，则备案将被拒绝并列为黑名单！",
					s_320000:"接入商和江苏管局会在20天内打您的手机核实您提交的备案资料，<font color=red>企业类网站必须由企业的网站负责人自行办理，不能由建站公司代办，所填联系人及手机号必须是网站负责人自己的。</font>备案核实时电话打不通或回答不了公司名称、网站负责人姓名、身份证号码、域名等备案资料的，或所留手机号不是网站负责人本人的、由网建公司代办的，则备案将被拒绝并列为黑名单2个月内不再受理！",
					s_340000:"接入商和安徽管局会在20天内打您的手机核实您提交的备案资料，<font color=red>请记住您的身份证号码或将身份证号码放在能立即查看的地方</font>。管局核实时电话打不通或回答不了姓名、身份证号码、域名等备案资料的，则备案将被拒绝并列为黑名单！",		
					s_450000:"接入商和广西管局会在20天内打您的手机核实您提交的备案资料，<font color=red>请记住您的身份证号码或将身份证号码放在能立即查看的地方</font>。管局核实时电话打不通或回答不了姓名、身份证号码、域名等备案资料的，则备案将被拒绝并列为黑名单，且一个网站<font color=red>域名不可超过三个</font>，否则需与核验单一起快递域名证书，证书所有者必须为同一人。",
					s_440000:"接入商和广东管局会在20天内打您的手机核实您提交的备案资料，如果核验时电话打不通或对姓名、身份证、域名等备案资料回答错误的，将拒绝通过并列入黑名单！广东管局在审核备案的时候会检查您的网站是否能打开，如果能打开则备案会被拒绝，请在备案期间保证网站不能访问，勿使用转发功能",
					s_120000:"本网站是个人网站，不含有企业、单位等非个人网站的信息，若在核实中发现网站中含有企业、单位等信息，本人愿接受以虚假信息进行备案，注销网站，并将主体和域名加入黑名单的处罚"
					
				},
	CheckInput:function(Obj,fn){/*Obj为基础型*/			
					$.BeianObj.PutOver("load",Obj);
					
					var info=GegChkInfo(Obj);					
					if(info!=""){
						info += "&act=checkinput";
						/*if($(Obj).attr("name")=="IspYmlist")
						document.write(info);*/
						//$("form[name='form_beian'] *[name!='']:button").prop("disabled",false);
						
						$.post($.BeianObj.Settings.Load_page,info,function(data){	
					
							if($(Obj).attr("name")=="Fzr_sjhm"){/*网站手机号码返回*/
								if(data=="needcode"){
									$.BeianObj.PutOver("ok",Obj);
									$("input[name='mobilecode']:text").parents("dd").slideDown(50);	
								}else if(data!=""){
									$.BeianObj.PutOver("err",Obj,data);
									$("input[name='mobilecode']:text").parents("dd").slideUp(50);
								}else{
									$.BeianObj.PutOver("ok",Obj);
									$("input[name='mobilecode']:text").parents("dd").slideUp(50);
								}
							}else if(data!=""){
								$.BeianObj.PutOver("err",Obj,data);
		  				    }else{
								$.BeianObj.PutOver("ok",Obj);
							}
							if($.isFunction(fn)) fn.call($);			
						});		
					}
				},
	DoSubmit:function(act){
					
				$(".btnstyle,.textbtn").slideUp(0,function(){$("#loadmsg").slideDown(0);});
				
				if($.isArray($.BeianObj.Settings.CkedObjArr) && $.BeianObj.Settings.CkedObjArr.length>0){
					var chkObjName=$.trim($.BeianObj.Settings.CkedObjArr[0]);
					if(chkObjName!=""){
						var doobj=$("form[name='form_beian'] *[name='"+ chkObjName +"']:visible");
					
						if(doobj.get(0)){
						
							inputObjBlur(doobj.get(0),function(){
								
								
								
								$.BeianObj.Settings.CkedObjArr.shift();								
								$.BeianObj.DoSubmit(act);
	
							});				
						}else{		
								$.BeianObj.Settings.CkedObjArr.shift();
								$.BeianObj.DoSubmit(act);
							
						}
					}
				}else{	
					
					if(!isSubErr()){
						
						$("input[name='act']:hidden").val(act);
						$("form[name='form_beian']").submit();
						$("form[name='form_beian'] *[name!='']").prop("disabled",true);											
					}else{
						$("#loadmsg").slideUp(0,function(){$(".btnstyle,.textbtn").slideDown(0);});
					}
				}
			},
	PutOver:function(state,Obj,data){				
			    var callspanObj=$("#" + $(Obj).attr("name") + "_call");
				if(state=="load"){
					$("#titletext").html("");
					$("#titlemsg").css("display","none");					
					callspanObj.css("display","block");
					callspanObj.attr("class","loadtitle");
					callspanObj.html("");
					
				}else if(state=="ok"){
					callspanObj.css("display","block");	
					callspanObj.html("");
					callspanObj.attr("class","oktitle");
				}else if(state=="err"){
					callspanObj.css("display","block");
					callspanObj.attr("class","errtitle");
					callspanObj.html(data);
				}else if(state=="seetitle"){
					callspanObj.css("display","none");
					callspanObj.html("");
					callspanObj.removeClass();
				}else if(state==""){
					$("#titletext").html("");
					$("#titlemsg").css("display","none");
					callspanObj.css("display","none");
					callspanObj.html("");
					callspanObj.removeClass();	
				}
			},
	Loading:function(){
				getCalldiv("main");
				addts_box();
				/*单位性质*/
				var DwxzObj=$("select[name='Dwxz']");
			
				if(DwxzObj.get(0)){
					DwxzObj.empty();DwxzObj.append("<option value=\"\">请选择</option>");
					$.each(dwxzArr,function(i,n){
								var selectedstr="";
								if($.BeianObj.Settings.b_Dwxz==$.trim((i+1).toString()))
									selectedstr="selected=\"selected\"";
								DwxzObj.append("<option value=\""+ (i+1) +"\" "+ selectedstr +">"+ n +"</option>");
					 });
				}
				 /*证件类型*/
				setZjlxoption();
				
				/*****主体负责人证件类型********/	
				var ztFzr_zjlxObj=$("select[name='ztFzr_zjlx']");
				var FzrIndex="1,6,7";
				if(ztFzr_zjlxObj.get(0)){
					ztFzr_zjlxObj.empty();
					$.each(zjlxArr,function(i,n){			
								if(FzrIndex.indexOf(i.toString())>=0){
									var selectedstr2="";
									if($.BeianObj.Settings.b_ztFzr_zjlx==$.trim((i+1).toString()))
										selectedstr2="selected=\"selected\"";
									ztFzr_zjlxObj.append("<option value=\""+ (i+1) +"\" "+ selectedstr2 +">"+ n +"</option>");
								}
					});	 
				}
				/*****网站负责人证件类型********/
				var Fzr_zjlxObj=$("select[name='Fzr_zjlx']");
				if(Fzr_zjlxObj.get(0)){					
					Fzr_zjlxObj.empty();
					if($.BeianObj.Settings.b_Fzr_zjlx=="") $.BeianObj.Settings.b_Fzr_zjlx=$.BeianObj.Settings.b_ztFzr_zjlx;
					$.each(zjlxArr,function(i,n){			
						if(FzrIndex.indexOf(i.toString())>=0){							
							var selectedstr2=($.BeianObj.Settings.b_Fzr_zjlx==$.trim((i+1).toString()))?"selected=\"selected\"":"";
							Fzr_zjlxObj.append("<option value=\""+ (i+1) +"\" "+ selectedstr2 +">"+ n +"</option>");
						}
					});	 
				}
				/*网站服务内容*/
				var wzFwnrObj=$("select[name='wzFwnr']");
				if(wzFwnrObj.get(0)){
					wzFwnrObj.empty();var tmpfwnrArr=null;	
					var tmparr=fwnrArr;
					if($.BeianObj.Settings.b_Shengid=="310000"){
						var tmparr=otherfwnrArr;
					}else if($.BeianObj.Settings.b_Shengid=="440000"){
						var tmparr=otherfwnrArrgd;
					}else if($.BeianObj.Settings.b_Shengid=="500000"){
						var tmparr=otherfwnrArrcq;
					}					
					var selected_Str=($.BeianObj.Settings.b_wzFwnr=="")?"24":$.BeianObj.Settings.b_wzFwnr
					$.each(tmparr,function(i,n){
							tmpfwnrArr=n.split(" ");
							var selectedstr=(selected_Str==tmpfwnrArr[1])?"selected=\"selected\"":"";		
							wzFwnrObj.append("<option value=\""+ $.trim(tmpfwnrArr[1]) +"\" "+ selectedstr +">"+ tmpfwnrArr[0] + "</option>");
					});						
				}
				/*网站语言类别*/				
			   var YylbObj=$("select[name='Yylb']");
			   if(YylbObj.get(0)){
				   YylbObj.empty();
				   $.each(yylbArr,function(i,n){
					   if(n.indexOf(":")>0){
						   var nArr=n.split(":");
						   var yylbVal=$.trim(nArr[0]);
						   var yylbTxt=$.trim(nArr[1]);
						   var selectedstr=(yylbVal==$.BeianObj.Settings.B_Yylb)?"selected=\"selected\"":"";
						   YylbObj.append("<option value=\""+ yylbVal +"\" "+ selectedstr +">"+ yylbTxt + "</option>")
					   }
				   });
			   }
			   /*负责人列表*/
				if(!$.isEmptyObject($.BeianObj.Settings.fzrJson) && $("#wzfzrxmdd").get(0)){
					if($.BeianObj.Settings.b_Dxwz!="5"){
						$("#wzfzrxmdd").before("<dd class=\"clearfix fzrinfo\">\
												  <label>选择已有联系人:</label>\
												  <div class=\"clearfix\"></div>\
												</dd>");	
					}
				   var jscount=$.BeianObj.Settings.fzrJson.length-1;
				   $.each($.BeianObj.Settings.fzrJson,function(ii,nn){
						   if($.BeianObj.Settings.b_Dxwz!="5"){
							   $("dd.fzrinfo div.clearfix").append("<div name=\""+ nn.fzr_xm +"_"+ ii +"\" class=\"fzrinfo_item\">"+ nn.fzr_xm +"</div>");
						   }
						   if($("input[name='Fzr_xm']").val()=="" && ii>=jscount){							   	
								setToFzrinfo(nn.fzr_xm+"_"+ii);
						   }
				   });
				}
				/*根据网站名称显示前置审批项*/
				var WebSiteName=$("input[name='WebSiteName']").blur();
				if(WebSiteName.get(0) && WebSiteName.val()!=""){
					if(qzspBox()){
						setMustneedQzsp();
					}			
				}
				/*是否显示座机可选*/
				setlabeltitle();
				
		   },
	BindingTo:function(){
				
					/*移到电话项显示*/
					$("#beiantel").hover(function(){
						inTsmsg(this,"请用您的手机拨打：028-86263960-6",0,-35)					
						},
					function(){
						outTsmsg();
					});
					/*检测icp密码
					var checkicpmmbtn=$("input[name='checkicpmmbtn']:button");
					if(checkicpmmbtn.get(0)){
						checkicpmmbtn.click(function(){
							var icpmminfo="act=checkicpmm&ztbah="+escape($("input[name='ztbah']:text").get(0)?$("input[name='ztbah']:text").val():"")+"&icpmm="+escape($("input[name='icpmm']").val())
							
							inTsmsg(checkicpmmbtn.get(0),"load...",0,0);
							checkicpmmbtn.prop("disabled",true);
							$.post($.BeianObj.Settings.Load_page,icpmminfo,function(data){
								inTsmsg(checkicpmmbtn.get(0),data,0,0);
								checkicpmmbtn.prop("disabled",false);
								window.setTimeout(outTsmsg,5000);
							});
						});
					}*/
					/*选择联系人*/
					if($(".fzrinfo_item").get(0)){
						$(".fzrinfo_item").click(function(){
							setToFzrinfo($(this).attr("name"));				
						});
					}				
					/*人工改变负责人时*/	
					if($.BeianObj.Settings.tmp_wzfzrxm!=""){				
						$("input[name='Fzr_xm']:text").bind("keyup keydown change blur",function(){
							 if(/^([\u4e00-\u9fa5]+[\u4e00-\u9fa5\w]+)_\d+$/gi.test($.trim($.BeianObj.Settings.tmp_wzfzrxm))){
								 var wzfzrxm=RegExp.$1;
								 if($(this).val()!=wzfzrxm){
									$("input[name='Fzr_dhhm']:text").val("");
									$("input[name='Fzr_dhhm_code']:text").val("");
									$("input[name='Fzr_sjhm']:text").val("");
									$("input[name='Fzr_dzyj']:text").val("");
									$("input[name='Fzr_zjhm']:text").val("");
								 }else{
									setToFzrinfo($.BeianObj.Settings.tmp_wzfzrxm);
								 }	 
							}
							
						});	
					}	
					
//					/*选择省市县*/
//					if($("#sdtixing").get(0)){
//						var ShengidObj=$("select[name='Shengid']");
//						ShengidObj.change(function(){
//							sdtixing();						
//						});
//						sdtixing();
//					}	
//					
//					$("select[name='Shengid']").change(function(){						
//						select_shi(this);
//						setlabeltitle();
//					});
//					  
//					$("select[name='Shiid']").change(function(){select_xian(this)});
//					$("select[name='Xianid']").change(function(){
//						var xxdzStr=$("select[name='Shengid']").find("option:selected").text()+$("select[name='Shiid']").find("option:selected").text()+$("select[name='Xianid']").find("option:selected").text();
//						$("input[name='Xxdz']:text").val(xxdzStr);
//					});		
//					
//					/*为省份选择ip所在的省*/
//					var thisipaddress=$.BeianObj.Settings.ipaddress
//					var ShengidObj=$("select[name='Shengid']");
//					if(ShengidObj.get(0)){			
//						if(ShengidObj.val()=="" && thisipaddress!=""){
//							ShengidObj.find("option").each(function(s, st) {
//								if(thisipaddress.indexOf($(st).text())>=0){
//									$(st).prop("selected",true);
//									ShengidObj.change();
//									false;
//								}
//							});						
//						}
//					}	
//					var ShiidObj=$("select[name='Shiid']");
//					if(ShiidObj.get(0)){			
//						if(ShiidObj.val()=="" && thisipaddress!=""){
//							ShiidObj.find("option").each(function(s, st) {
//								if(thisipaddress.indexOf($(st).text())>=0){
//									$(st).prop("selected",true);
//									ShiidObj.change();
//									false;
//								}
//							});						
//						}
//					}	
//					
					/*单位性质改变*/
					var DwxzObj=$("select[name='Dwxz']");
					DwxzObj.change(function(){	
						/*个人备案自动填入单们名称里的内容*/
						if($(this).val()=="5"){					
							$("input[name='Dwmc']:text").bind("keyup keydown change blur",function(){						
								$("input[name='Tzr']:text").val($(this).val());
								$("input[name='ztFzr_xm']:text").val($(this).val());								
							});	
							$("select[name='Zjlx']").change(function(){$("select[name='ztFzr_zjlx']").val($(this).val());});
							$("input[name='Zjhm']:text").bind("keyup keydown change blur",function(){
								$("input[name='ztFzr_zjhm']:text").val($(this).val());
							});
						}else{
							$("input[name='Dwmc']:text").unbind();
							$("select[name='Zjlx']").unbind();
							$("input[name='Zjhm']:text").unbind();
						}
						setZjlxoption();
						setlabeltitle();
					});	
								
					/*网站发送验证码*/
					var McodeObj=$("input[name='mobilecodeButton']:button");
					McodeObj.click(function(){
							sendSms();
					});	
					/*提交主体*/
					$("input[name='submitbutton']:button").click(function(){
						setSubmitKeyArr();
						$.BeianObj.DoSubmit("new_sub_zt");
					});
					/*修改主体*/
					$("input[name='submitbutton_mod']:button").click(function(){
						setSubmitKeyArr();
						$.BeianObj.DoSubmit("mod_sub_zt");
					});	
					
					
					
					/*新增网站*/
					$("input[name='submitbuttonwz']:button").click(function(){
						setSubmitKeyArr();
						if($(this).attr("alt")=="nextadd"){
							$.BeianObj.DoSubmit("new_sub_wz_nextadd");
						}else{
							$.BeianObj.DoSubmit("new_sub_wz");
						}
					});	
					
					/*主体不在我司的新增网站*/
					$("input[name='submitbuttonjrwz']:button").click(function(){
						setSubmitKeyArr();
						if($("input[name='ispztid']:hidden").val()!=""){
                           
							$.BeianObj.DoSubmit("mod_sub_jrwz");
						}else{
						
							$.BeianObj.DoSubmit("new_sub_jrwz");
						}
					});
					
					/*备案转入*/
					$("input[name='submitbuttonztzr']:button").click(function(){
						setSubmitKeyArr();
						if($("input[name='ispztid']:hidden").val()!=""){
							$.BeianObj.DoSubmit("mod_sub_ztzr");
						}else{
							$.BeianObj.DoSubmit("new_sub_ztzr");
						}
					});
					$("input[name='submitbuttonwzzr']:button").click(function(){
						setSubmitKeyArr();
						if($("input[name='ispwzid']:hidden").val()!=""){
							$.BeianObj.DoSubmit("mod_sub_wzzr");
						}else{
							$.BeianObj.DoSubmit("new_sub_wzzr");
						}
					});		
					
					/*修改网站*/
					$("input[name='submitmodbuttonwz']:button").click(function(){
						setSubmitKeyArr();
						$.BeianObj.DoSubmit("mod_sub_wz");
					});	
					/*提交附件*/
					var submitbuttonfile=$("input[name='submitbuttonfile']:button");
					if(submitbuttonfile.get(0)){
						submitbuttonfile.click(function(){
							if($.BeianObj.Settings.ischeckuser){
								var isfindwzzp=true;
								$("img[id^='loadimg_zpfile_']").each(function(index, fzrzpObj) {
		                            if($.trim($(fzrzpObj).attr("alt"))==""){																			
										isfindwzzp=false;
										$("#"+$(fzrzpObj).attr("id")+"_err").slideDown(0);
									}
                                });	
								if(!isfindwzzp){
									alert("网站的负责人照片必须上传");
								}else{
									$("form[name='form_beian']").attr("action","/config/beian_load.asp");
									$(".btnstyle,.textbtn").slideUp(0,function(){$("#loadmsg").slideDown(0);});								
									$("input[name='act']:hidden").val("sub_fj_checkuser");
									$("form[name='form_beian']").submit();
								}
							}else{
								$("form[name='form_beian']").attr("action","/config/beian_load.asp");
								$(".btnstyle,.textbtn").slideUp(0,function(){$("#loadmsg").slideDown(0);});
								$("input[name='act']:hidden").val("sub_fj");
								$("form[name='form_beian']").submit();
							}
						});
					}					
				    /*网站业务类型选择事件*/
					$("input[name='wztype']:radio").change(function(){
							if($.trim($(this).val())=="0"){
								$("#ftp_name").html("FTP名:");
								$("#ftp_pwd").html("FTP密码:");
								$.BeianObj.Title.ftpname.msg="虚拟主机FTP名<br/><font color=red>1.若备案时用的港台，美国主机，成功15天后仍未将主机迁回国内的，将取消备案号.<br/>\
						  2.备案成功后，域名若未指向我司主机Ip，会被系统自动取消备案接入，并不再另行通知.<br>\
						  3.子站备案：请先去控制面板开通子站，备案时ftp用户名填：子站名@主站ftp用户名。比如主站ftp为：myftp4,子站为mymusic,则备案时填 mymusic@myftp4</font><br/>";
						  		$.BeianObj.Title.ftpname.height=140;
								$.BeianObj.Title.ftpname.width=400;
								$.BeianObj.Title.ftppwd.msg="虚拟主机FTP密码,如果连续5次输错，该FTP将锁定，等待5分钟后再次输入.";
							}else if($.trim($(this).val())=="1"){
								$("#ftp_name").html("服务器IP地址:");
								$("#ftp_pwd").html("服务器初始密码:");
								$.BeianObj.Title.ftpname.msg="服务器IP地址(共享IP的填192.168.xx.xx)<br><font color=red>若备案时用的港台，美国主机，成功15天后仍未将主机迁回国内的，将取消备案号</font>";
								$.BeianObj.Title.ftpname.height=40;
								$.BeianObj.Title.ftpname.width=400;
								$.BeianObj.Title.ftppwd.msg="服务器租用管理中心提示的服务器初始密码,如果连续5次输错，该IP将锁定，等待5分钟后再次输入.";
							}else if($.trim($(this).val())=="2"){
								$("#ftp_name").html("企业邮局域名:");
								$("#ftp_pwd").html("企业邮局密码:");
								$.BeianObj.Title.ftpname.msg="企业邮局的域名";
								$.BeianObj.Title.ftpname.height=20;
								$.BeianObj.Title.ftpname.width=200;
								$.BeianObj.Title.ftppwd.msg="邮局管理中心显示的密码,如果连续5次输错，该邮局将锁定，等待5分钟后再次输入.";
							}
					});
					/*信息修改*/
					var ztmodbtn=$("input[name='ztmodbtn']:button");
					if(ztmodbtn.get(0)){
						ztmodbtn.click(function(){
							window.location.href="/ba_mod.asp";
						});
					}
					var ztaddwzbtn=$("input[name='ztaddwzbtn']:button");
					if(ztaddwzbtn.get(0)){
						ztaddwzbtn.click(function(){
							window.location.href="/ba_jrwz.asp";
						});
					}
					var ztzrbtn=$("input[name='ztzrbtn']:button");
					if(ztzrbtn.get(0)){
						ztzrbtn.click(function(){
							window.location.href="/ba_ztzr.asp";
						});
					}
					var wzmodbtn=$("input[name='wzmodbtn']:button");
					if(wzmodbtn.get(0)){
						wzmodbtn.click(function(){
							var wzid=$(this).attr("id");
							$("input[name='wzid']:hidden").val(wzid);
							$("form[name='form_beian']").attr("action","/ba_wzmod.asp");
							$("form[name='form_beian']").submit();
						});
					}
					var wzzrbtn=$("input[name='wzzrbtn']:button");
					if(wzzrbtn.get(0)){
						wzzrbtn.click(function(){
							var wzid=$(this).attr("id");
							$("input[name='wzid']:hidden").val(wzid);
							$("form[name='form_beian']").attr("action","/ba_wzzr.asp");
							$("form[name='form_beian']").submit();
						});
					}
					/*资料修改*/
					var filemodbtn=$("input[name='filemodbtn']:button");
					if(filemodbtn.get(0)){
						filemodbtn.click(function(){
							window.location.href="/ba_upfile.asp";
						});
					}
					/*总体提交*/
					var submitallbutton=$("input[name='submitallbutton']:button");
					if(submitallbutton.get(0)){
						submitallbutton.click(function(){
							if($("#agree").attr("src").indexOf("checkbox_a.png")>=0){
								alert("您还没有同意接入商修改备案信息中的通信地址及网站名称");
								$("#agree").focus();
								return false;
							}else{							
								$("form[name='form_beian']").attr("action","/config/beian_load.asp");
								submitallbutton.slideUp(0,function(){$("#loadmsg").slideDown(0)});
								$("input[name='act']:hidden").val("allsubmit");
								$("form[name='form_beian']").submit();			
							}
						});
					}
					/*返回*/
					var bakbutton=$("input[name='bakbutton']:button");
					if(bakbutton.get(0)){
						bakbutton.click(function(){
							location.href = document.referrer;
						});
					}
							
					/*打开前置审批面板*/
					var qzspinfobtn=$("input[name='qzspinfobtn']:button");
					if(qzspinfobtn.get(0)){
						var ishasqzsp=$("input[name='ishasqzsp']:hidden");
						qzspinfobtn.click(function(){	
							if(ishasqzsp.val()=="no"){
								$(".qzsp_hide,.qzsp_show").slideDown(100,function(){
									ishasqzsp.val("yes");
									qzspinfobtn.val("取消上传");
									
								});
							}else{
								$(".qzsp_hide,.qzsp_show").slideUp(100,function(){
									ishasqzsp.val("no");
									qzspinfobtn.val("立即上传");
								});
							}
						});
					}
					/*注销备案*/
					var ztzxbtn=$("input[name='ztzxbtn']:button");
					if(ztzxbtn.get(0)){
						 ztzxbtn.click(function(){
								var api = $.dialog({title:"注销备案",id:"box_zxbeian",background:"#000",opacity: 0.5,fixed: true, lock: true,max:false,min:false});					
								$.get("/config/beian_del.asp",function(msg){
												api.content(msg);									
												var delrootObj=$("form[name='formdel'] dl[class='delbox'] dd[class='clearfix']");	
												$.each(delrootObj,function(i,n){
													var inputObj=$(n).find("input[name!='']:text,textarea[name!='']");
													if(inputObj.get(0)){		
														inputObj.after("<div id=\""+ inputObj.attr("name") +"_call\"></div>");			
														inputObj.blur(function(){dodelchgbg(this)});
														inputObj.focus(function(){dodeloldbg(this)});	
													}
												});
												$("form[name='formdel'] input[name='deletebutton']:button").click(function(){
													inputArr=["zxbz","icpmm"];
													$.each(inputArr,function(i,n){	
														var doobj=$("form[name='formdel']").find("*[name='"+ $.trim(n) +"']");
														dodelchgbg(doobj);
													});
													var errspanObj=$("form[name='formdel']").find("div[class='errtitle']");
													if(!errspanObj.get(0)){		
														$("form[name='formdel']").attr("action","/config/beian_load.asp");	
														$("form[name='formdel'] input[name='act']:hidden").val("ztzx");
														$("form[name='formdel']").submit();
													}	
												});		
												
								});		
						 });
						   
					}
					/*删除所有信息*/
					var ztdelbtn=$("input[name='ztdelbtn']:button");
					if(ztdelbtn.get(0)){
						 ztdelbtn.click(function(){
							if(confirm("该操作将删除所有备案数据(包括网站)，并且不能恢复!\n删除后需要重新上传图片资料，请保存好文件\r\n确定删除吗？")){	
								if(confirm("再次确认:\n该操作将删除所有备案数据(包括网站)，并且不能恢复!\n删除后需要重新上传图片资料，请保存好文件\r\n确定删除吗？")){					
									$("form[name='form_beian']").attr("action","/config/beian_load.asp");
									$("input[name='act']:hidden").val("ztdel");
									$("form[name='form_beian']").submit();								
								}
							}
						});
					}
					/*取消接入*/
					
					var wzqxbtn=$("input[name='wzqxbtn']:button");
					if(wzqxbtn.get(0)){
						wzqxbtn.click(function(){
							if(confirm("警告：当前操作会对该网站进行取消接入（注销备案号），请确认该网站已经没有使用我司的服务器了。点\"确认\"将执行操取消接入作，点\"取消\"放弃")){							
								var wzid=$(this).attr("id")
								$("input[name='wzid']:hidden").val(wzid);
								$("form[name='form_beian']").attr("action","/config/beian_load.asp");
								$("input[name='act']:hidden").val("wzqxjr");
								$("form[name='form_beian']").submit();
							}
						});
					}
					/*删除网站*/
					var wzdelbtn=$("input[name='wzdelbtn']:button");
					if(wzdelbtn.get(0)){
						wzdelbtn.click(function(){
							if(confirm("即将删除该网站所有数据且不能恢复，\n删除后需要重新上传负责人图片资料，请保存好文件.\n确定删除该网站吗?")){	
								if(confirm("再次确定删除该网站吗?")){						
									var wzid=$(this).attr("id")
									$("input[name='wzid']:hidden").val(wzid);
									$("input[name='act']:hidden").val("wzdel");
									$("form[name='form_beian']").attr("action","/config/beian_load.asp");						
									$("form[name='form_beian']").submit();
								}
							}
						});
					}
					/*上传的图片查看*/
					var imgloadObj=$("img[id^='loadimg_'][alt!='']");
					if(imgloadObj.get(0)){
						imgloadObj.click(function(){	
							var filepath=$.trim($(this).attr("alt"));
							if(filepath!=""){
								seeImgBox(filepath);
							}
						});
					}
					/*删除已提交域名*/
					if($(".ymbox").get(0)){
						$(".ymbox .closebutton").click(function(){
							if(confirm("警告：删除域名将会使已备案域名的状态变为未备案\r\n确定删除吗？")){
								var domain_itemstr=$.trim($(this).prevAll("div").attr("title"));
								var mymodobj=$(this).parents(".ymbox").next("textarea[name='mod_IspYmlist']");
								var p=String.fromCharCode(10);
								var newdomainstr="";								
								$.each(mymodobj.val().split(p),function(i,n){
									if($.trim(domain_itemstr.toLowerCase())!=$.trim(n.toLowerCase())){
										newdomainstr +=n+p;
									}
								});
								mymodobj.val(newdomainstr);
								$(this).parent("li").remove();
							}
						});
					}
					/*根据网站名称显示前置审批项*/
					var WebSiteName=$("input[name='WebSiteName']");
					if(WebSiteName.get(0)){
						WebSiteName.blur(function(){
							if(qzspBox()){
								setMustneedQzsp();
							}else{
								if($("input[name='ishasqzsp']:hidden").val()=="yes"){
									$("input[name='qzspinfobtn']:button").val("取消上传");
								}else{
									$("input[name='qzspinfobtn']:button").val("立即上传");
								}
								$("input[name='qzspinfobtn']:button").show(0);
							}
						});
						
					}
					/*同意*/
					$("#agree").click(function(){
						if($(this).attr("src").indexOf("checkbox_a.png")>=0){
								$(this).attr("src","/images/checkbox.png");
						}else{
								$(this).attr("src","/images/checkbox_a.png");
						}
					});
					/*新增网站跳转*/
					$("input[name='jieruwzbtn']:button").click(function(){
						
						window.location.href="?action=update&step=2&type=2";
					});
					
					
			  }
		
	
});
function setMustneedQzsp(){
	var qzspinfobtn=$("input[name='qzspinfobtn']:button");
	if(qzspinfobtn.get(0)){
		var ishasqzsp=$("input[name='ishasqzsp']:hidden");
		if(ishasqzsp.val()=="no"){
			$(".qzsp_hide,.qzsp_show").slideDown(100,function(){
				ishasqzsp.val("yes");								
			});			
		}
		qzspinfobtn.hide(0);
	}
}
/***********************部件调用************************/
$.fn.extend({
	AlertTitle:function(){
		var titleObj=eval("$.BeianObj.Title."+this.attr("name"));
		if(titleObj){	
			if(this.attr("name")=="mobilecode")	{
				this.parents("dd").append("<div id=\""+ this.attr("name") +"_call\"></div>");
			}else if($.BeianObj.Settings.iswzzr && this.attr("name")=="IspYmlist"){
				titleObj.msg="每行填写一个,可以同时把所有域名都要写上 <br> \
							  只填顶级域名，不用填二级域名,不用填www.<br> \
							  请勿填 * 号。<br> \
							  <font color=red>特别注意:备案转入时这里填原备案成功域名.</font><br> \
							  可以直接填中文域名";	
			}else{
		    	this.after("<div id=\""+ this.attr("name") +"_call\"></div>");
			}
			this.bind("focus",function(){												
				doouttitlemsg(this,titleObj.msg,titleObj.width,titleObj.height,titleObj.left);
				$.BeianObj.PutOver("seetitle",this);
			});
			this.bind("blur",function(){
				inputObjBlur(this);
			})
		}
	}
});
function inputObjBlur(v,sfn){
	var titleObj=eval("$.BeianObj.Title."+$(v).attr("name"));
	if(titleObj){	
		if($.isFunction(titleObj.fn)){
			titleObj.fn.call($,v);/*若有自检函数*/
			if($.isFunction(sfn)){
				sfn.call($);
			}
		}else{
			$.BeianObj.CheckInput(v,sfn);/*服务端检测*/
		}
	}
}
/***********************需要用的函数***************************/
function GegChkInfo(Obj){/*组织服务端判断*/	
	var ObjName=$(Obj).attr("name");
	var ObjVal=$(Obj).val();
	var postValue=ObjVal;
	if(ObjName.toLowerCase()=="zjhm".toLowerCase()){
		postValue +=$("select[name='Zjlx']").val();	
	}else if(ObjName=="ztFzr_dhhm"){
		var dhhm=$.trim($("input[name='ztFzr_dhhm_code']:text").val())+"-"+ ObjVal;/*区号+号码一并检测*/
		postValue =dhhm+"^|^"+ $("select[name='Dwxz']").val()+"^|^"+$("select[name='Shengid']").val();	
	}else if(ObjName=="mobilecode"){
		postValue +="^|^" + $("input[name='Fzr_sjhm']:text").val();
	}else if(ObjName=="ztFzr_zjhm"){
		postValue +="^|^"+$("select[name='ztFzr_zjlx']").val();
	}else if(ObjName=="Fzr_zjhm"){
		postValue +="^|^"+$("select[name='Fzr_zjlx']").val();
	}else if(ObjName=="Fzr_dhhm"){
		postValue =$.trim($("input[name='Fzr_dhhm_code']:text").val())+"-"+ ObjVal;/*区号+号码一并检测*/;
	}else if(ObjName=="ftpname"){
		postValue +="^|^"+$("input[name='wztype']:radio:checked").val();
	}else if(ObjName=="ftppwd"){
		postValue +="^|^"+$("input[name='ftpname']").val()+"^|^"+ $("input[name='wztype']:radio:checked").val();
	}else if(ObjName=="IspYmlist"){
			var modymobj=$("textarea[name='mod_IspYmlist']");
			if(modymobj.get(0)){
				var p=String.fromCharCode(10);
				postValue =formatymlist(postValue+p+modymobj.val(),p);
			}
	}
	var result="Key="+ escape(ObjName) +"&Val="+ postValue;
	var ispwzidObj=$("input[name='ispwzid']:hidden");
	if(ispwzidObj.get(0)){
		if(ispwzidObj.val()!=""){
			result +="&ispwzid="+escape(ispwzidObj.val());
		}
	}
	return result;
}
function setToFzrinfo(thisName){				
	if(!$.isEmptyObject($.BeianObj.Settings.fzrJson)){
	   $.each($.BeianObj.Settings.fzrJson,function(i,n){
			if(n.fzr_xm+"_"+i==thisName){
				$.BeianObj.Settings.tmp_wzfzrxm=thisName;
				$.each(n,function(key_,val_){
					key_=key_.replace("fzr_","Fzr_");
					if(key_=="Fzr_dhhm"){
						 if(/^(086\-)?(\d{3,5})\-(\d+)$/gi.test($.trim(val_))){	
						 	 var fzr_dhhm_code=RegExp.$2;
							 var fzr_dhhm=RegExp.$3;		 
							 $("input[name='Fzr_dhhm_code']").val(fzr_dhhm_code);							 
							 $("input[name='Fzr_dhhm']").val(fzr_dhhm);

						 }else{
							  $("input[name='Fzr_dhhm_code']").val("");
							  $("input[name='Fzr_dhhm']").val("");
						 }
					}else if(key_=="Fzr_zjlx"){
						$("select[name='Fzr_zjlx']").val(val_);
					}else{										
						$("input[name='"+ key_ +"']").val(val_);
					}
					
				});											
				return false;
			}
	   });
	   inputObjBlur($("input[name='Fzr_sjhm']:text").get(0),function(){
			if($("input[name='mobilecode']:text").is(":visible")){
				getSmsState();
			}
		});	
	}
}
function setSubmitKeyArr(){/*存储验查项*/
	$.BeianObj.Settings.CkedObjArr=[];

	$.each($.BeianObj.Title,function(KEY,VAL){

		$.BeianObj.Settings.CkedObjArr.push(KEY);
	});
}
function setZjlxoption(){
	var DwxzObj=$("select[name='Dwxz']");
	var ZjlxObj=$("select[name='Zjlx']");
	if(ZjlxObj.get(0)){
		ZjlxObj.empty();
		ZjlxObj.append("<option value=\"\" >请选择</option>");		
		var oldZjhm="";
		$.each(zjlxArr,function(i,n){
			var selectedstr="";
			if($.BeianObj.Settings.b_Zjlx==$.trim((i+1).toString())){
				selectedstr="selected=\"selected\"";
				oldZjhm=n;
			}
			if(DwxzObj.val()==""){
				if(n.indexOf("个人:")>=0){
					ZjlxObj.append("<option value=\""+ (i+1) +"\" "+ selectedstr +">"+ n +"</option>");	
				}
			}else{
				if(n.indexOf($.trim(DwxzObj.find("option:selected").text())+":")>=0){
					ZjlxObj.append("<option value=\""+ (i+1) +"\" "+ selectedstr +">"+ n +"</option>");	
				}
			}
		});
		if($.BeianObj.Settings.b_Zjlx!=0 && !ZjlxObj.find("option[value='"+ $.BeianObj.Settings.b_Zjlx +"']").get(0)){/*如果原证件类型有而新的没有 则显示*/
			ZjlxObj.append("<option value=\""+ $.BeianObj.Settings.b_Zjlx +"\" selected=\"selected\">"+ oldZjhm +"</option>");	
		}
	}
}
function setlabeltitle(){		
		var dwxz=$("select[name='Dwxz']");		
		if(dwxz.get(0)){				
			if(dwxz.val()=="5"){				
				var shengid=$("select[name='Shengid']");
				var shengid_val="";
				if(!shengid.get(0)){
					shengid_val=$.BeianObj.Settings.b_Shengid;
				}else{
					shengid_val=shengid.val();
				}				
				if(shengid_val!=""){
					if($.BeianObj.Settings.mustTelnum.indexOf(shengid_val)>=0){
						$("#Fzr_dhhm_title").html("办公室电话:");
					}else{
						$("#Fzr_dhhm_title").html("办公室电话(可选):");
					}
				}else{					
					$("#Fzr_dhhm_title").html("办公室电话(可选):");
				}
				$("#Dwmc_title").html("主办者姓名:");
			}else if(dwxz.val()=="4"){
				$("#Fzr_dhhm_title").html("办公室电话:");
				$("#Dwmc_title").html("主办单位名称:");
			}else{
				$("#Fzr_dhhm_title").html("办公室电话:");
				$("#Dwmc_title").html("主办单位或主办者名称:");
			}		
		}	
}
function select_shi(v){
	var Shengid=$(v).val();
	var ShiidObj=$("select[name='Shiid']");var XianidObj=$("select[name='Xianid']");
	ShiidObj.empty();ShiidObj.append("<option value=\"\">请选择</option>");
	XianidObj.empty();XianidObj.append("<option value=\"\">请选择</option>");			
	if(Shengid!="")
	$.each(text1,function(i,n){
		var shiVal=value1[i];
		if(shiVal!=""){
			var selectedstr="";
			if($.BeianObj.Settings.b_Shiid==$.trim(shiVal.toString()))
				selectedstr="selected=\"selected\"";
			if (Number(Shengid)/10000==Math.floor(Number(shiVal)/10000))
				ShiidObj.append("<option value=\""+ shiVal +"\" "+ selectedstr +">"+ n +"</option>");
		}
	 });
			
}
function select_xian(v){
	var Shiid=$(v).val();
	var XianidObj=$("select[name='Xianid']");
	XianidObj.empty();XianidObj.append("<option value=\"\">请选择</option>");
	if(Shiid!="")
	$.each(text2,function(i,n){
		var xianVal=value2[i];
		var selectedstr="";
		if($.BeianObj.Settings.b_Xianid==$.trim(xianVal.toString()))
			selectedstr="selected=\"selected\"";
		if (Number(Shiid)/100==Math.floor(Number(xianVal)/100))
			XianidObj.append("<option value=\""+ xianVal +"\" "+ selectedstr +">"+ n +"</option>")
	});			
}
function setwzFwnrinfo(wzFwnrObj){
	var formObj=isbeian?$("form[name='form_xzwz']"):$("form[name='form_beian']");
	var ShengidObj=formObj.find("select[name='Shengid']");
	wzFwnrObj.empty();
	var tmpfwnrArr;var selstr=(ShengidObj.val()=="310000")?"8":"24";	
	var tmparr=fwnrArr;
	if(ShengidObj.val()=="310000"){
		var tmparr=otherfwnrArr;
	}else if(ShengidObj.val()=="440000"){
		var tmparr=otherfwnrArrgd;
	}else if(ShengidObj.val()=="500000"){
		var tmparr=otherfwnrArrcq;
	}
	$.each(tmparr,function(i,n){
			tmpfwnrArr=n.split(" ");
			var selectedstr="";				
			if(tmpfwnrArr[1]==selstr) selectedstr="selected=\"selected\"";			
			wzFwnrObj.append("<option value=\""+ $.trim(tmpfwnrArr[1]) +"\" "+ selectedstr +">"+tmpfwnrArr[0]+"</option>");
		});	
	setwzFwnr();
}
function isSubErr(){
	var callspanObj=$("div[id$='_call']:visible");

	return callspanObj.hasClass("errtitle");
}
function inputObjIsOk(Obj){/*检查项是否是正确状态*/
	var callspanObj=$("#" + $(Obj).attr("name") + "_call");
	return callspanObj.hasClass("oktitle");		
}
function sendSms(){	
	var titlemsg=$("input[name='Fzr_sjhm']:text");
	var mobilecode=$("input[name='mobilecode']:text");
	var McodeObj=$("input[name='mobilecodeButton']:button");
	var Fzr_xmObj=$("input[name='Fzr_xm']:text");
	if(!inputObjIsOk(titlemsg.get(0))){			
		$.BeianObj.PutOver("err",mobilecode.get(0),"请输入正确的手机号码才能发送验证码");
		return;
	}	
	McodeObj.prop("disabled",true);
	var info="act=sendsms&mobile="+ escape(titlemsg.val())+"&Fzr_xm="+escape(Fzr_xmObj.val());
	$.post($.BeianObj.Settings.Load_page,info,function(data){		 
		 if(data==""){
			 McodeObj.prop("disabled",true); 
			 getSmsState();	
			 $.BeianObj.PutOver("",mobilecode.get(0));	
		  }else{
			 mobilecode.val(data); 
			 alert("验证码已经自动获取，可以直接使用。");
			 $.BeianObj.PutOver("",mobilecode.get(0));
		  }
	});
}
function getSmsState(){
	var info="act=getsmsstate";	
	$.post($.BeianObj.Settings.Load_page,info,function(data){
		setMCodeButton(data);
	});	
}
function setMCodeButton(data){
	var McodeObj=$("input[name='mobilecodeButton']:button");
	McodeObj.prop("disabled",true);
	McodeObj.val(data +"秒后再获取");
	if(data<=0){
		McodeObj.prop("disabled",false);
		McodeObj.val("获取手机验证码");
	}else{		
		data--;
		window.clearTimeout(reloadstate);
		reloadstate=window.setTimeout(function(){setMCodeButton(data)},1000);
	}
}
function dodelchgbg(v){
	var callspanObj=$("#" + $(v).attr("name") + "_call");
	callspanObj.css("display","block");
	if($(v).attr("name")=="zxbz"){
		if(!/^[^\`\~\#\$\%\^\&\<\>\/\\\|]{5,200}$/.test($(v).val())){
			callspanObj.attr("class","errtitle");	
			callspanObj.html("备注中只能是5～200位无特殊符号的字符");	
		}else{
			callspanObj.attr("class","oktitle");
			callspanObj.html("");	
		}
	}else if($(v).attr("name")=="icpmm"){
		if(!/^[\w\u4e00-\u9fa5]{3,50}$/.test($(v).val())){
			callspanObj.attr("class","errtitle");	
			callspanObj.html("备案密码只能是3～50位 中文、英文或数字");
		}else{
			callspanObj.attr("class","oktitle");
			callspanObj.html("");
		}
	}
}
function dodeloldbg(v){
	var callspanObj=$("#" + $(v).attr("name") + "_call");
	callspanObj.html("");
	callspanObj.css("display","none");
}
function formatymlist(ymlist,p){	
	var result="";
	$.each(ymlist.split(p),function(i,n){
		if(n!=""){
			result +=n+p;
		}
	});
	return result;
}
function qzspBox(){
	var isneedqz=false;
	var wzname=$("input[name='WebSiteName']");
	if(wzname.get(0) && wzname.val()!=""){
		var keyword=["医","学校","小学","大学","中学","学院","药","幼儿","卫生新闻","卫生"];
		$.each(keyword,function(a,an){
			if($.trim(wzname.val()).indexOf($.trim(an))>=0){
				isneedqz=true;
				return false;
			}
		});	
	}	
	return isneedqz;	
}
function sdtixing(){
	var ShengidObj=$("select[name='Shengid']");
	var tixingmsg=eval("$.BeianObj.ShengTixing.s_"+$.trim(ShengidObj.val()));						
	if(!$.isEmptyObject(tixingmsg)){				
		$("#titletext").html("");
		$("#titlemsg").css("display","none");
		$("#sdtixing .tixingmsg").html(tixingmsg);
		$("#sdtixing").slideDown(200);
	}else{
		$("#sdtixing .tixingmsg").html(tixingmsg);
		$("#sdtixing").slideUp(200);
	}		
}
function addts_box(){
	var boxHtml='<div id="ts_box" class="clearfix"> \
				<div class="ts_jt"></div> \
				<div class="ts_msg">asdfadsfadsfadsfadf</div> \
				</div>'
	$("body").append(boxHtml);
}
function inTsmsg(v,msg,top,left){
	window.clearTimeout($.BeianObj.Settings.TmpKey);
	$("#ts_box").unbind();
	$("#ts_box").hover(function(){
		inTsmsg(v,msg,top,left);
	},function(){
		outTsmsg();
	});		
	var offsetobj = $(v).offset();	
	var vW=$(v).width();
	var vH=	$(v).height();
	$("#ts_box  .ts_msg").html(msg);	
	var boxW=$("#ts_box").width();
	var jW=$("#ts_box .ts_jt").width();	
	var T = parseInt(offsetobj.top) + top + vH;
	var L = parseInt(offsetobj.left) +left+parseInt(vW/2)-parseInt(boxW/2);	
	var jtleft=parseInt(boxW/2-jW/2)-5-left;
	$("#ts_box").css({top:T+"px",left:L+"px"});	
	$("#ts_box  .ts_jt").css({left:jtleft<0?0:jtleft});
	$("#ts_box").fadeIn(10);
}
function outTsmsg(){
	window.clearTimeout($.BeianObj.Settings.TmpKey);
	$.BeianObj.Settings.TmpKey =window.setTimeout(function(){
		$("#ts_box  .ts_msg").html("");
		$("#ts_box").fadeOut(0);},200);
	
}
})(jQuery);