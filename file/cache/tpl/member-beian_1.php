<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', $module);?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>beian.css"/>
<script type="text/javascript" src="<?php echo $CFG['url'];?>file/script/beian.js"/></script>
<script type="text/javascript" src="<?php echo $CFG['url'];?>file/script/data.js"/></script>
<script type="text/javascript" src="<?php echo $CFG['url'];?>file/script/check.js"/></script>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="add"><a href="beian.php?action=add"><span>申请备案</span></a></td>
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
<?php if($beian) { ?>
<div class="tts">订单情况</div>
<div class="bd">
<?php if($malls) { ?>
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th width="80">建站项目编号</th>
<th>产品名称</th>
<th>购买时间</th>
<th>维护到期时间</th>
<th>使用情况</th>
<th>过期情况</th>
<th width="200">操作</th>
</tr>
<?php if(is_array($malls)) { foreach($malls as $k => $v) { ?>
<tr align="center"<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td><?php echo $v['itemid'];?></td>
<td class="px11" ><?php echo $v['title'];?></td>
<td class="px11" ><?php echo date("Y-m-d H:i",$v['addtime'])?></td>
<td class="px11" ><?php echo date("Y-m-d H:i",$v['endtime'])?></td>
<td><?php echo $v['shiyong'];?></td>
<td><?php echo $v['days'];?></td>
<td class="px11"><a href="beian.php?action=update&step=2&itemid=<?php echo $v['itemid'];?>&tp=1" class='u_btns'>备案</a></td>
</tr>
<?php } } ?>
</table>
<?php } else { ?>
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th width="80">建站项目编号</th>
<th>产品名称</th>
<th>购买时间</th>
<th>维护到期时间</th>
<th>使用情况</th>
<th>过期情况</th>
<th width="200">操作</th>
</tr>
<tr align="center"<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td colspan=7>无定制项目的订单</td>
</tr>
</table>
<?php } ?>
<?php if($groups) { ?>
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th width="80">模版项目编号</th>
<th>产品名称</th>
<th>购买时间</th>
<th>维护到期时间</th>
<th>使用情况</th>
<th>过期情况</th>
<th width="200">操作</th>
</tr>
<?php if(is_array($groups)) { foreach($groups as $k => $v) { ?>
<tr align="center"<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td><?php echo $v['itemid'];?></td>
<td class="px11" ><?php echo $v['title'];?></td>
<td class="px11" ><?php echo date("Y-m-d H:i",$v['addtime'])?></td>
<td class="px11" ><?php echo date("Y-m-d H:i",$v['endtime'])?></td>
<td><?php echo $v['shiyong'];?></td>
<td><?php echo $v['days'];?></td>
<td class="px11"><a href="beian.php?action=update&step=2&itemid=<?php echo $v['itemid'];?>&tp=2" class='u_btns'>备案</a></td>
</tr>
<?php } } ?>
</table>
<?php } else { ?>
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th width="80">模版项目编号</th>
<th>产品名称</th>
<th>购买时间</th>
<th>维护到期时间</th>
<th>使用情况</th>
<th>过期情况</th>
<th width="200">操作</th>
</tr>
<tr align="center"<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td colspan=7>无模版项目的订单</td>
</tr>
</table>
<?php } ?>
</div>


<?php } else { ?>

<div class="tts">订单情况</div>
<div class="bd">
<?php if($malls) { ?>
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th width="80">建站项目编号</th>
<th>产品名称</th>
<th>购买时间</th>
<th>维护到期时间</th>
<th>使用情况</th>
<th>过期情况</th>
<th width="200">操作</th>
</tr>
<?php if(is_array($malls)) { foreach($malls as $k => $v) { ?>
<tr align="center"<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td><?php echo $v['itemid'];?></td>
<td class="px11" ><?php echo $v['title'];?></td>
<td class="px11" ><?php echo date("Y-m-d H:i",$v['addtime'])?></td>
<td class="px11" ><?php echo date("Y-m-d H:i",$v['endtime'])?></td>
<td><?php echo $v['shiyong'];?></td>
<td><?php echo $v['days'];?></td>
<?php if($type==1) { ?>
<td class="px11"><a href="beian.php?action=update&step=news&itemid=<?php echo $v['itemid'];?>&tp=1" class='u_btns'>备案</a></td>
<?php } else { ?>
<td class="px11"><a href="beian.php?action=update&step=jieru&itemid=<?php echo $v['itemid'];?>&tp=1" class='u_btns'>备案</a></td>
<?php } ?>
</tr>
<?php } } ?>
</table>
<?php } else { ?>
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th width="80">建站项目编号</th>
<th>产品名称</th>
<th>购买时间</th>
<th>维护到期时间</th>
<th>使用情况</th>
<th>过期情况</th>
<th width="200">操作</th>
</tr>
<tr align="center"<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td colspan=7>无定制项目的订单</td>
</tr>
</table>
<?php } ?>
<?php if($groups) { ?>
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th width="80">模版项目编号</th>
<th>产品名称</th>
<th>购买时间</th>
<th>维护到期时间</th>
<th>使用情况</th>
<th>过期情况</th>
<th width="200">操作</th>
</tr>
<?php if(is_array($groups)) { foreach($groups as $k => $v) { ?>
<tr align="center"<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td><?php echo $v['itemid'];?></td>
<td class="px11" ><?php echo $v['title'];?></td>
<td class="px11" ><?php echo date("Y-m-d H:i",$v['addtime'])?></td>
<td class="px11" ><?php echo date("Y-m-d H:i",$v['endtime'])?></td>
<td><?php echo $v['shiyong'];?></td>
<td><?php echo $v['days'];?></td>
<?php if($type==1) { ?>
<td class="px11"><a href="beian.php?action=update&step=news&itemid=<?php echo $v['itemid'];?>&tp=2" class='u_btns'>备案</a></td>
<?php } else { ?>
<td class="px11"><a href="beian.php?action=update&step=jieru&itemid=<?php echo $v['itemid'];?>&tp=2" class='u_btns'>备案</a></td>
<?php } ?>
</tr>
<?php } } ?>
</table>
<?php } else { ?>
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th width="80">模版项目编号</th>
<th>产品名称</th>
<th>购买时间</th>
<th>维护到期时间</th>
<th>使用情况</th>
<th>过期情况</th>
<th width="200">操作</th>
</tr>
<tr align="center"<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td colspan=7>无模版项目的订单</td>
</tr>
</table>
<?php } ?>
</div>

<?php } ?>
<?php include template('footer', $module);?>