<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header_mb');?>
<style>
#zoomer {
width: 140px;
height: 140px;
background: #FFFFF;
position: absolute;
opacity: 0.5;
filter: alpha(opacity=50);
}
#big_div {
width: 140px;
height: 140px;
border: #CCCCCC 1px solid;
background: #FFFFFF;
position: absolute;
overflow: hidden;
}
#big_pic{
width: 140px;
height: 140px;
}
#mid_pic{
width:66px;
    height:66px;
}
.M_Y_XQ_rt_TCLX .MYXyuming{
  width: 100px;
}  
</style>
<div class="M_Y_Cont">
  <div class="M_Y_ContNav">
    <a href="<?php echo $CFG['url'];?>" class="M_Y_ContNav_Ind">首页</a> >
    <a href="<?php echo $CFG['url'];?>group/index.php">摩恩网络网站建设平台</a> >
    <a href="<?php echo $CFG['url'];?>group/list.php?catid=<?php echo $CAT['parentid'];?>"><?php echo $CAT_PS['catname'];?></a> >
    <a href=""><?php echo $item['title'];?></a> 
  </div>
  <div class="M_Y_ContT">
    <!-- z展示图片右边 -->
    <div class="M_Y_ContT_l">
        <div class="M_Y_ContT_lImg">
          <img src="<?php echo $item['thumb'];?>" alt="" class="testimg">
       
        </div>
        <div class="M_Y_ContT_lShare">
          <div class="M_Y_ContT_lShare_s">
            <a href="javascript:SendPage();">[告诉好友]</a> &nbsp;或分享到：
 
          </div>
          <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_t163" data-cmd="t163" title="分享到网易微博"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
        </div>
    </div>
    <!-- 套餐选择左边 -->
    <div class="M_Y_ContT_r">
        <div class="M_Y_ContT_rTitle">
          <p>模版编号：<i id="title"><?php echo $item['title'];?></i></p>
        </div>
        <div class="M_Y_ContT_r2">
            <div class="M_Y_ContT_r2_l">
              <span class="M_Y_ContT_r2_lJG">总价：<i>￥<b id="monut_price"><?php echo $item['price'];?></b>元</i></span>
              <span>
                <p>
               <?php echo $item['introduce'];?>
                </p>
              </span>
            </div>
            <!-- 套餐提示 -->
            <!-- 套餐提示 end-->
            <div class="M_Y_ContT_r2_rBox">
            <div class="M_Y_ContT_r2_r">
                <div class="M_Y_ContT_r2_rV"></div>
                <div class="M_Y_ContT_r2_rK">
                  <span><i class="M_Y_s"></i><p>购买即送在线客服系统</p></span>
                  <span><i class="M_Y_h"></i><p>三年购买更优惠</p></span>
                  <span><i class="M_Y_j"></i><p>增加移动网站，直减优惠</p></span>
                  <span><i class="M_Y_j"></i><p>增加多个语言，直减优惠</p></span>
                </div>
            </div>
            </div>
            <!-- 套餐提示 end-->
        </div>
        <!-- 套餐选择表单 -->
            <form action="buyer.php" method="post" id="order_form" name="order_form">
            <input type="hidden" name="order_yz" id="order_yz" value="1"/>
            
        <div class="M_Y_ContT_rXZ clear"> 
  
        <!-- 套餐 -->
          <div class="M_Y_ContT_rXZTC">
          <ul>
            <li class="clearfix" style="padding:0 5px;">
               <?php if($s1) { ?>
               <div class="mb_xz">
                <font style="width:54px; float:left; height:28px; padding-bottom:1px; line-height:28px; font-weight:normal; color:#585858; ">套  &nbsp;餐：</font>
            <div class="M_Ycatt" id="tc">
            <?php if(is_array($s1)) { foreach($s1 as $i => $v) { ?>
                <a onclick="changeAtt(this,'<?php echo $v['0'];?>')" href="javascript:;" name="tc" title="<?php echo $v['0'];?>" id="<?php echo $v['1'];?>" onmouseover="javascript:show_tips(1, <?php echo $v['1'];?>);" onmouseout="javascript:show_tips(0, <?php echo $v['1'];?>);" style="position:relative; z-index:98"  <?php if($i==1) { ?> class="cattsel"  <?php } ?>
>
                  <div id="tc_<?php echo $v['1'];?>" class="showattr" style="display: none; left: 57px; top: 30px;"><?php echo $v['2'];?></div>
                  <?php echo $v['0'];?><input style="display:none" id="spec_tc_<?php echo $i;?>" type="radio" name="spec_tc" value="<?php echo $v['1'];?>" /></a>
            <?php } } ?>
                 
           </div></div>
           <?php } ?>
          <div style="height:0px; line-height:0px; width:100%; clear:both;"></div>
           <?php if($s2) { ?>
            <div class="mb_xz">
               <font style="width:54px; float:left; height:28px; padding-bottom:1px; line-height:28px; font-weight:normal; color:#585858; "> 移动版：</font>
              <div class="M_Ycatt" id="mob">    
              <?php if(is_array($s2)) { foreach($s2 as $i => $v) { ?>
                   <a onclick="changeAtt(this,'<?php echo $v['0'];?>')" href="javascript:;" name="mob"  title="<?php echo $v['0'];?>" id="asd_<?php echo $i;?>" onmouseover="javascript:show_tips1(1, <?php echo $i;?>);" onmouseout="javascript:show_tips1(0,<?php echo $i;?>);" style="position:relative; z-index:90" <?php if($i==0) { ?> class="cattsel" <?php } ?>
>
                 <div id="mob_<?php echo $i;?>" class="showattr" style="display: none; left: 57px; top: 30px;"><?php echo $v['2'];?></div>
                   <?php echo $v['0'];?><input style="display:none" id="spec_mob_<?php echo $i;?>" type="radio" name="spec_mob" value="<?php echo $v['1'];?>"></a>
       
              <input type="hidden" name="spec_list" value="4">
                 <?php } } ?>
                  </div></div>
           <?php } ?>
          <div style="height:0px; line-height:0px; clear:both;"></div>
          <?php if($s3) { ?>    <div class="mb_xz">
           <font style="width:54px; float:left; height:28px; padding-bottom:1px; line-height:28px; font-weight:normal; color:#585858; "> 机  &nbsp;房：</font>
          <div class="M_Ycatt">
             <?php if(is_array($s3)) { foreach($s3 as $i => $v) { ?>
              <a onclick="changeAtt(this,'<?php echo $v['0'];?>')" href="javascript:;" name="jf"  title="<?php echo $v['0'];?>" id="asdm_<?php echo $i;?>" onmouseover="javascript:show_tips2(1, <?php echo $i;?>);" onmouseout="javascript:show_tips2(0,<?php echo $i;?>);" style="position:relative; z-index:88" <?php if($i==0) { ?> class="cattsel" <?php } ?>
>
                 <div id="jifang_<?php echo $i;?>" class="showattr" style="display: none; left: 57px; top: 30px;"><?php echo $v['2'];?></div>
                   <?php echo $v['0'];?><input style="display:none" id="spec_jf_<?php echo $i;?>" type="radio" name="spec_jf" value="<?php echo $v['1'];?>"></a>
       
              <input type="hidden" name="spec_list" value="4">
          <?php } } ?>
               
          </div></div>
          <?php } ?>
           <div style="height:0px; line-height:0px; clear:both;"></div>
          <?php if($s4) { ?>    <div class="mb_xz">
           <font style="width:54px; float:left; height:28px; padding-bottom:1px; line-height:28px; font-weight:normal; color:#585858; "> 年  &nbsp;限：</font>
          <div class="M_Ycatt" id="year">
             <?php if(is_array($s4)) { foreach($s4 as $i => $v) { ?>
              <a onclick="changeAtt(this,'<?php echo $v['0'];?>')" href="javascript:;" name="year"  title="<?php echo $v['0'];?>" id="<?php echo $i;?>"  style="position:relative; z-index:85"<?php if($i==1) { ?> class="cattsel" <?php } ?>
 >
                   <?php echo $v['0'];?><input style="display:none" id="spec_year_<?php echo $i;?>" type="radio" name="spec_year" value="<?php echo $v['1'];?>"></a>
           
          <?php } } ?>
               
          </div></div>
          <?php } ?>
          <div style="height:0px; line-height:0px; clear:both;"></div>
      <div class="mb_xz2">
           <font style="width:54px; float:left; height:15px; padding-bottom:1px; line-height:15px; font-weight:normal; color:#585858; "> 语  &nbsp;种：</font>
          <div id="language_c">
              <div class="M_Ycatt_lagu">
                <ul>
                    <li><input type="checkbox" name="language" id="language0" value="简体中文" checked="">中文简体&nbsp;&nbsp;&nbsp; </li>
                    <li><input type="checkbox" name="language"  id="language1" value="繁体中文" >中文繁体&nbsp;&nbsp;&nbsp; </li>
                    <li><input type="checkbox" name="language"  id="language2" value="英文" >英文版本 &nbsp;&nbsp;&nbsp;</li>
                    <li><input type="checkbox" name="language" id="language3" value="日文">日文版本&nbsp;&nbsp;&nbsp;</li>
                    <li><input type="checkbox" name="language" id="language4" value="俄文" >俄文版本&nbsp;&nbsp;&nbsp; </li>
                  <input type="hidden" id="tc" name="tc" value="<?php echo $s1['1']['1'];?>" disabled/>
                 <input type="hidden" id="rand" name="rand" value="<?php echo $rand;?>"/>
                  <input type="hidden" name="itemid"value="<?php echo $item['itemid'];?>"/> 
                   <input type="hidden" id="mob" name="mob" value="<?php echo $s2['0']['1'];?>"disabled/>
                   <input type="hidden" id="jf" name="jf"value="<?php echo $s3['0']['1'];?>"disabled/>
                   <input type="hidden" id="year" name="year"value="<?php echo $s4['1']['1'];?>"disabled/>
                     <input type="hidden" id="mb_price" name="mb_price"value="<?php echo $price;?>" disabled/>
                       <input type="hidden" id="language_style" name="language_style"value="1" disabled/>
                         <input type="hidden" id="yz" name="yz"value="0" disabled/>
                  <li>
                </ul>
              </div>
          </div>
          </div>
        </li>
      
      </ul>    
       
    </div>
      
        <!-- 订购与浏览 -->
          <div class="M_Y_ContT_rDing">
           <a href="<?php echo $MOD['linkurl'];?>view.php?itemid=<?php echo $itemid;?>" target="_blank" class="M_Y_LY"> 浏览演示</a>
            <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('buy.php?itemid='.$itemid.'&rand='.base64_encode($rand));?>" class="M_Y_DG"> 立即订购</a>
          <a href="#"  onclick="gz()"class="M_Y_JSC">加收藏</a>
          </div>
          <!-- 订购与浏览 end-->
  
      </div>
          
  </div>
        <!-- 套餐选择表单 end--></form>
    </div>
  </div>
  <!-- 同色系模版和详情介绍 -->
  <div class="M_Y_XQ clear">
    <!-- 同色系模版展示 -->
    <div class="M_Y_XQ_lf">
      <!--同色系模版  -->
      <div class="M_Y_XQ_lf_cont">
      <div class="M_Y_XQ_lf_t">同色系模版</div>
      <?php if(is_array($type_groups)) { foreach($type_groups as $i => $k) { ?>
        <ul class="clearfix ">
            <li class="goodsimg1">
              <a href="<?php echo $CFG['url'];?>/group/show.php?itemid=<?php echo $k['itemid'];?>" title="">
                <img src="<?php echo $k['thumb'];?>" alt="" class="B_blue" style="display: inline;">
              </a>
            </li>
            <li class="hisname"><a href="<?php echo $CFG['url'];?>/group/show.php?itemid=<?php echo $k['itemid'];?>"  title=""><?php echo $k['title'];?></a><br>
            本店售价：
            <font class="yen red">￥<?php echo $k['price'];?>元</font><br>
            </li>
        </ul>
        <?php } } ?>
       
      
      </div>
      <!--同色系模版  end-->
      <!-- 浏览记录 -->
      <div class="M_Y_XQ_lf_cont">
      <div class="M_Y_XQ_lf_t">同行业模版</div>
      <?php if(is_array($type_cats)) { foreach($type_cats as $i => $k) { ?>
        <ul class="clearfix ">
            <li class="goodsimg1">
              <a href="<?php echo $CFG['url'];?>/group/show.php?itemid=<?php echo $k['itemid'];?>" title="">
                <img src="<?php echo $k['thumb'];?>" alt="" class="B_blue" style="display: inline;">
              </a>
            </li>
            <li class="hisname"><a href="<?php echo $CFG['url'];?>/group/show.php?itemid=<?php echo $k['itemid'];?>"  title=""><?php echo $k['title'];?></a><br>
            本店售价：
            <font class="yen red"><?php echo $k['price'];?></font><br>
            </li>
        </ul>
        <?php } } ?>
       
      </div>
      <!-- 浏览记录 end -->
    </div>
    <!-- 同色系模版展示 end -->
    <!-- 模版内容详细介绍 -->
    <div class="M_Y_XQ_rt">
      <div class="M_Y_XQ_rt_title" id="M_Y_XQ_rt_title">
          <ul>
            <li><a href="#M_Y_XQ_rt_FUJS" class="MCon">服务介绍</a></li>
            <li><a href="#M_Y_XQ_rt_ZZFW">增值服务</a></li>
            <li><a href="#M_Y_XQ_rt_XGGN">选购功能</a></li>
            <li><a href="#M_Y_XQ_rt_CJWT">常见问题</a></li>
          </ul>
      </div>
      <div class="M_Y_XQ_rt_cont">
          <!-- 详情属性 -->
          <div class="M_Y_XQ_rt_cont_Attr">
              <div class="M_Y_XQ_rt_cont_Attr_lf">
                <table>
                  <tr>
                    <td>行业：</td>
                    <td><?php echo $CAT['catname'];?></td>
                  </tr>
                  <tr>
                    <td>色系：</td>
                    <td><?php echo $colors_alls[$item['color']];?></td>
                  </tr>
                </table>
              </div>
              <div class="M_Y_XQ_rt_cont_Attr_rt">
                  <table>
                  <tr>
                    <td>手机演示地址：</td>
                  <?php if($item['ewm']!="") { ?>
                    <td><div onmouseover="SAlbum();" onmouseout="HAlbum();" onclick="PAlbum(Dd('mid_pic'));"><img src="<?php echo $item['ewm'];?>" alt="" id="mid_pic" ></div><span id="zoomer"></span></td>
                    <td valign="top">
<div id="big_div" style="display:none;"><img src="" id="big_pic"/></div>

   </td><?php } else { ?>
    <td>无</td>
   <?php } ?>
                  </tr>
                  
                </table>
              </div>
          </div>
          <!-- 详情属性 end -->
         
          <!-- 服务介绍 -->
        <?php echo $CAT_P['content1'];?>
          <!-- 服务介绍 end -->
          <!-- 增值服务 -->
          <div class="M_Y_XQ_rt_ZZFW" id="M_Y_XQ_rt_ZZFW">
            <div class="M_Y_XQ_rt_ZZFW_T">
                <span>增值服务<i>Value-added services</i></span>
            </div>
             <?php echo $CAT_P['content2'];?>
          </div>
          <!-- 增值服务 end -->
          <!-- 选购功能 -->
          <div class="M_Y_XQ_rt_ZZFW" id="M_Y_XQ_rt_XGGN">
            <div class="M_Y_XQ_rt_ZZFW_T">
                <span>选购功能<i>Optional features</i></span>
            </div>
             <?php echo $CAT_P['content3'];?>
          </div>
          <!-- 选购功能 end -->
          <!-- 常见问题 -->
          <div class="M_Y_XQ_rt_ZZFW" id="M_Y_XQ_rt_CJWT">
            <div class="M_Y_XQ_rt_ZZFW_T">
                <span>常见问题<i>FAQs</i></span>
            </div>
              <?php echo $CAT_P['content4'];?>
          </div>
          <!-- 常见问题 end -->
      </div>
    </div>
    <!-- 模版内容详细介绍 end -->
  </div>
  <!-- 同色系模版和详情介绍 end -->
</div>
<script>
function gz(){
new Maya.Box({
text : "模版收藏",
url : "<?php echo $CFG['url'];?>/group/gz.php?itemid=<?php echo $itemid;?>",
width :330,
height : 150,
iframeAuto: false,
        iframeScroll: false,
});
}
</script>
<!-- 黄色模版内容页面 end -->
<script>
$(function(){
var p=$('#monut_price').text();
 rand=$('#rand').val();
    price_rand='price_'+rand+'';
    language_rand='language_'+rand+'';
  
setCookie("price_"+rand+"",p);
setCookie("language_"+rand+"",'简体中文');
   
 $("input[name='language']").click(function(){


      var language_all = [];
      var x=document.getElementsByName("language");
    for (var i=0;i<x.length;i++)
    {
    if(x[i].checked==true){
    language_all.push(x[i].value);
         }
    }
    money=0;
    var l_style =language_all.join(",");
 var sss=  $("#language_style").val();
    var yz= $("#yz").val();
   
    if(language_all.length<1){
        alert('至少需要选择一个');
        return false;
        }else if(sss>=language_all.length && yz==1){
     if(language_all[0]=='简体中文' || language_all[0]=='繁体中文' ){   
    money=parseFloat(money)-parseFloat(500)*(sss-language_all.length);
    }else if(language_all[0]=='英文' || language_all[0]=='日文' || language_all[0]=='俄文' ){
        money=parseFloat(money)-parseFloat(500)*(sss-language_all.length);
    }
    
        var l_style =language_all.join(",");
       setCookie("language_"+rand+"",l_style);
   
              $("#language_style").val(language_all.length);      
        language_money=parseFloat(money);
        $("#yz").val(1);
        changePrice(language_money);
      
        }else if(language_all.length>=1){
        
        if(language_all[0]=='简体中文' || language_all[0]=='繁体中文' ){   
    money=parseFloat(money)+parseFloat(500)*(language_all.length-sss);
    }else if(language_all[0]=='英文' || language_all[0]=='日文' || language_all[0]=='俄文' ){
        money=parseFloat(money)+parseFloat(500)*(language_all.length-sss);
    }
  
        var l_style =language_all.join(",");
       setCookie("language_"+rand+"",l_style);
   
  $("#language_style").val(language_all.length);  
        language_money=parseFloat(money);
        $("#yz").val(1);
       
             changePrice(language_money);
      
       
    
    }
  
  
 
})

})
</script>-
<script>
  /* 代码增加_start  By  www.onooo.com */
function show_tips(isshow, id)
{
  if(isshow==1)
  {
    document.getElementById("tc_"+id).style.display = 'block';
  }
  else
  {
    document.getElementById("tc_"+id).style.display = 'none';
  }
  var myWidth1=document.getElementById(id).offsetWidth;
  var myWidth2=document.getElementById("tc_" + id).offsetWidth;
  var www= (myWidth1-myWidth2)/2;
  document.getElementById("tc_"+id).style.left = www+"px";
  document.getElementById("tc_"+id).style.top = "32px";
}
function show_tips1(isshow, id)
{
  if(isshow==1)
  {
    document.getElementById("mob_"+id).style.display = 'block';
  }
  else
  {
    document.getElementById("mob_"+id).style.display = 'none';
  }
  var myWidth1=document.getElementById("asd_" + id).offsetWidth;
  var myWidth2=document.getElementById("mob_" + id).offsetWidth;
  var www= (myWidth1-myWidth2)/2;
  //alert(sss);
  document.getElementById("mob_"+id).style.left = www+"px";
  document.getElementById("mob_"+id).style.top = "32px";
}
function show_tips2(isshow, id)
{
  if(isshow==1)
  {
    document.getElementById("jifang_"+id).style.display = 'block';
  }
  else
  {
    document.getElementById("jifang_"+id).style.display = 'none';
  }
  var myWidth1=document.getElementById("asdm_" + id).offsetWidth;
  var myWidth2=document.getElementById("jifang_" + id).offsetWidth;
  var www= (myWidth1-myWidth2)/2;
  document.getElementById("jifang_"+id).style.left = www+"px";
  document.getElementById("jifang_"+id).style.top = "32px";
}
function changeAtt(t,goods_id) {
 
 s=getCookie(price_rand);
var types=t.lastChild.name;
if(types=='spec_tc'){
var tc_val=t.lastChild.id;
setCookie("tc_value_"+rand+"",tc_val);
var tc_val=getCookie(tc_val);
var year_select=$("#year").children(".cattsel")[0].id;
if(year_select==0){
prices=getCookie("tc_price_0"+rand+"");
if(tc_val==0){
year_select=getCookie("spec_year_0");

price1=0*Number(year_select)+Number(prices);

}else if(tc_val==1){

year_select=getCookie("spec_year_0");
price1=1*Number(year_select)+Number(prices);

}else{

year_select=getCookie("spec_year_0");
price1=2*Number(year_select)+Number(prices);

}

}else if(year_select==1){

    prices=getCookie("tc_price_1"+rand+"");
if(tc_val==0){
year_select=getCookie("spec_year_1");

price1=0*Number(year_select)+Number(prices);
 
}else if(tc_val==1){

year_select=getCookie("spec_year_1");
price1=1*Number(year_select)+Number(prices);

}else{

year_select=getCookie("spec_year_1");
price1=2*Number(year_select)+Number(prices);
  
}
}else{
prices=getCookie("tc_price_2"+rand+"");
if(tc_val==0){
year_select=getCookie("spec_year_2");

 price1=0*Number(year_select)+Number(prices);

}else if(tc_val==1){

year_select=getCookie("spec_year_2");
price1=1*Number(year_select)+Number(prices);
   
}else{

year_select=getCookie("spec_year_2");
price1=2*Number(year_select)+Number(prices);

}
}
var lan_c=$("#language_style").val();
price=price1+500*(lan_c-1);
var mo=getCookie("mob_value_"+rand+"",tc_val);
if(mo=='spec_mob_0'){
price=price;
}else if (mo=='spec_mob_1'){
price=Number(price)+1500;
}else{
price=Number(price)+2500;
}
price=price.toFixed(2);
$('#monut_price').text(price);
setCookie("price_"+rand+"",price);
}
if(types=='spec_jf'){
var tc_val=t.lastChild.id;
setCookie("jf_value_"+rand+"",tc_val);

}
if(types=='spec_mob'){
var mob_val=t.lastChild.id;
setCookie("mob_value_"+rand+"",mob_val);
 mob=$("#mob_yz").val();
var mob_val=getCookie(mob_val);
var mob=getCookie("mob"+rand+"");

if(mob_val == '0') {
 var mob_price=0;
} else if(mob_val == '1500'){
 var mob_price='1500';
}else{
 var mob_price='2500';
}
 setCookie("mob"+rand+"",mob_price);
if(mob==mob_val){
return false;
}else
{
var tc_val=$("#tc").children(".cattsel")[0].id;
var year_select=$("#year").children(".cattsel")[0].id;

if(year_select==0){
prices=getCookie("tc_price_0"+rand+"");
if(tc_val==0){
year_select=getCookie("spec_year_0");

price1=0*Number(year_select)+Number(prices);

}else if(tc_val==1){

year_select=getCookie("spec_year_0");
price1=1*Number(year_select)+Number(prices);

}else{

year_select=getCookie("spec_year_0");
price1=2*Number(year_select)+Number(prices);

}

}else if(year_select==1){

    prices=getCookie("tc_price_1"+rand+"");
if(tc_val==0){
year_select=getCookie("spec_year_1");

price1=0*Number(year_select)+Number(prices);
 
}else if(tc_val==1){

year_select=getCookie("spec_year_1");
price1=1*Number(year_select)+Number(prices);

}else{

year_select=getCookie("spec_year_1");
price1=2*Number(year_select)+Number(prices);
  
}
}else{
prices=getCookie("tc_price_2"+rand+"");
if(tc_val==0){
year_select=getCookie("spec_year_2");

 price1=0*Number(year_select)+Number(prices);

}else if(tc_val==1){

year_select=getCookie("spec_year_2");
price1=1*Number(year_select)+Number(prices);
   
}else{

year_select=getCookie("spec_year_2");
price1=2*Number(year_select)+Number(prices);

}
}
var lan_c=$("#language_style").val();
price=price1+500*(lan_c-1);
var mo=getCookie("mob_value_"+rand+"",tc_val);
if(mo=='spec_mob_0'){
price=price;
}else if (mo=='spec_mob_1'){
price=Number(price)+1500;
}else{
price=Number(price)+2500;
}
price=price.toFixed(2);
$('#monut_price').text(price);
setCookie("price_"+rand+"",price);
   
   }
}
if(types=='spec_year'){
var year_val=t.lastChild.id;
setCookie("year_value_"+rand+"",year_val);
var year_val=getCookie(year_val);
var year=getCookie("year"+rand+"");
var tc_select=$("#tc").children(".cattsel")[0].id;
if(tc_select==0){
if(year_val==300){
  prices=getCookie("tc_price_0"+rand+"");
year_select=getCookie("spec_year_0");

price1=0*Number(year_select)+Number(prices);
}else if(year_val==500){

  prices=getCookie("tc_price_1"+rand+"");
year_select=getCookie("spec_year_1");
price1=0*Number(year_select)+Number(prices);
}else{

 prices=getCookie("tc_price_2"+rand+"");
year_select=getCookie("spec_year_2");

price1=0*Number(year_select)+Number(prices);
  
}
}else if(tc_select==1){

if(year_val==300){
  prices=getCookie("tc_price_0"+rand+"");
year_select=getCookie("spec_year_0");
price1=1*Number(year_select)+Number(prices);
}else if(year_val==500){

  prices=getCookie("tc_price_1"+rand+"");
year_select=getCookie("spec_year_1");
price1=1*Number(year_select)+Number(prices);

}else{

 prices=getCookie("tc_price_2"+rand+"");
year_select=getCookie("spec_year_2");

price1=1*Number(year_select)+Number(prices);
  
}

}else{
if(year_val==300){
  prices=getCookie("tc_price_0"+rand+"");
year_select=getCookie("spec_year_0");
price1=2*Number(year_select)+Number(prices);
}else if(year_val==500){

  prices=getCookie("tc_price_1"+rand+"");
year_select=getCookie("spec_year_1");

price1=2*Number(year_select)+Number(prices);

}else{

 prices=getCookie("tc_price_2"+rand+"");
year_select=getCookie("spec_year_2");

price1=2*Number(year_select)+Number(prices);
  
}

}
var lan_c=$("#language_style").val();
price=price1+500*(lan_c-1);
var mo=getCookie("mob_value_"+rand+"",tc_val);
if(mo=='spec_mob_0'){
price=price;
}else if (mo=='spec_mob_1'){
price=price+1500 ;
}else{
price=price+2500;
}
price=price.toFixed(2);
$('#monut_price').text(price);
setCookie("price_"+rand+"",price);

}
t.lastChild.checked='checked';
for (var i = 0; i<t.parentNode.childNodes.length;i++) {
  if (t.parentNode.childNodes[i].className == 'cattsel') {
    t.parentNode.childNodes[i].className = '';
  }
}
// 
t.className = "cattsel";
}
function changePrice(i){
s=getCookie(price_rand);
s=Number(s)+Number(i);
s=s.toFixed(2);
setCookie("price_"+rand+"",s);
$('#monut_price').text(s);
   
}
/* 代码增加_end  By  www.omooo.com */
</script>
<!-- 选择效果 end -->
<!-- 百度分享share -->
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<!-- 百度分享share end -->
<script>
//写cookies
function setCookie(name,value) 
{ 
 var Days = 30; 
 var exp = new Date(); 
 exp.setTime(exp.getTime() + Days*24*60*60*1000); 
 document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString(); 
}
//读取cookies 
function getCookie(name) 
{ 
 var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
 
 if(arr=document.cookie.match(reg))
 
  return unescape(arr[2]); 
 else 
  return null; 
}
//删除cookies 
function delCookie(name) 
{ 
 var exp = new Date(); 
 exp.setTime(exp.getTime() - 1); 
 var cval=getCookie(name); 
 if(cval!=null) 
  document.cookie= name + "="+cval+";expires="+exp.toGMTString(); 
} 
</script>
<script>
//详情内容导航浮动
$().ready(function(){
//导航距离屏幕顶部距离
var _defautlTop = $("#M_Y_XQ_rt_title").offset().top;//假如网速慢，或者页面较长加载较慢时，不能及时获取_defautlTop的值，导致回到页头时无法归位没找到好的解决方法，我增加了document.ready也不行，于是我就写死了这个值
//导航距离屏幕左侧距离
var _defautlLeft = $("#M_Y_XQ_rt_title").offset().left;
//导航默认样式记录，还原初始样式时候需要
var _position = $("#M_Y_XQ_rt_title").css('position');
var _top = $("#M_Y_XQ_rt_title").css('top');
var _left = $("#M_Y_XQ_rt_title").css('left');
var _zIndex = $("#M_Y_XQ_rt_title").css('z-index');
//鼠标滚动事件
$(window).scroll(function(){
   if($(this).scrollTop() > _defautlTop){
       //IE6不认识position:fixed，单独用position:absolute模拟
       if($.browser.msie && $.browser.version=="6.0"){
           $("#top").css({'position':'absolute','top':eval(document.documentElement.scrollTop),'left':_defautlLeft,'z-index':99999});
           //防止出现抖动
           $("html,body").css({'background-image':'url(about:blank)','background-attachment':'fixed'});
       }else{
           $("#M_Y_XQ_rt_title").css({'position':'fixed','top':0,'left':_defautlLeft,'z-index':99999});
       }
   }else{
       $("#M_Y_XQ_rt_title").css({'position':_position,'top':_top,'left':_left,'z-index':_zIndex});
   }
});
});
</script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/album.js"></script>
<?php include template('footer');?>