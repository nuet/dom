<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header_mb');?>
<script>
//详情内容导航浮动
//黄色模版最新企业站模版切换
$(document).ready(function(){
  $('.InAnL_title_list li').click(function(){

  if(this.id){
  
  n=this.id;
  for(t=41;t<=46;t++){
      if (t!=n){
      var m=$("#mb"+t+"");
      m.html('');
      }else{
      m=$("#mb"+n+"");
      m.html('');
      i=0;
      loadMore(n);
      }
      
       }
          }
        
  })
loadMore(41); 
}); 
var i=0;
function loadMore(n)
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
               
             
                $item = $('<li><div class="Index_Moban_zs_img"><a href="<?php echo $CFG['url'];?>group/'+oProduct.linkurl+'" target="_blank"><img src="'+oProduct.thumb+'" class="pimg" alt=""></a><div class="MobanBlack"><span class="Left"> <a href="<?php echo $CFG['url'];?>group/'+oProduct.linkurl+'" target="_blank" title>查看详情</a></span><span class="Right"><a href="'+oProduct.url+'" target="_blank">浏览网站</a></span></div></div><div class="GoSM">名称：'+oProduct.title+'</div><div class="JzTc">行业：'+oProduct.catname+'</div></li>').hide();
                //$item = $('<li><div class="Index_Moban_zs_img"><a href=""><img src="<?php echo DT_SKIN;?>/image/Index_Anli_show1.fw.png" alt=""></a> <div class="MobanBlack"><span class="Left"><a href="" title>查看详情</a></span><span class="Right"><a href="">浏览网站</a></span></div> </div><div class="GoSM">名称：上海科技创新有限公司</div><div class="JzTc">行业：展示站1套餐</div></li>').hide();
                $row.append($item);
                $('#mb'+n+' li').hover(function(){
                    
                
                      $(this).css("-moz-box-shadow","0px 0px 10px #909090");
                      $(this).find('div div').css('display','block');
                      $(this).find('div img').css('filter','alpha(optacity=70)');
                      $(this).find('div img').css('opacity','0.7');
            },function(){
                  
                    $(this).find('div div').css('display','none');
                    $(this).find('div img').css('opacity','1');
                   $(this).find('div img').css('filter','alpha(opacity=100)');
                 
                 
               }); 
                $item.fadeIn();
            }
        }else{
        //Maya.MessageBox("已加载 <strong>全部</strong> ");
        }
    }
});
}
$(document).ready(function(){
  $('.MoBan_yZNew_title_list li').click(function(){

  if(this.id){
  
  n=this.id;
  for(t=41;t<=46;t++){
      if (t!=n){
      var m=$("#last"+t+"");
      m.html('');
      }else{
      m=$("#last"+n+"");
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
url : '<?php echo $CFG['url'];?>data2.php?n='+n+'&level=2',
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
          
            $('#last'+n+'').each(function(){
            
                iTempHeight = Number( $(this).height() );
                if(iHeight==-1 || iHeight>iTempHeight)
                {
                    iHeight = iTempHeight;
                    $row = $(this);
                }
            });
           
         
            $item = $('<li><div class="Index_Moban_zs_img"><a href="<?php echo $CFG['url'];?>group/'+oProduct.linkurl+'" target="_blank"><img src="'+oProduct.thumb+'" class="pimg"alt=""></a><div class="MobanBlack"><span class="Left"> <a href="<?php echo $CFG['url'];?>group/'+oProduct.linkurl+'" target="_blank" title>查看详情</a></span><span class="Right"><a href="'+oProduct.url+'" target="_blank">浏览网站</a></span></div></div><div class="GoSM">名称：'+oProduct.title+'</div><div class="JzTc">行业：'+oProduct.catname+'</div></li>').hide();
            //$item = $('<li><div class="Index_Moban_zs_img"><a href=""><img src="<?php echo DT_SKIN;?>/image/Index_Anli_show1.fw.png" alt=""></a> <div class="MobanBlack"><span class="Left"><a href="" title>查看详情</a></span><span class="Right"><a href="">浏览网站</a></span></div> </div><div class="GoSM">名称：上海科技创新有限公司</div><div class="JzTc">行业：展示站1套餐</div></li>').hide();
            $row.append($item);
            $('#last'+n+' li').hover(function(){
                
             
                  $(this).css("-moz-box-shadow","0px 0px 10px #909090");
                  $(this).find('div div').css('display','block');
                  $(this).find('div img').css('filter','alpha(optacity=70)');
                  $(this).find('div img').css('opacity','0.7');
        },function(){
          
                $(this).find('div div').css('display','none');
                $(this).find('div img').css('opacity','1');
               $(this).find('div img').css('filter','alpha(opacity=100)');
             
             
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
  <div class="MoBan_yBn">
    
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
" style='padding-top:0px;'width="16" height="16" title="<?php if($user['vcompany']) { ?>已通过<?php } else { ?>未通过<?php } ?>
设计师认证" align="absmiddle"/><?php if($user['vcompany']) { ?><img src="<?php echo DT_SKIN;?>image/vip_<?php echo $user['vip'];?>.gif" style='padding-top: 0px;'/><?php } else { ?> <a href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/validate.php?action=company" style='text-decoration: underline;'>认证</a> &nbsp; <?php } ?>

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
</div>
<!-- banner结束 -->
<div class="MoBan_y_Nert">
  <div class="MoBan_y_Nert_1"><?php echo ad(23);?></div>
  <div class="MoBan_y_Nert_1"><?php echo ad(22);?></div>
  <div class="MoBan_y_Nert_1"><?php echo ad(21);?></div>
  <div class="MoBan_y_Nert_1"><?php echo ad(20);?></div>
</div>
<!-- 黄色模版首页结束 -->
<!-- 最新模版显示 -->
<div class="MoBan_yZNew">
  <div class="MoBan_yZNew_title">
    <ul class="MoBan_yZNew_title_list" id="asass">
      <li class="on" id="41">最新企业模版</li>
      <li id="42">最新商城网站</li>
      <li id="43">最新Flash网站</li>
      <li id="44">最新手机网站</li>
    </ul>
  </div>
  <div class="MoBan_yZNew_wrap">
    <div class="MoBan_yZNew_pro show">
    <!-- 企业站最新模版 -->
     
        <div class="MoBan_yZNew_NQ" >
        <a class="sPrev1" href="javascript:void(0)"><span></span></a>
        <a class="sNext1" href="javascript:void(0)"><span></span></a>
        <div class="MoBan_yZNew_NQ_lin" id="MoBan_yZNew_NQ_lin1">
          <ul  id="last41">
             
               
              </ul>
              </div>
        </div>
      <!-- 企业站最新模版结束 -->
    </div>
   
    <div class="MoBan_yZNew_pro">
    
       <div class="MoBan_yZNew_NQ">
          <a class="sPrev2" href="javascript:void(0)"><span></span></a>
        <a class="sNext2" href="javascript:void(0)"><span></span></a>
        <div class="MoBan_yZNew_NQ_lin" id="MoBan_yZNew_NQ_lin2">
          <ul  id="last42">
           
               
                
                
                 
              </ul>
              </div>
        </div>
    
    </div>
      <!-- 新品插件结束 -->
      <!-- 电商周边 -->
      <div class="MoBan_yZNew_pro">
    
       <div class="MoBan_yZNew_NQ">
          <a class="sPrev3" href="javascript:void(0)"><span></span></a>
        <a class="sNext3" href="javascript:void(0)"><span></span></a>
        <div class="MoBan_yZNew_NQ_lin" id="MoBan_yZNew_NQ_lin3">
          <ul id="last43" >
               
               
               
               
                
                
                 
              </ul>
              </div>
        </div>
    
      </div>
      <!-- 电商周边结束 -->
      <!-- 手机客户端 -->
      <div class="MoBan_yZNew_pro">
    
       <div class="MoBan_yZNew_NQ">
          <a class="sPrev4" href="javascript:void(0)"><span></span></a>
        <a class="sNext4" href="javascript:void(0)"><span></span></a>
        <div class="MoBan_yZNew_NQ_lin" id="MoBan_yZNew_NQ_lin4">
          <ul id="last44">
               
                
                
               
                
                
                 
              </ul>
              </div>
        </div>
    
      </div>
      <!-- 手机客户端结束 -->
  </div>
</div>
<!-- 最新模版显示结束 -->
<!-- 模版广告2 -->
<div class="MoBan_yGG2">
 <?php echo ad(18);?>
</div>
<!-- 模版广告2结束 -->
<!-- 精品网站模版展示 -->
<div class="MoBan_JPN">
<div class="Index_Moban_Show" id="Index_Anli_Show">
  <div class="InAnL_title cf">
    <span>精品模版展示</span>
      <ul class="InAnL_title_list cf Blue_mo">
        <li class="on" id="41">企业形象网站</li>
        <li id="42">商城网站</li>
        <li id="43">全Flash网站</li>
        <li id="44">手机网站</li>              
      </ul>
      <p><a href="">查看更多</a></p>
    </div>
    <div class="Index_Anli_wrap clear">
        <div class="Index_Anli_pro show">
            <div class="Index_Anli_zs">
              <ul id="mb41">
              
                 
              </ul>
            </div>
        </div>
        <!-- 企业形象网站设结束 -->
        <!-- 商城网站 -->
        <div class="Index_Anli_pro">
              <div class="Index_Anli_zs">
              <ul id="mb42">
               
                 
              </ul>
            </div>
        </div>
        <!-- 商城网站结束 -->
        <!-- 全Flash网站 -->
        <div class="Index_Anli_pro">
              <div class="Index_Anli_zs">
              <ul id="mb43">
              
              
                 
              </ul>
            </div>
        </div>
        <!-- 全Flash网站 -->
        <!-- 手机网站 -->
        <div class="Index_Anli_pro">
              <div class="Index_Anli_zs">
              <ul id="mb44">
              
              
               
              </ul>
            </div>
        </div>
        <!-- 手机网站结束 -->
    </div>
</div>
</div> 
</div>
<script type="text/javascript">
      function scroll(box,left,right,img,speed,or)
   { 
    var box = $(box);
    var left = $(left);
    var right = $(right);
    var img = $(img).find('ul');
    var w = img.find('li').outerWidth(true);
    var s = speed;
 
    left.click(function()
       {
      img.animate({'margin-left':-w},function()
            {
          
             img.find('li').eq(0).appendTo(img);
             img.css({'margin-left':0});
             });
      });
    right.click(function()
       {
      img.find('li:last').prependTo(img);
      img.css({'margin-left':-w});
      img.animate({'margin-left':0});
      });
    if (or == true)
    {
     ad = setInterval(function() { right.click();},s*1000);
     box.hover(function(){clearInterval(ad);},function(){ad = setInterval(function() { right.click();},s*1000);});
    }
   }
      scroll(".MoBan_yZNew_pro",".sNext1",".sPrev1","#MoBan_yZNew_NQ_lin1",100,true);
      scroll(".MoBan_yZNew_pro",".sNext2",".sPrev2","#MoBan_yZNew_NQ_lin2",100,true);
      scroll(".MoBan_yZNew_pro",".sNext3",".sPrev3","#MoBan_yZNew_NQ_lin3",100,true);
      scroll(".MoBan_yZNew_pro",".sNext4",".sPrev4","#MoBan_yZNew_NQ_lin4",100,true);
    </script>
<!-- 精品网站结束 -->
<?php include template('footer');?>