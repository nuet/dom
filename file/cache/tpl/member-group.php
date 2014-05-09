<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', $module);?>
<script type="text/javascript">c(2);var errimg = '<?php echo DT_SKIN;?>image/nopic50.gif';</script>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="action"><a href="group.php"><span>收到的订单(卖家)</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="action_order"><a href="group.php?action=order"><span>发出的订单(客户)</span></a></td>
</tr>
</table>
</div>
<?php if($action == 'update') { ?>
<?php if($step == 'detail') { ?>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t f_b"><?php echo $td['title'];?></a></td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr"><?php echo $td['itemid'];?></td>
</tr>
<tr>
<td class="tl">商品图片</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank"><img src="<?php if($td['thumb']) { ?><?php echo $td['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60"/></a></td>
</tr>
<?php if($td['seller'] == $_username) { ?>
<tr>
<td class="tl">客户 </td>
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
<tr>
<td class="tl">手机</td>
<td class="tr"><?php echo $td['buyer_mobile'];?> <?php if($DT['sms']) { ?>&nbsp;&nbsp;<a href="sms.php?action=add&auth=<?php echo encrypt($td['buyer_mobile']);?>" target="_blank"><img src="<?php echo DT_SKIN;?>image/sendsms.gif" align="absmiddle" title="发送短信" alt=""/></a><?php } ?>
</td>
</tr>
<?php if($td['logistic']) { ?>
<tr>
<td class="tl">邮编</td>
<td class="tr"><?php echo $td['buyer_postcode'];?></td>
</tr>
<tr>
<td class="tl">地址</td>
<td class="tr"><?php echo $td['buyer_address'];?></td>
</tr>
<tr>
<td class="tl">收货人</td>
<td class="tr"><?php echo $td['buyer_name'];?></td>
</tr>
<tr>
<td class="tl">电话</td>
<td class="tr"><?php echo $td['buyer_phone'];?></td>
</tr>
<tr>
<td class="tl">期望物流</td>
<td class="tr"><?php echo $td['buyer_receive'];?></td>
</tr>
<tr>
<td class="tl">客户域名</td>
<td class="tr"><?php echo $td['note'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl">下单时间</td>
<td class="tr"><?php echo $td['adddate'];?></td>
</tr>
<tr>
<td class="tl">最后更新</td>
<td class="tr"><?php echo $td['updatedate'];?></td>
</tr>
<tr>
<td class="tl">订单密码</td>
<td class="tr"><?php echo $td['password'];?></td>
</tr>
<tr>
<td class="tl">商品单价</td>
<td class="tr f_red">￥<?php echo $td['price'];?></td>
</tr>
<tr>
<td class="tl">购买数量</td>
<td class="tr"><?php echo $td['number'];?></td>
</tr>
<tr>
<td class="tl">订单金额</td>
<td class="tr f_blue">￥<?php echo $td['amount'];?></td>
</tr>
<?php if($td['logistic']) { ?>
<tr>
<td class="tl">物流类型</td>
<td class="tr"><?php echo $td['send_type'];?></td>
</tr>
<tr>
<td class="tl">物流号码</td>
<td class="tr"><?php echo $td['send_no'];?><?php if($td['send_no']) { ?> &nbsp;<a href="<?php echo DT_PATH;?>api/express.php?e=<?php echo urlencode($td['send_type']);?>&n=<?php echo $td['send_no'];?>" target="_blank" class="t">[物流追踪]</a><?php } ?>
</td>
</tr>
<tr>
<td class="tl">发货时间</td>
<td class="tr"><?php echo $td['send_time'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl">订单状态</td>
<td class="tr"><?php echo $_status[$td['status']];?></td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr"><input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">s('group');m('<?php echo $nav;?>');</script>
<?php } else if($step == 'refund') { ?>
<form method="post" action="group.php" onsubmit="return check();" id="dform">
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
<td class="tr">T<?php echo $td['itemid'];?> <?php if($DT['group']) { ?>(<?php echo $DT['group_nm'];?>订单单号:<?php echo $td['group_no'];?>)<?php } ?>
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
<td class="tr"><a href="<?php echo userurl($td['seller'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['seller'];?></a></td>
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
<td class="tl">订单金额</td>
<td class="tr f_blue f_b"><?php echo $td['amount'];?> <?php echo $DT['money_unit'];?></td>
</tr>
<?php if($td['fee']>0.1) { ?>
<tr>
<td class="tl"><?php echo $td['fee_name'];?></td>
<td class="tr f_blue f_b"><?php echo $td['fee'];?> <?php echo $DT['money_unit'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl">实付金额</td>
<td class="tr f_red f_b"><?php echo $money;?> <?php echo $DT['money_unit'];?></td>
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
<script type="text/javascript">s('group');m('action_order');</script>
<?php } ?>
<?php } else if($action == 'order') { ?>
<div class="tt">
<form action="group.php">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<?php echo $fields_select;?>&nbsp;
<input type="text" size="10" name="kw" value="<?php echo $kw;?>" title="关键词"/>&nbsp;
<?php echo $status_select;?>&nbsp;
<?php echo dcalendar('fromtime', $fromtime);?> 至 <?php echo dcalendar('totime', $totime);?>&nbsp;
单号：<input type="text" size="5" name="itemid" value="<?php echo $itemid;?>"/>&nbsp;
<input type="submit" value=" 搜 索 " class="btn"/>&nbsp;
<input type="button" value=" 重 置 " class="btn" onclick="Go('group.php?action=<?php echo $action;?>');"/><br/>
<div class="b10"></div>
单号：<input type="text" size="10" name="itemid" value="<?php echo $itemid;?>"/>&nbsp;
商品ID：<input type="text" size="10" name="gid" value="<?php echo $gid;?>"/>&nbsp;
商家：<input type="text" size="20" name="seller" value="<?php echo $seller;?>"/>&nbsp;
</div>
</form>
<div class="bd">
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th width="60">缩略图</th>
<th>商品</th>
<th width="60">总额</th>
<th width="40">数量</th>
<th width="80">商家</th>
<th width="<?php if($DT['im_web']) { ?>40<?php } else { ?>16<?php } ?>
">&nbsp;</th>
<th width="75">下单时间</th>
<th width="75">更新时间</th>
<th width="60">状态</th>
</tr>
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<tr align="center"<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td rowspan="2" height="70"><a href="<?php echo $v['linkurl'];?>" target="_blank"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic50.gif<?php } ?>
" width="50" height="50" onerror="this.src=errimg;"/></a></td>
<td align="left" style="padding:0 8px 0 8px;" class="f_b f_dblue"><a href="<?php echo $v['linkurl'];?>" target="_blank" class="t"><?php echo $v['title'];?></a></td>
<td class="f_price"><?php echo $v['money'];?></td>
<td class="px11"><?php echo $v['number'];?></td>
<td class="px11"><a href="<?php echo userurl($v['seller'], 'file=contact');?>" target="_blank"><?php echo $v['seller'];?></a></td>
<td><?php if($DT['im_web']) { ?><?php echo im_web($v['seller'].'&mid=16&itemid='.$v['gid']);?> <?php } ?>
<a href="message.php?action=send&touser=<?php echo $v['seller'];?>" target="_blank"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_message.gif" title="发送站内信" align="absmiddle"/></a></td>
<td class="px11"><?php echo $v['addtime'];?></td>
<td class="px11"><?php echo $v['updatetime'];?></td>
<td><?php echo $v['dstatus'];?></td>
</tr>
<tr<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td colspan="8" class="f_gray">
<span class="f_r">
<?php if($v['status'] == 1) { ?>
<input type="button" value="确认完成" class="btn" onclick="if(confirm('您确定已经订单完成，收到模版网站的帐号信息了么？此操作将不可撤销'))Go('group.php?itemid=<?php echo $v['itemid'];?>&action=update&step=receive&page=<?php echo $page;?>');"/>
<?php } else if($v['status'] == 2) { ?>
<input type="button" value="确认完成" class="btn" onclick="if(confirm('您确定已经订单完成，收到模版网站的帐号信息了么？此操作将不可撤销'))Go('group.php?itemid=<?php echo $v['itemid'];?>&action=update&step=receive&page=<?php echo $page;?>');"/>
<?php } ?>
<input type="button" value="订单详情" class="btn" onclick="Go('group.php?itemid=<?php echo $v['itemid'];?>&action=update&step=detail');"/>
&nbsp;
</span>
&nbsp;
<strong>单号：</strong><?php echo $v['itemid'];?>&nbsp;&nbsp;
<strong>密码：</strong><?php echo $v['password'];?>&nbsp;&nbsp;
<strong>单价：</strong>￥<?php echo $v['price'];?>&nbsp;&nbsp;
<strong>域名：</strong><?php echo $v['note'];?>
</td>
</tr>
<?php } } ?>
<?php if($lists) { ?>
<tr align="center">
<td height="30">&nbsp;</td>
<td><strong>小计</strong></td>
<td class="f_price"><?php echo $money;?></td>
<td colspan="6" align="left" class="f_red">&nbsp;&nbsp;提示：如果交易中有任何问题，请与网站联系</td>
</tr>
<?php } ?>
</table>
</div>
<div class="pages"><?php echo $pages;?></div>
<script type="text/javascript">s('group');m('action_order');</script>
<?php } else { ?>
<div class="tt">
<form action="group.php">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<?php echo $fields_select;?>&nbsp;
<input type="text" size="20" name="kw" value="<?php echo $kw;?>" title="关键词"/>&nbsp;
<?php echo $status_select;?>&nbsp;
<?php echo dcalendar('fromtime', $fromtime);?> 至 <?php echo dcalendar('totime', $totime);?>&nbsp;
<input type="submit" value=" 搜 索 " class="btn"/>&nbsp;
<input type="button" value=" 重 置 " class="btn" onclick="Go('group.php?action=<?php echo $action;?>');"/><br/>
<div class="b10"></div>
单号：<input type="text" size="10" name="itemid" value="<?php echo $itemid;?>"/>&nbsp;
商品ID：<input type="text" size="10" name="gid" value="<?php echo $gid;?>"/>&nbsp;
客户：<input type="text" size="20" name="buyer" value="<?php echo $buyer;?>"/>&nbsp;
</form>
</div>
<div class="bd">
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th width="60">缩略图</th>
<th>商品</th>
<th width="60">总额</th>
<th width="40">数量</th>
<th width="80">客户</th>
<th width="<?php if($DT['im_web']) { ?>40<?php } else { ?>16<?php } ?>
">&nbsp;</th>
<th width="75">下单时间</th>
<th width="75">更新时间</th>
<th width="90">状态</th>
</tr>
<?php if(is_array($groups)) { foreach($groups as $k => $v) { ?>
<tr align="center"<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td rowspan="2" height="70"><a href="<?php echo $v['linkurl'];?>" target="_blank"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic50.gif<?php } ?>
" width="50" height="50" onerror="this.src=errimg;"/></a></td>
<td align="left" style="padding:0 8px 0 8px;" class="f_b f_dblue"><a href="<?php echo $v['linkurl'];?>" target="_blank" class="t"><?php echo $v['title'];?></a><?php if($v['status'] == 0) { ?> <img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/new.gif"/><?php } ?>
</td>
<td class="f_blue f_b px11" title="商品价格：￥<?php echo $v['price'];?> x <?php echo $v['number'];?>件 = <?php echo $v['amount'];?>"><?php echo $v['amount'];?></td>
<td class="px11"><?php echo $v['number'];?></td>
<td class="px11"><a href="<?php echo userurl($v['buyer'], 'file=contact');?>" target="_blank"><?php echo $v['buyer'];?></a></td>
<td><?php if($DT['im_web']) { ?><?php echo im_web($v['buyer'].'&mid=16&itemid='.$v['gid']);?> <?php } ?>
<a href="message.php?action=send&touser=<?php echo $v['buyer'];?>" target="_blank"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_message.gif" title="发送站内信" align="absmiddle"/></a></td>
<td class="px11"><?php echo $v['addtime'];?></td>
<td class="px11"><?php echo $v['updatetime'];?></td>
<td><?php echo $v['dstatus'];?></td>
</tr>
<tr<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td colspan="8" class="f_gray">
<span class="f_r">
<?php if($v['status'] == 0) { ?>
<?php if($v['logistic']) { ?>
<?php } else { ?>
<input type="button" value="已消费" class="btn" onclick="if(confirm('您确定客户已经消费吗？此操作将不可撤销'))Go('group.php?itemid=<?php echo $v['itemid'];?>&action=update&step=used&page=<?php echo $page;?>');"/>
<?php } ?>
<?php } ?>
<input type="button" value="订单详情" class="btn" onclick="Go('group.php?itemid=<?php echo $v['itemid'];?>&action=update&step=detail');"/>
&nbsp;
</span>
&nbsp;
<strong>单号：</strong><?php echo $v['itemid'];?>&nbsp;&nbsp;
<strong>密码：</strong><?php echo $v['password'];?>&nbsp;&nbsp;
<strong>单价：</strong>￥<?php echo $v['price'];?>&nbsp;&nbsp;
<strong>域名：</strong><?php echo $v['note'];?>
</td>
</tr>
<?php } } ?>
<?php if($groups) { ?>
<tr align="center">
<td height="30">&nbsp;</td>
<td><strong>小计</strong></td>
<td class="f_blue f_b px11"><?php echo $money;?></td>
<td colspan="6" align="left" class="f_red">&nbsp;&nbsp;提示：如果交易中有任何问题，请与网站联系</td>
</tr>
<?php } ?>
</table>
</div>
<div class="pages"><?php echo $pages;?></div>
<script type="text/javascript">s('group');m('action');</script>
<?php } ?>
<?php include template('footer', $module);?>