<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<link href="<?php echo DT_SKIN;?>/mall_last.css" rel="stylesheet" type="text/css">
<!-- 顶部结束 -->
<!-- 导航结束 -->
<!-- New订单页面 -->
<div class="N_DdyXQ">
  <div class="N_DdyXQ_nav">
    <p>
      ·您的位置<a href="">首页</a>&nbsp;><a href="">商城</a>&nbsp;><a href="">提交订单</a>&nbsp;><a href="">完善网站需求</a>
    </p>
  </div>
  <div class="N_DdySX">
    <div class="N_DdySX_t">订单详情</div>
    <div class="N_DdySX_cont">
      <div class="N_DdySX_contlf">
        <p><b>公司名称:</b><?php echo $td['buyer_name'];?>(<?php echo $td['title'];?>)</p>
        <p><b>所在地区:</b><?php echo $td['areaid'];?></p>
      </div>
      <div class="N_DdySX_contrt">
        <p><b>网址:</b><?php if(!$td['num']) { ?>无 <?php } else { ?><?php echo $td['num'];?> <?php } ?>
</p>
        <p><b>行业:</b><?php echo $td['hy_sort'];?></p>
      </div>
    </div>
  </div>
  <!-- 订单流程 -->
  <div class="N_DdyLc">
    <img src="<?php echo DT_SKIN;?>image/N_DdyLc_baner.jpg" alt="">
  </div>
  <!-- 订单流程end -->
  <div class="N_DdyXQBGt">
    <ul>
      <li><a href="">订单详情</a></li>
    </ul>
  </div>
  <!-- 首页最终作品 -->
  <div class="N_DdyZZSY">
    <div class="N_DdyZZSY_t">
      <p><b>首页最终作品：</b>(点击图片可以预览网页效果)</p>
    </div>
    <div class="N_DdyZZSY_cont">
      <div class="N_DdyZZSY_contLf"></div>
   
  
       
       <!--  <div class="N_DdyZZSY_contimg">
        <div class="N_DdyZZSY_contIBox">
        <img  class="thimgth"src="<?php echo $index['upload'];?>" alt="">
          <span>
          <?php if($td['num']) { ?>
            <div><p><a href="<?php echo $td['num'];?>"  style="float:left;margin-left:48px;font-weight: bold;color:#FFF" target="_blank">演示网站</a><a href="<?php echo $CFG['url'];?>/extend/view_pic.php?img=<?php echo $index['upload'];?>"style="float:right;margin-right:48px;font-weight: bold;color:#FFF"  target="_blank">演示图片</a></p></div>
          <?php } else { ?>
            <div><p><a href="<?php echo $CFG['url'];?>/extend/view_pic.php?img=<?php echo $index['upload'];?>"style="font-weight: bold;color:#FFF" target="_blank">演示图片</a></p></div>
          <?php } ?>
          
          </span>
          <div class="dinggaozhang">
            <img src="<?php echo DT_SKIN;?>image/dinggaozhang.fw.png" alt="">
          </div>
        </div>
        <p>设计师：<?php echo $index['person'];?></p>
      </div> -->
       
    <div class="N_DdyZZSY_contimg">
        <div class="N_DdyZZSY_contIBox">
        <img  class="thimgth"src="<?php echo $index['upload'];?>" target="_blank" alt="">
          <span class="fire">
            
            </span>
            <?php if($td['num']) { ?>
             <a  href="<?php echo $CFG['url'];?>/extend/view_pic.php?img=<?php echo $index['upload'];?>"target="_blank"  class="x"></a>
            <a   href="<?php echo $td['num'];?>" target="_blank"  class="y"  ></a>
            <?php } else { ?>
              <a   href="<?php echo $CFG['url'];?>/extend/view_pic.php?img=<?php echo $index['upload'];?>"target="_blank"  class="z"  ></a>
            <?php } ?>
         
          <div class="dinggaozhang">
            <img src="<?php echo DT_SKIN;?>image/dinggaozhang.fw.png" alt=""target="_blank" >
          </div>
        </div>
        <p>设计师：<?php echo $index['person'];?></p>
      </div>
 

      
     <div class="N_DdyZZSY_contPingyu">
        <div class="N_DdyZZSY_contPingyuX"><p>客户评价<span><img src="<?php echo $CFG['url'];?>file/image/star<?php echo $cm['seller_star'];?>.gif" alt=""></span></p></div>
        <div class="N_DdyZZSY_contPingyuC">
          <p><?php if(!$cm['seller_comment']) { ?> 好评！<?php } else { ?> <?php echo $cm['seller_comment'];?> <?php } ?>
</p>
        </div>
      </div>
      <div class="N_DdyZZSY_contRt"></div>
    </div>
  </div>
  <!-- 首页最终作品 end -->
  <!-- 首页所有设计稿 -->
  <div class="N_SYSJGIndex">
    <div class="N_SYSJGIndTT"><p><b>首页所有设计稿：</b>(点击放大图片)</p></div>
    <!-- 线 -->
    <div class="NSKlink"></div>
    <!-- 线end -->
    <div class="N_SYSJGIndexOne">
      <ul >
     <?php if(is_array($index_alls)) { foreach($index_alls as $i => $m) { ?>
        <li style="">
          <a href="#" onclick="window.open('<?php echo $CFG['url'];?>/extend/view_pic.php?img=<?php echo $m['upload'];?>')">
            <div class="DingzhiSHowZDIm">
              <img src="<?php echo $m['upload'];?>" alt="" class="sy_thumb">    
              <span class="yinBg" style="display: none;">
               
              </span> <div class="yuanS" style="display: none;">
                  </div>
            </div>
          </a>
          <p>设计师：<?php echo $m['designer'];?></p>
        </li>
       <?php } } ?>
       
      </ul>
    </div>
  </div>
  <!-- 首页所有设计end -->
  <!-- 线 -->
    <div class="NSKlink"></div>
    <!-- 线end -->
    <!-- 栏目作品 -->
    <div class="N_SYSJGIndTT" style="margin-top:5px;"><p><b>栏目作品：</b>(点击图片可以预览网页效果)</p></div>
    <div class="N_SYSJGIndex">
    <div class="N_SYSJGIndexOne">
      <ul >
      <?php if(is_array($lms)) { foreach($lms as $m => $lm) { ?>
        <li style="">
          <a href="#" onclick="window.open('<?php echo $CFG['url'];?>extend/view_pic.php?img=<?php echo $lm['upload'];?>')">
            <div class="DingzhiSHowZDIm">
              <img src="<?php echo $lm['upload'];?>" alt="" class="sy_thumb">    
              <span class="yinBg" style="display: none;">
                
              </span><div class="yuanS" style="display: none;">
               </div>
            </div>
          </a>
          <p><?php echo $lm['note'];?></p>
        </li>
        <?php } } ?>
      </ul>
    </div>
  </div>
    <!-- 栏目作品 end -->
</div>
<!-- New订单页面 end-->
<!-- 弹出层 -->
<div class="TanchuCBg modal-backdrop fade in"></div>
<!-- footer页面开始 -->
<?php include template('footer');?>