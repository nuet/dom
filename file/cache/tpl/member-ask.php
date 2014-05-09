<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', $module);?>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="add"><a href="ask.php?action=add"><span>提交新问题</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="home"><a href="ask.php"><span>问题及解答</span></a></td>
<?php if($support) { ?>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="support"><a href="support.php"><span>客服专员</span></a></td>
<?php } ?>
</tr>
</table>
</div>
<?php if($action == 'add') { ?>
<form method="post" action="ask.php" onsubmit="return check();">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl"> <span class="f_red">*</span> 分 类</td>
<td class="tr"><?php echo $type_select;?> <span id="dtypeid" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"> <span class="f_red">*</span>域名</td>
<td class="tr">
<select name='whid' onchange="upperCase(this.options[this.options.selectedIndex].value)">
<option>---请选择域名---</option>
<?php if(is_array($weihus)) { foreach($weihus as $i => $w) { ?>
<?php if($w['itemid']) { ?><option value="<?php echo $w['itemid'];?>" id="<?php echo $w['itemid'];?>"><?php echo $w['note'];?></option><?php } ?>
<?php } } ?>
</select>
</td>
</tr>
<tr>
<td class="tl"> <span class="f_red">*</span> 类别</td>
<td class="tr">
<select  name='lb' id="lb">
<option>---请选择类别---</option>
</select>
 <span id="dtypeid" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"> <span class="f_red">*</span> 标 题</td>
<td class="tr"><input type="text" size="50" name="title" id="title"/> [限5-30字之间] <span id="dtitle" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"> <span class="f_red">*</span> 内 容</td>
<td class="tr"><textarea name="content" id="content" class="dsn"></textarea>
<?php echo deditor($moduleid, 'content', 'Simple', '98%', 300);?>[限10-5000字之间] <span id="dcontent" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr"><input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value=" 重 置 " class="btn"/></td>
</tr>
</table>
</form>
<script type="text/javascript">s('ask');m('add');</script>
<?php } else if($action == 'edit') { ?>
<form method="post" action="ask.php" onsubmit="return check();">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<table cellspacing="1" cellpadding="3" class="tb">
<tr>
<td class="tl"> <span class="f_red">*</span> 分 类</td>
<td class="tr"><?php echo $type_select;?> <span id="dtypeid" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"> <span class="f_red">*</span>域名</td>
<td class="tr">
<select name='whid' onchange="upperCase(this.options[this.options.selectedIndex].value)">
<option>---请选择域名---</option>
<?php if(is_array($weihus)) { foreach($weihus as $i => $w) { ?>
<?php if($w['itemid']==$whid) { ?><option value="<?php echo $w['itemid'];?>" id="<?php echo $w['itemid'];?>" selected><?php echo $w['note'];?></option>
<?php } else { ?>
<option value="<?php echo $w['itemid'];?>" id="<?php echo $w['itemid'];?>"><?php echo $w['note'];?></option>
<?php } ?>
<?php } } ?>
</select>
</td>
<tr>
<tr>
<td class="tl"> <span class="f_red">*</span> 类别</td>
<td class="tr">
<select  name='lb' id="lb">
<option value="<?php echo $lb;?>-<?php echo $lb_value;?>-<?php echo $lb_count;?>"><?php echo $lb_value;?></option>
</select>
 <span id="dtypeid" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"> <span class="f_red">*</span> 标 题</td>
<td class="tr"><input type="text" size="50" name="title" id="title" value="<?php echo $title;?>"/> [限5-30字之间] <span id="dtitle" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"> <span class="f_red">*</span> 内 容</td>
<td class="tr"><textarea name="content" id="content" class="dsn"><?php echo $content;?></textarea>
<?php echo deditor($moduleid, 'content', 'Simple', '98%', 200);?>[限10-5000字之间] <span id="dcontent" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">&nbsp;</td>
<td class="tr" height="50"><input type="submit" name="submit" value=" 修 改 " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/></td>
</tr>
</table>
</form>
<script type="text/javascript">s('ask');m('home');</script>
<?php } else if($action == 'show') { ?>
<table cellspacing="1" cellpadding="10" class="tb">
<tr>
<td class="tl">问题分类</td>
<td class="tr"><?php echo $TYPE[$typeid]['typename'];?></td>
</tr>
<tr>
<td class="tl">问题标题</td>
<td class="tr f_b"><?php echo $title;?></td>
</tr>
<tr>
<td class="tl">问题内容</td>
<td class="tr" style="line-height:180%;"><?php echo $content;?></td>
</tr>
<tr>
<td class="tl">提交时间</td>
<td class="tr"><?php echo $addtime;?></td>
</tr>
<tr>
<td class="tl">受理状态</td>
<td class="tr"><?php echo $dstatus[$status];?></td>
</tr>
<?php if($status > 1) { ?>
<tr>
<td class="tl">问题回复</td>
<td class="tr" style="line-height:180%;background:#FFFFFF;border:#86A2C0 1px dotted;"><?php echo $reply;?></td>
</tr>
<tr>
<td class="tl">受理时间</td>
<td class="tr f_blue"><?php echo $admintime;?></td>
</tr>
<tr>
<td class="tl">受理人</td>
<td class="tr"><?php echo $admin;?></td>
</tr>
<tr>
<td class="tl">我的评价</td>
<td class="tr">
<?php if($star) { ?>
<?php echo $stars[$star];?>
<?php } else { ?>
<form method="post" action="ask.php?action=star&itemid=<?php echo $itemid;?>">
<input type="radio" name="star" value="1" id="star_1"/><label for="star_1"> 不满意</label>
<input type="radio" name="star" value="2" id="star_2"/><label for="star_2"> 基本满意</label>
<input type="radio" name="star" value="3" id="star_3"/><label for="star_3"> 非常满意</label>
<input type="submit" name="submit" class="btn" value=" 评 价 "/>
</form>
<?php } ?>
</td>
</tr>
<?php } ?>
</table>
</form>
<script type="text/javascript">s('ask');m('home');</script>
<?php } else { ?>
<div class="ls">
<table cellspacing="0" cellpadding="0" class="tb">
<tr>
<th>流水号</th>
<th>状态</th>
<th>标题</th>
<th width="150">添加时间</th>
<th>分类</th>
<th width="60">修改</th>
<th width="60">删除</th>
</tr>
<?php if(is_array($asks)) { foreach($asks as $k => $v) { ?>
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center">
<td>&nbsp;<?php echo $v['itemid'];?>&nbsp;</td>
<td>&nbsp;<?php echo $v['dstatus'];?>&nbsp;</td>
<td align="left"><a href="ask.php?action=show&itemid=<?php echo $v['itemid'];?>" class="t"><?php echo $v['title'];?></a></td>
<td><?php echo $v['addtime'];?></td>
<td><a href="ask.php?typeid=<?php echo $v['typeid'];?>"><?php echo $v['type'];?></a></td>
<td>
<?php if($v['status'] == 0) { ?><a href="ask.php?action=edit&itemid=<?php echo $v['itemid'];?>&forward=<?php echo urlencode($DT_URL);?>"><img width="16" height="16" src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/edit.png" title="修改" alt=""/></a><?php } else { ?>--<?php } ?>
</td>
<td>
<a href="javascript:confirmURI('确定要删除吗？此操作将不可撤销', 'ask.php?action=delete&itemid=<?php echo $v['itemid'];?>&forward=<?php echo urlencode($DT_URL);?>');"><img width="16" height="16" src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/delete.png" title="删除" alt=""/></a>
</td>
</tr>
<?php } } ?>
</table>
</div>
<div class="pages"><?php echo $pages;?></div>
<script type="text/javascript">s('ask');m('home');</script>
<?php } ?>
<?php if($action=='add' || $action=='edit') { ?>
<script type="text/javascript">
function check() {
var len;
if(Dd('typeid').value == 0) {
Dmsg('请选择分类', 'typeid');
return false;
}
len = Dd('title').value.length;
if(len < 5 || len > 30) {
Dmsg('标题不能少于5个字多于30个字，当前已输入'+len+'个字', 'title');
return false;
}
len = FCKLen();
if(len < 10 || len > 5000) {
Dmsg('内容不能少于10个字多于5000个字，当前已输入'+len+'个字', 'content');
return false;
}
return true;
}
</script>
<script>
function upperCase(m){
$.ajax({
url: '?',
type: 'POST',
    dataType: "json",
data:{itemid:m,t:"1"},
timeout: 1000,
success: function(msg){
if(msg==1){
alert('已过期或不存在此域名的订单信息');
window.location = window.location.href;
}else{
           var $item;
          var a="";
         if(msg.dmhf!='0'){a+='<option value="dmhf-程序恢复-'+msg.dmhf+'">程序恢复（'+msg.dmhf+'次）</option>';}
         if(msg.mmcz!='0'){a+='<option value="mmcz-密码重置-'+msg.mmcz+'">密码重置（'+msg.mmcz+'次）</option>';}
         if(msg.jscl!='0'){a+='<option value="jscl-JS处理-'+msg.jscl+'">JS处理（'+msg.jscl+'次）</option>';}
         if(msg.htsh!='0'){a+='<option value="htsh-后台培训-'+msg.htsh+'">后台培训（'+msg.htsh+'次）</option>';}
         if(msg.ymwh!='0'){a+='<option value="ymwh-页面维护-'+msg.ymwh+'">页面维护（'+msg.ymwh+'次）</option>';}
         if(msg.sjwh!='0'){a+='<option value="sjwh-数据库维护-'+msg.sjwh+'">数据库维护（'+msg.sjwh+'次）</option>';}
         if(msg.wzlr!='0'){a+='<option value="wzlr-文字录入次数-'+msg.wzlr+'">文字录入次数（'+msg.wzlr+'次）</option>';}
         if(msg.cplr!='0'){a+='<option value="cplr-产品录入次数-'+msg.cplr+'">产品录入次数（'+msg.cplr+'次）</option>';}
           $item = $(a);
           $("#lb").html($item);  

       }
  }
   });

}
</script>
<?php } ?>
<?php include template('footer', $module);?>