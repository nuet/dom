<?php defined('IN_DESTOON') or exit('Access Denied');?>var destoon_userid = <?php echo $_userid;?>;
var destoon_username = '<?php echo $_username;?>';
var destoon_message = <?php echo $_message;?>;
var destoon_chat = <?php echo $_chat;?>;
var destoon_cart = substr_count(get_cookie('cart'), ',');
var destoon_member = '';
var destoon_member1 = '';
<?php if($_userid) { ?>
destoon_member1 +='<a href="<?php echo $MODULE['2']['linkurl'];?>message.php">站内信(<span class="head_t" id="destoon_message"><?php if($_message) { ?><strong><?php echo $_message;?></strong><?php if($_sound) { ?>'+sound('message_<?php echo $_sound;?>')+'<?php } ?>
<?php } else { ?>0<?php } ?>
</span>)<?php if($DT['im_web']) { ?> | <a href="<?php echo $MODULE['2']['linkurl'];?>chat.php">新对话(<span class="head_t" id="destoon_chat"><?php if($_chat) { ?><strong><?php echo $_chat;?></strong>'+sound('chat_new')+'<?php } else { ?>0<?php } ?>
</span>)</a><?php } ?>
  您好，<i style="color:red"><?php echo $_truename;?>&nbsp;</i>！';
destoon_member += '<div class="oyw_Land_r fr" style="padding-top:7px;"><a href="<?php echo $MODULE['2']['linkurl'];?>line.php" title="<?php if($_online) { ?>在线，点击隐身<?php } else { ?>隐身，点击上线<?php } ?>
"><img src="<?php echo DT_SKIN;?>image/user_<?php if($_online) { ?>on<?php } else { ?>off<?php } ?>
line.png" width="10" height="10"style="vertical-align:baseline" align="absmiddle"/></a>&nbsp;&nbsp; <a href="<?php echo $MODULE['2']['linkurl'];?>">会员中心</a> &nbsp;&nbsp;<a href="#">我的订单</a>&nbsp;&nbsp;<a href="<?php echo $MODULE['2']['linkurl'];?>favorite.php">我的收藏</a>&nbsp;&nbsp;付款方式 &nbsp;&nbsp;<a href="<?php echo $MODULE['2']['linkurl'];?>logout.php">退出</a>&nbsp;&nbsp;<?php if($admin_user) { ?><a href="<?php echo $CFG['url'];?>/index.php?action=logout">注销授权</a><?php } ?>
</div>';
<?php } else { ?>
<?php if($EXT['oauth']) { ?>
var oauth_site = '<?php echo get_cookie('oauth_site');?>';
var oauth_user = '<?php echo get_cookie('oauth_user');?>';
destoon_member += (oauth_user && oauth_site) ? '<img src="<?php echo DT_PATH;?>api/oauth/'+oauth_site+'/ico.png" align="absmiddle"/> 欢迎，<strong>'+oauth_user+'</strong> | <a href="<?php echo DT_PATH;?>api/oauth/'+oauth_site+'/index.php?time=<?php echo $DT_TIME;?>">绑定帐号</a> | <a href="javascript:" onclick="oauth_logout();">注销登录</a>' : '<div class="oyw_Land_r fr" style="padding-top:7px;"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>">[请登录]</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>">[免费注册]</a>&nbsp;&nbsp;<a href="<?php echo $MODULE['2']['linkurl'];?>send.php">[忘记密码]</a>&nbsp;&nbsp;<a href="#">&nbsp;我的订单&nbsp;</a>&nbsp;&nbsp;<a href="<?php echo $MODULE['2']['linkurl'];?>favorite.php">我的收藏</a> &nbsp;&nbsp;&nbsp;付款方式</div>';
destoon_member1 +='（0）您好，客人！欢迎来到摩恩建站平台！ ';
<?php } else { ?>
destoon_member1 +='（0）您好，客人！欢迎来到摩恩建站平台！ ';
destoon_member += '<div class="oyw_Land_r fr" style="padding-top:7px;"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>">[请登录]</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>">[免费注册]&nbsp;</a>&nbsp;&nbsp;<a href="<?php echo $MODULE['2']['linkurl'];?>send.php">[忘记密码]</a>&nbsp;&nbsp;<a href="#">&nbsp;我的订单&nbsp;</a>&nbsp;&nbsp;<a href="<?php echo $MODULE['2']['linkurl'];?>favorite.php">我的收藏</a> &nbsp;&nbsp;&nbsp;付款方式</div>'

<?php } ?>
<?php } ?>
$('#destoon_member').html(destoon_member);
$('#destoon_member1').html(destoon_member1);
<?php if($DT['city']) { ?>
$('#destoon_city').html('<?php echo $city_name;?>');
<?php } ?>
<?php if($_userid && $DT['pushtime']) { ?>window.setInterval('PushNew()',<?php echo $DT['pushtime'];?>*1000);<?php } ?>
