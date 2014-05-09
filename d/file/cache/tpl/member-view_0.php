<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header2');?>
<div class="u_wsxq">
<div class="u_wsxq_baner">
<img src="<?php echo DT_SKIN;?>/image/u_wsxq_ban.jpg" alt="">
</div>
<div class="u_mbxdh">
<span>·您的位置：<a href="">首页</a> > <a href="">商城</a> > <a href="">提交订单</a> > <a href="">完善网站需求</a></span>
</div>
<!-- 订单详情 -->
<script>
function onimg(){
var tb_pathToImage = "/skin/default/image/jdt.gif";  
   imgLoader = new Image(); //  image对象  
    imgLoader.src = tb_pathToImage;  
    $("body").append("<div id='Image_load'><img src='" + imgLoader.src + "' /></div>"); //page中增加Img  
    $('#Image_load').show(); //show loader  
$("#foot_za").css("display","block");
}
</script>
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
        <li class="on"><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=index&forward=<?php echo $_GET['forward'];?>">首页设计</a></li>
        <li><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=lm&forward=<?php echo $_GET['forward'];?>">栏目页及内页设计</a></li>
        <li><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=design&forward=<?php echo $_GET['forward'];?>">程序开发</a></li>
        <li><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=last&forward=<?php echo $_GET['forward'];?>">网站上线</a></li>
      </ul>
    </div>
    <div class="product-wrap">
     <!--建站资料-->
     <div class="js_product" >
     </div>
<div class="js_product show">
<?php if($td['status']==2 ) { ?>
<form method="post" action="trade.php" id="dform" onSubmit="return onimg()">
<input type="hidden" name="forward" value="<?php echo $CFG['url'];?>/member/trade.php?itemid=<?php echo $itemid;?>&action=<?php echo $action;?>&step=<?php echo $step;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" value="" name="picid" id="picid">
<input type="hidden" name="confirm_order" value="1"/>
 <div class="u_jzzl_index_sj" id="u_jzzl_index_sj">
        <div class="u_jzzl_index_sj_k" id="u_jzzl_index_sj_k">
        <div class="u_jzzl_index_rw_show">
                    <div class="u_jzzl_index_sj_cont6_lf">
                            <p>
                                <b>首页所有设计稿：</b>(点击图片可以预览网页) <br /><br /><br /><br /><i>     注：如果有看中的首页设计稿件，选择入围后即可看到设计师的在线联系方式，可发站内信或在线沟通进行修改直到确认。</i>
                            </p>
                        </div>
                        <div class="u_jzzl_index_sj_cont6_rt">
                            <ul>
                            <?php if(!$index_alls) { ?>
<span style="font-size:16px;padding:20px;height:30px;position:absolute; left: 200px;top: 100px; ">客官，没有这么快的，等待首页设计稿出现。</span>
<?php } ?>
                            <?php if(is_array($index_alls)) { foreach($index_alls as $i => $m) { ?>
                                <li>
                                    <div class="">
                                    <a target="_blank" href="<?php echo $CFG['url'];?>/extend/view_pic.php?img=<?php echo $m['upload'];?>"><img src="<?php echo $m['upload'];?>" alt=""></a>
                                    <span><?php echo $m['designer'];?></span>
                                    </div>
                                    <br />
                           
                                    <input type="checkbox" name="post[<?php echo $i;?>]" id="pic_id" value="<?php echo $m['id'];?>"/><b>入围</b>
                                </li>
                                <?php } } ?>
                               
                        </div>
                </div>
                <div class="u_jzzl_index_rw_time">
                    <b>首页入围：本套餐可以选择<b style="color: #F65F10;font-size: 16px;font-family:微软雅黑"><?php echo $malls['in_select'];?></b>件初稿&nbsp;</b> <i> 确认倒计时：<?php echo $td['lefttime'];?></i>
                </div>
                <div class="u_jzzl_index_rw_btn">
                    <p>注：如果有看中的首页设计稿件，选择入围后即可看到设计师的在线联系方式，可发站内信或在线沟通进行修改直到确认。不同套餐可选入围设计设计师数量会有所不同的。</p>
                    <span>
                        <input type="submit" value="入围" name="submit">
                    </span>
                </div>
        </div>
        </div>
</form>
<?php } else if($td['status']==3) { ?>
<form method="post" action="trade.php" id="dform" onSubmit="return onimg()">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" value="" name="picid" id="picid">
<input type="hidden" name="confirm_order" value="2"/>
<div class="u_jzzl_index_sj" id="u_jzzl_index_sj">
        <div class="u_jzzl_index_sj_k" id="u_jzzl_index_sj_k">
        <div class="u_jzzl_index_sj_cont">
        <div class="u_jzzl_index_sj_cont1">
        <span>
        <b>首页效果确认：</b>(点击图片可以预览网页效果)    
        <i>注：对入围设计作品有修改意见可直接联系该设计师</i>
        </span>
        </div>
        <!-- 设计师列表开始 -->
        <?php if(is_array($re_upload_1s)) { foreach($re_upload_1s as $i => $r_1) { ?>
        <div class="u_jzzl_index_sj_cont2">
        
        <!-- 设计师名称 -->
        <div class="u_jzzl_index_sj_cont2_sjs">
        <span><b>设计师</b></span>
        <span><?php echo $r_1['designer'];?></span><br/><br/><br/>
        <span class="u_jzzl_index_sj_cont2_gout"><a href="message.php?action=send&touser=<?php echo $r_1['company_id'];?>"><img src="<?php echo DT_SKIN;?>/image/fasongzhanneixin.gif" alt=""></a></span>
        <span><a href="chat.php?touser=<?php echo $r_1['company_id'];?>&mid=16&itemid=<?php echo $td['itemid'];?>"><img src="<?php echo DT_SKIN;?>/image/onlingoutong.gif" alt=""></a></span>
        
        </div>
      
        <div class="u_jzzl_index_sj_cont2_show">
        <ul>
        <?php if(is_array($r_1['t'])) { foreach($r_1['t'] as $m => $r_1) { ?>
        <li>
        <div class="u_jzzl_index_sj_cont2_show_img">
        <a href="<?php echo $CFG['url'];?>extend/view_pic.php?img=<?php echo $r_1['upload'];?>"  target="_blank"><img src="<?php echo $r_1['upload'];?>" id="showthumb<?php echo $m;?>"  alt="" disabled ></a>
        <span><?php echo $r_1['addtime'];?></span>
</div>
        <br />
        <input type="radio" name="post[<?php echo $i;?>]" id="pic_id" value="<?php echo $r_1['id'];?>"/>&nbsp;&nbsp;<b>选为首页</b>
        </li>
        <?php } } ?>
        
        </ul>
        </div>
        
        </div><?php } } ?>
        
        
        
        <!-- 设计师列表结束 -->
        <div class="u_jzzl_index_sj_cont4"><b>首页效果确认(只能选择一个作品)：</b>(点击放大图片)</div>
        <?php if($td['pay']==0) { ?>
        <div class="u_jzzl_index_sj_cont5">
        <p>注：首页效果确认，确认后设计师会在5个工作日内为您设计网站栏目页及内页。确认后首页不再更改，如果确认效果后再更改，根
据能会收取一定的费用。如需更改，请联系客服。</p>
<span> <input type="submit" value="确认作品" name="submit"></span>
        </div>
        <?php } else { ?>
        <div class="u_jzzl_index_sj_cont5">
        <p>注：首页效果确认，请支付二期进度款，付款后，设计师会在5个工作日内为您设计网站栏目页及内页。确认后首页不再更改，如果确认效果后再更改，根
据能会收取一定的费用。如需更改，请联系客服。</p>
<span>首页确认支付二期款项：<i>￥<?php echo $td['price2'];?> </i> <input type="submit" value="确认并付款" name="submit"></span>
        </div>
        
        <?php } ?>
        
        <div class="u_jzzl_index_sj_cont6">
        <div class="u_jzzl_index_sj_cont6_lf">
        <p>
        <b>首页所有设计稿：</b>(点击图片可以预览网页) <i>注：您已选择了选择了入围稿件，其他稿件仅供浏览。</i>
        </p>
        </div>
        <div class="u_jzzl_index_sj_cont6_rt">
        <ul>
          <?php if(is_array($index_alls)) { foreach($index_alls as $i => $m) { ?>
                                <li>
                                    <div class="">
                                    <a target="_blank" href="<?php echo $CFG['url'];?>/extend/view_pic.php?img=<?php echo $m['upload'];?>"><img src="<?php echo $m['upload'];?>" alt=""></a>
                                    <span><?php echo $m['addtime'];?></span>
                                    </div>
                                    <br />
                                </li>
                                <?php } } ?>
        
        
        </ul>
        </div>
        </div>
        </div>
        </div>
        </div>
        
</form>
<?php } else if($td['status']==4) { ?>
      
<div class="u_jzzl_index_sj" id="u_jzzl_index_sj">
        <div class="u_jzzl_index_sj_k" id="u_jzzl_index_sj_k">
        <div class="u_jzzl_index_sj_cont">
        
        <div class="u_jzzl_index_sj_cont6">
        <div class="u_jzzl_index_sj_cont6_lf">
        <p>
        <b>首页最终确认的作品：</b>(点击图片可以预览网页) <i></i>
        </p>
        </div>
        <div class="u_jzzl_index_sj_cont6_rt">
        <ul>
        
                                <li>
                                    <div class="">
                                    <a target="_blank" href="<?php echo $CFG['url'];?>/extend/view_pic.php?img=<?php echo $last['upload'];?>"><img src="<?php echo $last['upload'];?>" alt=""></a>
                                    <span><?php echo $last['addtime'];?></span>
                                    </div>
                                    <br />
                                </li>
                           </ul>
        </div>
        </div>
        </div>
        <div class="u_jzzl_index_sj_cont4"><b>首页效果确认(只能选择一个作品)：</b>(点击放大图片)</div>
        <?php if($td['pay']==0) { ?>
        
        <?php } else { ?>
        <div class="u_jzzl_index_sj_cont5">
        <p>注：首页效果已经确认，请支付二期进度款，付款后，设计师会在5个工作日内为您设计网站栏目页及内页。确认后首页不再更改，如果确认效果后再更改，根
据能会收取一定的费用。如需更改，请联系客服。</p>
<span>支付二期款项：<i>￥<?php echo $td['price2'];?> </i> <input type="button"  onclick="location.href='<?php echo $CFG['url'];?>/member/trade.php'" value="立即付款" name="submit"></span>
        </div>
        <?php } ?>
        
        <div class="u_jzzl_index_sj_cont6">
        <div class="u_jzzl_index_sj_cont6_lf">
        <p>
        <b>首页所有设计稿：</b>(点击图片可以预览网页) <i>注：您已选择了选择了入围稿件，其他稿件仅供浏览。</i>
        </p>
        </div>
        <div class="u_jzzl_index_sj_cont6_rt">
        <ul>
          <?php if(is_array($index_alls)) { foreach($index_alls as $i => $m) { ?>
                                <li>
                                    <div class="">
                                    <a target="_blank" href="<?php echo $CFG['url'];?>/extend/view_pic.php?img=<?php echo $m['upload'];?>"><img src="<?php echo $m['upload'];?>" alt=""></a>
                                    <span><?php echo $m['addtime'];?></span>
                                    </div>
                                    <br />
                                </li>
                                <?php } } ?>
        
        
        </ul>
        </div>
        </div>
        </div>
        
        
        </div>
<?php } else { ?>
      
<div class="u_jzzl_index_sj" id="u_jzzl_index_sj">
        <div class="u_jzzl_index_sj_k" id="u_jzzl_index_sj_k">
        <div class="u_jzzl_index_sj_cont">
        
        <div class="u_jzzl_index_sj_cont6">
        <div class="u_jzzl_index_sj_cont6_lf">
        <p>
        <b>首页最终确认的作品：</b>(点击图片可以预览网页) <i></i>
        </p>
        </div>
        <div class="u_jzzl_index_sj_cont6_rt">
        <ul>
        
                                <li>
                                    <div class="">
                                    <a target="_blank" href="<?php echo $CFG['url'];?>/extend/view_pic.php?img=<?php echo $last['upload'];?>"><img src="<?php echo $last['upload'];?>" alt=""></a>
                                    <span><?php echo $last['addtime'];?></span>
                                    </div>
                                    <br />
                                </li>
                           </ul>
        </div>
        </div>
        </div>
        
        
        <div class="u_jzzl_index_sj_cont6">
        <div class="u_jzzl_index_sj_cont6_lf">
        <p>
        <b>首页所有设计稿：</b>(点击图片可以预览网页) <i>注：您已选择了选择了入围稿件，其他稿件仅供浏览。</i>
        </p>
        </div>
        <div class="u_jzzl_index_sj_cont6_rt">
        <ul>
          <?php if(is_array($index_alls)) { foreach($index_alls as $i => $m) { ?>
                                <li>
                                    <div class="">
                                    <a target="_blank" href="<?php echo $CFG['url'];?>/extend/view_pic.php?img=<?php echo $m['upload'];?>"><img src="<?php echo $m['upload'];?>" alt=""></a>
                                    <span><?php echo $m['addtime'];?></span>
                                    </div>
                                    <br />
                                </li>
                                <?php } } ?>
        
        
        </ul>
        </div>
        </div>
        </div>
        
        
        </div>
        <?php } ?>
</div>
<div class="js_product"></div>
<div class="js_product"></div>
<div class="js_product"></div>
     
    </div>
  </div>
<!-- 建站资料选项卡 结束-->
</div>
<!-- 建站资料结束 -->
<?php include template('footer');?>