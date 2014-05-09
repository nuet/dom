<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header2');?>
<div class="u_wsxq">
<div class="u_wsxq_baner">
<img src="<?php echo DT_SKIN;?>/image/u_wsxq_ban.jpg" alt="">
</div>
<div class="u_mbxdh">
<span>·您的位置：<a href="">首页</a> > <a href="">商城</a> > <a href="">提交订单</a> > <a href="">完善网站需求</a></span>
</div>
<!-- 订单详情 -->
<div class="u_ddxqsw">
<div class="u_ddxqsw_t"><span>订单详情</span></div>
<div class="u_ddxqsw_con">
<div class="u_ddxqsw_con_l">
<span><b>公司名称：</b><?php echo $td['buyer_name'];?>（<?php echo $td['title'];?>）</span>
<span><b>订单编号：</b><?php echo $td['itemid'];?></span>
<span><b>所在地区：</b><?php echo $td['areaid'];?></span>

<span><b><i>项目状态：</i></b><?php echo $td['status_zt'];?>（<i>已付款<?php echo $td['ready_money'];?>元  </i>）</span>
</div>
<div class="u_ddxqsw_con_r">
<span><b>订单总金额：</b><i><b><?php echo $td['amount'];?>元</b></i></span>
<span><b>订单时间：</b><?php echo $td['adddate'];?></span>
<span><b>行业：</b><?php echo $td['hy_sort'];?></span>
</div>
</div>
</div>
<!-- 订单详情 结束-->
<!-- 建站资料开始 -->
<!-- 建站资料选项卡 -->


  <div class="js_case clear">
    <div class="js_title cf">

      <ul class="js_title-list cf">
     <li><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=upload_5&forward=<?php echo $_GET['forward'];?>">建站资料</a></li>
        <li><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=index&forward=<?php echo $_GET['forward'];?>">首页设计</a></li>
        <li><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=lm&forward=<?php echo $_GET['forward'];?>">栏目页及内页设计</a></li>
        <li  class="on"><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=design&forward=<?php echo $_GET['forward'];?>">程序开发</a></li>
        <li><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=last&forward=<?php echo $_GET['forward'];?>">网站上线</a></li>
      </ul>
    </div>
    <div class="product-wrap">
     <!--建站资料-->
     <div class="js_product" >
     </div>
<div class="js_product ">
</div>
<div class="js_product">
</div>
<div class="js_product show">
<div class="u_jzzl_chengxukaifa" id="u_jzzl_chengxukaifa">
       <div class="u_jzzl_chengxukaifa_k" id="u_jzzl_chengxukaifa_k">
       <?php if($td['status']>=6 ) { ?>
       <div class="u_jzzl_chengxukaifa_cont">
       <div class="u_jzzl_chengxukaifa_cont_lf">
       <span><b>网站测试地址：</b></span>
       <span><b>后台地址：</b></span>
       <span><b>后台用户名：</b></span>
       <span><b>后台密码：</b></span>
       <span>
       <p>
       <i>注：如有问题，请联系专属客服。</i>
       </p></span>
       </div>
       <div class="u_jzzl_chengxukaifa_cont_rt">
       <span><a href="<?php echo $website['url'];?>"><?php echo $website['url'];?></a></span>
       <span><a href="<?php echo $website['adminurl'];?>"><?php echo $website['adminurl'];?></a></span>
       <span><?php echo $website['username'];?></span>
       <span><?php echo $website['password'];?></span>
       <span>
       <a href="message.php?action=send&touser=<?php echo $_kf;?>"  target="_blank"><img src="<?php echo DT_SKIN;?>/image/fasongzhanneixin.gif" alt=""></a>
       <a href="chat.php?touser=<?php echo $_kf;?>&mid=16&itemid=<?php echo $td['itemid'];?>" target="_blank"><img src="<?php echo DT_SKIN;?>/image/onlingoutong.gif" alt=""></a>
       </span>
       </div>
       </div>
       <?php } ?>
       <?php if($td['pay']==1 && $td['status']==6) { ?>
       <div class="u_jzzl_chengxukaifa_cont_bon">
       <p>注：程序开发后网站进入调试阶段，请测试网站效果，此时页面将不再变动，如果需要变动将收取一定的费用。如需变动页面内容及程序，请联系客服。
同意请点击立刻付款。付清尾款后，根据您所选取的主机不同进行操作，操作后即可立即上线.</p>
<span>网站尾款：<i>￥<?php echo $td['price3'];?></i><input type="submit" value="验收付款" onclick="Go('trade.php?itemid=<?php echo $td['itemid'];?>&action=update&step=pay_3&forward=<?php echo $forward;?>');"></span>
       </div>
       <?php } else { ?>
       
       <?php } ?>
       </div>
       </div>
</div>
        
</div>
<div class="js_product">
     
    </div>
  </div>
<!-- 建站资料选项卡 结束-->
</div>
<!-- 建站资料结束 -->
<?php include template('footer');?>
