<?php defined('IN_DESTOON') or exit('Access Denied');?><!-- 注册登录找回密码尾部 -->
<div class="NeLoFooter clear">
  <div class="NeLoFooter_cont">
    
      <ul>
        <li><a href="">网页首页</a> | &nbsp;</li>
        <li><a href="<?php echo $CFG['url'];?>about/index.html">关于我们</a> | &nbsp;</li>
        <li><a href="">诚聘英才</a> | &nbsp;</li>
        <li><a href="<?php echo $CFG['url'];?>about/contact.html">联系方式</a> | &nbsp;</li>
        <li><a href="">法律声明</a> | &nbsp;</li>
        <li><a href="<?php echo $CFG['url'];?>about/copyright.html">隐私政策</a> | &nbsp;</li>
        <li><a href="<?php echo $CFG['url'];?>sitemap/">网站地图</a> | &nbsp;</li>
        <li><a href="<?php echo $CFG['url'];?>guestbook/">网站留言</a> | &nbsp;</li>
        <li><a href="<?php echo $CFG['url'];?>ad/">广告服务</a> | &nbsp;</li>
        <li><a href="<?php echo $CFG['url'];?>gift/">积分换礼</a> | &nbsp;</li>
        <li><a href="<?php echo $CFG['url'];?>feed/">RSS订阅</a> | &nbsp;</li>
        <li><a href="">沪ICP备07024853号</a></li>
      </ul>
    
    <p class="clear"><i>©2006-2013  OMOOO.COM All Rights Reserved</i>  <a href="">网站统计</a></p>
    <p>上海摩恩网络科技有限公司   版权所有</p>
  </div>
  <div class="New_foot_cop_link">
      <p>
      <a href="#"><img src="<?php echo DT_SKIN;?>/image/pic_01.gif" width="111" height="40"></a>
      <a href="#"><img src="<?php echo DT_SKIN;?>/image/pic_02.gif" width="44" height="40"></a>
      <a href="#"><img src="<?php echo DT_SKIN;?>/image/pic_03.gif" width="45" height="40"></a>
      <a href="#"><img src="<?php echo DT_SKIN;?>/image/pic_04.gif" width="45" height="40"></a>
      <a href="#"><img src="<?php echo DT_SKIN;?>/image/pic_05.gif" width="38" height="40"></a>
      <a href="#"><img src="<?php echo DT_SKIN;?>/image/pic_06.gif" width="36" height="40"></a>
      <a href="#"><img src="<?php echo DT_SKIN;?>/image/pic_07.gif" width="90" height="40"></a>
      </p>
    </div>
</div>
<!-- footer页面结束 -->
<script type="text/javascript">
<?php if($destoon_task) { ?>
show_task('<?php echo $destoon_task;?>');
<?php } else { ?>
<?php include DT_ROOT.'/api/task.inc.php';?>
<?php } ?>
<?php if($lazy) { ?>$(function(){$("img").lazyload();});<?php } ?>
</script>
<div  id="foot_za" style="display:none;background:#000;filter:alpha(opacity=40);opacity:.4;left:0px;top:0px;position:fixed;height:100%;width:100%;overflow:hidden;z-index:10000;"></div>
</body>
</html>