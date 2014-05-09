<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if($type == 3) { ?>
<?php include template('header', $module);?>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab_on" id="Tab0"><a href="chat.php"><span>我的对话</span></a></td>
<td class="tab_nav"></td>
<td class="tab"><a href="message.php?action=setting" target="_blank"><span>黑名单</span></a></td>
</table>
</div>
<form action="chat.php" onsubmit="return check();" target="_blank" id="dform">
<table cellpadding="6" cellspacing="1" class="tb">
<tr>
<td class="tl"><span class="f_red">*</span> 输入会员名</td>
<td class="tr">
<input type="text" size="20" name="touser" id="touser"/> 
<input type="submit" value=" 发起对话 " class="btn"/>
<span id="dtouser" class="f_red"></span></td>
</tr>
</table>
</form>
<script type="text/javascript">
function check() {
if(Dd('touser').value.length < 2) {
Dmsg('请输入会员名', 'touser');
return false;
}
return true;
}
</script>
<style type="text/css">
.chat_list li {height:20px;line-height:20px;overflow:hidden;color:#908E9B;padding:0 5px 0 0;}
.chat_list span {color:#908E9B;}
.chat_on {background:#FAFAFA;}
.chat_offline {opacity:0.3;filter:Alpha(Opacity=30);}
</style>
<div class="chat_list"">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td style="width:300px;line-height:30px;border-bottom:#DDDDDD 1px solid;padding:0 0 0 5px;"><strong>收到的对话</strong></td>
<td width="10">&nbsp;</td>
<td style="width:300px;line-height:30px;border-bottom:#DDDDDD 1px solid;padding:0 0 0 5px;"><strong>发起的对话</strong></td>
<td>&nbsp;</td>
<tr>
<td valign="top">
<?php if($T) { ?>
<?php if(is_array($T)) { foreach($T as $v) { ?>
<table cellpadding="0" cellspacing="0" style="width:300px;margin:10px 0 0 5px;" onmouseover="this.className='chat_on';" onmouseout="this.className='';">
<tr>
<td width="60">
<a href="chat.php?chatid=<?php echo $v['chatid'];?>" target="chat_<?php echo $v['chatid'];?>"><img src="<?php echo useravatar($v['fromuser']);?>" width="48"<?php if($v['online']) { ?> title="会员在线"<?php } else { ?> title="会员离线" class="chat_offline"<?php } ?>
/></a>
</td>
<td>
<ul>
<li><span class="f_r"><?php echo $v['line'];?></span><a href="chat.php?chatid=<?php echo $v['chatid'];?>" target="chat_<?php echo $v['chatid'];?>"><?php echo $v['fromuser'];?></a>(<?php echo $v['truename'];?>)</li>
<li><?php if($v['linkurl']) { ?><a href="<?php echo $v['linkurl'];?>" target="_blank"><?php } ?>
<span><?php echo $v['from'];?></span><?php if($v['linkurl']) { ?></a><?php } ?>
</li>
</ul>
</td>
</tr>
</table>
<?php } } ?>
<?php } else { ?>
&nbsp;
<?php } ?>
</td>
<td>&nbsp;</td>
<td valign="top">
<?php if($F) { ?>
<?php if(is_array($F)) { foreach($F as $v) { ?>
<table cellpadding="0" cellspacing="0" style="width:300px;margin:10px 0 0 5px;" onmouseover="this.className='chat_on';" onmouseout="this.className='';">
<tr>
<td width="60">
<a href="chat.php?touser=<?php echo $v['touser'];?>" target="chat_<?php echo $v['chatid'];?>"><img src="<?php echo useravatar($v['touser']);?>" width="48"<?php if($v['online']) { ?> title="会员在线"<?php } else { ?> title="会员离线" class="chat_offline"<?php } ?>
/></a>
</td>
<td>
<ul>
<li><span class="f_r"><?php echo $v['line'];?></span><a href="chat.php?touser=<?php echo $v['touser'];?>" target="chat_<?php echo $v['chatid'];?>"><?php echo $v['touser'];?></a> (<?php echo $v['truename'];?>)</li>
<li><a href="<?php echo $v['linkurl'];?>" target="_blank"><span><?php echo $v['from'];?></span></a></li>
</ul>
</td>
</tr>
</table>
<?php } } ?>
<?php } else { ?>
&nbsp;
<?php } ?>
</td>
<td>&nbsp;</td>
</tr>
</table>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/chat.css"/>
<script type="text/javascript">setTimeout('window.location.reload();', 30000);</script>
<script type="text/javascript">s('chats');</script>
<?php include template('footer', $module);?>
<?php } else { ?>
<!doctype html>
<html lang="en">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="edge" http-equiv="X-UA-Compatible">
<title><?php if($head_title) { ?><?php echo $head_title;?><?php echo $DT['seo_delimiter'];?><?php } ?>
商务中心<?php echo $DT['seo_delimiter'];?><?php if($city_sitename) { ?><?php echo $city_sitename;?><?php } else { ?><?php echo $DT['sitename'];?><?php } ?>
<?php echo $DT['seo_delimiter'];?>Powered By 摩恩网络科技</title>
<link href="<?php echo DT_SKIN;?>/global.css" rel="stylesheet" type="text/css">
<link href="<?php echo DT_SKIN;?>/U_online.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>New_Index.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $CFG['url'];?>/member/image/chatstyle.css"/>
<script type="text/javascript" src="<?php echo DT_STATIC;?>lang/<?php echo DT_LANG;?>/lang.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/config.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/common.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/page.js"></script>
<?php if($MOD['chat_file'] && $MG['upload']) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/clear.js"></script><?php } ?>
<script type="text/javascript" src="<?php echo DT_STATIC;?>/file/script/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/member.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>/file/script/admin.js"></script>
<style>
#word {
border: 0;
padding: 0;
width: 98%;
height: 100%;
resize: none;
}
</style>
<!--[if lte IE 6]>
<script src="js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a,button');
    </script>
<![endif]-->
</head>
<script type="text/javascript">
if(window.screen.width<1200){c(0);Dh('side');Dd('side_oh').className = 'side_s';}
if(navigator.userAgent.indexOf('Firefox') != -1) document.write('<style>#chat{background-attachment:inherit;}</style>');
var chat_id = '<?php echo $chat_id;?>';
var chat_poll = <?php echo $chat_poll;?>;
var chat_maxlen = <?php echo $MOD['chat_maxlen'];?>;
var chat_mintime = <?php echo $MOD['chat_mintime'];?>;
var chat_status = <?php echo $chat_status;?>;
var chat_type = <?php echo $type;?>;
var chat_last = <?php echo $DT_TIME;?>;
var chat_title = document.title;
var chat_lang = {
ec1:'按Enter键发送消息，按Ctrl+Enter键换行',
ec2:'按Ctrl+Enter键发送消息，按Enter键换行',
tip:'提示：系统不长久保存您的对话记录，关闭对话窗口将可能导致记录丢失，如果需要保存，请在交谈完毕之后点保存按钮',
last:'ok'
};
</script>
<body style="overflow: hidden;">
<!-- 在线沟通大盒子自适应 -->
<div class="im_wrap">
<!-- im头部 -->
<div class="im_header">
<a href="" class="im-logo">
<img src="<?php echo DT_SKIN;?>/image/U_onlin_headr_logo.gif">
</a>
<div class="im-btn-area" id="win_title">
                 <a href="#" id="j_chatMax" class="im-btn-max" title="最大化" style="display: none;"></a>
                 <a href="javascript:;" id="j_chatRestore" class="im-btn-min" title="还原" style=""></a>
                 <a href="#" id="j_chatClose" class="im-btn-close" title="关闭" onclick="chat_off();"></a>
         </div>
</div>
<!-- im头部 end-->
<!-- im主题内容 -->
<div class="im-content">
<div class="im-main-content" >
<div class="im-chat-window">
<div class="im-chat-list" id="scrollDiv" >
<div class="im-msg im-msg-notice" logictype="alert-messsage-1" showtype="only">
<p>访客 您好! 请稍候......<br><br> <?php echo $_username;?>您好！有什么可以帮助您！</p>
<span class="im-msg-tl"></span>
<span class="im-msg-tr"></span>
<span class="im-msg-bl"></span>
<span class="im-msg-br"></span>

</div>
<iframe src="" name="send" id="send" style="display:none;"></iframe>
<div id="chat"></div>
</div>
<!-- 表情 -->
<div class="im-edit-area">
<div class="im-edit-toolbar">
<!-- hover效果加class im-icon-word-hover -->
<a href="javasript:;" class="im-icon-word" id="j_font" title="设置字体"></a>
<a href="javasript:;" class="im-icon-face" title="选择表情" id="expressionButton"></a>

<a href="#" class="im-icon-file"  id="tool_file" onclick="Dfile(<?php echo $moduleid;?>, '', 'chat', '<?php echo $MOD['chat_ext'];?>');" title="传送文件" >
  <!--  <object id="SWFUpload_1" type="application/x-shockwave-flash" data="" width="30px" height="30px" class="swfupload"><param name="wmode" value="window"><param name="movie" value=""><param name="quality" value="high"><param name="allowScriptAccess" value="always"><param name="flashvars" value=""></object> -->
</a>
<a href="#" class="im-icon-bell" title="消息记录" onclick="chat_log();" id="tool_log"></a>
<a href="#"  class="im-icon-msg-record" id="tool_save" onclick="chat_save();" title="保存为"></a>
<a href="#"  class="im-icon-msg-clear" title="清屏" onclick="Dd('chat').innerHTML='';"></a>
<!-- 上传文件 -->
<div class="im-upload-content flash" id="fsUploadProgress" style=" position: absolute; left: 0px; right:0; z-index: 99; bottom: 106px;height:0px"></div>
<!-- 字体弹出层 -->
<div class="im-pop-word j_popWord" id="font" style="display:none">
 <select class="t_inp" name="text_in_font_type" id="font_f" onchange="font_init();">                        
                        <option value="1">宋体</option><option value="2">黑体</option><option value="3">仿宋</option><option value="4">楷体</option><option value="5">隶书</option><option value="6">幼圆</option></select>
                    <select class="h_inp" name="text_in_font_size"  id="font_s" onchange="font_init();">                       
                    <option value="14">14</option><option value="16">16</option><option value="18">18</option><option value="20">20</option><option value="24">24</option><option value="28">28</option><option value="32">32</option><option value="36">36</option><option value="40">40</option><option value="42">42</option><option value="46">46</option></select>
<a href="javascript:;" class="im-icon-color im-icon-color-hover" title="设置颜色" id="colorButton"> </a>
                    <a href="#" class="im-icon-close" title="关闭" id="j_fontClose"></a>
                    <select id="font_c" onchange="font_init();">
<option value="0">颜色</option>
<option value="1" style="background:#000000;">黑</option>
<option value="2" style="background:#FF0000;">红</option>
<option value="3" style="background:#0000FF;">蓝</option>
<option value="4" style="background:#008040;">绿</option>
<option value="5" style="background:#FF6600;">橙</option>
<option value="6" style="background:#FF00FF;">粉</option>
</select>
                    <!-- 选择颜色样式pop -->
                    <div class="im-pop-color" style="bottom: 32px; left: 160px;" id="colorPanel">
                    <a href="#" class="im-pop-close im-icon-close " id="j_colorClose" title="关闭"></a>
                    <select id="font_c" onchange="font_init();">
<option value="0">颜色</option>
<option value="1" style="background:#000000;">黑</option>
<option value="2" style="background:#FF0000;">红</option>
<option value="3" style="background:#0000FF;">蓝</option>
<option value="4" style="background:#008040;">绿</option>
<option value="5" style="background:#FF6600;">橙</option>
<option value="6" style="background:#FF00FF;">粉</option>
</select>
                    </div>
</div>
<!-- 表情弹出层 -->
<div class="im-pop-face" id="j_popFace">
 <div id="face" style="">
    <div><span class="U_Lin_Bqoo" title="点击关闭" ><img src="http://www.omooo.com.cn/member/image/close.gif"></span><strong>选择表情</strong></div>
      <?php if($faces) { ?>
<table cellspacing="0" cellpadding="0" title="点击选择">
<?php if(is_array($faces)) { foreach($faces as $k => $v) { ?>
<?php if($k%10==0) { ?><tr><?php } ?>
<td onmouseover="this.style.backgroundColor='#E3EEF3';" onmouseout="this.style.backgroundColor='';"><img src="face/<?php echo $v;?>.gif" onclick="face_into('<?php echo $v;?>');"/></td>
<?php if($k%10==9) { ?></tr><?php } ?>
<?php } } ?>
</table>
<?php } ?>
</div>


<div id="__view_div__" style="top: 129px; left: 314px; display: none;" class="im-face-view-classic"><img src=""> </div></div>
</div>
<!-- 输入文字区 -->
<div class="im-edit-ipt-area">

<textarea class="im-edit-ipt" placeholder="请说明您要咨询的问题……" id="word"  onkeydown="return chat_key(event);" onfocus="Dh('ec');font_hide();face_hide();new_tip_stop();" onclick="if(this.value==chat_lang.tip)this.value='';"></textarea><script type="text/javascript">Dd('word').value=chat_lang.tip;</script>
<!-- <div id="text_in" placeholder="请说明您要咨询的问题……" class="im-edit-ipt" style="overflow-y: auto; font-weight: normal; font-size: 12px; overflow-x: hidden; word-break: break-all; font-style: normal; outline: none; color: rgb(153, 102, 255);" contenteditable="true"></div> -->
</div>
<!-- 发送区 -->
<div class="im-edit-btn-area">
<div class="im-link-area">
<a href="" target="_blank" class="im-txt-link jf" style="">登录摩恩手机客户端</a>
<a id="tip" style='color:#FF6708'></a>
</div>
<div class="im-btn-send-area" title="按Enter键发送消息，Ctrl+Enter换行">
<a href="#" class="im-btn im-btn-send" onclick="chat_send();" id="chat_s" >
<span class="im-txt">发送</span>
<span class="im-btn-l"></span>
</a>
<a href="#" class="im-btn im-btn-send-set " id="change" title="发送设置">
<i class="im-icon-arrow-down"></i>
<span class="im-btn-r"></span>
</a>
<!-- 编辑发送浮层 --> 
<div class="im-pop-send-set cbut" style="" id="ec">
                        <ul class="im-send-set-list">
                        <!-- 当前高亮加class current -->
                        <li class="im-item current" id="hotkey1">
                        <a href="javascript:ec_set(1);" class="im-item-content" id="ec1" >
                        <i class="im-icon-right"></i>
                        <span class="im-txt">按Enter键发送消息，Ctrl+Enter换行</span>
                        </a>
                        </li>
                        <li class="im-item" id="hotkey2">
                        <a href="javascript:ec_set(2);" class="im-item-content" id="ec2">
                        <i class="im-icon-right"></i>
                        <span class="im-txt">按Ctrl+Enter键发送消息，Enter换行</span>
                        </a>
                        </li>
                        </ul>
                        </div>
</div>
<a href="#" class="im-btn im-btn-close" id="talk_c">
<span class="im-txt" onclick="chat_off();">结束对话</span>
<span class="im-btn-l"></span>
<span class="im-btn-r"></span>
</a>
<div class="im-edit-tip" id="chat_count"> 还可以输入<span class="im-txt-num" id="countSZ">300</span>字</div>
</div>
</div>
<!-- 表情 end -->
</div>
<!-- 内容结束 -->
<!-- 右边 -->
<div class="im-right-sidebar" >
<div class="im-right-title">
<i>对方信息</i>
</div>
<div class="im-right-cont1">
<div class="im-right-img">
<span>
<img src="<?php echo useravatar($user['fromuser']);?>" alt="" class="im-right-tou" <?php if($ol==1) { ?> title="会员在线"<?php } else { ?> title="会员离线" <?php } ?>
>

</span>
<div class="im-right_Uname">
<p><i><?php echo $user['company'];?>(<?php if($ol==1) { ?>在线<?php } else { ?>离线<?php } ?>
)</i><img src="<?php echo DT_SKIN;?>/image/vip_<?php echo $user['vip'];?>.gif" alt=""></p>
<p>欢迎您的到来！！</p>
</div>
</div>
<div class="im-right-cont1-li">
<ul>
<li><span>认证情况：</span>  
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($user['validated']) { ?>v<?php } else { ?>u<?php } ?>
_member.gif"/> <?php if($MOD['vemail']) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($user['vemail']) { ?>v<?php } else { ?>u<?php } ?>
_email.gif"  title="<?php if($vemail) { ?>已通过<?php } else { ?>未通过<?php } ?>
邮件认证" align="absmiddle"/> <a href="validate.php?action=email" class="l">邮件</a> 
<?php } ?>
<?php if($MOD['vmobile']) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($user['vmobile']) { ?>v<?php } else { ?>u<?php } ?>
_mobile.gif"  title="<?php if($vmobile) { ?>已通过<?php } else { ?>未通过<?php } ?>
手机认证" align="absmiddle"/> <a href="validate.php?action=mobile" class="l">手机</a> 
<?php } ?>
<?php if($MOD['vbank']) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($user['vbank']) { ?>v<?php } else { ?>u<?php } ?>
_bank.gif"  title="<?php if($vbank) { ?>已通过<?php } else { ?>未通过<?php } ?>
银行帐号认证" align="absmiddle"/> <a href="validate.php?action=bank" class="l">银行</a>
<?php } ?>
<?php if($MOD['vtruename']) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($user['vtruename']) { ?>v<?php } else { ?>u<?php } ?>
_truename.gif"  title="<?php if($vtruename) { ?>已通过<?php } else { ?>未通过<?php } ?>
真实姓名认证" align="absmiddle"/> <a href="validate.php?action=truename" class="l">实名</a>
<?php } ?>
<?php if($MOD['vcompany'] && $user['groupid'] > 5) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($user['vcompany']) { ?>v<?php } else { ?>u<?php } ?>
_company.gif" title="<?php if($vcompany) { ?>已通过<?php } else { ?>未通过<?php } ?>
公司资料认证" align="absmiddle"/> <a href="validate.php?action=company" class="l">公司</a>
<?php } ?>
</li>
<li><span>即时通讯：</span><a href="?action=black&username=<?php echo $user['username'];?>" onclick="return confirm('确定要屏蔽Ta吗？您将不再收到Ta的消息');">[屏蔽Ta]</a></li>
</ul>
</div>
</div>
<div class="im-right-title">
<i>站内须知</i>
</div>
<div class="im-right-cont2">
<ol>
<?php if(is_array($list)) { foreach($list as $i => $k) { ?>
<li><a href="<?php echo $CFG['url'];?>/member/my_news.php?action=view&itemid=<?php echo $k['itemid'];?>"><?php echo dsubstr(strip_tags($k['title']),30,'...');?></a></li>
<?php } } ?>

</ol>
</div>
<!-- 右边 end -->
</div>
</div>
<div id="sd"></div>
<form method="post" action="chat.php" name="down" id="down" target="send">
<input type="hidden" name="action" value="down"/>
<input type="hidden" name="chatid" value="<?php echo $chatid;?>"/>
<input type="hidden" name="data" value="" id="down_data"/>
</form>
<script type="text/javascript" src="<?php echo DT_STATIC;?>/file/script/chat_new.js"></script>
<?php if($MOD['chat_file'] && $MG['upload']) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/clear.js"></script><?php } ?>
<script type="text/javascript">
window.onload = function(){
        var bodyh = document.documentElement.clientHeight;
        document.getElementById("scrollDiv").style.height = (parseInt(bodyh) - 280) + 'px';
} 
</script>
<script>
$(function(){
var concishu=1;
$("#j_chatRestore").click(function() {
    if (concishu == 1) {
      $('.im_wrap').animate({
        width: "1000px"
      });
      concishu++;
    } else {
      $('.im_wrap').animate({
       width: "100%"
      });
      concishu--;
    }
  });
})

</script>
<!-- im主题内容 end -->
<!-- <span id="info_keleyi_com">请改变浏览器窗口大小</span> -->
<script>
window.onresize = function(){
document.getElementById("info_ke"+"leyi_com").innerHTML="宽度："+document.documentElement.clientWidth+"，高度："+document.documentElement.clientHeight;
alert()
}
</script>
</div>
</body>
</html>
<?php } ?>
