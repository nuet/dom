<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
 <script  src="<?php echo $CFG['url'];?>/file/script/Maya.MessageBox/Maya.MessageBox.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $CFG['url'];?>/file/script/Maya.MessageBox/Maya.MessageBox.css">
<form action="?f" method="post" id="order_form" name="order_form">
<div class="oyw_content_ddy">
    <div class="oyw_Show_ddy mt12 clearfix">
    
        <div class="oyw_Show_ddy_form">
        <div class="oyw_Show_ddy_form_top"><span><ul><li>·您的位置：</li><li>首页 </li>><li> <a href="">商城 > </a></li><li><a href="">提交订单</a></li></ul></span></div>
        
        <!--欧意订单表单填写第一排-->
        <div class="clear"></div>
        <div class="oyw_Show_ddy_form_one">
            <!--欧意订单表单填写左面-->
            <div class="oyw_Show_ddy_form_left oy_floatlf">
            <div class="oyw_Show_ddy_form_left_tc">
                <div class="oyw_Show_ddy_form_left_tc_img">
                    <img src="<?php echo DT_SKIN;?>/image/oy_queren_info.gif">
                    </div>
                    <div class="oyw_Show_ddy_form_left_tc_info">
                      <div class="oyw_Show_ddy_form_left_tc_info1">
                      <div class="oyw_Show_ddy_form_left_tc_info_1 oy_floatlf mgtp10"><b>您选择的套餐：</b></div>
                        <div class="oyw_Show_ddy_form_left_tc_info_2 oy_floatlf mgtp10"><div style="height:30px;"><?php echo $item['title'];?><br/></div>
                        
                        </div>
                        </div>
                      <div class="oyw_Show_ddy_tcnr clear">
                        <div class="oyw_Show_ddy_form_left_tc_info_1 oy_floatlf "><b>套餐内容:</b></div>
                        <div class="oyw_Show_ddy_form_left_tc_info_2 oy_floatlf ">
                        <?php echo $item['content'];?>
                        </div>
                      </div>
                    </div>
                
                </div>
               
                <!-- 支付方式 -->
                <div class="oyw_Show_ddy_form_left_zf mgtp10">
                <div class="oyw_Show_ddy_form_left_zf_img">
                    <img src="<?php echo DT_SKIN;?>/image/oy_is_fapiao_2.gif">
                    </div>
                    <div class="oyw_Show_ddy_form_left_zf_info">
                    <div class="oyw_Show_ddy_form_left_zf_info_1">支付方式：
                          <span>         
                              <input type="radio" name="playxz" value="0" onclick="fk('0')" checked/>一次性付款&nbsp;
               
                          </span>
                      </div>
                      <div class="oyw_Show_ddy_form_left_zf_info_2">发表申请：
                          <span>         
                              <input type="radio" name="fapiaosq" value="1" onclick="bill('1')"checked/>需要发票&nbsp;&nbsp;&nbsp;&nbsp;
                              <input type="radio" name="fapiaosq" value="0" onclick="bill('0')"/>不需要发票（套餐价即减8%的税额）
                          </span>
                      </div>
                     
                      <div class="oy_fp_sm">注：申请发票客户，一次性付款后即可开具发票，阶段性付款则需付清所有款项再一次性开具发票</div>
                    </div>
                </div>
               
            </div>
            <!--欧意订单表单填写右面-->
             <div class="oyw_Show_ddy_form_right oy_floatlf">
                <div class="oyw_Show_ddy_form_right_x">
                  <div class="oyw_Show_ddy_form_right_x_t">
                    <span>您所购买的套餐的价格</span>
                  </div>
                  <div class="oyw_Show_ddy_form_right_x_t2">
                    <span>套餐原价：<b><?php echo $item['price'];?></b>元<small>（默认含税）</small></span>
                  </div>
                  <div class="oyw_Show_ddy_form_right_x_t3">
                    <div class="pdtp10"><span><strong>实际付款:</strong><b id="total_amount"><?php echo $item['price'];?></b>元</span></div>
                    
                        <div class="oyw_Show_ddy_form_right_x_t3_1 oy_floatlf pdlf20"><strong>包含:</strong></div>
                        <div class="oyw_Show_ddy_form_right_x_t3_2 oy_floatlf">
                          <ul>
                              <li>首付款<span id="pay_1">0</span>&nbsp;&nbsp;元</li>
                              <li>首页确认款<span id="pay_2">0</span>&nbsp;&nbsp;元</li>
                              <li>余额<span><?php echo $_money;?></span>&nbsp;&nbsp;元</li>
                              <li>含税<span id="pay_3">0</span>&nbsp;&nbsp;元</li>
                          </ul>
                        </div>
                    
                  </div>
                </div>
            </div>
        </div>
         <!--欧意订单表单填写确认客户信息-->
       <div class="oyw_Show_ddy_form_two clear">
        <div class="oyw_Show_ddy_form_two_img"><img src="<?php echo DT_SKIN;?>/image/oy_is_kehuinfo_3.gif"></div>
          <div class="oyw_Show_ddy_form_two_bg">
           <div class="pdtp10">
              <input type="hidden" id="fp_yz" name="fp_yz" value="1" />
              <input type="hidden" id="price" name="price" value="<?php echo $item['price'];?>" />
                  <input type="hidden" id="itemid" name="itemid" value="<?php echo $item['itemid'];?>" />
                    <input type="hidden" name="order_yz" value="1"/>
            </div>
          
            <div class="pdtp10">
              <div class="qrkh_info oy_floatlf">公司或网站名称：</div><div><input class="inputTextbk" type="text" size="55" name="post[name]" id="name" value="<?php echo $user['name'];?>" /><span id="dname" class="f_red"></div>
            </div>
            <div class="pdtp10">
                <div class="qrkh_info oy_floatlf">行    业：</div><div>
                <select name='post[hy_sort]'  classs="select_o mgtp10" >
              
  <?php if(is_array($sorts)) { foreach($sorts as $i => $r) { ?>
  <option value='<?php echo $i;?>' <?php if($i==$user['hy_sort']) { ?> selected <?php } ?>
><?php echo $r;?></option>
    <?php } } ?>
 
                  </select>
                </div>
            </div>
      
           
            <div class="pdtp10">
            <div class="qrkh_info oy_floatlf">地    区：</div><div>
              <?php echo ajax_area_select('add[areaid]', '请选择', $user['areaid']);?> <input type="text" size="50" style='width:233px;' name="post[address]" id="address" value="<?php echo $user['address'];?>"/> <span id="daddress" class="f_red"></span>
            </div>
            </div>
            <div class="pdtp10">
                <div class="qrkh_info oy_floatlf">公司电话：</div><div><input class="inputTextbk" type="text" size="55" name="post[telephone]" id="telephone" value="<?php echo $user['telephone'];?>" /> <span id="dtelephone" class="f_red"></span></div>
            </div>
            <div class="pdtp10">
                <div class="qrkh_info oy_floatlf">联系人：</div><div><input class="inputTextbk" type="text" size="55" name="post[truename]"  id="truename" value="<?php echo $user['truename'];?>" /> <span id="dtruename" class="f_red"></span></div>
            </div>
            <div class="pdtp10">
                <div class="qrkh_info oy_floatlf">联系方式:</div><div><input class="inputTextbk" type="text" size="55" name="post[mobile]" id="mobile"  value="<?php echo $user['mobile'];?>" /> <span id="dmobile" class="f_red"></span></div>
            </div>
             
          </div>
          <div> <div class="oyw_Show_ddy_form_left_zf_info_3">订单完成后是否允许在案例区展示：
                 <span>         
                    <input type="radio" name="allow" value="1" checked/>允许&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="allow" value="0" />不允许
                   </span><div class="oy_fp_sm1">注：建议允许，让更多的客户了解您；选择不允许则在最终生成订单时费用会增加200元。</div>
                  </div>
            </div>
       </div>
         <!--欧意订单表单填写客户备注信息-->
       
        <!--提交区域-->
        <div class="oy_tj clear">
          <div class="oy_tj_l">
             <p> <a href="#" id="butt" onclick="check('butt');"><img src="<?php echo DT_SKIN;?>/image/oy_tijiao_dd.gif" ></a>
            </p>
            
          </div><div class="clear">
          <div class="oy_tj_l oy_floatlf"><p>提交订单卖家确认后，支付费用</p></div>
          </div>
        </div>
        
    </div>
    </div>
</div>
</form>
<!--欧意订单页面内容结束-->
<?php echo load('guest.js');?>
<script type="text/javascript">
function check(m) {
var l;
var f;
f = 'name';
l = Dd(f).value.length;
if(l < 2) {
Dmsg('请填写公司名称', f);
return false;
}
f = 'address';
l = Dd(f).value.length;
if(l < 2) {
Dmsg('请填写街道地址', f);
return false;
}
f = 'truename';
l = Dd(f).value.length;
if(l < 2) {
Dmsg('请填写联系人', f);
return false;
}
f = 'mobile';
l = Dd(f).value.length;
if(l < 11) {
Dmsg('请填写手机号码', f);
return false;
}
//$("#order_form").submit();
 if (confirm("您确认填写信息无误，提交此订单吗？")) {
var tb_pathToImage = "/skin/default/image/jdt.gif";  
   imgLoader = new Image(); //  image对象  
    imgLoader.src = tb_pathToImage;  
    $("body").append("<div id='Image_load'><img src='" + imgLoader.src + "' /></div>"); //page中增加Img  
    $('#Image_load').show(); //show loader  
$("#foot_za").css("display","block");  
$("#foot_za").css("display","block");
 var params=$('#order_form').serialize(); 
$('#'+m+'').parent().html("<a href='#' id='butt' ><img src='<?php echo DT_SKIN;?>/image/oy_tijiao_dd.gif' ></a>");
 $.ajax({
    type: "POST",
    url: "order.php",
    data:params,
    beforeSend: function(){
    Maya.MessageBox("订单创建中......");
    },
    success: function(msg){
    if(msg == "success"){
        Maya.MessageBox("恭喜您，订单创建成功");
    //parent.location.reload();
    self.location='<?php echo $MODULE['2']['linkurl'];?>';
w.close();
freshIframe();       
    }else {
    Maya.MessageBox("很遗憾，订单创建失败");
    }
    }
});
 } else{
return false;
}


}
</script>
<script>
$(function(){
$("#pay_3").text((<?php echo $item['price'];?>*0.08).toFixed(2));

})
function fk(i){
if(i==0){
$("#pay_1").text(0);
$("#pay_2").text(0);

}else{
var pay_1 =$("#total_amount")[0].firstChild.data*0.5;
var pay_2 =$("#total_amount")[0].firstChild.data*0.3;
$("#pay_1").text(pay_1.toFixed(2));
$("#pay_2").text(pay_2.toFixed(2));
}
}
function alter(i, t) {
mount=<?php echo $item['price'];?>;
if(t == 'mob1') {
 var mob_price=i;
} else if(t == 'mob2'){
 var mob_price=i;
}else{
      var mob_price=i;
}
  mount=parseFloat(mob_price)+ parseFloat(mount);
var fapiao=$("input[name='fapiaosq']:checked").val();
if(fapiao=='0'){
mount=mount*0.92;
$("#pay_3").text(0);
}else{
$("#pay_3").text((mount*0.08).toFixed(2));
}
  $('#total_amount')[0].innerHTML =mount ;
  $("#price").val(mount);
  check('t');
  var style=$("input[name='playxz']:checked").val();
  if(style=='0'){
  fk('0');
  }else{
  fk('1');
  }
 
}
function bill(i) {
var count=$('#total_amount')[0].innerHTML;
var mob=$("input[name='iswap']:checked").val();
var fapiao=$("input[name='fapiaosq']:checked").val();
if($("#fp_yz").val()==i){
return false;
}else{
if(mob=='noswap'){
if(i==1){
count=<?php echo $item['price'];?>;
  $("#pay_3").text((count*0.08).toFixed(2));
}else{
count=<?php echo $item['price'];?>*0.92;
$("#pay_3").text(0);
}
 }else if(mob=='mob1'){
  if(i==1){
  count=count/0.92;
  $("#pay_3").text((count*0.08).toFixed(2));
  }else{
  count=count*0.92;
$("#pay_3").text(0);
  }
}else{
 if(i==1){
  count=count/0.92;
  $("#pay_3").text((count*0.08).toFixed(2));
  }else{
  count=count*0.92;
$("#pay_3").text(0);
  }
}

$('#total_amount')[0].innerHTML =count.toFixed(2) ; 
$("#price").val(count.toFixed(2));
}
$("#fp_yz").val(fapiao);
var style=$("input[name='playxz']:checked").val();
if(style=='0'){
  fk('0');
}else{
  fk('1');
}
}
  </script>
<?php include template('footer');?>