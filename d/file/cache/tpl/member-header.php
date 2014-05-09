<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header1');?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/style.css"/>
<div class="M_YNav_big">
    <div class="M_YNav">
        <div class="M_YNav_lf" >
          <ul id="Newjsddm" class="Newjsddm">
              <li class="MMT5"><a href="<?php echo $CFG['url'];?>" class="hover1">会员中心</a></li>
              <li class=""><a href="<?php echo $CFG['url'];?>mall/" class="topli">定制网站套餐&nbsp;&nbsp;<i class="XiaHuala"></i></a>
                  <ul class="New_LI_XXul">
                      <li><a href="<?php echo $CFG['url'];?>mall/list.php?catid=4">展示网站建设</a></li>
                      <li><a href="<?php echo $CFG['url'];?>mall/list.php?catid=5">品牌网站建设</a></li>
                      <li><a href="<?php echo $CFG['url'];?>mall/list.php?catid=6">营销网站建设</a></li>
                     
                  </ul>
              </li>
              <li><a href="<?php echo $CFG['url'];?>group/" class="topli">模版建站市场&nbsp;&nbsp;<i class="XiaHuala"></i></a>
                   <ul class="New_LI_XXul">
              <li><a href="<?php echo $CFG['url'];?>group/list-41.html">企业模版网站</a></li>
              <li><a href="<?php echo $CFG['url'];?>group/list-42.html">商城模版网站</a></li>
              <li><a href="<?php echo $CFG['url'];?>group/list-43.html">全Flash网站</a></li>
              <li><a href="<?php echo $CFG['url'];?>group/list-44.html">&nbsp;&nbsp;手机网站&nbsp;&nbsp;</a></li>
                  </ul>
              </li> 
              <li><a href="#" class="topli">手机网站建设</a></li>
              <li><a href="<?php echo $MODULE['100']['linkurl'];?>" class="topli">Logo设计</a></li>
              <li><a href="<?php echo $MODULE['6']['linkurl'];?>" class="topli">个性定制&nbsp;&nbsp;<em></em></a></li>
              <li><a href="#" class="topli">网站维护套餐 </a></li>
          </ul>
       
        </div>
        <div class="M_YNav_NeGifRT">
          <img src="<?php echo DT_SKIN;?>image/M_YNav_NeGifRT.gif" alt="">
        </div>
</div>
<!-- 导航开始end -->
</div>
<!-- 用户中心内容 开始-->
<div class="u_cont">
  <!-- 左边大盒子 -->
    <div class="u_sx u_fl">
           <!-- 树形导航 -->
        <div class="u_sx_nav">
     
         
              <?php if($_groupid <=5) { ?>
                   <div class="u_sx_sjs_t"><span><p><i>项目中心</i><img src="<?php echo DT_SKIN;?>/image/oy_xl_znav.gif" alt=""></p></span>
              <ul>
                <li><span><a href="trade.php">跟踪</a></span><a href="trade.php">定制套餐</a></li>
                <li><span><a href="group.php">跟踪</a></span><a href="group.php">模版套餐</a></li>
                 <li><span><a href="trades.php">跟踪</a></span><a href="trades.php">平面设计套餐</a></li>
                <li><span><a href="favorite.php">查看</a></span><a href="favorite.php">我的收藏</a></li>
                <li><span><a href="<?php echo $CFG['url'];?>buy/">发布</a></span><a href="<?php echo $CFG['url'];?>member/my.php?mid=6">个性需求</a></li>
                <li><span><a href="<?php echo $CFG['url'];?>weihu/">购买</a></span><a href="weihu.php">网站维护</a></li>
                
              </ul>
            </div>
            <div class="u_sx_sjs_t"><span><p><i>客服中心</i><img src="<?php echo DT_SKIN;?>/image/oy_xl_znav.gif" alt=""></p></span>
              <ul>
                <li><span><a href="message.php?action=send">发信</a></span><a href="message.php">站内信件<?php if($_message) { ?><em><?php echo $_message;?></em><?php } ?>
</a></li>
                <li><span><a href="chat.php?action=add">查看</a></span><a href="chat.php">站内交谈<?php if($_chat) { ?><em><?php echo $_chat;?></em><?php } ?>
</a></li>
                <li><span><a href="sendmail.php">电邮</a></span><a href="mail.php">邮件订阅</a></li>
                <li><span><a href="ask.php?action=add">提问</a></span><a href="ask.php">售后中心</a></li>
               <li><span><a href="beian.php?action=update&step=1">申请</a></span><a href="beian.php">备案系统</a></li>
              </ul>
            </div>
            <div class="u_sx_sjs_t"><span><p><i>账户中心</i><img src="<?php echo DT_SKIN;?>/image/oy_xl_znav.gif" alt=""></p></span>
              <ul>
                <li><span><a href="avatar.php">头像</a></span><a href="edit.php">会员资料</a></li>
                <li><span><a href="trade.php">查看</a></span><a href="address.php?action=add">项目主体</a></li>
                <li><span><a href="record.php?action=pay">站内</a></span><a href="record.php">资金流水</a></li>
                <li><span><a href="charge.php?action=pay">充值</a></span><a href="charge.php?action=record">充值记录</a></li>
                <li><span><a href="cash.php?action=record">提现</a></span><a href="cash.php">提现记录</a></li>
                  <li><span><a href="usr_chg.php">查看</a></span><a href="usr_chg.php?action=add">发票申请</a></li>
                <li><span><a href="credit.php">查看</a></span><a href="credit.php?action=buy">积分管理</a></li>
              </ul>
              <?php } else if($_groupid > 5) { ?>
                 <div class="u_sx_sjs_t"><span><p><i>项目中心</i><img src="<?php echo DT_SKIN;?>/image/oy_xl_znav.gif" alt=""></p></span>
   
                 <ul>
                 <li><span><a href="project.php?my=1">查看</a></span><a href="project.php?my=1">我的建站项目</a></li>
                <li><span><a href="design.php?my=1">查看</a></span><a href="design.php?my=1">我的平面项目</a></li>
                <li><span><a href="group.php">订单</a></span><a href="my.php?mid=17">我的模版项目</a></li>
                <li><span><a href="message.php?action=send">发信</a></span><a href="project.php">建站项目大厅</a></li>
                <li><span><a href="message.php?action=send">发信</a></span><a href="design.php">平面项目大厅</a></li>
                 <li><span><a href="favorite.php">查看</a></span><a href="favorite.php">我的收藏</a></li>
              </ul>
            </div>
            <div class="u_sx_sjs_t"><span><p><i>业务中心</i><img src="<?php echo DT_SKIN;?>/image/oy_xl_znav.gif" alt=""></p></span>
              <ul>
                    <li><span><a href="message.php?action=send">发信</a></span><a href="message.php">站内信件<?php if($_message) { ?><em><?php echo $_message;?></em><?php } ?>
</a></li>
                <li><span><a href="chat.php?action=add">查看</a></span><a href="chat.php">站内交谈<?php if($_chat) { ?><em><?php echo $_chat;?></em><?php } ?>
</a></li>
                <li><span><a href="record.php?action=pay">站内</a></span><a href="record.php">资金流水</a></li>
                <li><span><a href="charge.php?action=pay">充值</a></span><a href="charge.php?action=record">充值记录</a></li>
                <li><span><a href="cash.php?action=record">提现</a></span><a href="cash.php">提现记录</a></li>
          
              </ul>
            </div>
            <div class="u_sx_sjs_t"><span><p><i>设计师资料</i><img src="<?php echo DT_SKIN;?>/image/oy_xl_znav.gif" alt=""></p></span>
              <ul>
               <li><span><a href="avatar.php">头像</a></span><a href="edit.php">会员资料</a></li>
              <li><span><a href="validate.php?action=truename">查看</a></span><a href="validate.php?action=truename">实名认证</a></li>
               <li><span><a href="oauth.php">绑定</a></span><a href="oauth.php">一键登录</a></li>
              <li><span><a href="<?php echo $CFG['url'];?>index.php?homepage=<?php echo $_username;?>" target="_blank">预览</a></span><a href="home.php">主页设置</a></li>
               <li><span><a href="style.php">查看</a></span><a href="style.php">模版设置</a></li>
               <li><span><a href="honor.php?action=add">添加</a></span><a href="honor.php">以往作品</a></li>
               
              </ul>
              
              <?php } ?>
            </div>
        </div>
  
        <!-- 左边广告 -->
        <div class="u_sx_ban">
          <span><?php echo ad(19);?>
          </span>
        </div>
    </div>
<div id="msgbox" style="display:none;"></div>
<?php echo dmsg();?>
<div class="main_tb">
<table cellpadding="0" cellspacing="0" width="610px">
<tr>
<td class="side_h" onclick="oh(this);" title="点击展开/隐藏侧栏" id="side_oh">&nbsp;</td>
<td valign="top" class="main" id="main">
