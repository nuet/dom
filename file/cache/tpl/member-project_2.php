<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header2');?>
<div class="u_wsxq">
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
 <div class="N_DdyLc">
    <img src="<?php echo DT_SKIN;?>/image/N_DdyLc_baner.jpg" alt="">
  </div>
<!-- 建站资料选项卡 -->


  <div class="js_case clear">
    <div class="js_title cf">

      <ul class="js_title-list cf">
    <li><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=upload_5&forward=<?php echo $_GET['forward'];?>">建站资料</a></li>
        <li><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=index&forward=<?php echo $_GET['forward'];?>">首页设计</a></li>
        <li><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=lm&forward=<?php echo $_GET['forward'];?>">栏目页及内页设计</a></li>
       <li class="on"><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=design&forward=<?php echo $_GET['forward'];?>">PSD上传</a></li>
        <li><a href="project.php?itemid=<?php echo $itemid;?>&action=update&step=last&forward=<?php echo $_GET['forward'];?>">网站上线</a></li>
      </ul>
    </div>
    <div class="product-wrap">
     <!--建站资料-->
     <div class="js_product" >
     </div>
<div class="js_product ">
</div>
<div class="js_product">
</div>
<div class="js_product show">
 <div class="u_jzzl" id="u_jzzl">

 <div class="design">
    <ul>
     <?php if(is_array($list)) { foreach($list as $i => $s) { ?>
    
       <li style="border-color: rgb(250, 250, 250);">
                   <div class="">
              <a href="<?php echo $s['upload'];?>"><img src="<?php echo $CFG['url'];?>/member/image/<?php echo $s['pic'];?>.ico" onerror="nofind();"  alt="" id="showthumb337" style="opacity: 1;"></a>
                  <span><?php echo $s['note'];?></span>
                 </div>
 
                </li>
                                                                 
                                                       
           <?php } } ?> 
               </ul>
  </div>

 
        <!-- 资料提交后页面显示开始 -->
        <br>
        
        
        <div class="design_sc clear">
        
          <form action="project.php" method="post" enctype="multipart/form-data" class="file-box">
        <i>栏目PSD(上传后无法修改)：</i>
<input type="hidden" name="forward" value="<?php echo $CFG['url'];?>/member/project.php?itemid=<?php echo $itemid;?>&action=<?php echo $action;?>&step=<?php echo $step;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="confirm_order" value="1"/>           
                    <input type="text" name="pot[titledb0]" id="title" class="txt1" placeholder="栏目名称" value="<?php echo $title;?>"/><input name="post[fileurl0]" class="txt" id="fileurl" placeholder="PSD地址"  type="text" size="50" value="<?php echo $fileurl;?>"/><?php if($MG['upload'] && check_group($_groupid, $MOD['group_upload'])) { ?>&nbsp;&nbsp;<input type='button' class='btn1' value='选择文件' onclick="Dfile(<?php echo $moduleid;?>, Dd('fileurl').value, 'fileurl', 'psd|zip|rar|ai|cdr');" /> <?php } ?>
 <span id="dfileurl" class="f_red"></span> 
                          <!--<input type="submit" name="submit" class="btn" value="上传" />--> 支持文件格式：psd,zip,rar,ai,cdr
        <i>  <a href="#" title="点击增加1项" onClick="showinput()"><img border='0' style='width:12px;height:12px;' src='<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/menu_add.gif'></a></i>
        <div id='input0' class="a"></div>
        <input type="submit" value="上&nbsp;&nbsp;传" name='submit'  style='float:right;margin-top:30px;'class="u_jzzl_tjhshow_bc2_btn">
                </form>
        </div>
        </div>
        
        
        <!-- 资料提交后页面显示结束 -->

        
</div>
<script>
totalnum=0;
limitnum=15;
function showinput(){
if(totalnum>(limitnum-1)){
alert("你最多只能上"+limitnum+"传张文件!");
return ;
}
var str='';
var divid='input'+totalnum;
var num=1;
for(var i=1;i<=num;i++){
totalnum=totalnum+i;
str+="<p style='line-height:30px'><i>栏目PSD：&nbsp;</i><input type='text' class='txt1' name=\"pot[titledb"+totalnum+"]\" id='title["+totalnum+"]' placeholder='栏目名称' /><input name='post[fileurl"+totalnum+"]' id='fileurl"+totalnum+"'class='txt' type='text' size='50' value='<?php echo $fileurl;?>'/><?php if($MG['upload']["+totalnum+"] && check_group($_groupid, $MOD['group_upload']["+totalnum+"])) { ?>&nbsp;&nbsp;<input type='button' class='btn1' value='选择文件' onclick=\"Dfile(<?php echo $moduleid;?>, Dd('fileurl"+totalnum+"').value, 'fileurl"+totalnum+"', 'psd|zip|rar|ai|cdr');\" /><?php } ?>
<span id='dfileurl' class='f_red'></span> </p>";

}
document.getElementById(divid).innerHTML=str+"<div class='a' id='input"+totalnum+"'></div>";

} 
</script>
<div class="js_product">
 
     
    </div>
  </div>
<!-- 建站资料选项卡 结束-->
</div>
<!-- 建站资料结束 -->
<?php include template('footer');?>
