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
        <li  class="on"><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=lm&forward=<?php echo $_GET['forward'];?>">栏目页及内页设计</a></li>
        <li><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=design&forward=<?php echo $_GET['forward'];?>">程序开发</a></li>
        <li><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=last&forward=<?php echo $_GET['forward'];?>">网站上线</a></li>
      </ul>
    </div>
    <div class="product-wrap">
     <!--建站资料-->
     <div class="js_product" >
     </div>
<div class="js_product ">
</div>
<div class="js_product show">
<form method="post" action="trade.php" id="dform">
<input type="hidden" name="forward" value="<?php echo $CFG['url'];?>/member/trade.php?itemid=<?php echo $itemid;?>&action=<?php echo $action;?>&step=<?php echo $step;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" value="" name="picid" id="picid">
<input type="hidden" name="confirm_order" value="1"/>
          <div class="u_jzzl_lanmuneiye" id="u_jzzl_lanmuneiye">
          <div class="u_jzzl_lanmuneiye_k" id="u_jzzl_lanmuneiye_k">
          <div class="u_jzzl_lanmuneiye_cont">
          <div class="u_jzzl_lanmuneiye_cont1">
          <div class="u_jzzl_lanmuneiye_cont1_lf">
          <?php if($td['status']>=5 ) { ?><p><b>栏目页及内页设计稿：</b>(点击可预览)如需修改，请提交您的修改意见，便于设计师修改。</p><?php } ?>
          </div>
          <div class="u_jzzl_lanmuneiye_cont1_rt">
          <ul>
          <?php if(is_array($re_upload_1s)) { foreach($re_upload_1s as $i => $r_1) { ?>
<ul><?php if(is_array($r_1['t'])) { foreach($r_1['t'] as $m => $r_1) { ?>
  <li>
     <div class="">
     <a href="<?php echo $CFG['url'];?>extend/view_pic.php?img=<?php echo $r_1['upload'];?>"  target="_blank"><img src="<?php echo $r_1['upload'];?>" id="showthumb<?php echo $m;?>" alt="" disabled ></a>
     <span><?php echo $r_1['note'];?></span>
</div>
        
       </li>
<?php } } ?><?php } } ?>
            
        </ul>
          </div>
          </div>
          <?php if($td['status']>=5 ) { ?>
          <div class="u_jzzl_lanmuneiye_cont2">
          <div class="u_jzzl_lanmuneiye_cont2_lf">
          <p><i>注：如果对本次设计稿不满意，请联系设计师。</i></p>
          </div>
          <div class="u_jzzl_lanmuneiye_cont2_rt">
          <a href="message.php?action=send&touser=<?php echo $re_upload_1s['0']['company_id'];?>"><img src="<?php echo DT_SKIN;?>/image/fasongzhanneixin.gif" alt=""></a>
          <a href="chat.php?touser=<?php echo $re_upload_1s['0']['company_id'];?>&mid=16&itemid=<?php echo $td['itemid'];?>"><img src="<?php echo DT_SKIN;?>/image/onlingoutong.gif" alt=""></a>
          </div>
          </div>
<?php } ?>
  <?php if($td['status']==5 ) { ?>
  <div class="u_jzzl_lanmuneiye_cont3">
<b>栏目页及内页效果确认:</b>
</div>
<div class="u_jzzl_lanmuneiye_cont4">
<p>注：栏目页及内页设计稿确认后，网站将进入程序开发阶段，此时页面将不再变动，如果需要变动将收取一定的费用。如需变动页面内容，请联系客服。同意请点击页面确认。</p>
<span><input type="submit" name="submit" value="页面确认" onclick=" if(!confirm('确认栏目已制作完成么？\n\n请注意:确认后栏目页即为这些')) return false;" class="btn"/>&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/></span>
</div>
<?php } else { ?>


<?php } ?>
  </div>
          </div>
          </div>
        </form>
</div>
<div class="js_product">
</div>
<div class="js_product"></div>
     
    </div>
  </div>
<!-- 建站资料选项卡 结束-->
</div>
<!-- 建站资料结束 -->
<?php include template('footer');?>
