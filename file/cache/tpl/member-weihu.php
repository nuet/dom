<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', $module);?>
<script type="text/javascript">c(2);var errimg = '<?php echo DT_SKIN;?>image/nopic50.gif';</script>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="action_order"><a href="weihu.php"><span>我的维护订单</span></a></td>
<td class="tab_nav">&nbsp;</td>
<?php if($DT['trade']) { ?>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="action_bind"><a href="weihu.php?action=bind"><span>绑定<?php echo $DT['trade_nm'];?>帐号</span></a></td>
<?php } ?>
</tr>
</table>
</div>
<?php if($action == 'bind') { ?>
<?php if($member['vtrade']) { ?>
<table cellpadding="10" cellspacing="1" class="tb">
<tr>
<td class="tl"><?php echo $DT['trade_nm'];?>帐号</td>
<td class="tr"><strong><?php echo $member['trade'];?></strong></td>
</tr>
<tr>
<td class="tl">绑定状态</td>
<td class="tr f_green">已验证</td>
</tr>
<tr>
<td class="tl"><?php echo $DT['trade_nm'];?></td>
<td class="tr"><a href="<?php echo $DT['trade_hm'];?>" target="_blank" class="l">交易管理</a></td>
</tr>
</table>
<?php } else { ?>
<form method="post" action="weihu.php">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<table cellpadding="10" cellspacing="1" class="tb">
<tr>
<td class="tl"><?php echo $DT['trade_nm'];?>网站</td>
<td class="tr">
还没有 <img src="<?php echo DT_PATH;?>api/trade/<?php echo $DT['trade'];?>/logo.gif" alt="<?php echo $DT['trade_nm'];?>" align="absmiddle"/> 会员帐号？ <a href="<?php echo $DT['trade_hm'];?>" target="_blank" class="l">点击了解和注册</a>
</td>
</tr>
<tr>
<td class="tl"><?php echo $DT['trade_nm'];?>帐号</td>
<td class="tr"><input type="text" size="30" name="trade" id="trade" value="<?php echo $member['trade'];?>"/> <input type="submit" name="submit" value="<?php if($member['trade']) { ?>更 新<?php } else { ?>绑 定<?php } ?>
" class="btn"/></td>
</tr>
<tr>
<td class="tl">绑定状态</td>
<td class="tr f_red">未验证</td>
</tr>
<tr>
<td class="tl">验证方法</td>
<td class="tr f_gray">通过<?php echo $DT['trade_nm'];?>成功交易后系统自动验证</td>
</tr>
<tr>
<td class="tl">绑定说明</td>
<td class="tr f_gray">卖家必须绑定<?php echo $DT['trade_nm'];?>帐号用于收款，买家无须绑定</td>
</tr>
</table>
</form>
<?php } ?>
<script type="text/javascript">s('trade');m('action_bind');</script>
<?php } else if($action == 'update') { ?>
<?php if($step == 'edit_price') { ?>
<form method="post" action="weihu.php" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">修改价格</td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr">T<?php echo $td['itemid'];?></td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['title'];?></a></td>
</tr>
<tr>
<td class="tl">商品图片</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank"><img src="<?php if($td['thumb']) { ?><?php echo $td['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60"/></a></td>
</tr>
<tr>
<td class="tl">买家 </td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo im_web($td['buyer']);?>&nbsp;<?php } ?>
<a href="<?php echo userurl($td['buyer'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['buyer'];?></a></td>
</tr>

<tr>
<td class="tl">买家域名</td>
<td class="tr"><?php echo $td['note'];?></td>
</tr>
<tr>
<td class="tl">下单时间</td>
<td class="tr"><?php echo $td['adddate'];?></td>
</tr>
<tr>
<td class="tl">商品单价</td>
<td class="tr">￥<?php echo $td['price'];?></td>
</tr>
<tr>
<td class="tl">购买数量</td>
<td class="tr"><?php echo $td['number'];?></td>
</tr>
<tr>
<td class="tl">订单金额</td>
<td class="tr f_red">￥<?php echo $td['amount'];?></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span>附加名称</td>
<td class="tr f_gray"><input type="text" size="10" name="fee_name" id="fee_name" value="<?php echo $td['fee_name'];?>"/> 例如运费、退款、优惠等&nbsp;<span id="dfee_name" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span>附加金额</td>
<td class="tr f_gray"><input type="text" size="5" name="fee" id="fee" value="<?php echo $td['fee'];?>"/>  <?php echo $DT['money_unit'];?> 可以为负值&nbsp;<span id="dfee" class="f_red"></span></td>
</tr>
<?php if($td['status'] < 1) { ?>
<tr>
<td class="tl"></td>
<td class="tr"><input type="checkbox" name="confirm_order" value="1"/> 同时确认订单</td>
</tr>
<?php } ?>
<?php if($_userid && $DT['sms']) { ?>
<tr>
<td class="tl"></td>
<td class="tr"><input type="checkbox" name="sendsms" value="1"/> 短信通知买家 (<a href="sms.php" target="_blank" class="t">我的可用短信 <strong class="f_blue"><?php echo $_sms;?></strong> 条</a>)</td>
</tr>
<?php } ?>
<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
if(!Dd('fee_name').value) {
Dmsg('请填写附加金额名称', 'fee_name');
return false;
}
if(!Dd('fee').value) {
Dmsg('请填写附加金额', 'fee');
return false;
}
if(Dd('fee').value < 0 && Dd('fee').value < -<?php echo $td['amount'];?>) {
Dmsg('附加金额不能小于-<?php echo $td['amount'];?>', 'fee');
return false;
}
return true;
}
</script>
<script type="text/javascript">s('trade');m('action');</script>
<?php } else if($step == 'detail') { ?>
<div class="t2">订单详情</div>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">订单单号</td>
<td class="tr">T<?php echo $td['itemid'];?> <?php if($DT['trade']) { ?>(<?php echo $DT['trade_nm'];?>订单单号:<a href="https://lab.alipay.com/consume/queryTradeDetail.htm?tradeNo=<?php echo $td['trade_no'];?>" target="_blank" class="t"><?php echo $td['trade_no'];?></a>)<?php } ?>
</td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['title'];?></a></td>
</tr>
<tr>
<td class="tl">商品图片</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank"><img src="<?php if($td['thumb']) { ?><?php echo $td['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60"/></a></td>
</tr>
<?php if($td['seller'] == $_username) { ?>
<tr>
<td class="tl">买家 </td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo im_web($td['buyer']);?>&nbsp;<?php } ?>
<a href="<?php echo userurl($td['buyer'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['buyer'];?></a></td>
</tr>
<?php } else if($td['buyer'] == $_username) { ?>
<tr>
<td class="tl">卖家</td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo im_web($td['seller']);?>&nbsp;<?php } ?>
<a href="<?php echo userurl($td['seller'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['seller'];?></a></td>
</tr>
<?php } ?>
</table>
<div class="t2">订单信息</div>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">邮编</td>
<td class="tr"><?php echo $td['buyer_postcode'];?></td>
</tr>
<tr>
<td class="tl">地址</td>
<td class="tr"><?php echo $td['buyer_address'];?></td>
</tr>
<tr>
<td class="tl">姓名</td>
<td class="tr"><?php echo $td['buyer_name'];?></td>
</tr>
<tr>
<td class="tl">手机</td>
<td class="tr"><?php echo $td['buyer_mobile'];?> <?php if($DT['sms']) { ?>&nbsp;&nbsp;<a href="sms.php?action=add&auth=<?php echo encrypt($td['buyer_mobile']);?>" target="_blank"><img src="<?php echo DT_SKIN;?>image/sendsms.gif" align="absmiddle" title="发送短信" alt=""/></a><?php } ?>
</td>
</tr>
<tr>
<td class="tl">电话</td>
<td class="tr"><?php echo $td['buyer_phone'];?></td>
</tr>

<tr>
<td class="tl">域名</td>
<td class="tr"><?php echo $td['note'];?></td>
</tr>

</table>
<div class="t2">价格信息</div>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">商品单价</td>
<td class="tr">￥<?php echo $td['price'];?></td>
</tr>
<tr>
<td class="tl">购买数量</td>
<td class="tr"><?php echo $td['number'];?></td>
</tr>
<?php if($td['fee_name'] && $td['fee']) { ?>
<tr>
<td class="tl"><?php echo $td['fee_name'];?></td>
<td class="tr">￥<?php echo $td['fee'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl">订单总额</td>
<td class="tr f_red">￥<?php echo $td['total'];?></td>
</tr>
</table>
<div class="t2">订单状态</div>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">下单时间</td>
<td class="tr"><?php echo $td['adddate'];?></td>
</tr>
<tr>
<td class="tl">最后更新</td>
<td class="tr"><?php echo $td['updatedate'];?></td>
</tr>
<?php if($td['send_time']) { ?>
<tr>
<td class="tl">发货时间</td>
<td class="tr"><?php echo $td['send_time'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl">订单状态</td>
<td class="tr"><?php echo $_status[$td['status']];?></td>
</tr>
<?php if($td['buyer_reason']) { ?>
<tr>
<td class="tl">退款理由</td>
<td class="tr"><?php echo $td['buyer_reason'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl"> </td>
<td class="tr"><input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">s('trade');m('<?php echo $nav;?>');</script>
<?php } else if($step == 'pay') { ?>
<form method="post" action="weihu.php" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $CFG['url'];?>member/weihu.php"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">订单支付</td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr">T<?php echo $td['itemid'];?> <?php if($DT['trade']) { ?>(<?php echo $DT['trade_nm'];?>订单单号:<?php echo $td['trade_no'];?>)<?php } ?>
</td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['title'];?></a></td>
</tr>
<tr>
<td class="tl">商品图片</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank"><img src="<?php if($td['thumb']) { ?><?php echo $td['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60"/></a></td>
</tr>
<tr>
<td class="tl">卖家</td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo im_web($td['seller']);?>&nbsp;<?php } ?>
<a href="<?php echo userurl($td['seller'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['seller'];?></a></td>
</tr>
<tr>
<td class="tl">下单时间</td>
<td class="tr"><?php echo $td['adddate'];?></td>
</tr>
<tr>
<td class="tl">期望物流</td>
<td class="tr"><?php echo $td['buyer_receive'];?></td>
</tr>
<tr>
<td class="tl">域名</td>
<td class="tr"><?php echo $td['note'];?></td>
</tr>
<tr>
<td class="tl">商品单价</td>
<td class="tr">￥<?php echo $td['price'];?></td>
</tr>
<tr>
<td class="tl">购买数量</td>
<td class="tr"><?php echo $td['number'];?></td>
</tr>
<?php if($td['fee']>0.1) { ?>
<tr>
<td class="tl"><?php echo $td['fee_name'];?></td>
<td class="tr">￥<?php echo $td['fee'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl">实付金额</td>
<td class="tr f_red">￥<?php echo $money;?></td>
</tr>
<tr>
<td class="tl">帐户余额</td>
<td class="tr f_blue">￥<?php echo $_money;?></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 支付密码</td>
<td class="tr"><?php include template('password', 'chip');?>&nbsp;<span id="dpassword" class="f_red"></span></td>
</tr>
<?php if($_userid && $DT['sms']) { ?>
<tr>
<td class="tl"></td>
<td class="tr"><input type="checkbox" name="sendsms" value="1"/> 短信通知卖家发货 (<a href="sms.php" target="_blank" class="t">我的可用短信 <strong class="f_blue"><?php echo $_sms;?></strong> 条</a>)</td>
</tr>
<?php } ?>
<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
if(Dd('password').value == '') {
Dmsg('请填写支付密码', 'password');
return false;
}
return confirm('您确认此订单，并立即支付吗？');
}
</script>
<script type="text/javascript">s('trade');m('action_order');</script>
<?php } else if($step == 'send_goods') { ?>
<form method="post" action="weihu.php" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">确认发货</td>
</tr>

<tr>
<td class="tl">发货时间</td>
<td class="tr f_gray"><input type="text" size="20" name="send_time" id="send_time" value="<?php echo $send_time;?>"/></td>
</tr>
<?php if($_userid && $DT['sms']) { ?>
<tr>
<td class="tl"></td>
<td class="tr"><input type="checkbox" name="sendsms" value="1"/> 短信通知买家已发货 (<a href="sms.php" target="_blank" class="t">我的可用短信 <strong class="f_blue"><?php echo $_sms;?></strong> 条</a>)</td>
</tr>
<?php } ?>
<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
return confirm('您确认货物已经发出，并且以上信息填写无误吗？\n\n此操作将不可撤销');
}
</script>
<script type="text/javascript">s('trade');m('action');</script>
<?php } else if($step == 'add_time') { ?>
<form method="post" action="weihu.php" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">延长买家确认时间</td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span>延长时间</td>
<td class="tr f_gray"><input type="text" size="10" name="add_time" id="add_time" value="<?php echo $td['add_time'];?>"/> 单位:小时 1天=24小时 只能为整数&nbsp;<span id="dadd_time" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
return confirm('您确认延长'+Dd('add_time').value+'小时吗？');
}
</script>
<script type="text/javascript">s('trade');m('action');</script>
<?php } else if($step == 'refund') { ?>
<form method="post" action="weihu.php" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">申请退款</td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr">T<?php echo $td['itemid'];?> <?php if($DT['trade']) { ?>(<?php echo $DT['trade_nm'];?>订单单号:<?php echo $td['trade_no'];?>)<?php } ?>
</td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['title'];?></a></td>
</tr>
<tr>
<td class="tl">商品图片</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank"><img src="<?php if($td['thumb']) { ?><?php echo $td['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60"/></a></td>
</tr>
<tr>
<td class="tl">卖家</td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo im_web($td['seller']);?>&nbsp;<?php } ?>
<a href="<?php echo userurl($td['seller'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['seller'];?></a></td>
</tr>
<tr>
<td class="tl">下单时间</td>
<td class="tr"><?php echo $td['adddate'];?></td>
</tr>
<tr>
<td class="tl">发货时间</td>
<td class="tr"><?php echo $td['updatedate'];?></td>
</tr>
<tr>
<td class="tl">域名说明</td>
<td class="tr"><?php echo $td['note'];?></td>
</tr>
<tr>
<td class="tl">商品单价</td>
<td class="tr">￥<?php echo $td['price'];?></td>
</tr>
<tr>
<td class="tl">购买数量</td>
<td class="tr"><?php echo $td['number'];?></td>
</tr>
<?php if($td['fee_name'] && $td['fee']) { ?>
<tr>
<td class="tl"><?php echo $td['fee_name'];?></td>
<td class="tr">￥<?php echo $td['fee'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl">订单总额</td>
<td class="tr f_red">￥<?php echo $money;?></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 理由及证据</td>
<td class="tr"><textarea name="content" id="content" class="dsn"></textarea>
<?php echo deditor($moduleid, 'content', 'Simple', '98%', 200);?><span id="dcontent" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 支付密码</td>
<td class="tr"><?php include template('password', 'chip');?>&nbsp;<span id="dpassword" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
var len = FCKLen();
if(len < 10) {
Dmsg('理由及证据不能少于10个字，当前已输入'+len+'个字', 'content');
return false;
}
if(Dd('password').value == '') {
Dmsg('请填写支付密码', 'password');
return false;
}
return confirm('您确认您提供的理由及证据无误，并申请退款吗？');
}
</script>
<script type="text/javascript">s('trade');m('action_order');</script>
<?php } else if($step == 'comment') { ?>
<form method="post" action="weihu.php" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">交易评价</td>
</tr>
<tr>
<td class="tl">交易打分</td>
<td class="tr">
<input type="radio" name="star" value="3" id="star_3" checked/><label for="star_3"> 好评 <img src="<?php echo DT_STATIC;?>file/image/star3.gif" width="36" height="12" alt="" align="absmiddle"/></label>
<input type="radio" name="star" value="2" id="star_2"/><label for="star_2"> 中评 <img src="<?php echo DT_STATIC;?>file/image/star2.gif" width="36" height="12" alt="" align="absmiddle"/></label>
<input type="radio" name="star" value="1" id="star_1"/><label for="star_1"> 差评 <img src="<?php echo DT_STATIC;?>file/image/star1.gif" width="36" height="12" alt="" align="absmiddle"/></label>
</td>
</tr>
<tr>
<td class="tl">详细评论</td>
<td class="tr f_gray">
<textarea onkeyup="S();" name="content" id="content" style="width:300px;height:60px;margin:0 0 6px 0;"></textarea><br/>
请您对此次交易做出客观、公正的评论<br/>
(内容限0至500字) 当前已经输入 <span style="color:red;" id="chars">0</span> 字
</td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
if(Dd('content').value.length > 500) {
alert('评论内容不能超过500字');
return false;
}
return confirm('您确认提交此评论吗？提交后评论分数和内容将不可更改');
}
function S() {
Inner('chars', Dd('content').value.length);
}
</script>
<script type="text/javascript">s('trade');m('<?php echo $nav;?>');</script>
<?php } else if($step == 'comment_detail') { ?>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">评价详情</td>
</tr>
</table>
<div class="t2">买家评价<?php if($_username==$td['buyer']) { ?>(我的)<?php } ?>
</div>
<table cellspacing="1" cellpadding="8" class="tb">
<?php if($cm['seller_star']) { ?>
<tr>
<td class="tl">买家评分</td>
<td class="tr"><img src="<?php echo DT_STATIC;?>file/image/star<?php echo $cm['seller_star'];?>.gif" width="36" height="12" alt="" align="absmiddle"/> <?php echo $STARS[$cm['seller_star']];?>
<?php if($_username == $td['seller'] && !$cm['buyer_reply']) { ?>
&nbsp;&nbsp;<a href="#exp" onclick="Ds('explain');" class="t">[解释]</a>
<?php } ?>
</td>
</tr>
<tr>
<td class="tl">买家评论</td>
<td class="tr"><?php echo nl2br($cm['seller_comment']);?></td>
</tr>
<tr>
<td class="tl">评论时间</td>
<td class="tr px11"><?php echo timetodate($cm['seller_ctime'], 6);?></td>
</tr>
<?php if($cm['buyer_reply']) { ?>
<tr>
<td class="tl">卖家解释</td>
<td class="tr" style="color:#D9251D;"><?php echo nl2br($cm['buyer_reply']);?></td>
</tr>
<tr>
<td class="tl">解释时间</td>
<td class="tr px11"><?php echo timetodate($cm['buyer_rtime'], 6);?></td>
</tr>
<?php } ?>
<?php } else { ?>
<tr>
<td class="tl">买家评论</td>
<td class="tr">暂未评论</td>
</tr>
<?php } ?>
</table>
<div class="t2">卖家评价<?php if($_username==$td['seller']) { ?>(我的)<?php } ?>
</div>
<table cellspacing="1" cellpadding="8" class="tb">
<?php if($cm['buyer_star']) { ?>
<tr>
<td class="tl">卖家评分</td>
<td class="tr"><img src="<?php echo DT_STATIC;?>file/image/star<?php echo $cm['buyer_star'];?>.gif" width="36" height="12" alt="" align="absmiddle"/> <?php echo $STARS[$cm['buyer_star']];?>
<?php if($_username == $td['buyer'] && !$cm['seller_reply']) { ?>
&nbsp;&nbsp;<a href="#exp" onclick="Ds('explain');" class="t">[解释]</a>
<?php } ?>
</td>
</tr>
<tr>
<td class="tl">卖家评论</td>
<td class="tr"><?php echo nl2br($cm['buyer_comment']);?></td>
</tr>
<tr>
<td class="tl">评论时间</td>
<td class="tr px11"><?php echo timetodate($cm['buyer_ctime'], 6);?></td>
</tr>
<?php if($cm['seller_reply']) { ?>
<tr>
<td class="tl">买家解释</td>
<td class="tr" style="color:#D9251D;"><?php echo nl2br($cm['seller_reply']);?></td>
</tr>
<tr>
<td class="tl">解释时间</td>
<td class="tr px11"><?php echo timetodate($cm['seller_rtime'], 6);?></td>
</tr>
<?php } ?>
<?php } else { ?>
<tr>
<td class="tl">卖家评论</td>
<td class="tr">暂未评论</td>
</tr>
<?php } ?>
</table>
<div style="display:none;" id="explain">
<div class="t2">我的解释</div>
<form method="post" action="weihu.php" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl"><span class="f_red">*</span>我的解释</td>
<td class="tr f_gray">
<textarea onkeyup="S();" name="content" id="content" style="width:300px;height:60px;margin:0 0 6px 0;"></textarea><br/>
请您对此次评价做出客观、合理的解释<br/>
(内容限2至500字) 当前已经输入 <span style="color:red;" id="chars">0</span> 字
</td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
</div>
<a name="exp"></a>
<script type="text/javascript">
function check() {
if(Dd('content').value.length < 2) {
alert('解释内容不能少于2字');
return false;
}
if(Dd('content').value.length > 500) {
alert('解释内容不能超过500字');
return false;
}
return confirm('您确认提交此解释吗？提交后解释内容将不可更改');
}
function S() {
Inner('chars', Dd('content').value.length);
}
</script>
<script type="text/javascript">s('trade');m('<?php echo $nav;?>');</script>
<?php } ?>
<?php } else { ?>
<div class="tt">
<form action="weihu.php">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<?php echo $fields_select;?>&nbsp;
<input type="text" size="10" name="kw" value="<?php echo $kw;?>" title="关键词"/>&nbsp;
<?php echo $status_select;?>&nbsp;
<?php echo dcalendar('fromtime', $fromtime);?> 至 <?php echo dcalendar('totime', $totime);?>&nbsp;
<input type="submit" value=" 搜 索 " class="btn"/>&nbsp;
<input type="button" value=" 重 置 " class="btn" onclick="Go('weihu.php?action=<?php echo $action;?>');"/><br/>
<div class="b10"></div>
单号：<input type="text" size="10" name="itemid" value="<?php echo $itemid;?>"/>&nbsp;
商品ID：<input type="text" size="10" name="mallid" value="<?php echo $mallid;?>"/>&nbsp;
卖家：<input type="text" size="20" name="seller" value="<?php echo $seller;?>"/>&nbsp;
</div>
</form>
<div class="bd">
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th width="60">缩略图</th>
<th>商品或服务</th>
<th width="60">金额</th>
<th width="80">卖家</th>
<th width="<?php if($DT['im_web']) { ?>40<?php } else { ?>16<?php } ?>
">&nbsp;</th>
<th width="75">下单时间</th>
<th width="75">更新时间</th>
<th width="90">状态</th>
</tr>
<?php if(is_array($trades)) { foreach($trades as $k => $v) { ?>
<tr align="center"<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td rowspan="2" height="70"><a href="<?php echo $v['linkurl'];?>" target="_blank"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic50.gif<?php } ?>
" width="50" height="50" onerror="this.src=errimg;"/></a></td>
<td align="left" style="padding:0 8px 0 8px;" class="f_b f_dblue"><a href="<?php echo $v['linkurl'];?>" target="_blank" class="t"><?php echo $v['title'];?></a></td>
<td class="f_price" title="商品价格：￥<?php echo $v['price'];?> x <?php echo $v['number'];?>件 = <?php echo $v['amount'];?><?php if($v['fee']>0.1) { ?> <?php echo $v['fee_name'];?>:<?php echo $v['fee'];?><?php } ?>
"><?php echo $v['money'];?></td>
<td class="px11"><a href="<?php echo userurl($v['seller'], 'file=contact');?>" target="_blank"><?php echo $v['seller'];?></a></td>
<td><?php if($DT['im_web']) { ?><?php echo im_web($v['seller'].'&mid=16&itemid='.$v['mallid']);?> <?php } ?>
<a href="message.php?action=send&touser=<?php echo $v['seller'];?>" target="_blank"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_message.gif" title="发送站内信" align="absmiddle"/></a></td>
<td class="px11"><?php echo $v['addtime'];?></td>
<td class="px11"><?php echo $v['updatetime'];?></td>
<td><?php echo $v['dstatus'];?></td>
</tr>
<tr<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td colspan="8" class="f_gray">
<span class="f_r">
<?php if($v['status'] == 0) { ?>
<input type="button" value="删 除" class="btn" onclick="if(confirm('确实要删除此交易吗？此操作将不可撤销')) Go('weihu.php?itemid=<?php echo $v['itemid'];?>&action=update&step=close&forward=<?php echo $forward;?>');"/>
<?php } else if($v['status'] == 1) { ?>
<?php if($DT['trade']) { ?>
<a href="weihu.php?itemid=<?php echo $v['itemid'];?>&action=update&step=pay&forward=<?php echo $forward;?>" class="t" onclick="return confirm('确认订单无误，现在付款吗？');" target="_blank"><img src="<?php echo DT_PATH;?>api/trade/<?php echo $DT['trade'];?>/pay.gif" align="absmiddle" title="<?php echo $DT['trade_nm'];?>付款"/></a>
<?php } else { ?>
<input type="button" value="付 款" class="btn" onclick="Go('weihu.php?itemid=<?php echo $v['itemid'];?>&action=update&step=pay&forward=<?php echo $forward;?>');"/>
<?php } ?>
<input type="button" value="关闭交易" class="btn" onclick="if(confirm('确实要关闭此交易吗？此操作将不可撤销')) Go('weihu.php?itemid=<?php echo $v['itemid'];?>&action=update&step=close&forward=<?php echo $forward;?>');"/>
<?php } else if($v['status'] == 3) { ?>
<?php if($v['lefttime']) { ?>
<span class="f_blue" title="如果逾期未处理，系统将自动付款给卖家"><img src="<?php echo DT_STATIC;?>file/image/clock.gif" width="12" height="12"/> 距处理此订单还剩<?php echo $v['lefttime'];?></span>&nbsp;
<input type="button" value="确认到货" class="btn" onclick="if(confirm('确认已收到货且质量与数量无误吗？\n\n请注意:确认后您的钱将直接支付给卖家')) Go('weihu.php?itemid=<?php echo $v['itemid'];?>&action=update&step=receive_goods&forward=<?php echo $forward;?>');"/>
<input type="button" value="申请退款" class="btn" onclick="Go('weihu.php?itemid=<?php echo $v['itemid'];?>&action=update&step=refund&forward=<?php echo $forward;?>');"/>
<?php } else { ?>
<span class="f_red">订单处理已超时，等待卖家收款</span>&nbsp;
<?php } ?>
<?php } else if($v['status'] == 4) { ?>
<?php if($v['seller_star']) { ?>
<input type="button" value="评价详情" class="btn" onclick="Go('weihu.php?itemid=<?php echo $v['itemid'];?>&action=update&step=comment_detail&forward=<?php echo $forward;?>');"/>
<?php } else { ?>
<input type="button" value="评 价" class="btn" onclick="Go('weihu.php?itemid=<?php echo $v['itemid'];?>&action=update&step=comment&forward=<?php echo $forward;?>');"/>
<?php } ?>
<?php } else if($v['status'] == 9) { ?>
<input type="button" value="删 除" class="btn" onclick="Go('weihu.php?itemid=<?php echo $v['itemid'];?>&action=update&step=close&forward=<?php echo $forward;?>');"/>
<?php } ?>
<input type="button" value="订单详情" class="btn" onclick="Go('weihu.php?itemid=<?php echo $v['itemid'];?>&action=update&step=detail');"/>
&nbsp;
</span>
&nbsp;
<strong>单号：</strong><?php echo $v['itemid'];?>&nbsp;&nbsp;
<strong>单价：</strong>￥<?php echo $v['price'];?>&nbsp;&nbsp;
<strong>数量：</strong><?php echo $v['number'];?>件&nbsp;&nbsp;
<strong>域名：</strong><?php echo $v['note'];?>
</td>
</tr>
<?php } } ?>
<?php if($trades) { ?>
<tr align="center">
<td height="30">&nbsp;</td>
<td><strong>小计</strong></td>
<td class="f_red f_b px11"><?php echo $money;?></td>
<td colspan="5" align="left" class="f_red">&nbsp;&nbsp;提示：如果交易中有任何问题，请与网站客服联系</td>
</tr>
<?php } ?>
</table>
</div>
<div class="pages"><?php echo $pages;?></div>
<script type="text/javascript">s('trade');m('action_order');</script>
<?php } ?>
<?php include template('footer', $module);?>