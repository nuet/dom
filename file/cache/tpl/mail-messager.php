<?php defined('IN_DESTOON') or exit('Access Denied');?><table cellpadding="0" cellspacing="0" width="600" style="margin:10px;font-family:Verdana,Arial;">
<tr>
<td style="background:#6B85DC;line-height:24px;font-weight:bold;color:#FFFFFF;">&nbsp;&nbsp;<?php echo $title;?></td>
</tr>
<tr>
<td style="border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:200%;font-size:12px;">
<strong>Hi, <?php echo $touser;?></strong>：<br/>
<?php echo $content;?>
</td>
</tr>
<tr>
<td style="background:#555555;padding:3px;font-size:12px;color:#FFFFFF;">&nbsp;&nbsp;请注意：此信件系 系统信使 自动发送，请勿直接回复。</td>
</tr>
</table>