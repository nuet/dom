<?php
defined('IN_DESTOON') or exit('Access Denied');
include tpl('header');

?>

<script type="text/javascript">c(1);</script>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="add"><a href="?moduleid=<?php echo $moduleid ?>&file=express&action=add"><span>添加模板</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="s3"><a href="express.php"><span>奖金模版</span></a></td>
<td class="tab_nav">&nbsp;</td>

</tr>
</table>
</div>

<?php if($action=='add' || $action == 'edit' ){?>
<form method="post" action="?" id="dform" onsubmit="return check();">
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="file" value="<?php echo $file;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<table cellpadding="6" cellspacing="1" class="tb">

<tr>
<td class="tl"><span class="f_red">*</span> 模板名称</td>
<td class="tr"><input name="post[title]" type="text" id="title" size="20" value="<?php echo $title?>"/> <span id="dtitle" class="f_red"></span></td>
</tr>

<tr>
<td class="tl"><span class="f_red">*</span>网站类型</td>
<td class="tr"><input name="post[express]" type="text" id="express" size="20" value="<?php echo $express?>" /> <span id="dexpress" class="f_red"></span></td>
</tr>

<tr>
<td class="tl">一年基础型价格：</td>
<td class="tr"><input name="post[last_money]" type="text" id="last_money" size="10" value="<?php echo $last_money?>" /> <span id="last_money" class="f_red"></span></td>
</tr>

<tr>
<td class="tl">三年基础型价格：</td>
<td class="tr"><input name="post[rmoney_1]" type="text" id="rmoney_1" size="10" value="<?php echo $rmoney_1?>" /> <span id="rmoney_1" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">五年基础型价格：</td>
<td class="tr"><input name="post[rmoney_2]" type="text" id="rmoney_2" size="10" value="<?php echo $rmoney_2?>" /> <span id="rmoney_2" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">一年标准型奖金：</td>
<td class="tr"><input name="post[rmoney_3]" type="text" id="rmoney_3" size="10" value="<?php echo $rmoney_3?>" /> <span id="rmoney_3" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">三年标准型奖金：</td>
<td class="tr"><input name="post[smoney_1]" type="text" id="smoney_1" size="10" value="<?php echo $smoney_1?>" /> <span id="smoney_1" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">五年标准型奖金：</td>
<td class="tr"><input name="post[smoney_2]" type="text" id="smoney_2" size="10" value="<?php echo $smoney_2?>" /> <span id="smoney_2" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">一年标准型奖金：</td>
<td class="tr"><input name="post[rmoney_3]" type="text" id="rmoney_3" size="10" value="<?php echo $rmoney_3?>" /> <span id="rmoney_3" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">三年标准型奖金：</td>
<td class="tr"><input name="post[smoney_1]" type="text" id="smoney_1" size="10" value="<?php echo $smoney_1?>" /> <span id="smoney_1" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">五年标准型奖金：</td>
<td class="tr"><input name="post[smoney_2]" type="text" id="smoney_2" size="10" value="<?php echo $smoney_2?>" /> <span id="smoney_2" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">淘汰资深设计师奖金：</td>
<td class="tr"><input name="post[smoney_3]" type="text" id="smoney_3" size="10" value="<?php echo $smoney_3?>" /> <span id="smoney_3" class="f_red"></span></td>
</tr>

<tr>
<td class="tl"> 显示顺序</td>
<td class="tr f_gray"><input name="post[listorder]" type="text" id="listorder" size="4" value="<?php echo $listorder?>" /> 数字越小越靠前<span id="dlistorder" class="f_red"></span></td>
</tr>

<tr>
<td class="tl"> 备注信息</td>
<td class="tr"><input name="post[note]" type="text" id="note" size="60" value="<?php echo $note?>" /> <span id="dnote" class="f_red"></span></td>
</tr>

<tr>
<td class="tl">&nbsp;</td>
<td class="tr" height="50"><input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value=" 重 置 " class="btn"/></td>
</tr>
</table>
</form>
<?php echo load('clear.js')?> 
<?php if($action=='add'){ ?>
<script type="text/javascript">s('mid_16');m('add');</script>
<?php }else{ ?>
<script type="text/javascript">s('mid_16');m('s3');</script>
<?php }?>
<?php }else if($action == 'area'){ ?>
<script type="text/javascript">
var _del = 0;
</script>
<form method="post" action="?">
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="file" value="<?php echo $file;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<div class="ls">
<table cellpadding="0" cellspacing="0" class="tb">
<tr>
<th width="60">删</th>
<th width="80">排序</th>
<th>地区</th>
<th>默认运费</th>
<th>每增加一件商品增加</th>
<th>所属模板</th>
<th>快递</th>
</tr>
<?php foreach ($lists as $k=>$v){ ?> 
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center">
<td><input name="post[<?php echo $v[itemid]?>][delete] " type="checkbox" value="1" onclick="if(this.checked){_del++;?>else{_del--;?>"/></td>
<td><input name="post[<?php echo $v[itemid]?>][listorder]" type="text" size="5" value="<?php echo $v[listorder]?>" maxlength="3"/></td>
<td><?php echo  area_pos($v[areaid]) ?></td>
<td><input name="post[<?php echo $v[itemid]?>][fee_start]" type="text" size="15" value="<?php echo $v[fee_start]?>"/></td>
<td><input name="post[<?php echo $v[itemid]?>][fee_step]" type="text" size="15" value="<?php echo $v[fee_step]?>"/></td>
<td><?php echo $I[title]?></td>
<td><?php echo $I[express]?></td>
</tr>
<?php }?>
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center">
<td class="f_red">新增</td>
<td><input name="post[0][listorder]" type="text" size="5" value="" maxlength="3"/></td>
<td><?php echo $area_select ?></td>
<td><input name="post[0][fee_start]" type="text" size="15" value=""/></td>
<td><input name="post[0][fee_step]" type="text" size="15" value=""/></td>
<td><?php echo $I[title]?></td>
<td><?php echo $I[express]?></td>
</tr>
<tr>
<td>&nbsp;</td>
<td height="50" colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value=" 提 交 " onclick="if(_del && !confirm('提示:您选择删除'+_del+'个子模板？确定要删除吗？')) return false;" class="btn"/>
</td>
</tr>
</table>
</div>
</form>
<div class="pages"><?php echo $pages?></div>
<script type="text/javascript">s('mid_16');m('s3');</script>
<?php }else{ ?>
<div class="ls">
<table cellpadding="0" cellspacing="0" class="tb">
<tr>
<th>模板名称</th>
<th>网站类型</th>
<th>成功奖金</th>
<th>入围奖金（初|资|高）</th>
<th>淘汰奖金（初|资|高）</th>
<th width="40">修改</th>
<th width="40">删除</th>
</tr>
<?php foreach ($lists as $k=>$v){ ?> 
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center">
<td height="30" align="left">&nbsp;&nbsp<?php echo $v[title]?><?php if($v[note]){ ?> <a href="javascript:" onclick="alert('备注:<?php echo $v[note]?>');"><img src="<?php echo DT_STATIC.'/'.$MODULE[2][moduledir]?>/image/why.gif" title="备注:<?php echo $v[note]?>"/></a><?php } ?></td>
<td><?php echo $v[express]?></td>
<td><?php echo $v[last_money]?></td>
<td><?php echo $v[rmoney_1]?>|<?php echo $v[rmoney_2]?>|<?php echo $v[rmoney_3]?></td>
<td><?php echo $v[smoney_1]?>|<?php echo $v[smoney_2]?>|<?php echo $v[smoney_3]?></td>
<td><a href="?moduleid=<?php echo $moduleid ?>&file=express&action=edit&itemid=<?php echo $v[itemid]?>"><img width="16" height="16" src="<?php echo DT_STATIC.'/'.$MODULE[2][moduledir]?>/image/edit.png" title="修改" alt=""/></a></td>
<td><a href="?moduleid=<?php echo $moduleid ?>&file=express&action=delete&itemid=<?php echo $v[itemid]?>" onclick="if(!confirm('确定要删除吗？此操作将不可撤销')) return false;"><img width="16" height="16" src="<?php echo DT_STATIC.'/'.$MODULE[2][moduledir]?>/image/delete.png" title="删除" alt=""/></a></td>
</tr>
<?php }?>
</table>
</div>

<div class="pages"><?php echo $pages?></div>
<script type="text/javascript">s('mid_16');m('s3');</script>
<?php }?>
<?php if($action=='add' || $action == 'edit' ){?>
<script type="text/javascript">
function check() {
	var l;
	var f;
	f = 'title';
	l = Dd(f).value.length;
	if(l < 2) {
		Dmsg('请填写模板名称', f);
		return false;
	}
	f = 'express';
	l = Dd(f).value.length;
	if(l < 2) {
		Dmsg('请填写快递名称', f);
		return false;
	}
	return true;
}
</script>
<?php } ?>