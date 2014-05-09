<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<!-- 全站搜素案例结果开始 -->
  <!-- 全站搜索条件选择开始 -->
  <!-- 获取标签 -->
<script type="text/javascript" src="<?php echo DT_STATIC;?>/file/script/search_order.js"></script>
  
  <div class="QuanZ_An_Box">
      <div class="QuanZ_An_S_T">
        <div class="QuanZ_An_S_Nav">
          <p> <a href="<?php echo $CFG['url'];?>">首页</a> > <a href="<?php echo $CFG['url'];?>mall/search_order.php">定制网站案例展示中心</a></p>
          <div class="QuanZ_An_biaoqian" id="QuanZ_An_biaoqian">
            <!-- get获取选择的值 -->
            <span class="hide"><a style="cursor:pointer"></a></span>
            <!-- get获取选择的值结束 -->
          </div>
        </div>
        <div class="QuanZ_An_S_xz" id="QuanZ_An_S_xz_sq">
<div class="QuanZ_An_S_xz_h">
<div class="search_hy"><span><a href="?&color=<?php echo $color;?>&package=<?php echo $package;?>">行业：</a></span>
<p></p>
<ul class="QuanZ_An_Bq_a">
<?php if(is_array($sorts)) { foreach($sorts as $i => $r) { ?>

 <?php if($i==$_GET['hy']) { ?>
 
 <?php if($_GET['hy']=='') { ?>
 <li><a href="?hy=<?php echo $i;?>&color=<?php echo $color;?>&package=<?php echo $package;?>"
alt="摩恩建站22-<?php echo $r;?>"  title="<?php echo $r;?>"><?php echo $r;?></a>
 <?php } else { ?>
 <li><a href="?hy=<?php echo $i;?>&color=<?php echo $color;?>&package=<?php echo $package;?>"
alt="摩恩建站22-<?php echo $r;?>" id="search_icon" title="<?php echo $r;?>"><?php echo $r;?></a>
 <?php } ?>
   <?php } else { ?>
<li><a href="?hy=<?php echo $i;?>&color=<?php echo $color;?>&package=<?php echo $package;?>"
alt="摩恩建站-<?php echo $r;?>" title="<?php echo $r;?>"><?php echo $r;?></a>
 <?php } ?>
 
  <?php $i++?>
  <?php if($i%5==0 ) { ?>
</li>
<p></p>
</ul>
</div>
<div class="search_hy1"><span></span>
<p></p>
<ul class="QuanZ_An_Bq_a">
<?php } else { ?>
</li>
<p></p>
<?php } ?>
 <?php } } ?>
</ul>
</div>
<!-- 色系开始 -->
<div class="seach_color"><span>色系：</span>
<ul id="QuanZ_An_color" class="QuanZ_An_color QuanZ_An_Bq_a">
<?php if(is_array($colors_all)) { foreach($colors_all as $i => $c) { ?> <?php if($c['key']==$_GET['color']) { ?>
<li><a href="?hy=<?php echo $hy;?>&color=<?php echo $c['key'];?>&package=<?php echo $package;?>"
id="search_color_<?php echo $c['key'];?>" class="S_<?php echo $c['key'];?>"><i><?php echo $c['name'];?></i></a></li>
<?php } else { ?>
<li><a href="?hy=<?php echo $hy;?>&color=<?php echo $c['key'];?>&package=<?php echo $package;?>"
class="S_<?php echo $c['key'];?>"><i><?php echo $c['name'];?></i></a></li>
<?php } ?>
 <?php } } ?>
</ul>
</div>
<div class="xuxian"></div>
</div>
<!-- 色系结束 -->
          <!-- 套餐选择开始 -->
          <div class="search_tc clear">
            <span>套餐：</span>
             <p>
                <ul>
                <?php if(is_array($catidt)) { foreach($catidt as $i => $cat) { ?>
                  <?php if($cat['key']==$_GET['package']) { ?>
                      <li><a href="?hy=<?php echo $hy;?>&color=<?php echo $color;?>&package=<?php echo $cat['key'];?>"  id="search_icon"><?php echo $cat['name'];?></a></li>
                  <?php } else { ?>
                      <li><a href="?hy=<?php echo $hy;?>&color=<?php echo $color;?>&package=<?php echo $cat['key'];?>"><?php echo $cat['name'];?></a></li>
                  <?php } ?>
              
                  <?php } } ?>
                <ul>
             </p>
          </div>
          <!-- 套餐选择结束 -->
        </div>
      </div>
      <div class="Q_toggle">
      <div class="Q_bar"></div>
            <div class="quan_nav nav1" id="JS_shouqi_fliter"></div>
      </div>
     
     
      <!-- 全站搜索条件选择结束 -->
  <!-- 搜索排序开始 -->
  <div class="QuanZ_An_Pai">
    <div class="QuanZ_An_Pai_t">
      <p><span>案例排序：</span><a href="?hy=<?php echo $hy;?>&color=<?php echo $color;?>&package=<?php echo $package;?>&order=0">默认</a> <a href="?hy=<?php echo $hy;?>&color=<?php echo $color;?>&package=<?php echo $package;?>&order=1">更新</a> <a href="?hy=<?php echo $hy;?>&color=<?php echo $color;?>&package=<?php echo $package;?>&order=2">人气</a></p>
      <span>共找到<i><?php echo $rs['num'];?></i>个案例</span>
    </div>
  </div>
  <div class="QuanZ_An_List">
    <ul class="QuanZ_An_List_ul">
    
             <?php if(is_array($trades)) { foreach($trades as $i => $k) { ?> 
                 <li>
                    <div class="Index_Anli_zs_img">
                      <a href="<?php echo $CFG['url'];?>mall/search_last.php?itemid=<?php echo $k['itemid'];?>" target="_blank"><img src="<?php echo $k['thumb'];?>" alt="摩恩建站-<?php echo $k['title'];?>"></a>
                      <!-- 鼠标指上显示 -->
                        <div class="MoBanYello">
                         <span class="Left">
                           <a href="<?php echo $CFG['url'];?>mall/search_last.php?itemid=<?php echo $k['itemid'];?>"target="_blank" title="摩恩建站-<?php echo $k['title'];?>">查看详情</a>
                         </span>
                         <span class="Right">
                           <a href="<?php echo $k['url'];?>" target="_blank">浏览网站</a>
                         </span>
                        </div>
                      <!-- 鼠标指上显示结束 -->
                    </div>
                    <div class="GoSM">名称：<?php echo $k['buyer_name'];?></div>
                    <div class="JzTc">建站套餐：<?php echo $k['title'];?></div>
                </li>
             
             <?php } } ?>   
            
              
                 </ul>
  </div>
  <!-- 搜索排序结束 -->
  <div class="QuanZ_An_Next">
  <?php echo $pages;?>
  </div>
<!-- 全站搜素案例结果结束 -->
  </div>
  
<?php include template('footer');?>