<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', $module);?>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="add"><a href="beian.php?action=update&step=1"><span>申请备案</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="home"><a href="beian.php"><span>我的备案</span></a></td>
</tr>
</table>
</div>
<div id="beian_c">
 <div id="content">
<div class="tips-orange pd10">
  <span>请选择产品后备案，每个定制网站或者模版建站订单提供首年免费备案一次，超过按35元/次进行收费</span><br>
</div>
</div></div>
<?php include template('footer', $module);?>