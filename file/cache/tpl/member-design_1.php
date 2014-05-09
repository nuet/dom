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
     <li><a href="design.php?itemid=<?php echo $itemid;?>&action=update&step=logo&forward=<?php echo $_GET['forward'];?>">建站资料</a></li>
        <li class="on"><a href="design.php?itemid=<?php echo $itemid;?>&action=update&step=index&forward=<?php echo $_GET['forward'];?>">首页设计</a></li>
        <li><a href="design.php?itemid=<?php echo $itemid;?>&action=update&step=design&forward=<?php echo $_GET['forward'];?>">PSD上传</a></li>
      </ul>
    </div>
    <div class="product-wrap">
     <!--建站资料-->
     <div class="js_product" >
     </div>
<div class="js_product show">
<form method="post" action="design.php" id="dform">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" value="" name="picid" id="picid">
<input type="hidden" name="confirm_order" value="1"/>
<div class="u_jzzl_index_sj" id="u_jzzl_index_sj">
        <div class="u_jzzl_index_sj_k" id="u_jzzl_index_sj_k">
        <div class="u_shejisTiJ_ZuoPin_show">
                    <div class="u_jzzl_index_sj_cont6_lf">
                            <p>
                                <b>已经提交的首页设计稿：</b><br /><br /><br /><i> 注：未审核前仅能预览小图，不可以点击浏览。</i>
                            </p>
                    </div>
                    <div class="u_jzzl_index_sj_cont6_rt">
                            <ul>
                            <?php if(is_array($index_alls)) { foreach($index_alls as $i => $k) { ?>
                             <?php if($k['checked']==1) { ?>
                             
                                 <li> <div class="">
                                    <a href="<?php echo $CFG['url'];?>extend/view_pic.php?img=<?php echo $k['upload'];?>" target="_blank"><img src="<?php echo $k['upload'];?>" alt=""></a>
                                    <span><?php echo $k['designer'];?></span>
                                    </div>
                                   </li>   
                             
                             <?php } else { ?>
                             
                                 <li> <div class="">
                                    <a href="#"><img src="<?php echo $k['upload'];?>"  alt=""></a>
                                    <span><?php echo $k['designer'];?></span>
                                    </div>
                                   </li>   
                             
                             <?php } ?>
                                    
                              
                            <?php } } ?>
                             
                                
                            </ul>
                    </div>
                </div>
                <div class="u_shejisTiJ_ZuoPin_show_1">
                    <div class="u_jzzl_index_sj_cont6_lf">
                            <p>
                                <b>首页稿件提交：(点击图片下链接可以模拟网页浏览)</b><br /><br /><br /><i> 注：未审核前作品可以点击图片修改</i>
                            </p>
                    </div>
                    <div class="u_jzzl_index_sj_cont6_rt">
                            <ul>
                            <?php if(is_array($my_indexs)) { foreach($my_indexs as $i => $v) { ?>
                            
                                  <?php if($v['checked']==1) { ?>
                                <li>
                                    <div class="">
                                   <img src="<?php echo $v['upload'];?>" alt="" id="showthumb<?php echo $v['id'];?>"/>
                                    <span><?php echo $v['addtime'];?></span>
                                    </div>
                                   <p><a href="<?php echo $CFG['url'];?>extend/view_pic.php?img=<?php echo $v['upload'];?>" target="_blank" >模拟网页浏览>></a></p>
                                </li>
                                
                                <?php } else { ?>
                                   <li>
                                    <div class="">
                           
                                    <input type="hidden" name="pot[thumb<?php echo $v['id'];?>]" id="thumb<?php echo $v['id'];?>" value="1"/>
                                   <img src="<?php echo $v['upload'];?>" alt="" id="showthumb<?php echo $v['id'];?>" onclick="Dalbum('<?php echo $v['id'];?>',<?php echo $moduleid;?>,<?php echo $MOD1['thumb_width'];?>,<?php echo $MOD1['thumb_height'];?>, Dd('showthumb<?php echo $v['id'];?>').value, true);"/>
                                    <span><?php echo $v['addtime'];?></span>
                                    </div>
                                   <p><a href="<?php echo $CFG['url'];?>extend/view_pic.php?img=<?php echo $v['upload'];?>" target="_blank" >模拟网页浏览>></a></p>
                                </li>
                                
                                <?php } ?>
                             <?php } } ?>
                            </ul>
                    </div>
                </div>
                <div class="u_shejisTiJ_ZuoPin_time">
                <div class="u_shejisTiJ_ZuoPin_time_t"><b>提交首页或修稿稿件：<i>首页提交倒计时：<?php echo $td['lefttime'];?></i></b></div>
                <div class="u_shejisTiJ_ZuoPin_time_cont">
                <?php if($td['status']==3 && $td['y']==1) { ?>
                
                <div class="u_shejisTiJ_ZuoPin_time_lf">
                <b>新上传<input type="hidden" name="post[upload]" id="thumb" value="<?php echo $thumb;?>"/></b><span><img src="<?php if($thumb) { ?><?php echo $thumb;?><?php } else { ?><?php echo DT_SKIN;?>image/waitpic.gif<?php } ?>
" width="100" height="100" id="showthumb" title="预览图片" alt="" onclick="if(this.src.indexOf('waitpic.gif') == -1){_preview(Dd('showthumb').src, 1);}else{Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD1['thumb_width'];?>,<?php echo $MOD1['thumb_height'];?>, Dd('thumb').value, true);}"/>
                     <div style='height: 10px;line-height: 20px;padding-left: 16px;'><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/img_upload.gif" width="12" height="12" title="上传" onclick="Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD1['thumb_width'];?>,<?php echo $MOD1['thumb_height'];?>, Dd('thumb').value, true);"/>&nbsp;&nbsp;<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/img_select.gif" width="12" height="12" title="选择" onclick="selAlbum('');"/>&nbsp;&nbsp;<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/img_delete.gif" width="12" height="12" title="删除" onclick="delAlbum('','wait');"/></div>
                          </span>
                </div>
                <div class="u_shejisTiJ_ZuoPin_time_min">
                <p> <input type="checkbox" value="1" name="sendsms" >短信通知客户 (我的可用短信 <i> <?php echo $_sms;?> </i>条)</p>
                <p> 支持文件格式：jpg</p>
                </div>
                <div class="u_shejisTiJ_ZuoPin_time_btn">
                <input type="submit" value="提交" name="submit">
                </div>
                
                <?php } else if($td['status']==2 ) { ?>
                <p> 
                <div class="u_shejisTiJ_ZuoPin_time_lf">
                <b>新上传<input type="hidden" name="post[upload]" id="thumb" value="<?php echo $thumb;?>"/></b><span><img src="<?php if($thumb) { ?><?php echo $thumb;?><?php } else { ?><?php echo DT_SKIN;?>image/waitpic.gif<?php } ?>
" width="100" height="100" id="showthumb" title="预览图片" alt="" onclick="if(this.src.indexOf('waitpic.gif') == -1){_preview(Dd('showthumb').src, 1);}else{Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD1['thumb_width'];?>,<?php echo $MOD1['thumb_height'];?>, Dd('thumb').value, true);}"/>
                     <div style='height: 10px;line-height: 20px;padding-left: 16px;'><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/img_upload.gif" width="12" height="12" title="上传" onclick="Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD1['thumb_width'];?>,<?php echo $MOD1['thumb_height'];?>, Dd('thumb').value, true);"/>&nbsp;&nbsp;<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/img_select.gif" width="12" height="12" title="选择" onclick="selAlbum('');"/>&nbsp;&nbsp;<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/img_delete.gif" width="12" height="12" title="删除" onclick="delAlbum('','wait');"/></div>
                          </span>
                </div>
                <div class="u_shejisTiJ_ZuoPin_time_min">
                
                <p> 支持文件格式：jpg</p>
                </div>
                <div class="u_shejisTiJ_ZuoPin_time_btn">
                <input type="submit" value="提交" name="submit">
                </div>
               <?php } else { ?>
               
                <?php } ?>

                </div>
                </div>
               
              
        </div>
        </div>
</form>
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