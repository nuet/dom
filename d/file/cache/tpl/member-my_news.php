<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', 'member');?>
<script type="text/javascript">c(1);</script>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tbody><tr>
<td class="tab_on" id="action"><a href="my_news.php"><span><?php if($_groupid>=5 ) { ?>设计师<?php } else { ?>客户 <?php } ?>
须知</span></a></td>
<td class="tab_nav">&nbsp;</td>
</tr>
</tbody></table>
</div>
<?php if($action=='view') { ?>
<iframe src="" name="send" id="send" style="display:none;"></iframe>
<table cellspacing="1" cellpadding="6" class="tb">
<tbody>
<div class="m_l f_l" style="width:815px;height:400px;">
<div class="left_box"style="width:815px;height:400px;position: relative;">
<h1 class="title" id="title"><?php echo $news['title'];?></h1>
<div class="info">
发布日期：<?php echo $news['addtime'];?>&nbsp;&nbsp;发布者<?php echo $news['editor'];?>
</div>
<div class="introduce">核心提示：<?php echo $news['introduce'];?></div><div id="content"><div class="content" id="article">&nbsp;<?php echo $news['content'];?></div>
</div>
<div class="b10 c_b" style="position: absolute;
bottom: 20px;right:20px"><a href="javascript:history.go(-1);">向上一页</a></div></div>
</tbody></table>
</div>
</div>
<?php } else { ?>
<div class="ls">
<form method="post">
<table cellpadding="0" cellspacing="0" class="tb">
<tr>
<th width="20"><input type="checkbox" onclick="checkall(this.form);"/></th>
<th>标 题</th>
<th>分 类</th>
<th>更新时间</th>
</tr>
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center">
<td><input type="checkbox" name="itemid[]" value="<?php echo $v['itemid'];?>"/></td>
<td align="left" title="<?php echo $v['alt'];?>">&nbsp;&nbsp;<a href="my_news.php?mid=<?php echo $mid;?>&action=view&itemid=<?php echo $v['itemid'];?>" class="t"><?php echo $v['title'];?></a></td>
<td>&nbsp;&nbsp;客户须知&nbsp;&nbsp;</td>
<td class="f_gray px11" title="更新时间 <?php echo $v['editdate'];?>"><?php echo $v['addtime'];?></td>
</tr>
<?php } } ?>
</table>
</div>
<div class="pages"><?php echo $pages;?></div>
</form>
<?php } ?>
<?php include template('footer', 'member');?>