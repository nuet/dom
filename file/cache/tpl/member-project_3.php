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
<span><a href="message.php?action=send&touser=<?php echo $td['buyer'];?>" target="_blank"><img src="<?php echo DT_SKIN;?>/image/fasongzhanneixin.gif" alt=""></a>&nbsp;<a href="chat.php?touser=<?php echo $td['buyer'];?>&mid=16&itemid=<?php echo $td['itemid'];?>"  target="_blank"><img src="<?php echo DT_SKIN;?>/image/onlingoutong.gif" alt=""></a></span>
</div>
</div>
</div>
<!-- 订单详情 结束-->
<!-- 建站资料开始 -->
<!-- 建站资料选项卡 -->


  <div class="js_case clear">
    <div class="js_title cf">

      <ul class="js_title-list cf">
    <li><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=upload_5&forward=<?php echo $_GET['forward'];?>">建站资料</a></li>
        <li><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=index&forward=<?php echo $_GET['forward'];?>">首页设计</a></li>
        <li><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=lm&forward=<?php echo $_GET['forward'];?>">栏目页及内页设计</a></li>
        <li><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=design&forward=<?php echo $_GET['forward'];?>">PSD上传</a></li>
        <li  class="on"><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=last&forward=<?php echo $_GET['forward'];?>">网站上线</a></li>
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
  <div class="u_jzzl_webonline" id="u_jzzl_webonline">
       <div class="u_jzzl_webonline_k" id="u_jzzl_webonline_k">
       <div class="u_jzzl_webonline_cont">
       <div class="u_jzzl_webonline_cont_t">
       
       <span class="mgtp20"><i></i></span>
       <?php if($web['url']!="") { ?>
       <span><p>
       您好，客户的网站已上线，地址如下。
       </p></span>
       <span class="mgtp20"><i>网站地址：</i> <input type="text" value="<?php echo $website['num'];?>" name="num" class="webon_txt" readonly></span>
       <?php } else { ?>
           <span><p>
       您好，请等待网站上线。
       </p></span>
       <?php } ?>
       
       
       </div>
       
       </div>
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
  
  
  