<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<script>
</script>
<script type="text/javascript">var errimg = '<?php echo DT_SKIN;?>image/nopic50.gif';</script>
<div class="m">
<div class="left_box">
<div class="pos">
您的位置: <a href="<?php echo DT_PATH;?>">首页</a> 
&raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a>
&raquo; 提交订单
</div>
<div class="b10">&nbsp;</div>
<form method="post" action="<?php echo $MOD['linkurl'];?>buy.php" onsubmit="return check();">
<input type="hidden" name="submit" value="1"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<div>
<div class="f_r" style="padding:10px 50px 0 0;"><a href="<?php echo $MOD['linkurl'];?>/show.php?itemid=<?php echo $itemid;?>">返回重新挑选</a></div>
&nbsp;&nbsp;<img src="<?php echo DT_SKIN;?>image/buy_1.gif" width="160" height="30" alt=""/> 
</div>
<div style="margin:10px 40px 10px 40px;" class="c_b">
<table cellpadding="6" cellspacing="1" width="100%" bgcolor="#E4E4E4">
<tr align="center" bgcolor="#EEEEEE">
<td width="60">图片</td>
<td width="60">商品</td>
<td width="200">是否需要发票</td>
<td width="60">价格</td>
</tr>
<tr align="center" bgcolor="#FFFFFF">
<td><a href="<?php echo $item['linkurl'];?>" target="_blank"><img src="<?php echo $item['thumb'];?>" width="50" alt="<?php echo $item['title'];?>"  onerror="this.src=errimg;"/></a></td>
<td align="left"><a href="<?php echo $item['linkurl'];?>" target="_blank" class="px13 f_b"><?php echo $item['title'];?></a>
<div style="padding:8px 0 0 0;color:#666666;">套餐：<?php echo $tc;?></div>
<div style="padding:8px 0 0 0;color:#666666;">移动版：<?php echo $mob;?></div>
<div style="padding:8px 0 0 0;color:#666666;">机房：<?php echo $jf;?></div>
<div style="padding:8px 0 0 0;color:#666666;">年限：<?php echo $year;?></div>
<div style="padding:8px 0 0 0;color:#666666;">语言：<?php echo $language;?></div>
<div style="padding:3px 0 3px 0;">域名：<input type="text" name="note" id="ym" value="" size="45" style="border:#CCCCCC 1px solid;" maxlength="100" title="限100字以内"/>&nbsp;
<span id="dym" class="f_red"></span></div>
</td>
<td><input type="radio" name="fapiao" value='1' id='num_1' checked onclick="alter('1', '-')"/>需要发票 <input type="radio" name="fapiao" id="num_0" value='0' onclick="alter('0', '+')"/>不需要发票  </td>
<td><span class="f_price" id="price_<?php echo $itemid;?>"><?php echo $item['price'];?></span></td>
</tr>
</table>
<div class="b10">&nbsp;</div>
<div style="border-top:#CCCCCC 1px solid;background:#F6F6F6;padding:20px 40px 20px 0;color:#666666;text-align:right;">
总价：<span class="f_red f_b px16" id="total_amount"><?php echo $item['price'];?></span> 元</div>
</div>
<div class="b10">&nbsp;</div>
<div>&nbsp;&nbsp;<img src="<?php echo DT_SKIN;?>image/buy_2.gif" width="160" height="30" alt=""/></div>
<div style="padding:20px;margin:10px 40px 20px 40px;background:#F4F4F4;" class="c_b px13">
<table cellpadding="10" cellspacing="0" width="100%">
<tr>
<td width="100"><span class="f_red">&nbsp;</span> 常用地址：</td>
<td class="px13" bgcolor="#F9F9F9">
<?php if($address) { ?>
<?php if(is_array($address)) { foreach($address as $k => $v) { ?>
<div>
<?php if($k == 0) { ?><span class="f_r"><a href="<?php echo $MODULE['2']['linkurl'];?>address.php?action=add" target="_blank">[新增地址]</a>&nbsp;&nbsp;<a href="<?php echo $MODULE['2']['linkurl'];?>address.php" target="_blank">[管理地址]</a></span><?php } ?>
<input type="radio" name="addr" id="addr_<?php echo $k;?>" value="<?php echo $v['name'];?>|<?php echo $v['address'];?>|<?php echo $v['postcode'];?>|<?php echo $v['truename'];?>|<?php echo $v['mobile'];?>|<?php echo $v['telephone'];?>" onclick="Adr(this.value);"<?php if($k == 0) { ?> checked<?php } ?>
/><label for="addr_<?php echo $k;?>"> <?php echo $v['name'];?> <?php echo $v['postcode'];?> <?php echo $v['address'];?> (<?php echo $v['truename'];?>) <?php echo $v['mobile'];?></label></div>
<div class="b5"></div>
<?php } } ?>
<?php } else { ?>
<strong>暂无常用收货地址</strong>&nbsp;&nbsp;<a href="<?php echo $MODULE['2']['linkurl'];?>address.php?action=add" target="_blank">[新增地址]</a>&nbsp;&nbsp;<a href="<?php echo $MODULE['2']['linkurl'];?>address.php" target="_blank">[管理地址]</a>
<?php } ?>
</td>
</tr>
<tr>
<td><span class="f_red">*</span> 公司名称</td>
<td><input type="text" size="10" name="add[name]" id="name" value="<?php echo $user['name'];?>"/> <span id="dname" class="f_red"></span></td>
</tr>
<tr>
<td><span class="f_red">*</span> 公司地址：</td>
<td><span id="addr_areaid"><?php echo ajax_area_select('add[areaid]', '请选择', $user['areaid']);?> </span><input type="text" size="60" name="add[address]" id="address" value="<?php echo $user['address'];?>"/> <span id="daddress" class="f_red"></span></td>
</tr>
<tr>
<td><span class="f_red">*</span> 邮政编码：</td>
<td><input type="text" size="10" name="add[postcode]" id="postcode" value="<?php echo $user['postcode'];?>"/> <span id="dpostcode" class="f_red"></span></td>
</tr>
<tr>
<td><span class="f_red">*</span> 真实姓名：</td>
<td><input type="text" size="10" name="add[truename]" id="truename" value="<?php echo $user['truename'];?>"/> <span id="dtruename" class="f_red"></span></td>
</tr>
<tr>
<td><span class="f_red">*</span> 手机号码：</td>
<td><input type="text" size="20" name="add[mobile]" id="mobile" value="<?php echo $user['mobile'];?>"/> <span id="dmobile" class="f_red"></span></td>
</tr>
<tr>
<td><span class="f_red">&nbsp;</span> 电话号码：</td>
<td><input type="text" size="20" name="add[telephone]" id="telephone" value="<?php echo $user['telephone'];?>"/> <span id="dtelephone" class="f_red"></span></td>
</tr>
</table>
</div>
<table cellpadding="0" cellspacing="0" width="100%">
<tr align="center">
<td width="280"><input type="image" src="<?php echo DT_SKIN;?>image/btn_buynow.gif" title="提交订单"/></td>
<td width="280"><a href="<?php echo $MOD['linkurl'];?>" onclick="return confirm('订单尚未完成，确定要离开此页面吗？');"><img src="<?php echo DT_SKIN;?>image/btn_browse.gif" width="106" height="33" alt="继续购物"/></a></td>
<td >&nbsp;</td>
</tr>
<tr align="center">
<td class="f_gray">如果您已经确定购买，请您提交订单</td>
<td class="f_gray">您也可以返回到<?php echo $MOD['name'];?>首页，继续挑选商品</td>
<td height="50">&nbsp;</td>
</tr>
</table>
<input type="hidden" name="language" value='<?php echo $language;?>'/>
<input type="hidden" name="rand" value='<?php echo $rand;?>'/>
</form>
</div>
</div>
<script type="text/javascript">
$(function(){
var rand=<?php echo $rand;?>;
    itemids = <?php echo $itemid;?>;
var p= Dd('price_'+itemids).innerHTML;
    price_rand='price_'+rand;
    setCookie("price_"+rand+"",p);
})
function check() {

var l;
var f;
f = 'name';
l = Dd(f).value.length;
if(l < 5) {
Dmsg('请填写公司名称', f);
return false;
}

f = 'address';
l = Dd(f).value.length;
if(l < 5) {
Dmsg('请填写公司地址', f);
return false;
}
f = 'postcode';
l = Dd(f).value.length;
if(l < 6) {
Dmsg('请填写邮政编码', f);
return false;
}
f = 'truename';
l = Dd(f).value.length;
if(l < 2) {
Dmsg('请填写真实姓名', f);
return false;
}
f = 'mobile';
if(!Dd(f).value.match(/^0?(13|15|18|14)[0-9]{9}$/)) {
Dmsg('请填写正确的手机号码', f);
return false;
}
 f="ym";
l = Dd(f).value.length;
if(!Dd('ym').value.match(/(http[s]?|ftp):\/\/[^\/\.]+?\..+\w$/i)) {
Dmsg('请输入的域名，如http://www.omooo.com.cn', f);
Df(f);
return false;
    }

var m1 = <?php echo $_money;?>;
var m2 = parseFloat(Dd('total_amount').innerHTML);

var m3 = m2 - m1;
if(m2 > m1) {
if(confirm('账户余额不足，需充值'+m3+'<?php echo $DT['money_unit'];?>，是否立即充值？')) {
window.open('<?php echo $MODULE['2']['linkurl'];?>charge.php?action=pay&amount='+m3);
}
return false;
}
return confirm('您确认商品及收货地址无误，提交此订单吗？');
}
<?php if($item['logistic']) { ?>
function Adr(s) {
var t = s.split('|');
try {
Dd('areaid_1').value = 0;
Dd('name').value=t[0];
Dh('addr_areaid');
Dd('address').value = t[1];
Dd('postcode').value = t[2];
Dd('truename').value = t[3];
Dd('mobile').value = t[4];
Dd('telephone').value = t[5];
}
catch (e) {}
}
<?php if($address) { ?>Adr(Dd('addr_0').value);<?php } ?>
<?php } ?>
function alter(i, t) {
    
 
var itemids = <?php echo $itemid;?>;
if(t == '+') {
var maxa = <?php echo $item['price'];?>;
Dd('price_'+itemids).innerHTML = (maxa * 0.92).toFixed(2);
Dd('total_amount').innerHTML  =(maxa * 0.92).toFixed(2);
setCookie(price_rand,(maxa * 0.92).toFixed(2));


} else {
var maxa = <?php echo $item['price'];?>;
Dd('price_'+itemids).innerHTML =<?php echo $item['price'];?>.toFixed(2);
Dd('total_amount').innerHTML  =<?php echo $item['price'];?>.toFixed(2);



}
}
function calculate() {
var itemids = [<?php echo $itemid;?>];
var _good = itemid = 0;
for(var i = 0; i < itemids.length; i++) {
itemid = itemids[i];
var num, good;
num = parseInt(Dd('number_'+itemid).checked);
if(isNaN(num) || num < 0) Dd('number_'+itemid).value = num = 1;
good = parseFloat(Dd('price_'+itemid).innerHTML)*num;
Dd('total_'+itemid).innerHTML = good.toFixed(2);
_good += good;
}
Dd('total_amount').innerHTML = _good.toFixed(2);
}
calculate();
</script>
<script>
//写cookies
function setCookie(name,value) 
{ 
 var Days = 30; 
 var exp = new Date(); 
 exp.setTime(exp.getTime() + Days*24*60*60*1000); 
 document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString(); 
}
//读取cookies 
function getCookie(name) 
{ 
 var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
 
 if(arr=document.cookie.match(reg))
 
  return unescape(arr[2]); 
 else 
  return null; 
}
//删除cookies 
function delCookie(name) 
{ 
 var exp = new Date(); 
 exp.setTime(exp.getTime() - 1); 
 var cval=getCookie(name); 
 if(cval!=null) 
  document.cookie= name + "="+cval+";expires="+exp.toGMTString(); 
} 
</script>
<?php include template('footer');?>