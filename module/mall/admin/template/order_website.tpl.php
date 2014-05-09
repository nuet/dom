<?php
defined('IN_DESTOON') or exit('Access Denied');
include tpl('header');
if(!$mallid) show_menu($menus);
?>
<form method="post" action="?" id="dform" onsubmit="return check();">
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="file" value="<?php echo $file;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="buyer" value="<?php echo $order[buyer]; ?>"/>
<input type="hidden" name="post[mycatid]" value="<?php echo $mycatid;?>"/>
<div class="tt"><?php echo $action == 'add' ? '添加' : '修改';?>订单网站的测试信息</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td class="tl">订单单号</td>
<td><?php echo $order['itemid'];?> (<?php echo $order[buyer_name];?>) <?php if($DT['trade']) { ?>(<?php echo $DT['trade_nm'];?>订单单号:<a href="https://lab.alipay.com/consume/queryTradeDetail.htm?tradeNo=<?php echo $order['trade_no'];?>" target="_blank" class="t"><?php echo $order['trade_no'];?></a>)<?php } ?></td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $order['linkurl'];?>" target="_blank" class="t"><?php echo $order['title'];?></a></td>
</tr>
<tr>
<td class="tl">商品图片</td>
<td class="tr"><a href="<?php echo $order['linkurl'];?>" target="_blank"><img src="<?php if($order['thumb']) { ?><?php echo $order['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>" width="60" height="60"/></a></td>
</tr>
<tr>
<td class="tl">卖家</td>
<td><?php if($DT['im_web']) { ?><?php echo im_web($order['seller']);?>&nbsp;<?php } ?><a href="javascript:_user('<?php echo $order['seller'];?>');" class="t"><?php echo $order['seller'];?></a></td>
</tr>
<tr>
<td class="tl">买家</td>
<td><?php if($DT['im_web']) { ?><?php echo im_web($order['buyer']);?>&nbsp;<?php } ?><a href="javascript:_user('<?php echo $order['buyer'];?>');" class="t"><?php echo $order['buyer'];?></a></td>
</tr>
</table>
<div class="tt">帐号信息</div>
<table cellpadding="2" cellspacing="1" class="tb">

<tr>
<td class="tl">测试帐号</td>
<td><input type="text" name="username" size="40" value="<?php echo $cm['username'];?>" id="username"/></td>
</tr>
<tr>
<td class="tl">测试密码</td>
<td><input type="text" name="password"  size="40" value="<?php echo $cm['password'];?>" id="password"/></td>
</tr>
<tr>
<td class="tl">测试地址</td>
<td><input type="text" name="url"  size="40" value="<?php echo $cm['url'];?>" id="url"/>(必须加上http://)</td>
</tr>
<tr>
<td class="tl">后台测试地址</td>
<td><input type="text" name="adminurl" size="40"  value="<?php echo $cm['adminurl'];?>" id="adminurl"/>(必须加上http://)</td>
</tr>
</table>

<table>
<tr>
<td class="tl">网站上线地址</td>
<td><input type="text" name="num" size="40"  value="<?php echo $cm['num'];?>" id="adminurl"/>(最后一步添加,必须加上http://)</td>
</tr>


</table>

<div class="sbt"><input type="checkbox" name="sms" value="发送短信通知">发送短信通知&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/></div>
</form>



<?php include tpl('footer');?>