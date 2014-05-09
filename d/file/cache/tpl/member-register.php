<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header3');?>
<div class="NeLoHeaer">
  <div class="N_L_logo">
      <span><a href="<?php echo $CFG['url'];?>"><img src="<?php echo DT_SKIN;?>/image/Login_Logo.fw.jpg" alt=""></a><i>帐号注册</i></span>
    <p><a href="">返回首页</a> | <a href="">帮助中心</a> | <a href="">联系客服</a></p>
  </div>
</div>
<div class="R_link">
<div class="R_link_B">
  <div class="R_link_div">
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>"  class="on">客户</a>
    <a href="<?php echo $MODULE['2']['linkurl'];?>register_company.php">设计师</a>
  </div>
</div>
</div>
<div class="Regist_cont">
  <div class="Regist_cont_lf">
    <div class="Regist_buzhouimg">
            
       <span id="toppic" class="toppic"></span>
    </div>
          <iframe src="" name="send" id="send" style="display:none;"></iframe>
    <form action="<?php echo $DT['file_register'];?>" id="Reg_form" class="Reg_form" name="Reg_form" method="post" onsubmit="return check1();" target="send">
<input name="action" type="hidden" id="action" value="<?php echo crypt_action('register');?>"/>
<input name="forward" type="hidden" value="<?php echo $forward;?>"/>
<input name="submit_register" type="hidden" value="1"/>
<input name="post[regid]" type="hidden" value="5"/>
     <div id="featured">
    <div class="N_Name">
      <span class="N_Left"><b> * </b>账户名：</span>
          <div>
          <input type="text" class="inp_username Reg_form_he"name="post[username]" id="username" onblur="validator('username');" onfocus="input_msg('username')" autocomplete="off" <?php if($username) { ?> value="<?php echo $username;?>" readonly<?php } ?>
/>
          <label></label>
          <span id="dusername"  style="vertical-align: absmiddle;"></span>
          </div>
    </div>
    <div class="N_PWD">
      <span class="N_Left"><b> * </b>请设置密码： </span>
      <div>
        <input type="password" class="inp_PWD Reg_form_he" name="post[password]" id="password" onblur="validator('password');" onfocus="input_msg('password')" autocomplete="off"<?php if($password) { ?> value="<?php echo $password;?>" readonly<?php } ?>
/>
           <span id="dpassword"></span>
      </div>
    </div>
    <div class="N_RPWD">
     <span class="N_Left"><b> * </b>请确认密码： </span>
     <div>
       <input type="password" class="inp_PWD Reg_form_he" name="post[cpassword]" id="cpassword" onblur="validate('cpassword');"  onfocus="input_msg('cpassword')"  autocomplete="off"<?php if($password) { ?> value="<?php echo $password;?>" readonly<?php } ?>
/>
          <span id="dcpassword"></span>
      </div>
    </div>
    <div class="N_xieyi">
        <input type="checkbox" value="1" name="xy" id="xy" onblur="validate('xy')" checked><label>我已阅读并同意 <a href="#" onclick="netxy()"><i>《摩恩用户注册协议》</i></a></label>&nbsp;<span id="dxy"></span>
    </div>
    <div class="N_NextB">
     <input type="button" value="下 一步" name="" class="" onclick="check()">
    </div>
    </div>
     <div id="featured_1" class="hide">
     <div class="N_Name">
      <span class="N_Left"><b> * </b>真实姓名：</span>
          <div>
          <input type="text" class="inp_username Reg_form_he" style="width:220px;" name="post[truename]" id="truename" onblur="validate('truename');"/>
<input type="radio" name="post[gender]" value="1" style="height: auto;width: auto;line-height: auto;" checked id="gender_1"/><label for="gender_1"> 先生</label>
<input type="radio" name="post[gender]" value="2" style="height: auto;width: auto;line-height: auto;" id="gender_2"/><label for="gender_2"> 女士</label>
          <span id="dtruename"></span>
          </div>
    </div>
    <div class="N_PWD">
      <span class="N_Left"><b> * </b>手机号码： </span>
      <div>
         <input type="text" class="inpQQem Reg_form_he"  name="post[mobile]" id="mobile" onblur="validator('mobile');"/>
         <span id="dmobile" ></span>
      </div>
    </div>
    <?php if($could_mobilecode) { ?>
      <div class="N_PWD">
      <span class="N_Left"><b> * </b>验证码： </span>
      <div>
        <input type="text" class="reg_inp"name="post[mobilecode]" id="mobilecode" onblur="validator('mobilecode');"/>
<input type="button" value="立即发送" id="send_scode" class="reg_inp_btn" onclick="SendSCode();"/>
          <span id="dmobilecode" ></span>
      </div>
    </div>
    <?php } ?>
                             
    <div class="N_RPWD">
     <span class="N_Left"><b> * </b>电子邮箱：</span>
     <div>
         <input type="text" class="inpQQem Reg_form_he"  name="post[email]" id="email" onblur="validator('email');" <?php if($email) { ?> value="<?php echo $email;?>" readonly<?php } ?>
/>
      <span id="demail" class="f_red"></span>
      </div>
    </div>
    <?php if($could_emailcode) { ?>
      <div class="N_RPWD">
     <span class="N_Left"><b> * </b>验证码：</span>
     <div>
         <input type="text" class="reg_inp" name="post[emailcode]" id="emailcode" onblur="validator('emailcode');"/><input type="button" value="立即发送" class="reg_inp_btn" id="send_code" onclick="SendCode();"/>
     <span id="demailcode" ></span>
      </div>
    </div>
      <?php } ?>

    <div class="N_RPWD">
     <span class="N_Left"><b> * </b>所在地区： </span>
     <div>
          <?php echo ajax_area_select('post[areaid]', '请选择', $areaid, '', 2);?>
            <span id="dareaid" ></span>
      </div>
    </div>
    <div class="N_RPWD">
     <span class="N_Left"><b>  </b>QQ号码：</span>
     <div>
        <input type="text" class="inpQQem Reg_form_he" value="" name="post[qq]"><span></span>
          <label ></label>
      </div>
    </div>
   <div class="N_Code">
     <span class="N_Left"><b> * </b>验证码： </span>
     <div>
         <?php if($MOD['captcha_register']) { ?> <?php include template('captcha', 'chip');?><?php } ?>
       <span id="dcaptcha"></span>
      </div>
    </div>
    <div class="N_NextB">
       <input type="submit" value="提交" name="submit" class="">
    </div>
     </div>
    </form>
  </div>
  <div class="Regist_cont_rt">
    <div class="Regist_cont_rt_1">
      <p>>>  我已经注册，现在就 <a href="<?php echo $DT['file_login'];?>">登录</a></p>
    </div>
    <div class="Regist_cont_rt_2">
        <p><a href="<?php echo $DT['file_login'];?>" class="N_login_rt">登录</a></p>
        <p>>> 忘记密码? 请点击  <a href="send.php">这里找回</a></p><br/><br/><br/><br/>
        <p><i>注册成摩恩网络会员的好处</i></p>
    </div>
    <div class="Regist_cont_rt_3">
        <span>方便快捷的订单管理</span>
        <span>项目的及时跟踪</span>
        <span>方便客户与设计师的直接沟通</span>
        <span>后期维护的提交申请</span>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/guest.js"></script>
<script>
window.onload = function ()
{
     document.body.onkeydown=function(event)
    {
        if(event.keyCode==13)
        {
            
            return false;
        }
    }
}
</script>
<script type="text/javascript">
if(Dd('username').value == '') Dd('username').focus();
var vid = '';
function validator(id) {
vid = id;
makeRequest('moduleid=<?php echo $moduleid;?>&action=member&job='+id+'&value='+Dd(id).value, AJPath, '_validator');
}
function _validator() {
if(xmlHttp.readyState==4 && xmlHttp.status==200) {

Dd('d'+vid).innerHTML = xmlHttp.responseText ? '<span class="Reg_form_red">'+xmlHttp.responseText+'</span>' : '<img src="<?php echo DT_SKIN;?>image/check_right.gif" align="absmiddle"/> ';
}
}
function input_msg(id){
    if(id=="username"){
    msg="小写字母、数字、下划线组合";
    }else if(id=="password"){
    msg="6-20位字符，可使用字母、数字或符号的组合";
    }else if(id=="cpassword"){
    msg="请再次输入密码";
    }
   
    
Dd('d'+id).innerHTML='<span class="Reg_form_black">'+msg+'</span>';
}
function err_msg(str, id) {
Dd('d'+id).innerHTML = str=='' ?  '<img src="<?php echo DT_SKIN;?>image/check_'+(str ? 'error' : 'right')+'.gif" align="absmiddle"/>'+str:'<span  class="Reg_form_red">'+str+'</span>' ;
//Dd('d'+id).innerHTML = '<img src="<?php echo DT_SKIN;?>image/check_'+(str ? 'error' : 'right')+'.gif" align="absmiddle"/><span  class="Reg_form_red">'+str+'</span>' ;
}
function err_msg1(str, id) {
Dd('d'+id).innerHTML = str=='' ?  '<img src="<?php echo DT_SKIN;?>image/check_'+(str ? 'error' : 'right')+'.gif" align="absmiddle"/>'+str:'<span  class="Reg_form_red1">'+str+'</span>' ;
//Dd('d'+id).innerHTML = '<img src="<?php echo DT_SKIN;?>image/check_'+(str ? 'error' : 'right')+'.gif" align="absmiddle"/><span  class="Reg_form_red">'+str+'</span>' ;
}
function validate(type) {
if(type == 'cpassword') {
if(Dd('cpassword').value != Dd('password').value) {
err_msg('两次输入的密码不一致', type);
} else {
err_msg('', type);
}
}
if(type == 'truename') {
if(Dd('truename').value.length < 2) {
err_msg('请输入真实姓名', type);
} else {
err_msg('', type);
}
}
if(type == 'idcard') {
if(Dd('idcard').value.match(/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/)) {
err_msg('', type);
} else {
err_msg('请输入正确的身份证号码', type);
}
}
if(type == 'mobile') {
if(Dd('mobile').value.match(/^0?(13|15|18|14)[0-9]{9}$/)) {
err_msg('', type);
} else {
err_msg('请输入正确的手机号码', type);
}
}
if(type == 'xy') {
if(Dd('xy').checked ==true) {
err_msg1('', type);
} else {
err_msg1('请勾选', type);
}
}
}
function reg(type) {
if(type) {
$("#featured").addClass("hide");
$("#core").removeClass("hide");
} else {
$("#core").addClass("hide");
$("#featured").removeClass("hide");
}
}
function Df(ID) {
Dd(ID).focus();
}
function check() {
var f,p;
f = 'username';
if(Dd(f).value == '') {
err_msg('请填写会员登录名', f);
Df(f);
return false;
}
  
if(Dd('d'+f).innerHTML.indexOf('red') != -1) {
Df(f);
return false;
}
f = 'password';
if(Dd(f).value.length < 6) {
err_msg('请填写会员登录密码', f);
Df(f);
return false;
}


if(Dd('d'+f).innerHTML.indexOf('red') != -1) {
Df(f);
return false;
}
f = 'cpassword';
if(Dd(f).value == '') {
err_msg('请重复输入密码', f);
Df(f);
return false;
}

if(Dd('password').value != Dd(f).value) {
err_msg('两次输入的密码不一致', f);
Df(f);
return false;
}

if(Dd('d'+f).innerHTML.indexOf('red') != -1) {
Df(f);
return false;
}
f='xy';
if(Dd(f).checked == '') {
err_msg1('请勾选', f);
Df(f);
return false;
}

if(Dd('username').value.length !=11111){
//$("#picimg").removeClass("toppic");
$("#toppic").addClass("toppic1");



$("#featured").addClass("hide");
$("#featured_1").removeClass('hide');


}else{
return false;
}
}
function check1(){
f = 'truename';
if(Dd(f).value == '') {
err_msg('请填写真实姓名', f);
Df(f);
return false;
}

if(Dd('d'+f).innerHTML.indexOf('red') != -1) {
Df(f);
return false;
}
f="mobile";
 if(!Dd('mobile').value.match(/(^0?(13|15|18|14)[0-9]{9}$)/)) {
   err_msg('请输入正确的手机号码', f);
   Df(f);
return false;
   }
f = 'email';
if(Dd(f).value.length < 6) {
err_msg('请填写电子邮箱', f);
Df(f);
return false;
}
if(Dd('d'+f).innerHTML.indexOf('red') != -1) {
Df(f);
return false;
}
if(Dd('areaid_1').value == 0) {
Dd('dareaid').innerHTML='<span class="Reg_form_red2">请选择所在地</span>';
return false;
}
<?php if($MOD['question_register']) { ?>
f = 'answer';
if(Dd(f).value == '') {
Dmsg('请回答验证问题', f);
return false;
}
<?php } ?>
<?php if($MOD['captcha_register']) { ?>
f = 'captcha';
if(!is_captcha(Dd(f).value)) {
Dmsg('请填写验证码', f);
return false;
}
<?php } ?>

return true;
}
function SendCode() {
if(Dd('demail').innerHTML.indexOf('right') == -1) {
Dd('email').focus();
return;
}
makeRequest('action=<?php echo $action_sendcode;?>&value='+Dd('email').value, '<?php echo $DT['file_register'];?>', '_SendCode');
Dh('sendok');
Dd('send_code').value = '正在发送';
Dd('send_code').disabled = true;
}
function _SendCode() {
var f = 'email';
if(xmlHttp.readyState==4 && xmlHttp.status==200) {
Dd('send_code').value = xmlHttp.responseText == 1 ? '发送成功' : '立即发送';
Dd('send_code').disabled = xmlHttp.responseText == 1 ? true : false;
if(xmlHttp.responseText == 1) {
Ds('sendok');
Dd('dsendok').innerHTML = '<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_mailok.gif" align="absmiddle"/> <span class="f_green">邮件发送成功，</span> <a href="goto.php?action=emailcode&email='+Dd(f).value+'" target="_blank">立即查收</a>';
StopCode();
} else if(xmlHttp.responseText == 2) {
err_msg('邮件格式错误，请检查', f);
Df(f);
} else if(xmlHttp.responseText == 3) {
err_msg('邮件地址已存在，请更换', f);
Df(f);
} else if(xmlHttp.responseText == 4) {
err_msg('此邮件域名已经被禁止注册，请更换', f);
Df(f);
} else if(xmlHttp.responseText == 5) {
alert('邮件发送过快，请稍后再试');
} else if(xmlHttp.responseText == 6) {
alert('尝试发送次数太多，请稍后再试');
} else {
alert('未知错误，请重试');
}
}
}
function StopCode() {
Dd('send_code').disabled = true;
var i = 60;
var interval=window.setInterval(
function() {
if(i == 0) {
Dd('send_code').value = '立即发送';
Dd('send_code').disabled = false;
clearInterval(interval);
} else {
Dd('send_code').value = '重新发送('+i+')';
i--;
}
},
1000);
}
function SendSCode() {
if(Dd('dmobile').innerHTML.indexOf('right') == -1) {
Dd('mobile').focus();
return;
}
makeRequest('action=<?php echo $action_sendscode;?>&value='+Dd('mobile').value, '<?php echo $DT['file_register'];?>', '_SendSCode');
Dh('sendsok');
Dd('send_scode').value = '正在发送';
Dd('send_scode').disabled = true;
}
function _SendSCode() {
var f = 'mobile';
if(xmlHttp.readyState==4 && xmlHttp.status==200) {
Dd('send_scode').value = xmlHttp.responseText == 1 ? '发送成功' : '立即发送';
Dd('send_scode').disabled = xmlHttp.responseText == 1 ? true : false;
if(xmlHttp.responseText == 1) {
Ds('sendsok');
Dd('dsendsok').innerHTML = '<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_mailok.gif" align="absmiddle"/> <span class="f_green">短信发送成功</span>';
StopSCode();
} else if(xmlHttp.responseText == 2) {
err_msg('手机号码格式错误，请检查', f);
Df(f);
} else if(xmlHttp.responseText == 3) {
err_msg('手机号码已存在，请更换', f);
Df(f);
} else if(xmlHttp.responseText == 5) {
alert('短信发送过快，请稍后再试');
} else if(xmlHttp.responseText == 6) {
alert('尝试发送次数太多，请稍后再试');
} else {
alert('未知错误，请重试');
}
}
}
function StopSCode() {
Dd('send_scode').disabled = true;
var i = 180;
var interval=window.setInterval(
function() {
if(i == 0) {
Dd('send_scode').value = '立即发送';
Dd('send_scode').disabled = false;
clearInterval(interval);
} else {
Dd('send_scode').value = '重新发送('+i+')';
i--;
}
},
1000);
}
function netxy(){
new Maya.Box({
text : "欧易服务协议",
url : "<?php echo $CFG['url'];?>/member/agreement.php",
width :670,
height : 200,
btns : [
    

{
text : "    确定     ",
onClick : function(w){
    w.close();
}
}
]
});
}
</script>
<?php include template('footer2');?>