<?php defined('IN_DESTOON') or exit('Access Denied');?><table cellpadding="0" cellspacing="0" width="600" style="margin:10px;font-family:Verdana,Arial;">
<tr>
<td style="background:#2682D9;line-height:24px;font-weight:bold;color:#FFFFFF;">&nbsp;&nbsp;<?php echo $title;?></td>
</tr>
<tr>
<td style="border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;">
<strong><?php echo $touser;?></strong>：<br/>
您在<a href="<?php echo DT_PATH;?>" target="_blank"><?php echo $DT['sitename'];?></a>收到了新的站内信，内容如下：<br/>
<?php echo $content;?><br/><br/>
原始信件：<a href="<?php echo $member_url;?>message.php?action=show&itemid=<?php echo $itemid;?>" target="_blank"><?php echo $member_url;?>message.php?action=show&itemid=<?php echo $itemid;?></a><br/>
<?php if($fromuser) { ?>发件会员：<a href="<?php echo userurl($fromuser);?>" target="_blank"><?php echo $fromuser;?></a><br/><?php } ?>
发送时间：<?php echo timetodate($addtime, 6);?><br/>
</td>
</tr>
<tr>
<td style="background:#555555;padding:3px;font-size:12px;color:#FFFFFF;">&nbsp;&nbsp;请注意：此信件系根据您的设置自动发送，如果不希望接收，请点<a href="<?php echo $member_url;?>message.php?action=setting" target="_blank" style="color:#FFFFFF;">这里取消</a>。</td>
</tr>
</table>