<?php
defined('IN_DESTOON') or exit('Access Denied');
include tpl('header');
show_menu($menus);
?>
<form action="?">
<div class="tt">备案搜索</div>
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="file" value="<?php echo $file;?>"/>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td>&nbsp;
<?php echo $fields_select;?>&nbsp;
<input type="text" size="20" name="kw" value="<?php echo $kw;?>" title="关键词"/>&nbsp;
<?php echo $type_select;?>&nbsp;
<?php echo $status_select;?>&nbsp;
&nbsp;
<?php echo dcalendar('fromtime', $fromtime);?> 至 <?php echo dcalendar('totime', $totime);?>
&nbsp;
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
<div class="tt">备案大厅</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<th width="25"><input type="checkbox" onclick="checkall(this.form);"/></th>
<th>当前状态</th>
<th>负责人</th>
<th>办公室电话</th>
<th>手机号码</th>
<th>电子邮件</th>
<th>证件号码（类型）</th>
<th>快递方式（双击修改）</th>
<th>快递单号（双击修改）</th>
<th width="130">添加时间</th>
<th>会员名称</th>
<th>快递状态</th>
<th width="50">操作</th>
</tr>
<?php foreach($asks as $k=>$v) {?>
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center">
<td><input type="checkbox" name="id[]" value="<?php echo $v['id'];?>"/></td>
<td><?php echo $v['dstatus'];?></td>
<td><?php echo $v['Fzr_xm'];?></td>
<td><?php echo $v['Fzr_dhhm_code'];?>-<?php echo $v['Fzr_dhhm'];?></td>
<td align="left"><?php echo $v['Fzr_sjhm'];?></a></td>
<td><?php echo $v['Fzr_dzyj'];?></td>
<td><?php echo $v['Fzr_zjhm'];?>(<?php echo $v[Fzr_zjlx] ?>)</td>
<td class="canedit" title="restyle"  id="<?php echo $v['id'] ?>" ><?php echo $v[restyle]; ?></td>
<td class="canedit"title="tradeid"  id="<?php echo $v['id'] ?>" ><?php echo $v[tradeid]; ?></td>
<td><?php echo $v['addtime'];?></td>
<td><a href="javascript:_user('<?php echo $v['username'];?>');"><?php echo $v['username'];?></a></td>
<td><?php echo $v['expr'];?></td>
<td>
<a href="javascript:_kd('<?php echo $v['id'];?>');""><img src="admin/image/edit.png" width="16" height="16" title="受理" alt=""/></a>&nbsp;
<a href="?moduleid=<?php echo $moduleid;?>&file=<?php echo $file;?>&action=delete&id=<?php echo $v['id'];?>" onclick="return _delete();"><img src="admin/image/delete.png" width="16" height="16" title="删除" alt=""/></a>
</td>
</tr>
<?php }?>
</table>
<div class="pages"><?php echo $pages;?></div>
<div class="btns">
<input type="checkbox" name="msg" id="msg" value="1" checked=""> 消息通知
<input type="checkbox" name="sms" id="email" value="1"> 邮件通知
<textarea name='mess' cols=30 rows=3 placeholder="如果退回，说明原因，此处会发站内消息"></textarea>
<select name="status" style="width:100px;">
<option value="">修改备案状态</option>
<option value="0">待申请</option>
<option value="1">等待快递</option>
<option value="2">等待审核</option>
<option value="3">已批准</option>
<option value="4">退回</option>
</select>
<select name="express" style="width:100px;">
<option value="">修改快递状态</option>
<option value="0">尚未快递</option>
<option value="1">已投递</option>
<option value="2">已送达</option>
</select>

<input type="submit" value=" 确定 " class="btn" onclick="if(confirm('确定要修改选中备案状态吗？请谨慎操作，未审核前请勿更改快递状态')){this.form.action='?moduleid=<?php echo $moduleid;?>&file=<?php echo $file;?>&action=update&t=update'}else{return false;}"/>&nbsp;
<input type="submit" value=" 退回 " class="btn" onclick="if(confirm('确定要修改选中备案状态为退回吗？退回需要填写原因')){this.form.action='?moduleid=<?php echo $moduleid;?>&file=<?php echo $file;?>&action=update&t=fall'}else{return false;}"/>&nbsp;
<input type="submit" value=" 彻底删除 " class="btn" onclick="if(confirm('确定要删除选中备案申请吗？此操作将不可撤销')){this.form.action='?moduleid=<?php echo $moduleid;?>&file=<?php echo $file;?>&action=update&t=del'}else{return false;}"/>&nbsp;
</div>
</form>
<script>function _kd(n) {Dwidget('?moduleid=2&file=beian&action=edit&dialog=1&id='+n);}</script>
<?php if(!$TYPE) { ?>
<script type="text/javascript">Dwidget('?file=type&item=<?php echo $file;?>', '启用备案大厅，请先添加问题分类');</script>
<?php } ?>
<script type="text/javascript">Menuon(0);</script>

<script type="text/javascript">
$(function() { 
	//获取class为caname的元素 
	$(".canedit").dblclick(function() { 
	var td = $(this); 
	var id=td[0].id;
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

	var url = "?moduleid=2&file=beian&action=ed&id=" + id + "&v=" + newtxt+"&t=" + title; 

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