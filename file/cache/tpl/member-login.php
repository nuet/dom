<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header3');?>
<div class="NeLoHeaer">
  <div class="N_L_logo">
    <span><a href="<?php echo $CFG['url'];?>"><img src="<?php echo DT_SKIN;?>/image/Login_Logo.fw.jpg" alt=""></a><i>帐号登录</i></span>
    <p><a href="<?php echo $CFG['url'];?>">返回首页</a> | <a href="">帮助中心</a> | <a href="">联系客服</a></p>
  </div>
</div>
<div class="L_link"></div>
<!-- 头部结束 -->
  <!-- 主体内容开始 -->
 <form method="post" action="<?php echo $DT['file_login'];?>"  onsubmit="return Dcheck();">
 <input name="forward" type="hidden" id="forward" value="<?php echo $forward;?>">
 
  <div class="NeLo_Cont">
    <div class="NeLo_Cont_lf">
      <img src="<?php echo DT_SKIN;?>/image/New_Login.jpg" alt="">
    </div>
    <div class="NeLo_Cont_rt">
        <div class="NeLo_Cont_rt_1"><p>摩恩网络IDC数据平台帐号可以直接登录</p></div>
        <div class="NeLo_Cont_rt_2">
          <span><b>登录名：</b><i><a href="send.php">忘记登录名？</a></i></span><br />
         <input type="text" name="username" placeholder="手机/邮箱/会员名" class="uername" id="username" size="16"  > 
        </div>
        <div class="NeLo_Cont_rt_2">
          <span><b>登录密码：</b><i><a href="send.php">忘记登录密码？</a></i></span><br />
          <input type="password" placeholder="登录密码" name="password" class="password" id="password">
        </div>
        <div class="NeLo_Cont_rt_3">
          <input type="submit" value="登&nbsp;&nbsp;录" name="submit">
        </div>
        <div class="NeLo_Cont_rt_4">
          <p> <input type="checkbox" name="cookietime" value="1" id="cookietime"<?php if($MOD['login_remember']) { ?> checked<?php } ?>
/>记住我
             <input type="checkbox" name="goto" value="1" id="goto"<?php if($MOD['login_goto']) { ?> checked<?php } ?>
/>进入我的后台</p>
          <i><a href="register.php">免费注册</a></i>
        </div>
        <div class="NeLo_Cont_rt_5">
          合作网站登录：
          <?php if($oa) { ?>

<?php if(is_array($OAUTH)) { foreach($OAUTH as $k => $v) { ?>
<?php if($v['enable']) { ?><a href="<?php echo DT_PATH;?>api/oauth/<?php echo $k;?>/connect.php" title="<?php echo $v['name'];?>"><img src="<?php echo DT_PATH;?>api/oauth/<?php echo $k;?>/ico.png" alt="<?php echo $v['name'];?>"/></a> &nbsp;<?php } ?>
<?php } } ?>
<?php } ?>
          
        </div>
    </div>
  </div>
</form>
<!-- 验证登录用户js 开始-->
<script>
function Dcheck()
{
var user = $("#username").val();
var pass = $("#password").val();
if (user == "")
{
Maya.MessageBox("请输入 <strong>登录用户名</strong> ");
    $("username").focus();
    return false;
}
if(pass == "")
{
Maya.MessageBox("请输入 <strong>密码</strong> ");
    $("#password").focus();
    return false;
}
}
</script>
<?php include template('footer2');?>