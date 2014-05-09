<?php defined('IN_DESTOON') or exit('Access Denied');?>
<?php if($action == 'payword') { ?>
<?php include template('header',$module);?>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab_on" id="Tab0"><a href="?action=<?php echo $action;?>"><span>1、设置新密码</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="Tab1"><a href="?action=<?php echo $action;?>"><span>2、邮件验证</span></a></td>
</tr>
</table>
</div>
<form method="post" action="send.php" onsubmit="return check();" id="dform">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<table cellpadding="6" cellspacing="1" class="tb">
<tr>
<td class="tl"><span class="f_red">*</span> 新支付密码</td>
<td class="tr"><input type="password" size="20" name="password" id="password" autocomplete="off"/> <span id="dpassword" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 重复新支付密码</td>
<td class="tr"><input type="password" size="20" name="cpassword" id="cpassword" autocomplete="off"/>&nbsp;<span id="dcpassword" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 验证码</td>
<td class="tr"><?php include template('captcha', 'chip');?> <span id="dcaptcha" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">提示信息</td>
<td class="tr">提交后，系统将发送一封验证邮件至<?php echo $_email;?>，请接收邮件完成验证</td>
</tr>
</tbody>
<tr>
<td class="tl">&nbsp;</td>
<td class="tr" height="30"><input type="submit" name="submit" value=" 下一步 " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/></td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
if(Dd('password').value.length > <?php echo $MOD['maxpassword'];?> || Dd('password').value.length < <?php echo $MOD['minpassword'];?>) {
Dmsg('密码长度应为<?php echo $MOD['minpassword'];?>-<?php echo $MOD['maxpassword'];?>字符', 'password');
return false;
}
if(Dd('password').value != Dd('cpassword').value) {
Dmsg('两次输入的密码不一致', 'cpassword');
return false;
}
if(!is_captcha(Dd('captcha').value)) {
Dmsg('请填写正确的验证码', 'captcha');
return false;
}
return true;
}
s('edit');
</script>
<?php include template('footer',$module);?>
<?php } else if($action == 'email') { ?>
<?php include template('header',$module);?>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab_on" id="Tab0"><a href="?action=<?php echo $action;?>"><span>1、设置新Email</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="Tab1"><a href="?action=<?php echo $action;?>"><span>2、邮件验证</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="Tab2"><a href="?action=<?php echo $action;?>"><span>3、修改成功</span></a></td>
</tr>
</table>
</div>
<form method="post" action="send.php" onsubmit="return check();" id="dform">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<table cellpadding="6" cellspacing="1" class="tb">
<tr>
<td class="tl"><span class="f_red">*</span> 登录密码</td>
<td class="tr f_red"><input type="password" size="30" name="password" id="password" autocomplete="off"/> <span id="dpassword" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 新Email</td>
<td class="tr"><input type="text" size="30" name="email" id="email"/> <span id="demail" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 验证码</td>
<td class="tr"><?php include template('captcha', 'chip');?> <span id="dcaptcha" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">提示信息</td>
<td class="tr">提交后，系统将发送一封验证邮件至新Email地址，请接收邮件完成验证</td>
</tr>
</tbody>
<tr>
<td class="tl">&nbsp;</td>
<td class="tr" height="30"><input type="submit" name="submit" value=" 下一步 " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/></td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
if(Dd('password').value.length < 6) {
Dmsg('请填写登录密码', 'password');
return false;
}
if(Dd('email').value.length < 7) {
Dmsg('请填写新Email地址', 'email');
return false;
}
if(!is_captcha(Dd('captcha').value)) {
Dmsg('请填写正确的验证码', 'captcha');
return false;
}
return true;
}
s('edit');
</script>
<?php include template('footer',$module);?>
<?php } else if($action == 'mobile') { ?>
<?php include template('header',$module);?>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab_on" id="Tab0"><a href="?action=<?php echo $action;?>"><span>1、设置新手机</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="Tab1"><a href="?action=<?php echo $action;?>&code=1"><span>2、接收认证码</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="Tab2"><a href="?action=<?php echo $action;?>"><span>3、修改成功</span></a></td>
</tr>
</table>
</div>
<?php if(isset($code)) { ?>
<form method="post" action="send.php" onsubmit="return check();" id="dform">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<table cellpadding="6" cellspacing="1" class="tb">
<tr>
<td class="tl"><span class="f_red">*</span> 认证码</td>
<td class="tr"><input type="text" size="10" name="auth" id="auth"/> <span id="dauth" class="f_red"></span> 请输入你收到的短信认证码</td>
<tr>
<td class="tl">&nbsp;</td>
<td class="tr" height="30"><input type="submit" value=" 下一步 " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value=" 重 发 " class="btn" onclick="Go('?action=<?php echo $action;?>');"/></td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
if(Dd('auth').value.length < 6) {
Dmsg('请填写认证码', 'auth');
return false;
}
return true;
}
Dd('Tab0').className = 'tab';
Dd('Tab1').className = 'tab_on';
s('edit');
</script>
<?php } else { ?>
<form method="post" action="send.php" onsubmit="return check();" id="dform">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<table cellpadding="6" cellspacing="1" class="tb">
<tr>
<td class="tl"><span class="f_red">*</span> 新手机号</td>
<td class="tr"><input type="text" size="30" name="mobile" id="mobile" value=""/> <span id="dmobile" class="f_red"></span></td>
</tr>
<?php if($fee && $_sms<1) { ?>
<tr>
<td class="tl">接收短信收费</td>
<td class="tr"><span class="f_b f_red"><?php echo $fee;?></span> <?php echo $DT['money_unit'];?></td>
</tr>
<tr>
<td class="tl">帐户余额</td>
<td class="tr"><span class="f_b f_blue"><?php echo $_money;?></span> <?php echo $DT['money_unit'];?> <?php if($fee>$_money) { ?>&nbsp;<span class="f_red">余额不足</span>&nbsp;<?php } ?>
 <a href="charge.php?action=pay" class="t" target="_blank">[充值]</a></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 支付密码</td>
<td class="tr"><?php include template('password', 'chip');?> <span id="dpassword" class="f_red"></span></td>
</tr>
<?php } ?>
<tr>
<td class="tl">提示信息</td>
<td class="tr">提交后，系统将发送一条短信至您的手机号码，请注意接收</td>
</tr>
</tbody>
<tr>
<td class="tl">&nbsp;</td>
<td class="tr" height="30"><input type="submit" name="submit" value=" 下一步 " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/></td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
if(Dd('mobile').value.length < 7) {
Dmsg('请填写手机号码', 'mobile');
return false;
}
<?php if($fee && $_sms<1) { ?>
if(Dd('password').value.length < 6) {
Dmsg('请填写支付密码', 'password');
return false;
}
<?php } ?>
return true;
}
s('edit');
</script>
<?php } ?>
<?php include template('footer',$module);?>
<?php } else if($action == 'check') { ?>
<?php include template('header',$module);?>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab_on" id="Tab0"><a href="?action=<?php echo $action;?>"><span>1、重发验证信</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="Tab1"><a href="?action=<?php echo $action;?>"><span>2、邮件验证</span></a></td>
</tr>
</table>
</div>
<form method="post" action="send.php" onsubmit="return check();" id="dform">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<table cellpadding="6" cellspacing="1" class="tb">
<tr>
<td class="tl"><span class="f_red">*</span> 户 名</td>
<td class="tr"><input type="username" name="username" id="username" value="<?php echo $_username;?>" style="width:140px"/> <span id="dusername" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 密 码</td>
<td class="tr"><?php include template('password', 'chip');?> <span id="dpassword" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">Email</td>
<td class="tr"><input type="text" size="30" name="email" id="email"/> <span id="demail" class="f_red"></span><br/>
<span class="f_gray">如果需要更换注册Email，请填写；如果不更换，请留空</span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 验证码</td>
<td class="tr"><?php include template('captcha', 'chip');?> <span id="dcaptcha" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">提示信息</td>
<td class="tr">提交后，系统将发送一封验证邮件至您的注册Email，请接收邮件完成验证</td>
</tr>
</tbody>
<tr>
<td class="tl">&nbsp;</td>
<td class="tr" height="30"><input type="submit" name="submit" value=" 下一步 " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/></td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
if(Dd('username').value.length < 1) {
Dmsg('请填写用户名', 'username');
return false;
}
if(Dd('password').value.length < 6) {
Dmsg('请填写密码', 'password');
return false;
}
if(!is_captcha(Dd('captcha').value)) {
Dmsg('请填写正确的验证码', 'captcha');
return false;
}
return true;
}
</script>
<?php include template('footer',$module);?>
<?php } else { ?>
<?php include template('header3');?>
<div class="NeLoHeaer">
  <div class="N_L_logo">
    <span><img src="<?php echo DT_SKIN;?>image/Login_Logo.fw.jpg" alt=""><i>找回密码</i></span>
    <p><a href="">返回首页</a> | <a href="">帮助中心</a> | <a href="">联系客服</a></p>
  </div>
</div>
<div class="L_link"></div>
<!-- 头部结束 -->
  <!-- 主体内容开始 -->
<form method="post" action="send.php" onsubmit="return check();" id="dform">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
  <!-- 找回密码开始了 -->
  <div class="N_Res_PWD">
    <div class="N_Res_PWD_lf">
      <div class="N_Res_PWD_lf_img"><img src="<?php echo DT_SKIN;?>image/N_res_PWD.jpg" alt=""></div>
      <div class="N_Res_PWD_lf_cont">
    
        <div class="N_Name">
          <span class="N_Left"><b> * </b>
              <select name="option">
       <option value="username">用户名</option>
<?php if($MOD['passport']) { ?><option value="passport">通行证</option><?php } ?>
<option value="mobile">手机号</option>
<option value="company">公司名</option>
<?php if($DT['im_qq']) { ?><option value="qq">QQ</option><?php } ?>
<?php if($DT['im_msn']) { ?><option value="msn">MSN</option><?php } ?>
<?php if($DT['im_ali']) { ?><option value="ali">旺旺</option><?php } ?>
<?php if($DT['im_skype']) { ?><option value="skype">Skype</option><?php } ?>
<option value="userid">会员ID</option>
              </select>
          </span>
          <div>
          <input type="username" size="20" class="inp_username Reg_form_he" name="username" id="username" onfocus="input_msg('username')"/> 
           <span id="dusername" ></span> 
          </div>
    </div>
    <div class="N_PWD">
      <span class="N_Left"><b> * </b>电子邮箱： </span>
      <div>
          <input type="text" name="email" class="inpQQem Reg_form_he" id="email"/> <span id="demail" ></span>
           <label ></label>
      </div>
    </div>
    <div class="N_RPWD">
     <span class="N_Left"><b> * </b>新登录密码：</span>
     <div>
         <input type="password" size="20" name="password" class="inpQQem Reg_form_he" id="password"/> <span id="dpassword"></span>
          <label ></label>
      </div>
    </div>
    <div class="N_RPWD">
     <span class="N_Left"><b> * </b>重置录密码：</span>
     <div>
       <input type="password" size="20" name="cpassword" id="cpassword" class="inpQQem Reg_form_he"/>&nbsp;<span id="dcpassword" class="f_red"></span>
          <label ></label>
      </div>
    </div>
    <div class="N_Code">
     <span class="N_Left"><b> * </b>验证码： </span>
     <div>
      <?php include template('captcha', 'chip');?> <span id="dcaptcha" class="f_red"></span>
          <label ></label>
      </div>
    </div>
    <div class="N_RPWD clear zhtishiinfoPWD">
     <span class="N_Left"><b></b><i>提示信息：</i></span>
     <div class="">
          <p><b>提交后，系统将发送一封邮件至您的注册Email，请接收邮件完成验证</b></p>
      </div>
    </div>
    <div class="N_RPWD">
     <span class="N_Left"><b> &nbsp; </b></span>
     <div class="zhPWD_btn">
         <input type="submit" name="submit" value=" 下一步 " class="btn"/>
         
      </div>
    </div>
    </div>
    </div>
    <div class="N_Res_PWD_rt">
      <div class="N_Res_PWD_rt_t">
        >>  我已经找回密码，现在就 <i><a href="">登录</a></i>
      </div>
      <div class="N_Res_PWD_rt_t2">
          <a href="">登录</a>
          <p>请妥善保管好密码</p>
      </div>
    </div>
  </div>
  </form>
<script type="text/javascript">
function input_msg(id){
    if(id=="username"){
    msg="请输入邮箱/用户名/手机号";
    }else if(id=="password"){
    msg="6-20位字符，可使用字母、数字或符号的组合";
    }else if(id=="cpassword"){
    msg="请再次输入密码";
    }
   
    
Dd('d'+id).innerHTML='<span class="Reg_form_black">'+msg+'</span>';
}
function check() {
if(Dd('username').value.length < 1) {
Dd('dusername').innerHTML='<span class="Reg_form_red">请填写名称</span>';
return false;
}
if(Dd('email').value.length < 7) {
Dd('demail').innerHTML='<span class="Reg_form_red">请填写注册Email地址</span>';
return false;
}
if(Dd('password').value.length > <?php echo $MOD['maxpassword'];?> || Dd('password').value.length < <?php echo $MOD['minpassword'];?>) {
Dd('dpassword').innerHTML='<span class="Reg_form_red">密码长度应为<?php echo $MOD['minpassword'];?>-<?php echo $MOD['maxpassword'];?>字符</span>';
return false;
}
if(Dd('password').value != Dd('cpassword').value) {
Dd('cpassword').innerHTML='<span class="Reg_form_red">两次输入的密码不一致</span>';
return false;
}
if(!is_captcha(Dd('captcha').value)) {
Dd('captcha').innerHTML='<span class="Reg_form_red">请填写正确的验证码</span>';
return false;
}
return true;
}
</script>
<?php include template('footer2');?>
<?php } ?>
