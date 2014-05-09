<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', $module);?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>beian.css"/>
<script type="text/javascript" src="<?php echo $CFG['url'];?>file/script/beian.js"/></script>
<script type="text/javascript" src="<?php echo $CFG['url'];?>file/script/data.js"/></script>
<script type="text/javascript" src="<?php echo $CFG['url'];?>file/script/check.js"/></script>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="add"><a href="beian.php?action=update&step=1"><span>申请备案</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="home"><a href="beian.php"><span>我的备案</span></a></td>
</tr>
</table>
</div>
<form action="beian.php">
<div class="tt">
&nbsp;<?php echo $fields_select;?>&nbsp;
<?php echo $type_select;?>&nbsp;
<input type="text" size="50" name="kw" value="<?php echo $kw;?>" title="关键词"/>&nbsp;
<?php echo $status_select;?>&nbsp;
<?php echo $order_select;?>&nbsp;
<input type="submit" value=" 搜 索 " class="btn"/>&nbsp;
<input type="button" value=" 重 置 " class="btn" onclick="Go('beian.php');"/>
</div>
</form>
<div class="bd">
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th width="80">编号</th>
<th>单位名称</th>
<th width="60">单位性质</th>
<th width="80">主体证件类型</th>
<th width="75">申请时间</th>
<th width="75">处理时间</th>
<th width="90" style="">状态</th>
<th width="90" style="">操作</th>
</tr>
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<tr align="center"<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td><?php echo $v['itemid'];?></td>
<td align="left" style="padding:0 8px 0 8px;" class="f_b f_dblue"><?php echo $v['taitou'];?></td>
<td class="f_blue f_b px11" ><?php echo $v['money'];?></td>
<td class="px11"><?php echo $v['kdcompany'];?></td>
<td class="px11"><?php echo $v['addtime'];?></td>
<td class="px11"><?php echo $v['maketime'];?></td>
<td><?php echo $v['statu'];?></td>
</tr>
<?php } } ?>
<style>
tr{
height:30px;

}
td{
 
        
         height:30px;
}
</style>
<?php if($groups) { ?>
<tr align="center">
<td height="30">&nbsp;</td>
<td><strong>小计</strong></td>
<td class="f_blue f_b px11"><?php echo $money;?></td>
<td colspan="6" align="left" class="f_red">&nbsp;&nbsp;提示：如果交易中有任何问题，请与网站联系</td>
</tr>
<?php } ?>
</table>
</div>
<div class="pages"><?php echo $pages;?></div>
<script type="text/javascript">s('beian');m('home');</script>
<?php include template('footer', $module);?>