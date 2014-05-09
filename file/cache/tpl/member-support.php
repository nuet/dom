<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', $module);?>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="add"><a href="ask.php?action=add"><span>在线提问</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab_on"><a href="support.php"><span>客服专员</span></a></td>
<td class="tab_nav">&nbsp;</td>
</tr>
</table>
</div>
<table cellspacing="1" cellpadding="10" class="tb">
<?php if($user['truename']) { ?>
<tr>
<td class="tl">姓名</td>
<td class="tr"><?php echo $user['truename'];?> （<?php if($user['gender']==1) { ?>先生<?php } else { ?>女士<?php } ?>
）</td>
</tr>
<?php } ?>
<?php if($user['telephone']) { ?>
<tr>
<td class="tl">电话</td>
<td class="tr"><?php echo $user['telephone'];?></td>
</tr>
<?php } ?>
<?php if($user['mobile']) { ?>
<tr>
<td class="tl">手机</td>
<td class="tr"><?php echo $user['mobile'];?> <?php if($DT['sms']) { ?>&nbsp;&nbsp;<a href="sms.php?action=add&auth=<?php echo encrypt($user['mobile']);?>" target="_blank"><img src="<?php echo DT_SKIN;?>image/sendsms.gif" align="absmiddle" title="发送短信" alt=""/></a><?php } ?>
</td>
</tr>
<?php } ?>
<?php if($user['fax']) { ?>
<tr>
<td class="tl">传真</td>
<td class="tr"><?php echo $user['fax'];?></td>
</tr>
<?php } ?>
<?php if($user['mail']) { ?>
<tr>
<td class="tl">邮件</td>
<td class="tr"><?php echo $user['mail'];?></td>
</tr>
<?php } ?>
<?php if($user['address']) { ?>
<tr>
<td class="tl">地址</td>
<td class="tr"><?php echo $user['address'];?></td>
</tr>
<?php } ?>
<?php if($user['postcode']) { ?>
<tr>
<td class="tl">邮编</td>
<td class="tr"><?php echo $user['postcode'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl">对话</td>
<td class="tr">
<?php if($user['username'] && $DT['im_web']) { ?><?php echo im_web($user['username']);?>&nbsp;<?php } ?>
<?php if($user['qq'] && $DT['im_qq']) { ?><?php echo im_qq($user['qq']);?>&nbsp;<?php } ?>
<?php if($user['ali'] && $DT['im_ali']) { ?><?php echo im_ali($user['ali']);?>&nbsp;<?php } ?>
<?php if($user['msn'] && $DT['im_msn']) { ?><?php echo im_msn($user['msn']);?>&nbsp;<?php } ?>
<?php if($user['skype'] && $DT['im_skype']) { ?><?php echo im_skype($user['skype']);?>&nbsp;<?php } ?>
</td>
</tr>
</table>
<?php include template('footer', $module);?>