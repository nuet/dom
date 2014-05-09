<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<script type="text/javascript">var errimg = '<?php echo DT_SKIN;?>image/nopic50.gif';</script>
<div class="m">
<div class="left_box">
<div class="pos">
您的位置: <a href="<?php echo DT_PATH;?>">首页</a> 
&raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a>
&raquo; 提交订单
</div>
<div class="b10">&nbsp;</div>
<?php if($tags) { ?>
<form method="post" action="<?php echo $MOD['linkurl'];?>buy.php" onsubmit="return check();">
<input type="hidden" name="submit" value="1"/>
<div>
<div class="f_r" style="padding:10px 50px 0 0;"><a href="<?php echo $MOD['linkurl'];?>cart.php" class="b">返回购物车重新挑选</a></div>
&nbsp;&nbsp;<img src="<?php echo DT_SKIN;?>image/buy_1.gif" width="160" height="30" alt=""/> 
</div>
<div style="margin:10px 40px 10px 40px;" class="c_b">
<table cellpadding="6" cellspacing="1" width="100%" bgcolor="#E4E4E4">
<tr align="center" bgcolor="#EEEEEE">
<td width="60">图片</td>
<td>商品</td>
<td width="60">库存</td>
<td width="60">价格</td>
<td width="100">年限</td>
<td width="60">联系卖家</td>
<td width="60">运费</td>
<td width="90">小计</td>
</tr>
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<tr align="center" bgcolor="<?php if($i%2==1) { ?>#F6F6F6<?php } else { ?>#FFFFFF<?php } ?>
">
<td><a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo $t['thumb'];?>" width="50" alt="<?php echo $t['alt'];?>"  onerror="this.src=errimg;"/></a></td>
<td align="left" style="line-height:24px;color:#666666;">
<a href="<?php echo $t['linkurl'];?>" target="_blank" class="b" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a><br/>
<?php if($t['vip']) { ?><img src="<?php echo DT_SKIN;?>image/vip_<?php echo $t['vip'];?>.gif" alt="<?php echo VIP;?>" title="<?php echo VIP;?>:<?php echo $t['vip'];?>级" align="absmiddle"/> <?php } ?>
<a href="<?php echo userurl($t['username']);?>" target="_blank"><?php echo $t['company'];?></a>
<div style="padding:3px 0 3px 0;">域名：<input type="text" name="post[<?php echo $t['key'];?>][note]" id="ym" value="" size="45" style="border:#CCCCCC 1px solid;" maxlength="100" title="限100字以内"/>&nbsp;
<span id="dym" class="f_red"></span></div>
品牌:<?php if($t['brand']) { ?><?php echo $t['brand'];?><?php } else { ?>未填写<?php } ?>
&nbsp;<?php if($t['m1']) { ?><?php echo $t['n1'];?>:<?php echo $t['m1'];?>&nbsp;<?php } ?>
<?php if($t['m2']) { ?><?php echo $t['n2'];?>:<?php echo $t['m2'];?>&nbsp;<?php } ?>
<?php if($t['m3']) { ?><?php echo $t['n3'];?>:<?php echo $t['m3'];?>&nbsp;<?php } ?>
</td>
<td><?php echo $t['amount'];?><span class="dsn" id="amount_<?php echo $t['key'];?>"><?php echo $t['amount'];?></span></td>
<td><span class="f_price" id="price_<?php echo $t['key'];?>"><?php echo $t['price'];?></span></td>
<td><img src="<?php echo DT_SKIN;?>image/arrow_l.gif" width="16" height="8" alt="减少" class="c_p" onclick="alter('<?php echo $t['key'];?>', '-')"/> <input type="text" name="post[<?php echo $t['key'];?>][number]" value="<?php echo $t['number'];?>" size="3" class="cc_inp" id="number_<?php echo $t['key'];?>" onblur="calculate();"/> <img src="<?php echo DT_SKIN;?>image/arrow_r.gif" width="16" height="8" alt="增加" class="c_p" onclick="alter('<?php echo $t['key'];?>', '+')"/><span class="dsn" id="amount_<?php echo $t['key'];?>"><?php echo $t['amount'];?></span></td>
<td>
<?php if($DT['im_web']) { ?><?php echo im_web($t['username'].'&mid='.$moduleid.'&itemid='.$t['itemid']);?>&nbsp;<?php } ?>
<?php if($t['qq'] && $DT['im_qq']) { ?><?php echo im_qq($t['qq']);?>&nbsp;<?php } ?>
<?php if($t['ali'] && $DT['im_ali']) { ?><?php echo im_ali($t['ali']);?>&nbsp;<?php } ?>
<?php if($t['msn'] && $DT['im_msn']) { ?><?php echo im_msn($t['msn']);?>&nbsp;<?php } ?>
<?php if($t['skype'] && $DT['im_skype']) { ?><?php echo im_skype($t['skype']);?></a>&nbsp;<?php } ?>
</td>
<td><span class="f_price" id="fee_<?php echo $t['key'];?>"><?php echo $t['fee_start_1'];?></span></td>
<td><span class="f_price" id="total_<?php echo $t['key'];?>"><?php echo $t['price'];?></span></td>
</tr>
<?php } } ?>
</table>
<div class="b10">&nbsp;</div>
<div class="cart_foot" style="text-align:left;"><span class="f_r">共选中 <span class="f_red f_b px16" id="total_good"><?php echo $total;?></span> 种商品&nbsp;&nbsp;&nbsp;&nbsp; 总价：<span class="f_red f_b px16" id="total_amount"><?php echo $total_amount;?></span> 元</span>
&nbsp;&nbsp;提示：实际的运费可能因为收货地址的不同而有差异，具体以提交之后系统计算或与卖家协商为准
</div>
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
<input type="radio" name="addr" id="addr_<?php echo $k;?>" value="<?php echo $v['address'];?>|<?php echo $v['postcode'];?>|<?php echo $v['truename'];?>|<?php echo $v['mobile'];?>|<?php echo $v['telephone'];?>" onclick="Adr(this.value);"<?php if($k == 0) { ?> checked<?php } ?>
/><label for="addr_<?php echo $k;?>"> <?php echo $v['postcode'];?> <?php echo $v['address'];?> (<?php echo $v['truename'];?>) <?php echo $v['mobile'];?></label></div>
<div class="b5"></div>
<?php } } ?>
<?php } else { ?>
<strong>暂无常用收货地址</strong>&nbsp;&nbsp;<a href="<?php echo $MODULE['2']['linkurl'];?>address.php?action=add" target="_blank">[新增地址]</a>&nbsp;&nbsp;<a href="<?php echo $MODULE['2']['linkurl'];?>address.php" target="_blank">[管理地址]</a>
<?php } ?>
</td>
</tr>
<tr>
<td><span class="f_red">*</span> 收货地址：</td>
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
<td width="480"><input type="image" src="<?php echo DT_SKIN;?>image/btn_buynow.gif" title="提交订单"/></td>
<td width="480"><a href="<?php echo $MOD['linkurl'];?>" onclick="return confirm('订单尚未完成，确定要离开此页面吗？');"><img src="<?php echo DT_SKIN;?>image/btn_browse.gif" width="106" height="33" alt="继续购物"/></a></td>
<td >&nbsp;</td>
</tr>
<tr align="center">
<td class="f_gray">提交订单待卖家确认后，支付费用</td>
<td class="f_gray">您也可以返回到<?php echo $MOD['name'];?>首页，继续挑选商品</td>
<td height="50">&nbsp;</td>
</tr>
</table>
</form>
<?php } else { ?>
<div style="padding:80px;" class="t_c px14 f_b">您还没有挑选商品，赶快行动吧！马上去 <a href="<?php echo $MOD['linkurl'];?>" class="b">挑选商品</a></div>
<?php } ?>
</div>
</div>
<?php echo load('guest.js');?>
<script type="text/javascript">
function check() {
if(Dd('total_amount').innerHTML == '0.00') {
alert('订单总额为0.00，请检查商品年限');
window.scroll(0, 0);
return false;
}
var l;
var f;
f = 'address';
l = Dd(f).value.length;
if(l < 5) {
Dmsg('请填写街道地址', f);
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
l = Dd(f).value.length;
if(l < 11) {
Dmsg('请填写手机号码', f);
return false;
}
 f="ym";
l = Dd(f).value.length;
if(!Dd('ym').value.match(/(http[s]?|ftp):\/\/[^\/\.]+?\..+\w$/i)) {
Dmsg('请输入的域名，如http://www.omooo.com.cn', f);
   Df(f);
return false;
    }

return confirm('您确认商品及收货地址无误，提交此订单吗？');
}
function Adr(s) {
var t = s.split('|');
try {
Dd('areaid_1').value = 0;
Dh('addr_areaid');
Dd('address').value = t[0];
Dd('postcode').value = t[1];
Dd('truename').value = t[2];
Dd('mobile').value = t[3];
Dd('telephone').value = t[4];
}
catch (e) {}
}
<?php if($address) { ?>Adr(Dd('addr_0').value);<?php } ?>
function alter(i, t) {
if(t == '+') {
var maxa = parseFloat(Dd('amount_'+i).innerHTML);
if(maxa && Dd('number_'+i).value >= maxa) return;
Dd('number_'+i).value =  parseInt(Dd('number_'+i).value) + 1;
} else {
var mina = 1;
if(Dd('number_'+i).value <= mina) return;
Dd('number_'+i).value =  parseInt(Dd('number_'+i).value) - 1;
}
calculate();
}
function calculate() {
var itemids = [<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?><?php if($i) { ?>,<?php } ?>
'<?php echo $t['key'];?>'<?php } } ?>];
var _good = itemid = 0;
for(var i = 0; i < itemids.length; i++) {
itemid = itemids[i];
var num, good, maxa, mina;
num = parseInt(Dd('number_'+itemid).value);
maxa = parseFloat(Dd('amount_'+itemid).innerHTML);
mina = 1;
if(num < mina) Dd('number_'+itemid).value = num = mina;
if(maxa && num > maxa) Dd('number_'+itemid).value = num = maxa;
if(isNaN(num) || num < 0) Dd('number_'+itemid).value = num = mina;
good = parseFloat(Dd('price_'+itemid).innerHTML)*num;
Dd('total_'+itemid).innerHTML = good.toFixed(2);
if(Dd('express_'+itemid).value > 0) {
var fee = parseFloat(Dd('fee_start_'+itemid+'_'+Dd('express_'+itemid).value).value) + parseFloat(Dd('fee_step_'+itemid+'_'+Dd('express_'+itemid).value).value)*(num-1);
Dd('fee_'+itemid).innerHTML = fee.toFixed(2);
Dd('total_'+itemid).innerHTML = (good+fee).toFixed(2);
_good += fee;
}
_good += good;
}
Dd('total_amount').innerHTML = _good.toFixed(2);
}
<?php if($tags) { ?>calculate();<?php } ?>
</script>
<?php include template('footer');?>