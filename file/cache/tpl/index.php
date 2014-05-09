<?php defined('IN_DESTOON') or exit('Access Denied');?><?php $CSS = array('index');?>
<?php include template('header');?>
<script>
$(document).ready(function(){
  $('#anli li').click(function(){
  if(this.id){
 var n=this.id;
  for(t=0;t<=8;t++){
      if (t!=n){
      var m=$("#sjs"+t+"");
      m.html('');
      }else{
      m=$("#sjs"+n+"");
      m.html('');
      i=0;
      loadMore(n);
      }
      
       }
       }
        
  })
loadMore(4); 
}); 
 
var i=0;
function loadMore(n)
{
    $.ajax({
        url : '<?php echo $CFG['url'];?>data1.php?n='+n+'',
        dataType : 'json',
        success : function(json)
        {
  
            if(typeof json == 'object')
            {
            
                var oProduct, $row, iHeight, iTempHeight;
                for(var i=0, l=json.length; i<l; i++)
                {
                    oProduct = json[i];
                     
                    // 找出当前高度最小的列, 新内容添加到该列
                    iHeight = -1;
                   
                    $('#sjs'+n+'').each(function(){
                    
                        iTempHeight = Number( $(this).height() );
                        if(iHeight==-1 || iHeight>iTempHeight)
                        {
                            iHeight = iTempHeight;
                            $row = $(this);
                        }
                    });
                   
                
                  //  $item = $('<li><div class="Index_Anli_zs_img"><a href="<?php echo $CFG['url'];?>mall/search_last.php?itemid='+oProduct.itemid+'" target="_blank"><img src="'+oProduct.thumb+'" alt=""></a><div class="MoBanYello"><span class="Left"> <a href="<?php echo $CFG['url'];?>mall/search_last.php?itemid='+oProduct.itemid+'" target="_blank" title>查看详情</a></span><span class="Right"><a href="'+oProduct.num+'" target="_blank">浏览网站</a></span></div></div><div class="GoSM">名称：'+oProduct.buyer_name+'</div><div class="JzTc">建站套餐：'+oProduct.title+'</div></li>').hide();
        $item = $('<li><a href="#" onclick="javascript:window.location.href=\'<?php echo $CFG['url'];?>mall/search_last.php?itemid='+oProduct.itemid+'\'" ><div class="DingzhiSHowZDIm"><img src="'+oProduct.thumb+'" alt="" class="sy_thumb"><span class="yinBg"></span><div class="yuanS"></div></div></a><p>'+oProduct.buyer_name+'</p></li>').hide();
                  
                    $row.append($item);
                  
                    $('#sjs'+n+' li').hover(function(){
                        
                    $(this).find('a').children('div').children('div').stop().css({'bottom':'55px',"left":"138px"}).animate({'bottom':'55px',"left":"131px"},400).show();
                $(this).find('a').children('div').children('span').show();
                
                },function(){
                $(this).find('a').children('div').children('div').css({'bottom':'0',"right":"0"}).hide();;
                $(this).find('a').children('div').children('span').hide();
                
                });
                    $item.fadeIn();
                }
            }else{
            //Maya.MessageBox("已加载 <strong>全部</strong> ");
            }
        }
    });
}
 
</script>
<script>
//详情内容导航浮动
//黄色模版最新企业站模版切换
$(document).ready(function(){
  $('#mb li').click(function(){

  if(this.id){
  
  var  n=this.id;
  for(t=41;t<=46;t++){
      if (t!=n){
      var m=$("#mb"+t+"");
      m.html('');
      }else{
      m=$("#mb"+n+"");
      m.html('');
      i=0;
      loadMore1(n);
      }
      
       }
   }
        
  })
loadMore1(41); 
}); 
var i=0;
function loadMore1(n)
{
$.ajax({
    url : '<?php echo $CFG['url'];?>data2.php?n='+n+'&level=1',
    dataType : 'json',
    success : function(json)
    {
   
        if(typeof json == 'object')
        {
        
            var oProduct, $row, iHeight, iTempHeight;
            for(var i=0, l=json.length; i<l; i++)
            {
                oProduct = json[i];
                 
                // 找出当前高度最小的列, 新内容添加到该列
                iHeight = -1;
              
                $('#mb'+n+'').each(function(){
                
                    iTempHeight = Number( $(this).height() );
                    if(iHeight==-1 || iHeight>iTempHeight)
                    {
                        iHeight = iTempHeight;
                        $row = $(this);
                    }
                });
            
              $item = $('<li><div class="JpImg"><a href=""><img src="'+oProduct.thumb+'" alt=""></a> <div class="MobanJpalp MobanBlack"><span class="Left"> <a href="<?php echo $CFG['url'];?>group/'+oProduct.linkurl+'" >查看详情</a></span><span class="Right"><a href="'+oProduct.url+'" >浏览网站</a></span></div></div><p class="dashed">名称:'+oProduct.title+'</p><p class="dashed2">行业:'+oProduct.catname+'</p></li>').hide();
              
                //$item = $('<li><div class="Index_Moban_zs_img"><a href="<?php echo $CFG['url'];?>group/show.php?itemid='+oProduct.itemid+'" target="_blank"><img src="'+oProduct.thumb+'"class="pimg" alt=""></a><div class="MoBanBlue"><span class="Left"> <a href="<?php echo $CFG['url'];?>group/'+oProduct.linkurl+'" target="_blank" title>查看详情</a></span><span class="Right"><a href="'+oProduct.url+'" target="_blank">浏览网站</a></span></div></div><div class="GoSM">名称：'+oProduct.title+'</div><div class="JzTc">行业：'+oProduct.catname+'</div></li>').hide();
                $row.append($item);
               
                $('#mb'+n+' li').hover(function(){
                    
                $(this).find('.MobanJpalp').css('display','block');
                },function(){
                $(this).find('.MobanJpalp').css('display','none');
                });
                $item.fadeIn();
            }
        }else{
        //Maya.MessageBox("已加载 <strong>全部</strong> ");
        }
    }
});
}
</script>
<div class="MoBan_yBnabg">
  
    <div class="main_visual">
      <div class="flicking_con">
        <a href="" class="">1</a>
        <a href="" class="">2</a>
        <a href="" class="">3</a>
        <!-- <a href="" class="">4</a> -->
        
      </div>
      <div class="main_image">
        <ul style=" overflow: visible;">
          <li >
            <span class="img_1"></span>
            <div class="NewBannerBoFang">
              <div class="xiaobof">
                <a href="">
                  <span></span>
                </a>
              </div>
            </div>
          </li>
          <li >
            <span class="img_2"></span>
          </li>
          <li >
            <span class="img_3"></span>
          </li>
         <!--  <li >
            <span class="img_4"></span>
          </li> -->
          
        </ul>
        <a href="javascript:;" id="btn_prev" ></a>
        <a href="javascript:;" id="btn_next" ></a>
      </div>
    
  </div>
  <div class="MoBan_yBn_login_box">
      <div class="MoBan_yBn_login">   
      </div>
   <?php if($_username && $_groupid <=5) { ?>
<div class="oyw_tm"><h3 class="clearfix"><span style="font-size:14px;font-family:微软雅黑; padding:0px 0px;;" class="fl"><?php echo $_truename;?> <?php echo $MG['groupname'];?>，您好</span><span  style="padding-top:3px; margin-left:10px;" class="fl">
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($user['vtruename']) { ?>v<?php } else { ?>u<?php } ?>
_truename.gif" style='padding-top: 0px;'width="16" height="16" title="<?php if($user['vtruename']) { ?>已通过<?php } else { ?>未通过<?php } ?>
真实姓名认证" align="absmiddle"/> <a href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/validate.php?action=truename" style='text-decoration: underline;'>实名</a> &nbsp;

</span></h3>
<div class="oyw_user clear">
  <div class="sjs_in_k">
    <div class="sjs_in_k_1">余额:<b><big> <?php echo $_money;?></big></b> 元<small>（锁定:<?php echo $user['locking'];?>元）</small></div>
    
    <div class="sjs_in_k_2">
        <div class="sjs_in_k_2_l oy_floatlf">
          <p><?php echo $count2['count'];?></p>
          <span><a href="<?php echo $MODULE['2']['linkurl'];?>">待付款项目</a></span>
        </div>
        <div class="sjs_in_k_2_b oy_floatlf">
          <p><?php echo $count1['count'];?></p>
          <span><a href="<?php echo $MODULE['2']['linkurl'];?>">待确认项目</a></span>
        </div>
        <div class="sjs_in_k_2_r oy_floatlf">
          <p><?php echo $_credit;?></p>
          <span><a href="<?php echo $MODULE['2']['linkurl'];?>credit.php">积分</a></span>
        </div>
    </div>
  </div>
  <div class="sjs_in_in clear">
    <input type="submit"  onclick="Go('<?php echo $MODULE['2']['linkurl'];?>');" id="J-login-btn" class="ui-button" style="font-size:14px;background:#FF9400;font-family:微软雅黑;" value="进入会员中心" >
  </div>
</div></div>
   
   <?php } else if($_groupid >5) { ?>
       <div class="oyw_tm"><h3 class="clearfix"><span style="font-size:14px;font-family:微软雅黑; padding:0px 0px;;" class="fl"><?php echo $_truename;?> <?php echo $MG['groupname'];?>，您好</span><span  style="padding-top:3px; margin-left:10px;" class="fl">
<img src="<?php if($user['vcompany']) { ?><?php echo $MODULE['2']['linkurl'];?>/image/v_company.gif<?php } else { ?><?php echo $MODULE['2']['linkurl'];?>/image/u_company.gif<?php } ?>
" style='padding-top: 0px;'width="16" height="16" title="<?php if($user['vcompany']) { ?>已通过<?php } else { ?>未通过<?php } ?>
设计师认证" /><?php if($user['vcompany']) { ?><img src="<?php echo DT_SKIN;?>image/vip_<?php echo $user['vip'];?>.gif" style='padding-top: 0px;'/><?php } else { ?> <a href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/validate.php?action=company" style='text-decoration: underline;'>认证</a> &nbsp; <?php } ?>

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
  <div class="sjs_in_in clear">
    <input type="submit"  onclick="Go('<?php echo $MODULE['2']['linkurl'];?>');" id="J-login-btn" class="ui-button" style="font-size:14px;background:#FF9400;font-family:微软雅黑;" value="进入会员中心" >
  </div>
</div></div>
      
      <?php } else { ?>
      <div class="MoBan_yBn_login_tm">
         <form method="post" action="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>" id="Login" name="Login">
<input name="forward" type="hidden" id="forward" value="<?php echo $CFG['url'];?>">
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
      
        <div class="MoBan_yBn_login_tm_5">
        <a href="">新手指南</a>
        <a href="">帮助中心</a>
        <a href="">最新案例</a>
      </div>
      </div>
      <?php } ?>
</div>
<!-- banner end -->
<div class="New_Index_Cont">
<!-- 广告1 -->
  <div class="New_Index_GG1">
 <?php echo ad(24);?>
  </div>
<!-- 广告1 end -->
<!-- 四代套餐 -->
<div class="New_Index_4d">
  <ul>
<li class="zhanshiGreen">
<h2>展示网站建设</h2>
<p class="p1">适用人群：公司刚成立或者需要需要展示企业和产品的客户</p>
<p class="p2">定制特点： 设计师量身定制独特</p>
<p class="p2">首页效果，强大后台智能管理。</p>
<p class="p3">主推套餐：￥<strong>3980</strong> (标准型)</p>
<p class="p4"><a href="<?php echo $CFG['url'];?>mall/list.php?catid=4" class="TC1">了解更多</a></p>
</li>
<li class="PinpaiYello">
<h2 >品牌网站建设</h2>
<p class="p1">适用人群：公司需要突出品牌形象创造新颖时代感觉</p>
<p class="p2">定制特点： 设计师量身定制独特</p>
<p class="p2">首页效果，内页栏目效果，强大后台。</p>
<p class="p3">主推套餐：￥<strong >6980</strong> (标准型)</p>
<p class="p4"><a href="<?php echo $CFG['url'];?>mall/list.php?catid=5" class="TC2">了解更多</a></p>
</li>
<li class="Yingxiaoblue">
<h2 >营销网站建设</h2>
<p class="p1">适用人群：公司推广产品增加流量从而增加企业业绩</p>
<p class="p2">定制特点： 设计师量身定制独特</p>
<p class="p2">营销首页效果，内页效果，强大后台。</p>
<p class="p3">主推套餐：￥<strong >9980</strong> (标准型)</p>
<p class="p4"><a href="<?php echo $CFG['url'];?>mall/list.php?catid=6" class="TC3">了解更多</a></p>
</li>
<li class="last LogoBlue">
<h2>Logo设计 </h2>
<p class="p1">适用人群：公司需要展现企业形象的标志</p>
<p class="p2">定制特点： 设计师量身定制</p>
<p class="p2">多稿选择  突出企业形象</p>
<p class="p3">主推套餐：￥<strong>588</strong> (标准型)</p>
<p class="p4"><a href="#" class="TC4">了解更多</a></p>
</li>
</ul>
</div>
<!-- 四代套餐end -->
<!-- 定制案例 -->
<div class="DingzhiANliZ">
  <div class="DingzhiInAnL_title">
    <span>定制案例展示</span>
      <ul class="DingzhiInAnL_title_list cf Blue_mo" id="anli">
         <li class="on" id="4">展示网站建设</li>
        <li id="5">品牌网站建设</li>
        <li id="6">营销网站建设</li>
        <li id="8">LOGO设计</li>               
      </ul>
      <p><a href="<?php echo $CFG['url'];?>mall/">查看更多</a></p>
    </div>
</div>
<!-- 定制展示 -->
<div class="DingzhiSHowZ">
<!-- 展示网站建设 -->
<div class="DingzhiSHowZOne" style="display:block">
  <ul  id="sjs4">
   
  
    
  </ul>
</div>
<div class="DingzhiSHowZOne">
  <ul  id="sjs5">
     
    
  </ul>
</div>
<div class="DingzhiSHowZOne">
  <ul  id="sjs6">
   
    
  </ul>
</div>
<div class="DingzhiSHowZOne">
  <ul  id="sjs8">
   
    
  </ul>
</div>
<!-- 展示网站建设 end-->
</div>
<!-- 定制展示end -->
<!-- 定制案例 end -->
<!-- 广告二 -->
<div class="New_Index_GG1">
   <?php echo ad(25);?>
  </div>
<!-- 广告二 end -->
<!-- 四大模版首页 -->
<div class="New_Index_4moban">
  <div class="New_Index_4moban1">
    <?php echo ad(23);?>
  </div>
  <div class="New_Index_4moban1">
  <?php echo ad(22);?>
  </div>
  <div class="New_Index_4moban1">
  <?php echo ad(21);?>
  </div>
  <div class="New_Index_4moban1">
   <?php echo ad(20);?>
  </div>
</div>
<!-- 四大模版首页end -->
<!-- 精品模版展示 -->
<div class="JInPinMoban_hh">
  <div class="DingzhiInAnL_title">
    <span>精品模板展示</span>
      <ul class="JIngPINMOban_title_list cf Blue_mo" id="mb">
        <li class="on" id="41">企业形象网站</li>
        <li id="42">商城网站</li>
        <li id="43">全Flash网站</li>
        <li id="44">手机网站</li>                
      </ul>
      <p><a href="<?php echo $CFG['url'];?>group/">查看更多</a></p>
    </div>
</div>
<!-- 显示列表 -->
<div class="JInPinMoban_show">
<!-- 企业 -->
  <div class="JInPinMoban_show_one" style="display:block">
    <ul id="mb41">
    
    
    
    </ul>
  </div>
<!-- 企业 end-->
<!-- 商城 -->
 <div class="JInPinMoban_show_one" >
    <ul id="mb42">
      <li>
        <div class="JpImg">
          <a href="">
            <img src="<?php echo DT_SKIN;?>image/2014-04-28_185703.png" alt="">
          </a>
          <div class="MobanJpalp MobanBlack">
            <span class="Left"> <a href="" >查看详情</a></span>
            <span class="Right"><a href="" >浏览网站</a></span>
          </div>
        </div>
        <p class="dashed">名称:上海监控设备有限公司</p>
        <p class="dashed2">行业:机械,电气</p>
      </li>
      
    
    </ul>
  </div>
  <!-- 商城end -->
  <!-- 全flash -->
   <div class="JInPinMoban_show_one" >
    <ul id="mb43">
     
    
    </ul>
  </div>
  <!-- 全flashe nd -->
  <!-- 手机 -->
   <div class="JInPinMoban_show_one" >
    <ul id="mb44">
     
    </ul>
  </div>
  <!-- 手机 end -->
</div>
<!-- 显示列表 end-->
<!-- 精品模版展示end -->
</div>
<script type="text/javascript">
function Dcheck() {
if(Dd('username').value == '') {
Maya.MessageBox("请输入 <strong>登录名称</strong> ");
Dd('username').focus();
return false;
}
if(Dd('password').value == '') {
Maya.MessageBox("请输入 <strong>密码</strong> ");
Dd('password').focus();
return false;
}
Login.submit();
}
</script>
<?php include template('footer');?>
</body>
</html>
