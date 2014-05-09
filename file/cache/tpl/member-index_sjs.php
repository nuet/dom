<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header1',$module);?>
    <div class="u_c_r_b u_fl">
      <?php if($_groupid == 4) { ?>
<div class="warn">尊敬的会员，您的帐号<span class="f_red f_b">正在审核中..</span>，本站部分功能和服务可能受到一定的使用限制，<?php if($MOD['checkuser']==2) { ?><a href="send.php?action=check" class="l">请点这里验证您的邮箱</a>，系统将自动审核<?php } else { ?>请稍候，等待网站审核<br/>完善的商业信息有助于获得别人的信任，结交潜在的商业伙伴，获取商业机会，增加系统审核通过的概率&nbsp;&nbsp;<a href="edit.php?tab=2" class="t f_b">现在就去完善</a><?php } ?>
</div>
<?php } ?>
    <?php if($_groupid > 5 && !$_edittime) { ?>
        <!-- 第一排盒子 --><div class="warn">尊敬的<i style="color:#FD6100"><?php echo $_truename;?></i>设计师，您好！尚未完善详细资料！完善的详细资料有助于获得别人的信任，结交潜在的商业机会&nbsp;&nbsp;<a href="edit.php?tab=2" class="t f_b">现在就去完善</a></div>
       <?php } ?>
      <?php if(!$vcompany) { ?>
        <!-- 第一排盒子 --><div class="warn">尊敬的<i style="color:#FD6100"><?php echo $_truename;?></i>设计师，您好！进行设计师认证，有利于提高认知度&nbsp;&nbsp;<a href="validate.php?action=company" class="t f_b">现在就去认证</a></div>
       <?php } ?>
        <div class="u_rone">
            <div class="u_rone_lf u_fl">
                <!-- 用户信息内容 -->
                <div class="u_rone_info">
                    <div class="u_rone_info_lf u_fl">
                      <span><img src="<?php echo useravatar($_username, 'large');?>" alt=""></span>
                      <p><a href="edit.php">修改资料</a> | <a href="avatar.php">上传头像</a></p>
                    </div>
                    <div class="u_rone_info_rt u_fl">
                      <div class="u_rone_info_rt1 u_mb10"><span>您好！<?php echo $_truename;?>  <?php echo $MG['groupname'];?>！</span></div>
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
设计师资料认证" align="absmiddle"/> <a href="validate.php?action=company" class="l">设计师</a>
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
                <!-- 设计师须知内容 -->
                <script>
                   $(document).ready(function(){
                    $(".u_rone_xz_cont ul li:eq(0)").addClass("u_rone_xz_bg");
                    $(".u_rone_xz_cont ul li:eq(2)").addClass("u_rone_xz_bg");
                    $(".u_rone_xz_cont ul li:eq(4)").addClass("u_rone_xz_bg");
                   })
                </script>
                <div class="u_rone_xz">
                    <div class="u_rone_xz_k">
                      <div class="u_rone_xz_t"><span><b>设计师须知 &nbsp;></b><a href="my_news.php">更多</a></span></div>
                      <div class="u_rone_xz_cont">
                        <ul>
                  <?php if(is_array($news)) { foreach($news as $i => $r) { ?>
                <?php $r['addtime']=date('Y-m-d',$r['addtime'])?>
                <li><i style="float:right"><?php echo $r['addtime'];?></i><p><img src="<?php echo DT_SKIN;?>/image/u_new_list.gif" alt=""><a href="my_news.php?action=view&itemid=<?php echo $r['itemid'];?>"><?php echo $r['title'];?></a> ··································</p></li>
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
                        <div class="u_rone_zl_cont_lf u_fl">专属客服</div><div class="u_rone_zl_cont_r u_fl"><a href="chat.php?touser=<?php echo $_kf;?>&amp;mid=16&amp;itemid=99" target="_blank" style=''><?php echo $_kfname;?></a></div>
                      </div>
                      <div class="u_rone_zl_cont_1">
                        <div class="u_rone_zl_cont_lf u_fl">级别</div><div class="u_rone_zl_cont_r u_fl"><img src="<?php echo DT_SKIN;?>image/vip_<?php echo $vip;?>.gif" alt="<?php echo VIP;?>" title="<?php echo VIP;?>:<?php echo $vip;?>级"/></div>
                      </div>
                    </div>
                </div>
                <!-- 项目状态 -->
                  <div class="u_rone_xm">
                    <div class="u_rone_xm_t">项目状态</div>
                              
                    <div class="u_rone_xm_cont">
                      <div class="u_rone_xm_contl u_fl">
                        <b><?php echo count($sj_all);?></b><br/>
                        <span class="u_blue">投标</span>
                      </div>
                      <div class="u_rone_xm_xx u_fl">|</div>
                      <div class="u_rone_xm_contl u_fl">
                        <b><?php echo $sj_in['count'];?></b><br/>
                        <span class="u_blue">入围</span>
                      </div>
                      <div class="u_rone_xm_xx u_fl">|</div>
                      <div class="u_rone_xm_contl u_fl">
                        <b><?php echo $sj_last['count'];?></b><br/>
                        <span class="u_blue">中标</span>
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
         
     
        <div class="u_sjs_rtwo">
          <div class="u_rtwo_t"><b>最新建站项目 &nbsp;></b>
            <span class="u_sjs_m">
             <a href="project.php">更多</a>
              </span>
          </div>
          <div class="u_rtwo_2_big">
            <!-- <div class="u_rtwo_2">
              <div class="u_rtwo_2_1 u_fl u_pt10"><span>项目信息</span></div>
              <div class="u_rtwo_2_2 u_fl u_pt10"><span>套餐类型</span></div>
              <div class="u_rtwo_2_3 u_fl u_pt10"><span>已提交作品</span></div>
              <div class="u_rtwo_2_4 u_fl u_pt10"><span>项目状态</span></div>
              <div class="u_rtwo_2_5 u_fl u_pt10"><span>剩余时间</span></div>
              <div class="u_rtwo_2_6 u_fl u_pt10"><span>操作</span></div>
            </div> -->
            <table class="tableborder" border="0" cellspacing="0">
              <tr>
               
                  <td width="233" align="center">项目信息</td>
                  <td width="114" align="center">套餐类型</td>
                  <td width="102" align="center">已提交作品</td>
                  <td width="104" align="center">项目状态</td>
                  <td width="104" align="center">剩余时间</td>
                  <td width="156" align="center">操作</td>
                
                </tr>
                <?php if(is_array($list)) { foreach($list as $i => $rm) { ?>
                <tr>
                  <td style="padding-left:5px;">
                    <div class="u_rtwo_2_1_1"><b>订单编号:</b> <?php echo $rm['itemid'];?></div>
                    <div class="u_rtwo_2_1_1"><b>订单时间:</b> <?php echo $rm['addtime'];?></div>
                    <div class="u_rtwo_2_1_1"><p><b><?php echo $rm['areaid'];?><?php echo $rm['buyer_name'];?><br></b> <a href="">(<?php echo $rm['title'];?>)</a></p></div>
                  </td>
                  <td align="center"><span><?php echo $rm['buyer_receive'];?>  </span></td>
                  <td align="center"><span><br><?php echo $rm['count'];?></span></td>
                  <td align="center">
                    <span><?php echo $rm['status_zt'];?><br><?php if($rm['status']==0 || $rm['status']==1) { ?><span style="color:#ADADAD;">订单详情</span> <?php } else { ?><a href="project.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=upload_5&forward=<?php echo $MODULE['2']['linkurl'];?>">订单详情</a><?php } ?>
                    </span>
                  </td>
                  <td align="center"><span>&nbsp; <?php echo $rm['lefttime'];?>  </span></td>
                  <td align="center">
                    <span>&nbsp;
                <?php if($rm['status']==0) { ?>
           <input type="button" value="等待客户付款" class="gaoliangG">
                <?php } else if($rm['status']==1) { ?>
                <input type="submit" value="等待资料审核" class="gaoliangG">
                <?php } else if($rm['status']==2) { ?>          
                 <input type="submit" value="提交首页" class="u_btn" onclick="Go('project.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=index');"/>
                 <?php } else if($rm['status']==3 ) { ?>
                 <input type="submit" value="提交首页" class="u_btn" onclick="Go('project.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=index');"/>
                 <?php } else if($rm['status']==5 ) { ?>
                 <?php if($rm['designer']==$_company) { ?>
                  <input type="submit" value="提交栏目" class="u_btn" onclick="Go('project.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=lm');"/>
                 <?php } else { ?>
                 
                 <?php } ?>
                 <?php } else if($rm['status']==6 || $rm['status']==7|| $rm['status']==8 ) { ?>
                  <?php if($rm['designer']==$_company) { ?>
                   <input type="submit" value="提交PSD" class="u_btn" onclick="Go('project.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=design');"/>
                     <?php } else { ?>
                   
                    <?php } ?>
                  
                  <?php } else if($rm['status']==9 ) { ?> 
                   <?php if($rm['designer']==$_company) { ?>
                    <?php if($rm['buyer_star']) { ?>
          <input type="submit" value="评价详情" class="u_btn" onclick="Go('project.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=comment_detail&forward=<?php echo $MODULE['2']['linkurl'];?>');"/>
          <?php } else { ?>
          <input type="submit" value="评 价" class="u_btn" onclick="Go('project.php?itemid=<?php echo $rm['itemid'];?>&action=update&step=comment&forward=<?php echo $MODULE['2']['linkurl'];?>');"/>
          <?php } ?>
     <?php } ?>
                 <?php } else { ?>
                     <input type="submit" value="等待中" class="gaoliangG">
                 <?php } ?>
               </span>
                  </td>
                </tr>
                <tr>
                  <td colspan="6" class="u_wdxm_lb"></td>
                                     
                </tr>
               <?php } } ?>
            </table>
 
          
          
         
          
        
          
         
        </div>
        </div>
         <!-- 第三排盒子 -->
         <div class="clear mgtp20"></div>
        <div class="u_sjs_rtwo">
          <div class="u_rtwo_t"><b>最新平面项目 &nbsp;></b>
            <span class="u_sjs_m">
             <a href="design.php">更多</a>
              </span>
          </div>
          <div class="u_rtwo_2_big">
          <table class="tableborder" border="0" cellspacing="0">
              <tr>
               
                  <td width="233" align="center">项目信息</td>
                  <td width="114" align="center">套餐类型</td>
                  <td width="102" align="center">已提交作品</td>
                  <td width="104" align="center">项目状态</td>
                  <td width="104" align="center">剩余时间</td>
                  <td width="156" align="center">操作</td>
                
                </tr>
               
                <?php if(is_array($lists)) { foreach($lists as $i => $rn) { ?>
                <tr>
                  <td style="padding-left:5px;">
                    <div class="u_rtwo_2_1_1"><b>订单编号:</b> <?php echo $rn['itemid'];?></div>
                    <div class="u_rtwo_2_1_1"><b>订单时间:</b> <?php echo $rn['addtime'];?></div>
                    <div class="u_rtwo_2_1_1"><p><b><?php echo $rn['areaid'];?><?php echo $rn['buyer_name'];?><br></b> <a href="">(<?php echo $rn['title'];?>)</a></p></div>
                  </td>
                  <td align="center"><span><?php echo $rn['buyer_receive'];?>  </span></td>
                  <td align="center"><span><br><?php echo $rn['count'];?></span></td>
                  <td align="center">
                    <span><?php echo $rn['status_zt'];?><br><?php if($rn['status']==0 || $rn['status']==1) { ?><span style="color:#ADADAD;">订单详情</span> <?php } else { ?><a href="design.php?itemid=<?php echo $rn['itemid'];?>&action=update&step=upload_5&forward=<?php echo $MODULE['2']['linkurl'];?>">订单详情</a><?php } ?>
                    </span>
                  </td>
                  <td align="center"><span>&nbsp; <?php echo $rn['lefttime'];?>  </span></td>
                  <td align="center">
                    <span>&nbsp;
                <?php if($rn['status']==0) { ?>
              <input type="button" value="等待客户付款" class="gaoliangG">
                <?php } else if($rn['status']==1) { ?>
                <input type="submit" value="等待资料审核" class="gaoliangG">
                <?php } else if($rn['status']==2) { ?>          
                 <input type="submit" value="提交首页" class="u_btn" onclick="Go('design.php?itemid=<?php echo $rn['itemid'];?>&action=update&step=index');"/>
                 <?php } else if($rn['status']==3 ) { ?>
                 <input type="submit" value="提交首页" class="u_btn" onclick="Go('design.php?itemid=<?php echo $rn['itemid'];?>&action=update&step=index');"/>
                 <?php } else if($rn['status']==5 ) { ?>
                 <?php if($rn['designer']==$_company) { ?>
                  <input type="submit" value="提交栏目" class="u_btn" onclick="Go('design.php?itemid=<?php echo $rn['itemid'];?>&action=update&step=lm');"/>
                 <?php } else { ?>
               
                 <?php } ?>
                 <?php } else if($rn['status']==6 || $rn['status']==7 ) { ?>
                  <?php if($rn['designer']==$_company) { ?>
                   <input type="submit" value="提交PSD" class="u_btn" onclick="Go('design.php?itemid=<?php echo $rn['itemid'];?>&action=update&step=design');"/>
                     <?php } else { ?> 
                    <?php } ?>
                  <?php } else if($rn['status']==8 ) { ?> 
                   <?php if($rn['designer']==$_company) { ?>
                    <?php if($rn['buyer_star']) { ?>
          <input type="submit" value="评价详情" class="u_btn" onclick="Go('design.php?itemid=<?php echo $rn['itemid'];?>&action=update&step=comment_detail&forward=<?php echo $forward;?>');"/>
          <?php } else { ?>
          <input type="submit" value="评 价" class="u_btn" onclick="Go('design.php?itemid=<?php echo $rn['itemid'];?>&action=update&step=comment&forward=<?php echo $forward;?>');"/>
          <?php } ?>
           <?php } else { ?>
                  
                    <?php } ?>
                 <?php } else { ?>
                     <input type="submit" value="等待中" class="gaoliangG">
                 <?php } ?>
               
               </span>
                  </td>
                </tr>
                <tr>
                  <td colspan="6" class="u_wdxm_lb"></td>
                                     
                </tr>
               <?php } } ?>
            </table>
           
        
        </div>
        </div>         
         <!--  -->
         <!-- 猜你喜欢 -->
        
    </div>
<div class="clear"></div>
<?php include template('footer',$module);?>