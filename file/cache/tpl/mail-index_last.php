<?php defined('IN_DESTOON') or exit('Access Denied');?><table cellpadding="0" cellspacing="0" width="700" align="center" style="font-family:Verdana,Arial;">
<tr>
<td style="background:#FF6600;line-height:30px;font-size:14px;font-weight:bold;color:#FFFFFF;">&nbsp;&nbsp;<?php echo $title;?></td>
</tr>
<tr>
<td style="border:#CCCCCC 1px solid;padding:20px 20px 20px 20px;line-height:180%;font-size:13px;">
<strong>尊敬的<?php echo $rm['username'];?></strong>：<br/>
恭喜你！您好！订单号为：<span style="color:#FF1100;"><?php echo $itemid;?></span>的订单将您的作品设为首页稿件了。请注意查看，请尽快准备栏目页的设计。请点击下面查看订单（如果显示的不是链接，请将下面的地址复制到浏览器的地址栏里按下回车键）<br/>
<a href="<?php echo $url;?>" target="_blank"><?php echo $url;?></a><br/>
</td>
</tr>
<tr>
<td style="background:#333333;padding:10px;line-height:180%;font-size:12px;color:#FFFFFF;">请注意：此邮件系 <a href="<?php echo DT_PATH;?>" target="_blank" style="color:#FFFFFF;"><?php echo $DT['sitename'];?></a> 自动发送，请勿直接回复。<br/></td>
</tr>
</table>
