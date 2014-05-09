<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header1', $module);?>
<script type="text/javascript">c(2);var errimg = '<?php echo DT_SKIN;?>image/nopic50.gif';</script>
<div class="u_SheJiS_DaTing u_fl">
        <!-- 建站大厅一排盒子 -->
        <!-- 建站项目条件开始 -->
           
            <input type="hidden" name="action" value="<?php echo $action;?>"/>
        <div class="u_SheJiS_DaTing_xz">
              <div class="u_SheJiS_DaTing_xz_t"><b><i>> 建站项目大厅</i></b></div>
              <div class="u_SheJiS_DaTing_xz_Tiaoj">
                <div class="u_SheJiS_DaTing_xz_Tiaoj_t">
               
                  <b>建站项目搜索></b> <a href="">重置筛选条件</a>
                </div>
                <div class="u_SheJiS_DaTing_xz_Tiaoj_sea">
                    <div class="u_SheJiS_DaTing_xz_Tiaoj_sea_1">
                      <b>套餐类型：</b> 
                          <ul>
                            <li><a href="?n=<?php echo $s;?>&order=<?php echo $order;?>">全部</a></li>
                            <li><a href="?t=1&n=<?php echo $s;?>&order=<?php echo $order;?>">展示站</a></li>
                            <li><a href="?t=2&n=<?php echo $s;?>&order=<?php echo $order;?>">品牌站</a></li>
                            <li><a href="?t=3&n=<?php echo $s;?>&order=<?php echo $order;?>">营销站</a></li>
                          </ul>
                    </div>
                    <div class="u_SheJiS_DaTing_xz_Tiaoj_sea_1 u_SheJiS_DaTing_xz_Tiaoj_sea_1_bg">
                      <b>套餐级别：</b> 
                          <ul>
                            <li><a href="?n=<?php echo $s;?>&order=<?php echo $order;?>">全部</a></li>
                            <li><a href="?t=4&n=<?php echo $s;?>&order=<?php echo $order;?>">基础站</a></li>
                            <li><a href="?t=5&n=<?php echo $s;?>&order=<?php echo $order;?>">标准站</a></li>
                            <li><a href="?t=6&n=<?php echo $s;?>&order=<?php echo $order;?>">高级站</a></li>
                          </ul>
                    </div>
                    <div class="u_SheJiS_DaTing_xz_Tiaoj_sea_1">
                      <b>项目状态：</b> 
                          <ul>
                            <li><a href="?t=<?php echo $t;?>&order=<?php echo $order;?>">全部</a></li>
                            <li><a href="?n=1&t=<?php echo $t;?>&order=<?php echo $order;?>">新项目</a></li>
                            <li><a href="?n=2&t=<?php echo $t;?>&order=<?php echo $order;?>">修改中</a></li>
                            <li><a href="?n=3&t=<?php echo $t;?>&order=<?php echo $order;?>">已结束</a></li>
                          </ul>
                    </div>
                </div>
              </div>
        </div>
        <!-- 建站项目条件结束 -->
        <!-- 建站大厅项目搜素结果开始 -->
        <div class="u_SheJiS_DaTing_JG">
            <div class="u_SheJiS_DaTing_JG_Pgg">
                <p><i>排序：</i> 
                    <a href="?order=addtime&n=<?php echo $n;?>&t=<?php echo $t;?>" id="page">发布时间</a>
                   <a href="?order=status&n=<?php echo $n;?>&t=<?php echo $t;?>" id="page">订单状态</a>
                
                </p>
                <span>
                <?php echo $pages;?>
               </span>
            </div>
            <!-- 项目搜素框开始 -->
            <div class="u_SheJiS_DaTing_JG_sea">
              <p>项目搜索</p>
               <form action="project.php">
               <input type="hidden" name='my' value="<?php echo $_GET['my'];?>"/>
                  <input type="text" placeholder="订单编号 " name="item" value="<?php echo $item;?>" style='width:160px;'class="u_SheJiS_DaTing_JG_sea_txt" >&nbsp;&nbsp;
                <p><input type="text" placeholder="买家帐号" name="buyer" value="<?php echo $buyer;?>" style='width:80px;' class="u_SheJiS_DaTing_JG_sea_txt" ></p>  
                 <div class="u_SheJiS_DaTing_JG_sea_txt"> <?php echo dcalendar('fromtime', $fromtime);?> <i>至</i> <?php echo dcalendar('totime', $totime);?></div>
                  <input type="submit" value="搜素" name="submit" class="u_SheJiS_DaTing_JG_sea_btn">
                 </form>
            </div>
            
         
            <!-- 项目搜素框结束 -->
            <!-- 项目信息展示列表开始 -->
            <div class="u_SheJiS_DaTing_List">
              <div class="u_SheJiS_DaTing_List_info"><b>项目信息</b></div>
              <div class="u_SheJiS_DaTing_List_leix"><b>套餐类型</b></div>
              <div class="u_SheJiS_DaTing_List_yiti"><b>已提交作品</b></div>
              <div class="u_SheJiS_DaTing_List_xmzt"><b>项目状态</b></div>
              <div class="u_SheJiS_DaTing_List_time"><b>剩余时间</b></div>
              <div class="u_SheJiS_DaTing_List_caoz"><b>操作</b></div>
            </div>
           <?php if(is_array($trades)) { foreach($trades as $i => $r) { ?>
            <!-- 列表循环开始 -->
            <div class="u_SheJiS_DaTing_List_cont">
              <div class="u_SheJiS_DaTing_List_cont_info" id="u_SheJiS_DaTing_List_cont_info">
                <p><b>订单编号：</b><?php echo $r['itemid'];?></p>
                <p><b>订单时间：</b><?php echo $r['addtime'];?></p>
                <p><b><?php echo $r['buyer_name'];?></b></p>
                <p><a href="">(<?php echo $r['title'];?>)</a></p>
              </div>
              <div class="u_SheJiS_DaTing_List_cont_leix">
                    <p><?php echo $r['buyer_receive'];?></p> 
                 
              </div>
              <div class="u_SheJiS_DaTing_List_cont_yiti">
                    <p><?php echo $r['count'];?></p>
              </div>
              <div class="u_SheJiS_DaTing_List_cont_xmzt">
                    <p><?php echo $r['status_zt'];?></p>
                    <p><?php if($r['status']==0 || $r['status']==1) { ?><span style="color:#ADADAD;">订单详情</span> <?php } else { ?><a href="project.php?itemid=<?php echo $r['itemid'];?>&action=update&step=upload_5&forward=<?php echo $MODULE['2']['linkurl'];?>">订单详情</a><?php } ?>
</p>
              </div>
              <div class="u_SheJiS_DaTing_List_cont_time">
                    <p><?php echo $r['lefttime'];?></p>
              </div>
              <div class="u_SheJiS_DaTing_List_cont_caoz">
                    <!-- 按钮默认是灰色的 高亮套class 默认gaoliangG 换gaoliangY变亮-->
                 <p>    <?php if($r['status']==0) { ?>
       <input type="button" value="等待客户付款" class="gaoliangG">
                <?php } else if($r['status']==1) { ?>
                <input type="submit" value="等待资料审核" class="gaoliangG">
                <?php } else if($r['status']==2) { ?>
                 <input type="submit" value="提交首页" class="u_btn" onclick="Go('project.php?itemid=<?php echo $r['itemid'];?>&action=update&step=index');"/>
              
                 <?php } else if($r['status']==3 ) { ?>
                 <input type="submit" value="提交首页" class="u_btn" onclick="Go('project.php?itemid=<?php echo $r['itemid'];?>&action=update&step=index');"/>
                 <?php } else if($r['status']==5 ) { ?>
                 <?php if($r['designer']==$_company) { ?>
                 <input type="submit" value="提交栏目" class="u_btn" onclick="Go('project.php?itemid=<?php echo $r['itemid'];?>&action=update&step=lm');"/>
                 <?php } else { ?>
                 <input type="submit" value="提交栏目" class="gaoliangG" />
                 <?php } ?>
                 <?php } else if($r['status']==6 || $r['status']==7 || $r['status']==8 ) { ?>
                   <?php if($r['designer']==$_company) { ?>
                   <input type="submit" value="提交PSD" class="u_btn" onclick="Go('project.php?itemid=<?php echo $r['itemid'];?>&action=update&step=design');"/>
                 <?php } else { ?>
                
                 <?php } ?>
                  <?php } else if($r['status']==9 ) { ?> 
                    <?php if($r['designer']==$_company) { ?>
                  <?php if($r['buyer_star']) { ?>
<input type="submit" value="评价详情" class="u_btn" onclick="Go('project.php?itemid=<?php echo $r['itemid'];?>&action=update&step=comment_detail&forward=<?php echo $forward;?>');"/>
<?php } else { ?>
<input type="submit" value="评 价" class="u_btn" onclick="Go('project.php?itemid=<?php echo $r['itemid'];?>&action=update&step=comment&forward=<?php echo $forward;?>');"/>
<?php } ?>
 <?php } else { ?>
                
                 <?php } ?>
                 <?php } else { ?>
                     <input type="submit" value="等待中" class="gaoliangG">
                 <?php } ?>
 </p>
               
                    
              </div>
            </div>
            <div class="u_SheJiS_DaTing_List_cont_liu"></div>
            <!-- 列表循环结束 -->
            
            <?php } } ?>
            <!-- 列表循环开始 -->
          
            <!-- 项目信息展示列表结束 -->
        </div>
        <!-- 建站大厅项目搜素结果结束 -->
        
                 
         <!--  --></div>
   
<?php include template('footer', $module);?>