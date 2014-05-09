<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', 'member');?>
<script type="text/javascript">c(1);</script>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="add"><a href="<?php echo $DT['file_my'];?>?mid=<?php echo $mid;?>&action=add"><span>添加<?php echo $MOD['name'];?></span></a></td>
<?php if($_userid) { ?>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="s3"><a href="<?php echo $DT['file_my'];?>?mid=<?php echo $mid;?>"><span>已发布<span class="px10">(<?php echo $nums['3'];?>)</span></span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="s2"><a href="<?php echo $DT['file_my'];?>?mid=<?php echo $mid;?>&status=2"><span>审核中<span class="px10">(<?php echo $nums['2'];?>)</span></span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="s1"><a href="<?php echo $DT['file_my'];?>?mid=<?php echo $mid;?>&status=1"><span>未通过<span class="px10">(<?php echo $nums['1'];?>)</span></span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="s4"><a href="<?php echo $DT['file_my'];?>?mid=<?php echo $mid;?>&status=4"><span>已过期<span class="px10">(<?php echo $nums['4'];?>)</span></span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="type"><a href="group.php"><span>订单管理<span class="px10">(<?php echo $nums['9'];?>)</span></span></a></td>
<?php } ?>
</tr>
</table>
</div>
<?php if($action=='add' || $action=='edit') { ?>
<iframe src="" name="send" id="send" style="display:none;"></iframe>
<form method="post" id="dform" action="<?php echo $DT['file_my'];?>" target="send" onsubmit="return check();">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="mid" value="<?php echo $mid;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<table cellpadding="6" cellspacing="1" class="tb">
<?php if($status==1 && $action=='edit' && $note) { ?>
<tr>
<td class="tl">未通过原因</td>
<td class="tr f_blue"><?php echo $note;?></td>
</tr>
<?php } ?>
<tr>
<td class="tl"><span class="f_red">*</span> 所属分类</td>
<td class="tr"><?php echo ajax_category_select('post[catid]', '', $catid, $moduleid, 'size="2" style="height:120px;width:180px;"');?><span id="dcatid" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> <?php echo $MOD['name'];?>标题</td>
<td class="tr f_gray"><input name="post[title]" type="text" id="title" size="50" value="<?php echo $title;?>"/><span id="dtitle" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">模版图片</td>
<td class="tr">
<input type="hidden" name="post[thumb]" id="thumb" value="<?php echo $thumb;?>"/>
<table width="90px" style="width:90px">
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
<td class="tl"><span class="f_hid">*</span>演示图片</td>
<td>
<?php if($uploads) { ?>
<?php if(is_array($uploads)) { foreach($uploads as $key => $k) { ?>
<p><input type="hidden" class="c" name='ids[id<?php echo $key;?>]' value="<?php echo $k['id'];?>"/><b><input type='text' name='pot[titledb<?php echo $key;?>]' size='10' value="<?php echo $k['title'];?>" placeholder='页面标题'><input name='post[fileurl<?php echo $key;?>]' id='fileurl<?php echo $key;?>' type='text' size='60' value='<?php echo $k['pic'];?>'/>&nbsp;&nbsp;<span onclick="Dfile(<?php echo $moduleid;?>, Dd('fileurl<?php echo $key;?>').value, 'fileurl<?php echo $key;?>', 'jpg|gif|psd|cdr|ai|png');" class='jt'>[上传]</span><a href="#" onClick="showinput1('<?php echo $upload['count'];?>')"><img src="<?php echo DT_SKIN;?>/image/u_add_web.jpg" alt=""></a><a href="#" class='delete' id="im-btn-close" onclick="deletepic1('<?php echo $k['id'];?>')"></a></b></p>
<div id='input<?php echo $upload['count'];?>' class="a"></div>
<?php } } ?>
<?php } else { ?>
<input type="text" name="pot[titledb0]" size="10" placeholder="页面标题"><input name="post[fileurl0]" id="fileurl0" type="text" size="60" value="<?php echo $fileurl0;?>"/>&nbsp;&nbsp;<span onclick="Dfile(<?php echo $moduleid;?>, Dd('fileurl0').value, 'fileurl0', 'jpg|gif|psd|cdr|ai|png');" class="jt">[上传]</span>&nbsp;<a href="#" onClick="showinput('')"><img src="<?php echo DT_SKIN;?>/image/u_add_web.jpg" alt=""></a>
<div id='input0' class="a"></div>

<?php } ?>
</td>
</tr>
<script>
totalnum=0;
limitnum=14;
function showinput(){
if(totalnum>(limitnum-1)){
alert("不能超过"+limitnum+"项!");
return ;
}
var str='';
var divid='input'+totalnum;
var num=1;
for(var i=1;i<=num;i++){
totalnum=totalnum+i;
str+="<p><input type='text' name='pot[titledb"+totalnum+"]'  size='10' placeholder='页面标题'><input name='post[fileurl"+totalnum+"]' id='fileurl"+totalnum+"' type='text' size='60' value='<?php echo $fileurl;?>'/>&nbsp;&nbsp;<span onclick=\"Dfile(<?php echo $moduleid;?>, Dd('fileurl"+totalnum+"').value, 'fileurl"+totalnum+"', 'jpg|gif|psd|cdr|ai|png');\" class='jt'>[上传]</span></p>";

}
document.getElementById(divid).innerHTML=str+"<div class='a' id='input"+totalnum+"'></div>";

} 
</script>
<script>
function deletepic(p){
  var p=$(p).parent();
    p.empty();
}
totalnum=<?php echo $upload['count'];?>;
limitnum=1400;
function showinput1(n){
    var s=n;
if(totalnum>(limitnum-1)){
alert("不能超过"+limitnum+"项!");
return ;
}
var str='';
var divid='input'+totalnum;
var num=n;
for(var i=1;i<=1;i++){
totalnum=totalnum+i;
str+="<p><input type='text' name='pot[titledb"+totalnum+"]' size='10' placeholder='页面标题'><input name='post[fileurl"+totalnum+"]' id='fileurl"+totalnum+"' type='text' size='60' value='<?php echo $fileurl;?>'/>&nbsp;&nbsp;<span onclick=\"Dfile(<?php echo $moduleid;?>, Dd('fileurl"+totalnum+"').value, 'fileurl"+totalnum+"', 'jpg|gif|psd|cdr|ai|png');\" class='jt'>[上传]</span><a href='#' onclick='deletepic(this)'>X</a></p>";

}
document.getElementById(divid).innerHTML=str+"<div class='a' id='input"+totalnum+"'></div>";

} 
</script>
<?php if($CP) { ?>
<script type="text/javascript">
var property_catid = <?php echo $catid;?>;
var property_itemid = <?php echo $itemid;?>;
var property_admin = 0;
</script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/property.js"></script>
<?php if($itemid) { ?><script type="text/javascript">setTimeout("load_property()", 1000);</script><?php } ?>
<tbody id="load_property" style="display:none;">
<tr><td></td><td></td></tr>
</tbody>
<?php } ?>
<?php if($FD) { ?><?php echo fields_html('<td class="tl">', '<td class="tr">', $item);?><?php } ?>
<tr>
<td class="tl"><?php echo $MOD['name'];?>简介</td>
<td class="tr"><textarea name="post[introduce]" style="width:90%;height:45px;"><?php echo $introduce;?></textarea></td>
</tr>
<tr>
<td class="tl">模版特色</td>
<td class="tr f_gray"><textarea name="post[content]" id="content" class="dsn"><?php echo $content;?></textarea>
<?php echo deditor($moduleid, 'content', $group_editor, '98%', 350);?><span id="dcontent" class="f_red"></span>
</td>
</tr>
<?php if($MOD['swfu'] == 1) { ?>
<?php include DT_ROOT.'/api/swfupload/editor.inc.php';?>
<?php } ?>
<?php if($fee_add) { ?>
<tr>
<td class="tl">发布此信息需消费</td>
<td class="tr"><span class="f_b f_red"><?php echo $fee_add;?></span> <?php echo $fee_unit;?></td>
</tr>
<?php if($fee_currency == 'money') { ?>
<tr>
<td class="tl"><?php echo $DT['money_name'];?>余额</td>
<td class="tr"><span class="f_blue f_b"><?php echo $_money;?><?php echo $fee_unit;?></span> <a href="charge.php?action=pay" target="_blank" class="t">[充值]</a></td>
</tr>
<?php } else { ?>
<tr>
<td class="tl"><?php echo $DT['credit_name'];?>余额</td>
<td class="tr"><span class="f_blue f_b"><?php echo $_credit;?><?php echo $fee_unit;?></span> <a href="credit.php?action=buy" target="_blank" class="t">[购买]</a></td>
</tr>
<?php } ?>
<?php } ?>
<?php if($need_password) { ?>
<tr>
<td class="tl"><span class="f_red">*</span> 支付密码</td>
<td class="tr"><?php include template('password', 'chip');?> <span id="dpassword" class="f_red"></span></td>
</tr>
<?php } ?>
<?php if($need_question) { ?>
<tr>
<td class="tl"><span class="f_red">*</span> 验证问题</td>
<td class="tr"><?php include template('question', 'chip');?> <span id="danswer" class="f_red"></span></td>
</tr>
<?php } ?>
<?php if($need_captcha) { ?>
<tr>
<td class="tl"><span class="f_red">*</span> 验证码</td>
<td class="tr"><?php include template('captcha', 'chip');?> <span id="dcaptcha" class="f_red"></span></td>
</tr>
<?php } ?>
<?php if($action=='add') { ?>
<tr style="display:none;" id="weibo_sync">
<td class="tl">同步主题</td>
<td class="tr" id="weibo_show"></td>
</tr>
<?php } ?>
<tr>
<td class="tl">&nbsp;</td>
<td class="tr" height="50"><input type="submit" name="submit" value=" 提 交 " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/></td>
</tr>
</table>
</form>
<?php echo load('clear.js');?>
<?php if($action=='add') { ?>
<script type="text/javascript">s('mid_<?php echo $mid;?>');m('<?php echo $action;?>');</script>
<?php } else { ?>
<script type="text/javascript">s('mid_<?php echo $mid;?>');m('s<?php echo $status;?>');</script>
<?php } ?>
<?php } else { ?>
<form action="<?php echo $DT['file_my'];?>">
<div class="tt">
<input type="hidden" name="mid" value="<?php echo $mid;?>"/>
<input type="hidden" name="status" value="<?php echo $status;?>"/>
&nbsp;<?php echo category_select('catid', '行业分类', $catid, $moduleid);?>&nbsp;
<input type="text" size="30" name="kw" value="<?php echo $kw;?>" title="关键词"/>&nbsp;
<?php echo $order_select;?>&nbsp;
<input type="submit" value=" 搜 索 " class="btn"/>
<input type="button" value=" 重 置 " class="btn" onclick="Go('<?php echo $DT['file_my'];?>?mid=<?php echo $mid;?>&status=<?php echo $status;?>');"/>
</form>
</div>
<div class="ls">
<form method="post">
<table cellpadding="0" cellspacing="0" class="tb">
<tr>
<th width="20"><input type="checkbox" onclick="checkall(this.form);"/></th>
<th>图片</th>
<th>标题</th>
<th>分类</th>
<th>价格</th>
<th>折扣</th>
<th>订单</th>
<th>销量</th>
<th>人气</th>
<th width="100">管理</th>
</tr>
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center">
<td><input type="checkbox" name="itemid[]" value="<?php echo $v['itemid'];?>"/></td>
<td><a href="javascript:_preview('<?php echo $v['thumb'];?>');"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic50.gif<?php } ?>
" width="50" class="thumb"/></a></td>
<td align="left" title="<?php echo $v['alt'];?>"><ul><li><?php if($v['status']==3) { ?><a href="<?php echo $v['linkurl'];?>" target="_blank" class="t"><?php } else { ?><a href="<?php echo $DT['file_my'];?>?mid=<?php echo $mid;?>&action=edit&itemid=<?php echo $v['itemid'];?>" class="t"><?php } ?>
<?php echo $v['title'];?></a><?php if($v['status']==1 && $v['note']) { ?> <a href="javascript:" onclick="alert('<?php echo $v['note'];?>');"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/why.gif" title="未通过原因"/></a><?php } ?>
</li><li title="更新时间 <?php echo timetodate($v['edittime'], 5);?> 添加时间 <?php echo timetodate($v['addtime'], 5);?>" class="px11 f_gray"><?php if($timetype=='add') { ?><?php echo timetodate($v['addtime'], 5);?><?php } else { ?><?php echo timetodate($v['edittime'], 5);?><?php } ?>
</li></ul></td>
<td><a href="<?php echo $v['caturl'];?>" target="_blank"><?php echo $v['catname'];?></a></td>
<td class="f_price"><?php echo $v['price'];?></td>
<td class="px11"><?php echo $v['discount'];?></td>
<td class="px11<?php if($v['orders']>0) { ?> f_blue f_b c_p" title="查看订单" onclick="Go('group.php?gid=<?php echo $v['itemid'];?>');<?php } ?>
"><?php echo $v['orders'];?></td>
<td class="px11"><?php echo $v['sales'];?></td>
<td class="px11"><?php echo $v['hits'];?></td>
<td>
<a href="group.php?gid=<?php echo $v['itemid'];?>"><img width="16" height="16" src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/order.gif" title="订单管理" alt=""/></a>
<a href="<?php echo $DT['file_my'];?>?mid=<?php echo $mid;?>&action=edit&itemid=<?php echo $v['itemid'];?>"><img width="16" height="16" src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/edit.png" title="修改" alt=""/></a>
<?php if($MG['delete']) { ?>&nbsp;<a href="<?php echo $DT['file_my'];?>?mid=<?php echo $mid;?>&action=delete&itemid=<?php echo $v['itemid'];?>" onclick="return confirm('确定要删除吗？此操作将不可撤销');"><img width="16" height="16" src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/delete.png" title="删除" alt=""/></a><?php } ?>
</td>
</tr>
<?php } } ?>
</table>
</div>
<?php if($MG['delete'] || $timetype!='add') { ?>
<div class="btns">
<?php if($MG['delete']) { ?>
<span class="f_r"><input type="submit" value=" 删除选中 " class="btn" onclick="if(confirm('确定要删除选中<?php echo $MOD['name'];?>吗？')){this.form.action='?mid=<?php echo $mid;?>&status=<?php echo $status;?>&action=delete'}else{return false;}"/></span>
<?php } ?>
<?php if($timetype!='add') { ?>
<input type="submit" value=" 刷新选中 " class="btn" onclick="this.form.action='?mid=<?php echo $mid;?>&status=<?php echo $status;?>&action=refresh';"/>
<?php if($MOD['credit_refresh']) { ?>
刷新一条信息一次需消费 <strong class="f_red"><?php echo $MOD['credit_refresh'];?></strong> <?php echo $DT['credit_name'];?>，当<?php echo $DT['credit_name'];?>不足时将不可刷新
<?php } ?>
<?php } ?>
&nbsp;
</div>
<?php } ?>
</form>
<?php if($MG['group_limit'] || (!$MG['fee_mode'] && $MOD['fee_add'])) { ?>
<div class="limit">
<?php if($MG['group_limit']) { ?>
总共可发 <span class="f_b f_red"><?php echo $MG['group_limit'];?></span> 条&nbsp;&nbsp;&nbsp;
当前已发 <span class="f_b"><?php echo $limit_used;?></span> 条&nbsp;&nbsp;&nbsp;
还可以发 <span class="f_b f_blue"><?php echo $limit_free;?></span> 条&nbsp;&nbsp;&nbsp;
<?php } ?>
<?php if(!$MG['fee_mode'] && $MOD['fee_add']) { ?>
发布信息收费 <span class="f_b f_red"><?php echo $MOD['fee_add'];?></span> <?php if($MOD['fee_currency'] == 'money') { ?><?php echo $DT['money_unit'];?><?php } else { ?><?php echo $DT['credit_unit'];?><?php } ?>
/条&nbsp;&nbsp;&nbsp;
可免费发布 <span class="f_b"><?php if($MG['group_free_limit']<0) { ?>无限<?php } else { ?><?php echo $MG['group_free_limit'];?><?php } ?>
</span> 条&nbsp;&nbsp;&nbsp;
<?php } ?>
</div>
<?php } ?>
<div class="pages"><?php echo $pages;?></div>
<script type="text/javascript">s('mid_<?php echo $mid;?>');m('s<?php echo $status;?>');</script>
<?php } ?>
<?php if($action == 'add' || $action == 'edit') { ?>
<script type="text/javascript">
function _p() {
if(Dd('tag').value) {
Ds('reccate');
}
}
function check() {
var l;
var f;
f = 'catid_1';
if(Dd(f).value == 0) {
Dmsg('请选择所属分类', 'catid', 1);
return false;
}
var t=$("#catid_1").val();
var s=$("#load_category_1").children();
   var L1 = s.length;
       for(var i = 0; i < L1; i++) {
               var L2 = s[i].options.length;
               for(var j = L2 - 1; j >= 0; j--) {
                       var v = s[i].options[j].value;
                       if(v == t) {
                               if(i == L1-1) {
                                       break;
                                       //return true;
                               } else {
                                       alert('请选择下级分类', 'catid', 1);
                                       return false;
                               }
                       }
               }
       }

f = 'title';
l = Dd(f).value.length;
if(l < 2) {
Dmsg('标题最少2字，当前已输入'+l+'字', f);
return false;
}
f = 'thumb';
l = Dd(f).value.length;
if(l < 15) {
Dmsg('请上传标题图片', f);
return false;
}


f = 'username';
l = Dd(f).value.length;
if(l < 2) {
Dmsg('请填写会员名', f);
return false;
}
<?php if($FD) { ?><?php echo fields_js();?><?php } ?>
if(Dd('property_require') != null) {
var ptrs = Dd('property_require').getElementsByTagName('option');
for(var i = 0; i < ptrs.length; i++) {
f = 'property-'+ptrs[i].value;
if(Dd(f).value == 0 || Dd(f).value == '') {
Dmsg('请填写或选择'+ptrs[i].innerHTML, f);
return false;
}
}
}
<?php if($need_password) { ?>
f = 'password';
l = Dd(f).value.length;
if(l < 6) {
Dmsg('请填写支付密码', f);
return false;
}
<?php } ?>
<?php if($need_question) { ?>
f = 'answer';
l = Dd(f).value.length;
if(l < 1) {
Dmsg('请填写验证问题', f);
return false;
}
if(Dd('c'+f).innerHTML.indexOf('error') != -1) {
Dd(f).focus();
return false;
}
<?php } ?>
<?php if($need_captcha) { ?>
f = 'captcha';
l = Dd(f).value;
if(!is_captcha(l)) {
Dmsg('请填写正确的验证码', f);
return false;
}
if(Dd('c'+f).innerHTML.indexOf('error') != -1) {
Dd(f).focus();
return false;
}
<?php } ?>
return true;
}
var destoon_oauth = '<?php echo $EXT['oauth'];?>';
</script>
<?php } ?>
<?php if($action=='add' && strlen($EXT['oauth']) > 1) { ?><?php echo load('weibo.js');?><?php } ?>
<?php include template('footer', 'member');?>