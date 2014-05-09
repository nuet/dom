<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
 <?php $t['price'] = str_replace('.00', '', $t['price']);?>
<?php $t['marketprice'] = str_replace('.00', '', $t['marketprice']);?>
                 <li>
                    <div class="Index_Anli_zs_img">
                      <a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo $t['thumb'];?>" alt="摩恩建站-<?php echo $t['title'];?>"></a>
                      <!-- 鼠标指上显示 -->
                        <div class="MoBanBlue">
                         <span class="Left">
                           <a href="<?php echo $t['linkurl'];?>"target="_blank" title="摩恩建站-<?php echo $t['title'];?>">查看详情</a>
                         </span>
                         <span class="Right">
                           <a href="<?php echo $t['url'];?>" target="_blank">浏览网站</a>
                         </span>
                        </div>
                      <!-- 鼠标指上显示结束 -->
                    </div>
                    <div class="GoSM">名称：<?php echo $t['title'];?></div>
                    <div class="JzTc">行业：<?php echo $t['cname'];?></div>
                </li>   
  <?php } } ?>   
