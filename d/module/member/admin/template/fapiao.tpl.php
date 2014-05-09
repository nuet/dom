<?php
defined('IN_DESTOON') or exit('Access Denied');
include tpl('header');
show_menu($menus);
?>
<form action="?">
<div class="tt">发票搜索</div>
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="file" value="<?php echo $file;?>"/>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td>&nbsp;
<?php echo $fields_select;?>&nbsp;
<input type="text" size="20" name="kw" value="<?php echo $kw;?>" title="关键词"/>&nbsp;
<?php echo $type_select;?>&nbsp;
<?php echo $status_select;?>&nbsp;
<?php echo $order_select;?>
&nbsp;
<input type="text" name="psize" value="<?php echo $pagesize;?>" size="2" class="t_c" title="条/页"/>
<input type="submit" value="搜 索" class="btn"/>&nbsp;
<input type="button" value="重 置" class="btn" onclick="Go('?moduleid=<?php echo $moduleid;?>&file=<?php echo $file;?>&action=<?php echo $action;?>');"/>
</td>
</tr>
</table>
</form>
<form method="post">
<div class="tt"><?php echo $menus[$menuid][0];?></div>
<div class="tt">发票大厅</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<th width="25"><input type="checkbox" onclick="checkall(this.form);"/></th>
<th>当前状态</th>
<th>类型</th>
<th>申请类型</th>
<th>发票抬头</th>
<th>金额</th>
<th>快递公司（双击修改）</th>
<th>快递单号（双击修改）</th>
<th width="130">添加时间</th>
<th>会员名称</th>
<th>快递状态</th>
<th width="50">操作</th>
</tr>
<?php foreach($asks as $k=>$v) {?>
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center">
<td><input type="checkbox" name="itemid[]" value="<?php echo $v['itemid'];?>"/></td>
<td><?php echo $v['dstatus'];?></td>
<td><?php echo $v['type'];?></td>
<td><?php echo $v['fptype'];?></td>
<td align="left"><?php echo $v['taitou'];?></a></td>
<td><?php echo $v['money'];?></td>
<td class="canedit" title="kdcompany"  id="<?php echo $v['itemid'] ?>" ><?php echo $v[kdcompany]; ?></td>
<td class="canedit"title="tradeid"  id="<?php echo $v['itemid'] ?>" ><?php echo $v[tradeid]; ?></td>
<td><?php echo $v['addtime'];?></td>
<td><a href="javascript:_user('<?php echo $v['username'];?>');"><?php echo $v['username'];?></a></td>
<td><?php echo $v['expr'];?></td>
<td>
<a href="javascript:_kd('<?php echo $v['itemid'];?>');""><img src="admin/image/edit.png" width="16" height="16" title="受理" alt=""/></a>&nbsp;
<a href="?moduleid=<?php echo $moduleid;?>&file=<?php echo $file;?>&action=delete&itemid=<?php echo $v['itemid'];?>" onclick="return _delete();"><img src="admin/image/delete.png" width="16" height="16" title="删除" alt=""/></a>
</td>
</tr>
<?php }?>
</table>
<div class="pages"><?php echo $pages;?></div>
<div class="btns">
<input type="checkbox" name="msg" id="msg" value="1" checked=""> 消息通知
<input type="checkbox" name="sms" id="email" value="1"> 邮件通知
<textarea name='mess' cols=30 rows=3 placeholder="如果作废，说明原因，此处会发站内消息"></textarea>
<select name="status" style="width:100px;">
<option value="">修改发票状态</option>
<option value="0">待受理</option>
<option value="1">已批准</option>
<option value="2">作废</option>
</select>
<select name="express" style="width:100px;">
<option value="">修改快递状态</option>
<option value="0">尚未快递</option>
<option value="1">已投递</option>
<option value="2">已送达</option>
</select>

<input type="submit" value=" 确定 " class="btn" onclick="if(confirm('确定要修改选中发票状态吗？请谨慎操作，未审核前请勿更改快递状态')){this.form.action='?moduleid=<?php echo $moduleid;?>&file=<?php echo $file;?>&action=update&t=update'}else{return false;}"/>&nbsp;
<input type="submit" value=" 作废 " class="btn" onclick="if(confirm('确定要修改选中发票状态为作废吗？作废需要填写原因')){this.form.action='?moduleid=<?php echo $moduleid;?>&file=<?php echo $file;?>&action=update&t=fall'}else{return false;}"/>&nbsp;
<input type="submit" value=" 彻底删除 " class="btn" onclick="if(confirm('确定要删除选中发票申请吗？此操作将不可撤销')){this.form.action='?moduleid=<?php echo $moduleid;?>&file=<?php echo $file;?>&action=update&t=del'}else{return false;}"/>&nbsp;
</div>
</form>
<script>function _kd(n) {Dwidget('?moduleid=2&file=fapiao&action=edit&dialog=1&itemid='+n);}</script>
<?php if(!$TYPE) { ?>
<script type="text/javascript">Dwidget('?file=type&item=<?php echo $file;?>', '启用客服中心，请先添加问题分类');</script>
<?php } ?>
<script type="text/javascript">Menuon(0);</script>

<script type="text/javascript">
$(function() { 
	//获取class为caname的元素 
	$(".canedit").dblclick(function() { 
	var td = $(this); 
	var itemid=td[0].id;
	var title=td[0].title;
	var txt = td.text(); 
	var input = $("<input type='text'value='" + txt + "'/>"); 
	td.html(input); 
	input.click(function() { return false; }); 
	//获取焦点 
	input.trigger("focus"); 
	
	input.blur(function() { 
	var newtxt = $(this).val(); 

	
	if (newtxt != txt) { 
	td.html(newtxt); 
	var caid = $.trim(td.prev().text()); 

	var url = "?moduleid=2&file=fapiao&action=ed&itemid=" + itemid + "&v=" + newtxt+"&t=" + title; 

	$.get(url, function(data) { 
	if(data=="1") 
	{ 
 location.reload();
	td.html(txt); 
	return; 
	} 
	
	td.html(newtxt); 
	}); 
	
	} 
	else 
	{ 
	td.html(newtxt); 
	} 
	}); 
	}); 
	}); 
</script>
<?php include tpl('footer');?>