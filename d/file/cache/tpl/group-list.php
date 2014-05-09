<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header_mb');?>
<script type="text/javascript" src="<?php echo DT_STATIC;?>/file/script/search_mb.js"></script>
<div class="M_YQiYe_Bg">
<div class="M_YQiYe_Box <?php echo $pclass;?>">
  <div class="M_YQiYe">
    <img src="<?php echo DT_SKIN;?>image/<?php echo $pimg;?>" alt="">
  </div>
 <div class="MoBan_yBn_login_box">
      <div class="MoBan_yBn_login1">   
      </div>
    <?php if($_username && $_groupid <=5) { ?>
<div class="oyw_tm2"><h3 class="clearfix"><span style="font-size:14px;font-family:微软雅黑; padding:3px 0px;;" class="fl"><?php echo $_truename;?> <?php echo $MG['groupname'];?>，您好</span><span  style="padding-top:13px; margin-left:10px;">
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($user['vtruename']) { ?>v<?php } else { ?>u<?php } ?>
_truename.gif" style='padding-top: 3px;'width="16" height="16" title="<?php if($user['vtruename']) { ?>已通过<?php } else { ?>未通过<?php } ?>
真实姓名认证" align="absmiddle"/> <a href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/validate.php?action=truename" style='text-decoration: underline;'>实名</a> &nbsp;

</span></h3>
<div class="oyw_user clear">
  <div class="sjs_in_k">
    <div class="sjs_in_k_1">余额:<b><big> <?php echo $_money;?></big></b> 元<small>（锁定:<?php echo $user['locking'];?>元）</small></div>
    
    <div class="sjs_in_k_2">
        <div class="sjs_in_k_2_l oy_floatlf">
          <p><?php echo $count2['count'];?></p>
          <span><a href="<?php echo $MODULE['2']['linkurl'];?>">未付款项目</a></span>
        </div>
        <div class="sjs_in_k_2_b oy_floatlf">
          <p><?php echo $count1['count'];?></p>
          <span><a href="<?php echo $MODULE['2']['linkurl'];?>">已付款项目</a></span>
        </div>
        <div class="sjs_in_k_2_r oy_floatlf">
          <p><?php echo $_credit;?></p>
          <span><a href="<?php echo $MODULE['2']['linkurl'];?>credit.php">积分</a></span>
        </div>
    </div>
  </div>
  <div class="mt5 clear">
    <input type="submit"  onclick="Go('<?php echo $MODULE['2']['linkurl'];?>');" id="J-login-btn" class="NewBui_button NewM_Y_Q_Logh NewM_Y_Q_LoghColY" style="font-size:14px;background:#FF9400;font-family:微软雅黑;" value="进入会员中心" >
  </div>
</div></div>
   
   <?php } else if($_groupid >5) { ?>
       <div class="oyw_tm2"><h3 class="clearfix"><span style="font-size:14px;font-family:微软雅黑; padding:3px 0px;;" class="fl"><?php echo $_company;?> <?php echo $MG['groupname'];?>，您好</span><span  style="padding-top:13px; margin-left:10px;">
<img src="<?php if($user['vcompany']) { ?><?php echo $MODULE['2']['linkurl'];?>/image/v_company.gif<?php } else { ?><?php echo $MODULE['2']['linkurl'];?>/image/u_company.gif<?php } ?>
" style='padding-top: 3px;'width="16" height="16" title="<?php if($user['vcompany']) { ?>已通过<?php } else { ?>未通过<?php } ?>
设计师认证" align="absmiddle"/><?php if($user['vcompany']) { ?><img src="<?php echo DT_SKIN;?>image/vip_<?php echo $user['vip'];?>.gif" style='padding-top: 3px;'/><?php } else { ?> <a href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/validate.php?action=company" style='text-decoration: underline;'>认证</a> &nbsp; <?php } ?>

</span></h3>
<div class="oyw_user clear">
  <div class="sjs_in_k">
    <div class="sjs_in_k_1">余额:<b><big> <?php echo $_money;?></big></b> 元<small>（锁定:<?php echo $user['locking'];?>元）</small></div>
    
    <div class="sjs_in_k_2">
        <div class="sjs_in_k_2_l oy_floatlf">
          <p><?php echo count($sj_all);?></p>
          <span><a href="<?php echo $MODULE['2']['linkurl'];?>">投标</a></span>
        </div>
        <div class="sjs_in_k_2_b oy_floatlf">
          <p><?php echo $sj_in['count'];?></p>
          <span><a href="<?php echo $MODULE['2']['linkurl'];?>">入围</a></span>
        </div>
        <div class="sjs_in_k_2_r oy_floatlf">
          <p><?php echo $sj_last['count'];?></p>
          <span><a href="<?php echo $MODULE['2']['linkurl'];?>">中标</a></span>
        </div>
    </div>
  </div>
  <div class="mt5 clear">
    <input type="submit"  onclick="Go('<?php echo $MODULE['2']['linkurl'];?>');" id="J-login-btn"class="NewBui_button NewM_Y_Q_Logh NewM_Y_Q_LoghColY"  style="font-size:14px;background:#FF9400;font-family:微软雅黑;" value="进入会员中心" >
  </div>
</div></div>
      
      <?php } else { ?>
      <div class="MoBan_yBn_login_tm1">
         <form method="post" action="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>" id="Login" name="Login">
<input name="forward" type="hidden" id="forward" value="<?php echo $CFG['url'];?>/group/list.php?catid=<?php echo $_GET['catid'];?>">
        <div class="MoBan_yBn_login_tm_1">
          <span class="H18">欢迎登录</span><span class="H12">会员登录</span>
        </div>
        <div class="MoBan_yBn_login_tm_2">
          <span>用户名:</span><input name="username" type="text" id="username" value="" placeholder="手机号/邮箱/会员名" autocomplete="off" autocorrect="off" autocapitalize="off">
        </div>
        <div class="MoBan_yBn_login_tm_2">
          <span>密&nbsp;&nbsp;&nbsp;&nbsp;码:</span><input type="password" name="password" value="">
        </div>
        <div class="MoBan_yBn_login_tm_3">
          <span></span>
          <p>
          <a href="<?php echo $MODULE['2']['linkurl'];?>send.php">忘记用户名></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="<?php echo $MODULE['2']['linkurl'];?>send.php">忘记密码></a>
          </p>
          
        </div>
        <div class="MoBan_yBn_login_tm_4 clear">
           <input type="button" value="注&nbsp;&nbsp;册" class="Mgui" name=""  onclick="window.open('<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>')">
          <input type="submit" value="登&nbsp;&nbsp;录" class="MyellB" name="">
        </div>
        </form> 
      
      
      </div>
      <?php } ?>
  </div>
</div>
</div>
 <div class="QuanZ_An_Box">
      <div class="QuanZ_An_S_T">
        <div class="QuanZ_An_S_Nav"style="background:#FFF">
          <p> <a href="<?php echo $CFG['url'];?>">首页</a> > <a href="<?php echo $CFG['url'];?>/group/list.php?catid=<?php echo $pid;?>"><?php echo $pname;?></a></p>
          <div class="QuanZ_An_biaoqian" id="QuanZ_An_biaoqian"style="background:#FFF">
            <!-- get获取选择的值 -->
            <span class="hide"><a style="cursor:pointer"></a></span>
            <!-- get获取选择的值结束 -->
          </div>
        </div>
        <div class="QuanZ_An_S_xz" id="QuanZ_An_S_xz_sq">
          <div class="QuanZ_An_S_xz_h">
            <div class="search_hy">
              <span><a href="<?php echo $CFG['url'];?>group/list.php?catid=<?php echo $pid;?>&color=<?php echo $_GET['color'];?>">全部类别：</a></span>
             <p></p><ul class="QuanZ_An_Bq_a">
            <?php if(is_array($maincat)) { foreach($maincat as $i => $v) { ?>
             <?php if($v['catid']==$catid ) { ?>
            
                       <li><a href="<?php echo $CFG['url'];?>group/list.php?catid=<?php echo $v['catid'];?>&color=<?php echo $_GET['color'];?>" alt="摩恩建站22-<?php echo $r;?>" id="search_icon" title="<?php echo $r;?>" ><?php echo set_style($v['catname'],$v['style']);?>(<?php echo $v['item'];?>)</a>
             <?php } else { ?>
         
                       <li><a href="<?php echo $CFG['url'];?>group/list.php?catid=<?php echo $v['catid'];?>&color=<?php echo $_GET['color'];?>" alt="摩恩建站-<?php echo $r;?>" title="<?php echo $r;?>" ><?php echo set_style($v['catname'],$v['style']);?>(<?php echo $v['item'];?>)</a>
                <?php } ?>
            <?php $i++?>
            
            <?php if($i%5==0 ) { ?>
            </li><p></p></ul></div><div class="search_hy1"><span></span> <p></p><ul class="QuanZ_An_Bq_a">
            <?php } else { ?>
            </li><p></p>
            <?php } ?>
           <?php } } ?>
              </ul>
            </div>
          <!-- 色系开始 -->
          <div class="seach_color">
            <span>全部色系：</span>
            
             <ul  id="QuanZ_An_color"  class="QuanZ_An_color QuanZ_An_Bq_a">
              <?php if(is_array($colors_all)) { foreach($colors_all as $i => $c) { ?>
                <?php if($c['key']==$_GET['color']) { ?>
                   <li><a href="<?php echo $CFG['url'];?>group/list.php?catid=<?php echo $_GET['catid'];?>&color=<?php echo $c['key'];?>" id="search_color_<?php echo $c['key'];?>" class="S_<?php echo $c['key'];?>"><i><?php echo $c['name'];?></i></a></li>
                <?php } else { ?>
                
                    <li><a href="<?php echo $CFG['url'];?>group/list.php?catid=<?php echo $_GET['catid'];?>&color=<?php echo $c['key'];?>" class="S_<?php echo $c['key'];?>"><i><?php echo $c['name'];?></i></a></li>
                <?php } ?>
           
              <?php } } ?>
               
              </ul>
           
            </div>
          </div>
          <!-- 色系结束 -->
          <!-- 套餐选择开始 -->
         </div>
         <div class="search_tc clear">
           </div></div>
          <!-- 套餐选择结束 -->
          
    <div class="Q_toggle">
      <div class="Q_bar clear"></div>
            <div class="quan_nav nav1" id="JS_shouqi_fliter"></div>
            
      </div>
     
     
     
      <!-- 全站搜索条件选择结束 -->
  <!-- 搜索排序开始 -->
  <div class="QuanZ_An_Pai">
    <div class="QuanZ_An_Pai_t">
      <p><span>案例排序：</span><a href="?catid=<?php echo $_GET['catid'];?>&color=<?php echo $_GET['color'];?>">默认</a> <a href="?catid=<?php echo $_GET['catid'];?>&color=<?php echo $_GET['color'];?>&o=1">更新</a> <a href="?catid=<?php echo $_GET['catid'];?>&color=<?php echo $_GET['color'];?>&o=2">人气</a></p>
      <span>共找到<i><?php echo $items;?></i>个案例</span>
    </div>
  </div>
   <div class="QuanZ_An_List">
    <ul class="QuanZ_An_List_ul">
    <?php if($tags) { ?><?php include template('list-'.$module, 'tag');?><?php } ?>
      
  </ul></div>
  <!-- 搜索排序结束 -->
  <div class="QuanZ_An_Next">
  <?php echo $pages;?>
  </div>
<!-- 全站搜素案例结果结束 -->
  </div></div>
<?php include template('footer');?>