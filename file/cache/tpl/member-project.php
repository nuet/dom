<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header1', $module);?>
<script type="text/javascript">c(2);var errimg = '<?php echo DT_SKIN;?>image/nopic50.gif';</script>
<?php if($action == 'update') { ?>
<?php if($step == 'edit_price') { ?>
<form method="post" action="trade.php" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">修改价格</td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr">T<?php echo $td['itemid'];?></td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['title'];?></a></td>
</tr>
<tr>
<td class="tl">商品图片</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank"><img src="<?php if($td['thumb']) { ?><?php echo $td['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60"/></a></td>
</tr>
<tr>
<td class="tl">买家 </td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo im_web($td['buyer']);?>&nbsp;<?php } ?>
<a href="<?php echo userurl($td['buyer'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['buyer'];?></a></td>
</tr>
<tr>
<td class="tl">期望物流</td>
<td class="tr"><?php echo $td['buyer_receive'];?></td>
</tr>
<tr>
<td class="tl">买家备注</td>
<td class="tr"><?php echo $td['note'];?></td>
</tr>
<tr>
<td class="tl">下单时间</td>
<td class="tr"><?php echo $td['adddate'];?></td>
</tr>
<tr>
<td class="tl">商品单价</td>
<td class="tr">￥<?php echo $td['price'];?></td>
</tr>
<tr>
<td class="tl">购买数量</td>
<td class="tr"><?php echo $td['number'];?></td>
</tr>
<tr>
<td class="tl">订单金额</td>
<td class="tr f_red">￥<?php echo $td['amount'];?></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span>附加名称</td>
<td class="tr f_gray"><input type="text" size="10" name="fee_name" id="fee_name" value="<?php echo $td['fee_name'];?>"/> 例如运费、退款、优惠等&nbsp;<span id="dfee_name" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span>附加金额</td>
<td class="tr f_gray"><input type="text" size="5" name="fee" id="fee" value="<?php echo $td['fee'];?>"/>  <?php echo $DT['money_unit'];?> 可以为负值&nbsp;<span id="dfee" class="f_red"></span></td>
</tr>
<?php if($td['status'] < 1) { ?>
<tr>
<td class="tl"></td>
<td class="tr"><input type="checkbox" name="confirm_order" value="1"/> 同时确认订单</td>
</tr>
<?php } ?>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
if(!Dd('fee_name').value) {
Dmsg('请填写附加金额名称', 'fee_name');
return false;
}
if(!Dd('fee').value) {
Dmsg('请填写附加金额', 'fee');
return false;
}
if(Dd('fee').value < 0 && Dd('fee').value < -<?php echo $td['amount'];?>) {
Dmsg('附加金额不能小于-<?php echo $td['amount'];?>', 'fee');
return false;
}
return true;
}
</script>
<script type="text/javascript">s('trade');m('action');</script>
<!-- 设计师提交首页 start -->
<?php } else if($step == 'upload_1') { ?>
<form method="post" action="trade.php" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="confirm_order" value="1"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">上传首页作品</td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr">T<?php echo $td['itemid'];?></td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['sort'];?><?php echo $td['title'];?></a></td>
</tr>

<tr>
<td class="tl">作品图片</td>
<td class="tr">
<input type="hidden" name="post[thumb]" id="thumb" value="<?php echo $thumb;?>"/>
<table width="120">
<tr align="center" height="120" class="c_p">
<td width="120"><img src="<?php if($thumb) { ?><?php echo $thumb;?><?php } else { ?><?php echo DT_SKIN;?>image/waitpic.gif<?php } ?>
" width="100" height="100" id="showthumb" title="预览图片" alt="" onclick="if(this.src.indexOf('waitpic.gif') == -1){_preview(Dd('showthumb').src, 1);}else{Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb').value, true);}"/></td>
</tr>
<tr align="center" class="c_p">
<td><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/img_upload.gif" width="12" height="12" title="上传" onclick="Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb').value, true);"/>&nbsp;&nbsp;<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/img_select.gif" width="12" height="12" title="选择" onclick="selAlbum('');"/>&nbsp;&nbsp;<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/img_delete.gif" width="12" height="12" title="删除" onclick="delAlbum('','wait');"/></td>
</tr>
</table>
<span id="dthumb" class="f_red"></span>
</td>
</tr>

<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">s('trade');m('action');</script>
<!-- 设计师提交首页 end -->
<!-- 买家提交需求 start -->
<?php } else if($step == 'upload_5') { ?>
<form method="post" action="trade.php" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="confirm_order" value="1"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">买家提交需求</td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr">T<?php echo $td['itemid'];?></td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['sort'];?><?php echo $td['title'];?></a></td>
</tr>
<tr>
<td class="tl">需求文件</td>
<td class="tr">
     <input type="hidden" size="3" name="nums" value="1">
<table width="120">
<tr>
<td class="tr" style='width: 700px;float: left;'>公司logo上传：<input name="post[logo]" id="fileurl1" type="text" size="50" value="<?php echo $fileurl1;?>"/><?php if($MG['upload'] && check_group($_groupid, $MOD['group_upload'])) { ?>&nbsp;&nbsp;<span onclick="Dfile(<?php echo $moduleid;?>, Dd('fileurl1').value, 'fileurl1', 'jpg|gif|psd|cdr|ai|png|pdf');" class="jt">[上传]</span>&nbsp;&nbsp;<span onclick="if(Dd('fileurl').value) window.open(Dd('fileurl').value);" class="jt">[预览]</span>&nbsp;&nbsp;<span onclick="Dd('fileurl').value='';" class="jt">[删除]</span><?php } ?>
 <span id="dfileurl" class="f_red"></span>   <a href="#">【案例】</a> </td>
</tr>
<tr>
<td class="tr" style='width: 700px;float: left;'>公司介绍及联系方式：<input name="post[contact]" id="fileurl2" type="text" size="50" value="<?php echo $fileurl2;?>"/><?php if($MG['upload'] && check_group($_groupid, $MOD['group_upload'])) { ?>&nbsp;&nbsp;<span onclick="Dfile(<?php echo $moduleid;?>, Dd('fileurl2').value, 'fileurl2', 'doc|txt');" class="jt">[上传]</span>&nbsp;&nbsp;<span onclick="if(Dd('fileurl').value) window.open(Dd('fileurl').value);" class="jt">[预览]</span>&nbsp;&nbsp;<span onclick="Dd('fileurl').value='';" class="jt">[删除]</span><?php } ?>
 <span id="dfileurl" class="f_red"></span> <a href="#">【案例】</a>    </td>
</tr>
<tr>
<td class="tr" style='width: 700px;float: left;' >公司网站目录结构：<input name="post[lm]" id="fileurl3" type="text" size="50" value="<?php echo $fileurl3;?>"/><?php if($MG['upload'] && check_group($_groupid, $MOD['group_upload'])) { ?>&nbsp;&nbsp;<span onclick="Dfile(<?php echo $moduleid;?>, Dd('fileurl3').value, 'fileurl3', 'doc|rar|zip|pdf');" class="jt">[上传]</span>&nbsp;&nbsp;<span onclick="if(Dd('fileurl').value) window.open(Dd('fileurl').value);" class="jt">[预览]</span>&nbsp;&nbsp;<span onclick="Dd('fileurl').value='';" class="jt">[删除]</span><?php } ?>
 <span id="dfileurl" class="f_red"></span> <a href="#">【案例】</a>    </td>
</tr>
<tr>
<td class="tr" style='width: 700px;float: left;' >网站主题图片及广告语：<input name="post[ad]" id="fileurl5" type="text" size="50" value="<?php echo $fileurl4;?>"/><?php if($MG['upload'] && check_group($_groupid, $MOD['group_upload'])) { ?>&nbsp;&nbsp;<span onclick="Dfile(<?php echo $moduleid;?>, Dd('fileurl5').value, 'fileurl5', 'doc|rar|zip');" class="jt">[上传]</span>&nbsp;&nbsp;<span onclick="if(Dd('fileurl').value) window.open(Dd('fileurl').value);" class="jt">[预览]</span>&nbsp;&nbsp;<span onclick="Dd('fileurl').value='';" class="jt">[删除]</span><?php } ?>
 <span id="dfileurl" class="f_red"></span>    <a href="#">【案例】</a> </td>
</tr>
<tr>
<td class="tr" style='width: 700px;float: left;' >具体产品服务新闻：<input name="post[server]" id="fileurl4" type="text" size="50" value="<?php echo $fileurl4;?>"/><?php if($MG['upload'] && check_group($_groupid, $MOD['group_upload'])) { ?>&nbsp;&nbsp;<span onclick="Dfile(<?php echo $moduleid;?>, Dd('fileurl4').value, 'fileurl4', 'rar|zip');" class="jt">[上传]</span>&nbsp;&nbsp;<span onclick="if(Dd('fileurl').value) window.open(Dd('fileurl').value);" class="jt">[预览]</span>&nbsp;&nbsp;<span onclick="Dd('fileurl').value='';" class="jt">[删除]</span><?php } ?>
 <span id="dfileurl" class="f_red"></span>    <a href="#">【案例】</a> </td>
</tr>


</table>
</td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">s('trade');m('action');</script>
<!-- 买家提交需求 end -->


<!-- 买家编辑需求 start -->
<?php } else if($step == 'xq') { ?>
<form method="post" action="trade.php" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="confirm_order" value="1"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">编辑您的需求（只能修改具体产品、服务、新闻）</td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr">T<?php echo $td['itemid'];?></td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['sort'];?><?php echo $td['title'];?></a></td>
</tr>
<tr>
<td class="tl">需求文件</td>
<td class="tr">
     <input type="hidden" size="3" name="nums" value="1">
<table width="120">
<tr>
<td class="tr" style='width: 700px;float: left;' >具体产品、服务、新闻：<input name="post[others]" id="fileurl" type="text" size="50" value="<?php echo $fileurl;?>"/><?php if($MG['upload'] && check_group($_groupid, $MOD['group_upload'])) { ?>&nbsp;&nbsp;<span onclick="Dfile(<?php echo $moduleid;?>, Dd('fileurl').value, 'fileurl', 'rar|zip');" class="jt">[上传]</span>&nbsp;&nbsp;<span onclick="if(Dd('fileurl').value) window.open(Dd('fileurl').value);" class="jt">[预览]</span>&nbsp;&nbsp;<span onclick="Dd('fileurl').value='';" class="jt">[删除]</span><?php } ?>
 <span id="dfileurl" class="f_red"></span>  <a href="#">【例子】</a>  </td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">s('trade');m('action');</script>
<!-- 买家编辑需求 end -->

<!-- 买家选择入围作品 start -->
<?php } else if($step == 're_upload_1') { ?>
<style>
/* CSS Reset */
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, code, form, fieldset, legend, input, button, textarea, blockquote, th, td, p { margin:0; padding:0 }
input, button, select, textarea { outline:none }
li { list-style:none }
img { vertical-align:top; border:none }
textarea { resize:none }
body { width:auto; height:auto; padding:0; margin:0; color: #666; background: #FFF; }
body, input, textarea { font-size:12px; font-family:Arial, Verdana, "Microsoft Yahei", Simsun }
a{cursor:pointer}
a:link{color:#37a;text-decoration:none}
a:visited{color:#669;text-decoration:none}
a:hover{color:#fff;text-decoration:none;background:#37a}
a:active{color:#fff;text-decoration:none;background:#f93}
.clear { clear:both }
.clearfix:after{ content:"."; display:block; font-size: 0; height:0; clear:both; visibility:hidden }
.clearfix{ zoom:1}
td ul{height:100%;}
.c span{float: left;
width: 130px;
height: 20px;text-align: center;}
#note{width:100px;height:30px;background:red}
#radio_wrap{width: 100%;font-size: 0;*word-spacing:-1px;}
@media screen and (-webkit-min-device-pixel-ratio:0){
#radio_wrap{letter-spacing:-4px;}}
#radio_wrap li{position:relative; width: 130px;  border: 1px solid #CCC; display:inline-block; *display:inline; *zoom:1; margin:0 2px;}
#radio_wrap li.checked{border:2px solid red;margin:-1px 1px;}
#radio_wrap li.checked i{width:30px; height:30px; position:absolute; right:0; bottom:0;_right:-1px; _bottom:-1px;background:url(../bg/checked.gif) no-repeat;}
</style>

<form method="post" action="trade.php" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" value="" name="picid" id="picid">
<input type="hidden" name="confirm_order" value="1"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">选择入围作品</td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr"><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=detail">T<?php echo $td['itemid'];?></a></td>
</tr>
<tr>
<td class="tl">产品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['sort'];?><?php echo $td['title'];?>（本套餐可以选择<?php echo $malls['in_select'];?>名初稿）</a></td>
</tr></table>
<table>
<tr>

<td colspan=2 ><div id="radio_wrap">
<table>
<?php if(is_array($re_upload_1s)) { foreach($re_upload_1s as $i => $r_1) { ?>
<tr>
<td class='tl'>设计师：<font style='color:red'><?php echo $r_1['designer'];?></font></td>

<td>
<ul><?php if(is_array($r_1['t'])) { foreach($r_1['t'] as $m => $r_1) { ?>
<li class="c" id=<?php echo $r_1['id'];?>>
<a href="<?php echo $CFG['url'];?>extend/view_pic.php?img=<?php echo $r_1['upload'];?>"  target="_blank">
<img src="<?php echo $r_1['upload'];?>" id="showthumb<?php echo $m;?>" style="width:120px;height:120px" alt="" disabled  />
</a>
<span><input type="radio" name="post[<?php echo $i;?>]" id="pic_id" value="<?php echo $r_1['id'];?>"/></span>
</li>
<?php } } ?>
</ul>
</td>


</tr>
<?php } } ?>


</table></div>
</td>
</tr>

<span id="dthumb" class="f_red"></span>
</td>
</tr>
<tr>
<td class="tr" console=2>
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">s('trade');m('action');</script>
<!-- 买家选择入围作品 end  -->

<!-- 买家确定最终主页 start -->
<?php } else if($step == 're_upload_2') { ?>
<style>
/* CSS Reset */
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, code, form, fieldset, legend, input, button, textarea, blockquote, th, td, p { margin:0; padding:0 }
input, button, select, textarea { outline:none }
li { list-style:none }
img { vertical-align:top; border:none }
textarea { resize:none }
body { width:auto; height:auto; padding:0; margin:0; color: #666; background: #FFF; }
body, input, textarea { font-size:12px; font-family:Arial, Verdana, "Microsoft Yahei", Simsun }
a{cursor:pointer}
a:link{color:#37a;text-decoration:none}
a:visited{color:#669;text-decoration:none}
a:hover{color:#fff;text-decoration:none;background:#37a}
a:active{color:#fff;text-decoration:none;background:#f93}
.clear { clear:both }
.clearfix:after{ content:"."; display:block; font-size: 0; height:0; clear:both; visibility:hidden }
.clearfix{ zoom:1}
td ul{height:100%;}
.c span{float: left;
width: 130px;
height: 20px;text-align: center;}
#note{width:100px;height:30px;background:red}
#radio_wrap{width: 916px;font-size: 0;*word-spacing:-1px;}
@media screen and (-webkit-min-device-pixel-ratio:0){
#radio_wrap{letter-spacing:-4px;}}
#radio_wrap li{position:relative; width: 130px;  border: 1px solid #CCC; display:inline-block; *display:inline; *zoom:1; margin:0 2px;}
#radio_wrap li.checked{border:2px solid red;margin:-1px 1px;}
#radio_wrap li.checked i{width:30px; height:30px; position:absolute; right:0; bottom:0;_right:-1px; _bottom:-1px;background:url(../bg/checked.gif) no-repeat;}
</style>

<form method="post" action="trade.php" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" value="" name="picid" id="picid">
<input type="hidden" name="confirm_order" value="1"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">选择最终主页作品</td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr"><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=detail">T<?php echo $td['itemid'];?></a></td>
</tr>
<tr>
<td class="tl">产品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['sort'];?><?php echo $td['title'];?>（本套餐可以选择1名作品）</a></td>
</tr>
<tr>
<td class="tl">您入围作品为</td>
<td class="tr">
<div id="radio_wrap">
<ul><?php if(is_array($readys)) { foreach($readys as $n => $t) { ?>
<li class="c">

<a href="<?php echo $CFG['url'];?>extend/view_pic.php?img=<?php echo $t['upload'];?>"  target="_blank"><img src="<?php echo $t['upload'];?>"  style="width:120px;height:120px" alt="" ></a>

</li>
<?php } } ?>
</ul></div>

</td>
</tr>
<tr>

<td colspan=2 ><div id="radio_wrap">
<table>
<?php if(is_array($re_upload_1s)) { foreach($re_upload_1s as $i => $r_1) { ?>
<tr>
<td class='tl'>设计师：<font style='color:red'><?php echo $r_1['designer'];?></font></td>

<td>
<ul><?php if(is_array($r_1['t'])) { foreach($r_1['t'] as $m => $r_1) { ?>
<li class="c" id=<?php echo $r_1['id'];?>>

<a href="<?php echo $CFG['url'];?>extend/view_pic.php?img=<?php echo $r_1['upload'];?>"  target="_blank"><img src="<?php echo $r_1['upload'];?>" id="showthumb<?php echo $m;?>" style="width:120px;height:120px" alt="" disabled ></a>
<span><input type="radio" name="post[<?php echo $i;?>]" id="pic_id" value="<?php echo $r_1['id'];?>"/></span>
</li>
<?php } } ?>
</ul>
</td>


</tr>
<?php } } ?>


</table></div>
</td>
</tr>

<span id="dthumb" class="f_red"></span>
</td>
</tr>

<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">s('trade');m('action');</script>
<!-- 买家确定最终主页 end -->

<!-- 买家选择栏目 start -->
<?php } else if($step == 're_upload_3') { ?>
<style>
/* CSS Reset */
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, code, form, fieldset, legend, input, button, textarea, blockquote, th, td, p { margin:0; padding:0 }
input, button, select, textarea { outline:none }
li { list-style:none }
img { vertical-align:top; border:none }
textarea { resize:none }
body { width:auto; height:auto; padding:0; margin:0; color: #666; background: #FFF; }
body, input, textarea { font-size:12px; font-family:Arial, Verdana, "Microsoft Yahei", Simsun }
a{cursor:pointer}
a:link{color:#37a;text-decoration:none}
a:visited{color:#669;text-decoration:none}
a:hover{color:#fff;text-decoration:none;background:#37a}
a:active{color:#fff;text-decoration:none;background:#f93}
.clear { clear:both }
.clearfix:after{ content:"."; display:block; font-size: 0; height:0; clear:both; visibility:hidden }
.clearfix{ zoom:1}
td ul{height:100%;}
.c span{float: left;
width: 130px;
height: 20px;text-align: center;}
#note{width:100px;height:30px;background:red}
#radio_wrap{width: 100%;font-size: 0;*word-spacing:-1px;}
@media screen and (-webkit-min-device-pixel-ratio:0){
#radio_wrap{letter-spacing:-4px;}}
#radio_wrap li{position:relative; width: 130px;  border: 1px solid #CCC; display:inline-block; *display:inline; *zoom:1; margin:0 2px;}
#radio_wrap li.checked{border:2px solid red;margin:-1px 1px;}
#radio_wrap li.checked i{width:30px; height:30px; position:absolute; right:0; bottom:0;_right:-1px; _bottom:-1px;background:url(../bg/checked.gif) no-repeat;}
</style>

<form method="post" action="trade.php" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" value="" name="picid" id="picid">
<input type="hidden" name="confirm_order" value="1"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">选择栏目作品</td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr"><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=detail">T<?php echo $td['itemid'];?></a></td>
</tr>
<tr>
<td class="tl">产品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['sort'];?><?php echo $td['title'];?>（点击确定即确定栏目页，如有不满意之处请联系设计师）</a></td>
</tr>
</table>
<table>
<tr>

<td colspan=2 ><div id="radio_wrap">
<table>
<?php if(is_array($re_upload_1s)) { foreach($re_upload_1s as $i => $r_1) { ?>
<?php if($r_1['t']!="") { ?>
<tr>
<td class='tl'>设计师：<font style='color:red'><?php echo $r_1['designer'];?></font><br><?php if($DT['im_web']) { ?><?php echo im_web($r_1['company_id'].'&mid=16&itemid='.$v['mallid']);?> <?php } ?>
<a href="message.php?action=send&touser=<?php echo $r_1['company_id'];?>" target="_blank"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_message.gif" title="发送站内信" align="absmiddle"/></a></td>
<td>
<ul><?php if(is_array($r_1['t'])) { foreach($r_1['t'] as $m => $r_1) { ?>
<li class="c" id=<?php echo $r_1['id'];?>>
<a href="<?php echo $CFG['url'];?>extend/view_pic.php?img=<?php echo $r_1['upload'];?>"  target="_blank"><img src="<?php echo $r_1['upload'];?>" id="showthumb<?php echo $m;?>" style="width:120px;height:120px" alt="" disabled ></a>
<input type="hidden" name="post[<?php echo $i;?>][]" id="pic_id" value="<?php echo $r_1['id'];?>" />
<span><?php echo $r_1['note'];?></span>
</li>
<?php } } ?>
</ul>
<?php } ?>

</td>


</tr>
<?php } } ?>


</table></div>
</td>
</tr>

<span id="dthumb" class="f_red"></span>
</td>
</tr>

<td class="tr" console=2>         
<input type="submit" name="submit" value=" 确 定 " onclick=" if(!confirm('确认栏目已制作完成么？\n\n请注意:确认后栏目页即为这些')) return false;" class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">s('trade');m('action');</script>
<!-- 买家选择栏目 end -->

  <!-- 编辑栏目图片 start -->
<?php } else if($step == 'edit_order1') { ?>
<form method="post" action="trade.php" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="id" value="<?php echo $ready['id'];?>"/>

<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">上传首页作品</td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr">T<?php echo $td['itemid'];?></td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['sort'];?><?php echo $td['title'];?></a></td>
</tr>

<tr>
<td class="tl">作品图片</td>
<td class="tr">
<input type="hidden" name="post[thumb]" id="thumb" value="<?php echo $thumb;?>"/>
<table width="120">
<tr align="center" height="120" class="c_p">
<td width="120"><img src="<?php if($ready['upload']) { ?><?php echo $ready['upload'];?><?php } else { ?><?php echo DT_SKIN;?>image/waitpic.gif<?php } ?>
" width="100" height="100" id="showthumb" title="预览图片" alt="" onclick="if(this.src.indexOf('waitpic.gif') == -1){_preview(Dd('showthumb').src, 1);}else{Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb').value, true);}"/></td>
</tr>
<tr align="center" class="c_p">
<td><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/img_upload.gif" width="12" height="12" title="上传" onclick="Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb').value, true);"/>&nbsp;&nbsp;<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/img_select.gif" width="12" height="12" title="选择" onclick="selAlbum('');"/>&nbsp;&nbsp;<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/img_delete.gif" width="12" height="12" title="删除" onclick="delAlbum('','wait');"/></td>
</tr>
</table>
<span id="dthumb" class="f_red"></span>
</td>
</tr>
<tr>
<td class="tl">栏目名称</td>
<td class="tr"><input type="text" name="note" value="<?php echo $ready['note'];?>"/></td>
</tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">s('trade');m('action');</script>
  <!-- 编辑栏目图片 end -->
  <!--管理已上传栏目图片 start -->
<?php } else if($step == 'upload_4') { ?>
<div class="tt">
<div class="bd">
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th width="60">缩略图</th>
<th>栏目名称</th>
<th width="80">买家</th>
<th width="<?php if($DT['im_web']) { ?>40<?php } else { ?>16<?php } ?>
">&nbsp;</th>
<th width="75">下单时间</th>
<th width="75">更新时间</th>
<th width="90">状态</th>
</tr>
<?php if(is_array($readys)) { foreach($readys as $k => $v) { ?>
<tr align="center"<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td rowspan="2" height="70"><a href="template.php?id=<?php echo $v['id'];?>" target="_blank"><img src="<?php if($v['upload']) { ?><?php echo $v['upload'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic50.gif<?php } ?>
" width="50" height="50" onerror="this.src=errimg;"/></a></td>
<td class="f_b f_dblue"><?php echo $v['note'];?></td>
<td class="px11"><a href="<?php echo userurl($v['a']['buyer'], 'file=contact');?>" target="_blank"><?php echo $v['a']['buyer'];?></a></td>
<td><?php if($DT['im_web']) { ?><?php echo im_web($v['a']['buyer'].'&mid=16&itemid='.$v['mallid']);?> <?php } ?>
<a href="message.php?action=send&touser=<?php echo $v['a']['buyer'];?>" target="_blank"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_message.gif" title="发送站内信" align="absmiddle"/></a></td>
<td class="px11"><?php echo $v['addtime'];?></td>
<td class="px11"><?php echo $v['updatetime'];?></td>
<td><a href="trade.php?itemid=<?php echo $v['rid'];?>&action=update&step=edit_order1&id=<?php echo $v['id'];?>" style="color:#4a4a4a">编辑</a></td>
</tr>
<tr<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td colspan="8" class="f_gray">
<span class="f_r">
<strong>单号：</strong><a href="trade.php?itemid=<?php echo $v['rid'];?>&action=update&step=detail" target='_blank'>T<?php echo $v['rid'];?></a>&nbsp;&nbsp;
</td>
</tr>
<?php } } ?>
<?php if($trades) { ?>
<tr align="center">
<td height="30">&nbsp;</td>
<td><strong>小计</strong></td>
<td class="f_blue f_b px11"><?php echo $money;?></td>
<td colspan="5" align="left" class="f_red">&nbsp;&nbsp;提示：如果交易中有任何问题，请与网站联系</td>
</tr>
<?php } ?>
</table>
</div>  
<!--管理已上传栏目图片 end -->
<!--批量上传栏目 start -->
<?php } else if($step == 'upload_2') { ?>
<form method="post" action="trade.php" name="dform" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="confirm_order" value="1"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">上传栏目作品</td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr">T<?php echo $td['itemid'];?></td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['sort'];?><?php echo $td['title'];?></a></td>
</tr>
<style>
.a{size: 10;}
</style>
<tr>
<td class="tl">栏目作品</td>
<td class="tr">
     <input type="hidden" size="3" name="nums" value="1">
<input type="hidden" name="post[thumb0]" id="thumb0" value="<?php echo $thumb0;?>"/>
<table width="120">
<tr align="center" height="120" class="c_p">
<td width="120"><img src="<?php if($thumb0) { ?><?php echo $thumb0;?><?php } else { ?><?php echo DT_SKIN;?>image/waitpic.gif<?php } ?>
" width="100" height="100" id="showthumb0" title="预览图片" alt="" onclick="if(this.src.indexOf('waitpic.gif') == -1){_preview(Dd('showthumb').src, 1);}else{Dalbum('0',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb0').value, true);}"/></td>
</tr>
</table>
 <input type="text" name="pot[titledb0]" id="title" placeholder="栏目名称" value="<?php echo $title;?>"/>
 
 
   <a href="#" title="点击增加1项" onClick="showinput()"><img border='0' src='<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/menu_add.gif'></a> 
<span id="dthumb" class="f_red"></span><div id='input0' class="a"></div>
</td>
</tr>
<script>
totalnum=0;
limitnum=15;
function showinput(){

if(totalnum>(limitnum-1)){
alert("你最多只能上"+limitnum+"传张图片!");
return ;
}
var str='';
var divid='input'+totalnum;
var num=2;
num=document.dform.nums.value;
for(var i=1;i<=num;i++){
totalnum=totalnum+i;
str+="<p><input type='hidden' name=\"post[thumb"+totalnum+"]\" id=\"thumb"+totalnum+"\" value=\"$thumb"+totalnum+"\"/><table width='120'><tr align='center' height='120' class='c_p'><td width='120'><img src='<?php if($thumb["+totalnum+"]) { ?>{$thumb["+totalnum+"]}<?php } else { ?><?php echo DT_SKIN;?>image/waitpic.gif<?php } ?>
' width='100' height='100' id=\"showthumb"+totalnum+"\" title='预览图片' alt=''onclick=\"if(this.src.indexOf('waitpic.gif') == -1){_preview(Dd('showthumb"+totalnum+"').src, 1);}else{Dalbum("+totalnum+",<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb"+totalnum+"').value, true);}\" /></td></tr></table><input type='text' name=\"pot[titledb"+totalnum+"]\" id='title["+totalnum+"]' placeholder='栏目名称' /></p>";

}
document.getElementById(divid).innerHTML=str+"<div class='a' id='input"+totalnum+"'></div>";

} 
</script>

<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">s('trade');m('action');</script>

<!--批量上传栏目 end -->


<!--批量上传栏目PSD start -->
<?php } else if($step == 'upload_3') { ?>
<form method="post" action="trade.php" name="dform" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="confirm_order" value="1"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">上传栏目PSD作品</td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr">T<?php echo $td['itemid'];?></td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['sort'];?><?php echo $td['title'];?></a></td>
</tr>
<style>
.a{size: 10;}
</style>
<tr>

<td class="tl">栏目作品</td>
<td class="tr">
     <input type="hidden" size="3" name="nums" value="1">
<table width="120">
<tr>
<td class="tr" style='width: 600px;float: left;' console=2> <input type="text" name="pot[titledb0]" id="title" placeholder="栏目名称" value="<?php echo $title;?>"/><input name="post[fileurl0]" id="fileurl" type="text" size="50" value="<?php echo $fileurl;?>"/><?php if($MG['upload'] && check_group($_groupid, $MOD['group_upload'])) { ?>&nbsp;&nbsp;<span onclick="Dfile(<?php echo $moduleid;?>, Dd('fileurl').value, 'fileurl', 'psd|zip|rar|ai|cdr');" class="jt">[上传]</span>&nbsp;&nbsp;<span onclick="if(Dd('fileurl').value) window.open(Dd('fileurl').value);" class="jt">[预览]</span>&nbsp;&nbsp;<span onclick="Dd('fileurl').value='';" class="jt">[删除]</span><?php } ?>
 <span id="dfileurl" class="f_red"></span>   <a href="#" title="点击增加1项" onClick="showinput()"><img border='0' style='float: right;width: 12px;
height: 12px;' src='<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/menu_add.gif'></a> </td>
</tr>
</table>

 
 

<span id="dthumb" class="f_red"></span><div id='input0' class="a"></div>
</td>
</tr>
<script>
totalnum=0;
limitnum=15;
function showinput(){

if(totalnum>(limitnum-1)){
alert("你最多只能上"+limitnum+"传张文件!");
return ;
}
var str='';
var divid='input'+totalnum;
var num=2;
num=document.dform.nums.value;
for(var i=1;i<=num;i++){
totalnum=totalnum+i;
str+="<p><input type='text' name=\"pot[titledb"+totalnum+"]\" id='title["+totalnum+"]' placeholder='栏目名称' /><input name='post[fileurl"+totalnum+"]' id='fileurl"+totalnum+"' type='text' size='50' value='<?php echo $fileurl;?>'/><?php if($MG['upload']["+totalnum+"] && check_group($_groupid, $MOD['group_upload']["+totalnum+"])) { ?>&nbsp;&nbsp;<span onclick=\"Dfile(<?php echo $moduleid;?>, Dd('fileurl"+totalnum+"').value, 'fileurl"+totalnum+"', '<?php echo $MOD['upload'];?>');\" class='jt'>[上传]</span>&nbsp;&nbsp;<span onclick=\"if(Dd('fileurl"+totalnum+"').value) window.open(Dd('fileurl"+totalnum+"').value);\" class='jt'>[预览]</span>&nbsp;&nbsp;<span onclick=\"Dd('fileurl"+totalnum+"').value='';\" class='jt'>[删除]</span><?php } ?>
<span id='dfileurl' class='f_red'></span> </p>";

}
document.getElementById(divid).innerHTML=str+"<div class='a' id='input"+totalnum+"'></div>";

} 
</script>

<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">s('trade');m('action');</script>

<!--批量上传栏目PSD start -->

<!--订单详情 start -->
<?php } else if($step == 'detail') { ?>
<div class="t2">订单详情</div>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">订单单号</td>
<td class="tr">T<?php echo $td['itemid'];?> <?php if($DT['trade']) { ?>(<?php echo $DT['trade_nm'];?>订单单号:<a href="https://lab.alipay.com/consume/queryTradeDetail.htm?tradeNo=<?php echo $td['trade_no'];?>" target="_blank" class="t"><?php echo $td['trade_no'];?></a>)<?php } ?>
</td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['title'];?></a></td>
</tr>
<tr>
<td class="tl">商品图片</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank"><img src="<?php if($td['thumb']) { ?><?php echo $td['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60"/></a></td>
</tr>
<?php if($td['seller'] == $_username) { ?>
<tr>
<td class="tl">买家 </td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo im_web($td['buyer']);?>&nbsp;<?php } ?>
<a href="<?php echo userurl($td['buyer'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['buyer'];?></a></td>
</tr>
<?php } else if($td['buyer'] == $_username) { ?>
<tr>
<td class="tl">卖家</td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo im_web($td['seller']);?>&nbsp;<?php } ?>
<a href="<?php echo userurl($td['seller'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['seller'];?></a></td>
</tr>
<?php } ?>
</table>
<div class="t2">物流信息</div>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">邮编</td>
<td class="tr"><?php echo $td['buyer_postcode'];?></td>
</tr>
<tr>
<td class="tl">地址</td>
<td class="tr"><?php echo $td['buyer_address'];?></td>
</tr>
<tr>
<td class="tl">姓名</td>
<td class="tr"><?php echo $td['buyer_name'];?></td>
</tr>
<tr>
<td class="tl">手机</td>
<td class="tr"><?php echo $td['buyer_mobile'];?> <?php if($DT['sms']) { ?>&nbsp;&nbsp;<a href="sms.php?action=add&auth=<?php echo encrypt($td['buyer_mobile']);?>" target="_blank"><img src="<?php echo DT_SKIN;?>image/sendsms.gif" align="absmiddle" title="发送短信" alt=""/></a><?php } ?>
</td>
</tr>
<tr>
<td class="tl">电话</td>
<td class="tr"><?php echo $td['buyer_phone'];?></td>
</tr>
<tr>
<td class="tl">期望物流</td>
<td class="tr"><?php echo $td['buyer_receive'];?></td>
</tr>
<tr>
<td class="tl">买家备注</td>
<td class="tr"><?php echo $td['note'];?></td>
</tr>
<?php if($td['send_time']) { ?>
<tr>
<td class="tl">物流类型</td>
<td class="tr"><?php echo $td['send_type'];?></td>
</tr>
<tr>
<td class="tl">物流号码</td>
<td class="tr"><?php echo $td['send_no'];?><?php if($td['send_no']) { ?> &nbsp;<a href="<?php echo DT_PATH;?>api/express.php?e=<?php echo urlencode($td['send_type']);?>&n=<?php echo $td['send_no'];?>" target="_blank" class="t">[物流追踪]</a><?php } ?>
</td>
</tr>
<?php } ?>
</table>
<div class="t2">价格信息</div>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">商品单价</td>
<td class="tr">￥<?php echo $td['price'];?></td>
</tr>
<tr>
<td class="tl">购买数量</td>
<td class="tr"><?php echo $td['number'];?></td>
</tr>
<?php if($td['fee_name'] && $td['fee']) { ?>
<tr>
<td class="tl"><?php echo $td['fee_name'];?></td>
<td class="tr">￥<?php echo $td['fee'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl">订单总额</td>
<td class="tr f_red">￥<?php echo $td['total'];?></td>
</tr>
</table>
<div class="t2">订单状态</div>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">下单时间</td>
<td class="tr"><?php echo $td['adddate'];?></td>
</tr>
<tr>
<td class="tl">最后更新</td>
<td class="tr"><?php echo $td['updatedate'];?></td>
</tr>
<?php if($td['send_time']) { ?>
<tr>
<td class="tl">发货时间</td>
<td class="tr"><?php echo $td['send_time'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl">订单状态</td>
<td class="tr"><?php echo $_status[$td['status']];?></td>
</tr>
<?php if($td['buyer_reason']) { ?>
<tr>
<td class="tl">退款理由</td>
<td class="tr"><?php echo $td['buyer_reason'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl"> </td>
<td class="tr"><input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">s('trade');m('<?php echo $nav;?>');</script>
<!--订单详情 end -->

<!--首付款 start -->
<?php } else if($step == 'pay_1') { ?>
<form method="post" action="trade.php" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">订单支付</td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr">T<?php echo $td['itemid'];?> <?php if($DT['trade']) { ?>(<?php echo $DT['trade_nm'];?>订单单号:<?php echo $td['trade_no'];?>)<?php } ?>
</td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['title'];?></a></td>
</tr>
<tr>
<td class="tl">商品图片</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank"><img src="<?php if($td['thumb']) { ?><?php echo $td['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60"/></a></td>
</tr>
<tr>
<td class="tl">设计师</td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo im_web($td['designer']);?>&nbsp;<?php } ?>
<a href="<?php echo userurl($td['designer'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['designer'];?></a></td>
</tr>
<tr>
<td class="tl">下单时间</td>
<td class="tr"><?php echo $td['adddate'];?></td>
</tr>
<tr>
<td class="tl">期望物流</td>
<td class="tr"><?php echo $td['buyer_receive'];?></td>
</tr>
<tr>
<td class="tl">我的备注</td>
<td class="tr"><?php echo $td['note'];?></td>
</tr>
<tr>
<td class="tl">商品单价</td>
<td class="tr">￥<?php echo $td['price'];?></td>
</tr>
<tr>
<td class="tl">购买数量</td>
<td class="tr"><?php echo $td['number'];?></td>
</tr>
<?php if($td['fee']>0.1) { ?>
<tr>
<td class="tl"><?php echo $td['fee_name'];?></td>
<td class="tr">￥<?php echo $td['fee'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl">实付金额</td>
<td class="tr f_red">￥<?php echo $money;?></td>
</tr>
<tr>
<td class="tl">帐户余额</td>
<td class="tr f_blue">￥<?php echo $_money;?></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 支付密码</td>
<td class="tr"><?php include template('password', 'chip');?>&nbsp;<span id="dpassword" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
if(Dd('password').value == '') {
Dmsg('请填写支付密码', 'password');
return false;
}
return confirm('您确认此订单，并立即支付吗？');
}
</script>
<script type="text/javascript">s('trade');m('action_order');</script>
<!--首付款 end -->

<!--第二次付款 start -->
<?php } else if($step == 'pay_2') { ?>
<form method="post" action="trade.php" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">订单支付</td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr">T<?php echo $td['itemid'];?> <?php if($DT['trade']) { ?>(<?php echo $DT['trade_nm'];?>订单单号:<?php echo $td['trade_no'];?>)<?php } ?>
</td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['title'];?></a></td>
</tr>
<tr>
<td class="tl">商品图片</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank"><img src="<?php if($td['thumb']) { ?><?php echo $td['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60"/></a></td>
</tr>
<tr>
<td class="tl">设计师</td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo im_web($td['designer']);?>&nbsp;<?php } ?>
<a href="<?php echo userurl($td['designer'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['designer'];?></a></td>
</tr>
<tr>
<td class="tl">下单时间</td>
<td class="tr"><?php echo $td['adddate'];?></td>
</tr>
<tr>
<td class="tl">期望物流</td>
<td class="tr"><?php echo $td['buyer_receive'];?></td>
</tr>
<tr>
<td class="tl">我的备注</td>
<td class="tr"><?php echo $td['note'];?></td>
</tr>
<tr>
<td class="tl">商品单价</td>
<td class="tr">￥<?php echo $td['price'];?>(已支付<?php echo $td['ready_money'];?>)</td>
</tr>
<tr>
<td class="tl">购买数量</td>
<td class="tr"><?php echo $td['number'];?></td>
</tr>
<?php if($td['fee']>0.1) { ?>
<tr>
<td class="tl"><?php echo $td['fee_name'];?></td>
<td class="tr">￥<?php echo $td['fee'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl">实付金额</td>
<td class="tr f_red">￥<?php echo $money;?></td>
</tr>
<tr>
<td class="tl">帐户余额</td>
<td class="tr f_blue">￥<?php echo $_money;?></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 支付密码</td>
<td class="tr"><?php include template('password', 'chip');?>&nbsp;<span id="dpassword" class="f_red"></span></td>
</tr>

<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
if(Dd('password').value == '') {
Dmsg('请填写支付密码', 'password');
return false;
}
return confirm('您确认此订单，并立即支付吗？');
}
</script>
<script type="text/javascript">s('trade');m('action_order');</script>
<?php } else if($step == 'pay_3') { ?>
<form method="post" action="trade.php" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">订单支付</td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr">T<?php echo $td['itemid'];?> <?php if($DT['trade']) { ?>(<?php echo $DT['trade_nm'];?>订单单号:<?php echo $td['trade_no'];?>)<?php } ?>
</td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['title'];?></a></td>
</tr>
<tr>
<td class="tl">商品图片</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank"><img src="<?php if($td['thumb']) { ?><?php echo $td['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60"/></a></td>
</tr>
<tr>
<td class="tl">设计师</td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo im_web($td['designer']);?>&nbsp;<?php } ?>
<a href="<?php echo userurl($td['designer'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['designer'];?></a></td>
</tr>
<tr>
<td class="tl">下单时间</td>
<td class="tr"><?php echo $td['adddate'];?></td>
</tr>
<tr>
<td class="tl">期望物流</td>
<td class="tr"><?php echo $td['buyer_receive'];?></td>
</tr>
<tr>
<td class="tl">我的备注</td>
<td class="tr"><?php echo $td['note'];?></td>
</tr>
<tr>
<td class="tl">商品单价</td>
<td class="tr">￥<?php echo $td['price'];?>(已支付<?php echo $td['ready_money'];?>)</td>
</tr>
<tr>
<td class="tl">购买数量</td>
<td class="tr"><?php echo $td['number'];?></td>
</tr>
<?php if($td['fee']>0.1) { ?>
<tr>
<td class="tl"><?php echo $td['fee_name'];?></td>
<td class="tr">￥<?php echo $td['fee'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl">实付金额</td>
<td class="tr f_red">￥<?php echo $money;?></td>
</tr>
<tr>
<td class="tl">帐户余额</td>
<td class="tr f_blue">￥<?php echo $_money;?></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 支付密码</td>
<td class="tr"><?php include template('password', 'chip');?>&nbsp;<span id="dpassword" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
if(Dd('password').value == '') {
Dmsg('请填写支付密码', 'password');
return false;
}
return confirm('您确认此订单，并立即支付吗？');
}
</script>
<script type="text/javascript">s('trade');m('action_order');</script>
<!--第二次付款 end -->

<!--一次性付款 start -->
<?php } else if($step == 'pay') { ?>
<form method="post" action="trade.php" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">订单支付</td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr">T<?php echo $td['itemid'];?> <?php if($DT['trade']) { ?>(<?php echo $DT['trade_nm'];?>订单单号:<?php echo $td['trade_no'];?>)<?php } ?>
</td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['title'];?></a></td>
</tr>
<tr>
<td class="tl">商品图片</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank"><img src="<?php if($td['thumb']) { ?><?php echo $td['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60"/></a></td>
</tr>
<tr>
<td class="tl">卖家</td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo im_web($td['seller']);?>&nbsp;<?php } ?>
<a href="<?php echo userurl($td['seller'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['seller'];?></a></td>
</tr>
<tr>
<td class="tl">下单时间</td>
<td class="tr"><?php echo $td['adddate'];?></td>
</tr>
<tr>
<td class="tl">期望物流</td>
<td class="tr"><?php echo $td['buyer_receive'];?></td>
</tr>
<tr>
<td class="tl">我的备注</td>
<td class="tr"><?php echo $td['note'];?></td>
</tr>
<tr>
<td class="tl">商品单价</td>
<td class="tr">￥<?php echo $td['price'];?></td>
</tr>
<tr>
<td class="tl">购买数量</td>
<td class="tr"><?php echo $td['number'];?></td>
</tr>
<?php if($td['fee']>0.1) { ?>
<tr>
<td class="tl"><?php echo $td['fee_name'];?></td>
<td class="tr">￥<?php echo $td['fee'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl">实付金额</td>
<td class="tr f_red">￥<?php echo $money;?></td>
</tr>
<tr>
<td class="tl">帐户余额</td>
<td class="tr f_blue">￥<?php echo $_money;?></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 支付密码</td>
<td class="tr"><?php include template('password', 'chip');?>&nbsp;<span id="dpassword" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
if(Dd('password').value == '') {
Dmsg('请填写支付密码', 'password');
return false;
}
return confirm('您确认此订单，并立即支付吗？');
}
</script>
<script type="text/javascript">s('trade');m('action_order');</script>
<!--一次性付款 end -->

<!--延长时间  start -->
<?php } else if($step == 'add_time') { ?>
<form method="post" action="trade.php" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">延长买家确认时间</td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span>延长时间</td>
<td class="tr f_gray"><input type="text" size="10" name="add_time" id="add_time" value="<?php echo $td['add_time'];?>"/> 单位:小时 1天=24小时 只能为整数&nbsp;<span id="dadd_time" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
return confirm('您确认延长'+Dd('add_time').value+'小时吗？');
}
</script>
<script type="text/javascript">s('trade');m('action');</script>
<?php } else if($step == 'refund') { ?>
<form method="post" action="trade.php" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">申请退款</td>
</tr>
<tr>
<td class="tl">订单单号</td>
<td class="tr">T<?php echo $td['itemid'];?> <?php if($DT['trade']) { ?>(<?php echo $DT['trade_nm'];?>订单单号:<?php echo $td['trade_no'];?>)<?php } ?>
</td>
</tr>
<tr>
<td class="tl">商品名称</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank" class="t"><?php echo $td['title'];?></a></td>
</tr>
<tr>
<td class="tl">商品图片</td>
<td class="tr"><a href="<?php echo $td['linkurl'];?>" target="_blank"><img src="<?php if($td['thumb']) { ?><?php echo $td['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="60" height="60"/></a></td>
</tr>
<tr>
<td class="tl">卖家</td>
<td class="tr"><?php if($DT['im_web']) { ?><?php echo im_web($td['seller']);?>&nbsp;<?php } ?>
<a href="<?php echo userurl($td['seller'], 'file=contact');?>" target="_blank" class="t"><?php echo $td['seller'];?></a></td>
</tr>
<tr>
<td class="tl">下单时间</td>
<td class="tr"><?php echo $td['adddate'];?></td>
</tr>
<tr>
<td class="tl">发货时间</td>
<td class="tr"><?php echo $td['updatedate'];?></td>
</tr>
<tr>
<td class="tl">备注说明</td>
<td class="tr"><?php echo $td['note'];?></td>
</tr>
<tr>
<td class="tl">商品单价</td>
<td class="tr">￥<?php echo $td['price'];?></td>
</tr>
<tr>
<td class="tl">购买数量</td>
<td class="tr"><?php echo $td['number'];?></td>
</tr>
<?php if($td['fee_name'] && $td['fee']) { ?>
<tr>
<td class="tl"><?php echo $td['fee_name'];?></td>
<td class="tr">￥<?php echo $td['fee'];?></td>
</tr>
<?php } ?>
<tr>
<td class="tl">订单总额</td>
<td class="tr f_red">￥<?php echo $money;?></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 理由及证据</td>
<td class="tr"><textarea name="content" id="content" class="dsn"></textarea>
<?php echo deditor($moduleid, 'content', 'Simple', '98%', 200);?><span id="dcontent" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 支付密码</td>
<td class="tr"><?php include template('password', 'chip');?>&nbsp;<span id="dpassword" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
var len = FCKLen();
if(len < 10) {
Dmsg('理由及证据不能少于10个字，当前已输入'+len+'个字', 'content');
return false;
}
if(Dd('password').value == '') {
Dmsg('请填写支付密码', 'password');
return false;
}
return confirm('您确认您提供的理由及证据无误，并申请退款吗？');
}
</script>
<script type="text/javascript">s('trade');m('action_order');</script>
<!--延长时间 end -->
<!--交易评价 start -->
<?php } else if($step == 'comment') { ?>
<form method="post" action="project.php" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">交易评价</td>
</tr>
<tr>
<td class="tl">交易打分</td>
<td class="tr">
<input type="radio" name="star" value="3" id="star_3" checked/><label for="star_3"> 好评 <img src="<?php echo DT_STATIC;?>file/image/star3.gif" width="36" height="12" alt="" align="absmiddle"/></label>
<input type="radio" name="star" value="2" id="star_2"/><label for="star_2"> 中评 <img src="<?php echo DT_STATIC;?>file/image/star2.gif" width="36" height="12" alt="" align="absmiddle"/></label>
<input type="radio" name="star" value="1" id="star_1"/><label for="star_1"> 差评 <img src="<?php echo DT_STATIC;?>file/image/star1.gif" width="36" height="12" alt="" align="absmiddle"/></label>
</td>
</tr>
<tr>
<td class="tl">详细评论</td>
<td class="tr f_gray">
<textarea onkeyup="S();" name="content" id="content" style="width:300px;height:60px;margin:0 0 6px 0;"></textarea><br/>
请您对此次交易做出客观、公正的评论<br/>
(内容限0至500字) 当前已经输入 <span style="color:red;" id="chars">0</span> 字
</td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
if(Dd('content').value.length > 500) {
alert('评论内容不能超过500字');
return false;
}
return confirm('您确认提交此评论吗？提交后评论分数和内容将不可更改');
}
function S() {
Inner('chars', Dd('content').value.length);
}
</script>
<script type="text/javascript">s('trade');m('<?php echo $nav;?>');</script>

<!--交易评价 end -->
<!--评价详情 start -->
<?php } else if($step == 'comment_detail') { ?>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl">当前操作</td>
<td class="tr f_red f_b">评价详情</td>
</tr>
</table>
<div class="t2">买家评价<?php if($_username==$td['buyer']) { ?>(我的)<?php } ?>
</div>
<table cellspacing="1" cellpadding="8" class="tb">
<?php if($cm['seller_star']) { ?>
<tr>
<td class="tl">买家评分</td>
<td class="tr"><img src="<?php echo DT_STATIC;?>file/image/star<?php echo $cm['seller_star'];?>.gif" width="36" height="12" alt="" align="absmiddle"/> <?php echo $STARS[$cm['seller_star']];?>
<?php if($_username == $td['designer'] && !$cm['buyer_reply']) { ?>
&nbsp;&nbsp;<a href="#exp" onclick="Ds('explain');" class="t">[解释]</a>
<?php } ?>
</td>
</tr>
<tr>
<td class="tl">买家评论</td>
<td class="tr"><?php echo nl2br($cm['seller_comment']);?></td>
</tr>
<tr>
<td class="tl">评论时间</td>
<td class="tr px11"><?php echo timetodate($cm['seller_ctime'], 6);?></td>
</tr>
<?php if($cm['buyer_reply']) { ?>
<tr>
<td class="tl">设计师回复</td>
<td class="tr" style="color:#D9251D;"><?php echo nl2br($cm['buyer_reply']);?></td>
</tr>
<tr>
<td class="tl">回复时间</td>
<td class="tr px11"><?php echo timetodate($cm['buyer_rtime'], 6);?></td>
</tr>
<?php } ?>
<?php } else { ?>
<tr>
<td class="tl">买家评论</td>
<td class="tr">暂未评论</td>
</tr>
<?php } ?>
</table>
<div class="t2">设计师评价<?php if($_username==$td['seller']) { ?>(我的)<?php } ?>
</div>
<table cellspacing="1" cellpadding="8" class="tb">
<?php if($cm['buyer_star']) { ?>
<tr>
<td class="tl">设计师评分</td>
<td class="tr"><img src="<?php echo DT_STATIC;?>file/image/star<?php echo $cm['buyer_star'];?>.gif" width="36" height="12" alt="" align="absmiddle"/> <?php echo $STARS[$cm['buyer_star']];?>
<?php if($_username == $td['buyer'] && !$cm['seller_reply']) { ?>
&nbsp;&nbsp;<a href="#exp" onclick="Ds('explain');" class="t">[解释]</a>
<?php } ?>
</td>
</tr>
<tr>
<td class="tl">设计师评论</td>
<td class="tr"><?php echo nl2br($cm['buyer_comment']);?></td>
</tr>
<tr>
<td class="tl">评论时间</td>
<td class="tr px11"><?php echo timetodate($cm['buyer_ctime'], 6);?></td>
</tr>
<?php if($cm['seller_reply']) { ?>
<tr>
<td class="tl">买家回复</td>
<td class="tr" style="color:#D9251D;"><?php echo nl2br($cm['seller_reply']);?></td>
</tr>
<tr>
<td class="tl">回复时间</td>
<td class="tr px11"><?php echo timetodate($cm['seller_rtime'], 6);?></td>
</tr>
<?php } ?>
<?php } else { ?>
<tr>
<td class="tl">设计师评论</td>
<td class="tr">暂未评论</td>
</tr>
<?php } ?>
</table>
<div style="display:none;" id="explain">
<div class="t2">我的解释</div>
<form method="post" action="trade.php" onsubmit="return check();" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="8" class="tb">
<tr>
<td class="tl"><span class="f_red">*</span>我的解释</td>
<td class="tr f_gray">
<textarea onkeyup="S();" name="content" id="content" style="width:300px;height:60px;margin:0 0 6px 0;"></textarea><br/>
请您对此次评价做出客观、合理的解释<br/>
(内容限2至500字) 当前已经输入 <span style="color:red;" id="chars">0</span> 字
</td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
</div>
<a name="exp"></a>
<script type="text/javascript">
function check() {
if(Dd('content').value.length < 2) {
alert('解释内容不能少于2字');
return false;
}
if(Dd('content').value.length > 500) {
alert('解释内容不能超过500字');
return false;
}
return confirm('您确认提交此解释吗？提交后解释内容将不可更改');
}
function S() {
Inner('chars', Dd('content').value.length);
}
</script>
<script type="text/javascript">s('trade');m('<?php echo $nav;?>');</script>
<?php } ?>
<!--评价详情 end -->
<?php } else { ?>
<?php if($MG['trade_sell']) { ?>
<div class="tt">
<form action="trade.php">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<?php echo $fields_select;?>&nbsp;
<input type="text" size="10" name="kw" value="<?php echo $kw;?>" title="关键词"/>&nbsp;
<?php echo $status_select;?>&nbsp;
<?php echo dcalendar('fromtime', $fromtime);?> 至 <?php echo dcalendar('totime', $totime);?>&nbsp;
<input type="submit" value=" 搜 索 " class="btn"/>&nbsp;
<input type="button" value=" 重 置 " class="btn" onclick="Go('trade.php?action=<?php echo $action;?>');"/><br/>
<div class="b10"></div>
单号：<input type="text" size="10" name="itemid" value="<?php echo $itemid;?>"/>&nbsp;
商品ID：<input type="text" size="10" name="mallid" value="<?php echo $mallid;?>"/>&nbsp;
买家：<input type="text" size="20" name="buyer" value="<?php echo $buyer;?>"/>&nbsp;
</form>
</div>
<div class="bd">
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th width="60">缩略图</th>
<th>商品或服务</th>
<th width="60">金额</th>
<th width="80">买家</th>
<th width="<?php if($DT['im_web']) { ?>40<?php } else { ?>16<?php } ?>
">&nbsp;</th>
<th width="75">下单时间</th>
<th width="75">更新时间</th>
<th width="90">状态</th>
</tr>
<?php if(is_array($trades)) { foreach($trades as $k => $v) { ?>
<tr align="center"<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td rowspan="2" height="70"><a href="<?php echo $v['linkurl'];?>" target="_blank"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic50.gif<?php } ?>
" width="50" height="50" onerror="this.src=errimg;"/></a></td>
<td align="left" style="padding:0 8px 0 8px;" class="f_b f_dblue"><a href="<?php echo $v['linkurl'];?>" target="_blank" class="t"><?php echo $v['title'];?></a><?php if($v['status'] == 0) { ?> <img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/new.gif"/><?php } ?>
</td>
<td class="f_blue f_b px11" title="商品价格：￥<?php echo $v['price'];?> x <?php echo $v['number'];?>件 = <?php echo $v['amount'];?><?php if($v['fee']>0.1) { ?> <?php echo $v['fee_name'];?>:<?php echo $v['fee'];?><?php } ?>
"><?php echo $v['money'];?></td>
<td class="px11"><a href="<?php echo userurl($v['buyer'], 'file=contact');?>" target="_blank"><?php echo $v['buyer'];?></a></td>
<td><?php if($DT['im_web']) { ?><?php echo im_web($v['buyer'].'&mid=16&itemid='.$v['mallid']);?> <?php } ?>
<a href="message.php?action=send&touser=<?php echo $v['buyer'];?>" target="_blank"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_message.gif" title="发送站内信" align="absmiddle"/></a></td>
<td class="px11"><?php echo $v['addtime'];?></td>
<td class="px11"><?php echo $v['updatetime'];?></td>
<td><?php echo $v['dstatus'];?></td>
</tr>
<tr<?php if($k%2==1) { ?> bgcolor="#FAFAFA"<?php } ?>
>
<td colspan="8" class="f_gray">
<span class="f_r">
<?php if($v['status'] == 0) { ?>

<?php } else if($v['status'] == 2) { ?>
<input type="button" value="提交首页" class="btn" onclick=" Go('trade.php?itemid=<?php echo $v['itemid'];?>&action=update&step=upload_1&forward=<?php echo $forward;?>');"/>


<?php } else if($v['status'] == 3) { ?>
<input type="button" value="提交首页" class="btn" onclick=" Go('trade.php?itemid=<?php echo $v['itemid'];?>&action=update&step=upload_1&forward=<?php echo $forward;?>');"/>
<?php } else if($v['status'] == 4) { ?>
<?php } else if($v['status'] == 5) { ?>
<?php if($v['m'] == 1) { ?>
 <input type="button" value="编辑栏目页" class="btn" onclick=" Go('trade.php?itemid=<?php echo $v['itemid'];?>&action=update&step=upload_4&forward=<?php echo $forward;?>');"/>
  <input type="button" value="提交栏目页" class="btn" onclick=" Go('trade.php?itemid=<?php echo $v['itemid'];?>&action=update&step=upload_2&forward=<?php echo $forward;?>');"/>
  
<?php } else { ?>

<?php } ?>
 <?php } else if($v['status'] == 6) { ?>
 <?php if($v['m'] == 1) { ?>
  <input type="button" value="项目PSD" class="btn" onclick=" Go('trade.php?itemid=<?php echo $v['itemid'];?>&action=update&step=upload_3&forward=<?php echo $forward;?>');"/>
  <?php } else { ?>

<?php } ?>
 <?php } else if($v['status'] == 7) { ?>
 <?php if($v['m'] == 1) { ?>
  <input type="button" value="项目PSD" class="btn" onclick=" Go('trade.php?itemid=<?php echo $v['itemid'];?>&action=update&step=upload_3&forward=<?php echo $forward;?>');"/>
  <?php } else { ?>

<?php } ?>
<?php } else if($v['status'] == 8) { ?>
<?php if($v['buyer_star']) { ?>
<input type="button" value="评价详情" class="btn" onclick="Go('trade.php?itemid=<?php echo $v['itemid'];?>&action=update&step=comment_detail&forward=<?php echo $forward;?>');"/>
<?php } else { ?>
<input type="button" value="评 价" class="btn" onclick="Go('trade.php?itemid=<?php echo $v['itemid'];?>&action=update&step=comment&forward=<?php echo $forward;?>');"/>
<?php } ?>
<?php } else if($v['status'] == 9) { ?>
<?php } ?>
<input type="button" value="订单详情" class="btn" onclick="Go('trade.php?itemid=<?php echo $v['itemid'];?>&action=update&step=detail');"/>
&nbsp;
</span>
&nbsp;
<strong>单号：</strong><?php echo $v['itemid'];?>&nbsp;&nbsp;
<strong>单价：</strong>￥<?php echo $v['price'];?>&nbsp;&nbsp;
<strong>数量：</strong><?php echo $v['number'];?>件&nbsp;&nbsp;
<strong>备注：</strong><?php echo $v['note'];?>
</td>
</tr>
<?php } } ?>
<?php if($trades) { ?>
<tr align="center">
<td height="30">&nbsp;</td>
<td><strong>小计</strong></td>
<td class="f_blue f_b px11"><?php echo $money;?></td>
<td colspan="5" align="left" class="f_red">&nbsp;&nbsp;提示：如果交易中有任何问题，请与网站联系</td>
</tr>
<?php } ?>
</table>
</div>
<div class="pages"><?php echo $pages;?></div>
<?php } else { ?>
<br/><br/><br/><br/><br/>
<center class="px14">当前共收到 <span class="f_red"><?php echo $orders;?></span> 个订单，请<a href="grade.php" class="t">升级您的会员级别</a>获取查看权限</center>
<?php } ?>
<script type="text/javascript">s('trade');m('action');</script>
<?php } ?>
<?php include template('footer', $module);?>