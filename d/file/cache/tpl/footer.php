<?php defined('IN_DESTOON') or exit('Access Denied');?><link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>New_Index.css"/>
<script charset="utf-8" src="http://wpa.b.qq.com/cgi/wpa.php"></script> 
<script>
BizQQWPA.addCustom(
{aty: '2', 
  a: '2',
  nameAccount: 4006515550,
   selector: 'shouqian'}
 );
BizQQWPA.addCustom(
{aty: '2',
 a: '4',
 nameAccount: 4006515550,
  selector: 'shouhou'});
</script>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>zaixiankefu.css"/>
<div class="New_foot_Box">
<div class="New_foot">
  <div class="New_foot_nav">
    <div class="New_foot_nav_tc">
      <span>公司信息</span>
      <ul>
        <li><a href="<?php echo $CFG['url'];?>about/index.html">关于我们</a></li>
        <li><a href="">设计与开发团队</a></li>
        <li><a href="">最新公告</a></li>
        <li><a href="<?php echo $CFG['url'];?>about/contact.html">联系地址</a></li>
      </ul>
    </div>
    <div class="New_foot_nav_tc2">
      <span>定制项目套餐</span>
      <ul>
        <li><a href="">企业展示网站建设</a></li>
        <li><a href="">企业品牌网站建设</a></li>
        <li><a href="">企业营销网站建设</a></li>
        <li><a href="">LOGO设计</a></li>
      </ul>
    </div>
    <div class="New_foot_nav_tc3">
      <span>模版网站分类</span>
      <ul>
        <li><a href="">企业模版网站</a></li>
        <li><a href="">商城模版网站</a></li>
        <li><a href="">全FLash模版网站</a></li>
        <li><a href="">手机模版网站</a></li>
      </ul>
    </div>
    <div class="New_foot_nav_tc4">
      <span>定制建站流程</span>
      <ul>
        <li><a href="">首页面设计</a></li>
        <li><a href="">栏目页及内页设计</a></li>
        <li><a href="">程序开发</a></li>
        <li><a href="">站点上线</a></li>
      </ul>
    </div>
    <div class="New_foot_nav_tc5">
      <span>帮助中心</span>
      <ul>
        <li><a href="">常见问题</a></li>
        <li><a href="">公开课</a></li>
        <li><a href="">付款方式</a></li>
        <li><a href="<?php echo $CFG['url'];?>about/copyright.html">隐私说明</a></li>
      </ul>
    </div>
    <div class="New_foot_nav_tc6">
      <span>上海摩恩网络科技有限公司</span>
      <ul>
        <li>全国热线服务电话：</li>
        <li><a href=""><i>400-651-5550</i></a></li>
        <li><a href="">邮箱：kefu@omoooo.com</a></li>
        <li><a href="">企业QQ:4006515550</a></li>
      </ul>
    </div>
  </div>
  <div class="New_foot_cop">
    <div class="New_foot_cop_u">
        <ul>
          <li><a href="<?php echo $CFG['url'];?>about/index.html">关于摩恩</a>  |  </li>
          <li><a href="">摩恩博客</a>  |  </li>
          <li><a href="">人才招聘</a>  |  </li>
          <li><a href="<?php echo $CFG['url'];?>about/agreement.html">使用条款</a>  |  </li>
          <li><a href="<?php echo $CFG['url'];?>about/copyright.html">隐私政策</a>  |  </li>
          <li><a href="">法律申明</a>  |  </li>
          <li><a href="">网站导航</a>  |  </li>
          <li><a href="">站长统计</a>  |  </li>
          <li>最佳分辨率：1024 * 786 </li>
        </ul>
    </div>
    <div class="New_foot_cop_info clear">
      <p><i>Copyright 2003-2014 OMOOO.ALL Rights Reserved. </i>上海摩恩网络科技有限公司 版权所有</p>
      <p><a href="">沪ICP备07024853号</a></p>
    </div>
    <div class="New_foot_cop_link">
      <p><a href="#"><img src="<?php echo DT_SKIN;?>/image/pic_01.gif" width="111" height="40"></a><a href="#"><img src="<?php echo DT_SKIN;?>/image/pic_02.gif" width="44" height="40"></a><a href="#"><img src="<?php echo DT_SKIN;?>/image/pic_03.gif" width="45" height="40"></a><a href="#"><img src="<?php echo DT_SKIN;?>/image/pic_04.gif" width="45" height="40"></a><a href="#"><img src="<?php echo DT_SKIN;?>/image/pic_05.gif" width="38" height="40"></a><a href="#"><img src="<?php echo DT_SKIN;?>/image/pic_06.gif" width="36" height="40"></a><a href="#"><img src="<?php echo DT_SKIN;?>/image/pic_07.gif" width="90" height="40"></a></p>
    </div>
  </div>
</div>
</div>
<!-- footer页面结束 -->
<div class="kefutool_wrap" >
   <div class="kefutool_wrap1" id="shouqian"> 
      <a href=""></a>
   </div>
   <div class="kefutool_wrap2" id="shouhou">
     <a href=""></a>
   </div>
   <div class="kefutool_wrap3">
     <a href=""></a>
   </div>
    
  </div>
  <!-- 浮动工具 在线客服 end--> 
   
 
<script>
$(function(){
        //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
    
            $(window).scroll(function(){
            
                if ($(window).scrollTop()>100){
                    $(".kefutool_wrap3").fadeIn(1500);
                }
                else
                {
                    $(".kefutool_wrap3").fadeOut(1500);
                }
            });
            //当点击跳转链接后，回到页面顶部位置
            $(".kefutool_wrap3").click(function(){
                $('body,html').animate({scrollTop:0},1000);
                return false;
            });
    
    });
</script>
<script type="text/javascript">
<?php if($destoon_task) { ?>
show_task('<?php echo $destoon_task;?>');
<?php } else { ?>
<?php include DT_ROOT.'/api/task.inc.php';?>
<?php } ?>
<?php if($lazy) { ?>$(function(){$("img").lazyload();});<?php } ?>
</script>
<div  id="foot_za" style="display:none;background:#000;filter:alpha(opacity=10);opacity:.1;left:0px;top:0px;position:fixed;height:100%;width:100%;overflow:hidden;z-index:10000;"></div>
</body>
</html>