<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header2');?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/style.css"/>
<script type="text/javascript">c(2);var errimg = '<?php echo DT_SKIN;?>image/nopic50.gif';</script>
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
<form method="post" action="trade.php" id="dform" onsubmit="return check()">
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="step" value="<?php echo $step;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>

  <div class="js_case clear">
    <div class="js_title cf">

      <ul class="js_title-list cf">
        <li class="on"><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=upload_5&forward=<?php echo $_GET['forward'];?>">建站资料</a></li>
        <li><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=index&forward=<?php echo $_GET['forward'];?>">首页设计</a></li>
        <li><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=lm&forward=<?php echo $_GET['forward'];?>">栏目页及内页设计</a></li>
        <li><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=design&forward=<?php echo $_GET['forward'];?>">程序开发</a></li>
        <li><a href="trade.php?itemid=<?php echo $itemid;?>&action=update&step=last&forward=<?php echo $_GET['forward'];?>">网站上线</a></li>
    
      </ul>
    </div>
    <div class="product-wrap">
     <!--建站资料-->
     <div class="js_product show" >
     
          <div class="u_jzzl" id="u_jzzl">
         <div class="u_jzzl_k">
<div class="u_jzzl_1">
<!-- 默认语音 -->
<div class="u_jzzl_moLangu">
<div class="u_jzzl_moLangu_t"><span>默认语言版本：</span></div>
<div class="u_jzzl_moLangu_cont">
<div class="u_jzzl_moLangu_cont_1">购买的语言版本：<?php echo $td['language_style'];?></div>
<div class="u_jzzl_moLangu_cont_2">网站域名默认的着陆页面:
<?php if(is_array($td['language'])) { foreach($td['language'] as $i => $k) { ?>
     <input type="radio" value="<?php echo $k;?>" name="dlang"> <?php echo $k;?>
<?php } } ?>

<i>注：网址访问的默认语言版本</i>
</div>
</div>
</div>

   <div class="u_jzzl_col">
   <div class="u_jzzl_moLangu_t"><span>网站色彩要求：</span></div>
   <div class="u_jzzl_col_cont">
<div  class="clearfix banner-start">
<div  id="j-start-box"  class="box box-1">
<div  class="row row-color">
<div  class="opt"><i>网站主色调:</i>
<ul  id="j-start-color"  class="clearfix color">
        <?php if(is_array($colors_all)) { foreach($colors_all as $i => $k) { ?>
 <?php if($i==0) { ?>
<li  class="<?php echo $k['key'];?>"  j_val="<?php echo $k['key'];?>"><span  class="current"><?php echo $k['name'];?></span></li>
<?php } else { ?>
<li  class="<?php echo $k['key'];?>"  j_val="<?php echo $k['key'];?>"><span><?php echo $k['name'];?></span></li>
<?php } ?>
<?php } } ?>

</ul>
<i>（必选）</i>
<input  id="color_1"  name="color_1"  type="hidden"  value="红色系"  autocomplete="off">
</div>
</div>
</div>
</div>
<div  class="clearfix banner-start">
<div  id="j-start-box"  class="box box-1">
<div  class="row row-color">
<div  class="opt"><i>网站搭配色:</i>
<ul  id="j-start-color1"  class="clearfix color">
<?php if(is_array($colors_all)) { foreach($colors_all as $i => $k) { ?>
<?php if($i==0) { ?>
<li  class="<?php echo $k['key'];?>"  j_val="<?php echo $k['key'];?>"><span  class="current"><?php echo $k['name'];?></span></li>
<?php } else { ?>
<li  class="<?php echo $k['key'];?>"  j_val="<?php echo $k['key'];?>"><span><?php echo $k['name'];?></span></li>
<?php } ?>
<?php } } ?>
</ul>
<i>（可选）</i>
<input  id="color_2"  name="color_2"  type="hidden"  value="红色系"  autocomplete="off">
</div>
</div>
</div>
</div>
</div>
</div>

<!-- 框架选择 -->
<div class="u_jzzl_fram">
<div class="u_jzzl_moLangu_t"><span>网站框架设定和选择：</span></div>
<div class="u_jzzl_fram_size">
<div class="u_jzzl_fram_size_cont">
<div class="u_jzzl_fram_size_t"><span><b>网站页面宽度</b></span></div>
<div class="u_jzzl_fram_size_bz">
<div class="u_jzzl_fram_size_bz_lf"><span>标准</span></div>
<div class="u_jzzl_fram_size_bz_rt">
<input type="radio" value="1002" name="webwd">1102px <i> 注：适合1024x768分辨率以上的电脑，推荐选择。</i><br>
<input type="radio" value="900" name="webwd">900px
<input type="radio" value="950" name="webwd">950px
<input type="radio" value="990" name="webwd">990px
</div>
</div>
<div class="u_jzzl_fram_size_zf">
<div class="u_jzzl_fram_size_bz_lf"><span>窄幅</span></div>
<div class="u_jzzl_fram_size_bz_rt">
<input type="radio" value="850" name="webwd">850px
<i>注：适合800x600分辨率的电脑.</i>
</div>
</div>
<div class="u_jzzl_fram_size_kf">
<div class="u_jzzl_fram_size_bz_lf"><span>宽幅</span></div>
<div class="u_jzzl_fram_size_bz_rt">
<input type="radio" value="1258" name="webwd">1258px
<input type="radio" value="1418" name="webwd">1418px
<input type="radio" value="1658" name="webwd">1658px

</div>
</div>
</div>
</div>
<div class="u_jzzl_fram_index">
<div class="u_jzzl_fram_index_cont">

<div class="u_jzzl_fram_index_cont_xt">参考框架：<i>（点击可放大图片看框架栏目分布图）</i></div>
<div class="u_jzzl_fram_index_cont_img">
<span><a href="#"><img src="<?php echo DT_SKIN;?>/image/neiye/ind_jiagou_1.gif" alt=""></a></span>
<span><a href="#"><img src="<?php echo DT_SKIN;?>/image/neiye/ind_jiagou_2.gif" alt=""></a></span>
<span><a href="#"><img src="<?php echo DT_SKIN;?>/image/neiye/ind_jiagou_3.gif" alt=""></a></span>
<span><a href="#"><img src="<?php echo DT_SKIN;?>/image/neiye/ind_jiagou_4.gif" alt=""></a></span>
<span><a href="#"><img src="<?php echo DT_SKIN;?>/image/neiye/ind_jiagou_5.gif" alt=""></a></span>
<span><a href="#"><img src="<?php echo DT_SKIN;?>/image/neiye/ind_jiagou_1.gif" alt=""></a></span>
</div>
<div class="read_kj" style="820px;height:30px;line-height:30px;">
<style>
.read_kj span{
width:127px;
text-align:center;
display: block;
float: left;
}
.read_kj input{
text-align:center
}
.one{
padding-left:0px;
}
</style>
<span class="one"><input type='radio' name="post[read_kj]" value="1" />参考1</span>
<span><input type='radio' name="post[read_kj]" value="2"/>参考2</span>
<span><input type='radio' name="post[read_kj]" value="3"/>参考3</span>
<span><input type='radio' name="post[read_kj]" value="4"/>参考4</span>
<span><input type='radio' name="post[read_kj]" value="5"/>参考5</span>
<span><input type='radio' name="post[read_kj]" value="6"/>参考6</span>
</div>
<div>

</div>
<div class="u_jzzl_fram_index_cont_bt">
<b>自己手写或工具制作的首页及其他页面框架图片（可选）：<input name="post[kj]" id="fileurl6" type="text" size="50" value="<?php echo $fileurl6;?>"/><?php if($MG['upload'] && check_group($_groupid, $MOD['group_upload'])) { ?>&nbsp;&nbsp;<b onclick="Dfile(<?php echo $moduleid;?>, Dd('fileurl6').value, 'fileurl6', 'jpg|png');">选择文件</b><?php } ?>
  
   </b><i><a href="">例子下载>></a></i>
</div>
</div>
</div>
</div>
<!-- 参考网站 -->
<div class="u_jzzl_ckweb">
<div class="u_jzzl_moLangu_t"><span>参考网站：</span></div>

<div class="u_jzzl_ckweb_cont">
<div class="u_jzzl_ckweb_cont_1">可参考配色网站地址:
<input type="text" value="" name="pot1[psweb0]">
<span>

</span>
</div>
<div class="u_jzzl_ckweb_cont_1">可参考布局网站地址:
<input type="text" value="" name="pot2[bjweb0]"><span>

</span>
</div>
<div class="u_jzzl_ckweb_cont_1">可参考栏目网站地址:
<input type="text" value="" name="pot3[lmweb0]"><span>

</span>
</div>
<div id='input0' class="a"></div>
<div class="u_jzzl_ckweb_cont_1">现有网站地址:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" value="" name="web"><span>

</span>
</div>


<div class="u_jzzl_ckweb_cont_2"><p>其他:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<textarea rows="2" cols="44" name="other"></textarea>
</div>

<div class="u_jzzl_ckweb_cont_3">
<span><i>注：请尽量提供的参考网站，以便于设计师更好的根据您的要求设计网站，如网站有特殊需求，请联
系客服。热线电话：400-651-5550</i></span>
</div>
</div>
</div>
  
<!-- 建站所需材料 -->
<div class="u_jzzl_sxcl">
<div class="u_jzzl_moLangu_t"><span>建站所需材料：</span></div>
<div class="u_jzzl_sxcl_cont">
<div class="u_jzzl_sxcl_cont_1">公司LOGO图片上传：
<input name="post[logo]" id="fileurl1" type="text" size="50" value="<?php echo $fileurl1;?>"/><?php if($MG['upload'] && check_group($_groupid, $MOD['group_upload'])) { ?>&nbsp;&nbsp;<b onclick="Dfile(<?php echo $moduleid;?>, Dd('fileurl1').value, 'fileurl1', 'jpg|gif|psd|cdr|ai|png');">选择文件</b><?php } ?>
 <span id="dfileurl" class="f_red"></span> 
<span>支持文件格式：jpg,gif,psd,cdr,ai,png <a href=""><i>例子下载>></i></a></span>
</div>
<div class="u_jzzl_sxcl_cont_1">公司介绍联系方式文档：
<input name="post[contact]" id="fileurl2" type="text" size="50" value="<?php echo $fileurl2;?>"/><?php if($MG['upload'] && check_group($_groupid, $MOD['group_upload'])) { ?>&nbsp;&nbsp;<b onclick="Dfile(<?php echo $moduleid;?>, Dd('fileurl2').value, 'fileurl2', 'doc|txt|docx|wps');" >选择文件</b><?php } ?>
<span> 支持文件格式：doc,txt <a href=""><i>例子下载>></i></a></span>
</div>
<div class="u_jzzl_sxcl_cont_1">网站栏目结构
<input name="post[lm]" id="fileurl3" type="text" size="50" value="<?php echo $fileurl3;?>"/><?php if($MG['upload'] && check_group($_groupid, $MOD['group_upload'])) { ?>&nbsp;&nbsp;<b onclick="Dfile(<?php echo $moduleid;?>, Dd('fileurl3').value, 'fileurl3', 'doc|rar|zip|docx|wps');">选择文件</b><?php } ?>
 
<span>支持文件格式：DOC,RAR,ZIP <a href=""><i>例子下载>></i></a></span>
</div>
<div class="u_jzzl_sxcl_cont_1">网站主题图片及广告语
<input name="post[ad]" id="fileurl5" type="text" size="50" value="<?php echo $fileurl5;?>"/><?php if($MG['upload'] && check_group($_groupid, $MOD['group_upload'])) { ?>&nbsp;&nbsp;<b onclick="Dfile(<?php echo $moduleid;?>, Dd('fileurl5').value, 'fileurl5', 'rar|zip|doc|docx|wps');" >选择文件</b><?php } ?>
<span> 支持文件格式：rar,zip,图片和文字打包 <a href=""><i>例子下载>></i></a></span>
</div>

</div>
</div>
<!-- 提醒信息 -->
<div class="u_jzzl_tqxx">
<i>注：网站信息请详细填写，此步骤非常重要，信息填写后，设计师将在5日内出具首页效果，以供选择。以上信息中必填项必须填写。</i>
</div>
<!-- 提交按钮 -->
<div class="u_jzzl_btn">
<span><input type="submit" value="保存" name="submit" class="u_btn_bc"></span>
<span><input type="reset" value="清空" name="res" class="u_btn_qk"></span>
</div>
</div>
</div></div>
       </form>
     
     
     </div>
<div class="js_product"></div>
<div class="js_product"></div>
<div class="js_product"></div>
<div class="js_product"></div>
     
    </div>
  </div>
<!-- 建站资料选项卡 结束-->
</div>
<script>
function check(){
    var language_all = [];
      var x=document.getElementsByName("dlang");
    for (var i=0;i<x.length;i++)
    {
    if(x[i].checked==true){
    language_all.push(x[i].value);
         }
     }
    
   
    if(language_all.length<1){
    Maya.MessageBox("至少需要选择一个 <strong>默认域名着落页面</strong> ");
    return false;
    }
    var webwidth = [];
    var y=document.getElementsByName("webwd");
    for (var i=0;i<y.length;i++)
    {
    if(y[i].checked==true){
    webwidth.push(y[i].value);
         }
     }
    
   
    if(webwidth.length<1){
    Maya.MessageBox("至少需要选择一个 <strong>网站宽度</strong> ");
    return false;
    }
 
    var webck = [];
    var y=document.getElementsByName("post[read_kj]");
    for (var i=0;i<y.length;i++)
    {
    if(y[i].checked==true){
    webck.push(y[i].value);
         }
     }
    
   
    if(webck.length<1){
    Maya.MessageBox("至少需要选择一个 <strong>参考框架</strong> ");
    return false;
    }
          f=$("#fileurl1").val();
          if(f==''){
      Maya.MessageBox("必须上传<strong>公司LOGO图片</strong> ");
      return false;
            }
          f=$("#fileurl2").val();
          if(f==''){
      Maya.MessageBox("必须上传<strong>公司介绍联系方式文档</strong> ");
      return false;
            }
          f=$("#fileurl3").val();
          if(f==''){
      Maya.MessageBox("必须上传<strong> 网站栏目结构 </strong> ");
      return false;
            }
  f=$("#fileurl5").val();
          if(f==''){
      Maya.MessageBox("必须上传<strong>  网站主题图片及广告语 </strong> ");
      return false;
            }
          
    
}
</script>
<!-- 建站资料结束 -->
<?php include template('footer');?>