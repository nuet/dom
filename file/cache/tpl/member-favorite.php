<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', $module);?>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="home"><a href="favorite.php"><span>我的收藏</span></a></td>
</tr>
</table>
</div>
<?php if($action == 'add') { ?>
<form method="post" action="favorite.php" onsubmit="return check();">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl">分类 </td>
<td class="tr"><?php echo $type_select;?>&nbsp; <a href="javascript:Dwidget('type.php?item=favorite', '[收藏分类]', 600, 300);" class="t">[管理分类]</a></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 标题</td>
<td class="tr"><input type="text" size="45" name="post[title]" id="title" value="<?php echo $title;?>"/> <?php echo dstyle('post[style]');?> <span id="dtitle" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 网址</td>
<td class="tr"><input type="text" size="60" name="post[url]" id="url" value="<?php echo $url;?>"/> <span id="durl" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">备注</td>
<td class="tr"><input type="text" size="60" name="post[note]" id="note"/></td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr" height="50"><input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value=" 重 置 " class="btn"/></td>
</tr>
</table>
</form>
<script type="text/javascript">s('favorite');m('add');</script>
<?php } else if($action == 'edit') { ?>
<form method="post" action="favorite.php" onsubmit="return check();">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<table cellspacing="1" cellpadding="5" class="tb">
<tr>
<td class="tl">分类</td>
<td class="tr"><?php echo $type_select;?>&nbsp; <a href="javascript:Dwidget('type.php?item=favorite', '[收藏分类]', 600, 300);" class="t">[管理分类]</a></td>
</tr>
<tr>
<td class="tl">显示顺序</td>
<td class="tr f_gray"><input type="text" size="3" name="post[listorder]" id="listorder" value="<?php echo $listorder;?>"/> 请填写数字，数字越大越靠前</td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 标题</td>
<td class="tr"><input type="text" size="45" name="post[title]" id="title" value="<?php echo $title;?>"/> <?php echo dstyle('post[style]', $style);?> <span id="dtitle" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 网址</td>
<td class="tr"><input type="text" size="60" name="post[url]" id="url" value="<?php echo $url;?>"/> <span id="durl" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">备注</td>
<td class="tr"><input type="text" size="60" name="post[note]" id="note" value="<?php echo $note;?>"/></td>
</tr>
<tr>
<td class="tl">&nbsp;</td>
<td class="tr" height="50"><input type="submit" name="submit" value=" 修 改 " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/></td>
</tr>
</table>
</form>
<script type="text/javascript">s('favorite');m('home');</script>
<?php } else { ?>
<form action="favorite.php">
<div class="tt">
&nbsp;<?php echo $fields_select;?>&nbsp;
<input type="text" size="50" name="kw" value="<?php echo $kw;?>" title="关键词"/>&nbsp;
<input type="submit" value=" 搜 索 " class="btn"/>&nbsp;
<input type="button" value=" 重 置 " class="btn" onclick="Go('favorite.php');"/>
</div>
</form>
<div class="ls">
<table cellpadding="0" cellspacing="0" class="tb">
<tr>
<th>分类</th>
<th>标题</th>
<th>描述</th>
<th width="150">添加时间</th>
<th width="80">管理</th>
</tr>
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center" title="备注:<?php echo $v['note'];?>">
<td>&nbsp;<?php if($v['tp']==17) { ?> 模版网站 <?php } else { ?> 定制网站<?php } ?>
&nbsp;</td>
<td align="left">&nbsp;<a href="<?php echo $v['url'];?>" target="_blank" class="t"><?php echo $v['title'];?></a></td>
<td class="f_gray px11"><?php echo dsubstr($v['note'], 50, '...');?> </td>
<td class="f_gray px11"><?php echo $v['addtime'];?></td>
<td>
 <?php if($v['tp']==17) { ?>
<a href="<?php echo $CFG['url'];?>/group/show.php?itemid=<?php echo $v['id'];?>" target="_blank" class="t"><img src="http://www.d.com/admin/image/view.png" width="16" height="16" title="查看" alt=""></a>
 <?php } else { ?>
 <a href="<?php echo $CFG['url'];?>/mall/order.php?itemid=<?php echo $v['id'];?>" target="_blank" class="t"><img src="http://www.d.com/admin/image/view.png" width="16" height="16" title="查看" alt=""></a>
  <?php } ?>
<a href="favorite.php?action=delete&itemid=<?php echo $v['itemid'];?>" onclick="return confirm('确定要删除吗？此操作将不可撤销');"><img width="16" height="16" src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/delete.png" title="删除" alt=""/></a>
</td>
</tr>
<?php } } ?>
</table>
</div>
</form>
<?php if($MG['favorite_limit']) { ?>
<div class="limit">收藏夹容量 <span class="f_b f_red"><?php echo $MG['favorite_limit'];?></span> 条&nbsp;&nbsp;&nbsp;当前已收藏 <span class="f_b"><?php echo $limit_used;?></span> 条&nbsp;&nbsp;&nbsp;还可以收藏 <span class="f_b f_blue"><?php echo $limit_free;?></span> 条</div>
<?php } ?>
<div class="pages"><?php echo $pages;?></div>
<script type="text/javascript">s('favorite');m('home');</script>
<?php } ?>
<?php if($action=='add' || $action=='edit') { ?>
<script type="text/javascript">
function check() {
if(Dd('title').value.length < 2) {
Dmsg('请填写标题', 'title');
return false;
}
if(Dd('url').value.length < 12) {
Dmsg('请填写网址', 'url');
return false;
}
return true;
}
</script>
<?php } ?>
<?php include template('footer', $module);?>