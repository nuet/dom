<?php defined('IN_DESTOON') or exit('Access Denied');?><input name="captcha" id="captcha" class="inp_Code Reg_form_he" type="text" onfocus="showcaptcha();" value="点击显示" onkeyup="checkcaptcha(this.value);" onblur="checkcaptcha(this.value);" class="f_gray" />&nbsp;<img src="<?php echo DT_SKIN;?>image/loading.gif" title="验证码,看不清楚?请点击刷新&#10;字母不区分大小写" alt="" align="absmiddle" id="captchapng" onclick="reloadcaptcha();" style="display:none;cursor:pointer;"/>
<script type="text/javascript">
function showcaptcha() {
if(Dd('captchapng').style.display=='none') {
Dd('captchapng').style.display='';
}
if(Dd('captchapng').src.indexOf('loading.gif') != -1) {
Dd('captchapng').src='<?php echo DT_PATH;?>api/captcha.png.php?action=image';
}
if(Dd('captcha').value=='点击显示') {
Dd('captcha').value='';
}
Dd('captcha').className = 'inp_Code Reg_form_he';
}
function reloadcaptcha() {
Dd('captchapng').src = '<?php echo DT_PATH;?>api/captcha.png.php?action=image&refresh='+Math.random();
Dd('ccaptcha').innerHTML = '';
Dd('captcha').value = '';
}
function checkcaptcha(s) {
if(!is_captcha(s)) return;
makeRequest('action=captcha&captcha='+s, AJPath, '_checkcaptcha');
}
function _checkcaptcha() {    
if(xmlHttp.readyState==4 && xmlHttp.status==200) {
if(xmlHttp.responseText == '0') {
Dd('dcaptcha').innerHTML = '&nbsp;&nbsp;<img src="<?php echo DT_SKIN;?>image/check_right.gif" align="absmiddle"/>';
} else {
Dd('dcaptcha').focus;
Dd('dcaptcha').innerHTML = '<span class="Reg_form_red1">验证码错误</span>';
}
}
}
</script>