<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header2');?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/style.css"/>
<script type="text/javascript">c(2);var errimg = '<?php echo DT_SKIN;?>image/nopic50.gif';</script>
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
         <li class="on"><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=upload_5&forward=<?php echo $_GET['forward'];?>">建站资料</a></li>
        <li><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=index&forward=<?php echo $_GET['forward'];?>">首页设计</a></li>
        <li><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=lm&forward=<?php echo $_GET['forward'];?>">栏目页及内页设计</a></li>
        <li><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=design&forward=<?php echo $_GET['forward'];?>">PSD上传</a></li>
        <li><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=last&forward=<?php echo $_GET['forward'];?>">网站上线</a></li>
    
      </ul>
    </div>
    <div class="product-wrap">
     <!--建站资料-->
     <div class="js_product show" >
    <div class="u_jzzl" id="u_jzzl">
        <!-- 资料提交后页面显示开始 -->
        <div class="u_jzzl_tjhshow">
        <div class="u_jzzl_tjhshow_1">
        <b>网站语种：</b><?php echo $td['language_style'];?>
        </div>
        <div class="u_jzzl_tjhshow_1">
        <b>网站域名默认的着陆页面：</b><?php echo $xq['language'];?>
        </div>
        <div class="u_jzzl_tjhshow_1">
        <b>网站颜色：</b><img src="<?php echo DT_SKIN;?>/image/color/<?php echo $xq['color_1'];?>.jpg" alt=""> <?php echo $xq['color_1'];?>  网站搭配色：<img src="<?php echo DT_SKIN;?>/image/color/<?php echo $xq['color_2'];?>.jpg" alt=""><?php echo $xq['color_2'];?>
        </div>
        <div class="u_jzzl_tjhshow_1"><span><b>网站框架设定和选择</b></span></div>
        <div class="u_jzzl_tjhshow_1"><b>网页宽度</b>  <?php echo $xq['webwd'];?>px</div>
        <div class="u_jzzl_tjhshow_1">
        <b>网站首页结构：</b> <?php echo $xq['indexjg'];?> 
        <a href=""><img src="<?php echo DT_SKIN;?>/image/ind_jiagou_4.gif" alt=""></a> <a href="">(点击放大)</a>
        </div>
        <div class="u_jzzl_tjhshow_1">
        <b>自己手写或工具制作的首页及其他页面框架图片：</b>
        
         <a href="<?php echo $xq['kj'];?>" target="_blank"><img src="<?php echo DT_SKIN;?>/image/zip.jpg" alt=""><img src="<?php echo DT_SKIN;?>/image/zipdown.jpg" alt="">主站下载</a>
        </div>
        <div class="u_jzzl_tjhshow_1">
        <span><b>参考网站</b></span>
        </div>
        <div class="u_jzzl_tjhshow_1">可参考配色网站地址：<i><?php echo $xq['psweb'];?></i></div>
        <div class="u_jzzl_tjhshow_1">可参考布局网站地址：<i><?php echo $xq['bjweb'];?></i></div>
        <div class="u_jzzl_tjhshow_1">可参考栏目网站地址：<i><?php echo $xq['lmweb'];?></i></div>
        <div class="u_jzzl_tjhshow_1">现有网站地址：<i><?php echo $xq['web'];?></i></div>
        <div class="u_jzzl_tjhshow_1">其他：<i><?php echo $xq['other'];?></i></div>
        <div class="u_jzzl_tjhshow_1"><span><b>建站所需资料</b></span></div>
        <div class="u_jzzl_tjhshow_2">
        <div class="u_jzzl_tjhshow_logo">
        <span>
        <span>公司LOGO图片上传:</span>
        <img src="<?php echo DT_SKIN;?>/image/down_jpg_big.jpg" alt=""><i>
        <img src="<?php echo DT_SKIN;?>/image/zipdown.jpg" alt=""><a href="<?php echo $xq['logo'];?>">主站下载</a></i>
        </span>
        <span>
        <span>公司介绍及联系方式文档：</span> 
        <img src="<?php echo DT_SKIN;?>/image/down_doc_big.jpg" alt=""><i>
        <img src="<?php echo DT_SKIN;?>/image/zipdown.jpg" alt=""><a href="<?php echo $xq['contact'];?>">主站下载</a>
        </span>
        </div>
        <div class="u_jzzl_tjhshow_logo">
        <span><span>
        网站栏目结构: </span>
        <img src="<?php echo DT_SKIN;?>/image/down_exc_big.jpg" alt=""><i>
        <img src="<?php echo DT_SKIN;?>/image/zipdown.jpg" alt=""><a href="<?php echo $xq['lm'];?>">主站下载</a></i>
        </span>
        <span><span>
        网站主题图片及广告语:  </span>
        <img src="<?php echo DT_SKIN;?>/image/down_zip_big.jpg" alt=""><i>
        <img src="<?php echo DT_SKIN;?>/image/zipdown.jpg" alt=""><a href="<?php echo $xq['ad'];?>">主站下载</a></i>
        </span>
        </div>
        <div class="u_jzzl_tjhshow_bc1 clear">
        <i>产品、服务、新闻、案例等资料(此项可后期补充)：</i>
        <?php if(is_array($zl)) { foreach($zl as $i => $v) { ?>
        <span>
        <img src="<?php echo DT_SKIN;?>/image/down_zip_big.jpg" alt=""><br/>
        <i><img src="<?php echo DT_SKIN;?>/image/zipdown.jpg" alt="">
        <a href="<?php echo $v['zl'];?>">主站下载</a></i>
        </span>
        <?php } } ?>
        
        
        </div>
        <div class="u_jzzl_tjhshow_bc2 clear">
        
        <i>补充备注：</i>
        <textarea name="note" id="" cols="100" rows="2"><?php echo $xq['note'];?></textarea>
        
        
        </div>
        </div>
        <!-- 资料提交后页面显示结束 -->
</div>
          </div>
<div class="js_product"></div>
<div class="js_product"></div>
<div class="js_product"></div>
<div class="js_product"></div>
     
    </div>
  </div>
<!-- 建站资料选项卡 结束-->
</div>

<?php include template('footer');?>