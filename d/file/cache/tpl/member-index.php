<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header1',$module);?>
    <div class="u_c_r_b u_fl">
   
    <?php if($_groupid == 4) { ?>
<div class="warn">尊敬的会员，您的帐号<span class="f_red f_b">正在审核中..</span>，本站部分功能和服务可能受到一定的使用限制，<?php if($MOD['checkuser']==2) { ?><a href="send.php?action=check" class="l">请点这里验证您的邮箱</a>，系统将自动审核<?php } else { ?>请稍候，等待网站审核<br/>完善的商业信息有助于获得别人的信任，结交潜在的商业伙伴，获取商业机会，增加系统审核通过的概率&nbsp;&nbsp;<a href="edit.php?tab=2" class="t f_b">现在就去完善</a><?php } ?>
</div>
<?php } ?>
        <!-- 第一排盒子 -->
        <div class="u_rone">
            <div class="u_rone_lf u_fl">
                <!-- 用户信息内容 -->
                <div class="u_rone_info">
                    <div class="u_rone_info_lf u_fl">
                      <span><img src="<?php echo useravatar($_username, 'large');?>" alt=""></span>
                      <p><a href="edit.php">修改资料</a> | <a href="avatar.php">上传头像</a></p>
                    </div>
                    <div class="u_rone_info_rt u_fl">
                      <div class="u_rone_info_rt1 u_mb10"><span>您好！<?php echo $_truename;?> <?php echo $MG['groupname'];?>！</span></div>
                      <div class="u_rone_info_rt2"><span>账户余额：<b><?php echo $_money;?>元</b> <i>(<?php echo $locking;?><?php echo $DT['money_unit'];?>锁定)</i> <a href="charge.php?action=pay"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/btn_charge.gif" width="40" height="18" alt="" align="absmiddle"/></a> | <a href="cash.php">提现</a></span></div>
                      <div class="u_rone_info_rt3 u_mt10"><span>
                         <?php if($MOD['vmember']) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($validated) { ?>v<?php } else { ?>u<?php } ?>
_member.gif"  title="<?php if($validated) { ?>已通过<?php echo $validator;?>认证<?php } else { ?>未通过认证<?php } ?>
" align="absmiddle"/> 认证：
<?php if($MOD['vemail']) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($vemail) { ?>v<?php } else { ?>u<?php } ?>
_email.gif"  title="<?php if($vemail) { ?>已通过<?php } else { ?>未通过<?php } ?>
邮件认证" align="absmiddle"/> <a href="validate.php?action=email" class="l">邮件</a> 
<?php } ?>
<?php if($MOD['vmobile']) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($vmobile) { ?>v<?php } else { ?>u<?php } ?>
_mobile.gif"  title="<?php if($vmobile) { ?>已通过<?php } else { ?>未通过<?php } ?>
手机认证" align="absmiddle"/> <a href="validate.php?action=mobile" class="l">手机</a> 
<?php } ?>
<?php if($MOD['vbank']) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($vbank) { ?>v<?php } else { ?>u<?php } ?>
_bank.gif"  title="<?php if($vbank) { ?>已通过<?php } else { ?>未通过<?php } ?>
银行帐号认证" align="absmiddle"/> <a href="validate.php?action=bank" class="l">银行</a>
<?php } ?>
<?php if($MOD['vtruename']) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($vtruename) { ?>v<?php } else { ?>u<?php } ?>
_truename.gif"  title="<?php if($vtruename) { ?>已通过<?php } else { ?>未通过<?php } ?>
真实姓名认证" align="absmiddle"/> <a href="validate.php?action=truename" class="l">实名</a>
<?php } ?>
<?php if($MOD['vcompany'] && $groupid > 5) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($vcompany) { ?>v<?php } else { ?>u<?php } ?>
_company.gif" title="<?php if($vcompany) { ?>已通过<?php } else { ?>未通过<?php } ?>
公司资料认证" align="absmiddle"/> <a href="validate.php?action=company" class="l">公司</a>
<?php } ?>
<?php } ?>
                          </span>
                      </div>
                      <div class="u_rone_info_rt4 u_mt10"><span>
                          <img src="<?php echo DT_SKIN;?>/image/neiye/u_xiangmu.gif" alt="">项目: 0 <a href="">未付款项目</a> | <a href="">已付款项目</a> | <a href="">项目进度查询</a>
                          </span>
                      </div>
                      <div class="u_rone_info_rt5"><span>
                          <img src="<?php echo DT_SKIN;?>/image/neiye/u_xinjian.gif" alt="">信件: <?php echo $_message;?> 封 <a href="message.php">未读站内信</a> <a href="message.php?typeid=1" class="l">询价</a>|<a href="message.php?typeid=2" class="l">报价</a>|<a href="message.php?typeid=3" class="l">留言</a>|<a href="message.php?typeid=4" class="l">信使</a>|<a href="message.php?action=send" class="l">发信</a>
                          </span>
                      </div>
                      <div class="u_rone_info_rt6"><span>
                          <img src="<?php echo DT_SKIN;?>/image/neiye/u_jifen.gif" alt="">积分: <?php echo $_credit;?> <a href="credit.php" class="l"><?php echo $DT['credit_name'];?>记录</a> | <a href="credit.php?action=buy" class="l">购买<?php echo $DT['credit_name'];?></a> | <a href="credit.php?action=invite" class="l">推广赚<?php echo $DT['credit_name'];?></a> <?php if($MOD['credit_exchange']) { ?>| <a href="credit.php?action=exchange" class="l"><?php echo $DT['credit_name'];?>兑换</a><?php } ?>
   <?php if($EXT['gift_enable']) { ?>| <a href="<?php echo $EXT['gift_url'];?>" class="l" target="_blank">积分换礼</a><?php } ?>
                          </span>
                      </div>
                      <div class="u_rone_info_rt7"><span>
                          <img src="<?php echo DT_SKIN;?>/image/neiye/u_duanxin.gif" alt="">短信: <?php echo $_sms;?>条可用 <a href="sms.php?action=add" class="l">发送</a> | 
<a href="sms.php?action=buy" class="l">购买</a> | 
<a href="sms.php?action=record" class="l">接收记录</a> | 
<a href="sms.php?action=send" class="l">发送记录</a> | 
<a href="sms.php" class="l">短信记录</a>
                          </span>
                      </div>
                    </div>
                </div>
                <!-- 客户须知内容 -->
                <script>
                   $(document).ready(function(){
                    $(".u_rone_xz_cont ul li:eq(0)").addClass("u_rone_xz_bg");
                    $(".u_rone_xz_cont ul li:eq(2)").addClass("u_rone_xz_bg");
                    $(".u_rone_xz_cont ul li:eq(4)").addClass("u_rone_xz_bg");
                   })
                </script>
                <div class="u_rone_xz">
                    <div class="u_rone_xz_k">
                      <div class="u_rone_xz_t"><span><b>客户须知 &nbsp;></b><a href="my_news.php">更多</a></span></div>
                      <div class="u_rone_xz_cont">
                        <ul>
                  <?php if(is_array($news)) { foreach($news as $i => $r) { ?>
                <?php $r['addtime']=date('Y-m-d',$r['addtime'])?>
                 <li><i style="float:right"><?php echo $r['addtime'];?></i><p><img src="<?php echo DT_SKIN;?>/image/u_new_list.gif" alt=""><a href="my_news.php?action=view&itemid=<?php echo $r['itemid'];?>"><?php echo dsubstr($r['title'],24,'');?></a> ··································</p></li>
                <?php } } ?>             
                        </ul>
                      </div>
                    </div>
                </div>
              
            </div>
            <div class="u_rone_rt u_fl">
                <!-- 我的资料 -->
                <div class="u_rone_zl">
                    <div class="u_rone_zl_t">我的资料</div>
                    <div class="u_rone_zl_cont">
                      <div class="u_rone_zl_cont_1">
                        <div class="u_rone_zl_cont_lf u_fl">会员名</div><div class="u_rone_zl_cont_r u_fl"><?php echo $username;?></div>
                      </div>
                     
                      <div class="u_rone_zl_cont_1">
                        <div class="u_rone_zl_cont_lf u_fl">会员ID</div><div class="u_rone_zl_cont_r u_fl"><?php echo $userid;?></div>
                      </div>
                      <div class="u_rone_zl_cont_1">
                        <div class="u_rone_zl_cont_lf u_fl">登录时间</div><div class="u_rone_zl_cont_r u_fl"><?php echo $logintime;?><?php if($DT['login_log']==2) { ?>&nbsp;&nbsp;<a href="record.php?action=login" class="l">登录记录</a><?php } ?>
</div>
                      </div>
                      <div class="u_rone_zl_cont_1">
                        <div class="u_rone_zl_cont_lf u_fl">注册时间</div><div class="u_rone_zl_cont_r u_fl"><?php echo $regtime;?></div>
                      </div>
                       <div class="u_rone_zl_cont_1">
                        <div class="u_rone_zl_cont_lf u_fl">专属客服</div><div class="u_rone_zl_cont_r u_fl"><?php echo $_kfname;?></div>
                      </div>
                      <div class="u_rone_zl_cont_1">
                        <div class="u_rone_zl_cont_lf u_fl">联系方式</div><div class="u_rone_zl_cont_r u_fl">&nbsp;<a href="chat.php?touser=<?php echo $_kf;?>&amp;mid=16&amp;itemid=99" target="_blank"><img src="<?php echo $CFG['url'];?>/file/image/web.gif"></a><a href="message.php?action=send&amp;touser=<?php echo $_kf;?>" target="_blank" ><img src="<?php echo $CFG['url'];?>/member/image/ico_message.gif" title="发送站内信" align="absmiddle"></a>
</td></div>
                      </div>
                    </div>
                </div>
                <!-- 项目状态 -->
                <div class="u_rone_xm">
                    <div class="u_rone_xm_t">项目状态</div>
                    <div class="u_rone_xm_cont">
                      <div class="u_rone_xm_contl u_fl">
                        <b><?php echo $count2['count'];?></b><br/>
                        <span>待付款</span>
                      </div>
                      <div class="u_rone_xm_xx u_fl">|</div>
                      <div class="u_rone_xm_contl u_fl">
                        <b><?php echo $count1['count'];?></b><br/>
                        <span>待确认</span>
                      </div>
                      <div class="u_rone_xm_xx u_fl">|</div>
                      <div class="u_rone_xm_contl u_fl">
                        <b><?php echo $count3['count'];?></b><br/>
                        <span>待上线</span>
                      </div>
                    </div>
                </div>
                <!-- 商务标签 -->
                <div class="u_rone_bq">
                  <div class="u_rone_bq_t">商务标签</div>
                  <div class="u_rone_bq_cont">
                    <div class="u_rone_bq_cont_t">
                     <form method="post" action="index.php"  onsubmit="return check();">
                          
                             <textarea name="note" id="note"><?php echo $note;?></textarea>
                              <div class="u_bai_btn_div"></div>
                          <input type="submit" value="更新" name="submit" class="u_bai_btn"><span>[可记录一些文字备忘,限制1000字]</span>
                       </form>
                
                
            
                    </div>
                    <div class="u_rone_bq_cont_bon"></div>
                  </div>
                </div>
            </div>
        </div>
         <!-- 第二排盒子 -->
      <div class="u_rtwo">
          <div class="u_rtwo_t"><b>定制套餐项目 &nbsp;></b>
            <span>
                <form action="?" name="" id="" method="post">
              <input type="text" class="u_spmc_ddh" name="item" palceholder="订单编号 订单日期 " onFocus="if (this.value==this.defaultValue) this.value='';" 
onblur="if (this.value=='') this.value=this.defaultValue;">
              <input type="submit" id="wdxmmc" class="u_btn" value="查询">
              </form>
              </span>
          </div>
          <div class="u_rtwo_2_big">
            <div class="u_rtwo_2">
              <div class="u_rtwo_2_1 u_fl u_pt10"><span>项目信息</span></div>
              <div class="u_rtwo_2_2 u_fl u_pt10"><span>项目价格</span></div>
              <div class="u_rtwo_2_3 u_fl u_pt10"><span>付款方式</span></div>
              <div class="u_rtwo_2_4 u_fl u_pt10"><span>实付款</span></div>
              <div class="u_rtwo_2_5 u_fl u_pt10"><span>项目状态</span></div>
              <div class="u_rtwo_2_6 u_fl u_pt10"><span>交易操作</span></div>
            </div>
            <?php if($list) { ?>
   <?php if(is_array($list)) { foreach($list as $i => $rm) { ?>
         <div class="u_rtwo_3 u_clear_d">
            <div class="u_rtwo_2_1 u_fl u_pt10">
              <div class="u_rtwo_2_1_1"><b>订单编号:</b> <?php echo $rm['itemid'];?></div>
              <div class="u_rtwo_2_1_1"><b>订单时间:</b> <?php echo $rm['addtime'];?></div>
              <div class="u_rtwo_2_1_1"><p><b><?php echo $rm['areaid'];?><?php echo $rm['buyer_name'];?><br/></b> <a href="<?php echo $CFG['url'];?>/mall/order.php?itemid=<?php echo $rm['mallid'];?>">(<?php echo $rm['title'];?>)</a></p></div>
            </div>
            <div class="u_rtwo_2_2 u_fl u_pt10"><span><?php echo $rm['amount'];?>元<br/><i><?php echo $rm['fapiao_yz'];?></i></span></div>
            <div class="u_rtwo_2_3 u_fl u_pt10"><span><?php echo $rm['pay'];?></span></div>
            <div class="u_rtwo_2_4 u_fl u_pt10"><span><p><?php echo $rm['ready_money'];?>元</p></span></div>
            <div class="u_rtwo_2_5 u_fl u_pt10"><span><?php echo $rm['status_zt'];?><br/> <a href="trade.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=upload_5&forward=<?php echo $MODULE['2']['linkurl'];?>">订单详情</a></span></div>
            <div class="u_rtwo_2_6 u_fl u_pt10"><span>
            <?php if($rm['pay_style']==0 && $rm['status']==0) { ?>
    <input type="submit" value="立即付款" class="u_btn" onclick="Go('trade.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=pay&forward=<?php echo $MODULE['2']['linkurl'];?>');">
    <?php } else if($rm['pay_style']==1 && $rm['status']==0) { ?>
     <input type="submit" value="首付款操作" class="u_btn" onclick="Go('trade.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=pay_1&forward=<?php echo $MODULE['2']['linkurl'];?>');"/>
     <?php } else if($rm['status']==1 && $rm['vcheck']==0) { ?>
     
     
     <input type="submit" value="提交需求" class="u_btn" onclick="Go('trade.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=upload_5&forward=<?php echo $MODULE['2']['linkurl'];?>');"/>
  
     
        <?php } else if($rm['status']==1 && $rm['vcheck']==1) { ?>
     <input type="submit" value="等待审核需求" class="gaoliangG"/>
    <?php } else if($rm['status']==1 && $rm['vcheck']==2) { ?>
     <input type="submit" value="等待首页" class="gaoliangG"/>
       <?php } else if($rm['status']==2 ) { ?>
    
     <input type="submit" value="入围作品" class="u_btn" onclick="Go('trade.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=index&forward=<?php echo $MODULE['2']['linkurl'];?>');"/>
     
      <?php } else if($rm['status']==3 ) { ?>
   
     <input type="submit" value="确定首页" class="u_btn" onclick="Go('trade.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=index&forward=<?php echo $MODULE['2']['linkurl'];?>');"/>
       <?php } else if($rm['status']==4 ) { ?>
     <input type="submit" value="二次付款" class="u_btn" onclick="Go('trade.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=pay_2&forward=<?php echo $MODULE['2']['linkurl'];?>');"/>
      <?php } else if($rm['status']==5 ) { ?>
     <input type="submit" value="选择作品" class="u_btn" onclick="Go('trade.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=lm&forward=<?php echo $MODULE['2']['linkurl'];?>');"/>
    <?php } else if($rm['status']==6 ) { ?>
     <input type="submit" value="程序开发" class="u_btn" onclick="Go('trade.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=design&forward=<?php echo $forward;?>');"/>
     <?php } else if($rm['status']==7 ) { ?>
     <input type="submit" value="确认完成" class="u_btn" onclick="if(confirm('确认项目已制作完成么？\n\n请注意:确认后您的钱将直接支付给卖家')) Go('trade.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=receive_goods&forward=<?php echo $forward;?>');"/>
    <?php } else if($rm['status']==8 ) { ?>
    <?php if($rm['seller_star']) { ?>
<input type="submit" value="评价详情" class="u_btn" onclick="Go('trade.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=comment_detail&forward=<?php echo $forward;?>');"/>
<?php } else { ?>
<input type="submit" value="评 价" class="u_btn" onclick="Go('trade.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=comment&forward=<?php echo $forward;?>');"/>
<?php } ?>
     <?php } else { ?>
     <input type="button" value="等待中" class="gaoliangG" />
     <?php } ?>
              
              </span>
            </div>
          </div>
          <div class="u_wdxm_lb"></div>
        
<?php } } ?>
<?php } else { ?>
   <div class="u_rtwo_2_big">
            <div class="u_rtwo_2">
              <div class="u_rtwo_2_1 u_fl u_pt10"  style='width:804px;height:30px;line-height:30px;font-size:20px;border-right: 1px solid #ccc;'><span>您没有订单信息</span></div>
              
            </div>
            </div>
<?php } ?>
 
        </div>
        </div>
         <!-- 第三排盒子 -->
          <div class="u_rtwo">
          <div class="u_rtwo_t"><b>平面套餐项目 &nbsp;></b>
            <span>
                <form action="?" name="" id="" method="post">
              <input type="text" class="u_spmc_ddh" name="logo" palceholder="订单编号 订单日期 " onFocus="if (this.value==this.defaultValue) this.value='';" 
onblur="if (this.value=='') this.value=this.defaultValue;">
              <input type="submit" id="wdxmmc" class="u_btn" value="查询">
              </form>
              </span>
          </div>
          <div class="u_rtwo_2_big">
            <div class="u_rtwo_2">
              <div class="u_rtwo_2_1 u_fl u_pt10"><span>项目信息</span></div>
              <div class="u_rtwo_2_2 u_fl u_pt10"><span>项目价格</span></div>
              <div class="u_rtwo_2_3 u_fl u_pt10"><span>付款方式</span></div>
              <div class="u_rtwo_2_4 u_fl u_pt10"><span>实付款</span></div>
              <div class="u_rtwo_2_5 u_fl u_pt10"><span>项目状态</span></div>
              <div class="u_rtwo_2_6 u_fl u_pt10"><span>交易操作</span></div>
            </div>
            <?php if($lists) { ?>
   <?php if(is_array($lists)) { foreach($lists as $i => $rm) { ?>
         <div class="u_rtwo_3 u_clear_d">
            <div class="u_rtwo_2_1 u_fl u_pt10">
              <div class="u_rtwo_2_1_1"><b>订单编号:</b> <?php echo $rm['itemid'];?></div>
              <div class="u_rtwo_2_1_1"><b>订单时间:</b> <?php echo $rm['addtime'];?></div>
              <div class="u_rtwo_2_1_1"><p><b><?php echo $rm['areaid'];?><?php echo $rm['buyer_name'];?><br/></b> <a href="<?php echo $CFG['url'];?>/pingmian/order.php?itemid=<?php echo $rm['mallid'];?>">(<?php echo $rm['title'];?>)</a></p></div>
            </div>
            <div class="u_rtwo_2_2 u_fl u_pt10"><span><?php echo $rm['amount'];?>元<br/><i><?php echo $rm['fapiao_yz'];?></i></span></div>
            <div class="u_rtwo_2_3 u_fl u_pt10"><span><?php echo $rm['pay'];?></span></div>
            <div class="u_rtwo_2_4 u_fl u_pt10"><span><p><?php echo $rm['ready_money'];?>元</p></span></div>
            <div class="u_rtwo_2_5 u_fl u_pt10"><span><?php echo $rm['status_zt'];?><br/> <a href="trades.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=logo&forward=<?php echo $MODULE['2']['linkurl'];?>">订单详情</a></span></div>
            <div class="u_rtwo_2_6 u_fl u_pt10"><span>
            <?php if($rm['pay_style']==0 && $rm['status']==0) { ?>
    <input type="submit" value="立即付款" class="u_btn" onclick="Go('trades.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=pay&forward=<?php echo $MODULE['2']['linkurl'];?>');">
    <?php } else if($rm['pay_style']==1 && $rm['status']==0) { ?>
     <input type="submit" value="首付款操作" class="u_btn" onclick="Go('trades.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=pay_1&forward=<?php echo $MODULE['2']['linkurl'];?>');"/>
     <?php } else if($rm['status']==1 && $rm['vcheck']==0) { ?>
     <input type="submit" value="提交需求" class="u_btn" onclick="Go('trades.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=logo&forward=<?php echo $MODULE['2']['linkurl'];?>');"/>
        <?php } else if($rm['status']==1 && $rm['vcheck']==1) { ?>
     <input type="submit" value="等待审核需求" class="gaoliangG"/>
    <?php } else if($rm['status']==1 && $rm['vcheck']==2) { ?>
     <input type="submit" value="等待首页" class="gaoliangG"/>
       <?php } else if($rm['status']==2 ) { ?>
    
     <input type="submit" value="入围作品" class="u_btn" onclick="Go('trades.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=logo_index&forward=<?php echo $MODULE['2']['linkurl'];?>');"/>
     
      <?php } else if($rm['status']==3 ) { ?>
   
     <input type="submit" value="确定首页" class="u_btn" onclick="Go('trades.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=logo_index&forward=<?php echo $MODULE['2']['linkurl'];?>');"/>
       <?php } else if($rm['status']==4 ) { ?>
     <input type="submit" value="二次付款" class="u_btn" onclick="Go('trades.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=pay_2&forward=<?php echo $MODULE['2']['linkurl'];?>');"/>
      <?php } else if($rm['status']==5 ) { ?>
     <input type="submit" value="选择作品" class="u_btn" onclick="Go('trades.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=lm&forward=<?php echo $MODULE['2']['linkurl'];?>');"/>
    <?php } else if($rm['status']==6 ) { ?>
     <input type="submit" value="程序开发" class="u_btn" onclick="Go('trades.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=design&forward=<?php echo $forward;?>');"/>
     <?php } else if($rm['status']==7 ) { ?>
     <input type="submit" value="确认完成" class="u_btn" onclick="if(confirm('确认项目已制作完成么？\n\n请注意:确认后您的钱将直接支付给卖家')) Go('trade.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=receive_goods&forward=<?php echo $forward;?>');"/>
    <?php } else if($rm['status']==8 ) { ?>
    <?php if($rm['seller_star']) { ?>
<input type="submit" value="评价详情" class="u_btn" onclick="Go('trades.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=comment_detail&forward=<?php echo $forward;?>');"/>
<?php } else { ?>
<input type="submit" value="评 价" class="u_btn" onclick="Go('trades.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=comment&forward=<?php echo $forward;?>');"/>
<?php } ?>
     <?php } else { ?>
     <input type="button" value="等待中" class="gaoliangG" />
     <?php } ?>
              
              </span>
            </div>
          </div>
          <div class="u_wdxm_lb"></div>
        
<?php } } ?>
<?php } else { ?>
   <div class="u_rtwo_2_big">
            <div class="u_rtwo_2">
              <div class="u_rtwo_2_1 u_fl u_pt10"  style='width:804px;height:30px;line-height:30px;font-size:20px;border-right: 1px solid #ccc;'><span>您没有订单信息</span></div>
              
            </div>
            </div>
<?php } ?>
 
        </div>
        </div>
          <!-- 第四排盒子 -->
        <div class="u_rtwo">
          <div class="u_rtwo_t"><b>模版套餐项目 &nbsp;></b>
            <span>
                <form action="?" name="" id="" method="post">
              <input type="text" class="u_spmc_ddh" name="item" palceholder="订单编号  订单日期" onFocus="if (this.value==this.defaultValue) this.value='';" 
onblur="if (this.value=='') this.value=this.defaultValue;">
              <input type="submit" id="wdxmmc" class="u_btn" value="查询">
              </form>
              </span>
          </div>
          <div class="u_rtwo_2_big">
            <div class="u_rtwo_2">
              <div class="u_rtwo_2_1 u_fl u_pt10"><span>项目信息</span></div>
              <div class="u_rtwo_2_2 u_fl u_pt10"><span>项目价格</span></div>
              <div class="u_rtwo_2_3 u_fl u_pt10"><span>语言版本</span></div>
              <div class="u_rtwo_2_4 u_fl u_pt10"><span>其他信息</span></div>
              <div class="u_rtwo_2_5 u_fl u_pt10"><span>项目状态</span></div>
              <div class="u_rtwo_2_6 u_fl u_pt10"><span>交易操作</span></div>
            </div>
   <?php if(is_array($list_mb)) { foreach($list_mb as $i => $rm) { ?>
      <div class="u_rtwo_3 u_clear_d">
            <div class="u_rtwo_2_1 u_fl u_pt10">
              <div class="u_rtwo_2_1_1"><b>订单编号:</b> <?php echo $rm['itemid'];?></div>
              <div class="u_rtwo_2_1_1"><b>订单时间:</b> <?php echo $rm['addtime'];?></div>
              <div class="u_rtwo_2_1_1"><p><b><?php echo $rm['areaid'];?><?php echo $rm['name'];?><br/></b> <a href="<?php echo $CFG['url'];?>/mall/order.php?itemid=<?php echo $rm['mallid'];?>">(<?php echo $rm['title'];?>)</a></p></div>
            </div>
            <div class="u_rtwo_2_2 u_fl u_pt10"><span><?php echo $rm['amount'];?>元<br/></span></div>
            <div class="u_rtwo_2_3 u_fl u_pt10"><span><p><?php echo $rm['language'];?></p> </span></div>
            <div class="u_rtwo_2_4 u_fl u_pt10"><span><p><?php echo $rm['tc'];?> <?php echo $rm['jf'];?> <?php echo $rm['mob'];?></p></span></div>
            <div class="u_rtwo_2_5 u_fl u_pt10"><span><?php echo $rm['status_zt'];?><br/><a href="group.php?itemid=<?php echo $v['itemid'];?>&action=update&step=detail">订单详情</a></span></div>
            <div class="u_rtwo_2_6 u_fl u_pt10"><span>
            <?php if($rm['status'] == 1) { ?>
<input type="button" value="确认完成" class="u_btn" onclick="if(confirm('您确定已经订单完成，收到模版网站的帐号信息了么？此操作将不可撤销'))Go('group.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=receive&page=<?php echo $page;?>');"/>
<?php } else if($rm['status'] == 2) { ?>
<input type="button" value="确认完成" class="u_btn" onclick="if(confirm('您确定已经订单完成，收到模版网站的帐号信息了么？此操作将不可撤销'))Go('group.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=receive&page=<?php echo $page;?>');"/>
<?php } else if($rm['status'] == 3) { ?>
<input type="button" value="交易成功" class="gaoliangG" />
<?php } ?>

        
          </span>
            </div>
          </div>
          <div class="u_wdxm_lb"></div>
<?php } } ?>
    
        </div>
        </div>
         <!-- 第四排盒子 -->
         <!-- 猜你喜欢 -->
       
    </div>
<div class="clear"></div>
<?php include template('footer',$module);?>