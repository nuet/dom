<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header_mb');?>
<script type="text/javascript" src="<?php echo DT_STATIC;?>/file/script/search_mb.js"></script>
<div class="QuanZ_An_Box">
      <div class="QuanZ_An_S_T">
        <div class="QuanZ_An_S_Nav"style="background:#FFF">
          <p> <a href="<?php echo $CFG['url'];?>">首页</a> >  <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <a href="<?php echo $MOD['linkurl'];?>search.php">搜索</a></p>
          <div class="QuanZ_An_biaoqian" id="QuanZ_An_biaoqian"style="background:#FFF">
            <!-- get获取选择的值 -->
            <span class="hide"><a style="cursor:pointer"></a></span>
            <!-- get获取选择的值结束 -->
          </div>
        </div>
        <div class="QuanZ_An_S_xz" id="QuanZ_An_S_xz_sq">
          <div class="QuanZ_An_S_xz_h">
            <div class="search_hy clear">
             <span>套餐：</span>
             <p></p><ul id="tc">
             <?php if(is_array($all_types)) { foreach($all_types as $i => $v) { ?>
                   <?php if($v['catid']==$catid ) { ?>
                      <li><a href="?catid=<?php echo $v['catid'];?>&color=<?php echo $_GET['color'];?>&ks=<?php echo $_GET['ks'];?>"  name='<?php echo $v['catid'];?>' id="search_icon"><?php echo set_style($v['catname'],$v['style']);?></a></li>
                  <?php } else { ?>
                      <li><a href="?catid=<?php echo $v['catid'];?>&color=<?php echo $_GET['color'];?>&ks=<?php echo $_GET['ks'];?>" name='<?php echo $v['catid'];?>'><?php echo set_style($v['catname'],$v['style']);?></a></li>
                  <?php } ?>
              
                  <?php } } ?>
              </ul>
            </div>
        
          <!-- 色系开始 -->
          <div class="seach_color">
            <span>色系：</span>
            
             <ul  id="QuanZ_An_color"  class="QuanZ_An_color QuanZ_An_Bq_a">
              <?php if(is_array($colors_all)) { foreach($colors_all as $i => $c) { ?>
                <?php if($c['key']==$_GET['color']) { ?>
                   <li><a href="?catid=<?php echo $_GET['catid'];?>&color=<?php echo $c['key'];?>&ks=<?php echo $_GET['ks'];?>" id="search_color_<?php echo $c['key'];?>" class="S_<?php echo $c['key'];?>"><i><?php echo $c['name'];?></i></a></li>
                <?php } else { ?>
                
                    <li><a href="?catid=<?php echo $_GET['catid'];?>&color=<?php echo $c['key'];?>&ks=<?php echo $_GET['ks'];?>" class="S_<?php echo $c['key'];?>"><i><?php echo $c['name'];?></i></a></li>
                <?php } ?>
           
              <?php } } ?>
               
              </ul>
           
          </div>
          </div>
          <!-- 色系结束 -->
          <!-- 套餐选择开始 -->
         
          <!-- 套餐选择结束 -->
        </div>
        <div class="search_tc clear">
           </div>
      </div>
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
    <?php if($tags) { ?><?php include template('list-'.$module, 'tag');?><?php } ?>
      
  </div>
  <!-- 搜索排序结束 -->
  <div class="QuanZ_An_Next">
  <?php echo $pages;?>
  </div>
<!-- 全站搜素案例结果结束 -->
  </div></div>
  
<?php include template('footer');?>