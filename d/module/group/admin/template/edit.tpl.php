<?php
defined('IN_DESTOON') or exit('Access Denied');
include tpl('header');
show_menu($menus);
?>
<style>


</style>
<script>
$(function(){
	var ys=<?php echo $ys;?>;
	if(ys==2){
		Dd("url_2").style.display='';
		Dd("url_1").style.display='none';
	}else{
		Dd("url_2").style.display='none';
		Dd("url_1").style.display='';
		}
})

</script>
<form method="post" action="?" id="dform" onsubmit="return check();">
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="file" value="<?php echo $file;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<div class="tt"><?php echo $tname;?></div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td class="tl"><span class="f_red">*</span> 商品分类</td>
<td><div id="catesch"></div><?php echo ajax_category_select('post[catid]', '', $catid, $moduleid, 'size="2" style="height:120px;width:180px;"');?>
<br/><input type="button" value="搜索分类" onclick="schcate(<?php echo $moduleid;?>);" class="btn"/> <span id="dcatid" class="f_red"></span></td>
</tr>

<tr>
<td class="tl"><span class="f_red">*</span> <?php echo $MOD['name'];?>标题</td>
<td><input name="post[title]" type="text" id="title" size="60" value="<?php echo $title;?>"/> <?php echo level_select('post[level]', '级别', $level);?> <?php echo dstyle('post[style]', $style);?> <br/><span id="dtitle" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 标题图片</td>
<td>
<input type="hidden" name="post[thumb]" id="thumb" value="<?php echo $thumb;?>"/>
<table width="120">
<tr align="center" height="120" class="c_p">
<td width="120"><img src="<?php echo $thumb ? $thumb : DT_SKIN.'image/waitpic.gif';?>" width="100" height="100" id="showthumb" title="预览图片" alt="" onclick="if(this.src.indexOf('waitpic.gif') == -1){_preview(Dd('showthumb').src, 1);}else{Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb').value, true);}"/></td>
</tr>
<tr align="center" class="c_p">
<td><span onclick="Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb').value, true);" class="jt"><img src="<?php echo $MODULE[2]['linkurl'];?>image/img_upload.gif" width="12" height="12" title="上传"/></span>&nbsp;&nbsp;<img src="<?php echo $MODULE[2]['linkurl'];?>image/img_select.gif" width="12" height="12" title="选择" onclick="selAlbum('');"/>&nbsp;&nbsp;<span onclick="delAlbum('', 'wait');" class="jt"><img src="<?php echo $MODULE[2]['linkurl'];?>image/img_delete.gif" width="12" height="12" title="删除"/></span></td>
</tr>
</table>
<span id="dthumb" class="f_red"></span>
</td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span>价格</td>
<td><input name="post[price]" type="text" size="10" value="<?php echo $price;?>" id="rice"/><span id="dprice" class="f_red"></span>元</td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span>演示类型</td>
<td><input name="post[ys]" type="radio" size="10" value="1" <?php if($action=='add'){ ?> checked  <?php }else{ if($ys==1){?> checked  <?php }else{?>    <?php }} ?> onclick="yz(1)"/>网址<input name="post[ys]" type="radio" size="10" value="2" <?php if($action=='add'){ ?>  <?php }else{ if($ys==2){?> checked  <?php }else{?>  <?php }} ?> onclick="yz(2)";/>图片</td>
</tr>
<tr id="url_1">
<td class="tl"><span class="f_hid">*</span>演示网址</td>
<td><input name="post[url]" type="text" size="65"  id="url" value="<?php if($action=='add'){ echo "http://v001.8555.net/api/api.php?act=demourl&spool=";  }else{ echo $uploads[0][url]; }?>"/>请加上http://</td>
</tr>
<tr id="url_2" style="display:none">
<td class="tl"><span class="f_hid">*</span>演示图片</td>
<td>
<?php if($uploads){ ?>
<?php foreach ($uploads as $key=>$k){ ?>
<p><input type="hidden" class="c" name='ids[id<?php echo $key ?>]' value="<?php echo $k[id] ?>"/><b><input type='text' name='pot[titledb<?php echo $key ?>]' size='10' value="<?php echo $k[title] ?>" placeholder='页面标题'><input name='post[fileurl<?php echo $key ?>]' id='fileurl<?php echo $key ?>' type='text' size='60' value='<?php echo $k[pic];?>'/>&nbsp;&nbsp;<span onclick="Dfile(<?php echo $moduleid;?>, Dd('fileurl<?php echo $key ?>').value, 'fileurl<?php echo $key ?>', 'jpg|gif|psd|cdr|ai|png');" class='jt'>[上传]</span><a href="#" onClick="showinput1('<?php echo $upload[count] ?>')"><img src="<?php echo DT_SKIN ?>/image/u_add_web.jpg" alt=""></a><a href="#" class='delete' id="im-btn-close" onclick="deletepic1('<?php echo  $k[id] ?>')"></a></b></p>
<div id='input<?php echo $upload[count] ?>' class="a"></div>
<?php } ?>
<?php }else{ ?>
<input type="text" name="pot[titledb0]" size="10" placeholder="页面标题"><input name="post[fileurl0]" id="fileurl0" type="text" size="60" value="<?php echo $fileurl0;?>"/>&nbsp;&nbsp;<span onclick="Dfile(<?php echo $moduleid;?>, Dd('fileurl0').value, 'fileurl0', 'jpg|gif|psd|cdr|ai|png');" class="jt">[上传]</span>&nbsp;<a href="#" onClick="showinput('')"><img src="<?php echo DT_SKIN ?>/image/u_add_web.jpg" alt=""></a>
	<div id='input0' class="a"></div>
	
	<?php } ?>
	</td>
</tr>
<tr>
<td class="tl"><span class="f_hid">*</span> 一三五年初始价格</td>
<td><input type="text" name="post[yearprice]" id="yearprice" value="<?php if($action=='add'){ ?>680|1480|2180<?php }else{ echo $yearprice; }?>" size="20">
 <span class="f_red" id="dyearprice"></span></td></tr>
<tr>
<td class="tl"><span class="f_hid">*</span> 颜色</td>
<td><span id="color"><input type="radio" name="post[color]" value="red" id="color_0"<?php if($item[color]=='red'){?> checked <?php } ?> > 红色系&nbsp;&nbsp;&nbsp;
<input type="radio" name="post[color]" value="yellow" id="color_1" <?php if($item[color]=='yellow'){?> checked <?php } ?> > 黄色系&nbsp;&nbsp;&nbsp;
<input type="radio" name="post[color]" value="green" id="color_2" <?php if($item[color]=='green'){?>checked <?php } ?> > 绿系&nbsp;&nbsp;&nbsp;
<input type="radio" name="post[color]" value="blue" id="color_3" <?php if($item[color]=='blue'){?> checked <?php } ?> > 蓝色系&nbsp;&nbsp;&nbsp;
<input type="radio" name="post[color]" value="purple" id="color_4" <?php if($item[color]=='purple'){?> checked <?php } ?> > 紫色系&nbsp;&nbsp;&nbsp;
<input type="radio" name="post[color]" value="pink" id="color_5"<?php if($item[color]=='pink'){?>checked <?php } ?> > 粉色系&nbsp;&nbsp;&nbsp;
<input type="radio" name="post[color]" value="brown" id="color_6"<?php if($item[color]=='brown'){?> checked <?php } ?> > 棕色系&nbsp;&nbsp;&nbsp;
<input type="radio" name="post[color]" value="black" id="color_7"<?php if($item[color]=='black'){?> checked <?php } ?> > 黑白色系&nbsp;&nbsp;&nbsp;
<input type="radio" name="post[color]" value="all" id="color_8"<?php if($item[color]=='all'){?> checked <?php } ?> > 彩色系&nbsp;&nbsp;&nbsp;</span> 
<span class="f_red" id="dcolor"></span></td></tr>
<script>


function yz(m){
	if(m==2){
		Dd("url_2").style.display='';
		Dd("url_1").style.display='none';
	}else{
		Dd("url_1").style.display='';
		Dd("url_2").style.display='none';
	}
}


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
totalnum=<?php echo $upload[count] ?>;
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
<script>
$(function(){
	
	$(".delete").click(function(){
    var p=$(this).parent();
    p.empty();
	});
})

function deletepic(p){
  var p=$(p).parent();
    p.empty();
}

function deletepic1(p){
	

		$.ajax({ //一个Ajax过程 
			type: "post", //以post方式与后台沟通 
			url : "?moduleid=17&file=index&action=deletes&p="+p,
		dataType:'json',//从php返回的值以 JSON方式 解释 
		data: 'p='+p, //发给php的数据有两项，分别是上面传来的u和p 
		success: function(msg){//如果调用php成功 
		location.reload();
		
		} 
		}); 
	
	
}
</script>


<tr>
<td class="tl"><span class="f_hid">*</span> 过期时间</td>
<td><?php echo dcalendar('post[totime]', $totime);?>&nbsp;
<select onchange="Dd('posttotime').value=this.value;">
<option value="">快捷选择</option>
<option value="">长期有效</option>
<option value="<?php echo timetodate($DT_TIME+86400*3, 3);?>">3天</option>
<option value="<?php echo timetodate($DT_TIME+86400*7, 3);?>">一周</option>
<option value="<?php echo timetodate($DT_TIME+86400*15, 3);?>">半月</option>
<option value="<?php echo timetodate($DT_TIME+86400*30, 3);?>">一月</option>
<option value="<?php echo timetodate($DT_TIME+86400*182, 3);?>">半年</option>
<option value="<?php echo timetodate($DT_TIME+86400*365, 3);?>">一年</option>
</select>&nbsp;
<span id="dposttotime" class="f_red"></span> 不选表示长期有效</td>
</tr>
<?php if($CP) { ?>
<script type="text/javascript">
var property_catid = <?php echo $catid;?>;
var property_itemid = <?php echo $itemid;?>;
var property_admin = 1;
</script>
<script type="text/javascript" src="<?php echo DT_PATH;?>file/script/property.js"></script>
<?php if($itemid) { ?><script type="text/javascript">setTimeout("load_property()", 1000);</script><?php } ?>
<tbody id="load_property" style="display:none;">
<tr><td></td><td></td></tr>
</tbody>
<?php } ?>
<?php echo $FD ? fields_html('<td class="tl">', '<td>', $item) : '';?>
<tr>
<td class="tl"><span class="f_hid">*</span> <?php echo $MOD['name'];?>简介</td>
<td><textarea name="post[introduce]" style="width:90%;height:45px;"><?php echo $introduce;?></textarea></td>
</tr>
<tr>
<td class="tl"><span class="f_hid">*</span>特色说明</td>
<td><textarea name="post[content]" id="content" class="dsn"><?php echo $content;?></textarea>
<?php echo deditor($moduleid, 'content', $MOD['editor'], '98%', 350);?><span id="dcontent" class="f_red"></span>
</td>
</tr>
<?php
if($MOD['swfu']) { 
	include DT_ROOT.'/api/swfupload/editor.inc.php';
}
?>
<tr>
<td class="tl">可选属性</td>
<td>
<table cellpadding="4" cellspacing="1" bgcolor="#FFFFFF">
<tr bgcolor="#EFF5FB" align="center">
<td>属性提示</td>
<td>属性值</td>
<td>属性价格</td>
</tr>


<tr bgcolor="#FFFFFF" align="center">
<td>套 &nbsp;餐<textarea id="n1" cols=50  rows=5  name="post[n1]"><?php if($action=='add'){echo "基础型 入门套餐<br />1、1G网页空间；<br />2、1用户企业邮箱；<br />3、顶级域名一个；|  标准型 超值套餐<br />1、3G网页空间；<br />2、5用户企业邮箱；<br />3、顶级域名一个；| 高级型 无忧使用<br />1、5G-无限空间；<br />2、10用户企业邮箱；<br />3、顶级域名一个;";}else{echo $n1;}?></textarea></td>
<td><input name="post[v1]" type="text" size="40" value="<?php if($action=='add'){ echo "基础性|标准型|高级型 "; }else{ echo $v1;}?>" id="v1"/></td>
<td><input name="post[p1]" type="text" size="15" value="<?php if($action=='add'){ echo "0|1|2"; }else{ echo $p1;}?>" id="p1"/></td>
</tr>
<tr bgcolor="#FFFFFF" align="center">
<td>移动版<textarea id="n2" cols=50  rows=5  name="post[n2]"><?php if($action=='add'){echo "无移动版<br />1、无手机专用网站；<br />2、手机也访问PC站；<br />3、以后可选购；|手机版<br />1、有手机网站；<br />2、PC访问PC站；<br />3、手机访问手机站；";}else{echo $n2;}?></textarea></td>
<td><input name="post[v2]" type="text" size="40" value="<?php if($action=='add'){ echo "无移动版|手机版"; }else{ echo $v2;}?>" id="v2"/></td>
<td><input name="post[p2]" type="text" size="15" value="<?php if($action=='add'){ echo "0|1500 "; }else{ echo $p2;}?>" id="p2"/></td>
</tr>
<tr bgcolor="#FFFFFF" align="center">
<td>机  &nbsp;房<textarea id="n3" cols=50  rows=5  name="post[n3]"><?php if($action=='add'){echo "国内机房<br />1、国内访问快；<br />2、需要进行ICP备案；<br />3、适合做内贸；<br />|香港机房<br />1、东南亚访问快；<br />2、无需进行备案；<br />3、适合紧急上线网站；<br />|美国机房<br />1、国外访问快；<br />2、无需进行备案；<br />3、适合做外贸;";}else{echo $n3;}?></textarea></td>
<td><input name="post[v3]" type="text" size="40" value="<?php if($action=='add'){ echo "国内机房(需备案)|香港机房(免备案)|美国机房(免备案)"; }else{ echo $v3;}?>" id="v3"/></td>
<td><input name="post[p3]" type="text" size="15" value="<?php if($action=='add'){ echo ""; }else{ echo $p3;}?>" id="p3"/></td>
</tr>
<tr bgcolor="#FFFFFF" align="center">
<td>年  &nbsp;限<input id="n4" size=50   name="post[n4]" value="<?php $n4 ?>"></td>
<td><input name="post[v4]" type="text" size="40" value="<?php  if($action=='add'){ echo "1年|3年|5年"; }else{ echo $v4;}?>" id="v4"/></td>
<td><input name="post[p4]" type="text" size="15" value="<?php if($action=='add'){ echo "300|500|800"; }else{ echo $p4;}?>" id="p4"/></td>
</tr>
<tr bgcolor="#FFFFFF" align="center">
<td>其  &nbsp;他<input id="n5"size=50    rows=5  name="post[n5]" value="<?php $n5 ?>"></td>
<td><input name="post[v5]" type="text" size="40" value="<?php echo $v5;?>" id="v5"/></td>
<td><input name="post[p5]" type="text" size="15" value="<?php echo $p5;?>" id="p5"/></td>
</tr>
<tr bgcolor="#FFFFFF" align="center">
<td class="f_gray">例如：颜色</td>
<td class="f_gray">例如：红色|蓝色|黑色|白色 多个属性用|分割</td>
<td class="f_gray">例如：100|200|300 多个属性用|分割</td>
</tr>
</table>
</td>
</tr>

<tr>
<td class="tl"><span class="f_red">*</span> 会员名</td>
<td><input name="post[username]" type="text"  size="20" value="<?php echo $username;?>" id="username"/> <a href="javascript:_user(Dd('username').value);" class="t">[资料]</a> <span id="dusername" class="f_red"></span></td>
</tr>

<tr>
<td class="tl"><span class="f_hid">*</span> 信息状态</td>
<td>
<input type="radio" name="post[status]" value="3" <?php if($status == 3) echo 'checked';?>/> 通过
<input type="radio" name="post[status]" value="2" <?php if($status == 2) echo 'checked';?>/> 待审
<input type="radio" name="post[status]" value="1" <?php if($status == 1) echo 'checked';?> onclick="if(this.checked) Dd('note').style.display='';"/> 拒绝
<input type="radio" name="post[status]" value="4" <?php if($status == 4) echo 'checked';?>/> 过期
<input type="radio" name="post[status]" value="0" <?php if($status == 0) echo 'checked';?>/> 删除
</td>
</tr>
<tr id="note" style="display:<?php echo $status==1 ? '' : 'none';?>">
<td class="tl"><span class="f_red">*</span> 拒绝理由</td>
<td><input name="post[note]" type="text"  size="40" value="<?php echo $note;?>"/></td>
</tr>
<tr>
<td class="tl"><span class="f_hid">*</span> 添加时间</td>
<td><input type="text" size="22" name="post[addtime]" value="<?php echo $addtime;?>"/></td>
</tr>
<tr>
<td class="tl"><span class="f_hid">*</span> 浏览次数</td>
<td><input name="post[hits]" type="text" size="10" value="<?php echo $hits;?>"/></td>
</tr>

<tr>
<td class="tl"><span class="f_hid">*</span> 内容模板</td>
<td><?php echo tpl_select('show', $module, 'post[template]', '默认模板', $template, 'id="template"');?><?php tips('如果没有特殊需要，一般不需要选择<br/>系统会自动继承分类或模块设置');?></td>
</tr>
<?php if($MOD['show_html']) { ?>
<tr>
<td class="tl"><span class="f_hid">*</span> 自定义文件路径</td>
<td><input type="text" size="50" name="post[filepath]" value="<?php echo $filepath;?>" id="filepath"/>&nbsp;<input type="button" value="重名检测" onclick="ckpath(<?php echo $moduleid;?>, <?php echo $itemid;?>);" class="btn"/>&nbsp;<?php tips('可以包含目录和文件 例如 destoon/b2b.html<br/>请确保目录和文件名合法且可写入，否则可能生成失败');?>&nbsp; <span id="dfilepath" class="f_red"></span></td>
</tr>
<?php } ?>
</table>
<div class="sbt"><input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value=" 重 置 " class="btn"/></div>
</form>
<?php load('clear.js'); ?>
<?php if($action == 'add') { ?>
<form method="post" action="?">
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="file" value="<?php echo $file;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<div class="tt">单页采编</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td class="tl"><span class="f_hid">*</span> 目标网址</td>
<td><input name="url" type="text" size="80" value="<?php echo $url;?>"/>&nbsp;&nbsp;<input type="submit" value=" 获 取 " class="btn"/>&nbsp;&nbsp;<input type="button" value=" 管理规则 " class="btn" onclick="Dwidget('?file=fetch', '管理规则');"/></td>
</tr>
</table>
</form>
<?php } ?>
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
	f = 'price';
	l = Dd(f).value;
	if(l < 0.1) {
		Dmsg('请填写价格', f);
		return false;
	}


	if(Dd('v1').value) {
		if(!Dd('n1').value) {
			alert('请填写属性名称');
			Dd('n1').focus();
			return false;
		}
		if(Dd('v1').value.indexOf('|') == -1) {
			alert(Dd('n1').value+'至少需要两个属性');
			Dd('v1').focus();
			return false;
		}
	}
	if(Dd('v2').value) {
		if(!Dd('n2').value) {
			alert('请填写属性名称');
			Dd('n2').focus();
			return false;
		}
		if(Dd('v2').value.indexOf('|') == -1) {
			alert(Dd('n2').value+'至少需要两个属性');
			Dd('v2').focus();
			return false;
		}
	}
	if(Dd('v3').value) {
		if(!Dd('n3').value) {
			alert('请填写属性名称');
			Dd('n3').focus();
			return false;
		}
		if(Dd('v3').value.indexOf('|') == -1) {
			alert(Dd('n3').value+'至少需要两个属性');
			Dd('v3').focus();
			return false;
		}
	}
	if(Dd('n1').value && (Dd('n1').value == Dd('n2').value || Dd('n1').value == Dd('n3').value)) {
		alert('属性名称不能重复');
		return false;
	}
	if(Dd('n2').value && (Dd('n2').value == Dd('n1').value || Dd('n2').value == Dd('n3').value)) {
		alert('属性名称不能重复');
		return false;
	}
	if(Dd('n3').value && (Dd('n3').value == Dd('n1').value || Dd('n3').value == Dd('n2').value)) {
		alert('属性名称不能重复');
		return false;
	}
	
	if(Dd('ismember_1').checked) {
		f = 'username';
		l = Dd(f).value.length;
		if(l < 2) {
			Dmsg('请填写会员名', f);
			return false;
		}
	} else {
		f = 'company';
		l = Dd(f).value.length;
		if(l < 2) {
			Dmsg('请填写公司名称', f);
			return false;
		}
		if(Dd('areaid_1').value == 0) {
			Dmsg('请选择所在地区', 'areaid');
			return false;
		}
		f = 'truename';
		l = Dd(f).value.length;
		if(l < 2) {
			Dmsg('请填写联系人', f);
			return false;
		}
		f = 'mobile';
		l = Dd(f).value.length;
		if(l < 7) {
			Dmsg('请填写手机', f);
			return false;
		}
	}

	return true;
}
</script>
<script type="text/javascript">Menuon(<?php echo $menuid;?>);</script>
<?php include tpl('footer');?>