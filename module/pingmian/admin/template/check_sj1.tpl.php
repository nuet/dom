<?php
defined('IN_DESTOON') or exit('Access Denied');
include tpl('header');
show_menu($menus);
?>
<!-- 搜索作品 start -->
<div class="tt">作品搜索</div>
<form action="?">
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<table cellpadding="2" cellspacing="1" class="tb">

<tr>
<td>&nbsp;
<select name="timetype">

<option value="addtime" >上传时间</option>
<option value="updatetime">更新时间</option>
</select>&nbsp;
<?php echo dcalendar('fromtime', $fromtime);?> 至 <?php echo dcalendar('totime', $totime);?>&nbsp;
&nbsp;
<input type="text" name="psize" value="<?php echo $pagesize;?>" size="2" class="t_c" title="条/页"/>
<input type="submit" value="搜 索" class="btn"/>&nbsp;
<input type="button" value="重 置" class="btn" onclick="Go('?moduleid=<?php echo $moduleid;?>&file=<?php echo $file;?>&action=<?php echo $action;?>');"/>
</td>
</tr>
<tr>
<td>&nbsp;
订单单号：<input type="text" name="itemid" size="10" value="<?php echo $itemid;?>"/>&nbsp;
设计师：<input type="text" name="designer" value="<?php echo $designer;?>" size="10"/>&nbsp;
</td>
</tr>
</table>
</form>
<!-- 搜索作品 end -->
<form method="post">
<div class="tt"><?php echo $menus[$menuid][0];?></div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<th width="25"><input type="checkbox" onclick="checkall(this.form);"/></th>
<th width="70">资料</th>
<th>订单</th>
<th>订单金额</th>
<th>客户</th>
<th>设计师</th>
<th>上传时间</th>
<th>更新时间</th>
<th>分类</th>
<th>状态</th>
</tr>
<?php foreach($lists as $k=>$v) {
if($v[level]==1){
	$v[level]="首页";
}else if($v[level]==2){
	$v[level]="栏目页";
}else{
	$v[level]="PSD文件";
}
if($v[checked]==0){
	$v[checked]="等待审核";
}else if($v[checked]==1){
	$v[checked]="<font style='color:red'>审核通过</font>";
}else if($v[checked]==2){
	$v[checked]="<font style='color:blue'>审核失败</font>";
}
$v[addtime]=date('Y-m-d H:i:s',$v[addtime]);
if($v[updatetime]=="0"){
	$v[updatetime]="未修改";
}else{
	$v[updatetime]=date('Y-m-d H:i:s',$v[updatetime]);
}

	?>
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center">
<td><input type="checkbox" name="itemid[]" value="<?php echo $v['id'];?>"/></td>
<td class="px11"><a href="<?php echo $CFG[url] ?>extend/view_pic.php?img=<?php echo $v['upload'] ?>" target="_blank"><img src="<?php echo $v['upload'] ?>" id="" width='60px' height='60px'/></a></td>
<td class="px11"><a style="color:blue;" href="javascript:Dwidget('?moduleid=16&amp;file=order&amp;action=show&amp;mallid=&amp;itemid=<?php echo $v[rid] ?>', '[<?php echo $v['rid'];?>] 订单列表');"><?php echo $v['rid'];?></a></td>
<td class="px11"><?php echo $v['price'];?></td>
<td class="px11"><?php echo $v['buyer'];?>&nbsp;&nbsp;<a href='member/chat.php?touser=<?php echo  $v['buyer']?>&mid=16&itemid=<?php echo  $v['rid']?>' target='_blank'><img src="<?php echo $CFG['url'];?>file/image/web.gif"></a>&nbsp;<a href="?moduleid=2&file=message&action=send&touser=<?php echo $v[buyer] ?>" target="_blank"><img src="<?php echo DT_STATIC.$MODULE[2][moduledir] ?>/image/ico_message.gif" title="发送站内信" align="absmiddle"/></a></td>
<td class="px11"><?php echo $v['designer'];?>&nbsp;&nbsp;<a href='member/chat.php?touser=<?php echo $v['designer']?>&mid=16&itemid=<?php echo  $v['rid']?>' target='_blank'><img src="<?php echo $CFG['url'];?>file/image/web.gif"></a>&nbsp;<a href="?moduleid=2&file=message&action=send&touser=<?php echo $v[buyer] ?>" target="_blank"><img src="<?php echo DT_STATIC.$MODULE[2][moduledir] ?>/image/ico_message.gif" title="发送站内信" align="absmiddle"/></a>
</td>
<td class="px11"><?php echo $v['addtime'];?></td>
<td class="px11"><?php echo $v['updatetime'];?></td>
<td class="px11"><?php echo $v['level'];?></td>
<td class="px11"><?php echo $v['checked'];?></td>

</tr>
<?php } ?>
</table>
<div class="btns">

<?php if($action == 'check_sj1') { ?>
<input type="checkbox" name="sms" value="发送审核通知">发送审核通知&nbsp;&nbsp;&nbsp;
<textarea name='mess' cols=50 rows=3 placeholder="说明原因"></textarea>
<input type="submit" value=" 通过审核 " class="btn" onclick="this.form.action='?moduleid=<?php echo $moduleid;?>&file=<?php echo $file;?>&action=check_sj1&t=add';"/>&nbsp;
<input type="submit" value=" 拒 绝 " class="btn" onclick="this.form.action='?moduleid=<?php echo $moduleid;?>&file=<?php echo $file;?>&action=check_sj1&t=fall';"/>&nbsp;
<input type="submit" value=" 彻底删除 " class="btn" onclick="if(confirm('确定要删除选中商品吗？此操作将不可撤销')){this.form.action='?moduleid=<?php echo $moduleid;?>&file=<?php echo $file;?>&action=check_sj1&t=del'}else{return false;}"/>&nbsp;
<?php } ?>
</div>
</form>
<div class="pages"><?php echo $pages;?></div>
<br/>
<script type="text/javascript">Menuon(<?php echo $menuid;?>);</script>
<?php include tpl('footer');?>